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
	$credits = $row['credits4'];
	$date = $row['date4']; 
	$HourlyComments = $row['hourlyComments']; 
	$commentMessage = $row['commentMessage']; 
	$youtubeUserName = $row['youtubeUserName']; 
    $accountType = $row['accountType']; 
$uderid = $_SESSION['userid'];
if($accountType == 'Premium')
{
$gainPoints = 2;
}
else
{
$gainPoints = 1;
}
?>
<img src='images/comment4comment.png'><br/>
    <div id='credits' style='font-family:Arial;font-size:20px;font-weight:strong;'>You have <?php echo $credits;?> points</div><br/>
    <img src='images/howItWorks4.png'><img style="margin-left:50px;" src='images/remember4.png'>
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
if($HourlyComments > 3 and dateDiff($currentDate, $date) != 'true')
{
?>
    <br>
Your Youtube commenting limit is up, please try again in 1 hour.<br>
To comply with Youtube rules and regulations, there is a 30 consecutive commenting limit.<br>
We will continue working on making EazySubs the best method of subbing on the internet.<br>
<?php
$error = true;
}
if(!$error)
{
$totalcomments = 0;
$numberofcomments = 0;
$result = mysql_query( "SELECT youtubeUserName, username, video
FROM user
WHERE youtubeUserName != '$youtubeUserName'
  AND token != 'none'
  AND credits4 >= 1.2
  AND video != ''
  AND video NOT IN (SELECT DISTINCT video
                         FROM commented
                         WHERE userid = $uderid) order by Rand()") or die("SELECT Error: ".mysql_error());
echo '<table style="margin: auto;color:black;font-family:Arial;font-weight: bolder;"><tr>';
while ($row = mysql_fetch_array($result) and $totalcomments < 15){
$field = $row['youtubeUserName'];
$channelUserName = $row['username'];
$video = $row['video'];
?> 

<td  id="parent<?php echo $totalcomments; ?>"><div id="child<?php echo $totalcomments; ?>" class="commentBox" style="position:relative;"><div style="position:absolute; width:171px; top:55%; margin-top:-4em">
Comment the video of
<br>
<?php echo $field; ?>
<br>
To Gain a Point
<br><br>
<input type="image" border="0" onClick="javascript:comment_channel('<?php echo $field; ?>', '<?php echo $channelUserName; ?>', '<?php echo $totalcomments; ?>', '<?php echo $video; ?>')" src="images/commentButton.png" id="box<?php echo $totalcomments; ?>">
</div><div></td>


<?php
$numberofcomments++;
$totalcomments++;
if($numberofcomments == 3)
{
echo "</tr><tr>";
$numberofcomments = 0;
}
}
?>
</tr></table>

<?php
if($totalcomments == 0)
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
There are no more users to comment, please try again in 1 hour.<br>
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
commentall_number = 0;
gainPoints = <?php echo $gainPoints ?>;
function commentall()
{
if(commentall_number==0)
{
removeElement("parentcommentall", "childcommentall");
}
commentall_number++;
if(commentall_number < 22)
{
setTimeout("commentall()",1000);
document.getElementById('box' + (commentall_number - 1)).click();
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

function comment_channel(channel, channelUserName, totalcomments, video)
{
	document.getElementById("iframeId"+frameNumber).src = "comment.php?channel=" + channel + "&cun=" + channelUserName + "&vid=" + video;
frameNumber++;
if(frameNumber==5)
{
frameNumber=1;
}
removeElement("parent" + totalcomments, "child" + totalcomments);
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
.commentBox{
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