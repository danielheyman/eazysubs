<?php
/**
*
* help_bbcode.php [Urdu]
*
* @package language
* @version $Id: $
* @copyright (c) 2010 phpBB Group
* @author 2010-11-16 - phpBB Group
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
$help = array(
	array(
		0	=> '--',
		1	=> 'تعارف',
	),
	array(
		0	=> 'BBCode کیا ہے؟',
		1	=> 'BBCode زبان HTML کا ایک خاص عمل ہے. آپ اپنے مراسلات میں BBCodes استعمال کر سکتے ہیں یا نہیں، اسکا فیصلہ منتظم کرتے ہیں. اسکے علاوہ آپ فی مراسلہ BBCode کو غیر فعال بھی کر سکتے ہیں. BBCode بخود HTML کے مترادف ہے، ٹیگ کو ہم [ ] بریکٹس میں لکھتے ہیں.',
	),
	array(
		0	=> '--',
		1	=> 'ٹیکسٹ کا فارمیٹ',
	),
	array(
		0	=> 'بوکڈ، اٹالک اور انڈر لائن ٹیکسٹ کیسے لکھیں.',
		1	=> 'BBCode میں شامل ٹیگ آپ کو فوری طور پر اپنے متن کے بنیادی سٹائل تبدیل کرنے کی اجازت دیتے ہیں. <ul><li>بولڈ کرنے کے لیےٹیکسٹ کو <strong></strong> میں لکھیں. جیسا کہ <br /> <br /> <strong>[b]</strong> اسلام علیکم <strong>[/b]</strong> بن جائے گا <br /><br /><strong>اسلام علیکم</strong></li>

<li> انڈرلائن کے لیے <strong>[u][/u]</strong> لکھیں. جیسا کہ <strong>[u]</strong>اسلام علیکم<strong>[/u]</strong> بن جائے گا <span style="text-decoration: underline"> اسلام علیکم</span></li>

<li>اٹالک ٹیکسٹ کے لیے <strong>[i][/i]</strong> لکھیں. جیسا کہ <strong>[i]</strong>اسلام علیکم<strong>[/i]</strong> بن جائے گا <i>اسلام علیکم</i></li></ul>',
	),
	array(
		0	=> 'ٹیسکٹ کا رنگ یا سائز کیسے تبدیل کرتے ہیں',
		1	=> 'ٹیکسٹ کے رنگ یا سائز کو تبدیل کرنے کے لیے مندرجہ ذیل ٹیگ استعمال ہوتے ہیں. براہ مہربانی یاد رکھیں کہ ہی رنگ اور سائز کیسے ظاہر ہونگے، یہ صارف کے برائوزر پر منحصر ہے.

<br />

<ul><li>رنگ تبدیل کرنے کے لیے ٹیکسٹ‌کو <strong>[color=][/color]</strong> میں‌لکھتے ہیں.آپ ایک رنگ کا عام نام بھی استعال کر سکتے ہیں جیسا کہ red, green یا اسکی 6 اعشاری قیمت استعمال کر سکتے ہیں جیسا کہ #00ffff یا #c0c0c0. مثال کے طور پر ٹیکسٹ‌کو سرخ رنگ دینے کے لیے 

<br /><br/><strong>[color=red]اسلام علیکم[/color]</strong>

<br /><br /> یا

<br /><br /><strong>[color=#FF0000]اسلام علیکم[/color]</strong>

<br /><br />دونوں‌کوڈ اسے ایسے ظاہر کریں‌گے.

<br /><br /><span style="color:red">اسلام علیکم</span></li>


<br />
<li>ٹیسکٹ‌کا سائز بھی تقریبا ایسے ہی تبدیل کیا جاتا ہے. <strong>[size=][/size]</strong>. یہ ٹیگ صارف کی طرف استعمال ہو رہے ٹیمپلیٹ پر منحصر ہے لیکن تلقین شدہ ہے کہ نمبروں کو فیصد میں لکھا جائے. جو 20 (بہت چھوٹا) سے لے کر 200 (بہت بڑا) تک جاتے ہیں. جیسا کہ

<br /><br />

<strong>[size=30]اسلام علیکم[/size]</strong> ایسے ظاہر ہوگا. <span style="font-size:30%;">اسلام علیکم</span>

<br /><br />

جبکہ

<br /><br />

<strong>[size=200]اسلام علیکم[/size]</strong> ایسے ظاہر ہوگا. <span style="font-size:200%;">اسلام علیکم</span></li></ul>',
	),
	array(
		0	=> 'کیا میں ٹیگ فارمیٹنگ کو اکھٹا کر سکتا ہوں؟',
		1	=> 'جی ہاں، بالکل. مثال کے طور پر کسی کی توجہ حاصل کرنے کے لیے آپ ایسے لکھ سکتے ہیں. 

<br /><br />
<strong>[size=200][color=red][b]</strong>میری طرف دیکھو<strong>[/b][/color][/size]</strong>

<br /><br />

ایسے ظاہر ہوگا <span style="color:red;font-size:200%;"><strong>میری طرف دیکھو</strong></span>

<br /><br />',
	),
	array(
		0	=> '--',
		1	=> 'اقتباس اور مخصوص چوڑائی کی عبارت لکھنا',
	),
	array(
		0	=> 'جوابات میں‌ اقتباس لکھنا',
		1	=> 'اقتباس لکھنے کے دو طریقے ہیں، حوالہ سے یا بغیر حوالہ کے. <br />
<ul><li>اگر آپ موضوع میں‌ موجود کسی مراسلہ میں‌ اقتباس کریں کا بٹن دبائیں‌تو آپ دیکھیں‌گے کہ مراسلے کے الفاظ‌بھی پیغام بھیجنے والی ونڈو میں‌موجود ہیں. یہ اقتباس حوالہ کے ساتھ ہوتا ہے. </li>
<li>حوالہ کے بغیر اقتباس کرنے کے لیے <strong>[quote][/quote]</strong> ٹیگ استعمال کریں. </li></ul>',
	),
	array(
		0	=> 'کوڈ یا مخصوص ناپ کی عبارت لکھنا',
		1	=> 'اگر آپ ایسا کچھ لکھنا چاہتے ہیں‌تو <strong>[code][/code]</strong> میں لکھیں. جیسا کہ <strong>[code]</strong>یہ کوڈ‌ اور & عبارت ہے <strong>[/code]</strong>. <br /><br />  ان ٹیگ میں‌لکھا گیا کوڈ‌فارمیٹ‌نہیں‌ہوگا اور بالکل سادہ ظاہر ہوگا.',
	),
	array(
		0	=> '--',
		1	=> 'فہرست بنانا',
	),
	array(
		0	=> 'غیر حکمی فہرست بنانا',
		1	=> 'غیر حکمی فہرست ایسی فہرست ہوتی ہے جس میں‌ہر سطر ایک نقطہ سے شروع ہوتی ہے.یہ فہرست بنانے کے لیے <strong>[list][/list]</strong> میں‌ٹیکسٹ‌لکھیں اور ہر شے کو <strong>[*]</strong> سے واضح‌ کریں. جیسا کہ <br /><br />

<strong>[list]</strong><br />
<strong>[*]</strong> سطر ایک<br/>
<strong>[*]</strong> سطر دو <br />
<strong>[/list]</strong><br />

یہ ایسی فہرست بنائے گا.
<ul>
<li>سطر ایک</li>
<li>سطر دو</li>
</ul>',
	),
	array(
		0	=> 'حکمی فہرست بنانا',
		1	=> 'حکمی فہرست میں آپ نمبر یا حروف استعمال کر سکتے ہیں. یہ فہرست بنانے کے لیے <strong>[list=][/list]</strong> میں‌ٹیکسٹ‌لکھیں اور ہر شے کو <strong>[*]</strong> سے واضح‌ کریں. جیسا کہ <br /><br />

<strong>[list=1]</strong><br />
<strong>[*]</strong> سطر ایک<br/>
<strong>[*]</strong> سطر دو <br />
<strong>[/list]</strong><br />

یہ ایسی فہرست بنائے گا.
<ol style="list-style-type:decimal;">
<li>سطر ایک</li>
<li>سطر دو</li>
</ol>

اسی طرح‌حروف والی فہرست بنانے کے لیے ایسے لکھیں.<br /><br />

<strong>[list=a]</strong><br />
<strong>[*]</strong> سطر ایک<br/>
<strong>[*]</strong> سطر دو <br />
<strong>[/list]</strong><br />

یہ ایسی فہرست بنائے گا.
<ol style="list-style-type:lower-alpha;">
<li>سطر ایک</li>
<li>سطر دو</li>
</ol>',
	),
	array(
		0	=> '--',
		1	=> '--',
	),
	array(
		0	=> '--',
		1	=> 'روابط بنانا',
	),
	array(
		0	=> 'دوسری سائٹ کا ربط یا لنک (link) بنانا',
		1	=> 'دوسری سائٹ‌کا ربط یا لنک بنانے کے لیے ہم <strong>[url][/url]</strong> میں‌ٹیکسٹ‌لکھتے ہیں. اگر ہم اس ٹیگ میں‌ URL لکھیں‌گے تو وہ ویسا ہی ظاہر ہوگا جیسا لکھا گیا ہے. اگر ہم چاہتے ہیں‌کہ URL کسی دوسرے نام سے ظاہر ہو تو ہم <strong>[url=][/ur]</strong> میں‌ = کے آگے URL لکھتے ہیں‌اور دونوں‌ٹیگ کے بیچ عنوان لکھتے ہیں. جیسا کہ <br /><br />

<strong>[url]www.phpbb.com[/url]</strong> ایسے ظاہر ہوگا.<br />
<a href="http://www.phpbb.com">www.phpbb.com</a>
<br />
جبکہ<br />
<strong>[url=http://www.phpbb.com]phpBB[/url]</strong> ایسے ظاہر ہوگا.<br />
<a href="http://www.phpbb.com">phpBB</a><br /><br />

اسی طرح‌آپ ای-میل کا ربط بھی بنا سکتے ہیں. اسکے لیے <strong>[email][/email]</strong> کا ٹیگ استعمال ہوتا ہے. جیسا کہ <br />

<strong>[email]no.one@no-domain.com[/email]</strong> ایسے ظاہر ہوگا.<br />

<a href="mailto:no.one@no-domain.com">no.one@no-domain.com</a> <br/>

اسی طرح‌آپ ای-میل لنک کا عنوان بھی لکھ سکتے ہیں، جیسا کہ <br />

<strong>[email=no.one@no-domain.com]Email No One[/email]</strong> ایسے ظاہر ہوگا.<br />

<a href="mailto:no.one@no-domain.com">Email No One</a> <br/>',
	),
	array(
		0	=> '--',
		1	=> 'مراسلات میں‌تصاویر دکھانا',
	),
	array(
		0	=> 'مراسلہ میں‌تصویر شامل کرنا',
		1	=> 'ایسا کرنے کے لیے ہم <strong>[img][/img]</strong> کا ٹیگ استعمال کرتے ہیں. یاد رکھیں کہ کئی صارفین مراسلات میں‌بہت زیادہ تصاویر پسند نہیں کرتے اور تصویر مراسلہ میں‌شامل کرنے کے لیے اسکا انٹرنیٹ‌پر کہیں‌ ہونا ضروری ہے. مثال دیکھیں.
<br />
<strong>[img]http://www.google.com/intl/en_ALL/images/logo.gif[/img]</strong> یہ تصویر ظاہر کرے گا. <br />
<img src="http://www.google.com/intl/en_ALL/images/logo.gif"></img>
<br />
اسی طرح‌آپ اس تصویر کا ربط بھی بنا سکتے ہیں. اسے ٹیگ <strong>[url][/url]</strong> میں لکھ دیں. جیسا کہ
<br />
<strong>[url][img]http://www.google.com/intl/en_ALL/images/logo.gif[/img][/url]</strong> یہ تصویر ظاہر کرے گا. <br />
<a href="http://www.google.com"><img src="http://www.google.com/intl/en_ALL/images/logo.gif"></img></a>',
	),
	array(
		0	=> 'مراسلت میں‌منسلکات شامل کرنا',
		1	=> 'منسلکات کو آپ ٹیگ <strong>[attachment=][/attachment]</strong> استعمال کر کے مراسلہ میں‌کہیں بھی شامل کر سکتے ہیں. ',
	),
	array(
		0	=> '--',
		1	=> 'دوسرے معاملات',
	),
	array(
		0	=> 'کیا میں‌اپنے ٹیگ استعمال کر سکتا ہوں؟',
		1	=> 'اگر آپ اس بورڈ‌پر منتظم ہیں اور آپکو پاس مخصوص‌اجازات ہیں‌تو آپ BBCode کے صفحے پر اپنے ٹیگ بنا سکتے ہیں.',
	),
);

?>