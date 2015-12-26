<?php
/**
*
* acp_users.php [Urdu]
*
* @package language
* @version $Id: $
* @copyright (c) 2010 phpBB Group
* @author 2010-11-25 - phpBB Group
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
	'ADMIN_SIG_PREVIEW'	=> 'دستخط پیش منظر',
	'AT_LEAST_ONE_FOUNDER'	=> 'آپ اس صارف کو بانی سے عام میں تبدیل نہیں کر سکتے. اس بورڈ کے لیے کم سے کم ایک بانی کا فعال رہنا ضروری ہے. اگر آپ اس صارف کو بانی سے عام میں‌تبدیل کرنا چاہتے ہیں تو دوسرے صارف کو پہلی بانی میں تبدیل کریں.',
	'BAN_ALREADY_ENTERED'	=> 'پابندی پہلے کامیابی سے شامل کر دی گئی تھی. پابندی کی فہرست اپ ڈیٹ نہیں‌ ہوئی.',
	'BAN_SUCCESSFUL'	=> 'پابندی کامیابی سے شامل کر دی گئی',
	'CANNOT_BAN_ANONYMOUS'	=> 'آپکو نامعلوم اکاؤنٹ‌پر پابندی لگانے کی اجازت نہیں ہے. نامعلوم صارفین کے لیے اجازات کالم میں اجازات رکھی جا سکتی ہیں.',
	'CANNOT_BAN_FOUNDER'	=> 'آپکو بانی اکاؤنٹ پابند کرنے کی اجازت نہیں ہے',
	'CANNOT_BAN_YOURSELF'	=> 'آپکو خود کو پابند کرنے کی اجازت نہیں ہے',
	'CANNOT_DEACTIVATE_BOT'	=> 'آپ خودکار صارفین کو پابند نہیں کر سکتے. ان صارفین کو خودکار صارفین کے صفحے سے غیر فعال کریں.',
	'CANNOT_DEACTIVATE_FOUNDER'	=> 'آپکو بانی اکاؤنٹ غیر فعال کرنے کی اجازت نہیں ہے',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'آپکو خود کو غیر فعال کرنے کی اجازت نہیں ہے',
	'CANNOT_FORCE_REACT_BOT'	=> 'آپ خودکار صارفین اکاؤنٹس کو دوبارہ فعالی پر مجبور نہیں کر سکتے. انہیں خودکار صارفین صفحے پر فعال کریں',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'آپ بانی اکاؤنٹ کو دوبارہ فعالی پر مجبور نہیں کر سکتے',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'آپ خود کے اکاؤنٹ کو دوبارہ فعالی پر مجبور نہیں کر سکتے',
	'CANNOT_REMOVE_ANONYMOUS'	=> 'آپ مہمان صارف اکاؤنٹ ختم نہیں کر سکتے',
	'CANNOT_REMOVE_YOURSELF'	=> 'آپ اپنے صارف اکاؤنٹ ختم نہیں کر سکتے',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'آپ نظر انداز کیے گئے صارفین کو بانی نہیں بنا سکتے',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'صارفین کو بانی بنانے سے پہلے انہیں فعال کرنا ضروری ہے، صرف فعال صارفین کو بانی بنایا جا سکتا ہے',
	'CONFIRM_EMAIL_EXPLAIN'	=> 'صرف صارف ای-میل کی تبدیلی کے وقت اسکی وضاحت کی ضرورت ہے',
	'DELETE_POSTS'	=> 'مراسلات حذف کریں',
	'DELETE_USER'	=> 'صارف حذف کریں',
	'DELETE_USER_EXPLAIN'	=> 'نوٹ فرامائیں‌کہ حذف کیےگئے صارفین واپس نہیں لائے جا سکتے.',
	'FORCE_REACTIVATION_SUCCESS'	=> 'دوبارہ فعالی میں‌ مجبوری کامیاب رہی ہے',
	'FOUNDER'	=> 'بانی',
	'FOUNDER_EXPLAIN'	=> 'بانی صارفین کے پاس تمام اجازات ہوتی ہیں، انہیں ٍیر بانی صارفین کی طرف  پابند، حذف یا ترمیم نہیں کیا جا سکتا',
	'GROUP_APPROVE'	=> 'صارف منظور کریں',
	'GROUP_DEFAULT'	=> 'صارف کے لیے گروہ طے شدہ کریں',
	'GROUP_DELETE'	=> 'صارف کو گروہ سے نکالیں',
	'GROUP_DEMOTE'	=> 'گروہ کا رہنما ختم کریں',
	'GROUP_PROMOTE'	=> 'گروہ کا رہنما بنائیں',
	'IP_WHOIS_FOR'	=> '%s کا IP whois',
	'LAST_ACTIVE'	=> 'آخری مرتبہ فعال',
	'MOVE_POSTS_EXPLAIN'	=> 'اس صارف کی طرف سے مراسلات منتقل کرنے کے لیے فورم منتخب کریں',
	'NO_SPECIAL_RANK'	=> 'کوئی مخصوص درجہ نہیں دیا گیا',
	'NO_WARNINGS'	=> 'کوئی پابندی نہیں',
	'NOT_MANAGE_FOUNDER'	=> 'آپ نے بانی درجہ کے رکن کی ترمیم کرنی چاہی ہے. صرف بانی صارفین ہی ایسا کر سکتے ہیں',
	'QUICK_TOOLS'	=> 'فوری آلات',
	'REGISTERED'	=> 'مندرج',
	'REGISTERED_IP'	=> 'مندرج کا IP',
	'RETAIN_POSTS'	=> 'مراسلات رکھیں',
	'SELECT_FORM'	=> 'یہاں‌سے منتخب کریں',
	'SELECT_USER'	=> 'صارف منتخب کریں',
	'USER_ADMIN'	=> 'صارف  کا انتظام',
	'USER_ADMIN_ACTIVATE'	=> 'اکاؤنٹ فعال کریں',
	'USER_ADMIN_ACTIVATED'	=> 'صارف کامیابی سے فعال کر دیا گیا',
	'USER_ADMIN_AVATAR_REMOVED'	=> 'اوتار صارف اکاؤنٹ سے کامیابی سے ختم کر دیا گیا',
	'USER_ADMIN_BAN_EMAIL'	=> 'پابندی برائے ای-میل',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'صارف انتظام کے تحت ای-میل پابند کر دیا گیا',
	'USER_ADMIN_BAN_IP'	=> 'پابندی برائے IP',
	'USER_ADMIN_BAN_IP_REASON'	=> 'صارف انتظام کے تحت IP پابند کر دیا گیا',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'صارف انتظام کے تحت رکنیتی نام پابند کر دیا گیا',
	'USER_ADMIN_BAN_USER'	=> 'پابندی برائے رکنیتی نام',
	'USER_ADMIN_DEACTIVATE'	=> 'اکاؤنٹ‌غیر فعال کریں',
	'USER_ADMIN_DEACTIVED'	=> 'صارف کو کامیابی سے غیر فعال کر دیا گیا',
	'USER_ADMIN_DEL_ATTACH'	=> 'تمام منسلکات حذف کریں',
	'USER_ADMIN_DEL_AVATAR'	=> 'اوتار حذف کریں',
	'USER_ADMIN_DEL_OUTBOX'	=> 'ذاتی پیغام آؤٹ باکس خالی کریں',
	'USER_ADMIN_DEL_POSTS'	=> 'تمام مراسلات حذف کریں',
	'USER_ADMIN_DEL_SIG'	=> 'دستخط حذف کریں',
	'USER_ADMIN_EXPLAIN'	=> 'یہاں آپ اپنی صارف تفصیلات اور مخصوص اختیارات تبدیل کر سکتے ہیں',
	'USER_ADMIN_FORCE'	=> 'دوبارہ فعالی پر زور دیں',
	'USER_ADMIN_LEAVE_NR'	=> 'نئے مندرج اراکین سے نکالیں',
	'USER_ADMIN_MOVE_POSTS'	=> 'تمام مراسلات منتقل کریں',
	'USER_ADMIN_SIG_REMOVED'	=> 'دستخط صارف اکاؤنٹ سے کامیابی سے ختم کر دیا گیا',
	'USER_ATTACHMENTS_REMOVED'	=> 'اس صارف کی طرف سے تمام منسلکات حذف کر دی گئی ہیں',
	'USER_AVATAR_NOT_ALLOWED'	=> 'اوتار غیر فعالی کی وجہ سے اوتار کا ظاہر ہونا ممکن نہیں',
	'USER_AVATAR_UPDATED'	=> 'صارف اوتار کامیابی سے اپ ڈیٹ کر دیا گیا',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'موجودہ اوتار ظاہر نہیں کیا جاسکتا کیونکہ اسکی قسم کی اجازت نہیں ہے',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'کسٹم پروفائل فیلڈز',
	'USER_DELETED'	=> 'صارف کامیابی سے حذف کر دیا گیا',
	'USER_GROUP_ADD'	=> 'صارف کو گروہ میں شامل کریں',
	'USER_GROUP_NORMAL'	=> 'صارف وضح کردہ گروہ جن کا صارف رکن ہے',
	'USER_GROUP_PENDING'	=> 'گروہ صارف ذیر غور موڈ میں ہے',
	'USER_GROUP_SPECIAL'	=> 'پہلے سے مقرر کردہ گروہ صارف جن کا رکن ہے',
	'USER_LIFTED_NR'	=> 'صارف کا نیا مندرج سٹیٹس کامیابی سے ختم کر دیا گیا',
	'USER_NO_ATTACHMENTS'	=> 'ظاہر کرنے کے لیے کوئی منسلک فائلز نہیں ہیں',
	'USER_OUTBOX_EMPTIED'	=> 'صارف ذاتی پیغامات کا آؤٹ باکس کامیابی سے خالی کر دیا گیا',
	'USER_OUTBOX_EMPTY'	=> 'صارف ذاتی پیغامات کا آؤٹ باکس پہلے ہی خالی ہے',
	'USER_OVERVIEW_UPDATED'	=> 'صارف تفصیلات اپ ڈیٹ کر دی گئی ہیں',
	'USER_POSTS_DELETED'	=> 'اس صارف کی طرف سے تمام مراسلات حذف کر دیے گئے',
	'USER_POSTS_MOVED'	=> 'صارف مراسلات کو منزل فولڈر میں منتقل کر دیا گیا',
	'USER_PREFS_UPDATED'	=> 'صارف ترجیحات کامیابی سے بدل دی گئی ہیں',
	'USER_PROFILE'	=> 'صارف پروفائل',
	'USER_PROFILE_UPDATED'	=> 'صارف پروفائل اپ ڈیٹ کر دی گئی ہے',
	'USER_RANK'	=> 'صارف کا درجہ',
	'USER_RANK_UPDATED'	=> 'صارف کا درجہ اپ ڈیٹ کر دیا گیا',
	'USER_SIG_UPDATED'	=> 'صارف دستخط اپ ڈیٹ کر دیا گیا',
	'USER_WARNING_LOG_DELETED'	=> 'کوئی معلومات نہیں ملیں. غالبا لاگ اندراج حذف کر دیا گیا ہے',
	'USER_TOOLS'	=> 'بنیادی آلات',
));

?>