<?php
/**
*
* recaptcha [English]
*
* @package language
* @version $Id$
* @copyright (c) 2009 phpBB Group
* @translator Muneeb 21-11-2010 http://www.urdudreams.com/forum
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
	'RECAPTCHA_LANG'				=> 'en',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'reCaptcha استعمال کرنے کے لیے آپکا <a href="http://recaptcha.net">reCaptcha.net</a> پر اکائونٹ بنانا ضروری ہے',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'آپکا داخل کیا گیا تصویری توثیقی کوڈ‌غلط ہے',

	'RECAPTCHA_PUBLIC'				=> 'عوامی reCaptcha چابی',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'آپکی عوامی reCaptcha چابی. آپ ایک چابی <a href="http://recaptcha.net">reCaptcha.net</a> پر حاصل کر سکتے ہیں',
	'RECAPTCHA_PRIVATE'				=> 'نجی reCaptcha چابی',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'آپکی نجی reCaptcha چابی. آپ ایک چابی <a href="http://recaptcha.net">reCaptcha.net</a> پر حاصل کر سکتے ہیں',

	'RECAPTCHA_EXPLAIN'				=> 'خودکار اندراجات کو روکنے کے لیے، آپ سے درخواست ہے کہ آپ نیچے دی گئی تصویر میں سے دونوں‌الفاظ‌لکھیں',
));

?>