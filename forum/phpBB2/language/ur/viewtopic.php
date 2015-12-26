<?php
/**
*
* viewtopic.php [Urdu]
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
	'ATTACHMENT'	=> 'اٹیچ منٹ',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'اٹیچ منٹ کی سہولت غیر فعال ہے۔',
	'BOOKMARK_ADDED'	=> 'موضوعات کو کامیابی سے بک مارک کر دیا گیا',
	'BOOKMARK_ERR'	=> 'موضوع بک مارک نہیں ہو سکا. دوبارہ کوشش کریں',
	'BOOKMARK_REMOVED'	=> 'بک مارک موضوع کو کامیابی سے ختم کر دیا گیا',
	'BOOKMARK_TOPIC'	=> 'پسندیدہ بنائیں',
	'BOOKMARK_TOPIC_REMOVE'	=> 'پسندیدہ سے ہٹائیں',
	'BUMPED_BY'	=> 'آخری بار %1$s نے %2$s پر اٹھایا',
	'BUMP_TOPIC'	=> 'موضوع اٹھائیں',
	'CODE'	=> 'کوڈ',
	'COLLAPSE_QR'	=> 'فوری جواب چھپائیں',
	'DELETE_TOPIC'	=> 'موضوع ڈیلیٹ کریں',
	'DOWNLOAD_NOTICE'	=> 'آپ کو اٹیچ منٹ کی فایل دیکھنے کا اختیار حاصل  نہیں ہے۔',
	'EDITED_TIMES_TOTAL'	=> 'آخری مرتبہ %1$s نے %2$s پر ترمیم کی، %3$d مرتبہ ترمیم ہو چکی ہے.',
	'EDITED_TIME_TOTAL'	=> 'آخری مرتبہ %1$s نے %2$s پر ترمیم کی، %3$d مرتبہ ترمیم ہو چکی ہے.',
	'EMAIL_TOPIC'	=> 'دوست کو ای میل کریں',
	'ERROR_NO_ATTACHMENT'	=> 'منتخب کردا اٹیچ منٹ دستیاب نہیں ہے',
	'FILE_NOT_FOUND_404'	=> 'فائل <strong> %s </strong> دستیاب نہیں ہے',
	'FORK_TOPIC'	=> 'موضوع نقل کریں',
	'FULL_EDITOR'	=> 'تفصیلی اختیارات',
	'LINKAGE_FORBIDDEN'	=> 'آپ اس ویب سایٹ سے فایل ڈاون لوڈ کرنے یا ربط دیکھنے کے اہل نہیں ہیں',
	'LOGIN_NOTIFY_TOPIC'	=> 'آپکو اس موضوع کے بارے میں  اہم اطلاع دی گئی ہے، دیکھنے کے لیے لاگن کریں ',
	'LOGIN_VIEWTOPIC'	=> 'اس موضوع کو دیکھنے کیلیے رجسٹرڈ ہو کر  لاگ ان ہوں',
	'MAKE_ANNOUNCE'	=> 'اعلان میں تبدیل کریں',
	'MAKE_GLOBAL'	=> 'گلوبل میں تبدیل کریں',
	'MAKE_NORMAL'	=> 'عام میں تبدیل کریں',
	'MAKE_STICKY'	=> 'مقبول عام میں تبدیل کریں',
	'MAX_OPTIONS_SELECT'	=> 'آپ <strong> %d </strong> تک اختیارات منتخب کر سکتے ہیں',
	'MAX_OPTION_SELECT'	=> 'آپ <strong>1 </strong>  اختیار منتخب کر سکتے ہیں',
	'MISSING_INLINE_ATTACHMENT'	=> 'اٹیچ منٹ  <strong>%s</strong> مزید دستیاب نہیں ہے.',
	'MOVE_TOPIC'	=> 'موضوع کی جگہ بدلیں',
	'NO_ATTACHMENT_SELECTED'	=> 'آپ نے دیکھنے یا ڈائون لوڈ کے لیے کوئی اٹیچ منٹ منتخب نہیں کی',
	'NO_NEWER_TOPICS'	=> 'اس فارم میں کوئی نئے موضوعات نہیں ہیں',
	'NO_OLDER_TOPICS'	=> 'اس فارم میں کوئی پرانے موضوعات نہیں ہیں',
	'NO_UNREAD_POSTS'	=> 'اس موضوع میں کوئی نیا مراسلہ نہیں ہے',
	'NO_VOTE_OPTION'	=> 'ووٹنگ کرتے ہوئے ایک اختیار کا انتخاب لازمی ہے',
	'NO_VOTES'	=> 'کوئی ووٹ نہیں',
	'POLL_ENDED_AT'	=> 'سروے %s پر ختم ہوا',
	'POLL_RUN_TILL'	=> 'سروے %s تک چلے گا',
	'POLL_VOTED_OPTION'	=> 'آپ نے اس اختیار کو ووٹ دیا',
	'PRINT_TOPIC'	=> 'نظارہ پرنٹ کریں',
	'QUICK_MOD'	=> 'موڈریٹر اختیارات',
	'QUICKREPLY'	=> 'فوری جواب',
	'QUOTE'	=> 'اقتباس',
	'REPLY_TO_TOPIC'	=> 'موضوع میں جواب دیں',
	'RETURN_POST'	=> '%sپوسٹس میں واپسی%s',
	'SHOW_QR'	=> 'فوری جواب',
	'SUBMIT_VOTE'	=> 'ووٹ شامل کریں',
	'TOTAL_VOTES'	=> 'کل ووٹ',
	'UNLOCK_TOPIC'	=> 'غیر مقفل کریں',
	'VIEW_INFO'	=> 'پیغام کی تفصیلات',
	'VIEW_NEXT_TOPIC'	=> 'اگلا موضوع',
	'VIEW_PREVIOUS_TOPIC'	=> 'پچھلا موضوع',
	'VIEW_RESULTS'	=> 'نتائج دیکھیں',
	'VIEW_TOPIC_POST'	=> '1 پیغام',
	'VIEW_TOPIC_POSTS'	=> 'پیغامات %d',
	'VIEW_UNREAD_POST'	=> 'پہلا ناخواندہ پیغام',
	'VISIT_WEBSITE'	=> 'WWW',
	'VOTE_SUBMITTED'	=> 'آپ کا ووٹ شامل ہو گیا ہے۔',
	'VOTE_CONVERTED'	=> 'تبدیل ہوئے سروے پر ووٹنگ قابلِ عمل نہیں ہے',
	'SIMILAR_TOPICS'	=> 'ملتے جلتے موضوعات',
));

?>