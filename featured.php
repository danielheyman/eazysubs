<?php
include 'header.php';
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
if(isset($_GET['f'])){
$f = $_GET["f"]; 
if($f == '')
{
}
}

if (isset($_POST['section']))
{
$section = $_POST['section'];
	$query = "update user set section = '$section' where username='$username'";
     mysql_query($query);
?>
<script type='text/javascript'>
setTimeout("alert('Successfuly updated your credited section.')",1000);
</script>
<?php
}

$query = "select * from user where username='$username'";
     $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
	$date2 = $row['date5']; 
	$HourlyWatches = $row['HourlyWatches']; 
    $accountType = $row['accountType']; 
    $myYoutubeUserName = $row['youtubeUserName'];
    $section = $row['section']; 
    $credits = $row[$section];
if($accountType == 'Premium')
{
$gainPoints = 3;
}
else
{
$gainPoints = 2;
}

echo "<div style='position:absolute; margin-top:62px;margin-left:80px;'><img src='images/featured.png'></div>

<div style='position:absolute; margin-top:62px;margin-left:390px;'><img src='images/howItWorks7.png'></div>

<div style='position:absolute; margin-top:62px;margin-left:730px;'><img src='images/remember7.png'></div>


<div id='credits' style='font-family:Arial;font-size:20px;font-weight:strong;position:absolute; margin-top:122px;margin-left:70px;'>You have $credits points</div>";

function reachedLimit($date,$dailyViews,$temp)
{
$userid = $_SESSION['userid'];
$currentDate = date("Y-m-j H:i:s");
if(dateDiff3($currentDate, $date, 1) == 'true')
    {
    return false;
    }
    else{
    if($dailyViews < 10)
    {
    return false;
    }
    }
    return true;
}
$id1='';
$id2='';
$id3='';
$id4='';
$video1 = '';
$video2 = '';    
$video3 = '';
$video4 = '';
$myResult = mysql_query( "SELECT id FROM features where enabled = 'true' and type = 'top'")
          or die("SELECT Error: ".mysql_error());
          $count = 0;
while ($get_info = mysql_fetch_row($myResult) and $count < 2){
foreach ($get_info as $field){
    $id=$field;
    $query = "select * from features where id='$id'";
    $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
    $username2 = $row['username'];
    $date = $row['date'];
    
    if(dateDiff3($currentDate, $date,3) == 'true')
    {
    $query = "update features set enabled = 'false' where id='$id'";
mysql_query($query); 
    }
    else
    {
    $query = "select * from featured WHERE userid = '$userid' and featureID = '$id'";
     $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
	$date2 = $row['date']; 
    $dailyViews = $row['dailyViews']; 
    
    $query = "select * from user where username='$username2'";
    $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
    if($count == 0)
    {
    if(!reachedLimit($date2, $dailyViews, $id))
    {
	$video1 = $row['video'];
    $id1 = $id;
    $count++;
    }
    }
    else
    {
    if(!reachedLimit($date2, $dailyViews, $id))
    {
    $video2 = $row['video'];
    $id2 = $id;
    $count++;
    }
    }
    }
}
}

$myResult = mysql_query( "SELECT id FROM features where enabled = 'true' and type = 'bottom'")
          or die("SELECT Error: ".mysql_error());
          $count = 0;
while ($get_info = mysql_fetch_row($myResult) and $count < 2){
foreach ($get_info as $field){
    $id=$field;
    $query = "select * from features where id='$id'";
    $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
    $username2 = $row['username'];
    $date = $row['date'];
    
    if(dateDiff3($currentDate, $date, 3) == 'true')
    {
    $query = "update features set enabled = 'false' where id='$id'";
mysql_query($query); 
    }
    else
    {
    $query = "select * from featured WHERE userid = '$userid' and featureID = '$id'";
     $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
	$date2 = $row['date']; 
    $dailyViews = $row['dailyViews']; 
    
    $query = "select * from user where username='$username2'";
    $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
    if($count == 0)
    {
    if(!reachedLimit($date2, $dailyViews, $id))
    {
	$video3 = $row['video'];
    $id3 = $id;
    $count++;
    }
    }
    else
    {
    if(!reachedLimit($date2, $dailyViews, $id))
    {
    $video4 = $row['video'];
    $id4 = $id;
    $count++;
    }
    }
    }
}
}

$result = mysql_query( "Update user set temp0 = '$id1', temp1 = '$id2', temp2 = '$id3', temp3 = '$id4' where username = '$username'" )
          or die("SELECT Error: ".mysql_error());  
?>


<div style='margin-left:-45px;width:1060px;position:absolute; top:350px;'><div style='margin-left:auto;margin-right:auto;'>
    <div style='position:relative; margin-top:-100px;'>
        
<img src='images/featureBox.png'>
<div style='position:relative; margin-top:-60px;margin-left:140px;'>
<form method='post' action='featured.php'>
<select name='section' style='position:relative;margin-left:-17px;top:-18px;width:490px;height:25px;background-color:#5f5f5f;border:none;';>
    <option value="credits5" <? if($section=='credits5') echo 'selected="selected"';?>>Watch4Watch</option>
    <option value="credits" <? if($section=='credits') echo 'selected="selected"';?>>Sub4Sub</option>
    <option value="credits3" <? if($section=='credits3') echo 'selected="selected"';?>>Like4Like</option>
</select>
<input style='position:relative; left:18px;' class='submit' type='image' src= 'images/updateButton.png' value='Update' />
</form>
</div></div>
 <script type="text/javascript" src="swfobject.js"></script>     
    <a style="position:relative;top:10px;" href="feature.php"><img border="none" src='images/getFeaturedToday.png'></a>
<table style="margin-top:20px;"><tr>
    
    <td>
<img style='position:relative;' src='images/featuredBack.png'>
<div id='timer0' style='font-family:Arial;font-size:20px;font-weight:strong;position:absolute; margin-top:-405px;margin-left:65px;'>Play the video to recieve <?php echo $gainPoints; ?> points</div>  
<div style="position:relative;margin-top:-370px;margin-left:15px;">
    <div id="ytapiplayer0">
    You need Flash player 8+ and JavaScript enabled to view this video.
  </div>
    <div>
</td>
    
    
    
    
    <td>
<img style='position:relative;' src='images/featuredBack.png'>
<div id='timer1' style='font-family:Arial;font-size:20px;font-weight:strong;position:absolute; margin-top:-405px;margin-left:65px;'>Play the video to recieve <?php echo $gainPoints; ?> points</div>  
<div style="position:relative;margin-top:-370px;margin-left:15px;">
    <div id="ytapiplayer1">
    You need Flash player 8+ and JavaScript enabled to view this video.
  </div>
    <div>     
</td></tr><tr style="height:50px;"></tr>
    
    
    
    
    <tr><td>
<img style='position:relative;' src='images/featuredBack.png'>
<div id='timer2' style='font-family:Arial;font-size:20px;font-weight:strong;position:absolute; margin-top:-405px;margin-left:65px;'>Play the video to recieve <?php echo $gainPoints; ?> points</div>  
<div style="position:relative;margin-top:-370px;margin-left:15px;">
    <div id="ytapiplayer2">
    You need Flash player 8+ and JavaScript enabled to view this video.
  </div>
    <div>     
</td>    
    
            <td>
<img style='position:relative;' src='images/featuredBack.png'>
<div id='timer3' style='font-family:Arial;font-size:20px;font-weight:strong;position:absolute; margin-top:-405px;margin-left:65px;'>Play the video to recieve <?php echo $gainPoints; ?> points</div>  
<div style="position:relative;margin-top:-370px;margin-left:15px;">
    <div id="ytapiplayer3">
    You need Flash player 8+ and JavaScript enabled to view this video.
  </div>
    <div>     
</td></tr>
    
    </table>
    
 <script type="text/javascript"> 
var params = { allowScriptAccess: "always" };
    var atts = { id: "myytplayer0" };
    swfobject.embedSWF("http://www.youtube.com/e/<?php echo $video1; ?>?enablejsapi=1&playerapiid=ytplayer0",
                       "ytapiplayer0", "425", "349", "8", null, null, params, atts);
    var atts = { id: "myytplayer1" };
    swfobject.embedSWF("http://www.youtube.com/e/<?php echo $video2; ?>?enablejsapi=1&playerapiid=ytplayer1",
                       "ytapiplayer1", "425", "349", "8", null, null, params, atts);
    var atts = { id: "myytplayer2" };
    swfobject.embedSWF("http://www.youtube.com/e/<?php echo $video3; ?>?enablejsapi=1&playerapiid=ytplayer2",
                       "ytapiplayer2", "425", "349", "8", null, null, params, atts);
    var atts = { id: "myytplayer3" };
    swfobject.embedSWF("http://www.youtube.com/e/<?php echo $video4; ?>?enablejsapi=1&playerapiid=ytplayer3",
                       "ytapiplayer3", "425", "349", "8", null, null, params, atts);
ytplayer=new Array();                    
function onYouTubePlayerReady(playerId) {
playerId = playerId.replace('ytplayer','');
    ytplayer[playerId] = document.getElementById("myytplayer"+playerId);
    ytplayer[playerId] .addEventListener('onStateChange', '(function(state) { return playerState(state, "' + playerId + '"); })' );
}

function playerState(state, playerId) {
if(state == 1)
    {
   timer(playerId);
}
}
var time=new Array(3,3,3,3);
gainPoints = <?php echo $gainPoints ?>;
function timer(playerId)
{
if(time[playerId] > 1)
{
time[playerId] = 3 - parseInt(ytplayer[playerId].getCurrentTime());
document.getElementById('timer'+playerId).innerHTML = 'You will be credited in ' + time[playerId] + ' seconds';
if(time[playerId] > 1)
{
setTimeout("timer('"+playerId+"')",100);
}
else
{
    setTimeout("timer('"+playerId+"')",1000);
    }
}
else
{
document.getElementById('timer'+playerId).innerHTML = 'You have been credited ' + gainPoints +' points';
var creditsHTML = document.getElementById('credits').innerHTML;
creditsHTML = creditsHTML.replace('You have','');
creditsHTML = creditsHTML.replace('points','');
var credits = creditsHTML;
credits = parseFloat(credits) + gainPoints;
document.getElementById('credits').innerHTML = 'You have ' + credits + ' points';
dummyimage = new Image();
dummyimage.src = 'feature'+playerId+'.php';
}
}
</script>
    
    <style type="text/css">
.subBox{
background-image:url('images/subBackground.png');
width:171px;
height:171px;
}
</style>
</body>