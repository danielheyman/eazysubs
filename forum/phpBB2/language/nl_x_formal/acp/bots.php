<?php
/**
*
* acp_bots [Dutch]
*
* @package language
* @version $Id: bots.php 203 2009-10-09 23:27:48Z rotsblok $
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Bots beheren',
	'BOTS_EXPLAIN'		=> '“Zoekrobots”, “spiders”, “Bots” of “crawlers” zijn automatische programma’s die meestal gebruikt worden door zoekmachines om hun database te kunnen bijwerken. Sinds ze ook gebruik maken van de sessies en ze effect hebben op het bezoekers aantal, het laden van de website kunnen verhogen en soms kunnen ze falen om websites correct te indexeren. Hier kunt u een speciaal soort gebruikerstype definiëren om deze problemen te voorkomen.',
	'BOT_ACTIVATE'		=> 'Activeren',
	'BOT_ACTIVE'		=> 'Bot actief',
	'BOT_ADD'			=> 'Bot toevoegen',
	'BOT_ADDED'			=> 'Nieuwe bot is succesvol toegevoegd.',
	'BOT_AGENT'			=> 'Agentovereenkomst',
	'BOT_AGENT_EXPLAIN'	=> 'Meerdere agent-overeenkomsten zijn mogelijk, u kunt ze onderscheiden door achter elk nieuwe agentbrowser een komma te plaatsen.',
	'BOT_DEACTIVATE'	=> 'Deactiveren',
	'BOT_DELETED'		=> 'Bot succesvol verwijderd.',
	'BOT_EDIT'			=> 'Bot wijzigen',
	'BOT_EDIT_EXPLAIN'	=> 'Hier kunt u de bestaande zoekrobots wijzigen of toevoegen. U mag ze ook een agent en één of meerdere IP-adressen (of de overeenkomende reeks) toewijzen. U kunt ook kiezen welke taal en welke stijl de bots zien als ze uw forum bezoeken. Dit kan er voor zorgen dat het dataverkeer verhoogd wordt doordat één of meerdere bots een andere stijl gebruiken. Hou wel in de gaten dat de speciale bots gebruikersgroep de juiste permissies moeten hebben.',
	'BOT_LANG'			=> 'Taal van de bot',
	'BOT_LANG_EXPLAIN'	=> 'De taal die de zoekrobot kan zien wanneer hij het forum bezoekt.',
	'BOT_LAST_VISIT'	=> 'Laatste bezoek',
	'BOT_IP'			=> 'IP-adres van de bot',
	'BOT_IP_EXPLAIN'	=> 'Meerdere IP-adressen zijn toegestaan, u kunt ze onderscheiden door achter elk IP-adres een komma te plaatsen.',
	'BOT_NAME'			=> 'Naam van de bot',
	'BOT_NAME_EXPLAIN'	=> 'Wordt alleen gebruikt voor uw eigen informatie.',
	'BOT_NAME_TAKEN'	=> 'De naam is al in gebruik op uw forum en kan niet worden gebruikt voor de bot.',
	'BOT_NEVER'			=> 'Nooit',
	'BOT_STYLE'			=> 'Stijl van de bot',
	'BOT_STYLE_EXPLAIN'	=> 'De stijl die gebruikt wordt voor het forum door de bot.',
	'BOT_UPDATED'		=> 'Bestaande bot is succesvol bijgewerkt.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'De bot-agent dat u heeft opgegeven wordt momenteel al gebruikt door een andere bot. Wijzig de agent voor deze bot.',
	'ERR_BOT_NO_IP'				=> 'Het IP-adres dat u heeft opgegeven is ongeldig of de hostnaam kon niet worden gevonden.',
	'ERR_BOT_NO_MATCHES'		=> 'U moet tenminste één agent of IP-adres invoeren die overeenkomt met de bot.',

	'NO_BOT'		=> 'Geen bot gevonden met de opgegeven ID.',
	'NO_BOT_GROUP'	=> 'Kon de opgegeven speciale groep van de bot niet vinden.',
));

?>