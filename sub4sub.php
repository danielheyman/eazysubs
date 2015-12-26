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
$userid = $_SESSION['userid'];
    include 'info.php';
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
        
        <?php
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
}
$query = "select token, credits, date, hourlySubs,accountType, subPointsOffer from user where username='$username' limit 1";
     $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
     $token = $row['token'];
	$credits = $row['credits'];
	$date = $row['date']; 
	$HourlySubs = $row['hourlySubs']; 
    $accountType = $row['accountType']; 
    $subPointsOffer = $row['subPointsOffer']; 
$userid = $_SESSION['userid'];
$youtubeUserName = $_SESSION['youtubeUserName'];
if($accountType == 'Premium')
{
$gainPoints = 2;
}
else
{
$gainPoints = 1;
}
?>
        <script type="text/javascript">
$(document).ready(function(){
  $(".btn1").click(function(){
	$("#info").slideToggle();
    if($(".btn1").html() == "More Info")
    {
        $(".btn1").html("Less Info");
    }
    else{
        $(".btn1").html("More Info");
    }
  });
$('#info').hide();
$(".btn1").html("More Info");

  $(".btn2").click(function(){
	$("#settings").slideToggle();
    if($(".btn2").html() == "Open Settings")
    {
        $(".btn2").html("Close Settings");
    }
    else{
        $(".btn2").html("Open Settings");
    }
  });
$('#settings').hide();
$(".btn2").html("Open Settings");
});
</script>
<img src='images/sub4sub.png'><br/>
    <div id='credits' style='font-family:Arial;font-size:20px;font-weight:strong;'>You have <?php echo $credits;?> points</div><br/>
    <?php
if (isset($_POST['updatePoints']))
{
$points = $_POST['updatePoints'];
if($points < 11 and $points > 1)
{
$query = "update user set subPointsOffer = $points where username = '$username'";
     mysql_query ($query) or die ('Error adding user to subbed.');
     $subPointsOffer = $points;
     ?>
<script type="text/javascript">
alert('You have successfully changed the amount of points you offer.');
</script>
<?php
}
}
    ?>
                <div id="settings">
                    How many points do you want to offer to every person that subscribes to you? The more points you offer, the higher you will get listed in the sub4sub resulting in quicker subscriptions to your channel. The value has to be between 2 and 10. The user will get 1 lower than what you set here.
                    <form class='top' action="sub4sub.php" method="post">
                        <select id="select" class="textbox" name="updatePoints">
<option value="2" <? if($subPointsOffer=='2') echo 'selected="selected"';?>>2</option>
<option value="3" <? if($subPointsOffer=='3') echo 'selected="selected"';?>>3</option>
<option value="4" <? if($subPointsOffer=='4') echo 'selected="selected"';?>>4</option>
<option value="5" <? if($subPointsOffer=='5') echo 'selected="selected"';?>>5</option>
<option value="6" <? if($subPointsOffer=='6') echo 'selected="selected"';?>>6</option>
<option value="7" <? if($subPointsOffer=='7') echo 'selected="selected"';?>>7</option>
<option value="8" <? if($subPointsOffer=='8') echo 'selected="selected"';?>>8</option>
<option value="9" <? if($subPointsOffer=='9') echo 'selected="selected"';?>>9</option>
<option value="10" <? if($subPointsOffer=='10') echo 'selected="selected"';?>>10</option>
                            </select></br>
                            <input type="image" src= "images/updateButton.png" name="submit" value="Update!" />
                            </form>
        </div>
        <p class="btn2" style="font-family:arial; font-size:15px; font-weight:bold;"></p>
<?
        if($token == "none")
{
?>
<script type='text/javascript'>
window.location = 'settings.php?f=lk';
</script>
<?php
}
$error = false;
$currentDate = date("Y-m-j H:i:s");
if($HourlySubs > 34 and dateDiff($currentDate, $date) != 'true')
{
?>
        <br>
Your Youtube subscribing limit is up, please try again in 1 hour.<br>
To comply with Youtube rules and regulations, there is a 35 consecutive subscription limit.<br>
We will continue working on making EazySubs the best method of subbing on the internet.<br>
<?php
$error = true;
}
if(!$error)
{
$totalsubs = 0;
$numberofsubs = 1;
$result = mysql_query( "SELECT youtubeUserName, username, subPointsOffer
FROM user
WHERE youtubeUserName != '$youtubeUserName'
  AND token != 'none'
  AND credits >= subPointsOffer
  AND youtubeUserName NOT IN (SELECT DISTINCT channel
                         FROM subbed
                         WHERE userid = $userid) order by subPointsOffer DESC, Rand()") or die("SELECT Error: ".mysql_error());
echo '<table style="margin: auto;color:black;font-family:Arial;font-weight: bolder;"><tr><td><a id="parentsuball" style="color:black;" href="javascript:suball()"><img border="0" id="childsuball" src="images/suball.png"></a></td>';
while ($row = mysql_fetch_array($result) and $totalsubs < 14){
$field = $row['youtubeUserName'];
$channelUserName = $row['username'];
$subPointsOffer = $row['subPointsOffer']; 
?> 

<td id="parent<?php echo $totalsubs; ?>" ><div id="child<?php echo $totalsubs; ?>" class="subBox" style="position:relative;"><div style="position:absolute; width:171px; top:55%; margin-top:-4em; font-family:arial; font-size:small; font-weight:bold;">
Sub
<br>
<?php echo $field; ?>
<br>
To Gain <?php echo $subPointsOffer - 1; ?> Point(s)
<br><br>
<input type="image" border="0" onClick="javascript:sub_channel('<?php echo $field; ?>', '<?php echo $channelUserName; ?>', '<?php echo $totalsubs; ?>', '<?php echo $subPointsOffer; ?>')" src="images/subButton.png" id="box<?php echo $totalsubs; ?>">
</div><div></td>


<?php
$numberofsubs++;
$totalsubs++;
if($numberofsubs == 3)
{
echo "</tr><tr>";
$numberofsubs = 0;
}
}
?>
</tr></table>

<?php
if($totalsubs == 0)
{
?>
<script type="text/javascript">

removeElement("parentsuball", "childsuball");
function removeElement(parentDiv, childDiv){
     if (childDiv == parentDiv) {
          alert("The parent div cannot be removed.");
     }
     else if (document.getElementById(childDiv)) {     
          var child = document.getElementById(childDiv);
          var parent = document.getElementById(parentDiv);
          parent.removeChild(child);
     }
     else {
          alert("Child div has already been removed or does not exist.");
          return false;
     }
}

</script>
<br>
There are no more users to sub, please try again in 1 hour.<br>
We will continue working on making EazySubs the best method of subbing on the internet.<br>
<?php
}
}
?>

<div>
<script type="text/javascript">
suball_number = 0;
gainPoints = <?php echo $gainPoints ?>;
function suball()
{
setTimeout("suball()",1000);
if(suball_number==0)
{
removeElement("parentsuball", "childsuball");
}
suball_number++;
if(suball_number < 15)
{
document.getElementById('box' + (suball_number - 1)).click();
}

}

function fireEvent(obj,evt){
	
	var fireOnThis = obj;
	if( document.createEvent ) {
	  var evObj = document.createEvent('MouseEvents');
	  evObj.initEvent( evt, true, false );
	  fireOnThis.dispatchEvent(evObj);
	} else if( document.createEventObject ) {
	  fireOnThis.fireEvent('on'+evt);
	}
}

function sub_channel(channel, channelUserName, totalsubs, subPointsOffer)
{
var dataString = 'channel='+ channel + '&cun=' + channelUserName;
$.ajax({
type: "POST",
url: "subscribe.php",
data: dataString,
success: function(data){
    if(data == "limit"){
        window.location = "sub4sub.php";
    }
}
});

//document.getElementById("iframeId"+frameNumber).src = "subscribe.php?channel=" + channel + "&cun=" + channelUserName;
//frameNumber++;
//if(frameNumber==5)
//{
//frameNumber=1;
//}
removeElement("parent" + totalsubs, "child" + totalsubs);
var creditsHTML = document.getElementById('credits').innerHTML;
creditsHTML = creditsHTML.replace('You have','');
creditsHTML = creditsHTML.replace('points','');
credits = creditsHTML;
credits = parseFloat(credits) + (subPointsOffer - 1) * parseFloat(gainPoints);
document.getElementById('credits').innerHTML = 'You have ' + credits + ' points';
}

function removeElement(parentDiv, childDiv){
     if (childDiv == parentDiv) {
          alert("The parent div cannot be removed.");
     }
     else if (document.getElementById(childDiv)) {     
          var child = document.getElementById(childDiv);
          var parent = document.getElementById(parentDiv);
          parent.removeChild(child);
     }
     else {
          alert("Child div has already been removed or does not exist.");
          return false;
     }
}
frameNumber=1;
</script>

<style type="text/css">
.subBox{
background-image:url('images/subBackground.png');
width:171px;
height:171px;
}
</style>
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