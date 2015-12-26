<?php
/**
*
* search.php [Urdu]
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
	'ALL_AVAILABLE'	=> 'تمام دستیاب',
	'ALL_RESULTS'	=> 'تمام نتائج',
	'DISPLAY_RESULTS'	=> 'نتائج کو ایسے ظاہر کریں',
	'FOUND_SEARCH_MATCH'	=> '%d میل ملا ہے',
	'FOUND_SEARCH_MATCHES'	=> '%d میل ملے ہیں',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'تلاش میں %d سے زیادہ میل ملے ہیں',
	'GLOBAL'	=> 'عالمی اعلانات',
	'IGNORED_TERMS'	=> 'نظر انداز',
	'IGNORED_TERMS_EXPLAIN'	=> 'آپکی تلاش میں‌مندرجہ زیل الفاظ کو نظر انداز کر دیا گیا ہے کیونکہ یہ الفاظ بہت عام ہیں. <br /><br /> <strong>%s</strong><br /><br />',
	'JUMP_TO_POST'	=> 'مراسلہ پر جائیں',
	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'اس بورڈ پر اپنے مراسلات دیکھنے کے لیے آپکو رجسٹرڈ اور لاگ ان ہونا پڑے گا',
	'LOGIN_EXPLAIN_UNREADSEARCH'	=> 'اس بورڈ پر اپنے ان پڑھے مراسلات دیکھنے کے لیے آپکو رجسٹرڈ اور لاگ ان ہونا پڑے گا',
	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> 'آپ نے اپنی تلاش کے لیے بہت زیادہ الفاظ استعمال کیے ہیں. %1$d سے زیادہ الفاظ‌استعمال نہ کریں.',
	'NO_KEYWORDS'	=> 'تلاش کے لیے کم از کم ایک لفظ کا ہونا ضروری ہے. ہر لفظ %d الفاظ‌سے کم اور %d الفاظ سے زیادہ نہیں‌ہونا چاہیے.',
	'NO_RECENT_SEARCHES'	=> 'حال ہی میں‌کوئی تلاش نہیں کی گئی',
	'NO_SEARCH'	=> 'معاف کیجیے گا مگر آپکو تلاش کرنے کی اجازت نہیں ہے',
	'NO_SEARCH_RESULTS'	=> 'کوئی مناسب میل نہیں ملا',
	'NO_SEARCH_TIME'	=> 'معاف کیجے گا مگر ابھی آپ تلاش کرنے سے قاصر ہیں. کچھ دیر بعد کوشش کریں.',
	'NO_SEARCH_UNREADS'	=> 'معاف کیجیے گا لیکن اس بورڈ پر ان پڑھے پیغامات میں‌تلاش ممکن نہیں‌ہے',
	'WORD_IN_NO_POST'	=> 'کوئی مراسلہ نہیں ملا کیونکہ لفظ <strong>%s</strong> کسی مراسلہ میں نہیں ہے.',
	'WORDS_IN_NO_POST'	=> 'کوئی مراسلات نہیں ملے کیونکہ الفاظ <strong>%s</strong> کسی مراسلات میں نہیں ہے.',
	'POST_CHARACTERS'	=> 'مراسلات کے الفاظ',
	'RECENT_SEARCHES'	=> 'حالیہ تلاش',
	'RESULT_DAYS'	=> 'گزشتہ ان اوقات میں سے نتائج ظاہر کریں',
	'RESULT_SORT'	=> 'نتائج کی ترتیب ایسے کریں',
	'RETURN_FIRST'	=> 'دکھائیں پہلے',
	'RETURN_TO_SEARCH_ADV'	=> 'اعلیٰ درجے کی تلاش پر واپس جائیں',
	'SEARCHED_FOR'	=> 'تلاش کی جانی والی اصطلاح',
	'SEARCHED_TOPIC'	=> 'تلاش کیا گیا موضوع',
	'SEARCH_ALL_TERMS'	=> 'تمام اصطلاحات کو تلاش کریں',
	'SEARCH_ANY_TERMS'	=> 'کسی بھی اصطلاح کو تلاش کریں',
	'SEARCH_AUTHOR'	=> 'مصنف کو تلاش کریں',
	'SEARCH_AUTHOR_EXPLAIN'	=> 'جزوی مطابقت کے لیے * کو بطور وائلڈ کارڈ استعمال کریں',
	'SEARCH_FIRST_POST'	=> 'موضوعات کا صرف پہلا مراسلہ',
	'SEARCH_FORUMS'	=> 'فورم میں‌تلاش کریں',
	'SEARCH_FORUMS_EXPLAIN'	=> 'جن فورمز اور چھوٹے فورمز میں‌تلاش کرنا چاہتے ہیں، منتخب کریں. اگر "چھوٹے فورمز میں تلاش کریں" غیر فعال نہیں ہے تو ان میں خود کار طور پر تلاش کیا جائے گا.',
	'SEARCH_IN_RESULTS'	=> 'ان نتائج میں تلاش کریں',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'جو لفظ‌ تلاش لازمی تلاش کرنا چاہتے ہیں، اسکے آگے<strong> + </strong> لکھیں. جو لفظ لازمی تلاش نہیں کرنا چاہتے، اسکے آگے <strong>-</strong> لکھیں، لفظوں کی فہرست میں‌اگر کسی ایک لفظ کو تلاش کرنا چاہتے ہیں تو بریکٹوں <strong>|</strong> لکھ کر علیحدہ کریں. جزوی میل کے لیے * وائلڈ کارڈ استعمال کریں ',
	'SEARCH_MSG_ONLY'	=> 'صرف پیغام کا متن. <code>text</code>',
	'SEARCH_OPTIONS'	=> 'تلاش کے اختیارات',
	'SEARCH_QUERY'	=> 'تلاش کی لائن',
	'SEARCH_SUBFORUMS'	=> 'چھوٹے فورمز میں تلاش کریں',
	'SEARCH_TITLE_MSG'	=> 'موضوعات کے عنوان اوت پیغام کا متن',
	'SEARCH_TITLE_ONLY'	=> 'صرف موضوعات کے عنوان',
	'SEARCH_WITHIN'	=> 'کے اند تلاش کریں',
	'SORT_ASCENDING'	=> 'صعودی',
	'SORT_AUTHOR'	=> 'مصنف',
	'SORT_DESCENDING'	=> 'نزولی',
	'SORT_FORUM'	=> 'فورم',
	'SORT_POST_SUBJECT'	=> 'مراسلہ کا عنوان',
	'SORT_TIME'	=> 'مراسلہ کا وقت',
	'TOO_FEW_AUTHOR_CHARS'	=> 'مصنف کے نام کو تلاش کرنے کے لیے %d الفاظ کا ہونا ضروری ہے',
));

?>