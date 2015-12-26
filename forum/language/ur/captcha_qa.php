<?php
/**
*
* captcha_qa [English]
*
* @package language
* @version $Id$
* @copyright (c) 2009 phpBB Group
* @translator 2010-11-19 - Muneeb http://www.urdudreams.com/forum
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
	'CAPTCHA_QA'				=> 'Q&amp;A CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'یہ سوال خود کار رجسٹریشن کو روکنے کا ایک طریقہ ہے.',
	'CONFIRM_QUESTION_WRONG'	=> 'آپ نے توثیقی سوال کا جواب درست نہیں‌دیا.',

	'QUESTION_ANSWERS'			=> 'جوابات',
	'ANSWERS_EXPLAIN'			=> 'سوال کے درست جوابات دیں. ہر سطر پر ایک',
	'CONFIRM_QUESTION'			=> 'سوال',

	'ANSWER'					=> 'جواب',
	'EDIT_QUESTION'				=> 'سوال میں‌ترمیم کریں',
	'QUESTIONS'					=> 'سوالات',
	'QUESTIONS_EXPLAIN'			=> 'رجسٹریشن کے دوران صارفین کو یہاں سے مخصوص سوالات میں سے ایک کہا جائے گا. کا استعمال کرنے کے اس پلگ ان ، کم از کم ایک سوال کے پہلے سے طے شدہ زبان میں مقرر ہونا چاہیئے. ان سوالات کے لئے اپنے ہدف شائقین کا جواب دینا آسان ہو جائے',
	'QUESTION_DELETED'			=> 'سوال حذف کر دیا گیا',
	'QUESTION_LANG'				=> 'زبان',
	'QUESTION_LANG_EXPLAIN'		=> 'وہ زبان جس میں‌یہ سوال اور اسکا جواب لکھا گیا ہے',
	'QUESTION_STRICT'			=> 'سخت چیک',
	'QUESTION_STRICT_EXPLAIN'	=> 'اگر فعال ہو تو حروف کا بڑا چھوٹا ہونا اور سفید جگہیں‌بھی نافظ کی جائیں گی.',

	'QUESTION_TEXT'				=> 'سوال',
	'QUESTION_TEXT_EXPLAIN'		=> 'سوال جو رجسٹریشن کے وقت پوچھا جائے گا',

	'QA_ERROR_MSG'				=> 'تمام فیلڈز پر کریں‌کم سے کم ایک سوال کا جواب لکھیں',
	'QA_LAST_QUESTION'			=> 'جبکہ یہ پلگن فعال ہے، آپ تمام سوالات حذف نہیں‌کر سکتے.',

));

?>