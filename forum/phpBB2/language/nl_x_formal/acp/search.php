<?php
/**
*
* acp_search [Dutch]
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Hier kunt u de indexen van alle zoekmethodes beheren. Aangezien u normaal maar één zoekmethode gebruikt, zult u alle indexen die u niet gebruikt moeten verwijderen. Als u sommige zoekinstellingen wijzigt (bijvoorbeeld; het aantal minimale/maximale tekens) is het raadzaam om de index opnieuw aan te maken, zodat het de wijzigingen bevat.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Hier kunt u opgeven welke zoekmethode er gebruikt zal worden voor het indexeren van berichten en het uitvoeren van zoekopdrachten. U kunt diverse opties instellen die invloed kunnen hebben op het verwerken van deze acties. Sommige instellingen zijn hetzelfde voor de engines van alle zoekmethodes.',

	'COMMON_WORD_THRESHOLD'					=> 'Drempel voor vaak voorkomende woorden',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Woorden die een groter percentage bevatten van alle berichten zullen worden gezien als vaak voorkomend. Vaak voorkomende woorden worden genegeerd in zoekopdrachten. Stel dit in op 0 om dit uit te schakelen. Dit heeft alleen effect als er meer dan 100 berichten zijn. Als u wilt dat woorden die momenteel gezien worden als vaak voorkomend alsnog worden opgenomen, zult u de index moeten herbouwen.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Weet u zeker dat u wilt ruilen naar een andere zoekmethode? Nadat het wijzigen van de zoekmethode voltooid is, zult u een index moeten aanmaken voor de nieuwe zoekmethode. Als u niet meer van plan bent om te wijzigen naar de oude zoekmethode, kunt u ook de index van de oude zoekmethodes verwijderen om schijfruimte vrij te maken.',
	'CONTINUE_DELETING_INDEX'				=> 'Doorgaan met het vorige verwijderingsproces van de index',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Een vorig verwijderingsproces is al eerder gestart. Om de zoekindex-pagina te kunnen betreden zult u het verwijderingsproces moeten voltooien of annuleren.',
	'CONTINUE_INDEXING'						=> 'Doorgaan met het vorige indexeringsproces',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Een vorig indexeringsproces is al eerder gestart. Om de zoekindex-pagina te kunnen betreden zult u het indexeringsproces moeten voltooien of annuleren.',
	'CREATE_INDEX'							=> 'Index aanmaken',

	'DELETE_INDEX'							=> 'Index verwijderen',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Bezig met het verwijderen van de index',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'De zoekmethode is momenteel de index aan het opschonen. Dit kan enige minuten in beslag nemen.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'De MySQL-fulltext methode kan alleen worden gebruikt met MySQL4 en hoger.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'De MySQL-fulltext index kan alleen worden gebruikt met MyISAM-tabellen.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Aantal geïndexeerde berichten',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Ondersteuning voor niet-Latijnse UTF-8 tekens die gebruik maken van de mbstring:',
	'FULLTEXT_MYSQL_PCRE'					=> 'Ondersteuning voor niet-Latijnse UTF-8 tekens die gebruik maken van PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Als PCRE niet de eigenschappen bevat van de unicode tekens, zal de zoekmethode proberen de reguliere mbstring-expression-engine te gebruiken.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'Deze zoekmethode vereist de PCRE unicode tekens eigenschappen voor als u wilt zoeken voor niet-Latijnse tekens, dit is echter alleen beschikbaar in PHP 4.4, 5.1 en hoger.',
    'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'   => 'Woorden met tenminste dit aantal tekens zullen worden geïndexeerd in de zoekindex. U of uw host kan alleen deze instelling wijzigen door de MySQL-configuratie te wijzigen.',
    'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'   => 'Woorden met niet meer dan dit aantal tekens zullen worden geïndexeerd in de zoekindex. U of uw host kan alleen deze instelling wijzigen door de MySQL-configuratie te wijzigen.',	

	'GENERAL_SEARCH_SETTINGS'				=> 'Algemene zoekinstellingen',
	'GO_TO_SEARCH_INDEX'					=> 'Naar de zoekindex-pagina gaan',

	'INDEX_STATS'							=> 'Indexstatistieken',
	'INDEXING_IN_PROGRESS'					=> 'Bezig met indexeren',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'De zoekmethode is momenteel alle berichten van het forum aan het indexeren. Dit kan enige minuten tot een paar uur in beslag nemen, afhankelijk van de grootte van uw forum.',

	'LIMIT_SEARCH_LOAD'						=> 'Beperking van de systeembelasting voor de zoekpagina',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Als de 1 minuut systeembelasting deze waarde overschrijft dan zal de zoekpagina offline gaan, 1.0 is gelijk aan ~100% van het gebruik van één processor. Dit zal alleen effect hebben op UNIX gebaseerde servers.',

	'MAX_SEARCH_CHARS'						=> 'Maximaal aantal tekens die geïndexeerd kunnen worden',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Woorden met niet meer als dit aantal tekens zullen worden geïndexeerd door de zoekfunctie.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Maximaal aantal toegestane trefwoorden',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Maximum aantal woorden waarmee een gebruiker kan zoeken. Een waarde van 0 betekend een onbeperkt aantal woorden.',
	'MIN_SEARCH_CHARS'						=> 'Minimaal aantal tekens die geïndexeerd kunnen worden',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Woorden met tenminste dit aantal tekens zullen worden geïndexeerd door de zoekfunctie.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Minimaal aantal tekens auteursnaam',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Gebruikers moeten tenminste dit aantal tekens invoeren van de naam wanneer ze op auteur zoeken d.m.v een joker. Als de gebruikersnaam van de auteur korter is dan dit nummer, kunt u nog steeds zoeken voor berichten van deze auteurs door de complete gebruikersnaam in te voeren.',

	'PROGRESS_BAR'							=> 'Voortgangsbalk',

	'SEARCH_GUEST_INTERVAL'					=> 'Wachtijd voor gasten tussen zoekopdrachten',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Aantal seconden waarop gasten moeten wachten tussen zoekopdrachten. Als één gast zoekt zullen alle andere gasten moeten wachten tot de wachttijd is verstreken.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'Alle berichten tot en met bericht-ID %1$d zijn nu geïndexeerd, van de %2$d berichten in deze stap.<br />De huidige schatting van de indexering is ongeveer %3$.1f berichten per seconde.<br />Bezig met indexeren…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'Alle berichten tot en met bericht-ID %1$d zijn verwijderd van de zoekindex.<br />Bezig met verwijderen…',
	'SEARCH_INDEX_CREATED'					=> 'Alle berichten zijn succesvol geïndexeerd in de forum-database.',
	'SEARCH_INDEX_REMOVED'					=> 'De zoekindex voor deze methode is succesvol verwijderd.',
	'SEARCH_INTERVAL'						=> 'Wachtijd voor gebruikers tussen zoekopdrachten',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Aantal seconden waarop gebruikers moeten wachten tussen zoekopdrachten. Deze wachttijd wordt onafhankelijk gecontroleerd voor elke gebruiker.',
	'SEARCH_STORE_RESULTS'					=> 'Cache-lengte van zoekresultaten',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Gecachte zoekresultaten die na deze tijd, in seconden zullen verlopen. Stel het in op 0 als u de zoek-cache wilt uitschakelen.',
	'SEARCH_TYPE'							=> 'Zoekmethode',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB staat u toe om een zoekmethode te kiezen die gebruikt wordt om tekst te zoeken in berichten. Standaard zal het de eigen phpBB fulltext zoekmethode gebruiken.',
	'SWITCHED_SEARCH_BACKEND'				=> 'U heeft een andere zoekmethode geselecteerd. Om de nieuwe zoekmethode correct te gebruiken moet u er zeker van zijn dat er een index is voor de methode die u heeft gekozen.',

	'TOTAL_WORDS'							=> 'Aantal geïndexeerde woorden',
	'TOTAL_MATCHES'							=> 'Aantal geïndexeerde relaties tussen woord en een bericht',

	'YES_SEARCH'							=> 'Zoekfunctie inschakelen',
	'YES_SEARCH_EXPLAIN'					=> 'Schakelt de zoekfunctie voor gebruikers in, inclusief het zoeken naar gebruikers.',
	'YES_SEARCH_UPDATE'						=> 'Bijwerken van fulltext inschakelen',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Bijwerken van de fulltext index wanneer er een bericht wordt geplaatst, als de zoekfunctie is uitgeschakeld zal het overschreven worden.',
));

?>