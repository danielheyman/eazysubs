<?php
/**
*
* viewforum [Dutch]
*
* @package language
* @version $Id: viewforum.php 328 2010-11-10 20:18:23Z Raimon $
* @copyright (c) 2005 phpBB Group, 2007 phpBBservice.nl
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
	'ACTIVE_TOPICS'			=> 'Actieve onderwerpen',
	'ANNOUNCEMENTS'			=> 'Mededelingen',

	'FORUM_PERMISSIONS'		=> 'Forumpermissies',

	'ICON_ANNOUNCEMENT'		=> 'Mededeling',
	'ICON_STICKY'			=> 'Sticky',

	'LOGIN_NOTIFY_FORUM'	=> 'U moet u aanmelden voordat u dit forum kan lezen waarvan u een notificatie heeft ontvangen.',

	'MARK_TOPICS_READ'		=> 'Onderwerpen als gelezen markeren',

	'NEW_POSTS_HOT'			=> 'Nieuwe berichten [ Populair ]', // taalvariabele wordt niet gebruikt
	'NEW_POSTS_LOCKED'		=> 'Nieuwe berichten [ Gesloten ]', // taalvariabele wordt niet gebruikt
	'NO_NEW_POSTS_HOT'		=> 'Geen nieuwe berichten [ Populair ]', // taalvariabele wordt niet gebruikt
	'NO_NEW_POSTS_LOCKED'	=> 'Geen nieuwe berichten [ Gesloten ]', // taalvariabele wordt niet gebruikt
	'NO_READ_ACCESS'		=> 'U heeft niet de juiste permissies om onderwerpen te lezen in dit forum.',
    'NO_UNREAD_POSTS_HOT'   => 'Geen ongelezen berichten [ Populair ]',
    'NO_UNREAD_POSTS_LOCKED'=> 'Geen ongelezen berichten [ Gesloten ]',	

	'POST_FORUM_LOCKED'		=> 'Forum is gesloten',

	'TOPICS_MARKED'			=> 'De onderwerpen voor dit forum zijn nu als gelezen gemarkeerd.',
	
    'UNREAD_POSTS_HOT'      => 'Ongelezen berichten [ Populair ]',
    'UNREAD_POSTS_LOCKED'   => 'Ongelezen berichten [ Gesloten ]',	

	'VIEW_FORUM'			=> 'Bekijk forum',
	'VIEW_FORUM_TOPIC'		=> '1 onderwerp',
	'VIEW_FORUM_TOPICS'		=> '%d onderwerpen',
));

?>