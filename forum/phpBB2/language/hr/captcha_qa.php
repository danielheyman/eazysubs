<?php
/**
*
* captcha_qa [English]
*
* @package language
* @version $Id: captcha_qa.php 9966 2009-08-12 15:12:03Z Kellanved $
* @copyright (c) 2009 phpBB Group
* @author Ančica Sečan 2003-2008
* @author hecos 2010
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
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Ovo pitanje služi za identifikaciju i sprečavanje automatskih slanja.',
	'CONFIRM_QUESTION_WRONG'	=> 'Upisao/la si krivi odgovor na potvrdno pitanje.',

	'QUESTION_ANSWERS'			=> 'Odgovori',
	'ANSWERS_EXPLAIN'			=> 'Upiši točne odgovore na pitanja, jedan odgovor na svakoj liniji.',
	'CONFIRM_QUESTION'			=> 'Pitanje',

	'ANSWER'					=> 'Odgovor',
	'EDIT_QUESTION'				=> 'Uredi Pitanje',
	'QUESTIONS'					=> 'Pitanja',
	'QUESTIONS_EXPLAIN'			=> 'Tijekom registracije, korisnici će biti upitani jedno od napisanih pitanja. Kako bi se koristio ovaj plugin, najmanje jedno pitanje mora biti postavljeno na zadanom jeziku. Pitanja moraju biti jednostavna osobama za odgovoriti, ali nerazumljiva botovima sposobnim za Google pretragu. Korištenje većeg broja pitanja koja se redovito mijenjaju može pomoći u ostvarivanju kvalitetnijih rezultata. Omogući stroge postavke ukoliko se pitanje oslanja na specijalne znakove ili mala i velika slova.',
	'QUESTION_DELETED'			=> 'Pitanje izbrisano',
	'QUESTION_LANG'				=> 'Jezik',
	'QUESTION_LANG_EXPLAIN'		=> 'Jezik na kojem je napisano ovo pitanje i njegovi odgovori.',
	'QUESTION_STRICT'			=> 'Stroga provjera',
	'QUESTION_STRICT_EXPLAIN'	=> 'Ukoliko je uključeno, velika i mala slova, te razmak će biti uključeni.',

	'QUESTION_TEXT'				=> 'Pitanje',
	'QUESTION_TEXT_EXPLAIN'		=> 'Pitanje koje će biti postavljeno prilikom registracije.',

	'QA_ERROR_MSG'				=> 'Popunite sva polja i upišite najmanje jedan odgovor.',
	'QA_LAST_QUESTION'			=> 'Ne možeš izbrisati sva pitanja dok je plugin aktivan.',
));

?>