<?php
/**
*
* acp_groups.php [Urdu]
*
* @package language
* @version $Id: $
* @copyright (c) 2010 phpBB Group
* @author 2010-11-28 - phpBB Group
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
	'ACP_GROUPS_MANAGE_EXPLAIN'	=> 'اس پینل سے آپ اپنے تمام صارف گروہ کا انتظام کر سکتے ہیں. آپ موجودہ گروہ کع ترمیم، حذف یا نئے گروہ بنا سکتے ہیں. آپ گرہ رہنما بنا سکتے ہیں اور گروہ کو بند یا کھلا بھی کر سکتے ہیں. ',
	'ADD_USERS'	=> 'صارفین شامل کریں',
	'ADD_USERS_EXPLAIN'	=> 'یہاں‌آپ گروہ میں نئے صارفین شامل کر سکتے ہیں. آپ اس گروہ کو صارفین کے لیے طے شدہ بھی بنا سکتے ہیں. اضافی طور پر آپ انہیں گروہ رہنما بھی بنا سکتے ہیں. ایک سطر پر ایک صارف کا نام لکھیں',
	'COPY_PERMISSIONS'	=> 'اجازات یہاں‌ نقل کریں',
	'COPY_PERMISSIONS_EXPLAIN'	=> 'ایک بار بننے کے بعد گروہ کی اجازت یہاں‌منتخب کیے گئے گروہ کے مترادف ہونگی',
	'CREATE_GROUP'	=> 'نیا  گروہ بنائیں',
	'GROUPS_NO_MEMBERS'	=> 'اس گروہ کے کوئی ارکان نہیں',
	'GROUPS_NO_MODS'	=> 'کوئی گروہ رہنما نہیں',
	'GROUP_APPROVE'	=> 'رکن منظور کریں',
	'GROUP_APPROVED'	=> 'منظور شدہ اراکین',
	'GROUP_AVATAR'	=> 'گروہ اوتار',
	'GROUP_AVATAR_EXPLAIN'	=> 'یہ تصویر گروہ کنٹرول پینل میں ظاہر ہوگی',
	'GROUP_CLOSED'	=> 'بند',
	'GROUP_COLOR'	=> 'گروہ کا رنگ',
	'GROUP_COLOR_EXPLAIN'	=> 'اس گروہ کے اراکین کا رنگ واضح کرتا ہے جس میں یہ ظاہر ہونگے. طے شدہ کے لیے خالی چھوڑیں',
	'GROUP_CONFIRM_ADD_USER'	=> 'کیا آپ واقعی %1$s صارف کو گروہ میں شامل کرنا چاہتے ہیں؟',
	'GROUP_CONFIRM_ADD_USERS'	=> 'کیا آپ واقعی %1$s صارفین کو گروہ میں شامل کرنا چاہتے ہیں؟',
	'GROUP_CREATED'	=> 'گروہ کامیابی سے بنا دیا گیا ہے',
	'GROUP_DEFAULT'	=> 'اس رکن کے لیے گرہ طے شدہ کریں',
	'GROUP_DEFS_UPDATED'	=> 'تمام منتخب اراکین کے لیے گروہ طے شدہ کر دیا گیا',
	'GROUP_DELETE'	=> 'صارف کو گروہ سے خارج کریں',
	'GROUP_DELETED'	=> 'گروہ حذف کر دیا گیا اور تمام صارفین کا طے شدہ گروہ سیٹ‌کر دیا گیا',
	'GROUP_DEMOTE'	=> 'گروہ رہنما ہٹائیں',
	'GROUP_DESC'	=> 'گروہ تفصیل',
	'GROUP_DETAILS'	=> 'گروہ تفصیلات',
	'GROUP_EDIT_EXPLAIN'	=> 'یہاں آپ موجودہ گروہ کی ترمیم کر سکتے ہیں. ',
	'GROUP_ERR_USERS_EXIST'	=> 'وضاحت کردہ صارفین پہلے ہی اس گروہ کے رکن ہیں',
	'GROUP_FOUNDER_MANAGE'	=> 'صرف بانی انتظام کر سکتے ہیں',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'اس گروہ  کا صرف بانی انتظام کر سکتے ہیں. اس گروہ کی اجازات رکھنے والی ارکان اسے پھر بھی دیکھ سکتے ہیں. ',
	'GROUP_HIDDEN'	=> 'خفیہ',
	'GROUP_LANG'	=> 'گروہ زبان',
	'GROUP_LEAD'	=> 'گروہ رہنما',
	'GROUP_LEADERS_ADDED'	=> 'اس گروہ میں نئے رہنما شامل کر دیے گئے ہیں',
	'GROUP_LEGEND'	=> 'گروہ کو لیجنڈ میں ظاہر کریں',
	'GROUP_LIST'	=> 'موجودہ ارکان',
	'GROUP_LIST_EXPLAIN'	=> 'اس فہرست میں‌اس گروہ سے تعلق رکھنے والے تمام صارفین کے نام ہیں. آپ اس میں نئے صارفین شامل یا حذف کر سکتے ہیں.',
	'GROUP_MEMBERS'	=> 'گروہ ارکان',
	'GROUP_MEMBERS_EXPLAIN'	=> 'یہ اس گروہ سے تعلق رکھنے والے تمام ارکان کی فہرست ہے. اس میں رہنما کے لیے الگ خانہ اور موجودہ/ منظوری کا انتظار کرنے والے صارفین کا الگ خانہ ہے. ایک صارف کو رہنمائی سے ہٹانے کے لیے حذف کی بجائے "رہنما ختم کریں" کا ربط استعمال کریں. اس طرح آپ گروہ رہنما بھی بنا سکتے ہیں.',
	'GROUP_MESSAGE_LIMIT'	=> 'فی فولڈر گروہ ذاتی پیغامات کی حد',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'یہ ترتیب "فی صارف ذاتی پیغامات فولڈر حد" کی جگہ لیتی ہے. 0 سے غیر فعال کریں.',
	'GROUP_MODS_ADDED'	=> 'نئے گروہ رہنما کامیابی سے شامل کر دیے گئے.',
	'GROUP_MODS_DEMOTED'	=> 'گروہ رہنما کامیابی سے ختم کر دیے گئے.',
	'GROUP_MODS_PROMOTED'	=> 'گروہ ارکان کو کامیابی سے ترقی دے دی گئی.',
	'GROUP_NAME'	=> 'گروہ کا نام',
	'GROUP_NAME_TAKEN'	=> 'آپکا درج کیا گیا نام پہلے سے موجود ہے، دوسرا نام لکھیں.',
	'GROUP_OPEN'	=> 'کھلا',
	'GROUP_PENDING'	=> 'منظوری کی منتظر صارفین',
	'GROUP_MAX_RECIPIENTS'	=> 'فی ذاتی پیغام، وصول کنندگان کی زیادہ سے زیادہ تعداد',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'فی ذاتی پیغام، وصول کنندگان کی زیادہ سے زیادہ تعداد. 0 لکھنے سے بورڈ کی ترتیب استعمال ہوگی.',
	'GROUP_OPTIONS_SAVE'	=> 'گروہ پیمانہ کے اختیارات',
	'GROUP_PROMOTE'	=> 'گروہ رہنما بنائیں',
	'GROUP_RANK'	=> 'گروہ درجہ',
	'GROUP_RECEIVE_PM'	=> 'گروہ ذاتی پیغامات وصول کر سکتا ہے',
	'GROUP_RECEIVE_PM_EXPLAIN'	=> 'نوٹ‌فرمائیں کہ خفیہ گروہ کو پیغام نہیں بھیجا جا سکتا.',
	'GROUP_REQUEST'	=> 'درخواست',
	'GROUP_SETTINGS_SAVE'	=> 'گروہ پیمانہ کے اختیارات',
	'GROUP_SKIP_AUTH'	=> 'گرہ رہنما کو اجازات سے ماروا رکھیں',
	'GROUP_SKIP_AUTH_EXPLAIN'	=> 'اگر فعال ہے تو گروہ رہنما گروہ اجازات کو موروث نہیں کرتا.',
	'GROUP_TYPE'	=> 'گروہ قسم',
	'GROUP_TYPE_EXPLAIN'	=> 'یہ طے کرتا ہے کہ کونسے اراکین اس گروہ کو دیکھ یا شامل ہو سکتے ہیں.',
	'GROUP_UPDATED'	=> 'گروپ کی ترجیحات کو کامیابی سے اپ ڈیٹ کر دیا گیا',
	'GROUP_USERS_ADDED'	=> 'نئے صارفین کامیابی سے گروہ میں شامل کر دیے گئے.',
	'GROUP_USERS_EXIST'	=> 'منتخب اراکین پہلے ہی رکن ہیں.',
	'GROUP_USERS_REMOVE'	=> 'صارف کو گروہ سے خارج کر دیا گیا اور نئی اجازات سیٹ کر دی گئیں.',
	'MAKE_DEFAULT_FOR_ALL'	=> 'ہر صارف کے لیے گروہ طے شدہ بنائیں',
	'MEMBERS'	=> 'ارکان',
	'NO_GROUP'	=> 'کوئی گروہ واضح نہیں کیا گیا',
	'NO_GROUPS_CREATED'	=> 'ابھی تک کوئی گروہ نہیں بنایا گیا',
	'NO_PERMISSIONS'	=> 'اجازات نقل نہ کریں',
	'NO_USERS'	=> 'آپ نے کوئی صارفین درج نہیں کیے',
	'NO_USERS_ADDED'	=> 'گروہ میں‌کوئی صارفین شامل نہیں کیے گئے',
	'NO_VALID_USERS'	=> 'اس عمل کے لیے اہل آپ نے کوئی صارف شامل نہیں کیا.',
	'SPECIAL_GROUPS'	=> 'پہلے سے مقرر گروہ',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'یہ مخصوص گروہ ہوتے ہیں جنہیں حذف یا براہ راست ترمیم نہیں کیا جا سکتا. آپ پھر بھی صارفین شامل کر سکتے ہیں اور بنیادی ترتیبات بدل سکتے ہیں.',
	'TOTAL_MEMBERS'	=> 'ارکان',
	'USERS_APPROVED'	=> 'صارفین کامیابی سے منظور کر لیے گئے',
	'USER_DEFAULT'	=> 'صارف طے شدہ',
	'USER_DEF_GROUPS'	=> 'صارف واضح کردہ گروہ',
	'USER_DEF_GROUPS_EXPLAIN'	=> 'یہ آپ یا دوسرے منتظمین کی طرف سے بنائے گئے گروہ ہیں. ',
	'USER_GROUP_DEFAULT'	=> 'گروہ طے شدہ بنائیں.',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'یہاں "ہاں" منتخب کرنے سے یہ گروہ شامل کردہ صارفین کے لیے طے شدہ ہو جائے گا. ',
	'USER_GROUP_LEADER'	=> 'گروہ رہنما بنائیں',
));

?>