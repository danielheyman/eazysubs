<?php
/**
*
* groups.php [Urdu]
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
	'ALREADY_DEFAULT_GROUP'	=> 'منتخب کیا گیا گروہ پہلے ہی آپ کا طے شدہ گروہ ہے.',
	'ALREADY_IN_GROUP'	=> 'آپ پہلے ہی منتخب شدہ گروہ کے رکن ہیں.',
	'ALREADY_IN_GROUP_PENDING'	=> 'آپ پہلے ہی منتخب شدہ گروہ کی رکنیت کے لیے درخواست کر چکے ہیں.',
	'CANNOT_JOIN_GROUP'	=>	'آپ اس گروہ میں شامل نہیں ہو سکتے.',
	'CANNOT_RESIGN_GROUP'	=>	'آپ اس گروہ سے استعفیٰ نہیں دے سکتے.',
	'CHANGED_DEFAULT_GROUP'	=> 'طے شدہ گروہ کامیابی سے تبدیل کر دیا گیا ہے.',
	'GROUP_AVATAR'	=> 'گروہ کی نمائندہ تصویر',
	'GROUP_CHANGE_DEFAULT'	=> 'کیا آپ واقی طے شدہ گروہ کی رکنیت میں تبدیلی کرنا چاہتے ہیں “%s”?',
	'GROUP_CLOSED'	=> 'مقفل',
	'GROUP_DESC'	=> 'گروہ کے اوصاف',
	'GROUP_HIDDEN'	=> 'خفیہ',
	'GROUP_INFORMATION'	=> 'گروہ کے متعلق معلومات',
	'GROUP_IS_CLOSED'	=> 'یہ ایک مقفل گروہ ہے, نئے اراکین صرف گروہ کے سربراہ کی دعوت پر ہی اس میں شریک ہو سکتے ہیں .',
	'GROUP_IS_FREE'	=> 'یہ ایک بالکل آزاد گروہ ہے, تمام نئے اراکیں کو خوش آمدید کہا جاتا ہے.',
	'GROUP_IS_HIDDEN'	=> 'یہ ایک خفیہ گروہ ہے, صرف اس گروہ کے اراکین ہی  اس گروہ کے اراکین کی فہرست کا مطالعہ کر سکتے ہیں',
	'GROUP_IS_OPEN'	=> 'یہ ایک کھلا گروہ ہے, اراکین اس گروہ میں شمولیت کے لیے درخواست کر سکتے ہیں.',
	'GROUP_IS_SPECIAL'	=> 'یہ ایک خصوصی گروہ ہے, خصوصی گروہوں کی تنظیم سازی بورڈ کے منتظمین کی جاانب سے کی جاتی ہے.',
	'GROUP_JOIN'	=> 'گروہ میں شمولیت اختیار کریں',
	'GROUP_JOIN_CONFIRM'	=> 'کیا آپ واقعی منتخب شدہ گروہ میں شمولیت اختیار کرنا چاہتے ہیں?',
	'GROUP_JOIN_PENDING'	=> 'گروہ میں شمولیت کی درخواست کریں',
	'GROUP_JOIN_PENDING_CONFIRM'	=> 'کیا آپ واقعی منتخب شدہ گروہ میں شمولیت کی درخواست کرنا چاہتے ہیں?',
	'GROUP_JOINED'	=> 'آپ کامیابی سے منتخب شدہ گروہ میں شامل ہو گئے ہیں.',
	'GROUP_JOINED_PENDING'	=> 'منتخب شدہ گروہ میں شمولیت کی درخواست ارسال ہو گئی ہے. براہ کرم انتظار کیجئے تا آنکہ گروہ کے سربراہ کی جانب سے آپ کی درخواست منظور کر لی جائے.',
	'GROUP_LIST'	=> 'اراکین کی ترتیب و تنظیم',
	'GROUP_MEMBERS'	=> 'گروہ کے اراکین',
	'GROUP_NAME'	=> 'گروہ کا نام',
	'GROUP_OPEN'	=> 'کھلا',
	'GROUP_RANK'	=> 'گروہ کا عہدہ',
	'GROUP_RESIGN_MEMBERSHIP'	=> 'گروہ کی رکنیت سے استعفیٰ',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'کیا آپ واقعی منتخب شدہ گروہ کی رکنیت سے مستعفی ہونا چاہتے ہیں؟',
	'GROUP_RESIGN_PENDING'	=> 'گروہ کی زیر التوا رکنیت سے استعفٰی',
	'GROUP_RESIGN_PENDING_CONFIRM'	=> 'کیا آپ واقعی گروہ کی زیر التوا رکنیت سے مستعفی ہونا چاہتے ہیں',
	'GROUP_RESIGNED_MEMBERSHIP'	=> 'منتخب شدہ گروہ سے آپ کی رکنیت حذف کر دی گئی ہے.',
	'GROUP_RESIGNED_PENDING'	=> 'منتخب شدہ گروہ سے آپ کی زیر التوا رکنیت ختم کر دی گئی ہے',
	'GROUP_TYPE'	=> 'گروہ کی نوعیت',
	'GROUP_UNDISCLOSED'	=> 'خفیہ گروہ',
	'FORUM_UNDISCLOSED'	=> 'خفیہ فورم کی ادارت (s)',
	'LOGIN_EXPLAIN_GROUP'	=> 'گروہ کی تفصیلات ملاحظہ کرنے کے لیے متصل ہونا ضروری ہے.',
	'NO_LEADERS'	=> 'آپ کسی گروہ کے سربراہ نہیں ہیں.',
	'NOT_LEADER_OF_GROUP'	=> 'مطلوبہ ھدایات پر عمل درآمد ممکن نہیں کیونکہ آپ منتخب شدہ گروہ کے سربراہ نہیں ہیں.',
	'NOT_MEMBER_OF_GROUP'	=> 'مطلوبہ ھدایات پر عمل درآمد ممکن نہی کیونکہ آپ منتخب شدہ گروہ کے رکن نہیں ہیں یا آپ کی رکنیت کو ابھی تک منظور نہیں کیا گیا.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'آپ اپنے طے شدہ گروہ سے مستعفی نہیں ہو سکتے',
	'PRIMARY_GROUP'	=> 'بنیادی گروہ',
	'REMOVE_SELECTED'	=> 'منتخب شدہ کو حذف کریں',
	'USER_GROUP_CHANGE'	=> 'از “%1$s” گروہ، بجانب “%2$s”',
	'USER_GROUP_DEMOTE'	=> 'سربراہی سے برخاستگی',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'کیا آپ واقعی منتخب شدہ گروہ کی سربراہی سے برخاستگی چاہتے ہیں?',
	'USER_GROUP_DEMOTED'	=> 'آپ سربراہی سے برخاست ہو چک ہیں.',
));

?>