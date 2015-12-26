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
	$date = $row['date6']; 
	$HourlySubs = $row['hourlyFriends']; 
$currentDate = date("Y-m-j H:i:s");
if($HourlySubs > 9 and dateDiff($currentDate, $date) != 'true')
{
?>
<script type="text/javascript">
theLocation = 'friends.php';
window.top.location.href=theLocation;
window.parent.location.href=theLocation;
window.top.location.replace(theLocation);
</script>
<?php
exit;
}

$channel = $_GET["channel"]; 
$channelUserName = $_GET["cun"];
$success = false;
If(friend($channel))
{
$success = true;
}

$userid = $_SESSION['userid'];


$query = "update user set friendsMade = friendsMade + 1 where username='$username'";
    mysql_query ($query) or die ('Error adding credit #1');

if($success)
{
$query = "update user set friendsGot = friendsGot + 1 where username='$channelUserName'";
    mysql_query ($query) or die ('Error adding credit #2');

$query = "update info set totalFriends = totalFriends + 1 where ID = '1'";
     mysql_query ($query) or die ('Error adding credit #3');
}


$query = "insert into friends (userid, channel) values ('$userid', '$channel')";
     mysql_query ($query) or die ('Error adding credit #4');


if(dateDiff($currentDate, $date) != 'true')
{
$query = "update user set hourlyFriends = hourlyFriends + 1 where username='$username'";
     mysql_query ($query) or die ('Error adding credit #5');
}
else
{
$query = "update user set date6 = '$currentDate', hourlyFriends = 1 where username='$username'";
     mysql_query ($query) or die ('Error adding credit #6');
}
?>

