<?php
/**
*
* memberlist.php [Urdu]
*
* @package language
* @version $Id: $
* @copyright (c) 2010 phpBB Group
* @author 2010-11-15 - phpBB Group
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
	'ABOUT_USER'	=> 'پروفائل',
	'ACTIVE_IN_FORUM'	=> 'سب سے زیادہ فعال فورم',
	'ACTIVE_IN_TOPIC'	=> 'سب سے زیادہ فعال موضوع',
	'ADD_FOE'	=> 'دشمنوں میں شامل کریں',
	'ADD_FRIEND'	=> 'دوستوں میں شامل کریں',
	'AFTER'	=> 'بعد',
	'ALL'	=> 'تمام',
	'BEFORE'	=> 'پہلے',
	'CC_EMAIL'	=> 'اس ای میل کی ایک نقل خود کو بھیجیں',
	'CONTACT_USER'	=> 'پتہ',
	'DEST_LANG'	=> 'زبان',
	'DEST_LANG_EXPLAIN'	=> 'اس پیغام کے موصل کے لئے ایک موزوں زبان (اگر دستیاب ہے) کو منتخب کریں.',
	'EMAIL_BODY_EXPLAIN'	=> 'یہ پیغام سادہ ٹیکسٹ کے طور پر بھیجا جائے گا ، کوئی ایچ ٹی ایم ایل یا BBCode شامل نہ کریں. اس پیغام کا واپسی کا پتہ آپ کا ای میل ایڈریس ہے',
	'EMAIL_DISABLED'	=> 'معاف کیجئے گا لیکن تمام ای میل سے متعلق کام غیر فعال کر دیا گیا ہے.',
	'EMAIL_SENT'	=> 'ای میل بھیجی جا چکی ہے',
	'EMAIL_TOPIC_EXPLAIN'	=> 'یہ پیغام ایک سادہ ٹیکسٹ کے طور پر بھیجا جائے گا، کوئی HTML یا بی بی کوڈ شامل نہ کریں. براہ کرم نوٹ فرمائیں کہ موضوع کا عنوان پہلے ہی شامل ہے. اس پیغام کا واپسی کا پتہ آپکا ای میل ایڈریس ہوگا.',
	'EMPTY_ADDRESS_EMAIL'	=> 'وصول کنندہ کے لئے ایک درست ای میل ایڈریس مہیا کرنا ضروری ہے.',
	'EMPTY_MESSAGE_EMAIL'	=> 'آپکے لیے ای-میل کرنے کے لیے پیغام درج کرنا ضروری ہے.',
	'EMPTY_MESSAGE_IM'	=> 'بھیجنے کے لیے آپکو پیغام درج کرنا ضروری ہے.',
	'EMPTY_NAME_EMAIL'	=> 'آپکو وصول کنندہ کا اصلی نام لکھنا ضروری ہے',
	'EMPTY_SUBJECT_EMAIL'	=> 'آپکو اس ای-میل کے لیے ایک موضوع لکھنا ضروری ہے',
	'EQUAL_TO'	=> 'کے برابر ہے',
	'FIND_USERNAME_EXPLAIN'	=> 'مخصوص ارکان کی تلاش کے لیے یہ فارم استعمال کریں. آپکو تمام فیلڈز پر کرنے کی ضرورت نہیں ہے. جزوی ڈیٹا استعمال کے لیے وائلڈ کارڈ * استعمال کریں. تریخ لکھتے وقت اس فارمیٹ کا استعمال کریں، <kbd>YYYY-MM-DD</kbd> جیسا کہ <samp> 2004-02-29</samp>. ایک یا ایک سے زیادہ رکنیتی ناموں‌کو منتخب کرنے کے لیے چیک باکس کا استعمال کریں.',
	'FLOOD_EMAIL_LIMIT'	=> 'آپ اس وقت ایک اور ای-میل نہیں بھیج سکتے. دوبارہ کوشش کریں',
	'GROUP_LEADER'	=> 'گروہ کا رہنما',
	'HIDE_MEMBER_SEARCH'	=> 'رکنی تلاش کو چھپائیں',
	'IM_ADD_CONTACT'	=> 'رابطہ شامل کریں',
	'IM_AIM'	=> 'براہ کرم نوٹ فرمائیں کہ اس استعمال کرنے کے لیے AOL فوری میسنجر کا ہونا ضروری ہے.',
	'IM_AIM_EXPRESS'	=> 'AIM ایکسپریس',
	'IM_DOWNLOAD_APP'	=> 'ایپلیکیشن دائون لوڈ کریں',
	'IM_ICQ'	=> 'براہ کرم نوٹ فرمائیں کہ صارفین کی طرف سے بن چاہے پیغامات کی موصولی بند بھی ہو سکتی ہے',
	'IM_JABBER'	=> 'براہ کرم نوٹ فرمائیں کہ صارفین کی طرف سے بن چاہے پیغامات کی موصولی بند بھی ہو سکتی ہے',
	'IM_JABBER_SUBJECT'	=> 'یہ ایک خود کار پیغام ہے، بارہ کرم اسکا جواب نہ دیں. صارف %1$s کی طرف سے %2$s پر پیغام',
	'IM_MESSAGE'	=> 'آپکا پیغام',
	'IM_MSNM'	=> 'براہ کرم نوٹ‌فرمائیں کہ اسے استعمال کرنے کے لیے ایم-ایس-این میسنجر کا ہونا ضروری ہے',
	'IM_MSNM_BROWSER'	=> 'آپکا برائوزر اسکی حمائیت نہیں کرتا',
	'IM_MSNM_CONNECT'	=> 'MSNM کونیکٹ نہیں ہے./n آپکو آگے جانے کے لیے MSNM سے کونیکٹ ہونا ضروری ہے',
	'IM_NAME'	=> 'آپکا نام',
	'IM_NO_DATA'	=> 'اس صارف کے لیے کوئی مناسب رابطے کی معلومات نہیں ہیں.',
	'IM_NO_JABBER'	=> 'معاف کیجیے گا، اس بورڈ ہر جیبر صارفین کی پیغام رسانی کی حمائیت موجود نہیں ہے. اوپر موجود صارف سے رابطہ کے لیے آپکے سسٹم پر جیبر کلائنٹ کا ہونا ضروری ہے.',
	'IM_RECIPIENT'	=> 'وصول کنندہ',
	'IM_SEND'	=> 'پیغام بھیجیں',
	'IM_SEND_MESSAGE'	=> 'پیغام بھیجیں',
	'IM_SENT_JABBER'	=> '%1$s کو آپکا پیغام کامیابی سے بھیجا جا چکا ہے.',
	'IM_USER'	=> 'فوری جواب بھیجیں',
	'LAST_ACTIVE'	=> 'آخری مرتبہ فعال',
	'LESS_THAN'	=> 'سے کم ہے',
	'LIST_USER'	=> 'صارف 1',
	'LIST_USERS'	=> '%d صارفین',
	'LOGIN_EXPLAIN_LEADERS'	=> 'اس بورڈ پر ٹیم کی لسٹنگ کو دیکھنے کے لیے رجسٹرڈ اور لاگ ان ہونا ضروری ہے.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'اس بورڈ پر ممبران کی فہرست کو دیکھنے کے لیے رجسٹرڈ اور لاگ ان ہونا ضروری ہے',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'اس بورڈ پر ممبران کو تلاش کرنے کے لیے رجسٹرڈ اور لاگ ان ہونا ضروری ہے',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'اس بورڈ پر پروفائل دیکھنے کے لیے رجسٹرڈ اور لاگ ان ہونا ضروری ہے',
	'MORE_THAN'	=> 'سے زیادہ',
	'NO_EMAIL'	=> 'آپ اس ٍصارف کو ای-میل کرنے کے مختار نہیں ہیں',
	'NO_VIEW_USERS'	=> 'آپ صارفین کی فہرست یا پروفائل دیکھنے کے مختار نہیں ہیں',
	'ORDER'	=> 'حکم',
	'OTHER'	=> 'دوسرا',
	'POST_IP'	=> 'IP/ Domain نے پوسٹ کیا',
	'RANK'	=> 'درجہ',
	'REAL_NAME'	=> 'وصول کنندہ کا نام',
	'RECIPIENT'	=> 'وصول کنندہ',
	'REMOVE_FOE'	=> 'دشمن ختم کریں',
	'REMOVE_FRIEND'	=> 'دوست ختم کریں',
	'SEARCH_USER_POSTS'	=> 'صارفین کے مراسلات کی تلاش کریں',
	'SELECT_MARKED'	=> 'نشان ذدہ منتخب کریں',
	'SELECT_SORT_METHOD'	=> 'ترتیب کا طریقہ منتخب کریں',
	'SEND_AIM_MESSAGE'	=> 'AIM پیغام بھیجیں',
	'SEND_ICQ_MESSAGE'	=> 'ICQ پیغام بھیجیں',
	'SEND_IM'	=> 'فوری پیغام رسانی',
	'SEND_JABBER_MESSAGE'	=> 'جیبر پیغام بھیجیں',
	'SEND_MESSAGE'	=> 'پیغام',
	'SEND_MSNM_MESSAGE'	=> 'MSNM/ WLM پیغام بھیجیں',
	'SEND_YIM_MESSAGE'	=> 'YIM پیغام بھیجیں',
	'SORT_EMAIL'	=> 'ای-میل',
	'SORT_LAST_ACTIVE'	=> 'آخری مرتبہ فعال',
	'SORT_POST_COUNT'	=> 'مراسلات کی تعداد',
	'USERNAME_BEGINS_WITH'	=> 'رکنیتی نام شروع ہوتا ہے',
	'USER_ADMIN'	=> 'صارف کا انتظام کریں',
	'USER_BAN'	=> 'پابندی',
	'USER_FORUM'	=> 'یوزر کے اعداد و شمار',

	'USER_LAST_REMINDED'	=> array(
		'0'	=> 'اس وقت کوئی نصیحت نہیں بھیجی گئی',
		'1'	=> '%1$s نصیحت بھیجی گئی <br /> » %2$s',
	),

	'USER_ONLINE'	=> 'آن لائن',
	'USER_PRESENCE'	=> 'بورڈ کی موجودگی',
	'VIEWING_PROFILE'	=> 'پروفائل دیکھ رہے ہیں - %s',
	'VISITED'	=> 'آخری مرتبہ دورہ کیا',
	'WWW'	=> 'ویب سائٹ',
));

?>