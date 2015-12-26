Fill in the fields below and we will send you an email with your username. Make sure to check your spam if you do not recieve anything.<br/><br/>
<form style='z-index:20px;' method="post" action="forgotuser.php">
Email: <input class='textbox' <?php if (isset($_POST['email'])) { ?> value="<?php echo $_POST['email']; ?>" <?php } ?> type="text" name="email" size="35" />

<br />
<input class="submit" type="image" src= "images/sendButton.png" value="Send Mail" />
<br />
</form>