<?php
/**
*
* viewforum [Serbian]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
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
	'ACTIVE_TOPICS'			=> 'Активне теме',
	'ANNOUNCEMENTS'			=> 'Саопштења',

	'FORUM_PERMISSIONS'		=> 'Дозволе форума',

	'ICON_ANNOUNCEMENT'		=> 'Саопштење',
	'ICON_STICKY'			=> 'Лепљива',

	'LOGIN_NOTIFY_FORUM'	=> 'Обавештени сте о овом форуму, молимо Вас да се пријавите како бисте га прегледали.',

	'MARK_TOPICS_READ'		=> 'Означи теме као прочитане',

	'NEW_POSTS_HOT'			=> 'Нове поруке [ Популарни ]',
	'NEW_POSTS_LOCKED'		=> 'Нове поруке [ Закључани ]',
	'NO_NEW_POSTS_HOT'		=> 'Нема нових порука [ Популарни ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Нема нових порука [ Закључани ]',
	'NO_READ_ACCESS'		=> 'Немате потребне дозволе да читате теме у овом форуму.',

	'POST_FORUM_LOCKED'		=> 'Форум је закључан',

	'TOPICS_MARKED'			=> 'Теме за овај форум су сада означене као прочитане.',

	'VIEW_FORUM'			=> 'Преглед форума',
	'VIEW_FORUM_TOPIC'		=> '1 тема',
	'VIEW_FORUM_TOPICS'		=> '%d тема',
));

?>