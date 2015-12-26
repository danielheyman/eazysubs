<?php if (isset($login_error)) { ?>
There was an error: <?php echo $login_error; ?>, please try again.
<?php } ?>

<?php
if (isset($_SERVER['HTTP_USER_AGENT']) && 
    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
{
?>
<style type="text/css">
.textbox2{
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
.textbox2{
border:none;
width:185px;
height:27px;
margin-bottom:19px;
background-color:#5f5f5f;
padding-left:10px;
padding-right:10px;
}
</style>
<?php
}
?>

<style type="text/css">
.submit2{
position:absolute;
left:108px;
}


A:link {text-decoration: none; color:white;}
A:visited {text-decoration: none; color:white;}
A:active {text-decoration: none; color:white;}
A:hover {text-decoration: underline;}
</style>



<form action="login2.php" method="post">
<input class="textbox2" type="text" size="20" maxlength="30" name="username2" 
<?php if (isset($_POST['username2'])) { ?> value="<?php echo $_POST['username2']; ?>" <?php } ?>/><br />
<input class="textbox2" type="password" size="20" maxlength="30" name="password" /><br />
<input class="submit2" type="image" src= "images/loginButton.png" name="submit" value="Login" />
<a href="forgotpass.php" style="font-family:Arial; font-weight:bold; font-size:13px; margin-left:-305px; position:relative; top:33px;">Forgot Password?</a>
</form>