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
    include 'info.php';
    ?>


    <div style="text-align:center;" id="content">
        <?php
if (isset($_POST['video']))
{
$video = $_POST['video'];
	$query = "update user set video = '$video' where userid='$userid'";
     mysql_query($query);
?>
<script type='text/javascript'>
setTimeout("alert('Successfuly updated your default video')",1000);
</script>
<?php
}
$query = "select * from user where userid='$userid'";
    $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
    $video = $row['video'];
?>
        
        
<p style='color:Black;font-size:15px; font-family:arial; font-weight:bold;'>Update Your Default Video</p>
        <p style='color:Black;font-size:15px; font-family:arial;'>This will update your default video in all the sections on EazySubs. Please input your video id below. The id is the text following http://www.youtube.com/watch?v=. It is 11 characters long.</p><br/>
<img src='images/likeBox.png'>
<div style='position:absolute; margin-top:-44px;margin-left:138px;'>
<form method='post' action='defaultvideo.php'>
<input tpe="text" name='video' maxlength="11" value='<?=$video?>' style='font-size:13px;position:relative;margin-left:-17px;top:-16px;width:380px;height:20px;background-color:#5f5f5f;border:none;';></input>
<input style='position:relative; height:35px; left:15px; top:-3px;' class='submit' type='image' src= 'images/updateButton.png' value='Update' />
</form>
</div>
        <?php
        if($video != '')
        {
            echo "<br>Your video: <a href='http://www.youtube.com/watch?v=$video' target='_blank' style='color:Gray;'>http://www.youtube.com/watch?v=$video</a>";
        }
        ?>
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