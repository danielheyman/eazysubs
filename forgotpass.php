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
An email has been sent to you containing a new password. Make sure to check your spam if you do not recieve anything.
<script type="text/javascript">
alert('An email has been sent to you containing a new password. Make sure to check your spam if you do not recieve anything.');
</script>
<?php
}
}
else{

if (!isset($_POST['email']))
{
include 'forgotpass_form.inc.php';
}
else
{
if (empty($_POST['username']) || empty($_POST['email']))
     {
          $loginerror='One or more fields are missing';
          echo '<div style="color:red;font-size:20px;">' . $loginerror . '</div>';
          include 'forgotpass_form.inc.php';
          exit;
     }
	$username = $_POST['username'];
    $email = $_POST['email'];
	if(!mysql_num_rows(mysql_query("SELECT username FROM user WHERE username = '$username' and email='$email'"))){
		$loginerror = 'The username/email combination does not exist.';
        echo '<div style="color:red;font-size:20px;">' . $loginerror . '</div>';
        include 'forgotpass_form.inc.php';
          exit;
	}
    $password = generatePassword();
$query = "select salt from user where username='$username' limit 1";
     $result = mysql_query($query);
     $user = mysql_fetch_array($result);
     $encrypted_pass = md5(md5($password).$user['salt']);

$query = "update user set password = '$encrypted_pass'  where username='$username'";
    $result = mysql_query ($query) or die ('An error has occured.');  

    $subject = "EazySubs Password"; 
$message = "Your new password for EazySubs is:
" . $password . "


-The EazySubs Team";
$from = "From: noreply@eazysubs.com\r\n";
mail($email, $subject, $message, $from);

    ?>
<script type='text/javascript'>
window.location = 'forgotpass.php?f=s';
</script>
<?php
}
}




function generatePassword ($length = 8)
  {

    // start with a blank password
    $password = "";

    // define possible characters - any character in this string can be
    // picked for use in the password, so if you want to put vowels back in
    // or add special characters such as exclamation marks, this is where
    // you should do it
    $possible = "2346789bcdfghjkmnpqrtvwxyzBCDFGHJKLMNPQRTVWXYZ";

    // we refer to the length of $possible a few times, so let's grab it now
    $maxlength = strlen($possible);
  
    // check for length overflow and truncate if necessary
    if ($length > $maxlength) {
      $length = $maxlength;
    }
	
    // set up a counter for how many characters are in the password so far
    $i = 0; 
    
    // add random characters to $password until $length is reached
    while ($i < $length) { 

      // pick a random character from the possible ones
      $char = substr($possible, mt_rand(0, $maxlength-1), 1);
        
      // have we already used this character in $password?
      if (!strstr($password, $char)) { 
        // no, so it's OK to add it onto the end of whatever we've already got...
        $password .= $char;
        // ... and increase the counter by one
        $i++;
      }

    }

    // done!
    return $password;

  }
?>