<?php
/**
*
* acp_forums [Dutch]
*
* @package language
* @version $Id: forums.php 270 2010-02-23 00:48:35Z Raimon $
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Berichtleeftijd voor automatisch opschonen',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Aantal dagen sinds het laatste bericht, nadat een onderwerp verwijderd wordt.',
	'AUTO_PRUNE_FREQ'			=> 'Frequentie voor automatisch opschonen',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Tijd in dagen tussen opschoningssessies.',
	'AUTO_PRUNE_VIEWED'			=> 'Laatst bekeken berichtleeftijd voor automatisch opschonen',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Aantal dagen sinds het onderwerp bekeken was, nadat een onderwerp verwijderd wordt.',

	'CONTINUE'						=> 'Doorgaan',
	'COPY_PERMISSIONS'				=> 'Permissies kopiëren van',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Om de permissie-setup wat makkelijker te maken voor uw nieuwe forum, kunt u de permissies kopiëren van een bestaand forum.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Wanneer u het forum heeft aangemaakt, zal het dezelfde permissies hebben als degene die u hier heeft selecteerd. Als er geen forum is geselecteerd dan zal het pas aangemaakte forum niet zichtbaar zijn totdat de permissies zijn ingesteld.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Als u geselecteerd heeft om de permissies te kopiëren, zal het forum dezelfde permissies hebben als degene die u hier selecteert. Dit zal alle permissies overschrijven die u heeft ingesteld voor dit forum met de permissies van het forum dat u hier heeft geselecteerd. Als er geen forum is geselecteerd dan zullen de huidige permissies worden gebruikt.',
	'COPY_TO_ACL'					=> 'Als alternatief kunt u ook %snieuwe permissies instellen%s voor dit forum.',
	'CREATE_FORUM'					=> 'Nieuw forum aanmaken',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Inhoud verwijderen of verplaatsen naar forum',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Subforums verwijderen of verplaatsen naar forum',
	'DEFAULT_STYLE'						=> 'Standaard stijl',
	'DELETE_ALL_POSTS'					=> 'Berichten verwijderen',
	'DELETE_SUBFORUMS'					=> 'Subforums en berichten verwijderen',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Actieve onderwerpen inschakelen',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Als dit is ingesteld op ja, dan zullen actieve onderwerpen in de geselecteerde subforums worden weergegeven onder deze categorie.',

	'EDIT_FORUM'					=> 'Forum wijzigen',
	'ENABLE_INDEXING'				=> 'Zoekindexering inschakelen',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Als het ingesteld is op ja, dan zullen berichten die gemaakt worden in dit forum geïndexeerd worden om het zoeken te vereenvoudigen.',
	'ENABLE_POST_REVIEW'			=> 'Nakijken van bericht inschakelen',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Als dit is ingesteld op ja, dan kunnen gebruikers hun eigen bericht nakijken als er nieuwe berichten zijn gemaakt in het onderwerp door andere gebruikers, terwijl ze hun eigen bericht aan het schrijven waren. Dit zou uitgeschakeld moet zijn voor chat-forums.',
	'ENABLE_QUICK_REPLY'			=> 'Snelle reactie inschakelen',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Met deze instelling kan je de snelle reactie inschakelen in dit forum. Wanneer de snelle reactie is uitgeschakeld via de forumfunctionaliteiten zal het niet worden weergegeven wat je ook hier instelt. Wanneer de snelle reactie is ingeschakeld, zal het alleen worden weergegeven aan gebruikers die permissies hebben om berichten te plaatsen in dit forum.',
	'ENABLE_RECENT'					=> 'Actieve onderwerpen weergeven',
	'ENABLE_RECENT_EXPLAIN'			=> 'Als dit is ingesteld op ja, dan zullen onderwerpen die gemaakt zijn in dit forum worden weergegeven in de actieve onderwerpenlijst.',
	'ENABLE_TOPIC_ICONS'			=> 'Onderwerppictogrammen inschakelen',

	'FORUM_ADMIN'						=> 'Forumbeheer',
	'FORUM_ADMIN_EXPLAIN'				=> 'In phpBB3 zijn er geen categorieën, alles is forum gebaseerd. Elk forum kan een onbeperkt aantal subforums hebben en u kunt beslissen of er berichten in geplaatst mogen worden of niet (bijvoorbeeld wanneer het zich voor doet als een oude categorie). Hier kunt u individuele forums toevoegen, wijzigen, verwijderen, sluiten, openen en ook nog bepaalde extra instellingen instellen. Als uw berichten en onderwerpen niet meer kloppen qua aantal kunt u ook nog een forum hersynchroniseren. <strong>U moet permissies kopiëren of de juiste instellen wanneer u een nieuw forum aanmaakt om ze te kunnen laten weergeven.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Automatisch opschonen inschakelen',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Schoont het forum of de onderwerpen op, stel de frequentie/leeftijd parameters hieronder in.',
	'FORUM_CREATED'						=> 'Forum is succesvol aangemaakt.',
	'FORUM_DATA_NEGATIVE'				=> 'Opschoningsparameters kunnen niet negatief zijn.',
	'FORUM_DESC_TOO_LONG'				=> 'De forumbeschrijving is te lang, het moet minder dan 4000 tekens lang zijn.',
	'FORUM_DELETE'						=> 'Forum verwijderen',
	'FORUM_DELETE_EXPLAIN'				=> 'Met het formulier hieronder kunt u een forum verwijderen. Als u in het forum berichten kunt plaatsen, kunt u kiezen waar u de onderwerpen (of forums) neer wilt zetten die zich in het forum nog bevinden.',
	'FORUM_DELETED'						=> 'Forum is succesvol verwijderd.',
	'FORUM_DESC'						=> 'Beschrijving',
	'FORUM_DESC_EXPLAIN'				=> 'Enige HTML-opmaak die wordt ingevoerd zal worden weergegeven zoals die is.',
	'FORUM_EDIT_EXPLAIN'				=> 'Met het formulier hieronder kunt u dit forum aanpassen. Vergeet niet dat moderatie en berichtteller controles ingesteld zijn via de forumpermissies voor elke gebruiker of gebruikersgroep.',
	'FORUM_IMAGE'						=> 'Forumafbeelding',
	'FORUM_IMAGE_EXPLAIN'				=> 'Locatie, die relatief is aan de phpBB-hoofdmap, van een extra afbeelding om geassocieerd te worden met dit forum.',
	'FORUM_IMAGE_NO_EXIST'				=> 'De opgegeven forumafbeelding bestaat niet',
	'FORUM_LINK_EXPLAIN'				=> 'De volledige URL (inclusief het protocol, voorbeeld <samp>http://</samp>) naar de bestemmingslocatie die bij het klikken van dit forum de gebruiker naar toe neemt, bijvoorbeeld: <samp>http://www.phpBBservice.nl/</samp>.',
	'FORUM_LINK_TRACK'					=> 'Linkverwijzingen volgen',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Slaat het aantal keren dat er op de forumlink is geklikt op.',
	'FORUM_NAME'						=> 'Forumnaam',
	'FORUM_NAME_EMPTY'					=> 'U moet een naam invoeren voor dit forum.',
	'FORUM_PARENT'						=> 'Hoofdforum',
	'FORUM_PASSWORD'					=> 'Forumwachtwoord',
	'FORUM_PASSWORD_CONFIRM'			=> 'Forumwachtwoord bevestigen',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Dit moet u alleen invullen als u het forumwachtwoord heeft opgegeven.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Geef een wachtwoord op voor dit forum, gebruik bij voorkeur het permissiesysteem.',
	'FORUM_PASSWORD_UNSET'				=> 'Forumwachtwoord verwijderen',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Controleert hier of u het forumwachtwoord wilt verwijderen.',
	'FORUM_PASSWORD_OLD'				=> 'Het forumwachtwoord gebruikt nog een oude hash-methode en zal gewijzigd moeten worden.',
	'FORUM_PASSWORD_MISMATCH'			=> 'De wachtwoorden die u heeft opgegeven komen niet overeen.',
	'FORUM_PRUNE_SETTINGS'				=> 'Forum opschooninstellingen',
	'FORUM_RESYNCED'					=> 'Forum “%s” is succesvol gehersynchroniseerd',
	'FORUM_RULES_EXPLAIN'				=> 'Forumregels zijn weergeven op elke pagina binnen het desbetreffende forum.',
	'FORUM_RULES_LINK'					=> 'Link naar de forumregels',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'U kunt hier de URL invoeren van de pagina of het bericht die uw forumregels bevatten. Deze instelling zal de tekst van de forumregels, die u hieronder heeft opgegeven, overschrijven.',
	'FORUM_RULES_PREVIEW'				=> 'Forumregels voorbeeld',
	'FORUM_RULES_TOO_LONG'				=> 'De forumregels mag niet meer dan 4000 tekens lang zijn.',
	'FORUM_SETTINGS'					=> 'Foruminstellingen',
	'FORUM_STATUS'						=> 'Forumstatus',
	'FORUM_STYLE'						=> 'Forumstijl',
	'FORUM_TOPICS_PAGE'					=> 'Onderwerpen per pagina',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Als het geen nul is, dan zal deze waarde de standaard onderwerpen per pagina-instelling overschrijven.',
	'FORUM_TYPE'						=> 'Forumtype',
	'FORUM_UPDATED'						=> 'Foruminformatie is succesvol bijgewerkt.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'U wilt een forum waar u berichten kunt plaatsen die subforums bevat wijzigen naar een link. Verplaats eerst alle subforums uit dit forum voordat u verder gaat, omdat nadat u dit gewijzigd heeft naar een link u niet langer meer de subforums kunt zien die verbonden zijn aan dit forum.',

	'GENERAL_FORUM_SETTINGS'	=> 'Algemene foruminstellingen',

	'LINK'						=> 'Link',
	'LIST_INDEX'				=> 'Subforum in legenda van hoofdforums weergeven',
	'LIST_INDEX_EXPLAIN'		=> 'Dit forum weergeven op de index en op andere plekken als een link binnen de legenda van het hoofdforum van de hoofdforums als de optie “subforum in legenda van hoofdforums weergeven” is ingeschakeld.',
	'LIST_SUBFORUMS'			=> 'Subforums weergeven in de legenda',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'De subforums van dit forum weergeven op de index en op andere plekken als een link binnen de legenda als de optie “subforum in legenda van hoofdforums weergeven” is ingeschakeld.',
	'LOCKED'					=> 'Gesloten',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Het forum, dat u geselecteerd heeft om berichten naar toe te verplaatsten, kunnen geen berichten in geplaatst worden. Selecteer een ander forum waar u wel berichten in kunt plaatsen.',
	'MOVE_POSTS_TO'					=> 'Berichten verplaatsen naar',
	'MOVE_SUBFORUMS_TO'				=> 'Subforums verplaatsen naar',

	'NO_DESTINATION_FORUM'			=> 'U heeft geen forum opgegeven om de inhoud naar toe te verplaatsen.',
	'NO_FORUM_ACTION'				=> 'Er is geen actie opgegeven van wat er moet gebeuren met de foruminhoud.',
	'NO_PARENT'						=> 'Geen hoofdforum',
	'NO_PERMISSIONS'				=> 'Permissies niet kopiëren',
	'NO_PERMISSION_FORUM_ADD'		=> 'U heeft niet de benodigde permissies om forums toe te voegen.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'U heeft niet de benodigde permissies om forums te verwijderen.',

	'PARENT_IS_LINK_FORUM'		=> 'Het hoofdforum dat u heeft geselecteerd is een forumlink. Een forumlink kan geen andere forums bevatten, selecteer een categorie of een forum als een hoofdforum.',
	'PARENT_NOT_EXIST'			=> 'Hoofdforum bestaat niet.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Mededelingen opschonen',
	'PRUNE_STICKY'				=> 'Stickies opschonen',
	'PRUNE_OLD_POLLS'			=> 'Oude peilingen opschonen',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Verwijderd onderwerpen met peilingen waarin nog niet is gestemd geduurdende de berichtleeftijd.',

	'REDIRECT_ACL'	=> 'U kunt nu de %spermissies in te stellen%s voor dit forum.',

	'SYNC_IN_PROGRESS'			=> 'Forum synchroniseren',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Momenteel wordt onderwerp %1$d tot %2$d gehersynchroniseerd.',

	'TYPE_CAT'			=> 'Categorie',
	'TYPE_FORUM'		=> 'Forum',
	'TYPE_LINK'			=> 'Link',

	'UNLOCKED'			=> 'Open',
));

?>