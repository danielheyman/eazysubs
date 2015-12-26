<?php
/**
*
* posting.php [Urdu]
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
	'ADD_ATTACHMENT'	=> 'اٹیچ منٹ اپ لوڈ کریں',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'اگر آپ ایک یا ایک سے زیادہ فائلز لگانا چاہتے ہیں تو تفصیلات نیچے لکھیں.',
	'ADD_FILE'	=> 'فائل شامل کریں.',
	'ADD_POLL'	=> 'پول بنائیں.',
	'ADD_POLL_EXPLAIN'	=> 'اگر آپ کو اپنے موضوع پر ایک سروے میں شامل نہیں کرنا چاہتے علاقوں کو خالی چھوڑ دیں.',
	'ALREADY_DELETED'	=> 'معاف کیجئے گا لیکن اس پیغام کو پہلے ہی خارج کر دیا گیا ہے.',
	'ATTACH_QUOTA_REACHED'	=> 'معاف کیجئے گا ، ملحق کوٹہ ختم ہو چکا ہے.',
	'ATTACH_SIG'	=> 'دستخط شامل کیجیے.',
	'BBCODE_A_HELP'	=> 'اِن لائن اپلوڈڈ اٹیچ منٹ: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'	=> 'بولڈ ٹیکسٹ [b]text[/b]',
	'BBCODE_C_HELP'	=> 'کوڈ کا مظہر:‌ [code]code[/code]',
	'BBCODE_E_HELP'	=> 'فہرست : فہرست عنصر شامل کریں',
	'BBCODE_F_HELP'	=> 'فونٹ سائز:‌ [size=85]چھوٹا ٹیکسٹ[/size]',
	'BBCODE_IS_OFF'	=> '%sBBCode%s <em>بند ہے</em>',
	'BBCODE_IS_ON'	=> '%sBBCode%s <em>کھلا ہے</em>',
	'BBCODE_I_HELP'	=> 'اٹالک ٹیسٹ: [i]ٹیکسٹ[/i]',
	'BBCODE_L_HELP'	=> 'لسٹ: [list]ٹیکسٹ[/list]',
	'BBCODE_LISTITEM_HELP'	=> 'چیز لسٹ کریں: [*]ٹیکسٹ[/*]',
	'BBCODE_O_HELP'	=> 'حکمی فہرست: [list=]ٹیکسٹ[/list]',
	'BBCODE_P_HELP'	=> 'تصویر لگائیں: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'	=> 'اقتباس کا متن: [quote]ٹیکسٹ[/quote]',
	'BBCODE_S_HELP'	=> 'فونٹ کا رنگ: [color=red]ٹیکسٹ[/color] ٹِپ: آپ یہ بھی استعمال کر سکتے ہیں. color=FF0000',
	'BBCODE_U_HELP'	=> 'خط کشیدہ عبارت:‌ [u]ٹیکسٹ[/u]',
	'BBCODE_W_HELP'	=> 'URL داخلہ:‌ [url]http://url[/url] یا [url=http://url] URL ٹیکسٹ[/url]',
	'BBCODE_D_HELP'	=> 'فلیش: [flash=width,height]http://url[/flash]',
	'BUMP_ERROR'	=> 'آپ اس موضوع کے آخری پوسٹ کے بعد نشر اتنی جلدی نہیں کر سکتے.',
	'CANNOT_DELETE_REPLIED'	=> 'معاف کیجئے گا آپ صرف وہ پوسٹس خارج کر سکتے ہیں جنکا جواب نہیں دیا گیا.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'اس پوسٹ کو بند کر دیا گیا ہے. آپ اس میں ترمیم نہیں کر سکتے.',
	'CANNOT_EDIT_TIME'	=> 'آپ اس پوسٹ کو ختم یا اس میں مزید ترمیم نہیں کر سکتے.',
	'CANNOT_POST_ANNOUNCE'	=> 'معاف کیجئے گا لیکن آپ اعلانات پوسٹ نہیں کر سکتے.',
	'CANNOT_POST_STICKY'	=> 'معاف کیجیے گا مگر آپ sticky ٹاپکس پوسٹ نہیں کر سکتے.',
	'CHANGE_TOPIC_TO'	=> 'تبدیلی موضوع کی قسم',
	'CLOSE_TAGS'	=> 'ٹیگ بند کریں',
	'CURRENT_TOPIC'	=> 'موجودہ موضوع',
	'DELETE_FILE'	=> 'فائل خارج کریں',
	'DELETE_MESSAGE'	=> 'پیغام خارج کریں',
	'DELETE_MESSAGE_CONFIRM'	=> 'کیا آپ واقعی اس پیغام کو ختم کرنا چاہتے ہیں؟',
	'DELETE_OWN_POSTS'	=> 'معاف کیجئے گا لیکن آپ اپنے پیغامات ہی ختم کر سکتے ہیں.',
	'DELETE_POST_CONFIRM'	=> 'کیا آپ واقعی یہ تحریر ختم کرنا چاہتے ہیں؟',
	'DELETE_POST_WARN'	=> 'ایک بار خارج کرنے کے بعد اسے واپس نہیں لایا جا سکتا..',
	'DISABLE_BBCODE'	=> ' BBCode غیر فعال کریں',
	'DISABLE_MAGIC_URL'	=> 'URLs کا خودکار طریقے سے تجزیہ نہ کریں.',
	'DISABLE_SMILIES'	=> 'مسکراھٹيں غیر فعال کریں.',
	'DISALLOWED_CONTENT'	=> 'کسی ممکنہ حملے کے پیش نظر اس اپلوڈ کو خارج کر دیا گیا ہے.',
	'DISALLOWED_EXTENSION'	=> 'توسیع %s کی اجازت نہیں ہے',
	'DRAFT_LOADED'	=> 'مسودے کو پوسٹنگ ایریا میں لوڈ کر دیا گیا ہے.</br> تحریر جمع کرنے کے بعد مسودہ خارج کر دیا جائے گا.',
	'DRAFT_LOADED_PM'	=> 'مسودے کو پوسٹنگ ایریا میں لوڈ کر دیا گیا ہے.</br> تحریر جمع کرنے کے بعد مسودہ خارج کر دیا جائے گا.',
	'DRAFT_SAVED'	=> 'ڈرافٹ کو کامیابی سے بچا لیا گیا ہے.',
	'DRAFT_TITLE'	=> 'مسودہ عنوان',
	'EDIT_REASON'	=> 'اس تحریر میں ترمیم کی وجہ',
	'EMPTY_FILEUPLOAD'	=> 'اپ لوڈ کی گئی فائل خالی ہے.',
	'EMPTY_MESSAGE'	=> 'پیغام داخل کرنے کے لیے ضروری ہے کہ وہ خالی نہ ہو.',
	'EMPTY_REMOTE_DATA'	=> 'فائل کو اپ لوڈ نہیں کیا جا سکتا. برائے مہربانی فائل کو دستی طور پر لوڈ کریں.',
	'FLASH_IS_OFF'	=> '[flash] <em> بند ہے</em>',
	'FLASH_IS_ON'	=> '[flash]<em>کھلا ہے</em>',
	'FLOOD_ERROR'	=> 'ایک پوسٹ کے بعد آپ دوسری پوسٹ اتنی جلدی نہیں کر سکتے.',
	'FONT_COLOR'	=> 'فونٹ کا رنگ',
	'FONT_COLOR_HIDE'	=> 'فونٹ کا رنگ چھپائیں.',
	'FONT_HUGE'	=> 'بھاری',
	'FONT_LARGE'	=> 'بڑا',
	'FONT_NORMAL'	=> 'عام',
	'FONT_SIZE'	=> 'فونٹ سائز',
	'FONT_SMALL'	=> 'چھوٹا',
	'FONT_TINY'	=> 'بہت چھوٹا',
	'GENERAL_UPLOAD_ERROR'	=> '%s پر اٹیچ منٹ اپلوڈ نہیں کر سکتے',
	'IMAGES_ARE_OFF'	=> '[img] <em> بند ہے</em>',
	'IMAGES_ARE_ON'	=> '[img] <em> کھلا ہے</em>',
	'INVALID_FILENAME'	=> '%s فائل کا نام غلط ہے',
	'LOAD'	=> 'لوڈ',
	'LOAD_DRAFT'	=> 'مسودہ لوڈ کریں',
	'LOAD_DRAFT_EXPLAIN'	=> 'یہاں آپ وہ مسودہ منتخب کر سکتے ہیں جس میں آپ لکھنا چاہتے ہیں. آپکا موجودہ مراسلہ منسوخ کر دیا جائے گا، تمام موجودہ مراسلہ کا مواد خارج کر دیا جائے گا. اپنے یوزر کنٹرول پینل میں مسودات دیکھیں، ترمیم کریں یا ختم کریں.',
	'LOGIN_EXPLAIN_BUMP'	=> 'اس فورم میں موضوعات کو اوپر لانے کے لیے لاگ ان ہونا ضروری ہے',
	'LOGIN_EXPLAIN_DELETE'	=> 'اس فورم میں مراسلات کو ختم کرنے کے لیے لاگ ان ہونا ضروری ہے',
	'LOGIN_EXPLAIN_POST'	=> 'اس فورم میں مراسلات لکھنے کےلیے لاگ ان ہونا ضروری ہے',
	'LOGIN_EXPLAIN_QUOTE'	=> 'اس فورم میں مراسلات کا اقتباس لکھنے کےلیے لاگ ان ہونا ضروری ہے',
	'LOGIN_EXPLAIN_REPLY'	=> 'اس فورم میں موضوعات کا جواب لکھنے کےلیے لاگ ان ہونا ضروری ہے',
	'MAX_FONT_SIZE_EXCEEDED'	=> 'آپ صرف %1$d سائز تک فونٹ بڑا کر سکتے ہیں.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'آپکی فلیش فائلز صرف %1$d پکسل تک بڑی ہو سکتی ہیں.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'آپکی فلیش فائلز صرف %1$d پکسل تک چوڑی ہو سکتی ہیں.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'آپکی تصاویر صرف %1$d پکسل تک بڑی ہو سکتی ہیں.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'آپکی تصاویر صرف %1$d پکسل تک چوڑی ہو سکتی ہیں.',
	'MESSAGE_BODY_EXPLAIN'	=> 'آپنا پیغام یہاں لکھیں، اس میں <strong>%d</strong> سے زیادہ حروف نہیں ہو سکتے.',
	'MESSAGE_DELETED'	=> 'اس پیغام کو کامیابی سے خارج کر دیا گیا.',
	'MORE_SMILIES'	=> 'زیادہ مسکانیں دیکھیں',
	'NOTIFY_REPLY'	=> 'مجھے مطلع کریں جب ایک جواب پوسٹ کیا ہے.',
	'NOT_UPLOADED'	=> 'فائل کو اپلوڈ نہیں کیا جا سکا',
	'NO_DELETE_POLL_OPTIONS'	=> 'آپ موجودہ انتخابات کے اختیارات کو ختم نہیں کر سکتے.',
	'NO_PM_ICON'	=> 'کوئی PM آئیکن نہیں',
	'NO_POLL_TITLE'	=> 'سروے کا عنوان لکھنا ضروری ہے',
	'NO_POST'	=> 'درخواست کیا گیا مراسلہ موجود نہیں ہے',
	'NO_POST_MODE'	=> 'تحریر کا کوئی موڈ واضح نہیں کیا گیا',
	'PARTIAL_UPLOAD'	=> 'اپلوڈڈ فائل جزوی اپلوڈ ہوئی ہے.',
	'PHP_SIZE_NA'	=> 'اس منسلکہ فائل کا سائز بہت بڑا ہے. <br /> php.ini میں PHP کی طرف سے واضح کیے گیے سائز کا تعین نہیں جا سکا.',
	'PHP_SIZE_OVERRUN'	=> 'منسلکہ فائل کا سائز بہت بڑا ہے. زیادہ سے زیادہ اپلوڈ سائز %1$d %2$s ہے. ',
	'PLACE_INLINE'	=> 'ان لائن رکھیں',
	'POLL_DELETE'	=> 'سروے ختم کریں',
	'POLL_FOR'	=> 'انتخابات اس عرصے تک کے لیے چلائیں',
	'POLL_FOR_EXPLAIN'	=> 'کبھی نہ ختم ہونے والے انتخاب کے لیے 0 لکھیں یا خالی چھوڑیں',
	'POLL_MAX_OPTIONS'	=> 'فی صارف اختیارات',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'یہ ان اختیارات کی تعداد ہے جو ایک صارف منتخب کر سکتا ہے.',
	'POLL_OPTIONS'	=> 'انتخابات کے اختیارات',
	'POLL_OPTIONS_EXPLAIN'	=> 'ہر نئی سطر پر ایک آپشن لکھیں. آپ <strong>%d</strong> آپشنز لکھ سکتے ہیں',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'ہر نئی سطر پر ایک آپشن لکھیں. آپ <strong>%d</strong> آپشنز لکھ سکتے ہیں. اگر آپ آپشن شامل یا ختم کریں گے تو انتخاب کو ری سیٹ کر دیا جائے گا.',
	'POLL_QUESTION'	=> 'انتخاب کا سوال',
	'POLL_TITLE_TOO_LONG'	=> 'انتخاب کے اس عنوان کے حروف کا 100 سے کم ہونا ضروری ہے',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'آپکے سروے کے عنوان کا تجزیہ شدہ سائز بہت بڑا ہے. BBCodes یا مسکانیں ختم کرنے پر غور کریں',
	'POLL_VOTE_CHANGE'	=> 'دوبارہ ووٹنگ کی اجازت دیں',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'اگر فعال ہے تو صارفین اپنا ووٹ تبدیل کر سکتے ہیں.',
	'POSTED_ATTACHMENTS'	=> 'پوسٹ کی گئیں منسلکات',
	'POST_APPROVAL_NOTIFY'	=> 'آپکو پوسٹ کی منظوری پر مطلع کر دیا جائے گا.',
	'POST_CONFIRMATION'	=> 'مراسلہ کی تصدیق',
	'POST_CONFIRM_EXPLAIN'	=> 'خودکار مراسلات کو روکنے کے لیے آپکو تصدیقی کوڈ لکھنے کی ضرورت ہے.یہ زیل میں تصویر میں دکھایا گیا ہے. اگر آپ اس کوڈ کو نہیں پڑھ پا رہے تو %sبورڈ منتظم%s سے رابطہ کریں',
	'POST_DELETED'	=> 'اس پیغام کو کامیابی سے خارج کر دیا گیا.',
	'POST_EDITED'	=> 'اس پیغام کو کامیابی سے تبدیل کر دیا گیا ہے.',
	'POST_EDITED_MOD'	=> 'اس پیغام کو کامیابی سے تبدیل کر دیا گیا ہے لیکن کسی ثالث کی منظوری کے بعد عوامی کیا جائے گا.',
	'POST_GLOBAL'	=> 'عالمی',
	'POST_ICON'	=> 'پوسٹ آئکن',
	'POST_NORMAL'	=> 'عام',
	'POST_REVIEW'	=> 'پوسٹ کا جائزہ',
	'POST_REVIEW_EDIT'	=> 'پوسٹ کا جائزہ',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'آپکی ترمیم کے وقت اس تحریر کو دوسرے صارف کی طرف سے تبدیل کر دیا گیا ہے. آپ دوبارہ ترمیم سے پہلے ایک بار تحریر کا جائزہ لے لیں.',
	'POST_REVIEW_EXPLAIN'	=> 'اس ٹاپک میں ایک نئی پوسٹ کا اضافہ کیا گیا ہے. آپ اپنی پوسٹ‌کو اس پوسٹ کی روشنی میں تبدیل کر سکتے ہیں.',
	'POST_STORED'	=> 'اس پیغام کا کامیابی سے اندراج کر دیا گیا ہے.',
	'POST_STORED_MOD'	=> 'اس پیغام کو کامیابی سے عرض کیا ، لیکن یہ ایک ثالث کی طرف سے منظور کئے جانے کی ضرورت ہے.',
	'POST_TOPIC_AS'	=> 'موضوع کو پوسٹ کریں بطور',
	'PROGRESS_BAR'	=> 'ترقی بار',
	'QUOTE_DEPTH_EXCEEDED'	=> 'آپ ایک دوسرے میں صرف %1$d اقتباسات شامل کر سکتے ہیں',
	'SAVE'	=> 'محفوظ',
	'SAVE_DATE'	=> 'محفوظ ',
	'SAVE_DRAFT'	=> 'محفوظ مسودہ',
	'SAVE_DRAFT_CONFIRM'	=> 'براہ مہربانی نوٹ کریں کہ محفوظ شدہ مسودہ میں صرف موضوع اور پیغام شامل ہے، کسی دوسری چیز کو ختم کر دیا جائے گا.',
	'SMILIES'	=> 'مسکراہٹیں',
	'SMILIES_ARE_OFF'	=> 'مسکانیں <em>بند ہیں</em>',
	'SMILIES_ARE_ON'	=> 'مسکانیں <em>کھلی ہیں</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'	=> 'سٹکی/ اعلان کے وقت کی حد',
	'STICK_TOPIC_FOR'	=> 'موضوع اس عرصہ کیلیے سٹک کریں ',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'کبھی نہ ختم ہنے والی سٹکی یا اعلان کے لیے 0 لکھیں یا خالی چھوڑیں. ',
	'STYLES_TIP'	=> 'ٹِپ: منتخب ٹیکسٹ پر سٹائلز فوری لاگو کیے جا سکتے ہیں',
	'TOO_FEW_CHARS'	=> 'آپ کا پیغام کچھ حروف پر مشتمل ہے.',
	'TOO_FEW_CHARS_LIMIT'	=> 'آپکا پیغام ‌%1$d حروف پر مشتمل ہے. کم سے کم حروف کی تعداد %2$d ہونی ضروری ہے.',
	'TOO_FEW_POLL_OPTIONS'	=> 'کم سے کم 2 انتخابی آپشنز کا لکھنا ضروری ہے.',
	'TOO_MANY_ATTACHMENTS'	=> 'مزید منسلکات شامل نہیں کر سکتے. زیادہ سے زیادہ تعداد %d ہے.',
	'TOO_MANY_CHARS'	=> 'آپ کا پیغام بہت زیادہ حروف پر مشتمل ہے.',
	'TOO_MANY_CHARS_POST'	=> 'آپکا پیغام ‌%1$d حروف پر مشتمل ہے. زیادہ سے زیادہ حروف کی تعداد %2$d ہونی ضروری ہے.',
	'TOO_MANY_CHARS_SIG'	=> 'آپکا دستخط ‌%1$d حروف پر مشتمل ہے. زیادہ سے زیادہ حروف کی تعداد %2$d ہونی ضروری ہے.',
	'TOO_MANY_POLL_OPTIONS'	=> 'آپ بہت زیادہ انتخابی آپشنز داخل کرنے کی کوشش کر رہے ہیں',
	'TOO_MANY_SMILIES'	=> 'آپ کا پیغام بہت مسکراھٹيں آن پر مشتمل ہے. اجازت مسکراھٹيں آن کی زیادہ سے زیادہ تعداد ہے. %d.',
	'TOO_MANY_URLS'	=> 'آپکا پیغام بہت زیادہ URLs ہر مشتمل ہے. زیادہ سے زیادہ تعداد ‌%d ہے.',
	'TOO_MANY_USER_OPTIONS'	=> 'آپ فی صارف آپشنز کو انتخابات میں موجود اپشنز سے زیادہ واضح نہیں کر سکتے.',
	'TOPIC_BUMPED'	=> 'موضوع کو کامیابی سے اوپر لایا جا چکا ہے',
	'UNAUTHORISED_BBCODE'	=> 'آپ کچھ BBCodes کو استعمال نہیں کر سکتے: %s',
	'UNGLOBALISE_EXPLAIN'	=> 'اس موضوع کو عالمی سے عام میں تبدیل کرنے کے لیے اس فور کو منتخب کرنے کی ضرورت ہے جس میں یہ ظاہر کیا جائے گا.',
	'UPDATE_COMMENT'	=> 'تبصرہ اپ ڈیٹ کریں',
	'URL_INVALID'	=> 'آپکا واضح‌کیا گیا URL درست نہیں ہے',
	'URL_NOT_FOUND'	=> 'واضح‌کی گئی فائل موجود نہیں ہے',
	'URL_IS_OFF'	=> '[url] <em>بند ہیں</em>',
	'URL_IS_ON'	=> '[url] <em>کھلے ہیں</em>',
	'USER_CANNOT_BUMP'	=> 'آپ اس فورم میں موضوعات کو نشر نہیں کر سکتے ہیں.',
	'USER_CANNOT_DELETE'	=> 'آپ اس فورم میں خطوط کو ختم نہیں کر سکتے ہیں.',
	'USER_CANNOT_EDIT'	=> 'آپ اس فورم میں پیغامات تبدیل نہیں کر سکتے ہیں.',
	'USER_CANNOT_REPLY'	=> 'آپ اس فورم میں جواب نہیں دے سکتے.',
	'USER_CANNOT_FORUM_POST'	=> 'آپ اس فورم کی قسم کی وجہ سے فورم پر پوسٹنگ کی کارروائی کرنے کے قابل نہیں ہیں. ',
	'VIEW_MESSAGE'	=> '%sاپنے شامل کردہ پیغامات دیکھیں%s',
	'VIEW_PRIVATE_MESSAGE'	=> '%sاپنے شامل کردہ ذاتی پیغامات دیکھیں%s',
	'WRONG_FILESIZE'	=> 'یہ فائل بہت بڑی ہے. زیادہ سے زیادہ سائز %1d %2s ہے.',
	'WRONG_SIZE'	=> 'تصویر کا کم سے کم %1$d پکسل چوڑا، %2$d پکسل اونچا، اور زیادہ سے زیادہ %3$d پکسل چوڑا، %4$d پکسل اونچا ہونا ضروری ہے.عرض کی گئی تصویر %5$d پکسل چوڑی، %6$d پکسل اونچی ہے.',
));

?>