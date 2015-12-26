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

<?php
$query = "select * from user where username='$username'";
    $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
    $reffered = $row['reffered'];
    $viewRefPoints = $row['viewRefPoints'];
    $subRefPoints = $row['subRefPoints'];
    $likeRefPoints = $row['likeRefPoints'];
    $commentRefPoints = $row['commentRefPoints'];
    $watchRefPoints = $row['watchRefPoints'];
    $refPoints = $row['refPoints'];
    $refPoints = $refPoints + $subRefPoints + $viewRefPoints + $likeRefPoints + $commentRefPoints;
?>
<img src='images/refferals.png'><br>


    <br/><h2>What are the benefits of getting referrals?</h2><br/>
    <h4>You will recieve 10% of all their point earnings.</h4><br/>
    <h4>You will recieve 20 points in sub4sub for everyone that signs up and links to youtube.</h4><br/><br/>
    
    
    <h2>How do I reffer someone?</h2><br/>
    <h4>Have them sign up to EazySubs at <a href="http://eazysubs.com/index.php?r=<?php echo $username; ?>" style="color:Black;border:0;">http://eazysubs.com/index.php?r=<?php echo $username; ?>.</a></h4><br/><br/>
    
    
    <h2>Banners</h2><br/>
    <a href="http://eazysubs.com/index.php?r=<?php echo $username; ?>"><img src="banners/banner1.jpg" style="width:700px;"></a><br/><br/>
    <h4>Copy and paste this code on your website or blog:</h4><br/>
    <textarea style="resize: none;width:500px;height:50px;"><a href="http://eazysubs.com/index.php?r=<?php echo $username; ?>"><img src="http://eazysubs.com/banners/banner1.jpg" style="width:700px;"></a></textarea><br/><br/>
    <a href="http://eazysubs.com/index.php?r=<?php echo $username; ?>"><img src="banners/banner2.png" style="width:700px;"></a><br/><br/>
    <h4>Copy and paste this code on your website or blog:</h4><br/>
    <textarea style="resize: none;width:500px;height:50px;"><a href="http://eazysubs.com/index.php?r=<?php echo $username; ?>"><img src="http://eazysubs.com/banners/banner2.png" style="width:700px;"></a></textarea><br/><br/>
    
    
    <h2>Stats</h2><br/>
    <h4>You reffered <?php echo $reffered; if($reffered != 1){echo ' people';} else{echo ' person';}?>.</h4><br/>
    <h4>You got a total of <?php echo $refPoints; ?> points from your referrals.</h4><br/>
    <h4>You got <?php echo $subRefPoints; ?> sub4sub points from your refferrals.</h4><br/>
    <h4>You got <?php echo $viewRefPoints; ?> view4view points from your referrals.</h4><br/>
    <h4>You got <?php echo $likeRefPoints; ?> like4like points from your referrals.</h4><br/>
    <h4>You got <?php echo $commentRefPoints; ?> comment4comment points from your referrals.</h4><br/>
    <h4>You got <?php echo $watchRefPoints; ?> watch4watch points from your referrals.</h4><br/>
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