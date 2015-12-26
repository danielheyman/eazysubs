<?php
/**
*
* captcha_qa [Dutch]
*
* @package language
* @version $Id: captcha_qa.php 330 2010-11-14 22:15:21Z Raimon $
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
	'CAPTCHA_QA'				=> 'Q&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Deze vraag is een manier om automatische formulier versturingen te voorkomen die gemaakt worden door spambots.',
	'CONFIRM_QUESTION_WRONG'	=> 'U heeft een ongeldig antwoord gegeven op de vraag.',

	'QUESTION_ANSWERS'			=> 'Antwoorden',
	'ANSWERS_EXPLAIN'			=> 'Voer geldige antwoorden in op de vraag, één per regel.',
	'CONFIRM_QUESTION'			=> 'Vraag',

	'ANSWER'					=> 'Antwoord',
	'EDIT_QUESTION'				=> 'Vraag wijzigen',
	'QUESTIONS'					=> 'Vragen',
	'QUESTIONS_EXPLAIN'			=> 'Voor elk formulier die verstuurd wordt waar u de Q&amp;A-plug-in  hebt ingeschakeld, zal er één van deze vragen die u hier heeft ingevuld worden gesteld aan u gebruikers. Om deze plug-in te kunnen gebruiken moet tenminste één vraag worden ingevuld in de standaard taal. Deze vragen zouden makkelijk te beantwoorden moeten zijn voor uw doelgroep, maar ze zouden wel buiten de mogelijkheid moeten liggen van een bot die een Google™-zoekopdracht kan doen. Het gebruik van een groot aantal vragen dat regelmatig gewijzigd wordt, geeft de beste resultaten. Schakel de strikte instelling in als het antwoord afhankelijk moet zijn van een mix van interpunctie of spaties.',
	'QUESTION_DELETED'			=> 'Vraag verwijderd',
	'QUESTION_LANG'				=> 'Taal',
	'QUESTION_LANG_EXPLAIN'		=> 'De taal waarin deze vraag en de antwoorden in zijn geschreven.',
	'QUESTION_STRICT'			=> 'Strikte controle',
	'QUESTION_STRICT_EXPLAIN'	=> 'Schakel dit in een mix van interpunctie en spaties te verplichten.',

	'QUESTION_TEXT'				=> 'Vraag',
	'QUESTION_TEXT_EXPLAIN'		=> 'De vraag die zal worden gesteld aan de gebruiker.',

	'QA_ERROR_MSG'				=> 'Vul alle velden en tenminste één antwoord in.',
	'QA_LAST_QUESTION'			=> 'U kunt niet alle vragen verwijderen wanneer de plug-in actief is.',
	
));

?>