<?php
/**
*
* acp_posting.php [Urdu]
*
* @package language
* @version $Id: $
* @copyright (c) 2010 phpBB Group
* @author 2010-11-26 - phpBB Group
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
	'ACP_BBCODES_EXPLAIN'	=> 'BBCode ایک خاص عمل ہے کو کسی بھی چیز کے ظاہر ہونے پر زبردست کنٹرول رکھتا ہے. یہاں سے آپ اپنی مرضی کے BBCode شامل، ترمیم یا ختم کر سکتے ہیں. ',
	'ADD_BBCODE'	=> 'نیا BBCode شامل کریں',
	'BBCODE_DANGER'	=> 'The BBCode you are trying to add seems to use a {TEXT} token inside a HTML attribute. This is a possible XSS security issue. Try using the more restrictive {SIMPLETEXT} or {INTTEXT} types instead. Only proceed if you understand the risks involved and you consider the use of {TEXT} absolutely unavoidable.',
	'BBCODE_DANGER_PROCEED'	=> 'آگے چلیں',
	'BBCODE_ADDED'	=> 'BBCode کامیابی سے شامل کر دیا گیا',
	'BBCODE_EDITED'	=> 'BBCodeکی کامیابی سے ترمیم کر دی گئی',
	'BBCODE_NOT_EXIST'	=> 'آپکا منتخب کیا گیا BBCode دستیاب نہیں ہے',
	'BBCODE_HELPLINE'	=> 'مدد',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'اس فیلڈ میں mouseover ٹیکسٹ شامل ہے',
	'BBCODE_HELPLINE_TEXT'	=> 'مدد کی سطر کا ٹیکسٹ',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'آپکی داخل کی گئی مدد کی سطر بہت لمبی ہے',
	'BBCODE_INVALID_TAG_NAME'	=> 'آپکا منتخب کیا گیا BBCode ٹیگ کا نام پہلے ہی موجود ہے',
	'BBCODE_INVALID'	=> 'آپکا BBCode ایک غلط انداز میں‌بنایا گیا ہے',
	'BBCODE_OPEN_ENDED_TAG'	=> 'آپکے BBCode میں ایک کھلا اور ایک بند ٹیگ لازمی ہے',
	'BBCODE_TAG'	=> 'ٹیگ',
	'BBCODE_TAG_TOO_LONG'	=> 'آپکا منتخب کیا گیا ٹیگ نام بہت لمبا ہے',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'آپکے ٹیگ کی تعریف بہت طویل ہے. اپنی تعریف کو چھوٹا کریں',
	'BBCODE_USAGE'	=> 'BBCode کا استعمال',
	'BBCODE_USAGE_EXAMPLE'	=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'	=> 'یہاں وضاحت کریں کہ BBCodeکیسے استعمال کرنا ہے(%sنیچے دیکھیں)',
	'EXAMPLE'	=> 'مثال:',
	'EXAMPLES'	=> 'مثالیں:',
	'HTML_REPLACEMENT'	=> 'HTML کا متبادل',
	'HTML_REPLACEMENT_EXAMPLE'	=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'	=> 'یہاں‌آپ طے شدہ HTML متبادل کی وضاحت کریں. جو ٹوکن آپ نے اوپر استعمال کیے انہیں‌واپس لگانا نہ بھولیں',
	'TOKEN'	=> 'ٹوکن',
	'TOKENS'	=> 'ٹوکن',
	'TOKENS_EXPLAIN'	=> 'ٹوکن صرف کے ان پٹ کے پلیس ہولڈرز ہیں. اگر ضرورت ہو تو آپ آخر میں ایک نمبر استعمال کر کے اسکی نمبرنگ کر سکتے ہیں جیسا کہ {TEXT1} یا {TEXT2}.
<br /><br/>
HTML کے تبادلے میں آپ اپنی زبان میں‌موجود کوئی بھی سٹرنگ لکھ سکتے ہیں. جیسا کہ {L_<em>&lt;STRINGNAME&gt;</em>} جہاں <em>&lt;STRINGNAME&gt;</em> سٹرنگ کا ترجمہ ہے جو آپ استعمال کرنا چاہتے ہیں. ',
	'TOKEN_DEFINITION'	=> 'یہ کیا ہو سکتا ہے؟',
	'TOO_MANY_BBCODES'	=> 'آپ مزید BBCodes نہیں بنا سکتے. براہ مہربانی کم سے کم ایک BBCode ختم کریں اور دوبارہ کوشش کریں',

	'tokens'	=> array(
		'TEXT'	=> 'کوئی بھی ٹیسکٹ، بشمول باہر کے حروف، نمبر وغیرہ.... آپکو اس ٹوکن کو HTML ٹیگس میں استعمال نہیں‌کرنا چاہیے. مگر آپ IDENTIFIER, INTTEXT یا SIMPLETEXT استعمال کر سکتے ہیں',
		'SIMPLETEXT'	=> 'لاطینی حروف سے کردار (A-Z)، نمبر، خالی جگہیں، کومے، نقطے، -، +، ہائفن اور انڈر سکور.',
		'INTTEXT'	=> 'یونیکوڈ حرف حروف، نمبر، خالی جگہیں، کومے، نقطے، -، +، ہائفن اور انڈر سکور اور سفید جگہیں',
		'IDENTIFIER'	=> 'لاطینی حروف سے کردار (A-Z)، ہائفن اور انڈر سکور.',
		'NUMBER'	=> 'ڈجٹس کی کوئی بھی سیریز',
		'EMAIL'	=> 'ایک درست ای-میل ایڈریس',
		'URL'	=> 'کوئی درست URL جو کوئی بھی پروٹوکول استعمال کر رہا ہو. اگر کچھ استعمال نہ کیا جائے تو http:// استعمال ہوگا',
		'LOCAL_URL'	=> 'ایک مقامی URL. URL موضوع کے صفحے سے مےمتعلقہ ہونا چاہیے اور سرور کا نام یا پروٹوکول استعمال نہیں کر سکتا',
		'COLOR'	=> 'ایک HTML رنگ، نیومیریک شکل میں بھی ہو سکتا ہے جیسے <samp>#FF1234</samp> یا ایک <a href="http://www.w3.org/TR/CSS21/syndata.htm#value-def-color">CSS رنگ کا کی ورڈ</a> جیسا کہ <samp>fucshia</samp> یا <samp>InactiveBorder</samp>.',
	),

	'ACP_ICONS_EXPLAIN'	=> 'اس صفحے پر آپ وہ آئیکن جو صارف مراسلات میں استعمال کرتے ہیں شامل، ختم یا ترمیم کر سکتے ہیں. یہ آئیکن عام طور پر موضوع کے عنوان کے سامنے ظاہر ہوتے ہیں یا مراسلہ کے عنوان کے سامنے. آپ آئیکن کا نیا پیکج تیار اور انسٹال بھی کر سکتے ہیں.',
	'ACP_SMILIES_EXPLAIN'	=> 'مسکانیں چھوٹے اور کئی بار اینیمیٹ ہوئی تصاویر ہوتی ہیں.',
	'ADD_SMILIES'	=> 'ایک سے زیادہ مسکانیں شامل کریں',
	'ADD_SMILEY_CODE'	=> 'اضافی مسکان کا کوڈ لکھیں',
	'ADD_ICONS'	=> 'ایک سے زیادہ آئیکن شامل کریں',
	'AFTER_ICONS'	=> '%s کے بعد',
	'AFTER_SMILIES'	=> '%s کے بعد',
	'CODE'	=> 'کوڈ',
	'CURRENT_ICONS'	=> 'موجودہ آئیکن',
	'CURRENT_ICONS_EXPLAIN'	=> 'انتخاب کریں کہ موجودہ انسٹال ہوئے آئیکن کے ساتھ کیا کرنا ہے',
	'CURRENT_SMILIES'	=> 'موجودہ مسکانیں',
	'CURRENT_SMILIES_EXPLAIN'	=> 'انتخاب کریں کہ موجودہ انسٹال ہوئیں مسکانوں کے ساتھ کیا کرنا ہے',
	'DISPLAY_ON_POSTING'	=> 'پوسٹنگ کے صفحے پر ظاہر کریں',
	'DISPLAY_POSTING'	=> 'پوسٹنگ کے صفحے پر',
	'DISPLAY_POSTING_NO'	=> 'پوسٹنگ کے صفحے پر نہیں',
	'EDIT_ICONS'	=> 'آئیکن میں ترمیم کریں',
	'EDIT_SMILIES'	=> 'مسکانوں میں ترمیم کریں',
	'EMOTION'	=> 'جذبات',
	'EXPORT_ICONS'	=> 'icons.pak ایکسپورٹ اور ڈائون لوڈ کریں',
	'EXPORT_ICONS_EXPLAIN'	=> '%sاس لنک کو کلک کرنے پر، آپکے انسٹال ہوئے آئیکن کی ترتیب <samp>icons.pak</samp> میں رکھ دی جائے گی جو <samp>.zip</samp> یا <samp>.tgz</samp> بنانے کے کام آ سکتی ہے جس میں‌تمام آئیکن اور یہ <samp>icons.pak</samp> فائل ہوگی.%s',
	'EXPORT_SMILIES'	=> 'smilies.pak ایکسپورٹ اور ڈائون لوڈ کریں',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sاس لنک کو کلک کرنے پر، آپکے انسٹال ہوئے آئیکن کی ترتیب <samp>smilies.pak</samp> میں رکھ دی جائے گی جو <samp>.zip</samp> یا <samp>.tgz</samp> بنانے کے کام آ سکتی ہے جس میں‌تمام آئیکن اور یہ <samp>smilies.pak</samp> فائل ہوگی.%s',
	'FIRST'	=> 'پہلا',
	'ICONS_ADD'	=> 'نیا آئیکن شامل کریں',
	'ICONS_NONE_ADDED'	=> 'کوئی آئیکن شامل نہیں کیا گیا',
	'ICONS_ONE_ADDED'	=> 'یہ آئیکن کامیابی سے شامل کر دیا گیا ہے.',
	'ICONS_ADDED'	=> 'یہ آئیکن کامیابی سے شامل کر دیے گئے ہیں',
	'ICONS_CONFIG'	=> 'آئیکن کی ترتیب',
	'ICONS_DELETED'	=> 'ان آئیکن کو کامیابی سے ختم کر دیا گیا ہے',
	'ICONS_EDIT'	=> 'آئیکن میں‌ترمیم کریں',
	'ICONS_ONE_EDITED'	=> 'آئیکن کو کامیابی سے اپ ڈیٹ کر دیا گیا ہے',
	'ICONS_NONE_EDITED'	=> 'کوئی آئیکن اپ ڈیٹ نہیں کیے گئے',
	'ICONS_EDITED'	=> 'آئیکن کو کامیابی سے اپ ڈیٹ کر دیا گیا ہے',
	'ICONS_HEIGHT'	=> 'آئیکن اونچائی',
	'ICONS_IMAGE'	=> 'آئیکن تصویر',
	'ICONS_IMPORTED'	=> 'آئیکن پیک کو کامیابی سے انسٹال کر دیا گیا ہے',
	'ICONS_IMPORT_SUCCESS'	=> 'آئیکن پیک کو کامیابی سے امپورٹ کر لیا گیا ہے',
	'ICONS_LOCATION'	=> 'آئیکن کی جگہ',
	'ICONS_NOT_DISPLAYED'	=> 'درج ذیل آئیکن مراسلہ لکھنے والے صفحے پر ظاہر نہیں ہونگے',
	'ICONS_ORDER'	=> 'آئیکن کا حکم سمت',
	'ICONS_URL'	=> 'آئیکن تصویر کی فائل',
	'ICONS_WIDTH'	=> 'آئیکن کی چوڑائی',
	'IMPORT_ICONS'	=> 'آئیکن کا پیکج انسٹال کریں',
	'IMPORT_SMILIES'	=> 'مسکانوں کا پیکج انسٹال کریں',
	'KEEP_ALL'	=> 'تمام رکھیں',
	'MASS_ADD_SMILIES'	=> 'ایک سے زیادہ مسکانیں شامل کریں',
	'NO_ICONS_ADD'	=> 'شامل کرنے کے لیے کوئی آئیکن دستیاب نہیں ہیں',
	'NO_ICONS_EDIT'	=> 'ترمیم کرنے کے لیے کوئی آئیکن دستیاب نہیں ہیں',
	'NO_ICONS_EXPORT'	=> 'پیکج بنانے کے لیے کوئی آئیکن دستیاب نہیں‌ہیں',
	'NO_ICONS_PAK'	=> 'آئیکن کا کوئی پیکج نہیں ملا',
	'NO_SMILIES_ADD'	=> 'شامل کرنے کے لئے کوئیں‌مسکانیں‌نہیں‌ہیں',
	'NO_SMILIES_EDIT'	=> 'ترمیم کرنے کے لئے کوئیں‌مسکانیں‌نہیں‌ہیں',
	'NO_SMILIES_EXPORT'	=> 'پیک بنانے کے لیے آپکو پاس کوئیں‌مسکانیں نہیں‌ہیں',
	'NO_SMILIES_PAK'	=> 'مسکانوں‌کو کوئی پیک نہیں‌ملا',
	'PAK_FILE_NOT_READABLE'	=> '<samp>.pak</samp> فائل ٹھیک نہیں ہے',
	'REPLACE_MATCHES'	=> 'مرادفات کی جگہ بدلیں',
	'SELECT_PACKAGE'	=> 'پیک فائل منتخب کریں',
	'SMILIES_ADD'	=> 'نئی مسکان شامل کریں',
	'SMILIES_NONE_ADDED'	=> 'کوئیں‌مسکانیں‌شامل نہیں‌کی گئیں',
	'SMILIES_ONE_ADDED'	=> 'مسکان کامیابی سے شامل ہو گئی ہے',
	'SMILIES_ADDED'	=> 'مسکانیں کامیابی سے شامل ہو گئی ہیں',
	'SMILIES_CODE'	=> 'مسکان کا کوڈ',
	'SMILIES_CONFIG'	=> 'مسکان کی ترتیب',
	'SMILIES_DELETED'	=> 'مسکان کامیابی سے ہٹا دی گئی ہے',
	'SMILIES_EDIT'	=> 'مسکان ترمیم کریں',
	'SMILIE_NO_CODE'	=> 'مسکان "%s" کو کوڈ داخل نہ کرنے کی بنا پر نظر انداز کر دیا گیا ہے',
	'SMILIE_NO_EMOTION'	=> 'مسکان "%s" کو احساسی ظاہر داخل نہ کرنے کی بنا پر نظر انداز کر دیا گیا ہے',
	'SMILIES_NONE_EDITED'	=> 'کوئی مسکانیں‌اپ ڈیٹ‌نہیں کی گئیں',
	'SMILIES_ONE_EDITED'	=> 'مسکان کامیابی سے اپ ڈیٹ‌کر دی گئی ہے',
	'SMILIES_EDITED'	=> 'مسکانیں کامیابی سے اپ ڈیٹ‌کر دی گئی ہیں',
	'SMILIES_EMOTION'	=> 'جذبات',
	'SMILIES_HEIGHT'	=> 'مسکان اونچائی',
	'SMILIES_IMAGE'	=> 'مسکان تصویر',
	'SMILIES_IMPORTED'	=> 'مسکانوں‌کا پیک کامیابی سے انسٹال کیا جا چکا ہے',
	'SMILIES_IMPORT_SUCCESS'	=> 'مسکانوں‌کا پیک کامیابی سے امپورٹ کیا جا چکا ہے',
	'SMILIES_LOCATION'	=> 'مسکان کی مکانیت',
	'SMILIES_NOT_DISPLAYED'	=> 'درج ذیل مسکانیں‌مراسلہ کے صفحہ پر ظاہر نہیں‌ہونگی',
	'SMILIES_ORDER'	=> 'مسکانوں‌کا حکم ترتیب',
	'SMILIES_URL'	=> 'مسکان کی تصویر فائل',
	'SMILIES_WIDTH'	=> 'مسکان کی چوڑائی',
	'TOO_MANY_SMILIES'	=> '%d مسکانوں‌کی حد پہنچ چکی ہے',
	'WRONG_PAK_TYPE'	=> 'وضاحت کردہ پیکیج مناسب اعداد و شمار پر مشتمل نہیں ہے.',
	'ACP_WORDS_EXPLAIN'	=> 'یہاں‌آپ الفاظ‌شامل کر سکتےہیں',
	'ADD_WORD'	=> 'نیا لفظ‌شامل کریں',
	'EDIT_WORD'	=> 'لفظ سنسر ترمیم کریں',
	'ENTER_WORD'	=> 'آپکے لیے ایک لفظ‌اور اسکا متبادل لفظ‌ لکھنا ضروری ہے',
	'NO_WORD'	=> 'ترمیم کے لیے کوئی لفظ‌منتخب نہیں‌کیا گیا',
	'REPLACEMENT'	=> 'متبادل',
	'UPDATE_WORD'	=> 'لفظ سنسر اپ ڈیٹ‌کریں',
	'WORD'	=> 'لفظ',
	'WORD_ADDED'	=> 'لفظ سنسر کامیابی سے شامل کر دیا گیا ہے',
	'WORD_REMOVED'	=> 'منتخب لفظ سنسر کامیابی سے ختم کر دیا گیا ہے',
	'WORD_UPDATED'	=> 'منتخب لفظ سنسر کامیابی سے اپ-ڈیٹ کر دیا گیا ہے',
	'ACP_RANKS_EXPLAIN'	=> 'اس فارم سے آپ درجات شامل، حذف یا ترمیم کر سکتے ہیں. آپ مخصوص درجات بھی بنا سکتے ہیں.',
	'ADD_RANK'	=> 'نیا درجہ شامل کریں',
	'MUST_SELECT_RANK'	=> 'آپکے لیے ایک درجہ کا انتخاب لازمی ہے',
	'NO_ASSIGNED_RANK'	=> 'کوئی مخصوص درجہ مقرر نہیں ہے',
	'NO_RANK_TITLE'	=> 'آپ نے درجہ کے لیے عنوان منتخب نہیں کیا',
	'NO_UPDATE_RANKS'	=> 'درجہ کامیابی سے ختم کر دیا گیا. اس درجہ کو استعمال کرنے والے صارفین اپ ڈیٹ نہیں‌ہوئے. آپکے لیے انہیں خود اپ ڈیٹ ضروری ہے.',
	'RANK_ADDED'	=> 'درجہ کامیابی سے شامل کر دیا گیا.',
	'RANK_IMAGE'	=> 'درجہ تصویر',
	'RANK_IMAGE_EXPLAIN'	=> 'اسے درجہ کے ساتھ ایک چھوٹی سی تصویر لگانے کے لیے استعمال کریں. اسکا راستہ phpBB راستہ سے متعلقہ ہے.',
	'RANK_IMAGE_IN_USE'	=> '(زیر استعمال)',
	'RANK_MINIMUM'	=> 'کم سے کم مراسلات',
	'RANK_REMOVED'	=> 'درجہ کامیابی سے ختم کر دیا گی.',
	'RANK_SPECIAL'	=> 'مخصوص درجہ سیٹ کریں',
	'RANK_TITLE'	=> 'درجہ کا عنوان',
	'RANK_UPDATED'	=> 'درجہ کامیابی سے اپ ڈیٹ کر دیا گی.',
	'ACP_DISALLOW_EXPLAIN'	=> 'یہاں آپ وہ رکنیتی ناموں‌کا انتظام کر سکتے ہیں جنہیں استعمال کرنے کی اجازت نہیں ہوگی. غیر اجازت شدہ رکنیتی ناموں‌کو وائلڈ کارڈ * استعمال کرنے کی اجازت ہوگی. برائے مہربانی نوٹ‌فرمائیں‌کہ جو رکنیتی نام پہلے ہی رجسٹر ہو چکے ہیں انکا استعمال منع کرنے کے لیے آپکو پہلے انہیں حذف کرنا ہوگا.',
	'ADD_DISALLOW_EXPLAIN'	=> 'آپ ایک رکنیتی نام استعمال سے منع کرنے کے لیے وائلڈ کارڈ * استعمال کر سکتے ہیں.',
	'ADD_DISALLOW_TITLE'	=> 'غیر اجازت شدہ رکنیتی نام شامل کریں',
	'DELETE_DISALLOW_EXPLAIN'	=> 'آپ اس فہرست سے غیر اجازت شدہ رکنیتی نام خارج کر سکتے ہیں.',
	'DELETE_DISALLOW_TITLE'	=> 'غیر اجازت شدہ رکنیتی نام خارج کریں',
	'DISALLOWED_ALREADY'	=> 'آپ داخل کیے گئے رکنیتی نام کا استعمال منع نہیں‌کر سکتے. یہ نام یا تو پہلے سے رجسٹرڈ ہے، سنسر الفاظ میں شامل ہے یا فہرست میں پہلے سے شامل ہے.',
	'DISALLOWED_DELETED'	=> 'غیر اجازت شدہ رکنیتی نام کامیابی سے خارج کر دیا گیا ہے',
	'DISALLOW_SUCCESSFUL'	=> 'غیر اجازت شدہ رکنیتی نام کامیابی سے شامل کر دیا گیا ہے',
	'NO_DISALLOWED'	=> 'کوئی غیر اجازت شدہ رکنیتی نام نہیں',
	'NO_USERNAME_SPECIFIED'	=> 'آپ نے عمل میں لانے کے لیے کوئی رکنیتی نام منتخب یا داخل نہیں کیا',
	'ACP_REASONS_EXPLAIN'	=> 'یہاں آپ مراسلات نامنظور کرنے کی وجوہات جو ای-میل کی جائیں گی، کنٹرول کر سکتے ہیں. ایک وجہ طے شدہ ہے جو * سے ظاہر ہے اور اسے آپ ختم نہیں کر سکتے. یہ اسوقت استعمال ہوتی ہے اگر کوئی معقول وجہ نہ ہو',
	'ADD_NEW_REASON'	=> 'نئی وجہ شامل کریں',
	'AVAILABLE_TITLES'	=> 'دستیاب مقامی وجہ عنوان',
	'IS_NOT_TRANSLATED'	=> 'وجہ مقامی <strong>نہیں</strong> کی گئی',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'وجہ مقامی <strong>نہیں</strong> کی گئی. اگر آپ مقامی وجہ کی شکل دینا چاہتے ہیں‌ رپورٹ/ وجہ سیکشن سے صحیح چابی استعمال کریں',
	'IS_TRANSLATED'	=> 'وجہ مقامی کر دی گئی ہے',
	'IS_TRANSLATED_EXPLAIN'	=> 'وجہ مقامی کر دی گئی ہے. اگر یہاں‌درج کیا گیا عنوان زبان فائل رپورٹ/ وجوہات سیکشن میں واضح کیا گیا ہے تو اسے استعمال کیا جائے گا.',
	'NO_REASON'	=> 'وجہ معلوم نہیں ہو سکی',
	'NO_REASON_INFO'	=> 'اس وجہ کے لیے عنوان اور اسکے بیان کی ضرورت ہے',
	'NO_REMOVE_DEFAULT_REASON'	=> 'آپ طے شدہ وجہ "دوسری" کو ختم نہیں کر سکتے',
	'REASON_ADD'	=> 'رپورٹ/ نامنظوری وجہ شامل کریں',
	'REASON_ADDED'	=> 'رپورٹ/ نامنظوری وجہ کامیابی سے شامل کردی گئی',
	'REASON_ALREADY_EXIST'	=> 'اس عنوان سے ایک وجہ پہلے سے موجود ہے، برائے مہربانی وجہ کے لیے کوئی اور عنوان لکھیں',
	'REASON_DESCRIPTION'	=> 'وجہ تفصیل',
	'REASON_DESC_TRANSLATED'	=> 'ظاہر کردہ وجہ تفصیل',
	'REASON_EDIT'	=> 'رپورٹ/ نامنظوری وجہ ترمیم کریں',
	'REASON_EDIT_EXPLAIN'	=> 'یہاں‌آپ ایک وجہ کو شامل یا ترمیم کر سکتے ہیں. اگر وجہ کا ترجمہ کیا گیا ہے تو مقامی تفصیلات استعمال ہونگی ',
	'REASON_REMOVED'	=> 'رپورٹ/ نامنظوری وجہ کامیابی سے ختم کر دی گئی',
	'REASON_TITLE'	=> 'وجہ کا عنوان',
	'REASON_TITLE_TRANSLATED'	=> 'ظاہر کردہ وجہ کا عنوان',
	'REASON_UPDATED'	=> 'ظاہر کردہ وجہ کامیابی سے اپ ڈیٹ کر دی گئی',
	'USED_IN_REPORTS'	=> 'رپورٹس میں استعمال کیا گیا',
));

?>