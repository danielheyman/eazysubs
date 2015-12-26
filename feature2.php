<?php
$current = $_SERVER['PHP_SELF'];
if($current == '/feature2.php')
{
?>
<script type='text/javascript'>
window.location = 'featured.php';
</script>
<?php
}
include 'init.php';
$username = $_SESSION['username'];
$userid = $_SESSION['userid'];
$query = "select * from user where username='$username'";
     $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
	$viewVideo = $row['temp']; 
    $refferal = $row['refferal']; 
    $accountType = $row['accountType']; 
    $section = $row['section']; 
    $temp = $row['temp2']; 
$query = "select * from featured WHERE userid = '$userid' and featureID = '$temp'";
     $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
	$date = $row['date']; 
$currentDate = date("Y-m-j H:i:s");

if($accountType == 'Premium')
{
$gainPoints = 3;
}
else
{
$gainPoints = 2;
}

$query = "update user set $section = $section + $gainPoints where username='$username'";
mysql_query($query) or die('Error 1'); 

if($temp != '')
{
if(!mysql_num_rows(mysql_query("SELECT id FROM featured WHERE userid = '$userid' and featureID = '$temp'")))
{
$query = "insert into featured (userid, featureID, date) values ('$userid', '$temp', '$currentDate')";
     mysql_query ($query) or die('Error 2');
     }
     else{
     
     if(dateDiff3($currentDate, $date, 1) != 'true')
{
     $query = "update featured set dailyViews = dailyViews + 1 WHERE userid = '$userid' and featureID = '$temp'";
mysql_query($query) or die('Error 3'); 
     
     }
     else
     {
     $query = "update featured set dailyViews = 0, date = '$currentDate' WHERE userid = '$userid' and featureID = '$temp'";
mysql_query($query) or die('Error 4'); 
     
     }
}
}
?>
