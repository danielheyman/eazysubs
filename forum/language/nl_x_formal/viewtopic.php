<?php
/**
*
* viewtopic [Dutch]
*
* @package language
* @version $Id: viewtopic.php 231 2009-11-15 15:57:15Z Raimon $
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
	'ATTACHMENT'						=> 'Bijlage',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'De bijlagefunctie is uitgeschakeld.',

	'BOOKMARK_ADDED'		=> 'De bladwijzer is succesvol aangemaakt voor dit onderwerp.',
	'BOOKMARK_ERR'			=> 'Het aanmaken van een bladwijzer voor dit onderwerp is mislukt. Probeer het opnieuw.',
	'BOOKMARK_REMOVED'		=> 'De bladwijzer voor dit onderwerp is succesvol verwijderd.',
	'BOOKMARK_TOPIC'		=> 'Bladwijzer onderwerp',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Verwijder van bladwijzers',
	'BUMPED_BY'				=> 'Laatst omhooggehaald door %1$s op %2$s.',
	'BUMP_TOPIC'			=> 'Onderwerp omhooghalen',

	'CODE'					=> 'Code',
	'COLLAPSE_QR'			=> 'Snelle reactie verbergen',

	'DELETE_TOPIC'			=> 'Onderwerp verwijderen',
	'DOWNLOAD_NOTICE'		=> 'U heeft niet de benodigde permissies om de bestanden die aan dit bericht zijn toegevoegd te bekijken.',

	'EDITED_TIMES_TOTAL'	=> 'Laatst gewijzigd door %1$s op %2$s, in totaal %3$d keer gewijzigd.',
	'EDITED_TIME_TOTAL'		=> 'Laatst gewijzigd door %1$s op %2$s, in totaal %3$d keer gewijzigd.',
	'EMAIL_TOPIC'			=> 'E-mail vriend',
	'ERROR_NO_ATTACHMENT'	=> 'De geselecteerde bijlage bestaat niet meer.',

	'FILE_NOT_FOUND_404'	=> 'Het bestand <strong>%s</strong> bestaat niet.',
	'FORK_TOPIC'			=> 'Onderwerp kopiëren',
	'FULL_EDITOR'			=> 'Volledige reactiepagina',

	'LINKAGE_FORBIDDEN'		=> 'U bent niet gemachtigd om deze website te bekijken, noch hem te downloaden noch erheen of ervandaan te linken.',
	'LOGIN_NOTIFY_TOPIC'	=> 'U moet u aanmelden voordat u dit onderwerp kunt lezen waarvan u een notificatie heeft ontvangen.',
	'LOGIN_VIEWTOPIC'		=> 'U moet geregistreerd en aangemeld zijn om dit onderwerp te bekijken.',

	'MAKE_ANNOUNCE'				=> 'Naar “Mededeling” wijzigen',
	'MAKE_GLOBAL'				=> 'Naar “Forummedeling” wijzigen',
	'MAKE_NORMAL'				=> 'Naar “Normaal onderwerp” wijzigen',
	'MAKE_STICKY'				=> 'Naar “Sticky onderwerp” wijzigen',
	'MAX_OPTIONS_SELECT'		=> 'U mag <strong>%d</strong> opties selecteren',
	'MAX_OPTION_SELECT'			=> 'U mag <strong>1</strong> optie selecteren',
	'MISSING_INLINE_ATTACHMENT'	=> 'De bijlage <strong>%s</strong> is niet langer meer beschikbaar',
	'MOVE_TOPIC'				=> 'Onderwerp verplaatsen',

	'NO_ATTACHMENT_SELECTED'=> 'U heeft geen bijlage geselecteerd om te bekijken of te downloaden.',
	'NO_NEWER_TOPICS'		=> 'Er zijn geen nieuwere onderwerpen in dit forum.',
	'NO_OLDER_TOPICS'		=> 'Er zijn geen oudere onderwerpen in dit forum.',
	'NO_UNREAD_POSTS'		=> 'Er zijn geen nieuwe ongelezen berichten in dit onderwerp.',
	'NO_VOTE_OPTION'		=> 'U moet minstens één optie selecteren om te kunnen stemmen.',
	'NO_VOTES'				=> 'Geen stemmen',

	'POLL_ENDED_AT'			=> 'Peiling eindigt op %s',
	'POLL_RUN_TILL'			=> 'Peiling loopt tot %s',
	'POLL_VOTED_OPTION'		=> 'U heeft gestemd op deze optie',
	'PRINT_TOPIC'			=> 'Afdrukweergave',

	'QUICK_MOD'				=> 'Snelle moderatiehulpmiddelen',
	'QUICKREPLY'			=> 'Snelle reactie',
	'QUOTE'					=> 'Citaat',

	'REPLY_TO_TOPIC'		=> 'Reageren op dit onderwerp',
	'RETURN_POST'			=> '%sTerug naar het bericht%s',

	'SHOW_QR'				=> 'Snelle reactie',
	'SUBMIT_VOTE'			=> 'Stem versturen',

	'TOTAL_VOTES'			=> 'Aantal stemmen',

	'UNLOCK_TOPIC'			=> 'Onderwerp heropenen',

	'VIEW_INFO'				=> 'Berichtdetails',
	'VIEW_NEXT_TOPIC'		=> 'Volgende onderwerp',
	'VIEW_PREVIOUS_TOPIC'	=> 'Vorige onderwerp',
	'VIEW_RESULTS'			=> 'Resultaten bekijken',
	'VIEW_TOPIC_POST'		=> '1 bericht',
	'VIEW_TOPIC_POSTS'		=> '%d berichten',
	'VIEW_UNREAD_POST'		=> 'Eerste ongelezen bericht',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'Uw stem is geteld.',
	'VOTE_CONVERTED'        => 'Het veranderen van stemmen is niet ondersteund voor geconverteerde peilingen.',

));

?>