<?php
/**
*
* acp_profile.php [Urdu]
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
	'ADDED_PROFILE_FIELD'	=> 'کسٹم پروفائل فیلڈ کامیابی سے شامل کر دی گئی',
	'ALPHA_ONLY'	=> 'صرف الفا نیومیریک',
	'ALPHA_SPACERS'	=> 'الفا نیومیریک اور سپیس',
	'ALWAYS_TODAY'	=> 'ہمیشہ موجودہ تاریخ',
	'BOOL_ENTRIES_EXPLAIN'	=> 'اپنی آپشنز داخل کریں',
	'BOOL_TYPE_EXPLAIN'	=> 'قسم واضح‌کریں، چیک باکس یا ریڈیو بٹن',
	'CHANGED_PROFILE_FIELD'	=> 'پروفائل فیلڈ کامیابی سے شامل کر دی گئی',
	'CHARS_ANY'	=> 'کوئی بھی حرف',
	'CHECKBOX'	=> 'چیک باکس',
	'COLUMNS'	=> 'کالم',
	'CP_LANG_DEFAULT_VALUE'	=> 'طے شدہ قیمت',
	'CP_LANG_EXPLAIN'	=> 'فیلڈ کی وضاحت',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'صارف کو پیش کی گئی اس فیلڈ کی وضاحت',
	'CP_LANG_NAME'	=> 'صارف کو پیش کیا گیا نام/ عنوان',
	'CP_LANG_OPTIONS'	=> 'اختیارات',
	'CREATE_NEW_FIELD'	=> 'نئی فیلڈ بنائیں',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'کم سے کم ایک کسٹم پروفائل فیلڈ کا ترجمہ نہیں ہوا. برائے مہربانی "ترجمہ" ربط کے زریعے مطلوبہ معلومات فراہم کریں',
	'DEFAULT_ISO_LANGUAGE'	=> '[طے شدہ زبان]%s',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'طے شدہ زبان کے زبان اندراجات اس فیلڈ کے لیے مکمل نہیں ہیں.',
	'DEFAULT_VALUE'	=> 'طے شدہ قیمت',
	'DELETE_PROFILE_FIELD'	=> 'پروفائل فیلڈ ختم کریں',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'کیا آپ واقعی اس پروفائل فیلڈ کو ختم کرنا چاہتے ہیں؟',
	'DISPLAY_AT_PROFILE'	=> 'صارف کنٹرول پینل میں ظاہر کریں',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'صارف اس فلیلڈ کو صارف کنٹرول پینل میں تبدیل کر سکتا ہے',
	'DISPLAY_AT_REGISTER'	=> 'رجسٹریشن سکرین پر ظاہر کریں',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'فعالی کے بعد یہ رجسٹریشن سکرین پر ظاہر ہوگی',
	'DISPLAY_ON_VT'	=> 'viewtopic سکرین پر ظاہر کریں',
	'DISPLAY_ON_VT_EXPLAIN'	=> 'اگر یہ فعال ہے تو یہ فیلڈ موضوع سکرین پر منی پروفائل میں ظاہر ہوگی',
	'DISPLAY_PROFILE_FIELD'	=> 'پروفائل فیلڈ کو عوامی طور پر ظاہر کریں',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'لوڈ ترتیبات میں موجود تمام مکانیت میں یہ فیلڈ دکھائی جائے گی. اگر اسے "نہیں" کیا جائے تو موضوع صفحات، پروفائل اور اراکین کی فہرست میں خفیہ رکھی جائے گی.',
	'DROPDOWN_ENTRIES_EXPLAIN'	=> 'اپنے اختیارات شامل کریں. ہر سطر میں ایک',
	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'نوٹ فرمائیں‌کہ آپ اپنے اختیارات کے متن کو تبدیل اور آخر میں شامل بھی کر سکتے ہیں. موجودہ اختیارات کے درمیان اختیارات بنانا یا مٹانا ٹھیک نہیں، ایسا کرنے سے صارفین کو غلط اختیارات مل سکتے ہیں. آخر میں رکھے گئے اختیارات مٹانے سے صارفین طے شدہ اختیارات پر واپس چلے جائیں گے.',
	'EMPTY_FIELD_IDENT'	=> 'خالی فیلڈ کی شناخت',
	'EMPTY_USER_FIELD_NAME'	=> 'نام/ عنوان داخل کریں',
	'ENTRIES'	=> 'اندراجات',
	'EVERYTHING_OK'	=> 'سب ٹھیک ہے',
	'FIELD_BOOL'	=> 'بولیئن (ہاں/نہیں)',
	'FIELD_DATE'	=> 'تاریخ',
	'FIELD_DESCRIPTION'	=> 'فیلڈ کی تفصیل',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'صارف کو دکھائی گئی اس فیلڈ کی تفصیل',
	'FIELD_DROPDOWN'	=> 'ڈراپ ڈاؤن باکس',
	'FIELD_IDENT'	=> 'فیلڈ کی تفصیل',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'منتخب فیلڈ تفصیل پہلے سے موجود ہے. دوسرا نام منتخب کریں.',
	'FIELD_IDENT_EXPLAIN'	=> 'فیلڈ تفصیل ڈیٹا بیس اور ٹیمپلیٹس میں فیلڈ کی شناخت کا نام ہے',
	'FIELD_INT'	=> 'اعداد',
	'FIELD_LENGTH'	=> 'متن باکس کی لمبائی',
	'FIELD_NOT_FOUND'	=> 'پروفائل فیلڈ نہیں‌ملی',
	'FIELD_STRING'	=> 'ایک متن فیلڈ',
	'FIELD_TEXT'	=> 'ٹیکسٹ ایریا',
	'FIELD_TYPE'	=> 'فیلڈ کی قسم',
	'FIELD_TYPE_EXPLAIN'	=> 'بعد میں آپ فیلڈ کی قسم تبدیل نہیں‌کر سکتے',
	'FIELD_VALIDATION'	=> 'فیلڈ کی توثیق',
	'FIRST_OPTION'	=> 'پہلا اختیار',
	'HIDE_PROFILE_FIELD'	=> 'پروفائل فیلڈ خفیہ رکھیں',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'صارف، مدیران اور منتظمین کے علاوہ تمام صارفین سے پروفائل فیلڈ خفیہ رکھیں. اگر صارف کنٹرول پینل میں‌غیر فعال ہے تو صارف پروفائل فیلڈ دیکھ نہیں سکتا اور صرف منتظمین اسے تبدیل کر سکتے ہیں.',
	'INVALID_CHARS_FIELD_IDENT'	=> 'فیلڈ شناخت میں صرف چھوٹے الفاظ‌ ہو سکتے ہیں. a-z اور _',
	'INVALID_FIELD_IDENT_LEN'	=> 'فیلڈ شناخت میں صرف 17 حروف ہو سکتے ہیں.',
	'ISO_LANGUAGE'	=> 'زبان[%s]',
	'LANG_SPECIFIC_OPTIONS'	=> 'زبان مخصوص اختیارات[<strong>%s</strong>]',
	'MAX_FIELD_CHARS'	=> 'حروف کی زیادہ سے زیادہ تعداد',
	'MAX_FIELD_NUMBER'	=> 'بڑے سے بڑا اجازت شدہ عدد',
	'MIN_FIELD_CHARS'	=> 'کم سے کم حروف کی تعداد',
	'MIN_FIELD_NUMBER'	=> 'کم سے کم اجازت شدہ عدد',
	'NO_FIELD_ENTRIES'	=> 'کوئی اندراجات وضح‌نہیں',
	'NO_FIELD_ID'	=> 'کوئی فیلڈ وضح‌نہیں',
	'NO_FIELD_TYPE'	=> 'کوئی فیلڈ قِسم وضح‌نہیں',
	'NO_VALUE_OPTION'	=> ' غیر اندراج شدہ قیمت کے برابر اختیار',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'کوئی اندراج نہ ہونے کی قیمت. اگر فیلڈ مطلوبہ ہے تو  یہاں منتخب اختیار کے انتخاب پر صارف کو غلطی ملے گی.',
	'NUMBERS_ONLY'	=> 'صرف اعداد (0-9)',
	'PROFILE_BASIC_OPTIONS'	=> 'بنیادی اختیارات',
	'PROFILE_FIELD_ACTIVATED'	=> 'پروفائل فیلڈ کامیابی سے فعال کر دی گئی',
	'PROFILE_FIELD_DEACTIVATED'	=> 'پروفائل فیلڈ کامیابی سےغیر  فعال کر دی گئی',
	'PROFILE_LANG_OPTIONS'	=> 'زبان مخصوص اختیارات',
	'PROFILE_TYPE_OPTIONS'	=> 'پروفائل قسم مخصوص اختیارات',
	'RADIO_BUTTONS'	=> 'ریڈیو بٹن',
	'REMOVED_PROFILE_FIELD'	=> 'پروفائل فیلڈ کامیابی سے ختم کر دی گئی',
	'REQUIRED_FIELD'	=> 'مطلوبہ فیلڈ',
	'REQUIRED_FIELD_EXPLAIN'	=> 'پروفائل فیلڈ کو صارف کے لیے مطلوبہ کرتا ہے. اگر رجسٹریشن فارم میں غیر فعال ہے تو صرف اس وقت ظاہر ہوگی جب صارف اپنی پروفائل میں تبدیلی کرے گا.',
	'ROWS'	=> 'سطریں',
	'SAVE'	=> 'محفوظ کریں',
	'SECOND_OPTION'	=> 'دوسرا اختیار',
	'STEP_1_EXPLAIN_CREATE'	=> 'آپ یہاں‌اپنی نئی پروفائل فیلڈ کے نئے بنیادی اجزاء شامل کر سکتے ہیں. ',
	'STEP_1_EXPLAIN_EDIT'	=> 'آپ یہاں‌اپنی پروفائل فیلڈ کے نئے بنیادی اجزاء شامل کر سکتے ہیں. متعلقہ اختیارات دوسرے مرحلے میں دیکھی جائیں گی. ',
	'STEP_1_TITLE_CREATE'	=> 'پروفائل فیلڈ شامل کریں',
	'STEP_1_TITLE_EDIT'	=> 'پروفائل فیلڈ ترمیم کریں',
	'STEP_2_EXPLAIN_CREATE'	=> 'یہاں‌ آپ کچھ عام اختیارات شامل کر سکتے ہیں.',
	'STEP_2_EXPLAIN_EDIT'	=> 'یہاں‌ آپ کچھ عام اختیارات تبدیل کر سکتے ہیں.<br /><strong>نوٹ‌فرمائیں کہ اس میں‌تبدیلی صارفین کی طرف سے پروفائل فیلڈز میں‌کی گئی تبیلیوں‌کو نہیں بدلے گی</strong>',
	'STEP_2_TITLE_CREATE'	=> 'پروفائل قسم مخصوص اختیارات',
	'STEP_2_TITLE_EDIT'	=> 'پروفائل قسم مخصوص اختیارات',
	'STEP_3_EXPLAIN_CREATE'	=> 'چونکہ آپکے بورڈ پر ایک سے زیادہ زبانیں انسٹال ہیں، آپکو دوسری زبان اشیاء کا بھرنا بھی لازمی ہے. پروفائل فیلڈ طےشدہ زبان کی فعالی کے ساتھ کام کرے گی. ',
	'STEP_3_EXPLAIN_EDIT'	=> 'چونکہ آپکے بورڈ پر ایک سے زیادہ زبانیں انسٹال ہیں اس لیے آپ چھوڑی گئیں زبان اشیاء بھی شامل یا تبدیل کر سکتے ہیں.  پروفائل فیلڈ طےشدہ زبان کی فعالی کے ساتھ کام کرے گی. ',
	'STEP_3_TITLE_CREATE'	=> 'بقیہ زبان تعریفیں',
	'STEP_3_TITLE_EDIT'	=> 'زبان تعریفیں',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'ظاہر کرنے کے لیے طے شدہ فقرہ لکھیں، ایک طے شدہ قیمت. خالی ظاہر کرنے کے لیے خالی چھوڑیں',
	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'ظاہر کرنے کے لیے طے شدہ متن لکھیں، ایک طے شدہ قیمت. خالی ظاہر کرنے کے لیے خالی چھوڑیں',
	'TRANSLATE'	=> 'ترجمہ کریں',
	'USER_FIELD_NAME'	=> 'صارف کو دکھایا گیا فیلڈ نام/ عنوان',
	'VISIBILITY_OPTION'	=> 'نمائش کے اختیارات',
));

?>