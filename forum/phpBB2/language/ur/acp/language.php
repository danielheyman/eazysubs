<?php
/**
*
* acp_language.php [Urdu]
*
* @package language
* @version $Id: $
* @copyright (c) 2010 phpBB Group
* @author 2010-11-17 - phpBB Group
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
	'ACP_FILES'	=> 'منتظم زبان فائلز',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'یہاں‌آپ زبان کی فائلز کو انسٹال/ ختم کر سکتے ہیں. طے شدہ پیک کو * سے دکھایا گیا ہے',
	'EMAIL_FILES'	=> 'ای-میل سانچے',
	'FILE_CONTENTS'	=> 'فائلز کا مواد',
	'FILE_FROM_STORAGE'	=> 'یہ فائل ذخیرہ فولڈر میں‌ہے',
	'HELP_FILES'	=> 'امدادی فائلز',
	'INSTALLED_LANGUAGE_PACKS'	=> 'انسٹال ہوئے زبان کے پیک',
	'INVALID_LANGUAGE_PACK'	=> 'منتخب شدہ زبان پیک درست لگتا ہے. براہ کرم زبان کے پیک کی توثیق اور اسے اگر ضروری ہے تو پھر اپ لوڈ کریں.',
	'INVALID_UPLOAD_METHOD'	=> 'اپ لوڈ کرنے کا طریقہ درست نہیں ہے ، بارہ مہربانی ایک مختلف طریقہ منتخب کریں.',
	'LANGUAGE_DETAILS_UPDATED'	=> 'زبان کی تفصیلات کامیابی سے اپ ڈیٹ کر دی گئی ہیں',
	'LANGUAGE_ENTRIES'	=> 'زبان اندراجات',
	'LANGUAGE_ENTRIES_EXPLAIN'	=> 'یہاں‌آپ موجودہ ذبان یا جنکا ترجمہ نہیں ہوا، ترجمہ کر سکتےہیں. <br />
<strong>نوٹ:</strong> ایک بار آپ نے ترجمہ کی فائل تبدیل کر لی تو یہ فائلز ایک الگ فولڈر <span style="color:red;">ذخیرہ فولڈر</span> میں‌رکھی جائیں‌گی تاکہ آُپ انہیں‌ڈائون لوڈ کر سکیں. جب تک آپ اصلی فائل کو اس ترجمہ شدہ فائل سے تبدیل نہ کر لیں، تبدیلیاں نہیں‌دیکھی جا سکیں گی.',
	'LANGUAGE_FILES'	=> 'ذبان کی فائلز: ',
	'LANGUAGE_KEY'	=> 'زبان کی چابی',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'یہ زبان پہلے سے انسٹال ہے',
	'LANGUAGE_PACK_DELETED'	=> 'زبان کا پیک، "%s" کامیابی سے ختم کر دیا گیا ہے. اس زبان کو استعمال کر رہے تمام صارفین کی زبان، طے شدہ زبان سے بدل دی گئی ہے',
	'LANGUAGE_PACK_DETAILS'	=> 'زبان کے پیک کی تفصیلات',
	'LANGUAGE_PACK_INSTALLED'	=> 'زبان کا پیک "%s" کامیابی سے انسٹال کر دیا گیا ہے.',
	'LANGUAGE_PACK_ISO'	=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'	=> 'مقامی نام',
	'LANGUAGE_PACK_NAME'	=> 'نام',
	'LANGUAGE_PACK_NOT_EXIST'	=> 'منتخب زبان کی پیک موجود نہیں ہے.',
	'LANGUAGE_PACK_USED_BY'	=> 'استعمال برائے (بمع خودکار صارفین)',
	'LANGUAGE_VARIABLE'	=> 'زبان کا متغیر',
	'LANG_TRANSLATOR'	=> 'ترجمہ برائے',
	'LANG_AUTHOR'	=> 'زبان کا مصنف',
	'LANG_ENGLISH_NAME'	=> 'انگریزی نام',
	'LANG_ISO_CODE'	=> 'ISO کوڈ',
	'LANG_LOCAL_NAME'	=> 'مقامی نام',
	'MISSING_LANGUAGE_FILE'	=> 'لاپتہ زبانی فائل: <strong style="color:red">%s</style>',
	'MISSING_LANG_VARIABLES'	=> 'لاپتہ زبانی متغیر',
	'MODS_FILES'	=> 'لاپتہ زبانی فائلز',
	'NO_FILE_SELECTED'	=> 'آپ نے کسی ذبان کی فائل کی وضاحت نہیں‌کی',
	'NO_LANG_ID'	=> 'آپ نے کسی ذبان کے پیک کی وضاحت نہیں‌کی',
	'NO_REMOVE_DEFAULT_LANG'	=> 'آپ طے شدہ زبان کو ختم نہیں کر سکتے. ایسا کرنے کے لیے پہلے اپنے بورڈ کی زبان تبدیل کریں.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'کوئی غیر انسٹالڈ زبان کا پیک نہیں ہے',
	'REMOVE_FROM_STORAGE_FOLDER'	=> 'ذخیرہ فولڈر سے ختم کریں',
	'SELECT_DOWNLOAD_FORMAT'	=> 'ڈائون لوڈ کا فارمیٹ منتخب کریں',
	'SUBMIT_AND_DOWNLOAD'	=> 'فائل ارسال اور ڈائون لوڈ‌کریں',
	'SUBMIT_AND_UPLOAD'	=> 'فائل ارسال اور اپ لوڈ‌کریں',
	'THOSE_MISSING_LANG_FILES'	=> 'درج ذیل فائلز %s زبان کے فولڈر سے لاپتہ ہیں',
	'THOSE_MISSING_LANG_VARIABLES'	=> 'درج ذیل متغیر  (variables)%s زبان کے پیک سے لاپتہ ہیں',
	'UNINSTALLED_LANGUAGE_PACKS'	=> 'غیر انسٹالڈ زبان کے پیک',
	'UNABLE_TO_WRITE_FILE'	=> 'فائل %s میں لکھی نہیں جا سکی',
	'UPLOAD_COMPLETED'	=> 'اپ لوڈ کامیابی سے مکمل ہو گیا ہے',
	'UPLOAD_FAILED'	=> 'اپ لوڈ نامعلوم وجوہات کی بنیاد پر ناکام ہو چکا ہے. آپ متعلقہ فائل کو خود تبدیل کر سکتے ہیں.',
	'UPLOAD_METHOD'	=> 'اپ لوڈ‌کا طریقہ کار',
	'UPLOAD_SETTINGS'	=> 'اپ لوڈ‌کی ترتیبات',
	'WRONG_LANGUAGE_FILE'	=> 'زبان کی منتخب فائلز درست نہیں ہیں',
));

?>