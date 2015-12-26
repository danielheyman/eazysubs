<?php
/**
*
* acp_common [Dutch]
*
* @package language
* @version $Id: common.php 330 2010-11-14 22:15:21Z Raimon $
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Beheerders',
	'ACP_ADMIN_LOGS'			=> 'Beheerderslogboek',
	'ACP_ADMIN_ROLES'			=> 'Beheerdersrollen',
	'ACP_ATTACHMENTS'			=> 'Bijlagen',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Bijlageninstellingen',
	'ACP_AUTH_SETTINGS'			=> 'Authenticatie',
	'ACP_AUTOMATION'			=> 'Automatisering',
	'ACP_AVATAR_SETTINGS'		=> 'Avatar-instellingen',

	'ACP_BACKUP'				=> 'Back-up',
	'ACP_BAN'					=> 'Verbanningen',
	'ACP_BAN_EMAILS'			=> 'E-mailadressen verbannen',
	'ACP_BAN_IPS'				=> 'IP-adressen verbannen',
	'ACP_BAN_USERNAMES'			=> 'Gebruikersnamen verbannen',
	'ACP_BBCODES'				=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> 'Forumconfiguratie',
	'ACP_BOARD_FEATURES'		=> 'Forumfunctionaliteiten',
	'ACP_BOARD_MANAGEMENT'		=> 'Forumbeheer',
	'ACP_BOARD_SETTINGS'		=> 'Foruminstellingen',
	'ACP_BOTS'					=> 'Spiders/Robots',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_DATABASE'			=> 'Database',
	'ACP_CAT_DOT_MODS'			=> '.MODs',
	'ACP_CAT_FORUMS'			=> 'Forums',
	'ACP_CAT_GENERAL'			=> 'Algemeen',
	'ACP_CAT_MAINTENANCE'		=> 'Onderhoud',
	'ACP_CAT_PERMISSIONS'		=> 'Permissies',
	'ACP_CAT_POSTING'			=> 'Berichten',
	'ACP_CAT_STYLES'			=> 'Stijlen',
	'ACP_CAT_SYSTEM'			=> 'Systeem',
	'ACP_CAT_USERGROUP'			=> 'Gebruikers en groepen',
	'ACP_CAT_USERS'				=> 'Gebruikers',
	'ACP_CLIENT_COMMUNICATION'	=> 'Cliëntcommunicatie',
	'ACP_COOKIE_SETTINGS'		=> 'Cookie-instellingen',
	'ACP_CRITICAL_LOGS'			=> 'Foutenlogboek',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Aangepaste profielvelden',

	'ACP_DATABASE'				=> 'Database-beheer',
	'ACP_DISALLOW'				=> 'Verboden',
	'ACP_DISALLOW_USERNAMES'	=> 'Verboden gebruikersnamen',

	'ACP_EMAIL_SETTINGS'		=> 'E-mailinstellingen',
	'ACP_EXTENSION_GROUPS'		=> 'Extensiegroepen beheren',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Gebaseerde forumpermissies',
	'ACP_FORUM_LOGS'				=> 'Forumlogboek',
	'ACP_FORUM_MANAGEMENT'			=> 'Forumbeheer',
	'ACP_FORUM_MODERATORS'			=> 'Forummoderators',
	'ACP_FORUM_PERMISSIONS'			=> 'Forumpermissies',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Forumpermissies kopiëren',
	'ACP_FORUM_ROLES'				=> 'Forumrollen',

	'ACP_GENERAL_CONFIGURATION'		=> 'Algemene configuratie',
	'ACP_GENERAL_TASKS'				=> 'Algemene taken',
	'ACP_GLOBAL_MODERATORS'			=> 'Globale moderators',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Globale permissies',
	'ACP_GROUPS'					=> 'Groepen',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Groepspermissies voor forums',
	'ACP_GROUPS_MANAGE'				=> 'Groepen beheren',
	'ACP_GROUPS_MANAGEMENT'			=> 'Groepsbeheer',
	'ACP_GROUPS_PERMISSIONS'		=> 'Groepspermissies',

	'ACP_ICONS'					=> 'Onderwerppictogrammen',
	'ACP_ICONS_SMILIES'			=> 'Onderwerppictogrammen/smileys',
	'ACP_IMAGESETS'				=> 'Afbeeldingsets',
	'ACP_INACTIVE_USERS'		=> 'Inactieve gebruikers',
	'ACP_INDEX'					=> 'Beheerdersindex',

	'ACP_JABBER_SETTINGS'		=> 'Jabber-instellingen',

	'ACP_LANGUAGE'				=> 'Taalbeheer',
	'ACP_LANGUAGE_PACKS'		=> 'Taalpakketten',
	'ACP_LOAD_SETTINGS'			=> 'Laadinstellingen',
	'ACP_LOGGING'				=> 'Logboeken',

	'ACP_MAIN'					=> 'Beheerdersindex',
	'ACP_MANAGE_EXTENSIONS'		=> 'Extensies beheren',
	'ACP_MANAGE_FORUMS'			=> 'Forums beheren',
	'ACP_MANAGE_RANKS'			=> 'Rangen beheren',
	'ACP_MANAGE_REASONS'		=> 'Meld en afkeuringsredenen beheren',
	'ACP_MANAGE_USERS'			=> 'Gebruikers beheren',
	'ACP_MASS_EMAIL'			=> 'Massa-e-mail',
	'ACP_MESSAGES'				=> 'Berichten',
	'ACP_MESSAGE_SETTINGS'		=> 'Privéberichteninstellingen',
	'ACP_MODULE_MANAGEMENT'		=> 'Modulebeheer',
	'ACP_MOD_LOGS'				=> 'Moderatorslogboek',
	'ACP_MOD_ROLES'				=> 'Moderatorsrollen',

	'ACP_NO_ITEMS'				=> 'Er zijn nog geen items.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Berichtloze bijlagen',

	'ACP_PERMISSIONS'			=> 'Permissies',
	'ACP_PERMISSION_MASKS'		=> 'Permissiemaskers',
	'ACP_PERMISSION_ROLES'		=> 'Permissierollen',
	'ACP_PERMISSION_TRACE'		=> 'Permissies nagaan',
	'ACP_PHP_INFO'				=> 'PHP-informatie',
	'ACP_POST_SETTINGS'			=> 'Berichteninstellingen',
	'ACP_PRUNE_FORUMS'			=> 'Forums automatisch opschonen',
	'ACP_PRUNE_USERS'			=> 'Gebruikers automatisch opschonen',
	'ACP_PRUNING'				=> 'Automatisch opschonen',

	'ACP_QUICK_ACCESS'			=> 'Snelle toegang',

	'ACP_RANKS'					=> 'Rangen',
	'ACP_REASONS'				=> 'Meldings-/afkeurings-redenen',
	'ACP_REGISTER_SETTINGS'		=> 'Registratie-instellingen',

	'ACP_RESTORE'				=> 'Herstellen',

	'ACP_FEED'					=> 'Feeds beheren',
	'ACP_FEED_SETTINGS'			=> 'Feed-instellingen',

	'ACP_SEARCH'				=> 'Zoekconfiguratie',
	'ACP_SEARCH_INDEX'			=> 'Zoekindex',
	'ACP_SEARCH_SETTINGS'		=> 'Zoekinstellingen',

	'ACP_SECURITY_SETTINGS'		=> 'Beveiligingsinstellingen',
	'ACP_SEND_STATISTICS'		=> 'Statische informatie versturen',
	'ACP_SERVER_CONFIGURATION'	=> 'Server-configuratie',
	'ACP_SERVER_SETTINGS'		=> 'Server-instellingen',
	'ACP_SIGNATURE_SETTINGS'	=> 'Onderschriftinstellingen',
	'ACP_SMILIES'				=> 'Smileys',
	'ACP_STYLE_COMPONENTS'		=> 'Stijlonderdelen',
	'ACP_STYLE_MANAGEMENT'		=> 'Stijlbeheer',
	'ACP_STYLES'				=> 'Stijlen',

	'ACP_SUBMIT_CHANGES'		=> 'Wijzigingen versturen',

	'ACP_TEMPLATES'				=> 'Templates',
	'ACP_THEMES'				=> 'Thema’s',

	'ACP_UPDATE'					=> 'Updates',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Gebruikerspermissies voor forums',
	'ACP_USERS_LOGS'				=> 'Gebruikerslogboek',
	'ACP_USERS_PERMISSIONS'			=> 'Gebruikerspermissies',
	'ACP_USER_ATTACH'				=> 'Bijlagen',
	'ACP_USER_AVATAR'				=> 'Avatar',
	'ACP_USER_FEEDBACK'				=> 'Feedback',
	'ACP_USER_GROUPS'				=> 'Groepen',
	'ACP_USER_MANAGEMENT'			=> 'Gebruikersbeheer',
	'ACP_USER_OVERVIEW'				=> 'Overzicht',
	'ACP_USER_PERM'					=> 'Permissies',
	'ACP_USER_PREFS'				=> 'Voorkeuren',
	'ACP_USER_PROFILE'				=> 'Profiel',
	'ACP_USER_RANK'					=> 'Rang',
	'ACP_USER_ROLES'				=> 'Gebruikersrollen',
	'ACP_USER_SECURITY'				=> 'Gebruikersveiligheid',
	'ACP_USER_SIG'					=> 'Onderschrift',
	'ACP_USER_WARNINGS'				=> 'Waarschuwingen',

	'ACP_VC_SETTINGS'					=> 'Spambot tegenmaatregelen',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'CAPTCHA-afbeeldingsvoorbeeld',
	'ACP_VERSION_CHECK'					=> 'Controleren voor updates',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Beheerderspermissies bekijken',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Moderatorpermissies bekijken',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Gebaseerde forumpermissies bekijken',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Globale moderatiepermissies bekijken',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Gebaseerde gebruikerspermissies bekijken',

	'ACP_WORDS'					=> 'Woordcensuur',

	'ACTION'				=> 'Actie',
	'ACTIONS'				=> 'Acties',
	'ACTIVATE'				=> 'Activeren',
	'ADD'					=> 'Toevoegen',
	'ADMIN'					=> 'Beheer',
	'ADMIN_INDEX'			=> 'Beheerderspaneel',
	'ADMIN_PANEL'			=> 'Beheerderspaneel',

	'ADM_LOGOUT'			=> 'Beheerderspaneel&nbsp;afmelden',
	'ADM_LOGGED_OUT'		=> 'Succesvol afgemeld vanuit het beheerderspaneel',

	'BACK'					=> 'Terug',

	'COLOUR_SWATCH'			=> 'Webveilige kleurenpalet',
	'CONFIG_UPDATED'		=> 'Configuratie succesvol bijgewerkt.',

	'DEACTIVATE'				=> 'Deactiveren',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Het opgegeven pad “%s” bestaat niet.',
	'DIRECTORY_NOT_DIR'			=> 'Het opgegeven pad “%s” is geen directory.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Het opgegeven pad “%s” is niet schrijfbaar.',
	'DISABLE'					=> 'Uitschakelen',
	'DOWNLOAD'					=> 'Downloaden',
	'DOWNLOAD_AS'				=> 'Downloaden als',
	'DOWNLOAD_STORE'			=> 'Downloaden of bestand opslaan',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'U mag het bestand direct downloaden of het opslaan in uw <samp>store/</samp> map.',

	'EDIT'					=> 'Wijzigen',
	'ENABLE'				=> 'Inschakelen',
	'EXPORT_DOWNLOAD'		=> 'Downloaden',
	'EXPORT_STORE'			=> 'Opslaan',

	'GENERAL_OPTIONS'		=> 'Algemene opties',
	'GENERAL_SETTINGS'		=> 'Algemene instellingen',
	'GLOBAL_MASK'			=> 'Globale permissiemasker',

	'INSTALL'				=> 'Installeren',
	'IP'					=> 'Gebruikers-IP',
	'IP_HOSTNAME'			=> 'IP-adressen of hostnamen',

	'LOGGED_IN_AS'			=> 'U bent aangemeld als:',
	'LOGIN_ADMIN'			=> 'Om dit forum te beheren moet u een aangemelde gebruiker zijn.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Om dit forum te beheren moet u uwzelf opnieuw aanmelden.',
	'LOGIN_ADMIN_SUCCESS'	=> 'U bent succesvol aangemeld en u zult nu worden doorgestuurd naar het beheerderspaneel.',
	'LOOK_UP_FORUM'			=> 'Forum selecteren',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'U kunt meer dan één forum selecteren.',

	'MANAGE'				=> 'Beheren',
	'MENU_TOGGLE'			=> 'Zijmenu weergeven of verbergen',
	'MORE'					=> 'Meer',			// Not used at the moment
	'MORE_INFORMATION'		=> 'Meer informatie »',
	'MOVE_DOWN'				=> 'Omlaag',
	'MOVE_UP'				=> 'Omhoog',

	'NOTIFY'				=> 'Notificatie',
	'NO_ADMIN'				=> 'U bent niet bevoegd om dit forum te beheren.',
	'NO_EMAILS_DEFINED'		=> 'Er zijn geen geldige e-mailadressen gevonden.',
	'NO_PASSWORD_SUPPLIED'	=> 'U moet uw wachtwoord invullen om toegang te krijgen tot het beheerderspaneel.',

	'OFF'					=> 'Uit',
	'ON'					=> 'Aan',

	'PARSE_BBCODE'						=> 'BBCode gebruiken',
	'PARSE_SMILIES'						=> 'Smileys gebruiken',
	'PARSE_URLS'						=> 'Links gebruiken',
	'PERMISSIONS_TRANSFERRED'			=> 'Permissies gekopiëerd',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'U heeft momenteel de permissies van %1$s. U kunt het forum doorzoeken met de permissies van deze gebruiker, maar u heeft geen toegang tot het beheerderspaneel aangezien beheerderspermissies niet zijn gekopiëerd. U kunt de <a href="%2$s"><strong>permissies herstellen op elk ogenblik naar uw eigen permissies</strong></a>.',
	'PROCEED_TO_ACP'					=> '%sNaar het beheerderspaneel gaan%s',

	'REMIND'							=> 'Herinneren',
	'RESYNC'							=> 'Hersynchroniseren',
	'RETURN_TO'							=> 'Terug naar…',

	'SELECT_ANONYMOUS'		=> 'Gastgebruiker selecteren',
	'SELECT_OPTION'			=> 'Optie selecteren',

	'SETTING_TOO_LOW'		=> 'De opgegeven waarde voor de instelling “%1$s” is te laag. De minimum geaccepteerde waarde is %2$d.',
	'SETTING_TOO_BIG'		=> 'De opgegeven waarde voor de instelling “%1$s” is te groot. De maximum geaccepteerde waarde is %2$d.',
	'SETTING_TOO_LONG'		=> 'De opgegeven waarde voor de instelling “%1$s” is te lang. De maximum geaccepteerde lengte is %2$d.',
	'SETTING_TOO_SHORT'		=> 'De opgegeven waarde voor de instelling “%1$s” is te kort. De minimum geaccepteerde lengte is %2$d.',

	'SHOW_ALL_OPERATIONS'	=> 'Alle acties weergeven',

	'UCP'					=> 'Gebruikerspaneel',
	'USERNAMES_EXPLAIN'		=> 'Iedere gebruiker op een aparte regel plaatsen.',
	'USER_CONTROL_PANEL'	=> 'Gebruikerspaneel',

	'WARNING'				=> 'Waarschuwing',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Deze pagina weergeeft informatie over de geïnstalleerde PHP-versie op deze server. Het weergeeft onder andere de standaardinstellingen, geladen modules en beschikbare variabelen. Deze informatie kan handig zijn als u een probleem wilt achterhalen. Vergeet niet dat sommige hosting bedrijven, een limiet kunnen hebben om bepaalde informatie te kunnen weergeven i.v.m. veiligheidsredenen. Wij raden u aan om niet iedereen de informatie te geven, tenzij het gevraagd wordt door één van de <a href="http://over.phpbbservice.nl/team/">phpBBservice.nl teamleden</a> op de supportforums.',

	'NO_PHPINFO_AVAILABLE'	=> 'Informatie over uw PHP-configuratie kan niet worden verkregen. phpinfo() is uitgeschakeld i.v.m. veiligheidsredenen.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Dit weergeeft alle acties die zijn uitgevoerd door forumbeheerders. U kunt ze sorteren op gebruikersnaam, datum, IP-adres of actie. Als u de juiste permissies heeft, kunt u een individuele log verwijderen of heel het logboek.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Dit weergeeft alle acties die zijn uitgevoerd door het forum zelf. Dit logboek voorziet u van informatie zodat u in staat bent om specifieke problemen op te kunnen lossen, bijvoorbeeld niet afgeleverde e-mailberichten. U kunt ze sorteren op gebruikersnaam, datum, IP-adres of actie. Als u de juiste permissies heeft, kunt u een individuele log verwijderen of heel het logboek.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Dit weergeeft alle acties die zijn gedaan op forums, onderwerpen en berichten en ook de acties die zijn uitgevoerd op gebruikers door moderators, inclusief verbanningen. U kunt ze sorteren op gebruikersnaam, datum, IP-adres of actie. Als u de juiste permissies heeft, kunt u een individuele log verwijderen of heel het logboek.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Dit weergeeft alle acties die zijn uitgevoerd door gebruikers of op gebruikers (meldingen, waarschuwingen en gebruikersnotities).', //?
	'ALL_ENTRIES'				=> 'Alle gegevens',

	'DISPLAY_LOG'	=> 'Gegevens weergeven van vorige',

	'NO_ENTRIES'	=> 'Er zijn geen logboek-gegevens gevonden voor deze periode.',

	'SORT_IP'		=> 'IP-adres',
	'SORT_DATE'		=> 'Datum',
	'SORT_ACTION'	=> 'Logactie',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Bedankt dat u heeft gekozen voor phpBB als forumsysteem. Dit scherm geeft u een snel overzicht over alle diverse statistieken van uw forum. De links aan de linkerkant van dit scherm geven u de mogelijkheden om elk onderdeel te beheren van uw forum. Elke pagina zal instructies bevatten over hoe u de hulpmiddelen kunt gebruiken.',
	'ADMIN_LOG'					=> 'Gelogde beheerdersacties',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Dit geeft u een overzicht van de laatste vijf acties die zijn uitgevoerd door forumbeheerders. Een volledige kopie van de log kan worden bekeken in het juist menu of door op de volgende link hieronder te klikken.',
	'AVATAR_DIR_SIZE'			=> 'Grootte van de avatar-directory',

	'BOARD_STARTED'		=> 'Forum gestart op',
	'BOARD_VERSION'		=> 'Forumversie',

	'DATABASE_SERVER_INFO'	=> 'Database-server',
	'DATABASE_SIZE'			=> 'Database-grootte',

	'FILES_PER_DAY'		=> 'Bijlagen per dag',
	'FORUM_STATS'		=> 'Forumstatistieken',

	'GZIP_COMPRESSION'	=> 'GZip-compressie',

	'NOT_AVAILABLE'		=> 'Niet beschikbaar',
	'NUMBER_FILES'		=> 'Aantal bijlagen',
	'NUMBER_POSTS'		=> 'Aantal berichten',
	'NUMBER_TOPICS'		=> 'Aantal onderwerpen',
	'NUMBER_USERS'		=> 'Aantal gebruikers',
	'NUMBER_ORPHAN'		=> 'Berichtloze bijlagen',
	
	'PHP_VERSION_OLD'	=> 'De versie van PHP op deze server zal niet langer worden ondersteunt door nieuwere versies van phpBB. %sKlik hier voor meer informatie%s.', // nieuwere, toekomstige ??

	'POSTS_PER_DAY'		=> 'Berichten per dag',

	'PURGE_CACHE'			=> 'Cache legen',
	'PURGE_CACHE_CONFIRM'	=> 'Weet u zeker dat u de cache wilt legen?',
	'PURGE_CACHE_EXPLAIN'	=> 'Alle cache gerelateerde items legen, dit is inclusief alle gecachte templatebestanden of queries.',

	'PURGE_SESSIONS'			=> 'Alle sessies legen',
	'PURGE_SESSIONS_CONFIRM'	=> 'Weet u zeker dat u alle sessies wilt legen? Dit zorgt ervoor dat alle gebruikers worden afgemeld.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Alle sessies legen. Dit zal ervoor zorgen dat alle gebruikers worden afgemeld door de sessie-tabel leeg te maken.',

	'RESET_DATE'					=> 'Opstartdatum van het forum resetten',
	'RESET_DATE_CONFIRM'			=> 'Weet u zeker dat u de opstartdatum van het forum wilt resetten?',
	'RESET_ONLINE'					=> 'De meeste gebruikers tegelijkertijd online resetten',
	'RESET_ONLINE_CONFIRM'			=> 'Weet u zeker dat u de meeste gebruikers tegelijkertijd online teller wilt resetten?',
	'RESYNC_POSTCOUNTS'				=> 'Berichtentellers hersychroniseren',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Alleen bestaande berichten worden meegenomen. Automatisch opgeschoonde berichten worden niet meegeteld.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Weet u zeker dat u de berichtentellers wilt hersynchroniseren?',
	'RESYNC_POST_MARKING'			=> 'Gestipte onderwerpen hersychroniseren',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Weet u zeker dat u de gestipte onderwerpen wilt hersynchroniseren?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Eerst worden alle onderwerpen ongemarkeerd, en daarna worden de onderwerpen correct gemarkeerd die enige activiteit hebben gezien gedurende zes maanden.',
	'RESYNC_STATS'					=> 'Statistieken hersychroniseren',
	'RESYNC_STATS_CONFIRM'			=> 'Weet u zeker dat u de statistieken wilt hersynchroniseren?',
	'RESYNC_STATS_EXPLAIN'			=> 'Herberekend het aantal berichten, onderwerpen, gebruikers en bestanden.',
	'RUN'							=> 'Nu uitvoeren',

	'STATISTIC'					=> 'Statistieken',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Hersychroniseren of resetten van de statistieken',

	'TOPICS_PER_DAY'	=> 'Onderwerpen per dag',

	'UPLOAD_DIR_SIZE'	=> 'Grootte van geplaatste bijlagen',
	'USERS_PER_DAY'		=> 'Gebruikers per dag',

	'VALUE'						=> 'Waarde',
	'VERSIONCHECK_FAIL'			=> 'Het was niet mogelijk om de laatste versie-informatie te verkrijgen.',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'Versie opnieuw controleren',
	'VIEW_ADMIN_LOG'			=> 'Beheerderslogboek bekijken',
	'VIEW_INACTIVE_USERS'		=> 'Inactieve gebruikers bekijken',

	'WELCOME_PHPBB'			=> 'Welkom bij phpBB',
	'WRITABLE_CONFIG'		=> 'Uw config bestand (config.php) is momenteel wereld-beschijfbaar. Wij raden u aan om de permissies te veranderen naar 640 of tenminste naar 644 (voor een voorbeeld: <a href="http://www.whelp.nl/2007/05/21/chmod-bestandsrechten/" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Inactiveringsdatum',
	'INACTIVE_REASON'				=> 'Reden',
	'INACTIVE_REASON_MANUAL'		=> 'Account gedeactiveerd door beheerder',
	'INACTIVE_REASON_PROFILE'		=> 'Profieldetails gewijzigd',
	'INACTIVE_REASON_REGISTER'		=> 'Pas geregistreerde account',
	'INACTIVE_REASON_REMIND'		=> 'Gebruikersaccount verplicht voor heractivatie',
	'INACTIVE_REASON_UNKNOWN'		=> 'Onbekend',
	'INACTIVE_USERS'				=> 'Inactieve gebruikers',
	'INACTIVE_USERS_EXPLAIN'		=> 'Dit is een lijst van gebruikers die zich hebben geregisteerd maar deze accounts zijn inactief. U kunt deze gebruikers activeren, verwijderen of een herinnering sturen (doormiddel van een e-mail).',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Dit is een lijst met de laatste 10 geregisteerde gebruikers die inactieve accounts hebben. Een volledige lijst is beschikbaar in het juiste menu of door de link hieronder te klikken waar u deze gebruikers kunt activeren, verwijderen of een herinnering sturen (doormiddel van een e-mail).',

	'NO_INACTIVE_USERS'	=> 'Geen inactieve gebruikers',

	'SORT_INACTIVE'		=> 'Inactiveringsdatum',
	'SORT_LAST_VISIT'	=> 'Laatste bezoek',
	'SORT_REASON'		=> 'Reden',
	'SORT_REG_DATE'		=> 'Registratiedatum',
	'SORT_LAST_REMINDER'=> 'Laatst herinnerd',
	'SORT_REMINDER'		=> 'Herinnering(en) verzonden',

	'USER_IS_INACTIVE'		=> 'Gebruiker is inactief',
));

// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Hier kunt u informatie versturen over uw server en forumconfiguratie naar phpBB voor een statische analyse. Alle informatie die u of uw website kan identificeren zal worden verwijderd - de data is volledig <strong>anoniem</strong>. We baseren beslissingen over de toekomst van phpBB-versies op deze informatie. De statistieken zullen publiekelijk beschikbaar zijn. Wij zullen ook deze data delen met het PHP-project, de programmeertaal waar phpBB gemaakt mee is.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Door de knop hieronder te gebruiken, ziet u een voorbeeld van alle variabelen die zullen worden verstuurd.',
	'DONT_SEND_STATISTICS'		=> 'Ga terug naar het beheerderspaneel, als u niet wenst om statische informatie naar phpBB te versturen.',
	'GO_ACP_MAIN'				=> 'Ga naar de startpagina van het beheerderspaneel',
	'HIDE_STATISTICS'			=> 'Details verbergen',
	'SEND_STATISTICS'			=> 'Statische informatie versturen',
	'SHOW_STATISTICS'			=> 'Details weergeven',
	'THANKS_SEND_STATISTICS'	=> 'Dank u wel voor het versturen van uw informatie.',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Gebruikerspermissies toegevoegd of gewijzigd voor gebruikers</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Gebruikerspermissies toegevoegd of gewijzigd voor groepen</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Globale moderatorpermissies toegevoegd of gewijzigd voor gebruikers</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Globale moderatorpermissies toegevoegd of gewijzigd voor groepen</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Beheerderspermissies toegevoegd of gewijzigd voor gebruikers</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Beheerderspermissies toegevoegd of gewijzigd voor groepen</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Beheerders toegevoegd of gewijzigd</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Globale moderators toegevoegd of gewijzigd</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Toegang voor forum toegevoegd of gewijzigd voor gebruikers</strong> van %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Toegang voor forummoderators toegevoegd of gewijzigd voor gebruikers</strong> van %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Toegang voor forum toegevoegd of gewijzigd voor groepen</strong> van %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Toegang voor forummoderators toegevoegd of gewijzigd voor groepen</strong> van %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Moderators toegevoegd of gewijzigd</strong> van %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Forumpermissies toegevoegd of gewijzigd</strong> van %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Beheerders verwijderd</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Globale moderators verwijderd</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Moderators verwijderd</strong> van %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Gebruiker/groep forumpermissies verwijderd</strong> van %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Permissies overgebracht van</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Eigen permissies hersteld na het gebruiken van de permissies van</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Mislukte aanmeldingspoging in het beheerderspaneel</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Succesvolle aanmeldingspoging in het beheerderspaneel</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Gebruikersbijlagen verwijderd</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Bijlagenextensie toegevoegd of gewijzigd</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Bijlagenextensie verwijderd</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Bijlagenextensie bijgewerkt</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Extensiegroep toegevoegd</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Extensiegroep gewijzigd</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Extensiegroep verwijderd</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Berichtloos bestand geüpload naar bericht</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Berichtloze bestanden verwijderd</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Gebruiker uitgesloten van verbanning</strong> met als reden “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>IP-adres uitgesloten van verbanning</strong> met als reden “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>E-mailadres uitgesloten van verbanning</strong> met als reden “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>Gebruiker verbannen</strong> met als reden “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>IP-adres verbannen</strong> met als reden “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>E-mailadres verbannen</strong> met als reden “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Verbanning van gebruiker opgeheven</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Verbanning van IP-adres opgeheven</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Verbanning van e-mailadres opgeheven</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Nieuwe BBCode toegevoegd</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>BBCode gewijzigd</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>BBCode verwijderd</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Nieuwe bot toegevoegd</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Bot verwijderd</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Bestaande bot bijgewerkt</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Beheerderslogboek geleegd</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Foutenlogboek geleegd</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Moderatorslogboek geleegd</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Gebruikerlogboek geleegd</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Gebruikerslogboek geleegd</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Bijlageninstellingen aangepast</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Authenticatie-instellingen aangepast</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Avatar-instellingen aangepast</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Cookie-instellingen aangepast</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>E-mailinstellingen aangepast</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Forumfunctionaliteiten aangepast</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Laadinstellingen aangepast</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Privéberichten-instellingen aangepast</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Berichteninstellingen aangepast</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Registratie-instellingen aangepast</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>Syndicatie-feed-instellingen aangepast</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Zoekinstellingen aangepast</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Beveiligingsinstellingen aangepast</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Server-instellingen aangepast</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Foruminstellingen aangepast</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Onderschriftinstellingen aangepast</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Anti-spambot instellingen aangepast</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Onderwerp goedgekeurd</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Gebruiker haalde onderwerp omhoog</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Bericht “%1$s” verwijderd, geschreven door</strong><br />» %2$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Schaduwonderwerp verwijderd</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Onderwerp “%1$s” verwijderd, geschreven door</strong><br />» %2$s',
	'LOG_FORK'					=> '<strong>Onderwerp gekopiëerd</strong><br />» van %s',
	'LOG_LOCK'					=> '<strong>Onderwerp gesloten</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Bericht gesloten</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Berichten samengevoegd</strong> naar onderwerp<br />» %s',
	'LOG_MOVE'					=> '<strong>Onderwerp verplaatst</strong><br />» van %1$s naar %2$s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>PB-melding gesloten</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>PB-melding verwijderd</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Bericht goedgekeurd</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Bericht “%1$s” is afgekeurd met de volgende reden</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Bericht “%1$s” gewijzigd, geschreven door</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>Melding gesloten</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Melding verwijderd</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Gesplitste berichten verplaatst</strong><br />» naar %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Berichten gesplitst</strong><br />» van %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>Onderwerp goedgekeurd</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Onderwerp “%1$s” is afgekeurd met de volgende reden</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Onderwerpentellers gehersychroniseerd</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Onderwerptype gewijzigd</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Onderwerp heropend</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Bericht heropend</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Niet-toegestaande gebruikersnaam toegevoegd</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Niet-toegestaande gebruikersnaam verwijderd</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Database back-up</strong>',
	'LOG_DB_DELETE'			=> '<strong>Database back-up verwijderd</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Database back-up hersteld</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>IP-adres/hostnaam uitgesloten van downloadlijst</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>IP-adres/hostnaam toegevoegd aan downloadlijst</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>IP-adres/hostnaam verwijderd van downloadlijst</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber-fout</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>E-mail-fout</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Nieuw forum toegevoegd</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Forumpermissies gekopieerd</strong> van %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Forum verwijderd</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Forum inclusief subforums verwijderd</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Forum verwijderd en subforums verplaatst</strong> naar %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Forum verwijderd en berichten verplaatst</strong> naar %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Forum inclusief subforums verwijderd, berichten verplaatst</strong> naar %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Forum verwijderd, berichten verplaatst</strong> naar %1$s <strong>en subforums</strong> naar %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Forum inclusief berichten verwijderd</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Forum inclusief berichten en subforums verwijderd</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Forum inclusief berichten verwijderd, subforums verplaatst</strong> naar %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Forumdetails gewijzigd</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Forum verplaatst</strong> %1$s <strong>onder</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Forum verplaatst</strong> %1$s <strong>boven</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Forum gehersychroniseerd</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>Een algemene fout is er opgetreden</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>Nieuwe gebruikersgroep aangemaakt</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Groep “%1$s” is standaard gemaakt voor leden</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Gebruikersgroep verwijderd</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Leiders gedegradeerd in gebruikersgroep</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Leden gepromoveerd naar leider van gebruikersgroep</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Leden verwijderd van gebruikersgroep</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Details van gebruikersgroep bijgewerkt</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Nieuwe leiders toegevoegd aan gebruikersgroep</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Nieuwe leden toegevoegd aan gebruikersgroep</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Gebruikers goedgekeurd in gebruikersgroep</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Gebruikers hebben lidmaatschap aangevraagd voor de groep “%1$s” en moeten nog goedgekeurd worden</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Fout tijdens het aanmaken van een afbeelding</strong><br />» Fout in %1$s op regel %2$s: %3$s',

	'LOG_IMAGESET_ADD_DB'			=> '<strong>Nieuwe afbeeldingenset toegevoegd aan de database</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'			=> '<strong>Nieuwe afbeeldingenset toegevoegd aan het bestandssysteem</strong><br />» %s',
	'LOG_IMAGESET_DELETE'			=> '<strong>Afbeeldingenset verwijderd</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'		=> '<strong>Details van afbeeldingenset gewijzigd</strong><br />» %s',
	'LOG_IMAGESET_EDIT'				=> '<strong>Afbeeldingenset gewijzigd</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'			=> '<strong>Afbeeldingenset geëxporteerd</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>Lokalisatie “%2$s” ontbreekt van afbeeldingenset</strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>“%2$s” lokalisatie vernieuwd van afbeeldingenset</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'		=> '<strong>Afbeeldingenset vernieuwd</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Inactieve gebruikers geactiveerd</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Inactieve gebruikers verwijderd</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Herinnering verzonden naar inactieve gebruikers</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Geconverteerd van %1$s naar phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>phpBB %s geïnstalleerd</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Sessie IP-adres/browser/X_FORWARDED_FOR controle mislukt</strong><br />»Gebruikers-IP “<em>%1$s</em>” gecontroleerd tegen sessie-IP-adres “<em>%2$s</em>”, gebruikers browser-waarde “<em>%3$s</em>” gecontroleerd tegen sessie browser-waarde “<em>%4$s</em>” en gebruikers X_FORWARDED_FOR-waarde “<em>%5$s</em>” gecontroleerd tegen sessie X_FORWARDED_FOR-waarde “<em>%6$s</em>”.',

	'LOG_JAB_CHANGED'			=> '<strong>Jabber-account gewijzigd</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Jabber-wachtwoord gewijzigd</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabber-account geregistreerd</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber-instellingen gewijzigd</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Taalpakket verwijderd</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Taalpakket geïnstalleerd</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Details bijgewerkt van taalpakket</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Taalbestand vervangen</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Taalbestand is verzonden, en is geplaatst in de store-map</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Massa-e-mail verzonden</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Berichtenauteur gewijzigd in onderwerp “%1$s”</strong><br />» van %2$s naar %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Module uitgeschakeld</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Module ingeschakeld</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Module omlaag verplaatst</strong><br />» %1$s onder %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Module omhoog verplaatst</strong><br />» %1$s boven %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Module verwijderd</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Module toegevoegd</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Module gewijzigd</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Beheerdersrol toegevoegd</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Beheerdersrol gewijzigd</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Beheerdersrol verwijderd</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Forumrol toegevoegd</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Forumrol gewijzigd</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Forumrol verwijderd</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Moderatorrol toegevoegd</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Moderatorrol gewijzigd</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Moderatorrol verwijderd</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Gebruikersrol toegevoegd</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Gebruikersrol gewijzigd</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Gebruikersrol verwijderd</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Profielveld geactiveerd</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Profielveld toegevoegd</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Profielveld gedeactiveerd</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Profielveld gewijzigd</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Profielveld verwijderd</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Forums opgeschoond</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Forums automatisch opgeschoond</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Gebruikers deactiveerd</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Gebruikers automatisch opgeschoond en berichten verwijderd</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Gebruikers automatisch opgeschoond en berichten behouden</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Cache geleegt</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Sessies geleegt</strong>',


	'LOG_RANK_ADDED'		=> '<strong>Nieuwe rang toegevoegd</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Rang verwijderd</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Rang bijgewerkt</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Meld-/afkeuringsreden toegevoegd</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Meld-/afkeuringsreden verwijderd</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Meld-/afkeuringsreden bijgewerkt</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Verwijzingscontrole is mislukt</strong><br />»Verwijzing was “<em>%1$s</em>”. De aanvraag is geweigerd en de sessie is afgebroken.',
	'LOG_RESET_DATE'			=> '<strong>Opstartdatum van het forum gereset</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Meeste gebruikers tegelijkertijd online teller gereset</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Gebruikers berichtentellers gehersychroniseerd</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Gestipte onderwerpen gehersychroniseerd</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Bericht, onderwerp en gebruikersstatistieken gehersychroniseerd</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Zoekindex aangemaakt voor</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Zoekindex verwijderd voor</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Nieuwe stijl toegevoegd</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Stijl verwijderd</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Stijl gewijzigd</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Stijl geëxporteerd</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Nieuwe templateset toegevoegd aan de database</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Nieuwe templateset toegevoegd aan het bestandssysteem</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Gecachede versies van templatebestanden in templateset <em>%1$s</em> verwijderd</strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Templateset verwijderd</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Templateset <em>%1$s</em> gewijzigd</strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Templatedetails gewijzigd</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Templateset geëxporteerd</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Templateset vernieuwd</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Nieuw thema toegevoegd aan de database</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Nieuw thema toegevoegd aan het bestandssysteem</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Thema verwijderd</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Details van thema gewijzigd</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Theme gewijzigd <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Thema <em>%1$s</em> gewijzigd</strong><br />» Bestand gewijzigd <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Thema geëxporteerd</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Thema vernieuwd</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Database bijgewerkt van versie %1$s naar versie %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>phpBB bijgewerkt van versie %1$s naar versie %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Gebruiker geactiveerd</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Gebruiker verbannen via het gebruikersbeheer</strong> met als reden “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>IP-adres verbannen via het gebruikersbeheer</strong> met als reden “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>E-mailadres verbannen via het gebruikersbeheer</strong> met als reden “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Gebruiker verwijderd</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Alle bijlagen verwijderd die zijn gemaakt door de gebruiker</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Gebruikers-avatar verwijderd</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Postvak UIT-map geleegd van gebruiker</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Alle berichten verwijderd die zijn gemaakt door de gebruiker</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Gebruikersonderschrift verwijderd</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Gebuiker gedeactiveerd</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Gebruikersberichten verplaatst</strong><br />» berichten door “%1$s” naar forum “%2$s”',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Gebruikerswachtwoord gewijzigd</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Verplichte heractivatie van gebruikersaccount</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Pas geregistreerde vlag verwijderd van gebruiker</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Gebruiker “%1$s” heeft zijn/haar e-mailadres gewijzigd</strong><br />» van “%2$s” naar “%3$s”',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Gebruikersnaam gewijzigd</strong><br />» van “%1$s” naar “%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong>Gebruikersdetails bijgewerkt</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Gebruikersaccount geactiveerd</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Gebruikers-avatar verwijderd</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Gebruikersonderschrift verwijderd</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Gebruikers-feedback toegevoegd</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Feedback toegevoegd:</strong><br />» %s',  // <strong>Entry added:</strong><br />» %s ?
	'LOG_USER_INACTIVE_USER'	=> '<strong>Gebuikersaccount gedeactiveerd</strong>',
	'LOG_USER_LOCK'				=> '<strong>Gebruiker heeft eigen onderwerp gesloten</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Alle berichten verplaatst naar forum</strong><br />» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Verplichte gebruikersaccount heractivatie</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Gebruiker heropende eigen onderwerp</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Gebruiker waarschuwing gegeven</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>De volgende waarschuwing was gegeven aan deze gebruiker</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Gebruiker wijzigde standaardgroep</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Gebruiker legde leiderschap neer van gebruikersgroep</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Gebruiker heeft lidmaatschap aangevraagd van de groep</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Gebruiker heeft groepslidmaatschap aangevraagd en moet worden goedgekeurd</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Gebruiker heeft lidmaatschap opgezegd van groep</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Gebruikerswaarschuwing verwijderd</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> '<strong>%2$s Gebruikerswaarschuwingen verwijderd</strong><br />» %1$s', // Example: '<strong>2 Gebruikerswaarschuwingen verwijderd</strong><br />» gebruikersnaam'
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Alle gebruikerswaarschuwingen verwijderd</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Woordcensuur toegevoegd</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Woordcensuur verwijderd</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Woordcensuur gewijzigd</strong><br />» %s',
));

?>