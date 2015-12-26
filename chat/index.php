<?php
$f = $_GET["f"]; 
require_once "src/phpfreechat.class.php";
$params = array();
$params["title"] = "EazySubs";
$params["nick"] = $f;
$params["serverid"] = md5(__FILE__); // calculate a unique id for this chat
$params["debug"] = false;
$params['admins'] = array('EazySubs' => 'Daniel1947');
$params["theme"] = "phoenity";
$params["max_privmsg"] = 20;
$params["shownotice"] = 1;
$chat = new phpFreeChat( $params );

?>

<div style="height:600px; width: 550px; margin: auto;">
    
    <?php $chat->printChat(); ?>
  </div>