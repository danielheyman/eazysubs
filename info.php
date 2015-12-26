<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>EazySubs - Gain youtube success!</title>
  <meta name="title" content="EazySubs - Gain youtube success!" />
  <meta name="description" content="The Most Convenient Way To Gain Youtube Success." />
  <meta name="keywords" content="you tube youtube, youtube you tube, you tube.com, what is twitter, watch youtube, about twitter, how to twitter, about facebook, how to facebook, face book, Youtube subscribers,youtube,you,tube,get,more,channel,sub4sub,exchange, subscription" />
  <meta name="author" content="EazySubs" />
  <link rel="stylesheet" type="text/css" href="variant-creative.css" media="all" />
  <script src="jquery.js" type="text/javascript"></script>
<?php
$username = $_SESSION['username'];
$userid = $_SESSION['userid'];
$currentDate = date("Y-m-j H:i:s");
$query = "select token, credits, accountType, accountTypeDate, youtubeUserName from user where userid='$userid' limit 1";
     $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
     $token = $row['token'];
	$credits = $row['credits'];
$accountType = $row['accountType'];
$accountTypeDate = $row['accountTypeDate'];
$youtubeUserName = $row['youtubeUserName'];
if($accountType != 'Standard')
{
if(dateDiff2($currentDate, $accountTypeDate) == 'true')
{
$query = "update user set accountType = 'Standard' where userid='$userid' limit 1";
    $result = mysql_query ($query);
  $accountType = 'Standard';  
}
}


$query = "select * from info where ID='1'";
    $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
    $totalSubs = $row['totalSubs'];
    $totalLikes = $row['totalLikes'];
    $totalComments = $row['totalComments'];
    $totalChannelViews = $row['totalChannelViews'];
    $totalWatches = $row['totalWatches'];
    $totalFriends = $row['totalFriends'];

//$credits = number_format($credits);
$totalChannelViews = number_format($totalChannelViews);
$totalSubs = number_format($totalSubs);
$totalFriends = number_format($totalFriends);
$totalWatches = number_format($totalWatches);
$totalLikes = number_format($totalLikes);
$totalComments = number_format($totalComments);

?>
</head>

<body>
    <script src="http://cdn.wibiya.com/Toolbars/dir_0796/Toolbar_796823/Loader_796823.js" type="text/javascript"></script>
<div id="wrap">
	<div id="header">
<h1><a href="home.php">EazySubs</a></h1>
		
        <div style='font-family:Arial;font-size:15px;font-weight:bold;text-align: center;'>Welcome ( <?php echo $username; ?> - <a href='upgrade.php'><?php echo $accountType; ?></a> )<a style='margin-left:30px;' href='settings.php'>Settings</a>
<a style='margin-left:20px;' href='chat.php'>Chat</a>
<a style='margin-left:20px;' href='referral.php'>Referrals</a>
<a style='margin-left:20px;' href='http://forum.eazysubs.com'>Forum</a>
<a style='margin-left:20px;' href='faq.php'>FAQ</a>
<!--<a style='margin-left:20px;' href='contact.php' >Contact</a>-->
<a style='margin-left:20px;' href='logout.php'>Log out</a>
</div>
        <div style="text-align: center;margin-top:5px;"><script type="text/javascript"><!--
google_ad_client = "ca-pub-3211239174124719";
/* EazySubs4 */
google_ad_slot = "5675148338";
google_ad_width = 728;
google_ad_height = 15;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
	</div>

<div id="leftside">
		<h2 class="hide">Left Menu:</h2>
		<ul class="avmenu">
            <!--<li><a href="http://ad99cds3wdr1-0c7nd9m9l1n11.hop.clickbank.net/" target="_blank">YouTube Money</a></li>
            <li><a href="http://433depr82lk1va2z5c2405oltu.hop.clickbank.net/" target="_blank">Download Videos</a></li>
            <li><a href="easyPoints.php">Easy Points</a></li>-->
		    <li><a href="http://socialclump.com" target="_blank">Twitter</a></li>
		    <li><a href="http://socialclump.com" target="_blank">Facebook</a></li>
			<li><a href="#">YouTube</a>
			<ul>
				<li><a href="sub4sub.php">Sub4Sub</a></li>
				<li><a href="like4like.php">Like4Like</a></li>
                <li><a href="comment4comment.php">Comment4Comment</a></li>
				<li><a href="friends.php">Friends</a></li>
				<li><a href="watch4watchAuto.php">Watch4Watch</a></li>
				<li><a href="view4view.php">View4View</a></li>
                <li><a href="featured.php">Featured</a></li>
	        </ul>
    		<li><a href="http://funtricity.com" target="_blank">Jokes</a></li>
        </ul>

		<!--<div class="announce">
			<h2>Latest news:</h2>
			<p><strong>Apr 21, 2011:</strong><br />
			Toolbar added.</p>
		</div>-->
    
	</div>

	<div id="extras">
		<h2>Additional info</h2>
		<!--<p>Important message: Sorry for the inconvenience. As the site usage has increased dramatically and it gets over 100,000 page views a day, the current hardware was not sufficient and the site was experiencing temporary difficulties. Over the last few days we were upgrading our hardware. Thank you for your participation in the success of www.EazySubs.com and for your valuable comments and suggestions.</p>
        -->
		<br/>
        <p>Total Subs: <?php echo $totalSubs; ?></p>
        <p>Total Likes: <?php echo $totalLikes; ?></p>
        <p>Total Comments: <?php echo $totalComments; ?></p>
        <p>Total Channel Views: <?php echo $totalChannelViews; ?></p>
        <p>Total Video Watches: <?php echo $totalWatches; ?></p>
        <p>Total Friends: <?php echo $totalFriends; ?></p>
        <p><a href="home.php" style="color:Black">More info</a></p>
        
        <br/>

	</div>