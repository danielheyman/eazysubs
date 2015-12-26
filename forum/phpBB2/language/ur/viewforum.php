<?php
/**
*
* viewforum.php [Urdu]
*
* @package language
* @version $Id: $
* @copyright (c) 2010 phpBB Group
* @author 2010-11-20 - phpBB Group
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
	'ACTIVE_TOPICS'	=> 'فعال موضوعات',
	'ANNOUNCEMENTS'	=> 'اعلانات',
	'FORUM_PERMISSIONS'	=> 'فورم کے اجازت نامے',
	'ICON_ANNOUNCEMENT'	=> 'اعلانات',
	'ICON_STICKY'	=> 'اھم ترین',
	'LOGIN_NOTIFY_FORUM'	=> 'آپ کو اس فورم کے بارے میں اطلاع نامہ جاری کیا گیا ہے, ملاحظہ کے لیے متصل ہو جایئے.',
	'MARK_TOPICS_READ'	=> 'موضوعات کو بطور خواندہ نشان زد کریں',
	'NEW_POSTS_HOT'	=> 'نئے مراسلے [ مقبول ]',
	'NEW_POSTS_LOCKED'	=> 'نئے مراسلے [ مقفل ]',
	'NO_NEW_POSTS_HOT'	=> 'کوئی نیا مراسلہ نہیں [ مقبول ]',
	'NO_NEW_POSTS_LOCKED'	=> 'کوئی نیا مراسلہ نہیں [ مقفل ]',
	'NO_READ_ACCESS'	=> 'اس فورم میں موجود موضوعات کے مطالعہ کے لیے آپ کے پاس مطلوبہ اجازت نامہ موجود نہیں.',
	'NO_UNREAD_POSTS_HOT'	=> 'کوئی نئے مراسلات نہیں‌[مقبول]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'کوئی نئے مراسلات نہیں‌[مقفل]',
	'POST_FORUM_LOCKED'	=> 'فورم مقفل ہے',
	'TOPICS_MARKED'	=> 'اس فورم کے تمام موضوعات اب بطور "خواندہ موضوعات" نشان زد ہوگئے ہیں.',
	'UNREAD_POSTS_HOT'	=> 'ان پڑھے مراسلات[مقبول]',
	'UNREAD_POSTS_LOCKED'	=> 'ان پڑھے مراسلات[مقفل]',
	'VIEW_FORUM'	=> 'فورم دیکھیئے',
	'VIEW_FORUM_TOPIC'	=> '1 موضوع',
	'VIEW_FORUM_TOPICS'	=> '%d موضوعات',
));

?>