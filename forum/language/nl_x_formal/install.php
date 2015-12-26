<?php
/**
*
* install [Dutch]
*
* @package language
* @version $Id: install.php 328 2010-11-10 20:18:23Z Raimon $
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
	'ADMIN_CONFIG'				=> 'Beheerdersconfiguratie',
	'ADMIN_PASSWORD'			=> 'Beheerderswachtwoord',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Beheerderswachtwoord bevestigen',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Voer een wachtwoord in tussen de 6 en 30 tekens lang.',
	'ADMIN_TEST'				=> 'Beheerdersinstellingen controleren',
	'ADMIN_USERNAME'			=> 'Beheerdersgebruikersnaam',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Voer een gebruikersnaam in tussen de 3 en 20 tekens lang.',
	'APP_MAGICK'				=> 'Imagemagick ondersteuning [ Bijlagen ]',
	'AUTHOR_NOTES'				=> 'Auteursopmerkingen<br /> » %s',
	'AVAILABLE'					=> 'Beschikbaar',
	'AVAILABLE_CONVERTORS'		=> 'Beschikbare converteer-scripts',

	'BEGIN_CONVERT'					=> 'Conversie beginnen',
	'BLANK_PREFIX_FOUND'			=> 'Een scan van uw tabellen heeft een geldige installatie gevonden met het gebruik van geen tabel prefix.',
	'BOARD_NOT_INSTALLED'			=> 'Geen installatie gevonden',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'De phpBB Unified Convertor Framework, heeft een standaard phpBB3 installatie nodig om te functioneren, <a href="%s">ga verder doormiddel van eerst phpBB3 te installeren</a>.',

	'CATEGORY'					=> 'Categorie',
	'CACHE_STORE'				=> 'Cache-type',
	'CACHE_STORE_EXPLAIN'		=> 'De fysieke locatie waar data wordt gecached, bestandssysteem wordt aangeraden.',
	'CAT_CONVERT'				=> 'Converteren',
	'CAT_INSTALL'				=> 'Installeren',
	'CAT_OVERVIEW'				=> 'Overzicht',
	'CAT_UPDATE'				=> 'Updaten',
	'CHANGE'					=> 'Wijzigen',
	'CHECK_TABLE_PREFIX'		=> 'Controleer uw tabel prefix en probeer het nog eens.',
	'CLEAN_VERIFY'				=> 'Opschonen en bevestigen van de uiteindelijke structuur',
	'CLEANING_USERNAMES'		=> 'Opschonen gebruikersnamen',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> is de "schone" gebruikersnaam voor:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Er zijn dubbele gebruikersnamen gevonden op uw oude forum. Om de conversie te voltooien zult u deze gebruikers moeten verwijderen of hernoemen, zodat er alleen één gebruiker is op uw oude forum voor elke "schone" gebruikersnaam.',
	'COLLIDING_USER'			=> '» gebruiker-id: <strong>%d</strong> gebruikersnaam: <strong>%s</strong> (%d berichten)',
	'CONFIG_CONVERT'			=> 'Bezig met het converteren van de configuratie',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Het was niet mogelijk het configuratie bestand te beschrijven. Hieronder staan alternatieve methodes om dit bestand alsnog te aan te maken.',
	'CONFIG_FILE_WRITTEN'		=> 'Het configuratie bestand is beschreven, u kunt nu doorgaan naar de volgende stap van de installatie.',
	'CONFIG_PHPBB_EMPTY'		=> 'De phpBB3 config variable voor “%s” is leeg.',
	'CONFIG_RETRY'				=> 'Opnieuw proberen',
	'CONTACT_EMAIL_CONFIRM'		=> 'Contact-e-mailadres bevestigen',
	'CONTINUE_CONVERT'			=> 'Doorgaan met de conversie',
	'CONTINUE_CONVERT_BODY'		=> 'Een eerdere conversiepoging is opgemerkt. U kunt nu kiezen tussen het starten van een nieuwe conversie of doorgaan met de vorige conversie.',
	'CONTINUE_LAST'				=> 'Doorgaan met de laatste stappen',
	'CONTINUE_OLD_CONVERSION'	=> 'Doorgaan met een eerder gestarte conversie',
	'CONVERT'					=> 'Converteren',
	'CONVERT_COMPLETE'			=> 'Conversie compleet',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'U heeft nu succesvol uw forum geconverteerd naar phpBB 3.0. U kunt nu aanmelden en uw <a href="../">forum betreden</a>. Wees er zeker van dat alle instellingen correct zijn overgebracht voordat u uw forum inschakeld en de install-directory verwijderd. Vergeet niet dat er hulp over het gebruik van phpBB online beschikbaar is via de <a href="http://docs.phpbbservice.nl/handleiding/3.0/">documentatie</a> en de <a href="http://forum.phpbbservice.nl/viewforum.php?f=38">supportforums</a>.',
    'CONVERT_INTRO'				=> 'Welkom bij het phpBB Unified Convertor Framework',
	'CONVERT_INTRO_BODY'		=> 'Vanaf hier kunt u gegevens importeren van andere (geïnstalleerde) forumsystemen. De lijst hieronder geeft alle beschikbare conversiemodules weer die momenteel beschikbaar zijn. Als er geen convertor in de lijst wordt weergegeven voor het forumsysteem waarvan u wilt converteren, kijk dan op onze website of er andere conversiemodules beschikbaar zijn om te downloaden.',
	'CONVERT_NEW_CONVERSION'	=> 'Nieuwe conversie',
	'CONVERT_NOT_EXIST'			=> 'De opgegeven convertor bestaat niet.',
	'CONVERT_OPTIONS'			=> 'Opties',
	'CONVERT_SETTINGS_VERIFIED'	=> 'De informatie die u heeft ingevoerd is bevestigd. Om het conversie-proces te starten klikt u op de knop hieronder.',
	'CONV_ERR_FATAL'			=> 'Fatale conversie-fout',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP-upload voor bijlagen is ingeschakeld op het oude forum. Schakel de FTP-upload optie uit en wees er zeker van dat u een geldige upload directory opgeeft, daarna kopieer alle bijlagen bestanden naar de nieuwe web toegankelijke directory. Wanneer u dit heeft gedaan, herstart u de convertor.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Er is geen configuratie-informatie beschikbaar voor de conversie.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Onmogelijk om forum toegang informatie te verkrijgen.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Onmogelijk om categorieën te verkrijgen.',
	'CONV_ERROR_GET_CONFIG'				=> 'Kon niet uw forum configuratie ophalen.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Onmogelijk om “%s” te openen/lezen.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Onmogelijk om de groepsauthenticatie-informatie te verkijgen.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Onregelmatigheden in de groups tabel geconstateerd in add_bots() - u moet alle speciale groepen toevoegen als u het handmatig doet.',
	'CONV_ERROR_INSERT_BOT'				=> 'Onmogelijk om de bot toe te voegen aan de user tabel.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Onmogelijk om de bot toe te voegen aan de bots tabel.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Onmogelijk om de gebruiker aan de user_group tabel toe te voegen.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Bericht-parser fout',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Notitie aan de ontwikkelaar: u moet $convertor[\'avatar_path\'] opgeven door %s te gebruiken.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Het relatieve pad naar het bronforum is niet opgegeven.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Notitie aan de ontwikkelaar: u moet $convertor[\'avatar_gallery_path\'] opgeven door %s te gebruiken.',
	'CONV_ERROR_NO_GROUP'				=> 'Groep “%1$s” kon niet worden gevonden in %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Notitie aan de ontwikkelaar: u moet $convertor[\'ranks_path\'] opgeven door %s te gebruiken.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Notitie aan de ontwikkelaar: u moet $convertor[\'smilies_path\'] opgeven door %s te gebruiken.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Notitie aan de ontwikkelaar: u moet $convertor[\'upload_path\'] opgeven door %s te gebruiken.',
	'CONV_ERROR_PERM_SETTING'			=> 'Onmogelijk om de permissie-instellingen te updaten of toe te voegen.',
	'CONV_ERROR_PM_COUNT'				=> 'Onmogelijk om de pb-teller map te selecteren.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Onmogelijk om het nieuwe forum toe te voegen tijdens het vervangen van een oude categorie.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Onmogelijk om het nieuwe forum te vervangen met het oude forum.',
	'CONV_ERROR_USER_ACCESS'			=> 'Onmogelijk om de gebruikersauthenticatie-informatie te verkrijgen.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Verkeerde groep “%1$s” opgegeven in %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Deze pagina verzameld alle benodigde gegevens die nodig zijn om toegang te hebben tot het bron-forum. Voer de database gegevens in van uw vorige forum; de convertor zal niks veranderen in de database die u hieronder opgeeft. Het bron-forum zal uitgeschakeld moeten zijn om een zo goed als mogelijke conversie te krijgen.',
	'CONV_SAVED_MESSAGES'				=> 'Opgeslagen berichten',

	'COULD_NOT_COPY'			=> 'Kon het bestand <strong>%1$s</strong> niet kopiëren naar <strong>%2$s</strong><br /><br />Controleer of de doelmap bestaat en schrijfbaar is door de webserver.',
	'COULD_NOT_FIND_PATH'		=> 'Het pad naar uw oude forum kan niet worden gevonden. Controleer uw instellingen en probeer opnieuw.<br />» %s was het opgegeven doelpad.',

	'DBMS'						=> 'Database-type',
	'DB_CONFIG'					=> 'Database-configuratie',
	'DB_CONNECTION'				=> 'Database-verbinding',
	'DB_ERR_INSERT'				=> 'Fout tijdens het verwerken van de <code>INSERT</code> query.',
	'DB_ERR_LAST'				=> 'Fout tijdens het verwerken van de <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Fout tijdens het verwerken van de <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Fout tijdens het verwerken van de <var>query_first</var>, %s (“%s”).',
	'DB_ERR_SELECT'				=> 'Fout tijdens het uitvoeren van de <code>SELECT</code> query.',
	'DB_HOST'					=> 'Database-server hostnaam of DSN',
	'DB_HOST_EXPLAIN'           => 'DSN staat voor Data Source Name en is alleen relevant voor ODBC-installaties. Gebruik op PostgreSQL de localhost om verbinding te maken met een lokale server via de UNIX-domein socket en via 127.0.0.1 om verbinding te maken via TCP.',
	'DB_NAME'					=> 'Database-naam',
	'DB_PASSWORD'				=> 'Database-wachtwoord',
	'DB_PORT'					=> 'Database-serverpoort',
	'DB_PORT_EXPLAIN'			=> 'Laat dit veld leeg tenzij de server op een niet-standaard poort werkt.',
	'DB_UPDATE_NOT_SUPPORTED'	=> 'Het spijt ons, maar dit script ondersteunt het updaten van versies van phpBB voorafgaand naar “%1$s” niet. De versie die u momenteel heeft geïnstalleerd is “%2$s”. Update naar een vorige versie voordat u dit script uitvoert. Assistentie voor dit is beschikbaar in onze supportforums op phpBB.com en op phpBBservice.nl.',
	'DB_USERNAME'				=> 'Database-gebruikersnaam',
	'DB_TEST'					=> 'Verbinding testen',
	'DEFAULT_LANG'				=> 'Standaard forumtaal',
	'DEFAULT_PREFIX_IS'			=> 'De convertor was niet in staat om de tabel te vinden met de opgegeven prefix. Wees er zeker van dat u de correcte gegevens heeft ingevuld van het forum waar van u wilt converteren. De standaard tabel prefix voor %1$s is <strong>%2$s</strong>.',
	'DEV_NO_TEST_FILE'			=> 'Geen waarde is er opgegeven voor de test_file variable in de convertor. Als u een gebruiker bent van deze convertor, behoort u deze foutmelding niet te zien, meld dit bericht aan de auteur van de convertor. Als u de convertor-auteur bent, moet u de naam of een bestand opgeven die bestaat in het bronforum om het pad te bevestigen.',
	'DIRECTORIES_AND_FILES'		=> 'Directory en bestandssetup',
	'DISABLE_KEYS'				=> 'Onbruikbare sleutels',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'FTP-ondersteuning op afstand [ Installatie ]',
	'DLL_GD'					=> 'GD graphics ondersteuning [ Visuele bevestiging ]',
	'DLL_MBSTRING'				=> 'Multi-byte tekens ondersteuning',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ met ODBC',
	'DLL_MSSQLNATIVE'			=> 'MSSQL Server 2005+ [ Native ]',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL met MySQLi extensie',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'XML ondersteuning [ Jabber ]',
	'DLL_ZLIB'					=> 'zlib compressie ondersteuning [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Download config-bestand',
	'DL_CONFIG_EXPLAIN'			=> 'U mag nu het complete config.php bestand downloaden naar uw pc. U moet dan het bestand handmatig uploaden, en eventueel het bestaand config.php bestand overschrijven die in uw phpBB 3.0 hoofdmap staat, dus waar u het bestand memberlist.php, index.php, etc. ziet staan. Let op: vergeet niet om het bestand te uploaden in ASCII-formaat (raadpleeg uw FTP-programma documentatie als u niet weet hoe u dit moet doen). Wanneer u het bestand heeft geüpload, klikt u op de “Klaar” knop. om verder te gaan naar de volgende stap.',
	'DL_DOWNLOAD'				=> 'Downloaden',
	'DONE'						=> 'Klaar',

	'ENABLE_KEYS'				=> 'Her-toelaat sleutels. Dit kan even duren',

	'FILES_OPTIONAL'			=> 'Optionele bestanden en directory’s',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Optioneel</strong> - Deze bestanden, directory’s of permissie-instellingen zijn niet verplicht. Het installatiesysteem zal proberen om diverse technieken te gebruiken om ze aan te maken als ze nog niet bestaan of als ze niet beschrijfbaar zijn. Alhoewel, de aanwezigheid ervan zal de installatie wel versnellen.',
	'FILES_REQUIRED'			=> 'Bestanden en directory’s',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Verplicht</strong> - Om alles correct te laten functioneren, heeft phpBB toegang nodig om verschillende bestanden of mappen te beschrijven. Als u ziet staan “Niet gevonden”, zult u het betreffende bestand of map aan moeten maken. Als u ziet staan “Niet schrijfbaar”, wijzig dan de permissies van het bestand of van de directory om te zorgen dat phpBB toegang heeft er na toe te schrijven.',
	'FILLING_TABLE'				=> 'Vullen van tabel <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Vullen van tabellen',

	'FIREBIRD_DBMS_UPDATE_REQUIRED'		=> 'phpBB ondersteunt niet langer Firebird/Interbase voorafgaand naar versie 2.1. Update uw Firebird installatie tenminste tot 2.1.0 voordat u verder gaat met de update.',

	'FINAL_STEP'				=> 'Laatste stap uitvoeren',
	'FORUM_ADDRESS'				=> 'Forumadres',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Dit is de oude URL van uw oude forum, bijvoorbeeld <samp>http://www.voorbeeld.nl/phpBB2/</samp>. Als een adres hier is ingevoerd en het is niet leeg gelaten, dan zal elk adres worden vervangen door uw nieuwe forumadres in berichten, privéberichten en onderschriften.',
	'FORUM_PATH'				=> 'Forumpad',
	'FORUM_PATH_EXPLAIN'		=> 'Dit is het <strong>relatieve</strong> pad op de server naar uw oude forum vanaf de <strong>root van uw phpBB3 installatie</strong>.',
	'FOUND'						=> 'Gevonden',
	'FTP_CONFIG'				=> 'Config overbrengen dmv van de FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB heeft de aanwezigheid van de FTP-module herkend op deze server. U mag proberen om uw config.php te installeren via deze module als u wilt. U zult de informatie die hieronder staat nodig hebben. Onthoud, uw gebruikersnaam en wachtwoord zijn degene naar uw server! (vraag uw hostingprovider voor meer informatie als u onzeker bent wat deze zijn).',
	'FTP_PATH'					=> 'FTP-pad',
	'FTP_PATH_EXPLAIN'			=> 'Dit is het pad van de hoofdmap waar phpBB in staat, bijvoorbeeld <samp>htdocs/phpBB3/</samp>.',
	'FTP_UPLOAD'				=> 'Upload',

	'GPL'						=> 'General Public License',

	'INITIAL_CONFIG'			=> 'Basisconfiguratie',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Nu dat uw installatie heeft bepaald dat uw server phpBB3 kan draaien zult u wat specifieke informatie moeten opgeven. Als u niet weet hoe u moet verbinden met uw database, neem dan contact op met uw hostingprovider (in de eerste instantie) of gebruik de phpBB-supportforums. Wanneer u gegevens invoert, wees er dan zeker van dat u het controleert of het klopt voordat u verder gaat.',
	'INSTALL_CONGRATS'			=> 'Gefeliciteerd!',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		U heeft succesvol phpBB %1$s geïnstalleerd. Ga door door middel van één van de volgende opties te kiezen:</p>
		<h2>Een bestaand forum converteren naar phpBB3</h2>
		<p>De phpBB Unified Convertor Framework ondersteunt de conversie van phpBB 2.0.x en andere forumsystemen naar phpBB3. Als u een bestaand forum hebt dat u wilt converteren, <a href="%2$s">ga dan verder naar de convertor</a>.</p>
		<h2>On-line gaan met uw phpBB3!</h2>
		<p>Door middel van de knop te klikken hieronder zult u worden doorgestuurd naar een formulier voor statistische data te versturen naar phpBB in uw beheerderspaneel. We zullen het erg waarderen als u ons kan helpen om die informatie te versturen. Daarna zult u wat tijd moeten nemen om de opties te onderzoeken die beschikbaar zijn voor u. Vergeet niet dat on-line hulp beschikbaar is via de <a href="http://docs.phpbbservice.nl/handleiding/3.0/">documentation</a>, <a href="%3$s">LEESMIJ</a> en de <a href="http://forum.phpbbservice.nl/viewforum.php?f=38">supportforums</a>.</p><p><strong>Verwijder, verplaats of hernoem de install-directory voordat u uw forum gaat gebruiken. Wanneer deze directory bestaat, zal alleen het beheerderspaneel toegankelijk zijn.</strong>
	',
	'INSTALL_INTRO'				=> 'Welkom bij de installatie',
	'INSTALL_INTRO_BODY'		=> 'Met deze optie, is het mogelijk om phpBB3 te kunnen installeren op uw server.</p><p>Om verder te gaan heeft u de database-instellingen nodig. Als u niet uw database-instellingen weet, neem dan contact op met uw host en vraag het aan hun. U zult niet door kunnen gaan met de installatie zonder die gegevens. U heeft nodig:</p>
		<ul>
			<li>Het Database-type - De database dat u wenst te gebruiken.</li>
			<li>De Database-server hostnaam of DSN - Het adres van de database server.</li>
			<li>De Database-serverpoort - De poort van de database server (in de meeste gevallen is dit niet nodig).</li>
			<li>De Database-naam - De naam van de database op de server.</li>
			<li>De Database-gebruikersnaam en Database-wachtwoord - De aanmeldingsgegevens om toegang te hebben van de database.</li>
		</ul>
		<p><strong>Opmerking:</strong> Als u de installatie uitvoert met SQLite, zult u het volledige pad moet invoeren van uw database-bestand in het DSN veld en het veld van de gebruikersnaam en wachtwoord leeglaten. Voor veiligheidsredenen, zult u er zeker van moeten zijn dat uw database-bestand niet is opgeslagen in een openbare toegankelijke locatie die u kunt bezoeken via het internet.</p>
		<p>phpBB3 ondersteunt de volgende databases:</p>
		<ul>
			<li>MySQL 3.23 of hoger (MySQLi ondersteuning)</li>
			<li>PostgreSQL 7.3+</li>
			<li>SQLite 2.8.2+</li>
			<li>Firebird 2.1+</li>
			<li>MS SQL Server 2000 of hoger (direct of met ODBC)</li>
			<li>MS SQL Server 2005 of hoger (native)</li>
			<li>Oracle</li>
		</ul>
		<p>Alleen deze databases die worden ondersteunt door uw server zullen worden weergegeven.
	',
	'INSTALL_INTRO_NEXT'			=> 'Om te beginnen met de installatie, klikt u op de knop hieronder.',
	'INSTALL_LOGIN'					=> 'Aanmelden',
	'INSTALL_NEXT'					=> 'Volgende stap',
	'INSTALL_NEXT_FAIL'				=> 'Sommige testen zijn mislukt, u zult deze problemen eerst moeten oplossen voordat u verder gaat naar de volgende stap. Wanneer er testen mislukken kan het leiden naar een incomplete installatie.',
	'INSTALL_NEXT_PASS'				=> 'Als alle basis testen zijn gelukt mag u doorgaan naar de volgende stap van de installatie. Als u enige permissies, modules, enz. hebt veranderd en u wilt de testen opnieuw uitvoeren, dan kunt u dat hier doen.',
	'INSTALL_PANEL'					=> 'Installatiepaneel',
	'INSTALL_SEND_CONFIG'			=> 'Helaas kon phpBB de configuratie-informatie niet meteen beschrijven naar uw config.php. Dit is mogelijk als het bestand niet bestaat of niet schrijfbaar is. Een aantal opties zullen hieronder worden weergegeven zodat u als nog de installatie van het config.php kunt voltooien.',
	'INSTALL_START'					=> 'Installatie starten',
	'INSTALL_TEST'					=> 'Opnieuw testen',
	'INST_ERR'						=> 'Installatiefout',
	'INST_ERR_DB_CONNECT'			=> 'Kon geen verbinding maken met de database, zie het foutbericht hieronder.',
	'INST_ERR_DB_FORUM_PATH'		=> 'Het database-bestand dat is opgegeven bevindt zich in de forumdirectory hiërarchie. U zult dit bestand moeten plaatsen in een locatie die niet via het web toegankelijk.',
	'INST_ERR_DB_NO_ERROR'			=> 'Geen foutmelding gegeven.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'De versie van MySQL die geïnstalleerd is op deze server werkt niet met de “MySQL met MySQLi-extentie” optie die u heeft geselecteerd. Probeer in plaats daarvan de optie “MySQL”.',
	'INST_ERR_DB_NO_SQLITE'			=> 'De versie van de SQLite-extensie dat u heeft geïnstalleerd is te oud, het moet minstens geüpgrade zijn naar versie 2.8.2.',
	'INST_ERR_DB_NO_ORACLE'			=> 'De versie van Oracle die geïnstalleerd is op deze server verplicht u om de <var>NLS_CHARACTERSET</var>-parameter te laten instellen naar <var>UTF8</var>. U kunt uw installatie updaten naar 9.2+ of de paramater veranderen.',
	'INST_ERR_DB_NO_FIREBIRD'		=> 'De versie van Firebird die geïnstalleerd is op deze server is ouder dan 2.1, update het naar een nieuwere versie.',
	'INST_ERR_DB_NO_FIREBIRD_PS'	=> 'De database die u heeft geselecteerd voor Firebird heeft een pagina minder dan 8192, het moet minstens 8192 zijn.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'De database die u heeft geselecteerd is niet aangemaakt in <var>UNICODE</var> of <var>UTF8</var> codering. Probeer de database te installeren in <var>UNICODE</var> of <var>UTF8</var> codering.',
	'INST_ERR_DB_NO_NAME'			=> 'Geen database-naam opgegeven.',
	'INST_ERR_EMAIL_INVALID'		=> 'Het e-mailadres dat u heeft ingevoerd is ongeldig.',
	'INST_ERR_EMAIL_MISMATCH'		=> 'De e-mailadressen die u heeft ingevoerd komen niet overheen.',
	'INST_ERR_FATAL'				=> 'Fatale installatiefout',
	'INST_ERR_FATAL_DB'				=> 'Een fatale en een onherstelbare database-fout is er opgetreden. Dit kan gebeuren dat de opgegeven gebruiker niet de juiste rechten heeft om <code>CREATE TABLES</code> of <code>INSERT</code> data, enz. Verdere informatie kan hieronder worden gegeven. Neem contact op met uw hostingprovider in de eerste instantie of de supportforums van phpBB voor verdere hulp.',
	'INST_ERR_FTP_PATH'				=> 'Kon de opgegeven directory niet veranderen, controleer het pad.',
	'INST_ERR_FTP_LOGIN'			=> 'Kon niet aanmelden op de FTP-server, controleer uw gebruikersnaam en wachtwoord.',
	'INST_ERR_MISSING_DATA'			=> 'U moet alle velden van dit blok invullen.',
	'INST_ERR_NO_DB'				=> 'Kan de PHP-module niet laden voor het geselecteerde database-type.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'De wachtwoorden die u heeft ingevoerd komen niet overheen.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Het wachtwoord dat u heeft ingevoerd is te lang. De maximale lengte is 30 tekens.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Het wachtwoord dat u heeft ingevoerd is te kort. De minimale lengte is 6 tekens.',
	'INST_ERR_PREFIX'				=> 'Tabellen met de opgegeven prefix bestaan al, kies een andere prefix als altenatief.',
	'INST_ERR_PREFIX_INVALID'		=> 'De tabelprefix dat u heeft ingevoerd is niet geldig voor uw database. Probeer een andere, verwijder één van de tekens bijvoorbeeld het koppelteken.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'De tabelprefix dat u heeft ingevoerd is te lang. De maximale lengte is %d tekens.',
	'INST_ERR_USER_TOO_LONG'		=> 'De gebruikersnaam die u heeft ingevoerd is te lang. De maximale lengte is 20 tekens.',
	'INST_ERR_USER_TOO_SHORT'		=> 'De gebruikersnaam die u heeft ingevoerd is te kort. De minimale lengte is 3 tekens.',
	'INVALID_PRIMARY_KEY'			=> 'Ongeldige hoofd-sleutel : %s',

	'LONG_SCRIPT_EXECUTION'	=> 'Hou in de gaten dat dit enige tijd kan duren... Onderbreek het script niet.',

// mbstring
	'MBSTRING_CHECK'						=> '<samp>mbstring</samp> uitbreidingscontrole',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Verplicht</strong> - <samp>mbstring</samp> is een PHP-extentie die zorgt voor multibyte string functies. Bepaalde functies van mbstring werken niet met phpBB en moeten worden uitgeschakeld.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Functie-overbelasting',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> moet ingesteld zijn op 0 of 4',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Transparante teken codering',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> moet ingesteld zijn op 0.',
	'MBSTRING_HTTP_INPUT'					=> 'HTTP-invoeringsteken conversie',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> moet ingesteld zijn op <samp>pass</samp>.',
	'MBSTRING_HTTP_OUTPUT'					=> 'HTTP-uitvoeringsteken conversie',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> moet ingesteld zijn op <samp>pass</samp>.',

	'MAKE_FOLDER_WRITABLE'		=> 'Wees er zeker van dat deze map bestaat en beschrijfbaar is door de webserver en probeer het dan opnieuw:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Wees er zeker van dat de mappen bestaan en beschrijfbaar zijn door de webserver en probeer het dan opnieuw:<br />»<strong>%s</strong>.',

	'MYSQL_SCHEMA_UPDATE_REQUIRED'	=> 'Uw MySQL-database schema voor phpBB is niet up-to-date. phpBB heeft een schema herkend voor MySQL 3.x/4.x, maar de server draait op MySQL %2$s.<br /><strong>Voordat u verder gaat met de update raden wij u aan om het schema te updaten.</strong><br /><br />Bekijk het <a href="http://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">Kennisbank artikel ( Engelstalig ) over het upgraden van het MySQL-schema</a> voor meer informatie. Als u problemen krijgt, gebruik dan <a href="http://forum.phpbbservice.nl/viewforum.php?f=42">onze supportforums</a> voor verdere ondersteuning.',

	'NAMING_CONFLICT'			=> 'Benamingsconflict: %s en %s zijn beide aliasen<br /><br />%s',
	'NEXT_STEP'					=> 'Volgende stap',
	'NOT_FOUND'					=> 'Kan niet vinden',
	'NOT_UNDERSTAND'			=> 'Kan het volgende niet begrijpen %s #%d, tabel %s (“%s”)',
	'NO_CONVERTORS'				=> 'Geen convertors zijn er beschikbaar om te gebruiken.',
	'NO_CONVERT_SPECIFIED'		=> 'Geen convertor opgegeven.',
	'NO_LOCATION'				=> 'Locatie kan niet worden bepaald. Als u weet dat Imagemagick is geïnstalleerd, geef dan later de locatie op in uw beheerderspaneel',
	'NO_TABLES_FOUND'			=> 'Geen tabellen gevonden.',

	'OVERVIEW_BODY'		=> 'Welkom bij phpBB3!<br /><br />phpBB™ is wereldwijd de meest gebruikte open source forumsoftware. phpBB3 is de laatste versie van een pakket dat is gestart met de ontwikkeling in 2000. Zoals zijn voorgangers is phpBB3 functie-rijk, het is gebruiksvriendelijk, en wordt volledig ondersteunt door het phpBB Team. phpBB3 verbeterd alles wat phpBB2 zo populair maakte, en voegt de meest aangevraagde functies toe die nog niet aanwezig waren in vorige versies. Wij hopen dat het uw verwachtingen overtreft.<br /><br />Het installatiesysteem doorloopt samen met u de stappen om phpBB3 te installeren, te updaten naar de laatst recente phpBB3 versie vanaf oudere versies, en ook nog het converteren naar phpBB3 vanaf een andere forumsoftware (inclusief phpBB2). Voor meer informatie adviseren we u dat u de <a href="../docs/INSTALL.html">installatie handleiding</a> leest. Als u de phpBB3 licentie wilt lezen, of als u wilt weten hoe u ondersteuning kunt krijgen, dan kiest u de juiste optie in het zij-menu aan de linkerkant van de pagina. Om verder te gaan selecteert u het juiste tabblad bovenaan de pagina.',

    'PCRE_UTF_SUPPORT'					=> 'PCRE UTF-8 onderteuning',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'phpBB zal <strong>niet</strong> werken als uw PHP-installatie niet is gecompileerd met UTF-8 ondersteuning in de PCRE-extensie.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP-functie getimagesize() is beschikbaar',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Vereist</strong> - Om phpBB correct te laten functioneren, zal de getimagesize-functie beschikbaar moeten zijn.',
	'PHP_OPTIONAL_MODULE'				=> 'Optionele modules',
	'PHP_OPTIONAL_MODULE_EXPLAIN'		=> '<strong>Optioneel</strong> - Deze modules of applicaties zijn optioneel. Alhoewel als deze beschikbaar zijn zullen er extra functies worden ingeschakeld.',
	'PHP_SUPPORTED_DB'					=> 'Ondersteunende databases',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> '<strong>Verplicht</strong> - Er moet tenminste één type database-module worden ondersteund binnen PHP. Als er geen database-module beschikbaar is moet u contact opnemen met uw webhost of de documentatie van de betreffende PHP-installatie bekijken voor advies.',
	'PHP_REGISTER_GLOBALS'				=> 'PHP-instelling <var>register_globals</var> is uitgeschakeld',
	'PHP_REGISTER_GLOBALS_EXPLAIN'		=> 'phpBB zal ook werken wanneer deze instellingen is ingeschakeld, maar indien mogelijk is het aanbevolen dat register_globals is uitgeschakeld op uw PHP-installatie in verband met veiligingsredenen.',
	'PHP_SAFE_MODE'						=> 'Safe mode',
	'PHP_SETTINGS'						=> 'PHP-versie en instellingen',
	'PHP_SETTINGS_EXPLAIN'				=> '<strong>Verplicht</strong> - U moet tenminste op PHP-versie 4.3.3 werken om phpBB te installeren. Als de <var>safe mode</var> wordt weergegeven onder uw PHP-installatie, dan is deze mode ingeschakeld. Dit zorgt voor beperkingen met betrekking tot beheer (op afstand) en soort gelijke functies.',
	'PHP_URL_FOPEN_SUPPORT'				=> 'PHP-instelling <var>allow_url_fopen</var> is ingeschakeld',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'		=> '<strong>Optioneel</strong> - Deze instelling is optioneel, maar bepaalde phpBB functies zoals het gebruiken van een avatar van een andere site zal niet correct werken zonder deze functie.',
	'PHP_VERSION_REQD'					=> 'PHP-versie >= 4.3.3',
	'POST_ID'							=> 'Bericht-ID',
	'PREFIX_FOUND'						=> 'Een scan van al uw tabellen heeft gecontroleerd dat u als tabel prefix <strong>%s</strong> gebruikt.',
	'PREPROCESS_STEP'					=> 'Bezig met het uitvoeren van de voorprocedure van functies/queries',
	'PRE_CONVERT_COMPLETE'				=> 'Alle voorbereidende conversie stappen zijn succesvol voltooid. U mag nu beginnen met het werkelijke conversieproces. Hou in de gaten dat u waarschijnlijk diverse dingen handmatig moet aanpassen. Na de conversie, zult u vooral de toegewezen permissies moeten controleren, de zoekindex moeten herbouwen aangezien die niet mee wordt geconverteerd, en wees er ook zeker van dat de bestanden correct zijn gekopieerd, bijvoorbeeld de avatars en smilies.',
	'PROCESS_LAST'						=> 'Bezig met de laatste stappen',

	'REFRESH_PAGE'				=> 'Vernieuw de pagina om door te gaan met de conversie',
	'REFRESH_PAGE_EXPLAIN'		=> 'Als u dit instelt op ja, dan zal de convertor de pagina vernieuwen om door te gaan met de conversie nadat er een stap is voltooid. Als dit uw eerste conversie is voor test doeleinden en om te bepalen of er enige fouten optreden, raden wij u aan om deze optie op nee in te stellen.',
	'REQUIREMENTS_TITLE'		=> 'Installatiecompatibiliteit',
	'REQUIREMENTS_EXPLAIN'		=> 'Voordat u begint met de volledige installatie, zal phpBB eerst wat tests uitvoeren op uw server-configuratie en bestanden om er zeker van te zijn dat u phpBB kunt installeren en gebruiken. Vergeet niet om alle resultaten te goed door te lezen en ga niet verder totdat alle test zijn geslaagd. Als u wenst om enige functies te gebruiken van de optionele testen, moet u er voor zorgen dat die testen ook slagen.',
	'RETRY_WRITE'				=> 'Opnieuw config herschrijven',
	'RETRY_WRITE_EXPLAIN'		=> 'Als u wenst, kunt u de permissies veranderen van config.php om toe te staan dat phpBB het kan beschrijven. Wanneer u dat wilt doen kunt u klikken op opnieuw hieronder op het opnieuw te proberen. Vergeet niet om de permissies van het config.php bestand weer terug te veranderen nadat de phpBB installatie is voltooid.',

	'SCRIPT_PATH'						=> 'Scriptpad',
	'SCRIPT_PATH_EXPLAIN'				=> 'Het pad waar phpBB zich bevindt, relatief naar het domeinnaam, bijvoorbeeld <samp>/phpBB3</samp>.',
	'SELECT_LANG'						=> 'Taal selecteren',
	'SERVER_CONFIG'						=> 'Server-configuratie',
	'SEARCH_INDEX_UNCONVERTED'			=> 'Zoekindex is niet geconverteerd',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Uw oude zoekindex is niet geconverteerd. Zoeken zal dan altijd resulteren in een leeg scherm. Om een nieuwe zoekindex te maken gaat u naar uw beheerderspaneel toe, selecteert u onderhoud en daarna selecteert u zoekindex uit het submenu.',
	'SOFTWARE'							=> 'Forum-software',
	'SPECIFY_OPTIONS'					=> 'Geef de opties voor de conversie op',
	'STAGE_ADMINISTRATOR'				=> 'Gegevens beheerder',
	'STAGE_ADVANCED'					=> 'Uitgebreide instellingen',
	'STAGE_ADVANCED_EXPLAIN'			=> 'De instellingen op deze pagina zijn alleen nodig om in te stellen als u weet dat u iets anders wilt dan standaard. Als u het niet zeker weet, ga dan verder naar de volgende pagina, aangezien u deze instellingen later nog kunt aanpassen in het beheerderspaneel.',
	'STAGE_CONFIG_FILE'					=> 'Configuratiebestand',
	'STAGE_CREATE_TABLE'				=> 'Database-tabellen aanmaken',
	'STAGE_CREATE_TABLE_EXPLAIN'		=> 'De database-tabellen die gebruikt worden door phpBB 3.0 zijn aangemaakt en zijn ingevoerd met wat gegevens. Ga verder naar het volgende scherm om de installatie te voltooien van phpBB.',
	'STAGE_DATABASE'					=> 'Database-instellingen',
	'STAGE_FINAL'						=> 'Laatste stap',
	'STAGE_INTRO'						=> 'Introductie',
	'STAGE_IN_PROGRESS'					=> 'Bezig met converteren',
	'STAGE_REQUIREMENTS'				=> 'Benodigdheden',
	'STAGE_SETTINGS'					=> 'Instellingen',
	'STARTING_CONVERT'					=> 'Conversieproces starten',
	'STEP_PERCENT_COMPLETED'			=> 'Stap <strong>%d</strong> van <strong>%d</strong>',
	'SUB_INTRO'							=> 'Introductie',
	'SUB_LICENSE'						=> 'Licentie (Engelstalig)',
	'SUB_SUPPORT'						=> 'Ondersteuning',
	'SUCCESSFUL_CONNECT'				=> 'Succesvolle verbinding',
	'SUPPORT_BODY'						=> 'Volledige ondersteuning word gegegeven voor de huidige stabiele versie van phpBB3, helemaal gratis. Dit is inclusief:</p><ul><li>Installatie</li><li>Configuratie</li><li>Technische vragen</li><li>Problemen die zijn gerelateerd aan potentiele fouten in de software</li><li>Updaten van een Release Candidate (RC) versie naar de laatste stabiele versie</li><li>Converteren van phpBB 2.0.x naar phpBB3</li><li>Converteren van een ander discussie forum-software naar phpBB3 (bekijk het <a href="http://forum.phpbbservice.nl/viewforum.php?f=42">Support Forum</a>)</li></ul><p>Wij moedigen gebruikers aan die nog steeds beta-versies hebben van phpBB3, dat ze hun installatie vervangen met een nieuwe kopie van de laatste versie.</p><h2>MODs / Stijlen</h2><p>Voor problemen die zijn gerelateerd aan MODs kunt u terecht in de <a href="http://forum.phpbbservice.nl/viewforum.php?f=29">Modificatie Forums</a>.<br />Voor problemen die gerelateerd zijn aan stijlen, templates of afbeeldingensets, kunt u terecht in de <a href="http://forum.phpbbservice.nl/viewforum.php?f=45">Stijlen Forums</a>.<br /><br />Als uw vraag is gerelateerd aan een specifiek pakket, dan plaatst u het direct in het onderwerp dat gaat over dat pakket.</p><h2>Verkijgen van support</h2><p><ul><li><a href="http://forum.phpBBservice.nl">Supportforums</a></li><li><a href="http://docs.phpBBservice.nl/irc">IRC-support</a></li><li><a href="http://docs.phpBBservice.nl">Documentatie</a></li><li><a href="http://forum.phpBBservice.nl/viewforum.php?f=66">phpBB3 handleidingen</a></li><li><a href="http://docs.phpbbservice.nl/handleiding/3.0/snellestart/index.php">Snelle Start Handleiding</a></li></ul><br /><br />Om er zeker van te zijn dat u altijd up-to-date bent met het laatste nieuws en nieuwste versies, kunt u uw ook <a href="http://forum.phpbbservice.nl/feeds.php">inschrijven op onze nieuws RSS-feeds</a>.<br /><br />',
	'SYNC_FORUMS'						=> 'Synchronisatie van forums gestart',
	'SYNC_POST_COUNT'					=> 'Bezig met het synchroniseren van post_counts',
	'SYNC_POST_COUNT_ID'				=> 'Bezig met het synchroniseren van post_counts van <var>entry</var> %1$s tot en met %2$s.',
	'SYNC_TOPICS'						=> 'Synchronisatie van onderwerpen gestart',
	'SYNC_TOPIC_ID'						=> 'Bezig met het synchroniseren van onderwerpen van <var>topic_id</var> %1$s tot %2$s.',

	'TABLES_MISSING'			=> 'De volgende tabellen kunnen niet worden gevonden<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Prefix voor tabellen in de database',
	'TABLE_PREFIX_SAME'			=> 'De tabelprefix moet dezelfde zijn als de software waarvan u wilt converteren.<br />» Ingevoerde tabelprefix was %s.',
	'TESTS_PASSED'				=> 'Tests geslaagd',
	'TESTS_FAILED'				=> 'Tests mislukt',

	'UNABLE_WRITE_LOCK'			=> 'Onmogelijk om een sluitbestand te schrijven.',
	'UNAVAILABLE'				=> 'Onbeschikbaar',
	'UNWRITABLE'				=> 'Niet schrijfbaar',
	'UPDATE_TOPICS_POSTED'		=> 'Genereren van geplaatste onderwerpsinformatie',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Er is een fout ontstaan terwijl er geplaatse onderwerpsinformatie werd gegenereerd. U kunt deze stap opnieuw uitvoeren in het beheerderspaneel nadat het conversie proces is voltooid.',
	'VERIFY_OPTIONS'			=> 'Opties van de conversie bevestigen',
	'VERSION'					=> 'Versie',

	'WELCOME_INSTALL'			=> 'Welkom bij de installatie van phpBB3',
	'WRITABLE'					=> 'Schrijfbaar',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Alle bestanden zijn up-to-date tot de laatste phpBB-versie. U zult nu moeten <a href="../ucp.php?mode=login&amp;redirect=adm/index.php%3Fi=send_statistics%26mode=send_statistics">aanmelden op uw forum</a> om te controleren of alles correct werkt. Vergeet niet om de install-directory te verwijderen, hernoemen of te verplaatsen. Verstuur ons geupdate informatie over uw server en forumconfiguratie via de <a href="../ucp.php?mode=login&amp;redirect=adm/index.php%3Fi=send_statistics%26mode=send_statistics">statische informatie versturen</a> module in uw beheerderspaneel.',
	'ARCHIVE_FILE'				=> 'Bronbestand binnen het archief',

	'BACK'				=> 'Terug',
	'BINARY_FILE'		=> 'Binairbestand',
	'BOT'				=> 'Spider/Zoekrobot',

	'CHANGE_CLEAN_NAMES'			=> 'De methode die wordt gebruikt om er zeker van te zijn dat een gebruikersnaam niet door meerdere gebruikers wordt gebruikt of zijn gewijzigd. Er zijn sommige gebruikers die dezelfde naam hebben wanneer u ze vergelijkt met de nieuwe methode. U zult deze gebruikers moeten verwijderen of hernoemen om er zeker van te zijn dat elke naam door één gebruiker wordt gebruikt, voordat u verder kunt gaan.',
	'CHECK_FILES'					=> 'Bestanden controleren',
	'CHECK_FILES_AGAIN'				=> 'Bestanden opnieuw controleren',
	'CHECK_FILES_EXPLAIN'			=> 'Met de volgende stap worden alle bestanden vergeleken met de update bestanden - dit kan enige tijd in beslag nemen als dit de eerste bestandscontrole is.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Volgens uw database is uw versie nu up-to-date. U kunt nu doorgaan met de bestandscontrole om er zeker van te zijn dat alle bestanden echt up-to-date zijn tot de nieuwste versie van phpBB.',
	'CHECK_UPDATE_DATABASE'			=> 'Doorgaan met het updateproces',
	'COLLECTED_INFORMATION'			=> 'Bestandsinformatie',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'De lijst hieronder weergeeft de informatie over de bestanden die geüpdatet moeten worden. Lees de informatie aan het begin van elk statusblok om te zien wat ze betekenen en wat u moet doen om een succesvolle update uit te voeren.',
	'COLLECTING_FILE_DIFFS'			=> 'Bezig met verzamelen van bestandsverschillen',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'U zou u nu moeten <a href="../ucp.php?mode=login">aanmelden op uw forum</a> en controleren of alles correct werkt. Vergeet niet om de install-directory te verwijderen, hernoemen of te verplaatsen!',
	'CONTINUE_UPDATE_NOW'			=> 'Nu doorgaan met het updateproces', // Shown within the database update script at the end if called from the updater
	'CONTINUE_UPDATE'				=> 'Doorgaan met de update', // Shown after file upload to indicate the update process is not yet finished
	'CURRENT_FILE'					=> 'Begin van het conflict - Orgineel bestandscode voor de update',
	'CURRENT_VERSION'				=> 'Huidige versie',

	'DATABASE_TYPE'						=> 'Database-type',
	'DATABASE_UPDATE_INFO_OLD'			=> 'Het database-updatebestand in de install-directory is niet up-to-date. Wees er zeker van dat u de correcte versie van het bestand heeft geüpload.',
	'DELETE_USER_REMOVE'				=> 'Verwijder gebruiker en verwijder berichten',
 	'DELETE_USER_RETAIN'				=> 'Verwijder gebruiker en behoud berichten',
	'DESTINATION'						=> 'Doelbestand',
	'DIFF_INLINE'						=> 'Inline',
	'DIFF_RAW'							=> 'Raw unified diff',
	'DIFF_SEP_EXPLAIN'					=> 'Code blok gebruikt binnen het geüpdatet/nieuw bestand',
	'DIFF_SIDE_BY_SIDE'					=> 'Zij aan zij',
	'DIFF_UNIFIED'						=> 'Unified diff',
	'DO_NOT_UPDATE'						=> 'Dit bestand niet updaten',
	'DONE'								=> 'Klaar',
	'DOWNLOAD'							=> 'Downloaden',
	'DOWNLOAD_AS'						=> 'Downloaden als',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> 'Aangepast bestandsarchief downloaden (aanbevolen)',
	'DOWNLOAD_CONFLICTS'				=> 'Conflicten voor dit bestand downloaden',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Zoek voor &lt;&lt;&lt; om te kijken voor conflicten',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Aangepast bestandsarchief downloaden',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Wanneer u het heeft gedownload moet u het archief uitpakken. U vindt de aangepaste bestanden die u moet uploaden naar uw phpBB-hoofdmap (waar u o.a het bestand config.php, memberlist.php etc kunt terugvinden) in het archief. Upload de bestanden dan naar de juiste locaties. Wanneer u alle bestanden heeft geüpload, controleert u alle bestanden opnieuw met de andere knop hieronder.',

	'ERROR'			=> 'Fout',
	'EDIT_USERNAME'	=> 'Gebruikersnaam wijzigen',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Bestand is al up-to-date.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Bestand niet toegestaan om gediffed te worden.',
	'FILE_USED'						=> 'Informatie gebruikt van',			// Single file
	'FILES_CONFLICT'				=> 'Conflicterende bestanden',
	'FILES_CONFLICT_EXPLAIN'		=> 'De volgende bestanden zijn aangepast en vertegenwoordigen niet de orginele bestanden van de oude versie. phpBB heeft ondervonden dat deze bestanden conflicten veroorzaken als ze worden samengevoegd. Onderzoek deze conflicten en probeer ze handmatig op te lossen, of hervat de update en kies dan de voorkeurs samenvoegings-methode. Als u de conflicten handmatig oplost, controleer daarna de bestanden opnieuw nadat u ze heeft aangepast. U kunt ook nog kiezen welk samenvoegings-methode u wilt gebruiken voor elk bestand. De eerste methode zal het resultaat hebben dat de regels die een conflict veroorzakten in het bestand zullen worden verwijderd, de andere manier zal als resultaat hebben dat u al uw aanpassingen kwijt raakt van het nieuwere bestand.',
	'FILES_MODIFIED'				=> 'Aangepaste bestanden',
	'FILES_MODIFIED_EXPLAIN'		=> 'De volgende bestanden zijn aangepast en vertegenwoordigen niet de bestanden van de oude versie. Het geüpdate bestand zal worden samengevoegd met uw aanpassingen en het nieuwe bestand.',
	'FILES_NEW'						=> 'Nieuwe bestanden',
	'FILES_NEW_EXPLAIN'				=> 'De volgende bestanden bestaan momenteel niet in uw installatie. Deze bestanden zullen worden toegevoegd naar uw installatie.',
	'FILES_NEW_CONFLICT'			=> 'Nieuwe conflicterende bestanden',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'De volgende bestanden zijn nieuw in de laatste versie, maar er is bepaald dat er al een bestand is met dezelfde naam op dezelfde positie. Dit bestand zal worden overschreven door het nieuwe bestand.',
	'FILES_NOT_MODIFIED'			=> 'Niet aangepaste bestanden',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'De volgende bestanden zijn niet aangepast, en zijn gelijk aan met de orginele phpBB-bestanden van de versie die u wilt updaten.',
	'FILES_UP_TO_DATE'				=> 'Reeds geüpdate bestanden',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'De volgende bestanden zijn reeds up-to-date en hoeven niet te worden geüpdatet.',
	'FTP_SETTINGS'					=> 'FTP-instellingen',
	'FTP_UPDATE_METHOD'				=> 'FTP-upload',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'De update-bestanden zijn incompleet met uw geïnstalleerde versie. Uw geïnstaleerde versie is %1$s en de update-bestanden is voor het updaten van phpBB %2$s naar %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'De update-bestanden zijn niet compleet.',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'De database-update is succesvol voltooid. Nu moet u doorgaan met het update proces om verder te kunnen gaan.',

	'KEEP_OLD_NAME'		=> 'Gebruikersnaam behouden',

	'LATEST_VERSION'		=> 'Laatste versie',
	'LINE'					=> 'Regel',
	'LINE_ADDED'			=> 'Toegevoegd',
	'LINE_MODIFIED'			=> 'Aangepast',
	'LINE_REMOVED'			=> 'Verwijderd',
	'LINE_UNMODIFIED'		=> 'Niet aangepast',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Om de phpBB-installatie te kunnen updaten, moet u aangemeld zijn.',

	'MAPPING_FILE_STRUCTURE'	=> 'Om het uploaden te vereenvoudingen zijn hier de locaties waar de bestanden te vinden zijn in uw phpBB-installatie.',

	'MERGE_MODIFICATIONS_OPTION'	=> 'Modificaties samenvoegen',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Niet samenvoegen - gebruik een nieuw bestand',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Niet samenvoegen - gebruik het huidig geïnstalleerde bestand',
	'MERGE_MOD_FILE_OPTION'		=> 'Modificaties samenvoegen (Verwijdert de nieuwe phpBB-code binnen het blok dat een conflict vormt)',
	'MERGE_NEW_FILE_OPTION'		=> 'Modificaties samenvoegen (Verwijdert de aangepaste code binnen het blok dat een conflict vormt)',
	'MERGE_SELECT_ERROR'		=> 'Conflicterende bestands samenvoegings-mode is niet correct geselecteerd.',
	'MERGING_FILES'				=> 'Verschillen samenvoegen',
	'MERGING_FILES_EXPLAIN'		=> 'Momenteel bezig met het verzamelen van de uiteindelijke bestandswijzigingen.<br /><br />Wacht totdat phpBB alle acties heeft uitgevoerd op de gewijzigde bestanden.',

	'NEW_FILE'						=> 'Einde van het conflict',
	'NEW_USERNAME'					=> 'Nieuwe gebruikersnaam',
	'NO_AUTH_UPDATE'				=> 'U bent niet gemachtigd om te kunnen updaten',
	'NO_ERRORS'						=> 'Geen fouten',
	'NO_UPDATE_FILES'				=> 'De volgende bestanden zijn niet geüpdatet',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'De volgende bestanden zijn nieuw of aangepast maar de directory waar ze zich normaal in bevinden kon niet worden gevonden in uw installatie. Als deze lijst andere bestanden bevat van andere directory dan language of styles/ dan heeft u waarschijnlijk u directory structuur aangepast en dan is de update waarschijnlijk incompleet.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Er is geen geldige update-directory gevonden, wees er zeker van dat u de relevante bestanden heeft geüpload.<br /><br />Uw installatie blijkt <strong>niet</strong> up-to-date te zijn. Update-pakketten zijn beschikbaar voor uw versie van phpBB %1$s, bezoek daarvoor <a href="http://downloads.phpbbservice.nl" rel="external">http://downloads.phpbbservice.nl</a> om het correcte pakket te verkrijgen om te updaten van versie %2$s naar versie %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Uw versie is up-to-date. Het is niet nodig om het update-hulpmiddel uit te voeren. Als u een integriteitscontrole wilt uitvoeren op u bestanden, wees er dan zeker van dat u de correcte update-bestanden heeft geüpload.',
	'NO_UPDATE_INFO'				=> 'Update-bestandsinformatie kan niet worden gevonden.',
	'NO_UPDATES_REQUIRED'			=> 'Er zijn geen updates nodig',
	'NO_VISIBLE_CHANGES'			=> 'Er zijn geen zichtbare wijzigingen',
	'NOTICE'						=> 'Notitie',
	'NUM_CONFLICTS'					=> 'Aantal conflicten',
	'NUMBER_OF_FILES_COLLECTED'		=> 'Momenteel zijn er %1$d van de %2$d bestanden gecontroleerd op verschillen.<br />Wacht totdat alle bestanden zijn gecontroleerd.',

	'OLD_UPDATE_FILES'		=> 'De update-bestanden zijn niet up-to-date. De update-bestanden die gevonden zijn, zijn voor een update van phpBB %1$s naar phpBB %2$s, maar de laatste versie van phpBB is %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'Huidig pakket wordt geüpdate naar versie',
	'PERFORM_DATABASE_UPDATE'			=> 'Start een database-update',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Hieronder vindt u een knop naar het update-database-script. De database-update kan eventjes duren, stop het script niet als het eventueel lijkt dat het vastloopt. Nadat de database-update succesvol is uitgevoerd, volgt u de instructies om door te gaan met het update-proces.',
	'PREVIOUS_VERSION'					=> 'Vorige versie',
	'PROGRESS'							=> 'Vooruitgang',

	'RESULT'					=> 'Resultaat',
	'RUN_DATABASE_SCRIPT'		=> 'Mijn database nu updaten',

	'SELECT_DIFF_MODE'			=> 'Diff-mode selecteren',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Bestandsformaat voor het archief kiezen',
	'SELECT_FTP_SETTINGS'		=> 'FTP-instellingen selecteren',
	'SHOW_DIFF_CONFLICT'		=> 'Verschillen/conflicten weergeven',
	'SHOW_DIFF_FINAL'			=> 'Uiteindelijk bestand weergeven',
	'SHOW_DIFF_MODIFIED'		=> 'Samengevoegde verschillen weergeven',
	'SHOW_DIFF_NEW'				=> 'Bestandsinhoud weergeven',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Verschillen weergeven',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Verschillen weergeven',
	'SOME_QUERIES_FAILED'		=> 'Sommige queries zijn mislukt, welke dat zijn en de fouten zijn hieronder weergegeven.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Dit is mogelijk nergens om uw zorgen over te maken, de update zal worden hervat. Mocht dit mislukken en u kunt niet het update-proces voltooien dan zult u ondersteuning moeten vragen op onze <a href="http://forum.phpBBservice.nl">supportforums</a>. Lees ook de <a href="../docs/README.html">README</a> voor verdere informatie over het verkijgen van verdere hulp of bezoek de website van <a href="http://www.phpBBservice.nl">phpBBservice.nl</a>.',
	'STAGE_FILE_CHECK'			=> 'Bestanden controleren',
	'STAGE_UPDATE_DB'			=> 'Database updaten',
	'STAGE_UPDATE_FILES'		=> 'Bestanden updaten',
	'STAGE_VERSION_CHECK'		=> 'Versiecontrole',
	'STATUS_CONFLICT'			=> 'Aangepast bestand veroorzaakt conflicten',
	'STATUS_MODIFIED'			=> 'Aangepast bestand',
	'STATUS_NEW'				=> 'Nieuw bestand',
	'STATUS_NEW_CONFLICT'		=> 'Nieuw conflicterend bestand',
	'STATUS_NOT_MODIFIED'		=> 'Niet aangepast bestand',
	'STATUS_UP_TO_DATE'			=> 'Bestand is al geüpdate',

	'TOGGLE_DISPLAY'				=> 'Bestandslijst bekijken/verbergen',
	'TRY_DOWNLOAD_METHOD'			=> 'U mag proberen om de aangepaste bestandsmethode te downloaden.<br />Deze methode werkt altijd, en het is ook de aanbevolen update methode.',
	'TRY_DOWNLOAD_METHOD_BUTTON'	=> 'Probeer deze methode nu',

	'UPDATE_COMPLETED'				=> 'Update voltooid',
	'UPDATE_DATABASE'				=> 'Update database',
	'UPDATE_DATABASE_EXPLAIN'		=> 'Met de volgende stappen zal de database worden geüpdate.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Bezig met het updaten van het database-schema',
	'UPDATE_FILES'					=> 'Bestanden updaten',
	'UPDATE_FILES_NOTICE'			=> 'Wees er ook zeker van dat u de forumbestanden ook geüpdate heeft, dit bestand update alleen uw database.',
	'UPDATE_INSTALLATION'			=> 'phpBB-installatie updaten',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Met deze optie, is het mogelijk om uw phpBB-installatie te updaten naar de laatste versie.<br />Tijdens het proces zullen alle bestanden gecontroleerd worden op hun aanwezigheid. U kunt ook alle verschillen bekijken van de bestanden voordat u gaat updaten.<br /><br />De bestandsupdate kunt u op twee manieren doen.</p><h2>Handmatige update</h2><p>Met deze update download u alleen uw persoonlijke set van gewijzigde bestanden om er zeker van te zijn dat u geen modificaties kwijt raakt die u heeft geïnstalleerd. Nadat u dit pakket heeft gedownload, zult u de bestanden handmatig moeten uploaden naar hun correcte plaats in uw phpBB-hoofdmap, dus waar u de bestanden config.php, memberlist.php, enz kunt terugvinden. Wanneer u dat heeft gedaan, kunt u een bestandscontrole doen dat u laat zien of de bestanden correct zijn geüpload naar de juiste locatie.</p><h2>Automatische update met de FTP</h2><p>Deze methode is bijna hetzelfde als de eerste, maar met deze methode hoeft u niet de gewijzigde bestanden te downloaden naar uw eigen computer. Dit wordt namelijk gedaan voor u. Om deze methode te gebruiken heeft u de FTP-aanmeldingsgegevens nodig wanneer er naar wordt gevraagd. Wanneer dat klaar is, zult u worden herleidt naar de bestandscontrolemethode dat controleert of alles correct is geüpdate.<br /><br />',

	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Versiemededeling</h1>

		<p>Lees de (Engelstalige) <a href="%1$s" title="%1$s"><strong>mededeling van de laatste versie</strong></a> voordat u het update-proces hervat, het kan belangrijke informatie bevatten. Het bevat ook de volledige downloadlinks en het overzicht van de wijzigingen in vergelijking met de vorige versie ( changelog ).</p>

		<br />

		<h1>Hoe update u uw installatie met het Automatische update-pakket?</h1>

		<p>De aangeraden manier van updaten van uw installatie die hieronder staat is alleen geldig voor het Automatische update-pakket. U mag ook uw installatie updaten met de methodes die beschreven zijn in het <a href="../docs/INSTALL.html">INSTALL.html</a> document. De stappen om phpBB3 automatisch te updaten zijn als volgt:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Ga naar de <a href="http://downloads.phpBBservice.nl/" title="http://downloads.phpBBservice.nl/">phpBBservice.nl downloads-pagina</a> en download het "Automatisch update-pakket".<br /><br /></li>
            <li>Pak het archiefbestand uit.<br /><br /></li>
			<li>Upload de compleet uitgepakte install-map naar uw phpBB-hoofdmap (waar u het bestand config.php terug kan vinden).<br /><br /></li>
		</ul>

		<p>Wanneer u het geüpload heeft naar uw forum, zal het forum uitgeschakeld zijn voor normale bezoekers wanneer de install-map aanwezig is.<br /><br />
		<strong><a href="%2$s" title="%2$s">Update-proces nu staren doormiddel van uw internet-browser te richten op de install-map</a>.</strong><br />
		<br />
		U zult dan worden herleid naar het updateproces. U zult daarna op de hoogte worden gehouden wanneer de update voltooid is.
		</p>
	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '
		<h1>Incomplete update herkend</h1>

		<p>phpBB heeft een incomplete Automatische update herkend. Wees er zeker van dat u elke stap goed heeft op gevolgd van het Automatische update-proces. Hieronder zal de link weer worden weergegeven om phpBB opnieuw te kunnen updaten of ga direct naar uw install-directory.</p>
	',

	'UPDATE_METHOD'					=> 'Update-methode',
	'UPDATE_METHOD_EXPLAIN'			=> 'U kunt hier de update-methode selecteren. Als u gebruik maakt van de FTP-upload optie, zal er een formulier worden weergegeven waarbij u de FTP-accountgegevens moet invoeren. Met deze methode zullen alle bestanden automatisch worden verplaatst naar de nieuwe locatie en back-ups van de oude bestanden zullen ook worden gemaakt doormiddel van .bak in de bestandsnaam. Als u ervoor kiest om de aangepaste bestanden te downloaden moet u ze eerst uitpakken en later handmatig uploaden naar de juiste locatie.',
	'UPDATE_REQUIRES_FILE'			=> 'Voor het update-script moet het volgende bestand aanwezig zijn: %s',
	'UPDATE_SUCCESS'				=> 'Update was succesvol',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Alle bestanden zijn succesvol geüpdate. De volgende stap heeft betrekking op het controleren van al uw bestanden, wees er dus zeker van dat u alle bestanden goed hebt geüpload.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Bezig met het updaten van de versie en optimalisatie van de tabellen',
	'UPDATING_DATA'					=> 'Gegevens aan het updaten',
	'UPDATING_TO_LATEST_STABLE'		=> 'Database aan het updaten naar de laatste stabiele versie',
	'UPDATED_VERSION'				=> 'Geupdate versie',
	'UPGRADE_INSTRUCTIONS'          => 'Een nieuwe functieuitgave <strong>%1$s</strong> is beschikbaar. Lees de (Engelstalige) <a href="%2$s" title="%2$s"><strong>mededeling</strong></a> over de uitgave van deze versie, om te zien wat het te bieden heeft en hoe u uw forum kan bijwerken naar deze versie.',
	'UPLOAD_METHOD'					=> 'Uploadmethode',

	'UPDATE_DB_SUCCESS'				=> 'Database is succesvol geüpdate.',
	'USER_ACTIVE'					=> 'Actieve gebruiker',
	'USER_INACTIVE'					=> 'Inactieve gebruiker',

	'VERSION_CHECK'					=> 'Versiecontrole',
	'VERSION_CHECK_EXPLAIN'			=> 'Controleert of uw phpBB-installatie up-to-date is.',
	'VERSION_NOT_UP_TO_DATE'		=> 'Uw phpBB-installatie is niet up-to-date. Ga verder met het update-proces.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'Uw phpBB-installatie is niet up-to-date.<br />Hieronder is een link naar de aankondiging van uitgave van de laatste versie, wat meer informatie bevat en ook instructies over hoe u kunt gaan updaten.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'Uw phpBB-installatie is niet up-to-date.',
	'VERSION_UP_TO_DATE'			=> 'Uw phpBB-installatie is up-to-date. Hoewel er geen updates beschikbaar zijn op dit moment, kunt u doorgaan om een geldigheidcontrole uit te voeren op de bestanden.',
	'VERSION_UP_TO_DATE_ACP'		=> 'Uw phpBB-installatie is up-to-date. Er zijn geen updates beschikbaar op dit moment.',
	'VIEWING_FILE_CONTENTS'			=> 'Bestandsinhoud bekijken',
	'VIEWING_FILE_DIFF'				=> 'Bestandsverschillen bekijken',

	'WRONG_INFO_FILE_FORMAT'	=> 'Verkeerde bestandsinformatie-formaat',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Bedankt, het beheer',
	'CONFIG_SITE_DESC'				=> 'Een korte tekst om uw forum te beschrijven',
	'CONFIG_SITENAME'				=> 'Uwdomein.nl',

	'DEFAULT_INSTALL_POST'			=> 'Dit is een voorbeeldbericht van uw phpBB3 installatie. U mag dit bericht, dit onderwerp, en ook nog dit forum verwijderen als u wilt, aangezien alles correct blijkt te werken. Tijdens het installatie proces is uw eerste categorie en uw eerste forum toegewezen aan en ingesteld voor de voorgeïnstalleerde groepen ; beheerders, zoekrobots, forummoderators, gasten, geregistreerde gebruikers en de geregistreerde COPPA gebruikers. Als u wenst om uw eerste categorie en uw eerste forum te verwijderen, vergeet dan niet de permissies voor al de gebruikersgroepen te laten toewijzen, vooral uw nieuwe categorieën en forums die u aanmaakt. Het is aanbevolen om uw eerste categorie te hernoemen en uw eerste forum, en de permissies te kopiëren van deze forums wanneer u nieuwe categorieën en forums aan het maken bent. Veel plezier!',

	'FORUMS_FIRST_CATEGORY'			=> 'Uw eerste categorie',
	'FORUMS_TEST_FORUM_DESC'		=> 'Beschrijving van uw eerste forum.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Uw eerste forum',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Beheerder',
	'REPORT_WAREZ'					=> 'Het gemelde bericht bevat links naar illegale gekopieerde software.',
	'REPORT_SPAM'					=> 'Het gemelde bericht heeft alleen de bedoeling om te adverteren voor een website of een ander product.',
	'REPORT_OFF_TOPIC'				=> 'Het gemelde bericht is off-topic.',
	'REPORT_OTHER'					=> 'Het gemelde bericht past niet in een andere categorie, gebruik het meer informatieveld om meer toelichting te geven.',

	'SMILIES_ARROW'					=> 'Pijl',
	'SMILIES_CONFUSED'				=> 'Verward',
	'SMILIES_COOL'					=> 'Stoer',
	'SMILIES_CRYING'				=> 'Huilend of héél verdrietig',
	'SMILIES_EMARRASSED'			=> 'Verlegen',
	'SMILIES_EVIL'					=> 'Boos of héél boos',
	'SMILIES_EXCLAMATION'			=> 'Uitroepteken',
	'SMILIES_GEEK'					=> 'Gek',
	'SMILIES_IDEA'					=> 'Idee',
	'SMILIES_LAUGHING'				=> 'Lachend',
	'SMILIES_MAD'					=> 'Kwaad',
	'SMILIES_MR_GREEN'				=> 'Mr. Groen',
	'SMILIES_NEUTRAL'				=> 'Neutraal',
	'SMILIES_QUESTION'				=> 'Vraagteken',
	'SMILIES_RAZZ'					=> 'Steekt tong uit',
	'SMILIES_ROLLING_EYES'			=> 'Rollende ogen',
	'SMILIES_SAD'					=> 'Verdrietig',
	'SMILIES_SHOCKED'				=> 'Verbaasd',
	'SMILIES_SMILE'					=> 'Lachend',
	'SMILIES_SURPRISED'				=> 'Verrassend',
	'SMILIES_TWISTED_EVIL'			=> 'Duivel',
	'SMILIES_UBER_GEEK'				=> 'Knettergek',
	'SMILIES_VERY_HAPPY'			=> 'Heel blij',
	'SMILIES_WINK'					=> 'Knipoog',

	'TOPICS_TOPIC_TITLE'			=> 'Welkom bij phpBB3',
));
?>