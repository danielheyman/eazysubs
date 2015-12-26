<?php
/**
*
* ucp [Dutch]
*
* @package language
* @version $Id: ucp.php 257 2009-12-30 23:02:54Z Raimon $
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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> '
		Door het bezoeken van “%1$s”  (inbegrepen “wij”, “ons” , “onze” , “%1$s” , “%2$s” ), gaat u automatisch akkoord met de volgende voorwaarden. Als u niet akkoord gaat met de voorwaarden, bezoek of gebruik “%1$s” dan niet langer. Wij hebben het recht om de voorwaarden op ieder moment te wijzigen en zullen u daar zoveel mogelijk van op de hoogte houden. Het is echter wel aan te raden zelf de voorwaarden te controleren op wijzigingen. Als u niet akkoord gaat met de wijzigingen, maak dan niet langer gebruik meer van &ldquo;%1$s&rdquo;. Als u gebruik blijft maken van “%1$s”, gaat u automatisch akkoord met de wijzigingen.<br />
		<br />
		Dit forum draait op phpBB (hierna “zij”, “hen”, “hun”, “phpBB software”, “www.phpBB.com”, “www.phpBBservice.nl”, “phpBB Groep”, “phpBB Teams”) wat een bulletinboard oplossing is, dat is uitgebracht onder de “<a href="http://opensource.org/licenses/gpl-license.php">General Public License</a>” (hierna “GPL”) en kan gedownload worden via <a href="http://www.phpBB.com/">www.phpBB.com</a> en de Nederlandstalige website <a href="http://www.phpBBservice.nl/">www.phpBBservice.nl</a>. De phpBB software vermakkelijkt alleen de internet gebaseerde discussies, de phpBB Groep is niet verantwoordelijk voor de inhoud en/of de houding wat er is toegestaan en wat niet. Voor verdere informatie over phpBB, bezoek dan hun website: <a href="http://www.phpBB.com/">http://www.phpBB.com</a> of de Nederlandstalige website <a href="http://www.phpBBservice.nl/">http://www.phpBBservice.nl</a>.<br />
		<br />
		U gaat ermee akkoord geen kwetsende, obscene, vulgaire, lasterlijke, haatdragende, dreigende, seksueel geörienteerde of anderzijds verwerpelijke berichten te plaatsen, die van toepassing zijnde regels en/of wetten schenden die gelden voor uw land, het land waar “%1$s” is gehost of de internationale wetgeving.
		Het plaatsen van dergelijke berichten kan ertoe leiden dat u onmiddelijk en permanent wordt verbannen van deelname aan dit forum, en uw serviceprovider kan geïnformeerd worden. Het IP-adres van alle berichten wordt opgeslagen om deze voorwaarden te kunnen waarborgen.
		U gaat akkoord dat “%1$s” het recht hebben om onderwerpen te verwijderen, wijzigen, verplaatsen of sluiten wanneer zij dit nodig vinden. Als gebruiker gaat u ermee akkoord dat de informatie die u bij ons invoert wordt opgeslagen in een database. Hoewel deze informatie niet aan een derde partij zal worden verstrekt zonder uw toestemming aan de webmaster, kunnen “%1$s”of phpBB niet verantwoordelijk worden gehouden voor een hackpoging die ertoe leidt dat de gegevens vrijkomen.
	',

	'PRIVACY_POLICY'	=> '
		Dit beleid legt in detail uit hoe “%1$s” samen met zijn verbonden diensten en bedrijven (hierna “wij”, “ons”, “onze”, “%1$s”, “%2$s”) en phpBB (hierna “zij”, “hun”, “zijn”, “phpBB software”, “www.phpBB.com”, “www.phpBBservice.nl”, “phpBB Groep”, “phpBB Teams”) de informatie die wordt verzameld gedurende een bezoek aan dit forum wordt gebruikt (hierna “uw informatie”).<br />
		<br />
		Uw informatie wordt op twee manieren verzameld. De eerste manier is door het gebruik van zogenaamde cookies. De phpBB software maakt meerdere cookies aan (kleine tekstbestanden die naar de tijdelijke internetbestanden van uw computer worden gedownload). De eerste twee cookies bevat een identificatienummer (hierna "user-id") en een anonieme sessienummer (hierna "sessie-id"). Deze twee nummers worden automatisch door de phpBB software aan u toegewezen. Een derde cookie zal worden aangemaakt wanneer u onderwerpen hebt gelezen op “%1$s”. Deze cookie wordt gebruikt om op te slaan welke onderwerpen er zijn gelezen, en verbeterd daarmee uw gebruikerservaring.<br />
		<br />
		Wij kunnen ook cookies extern aanmaken aan de phpBB software wanneer u “%1$s” doorzoekt, Hoewel dit buiten dit document valt omdat dit geen betrekking heeft op de paginas die aangemaakt wordt door de phpBB software.
		De tweede manier is waarin wij uw informatie verzamelen is door wat u aan ons verstuurd. Dit kan zijn, en is niet beperkt naar: het plaatsen als een anonieme gebruiker (hierna “anonieme berichten”), registreren op “%1$s” (hierna “uw account”) en berichten die verstuurt zijn na uw registratie en wanneer u bent aangemeld (hierna “uw berichten”).<br />
		<br />
		Uw account bevat minstens een unieke identificeerbare naam (hierna “uw gebruikersnaam”), een persoonlijk wachtwoord om te kunnen aanmelden op uw account (hierna “uw wachtwoord”) en een persoonlijk, geldige e-mailadres (hierna “uw e-mail”). Uw informatie voor uw account op “%1$s” is beveiligd door gegevensbeschermingswetgeving dat geldt in het land waar dit forum gehost is. Enige informatie naast uw gebruikersnaam, uw wachtwoord en uw e-mailadres dat vereist is gedurend het registratieproces op “%1$s”  is niet vereist maar is optioneel. U heeft de optie welke informatie in uw account openbaar kan worden weergegeven. Verder heeft u ook de mogelijkheid, om in te stellen of u de e-mails die automatisch worden gemaakt door de phpBB software wilt ontvangen.<br />
		<br />
		Uw wachtwoord is versleuteld (en kan niet ontsleuteld gemaakt worden), waardoor het op een veilige manier is opgeslagen. Desondanks is het niet aan te raden dat u hetzelfde wachtwoord gebruikt op diverse websites. Uw wachtwoord is het middel waarmee u op uw account op “%1$s” kan aanmelden, bewaar het dus veilig en geef het op geen enkele manier aan “%1$s”, phpBB of een andere derde partij. Als u het wachtwoord van uw account zou vergeten, kunt u de “Ik heb mijn wachtwoord vergeten” optie gebruiken die u terug kunt vinden in het aanmeldvenster. Dit proces vereist dat u de gebruikersnaam en e-mailadres opgeeft van uw gebruikersaccoun, waarna de phpBB software een nieuw wachtwoord zal genereren zodat u opnieuw kunt aanmelden.<br />
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Uw account is nu geactiveerd. Bedankt voor het registreren.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'De account is nu geactiveerd.',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'Uw account is nu succesvol gereactiveerd.',
	'ACCOUNT_ADDED'					=> 'Bedankt voor het registreren, uw account is aangemaakt. U mag u nu aanmelden met uw gebruikersnaam en wachtwoord.',
	'ACCOUNT_COPPA'					=> 'Uw account is aangemaakt, maar deze moet nog goedgekeurd worden, bekijk uw e-mail voor verdere details.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'Uw account is bijgewerkt. Dit forum vereist heractivatie van een account bij e-mail wijzigingen. Een activatiecode is verzonden naar uw nieuwe e-mailadres dat u heeft opgegeven. Bekijk uw e-mail voor verdere informatie.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'Uw account is bijgewerkt. Dit forum vereist heractivatie van een account door een beheerder bij e-mail wijzigingen. Een e-mail is verzonden naar hun, en u zult worden geïnformeerd wanneer uw account is geheractiveerd.',
	'ACCOUNT_INACTIVE'				=> 'Uw account is aangemaakt. Dit forum vereist activatie van een account, een activatiecode is verzonden naar het e-mailadres dat u heeft opgegeven. Bekijk uw e-mail voor verdere informatie.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Uw account is aangemaakt. Dit forum vereist activatie van een account door de beheerders. Een e-mail is verzonden naar hun, en u zult worden geïnformeerd wanneer uw account is geheractiveerd.',
	'ACTIVATION_EMAIL_SENT'			=> 'De activatie e-mail is verzonden naar uw e-mailadres.',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> 'De activatie e-mail is verzonden naar het e-mailadres van de beheerders.',
	'ADD'							=> 'Toevoegen',
	'ADD_BCC'						=> '[BCC] toevoegen',
	'ADD_FOES'						=> 'Vijanden toevoegen',
	'ADD_FOES_EXPLAIN'				=> 'U kunt meerdere gebruikersnamen opgeven door ze elk op een aparte regel te plaatsen.',
	'ADD_FOLDER'					=> 'Nieuwe map aanmaken',
	'ADD_FRIENDS'					=> 'Vrienden toevoegen',
	'ADD_FRIENDS_EXPLAIN'			=> 'U kunt meerdere gebruikersnamen opgeven door ze elk op een aparte regel te plaatsen.',
	'ADD_NEW_RULE'					=> 'Nieuwe regel toevoegen',
	'ADD_RULE'						=> 'Regel toevoegen',
	'ADD_TO'						=> '[Naar] toevoegen',
	'ADD_USERS_UCP_EXPLAIN'			=> 'Hier kunt u nieuwe gebruikers toevoegen aan de groep. U kunt selecteren of deze groep de nieuwe standaard groep wordt van de geselecteerde gebruikers. Vul iedere gebruikersnaam in op een nieuwe regel.',
	'ADMIN_EMAIL'					=> 'Beheerders kunnen mij informatie mailen',
	'AGREE'							=> 'Ik accepteer deze voorwaarden',
	'ALLOW_PM'						=> 'Sta toe dat gebruikers u privéberichten kunnen sturen',
	'ALLOW_PM_EXPLAIN'				=> 'Vergeet niet dat beheerders en moderators altijd in staat zijn om u privéberichten te sturen.',
	'ALREADY_ACTIVATED'				=> 'U heeft uw gebruikersaccount al geactiveerd',
	'ATTACHMENTS_EXPLAIN'			=> 'Dit is een lijst van bijlagen die u heeft geplaatst in berichten op dit forum.',
	'ATTACHMENTS_DELETED'			=> 'Bijlagen zijn succesvol verwijderd.',
	'ATTACHMENT_DELETED'			=> 'Bijlage is succesvol verwijderd.',
	'AVATAR_CATEGORY'				=> 'Categorie',
	'AVATAR_EXPLAIN'				=> 'Maximale afmetingen; breedte: %1$d pixels, hoogte: %2$d pixels, bestandsgrootte: %3$.2f KiB.',
	'AVATAR_FEATURES_DISABLED'		=> 'De avatarfunctie is momenteel uitgeschakeld.',
	'AVATAR_GALLERY'				=> 'Avatargalerij',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Kon avatar niet uploaden naar %s',
	'AVATAR_NOT_ALLOWED'			=> 'Uw avatar kon niet worden weergegeven omdat avatars niet zijn toegestaan.',
	'AVATAR_PAGE'					=> 'Pagina',
	'AVATAR_TYPE_NOT_ALLOWED'		=> 'Uw huidige avatar kan niet worden weergegeven omdat het type niet is toegestaan.',

	'BACK_TO_DRAFTS'			=> 'Terug naar de opgeslagen concepten',
	'BACK_TO_LOGIN'				=> 'Terug naar de aanmeldpagina',
	'BIRTHDAY'					=> 'Verjaardag',
	'BIRTHDAY_EXPLAIN'			=> 'Wanneer u uw geboortedatum invoert, zal het op de forumindex worden weergegeven wanneer u jarig bent.',
	'BOARD_DATE_FORMAT'			=> 'Mijn datumformaat',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'De syntax die gebruikt wordt is gelijk aan de <a href="http://www.php.net/date">data()</a>-functie van PHP.',
	'BOARD_DST'					=> 'Zomertijd inschakelen',
	'BOARD_LANGUAGE'			=> 'Mijn taal',
	'BOARD_STYLE'				=> 'Mijn forumstijl',
	'BOARD_TIMEZONE'			=> 'Mijn tijdzone',
	'BOOKMARKS'					=> 'Bladwijzers',
	'BOOKMARKS_EXPLAIN'			=> 'U kunt onderwerpen toevoegen als een bladwijzer, zodat u ze later terug kunt vinden. Wanneer u een bladwijzer wilt verwijderen, vinkt u het vakje aan, en drukt u op de <em>verwijder gemarkeerde bladwijzers</em> knop.',
	'BOOKMARKS_DISABLED'		=> 'Bladwijzers zijn uitgeschakeld op dit forum',
	'BOOKMARKS_REMOVED'			=> 'Bladwijzers zijn succesvol verwijderd',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'U kunt niet langer dit bericht wijzigen of verwijderen',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'Berichten kunnen nier worden verplaats naar de map die u wilt verwijderen.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'Berichten kunnen niet worden verplaats vanuit de postvak UIT.',
	'CANNOT_RENAME_FOLDER'		=> 'Deze map kan niet hernoemd worden.',
	'CANNOT_REMOVE_FOLDER'		=> 'Deze map kan niet worden verwijderd.',
	'CHANGE_DEFAULT_GROUP'		=> 'Standaardgroep wijzigen',
	'CHANGE_PASSWORD'			=> 'Wachtwoord wijzigen',
	'CLICK_RETURN_FOLDER'		=> '%1$sTerug naar uw “%3$s” map%2$s',
	'CONFIRMATION'				=> 'Registratie bevestigen',
	'CONFIRM_CHANGES'			=> 'Wijzingen bevestigen',
	'CONFIRM_EMAIL'				=> 'E-mailadres bevestigen',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'U hoeft dit alleen in te vullen als u bezig bent om uw e-mailadres te veranderen.',
	'CONFIRM_EXPLAIN'			=> 'Om automatische registraties tegen te gaan vereist de forumbeheerder dat u een bevestigingscode invoert. De code is weergegeven in de afbeelding die u hier onder zou moeten zien. Als u visuele beperkingen heeft of u kunt deze code niet lezen, neem dan contact op de de %sforumbeheerder%s.',
	'VC_REFRESH'				=> 'Bevestigingscode vernieuwen',
	'VC_REFRESH_EXPLAIN'		=> 'Als u de code niet kunt lezen, dan kunt u een nieuwe aanvragen door op de knop te klikken.',

	'CONFIRM_PASSWORD'			=> 'Wachtwoord bevestigen',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'U hoeft alleen uw wachtwoord te bevestigen als u het hierboven heeft veranderd.',
	'COPPA_BIRTHDAY'			=> 'Om verder te gaan met de registratieprocedure moet u ons vertellen wanneer u bent geboren.',
	'COPPA_COMPLIANCE'			=> 'COPPA klacht',
	'COPPA_EXPLAIN'				=> 'Let op, wanneer u op versturen klikt zal uw account worden aangemaakt. Alhoewel het niet kan worden geactiveerd totdat een ouder of een voogd de registratie heeft goedkeurd. Er zal een kopie van het benodigde formulier met de benodige informatie, waar u het heen moet sturen, naar de opgegeven e-mailadres worden verstuurd.',
	'CREATE_FOLDER'				=> 'Map aanmaken',
	'CURRENT_IMAGE'				=> 'Huidige afbeelding',
	'CURRENT_PASSWORD'			=> 'Huidige wachtwoord',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'U moet uw huidige wachtwoord bevestigen als u het wilt veranderen, of als u uw e-mailadres of gebruikersnaam hebt gewijzigd.',
	'CUR_PASSWORD_ERROR'		=> 'Het huidige wachtwoord dat u heeft ingevoerd is onjuist.',
	'CUSTOM_DATEFORMAT'			=> 'Eigen formaat…',

	'DEFAULT_ACTION'			=> 'Standaard actie',
	'DEFAULT_ACTION_EXPLAIN'	=> 'Deze actie zal worden uitgevoerd als geen van bovenstaande van toepassing is',
	'DEFAULT_ADD_SIG'			=> 'Standaard mijn onderschrift toevoegen',
	'DEFAULT_BBCODE'			=> 'Standaard BBCode inschakelen',
	'DEFAULT_NOTIFY'			=> 'Informeer mij standaard wanneer er een reactie is',
	'DEFAULT_SMILIES'			=> 'Standaard smileys inschakelen',
	'DEFINED_RULES'				=> 'Opgegeven regels',
	'DELETED_TOPIC'				=> 'Onderwerp is verwijderd',
	'DELETE_ATTACHMENT'			=> 'Bijlage verwijderen',
	'DELETE_ATTACHMENTS'		=> 'Bijlagen verwijderen',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Weet u zeker dat u deze bijlage wilt verwijderen?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Weet u zeker dat u deze bijlagen wilt verwijderen?',
	'DELETE_AVATAR'				=> 'Afbeelding verwijderen',
	'DELETE_COOKIES_CONFIRM'	=> 'Weet u zeker dat u alle cookies die zijn ingesteld door dit forum wilt verwijderen?',
	'DELETE_MARKED_PM'			=> 'Gemarkeerde berichten verwijderen',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Weet u zeker dat u alle gemarkeerde berichten wilt verwijderen?',
	'DELETE_OLDEST_MESSAGES'	=> 'Oudste berichten verwijderen',
	'DELETE_MESSAGE'			=> 'Verwijder bericht',
	'DELETE_MESSAGE_CONFIRM'	=> 'Weet u zeker dat u dit privébericht wilt verwijderen?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Alle berichten binnenin de verwijderde map verwijderen',
	'DELETE_RULE'				=> 'Regel verwijderen',
	'DELETE_RULE_CONFIRM'		=> 'Weet u zeker dat u deze regel wilt verwijderen?',
	'DEMOTE_SELECTED'			=> 'Geselecteerde degraderen',
	'DISABLE_CENSORS'			=> 'Woordcensuur inschakelen',
	'DISPLAY_GALLERY'			=> 'Galerij weergeven',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'Het opgegeven e-mailadres bevat geen geldige MX record.',
	'DOWNLOADS'					=> 'Downloads',
	'DRAFTS_DELETED'			=> 'Alle geselecteerde conceptberichten zijn succesvol verwijderd.',
	'DRAFTS_EXPLAIN'			=> 'Hier kunt u de opgeslagen conceptberichten bekijken, wijzigen en verwijderen.',
	'DRAFT_UPDATED'				=> 'Conceptbericht succesvol bijgewerkt.',

	'EDIT_DRAFT_EXPLAIN'		=> 'Hier bent u in de gelegenheid om uw conceptbericht te wijzigen. Conceptberichten bevatten geen bijlagen of peilingen.',
	'EMAIL_BANNED_EMAIL'		=> 'Het e-mailadres wat u heeft ingevoerd is niet toegestaan om te gebruiken.',
	'EMAIL_INVALID_EMAIL'		=> 'Het e-mailadres wat u heeft ingevoerd is ongeldig.',
	'EMAIL_REMIND'				=> 'Dit moet het e-mailadres zijn die is geassocieerd met uw account. Als u dit niet heeft veranderd via uw gebruikerspaneel, dan is dit het e-mailadres waarmee u uw account heeft geregistreerd.',
	'EMAIL_TAKEN_EMAIL'			=> 'Het ingevoerde e-mailadres is al ingebruik',
	'EMPTY_DRAFT'				=> 'U moet een bericht invoeren om uw veranderingen te kunnen versturen.',
	'EMPTY_DRAFT_TITLE'			=> 'U moet een concepttitel invoeren.',
	'EXPORT_AS_XML'				=> 'Exporteren als XML-bestand',
	'EXPORT_AS_CSV'				=> 'Exporteren als CSV-bestand',
	'EXPORT_AS_CSV_EXCEL'		=> 'Exporteren als CSV-bestand (Excel)',
	'EXPORT_AS_TXT'				=> 'Exporteren als TXT-bestand',
	'EXPORT_AS_MSG'				=> 'Exporteren als MSG-bestand',
	'EXPORT_FOLDER'				=> 'Exporteer deze weergave',

	'FIELD_REQUIRED'					=> 'Het veld “%s” moet compleet zijn.',
	'FIELD_TOO_SHORT'					=> 'Het veld “%1$s” is te kort, een maximum van %2$d tekens is vereist.',
	'FIELD_TOO_LONG'					=> 'Het veld “%1$s” is te lang, een maximum van %2$d tekens is toegestaan.',
	'FIELD_TOO_SMALL'					=> 'De waarde van “%1$s” is te klein, een minimumwaarde van %2$d is vereist.',
	'FIELD_TOO_LARGE'					=> 'De waarde van “%1$s” is te groot, een maximumwaarde van %2$d is toegestaan.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'Het veld “%s” bevat ongeldige tekens, alleen cijfers zijn toegestaan.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'Het veld “%s” bevat ongeldige tekens, alleen alfanumerieke tekens zijn toegestaan.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'Het veld “%s” bevat ongeldige tekens, alleen alfanumerieke, spaties of -+_[] tekens zijn toegestaan.',
	'FIELD_INVALID_DATE'				=> 'Het veld “%s” bevat een ongeldige datum.',

	'FOE_MESSAGE'				=> 'Bericht van vijand',
	'FOES_EXPLAIN'				=> 'Vijanden zijn gebruikers die standaard worden genegeerd. Berichten van deze gebruikers worden niet volledig weergegeven. Privéberichten van vijanden zijn nog steeds toegestaan. Vergeet niet dat u geen moderators of beheerders kunt negeren.',
	'FOES_UPDATED'				=> 'Uw vijandenlijst is succesvol bijgewerkt',
	'FOLDER_ADDED'				=> 'Map is succesvol toegevoegd',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d van %2$d berichten zijn opgeslagen',
	'FOLDER_NAME_EMPTY'			=> 'U moet een naam invoeren voor deze map.',
	'FOLDER_NAME_EXIST'			=> 'Map <strong>%s</strong> bestaat al.',
	'FOLDER_OPTIONS'			=> 'Mapopties',
	'FOLDER_RENAMED'			=> 'Map succesvol hernoemd.',
	'FOLDER_REMOVED'			=> 'Map succesvol verwijderd.',
	'FOLDER_STATUS_MSG'			=> 'Map is %1$d%% vol (%2$d van %3$d berichten zijn opgeslagen)',
	'FORWARD_PM'				=> 'PB doorsturen',
	'FORCE_PASSWORD_EXPLAIN'	=> 'Voordat u verder dit forum mag doorzoeken, is het nodig dat u uw wachtwoord verandert.',
	'FRIEND_MESSAGE'			=> 'Bericht van vriend',
	'FRIENDS'					=> 'Vrienden',
	'FRIENDS_EXPLAIN'			=> 'Via vrienden kunt u snel gebruikers vinden waarmee u regelmatig communiceert. Als de template het ondersteunt kunnen berichten extra opvallend zijn die geplaatst zijn door een vriend.',
	'FRIENDS_OFFLINE'			=> 'Offline',
	'FRIENDS_ONLINE'			=> 'Online',
	'FRIENDS_UPDATED'			=> 'Uw vriendenlijst is succesvol bijgewerkt',
	'FULL_FOLDER_OPTION_CHANGED'=> 'De actie die wordt ondernomen wanneer een map vol is, en succesvol is gewijzigd.',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- Origineel bericht --------',
	'FWD_SUBJECT'				=> 'Titel: %s',
	'FWD_DATE'					=> 'Datum: %s',
	'FWD_FROM'					=> 'Van: %s',
	'FWD_TO'					=> 'Naar: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'Forummededeling',

	'HIDE_ONLINE'				=> 'Mijn onlinestatus verbergen',
	'HIDE_ONLINE_EXPLAIN'		=> 'Het wijzigen van deze instelling zal pas effect hebben bij uw volgende bezoek aan het forum.',
	'HOLD_NEW_MESSAGES'			=> 'Geen nieuwe berichten accepteren (Nieuwe berichten worden achtergehouden totdat er genoeg ruimte beschikbaar is)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'Nieuwe berichten worden achtergehouden',

	'IF_FOLDER_FULL'			=> 'Als map vol is',
	'IMPORTANT_NEWS'			=> 'Belangrijke mededelingen',
	'INVALID_USER_BIRTHDAY'     => 'De ingevoerde geboortedatum bevat een ongeldige datum.',
	'INVALID_CHARS_USERNAME'	=> 'De gebruikersnaam bevat verboden tekens.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'Het wachtwoord bevat niet de tekens die vereist zijn.',
	'ITEMS_REQUIRED'			=> 'De items die gemarkeerd zijn met * zijn profielvelden die vereist zijn en moeten ingevuld zijn.',

	'JOIN_SELECTED'				=> 'Deelnemen aan geselecteerde',
	'LANGUAGE'					=> 'Taal',
	'LINK_REMOTE_AVATAR'		=> 'Extern linken',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Voer de URL in van de locatie van de avatar-afbeelding die u wenst te gebruiken.',
	'LINK_REMOTE_SIZE'			=> 'Avatar-afmetingen',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Geef de breedte en hoogte van de avatar, laat het leeg om automatisch de afmetingen te proberen te herkennen.',
	'LOGIN_EXPLAIN_UCP'			=> 'Meldt u aan om toegang te verkrijgen tot het gebruikerspaneel.',
	'LOGIN_REDIRECT'			=> 'U bent succesvol aangemeld.',
	'LOGOUT_FAILED'				=> 'U bent niet afgemeld, aangezien de aanvraag niet overeen kwam met uw sessie. Als het probleem zich blijft voordoen, neem dan contact op met de beheerder.',
	'LOGOUT_REDIRECT'			=> 'U bent succesvol afgemeld.',

	'MARK_IMPORTANT'				=> 'Markeer als belangrijk',
	'MARKED_MESSAGE'				=> 'Gemarkeerd bericht',
	'MAX_FOLDER_REACHED'			=> 'Maximaal aantal van toegestaande opgegeven gebruikersmappen zijn bereikt.',
	'MESSAGE_BY_AUTHOR'				=> 'door',
	'MESSAGE_COLOURS'				=> 'Berichtkleuren',
	'MESSAGE_DELETED'				=> 'Bericht succesvol verwijderd',
	'MESSAGE_HISTORY'				=> 'Berichtgeschiedenis',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Dit bericht is verwijderd door de auteur voordat het was bezorgd.',
	'MESSAGE_SENT_ON'				=> 'op',
	'MESSAGE_STORED'				=> 'Dit bericht is succesvol verzonden.',
	'MESSAGE_TO'					=> 'Naar',
	'MESSAGES_DELETED'				=> 'Berichten succesvol verwijderd',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Verplaats berichten van de verwijderde map naar',
	'MOVE_DOWN'						=> 'Verplaats omlaag',
	'MOVE_MARKED_TO_FOLDER'			=> 'Verplaats gemarkeerde naar %s',
	'MOVE_PM_ERROR'					=> 'Er heeft zich een fout voorgedaan tijden het verplaatsen van de berichten naar de nieuwe map, alleen %1d van %2d berichten zijn verplaatst.',
	'MOVE_TO_FOLDER'				=> 'Verplaats naar map',
	'MOVE_UP'						=> 'Verplaats omhoog',

	'NEW_EMAIL_ERROR'				=> 'Het e-mailadres dat u heeft ingevoerd komt niet overeen.',
	'NEW_FOLDER_NAME'				=> 'Nieuwe mapnaam',
	'NEW_PASSWORD'					=> 'Nieuw wachtwoord',
	'NEW_PASSWORD_ERROR'			=> 'De wachtwoorden die u heeft ingevoerd komen niet overeen.',
	'NOTIFY_METHOD'					=> 'Notificatiemethode',
	'NOTIFY_METHOD_BOTH'			=> 'Beide',
	'NOTIFY_METHOD_EMAIL'			=> 'Alleen e-mail',
	'NOTIFY_METHOD_EXPLAIN'			=> 'Methode voor het versturen van berichten via dit forum.',
	'NOTIFY_METHOD_IM'				=> 'Alleen Jabber',
	'NOTIFY_ON_PM'					=> 'Notificatie versturen wanneer er nieuwe privéberichten zijn',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'U kunt geen gastgebruiker toevoegen aan uw vriendenlijst.',
	'NOT_ADDED_FRIENDS_BOTS'		=> 'U kunt geen zoekrobots toevoegen aan uw vriendenlijst.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'U kunt geen gebruikers toevoegen aan uw vriendenlijst die al zijn toegevoegd aan uw vijandenlijst.',
	'NOT_ADDED_FRIENDS_SELF'		=> 'U kunt uwzelf niet toevoegen aan uw vriendenlijst.',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'U kunt geen beheerders en moderators toevoegen aan uw vijandenlijst.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'U kunt geen gastgebruiker toevoegen aan uw vijandenlijst.',
	'NOT_ADDED_FOES_BOTS'			=> 'U kunt geen zoekrobots toevoegen aan uw vijandenlijst.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'U kunt geen gebruikers toevoegen aan uw vijandenlijst die al zijn toegevoegd aan uw vriendenlijst.',
	'NOT_ADDED_FOES_SELF'			=> 'U kunt uwzelf niet toevoegen aan uw vijandenlijst.',
	'NOT_AGREE'						=> 'Ik ga niet akkoord met deze voorwaarden',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'De doelmap “%s” blijkt vol te zijn. De opgevraagde actie kon niet worden uitgevoerd.',
	'NOT_MOVED_MESSAGE'				=> 'U heeft 1 privébericht die momenteel in de wachtrij staat, omdat er een map vol is.',
	'NOT_MOVED_MESSAGES'			=> 'U heeft %d privéberichten die momenteel in de wachtrij staan, omdat er een map vol is.',
	'NO_ACTION_MODE'				=> 'Er is geen berichtactie opgegeven.',
	'NO_AUTHOR'						=> 'Er is geen auteur opgegeven voor dit bericht',
	'NO_AVATAR_CATEGORY'			=> 'Geen',

	'NO_AUTH_DELETE_MESSAGE'		=> 'U bent niet bevoegd om privéberichten te verwijderen.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'U bent niet bevoegd om privéberichten te wijzigen.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'U bent niet bevoegd om privéberichten door te sturen.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'U bent niet bevoegd om privéberichten te versturen naar groepen.',
	'NO_AUTH_PASSWORD_REMINDER'		=> 'U bent niet bevoegd om een nieuw wachtwoord aan te vragen.',
	'NO_AUTH_READ_HOLD_MESSAGE'		=> 'U bent niet bevoegd om privéberichten te lezen die in de wachtrij staan.',
	'NO_AUTH_READ_MESSAGE'			=> 'U bent niet bevoegd om privéberichten te lezen.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'U kunt dit bericht niet meer lezen omdat het is verwijderd door de auteur.',
	'NO_AUTH_SEND_MESSAGE'			=> 'U bent niet bevoegd om privéberichten te versturen.',
	'NO_AUTH_SIGNATURE'				=> 'U bent niet bevoegd om een onderschrift in te voeren.',

	'NO_BCC_RECIPIENT'			=> 'Geen',
	'NO_BOOKMARKS'				=> 'U heeft geen bladwijzers.',
	'NO_BOOKMARKS_SELECTED'		=> 'U heeft geen bladwijzers geselecteerd',
	'NO_EDIT_READ_MESSAGE'		=> 'Het privébericht kan niet worden gewijzigd omdat het al is gelezen.',
	'NO_EMAIL_USER'				=> 'De e-mail/gebruikersnaam informatie die verstuurd is kon niet worden gevonden.',
	'NO_FOES'					=> 'Er zijn momenteel geen vijanden opgegeven',
	'NO_FRIENDS'				=> 'Er zijn momenteel geen vrienden opgegeven',
	'NO_FRIENDS_OFFLINE'		=> 'Geen vrienden offline',
	'NO_FRIENDS_ONLINE'			=> 'Geen vrienden online',
	'NO_GROUP_SELECTED'			=> 'Er is geen groep opgegeven.',
	'NO_IMPORTANT_NEWS'			=> 'Er zijn geen belangrijke mededelingen aanwezig.',
	'NO_MESSAGE'				=> 'Privébericht kan niet worden gevonden.',
	'NO_NEW_FOLDER_NAME'		=> 'U moet een nieuwe mapnaam opgeven.',
	'NO_NEWER_PM'				=> 'Er zijn geen nieuwere berichten.',
	'NO_OLDER_PM'				=> 'Er zijn geen oudere berichten.',
	'NO_PASSWORD_SUPPLIED'		=> 'U kunt u niet aanmelden zonder wachtwoord.',
	'NO_RECIPIENT'				=> 'Er is geen ontvanger opgegeven.',
	'NO_RULES_DEFINED'			=> 'Er zijn geen regels opgegeven.',
	'NO_SAVED_DRAFTS'			=> 'Er zijn geen concepten opgeslagen.',
	'NO_TO_RECIPIENT'			=> 'Geen',
	'NO_WATCHED_FORUMS'			=> 'U volgt geen forum.', //You are not subscribed to any forums. subscribe is inschrijven. // Je bent niet ingeschreven op een forum???
	'NO_WATCHED_SELECTED'		=> 'U heeft geen forums of onderwerpen geselecteerd die u wilt volgen.', //You have not selected any subscribed topics or forums.
	'NO_WATCHED_TOPICS'			=> 'U volgt geen onderwerpen.', //You are not subscribed to any topics.

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Wachtwoord moet tussen %1$d en %2$d tekens lang zijn, en moeten letters en cijfers in een willekeurige volgorde bevatten.',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Moet tussen de %1$d en %2$d tekens lang zijn.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Wachtwoord moet tussen de %1$d en %2$d tekens lang zijn en moeten letters in een willekeurige volgorde bevatten.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Wachtwoord moeten tussen de %1$d en %2$d tekens lang zijn en moeten letters, cijfers en symbolen in een willekeurige volgorde bevatten.',
	'PASSWORD'					=> 'Wachtwoord',
	'PASSWORD_ACTIVATED'		=> 'Uw nieuwe wachtwoord is geactiveerd.',
	'PASSWORD_UPDATED'			=> 'Een nieuw wachtwoord is verzonden naar uw geregistreerde e-mailadres.',
	'PERMISSIONS_RESTORED'		=> 'Permissies zijn succesvol hersteld.',
	'PERMISSIONS_TRANSFERRED'	=> 'Permissies van <strong>%s</strong> zijn succevol overgebracht. U kunt nu door het forum navigeren met de permissies van deze gebruiker.<br />Let op, beheerderspermissies zijn niet overgebracht. U kunt altijd terugkeren naar uw eigen permissies.',
	'PM_DISABLED'				=> 'De privéberichten zijn uitgeschakeld op dit forum.',
	'PM_FROM'					=> 'Van',
	'PM_FROM_REMOVED_AUTHOR'	=> 'Dit bericht is verstuurd door een gebruiker die niet meer geregistreerd is.',
	'PM_ICON'					=> 'PB-pictogram',
	'PM_INBOX'					=> 'Postvak IN',
	'PM_NO_USERS'				=> 'De gebruikers die u wilt toevoegen bestaan niet.',
	'PM_OUTBOX'					=> 'Postvak UIT',
	'PM_SENTBOX'				=> 'Verzonden berichten',
	'PM_SUBJECT'				=> 'Berichttitel',
	'PM_TO'						=> 'Versturen naar',
	'PM_USERS_REMOVED_NO_PM'	=> 'Sommige gebruikers kunnen niet worden toegevoegd, omdat ze het ontvangen van privéberichten uitgeschakeld hebben.',
	'POPUP_ON_PM'				=> 'Pop-up venster bij een nieuw privébericht',
	'POST_EDIT_PM'				=> 'Wijzig bericht',
	'POST_FORWARD_PM'			=> 'Bericht doorsturen',
	'POST_NEW_PM'				=> 'Bericht samenstellen',
	'POST_PM_LOCKED'			=> 'Privéberichten-sectie is gesloten.',
	'POST_PM_POST'				=> 'Citeer bericht',
	'POST_QUOTE_PM'				=> 'Citeer bericht',
	'POST_REPLY_PM'				=> 'Reageer op bericht',
	'PRINT_PM'					=> 'Afdrukweergave',
	'PREFERENCES_UPDATED'		=> 'Uw voorkeuren zijn bijgewerkt.',
	'PROFILE_INFO_NOTICE'		=> 'Let op, deze informatie kan zichtbaar zijn voor andere gebruikers. Wees voorzichtig met persoonlijke informatie. Alle velden die gemarkeerd zijn met een * moeten compleet ingevuld zijn.',
	'PROFILE_UPDATED'			=> 'Uw profiel is bijgewerkt.',

	'RECIPIENT'							=> 'Ontvanger',
	'RECIPIENTS'						=> 'Ontvangers',
	'REGISTRATION'						=> 'Registratie',
	'RELEASE_MESSAGES'					=> '%sAlle achtergehouden berichten vrijgeven%s deze worden her-gesorteerd naar de juiste mappen als er genoeg ruimte is vrijgemaakt.',
	'REMOVE_ADDRESS'					=> 'Adres verwijderen',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Verwijder geselecteerde bladwijzers',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Weet u zeker dat u alle geselecteerde bladwijzers wilt verwijderen?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Verwijder gemarkeerde bladwijzers',
	'REMOVE_FOLDER'						=> 'Map verwijderen',
	'REMOVE_FOLDER_CONFIRM'				=> 'Weet u zeker dat u deze map wilt verwijderen?',
	'RENAME'							=> 'Hernoemen',
	'RENAME_FOLDER'						=> 'Map hernoemen',
	'REPLIED_MESSAGE'					=> 'Gereageerd op bericht',
	'REPLY_TO_ALL'						=> 'Naar afzender en alle ontvangers reageren.',
	'REPORT_PM'							=> 'Meld dit privébericht',	
	'RESIGN_SELECTED'					=> 'Geselecteerde uit functie degraderen', // Resign selected
	'RETURN_FOLDER'						=> '%1$sTerug naar de vorige map%2$s',
	'RETURN_UCP'						=> '%sTerug naar het gebruikerspaneel%s',
	'RULE_ADDED'						=> 'Regel succesvol toegevoegd',
	'RULE_ALREADY_DEFINED'				=> 'Deze regel was vorige keer al opgegeven.',
	'RULE_DELETED'						=> 'Regel succesvol verwijderd.',
	'RULE_NOT_DEFINED'					=> 'Regel niet correct opgegeven.',
	'RULE_REMOVED_MESSAGE'				=> 'Eén privébericht is verwijderd door de privéberichtenfilters.',
	'RULE_REMOVED_MESSAGES'				=> '%d privéberichten zijn verwijderd door de privéberichtenfilters.',

	'SAME_PASSWORD_ERROR'		=> 'Het nieuwe wachtwoord wat u heeft opgegeven is gelijk aan het huidige wachtwoord.',
	'SEARCH_YOUR_POSTS'			=> 'Bekijk uw berichten',
	'SEND_PASSWORD'				=> 'Wachtwoord versturen',
	'SENT_AT'					=> 'Verzonden', // Wordt gebruikt voor datums in privéberichten.
	'SHOW_EMAIL'				=> 'Gebruikers kunnen met mij contact opnemen via e-mail',
	'SIGNATURE_EXPLAIN'			=> 'Dit is een stukje tekst, of een afbeelding wat toegevoegd wordt aan elk bericht dat u plaatst. Er is een %d tekenlimiet',
	'SIGNATURE_PREVIEW'			=> 'Uw onderschrift zal er zo uit komen te zien in berichten',
	'SIGNATURE_TOO_LONG'		=> 'Uw onderschrift is te lang.',
	'SORT'						=> 'Sorteer',
	'SORT_COMMENT'				=> 'Bestandscommentaar',
	'SORT_DOWNLOADS'			=> 'Downloads',
	'SORT_EXTENSION'			=> 'Extensie',
	'SORT_FILENAME'				=> 'Bestandsnaam',
	'SORT_POST_TIME'			=> 'Berichttijd',
	'SORT_SIZE'					=> 'Bestandsgrootte',

	'TIMEZONE'					=> 'Tijdzone',
	'TO'						=> 'Naar',
	'TOO_MANY_RECIPIENTS'       => 'U heeft geprobeerd een privébericht te versturen naar te veel ontvangers.',
	'TOO_MANY_REGISTERS'		=> 'U heeft het maximaal aantal registratiepogingen voor deze sessie overschreden. Probeer het later nog eens.',

	'UCP'						=> 'Gebruikerspaneel',
	'UCP_ACTIVATE'				=> 'Account activeren',
	'UCP_ADMIN_ACTIVATE'		=> 'U moet een werkend e-mailadres invoeren voor uw account wordt geactiveerd. De beheerder zal uw account beoordelen en bij goedkeuring zult u een e-mailbericht ontvangen op het door uw opgegeven e-mailadres.',
	'UCP_AIM'					=> 'AOL Instant Messenger',
	'UCP_ATTACHMENTS'			=> 'Bijlagen',
	'UCP_COPPA_BEFORE'			=> 'Voor %s',
	'UCP_COPPA_ON_AFTER'		=> 'Op of later %s',
	'UCP_EMAIL_ACTIVATE'		=> 'U moet een werkend e-mailadres invoeren voor uw account wordt geactiveerd. U zult een e-mailbericht ontvangen op het door uw opgegeven e-mailadres dat een account activatielink bevat.',
	'UCP_ICQ'					=> 'ICQ-nummer',
	'UCP_JABBER'				=> 'Jabber-adres',

	'UCP_MAIN'					=> 'Overzicht',
	'UCP_MAIN_ATTACHMENTS'		=> 'Bijlagenbeheer',
	'UCP_MAIN_BOOKMARKS'		=> 'Bladwijzersbeheer',
	'UCP_MAIN_DRAFTS'			=> 'Conceptenbeheer',
	'UCP_MAIN_FRONT'			=> 'Overzicht', //Front page
	'UCP_MAIN_SUBSCRIBED'		=> 'Abonnementenbeheer',

	'UCP_MSNM'					=> 'MSN Messenger/WLM',
	'UCP_NO_ATTACHMENTS'		=> 'U heeft geen bestanden geplaatst',

	'UCP_PREFS'					=> 'Forumvoorkeuren',
	'UCP_PREFS_PERSONAL'		=> 'Algemene instellingen wijzigen',
	'UCP_PREFS_POST'			=> 'Berichtstandaardwaarden wijzigen', // Edit posting defaults
	'UCP_PREFS_VIEW'			=> 'Weergaveopties wijzigen',

	'UCP_PM'					=> 'Privéberichten',
	'UCP_PM_COMPOSE'			=> 'Bericht samenstellen',
	'UCP_PM_DRAFTS'				=> 'PB-concepten beheren',
	'UCP_PM_OPTIONS'			=> 'Regels, mappen &amp; instellingen',
	'UCP_PM_POPUP'				=> 'Privéberichten',
	'UCP_PM_POPUP_TITLE'		=> 'Privébericht pop-up',
	'UCP_PM_UNREAD'				=> 'Ongelezen berichten',
	'UCP_PM_VIEW'				=> 'Bekijk berichten',

	'UCP_PROFILE'				=> 'Profiel',
	'UCP_PROFILE_AVATAR'		=> 'Avatar wijzigen',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Profiel wijzigen',
	'UCP_PROFILE_REG_DETAILS'	=> 'Accountinstellingen wijzigen',
	'UCP_PROFILE_SIGNATURE'		=> 'Onderschrift wijzigen',

	'UCP_USERGROUPS'			=> 'Gebruikersgroepen',
	'UCP_USERGROUPS_MEMBER'		=> 'Lidmaatschappen wijzigen',
	'UCP_USERGROUPS_MANAGE'		=> 'Groepen beheren',

	'UCP_REGISTER_DISABLE'					=> 'Het aanmaken van een nieuwe account is momenteel niet mogelijk.',
	'UCP_REMIND'							=> 'Wachtwoord versturen',
	'UCP_RESEND'							=> 'Activatie e-mail versturen',
	'UCP_WELCOME'							=> 'Welkom in het gebruikerspaneel. Vanuit hier kunt u uw profiel volgen, bekijken en bijwerken, voorkeuren opgeven en forums en onderwerpen volgen. U kunt ook berichten versturen naar andere gebruikers (als dit is toegestaan). Maar vergeet niet voordat u verder gaat de mededelingen eventjes door te lezen.',
	'UCP_YIM'								=> 'Yahoo! Messenger',
	'UCP_ZEBRA'								=> 'Vrienden &amp; vijanden',
	'UCP_ZEBRA_FOES'						=> 'Vijanden beheren',
	'UCP_ZEBRA_FRIENDS'						=> 'Vrienden beheren',
	'UNDISCLOSED_RECIPIENT'			        => 'Onbekende ontvanger',	
	'UNKNOWN_FOLDER'						=> 'Onbekende map',
	'UNWATCH_MARKED'						=> 'Gemarkeerde niet meer volgen',
	'UPLOAD_AVATAR_FILE'					=> 'Upload vanaf uw computer',
	'UPLOAD_AVATAR_URL'						=> 'Upload vanaf een URL',
	'UPLOAD_AVATAR_URL_EXPLAIN'				=> 'Voer de URL van de locatatie waar de afbeelding zich bevindt. De afbeelding zal worden gekopieerd naar deze site.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'			=> 'Gebruikersnaam moet tussen %1$d en %2$d tekens lang zijn, en mogen alleen alfanumerieke tekens zijn.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'		=> 'Gebruikersnaam moet tussen %1$d en %2$d tekens lang zijn, en moeten alfanumerieke, spaties en -+_[] tekens zijn.',
	'USERNAME_ASCII_EXPLAIN'				=> 'Gebruikersnaam moet tussen %1$d en %2$d tekens lang zijn, en mogen alleen ASCII-tekens zijn, dus geen speciale symbolen.',
	'USERNAME_LETTER_NUM_EXPLAIN'			=> 'Gebruikersnaam moet tussen %1$d en %2$d tekens lang zijn, en mogen alleen letters of cijfers zijn.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'	=> 'Gebruikersnaam moet tussen %1$d en %2$d tekens lang zijn, en mogen letters, cijfers, spaties of -+_[] tekens zijn.',
	'USERNAME_CHARS_ANY_EXPLAIN'			=> 'Lengte moet tussen de %1$d en %2$d tekens zijn.',
	'USERNAME_TAKEN_USERNAME'				=> 'De gebruikersnaam die u heeft ingevoerd is al in gebruik, kies een alternatieve.',
	'USERNAME_DISALLOWED_USERNAME'			=> 'De gebruikersnaam die u heeft ingevoerd is niet toegestaan, of bevatten niet toegestaande woorden. Kies een andere gebruikersnaam.',
	'USER_NOT_FOUND_OR_INACTIVE'			=> 'De gebruikersnaam die u heeft opgegeven kon niet worden gevonden, of is een niet geactiveerde gebruiker.',

	'VIEW_AVATARS'				=> 'Avatars weergeven',
	'VIEW_EDIT'					=> 'Bekijk/wijzig',
	'VIEW_FLASH'				=> 'Flash-animaties weergeven',
	'VIEW_IMAGES'				=> 'Afbeeldingen in berichten weergeven',
	'VIEW_NEXT_HISTORY'			=> 'Volgende PB in geschiedenis ',
	'VIEW_NEXT_PM'				=> 'Volgende PB',
	'VIEW_PM'					=> 'Bericht bekijken',
	'VIEW_PM_INFO'				=> 'Berichtdetails',
	'VIEW_PM_MESSAGE'			=> '1 bericht',
	'VIEW_PM_MESSAGES'			=> '%d berichten',
	'VIEW_PREVIOUS_HISTORY'		=> 'Vorige PB in geschiedenis',
	'VIEW_PREVIOUS_PM'			=> 'Vorige PB',
	'VIEW_SIGS'					=> 'Onderschriften weergeven',
	'VIEW_SMILIES'				=> 'Smileys als afbeeldingen weergeven',
	'VIEW_TOPICS_DAYS'			=> 'Onderwerpen van vorige dagen weergeven',
	'VIEW_TOPICS_DIR'			=> 'Onderwerp sorteervolgorde weergeven',
	'VIEW_TOPICS_KEY'			=> 'Onderwerpsortering weergeven op',
	'VIEW_POSTS_DAYS'			=> 'Berichten weergeven van de vorige dagen',
	'VIEW_POSTS_DIR'			=> 'Berichten sorteervolgorde weergeven',
	'VIEW_POSTS_KEY'			=> 'Berichtensortering weergeven op',

	'WATCHED_EXPLAIN'			=> 'Hieronder is de lijst van forums en onderwerpen waarop u geabonneerd bent. U krijgt een e-mailbericht toegestuurd wanneer er een nieuw bericht is. Om het abonnement op te zeggen, markeert u het forum of onderwerp, en klikt u op de <em>Abonnement opzeggen</em> knop.',
	'WATCHED_FORUMS'			=> 'Forums met abonnement',
	'WATCHED_TOPICS'			=> 'Onderwerpen met abonnement',
	'WRONG_ACTIVATION'			=> 'De activatiesleutel die u heeft opgegeven kan niet in de database worden gevonden.',

	'YOUR_DETAILS'				=> 'Uw activiteit',
	'YOUR_FOES'					=> 'Uw vijanden',
	'YOUR_FOES_EXPLAIN'			=> 'Om gebruikersnamen te verwijderen, selecteert u ze en klikt u op versturen.',
	'YOUR_FRIENDS'				=> 'Uw vrienden',
	'YOUR_FRIENDS_EXPLAIN'		=> 'Om gebruikersnamen te verwijderen, selecteert u ze en klikt u op versturen.',
	'YOUR_WARNINGS'				=> 'Uw waarschuwingsniveau',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Plaats in map',
		'MARK_AS_READ'		=> 'Als gelezen markeren',
		'MARK_AS_IMPORTANT'	=> 'Bericht markeren',
		'DELETE_MESSAGE'	=> 'Bericht verwijderen'
	),

	'PM_CHECK' => array(
		'SUBJECT'	=> 'Titel',
		'SENDER'	=> 'Afzender',
		'MESSAGE'	=> 'Bericht',
		'STATUS'	=> 'Berichtstatus',
		'TO'		=> 'Verzonden aan'
	),

	'PM_RULE' => array(
		'IS_LIKE'		=> 'is als',
		'IS_NOT_LIKE'	=> 'is niet als',
		'IS'			=> 'is',
		'IS_NOT'		=> 'is niet',
		'BEGINS_WITH'	=> 'begint met',
		'ENDS_WITH'		=> 'eindigt met',
		'IS_FRIEND'		=> 'is vriend',
		'IS_FOE'		=> 'is vijand',
		'IS_USER'		=> 'is gebruiker',
		'IS_GROUP'		=> 'is lid van gebruikersgroep',
		'ANSWERED'		=> 'gereageerd',
		'FORWARDED'		=> 'doorgestuurd',
		'TO_GROUP'		=> 'naar mijn standaard gebruikersgroep',
		'TO_ME'			=> 'naar mij'
	),

    'GROUPS_EXPLAIN'	=> 'Gebruikersgroepen maken het het voor forumbeheerders gemakkelijker om gebruikers te beheren. Standaard zult u worden geplaatst in een specifieke groep, dit is uw standaardgroep. Deze groep bepaald hoe u overkomt naar andere gebruikers, bijvoorbeeld de kleur van uw gebruikersnaam, avatar, rang, etc. Afhankelijk of de beheerder het toestaat, mag u uw standaardgroep wijzigen. U kunt ook worden geplaatst in andere groepen of u kunt lid worden van andere groepen mits het is toegestaan. Sommige groepen kunnen u extra permissies geven om inhoud te bekijken of uw capaciteiten te vergroten in andere gebieden.',
	'GROUP_LEADER'		=> 'Groepsleiderschappen',
	'GROUP_MEMBER'		=> 'Lidmaatschappen',
	'GROUP_PENDING'		=> 'Wachtende lidmaatschappen',
	'GROUP_NONMEMBER'	=> 'Geen-lidmaatschappen',
	'GROUP_DETAILS'		=> 'Groepsdetails',

	'NO_LEADER'		=> 'Geen groepsleiderschappen',
	'NO_MEMBER'		=> 'Geen lidmaatschappen',
	'NO_PENDING'	=> 'Geen wachtende lidmaatschappen',
	'NO_NONMEMBER'	=> 'Geen lidmaatschap op groepen',
));

?>