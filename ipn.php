<?php
include 'init.php';
$sandbox = false;
$ssl = true;

// Set end-point based on sandbox value
if($sandbox)
    $ppHost = "www.sandbox.paypal.com";
else
    $ppHost = "www.paypal.com";
   
// read the post from PayPal system and add 'cmd'
$req = 'cmd=_notify-validate';

// Store each $_POST value in a NVP string: 1 string encoded and 1 string decoded
foreach ($_POST as $key => $value)
{
    $value = urlencode(stripslashes($value));
    $req .= "&" . $key . "=" . $value;
    $IPNDecoded .= $key . " = " . urldecode($value) ."\n\n";
}

// post back to PayPal system to validate using SSL or not based on flag set above.
if($ssl)
{
    $header = '';
    $header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
    $header .= "Host: " . $ppHost . ":443\r\n";
    $header .= "Content-Type: application/x-www-form-urlencoded\r\n";
    $header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
    $fp = fsockopen ('ssl://' . $ppHost, 443, $errno, $errstr, 30);
}
else
{
    $header = '';
    $header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
    $header .= "Host: " . $ppHost . ":80\r\n";
    $header .= "Content-Type: application/x-www-form-urlencoded\r\n";
    $header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
    $fp = fsockopen ($ppHost, 80, $errno, $errstr, 30);
}

// assign posted variables to local variables
$payer_email = $_POST['payer_email'];
$txn_id = $_POST['txn_id'];
$receiver_email = $_POST['receiver_email'];
$payment_status = $_POST['payment_status'];
$payment_date = $_POST['payment_date'];
$currentDate = date("Y-m-j H:i:s");
$username= $_POST['custom'];
list($paymentNumber, $random, $payment_amount, $item_id) = split('[,]', $_POST['invoice']);
if (!$fp) {
// HTTP ERROR
} else {
fputs ($fp, $header . $req);
while (!feof($fp)) {
$res = fgets ($fp, 1024);
if (strcmp ($res, "VERIFIED") == 0) {
     if(!mysql_num_rows(mysql_query("SELECT id FROM payments WHERE txn_id = '$txn_id' and payment_status = 'Completed'"))){
     if(mysql_num_rows(mysql_query("SELECT id FROM payments WHERE username = '$username' and random = '$random'")) > 0)
     {
     if($payment_status == 'Completed')
     {
     if($payment_amount == '5' and $item_id == '1')
     {
     $query = "update user set accountType = 'Premium', accountTypeDate = '$currentDate', credits = credits + 100, credits2 = credits2 + 100, credits3 = credits3 + 100, credits5 = credits5 + 100 where username = '$username'";
     mysql_query ($query);
     }
     elseif($payment_amount == '5' and $item_id == '2')
     {
     $query = "insert into features (username, date, enabled, type) values ('$username', '$currentDate', 'true', 'top')";
     mysql_query ($query);
     }
     else
     {
     $payment_status = 'manual #4';
     }
     }
     }
     else
     {
     $payment_status = 'manual #1';
     }
     }
     else
     {
     $payment_status = 'manual #2';
     }
     $query = "update payments set payer_email = '$payer_email',receiver_email = '$receiver_email',txn_id = '$txn_id',payment_amount = '$payment_amount',item_name = '$item_id',payment_status = '$payment_status',payment_date = '$payment_date' where username = '$username' and paymentNumber = '$paymentNumber'";
     mysql_query ($query);
}
else if (strcmp ($res, "INVALID") == 0) {
$payment_status = 'manual #3';
$query = "update payments set payer_email = '$payer_email',receiver_email = '$receiver_email',txn_id = '$txn_id',payment_amount = '$payment_amount',item_name = '$item_id',payment_status = '$payment_status',payment_date = '$payment_date' where username = '$username' and paymentNumber = '$paymentNumber'";
     mysql_query ($query);
}
}
fclose ($fp);
}
?>