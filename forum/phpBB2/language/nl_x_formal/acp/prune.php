<?php
/**
*
* acp_prune [Dutch]
*
* @package language
* @version $Id: prune.php 204 2009-10-11 17:04:22Z rotsblok $
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Deze sectie stelt u in staat om gebruikers van uw forum te deactiveren of verwijderen. Accounts kunt u filteren op verschillende manieren; op berichtenaantal, meest recente activiteit, etc. Criteria kunnen worden gecombineerd om te beperken welke accounts zullen worden meegenomen. U kunt bijvoorbeeld gebruikers opschonen, die minder als 10 berichten hebben en die ook inactief zijn na 2002-01-01. Als alternatief kunt u de selectie criteria volledig overslaan door een lijst van gebruikers in te voeren (elke op een aparte regel) in het tekstveld. Wees voorzichtig met deze faciliteit! Wanneer een gebruiker is verwijderd, is er geen weg terug om deze actie terug te draaien.',

	'DEACTIVATE_DELETE'			=> 'Deactiveren of verwijderen',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Kies of u de gebruikers wilt deactiveren of meteen wilt verwijderen. Vergeet niet dat verwijderde gebruikers niet meer hersteld kunnen worden!',
	'DELETE_USERS'				=> 'Verwijderen',
	'DELETE_USER_POSTS'			=> 'Opgeschoonde gebruikersberichten verwijderen',
	'DELETE_USER_POSTS_EXPLAIN' => 'Verwijderd berichten die zijn gemaakt door verwijderde gebruikers, het heeft geen effect voor gebruikers die zijn gedeactiveerd.',

	'JOINED_EXPLAIN'			=> 'Voer een datum in het <kbd>JJJJ-MM-DD</kbd> formaat.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Voer een datum in het <kbd>JJJJ-MM-DD</kbd> formaat. Voer <kbd>0000-00-00</kbd> in om gebruikers die zich nog nooit hebben aangemeld te laten opschonen, <em>ervoor</em> en <em>erna</em> condities zullen worden genegeerd.',

	'PRUNE_USERS_LIST'				=> 'Gebruikers die opgeschoond moeten worden',
	'PRUNE_USERS_LIST_DELETE'		=> 'Met de geselecteerde criteria voor het opschonen van gebruikers zullen de volgende accounts worden verwijderd.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Met de geselecteerde criteria voor het opschonen van gebruikers zullen de volgende accounts worden gedeactiveerd.',

	'SELECT_USERS_EXPLAIN'		=> 'Voer specifieke gebruikersnamen hier in, ze zullen worden gebruikt in de voorkeuren van de criteria hierboven. Oprichters kunnen niet worden opgeschoond.',

	'USER_DEACTIVATE_SUCCESS'	=> 'De geselecteerde gebruikers zijn succesvol gedeactiveerd.',
	'USER_DELETE_SUCCESS'		=> 'De geselecteerde gebruikers zijn succesvol verwijderd.',
	'USER_PRUNE_FAILURE'		=> 'Geen gebruikers voldeden aan de geselecteerde criteria.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'De datum die is ingevoerd is verkeerd, het wordt verwacht in het <kbd>JJJJ-MM-DD</kbd> formaat.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Dit zal alle onderwerpen verwijderen waar nog niks in is geplaatst of die nog niet bekeken zijn binnen het aantal dagen dat u heeft geselecteerd. Als u geen nummer invoert dan zullen alle onderwerpen worden verwijderd. Standaard, zal het geen onderwerpen verwijderen met peilingen die nog steeds lopen, ook zal het geen stickies en mededelingen verwijderen.',

	'FORUM_PRUNE'		=> 'Forum opschonen',

	'NO_PRUNE'			=> 'Er zijn geen forums opgeschoond.',

	'SELECTED_FORUM'	=> 'Geselecteerd forum',
	'SELECTED_FORUMS'	=> 'Geselecteerde forums',

	'POSTS_PRUNED'					=> 'Berichten opgeschoond',
	'PRUNE_ANNOUNCEMENTS'			=> 'Mededelingen opgeschoond',
	'PRUNE_FINISHED_POLLS'			=> 'Gesloten peilingen opschonen',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Verwijderd onderwerpen met peilingen die zijn beëindigd.',
	'PRUNE_FORUM_CONFIRM'			=> 'Weet u zeker dat u de geselecteerde forums wilt opschonen met de instellingen die zijn opgegeven? Wanneer het is verwijderd, is er geen mogelijkheid om de opgeschoonde berichten en onderwerpen te herstellen.',
	'PRUNE_NOT_POSTED'				=> 'Dagen sinds het laatst geplaatste bericht',
	'PRUNE_NOT_VIEWED'				=> 'Dagen sinds het laatst is bekeken',
	'PRUNE_OLD_POLLS'				=> 'Oude peilingen opschonen',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Verwijderd onderwerpen met peilingen waarin nog niet in is gestemd geduurende de berichtleeftijd dagen.',
	'PRUNE_STICKY'					=> 'Stickies opschonen',
	'PRUNE_SUCCESS'					=> 'Het opschonen van de forums is succesvol afgerond.',

	'TOPICS_PRUNED'		=> 'Onderwerpen opgeschoond',
));

?>