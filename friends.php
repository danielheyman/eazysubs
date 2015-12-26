<?php
include 'init.php';
if (!is_authed()) 
{
?>
<script type='text/javascript'>
window.location = 'index.php';
</script>
<?php
}
if(isset($_GET['f'])){
$f = $_GET["f"]; 
}
$username = $_SESSION['username'];
$uderid = $_SESSION['userid'];
    include 'info.php';
    ?>


    <div style="text-align:center;" id="content">
        <script type="text/javascript"><!--
google_ad_client = "ca-pub-3211239174124719";
/* EazySubs5 */
google_ad_slot = "1427335481";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
        <?php
        if(isset($_GET['f'])){
$f = $_GET["f"]; 
if($f == 'lk')
{
?>
<script type="text/javascript">
setTimeout("alert('Thank you for linking your account, you may now start subbing.')",500);
</script>
<?php
}
}

$query = "select * from user where username='$username'";
     $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
     $token = $row['token'];
	$date = $row['date6']; 
	$HourlyFriends = $row['hourlyFriends']; 
$uderid = $_SESSION['userid'];
$youtubeUserName = $_SESSION['youtubeUserName'];
?>
<img src='images/friends.png'><br/>
    <img src='images/howItWorks6.png'><img style="margin-left:50px;" src='images/remember6.png'>
<?
        if($token == "none")
{
?>
<script type='text/javascript'>
window.location = 'settings.php?f=lk';
</script>
<?php
}
$error = false;
$currentDate = date("Y-m-j H:i:s");
if($HourlyFriends > 9 and dateDiff($currentDate, $date) != 'true')
{
?>
        <br>
Your Youtube friending limit is up, please try again in 1 hour.<br>
To comply with Youtube rules and regulations, there is a 10 consecutive friend limit.<br>
We will continue working on making EazySubs the best method of friending on the internet.<br>
<?php
$error = true;
}
if(!$error)
{
$totalfriends = 0;
$numberoffriends = 0;
$result = mysql_query( "SELECT youtubeUserName, username
FROM user
WHERE youtubeUserName != '$youtubeUserName'
  AND token != 'none'
  AND youtubeUserName NOT IN (SELECT DISTINCT channel
                         FROM friends
                         WHERE userid = $uderid) order by Rand()") or die("SELECT Error: ".mysql_error());
echo '<table style="margin: auto;color:black;font-family:Arial;font-weight: bolder;"><tr>';
while ($row = mysql_fetch_array($result) and $totalfriends < 15){
$field = $row['youtubeUserName'];
$channelUserName = $row['username'];
?> 

<td id="parent<?php echo $totalfriends; ?>"><div id="child<?php echo $totalfriends; ?>" class="friendBox" style="position:relative;"><div style="position:absolute; width:171px; top:55%; margin-top:-4em">
Send a Friend
<br>
Request to
<br>
<?php echo $field; ?>
<br><br>
<input type="image" border="0" onClick="javascript:friend_channel('<?php echo $field; ?>', '<?php echo $channelUserName; ?>', '<?php echo $totalfriends; ?>')" src="images/friendButton.png" id="box<?php echo $totalfriends; ?>">
</div><div></td>


<?php
$numberoffriends++;
$totalfriends++;
if($numberoffriends == 3)
{
echo "</tr><tr>";
$numberoffriends = 0;
}
}
?>
</tr></table>

<?php
if($totalfriends == 0)
{
?>
<br>
There are no more users to friend, please try again in 1 hour.<br>
We will continue working on making EazySubs the best method of friending on the internet.<br>
<?php
}
}
?>


<iframe style="visibility:hidden;position:absolute;left:0;top:0;" id="iframeId1" src="blank" name="test" height="1" width="1">You need a Frames Capable browser to view this content.</iframe> 
<iframe style="visibility:hidden;position:absolute;left:200;top:0;" id="iframeId2" src="blank" name="test" height="1" width="1">You need a Frames Capable browser to view this content.</iframe> 
<iframe style="visibility:hidden;position:absolute;left:0;top:0;" id="iframeId3" src="blank" name="test" height="1" width="1">You need a Frames Capable browser to view this content.</iframe> 
<iframe style="visibility:hidden;position:absolute;left:0;top:0;" id="iframeId4" src="blank" name="test" height="1" width="1">You need a Frames Capable browser to view this content.</iframe> 
<iframe style="visibility:hidden;position:absolute;left:0;top:0;" id="iframeId5" src="blank" name="test" height="1" width="1">You need a Frames Capable browser to view this content.</iframe> 

<div>
<script type="text/javascript">

function fireEvent(obj,evt){
	
	var fireOnThis = obj;
	if( document.createEvent ) {
	  var evObj = document.createEvent('MouseEvents');
	  evObj.initEvent( evt, true, false );
	  fireOnThis.dispatchEvent(evObj);
	} else if( document.createEventObject ) {
	  fireOnThis.fireEvent('on'+evt);
	}
}

function friend_channel(channel, channelUserName, totalfriends)
{
	document.getElementById("iframeId"+frameNumber).src = "friend.php?channel=" + channel + "&cun=" + channelUserName;
frameNumber++;
if(frameNumber==5)
{
frameNumber=1;
}
removeElement("parent" + totalfriends, "child" + totalfriends);
}

function removeElement(parentDiv, childDiv){
     if (childDiv == parentDiv) {
          alert("The parent div cannot be removed.");
     }
     else if (document.getElementById(childDiv)) {     
          var child = document.getElementById(childDiv);
          var parent = document.getElementById(parentDiv);
          parent.removeChild(child);
     }
     else {
          alert("Child div has already been removed or does not exist.");
          return false;
     }
}
frameNumber=1;
</script>

<style type="text/css">
.friendBox{
background-image:url('images/subBackground.png');
width:171px;
height:171px;
}
</style>
        </div>
	</div>

	<div id="footer">
		<br /><p><span>&copy; 2011 <a href="#">EazySubs</a></span><br />
		<!--Template design by <a href="http://andreasviklund.com/">Andreas Viklund</a></p>-->
	</div>

</div>
<div id="info" style="display:none;"> 
    Chat temporarily unavailable
   <!-- <iframe id="iframeId0" frameborder="0" src="chat/index.php?f=<?php echo $username; ?>" name="test" height="650px" width="950px"></iframe> -->
</div>
</body>
</html>