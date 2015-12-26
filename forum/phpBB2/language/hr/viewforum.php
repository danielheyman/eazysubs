<?php
/** 
*
* viewforum [Croatian]
*
* @package language
* @version $Id: $
* @copyright phpBB (c) 2000-2008 phpBB Group 
* @author Ančica Sečan 2003-2008
* @author hecos 2010
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
   exit;
}
if (empty($lang) || !is_array($lang))
{
$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
'ACTIVE_TOPICS'=> 'Aktivne teme',
'ANNOUNCEMENTS'=> 'Obavijesti',

'FORUM_PERMISSIONS'=> 'Dopuštenja',

'ICON_ANNOUNCEMENT'=> 'Obavijest',
'ICON_STICKY'=> 'Važno',

'LOGIN_NOTIFY_FORUM'=> 'Za pregledavanje ovog foruma, [o kojem ti je stigla obavijest], moraš se prijaviti.',

'MARK_TOPICS_READ'=> 'Označi teme kao pročitane',
'MOVED_TOPIC'=> 'Premješteno',

'NEW_POSTS_HOT'=> 'Novi postovi [Popularno]',
'NEW_POSTS_LOCKED'=> 'Novi postovi [Zaključano]',
'NO_NEW_POSTS_HOT'=> 'Nema novih postova [Popularno]',
'NO_NEW_POSTS_LOCKED'=> 'Nema novih postova [Zaključano]',
'NO_READ_ACCESS'=> 'Nemaš dopuštenje za pregledavanje tema na ovom forumu.',

'POST_FORUM_LOCKED'=> 'Forum je zaključan.',

'TOPICS_MARKED'=> 'Teme su označene kao pročitane.',

'VIEW_FORUM'=> 'Pogledaj forum',
'VIEW_FORUM_TOPIC'=> '1 tema',
'VIEW_FORUM_TOPICS'=> '%d tema/e',
));
?>