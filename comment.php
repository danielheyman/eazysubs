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
	$date = $row['date4']; 
	$HourlyComments = $row['hourlyComments']; 
    $refferal = $row['refferal']; 
    $accountType = $row['accountType']; 
$currentDate = date("Y-m-j H:i:s");
if($HourlyComments > 3 and dateDiff($currentDate, $date) != 'true')
{
?>
<script type="text/javascript">
theLocation = 'comment4comment.php';
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
$input = array("Sweet Video!", "Awesome you should make more dude!", "You are very talented", "You deserve 2 thumbs up.", "Best video I seen today.", "This is brilliant!!!", "Keep them coming dude.", "Love your videos dude.", "Your good at making videos.", "Great stuff man.", "This is so good.", "Dude imma favorite this.", "Cool Video!", "Thumbs up if your cool","High quality!","I am hapy for you about this video!","You sir are skilled","Woah i subbed!","When is you next video coming out?","I wish more people saw this!");
$rand_keys = array_rand($input);
$commentMessage = $input[$rand_keys];
$success = false;
if(comment($video, $commentMessage))
{
$success = true;
}

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
$query = "update user set credits4 = credits4 + $gainPoints, commentsMade = commentsMade + 1 where username='$username'";
    mysql_query ($query) or die ('Error adding credit #1');

if($success)
{
$query = "update user set credits4 = credits4 - 1.2, commentsGot = commentsGot + 1 where username='$channelUserName'";
    mysql_query ($query) or die ('Error adding credit #2');

$query = "update info set totalComments = totalComments + 1 where ID = '1'";
     mysql_query ($query) or die ('Error adding credit #3');
}


$query = "insert into commented (userid, video) values ('$userid', '$video')";
     mysql_query ($query) or die ('Error adding credit #4');

if(dateDiff($currentDate, $date) != 'true')
{
$query = "update user set hourlyComments = hourlyComments + 1 where username='$username'";
     mysql_query ($query) or die ('Error adding credit #5');
}
else
{
$query = "update user set date4 = '$currentDate', hourlyComments = 1 where username='$username'";
     mysql_query ($query) or die ('Error adding credit #6');
}
if($refferal != '')
{
    $query = "update user set credits4 = credits4 + $gainRefPoints, commentRefPoints = commentRefPoints + $gainRefPoints  where username='$refferal'";
    mysql_query ($query) or die ('Error adding credit #7');
}
?>

