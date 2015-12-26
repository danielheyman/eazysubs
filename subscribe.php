<?php
include 'init.php';
if (!is_authed()) 
{
echo "limit";
exit;
}
$channel = $_POST['channel']; //$channel = $_GET["channel"]; 
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
if(!mysql_num_rows(mysql_query("SELECT id FROM subbed WHERE userid = '$userid' and channel = '$channel'"))){
$query = "select token, date, HourlySubs, refferal, accountType from user where username='$username'";
     $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
     $token = $row['token'];
	$date = $row['date']; 
	$HourlySubs = $row['hourlySubs']; 
    $refferal = $row['refferal']; 
    $accountType = $row['accountType']; 
$currentDate = date("Y-m-j H:i:s");
if($HourlySubs > 34 and dateDiff($currentDate, $date) != 'true')
{
echo "limit";
exit;
}

$channelUserName = $_POST['cun']; //$channelUserName = $_GET["cun"];
$success = false;
$query = "select subPointsOffer from user where username='$channelUserName'";
     $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
     $subPointsOffer = $row['subPointsOffer'] - 1;
If(sub($channel))
{
$success = true;
}

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

$query = "update user set credits = credits + $gainPoints, subsMade = subsMade + 1 where username='$username'";
    mysql_query ($query) or die ('Error adding credit #1');

$query = "update info set totalSubs = totalSubs + 1 where ID = '1'";
     mysql_query ($query) or die ('Error adding credit #3');

if($success)
{
$query = "update user set credits = credits - subPointsOffer, subsGot = subsGot + 1 where username='$channelUserName'";
    mysql_query ($query) or die ('Error adding credit #2');
}


$query = "insert into subbed (userid, channel) values ('$userid', '$channel')";
     mysql_query ($query) or die ('Error adding credit #4');


if(dateDiff($currentDate, $date) != 'true')
{
$query = "update user set hourlySubs = hourlySubs + 1 where username='$username'";
     mysql_query ($query) or die ('Error adding credit #5');
}
else
{
$query = "update user set date = '$currentDate', hourlySubs = 1 where username='$username'";
     mysql_query ($query) or die ('Error adding credit #6');
}
if($refferal != '')
{
    $query = "update user set credits = credits + $gainRefPoints, subRefPoints = subRefPoints + $gainRefPoints  where username='$refferal'";
    mysql_query ($query) or die ('Error adding credit #7');
}
}
?>

