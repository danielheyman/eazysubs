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
    ?>
    <div style="text-align:center;" id="content">

<img src='images/contact.png'><br>

<img src='images/contactBox.png'>

<div style='margin-top:-549px;margin-left:-50px;font-family:Arial;font-weight:bold;font-size:14px;color:white;'>


<?php

    	// Show the form
	echo "<div class='wrapper3'>";
     include 'contact_form.inc.php';
	echo "</div>";
          ?>

<?php
if(isset($f) and $f == 'ms')
{
$loginerror = 'Message sent'; 
echo "<div class='wrapper4'>".$loginerror."</div>";
}

if (isset($_POST['email']))
{
$success = true;
$ip = $_POST['ip']; 
$httpref = $_POST['httpref']; 
$httpagent = $_POST['httpagent']; 
$visitor = $_POST['name']; 
$visitormail = $_POST['email']; 
$notes = $_POST['message'];

if(!$visitormail == "" && (!strstr($visitormail,"@") || !strstr($visitormail,"."))) 
{
echo "<div class='wrapper3'>";
echo "<div class='wrapper4'>".$loginerror."</div>";
$success = false;
}

if($success and empty($visitor) || empty($visitormail) || empty($notes )) {
$loginerror = 'One or more fields are missing'; 
echo "<div class='wrapper4'>".$loginerror."</div>";
$success = false;
}
if($success)
{
$todayis = date("l, F j, Y, g:i a");

$subject = "Someone contacted you"; 

$notes = stripcslashes($notes); 

$message = "
Message: $notes \n \n\n\n
From: $visitor\n
Email: $visitormail\n
UserName: $username \n
IP = $ip \n
Date: $todayis [EST] \n
";

$from = "From: $visitormail\r\n";


mail("admin@eazysubs.com", $subject, $message, $from);

?>

<script type='text/javascript'>
window.location = 'contact.php?f=ms';
</script>
<?php
}
}
?>
	</div>	</div>

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