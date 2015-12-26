<?php
/**
*
* acp_forums.php [Urdu]
*
* @package language
* @version $Id: $
* @copyright (c) 2010 phpBB Group
* @author 2010-11-27 - phpBB Group
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
	'AUTO_PRUNE_DAYS'	=> 'خودکار مراسلہ عمر پرون (prune)',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'آخری مراسلہ کے بعد دورانیہ جس کے بعد موضوع حذف کر دیا جائے گا',
	'AUTO_PRUNE_FREQ'	=> 'خودکار پرون فریکؤ ینسی',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'پرون عمل کے بیچ وقت کا دنوں میں دورانیہ',
	'AUTO_PRUNE_VIEWED'	=> 'خودکار پرون مراسلہ دیکھی گئی عمر',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'آخری بار موضوع دیکھنے کے بعد دورانیہ جس کے بعد موضوع حذف کر دیا جائے گا',
	'CONTINUE'	=> 'جاری رکھیں',
	'COPY_PERMISSIONS'	=> 'اجازات یہاں سے نقل کریں',
	'COPY_PERMISSIONS_EXPLAIN'	=> 'آسانی کے لیے آپ دوسرے فورم سے اجازت نقل کر سکتے ہیں.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'ایک بار بننے کے بعد، اس فورم کی اجازات یہاں منتخب کیے گئے فورم کے مترادف ہونگی. اگر کوئی فورم منتخب نہیں کیا گیا تو اجازات بنانے تک فورم ظاہر نہیں ہوگا.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'اگر آپ اجازات نقل کریں تو اس فورم کی اجازات منتخب شدہ کے مترادف ہونگی. ایسا کرنے اس فورم کی تمام گزشتہ اجازات بدل جائیں گی. اگر کچھ منتخب نہیں کیا گیا تو موجودہ اجازات برقرار رہیں گی.',
	'COPY_TO_ACL'	=> 'متبادل طور پر، آپ اس فورم کے لیے %sنئی اجازات بنائیں%s استعمال کر سکتے ہیں.',
	'CREATE_FORUM'	=> 'نیا فورم بنائیں',
	'DECIDE_MOVE_DELETE_CONTENT'	=> 'مواد حذف یا فورم میں منتقل کریں',
	'DECIDE_MOVE_DELETE_SUBFORUMS'	=> 'ذیلی فورم حذف یا فورم میں منتقل کریں',
	'DEFAULT_STYLE'	=> 'طے شدہ سٹائل',
	'DELETE_ALL_POSTS'	=> 'مراسلات حذف کریں',
	'DELETE_SUBFORUMS'	=> 'ذیلی فورم اور مراسلات حذف کریں',
	'DISPLAY_ACTIVE_TOPICS'	=> 'فعال موضوعات فعال کریں',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'	=> 'اگر "ہاں" ہے تو منتخب ذیلی فورم اس ذمرہ میں ظاہر ہونگے',
	'EDIT_FORUM'	=> 'فورم ترمیم کریں',
	'ENABLE_INDEXING'	=> 'تلاش ترتیب دینا فعال کریں',
	'ENABLE_INDEXING_EXPLAIN'	=> 'اگر فعال ہے تو اس فورم میں ارسال کیے گئے مراسلات تلاش کے لیے ترتیب دیے جائیں گے.',
	'ENABLE_POST_REVIEW'	=> 'مراسلہ جائزہ فعال کریں',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'اگر فعال ہے تو مراسلہ ارسال کرتے وقت کسی اپ ڈیٹ پر صارفین اپنے مراسلے کا جائزہ لے سکتے ہیں.',
	'ENABLE_QUICK_REPLY'	=> 'فوری جواب فعال کریں',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'اس فورم میں فوری جواب فعال کرتا ہے. اگر فوری جواب بورڈ پیمانے پر غیر فعال ہے تو یہ کام نہیں کرے گا. فوری جواب صرف وہ صارفین استعمال کر سکتے ہیں جنہیں اس فورم میں اشاعت کی اجازت ہے.',
	'ENABLE_RECENT'	=> 'فعال موضوعات ظاہر کریں',
	'ENABLE_RECENT_EXPLAIN'	=> 'اگر "ہاں" ہے تو اس اس فورم میں ارسال کیے گئے موضوعات فعال موضوعات کی فہرست میں ظاہر ہونگے.',
	'ENABLE_TOPIC_ICONS'	=> 'موضوع آئیکن فعال کریں',
	'FORUM_ADMIN'	=> 'فورم انتظامات',
	'FORUM_ADMIN_EXPLAIN'	=> 'phpBB میں کوئی ذمرہ نہیں ہوتا. ہر چیز فورم پر بنیاد رکھتی ہے. ہر فورم میں لامحدود ذیلی فورم ہو سکتے ہیں اور آپ طے کر سکتے ہیں کہ کس میں ارسال کیا جا سکتا ہے اور کس میں نہیں. یہاں آپ انفرادی فورمز پرمخصوص کنٹرول کے علاوہ حذف، ترمیم، شامل، مقفل، غیر مقفل  کر سکتے ہیں. <strong>نئے فورمز کو ظاہر کرنے کے لیے انکی اجازات بنانا یا نقل کرنا ضروری ہیں.</strong>',
	'FORUM_AUTO_PRUNE'	=> 'خود کار پروننگ فعال کریں',
	'FORUM_AUTO_PRUNE_EXPLAIN'	=> 'موضوعات کے فورم کو پرون کرتا ہے. عمر/ فریکوینسی ترتیبات نیچے بنائیں',
	'FORUM_CREATED'	=> 'فورم کامیابی سے بنا دیا گیا',
	'FORUM_DATA_NEGATIVE'	=> 'پروننگ معیارات منفی نہیں ہو سکتے',
	'FORUM_DESC_TOO_LONG'	=> 'فورم کی تفصیل بہت لمبی ہے. زیادہ سے زیادہ 4000 حروف لکھ سکتے ہیں.',
	'FORUM_DELETE'	=> 'فورم حذف کریں',
	'FORUM_DELETE_EXPLAIN'	=> 'نیچے فارم سے آپ فورم حذف کر سکتے ہیں، اگر فورم میں مراسلات موجود ہیں تو آپ انکی منتقلی کی منزل بھی طے کر سکتے ہیں.',
	'FORUM_DELETED'	=> 'فورم کامیابی سے حذف کر دیا گیا',
	'FORUM_DESC'	=> 'تفصیل',
	'FORUM_DESC_EXPLAIN'	=> 'کسی قسم کا HTML مارک اپ بالکل ایسا ہی ظاہر کیا جائے گا',
	'FORUM_EDIT_EXPLAIN'	=> 'نیچے فارم سے آپ فورم اپنی مرضی کے مطابق کر سکتے ہیں. برائے مہربانی نوٹ کریں کہ ادارت اور مراسلہ تعداد کا کنٹرول ہر صارف یا گروہ کے لیے فورم اجازات میں ہے.',
	'FORUM_IMAGE'	=> 'فورم تصویر',
	'FORUM_IMAGE_EXPLAIN'	=> 'اس فورم کے ساتھ اجافی تصویر کی مکانیت',
	'FORUM_IMAGE_NO_EXIST'	=> 'مخصوص کردہ تصویر موجود نہیں ہے',
	'FORUM_LINK_EXPLAIN'	=> 'منزل مکانیت کا پورا ربط (بشمول http://)، کلک کرنے سے صارف جس منزل پر جائے گا. جیسا کہ <samp>http://www.phpbb.com</samp>',
	'FORUM_LINK_TRACK'	=> 'ربط ری ڈائیریکٹ کا پتہ',
	'FORUM_LINK_TRACK_EXPLAIN'	=> 'فورم پر کلک کی تعداد کو ریکارڈ کرتا ہے',
	'FORUM_NAME'	=> 'فورم کا نام',
	'FORUM_NAME_EMPTY'	=> 'اس فورم کے لیے نام لکھنا ضروری ہے',
	'FORUM_PARENT'	=> 'سرپرست فورم',
	'FORUM_PASSWORD'	=> 'فورم پاس ورڈ',
	'FORUM_PASSWORD_CONFIRM'	=> 'فورم پاس ورڈ توثیق',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'اسکی ضرورت تبھی ہے اگر فورم پاس ورڈ داخل کیا گیا ہے',
	'FORUM_PASSWORD_EXPLAIN'	=> 'اس فورم کے لیے پاس ورڈ واضح کرتا ہے. ترجیہات میں اجازات کا نظام استعمال کریں.',
	'FORUM_PASSWORD_UNSET'	=> 'فورم پاس ورڈ ختم کریں',
	'FORUM_PASSWORD_UNSET_EXPLAIN'	=> 'فورم پاس ورڈ ختم کرنے کے لیے اسے چیک کریں',
	'FORUM_PASSWORD_OLD'	=> 'فورم پاس ورڈ پرانا نظام استعمال کر رہا ہے اس لیے اسے تبدیل کر دیں',
	'FORUM_PASSWORD_MISMATCH'	=> 'آپکا داخل کیا پاس ورڈ میل نہیں کھاتا',
	'FORUM_PRUNE_SETTINGS'	=> 'فورم کی پرون ترتیبات',
	'FORUM_RESYNCED'	=> 'فورم "%s" کامیابی سے resync کر دیا گیا.',
	'FORUM_RULES_EXPLAIN'	=> 'فورم قوانین ہر فورم میں مخصوص صفحے پر ظاہر ہوتے ہیں.',
	'FORUM_RULES_LINK'	=> 'فورم قوانین سے جوڑیں',
	'FORUM_RULES_LINK_EXPLAIN'	=> 'یہاں آپ فورم سے جڑے قوانین کا ربط دے سکتے ہیں. یہ ترتیب آپکے مخصوص کردہ قوانین متن سے بدل دی جائے گی.',
	'FORUM_RULES_PREVIEW'	=> 'فورم قوانین پیش منظر',
	'FORUM_RULES_TOO_LONG'	=> 'فورم قوانین کا 4000 حروف سے کم ہونا ضروری ہے.',
	'FORUM_SETTINGS'	=> 'فورم ترتیبات',
	'FORUM_STATUS'	=> 'فورم اعداد و شمار',
	'FORUM_STYLE'	=> 'فورم سٹائل',
	'FORUM_TOPICS_PAGE'	=> 'فی صفحہ موضوعات',
	'FORUM_TOPICS_PAGE_EXPLAIN'	=> 'اگر 0 نہیں ہے تو یہ ترتیب طے شدہ فی صفحہ موضوعات ترتیب کی جگہ لے لے گی',
	'FORUM_TYPE'	=> 'فورم کی قسم',
	'FORUM_UPDATED'	=> 'فورم معلومات کامیابی سے اپ ڈیٹ کر دی گئی ہیں',
	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'	=> 'آپ ایک ذیلی فورمز پر مشتمل فورم کو ربط مین تبدیل کرنا چاہتے ہیں. برائے مہربانی ربط میں تبدیل کرنے سے پہلے تمام ذیلی فورمز کو یہاں سے منتقل کر دیں کیونکہ ربط میں تبدیل کرنے کے بعد اس میں موجود ذیلی فورمز تک رسائی حاصل نہیں کر پائیں گے.',
	'GENERAL_FORUM_SETTINGS'	=> 'عام فورم ترتیبات',
	'LINK'	=> 'ربط',
	'LIST_INDEX'	=> 'ذیلی فورمز کو سرپرست فورم کے اشاریہ میں دکھائیں',
	'LIST_INDEX_EXPLAIN'	=> 'فورم کو اشاریہ اور سرپرست فورم کے لیجنڈ میں ظاہر کرتا ہے.',
	'LIST_SUBFORUMS'	=> 'ذیلی فورمز کو لیجنڈ میں ظاہر کریں',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'فورز کے ذیلی فورمز کو اشاریہ اور سرپرست فورم کے لیجنڈ میں ظاہر کرتا ہے.',
	'LOCKED'	=> 'مقفل',
	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'آپ جس فورم میں مراسلات منتقل کر رہے ہیں اس میں اشاعت کی اجازت نہیں ہے. اشاعت کے قابل فورم منتخب کریں',
	'MOVE_POSTS_TO'	=> 'مراسلات یہاں منتقل کریں',
	'MOVE_SUBFORUMS_TO'	=> 'ذیلی فورمز یہاں منتقل کریں',
	'NO_DESTINATION_FORUM'	=> 'آپ نے مواد کی منتقلی کے لیے فورم منتخب نہیں کیا',
	'NO_FORUM_ACTION'	=> 'فورم مواد کے ساتھ کوئی عمل مخصوص نہیں کیا گیا',
	'NO_PARENT'	=> 'کوئی سرپرست نہیں',
	'NO_PERMISSIONS'	=> 'اجازات نقل نہ کریں',
	'NO_PERMISSION_FORUM_ADD'	=> 'آپکے پاس فورم شامل کرنے کی خصوصی اجازت نہیں ہے.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'آپکے پاس فورم حذف کرنے کی خصوصی اجازت نہیں ہے.',
	'PARENT_IS_LINK_FORUM'	=> 'آپکا مخصوص کیا گیا سرپرست ایک فورم ربط ہے. ربط فورمز میں دوسرے فورم موجود نہیں ہو سکتے. برائے مہربانی ایک ذمرہ یا فورم منتخب کرین.',
	'PARENT_NOT_EXIST'	=> 'سرپرست موجود نہیں',
	'PRUNE_ANNOUNCEMENTS'	=> 'اعلانات پرون کریں',
	'PRUNE_STICKY'	=> 'اہم پرون کریں',
	'PRUNE_OLD_POLLS'	=> 'پرانے سروے پرون کریں',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'مخصوص کردہ ایام کے دورانیہ کے بعد موضوع یا سروے ختم کریں',
	'REDIRECT_ACL'	=> 'آپ کو اس فورم کے لیے %sاجازات بنانے%s کی اجازت نہیں ہے.',
	'SYNC_IN_PROGRESS'	=> 'فورم resync ہو رہا ہے',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'موجودہ طور پر موضوع رینج %1$d%2$d کو resync کیا جا رہا ہے',
	'TYPE_CAT'	=> 'Category',
	'TYPE_FORUM'	=> 'Forum',
	'TYPE_LINK'	=> 'Link',
	'UNLOCKED'	=> 'Unlocked',
));

?>