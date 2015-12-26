<?php
/**
*
* acp_search.php [Urdu]
*
* @package language
* @version $Id: $
* @copyright (c) 2010 phpBB Group
* @author 2010-11-23 - phpBB Group
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
	'ACP_SEARCH_INDEX_EXPLAIN'	=> 'یہاں‌آپ تلاش کے پس منظر اشاریہ کا انتظام کر سکتے ہیں. چونکہ آپ عام طور پر صرف ایک پس منظر استعمال کرتے ہیں تو آپکو دوسے تمام اشاریہ جات جو آپ استعمال نہیں‌کرتے، ختم کر دینے چاہیں. تلاش کی کچھ ترتیبات تبدیل کرنے کے بعد، جیسا کہ زیادہ سے زیادہ یا کم سے کم حروف کی تعداد، آپ اشاریہ جات دوبارہ بنا سکتے ہیں تاکہ یہ ان دی گئیں‌ترتیبات کی عکاسی کریں. ',
	'ACP_SEARCH_SETTINGS_EXPLAIN'	=> 'یہاں آپ مراسلات اور تلاش کی کارکردگی کے لیے پس منظر تیار کر سکتے ہیں. ان میں سے کچھ ترتیبات تمام تلاشی انجن کے لیے ایک جیسی ہیں',
	'COMMON_WORD_THRESHOLD'	=> 'عام الفاظ کی حد',
	'COMMON_WORD_THRESHOLD_EXPLAIN'	=> 'جو الفاظ مراسلات میں بہت زیادہ استعمال ہوتے ہیں، انہیں‌عام الفاظ کے طور پر لیا جائے گا. عام الفاظ تلاش کے دوران نظر انداز کر دیے جاتے ہیں. 0 سے غیر فعال کریں. یہ صرف اس وقت کام کرتا ہے جب مراسلات کی تعداد 100 سے زیادہ ہو. اگر آپ موجودہ عام الفاظ کو بھی تلاش میں استعمال کرنا چاہتے ہیں تو آپکو اشاریہ جات دوبارہ بنانے ہونگے',
	'CONFIRM_SEARCH_BACKEND'	=> 'کیا آپ واقعی مختلف تلاش پس منظر تبدیل کرنا چاہتے ہیں؟ ایسا کرنے کے بعد آپکو تلاشی اشاریہ جات دوبارہ بنانے ہونگے. اگر آپ پرانے پش منظر استعمال نہیں کرنا چاہتے تو آپ انکے اشاریہ جات حذف کر سکتے ہیں.',
	'CONTINUE_DELETING_INDEX'	=> 'گزشتہ اشاریہ ہٹانے کے عمل کو جاری رکھیں',
	'CONTINUE_DELETING_INDEX_EXPLAIN'	=> 'ایک اشاریہ کو ہٹانے کا عمل شروع کر دیا گیا ہے، تلاش کے صفح پر رسائی حاصل کرنے کے لیے آپکے لیے اسے مکمل یا منسوخ کرنا ضروری ہے.',
	'CONTINUE_INDEXING'	=> 'گزشتہ اشاریہ بنانے کے عمل کو جاری رکھیں',
	'CONTINUE_INDEXING_EXPLAIN'	=> 'ایک اشاریہ بنانے کا عمل شروع کر دیا گیا ہے، تلاش کے صفح پر رسائی حاصل کرنے کے لیے آپکے لیے اسے مکمل یا منسوخ کرنا ضروری ہے.',
	'CREATE_INDEX'	=> 'اشاریہ بنائیں',
	'DELETE_INDEX'	=> 'اشاریہ حذف کریں',
	'DELETING_INDEX_IN_PROGRESS'	=> 'اشاریہ حذف کرنے کا عمل جاری ہے',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'تلاش پس منظر اپنا اشاریہ صاف کر رہا ہے. اس میں کچھ دیر متوقع ہے',
	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'MySQLfulltext پس منظر صرف MySQL4 یا اوپر کے ساتھ استعمال ہو سکتا ہے',
	'FULLTEXT_MYSQL_NOT_MYISAM'	=> 'MySQL fulltext اشاریات صرف MyISAM کے ساتھ استعمال ہو سکتے ہیں',
	'FULLTEXT_MYSQL_TOTAL_POSTS'	=> 'ترتیب کیے گئے مراسلات کی کل تعداد',
	'FULLTEXT_MYSQL_MBSTRING'	=> 'غیر لاطینی UTF-8 حروف کی mbstring سے حمائیت:',
	'FULLTEXT_MYSQL_PCRE'	=> 'غیر لاطینی UTF-8 حروف کی PCRE سے حمائیت:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'	=> 'اگر PCRE کے پاس یونی کوڈ حروف کی خصوصیات نہیں ہیں تو تلاش پس منظر mbstring ریگولر سٹرنگ کے زریعے ہوگی',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'	=> 'اس تلاش کو PCRE یونی کوڈ حروف کی خصوصیات کی ضرورت ہے، صرف PHP4.4 یا اس سے اگلے ورژن میں‌دستیاب ہے، اگر آپ غیر لاطینی حروف کی تلاش کرنا چاہتے ہیں',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'کم سے کم اس تعداد والے الفاظ تلاش کے لیے ترتیب دیے جائیں گے. آپ یا آپکے میزبان صرف mysql ترتیب کی زریعے اسے تبدیل کر سکتے ہیں',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'اس تعداد سے زیادہ الفاظ‌تلاش کے لیے ترتیب نہیں دیے جائیں گے.  آپ یا آپکے میزبان صرف mysql ترتیب کی زریعے اسے تبدیل کر سکتے ہیں',
	'GENERAL_SEARCH_SETTINGS'	=> 'تلاش کی عام ترتیبات',
	'GO_TO_SEARCH_INDEX'	=> 'تلاش کے اشاریہ پر جائیں',
	'INDEX_STATS'	=> 'اشاریہ کے اعداد و شمار',
	'INDEXING_IN_PROGRESS'	=> 'ترتیب کا عمل جاری ہے',
	'INDEXING_IN_PROGRESS_EXPLAIN'	=> 'تلاش پس منظر اسوقت بورڈ پر تمام مراسلات کو ترتیب دے رہا ہے. آپکو بورڈ کے حجم کے مطابق،یہ عمل کچھ منٹ‌ سے کچھ گھنٹوں‌ پر مشتمل ہو سکتا ہے.',
	'LIMIT_SEARCH_LOAD'	=> 'تلاش صفحہ کی سسٹم لوڈ کی حد',
	'LIMIT_SEARCH_LOAD_EXPLAIN'	=> 'اگر 1 منٹ کے دوران سسٹم لوڈ اس سے زیادہ ہوا تو بورڈ خود بہ خود آف لائن ہو جائے گا. 1.0 قیمت پروسیسر کا 100% استعمال ہے',
	'MAX_SEARCH_CHARS'	=> 'تلاش کی طرف سے ترتیب دیے گئے زیادہ سے زیادہ الفاظ',
	'MAX_SEARCH_CHARS_EXPLAIN'	=> 'اس تعداد سے زیادہ الفاظ‌تلاش کے لیے ترتیب نہیں دیے جائیں گے.',
	'MAX_NUM_SEARCH_KEYWORDS'	=> 'مطلوبہ الفاظ کی زیادہ سے زیادہ تعداد کی اجازت',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'	=> 'مطلوبہ الفاظ کی زیادہ سے زیادہ تعداد جو ایک صارف تلاش کر سکتا ہے. لامحدود کے لیے 0 لکھیں',
	'MIN_SEARCH_CHARS'	=> 'تلاش کی طرف سے ترتیب دیے گئے کم سے کم الفاظ',
	'MIN_SEARCH_CHARS_EXPLAIN'	=> 'اس تعداد سے کم الفاظ‌تلاش کے لیے ترتیب نہیں دیے جائیں گے.',
	'MIN_SEARCH_AUTHOR_CHARS'	=> 'مصنف نام کے کم سے کم حروف',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'	=> 'صارفین کو مصنف کا نام تلاش کرتے ہوئے کم سے کم اتنے حروف لکھنے ہونگے. اگر مصنف کے نام کے حروف سے کم ہیں‌تو آپ مصنف کا نام استعمال کر کے اسکے مراسلات تلاش کر سکتے ہیں.',
	'PROGRESS_BAR'	=> 'پراگریس کی بار',
	'SEARCH_GUEST_INTERVAL'	=> 'مہمان کے لیے تلاش کرنے کے فلڈ کا دورانیہ',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'	=> 'مہمان صارفین کو ہر تلاش کے دوران اتنے سیکنڈ انتظار کرنا ہوگا. اگر ایک مہمان تلاش کر رہا ہے تو دوسرے مہمان صارفین کو دورانیہ ختم ہونے کا انتظار کرنا ہوگا',
	'SEARCH_INDEX_CREATE_REDIRECT'	=> 'مراسلہ شناخت "%1$d" تک مراسلات ترتیب دیے جا چکے ہیں. ترتیب دینے کی موجودہ شرح تقریبا %3$ ہے. اگر مراسلہ فی سیکنڈ ہے، <br /> ترتیب کا عمل جاری ہے...',
	'SEARCH_INDEX_DELETE_REDIRECT'	=> 'مراسلہ شناخت "%1$d" تک تمام مراسلات اشاریہ سے حذف کر دیے گئے ہیں. <br /> حذف کرنے کا عمل جاری ہے....',
	'SEARCH_INDEX_CREATED'	=> 'بورڈ ڈیٹا بیس میں کامیابی سے تمام مراسلات ترتیب کر دیے گئے ہیں',
	'SEARCH_INDEX_REMOVED'	=> 'اس پس منظر کی تلاش کا اشاریہ کامیابی سے ختم کر دیا گیا ہے',
	'SEARCH_INTERVAL'	=> 'تلاش فلڈ کا دورانیہ استعمال کریں',
	'SEARCH_INTERVAL_EXPLAIN'	=> 'سیکنڈ کی تعداد، جس  کے دوران صارفین کو تلاش کے لیے انتظار کرنا ہوگا. یہ دورانیہ ہر صارف کے لیے انفرادی طور پر چیک کیا جاتا ہے',
	'SEARCH_STORE_RESULTS'	=> 'تلاش نتائج کی کیشے کا دورانیہ',
	'SEARCH_STORE_RESULTS_EXPLAIN'	=> 'محفوظ کی گئیں تلاشیں اس دورانیہ کے بعد حذف کر دی جائیں گی. 0 سے کیشے غیر فعال کریں. ',
	'SEARCH_TYPE'	=> 'پس منظر تلاش',
	'SEARCH_TYPE_EXPLAIN'	=> 'phpBB آپکو مراسلات میں پس منظر کے زریعے متن کی تلاش کرنے کی اجازت دیتا ہے. طے شدہ طور پر تلاش phpBB کی اپنی fulltext سے ہوتی ہے.',
	'SWITCHED_SEARCH_BACKEND'	=> 'آپ نے تلاش پس منظر تبدیل کیا ہے. نیا تلاش پس منظر استعمال کرنے کے لیے یقین کر لیں کہ ایک تلاش کا اشاریہ موجود ہے.',
	'TOTAL_WORDS'	=> 'ترتیب دیے گئے الفاظ کی کل تعداد',
	'TOTAL_MATCHES'	=> 'ترتیب دیے گئے الفاظ میں میل کھائے ہوئے الفاظ کی کل تعداد',
	'YES_SEARCH'	=> 'تلاش کی سہولت فعال کریں',
	'YES_SEARCH_EXPLAIN'	=> 'صارف کے لیے تلاش بشمول ارکان کی تلاش، فعال کرتا ہے',
	'YES_SEARCH_UPDATE'	=> 'fulltext اپ ڈیٹ کرنا فعال کریں',
	'YES_SEARCH_UPDATE_EXPLAIN'	=> 'ارسال کرتے ہوئے fulltext کی اپ ڈیٹنگ، اگر تلاش غیرفعال ہو تو کام نہیں کرتا.',
));

?>