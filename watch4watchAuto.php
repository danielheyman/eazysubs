<?php
include 'header.php';
$username = $_SESSION['username'];
if(isset($_GET['f'])){
$f = $_GET["f"]; 
if($f == 'lk')
{
?>
<script type="text/javascript">
setTimeout("alert('Thank you for linking your account, you may now start subbing.')",500);
</script>
<?php
}
if($f == 'ona')
{
$query = "update user set auto2 = 'on' where username='$username'";
mysql_query($query); 
}
if($f == 'offa')
{
$query = "update user set auto2 = 'off' where username='$username'";
mysql_query($query); 
}
}

$query = "select credits5, HourlyWatches, date5, accountType, youtubeUserName, auto2 from user where username='$username'";
     $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
	$credits = $row['credits5'];
    $accountType = $row['accountType']; 
    $myYoutubeUserName = $row['youtubeUserName'];
    $auto = $row['auto2']; 
if($accountType == 'Premium')
{
$gainPoints = 2;
}
else
{
$gainPoints = 1;
}

echo "<div style='position:absolute; margin-top:62px;margin-left:10px;'><img src='images/watch4watch.png'></div>

<div style='position:absolute; margin-top:62px;margin-left:390px;'><img src='images/howItWorks5.png'></div>

<div style='position:absolute; margin-top:62px;margin-left:710px;'><img src='images/remember5.png'></div>


<div id='credits' style='font-family:Arial;font-size:20px;font-weight:strong;position:absolute; margin-top:122px;margin-left:70px;'>You have $credits points</div>";


if (isset($_POST['video']))
{
$video = $_POST['video'];
	$query = "update user set video = '$video' where username='$username'";
     mysql_query($query);
?>
<script type='text/javascript'>
setTimeout("alert('Successfuly updated your default video.')",1000);
</script>
<?php
}

?>



<?

if(!mysql_num_rows(mysql_query("SELECT youtubeUserName FROM user where credits5 > 0 and username != '$username' order by Rand() limit 1"))){
          ?>
<div style='width:1060px;position:absolute; top:400px;margin-left:-70px;'><div style='margin-left:auto;margin-right:auto;color:black;font-weight:blod;font-family:arial;font-size:20px;'>
There are no user videos to watch.<br>
</div></div>
<?php
exit;
          }

$result = mysql_query( "SELECT userid FROM user where credits5 > 0 and username != '$username' and video != '' order by Rand() limit 1" )
          or die("SELECT Error: ".mysql_error());
while ($get_info = mysql_fetch_row($result)){
foreach ($get_info as $field){
}
$useridGot=$field;
$query = "select video from user where userid='$useridGot'";
     $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
	$video = $row['video'];
}
?>

<div style='margin-left:-45px;width:1060px;position:absolute; top:350px;'><div style='margin-left:auto;margin-right:auto;'>
    
    
    <div style="width:120px;position:absolute;margin-left:-50px;margin-top:-80px;">
    <script type="text/javascript"><!--
google_ad_client = "ca-pub-3211239174124719";
/* EazySubs2 */
google_ad_slot = "8552476946";
google_ad_width = 120;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>

<div style="width:120px;position:absolute;margin-left:986px;margin-top:-80px;">
    <script type="text/javascript"><!--
google_ad_client = "ca-pub-3211239174124719";
/* EazySubs2 */
google_ad_slot = "8552476946";
google_ad_width = 120;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<img style='position:relative;' src='images/points4viewsBack.png'>
<a href='view4view.php'><div style='position:absolute; margin-top:-580px;margin-left:705px;'><img border='0' src='images/next.png'></div></a>

<div id='timer' style='font-family:Arial;font-size:20px;font-weight:strong;position:absolute; margin-top:-565px;margin-left:140px;'>You will be credited in 5 seconds</div>

    <div style='font-family:Arial;font-size:20px;font-weight:strong;position:absolute; margin-top:-500px;margin-left:450px;'><a href="
        <?php if($auto == 'off')
        {
        echo'watch4watchAuto.php?f=ona">Turn auto-watch on';
        }
        else
        {
        echo'watch4watchAuto.php?f=offa">Turn auto-watch off';
        }
        ?>
    </a><br/><br/>
        
        <a href="
        <?php if($_SERVER['PHP_SELF'] == '/watch4watch.php')
        {
        echo'watch4watchAuto.php">Turn auto-play on';
        }
        else
        {
        echo'watch4watch.php">Turn auto-play off';
        }
        ?>
    </a></div>
    <div style='margin-top:-400px;'><script type="text/javascript"><!--
google_ad_client = "ca-pub-3211239174124719";
/* EazySubs */
google_ad_slot = "7790294266";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
    <div style='font-family:Arial;width:1000px;font-size:17px;font-weight:strong;position:absolute; margin-top:50px;margin-left:30px;'>
        <h2>Nothing is happening:</h1>
        <h4>Disable any popup-blocker in order to make this page work properly.</h3>
        <h4>Currently does not work in Internet Explorer.</h3>
        <h4>Google Chrome is recomended for best experience.</h3>
    </div>

    
   
    <script type="text/javascript">
time = 5;
gainPoints = <?php echo $gainPoints ?>;
auto = '<?php echo $auto; ?>';
useridGot = '<?php echo $useridGot; ?>'
if(PopupBlocked()) {
	alert('Please disable your popup-blocker.');
	}
else {
MyWindow2 = window.open("http://www.youtube.com/watch?v=<?php echo $video; ?>","mywindows","status=1,width=670,height=580");
	timer();
	}
function timer()
{
if(time > 1)
{
time--;
document.getElementById('timer').innerHTML = 'You will be credited in ' + time + ' seconds';
setTimeout("timer()",1000);
}
else
{
MyWindow2.close();
var dataString = 'uid='+ useridGot;
$.ajax({
type: "POST",
url: "watch.php",
data: dataString,
success: function(data){
    if(data == "successful")
    {
        document.getElementById('timer').innerHTML = 'You have been credited a point';
        var creditsHTML = document.getElementById('credits').innerHTML;
        creditsHTML = creditsHTML.replace('You have','');
        creditsHTML = creditsHTML.replace('points','');
        var credits = creditsHTML;
        credits = parseFloat(credits) + parseFloat(gainPoints);
        document.getElementById('credits').innerHTML = 'You have ' + credits + ' points';
    }
    else
    {
        document.getElementById('timer').innerHTML = "An error has occured";
        alert(data);
    }
}
});
if(auto == 'on')
{
    setTimeout("window.location = 'watch4watchAuto.php'",1000);
}
}
}

function PopupBlocked() {
var PUtest = window.open(null,"","width=100,height=100");
try { PUtest.close(); return false; }
catch(e) { return true; }
}
</script>
    
<div style='position:relative; margin-top:-350px;'>
    <a href='defaultvideo.php' style='color:black; font-size:20px; font-weight:bold;'>Update Your Default Video</a>
</div>


    
    <style type="text/css">
.subBox{
background-image:url('images/subBackground.png');
width:171px;
height:171px;
}
</style>
</body>