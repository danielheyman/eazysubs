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
margin-bottom:18px;
background-color:#5f5f5f;
padding:10px;
padding-top:8px;
padding-bottom:12px;
}
#select{
width:205px;
height:30px;
padding:0;
}
.top{
margin-top:1px;
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
height:28px;
margin-bottom:18px;;
background-color:#5f5f5f;
padding-left:10px;
padding-right:10px;
}
#select{
margin-left:3px;
width:205px;
height:30px;
padding-right:0px;
}
</style>
<?php
}
?>

<style type="text/css">
.submit{
z-index:100;
position:absolute;
left:250px;
}
</style>


<form class='top' action="settings.php" method="post">
<input class="textbox" type="text" size="20" value="<?php echo $email; ?>" maxlength="30" name="email" /><br />
<input class="textbox" class="textbox" type="password" size="20" maxlength="30" name="password" /><br />
<input class="textbox" type="password" size="20" maxlength="30" name="confirmpass" /><br />
<input class="textbox" type="text" size="20" value="<?php echo $youtube; ?>" maxlength="30" name="youtube" /><br />
<select id="select" class="textbox" name="category">
<option value="0" <? if($category=='0') echo 'selected="selected"';?>>None</option>
<option value="1" <? if($category=='1') echo 'selected="selected"';?>>Autos & Vehicles</option>
<option value="2" <? if($category=='2') echo 'selected="selected"';?>>Comedy</option>
<option value="3" <? if($category=='3') echo 'selected="selected"';?>>Education</option>
<option value="4" <? if($category=='4') echo 'selected="selected"';?>>Entertainment</option>
<option value="5" <? if($category=='5') echo 'selected="selected"';?>>Film & Animation</option>
<option value="6" <? if($category=='6') echo 'selected="selected"';?>>Gaming</option>
<option value="7" <? if($category=='7') echo 'selected="selected"';?>>Howto & Style</option>
<option value="8" <? if($category=='8') echo 'selected="selected"';?>>Music</option>
<option value="9" <? if($category=='9') echo 'selected="selected"';?>>News & Politics</option>
<option value="10" <? if($category=='10') echo 'selected="selected"';?>>Nonprofits & Activism</option>
<option value="11" <? if($category=='11') echo 'selected="selected"';?>>People & Blogs</option>
<option value="12" <? if($category=='12') echo 'selected="selected"';?>>Pets & Animals</option>
<option value="13" <? if($category=='13') echo 'selected="selected"';?>>Science & Technology</option>
<option value="14" <? if($category=='14') echo 'selected="selected"';?>>Sports</option>
<option value="15" <? if($category=='15') echo 'selected="selected"';?>>Travel & Events</option>
</select>
<br />
<input class="submit" type="image" src= "images/updateButton.png" name="submit" value="Update!" />
</form>