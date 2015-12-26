<?php
include 'init.php';
if (!is_authed()) 
{
    	die ('You are not signed in, <a href="index.php">click here</a> to go back.');
}
require_once 'Zend/Loader.php'; // the Zend dir must be in your include_path
Zend_Loader::loadClass('Zend_Gdata_YouTube');
$yt = new Zend_Gdata_YouTube();

Zend_Loader::loadClass('Zend_Gdata_AuthSub');
Zend_Loader::loadClass('Zend_Gdata_ClientLogin'); 

$token = Zend_Gdata_AuthSub::getAuthSubSessionToken($_GET['token']);

$userid = $_SESSION['userid'];
$username = $_SESSION['username'];

$query = "select * from user where username='$username'";
     $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
$youtube = strtolower($row['youtubeUserName']);
$ref = $row['refferal'];
$refLink = $row['refLink'];


$query = "update user set token = '$token' where username='$username'";
    mysql_query ($query) or die ('Could not link account. Please try again');
    
    
if($refLink != 'done' and $ref != '')
{
    $query = "update user set refLink = 'done' where username='$username'";
    mysql_query ($query) or die ('Could not link account. Please try again');
    $query = "update user set credits = credits + 20, reffered = reffered + 1, refPoints = refPoints + 20  where username='$ref'";
    mysql_query ($query);
}

try{
$channelSub = 'itouchandtech';
if($channelSub != $youtube)
{
if(!mysql_num_rows(mysql_query("SELECT id FROM subbed WHERE userid = '$userid' and channel = '$channelSub'"))){

sub($channelSub);
$query = "insert into subbed (userid, channel) values ('$userid', '$channelSub')";
     mysql_query ($query);
}
}
}
catch(exception $e){}

try{
$channelSub = 'poisonblurhd';
if($channelSub != $youtube)
{
if(!mysql_num_rows(mysql_query("SELECT id FROM subbed WHERE userid = '$userid' and channel = '$channelSub'"))){

sub($channelSub);
$query = "insert into subbed (userid, channel) values ('$userid', '$channelSub')";
     mysql_query ($query);
}
}
}
catch(exception $e){}

try{
$channelSub = 'blackopsmontagesx';
if($channelSub != $youtube)
{
if(!mysql_num_rows(mysql_query("SELECT id FROM subbed WHERE userid = '$userid' and channel = '$channelSub'"))){

sub($channelSub);
$query = "insert into subbed (userid, channel) values ('$userid', '$channelSub')";
     mysql_query ($query);
}
}
}
catch(exception $e){}

try{
$channelSub = 'LouOWski';
if($channelSub != $youtube)
{
if(!mysql_num_rows(mysql_query("SELECT id FROM subbed WHERE userid = '$userid' and channel = '$channelSub'"))){

sub($channelSub);
$query = "insert into subbed (userid, channel) values ('$userid', '$channelSub')";
     mysql_query ($query);
}
}
}
catch(exception $e){}
?>
<script type='text/javascript'>
window.location = 'sub4sub.php?f=lk';
</script>