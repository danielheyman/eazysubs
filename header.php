<?php
include 'init.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<title>gain youtube subscribers fast with subscription exchange!</title> 
<META name="description" content="The Most Convenient Way To Gain Youtube Subscribers For Your Youtube Channel.">
<meta name="keywords" content="Youtube subscribers,youtube,you,tube,get,more,channel,sub4sub,exchange, subscription" /> 

  <link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>

<html><body>
<?php
if (!is_authed()) 
{
?>
<script type='text/javascript'>
window.location = 'index.php';
</script>
<?php
}
$username = $_SESSION['username'];
$currentDate = date("Y-m-j H:i:s");
$query = "select * from user where username='$username'";
     $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
     $token = $row['token'];
	$credits = $row['credits'];
$uderid = $_SESSION['userid'];
$accountType = $row['accountType'];
$accountTypeDate = $row['accountTypeDate'];
$youtubeUserName = $_SESSION['youtubeUserName'];
if($accountType != 'Standard')
{
if(dateDiff2($currentDate, $accountTypeDate) == 'true')
{
$query = "update user set accountType = 'Standard' where username='$username'";
    $result = mysql_query ($query);
  $accountType = 'Standard';  
}
}
?>
<div class="back2"></div><div class='back'></div>
<div align='center' style='margin-right:auto; margin-left:auto; width:1060px;'>

<?php
echo "
<div id='info' style='display:none;'>
    Chat temporarily unavailable
</div>

<div style='font-family:Arial;font-size:15px;font-weight:bold;position:relative;top:0px; margin-left:200px;'>Welcome ( $username - <a href='upgrade.php'>$accountType</a> )<a style='margin-left:30px;' href='settings.php'>Settings</a>
<a style='margin-left:20px;' href='#info' rel='facebox'>Chat</a>
<a style='margin-left:20px;' href='refferal.php'>Refferals</a>
<a style='margin-left:20px;' href='http://forum.eazysubs.com'>Forum</a>
<a style='margin-left:20px;' href='faq.php'>FAQ</a>
<!--<a style='margin-left:20px;' href='contact.php' >Contact</a>-->
<a style='margin-left:20px;' href='logout.php'>Log out</a>
</div>

<div style='position:absolute; top:0px;'><img src='images/logo.png'></div>

<div style='vertical-align:middle;height:50px;position:relative; top:50px;margin-left:-50px;'>

<a style='position:relative;z-index:10;' href='home.php'><img border='0' src='images/statsButton.png'></a>

<img style='position:relative;top:2px;margin-left:-30px;margin-right:-30px;' src='images/ButtonSpacer.png'>

<a style='position:relative;z-index:10;' href='sub4sub.php'><img border='0' src='images/sub4subButton.png'></a>

<img style='position:relative;top:2px;margin-left:-30px;margin-right:-30px;' src='images/ButtonSpacer.png'>

<a style='position:relative;z-index:10;' href='watch4watchAuto.php'><img border='0' src='images/watch4watchButton.png'></a>

<img style='position:relative;top:2px;margin-left:-30px;margin-right:-30px;' src='images/ButtonSpacer.png'>

<a style='position:relative;z-index:10;' href='like4like.php'><img border='0' src='images/like4likeButton.png'></a>

<img style='position:relative;top:2px;margin-left:-30px;margin-right:-30px;' src='images/ButtonSpacer.png'>

<a style='position:relative;z-index:10;' href='comment4comment.php'><img border='0' src='images/comment4commentButton.png'></a>

<img style='position:relative;top:2px;margin-left:-30px;margin-right:-30px;' src='images/ButtonSpacer.png'>

<a style='position:relative;z-index:10;' href='view4view.php'><img border='0' src='images/view4viewButton.png'></a>

<img style='position:relative;top:2px;margin-left:-30px;margin-right:-30px;' src='images/ButtonSpacer.png'>

<a style='position:relative;z-index:10;' href='friends.php'><img border='0' src='images/friendsButton2.png'></a>

<img style='position:relative;top:2px;margin-left:-30px;margin-right:-30px;' src='images/ButtonSpacer.png'>

<a style='position:relative;z-index:10;' href='featured.php'><img border='0' src='images/featuredButton.png'></a>


</div>

";
?>


<style type="text/css">
.back{
padding:10px;
margin-top:-10px;
margin-left:-10px;
height:100%;
width: 100%;
position: fixed;
<?php if($_SERVER["PHP_SELF"] == '/comment4comment2.php'){
echo "background-image:url('images/background3.jpg')";
}
else{
    echo "background-image:url('images/background2.png')";
}
?>
}
body{
color:white;
}
.back2{
padding:10px;
margin-top:-10px;
margin-left:-10px;
height:100%;
width: 100%;
position: fixed;
background-image:url('images/background.jpg');
background-repeat:repeat-x;
}
A:link {text-decoration: none; color:white;}
A:visited {text-decoration: none; color:white;}
A:active {text-decoration: none; color:white;}
A:hover {text-decoration: underline;}
</style>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11908777-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>