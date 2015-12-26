<?php
/**
*
* viewforum [Hungarian]
*
* @package language
* @version $Id: viewforum.php 224 2010-11-21 16:41:59Z fberci $
* @copyright (c) 2007 „Magyar phpBB Közösség fordítók”
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Original copyright: (c) 2005 phpBB Group
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
	'ACTIVE_TOPICS'			=> 'Aktív témák',
	'ANNOUNCEMENTS'			=> 'Közlemények',

	'FORUM_PERMISSIONS'		=> 'Fórum jogosultságok',

	'ICON_ANNOUNCEMENT'		=> 'Közlemény',
	'ICON_STICKY'			=> 'Kiemelt',

	'LOGIN_NOTIFY_FORUM'	=> 'Értesítést kaptál erről a fórumról. Lépj be, hogy megtekinthesd.',

	'MARK_TOPICS_READ'		=> 'Témák megjelölése olvasottként',

	'NEW_POSTS_HOT'			=> 'Új hozzászólások [ népszerű ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> 'Új hozzászólások [ lezárt ]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'Nincs új hozzászólás [ népszerű ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'Nincs új hozzászólás [ lezárt ]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'Nincs meg a kellő jogosultságod a fórumbeli témák olvasásához.',
	'NO_UNREAD_POSTS_HOT'		=> 'Nincs olvasatlan hozzászólás [ népszerű ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'Nincs olvasatlan hozzászólás [ lezárt ]',

	'POST_FORUM_LOCKED'		=> 'A fórum le van zárva.',

	'TOPICS_MARKED'			=> 'A fórum témáit sikeresen megjelöltük olvasottként.',

	'UNREAD_POSTS_HOT'		=> 'Olvasatlan hozzászólások [ népszerű ]',
	'UNREAD_POSTS_LOCKED'	=> 'Olvasatlan hozzászólások [ lezárt ]',

	'VIEW_FORUM'			=> 'Fórum megtekintése',
	'VIEW_FORUM_TOPIC'		=> '1 téma',
	'VIEW_FORUM_TOPICS'		=> '%d téma',
));

?>
