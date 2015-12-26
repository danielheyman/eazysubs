<?php
include 'init.php';

if (is_authed()) 
{
    	header( 'Location: home.php' ) ;
}
?>
<a href="index.php">GO BACK HOME</a><br/><br/><br/>

<?php
if(isset($_GET['f'])){
$f = $_GET["f"]; 
if($f == 's')
{
?>
An email has been sent to you containing a new username. Make sure to check your spam if you do not recieve anything.
<script type="text/javascript">
alert('An email has been sent to you containing your Username. Make sure to check your spam if you do not recieve anything.');
</script>
<?php
}
}
else{

if (!isset($_POST['email']))
{
include 'forgotuser_form.inc.php';
}
else
{
if (empty($_POST['email']))
     {
          $loginerror='The email field is missing';
          echo '<div style="color:red;font-size:20px;">' . $loginerror . '</div>';
          include 'forgotuser_form.inc.php';
          exit;
     }
    $email = $_POST['email'];
	if(!mysql_num_rows(mysql_query("SELECT username FROM user WHERE email='$email'"))){
		$loginerror = 'The email does not exist.';
        echo '<div style="color:red;font-size:20px;">' . $loginerror . '</div>';
        include 'forgotuser_form.inc.php';
          exit;
	}
$query = "select username from user where email='$email' limit 1";
     $result = mysql_query($query);
     $user = mysql_fetch_array($result);
     $username = $user['username'];

    $subject = "EazySubs Username"; 
$message = "Your Username for EazySubs is:
" . $username . "


-The EazySubs Team";
$from = "From: noreply@eazysubs.com\r\n";
mail($email, $subject, $message, $from);

    ?>
<script type='text/javascript'>
window.location = 'forgotuser.php?f=s';
</script>
<?php
}
}
?>