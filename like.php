<?php
include 'init.php';
if (!is_authed()) 
{
    	die ('You are not permitted to view this page, <a href="login.php">click here</a> to go back.');
}
$username = $_SESSION['username'];
$query = "select * from user where username='$username'";
     $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
     $token = $row['token'];
	$date = $row['date3']; 
	$HourlyLikes = $row['hourlyLikes']; 
    $refferal = $row['refferal']; 
    $accountType = $row['accountType']; 
$currentDate = date("Y-m-j H:i:s");
if($HourlyLikes > 29 and dateDiff($currentDate, $date) != 'true')
{
?>
<script type="text/javascript">
theLocation = 'like4like.php';
window.top.location.href=theLocation;
window.parent.location.href=theLocation;
window.top.location.replace(theLocation);
</script>
<?php
exit;
}

$channel = $_GET["channel"]; 
$channelUserName = $_GET["cun"]; 
$video = $_GET["vid"]; 
$success = false;
try{
if(like($video))
{
$success = true;
}
}
catch(Exception $e){}

$userid = $_SESSION['userid'];

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

$query = "update user set credits3 = credits3 + $gainPoints, likesMade = likesMade + 1 where username='$username'";
    mysql_query ($query) or die ('Error adding credit #1');

if($success)
{
$query = "update user set credits3 = credits3 - 1.2, likesGot = likesGot + 1 where username='$channelUserName'";
    mysql_query ($query) or die ('Error adding credit #2');

$query = "update info set totalLikes = totalLikes + 1 where ID = '1'";
     mysql_query ($query) or die ('Error adding credit #3');
}


$query = "insert into liked (userid, video) values ('$userid', '$video')";
     mysql_query ($query) or die ('Error adding credit #4');

if(dateDiff($currentDate, $date) != 'true')
{
$query = "update user set hourlyLikes = hourlyLikes + 1 where username='$username'";
     mysql_query ($query) or die ('Error adding credit #5');
}
else
{
$query = "update user set date3 = '$currentDate', hourlyLikes = 1 where username='$username'";
     mysql_query ($query) or die ('Error adding credit #6');
}
if($refferal != '')
{
    $query = "update user set credits3 = credits3 + $gainRefPoints, likeRefPoints = likeRefPoints + $gainRefPoints  where username='$refferal'";
    mysql_query ($query) or die ('Error adding credit #7');
}
?>

