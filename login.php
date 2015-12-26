<?php
// Include init file
include 'init.php';
if (!isset($_POST['username2']))
{
    	// Show the form
     include 'index.php';
     exit;
}
else
{
if (empty($_POST['username2']) || empty($_POST['password']))
     {
          $loginerror='One or more fields are missing';
          include 'index.php';
          exit;
     }
	$username2 = $_POST['username2'];
	if(!mysql_num_rows(mysql_query("SELECT username FROM user WHERE username = '$username2'"))){
		$loginerror = 'The username does not exist';
          include 'index.php';
          exit;
	}
$query = "select salt from user where username='$username2' limit 1";
     $result = mysql_query($query);
     $user = mysql_fetch_array($result);
$encrypted_pass = md5(md5($_POST['password']).$user['salt']);

	if(!mysql_num_rows(mysql_query("SELECT username FROM user WHERE username = '$username2' and password='$encrypted_pass'"))){
		$loginerror = 'Incorrect Password';
          include 'index.php';
          exit;
	}
     // Try and login with the given username & pass
     $result = user_login($_POST['username2'], $_POST['password']);
     if ($result != 'Correct')
     {
          // Reshow the form with the error
          $loginerror = 'An error has occured';
          include 'index.php';
		exit;
     }
     else
     {
          header( 'Location: home.php' ) ;
     } 
}
?>