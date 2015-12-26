<?php
/**
*
* acp_bots.php [Urdu]
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
	'BOTS'	=> 'بوٹس کا انتظام',
	'BOTS_EXPLAIN'	=> 'بوٹس ایسے خودکار ایجنٹ ہوتے ہیں جو سرچ انجن کی طرف سے انکی ڈیٹا بیس اپ ڈیٹ کرتے ہیں. کئی بار وہ اس معاملے میں کافی غلطیاں کرتے ہیں، آپ یہاں‌ ان خامیوں پر قابو پانے کے لیےخاص قسم کا بوٹ مخصوص کر سکتے ہیں',
	'BOT_ACTIVATE'	=> 'چالو کریں',
	'BOT_ACTIVE'	=> 'بوٹ‌فعال ہیں',
	'BOT_ADD'	=> 'بوٹ‌شامل کریں',
	'BOT_ADDED'	=> 'نیا بوٹ کامیابی سے شامل کر دیا گیا',
	'BOT_AGENT'	=> 'ایجنٹ میچ',
	'BOT_AGENT_EXPLAIN'	=> 'ایک سٹرنگ بوٹ برائوزر ایجنٹ سے مطابقت رکھتی ہے. جزوی مطابقت کی اجازت ہے',
	'BOT_DEACTIVATE'	=> 'غیر فعال کریں',
	'BOT_DELETED'	=> 'بوٹ کامیابی سے ختم کر دیا گیا',
	'BOT_EDIT'	=> 'بوٹس کی ترمیم کریں',
	'BOT_EDIT_EXPLAIN'	=> 'یہاں‌آپ نئے بوٹس شامل کر سکتے ہیں یا موجودہ بوٹس کی ترمیم کر سکتے ہیں. خاص بوٹ‌گروہ کے لیے اجازات بنانا نا بھولیں',
	'BOT_LANG'	=> 'بوٹ کی زبان',
	'BOT_LANG_EXPLAIN'	=> 'بوٹ کو برائوز کرتے وقت دی جانے والی زبان',
	'BOT_LAST_VISIT'	=> 'آخری دورہ',
	'BOT_IP'	=> 'بوٹ‌کا آئی پی ایڈریس',
	'BOT_IP_EXPLAIN'	=> 'جزوی مطابقت کی اجازت ہے, پتوں کو کوما سے الگ کریں',
	'BOT_NAME'	=> 'بوٹ‌کا نام',
	'BOT_NAME_EXPLAIN'	=> 'آپکی اپنی اطلاع کے لیے استعمال کیا گیا',
	'BOT_NAME_TAKEN'	=> 'یہ نام آپکے فورم پر پہلے ہی استعمال میں ہے اور بوٹ کے نام کے طور پر استعمال نہیں ہو سکتا',
	'BOT_NEVER'	=> 'کبھی نہیں',
	'BOT_STYLE'	=> 'بوٹ کا طرز',
	'BOT_STYLE_EXPLAIN'	=> 'بورڈ کے لیے بوٹ کا طرز',
	'BOT_UPDATED'	=> 'دستیاب بوٹ کامیابی سے اپ ڈیٹ کر دیا گیا',
	'ERR_BOT_AGENT_MATCHES_UA'	=> 'اس بوٹ کے لیے دیا جانے والا ایجنٹ پہلے سے موجود دوسرے بوٹ کے لیے کام کر رہا ہے. براہ کرم اس بوٹ کا ایجنٹ تبدیل کریں',
	'ERR_BOT_NO_IP'	=> 'دیا گیا آئی پی ایڈریس غلط ہے یا ہوسٹ نیم حل نہیں ہو سکا',
	'ERR_BOT_NO_MATCHES'	=> 'اس آئی پی یا بوٹ کی مطابقت کے لیے ایک ایجنٹ کی فراہمی ضروری ہے',
	'NO_BOT'	=> 'وضاحت کردہ شناخت پر کوئی بوٹ دستیاب نہیں‌ہے',
	'NO_BOT_GROUP'	=> 'خاص بوٹ گروہ تلاش نہیں کیا جا سکا',
));

?>