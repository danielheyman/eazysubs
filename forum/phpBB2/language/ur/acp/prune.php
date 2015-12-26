<?php
/**
*
* acp_prune.php [Urdu]
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
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'یہ سیکشن آپکو بورڈ پر موجود صارفین کو حذف یا غیر فعال کرنے پر رسائی دیتا ہے. آپ اکاؤنٹس کو کئی طریقوں سے الگ الگ منتخب کر سکتے ہیں جیسا کہ مراسلات کی تعداد، تازہ ترین سرگرمی وغیرہ. آپ صارفین کی مخصوص تعداد کلیہ سے شامل کر سکتے ہیں جیسا کہ صرف وہ صارفین پرون کریں جن کے مراسلات کی تعداد 10 سے کم ہے، یا وہ جو 2001 کے بعد غیر فعال ہیں وغیرہ وغیرہ. اسکے علاوہ آپ ہر صارف کا نام ہر سطر میں ایک، لکھ سکتے ہیں. اس سہولت کو خیال سے استعمال کریں کیونکہ ایک بار حذف کیا رکنیتی نام واپس نہیں لایا جا سکتا.',
	'DEACTIVATE_DELETE'	=> 'غیر فعال یا حذف کریں',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'منتخب کریں کہ صارفین کو حذف کرنا ہے یا غیر فعال. نوٹ‌کریں کہ حذف شدہ صارفین کو بحال نہیں کیا جا سکتا.',
	'DELETE_USERS'	=> 'حذف کریں',
	'DELETE_USER_POSTS'	=> 'حذف شدہ صارف کے مراسلات ختم کریں.',
	'DELETE_USER_POSTS_EXPLAIN'	=> 'حذف شدہ صارفین کے مراسلات ختم کرتا ہے. اگر صارف غیر فعال کیا گیا ہے تو یہ عمل کام نہیں کرے گا.',
	'JOINED_EXPLAIN'	=> '<kbd>YYYY-MM-DD</kbd> فارمیٹ میں تاریخ لکھیں',
	'LAST_ACTIVE_EXPLAIN'	=> '<kbd>YYYY-MM-DD</kbd> فارمیٹ میں تاریخ لکھیں. صارفین جو کبھی لاگن نہیں ہوئے، انہیں پرون کرنے کے لیے لکھیں <kbd>0000-00-00</kbd>, <em>پہلے</em> اور <em>بعد</em> کی شرائط نظر انداز کر دی جائیں گی.',
	'PRUNE_USERS_LIST'	=> 'پرون کیے جانے والے صارفین',
	'PRUNE_USERS_LIST_DELETE'	=> 'صارف پروننگ کے منتخب طریقہ سے درج ذیل اکاؤنٹس پرون کیے جائیں گے.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'صارف پروننگ کے منتخب طریقہ سے درج ذیل اکاؤنٹس غیر فعال کیے جائیں گے.',
	'SELECT_USERS_EXPLAIN'	=> 'یہاں مخصوص صارفین کے نام لکھیں، انہیں اور کے طریقہ پر ترجیح دی جائے گی. بانی صارفین کو پرون نہیں کیا جا سکتا',
	'USER_DEACTIVATE_SUCCESS'	=> 'منتخب صارفین کامیابی سے غیر فعال کیے جا چکے ہیں.',
	'USER_DELETE_SUCCESS'	=> 'منتخب صارفین کامیابی سے حذف کیے جا چکے ہیں.',
	'USER_PRUNE_FAILURE'	=> 'دیے گئے طریقہ میں‌کوئی صارف نہیں ملا',
	'WRONG_ACTIVE_JOINED_DATE'	=> 'داخل کردہ تاریخ غلط ہے. اسے اس فارمیٹ میں ہونا چاہیے، <kbd>YYYY-MM-DD</kdb>',
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'یہ دیے گئے دورانیہ میں جن موضوعات میں کوئی ارسالی نہیں ہوئی، انہیں حذف کر دے گا. اگر آپ کوئی عدد نہ لکھیں‌تو تمام موضوعات حذف کر دیے جائیں گے. ',
	'FORUM_PRUNE'	=> 'فورم پرون کریں',
	'NO_PRUNE'	=> 'کوئی فورم پرون نہیں کیا گیا',
	'SELECTED_FORUM'	=> 'منتخب فورم',
	'SELECTED_FORUMS'	=> 'منتخب فورمز',
	'POSTS_PRUNED'	=> 'مراسلہ پرون کر دیا گیا',
	'PRUNE_ANNOUNCEMENTS'	=> 'اعلانات پرون کریں',
	'PRUNE_FINISHED_POLLS'	=> 'بند سروے پرون کریں',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'سروے والے موضوعات جن میں ارسالی نہیں کی گئی، پرون کرتا ہے',
	'PRUNE_FORUM_CONFIRM'	=> 'کیا آپ واقعی واضح کردہ ترتیبات کے ساتھ منتخب کردہ فورم پرون کرنا چاہتے ہیں؟ ایک بار ایسا کرنے کے بعد انکی بحالی ناممکن ہے.',
	'PRUNE_NOT_POSTED'	=> 'آخری مراسلہ کے بعد ایام',
	'PRUNE_NOT_VIEWED'	=> 'آخری جائزہ کے بعد ایام',
	'PRUNE_OLD_POLLS'	=> 'پرانے سروے پرون کریں',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'سروے والے موضوعات جن میں ووٹنگ نہیں کی گئی، پرون کرتا ہے',
	'PRUNE_STICKY'	=> 'اہم پرون کریں',
	'PRUNE_SUCCESS'	=> 'فورمز کو کامیابی سے پرون کر دیا گیا ہے',
	'TOPICS_PRUNED'	=> 'پرون کیے گئے موضوعات',
));

?>