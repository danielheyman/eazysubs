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
$username = $_SESSION['username'];
if($username == 'EazySubs')
{


if(isset($_POST['id']) and isset($_POST['accepted']))
{
$id = $_POST['id'];
$accepted = $_POST['accepted'];
$result = mysql_query("SELECT link, userid FROM videoforpoints WHERE id = '$id'") or die("SELECT Error: ".mysql_error());
while ($row = mysql_fetch_array($result)){
$link = $row['link'];
$userid = $row['userid'];
}

if(mysql_num_rows(mysql_query("SELECT id FROM videoforpoints WHERE link = '$link' and Completed = 'true'"))){
$query = "Update videoforpoints set accepted = 'false', Completed = 'true' where id = '$id'";
mysql_query ($query);
$query = "Update user set VideosDeclined = VideosDeclined + 1 where userid = '$userid'";
mysql_query ($query);
}
else if($accepted == 'Decline')
{
$query = "Update videoforpoints set accepted = 'false', Completed = 'true' where id = '$id'";
mysql_query ($query);
$query = "Update user set VideosDeclined = VideosDeclined + 1 where userid = '$userid'";
mysql_query ($query);
}
else if($accepted == 'Accept')
{
$query = "Update videoforpoints set accepted = 'true', Completed = 'true' where id = '$id'";
mysql_query ($query);
$query = "Update user set VideosAccepted = VideosAccepted + 1, credits = credits + 200 where userid = '$userid'";
mysql_query ($query);
}
}


$result = mysql_query("SELECT id, youtubeusername, link FROM videoforpoints WHERE Completed = 'false' limit 1") or die("SELECT Error: ".mysql_error());
while ($row = mysql_fetch_array($result)){
$id = $row['id'];
$youtubeusername = $row['youtubeusername'];
$link = $row['link'];
?>
<form method="post" action="adminVideoVerify.php">
    <input type="hidden" name="id" value="<?php echo $id ?>" />
    <a target="_blank" href="<?=$link?>"><?=$youtubeusername?></a>
    <select name="accepted">
        <option>Decline</option>
        <option>Accept</option>
    </select>
    <input type="submit"/>
</form>

<br/>
<?
$piece = explode("?v=", $link);
$piece = explode("&f", $piece[1]);
echo $piece[0] . '<br>';
$json = file_get_contents("http://gdata.youtube.com/feeds/api/videos/" . $piece[0] . "?v=2&alt=jsonc");
$pieces = explode('"title":"', $json);
$pieces = explode('"', $pieces[1]);
echo "title: " . $pieces[0] . '<br>';
$pieces = explode('"description":"', $json);
$pieces = explode('"', $pieces[1]);
echo "desription: " . $pieces[0]. '<br>';
echo "<iframe width='560' height='349' src='http://www.youtube.com/embed/" . $piece[0] . "?autoplay=1' frameborder='0' allowfullscreen></iframe>";
}
}
else{
?>
<script type='text/javascript'>
window.location = 'index.php';
</script>
<?php
}
?>