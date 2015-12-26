<?php
include 'init.php';
$userid = $_SESSION['userid'];
$useridGot = $_POST['uid'];

$query = "select refferal, accountType from user where userid='$userid' limit 1";
    $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
    $refferal = $row['refferal']; 
    $accountType = $row['accountType'];

if($accountType == 'Premium')
{
$gainPoints = 2;
$gainRefPoints = 0.2;
}
else
{
$gainPoints = 1;
$gainRefPoints = 0.1;
}

$query = "update user set credits2 = credits2 + $gainPoints where userid='$userid'";
mysql_query($query); 

$query = "update user set credits2 = credits2 - 1.2, viewsGot = viewsGot + 1 where userid='$useridGot'";
mysql_query($query); 

$query = "update info set totalChannelViews = totalChannelViews + 1 where ID = '1'";
     mysql_query ($query) or die ('Error adding credit #3');
     
if($refferal != '')
{
    $query = "update user set credits2 = credits2 + $gainRefPoints, viewRefPoints = viewRefPoints + $gainRefPoints  where username='$refferal'";
    mysql_query ($query) or die ('Error adding credit #7');
}
?>
successful