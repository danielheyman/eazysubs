<?php
/**
*
* acp_attachments.php [Urdu]
*
* @package language
* @version $Id: $
* @copyright (c) 2010 phpBB Group
* @author 2010-11-21 - phpBB Group
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'یہاں‌آپ منسلکات اور ان سے متعلق مخصوص اقسام کی ترتیبات کی ترتیب کر سکتے ہیں',
	'ACP_EXTENSION_GROUPS_EXPLAIN'	=> 'یہاں‌آپ اپنے ایکسٹینشن گروہ کو شامل، ترمیم، حذف یا غیر فعال کر سکتے ہی. مزید اختیارات میں‌مخصوص قسم کا لگانا، ڈائون لوڈ‌کا طریقہ تبدیل کرنا اور ایک ڈائون لوڈ‌بٹن کا وضح کرنا جو اس گروہ سے تعلق رکھنے والی منسلکات کے سامنے ظاہر ہوگا.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'	=> 'یہاں‌آپ اپنی اجازت شدہ منسلکات کا انتظام کر سکتے ہیں. ہم زور و شور سے تلقین کرتے ہیں کہ سکرپت والی ایکسٹینشن کی اجازت نہ دیں‌جیسا کہ <code>php</code>, <code>php3</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code> وغیرہ وغیرہ',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'یہاں‌آپ یتیم فائلز دیکھ سکتے ہیں. ایسا اس وقت ہوتا ہے جب صارفین فائلز اپ لوڈ‌کریں‌لیکن انہیں‌کسی مراسلہ میں‌منسلک نہ کریں. آپ انہیں حذف کر سکتے ہیں‌یا کسی مراسلہ میں‌منسلک کر سکتے ہیں. ',
	'ADD_EXTENSION'	=> 'ایکسٹینشن شامل کریں',
	'ADD_EXTENSION_GROUP'	=> 'ایکسٹینشن گروہ شامل کریں',
	'ADMIN_UPLOAD_ERROR'	=> 'فائل "%s" منسلک کرتے ہوئے مسائل درپیش ہیں',
	'ALLOWED_FORUMS'	=> 'اجازت شدہ فورم',
	'ALLOWED_FORUMS_EXPLAIN'	=> 'منتخب (یا تمام منتخب) فورمز میں‌مقرر ایکسٹینشن ارسال کر سکتے ہیں',
	'ALLOWED_IN_PM_POST'	=> 'اجازت شدہ',
	'ALLOW_ATTACHMENTS'	=> 'منسلکات کی اجازت دیں',
	'ALLOW_ALL_FORUMS'	=> 'تمام فورمز کی اجازت دیں',
	'ALLOW_IN_PM'	=> 'ذاتی پیغام رسانی میں‌اجازت ہے',
	'ALLOW_PM_ATTACHMENTS'	=> 'ذاتی پیغام رسانی میں‌ منسلکات کی اجازت دیں',
	'ALLOW_SELECTED_FORUMS'	=> 'صرف نیچے منتخب کردہ فورم',
	'ASSIGNED_EXTENSIONS'	=> 'مقرر کردہ ایکسٹینشن',
	'ASSIGNED_GROUP'	=> 'مقرر کردہ ایکسٹینشن گروہ',
	'ATTACH_EXTENSIONS_URL'	=> 'ایکسٹینشن ',
	'ATTACH_EXT_GROUPS_URL'	=> 'ایکسٹینشن گروہ',
	'ATTACH_ID'	=> 'شناخت',
	'ATTACH_MAX_FILESIZE'	=> 'زیادہ سے زیادہ فائل سائز',
	'ATTACH_MAX_FILESIZE_EXPLAIN'	=> 'ہر فائل کا زیادہ سے زیادہ سائز. 0 لکھ کر غیر فعال کریں',
	'ATTACH_MAX_PM_FILESIZE'	=> 'پیغامات میں‌ فائل کا زیادہ سے زیادہ سائز',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'پیغامات میں‌ فائل کا زیادہ سے زیادہ سائز. 0 سے غیر فعال کریں',
	'ATTACH_ORPHAN_URL'	=> 'یتیم منسلکات',
	'ATTACH_POST_ID'	=> 'مراسلہ کی شناخت',
	'ATTACH_QUOTA'	=> 'کل منسلکات کوٹا',
	'ATTACH_QUOTA_EXPLAIN'	=> 'بورڈ کی جگہ میں‌کل منسلکات کا کوٹا. لامحدود کے لیے 0 لکھیں.',
	'ATTACH_TO_POST'	=> 'فائل مراسلہ میں‌شامل کریں',
	'CAT_FLASH_FILES'	=> 'فلیش کی فائلز',
	'CAT_IMAGES'	=> 'تصاویر',
	'CAT_QUICKTIME_FILES'	=> 'Quicktime میڈیا فائلز',
	'CAT_RM_FILES'	=> 'RealMedia میڈیا فائلز',
	'CAT_WM_FILES'	=> 'Windows Media میڈیا فائلز',
	'CHECK_CONTENT'	=> 'منسلکات کی فائلز دیکھیں',
	'CHECK_CONTENT_EXPLAIN'	=> 'کچھ برائوزر غلط میڈیا کی قسم کو سنبھال سکتے ہیں. اس آپشن سے ایسا ہونے کے امکانات بہت کم ہیں',
	'CREATE_GROUP'	=> 'نیا گروہ بنائیں',
	'CREATE_THUMBNAIL'	=> 'تھمب نیل بنائیں',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'تمام ممکنہ حالات میں تھمب نیل بنائیں',
	'DEFINE_ALLOWED_IPS'	=> 'اجازت شدہ آئی پی/ ہوسٹ نیم واضح کریں',
	'DEFINE_DISALLOWED_IPS'	=> 'غیر اجازت شدہ آئی پی/ ہوسٹ نیم واضح کریں',
	'DOWNLOAD_ADD_IPS_EXPLAIN'	=> 'ہر مختلف آئی پی یا ہوسٹ‌نیم  کو واضح کرنے کے لیے نئی سطر پر لکھیں. آئی پی کی ایک رینج واضح کرنے کے لیے شروع اور آخر کو ایک ہائفن (-) کے ساتھ وائلڈ کارڈ * استعمال کریں',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'آپ کئی آئی پی ایڈریسس کو ایک ہی بار میں ختم کر سکتے ہیں. ایسا کرنے کے لیے مائوس اور کی بورڈ کا درست استعمال کریں.',
	'DISPLAY_INLINED'	=> 'تصاویر کو ان-لائن ظاہر کریں',
	'DISPLAY_INLINED_EXPLAIN'	=> 'اگر یہ <strong>نہیں</strong> ہے تو تصاویر کے روابط ظاہر ہونگے.',
	'DISPLAY_ORDER'	=> 'منسلکات کا ظاہری حکم سمت',
	'DISPLAY_ORDER_EXPLAIN'	=> 'منسلکات کا حکم سمت وقت کے مطابق رکھیں',
	'EDIT_EXTENSION_GROUP'	=> 'ایکسٹینشن گروہ میں‌ترمیم کریں',
	'EXCLUDE_ENTERED_IP'	=> 'تمام آئی پی ایڈریس یا ہوسٹ نیم نکالنے کے لیے اسے فعال کریں',
	'EXCLUDE_FROM_ALLOWED_IP'	=> 'آئی پی کو تمام اجازت شدہ آئی پی/ ہوسٹ نیم سے نکالیں',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'آئی پی کو تمام غیر اجازت شدہ آئی پی/ ہوسٹ نیم سے نکالیں',
	'EXTENSIONS_UPDATED'	=> 'ایکسٹینشن کامیابی سے اپ ڈیٹ‌کر دی گئیں',
	'EXTENSION_EXIST'	=> 'ایکسٹینشن %s پہلے سے موجود ہے',
	'EXTENSION_GROUP'	=> 'ایکسٹینشن گروہ',
	'EXTENSION_GROUPS'	=> 'ایکسٹینشن گروہ',
	'EXTENSION_GROUP_DELETED'	=> 'ایکسٹینشن گروہ کامیابی سے حذف کر دیا گیا',
	'EXTENSION_GROUP_EXIST'	=> 'ایکسٹینشن گروہ %s پہلے سے موجود ہے',
	'EXT_GROUP_ARCHIVES'	=> 'آرکائیو',
	'EXT_GROUP_DOCUMENTS'	=> 'دستاویزات',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'ڈائون لوڈ کے قابل فائلز',
	'EXT_GROUP_FLASH_FILES'	=> 'فلیش فائلز',
	'EXT_GROUP_IMAGES'	=> 'تصاویر',
	'EXT_GROUP_PLAIN_TEXT'	=> 'سادہ متن',
	'EXT_GROUP_QUICKTIME_MEDIA'	=> 'کوئیک ٹائم میڈیا',
	'EXT_GROUP_REAL_MEDIA'	=> 'رئیل میڈیا',
	'EXT_GROUP_WINDOWS_MEDIA'	=> 'ونڈوز میڈیا',
	'GO_TO_EXTENSIONS'	=> 'ایکسٹینشن انتظام کی سکرین پر جائیں',
	'GROUP_NAME'	=> 'گروہ کا نام',
	'IMAGE_LINK_SIZE'	=> 'تصویر ربط کا طول وعرض',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'اگر تصویر کا طول وعرض‌ اس سے زیادہ ہے تو تصویر کا ان لائن ربط دکھائیں. اسے غیر فعال کرنے کے لیے طول و عرض‌ 0x0 لکھیں',
	'IMAGICK_PATH'	=> 'Imagemagick راستہ',
	'IMAGICK_PATH_EXPLAIN'	=> 'تصویر تبدیل کرنے والی ایپلیکشن کا راستہ. جیسا کہ <samp>/usr/bin</samp>',
	'MAX_ATTACHMENTS'	=> 'فی مراسلہ منسلکات کی زیادہ سے زیادہ تعداد',
	'MAX_ATTACHMENTS_PM'	=> 'فی ذاتی پیغام منسلکات کی زیادہ سے زیادہ تعداد',
	'MAX_EXTGROUP_FILESIZE'	=> 'زیادہ سے زیادہ فائل کا حجم',
	'MAX_IMAGE_SIZE'	=> 'تصویر کا زیادہ سے زیادہ حجم',
	'MAX_IMAGE_SIZE_EXPLAIN'	=> 'تصویری منسلکات کا زیادہ سے زیادہ حجم. غیر فعال کرنے کے لیے دونوں کو 0px پر رکھیں',
	'MAX_THUMB_WIDTH'	=> 'تھمب نیل کی زیادہ سے زیادہ چوڑائی',
	'MAX_THUMB_WIDTH_EXPLAIN'	=> 'تھمب نیل کی چوڑائی یہاں‌مقرر عرض‌سے زیادہ نہیں‌ہوگی.',
	'MIN_THUMB_FILESIZE'	=> 'تھمب نیل کی کم سے کم چوڑائی',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'اس سے کم عرض والی تصاویر کا تھمب نیل نہ بنائیں',
	'MODE_INLINE'	=> 'ان لائن',
	'MODE_PHYSICAL'	=> 'جسمانی',
	'NOT_ALLOWED_IN_PM'	=> 'صرف مراسلات میں‌اجازت ہے',
	'NOT_ALLOWED_IN_PM_POST'	=> 'اجازت نہیں',
	'NOT_ASSIGNED'	=> 'مقرر نہیں',
	'NO_EXT_GROUP'	=> 'کوئی نہیں',
	'NO_EXT_GROUP_NAME'	=> 'گروہ کا کوئی نام نہیں‌لکھا گیا',
	'NO_EXT_GROUP_SPECIFIED'	=> 'کوئی ایکسٹینشن گروہ مقرر نہیں‌',
	'NO_FILE_CAT'	=> 'کوئی نہیں',
	'NO_IMAGE'	=> 'کوئی تصویر نہیں',
	'NO_THUMBNAIL_SUPPORT'	=> 'تھمب نیل کی حمایت غیر فعال ہے. مناسب فعالیت کے لیے یا تو GD ایکسٹینشن موجود نہیں یا imagemagick انسٹال نہیں ہے. ',
	'NO_UPLOAD_DIR'	=> 'آپکی واضح کی گئی اپ لوڈ ڈائریکٹری ٹھیک موجود نہیں',
	'NO_WRITE_UPLOAD'	=> 'آپکی واضح کی گئی اپ لوڈ ڈائریکٹری میں‌ کچھ شامل نہیں کیا جا سکتا. برائے مہربانی اسکے فولڈر کی اجازات تبدیل کریں یا ویب ماسٹر سے رابطہ کریں',
	'ONLY_ALLOWED_IN_PM'	=> 'صرف ذاتی پیغامات میں‌اجازت ہے',
	'ORDER_ALLOW_DENY'	=> 'اجازت دیں',
	'ORDER_DENY_ALLOW'	=> 'انکار کریں',
	'REMOVE_ALLOWED_IPS'	=> '<em>اجازت شدہ</em> ہوسٹ نیم/ آئی پی ہٹائیں یا شامل کریں',
	'REMOVE_DISALLOWED_IPS'	=> '<em>غیر اجازت شدہ</em> ہوسٹ نیم/ آئی پی ہٹائیں یا شامل کریں',
	'SEARCH_IMAGICK'	=> 'Imagemagick تلاش کریں',
	'SECURE_ALLOW_DENY'	=> 'اجازت/ انکال فہرست',
	'SECURE_ALLOW_DENY_EXPLAIN'	=> 'محفوظ‌ڈائون لوڈ کا طریقہ تبدیل کریں. <strong>وائٹ لسٹ</strong> (اجازت ہے) یا <strong>بلیک لسٹ</strong> (اجازت نہیں ہے)',
	'SECURE_DOWNLOADS'	=> 'محفوظ‌دائون لوڈ فعال کریں',
	'SECURE_DOWNLOADS_EXPLAIN'	=> 'اس آپشن کی فعالی کے ساتھ، ڈائون لوڈ صرف مقرر کردہ آئی پی یا ہوسٹ‌نیم تک محدود ہونگے',
	'SECURE_DOWNLOAD_NOTICE'	=> 'محفوظ‌دائون لوڈ‌فعال نہیں‌ہے. یہ ترتیبات محفوظ‌دائون لوڈ فعال کرنے کے بعد فعال ہونگی',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'	=> 'آئی پی لسٹ‌کامیابی سے اپ ڈیٹ‌کر دی گئی ہے',
	'SECURE_EMPTY_REFERRER'	=> 'خالی حوالہ کی اجازت دیں',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'محفوظ ڈائون لوڈ تجویز کنندگان پر مبنی ہیں. کیا آپ ان کے لیے ڈائون لوڈ کی اجازت دینا چاہتے ہیں جو حوالہ نہیں‌دے رہے؟',
	'SETTINGS_CAT_IMAGES'	=> 'تصویر زمرہ کی ترتیب',
	'SPECIAL_CATEGORY'	=> 'مخصوص زمرہ',
	'SPECIAL_CATEGORY_EXPLAIN'	=> 'مخصوص زمرات مراسلات میں مختلف ظاہر ہو سکتے ہیں',
	'SUCCESSFULLY_UPLOADED'	=> 'کامیابی سے اپ لوڈ کر دیا گیا',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'ایکسٹینشن گروہ کامیابی سے شامل کر دیا گیا',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'ایکسٹینشن گروہ کامیابی سے اپ ڈیٹ کر دیا گیا',
	'UPLOADING_FILES'	=> 'فائلز اپ لوڈ ہو رہی ہیں',
	'UPLOADING_FILE_TO'	=> 'فائل "%1$s" مراسلہ "%2$d" میں‌اپ لوڈ کی جا رہی ہے.',
	'UPLOAD_DENIED_FORUM'	=> 'آپکو فورم "%s" میں‌فائل لوڈ کرنے کی اجازت نہیں ہے',
	'UPLOAD_DIR'	=> 'اپ لوڈ‌کی ڈائیریکٹری',
	'UPLOAD_DIR_EXPLAIN'	=> 'منسلکات کا ذخیرہ راستہ. براہ مہربانی نوٹ‌کریں کہ اگر آپ اس فولڈر کو ایسے تبدیل کریں کہ اس میں‌اپ لوڈ‌کی گئیں‌فائلز پہلے سے موجود ہوں‌ آپکو فائلز کو خود نئی مکانیت پر منتقل کرنا پڑے گا',
	'UPLOAD_ICON'	=> 'اپلوڈ کا آئیکن',
	'UPLOAD_NOT_DIR'	=> 'آپکی وضح‌کی گئی اپلوڈ کی مکانیت ایک درست فولڈر معلوم نہیں ہوتی.',
));

?>