<?php

if (!isset($_POST['email']))
{
    	// Show the form
	if($_SERVER['PHP_SELF'] != '/index.php')
	{
     		include 'index.php';
	}
}
else
{
$email = $_POST['email'];
$youtubeUserName = $_POST['youtubeUserName'];

     // Check if any of the fields are missing
     if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['confirmpass']) || empty($_POST['email']) || empty($_POST['confirmemail']) || empty($_POST['youtubeUserName']))
     {
          $error='One or more fields are missing';
          include 'index.php';
          exit;
     }

     // Check if the passwords match
     if ($_POST['password'] != $_POST['confirmpass'])
     {
          // Reshow the form with an error
          $error = 'Your passwords do not match';
          include 'index.php';
          exit;
     }
	if(!strpos($_POST['email'],'@'))
     {
          // Reshow the form with an error
          $error = 'Your email is incorrect';
          include 'index.php';
          exit;
}
	if(strpos($_POST['youtubeUserName'],'/'))
     {
          // Reshow the form with an error
          $error = 'Your youtube name is incorrect';
          include 'index.php';
          exit;
}
	if(strpos($_POST['youtubeUserName'],'\\'))
     {
          // Reshow the form with an error
          $error = 'Your youtube name is incorrect';
          include 'index.php';
          exit;
}
	if(strpos($_POST['youtubeUserName'],'.'))
     {
          // Reshow the form with an error
          $error = 'Your youtube name is incorrect';
          include 'index.php';
          exit;
}
if(strlen($_POST['username']) < 5)
{
		$error = '<div style="margin-top:-10px;margin-left:10px;">Your username needs to be <br>atleast 5 characters</div>';
          include 'index.php';
          exit;
}
if(strlen($_POST['password']) < 5)
{
		$error = '<div style="margin-top:-10px;margin-left:10px;">Your password needs to be <br>atleast 5 characters</div>';
          include 'index.php';
          exit;
}
	// Check if the passwords match
     if ($_POST['email'] != $_POST['confirmemail'])
     {
          // Reshow the form with an error
          $error = 'Your emails do not match';
          include 'index.php';
          exit;
     }
	$username = $_POST['username'];
	if(mysql_num_rows(mysql_query("SELECT username FROM user WHERE username = '$username'"))){
		$error = 'The username already exists';
          include 'index.php';
          exit;
	}
	if(mysql_num_rows(mysql_query("SELECT username FROM user WHERE email = '$email'"))){
		$error = 'The email already exists';
          include 'index.php';
          exit;
	}
	if(mysql_num_rows(mysql_query("SELECT username FROM user WHERE youtubeUserName = '$youtubeUserName'"))){
		$error = 'The youtube name already exists';
          include 'index.php';
          exit;
	}
     // Everything is ok, register
     user_register ($_POST['username'], $_POST['password'], $_POST['email'], $_POST['youtubeUserName']);

     header( 'Location: index.php?f=sf' ) ;
}
?>