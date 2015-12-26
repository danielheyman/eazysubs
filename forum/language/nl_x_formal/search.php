<?php
/**
*
* search [Dutch]
*
* @package language
* @version $Id: search.php 328 2010-11-10 20:18:23Z Raimon $
* @copyright (c) 2005 phpBB Group, 2007 phpBBservice.nl
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
	'ALL_AVAILABLE'			=> 'Alle beschikbare',
	'ALL_RESULTS'			=> 'Alle resultaten',

	'DISPLAY_RESULTS'		=> 'Resultaten weergeven als',

    'FOUND_SEARCH_MATCH'		=> 'Er is %d resultaat gevonden',
	'FOUND_SEARCH_MATCHES'		=> 'Er zijn %d resultaten gevonden',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Er zijn meer dan %d reslutaten gevonden',

	'GLOBAL'				=> 'Forummededeling',

	'IGNORED_TERMS'			=> 'genegeerd',
	'IGNORED_TERMS_EXPLAIN'	=> 'De volgende woorden van uw zoekopdracht zijn genegeerd omdat het te vaak voorkomende woorden zijn: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Ga naar bericht',

    'LOGIN_EXPLAIN_EGOSEARCH'		=> 'Het forum vereist dat u geregistreerd en aangemeld bent, om uw eigen berichten te kunnen bekijken.',
	'LOGIN_EXPLAIN_UNREADSEARCH'	=> 'Het forum vereist dat u geregistreerd en aangemeld bent, om uw ongelezen berichten te kunnen bekijken.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> 'U heeft teveel woorden opgeven voor uw zoekopdracht. Voer niet meer dan %1$d woorden in.',

	'NO_KEYWORDS'			=> 'U moet tenminste één woord opgeven om op te kunnen zoeken. Elk woord moet tenminste %d tekens bevatten en mag niet meer dan %d tekens zijn exclusief jokertekens.',
	'NO_RECENT_SEARCHES'	=> 'Er zijn recent geen zoekopdrachten uitgevoerd.',
	'NO_SEARCH'				=> 'Sorry, maar u heeft geen toestemming om de zoekfunctie te gebruiken.',
	'NO_SEARCH_RESULTS'		=> 'Er zijn geen resultaten gevonden die overeenkomen met uw zoekopdracht.',
	'NO_SEARCH_TIME'		=> 'Sorry, u kunt op dit moment niet de zoekfunctie gebruiken. Probeer het over een paar minuten opnieuw.',
	'NO_SEARCH_UNREADS'     => 'Sorry, maar de functie voor het zoeken op ongelezen berichten is op dit moment uitgeschakeld op dit forum.',
	'WORD_IN_NO_POST'		=> 'Er zijn geen berichten gevonden met het woord <strong>%s</strong> omdat het niet voorkomt in een bericht.',
	'WORDS_IN_NO_POST'		=> 'Er zijn geen berichten gevonden met de woorden <strong>%s</strong> omdat het niet voorkomt in een bericht.',

	'POST_CHARACTERS'		=> 'tekens van berichten',

	'RECENT_SEARCHES'		=> 'Recente zoekopdrachten',
	'RESULT_DAYS'			=> 'Resultaten beperken van afgelopen',
	'RESULT_SORT'			=> 'Resultaten sorteren op',
	'RETURN_FIRST'			=> 'Bekijk de eerste',
	'RETURN_TO_SEARCH_ADV'	=> 'Terug naar uitgebreid zoeken',

	'SEARCHED_FOR'				=> 'Gebruikte zoekterm',
	'SEARCHED_TOPIC'			=> 'Doorzocht onderwerp',
	'SEARCH_ALL_TERMS'			=> 'Naar alle termen zoeken of gebruik een opgegeven zoekopdracht',
	'SEARCH_ANY_TERMS'			=> 'Naar enige termen zoeken',
	'SEARCH_AUTHOR'				=> 'Naar auteur zoeken',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Gebruik het jokerteken (*) voor gedeeltelijke overeenkomsten.',
	'SEARCH_FIRST_POST'			=> 'Eerste bericht van onderwerpen',
	'SEARCH_FORUMS'				=> 'Forums doorzoeken',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Selecteer het forum of forums waar u in wenst te gaan zoeken. Subforums worden automatisch doorzocht als u de functie “subforums doorzoeken” niet uitschakeld hieronder.',
	'SEARCH_IN_RESULTS'			=> 'Deze resultaten doorzoeken',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Plaats <strong>+</strong> voor een woord welke gevonden moet worden en plaats <strong>-</strong> voor een woord welke niet gevonden moet worden. U kunt een lijst van woorden verdelen doormiddel van <strong>|</strong> tussen de haakjes te plaatsen als één van de woorden gevonden moet worden. Gebruik een jokerteken (*) voor gedeeltelijke overeenkomsten.',
	'SEARCH_MSG_ONLY'			=> 'Berichttekst',
	'SEARCH_OPTIONS'			=> 'Zoekopties',
	'SEARCH_QUERY'				=> 'Zoekopdracht',
	'SEARCH_SUBFORUMS'			=> 'Subforums doorzoeken',
	'SEARCH_TITLE_MSG'			=> 'Berichttitels en berichttekst',
	'SEARCH_TITLE_ONLY'			=> 'Onderwerptitels',
	'SEARCH_WITHIN'				=> 'Doorzoek alleen',
	'SORT_ASCENDING'			=> 'Oplopend',
	'SORT_AUTHOR'				=> 'Auteur',
	'SORT_DESCENDING'			=> 'Aflopend',
	'SORT_FORUM'				=> 'Forum',
	'SORT_POST_SUBJECT'			=> 'Berichttitel',
	'SORT_TIME'					=> 'Berichttijd',

	'TOO_FEW_AUTHOR_CHARS'	    => 'U moet tenminste %d tekens invoeren van de auteursnaam.',
));

?>