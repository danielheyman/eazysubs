<?php
/**
*
* acp_email.php [Urdu]
*
* @package language
* @version $Id: $
* @copyright (c) 2010 phpBB Group
* @author 2010-11-18 - phpBB Group
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
	'ACP_MASS_EMAIL_EXPLAIN'	=> 'آپ یہاں‌ سے مختلف صارفین یا گروہوں کوپیغام ای میل بھیج سکتے ہیں. اگر آپ کافی زیادہ صارفین یا گروہوں‌کو ای میل کر رہے ہیں تو آپکو تھوڑا صابر رہنا ہوگا کیونکہ اس قسم کی ای میلز کچھ طویل وقت بھی لے سکتی ہیں. اس عمل کے مکمل ہونے پر آپکو پیغام دے دیا جائے گا.',
	'ALL_USERS'	=> 'تمام صارفین',
	'COMPOSE'	=> 'نیا پیغام لکھیں',
	'EMAIL_SEND_ERROR'	=> 'ای میل بھیجتے ہوئے ایک یا اس سے زیادہ غلطیاں ہیں. براہ کرم تفصیل کے لیے %sغلطیوں کا لاگ%s دیکھیں',
	'EMAIL_SENT'	=> 'یہ پیغام بھیج دیا گیاہے',
	'EMAIL_SENT_QUEUE'	=> 'یہ پیغام بھیجنے والی لائن میں ہے',
	'LOG_SESSION'	=> 'ای میل دورانیہ کو اہم لاگ کریں',
	'SEND_IMMEDIATELY'	=> 'فوراْ بھیجیں',
	'SEND_TO_GROUP'	=> 'گروہ کو بھیجیں',
	'SEND_TO_USERS'	=> 'صارفین کو بھیجیں',
	'SEND_TO_USERS_EXPLAIN'	=> 'یہاں ناموں کا اندراج اوپر کسی  بھی منتخب شدہ گروہ کی جگہ لے لے گا. ہر صارف کا نام نئی سطر میں‌لکھیں',
	'MAIL_HIGH_PRIORITY'	=> 'اونچا',
	'MAIL_LOW_PRIORITY'	=> 'نیچا',
	'MAIL_NORMAL_PRIORITY'	=> 'عام',
	'MAIL_PRIORITY'	=> 'میل کی ترجیح',
	'MASS_MESSAGE'	=> 'آپکا پیغام',
	'MASS_MESSAGE_EXPLAIN'	=> 'براہ مہربانی نوٹ کریں کہ آپ صرف سادہ متن درج کر سکتے ہیں. تمام مارک اپ بھیجنے سے پہلے نکال دیا جائے گا.',
	'NO_EMAIL_MESSAGE'	=> 'آپ کو پیغام درج کرنا ہوگا.',
	'NO_EMAIL_SUBJECT'	=> 'آپکو اپنے پیغام کے لئے ایک عنوان کا تعین کرنا ہوگا.',
));

?>