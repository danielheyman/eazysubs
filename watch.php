<?php
include 'init.php';
$username = $_SESSION['username'];
$useridGot = $_POST['uid'];
$query = "select refferal, accountType from user where username='$username'";
     $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
    $accountType = $row['accountType']; 
    $refferal = $row['refferal']; 

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

$query = "update user set credits5 = credits5 + $gainPoints, watchesMade = watchesMade + 1 where username='$username'";
mysql_query($query); 

$query = "update user set credits5 = credits5 - 1.2, watchesGot = watchesGot + 1 where userid='$useridGot'";
mysql_query($query); 

$query = "update info set totalWatches = totalWatches + 1 where ID = '1'";
     mysql_query ($query) or die ('Error adding credit #3');


if($refferal != '')
{
    $query = "update user set credits5 = credits5 + $gainRefPoints, viewRefPoints = viewRefPoints + $gainRefPoints  where username='$refferal'";
    mysql_query ($query) or die ('Error adding credit #7');
}
?>
successful