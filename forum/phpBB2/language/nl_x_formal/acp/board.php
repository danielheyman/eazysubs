<?php
/**
*
* acp_board [Dutch]
*
* @package language
* @version $Id: board.php 330 2010-11-14 22:15:21Z Raimon $
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Hier kunt u de basisinstellingen van uw forum bepalen, geef het een gepaste naam en beschrijving, pas samen met de andere instellingen bijvoorbeeld de standaard waarden aan voor de tijdszone en de taal.',
	'CUSTOM_DATEFORMAT'				=> 'Aangepast…',
	'DEFAULT_DATE_FORMAT'			=> 'Datumformaat',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Het datumformaat is hetzelfde als de PHP-<code>date</code> functie.',
	'DEFAULT_LANGUAGE'				=> 'Standaardtaal',
	'DEFAULT_STYLE'					=> 'Standaardstijl',
	'DISABLE_BOARD'					=> 'Forum uitschakelen',
	'DISABLE_BOARD_EXPLAIN'			=> 'Dit zal het forum onbereikbaar maken voor gebruikers. U kunt ook een kort (255 tekens) bericht laten weergeven als u dat wilt.',
	'OVERRIDE_STYLE'				=> 'Gebruikerstijl overschrijven',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Vervangt de gebruiksstijl met de standaardstijl.',
	'SITE_DESC'						=> 'Sitebeschrijving',
	'SITE_NAME'						=> 'Sitenaam',
	'SYSTEM_DST'					=> 'Zomertijd inschakelen',
	'SYSTEM_TIMEZONE'               => 'Tijdzone voor gasten',
	'SYSTEM_TIMEZONE_EXPLAIN'       => 'De tijdzone die gebruikt wordt voor de tijd te laten weergeven aan gebruikers die niet zijn aangemeld (gasten, bots). Aangemelde gebruikers kunnen hun tijdzone tijdens de registratie wijzigen in het gebruikerspaneel.',
	'WARNINGS_EXPIRE'				=> 'Waarschuwingsduur',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Aantal dagen wanneer de waarschuwing zal verlopen, de gebruikerswaarschuwing zal dan automatisch worden verwijderd.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Hier kunt u diverse forumfuncties in-/uitschakelen.',

	'ALLOW_ATTACHMENTS'			=> 'Bijlagen toestaan',
	'ALLOW_BIRTHDAYS'			=> 'Verjaardagen toestaan',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Verjaardagen toestaan zodat ze kunnen worden ingevoerd, en dat de leeftijd wordt weergegeven in de profielen. Vergeet niet dat de verjaardagslijst op de forumindex wordt beheerd door een apparte laadinstelling.',
	'ALLOW_BOOKMARKS'			=> 'Bladwijzer van onderwerpen toestaan',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Gebruiker is in staat om persoonlijke bladwijzers op te slaan.',
	'ALLOW_BBCODE'				=> 'BBCode toestaan',
	'ALLOW_FORUM_NOTIFY'		=> 'Forumabonnementen toestaan',
	'ALLOW_NAME_CHANGE'			=> 'Veranderen van gebruikersnaam toestaan',
	'ALLOW_NO_CENSORS'			=> 'Uitschakelen van woordcensuur toestaan',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Gebruikers kunnen kiezen of ze de automatische woordcensuur voor berichten en privéberichten willen uitschakelen.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Bijlagen in privéberichten toestaan',
	'ALLOW_PM_REPORT'			=> 'Het melden van privéberichten door gebruikers toestaan',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'Als deze instelling is ingeschakeld, hebben de gebruikers de optie om een privébericht te melden die ze hebben ontvangen, of ze kunnen die naar de forummoderators sturen. Deze privéberichten zullen dan zichtbaar worden in het Moderatorpaneel.',
	'ALLOW_QUICK_REPLY'			=> 'Snelle reactie toestaan',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'Met deze instelling kunt u de snelle reactie volledig uitschakelen op het forum. Wanneer het is ingeschakeld, zullen de forum gespecificeerde instellingen worden gebruikt om te bepalen of de snelle reactie moet worden weergegeven in een forum.',
	'ALLOW_QUICK_REPLY_BUTTON'  => 'Versturen en snelle reactie inschakelen in alle forums',
	'ALLOW_SIG'					=> 'Onderschriften toestaan',
	'ALLOW_SIG_BBCODE'			=> 'BBCode in onderschriften toestaan',
	'ALLOW_SIG_FLASH'			=> 'De <code>[FLASH]</code> BBCode-tag in gebruikersonderschriften toestaan',
	'ALLOW_SIG_IMG'				=> 'De <code>[IMG]</code> BBCode-tag in gebruikersonderschriften toestaan',
	'ALLOW_SIG_LINKS'			=> 'Hyperlinks in gebruikersonderschriften toestaan',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Indien de <code>[URL]</code> BBCode-tag is uitgeschakeld, zijn automatisch/magic URLs ook uitgeschakeld.',
	'ALLOW_SIG_SMILIES'			=> 'Smileys in gebruikersonderschrift toestaan',
	'ALLOW_SMILIES'				=> 'Smileys toestaan',
	'ALLOW_TOPIC_NOTIFY'		=> 'Onderwerpabonnementen toestaan',
	'BOARD_PM'					=> 'Privéberichten',
	'BOARD_PM_EXPLAIN'			=> 'Privéberichten inschakelen voor alle gebruikers.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Avatars zijn kleine, unieke afbeeldingen die gebruikers met zichzelf kunnen associëren. Gebruikelijk worden ze onder de gebruikersnaam weergegeven bij het bekijken van onderwerpen, maar dit is afhankelijk van de forumstijl. Hier kunt u bepalen hoe gebruikers hun avatar kunnen kiezen. Let op: om avatars te kunnen uploaden moet u een map maken die u hieronder instelt, en wees er zeker van dat het kan worden beschreven door de web-server. Ook is het limiet op de bestandsgrootte alleen van toepassing op geüploade avatars en niet op externe gelinkte afbeeldingen.',

	'ALLOW_AVATARS'					=> 'Avatars toestaan',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Algemeen gebruik van avatars toestaan.<br />Als u het algemeen gebruik van avatars of avatars van een bepaalde soort uitschakelt, dan zullen de uitgeschakelde avatars niet meer weergegeven worden op het forum, maar gebruikers kunnen dan nog steeds hun eigen avatars downloaden in het gebruikerspaneel.',
	'ALLOW_LOCAL'					=> 'Avatar-galerij inschakelen',
	'ALLOW_REMOTE'					=> 'Externe avatars toestaan',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Avatars die worden gelinkt vanaf een andere website.',
	'ALLOW_REMOTE_UPLOAD'			=> 'Uploaden van externe avatar toestaan',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Het toestaan van het uploaden van avatars vanaf een andere website.',
	'ALLOW_UPLOAD'					=> 'Geüploade avatars toestaan',
	'AVATAR_GALLERY_PATH'			=> 'Avatar-galerijpad',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Het pad onder uw phpBB-hoofddirectory voor vooringestelde afbeeldingen, bijvoorbeeld; <samp>images/avatars/gallery</samp>.',
	'AVATAR_STORAGE_PATH'			=> 'Avatar-opslagpad',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Het pad onder uw phpBB-hoofdirectory, bijvoorbeeld; <samp>images/avatars/upload</samp>.',
	'MAX_AVATAR_SIZE'				=> 'Maximale avatar-grootte',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Breedte x hoogte in pixels.',
	'MAX_FILESIZE'					=> 'Maximale avatar-bestandsgrootte',
	'MAX_FILESIZE_EXPLAIN'			=> 'Voor geüploade avatar-bestanden.',
	'MIN_AVATAR_SIZE'				=> 'Minimale avatar-grootte',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Breedte x hoogte in pixels.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Hier kunt u alle standaard instellingen voor privéberichten instellen.',

	'ALLOW_BBCODE_PM'			=> 'BBCode in privéberichten toestaan',
	'ALLOW_FLASH_PM'			=> '<code>[FLASH]</code> BBCode-tag toestaan',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Vergeet niet dat de mogelijkheid om flash te gebruiken in privéberichten, ook al als het hier is ingeschakeld, afhankelijk is van de permissies.',
	'ALLOW_FORWARD_PM'			=> 'Doorsturen van privéberichten toestaan',
	'ALLOW_IMG_PM'				=> '<code>[IMG]</code> BBCode-tag toestaan',
	'ALLOW_MASS_PM'				=> 'Versturen van privéberichten naar meerdere gebruikers en groepen toestaan',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'Versturen naar groepen kan ingesteld worden per groep, in de groepsinstellingen-pagina.',
	'ALLOW_PRINT_PM'			=> 'Afdrukken van privéberichten toestaan',
	'ALLOW_QUOTE_PM'			=> 'Citaten in privéberichten toestaan',
	'ALLOW_SIG_PM'				=> 'Onderschriften in privéberichten toestaan',
	'ALLOW_SMILIES_PM'			=> 'Smileys in privéberichten toestaan',
	'BOXES_LIMIT'				=> 'Maximaal aantal privéberichten per postvak',
	'BOXES_LIMIT_EXPLAIN'		=> 'Gebruikers mogen niet meer ontvangen dan deze hoeveelheid berichten in hun postvak. Stel deze waarde in op 0 om een onbeperkt aantal privéberichten toe te staan.',
	'BOXES_MAX'					=> 'Maximaal aantal privéberichtenmappen',
	'BOXES_MAX_EXPLAIN'			=> 'Standaard gebruikers mogen zoveel personlijke mappen aanmaken voor privéberichten.',
	'ENABLE_PM_ICONS'			=> 'Onderwerppictogrammen in privéberichten inschakelen',
	'FULL_FOLDER_ACTION'		=> 'Standaardactie bij volle map',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Standaard actie die wordt genomen wanneer een gebruikersmap vol is, in de veronderstelling dat de gebruikersmapactie is ingesteld, of niet toepasbaar is. De enige uitzondering is voor de “Verzonden berichten”-map waar de standaard actie altijd is om oude berichten te verwijderen.',
	'HOLD_NEW_MESSAGES'			=> 'Nieuwe berichten tegenhouden',
	'PM_EDIT_TIME'				=> 'Wijzigingstijd voor privéberichten',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Beperkt de tijd die beschikbaar is om privéberichten te wijzigen die nog niet zijn afgeleverd. Stel deze waarde in op 0 om dit gedrag uitteschakelen.',
	'PM_MAX_RECIPIENTS'			=> 'Maximaal aantal toegestaande ontvangers',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'Het maximaal aantal van toegestaande ontvangers in een privébericht. Als de 0 is ingevoerd is een onbeperkt aantal toegestaan. Deze instelling kan worden aangepast voor elke groep in de groepsinstellingen pagina.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Hier kunt u alle standaard instellingen voor het plaatsen van berichten instellen.',
	'ALLOW_POST_LINKS'					=> 'Links in gewone en in privéberichten toestaan',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Wanneer de <code>[URL]</code> BBCode-tag is uitgeschakeld, zijn automatische/magische links ook uitgeschakeld.',
	'ALLOW_POST_FLASH'					=> 'Het gebruik van de <code>[FLASH]</code> BBCode-tag in berichten toestaan',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Wanneer de <code>[FLASH]</code> BBCode-tag is uitgeschakeld, is het ook uitgeschakeld in berichten. Anders controleert het permissiesysteem welke gebruiker de <code>[FLASH]</code> BBCode-tag kan gebruiken.',

	'BUMP_INTERVAL'					=> 'Tijd voor het omhooghalen van een bericht',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Aantal minuten, uren of dagen tussen het laatste bericht in een onderwerp en de mogelijkheid om het onderwerp opnieuw onder de aandacht te brengen. Door de waarde op 0 in te stellen schakelt u deze functie uit.',
	'CHAR_LIMIT'					=> 'Maximaal aantal tekens per bericht',
	'CHAR_LIMIT_EXPLAIN'			=> 'Het aantal tekens dat is toegestaan in een bericht/privébericht. Stel dit in op 0 voor onbeperkt aantal tekens.',
	'DELETE_TIME'					=> 'Verwijderingstijd beperken',
	'DELETE_TIME_EXPLAIN'			=> 'Beperkt de tijd die beschikbaar is om een nieuw bericht te verwijderen. Door de waarde op 0 in te stellen schakelt u deze functie uit.',
	'DISPLAY_LAST_EDITED'			=> 'Laatste bewerkingstijd informatie weergeven',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Kies of de laatst gewijzigd door informatie moeten worden weergegeven in berichten.',
	'EDIT_TIME'						=> 'Wijzigingstijd beperken',
	'EDIT_TIME_EXPLAIN'				=> 'Beperkt de tijd die beschikbaar is om een nieuw bericht te wijzigen. Door de waarde op 0 in te stellen schakelt u deze functie uit.',
	'FLOOD_INTERVAL'				=> 'Tijd tussen berichten',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Aantal seconden dat een gebruiker moet wachten tussen het plaatsten van nieuwe berichten. Om gebruikers deze optie te laten negeren, past u hun permissies aan.',
	'HOT_THRESHOLD'					=> 'Aantal berichten voor een populair onderwerp',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Aantal berichten per onderwerp dat nodig is om de populair-status te bereiken. Door de waarde op 0 in te stellen schakelt u deze functie uit.',
	'MAX_POLL_OPTIONS'				=> 'Maximaal aantal peilingopties ',
	'MAX_POST_FONT_SIZE'			=> 'Maximale lettergrootte per bericht',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Maximale lettergrootte dat is toegestaan in een bericht. Stel dit in op 0 voor een onbeperkte lettergrootte.',
	'MAX_POST_IMG_HEIGHT'			=> 'Maximale afbeeldingshoogte per bericht',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Maximale hoogte van een afbeelding/flashbestand in berichten. Stel dit in op 0 voor een onbeperkte grootte.',
	'MAX_POST_IMG_WIDTH'			=> 'Maximale afbeeldingsgrootte per bericht',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Maximale breedte van een afbeelding/flashbestand in berichten. Stel dit in op 0 voor een onbeperkte grootte.',
	'MAX_POST_URLS'					=> 'Maximaal aantal links per bericht',
	'MAX_POST_URLS_EXPLAIN'			=> 'Maximaal aantal URLs in een bericht. Stel dit in op 0 voor een onbeperkt aantal links.',
	'MIN_CHAR_LIMIT'				=> 'Minimaal aantal tekens per bericht',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'Het minimale aantal tekens dat een gebruiker moet invoeren om een bericht/privébericht te plaatsen.',
	'POSTING'						=> 'Berichten',
	'POSTS_PER_PAGE'				=> 'Berichten per pagina',
	'QUOTE_DEPTH_LIMIT'				=> 'Maximum in elkaar geplaatste citaten',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Maximaal in elkaar geplaatste citaten in een bericht. Stel dit in op 0 voor een onbeperkte diepte.',
	'SMILIES_LIMIT'					=> 'Maximaal aantal smileys per bericht',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Maximaal aantal smileys in een bericht. Stel dit in op 0 voor een onbeperkt aantal smileys.',
	'SMILIES_PER_PAGE'				=> 'Smileys per pagina',
	'TOPICS_PER_PAGE'				=> 'Onderwerpen per pagina',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Hier kunt u alle standaard instellingen voor onderschriften instellen.',

	'MAX_SIG_FONT_SIZE'				=> 'Maximale lettergrootte in een onderschrift',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Maximale lettergrootte dat is toegestaan in een gebruikersonderschriften. Stel dit in op 0 voor een onbeperkte grootte.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Maximale afbeeldingshoogte in een onderschrift',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Maximale hoogte van een afbeelding/flashbestand in gebruikersonderschriften. Stel dit in op 0 voor een onbeperkte hoogte.',
	'MAX_SIG_IMG_WIDTH'				=> 'Maximale afbeeldingsbreedte in onderschrift',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Maximale breedte van een afbeelding/flashbestand in gebruikersonderschriften. Stel dit in op 0 voor een onbeperkte breedte.',
	'MAX_SIG_LENGTH'				=> 'Maximale lengte van een onderschrift',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Maximaal aantal tekens in gebruikersonderschriften.',
	'MAX_SIG_SMILIES'				=> 'Maximaal aantal smileys per onderschrift',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Maximaal aantal smileys die zijn toegestaan in gebruikersonderschriften. Stel dit in op 0 voor een onbeperkt aantal smileys.',
	'MAX_SIG_URLS'					=> 'Maximaal aantal links in een onderschrift',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Maximaal aantal links in gebruikersonderschriften. Stel dit in op 0 voor een onbeperkt aantal links.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Hier kunt u registratie en profiel gerelateerde instellingen instellen.',

	'ACC_ACTIVATION'				=> 'Accountactivatie',
	'ACC_ACTIVATION_EXPLAIN'		=> 'Dit bepaalt of gebruikers direct toegang hebben tot het forum, of dat het gebruikersaccount eerst geactiveerd moet worden. Het is ook mogelijk om nieuwe registraties uit te schakelen.',
	'NEW_MEMBER_POST_LIMIT'			=> 'Berichtlimiet voor nieuwe leden',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'Nieuwe leden worden geplaats in de <em>Pas geregistreerde gebruikers</em>groep totdat ze dit aantal berichten bereiken. U kunt deze groep gebruiken om te voorkomen dat ze het PB-systeem kunnen gebruiken of dat u hun berichten eerst wilt herzien. <strong>Een waarde van 0 zal deze functie uitschakelen.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'Nieuwe geregistreerde gebruikersgroep instellen als standaard',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'Als dit is ingesteld op ja en het berichtlimiet voor nieuwe leden is opgegeven, dan zullen ze niet alleen worden toegevoegd aan de <em>Pas geregistreerde gebruikers</em>groep, maar dan zal deze groep ook hun standaard groep worden. Dit kan handig zijn als u een standaard rang en/of avatar wilt toewijzen aan een groep, die zullen dan worden overgenomen door de gebruiker.',

	'ACC_ADMIN'					=> 'Door beheerder',
	'ACC_DISABLE'				=> 'Uitschakelen',
	'ACC_NONE'					=> 'Geen',
	'ACC_USER'					=> 'Door gebruiker',
//	'ACC_USER_ADMIN'			=> 'Gebruiker + Beheerder',
	'ALLOW_EMAIL_REUSE'			=> 'Hergebruik van e-mailadressen toestaan',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Verschillende gebruikers kunnen zich registreren met hetzelfde e-mailadres.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA-faxnummer',
	'COPPA_MAIL'				=> 'COPPA-e-mailadres',
	'COPPA_MAIL_EXPLAIN'		=> 'Dit is het e-mailadres waar ouders het COPPA-registratieforumulier naar toe kunnen sturen.',
	'ENABLE_COPPA'				=> 'COPPA inschakelen',
	'ENABLE_COPPA_EXPLAIN'		=> 'Dit vereist gebruikers op te geven of ze 13 jaar of ouder zijn voor de U.S. COPPA-wet. Als u dit uitschakelt zullen de specifieke COPPA-groepen niet meer worden weergegeven.',
	'MAX_CHARS'					=> 'Maximaal',
	'MIN_CHARS'					=> 'Minimaal',
	'NO_AUTH_PLUGIN'			=> 'Er is geen geschikte authenticatie-plug-in gevonden.',
	'PASSWORD_LENGTH'			=> 'Wachtwoordlengte',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Minimaal en maximaal aantal tekens in wachtwoorden.',
	'REG_LIMIT'					=> 'Registratiepogingen',
	'REG_LIMIT_EXPLAIN'			=> 'Aantal pogingen die gebruikers kunnen maken om de anti-spambot taak op te lossen voordat ze uitgesloten worden voor de sessie.',
	'USERNAME_ALPHA_ONLY'		=> 'Alleen alfanumeriek',
	'USERNAME_ALPHA_SPACERS'	=> 'Alfanumeriek en spaties',
	'USERNAME_ASCII'			=> 'ASCII-tekens (geen internationale Unicode)',
	'USERNAME_LETTER_NUM'		=> 'Alle letters en nummers',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Alle letters, nummers en spaties',
	'USERNAME_CHARS'			=> 'Tekens in gebruikersnaam beperken',
	'USERNAME_CHARS_ANY'		=> 'Elk teken',
	'USERNAME_CHARS_EXPLAIN'	=> 'Bepaald welk type tekens er mogen gebruikt worden in gebruikersnamen, scheidingstekens zijn: spatie, -, +, _, [ en ].',
	'USERNAME_LENGTH'			=> 'Gebruikersnaamlengte',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Minimaal en maximaal aantal tekens in gebruikersnamen.',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'Algemene feeds-instellingen',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'Deze module maakt diverse ATOM-feeds beschikbaar, het zal de BBCodes in berichten zo verwerken dat het gelezen kan worden door externe feeds.',

	'ACP_FEED_GENERAL'					=> 'Algemene feed-instellingen',
	'ACP_FEED_POST_BASED'				=> 'Bericht-gebaseerde feed-instellingen',
	'ACP_FEED_TOPIC_BASED'				=> 'Onderwerp-gebaseerde feed-instellingen',
	'ACP_FEED_SETTINGS_OTHER'			=> 'Andere feeds en instellingen',

	'ACP_FEED_ENABLE'					=> 'Feeds inschakelen',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'Dit zal de ATOM-feeds voor heel het forum in- of uitschakelen.<br />Wanneer u dit uitschakelt zal het alle feeds uitschakelen, het maakt niet uit hoe de opties hieronder zijn ingestelt.',
	'ACP_FEED_LIMIT'					=> 'Aantal items',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'Het maximaal aantal feed-items die kunnen worden weergegeven.',

	'ACP_FEED_OVERALL'					=> 'Algemene feed inschakelen',
	'ACP_FEED_OVERALL_EXPLAIN'			=> 'Nieuwe berichten van alle forums.',
	'ACP_FEED_FORUM'					=> 'Feeds per forum inschakelen',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Nieuwe berichten van één enkel forum en subforums.',
	'ACP_FEED_TOPIC'					=> 'Feeds per onderwerp inschakelen',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Nieuwe berichten van één enkel onderwerp.',

	'ACP_FEED_TOPICS_NEW'				=> 'Nieuwe onderwerpen-feed inschakelen',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> 'Dit zal de “Nieuwe onderwerpen”-feed inschakelen, deze zal de laatste aangemaakte onderwerpen inclusief het eerste bericht weergeven.',
	'ACP_FEED_TOPICS_ACTIVE'			=> 'Actieve onderwerpen-feed inschakelen',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> 'Dit zal de “Actieve onderwerpen”-feed inschakelen, deze zal de laatst actieve onderwerpen inclusief het laatste bericht weergeven.',
	'ACP_FEED_NEWS'						=> 'Nieuws-feed',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'Dit zal het eerste bericht van deze forums ophalen. Selecteer geen forums om de nieuws-feed uit te schakelen.<br />Selecteer meerdere forums door de <samp>CTRL</samp>-knop in te houden en vervolgens op de forumnaam te klikken.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'Forums-feed inschakelen',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Dit zal de “Alle forums”-feed inschakelen, dat er voor zorgt dat er een lijst van forums wordt weergegeven.',
	
	'ACP_FEED_HTTP_AUTH'				=> 'HTTP-authenticatie toestaan',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> 'Schakelt de HTTP-authenticatie in, welke toestaat om gebruikers inhoud te laten ontvangen die normaal verborgen zijn voor gastgebruikers, door de <samp>auth=http</samp> parameter toe te voegen aan de feed-URL. Vergeet niet dat bij sommige PHP-installaties extra wijzigingen nodig zijn in het .htaccess-bestand. Instructies daarover kunnen worden gevonden in dat bestand.',
	'ACP_FEED_ITEM_STATISTICS'			=> 'Itemstatistieken',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Dit zal individuele statistieken onder feed-items weergeven<br />(bijvoorbeeld: Geplaatst door, datum en tijd, reacties, bekeken)',
	'ACP_FEED_EXCLUDE_ID'				=> 'Deze forums uitsluiten',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'De inhoud van deze forums zullen <strong>niet worden opgenomen in de feeds</strong>. Selecteer geen forum om alle data van alle forums te laten opnemen in de feeds.<br />Selecteer meerdere forums door de <samp>CTRL</samp>-knop in te houden en vervolgens op de forumnaam te klikken.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
    'ACP_VC_SETTINGS_EXPLAIN'				=> 'Hier kunt u de plug-ins selecteren en configureren, welke zijn ontworpen om formulieren die automatisch worden verstuurt door spambots te blokeren. Deze plug-ins werken door de gebruiker uit te dagen om een <em>CAPTCHA</em> op te lossen, dat is een test die erg moeilijk op te lossen is voor computers.',
	'AVAILABLE_CAPTCHAS'					=> 'Beschikbare plug-ins',
	'CAPTCHA_UNAVAILABLE'					=> 'De plug-in kan niet worden geselecteerd, omdat de benodigheden om de plug-in te draaien niet aanwezig zijn.',
	'CAPTCHA_GD'							=> 'GD-afbeelding',
	'CAPTCHA_GD_3D'							=> 'GD-3D-afbeelding',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'Voorgrondruis',
	'CAPTCHA_GD_EXPLAIN'					=> 'Gebruikt GD om de anti-spambot afbeelding moeilijker te maken.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Gebruikt voorgrondruis om de afbeelding moeilijker te maken.',
	'CAPTCHA_GD_X_GRID'						=> 'X-as achtergrondruis',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Gebruik lage instellingen van dit om de afbeelding moeilijker te maken. 0 zal de x-as achtergrondruis uitschakelen.',
	'CAPTCHA_GD_Y_GRID'						=> 'Y-as achtergrondruis',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Gebruik lage instellingen van dit om de afbeelding moeilijker te maken. 0 zal de y-as achtergrondruis uitschakelen.',
	'CAPTCHA_GD_WAVE'						=> 'Golfvervorming',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'Dit voegt een golfvervorming toe aan de afbeelding.',
	'CAPTCHA_GD_3D_NOISE'					=> '3D-ruis objecten toevoegen',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'Dit voegt aanvullende objecten toe over de letters op de afbeelding.',
	'CAPTCHA_GD_FONTS'						=> 'Verschillende lettertypes gebruiken',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'Deze instelling controleert hoeveel verschilende letters en vormen er gebruikt worden. U kunt gewoon de standaard vormen gebruiken of aangepaste letters introduceren. Toevoegen van kleine letters is ook mogelijk.',
	'CAPTCHA_FONT_DEFAULT'					=> 'Standaard',
	'CAPTCHA_FONT_NEW'						=> 'Nieuwe vormen',
	'CAPTCHA_FONT_LOWER'					=> 'Ook kleine letters gebruiken',
	'CAPTCHA_NO_GD'							=> 'Eenvoudige afbeelding',
	'CAPTCHA_PREVIEW_MSG'					=> 'Uw wijzigingen zijn nog niet opgeslagen, dit is enkel een voorbeeld.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'De plug-in zal op dit voorbeeld lijken wanneer u de huidige selectie gebruikt.',

	'CAPTCHA_SELECT'						=> 'Geïnstalleerde plug-ins',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'De dropdown bevat de plug-ins die herkend worden door het forum. De namen die een grijze tekstkleur hebben zijn op het moment niet beschikbaar en moeten nog correct geconfigureerd worden voordat ze gebruikt kunnen worden.',
	'CAPTCHA_CONFIGURE'						=> 'Plug-ins configureren',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'Wijzig de instellingen voor de geselecteerde plug-in.',
	'CONFIGURE'								=> 'Configureren',
	'CAPTCHA_NO_OPTIONS'					=> 'Deze plug-in heeft geen configuratie opties.',

	'VISUAL_CONFIRM_POST'					=> 'Spambot tegenmaatregelen voor gastberichten inschakelen',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Verplicht gebruikers om eerst de anti-spambot taak op te lossen, dit kan helpen om automatisch plaatsen van berichten te voorkomen.',
	'VISUAL_CONFIRM_REG'					=> 'Spambot tegenmaatregelen voor registraties inschakelen',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Verplicht nieuwe gebruikers om de anti-spambot taak op te lossen, dit kan helpen om automatische registraties te voorkomen.',
	'VISUAL_CONFIRM_REFRESH'				=> 'Toestaan dat gebruikers de anti-spambot taak kunnen vernieuwen', // taak?
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'Sta toe dat gebruikers een nieuwe anti-spambot taak kunnen aanvragen wanneer ze tijdens de registratie de huidige taak niet krijgen opgelost. Het is mogelijk dat sommige plug-ins deze optie niet ondersteunen.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'De details bepalen de data die wordt gebruikt om cookies te versturen naar de gebruikers-browsers. In de meeste gevallen zijn de standaard waarden voor de cookie-instellingen meer als voldoende. Als u ze moet wijzigen, doe dit dan met zorg, verkeerde instellingen kunnen er namelijk voor zorgen dat gebruikers zich niet meer kunnen aanmelden.',

	'COOKIE_DOMAIN'				=> 'Cookie-domein',
	'COOKIE_NAME'				=> 'Cookie-naam',
	'COOKIE_PATH'				=> 'Cookie-pad',
	'COOKIE_SECURE'				=> 'Cookie-beveiliging',
	'COOKIE_SECURE_EXPLAIN'		=> 'Als uw server gebruikt maakt van SSL, kunt u deze optie inschakelen, anders kunt u deze optie gewoon uitgeschakeld laten staat. Als u dit hebt ingeschakelt en u maakt geen gebruik van SSL, zal het resulteren in server-fouten tijdens doorverwijzingen.',
	'ONLINE_LENGTH'				=> 'Wie is er online-tijd',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Na deze tijd in minuten, zullen inactieve gebruikers niet worden weergegeven in de “wie is online”-lijst. Hoe hoger de waarde is, hoe meer kracht er nodig is van de server om deze lijst te genereren.',
	'SESSION_LENGTH'			=> 'Sessielengte',
	'SESSION_LENGTH_EXPLAIN'	=> 'Sessies zullen verlopen na deze tijd, in seconden.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Hier kunt u enkele forumfuncties in/-uitschakelen, om de laadtijd te verkorten. Bij de meeste servers is het niet nodig deze opties uit te schakelen. Maar bij sommige systemen of op shared hosting servers is het echter beter om functies uit te schakelen die u niet nodig heeft. U kunt ook een bepaalde beperking opgeven voor de serverbelasting en het aantal actieve sessies voordat het forum offline gaat.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Aangepaste profielvelden',
	'LIMIT_LOAD'					=> 'Systeembelasting beperken',
	'LIMIT_LOAD_EXPLAIN'			=> 'Als de gemiddelde 1 minuut systeembelasting deze waarde overschrijft dan zal het forum automatisch offline gaan. Een waarde van 1.0 komt overeen met het gebruik van ~100% van één processor. Deze functie werkt alleen op UNIX gebaseerde servers en waar deze informatie toegankelijk is. Deze waarde hersteld zichzelf naar 0 als phpBB niet in staat is om het ladingslimiet te achterhalen.',
	'LIMIT_SESSIONS'				=> 'Sessies beperken',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Wanneer het aantal sessies langer is dan deze waarden binnen één minuut periode zal het forum offline gaan. Stel dit in op 0 voor onbeperkte sessies.',
	'LOAD_CPF_MEMBERLIST'			=> 'Weergave van aangepaste profielvelden in ledenlijst van stijlen toestaan',
	'LOAD_CPF_VIEWPROFILE'			=> 'Aangepaste profielvelden in gebruikersprofielen weergeven',
	'LOAD_CPF_VIEWTOPIC'			=> 'Aangepaste profielvelden in onderwerppagina’s weergeven',
	'LOAD_USER_ACTIVITY'			=> 'Gebruikersactiviteit weergeven',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Weergeeft actieve onderwerp/forum in het gebruikersprofiel en in het gebruikerspaneel. Het is aangeraden bij forums met meer dan één miljoen berichten om deze functie uit te schakelen.',
	'RECOMPILE_STYLES'				=> 'Hercompileer oude stijl-componenten',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Controleert op gewijzigde stijl-componenten op het bestandssysteem en hercompileert deze.',
	'YES_ANON_READ_MARKING'			=> 'Onderwerpmarkering voor gasten inschakelen',
	'YES_ANON_READ_MARKING_EXPLAIN' => 'Slaat de gelezen/ongelezen statusinformatie op voor gasten. Wanneer het is uitgeschakeld zullen berichten altijd gemarkeerd zijn als gelezen voor gasten.',	
	'YES_BIRTHDAYS'					=> 'Verjaardagslijst inschakelen',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Indien uitgeschakeld, zal de verjaardagslijst niet meer worden weergegeven. Om deze instelling correct te laten werken moet de verjaardagsfunctie ook ingeschakeld zijn.',
	'YES_JUMPBOX'					=> 'Weergave van de jumpbox inschakelen',
	'YES_MODERATORS'				=> 'Weergave van moderators inschakelen',
	'YES_ONLINE'					=> 'Online gebruikerslijst inschakelen',
	'YES_ONLINE_EXPLAIN'			=> 'Weergeeft online gebruikersinformatie op de index, forum en onderwerppagina´s.',
	'YES_ONLINE_GUESTS'				=> 'Online gastenlijst in viewonline inschakelen',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Weergave van gast gebruikersinformatie in viewonline toestaan.',
	'YES_ONLINE_TRACK'				=> 'Weergave van de gebruikers-online/offline-informatie inschakelen',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Weegeeft online-informatie voor gebruikers in de profielen en in de onderwerppagina´s.',
	'YES_POST_MARKING'				=> 'Aangestipte onderwerpen inschakelen',
	'YES_POST_MARKING_EXPLAIN'		=> 'Bepaald of de gebruiker een bericht heeft geplaatst in een onderwerp.',
	'YES_READ_MARKING'				=> 'Server onderwerpmarkering inschakelen',
	'YES_READ_MARKING_EXPLAIN'		=> 'Bewaard gelezen/ongelezen statusinformatie in de database in plaats van een cookie.',
	'YES_UNREAD_SEARCH'             => 'Zoeken voor ongelezen berichten inschakelen',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB ondersteunt authenticatie-plug-ins, of modules. Deze laten u bepalen hoe gebruikers zijn geauthenticeerd wanneer ze zich aanmelden op het forum. Standaard zijn er drie plug-ins meegeleverd; DB, LDAP en Apache. Niet alle methodes hebben de nodigde bijkomende informatie, dus vul alleen de velden in die relevant zijn voor de geselecteerde methode.',

	'AUTH_METHOD'				=> 'Een authenticatie-methode selecteren',

	'APACHE_SETUP_BEFORE_USE'	=> 'U moet eerst de apache-authenticatie installeren voordat u phpBB wijzigt naar deze authenticatie-methode. Vergeet niet dat de gebruikersnaam die gebruikt wordt voor deze apache-authenticatie dezelfde moet zijn als uw phpBB-gebruikersnaam. Apache-authenticatie kan alleen worden gebruikt met de mod_php (niet met een CGI-versie) en de safe_mode moet uitgeschakeld zijn.',

	'LDAP_DN'						=> 'LDAP-basis-<var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'Dit is de voornaam, waar de gebruikersinformatie in staat, bv; <samp>o=My Company,c=US</samp>.',
	'LDAP_EMAIL'					=> 'LDAP-e-mail-attribuut',
	'LDAP_EMAIL_EXPLAIN'			=> 'Stel dit in naar de naam die heeft u opgegeven van uw gebuiker e-mail-attribuut (als die bestaat) om automatisch het e-mailadres in te stellen voor nieuwe gebruikers. Als u dit leeg laat zal dit resulteren in een leeg e-mailadres voor gebruikers die de eerste keer zich aanmelden.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Verbinding naar de LDAP-server is mislukt met de opgegeven gebruikersnaam/wachtwoord.',
	'LDAP_NO_EMAIL'					=> 'De opgegeven e-mail-attribuut bestaan niet.',
	'LDAP_NO_IDENTITY'				=> 'Kon geen aanmeldingsidentiteit vinden voor %s.',
	'LDAP_PASSWORD'					=> 'LDAP-wachtwoord',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Laat dit leeg als je gebruik maakt van gasttoegang. Anders vult u het wachtwoord in voor de bovengenoemde gebruiker. Dit is nodig voor Aktieve Directory Servers.<br /><em><strong>Waarschuwing:</strong> Dit wachtwoord wordt opgeslagen als normale tekst in de database, en is zichtbaar voor iedereen die toegang heeft tot de database of wie deze configuratiepagina kan bekijken.</em>',
	'LDAP_PORT'						=> 'LDAP-serverpoort',
	'LDAP_PORT_EXPLAIN'				=> 'Optioneel kunt u een poort opgeven die gebruikt moet worden om een verbinding te leggen naar de LDAP-server inplaats van de standaard poort 389.',
	'LDAP_SERVER'					=> 'LDAP-servernaam',
	'LDAP_SERVER_EXPLAIN'			=> 'Als u LDAP gebruikt, is dit de hostnaam of het IP-adres van de LDAP-server. Als alternatief kunt u ook een URL opgeven zoals ldap://hostname:port/',
	'LDAP_UID'						=> 'LDAP-<var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'Dit is de code om te zoeken voor de opgegeven aanmeldingsidentiteit, b.v; <var>uid</var>, <var>sn</var>, etc.',
	'LDAP_USER'						=> 'LDAP-gebruiker-<var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Laat dit leeg als u gebruik maakt van gasttoegang. Als het ingevuld is, zal phpBB proberen met de opgegeven LDAP-gebruikersnaam zich aan te melden om vervolgens de correcte gebruiker te vinden, bijvoorbeeld; <samp>uid=Username,ou=MyUnit,o=MyCompany,c=US</samp>. Wat nodig is voor Aktieve Directory Servers.',
	'LDAP_USER_FILTER'				=> 'LDAP-gebruikersfilter',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Optioneel kunt u de verdere gezochten objecten beperken met bijkomende filters. Bijvoorbeeld: <samp>objectClass=posixGroup</samp> wat zal resulteren in het gebruik van <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Hier kunt u de server en domein gerelateerde instellingen opgeven. Zorg ervoor dat de data die u invoert correct is, fouten zullen anders resulteren in foutieve informatie in e-mailberichten. Wanneer u de domeinnaam invoert, vergeet niet dat het de http:// of een andere protocol term bij te voegen. Voer alleen een ander poortnummer in als u zeker weet dat uw server een andere waarde gebruikt, poort 80 is in de meeste gevallen de correcte poort.',

	'ENABLE_GZIP'				=> 'GZip-compressie inschakelen',
	'ENABLE_GZIP_EXPLAIN'		=> 'Gegenereerde inhoud zal worden eerst worden gecomprimeerd voordat het naar de gebruiker wordt verstuurd. Dit kan netwerk-verkeer verminderen, maar het zal het CPU-gebruik wel verhogen, beide op de server en de client zijn kant. Dit vereist dat de zlib-extensie in PHP is geladen.',
	'FORCE_SERVER_VARS'			=> 'Server-URL-instellingen verplichten',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Wanneer u dit instelt op ja, worden de vooraf opgegeven waarden gebruikt, in plaats van de automatische herkenden waarden.',
	'ICONS_PATH'				=> 'Berichtpictogrammen-opslagpad',
	'ICONS_PATH_EXPLAIN'		=> 'Het pad onder uw phpBB-hoofddirectory, bijvoorbeeld; <samp>images/icons</samp>.',
	'PATH_SETTINGS'				=> 'Pad-instellingen',
	'RANKS_PATH'				=> 'Rangafbeeldingen-opslagpad',
	'RANKS_PATH_EXPLAIN'		=> 'Het pad onder uw phpBB-hoofddirectory, bijvoorbeeld; <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Scriptpad',
	'SCRIPT_PATH_EXPLAIN'		=> 'Het pad waar phpBB in staat, relatief naar de domeinnaam, bijvoorbeeld <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Domeinnaam',
	'SERVER_NAME_EXPLAIN'		=> 'De domeinnaam waar dit forum op draait (bijvoorbeeld; <samp>www.voorbeeld.nl</samp>).',
	'SERVER_PORT'				=> 'Serverpoort',
	'SERVER_PORT_EXPLAIN'		=> 'De poort waarop uw server draait, normaal gesproken 80, verander het alleen als het anders moet zijn.',
	'SERVER_PROTOCOL'			=> 'Serverprotocol',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Dit wordt gebruikt als serverprotocol wanneer deze instellingen verplicht zijn. Als het leeg is of niet verplicht is wordt het protocol bepaald door de cookie-beveiligingsinstellingen (<samp>http://</samp> or <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Server-URL-instellingen',
	'SMILIES_PATH'				=> 'Smileys-opslagpad',
	'SMILIES_PATH_EXPLAIN'		=> 'Het pad onder uw phpBB-hoofddirectory, bijvoorbeeld; <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Extensie-groepspictogrammen-opslagpad',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Het pad onder uw phpBB-hoofddirectory, bijvoorbeeld; <samp>images/upload_icons</samp>.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Hier kunt u alle sessie en aanmeldings gerelateerde instellingen instellen.',

	'ALL'							=> 'Alles',
	'ALLOW_AUTOLOGIN'				=> 'Automatisch aanmelden toestaan',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Dit bepaald of gebruikers automatisch worden aangemeld wanneer ze het forum bezoeken.',
	'AUTOLOGIN_LENGTH'				=> 'Aanmeldingssleutel aflooplengte (in dagen)',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Aantal dagen nadat de aanmeldingssleutels worden verwijderd of stel dit in op 0 om dit uit te schakelen.',
	'BROWSER_VALID'					=> 'Browser controleren',
	'BROWSER_VALID_EXPLAIN'			=> 'Browser controle inschakelen voor elke sessie, om de veiligheid te verbeteren.',
	'CHECK_DNSBL'					=> 'IP-adres controleren of het voorkomt in de DNS zwarte lijst',
	'CHECK_DNSBL_EXPLAIN'			=> 'Als het ingeschakeld is, dan zullen IP-adressen van gebruikers eerst worden gecontroleerd tegen de volgende DNSBL-services op registratie en bij het plaatsen van een bericht: <a href="http://spamcop.net">spamcop.net</a> en <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Deze controle kan wel even duren afhankelijk van de serverconfiguratie. Als u vertraging hier mee opmerkt of als er veel positieve fouten gemeld worden, is het aangeraden om deze controle uit te schakelen.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'E-maildomein controleren voor een geldig MX-record',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Als het ingeschakeld is, zal tijdens de registratie en bij wijzigen van een profiel worden gecontroleerd of het domein een geldig MX-record bevat.',
	'FORCE_PASS_CHANGE'				=> 'Wachtwoord wijzigen verplichten',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Verlicht een gebruiker om hun wachtwoord na een aantal ingestelde dagen te wijzingen. Stel deze waarde in op 0 om dit gedrag uit te schakelen.',
	'FORM_TIME_MAX'					=> 'Maximale tijd om formulieren te versturen',
	'FORM_TIME_MAX_EXPLAIN'			=> 'De tijd die een gebruiker heeft om een formulier te versturen. Gebruik -1 om deze optie uit te schakelen. Vergeet niet dat het mogelijk is dat een formulier ongeldig word zodra de sessie is verlopen, het maakt dan niet uit hoe u deze instelling ook instelt.',
	'FORM_SID_GUESTS'				=> 'Formulieren verbinden aan gastsessies',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Als het ingeschakeld is, zal het formulier dat is toegewezen aan gasten sessie-exclusief worden. Dit kan problemen veroorzaken met sommige internetproviders.',
	'FORWARDED_FOR_VALID'			=> '<var>X_FORWARDED_FOR</var>-header controleren',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Sessies zullen alleen voortgezet worden wanneer de verzonden <var>X_FORWARDED_FOR</var>-header gelijk is met de vorige aanvraag. Verbanningen zullen ook gecontroleerd worden tegen IPs in <var>X_FORWARDED_FOR</var>.',
	'IP_VALID'						=> 'IP-sessie controleren',
	'IP_VALID_EXPLAIN'				=> 'Dit bepaald welk deel van het IP van de gebruikers worden gecontroleerd voor de sessiecontrole; <samp>Alle</samp> vergelijkt het volledige adres, <samp>A.B.C</samp> de eerste drie x.x.x, <samp>A.B</samp> de eerste x.x, <samp>Geen</samp> schakelt de controle uit. Op een IPv6-adres <samp>A.B.C</samp> worden de eerste 4 bloken vergeleken en <samp>A.B</samp> de eerste 3 blokken.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Maximaal aantal aanmeldingspogingen',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'    => 'Na dit aantal van mislukte aanmeldingen moet de gebruiker eerst een anti-spambot taak oplossen.',	
	
	'NO_IP_VALIDATION'				=> 'Geen',
	'NO_REF_VALIDATION'				=> 'Geen',
	'PASSWORD_TYPE'					=> 'Moeilijkheidsgraad wachtwoord',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Dit bepaald hoe ingewikkeld een wachtwoord moet zijn. De verdere opties passen de vorige aan.',
	'PASS_TYPE_ALPHA'				=> 'Moeten letters en cijfers bevatten',
	'PASS_TYPE_ANY'					=> 'Geen vereisten',
	'PASS_TYPE_CASE'				=> 'Moeten gemengde letters, nummers en symbolen bevatten',
	'PASS_TYPE_SYMBOL'				=> 'Moeten symbolen bevatten',
	'REF_HOST'						=> 'Alleen host controleren',
	'REF_PATH'						=> 'Ook het pad controleren',
	'REFERER_VALID'					=> 'Referentie controleren',
	'REFERER_VALID_EXPLAIN'			=> 'Indien ingeschakeld, zal de referentie of POST aanvragen ( “requests” ) eerst worden gecontroleerd tegen de host/script-padinstellingen. Dit kan problemen veroorzaken met forums die gebruik maken van diverse domeinen en/of externe aanmeldingen.',
	'TPL_ALLOW_PHP'					=> 'PHP in templates toestaan',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Als deze optie is ingeschakeld, zullen de <code>PHP</code> en <code>INCLUDEPHP</code> schakelaars herkend worden en zullen ze worden geparsed in de templates.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Deze informatie wordt gebruikt wanneer het forum e-mails verstuurt naar uw gebruikers. Wees er zeker van het het e-mailadres dat u heeft opgegeven geldig is, alle geweigerde, onbezorgbare berichten zullen worden verstuurd naar dat adres. Als uw host niet voorzien is van een oorspronkelijke (PHP gebaseerde) e-mailservice, kunt u direct berichten versturen door het gebruiken van SMTP. Dit vereist wel het adres van een juiste server (vraag uw provider mocht het nodig zijn). Als server authenticatie vereist (en alleen als het echt zo is) geeft u de juiste gebruikersnaam, wachtwoord en authenticatie-methode op.',

	'ADMIN_EMAIL'					=> 'Antwoordadres',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Dit zal altijd worden gebruikt als het antwoordadres in alle e-mails, het technische e-mail-contactadres. Het zal altijd worden gebruikt als de <samp>Antwoord-pad</samp> and <samp>Afzender</samp>-adres in e-mails.',
	'BOARD_EMAIL_FORM'				=> 'Gebruikers kunnen e-mailberichten versturen via het forum',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'In plaats van dat de e-mailadressen van gebruikers worden weergegeven, kunnen gebruikers elkaar e-mails versturen via het forum.',
	'BOARD_HIDE_EMAILS'				=> 'E-mailadressen verbergen',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Deze functie zorgt dat e-mailadressen volledig verborgen blijven.',
	'CONTACT_EMAIL'					=> 'Contact e-mailadres',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Dit adres zal worden gebruikt wanneer een specifiek contact punt nodig is, bijvoorbeeld; spam, foutmeldingen op pagina’s, etc. Het zal altijd gebruikt worden als de <samp>Van</samp> en <samp>Verzonden door</samp>-adres in e-mails.',
	'EMAIL_FUNCTION_NAME'			=> 'E-mail-functienaam',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'De e-mail-functie die wordt gebruikt om e-mails te versturen via PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'E-mail-pakketgrootte',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Dit is het aantal van maximale e-mails die kunnen worden verzonden in één pakket. Deze instelling is toegepast aan de interne berichtenwachtrij; stel deze waarde in op 0 als je problemen hebt met niet afgeleverde notificatie e-mails.',
	'EMAIL_SIG'						=> 'E-mailonderschrift',
	'EMAIL_SIG_EXPLAIN'				=> 'Deze tekst zal onder alle e-mails worden toegevoegt die het forum verstuurt.',
	'ENABLE_EMAIL'					=> 'E-mails toestaan',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Als deze optie is uitgeschakeld kunnen er geen e-mails worden verzonden door het forum. <em>Bij de gebruiker en beheerder account-activatieinstellingen zal deze instelling verplicht ingeschakeld moeten zijn. Als u momenteel de “gebruiker” of “beheerder” activatie gebruikt in de activatieinstellingen, en u schakelt deze instelling uit, dan hebben nieuwe accounts geen activatie nodig.</em>',
	'SMTP_AUTH_METHOD'				=> 'Authenticatie-methode voor SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Alleen gebruiken als een gebruikersnaam/wachtwoord is ingesteld, vraag aan uw provider als u niet zeker weet welke methode u moet gebruiken.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'AANMELDEN',
	'SMTP_PASSWORD'					=> 'SMTP-wachtwoord',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Alleen een wachtwoord opgeven als uw SMTP-server er om vraagt.<br /><em><strong>Waarschuwing:</strong> Dit wachtwoord wordt opgeslagen als normale tekst in de database, en is zichtbaar voor iedereen die toegang heeft tot de database of wie deze configuratiepagina kan bekijken.</em>',
	'SMTP_PLAIN'					=> 'NORMAAL',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-VOOR-SMTP',
	'SMTP_PORT'						=> 'SMTP-serverpoort',
	'SMTP_PORT_EXPLAIN'				=> 'Verander het alleen als u weet dat de SMTP-server zich bevindt op een andere poort.',
	'SMTP_SERVER'					=> 'SMTP-serveradres',
	'SMTP_SETTINGS'					=> 'SMTP-instellingen',
	'SMTP_USERNAME'					=> 'SMTP-gebruikersnaam',
	'SMTP_USERNAME_EXPLAIN'			=> 'Alleen een gebruikersnaam opgeven als uw SMTP-server er om vraagt.',
	'USE_SMTP'						=> 'SMTP-server voor e-mail gebruiken',
	'USE_SMTP_EXPLAIN'				=> 'Selecteer “Ja” als u wilt dat e-mails worden verstuurt via een naamserver, inplaats van de lokale mail-functie.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Hier kunt Jabber beheren en inschakelen voor het gebruik van instant messaging en forum-notificaties. Jabber is een open source protocol en daardoor voor iedereen beschikbaar. Sommige Jabber-servers inclusief gateways of transports wat ervoor zorgt dat u contact kunt leggen met gebruikers op andere netwerken. Niet alle servers bieden transport en wijzigingen in protocols wat er voor kan zorgen dan de transport niet goed werkt. Hou in de gaten dat je bestaande geregistreerde accountgegevens moet opgeven - phpBB zal gebruik maken van de gegevens die u hier opgeeft.',

	'JAB_ENABLE'				=> 'Jabber toestaan',
	'JAB_ENABLE_EXPLAIN'		=> 'Het gebruik van Jabber-berichten en -notificaties toestaan.',
	'JAB_GTALK_NOTE'			=> 'Vergeet niet dat GTALK niet zal werken als de functie <samp>dns_get_record</samp> niet gevonden kan worden. Deze functie is niet beschikbaar in PHP4 en kan niet worden uitgevoerd in Windows platforms, ook werkt het momenteel niet op BSD-gebasseerde systemen, inclusief Mac OS.',
	'JAB_PACKAGE_SIZE'			=> 'Jabber-pakketgrootte',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Dit is het aantal berichten dat in één pakket wordt verstuurd. Als u dit instelt op 0 zal het bericht meteen worden verzonden en zal het niet in de wachtrij worden geplaatst voor latere verzending.',
	'JAB_PASSWORD'				=> 'Jabber-wachtwoord',
	'JAB_PASSWORD_EXPLAIN'		=> '<em><strong>Waarschuwing:</strong> Dit wachtwoord wordt opgeslagen als normale tekst in de database, en is zichtbaar voor iedereen die toegang heeft tot de database of wie deze configuratiepagina kan bekijken.</em>',
	'JAB_PORT'					=> 'Jabber-poort',
	'JAB_PORT_EXPLAIN'			=> 'Leeg laten tenzij u weet dat het niet poort 5222 is.',
	'JAB_SERVER'				=> 'Jabber-server',
	'JAB_SERVER_EXPLAIN'		=> 'Bekijk %sjabber.org%s voor een lijst van servers.',
	'JAB_SETTINGS_CHANGED'		=> 'Jabber-instellingen zijn succesvol gewijzigd.',
	'JAB_USE_SSL'				=> 'SSL om te verbinden gebruiken',
	'JAB_USE_SSL_EXPLAIN'		=> 'Als het ingeschakeld is, zal er een beveiligde verbinding worden gemaakt. De Jabber-poort zal worden aangepast naar 5223 als poort 5222 is opgegeven.',
	'JAB_USERNAME'				=> 'Jabber-gebruikersnaam of JID',
	'JAB_USERNAME_EXPLAIN'		=> 'Geef een geregistreerde gebruikersnaam of een geldige JID op. De gebruikersnaam zal niet worden gecontroleerd op geldigheid. Als u alleen een gebruikersnaam opgeeft dan zal uw JID de gebruikersnaam worden en de server die U hierboven heeft opgegeven. Anders voert u een geldig JID in, bijvoorbeeld : gebruiker@jabber.org.',
));

?>