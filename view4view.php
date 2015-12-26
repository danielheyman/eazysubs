<?php

include 'header.php';
$username = $_SESSION['username'];
$userid = $_SESSION['userid'];
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
$query = "update user set auto = 'on' where userid='$userid'";
mysql_query($query); 
}
if($f == 'offa')
{
$query = "update user set auto = 'off' where userid='$userid'";
mysql_query($query); 
}
}

$query = "select credits2, accountType, auto from user where userid='$userid'";
     $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
	$credits = $row['credits2'];
    $accountType = $row['accountType']; 
    $auto = $row['auto']; 
    
if($accountType == 'Premium')
{
$gainPoints = 2;
}
else
{
$gainPoints = 1;
}

echo "<div style='position:absolute; margin-top:62px;margin-left:20px;'><img src='images/views4views.png'></div>

<div style='position:absolute; margin-top:62px;margin-left:390px;'><img src='images/howItWorks2.png'></div>

<div style='position:absolute; margin-top:62px;margin-left:710px;'><img src='images/remember2.png'></div>


<div id='credits' style='font-family:Arial;font-size:20px;font-weight:strong;position:absolute; margin-top:122px;margin-left:70px;'>You have $credits points</div>";




$result = mysql_query( "SELECT userid FROM user where credits2>1.2 and userid != '$userid' order by Rand() limit 1" )
          or die("SELECT Error: ".mysql_error());
while ($get_info = mysql_fetch_row($result)){
foreach ($get_info as $field){
}
$useridGot=$field;
}

$result = mysql_query( "Update user set temp = '$useridGot' where userid = '$userid'" )
          or die("SELECT Error: ".mysql_error());
?>

<div style='margin-left:-45px;width:1060px;position:absolute; top:250px;'><div style='margin-left:auto;margin-right:auto;'>
    <div style="width:120px;position:absolute;margin-left:-50px;">
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

<div style="width:120px;position:absolute;margin-left:986px;m">
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

    <div style='font-family:Arial;font-size:20px;font-weight:strong;position:absolute; margin-top:-480px;margin-left:450px;'><a href="
        <?php if($auto == 'off')
        {
        echo'view4view.php?f=ona">Turn auto-view on';
        }
        else
        {
        echo'view4view.php?f=offa">Turn auto-view off';
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
</div></div>
<script type="text/javascript">
gainPoints = <?php echo $gainPoints; ?>;
auto = '<?php echo $auto; ?>';
useridGot = '<?php echo $useridGot; ?>';
time = 5;

if(PopupBlocked()) {
	alert('Please disable your popup-blocker.');
	}
else {
MyWindow = window.open("http://www.youtube.com/<?php echo $youtubeUserName; ?>","mywindows","status=1,width=670,height=580");
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
MyWindow.close();


var dataString = 'uid='+ useridGot;
$.ajax({
type: "POST",
url: "view.php",
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
    }
}
});

if(auto == 'on')
{
setTimeout("window.location = 'view4view.php'",1000);
    //setTimeout("window.location = 'view4view.php'",1000);
}
}
}

//-- start of snippet --
function PopupBlocked() {
var PUtest = window.open(null,"","width=100,height=100");
try { PUtest.close(); return false; }
catch(e) { return true; }
}
//-- end of snippet --

</script>

<div>
<style type="text/css">
.subBox{
background-image:url('images/subBackground.png');
width:171px;
height:171px;
}
</style>
</body>