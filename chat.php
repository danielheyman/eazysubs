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
    include 'info.php';
    
    

$query = "select * from user where username='$username'";
    $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
    $subsGot = $row['subsGot'];
    $viewsGot = $row['viewsGot'];
    $likesGot = $row['likesGot'];
    $commentsGot = $row['commentsGot'];
    $watchesGot = $row['watchesGot'];
	$credits = $row['credits'];

$result = mysql_query("SELECT userid FROM user");
$numberOfUsers = mysql_num_rows($result);

$subsGot = number_format($subsGot);
$commentsGot = number_format($commentsGot);
$likesGot = number_format($likesGot);
$viewsGot = number_format($viewsGot);
$watchesGot = number_format($watchesGot);
$numberOfUsers = number_format($numberOfUsers);

    ?>


    <div style="text-align:center;" id="content">
        <iframe id="iframeId0" frameborder="0" src="chat/index.php?f=<?php echo $username; ?>" name="test" height="650px" width="600px"></iframe>
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
<script type="text/javascript">
  Meebo("domReady");
</script>
</body>
</html>