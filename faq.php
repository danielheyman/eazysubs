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


    <div id="content">

<h2>How EazySubs works?</h2><br/>
    <h4>You get a point, you lose a point, We work on a points system that is the best way! We recycle points to make our server the fastest on the web! Gain a point for, watching, commenting, liking or viewing and lose a point if someone does the same to you! EazySubs is a website where people from all around the world can watch, comment, like, and subscribe to you! It is a great way for people to increase their YouTube traffic. This site is 100% YouTube Partnership Safe, and the subs are 100% real! Not stupid bots that sub to you like some other sites...</h4><br/><br/>
    <h2>How do I join this amazing site?</h2><br/>
    <h4>Just visit the homepage and sign up. When you are done, link your YouTube account and you are ALL set!</h4><br/><br/>
    <h2>Ok, so what's the catch?</h2><br/>
    <h4>NO CATCH! EazySubs is absolutely free!</h4><br/><br/>
    <h2>How do I get my channel listed on view4view?</h2><br/>
    <h4>When you sign up for EazySubs your channel is AUTOMATICALLY listed on View4View!</h4><br/><br/>
    <h2>My points are disappearing, yet no more subscriber(s) are being added to my account?</h2><br/>
    <h4>WELL DONE! This means you are getting so much traffic YouTube cant handle it all at once! Your subscribers will appear 12 hours late. This isn't an EazySubs problem. Its YouTube's way of updating.</h4><br/><br/>
    <h2>How many accounts am i allowed?</h2><br/>
    <h4>In theory you are allowed as many as you want, BUT you can only have one per YouTube account!</h4><br/><br/>
    <h2>Sub All Button!</h2><br/>
    <h4>EazySubs is THE only site to have the sub all button! This makes gaining points extremely FAST!</h4><br/><br/>
    <h2>Why aren't my subs processing through EazySubs?</h2><br/>
    <h4>This is  because sometimes it does not get added to the recent activity, but it still goes through, Your points will be added soon. Don't Worry.</h4><br/><br/>
    <h2>Why are subscribers good for YouTube?</h2><br/>
    <h4>Subscribers are your fan base. No subscribers means no fan base. Everytime you post a video, it appears on your subscribers' main YouTube page!</h4><br/><br/>
    <h2>Is EazySubs safe?</h2><br/>
    <h4>EazySubs is 100% YouTube partnership safe. If you obey the rules. You will NOT get banned.</h4><br/><br/>
    <h2>Why am I not getting the comments I requested on Comment4Comment?</h2><br/>
    <h4>The comment you choose on comment4comment I NOT the comment you will receive. It is what the user that is commenting' choice.  For example User 1 put a video up and clicked the comment "sweet video".  Now this is not the comment you will receive, you will receive the comment that User 2 has  chosen. So that it is not all the same comments on your video.</h4><br/><br/>
    <h2>I'm going to hack you!</h2><br/>
    <h4>No, your not. For the simple reason, you will get banned if we see a dramatic increase in points. And in the end, we have the backing of YouTube.</h4><br/><br/>
    <h2>Limits.</h2><br/>
    <h4>YouTube have limits, so don't go crazy! Or you could get banned! There is a "Remember" Text at the top of each EazySubs section.</h4><br/><br/>
    <h2>Contact.</h2><br/>
    <h4>You may contact us <a href="contact.php" style="color:Black;">HERE</a></h4><br/><br/>
    <h4>Thanks For Joining Our Ever-Growing Community!</h4><br/>
        
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
