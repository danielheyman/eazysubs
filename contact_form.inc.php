<?php
$username = $_SESSION['username'];
$query = "select * from user where username='$username'";
     $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
     $email = $row['email'];
?>

<form style='z-index:20px;' method="post" action="contact.php">
<?php
if (isset($_SERVER['HTTP_USER_AGENT']) && 
    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
{
?>
<style type="text/css">
.textbox{
border:none;
width:260px;
height:10px;
margin-bottom:18px;
margin-left:-4px;
background-color:#5f5f5f;
padding:10px;
padding-top:9px;
padding-bottom:12px;
}
#textbox2{
width:321px;
height:90px;
margin-left:-68px;
margin-top:13px;
}
</style>
<?php

}
else{
?>
<style type="text/css">
.textbox{
border:none;
width:260px;
height:28px;
margin-bottom:18px;;
background-color:#5f5f5f;
padding-left:10px;
padding-right:10px;
}
#textbox2{
width:324px;
height:105px;
margin-left:-64px;
margin-top:10px;
}
</style>
<?php
}
?>

<style type="text/css">
.submit{
z-index:100;
margin-top:-5px;
position:relative;
left:95px;
}
</style>

<!-- DO NOT change ANY of the php sections -->
<?php
$ipi = getenv("REMOTE_ADDR");
$httprefi = getenv ("HTTP_REFERER");
$httpagenti = getenv ("HTTP_USER_AGENT");
?>

<input type="hidden" name="ip" value="<?php echo $ipi ?>" />
<input type="hidden" name="httpref" value="<?php echo $httprefi ?>" />
<input type="hidden" name="httpagent" value="<?php echo $httpagenti ?>" />


<input class='textbox' 
<?php if (isset($_POST['name'])) { ?> value="<?php echo $_POST['name']; ?>" <?php } ?> type="text" name="name" size="35" />
<br />
<input class='textbox' readonly="readonly" value='<?php echo $email; ?>' type="text" name="email" size="35" />

<br /><br />
<br />
<textarea class='textbox' id='textbox2' style='resize: none;' name="message" rows="4" cols="40"><?php if (isset($_POST['message'])) { ?> <?php echo $_POST['message']; ?> <?php } ?></textarea>
<br />
<input class="submit" type="image" src= "images/sendButton.png" value="Send Mail" />
<br />
</form>
