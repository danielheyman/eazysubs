<?php
include 'init.php';
$username = $_SESSION['username'];
    include 'info.php';
    
    $query = "select * from user where username='$username'";
    $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
    $email = $row['email'];
    $youtube = $row['youtubeUserName'];
    $category = $row['category'];
    $token = $row['token'];
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
if($f == 'dl')
{
$query = "update user set token = 'none' where username = '$username'";
     mysql_query ($query) or die ('Error adding user to subbed.');
     $token = 'none';
}

}
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
        
<img src='images/settings.png'><br>

<img src='images/settingsBox.png'>

<div style='position:relative;top:-50px;font-family:Arial;font-weight:bold;font-size:14px;color:white;'>
<?php
if($token == "none")
{
echo "<a href='https://www.google.com/accounts/AuthSubRequest?next=http%3A%2F%2Feazysubs.com/link.php&scope=http%3A%2F%2Fgdata.youtube.com&session=1&secure=0'>Link Your Youtube Account</a>";
// Restricted articles code here
}
else
{
echo "Your account is linked to youtube ( <a href='settings.php?f=dl'>Delete</a> )";
}
?>

</div>

<?php
if (!isset($_POST['email']))
{
if(isset($f) and $f == 'sf')
{
		$loginerror = 'Successfully Updated';
          	echo "<div class='wrapper'>";
     include 'update_form.inc.php';
echo "<div class='wrapper2'>".$loginerror."</div>";
	echo "</div>";
}
else{
    	// Show the form
	echo "<div class='wrapper'>";
     include 'update_form.inc.php';
	echo "</div>";

}
}
else
{
$success = true;
$email = $_POST['email'];
$youtube = $_POST['youtube'];
	if ($success and empty($_POST['email']) || empty($_POST['youtube']))
     {
          $loginerror='One or more fields are missing';
          	echo "<div class='wrapper'>";
     include 'update_form.inc.php';
echo "<div class='wrapper2'>".$loginerror."</div>";
	echo "</div>";
          $success = false;
     }
	if($success and mysql_num_rows(mysql_query("SELECT username FROM user WHERE email = '$email' and username != '$username'"))){
	$loginerror = 'The email already exists';
          	echo "<div class='wrapper'>";
     include 'update_form.inc.php';
echo "<div class='wrapper2'>".$loginerror."</div>";
	echo "</div>";
          $success = false;
	}
if($success and strlen($_POST['password']) < 5 and $_POST['password'] != '')
{
		$loginerror = '<div style="margin-top:-10px;margin-left:50px;">Your password needs to be <br>atleast 5 characters</div>';
          	echo "<div class='wrapper'>";
     include 'update_form.inc.php';
echo "<div class='wrapper2'>".$loginerror."</div>";
	echo "</div>";
          $success = false;
}
	if($success and mysql_num_rows(mysql_query("SELECT username FROM user WHERE youtubeUserName = '$youtube' and username != '$username'"))){
		$loginerror = 'The youtube name already exists';
          	echo "<div class='wrapper'>";
     include 'update_form.inc.php';
echo "<div class='wrapper2'>".$loginerror."</div>";
	echo "</div>";
          $success = false;
	}
if ($success and $_POST['password'] != $_POST['confirmpass'])
     {
                    $loginerror='Your passwords do not match';
          	echo "<div class='wrapper'>";
     include 'update_form.inc.php';
echo "<div class='wrapper2'>".$loginerror."</div>";
	echo "</div>";
          $success = false;
     }
if($success and !strpos($_POST['email'],'@'))
     {
          // Reshow the form with an error
          $loginerror = 'Your email is incorrect';
          	echo "<div class='wrapper'>";
     include 'update_form.inc.php';
echo "<div class='wrapper2'>".$loginerror."</div>";
	echo "</div>";
          $success = false;
}

	if($success and strpos($_POST['youtube'],'/'))
     {
          // Reshow the form with an error
          $loginerror = 'Your youtube name is incorrect';
          	echo "<div class='wrapper'>";
     include 'update_form.inc.php';
echo "<div class='wrapper2'>".$loginerror."</div>";
	echo "</div>";
          $success = false;
}
	if($success and strpos($_POST['youtube'],'\\'))
     {
          // Reshow the form with an error
          $loginerror = 'Your youtube name is incorrect';
          	echo "<div class='wrapper'>";
     include 'update_form.inc.php';
echo "<div class='wrapper2'>".$loginerror."</div>";
	echo "</div>";
          $success = false;
}
	if($success and strpos($_POST['youtube'],'.'))
     {
          // Reshow the form with an error
          $loginerror = 'Your youtube name is incorrect';
          	echo "<div class='wrapper'>";
     include 'update_form.inc.php';
echo "<div class='wrapper2'>".$loginerror."</div>";
	echo "</div>";
          $success = false;
}
if($success)
{
     // Try and login with the given username & pass
     $result = user_update($_POST['email'], $_POST['password'], $_POST['youtube'], $_POST['category'], $username);
     if ($result != 'Correct')
     {
          // Reshow the form with the error
          $loginerror = 'An error has occured';
			echo "<div class='wrapper'>";
     include 'update_form.inc.php';
	echo "</div>";
     exit;
     }
     else
     {
          ?>
<script type='text/javascript'>
window.location = 'settings.php?f=sf';
</script>
<?php
     } 
}
}
if(isset($_GET['f'])){
$f = $_GET["f"]; 

if($f == 'lk')
{
?>
<script type="text/javascript">
alert('Please link your account below to start subbing.');
</script>
<?php
}
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