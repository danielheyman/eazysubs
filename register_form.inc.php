<?php if (isset($reg_error)) { ?>
There was an error: <?php echo $reg_error; ?>, please try again.
<?php } ?>

<?php
if (isset($_SERVER['HTTP_USER_AGENT']) && 
    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
{
?>
<style type="text/css">
.textbox{
border:none;
width:185px;
height:10px;
margin-bottom:17px;
background-color:#5f5f5f;
padding:10px;
}
</style>
<?php

}
else{
?>
<style type="text/css">
.textbox{
border:none;
width:185px;
height:27px;
margin-bottom:18px;
background-color:#5f5f5f;
padding-left:10px;
padding-right:10px;
}
</style>
<?php
}
?>

<style type="text/css">
.submit{
position:absolute;
left:108px;
}
</style>



<form action="register.php" method="post">
<input class="textbox"  type="text" size="20" maxlength="30" name="username" 
<?php if (isset($_POST['username'])) { ?> value="<?php echo $_POST['username']; ?>" <?php } ?>/><br />
<input class="textbox" class="textbox" type="password" size="20" maxlength="30" name="password" /><br />
<input class="textbox" type="password" size="20" maxlength="30" name="confirmpass" /><br />
<input class="textbox" type="text" size="20" maxlength="30" name="email" <?php if (isset($_POST['email'])) { ?> value="<?php echo $_POST['email']; ?>" <?php } ?>/><br />
<input class="textbox" type="text" size="20" maxlength="30" name="confirmemail" <?php if (isset($_POST['confirmemail'])) { ?> value="<?php echo $_POST['confirmemail']; ?>" <?php } ?>/><br />
<input class="textbox" type="text" size="20" maxlength="30" name="youtubeUserName" <?php if (isset($_POST['youtubeUserName'])) { ?> value="<?php echo $_POST['youtubeUserName']; ?>" <?php } ?>/><br />
<input class="submit" type="image" src= "images/registerButton.png" name="submit" value="Register!" />
</form>