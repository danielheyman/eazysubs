<?php
/**
*
* recaptcha [Serbian]
*
* @package language
* @version $Id$
* @copyright (c) 2009 phpBB Group
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
	'RECAPTCHA_LANG'				=> 'sr',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'У настојању да користите reCaptcha, морате направити налог на <a href="http://recaptcha.net">reCaptcha.net</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Код видне потврде који сте унели је неисправан',

	'RECAPTCHA_PUBLIC'				=> 'Јавни reCaptcha кључ',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Ваш јавни reCaptcha кључ. Кључеви се могу добити на <a href="http://recaptcha.net">reCaptcha.net</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Приватни reCaptcha кључ',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Ваш приватни reCaptcha кључ. Кључеви се могу добити на <a href="http://recaptcha.net">reCaptcha.net</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'У настојању да спречимо аутоматске пријаве, тражимо да унесете обе од речи приказаних испод у текстуално поље.',
));

?>