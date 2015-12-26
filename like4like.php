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
	$credits = $row['credits3'];
	$date = $row['date3']; 
	$HourlyLikes = $row['hourlyLikes']; 
	$youtubeUserName = $row['youtubeUserName']; 
    $accountType = $row['accountType'];
if($accountType == 'Premium')
{
$gainPoints = 2;
}
else
{
$gainPoints = 1;
}

?>
<img src='images/like4like.png'><br/>
    <div id='credits' style='font-family:Arial;font-size:20px;font-weight:strong;'>You have <?php echo $credits;?> points</div><br/>
    <img src='images/howItWorks3.png'><img style="margin-left:50px;" src='images/remember3.png'>
    <br/><br/><a href='defaultvideo.php' style='color:Black; font-size:15px;'>Update Your Default Video</a><br/><br/>

        
        
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
if($HourlyLikes > 29 and dateDiff($currentDate, $date) != 'true')
{
?>
    <br>
Your Youtube liking limit is up, please try again in 1 hour.<br>
To comply with Youtube rules and regulations, there is a 30 consecutive liking limit.<br>
We will continue working on making EazySubs the best method of subbing on the internet.<br>
<?php
$error = true;
}
if(!$error)
{
$totallikes = 0;
$numberoflikes = 1;
$result = mysql_query( "SELECT youtubeUserName, username, video
FROM user
WHERE youtubeUserName != '$youtubeUserName'
  AND token != 'none'
  AND credits3 >= 1.2
  AND video != ''
  AND video NOT IN (SELECT DISTINCT video
                         FROM liked
                         WHERE userid = $uderid) order by Rand()") or die("SELECT Error: ".mysql_error());
echo '<table style="margin: auto;color:black;font-family:Arial;font-weight: bolder;"><tr><td><a id="parentlikeall" style="color:black;" href="javascript:likeall()"><img border="0" id="childlikeall" src="images/likeall.png"></a></td>';
while ($row = mysql_fetch_array($result) and $totallikes < 14){
$field = $row['youtubeUserName'];
$channelUserName = $row['username'];
$video = $row['video'];
?> 

<td id="parent<?php echo $totallikes; ?>"><div id="child<?php echo $totallikes; ?>" class="likeBox" style="position:relative;"><div style="position:absolute; width:171px; top:55%; margin-top:-4em">
Like the video of
<br>
<?php echo $field; ?>
<br>
To Gain a Point
<br><br>
<input type="image" border="0" onClick="javascript:like_channel('<?php echo $field; ?>', '<?php echo $channelUserName; ?>', '<?php echo $totallikes; ?>', '<?php echo $video; ?>')" src="images/likeButton.png" id="box<?php echo $totallikes; ?>">
</div><div></td>


<?php
$numberoflikes++;
$totallikes++;
if($numberoflikes == 3)
{
echo "</tr><tr>";
$numberoflikes = 0;
}
}
?>
</tr></table>

<?php
if($totallikes == 0)
{
?>
<script type="text/javascript">

removeElement("parentsuball", "childsuball");
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

</script>
<br>
There are no more users to like, please try again in 1 hour.<br>
We will continue working on making EazySubs the best method of subbing on the internet.<br>
<?php
}
}
?>


<iframe style="visibility:hidden;position:absolute;left:0;top:0;" id="iframeId1" src="blank" name="test" height="1" width="1">You need a Frames Capable browser to view this content.</iframe> 
<iframe style="visibility:hidden;position:absolute;left:0;top:0;" id="iframeId2" src="blank" name="test" height="1" width="1">You need a Frames Capable browser to view this content.</iframe> 
<iframe style="visibility:hidden;position:absolute;left:0;top:0;" id="iframeId3" src="blank" name="test" height="1" width="1">You need a Frames Capable browser to view this content.</iframe> 
<iframe style="visibility:hidden;position:absolute;left:0;top:0;" id="iframeId4" src="blank" name="test" height="1" width="1">You need a Frames Capable browser to view this content.</iframe> 
<iframe style="visibility:hidden;position:absolute;left:0;top:0;" id="iframeId5" src="blank" name="test" height="1" width="1">You need a Frames Capable browser to view this content.</iframe> 

<div>
<script type="text/javascript">
likeall_number = 0;
gainPoints = <?php echo $gainPoints ?>;
function likeall()
{
if(likeall_number==0)
{
removeElement("parentlikeall", "childlikeall");
}
likeall_number++;
if(likeall_number < 15)
{
setTimeout("likeall()",1000);
document.getElementById('box' + (likeall_number - 1)).click();
}

}

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

function like_channel(channel, channelUserName, totallikes, video)
{
	document.getElementById("iframeId"+frameNumber).src = "like.php?channel=" + channel + "&cun=" + channelUserName + "&vid=" + video;
frameNumber++;
if(frameNumber==5)
{
frameNumber=1;
}
removeElement("parent" + totallikes, "child" + totallikes);
var creditsHTML = document.getElementById('credits').innerHTML;
creditsHTML = creditsHTML.replace('You have','');
creditsHTML = creditsHTML.replace('points','');
credits = creditsHTML;
credits = parseFloat(credits) + parseFloat(gainPoints);
document.getElementById('credits').innerHTML = 'You have ' + credits + ' points';
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
.likeBox{
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