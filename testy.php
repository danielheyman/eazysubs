<?php
include 'init.php';
$query = "select * from user where username='rcredbaron'";
     $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
     $subPointsOffer = $row['subPointsOffer'] - 1;
echo $subPointsOffer;
$accountType = 'dfsdf';
if($accountType == 'Premium')
{
$gainPoints = $subPointsOffer * 2;
$gainRefPoints = $subPointsOffer * 0.2;
}
else
{
$gainPoints = $subPointsOffer * 1;
$gainRefPoints = $subPointsOffer * 0.1;
}
echo $gainPoints;
$query = "update user set credits = credits + $gainPoints, subsMade = subsMade + 1 where username='robby'";
    mysql_query ($query) or die ('Error adding credit #1');
?>