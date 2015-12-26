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
$username = $_SESSION['username'];
$userid = $_SESSION['userid'];
$result = mysql_query("SELECT VideosAccepted, VideosDeclined FROM user WHERE userid = '$userid'") or die("SELECT Error: ".mysql_error());
while ($row = mysql_fetch_array($result)){
$VideosAccepted = $row['VideosAccepted'];
$VideosDeclined = $row['VideosDeclined'];
}
    include 'info.php';
    ?>


    <div style="text-align:center;" id="content">
        <?php
if (isset($_POST['video']))
{
$submitted = false;
$video = $_POST['video'];
$pos = strpos($video, "youtube.com/watch?v=");
if ($pos === false) {
?>
<script type='text/javascript'>
setTimeout("alert('Please submit a valid youtube url.')",1000);
</script>
<?php
}
else{
$query = "insert into videoforpoints (username, userid, youtubeusername, link) values ('$username', '$userid', '$youtubeUserName', '$video')";
     mysql_query ($query) or die ('Error adding credit #4');
     $submitted = true;
?>
<script type='text/javascript'>
setTimeout("alert('You have successfuly submited your video. It will be verified as soon as possible.')",1000);
</script>
<?php
}
}
?>
        
        
<p style='color:Black;font-size:15px; font-family:arial; font-weight:bold;'>Make a Video And Gain 200 Points</p>
        <p style='color:Black;font-size:15px; font-family:arial;'>Do you want 200 points the easy way? All you have to do is make a video about EazySubs or <a href="http://socialclump.com" target="_blank" style="color:Gray;">SocialClump</a> and post it on youtube. Then simply submit the url of your video below. Once it gets verified, you will gain 200 points in sub4sub.
            <ul style="text-align:left;">Rules:
                <li>Video must be about EazySubs or <a href="http://socialclump.com" target="_blank" style="color:Gray;">SocialClump</a></li>
                <li>Must have been made after June 10, 2011</li>
                <li>Must have been created by the same YouTube account that is linked to EazySubs.</li>
                <li>Same video may not be submitted twice.</li>
                <li>Video must be public and may not be unlisted.</li>
                <li>Anyone who does not follow these rules will lose 20 points.</li><br/><br/>
                <li>It may take a couple of hours to a couple of days to get your video verified.</li>
            </ul>
        </p>
        
Example: http://www.youtube.com/watch?v=xxxxxxxxxxx
        <form method='post' action='easyPoints.php'>
<input type="text" size="80" value="<?php if(isset($_POST['video']) and !$submitted){ echo $_POST['video']; } ?>" name="video"></input><br/>
<input type='image' src= 'images/sendButton.png' value='Update' />
</form>
        <br/>
        <?=$VideosAccepted?> of your videos have been accepted.<br/>
        <?=$VideosDeclined?> of your videos have been declined.<br/>
        
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