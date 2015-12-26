<?php
/**
*
* captcha_recaptcha [Dutch]
*
* @package language
* @version $Id: captcha_recaptcha.php 328 2010-11-10 20:18:23Z Raimon $
* @copyright (c) 2008 phpBB Group, 2009 phpBBservice.nl
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
	'RECAPTCHA_LANG'				=> 'nl',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Om reCaptcha te kunnen gebruiken, moet u een account hebben op <a href="http://recaptcha.net">reCaptcha.net</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'De visuele bevestigingscode die u verstuurd hebt was onjuist',

	'RECAPTCHA_PUBLIC'				=> 'Publieke reCaptcha-sleutel',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Uw publieke reCaptcha-sleutel. Sleutels zijn verkrijgbaar op <a href="http://recaptcha.net">reCaptcha.net</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Privé reCaptcha-sleutel',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Uw privé reCaptcha-sleutel. Sleutels zijn verkrijgbaar op <a href="http://recaptcha.net">reCaptcha.net</a>.',

	'RECAPTCHA_EXPLAIN'             => 'In een poging om het automatisch versturen van formulieren te voorkomen, vragen wij u dat u beide woorden die zijn weergegeven, in het tekstveld hieronder invult.',

));

?>