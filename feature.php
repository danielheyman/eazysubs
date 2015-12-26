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


$query = "select * from user where username='$username'";
     $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
$userid = $row['userid'];
$email = $row['email'];

//setcookie("EazySubsUserName",$username, time()+3600*24*7);
$query=mysql_query("SELECT * FROM payments where username = '$username' order by paymentNumber desc"); 
$row = mysql_fetch_array($query); 
$random = rand(1, 1000000000);
if(mysql_num_rows($query) == 0)
{
$paymentNumber = 0;
//setcookie("EazySubsPaymentNumber",'0', time()+3600*24*7);
$query = "insert into payments (username, paypalEmail, payment_status, userid, random) values ('$username', '$email', 'Pending', '$userid', '$random')";
     mysql_query ($query) or die ('Error #1');
}
else
{
$paymentNumber = $row['paymentNumber'] + 1;  
//setcookie("EazySubsPaymentNumber",$paymentNumber, time()+3600*24*7);
$query = "insert into payments (username, paypalEmail, paymentNumber, payment_status, userid, random) values ('$username', '$email',$paymentNumber, 'Pending', '$userid', '$random')";
     mysql_query ($query) or die ('Error #2');
}

?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="custom" value="<?php echo $username; ?>">
<input type="hidden" name="invoice" value="<?php echo $paymentNumber . ','  . $random . ',5,2'; ?>">
<input type="hidden" name="hosted_button_id" value="LGJXFH6CYXKVE">
<input type="image" src="https://www.paypalobjects.com/WEBSCR-640-20110306-1/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/WEBSCR-640-20110306-1/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


    <br/><h2>Featured Benefits</h2><div style="text-align:left;">
    <h4><li>A huge amount of video views.</li></h4>
    <h4><li>Only $5 for 3 days of being featured.</li></h4>
	</div>
        
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