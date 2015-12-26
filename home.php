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
<a href='upgrade.php'><img border='0' src='images/doubleYourPointsWithPremium.png'></a><br/>
        <?php
echo "
<h3>General</h3>
<div style='margin-bottom:3px;'>There were $totalSubs subs to date<br></div>
<div style='margin-bottom:3px;'>There were $totalLikes video likes to date<br></div>
<div style='margin-bottom:3px;'>There were $totalComments video comments to date<br></div>
<div style='margin-bottom:3px;'>There were $totalChannelViews channel views to date<br></div>
<div style='margin-bottom:3px;'>$totalWatches videos were watched to date<br></div>
There were $totalFriends friend requests to date<br><br>
<h3>Your stats</h3>
<div style='margin-bottom:3px;'>You got subbed $subsGot times<br></div>
<div style='margin-bottom:3px;'>You video was liked $likesGot times<br></div>
<div style='margin-bottom:3px;'>Your video was commented on $commentsGot times<br></div>
<div style='margin-bottom:3px;'>Your channel was viewed $viewsGot times<br></div>
Your video was watched $watchesGot times<br><br>
There are $numberOfUsers users registered
";
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
<script type="text/javascript">
  Meebo("domReady");
</script>
</body>
</html>