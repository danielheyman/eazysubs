<?php
/**
*
* acp_ban [Dutch]
*
* @package language
* @version $Id: ban.php 203 2009-10-09 23:27:48Z rotsblok $
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 uur',
	'30_MINS'		=> '30 minuten',
	'6_HOURS'		=> '6 uren',

	'ACP_BAN_EXPLAIN'	=> 'Hier kunt u het verbannen van gebruikers via naam, IP-adres of e-mailadres beheren. Met deze methodes kan een gebruiker geen enkel deel van uw forum bereiken. U kunt een korte (maximaal 3000 tekens) reden opgeven voor de verbanning als u dat wilt. Dit zal dan worden weergegeven in het beheerderslogboek. De duur van de verbanning kan ook worden opgegeven. Als u wilt dat de verbanning eindigd op een specifieke datum, inplaats van een tijdsperiode, selecteer dan <span style="text-decoration: underline;">Tot -&gt;</span> voor de duur van de verbanning. De datum kunt u invoeren als <kbd>JJJJ-MM-DD</kbd> formaat.',

	'BAN_EXCLUDE'			=> 'Uitsluiten van verbanning',
	'BAN_LENGTH'			=> 'Duur van de verbanning',
	'BAN_REASON'			=> 'Reden voor de verbanning',
	'BAN_GIVE_REASON'		=> 'Reden die wordt weergeven aan de verbannen gebruiker',
	'BAN_UPDATE_SUCCESSFUL'	=> 'De verbanningslijst is succesvol bijgewerkt.',
	'BANNED_UNTIL_DATE'		=> 'tot %s', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (tot %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"	

	'EMAIL_BAN'					=> 'Eén of meer e-mailadressen verbannen',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Schakel dit in om het ingevoerde e-mailadres uit te sluiten van alle huidige verbanningen.',
	'EMAIL_BAN_EXPLAIN'			=> 'U kunt meerdere e-mailadressen in één keer verbannen door elk adres op een aparte regel in te voeren. Om een gedeelte van een e-mailadres overeen te laten komen, gebruikt u * als wildcard, bijvoorbeeld <samp>*@hotmail.com</samp>, <samp>*@*.domein.tld</samp>, enz.',
	'EMAIL_NO_BANNED'			=> 'Geen verbannen e-mailadressen',
	'EMAIL_UNBAN'				=> 'Verbannen of uitgesloten e-mailadressen opheffen',
	'EMAIL_UNBAN_EXPLAIN'		=> 'U kunt meerdere verbande (of uitgesloten) e-mailadressen verwijderen, doormiddel van één keer de juiste combinatie van de muis en het toetsenbord te gebruiken van uw computer en browser. Uitgesloten e-mailadressen zijn al benadrukt.',

	'IP_BAN'					=> 'Eén of meer IP-adressen verbannen',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Schakel dit in om het ingevoerde IP-adressen uit te sluiten van alle huidige verbanningen.',
	'IP_BAN_EXPLAIN'			=> 'U kunt meerdere IP-adressen in één keer verbannen door elk adres op een aparte regel in te voeren. Om een reeks van IP-adressen toe te voegen, onderscheidt u ze met het begin en het einde met een liggend streepje (-), een asterix “*” kunt u gebruiken als jokerteken.',
	'IP_HOSTNAME'				=> 'IP-adressen of hostnamen',
	'IP_NO_BANNED'				=> 'Geen verbannen IP-adressen',
	'IP_UNBAN'					=> 'Verbannen of uitgesloten IP-adressen opheffen',
	'IP_UNBAN_EXPLAIN'			=> 'U kunt meerdere verbannen (of uitgesloten) IP-adressen verwijderen, doormiddel van één keer de juiste combinatie van de muis en het toetsenbord te gebruiken van uw computer en browser. Uitgesloten IP-adressen zijn al benadrukt.',

	'LENGTH_BAN_INVALID'		=> 'De datum moet worden ingevoerd in het formaat <kbd>JJJJ-MM-DD</kbd>.',

	'PERMANENT'		=> 'Permanent',

	'UNTIL'						=> 'Tot',
	'USER_BAN'					=> 'Eén of meer gebruikersnamen verbannen',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Schakel dit in om het ingevoerde gebruikers uit te sluiten van alle huidige verbanningen.',
	'USER_BAN_EXPLAIN'			=> 'U kunt meerdere gebruikers in één keer verbannen door elke naam op een aparte regel in te voeren. Gebruik de <span style="text-decoration: underline;">Gebruiker zoeken</span> optie om automatisch één of meerdere gebruikers toe te voegen.',
	'USER_NO_BANNED'			=> 'Geen verbannen gebruikersnamen',
	'USER_UNBAN'				=> 'Verbannen of uitgesloten gebruikersnamen opheffen',
	'USER_UNBAN_EXPLAIN'		=> 'U kunt meerdere verbannen (of uitgesloten) gebruikers verwijderen, doormiddel van één keer de juiste combinatie van de muis en het toetsenbord te gebruiken van uw computer en browser. Uitgesloten gebruikers zijn al benadrukt.',
));

?>