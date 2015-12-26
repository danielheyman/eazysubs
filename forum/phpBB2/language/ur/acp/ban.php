<?php
/**
*
* acp_ban.php [Urdu]
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
	'1_HOUR'	=> '1 گھنٹہ',
	'30_MINS'	=> '30 منٹ',
	'6_HOURS'	=> '6 گھنٹے',
	'ACP_BAN_EXPLAIN'	=> 'آپ یہاں‌صارفین کو نام، آی پی یا ای-میل ایڈریس سے پابند کر سکتے ہیں. آپ پابندی کی (زیادہ سے زیادہ 3000 حروف پر مشتمل) وجہ بھی واضح‌کر سکتے ہیں. پابندی کی مدت بھی واضح کی جا سکتی ہے. ',
	'BAN_EXCLUDE'	=> 'پابندی سے نکالیں',
	'BAN_LENGTH'	=> ' پابندی کی مدت',
	'BAN_REASON'	=> ' پابندی کی وجہ',
	'BAN_GIVE_REASON'	=> 'پابند صارف کو دکھائی جانے والی وجہ',
	'BAN_UPDATE_SUCCESSFUL'	=> 'فہرست کو کامیابی سے اپڈیٹ کر دیا گیا ہے.',
	'BANNED_UNTIL_DATE'	=> 'مدت %s',
	'BANNED_UNTIL_DURATION'	=> '%1$s (مدت %2$s)',
	'EMAIL_BAN'	=> 'ایک یا اس سے زیادہ ای میل ایڈریس پر پابندی لگائیں',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'تمام ای میل ایڈریس کو پاپندی سے خارج کرنے کے لیے اسے فعال کریں.',
	'EMAIL_BAN_EXPLAIN'	=> 'ایک سے زیادہ ای-میل ایڈریس واضح کرنے کے لیے ہر سطر میں‌ایک لکھیں. جزوی پتوں کو ملانے کے لیے * کو وائلڈ کارڈ کے طور پر استعمال کریں. جیسا کہ <samp>*@hotmail.com</samp> یا <samp>*@*.domain.tld</samp> وغیرہ',
	'EMAIL_NO_BANNED'	=> 'کوئی پابند ای میل ایڈریس نہیں.',
	'EMAIL_UNBAN'	=> 'ای میلز غیر پابند یا جارج کریں',
	'EMAIL_UNBAN_EXPLAIN'	=> 'آپ ایک ہی بار میں ای میلز غیر پابند یا جارج کرسکتے ہیں اگ آپ اپنے کمپیوٹر اور براوزر کی keys combination ٹھیک سے استعمال کریں.',
	'IP_BAN'	=> 'ایک یا ایک سے زیادہ IPS کو بین کریں',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'اس آئی پی ایڈریس پر تمام موجودہ پابندیاں ختم کرنے کے لیے اسے فعال کریں',
	'IP_BAN_EXPLAIN'	=> 'ہر آئی پی یا ہوسٹ نیم کو واضح کرنے کے لیے نئی سطر پر لکھیں. آئی پی کی رینج واضح‌کرنے کے لیے شروع اور آخر کو ہائفن (-) کے ساتھ الگ کریں. ',
	'IP_HOSTNAME'	=> 'آئی پی ایڈریس یا ہوسٹ نیم',
	'IP_NO_BANNED'	=> 'کوئی پابند آئی پی ایڈریس نہیں',
	'IP_UNBAN'	=> 'آئی پی غیر پابند یا غیر شامل کریں',
	'IP_UNBAN_EXPLAIN'	=> 'آپ ایک یا اس سے زیادہ آئی پی ایڈریس کو ایک ہی بار میں غیر پابند یا شامل کر سکتے ہیں اگر آپ مائوس اور کی بورڈ کے مناسب مجموعہ کا استعمال کریں',
	'LENGTH_BAN_INVALID'	=> 'تاریخ کا فارمیٹ <kbd>YYYY-MM-DD</kbd>  ہونا ضروری ہے.',
	'PERMANENT'	=> 'مستقل',
	'UNTIL'	=> 'کب تک',
	'USER_BAN'	=> 'ایک یا زیادہ رکنی نام پابند کریں',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'درج کیے گئے ارکان پر پابندی ختم کرنے کے لیے اسے فعال کریں',
	'USER_BAN_EXPLAIN'	=> 'آپ مختلف ارکان کو ایک ہی مرتبہ پابند کر سکتے ہیں. <span style="text-decoration: underline;">رکنی نام تلاش کریں</span> کے استعمال سے آپ ایک یا زیادہ رکنی نام شامل کر سکتے ہیں.',
	'USER_NO_BANNED'	=> 'کوئی پابند رکن نہیں',
	'USER_UNBAN'	=> 'رکنی نام غیر پابند یا پابند کریں',
	'USER_UNBAN_EXPLAIN'	=> 'آپ ایک یا اس سے زیادہ رکنی نام کو ایک ہی بار میں غیر پابند یا شامل کر سکتے ہیں اگر آپ مائوس اور کی بورڈ کے مناسب مجموعہ کا استعمال کریں',
));

?>