<?php
/**
*
* acp_permissions [Dutch]
*
* @package language
* @version $Id: permissions.php 267 2010-01-31 16:12:05Z Raimon $
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Permissies zijn heel gedetailleerd instelbaar en zijn onderverdeeld in vier grootte secties:</p>

		<h2>Globale permissies</h2>
		<p>Deze worden gebruikt om de toegang te controleren op een globaal niveau en ze daarna toe te passen op het gehele forum. Ze zijn verder onderverdeeld in gebruikerspermissies, groepspermissies, beheerders en globale moderators.</p>

		<h2>Forumgebaseerde permissies</h2>
		<p>Deze worden gebruikt om de toegang te controleren per forum. Ze zijn verder onderverdeeld in forumpermissies, forummoderators, gebruikerspermissies voor forums en in groepspermissies voor forums.</p>

		<h2>Permissierollen</h2>
		<p>Deze worden gebruikt om verschillende sets van permissies voor verschillende permissietypes aan te maken, en die later kunnen worden toegewezen op een rolgebaseerde basis. De standaard rollen zullen het beheer van grootte en kleine forum moeten dekken, alhoewel kan je elke van de vier onderdelen toevoegen/wijzigen/rollen verwijderen naar eigen wens.</p>

		<h2>Permissiemaskers</h2>
		<p>Deze worden gebruikt om de effectieve permissies te bekijken die toegewezen zijn aan gebruikers, moderators (lokaal en globaal), beheerders of forums.</p>

		<br />

		<p>Voor meer informatie over het instellen en het beheren van de permissies van uw phpBB3-forum, bekijk dan <a href="http://docs.phpbbservice.nl/handleiding/3.0/snellestart/snel_permissies.php">hoofdstuk 1.5 van onze snelle start handleiding</a>.</p>
	',

	'ACL_NEVER'				=> 'Nooit',
	'ACL_SET'				=> 'Instellen van permissies',
	'ACL_SET_EXPLAIN'		=> 'Permissies zijn gebaseerd op een simpel <samp>JA</samp>/<samp>NEE</samp>-systeem. Instellen van een optie naar <samp>NOOIT</samp> voor een gebruiker of gebruikersgroep zal alle andere waarde overschrijven die er aan toegewezen zijn. Als u geen waarde wilt toewijzen aan een optie voor deze gebruiker of groep, selecteer dan <samp>NEE</samp>. Als waardes voor deze optie ergens anders zijn toegewezen, dan zullen deze worden gebruikt bij voorkeur, anders is <samp>NOOIT</samp> verondersteld. Alle objecten die gemarkeerd (met het selectievakje) zijn, zullen de permissie kopiëren die u heeft opgegeven.',
	'ACL_SETTING'			=> 'Instelling',

	'ACL_TYPE_A_'			=> 'Beheerderspermissies',
	'ACL_TYPE_F_'			=> 'Forumpermissies',
	'ACL_TYPE_M_'			=> 'Moderatorpermissies',
	'ACL_TYPE_U_'			=> 'Gebruikerspermissies',

	'ACL_TYPE_GLOBAL_A_'	=> 'Beheerderspermissies',
	'ACL_TYPE_GLOBAL_U_'	=> 'Gebruikerspermissies',
	'ACL_TYPE_GLOBAL_M_'	=> 'Globale moderatorpermissies',
	'ACL_TYPE_LOCAL_M_'		=> 'Moderatorpermissies',
	'ACL_TYPE_LOCAL_F_'		=> 'Forumpermissies',

	'ACL_NO'				=> 'Nee',
	'ACL_VIEW'				=> 'Bekijk permissies',
	'ACL_VIEW_EXPLAIN'		=> 'Hier kunt u de effectieve permissies bekijken die de gebruiker/groep heeft. Een rood vierkant betekent dat de gebruiker/groep geen permissies heeft, een groen vierkant betekent dat de gebruiker/groep wel permissies heeft.',
	'ACL_YES'				=> 'Ja',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Hier kunt u beheerderspermissies toewijzen aan gebruikers of groepen. Alle gebruikers met beheerderspermissies kunnen het beheerderspaneel zien.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Hier kunt u gebruikers en groepen als forummoderators toewijzen. Gebuik de juiste pagina om gebruikers toegang te geven tot forums, of om ze globale moderatorpermissies of beheerderspermissies te geven.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Hier kunt u instellen welke gebruikers en groepen toegang hebben tot welk forum. Gebuik de juiste pagina om moderators toe te wijzen of om beheerders te bepalen.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Hier kunt u forumpermissies kopiëren van het ene forum naar andere of naar meerdere forums.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Hier kunt u globale moderatorpermissies toewijzen aan gebruikers of groepen. Deze moderators zijn gelijk aan normale moderators behalve dat ze toegang hebben tot elk forum.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Hier kunt u forumpermissies toewijzen aan groepen.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Hier kunt u globale permissies toewijzen aan groepen - gebruikerspermissies, globale moderatorpermissies en beheerderpermissies. Gebruikerspermissies bevatten de mogelijkheden zoals het gebruik van avatars, het versturen van privéberichten etc, globale moderatorpermissies o.a goedkeuren van berichten, beheren van onderwerpen, beheren van verbanningen etc, en als laatste beheerderspermissies zoals wijzigen van permissies, het opgeven van aangepaste BBCodes, beheren van forums, etc. Individuele gebruikerspermissies zullen alleen gewijzigd moeten worden in zeldzame situaties, de voorkeursmethode is eigenlijk om gebruikers in groepen te plaatsen en dat u daarna groepspermissies toewijst.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Hier kunt u de rollen voor de beheerderspermissies beheren. Rollen zijn effectieve permissies, als u een rol wijzigt zullen de permissies van de items die toegewezen zijn aan deze rol ook gewijzigt worden.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Hier kunt u de rollen voor de forumpermissies beheren. Rollen zijn effectieve permissies, als u een rol wijzigt zullen de permissies van de items die toegewezen zijn aan deze rol ook gewijzigt worden.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Hier kunt u de rollen voor de moderatorpermissies beheren. Rollen zijn effectieve permissies, als u een rol wijzigt zullen de permissies van de items die toegewezen zijn aan deze rol ook gewijzigt worden.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Hier kunt u de rollen voor de gebruikerspermissies beheren. Rollen zijn effectieve permissies, als u een rol wijzigt zullen de permissies van de items die toegewezen zijn aan deze rol ook gewijzigt worden.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Hier kunt u forumpermissies toewijzen aan gebruikers.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Hier kunt u globale permissies toewijzen aan gebruikers - gebruikerspermissies, globale moderatorpermissies en beheerderpermissies. Gebruikerspermissies bevatten de mogelijkheden zoals het gebruik van avatars, het versturen van privéberichten etc, globale moderatorpermissies o.a goedkeuren van berichten, beheren van onderwerpen, beheren van verbanningen etc, en als laatste beheerderspermissies zoals wijzigen van permissies, het opgeven van aangepaste BBCodes, beheren van forums, etc. Om deze instellingen aan te passen voor een groot aantal gebruikers, raden wij u aan om de groepspermissies te gebruiken. Gebruikerspermissies zullen alleen gewijzigd moeten worden in zeldzame situaties, de voorkeursmethode is eigenlijk om gebruikers in groepen te plaatsen en dat u daarna groepspermissies toewijst.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Hier kunt u de effectieve beheerderspermissies bekijken die toegewezen zijn aan de geselecteerde gebruikers/groepen.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Hier kunt u de effectieve globale moderatorpermissies bekijken die toegewezen zijn aan de geselecteerde gebruikers/groepen.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Hier kunt u de effectieve forumpermissies bekijken die toegewezen zijn aan de geselecteerde gebruikers/groepen en forums.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Hier kunt u de effectieve moderatorpermissies bekijken die toegewezen zijn aan de geselecteerde gebruikers/groepen en forums.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Hier kunt u de effectieve gebruikerspermissies bekijken die toegewezen zijn aan de geselecteerde gebruikers/groepen.',

	'ADD_GROUPS'				=> 'Groepen toevoegen',
	'ADD_PERMISSIONS'			=> 'Permissies toevoegen',
	'ADD_USERS'					=> 'Gebruikers toevoegen',
	'ADVANCED_PERMISSIONS'		=> 'Uitgebreide permissies',
	'ALL_GROUPS'				=> 'Alle groepen selecteren',
	'ALL_NEVER'					=> 'Alles <samp>NOOIT</samp>',
	'ALL_NO'					=> 'Alles <samp>NEE</samp>',
	'ALL_USERS'					=> 'Alle gebruikers selecteren',
	'ALL_YES'					=> 'Alles <samp>JA</samp>',
	'APPLY_ALL_PERMISSIONS'		=> 'Alle permissies toepassen',
	'APPLY_PERMISSIONS'			=> 'Permissies toepassen',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'De permissies en de rol die opgegeven zijn voor dit item zullen alleen worden toegepast op dit item en alle geselecteerde items.',
	'AUTH_UPDATED'				=> 'Permissies zijn bijgewerkt.',

	'COPY_PERMISSIONS_CONFIRM'				=> 'Weet u zeker dat u deze actie wilt uitvoeren? Vergeet niet dat dit alle bestaande permissies zal overschrijven op de geselecteerde doelen.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'Het bronforum waar u de permissies van wilt kopiëren.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'De bestemmingsforums waar u de gekopieerde permissies op wilt toepassen.',
	'COPY_PERMISSIONS_FROM'					=> 'Permissies kopiëren van',
	'COPY_PERMISSIONS_TO'					=> 'Permissies toepassen op',

	'CREATE_ROLE'				=> 'Rol aanmaken',
	'CREATE_ROLE_FROM'			=> 'Instellingen gebruiken van…',
	'CUSTOM'					=> 'Aangepast…',

	'DEFAULT'					=> 'Standaard',
	'DELETE_ROLE'				=> 'Rol verwijderen',
	'DELETE_ROLE_CONFIRM'		=> 'Weet u zeker dat u deze rol wilt verwijderen? Items, die deze rol hebben toegewezen, zullen hun permissies <strong>niet</strong> verliezen.',
	'DISPLAY_ROLE_ITEMS'		=> 'Items bekijken die deze rol gebruiken',

	'EDIT_PERMISSIONS'			=> 'Permissies wijzigen',
	'EDIT_ROLE'					=> 'Rol wijzigen',

	'GROUPS_NOT_ASSIGNED'		=> 'Geen groep toegewezen aan deze rol',

	'LOOK_UP_GROUP'				=> 'Gebruikersgroep opzoeken',
	'LOOK_UP_USER'				=> 'Gebruiker opzoeken',

	'MANAGE_GROUPS'		=> 'Groepen beheren',
	'MANAGE_USERS'		=> 'Gebruikers beheren',

	'NO_AUTH_SETTING_FOUND'		=> 'Permissieinstellingen niet opgegeven.',
	'NO_ROLE_ASSIGNED'			=> 'Geen rol toegewezen…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Wanneer u het instelt naar deze rol, zal het de permissies niet wijzigen aan de rechterkant. Als u alle permissies niet ingesteld wilt hebben of wilt verwijderen, dan moet u de “Alles <samp>NEE</samp>”-link gebruiken.',
	'NO_ROLE_AVAILABLE'			=> 'Geen rol beschikbaar',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Geef de rol een naam.',
	'NO_ROLE_SELECTED'			=> 'Rol kon niet worden gevonden.',
	'NO_USER_GROUP_SELECTED'	=> 'U heeft geen gebruiker of groep geselecteerd.',

	'ONLY_FORUM_DEFINED'	=> 'U heeft alleen forums opgegeven in uw selectie. Selecteer tenminste ook één gebruiker of één groep.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Permissies en rol zullen worden toegepast op alle geselecteerde objecten',
	'PLUS_SUBFORUMS'				=> '+ Subforums',

	'REMOVE_PERMISSIONS'			=> 'Permissies verwijderen',
	'REMOVE_ROLE'					=> 'Rol verwijderen',
	'RESULTING_PERMISSION'			=> 'Permissie resultaat',
	'ROLE'							=> 'Rol',
	'ROLE_ADD_SUCCESS'				=> 'Rol is succesvol toegevoegd.',
	'ROLE_ASSIGNED_TO'				=> 'Gebruikers/groepen toegewezen aan %s',
	'ROLE_DELETED'					=> 'Rol is succesvol verwijderd.',
	'ROLE_DESCRIPTION'				=> 'Rolbeschrijving',

	'ROLE_ADMIN_FORUM'			=> 'Forumbeheerder',
	'ROLE_ADMIN_FULL'			=> 'Volledige beheerder',
	'ROLE_ADMIN_STANDARD'		=> 'Standaard beheerder',
	'ROLE_ADMIN_USERGROUP'		=> 'Gebruiker en groepsbeheerder',
	'ROLE_FORUM_BOT'			=> 'Bot toegang',
	'ROLE_FORUM_FULL'			=> 'Volledige toegang',
	'ROLE_FORUM_LIMITED'		=> 'Beperkte toegang',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Beperkte toegang + peilingen',
	'ROLE_FORUM_NOACCESS'		=> 'Geen toegang',
	'ROLE_FORUM_ONQUEUE'		=> 'Op moderatiewachtrij',
	'ROLE_FORUM_POLLS'			=> 'Standaard toegang + peilingen',
	'ROLE_FORUM_READONLY'		=> 'Alleen leestoegang',
	'ROLE_FORUM_STANDARD'		=> 'Standaard toegang',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Pas geregistreerde gebruiker',
	'ROLE_MOD_FULL'				=> 'Volledige moderator',
	'ROLE_MOD_QUEUE'			=> 'Wachtrij moderator',
	'ROLE_MOD_SIMPLE'			=> 'Eenvoudige moderator',
	'ROLE_MOD_STANDARD'			=> 'Standaard moderator',
	'ROLE_USER_FULL'			=> 'Alle functies',
	'ROLE_USER_LIMITED'			=> 'Beperkte functies',
	'ROLE_USER_NOAVATAR'		=> 'Geen avatar',
	'ROLE_USER_NOPM'			=> 'Geen privéberichten',
	'ROLE_USER_STANDARD'		=> 'Standaard functies',
	'ROLE_USER_NEW_MEMBER'		=> 'Pas geregistreerde gebruiker',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Heeft toegang tot het forumbeheer en de instellingen van de forumpermissies.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Heeft toegang tot alle beheerdersfuncties van dit forum.<br />Is niet aan te raden.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Heeft toegang tot de meeste beheerdersfuncties maar kan niet server of systeem gerelateerde instellingen gebruiken.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Kan groepen en gebruikers beheren. En is in staat om permissies, instellingen te wijzigen en om verbanningen en rangen te beheren.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Deze rol is aan te raden voor bots en zoekrobots.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Kan alle forumfunctionaliteiten gebruiken, inclusief het plaatsen van mededelingen en stickies. Kan ook de vloedbeperking negeren.<br /> Niet aan te raden voor gewone gebruikers.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Kan sommige forumfunctionaliteiten gebruiken, maar kan geen bestanden toevoegen of berichtpictogrammen gebruiken.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Zelfde als beperkte toegang, maar kan ook peilingen aanmaken.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Heeft geen toegang tot het forum en kan het niet zien.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Kan de meeste forumfunctionaliteiten gebruiken inclusief bijlagen, maar berichten en onderwerpen moeten eerst goedgekeurd worden door een moderator.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Net zoals de standaard toegang maar kan ook peilingen aanmaken.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Kan het forum lezen, maar kan geen nieuwe onderwerpen aanmaken of reageren op berichten.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Kan de meeste forumfunctionaliteiten gebruiken inclusief bijlagen en het verwijderen van eigen onderwerpen, maar kan niet eigen onderwerpen sluiten, en kan niet peilingen aanmaken.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'Een rol voor leden van de speciale pas geregistreerde gebruikersgroep; bevat <samp>NOOIT</samp> permissies om functies uit te sluiten voor nieuwe gebruikers.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Kan alle moderatiefunctionaliteiten gebruiken, inclusief verbannen van gebruikers.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Kan de moderatiewachtrij gebruiken om berichten te wijzigen en te controleren, maar verder niks.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Kan alleen de basis onderwerpacties gebruiken. Kan geen waarschuwingen versturen of de moderatiewachtrij gebruiken.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Kan de meeste moderatiehulpmiddelen gebruiken, maar kan niet gebruikers verbannen of de berichtauteur wijzigen.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Kan alle beschikbare forumfunctionaliteiten gebruiken voor gebruikers, inclusief het wijzigen van de gebruikersnaam of het negeren van de vloedbeperking.<br /> Niet aan te raden.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Heeft toegang tot sommige gebruikersfunctionaliteiten. Bijlagen, e-mailberichten, of instant messages zijn niet toegestaan.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Heeft een beperkt aantal functies, en kan niet de avatar-functie gebruiken.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Heeft een beperkt aantal functies, en kan geen privéberichten gebruiken.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Heeft bijna toegang tot alle gebruikersfunctionaliteiten. Kan geen gebruikersnaam wijzigen of de vloedbeperking negeren, als voorbeeld.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'Een rol voor leden van de speciale pas geregistreerde gebruikersgroep; bevat <samp>NOOIT</samp> permissies om functies uit te sluiten voor nieuwe gebruikers.',

	'ROLE_DESCRIPTION_EXPLAIN'		=> 'U kunt een korte beschrijving opgeven van wat de rol doet of waarvoor het bedoelt is. De tekst die u hier opgeeft zal ook worden weergegeven in het permissiescherm.',
	'ROLE_DESCRIPTION_LONG'			=> 'De rolbeschrijving is te lang, beperk het tot 4000 tekens.',
	'ROLE_DETAILS'					=> 'Roldetails',
	'ROLE_EDIT_SUCCESS'				=> 'Rol is succesvol gewijzigd.',
	'ROLE_NAME'						=> 'Rolnaam',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Een rol genaamd <strong>%s</strong> bestaat al voor het specifieke permissietype.',
	'ROLE_NOT_ASSIGNED'				=> 'Rol is nog niet toegewezen.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Het geselecteerde forum/forums bestaan niet.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'De geselecteerde groep/groepen bestaan niet.',
	'SELECTED_USER_NOT_EXIST'		=> 'De geselecteerde gebruiker/gebruikers bestaan niet.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Het forum dat u hier selecteert zal inclusief alle subforums zijn binnen de selectie.',
	'SELECT_ROLE'					=> 'Rol selecteren…',
	'SELECT_TYPE'					=> 'Type selecteren',
	'SET_PERMISSIONS'				=> 'Permissies instellen',
	'SET_ROLE_PERMISSIONS'			=> 'Rolpermissies instellen',
	'SET_USERS_PERMISSIONS'			=> 'Gebruikerspermissies instellen',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Gebruikerspermissies voor forums instellen',

	'TRACE_DEFAULT'							=> 'Standaard staat elke permissie op <samp>NEE</samp> (niet ingesteld). Zodat de permissies overschreven kunnen worden door andere instellingen.',
	'TRACE_FOR'								=> 'Tracering voor',
	'TRACE_GLOBAL_SETTING'					=> '%s (globaal)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'			=> 'Deze groepspermissies zijn ingesteld op <samp>NOOIT</samp> net zoals het totale resultaat, zodat het oude resultaat behouden blijft.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Deze groepspermissies voor dit forum is ingesteld op <samp>NOOIT</samp> net zoals het totale resultaat, zodat het oude resultaat behouden blijft.',
	'TRACE_GROUP_NEVER_TOTAL_NO'			=> 'Deze groepspermissie is ingesteld op <samp>NOOIT</samp>, wat een nieuwe totale waarde wordt, omdat het nog niet was ingesteld (ingesteld op <samp>NEE</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'		=> 'Deze groepspermissie voor dit forum is ingesteld op <samp>NOOIT</samp>, wat een totale nieuwe waarde wordt, omdat het nog niet was ingesteld (ingesteld op <samp>NEE</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'			=> 'Deze groepspermissie is ingesteld op <samp>NOOIT</samp> wat de totale <samp>JA</samp> zal overschrijven naar een <samp>NOOIT</samp> voor deze gebruiker.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'		=> 'Deze groepspermissie voor dit forum is ingesteld op <samp>NOOIT</samp>, wat het totale <samp>JA</samp> zal overschrijven naar een <samp>NOOIT</samp> voor deze gebruiker.',
	'TRACE_GROUP_NO'						=> 'De permissie is <samp>NEE</samp> voor deze groep, zodat de oude totale waarde behouden blijft.',
	'TRACE_GROUP_NO_LOCAL'					=> 'De permissie is <samp>NEE</samp> voor deze groep binnen dit forum zodat de oude totale waarde behouden blijft.',
	'TRACE_GROUP_YES_TOTAL_NEVER'			=> 'Deze groepspermissie is ingesteld op <samp>JA</samp> maar de totale <samp>NOOIT</samp> kan niet worden overschreven.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'		=> 'Deze groepspermissies voor dit forum is ingesteld op <samp>JA</samp> maar de totale <samp>NOOIT</samp> waarde kan niet worden overschreven.',
	'TRACE_GROUP_YES_TOTAL_NO'				=> 'Deze groepspermissie is ingesteld op <samp>JA</samp>, wat een nieuwe totale waarde wordt, omdat het nog niet was ingesteld (ingesteld op <samp>NEE</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'		=> 'Deze groepspermissie voor dit forum is ingesteld op <samp>JA</samp>, wat een nieuwe totale waarde wordt, omdat het nog niet was ingesteld (ingesteld op <samp>NEE</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'				=> 'Deze groepspermissie is ingesteld op <samp>JA</samp> en de totale permissie is al ingesteld op <samp>JA</samp>, dus het totale resultaat blijft behouden.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'		=> 'Deze groepspermissie voor dit forum is ingesteld op <samp>JA</samp>, en het totale resultaat is al ingesteld op <samp>JA</samp>, dus het totale resultaat blijft behouden.',
	'TRACE_PERMISSION'						=> 'Permissie traceren - %s',
	'TRACE_RESULT'							=> 'Tracerings resultaat',
	'TRACE_SETTING'							=> 'Traceringsinstelling',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'De forum onafhankelijke gebruikerspermissies evalueren naar <samp>JA/samp>, maar de totale permissie is al ingesteld op <samp>JA</samp>, dus het totale resultaat blijft behouden. %sGlobale permissie traceren%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'De forum onafhankelijke gebruikerspermissies evalueren naar <samp>JA</samp>, wat het huidige lokale <samp>NOOIT</samp> resultaat zal overschrijven. %sGlobale permissie traceren%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'De forum onafhankelijke gebruikerspermissies evalueren naar <samp>NOOIT</samp>, wat geen invloed heeft op de lokale permissie. %sGlobale permissie traceren%s',

	'TRACE_USER_FOUNDER'					=> 'De gebruiker is een oprichter, en daarom zijn beheerderspermissies altijd ingesteld op <samp>JA</samp>.',
	'TRACE_USER_KEPT'						=> 'De gebruikerspermissie is <samp>NEE</samp> dus de oude totale waarde is behouden.',
	'TRACE_USER_KEPT_LOCAL'					=> 'De gebruikerspermissie voor dit forum is <samp>NEE</samp>, dus de oude totale waarde blijft behouden.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'De gebruikerspermissie is ingesteld op <samp>NOOIT</samp>, en de totale waarde is ingesteld op <samp>NOOIT</samp>, dus niks is gewijzigd.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'De gebruikerspermissie voor dit forum is ingesteld op <samp>NOOIT</samp>, en de totale waarde is ingesteld op <samp>NOOIT</samp>, dus niks is gewijzigd.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'De gebruikerspermissie is ingesteld op <samp>NOOIT</samp>, wat de totale waarde wordt omdat het was ingesteld op NEE.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'De gebruikerspermissie voor dit forum is ingesteld op <samp>NOOIT</samp>, wat de totale waarde wordt omdat het was ingesteld op NEE.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'De gebruikerspermissie is ingesteld op <samp>NOOIT</samp>, en overschrijft de vorige <samp>JA</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'De gebruikerspermissie voor dit forum is ingesteld op <samp>NOOIT</samp>, en overschrijft de vorige <samp>JA</samp>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'De gebruikerspermissie is <samp>NEE</samp>, en de totale waarde was ingesteld op NEE, dus het is standaard ingesteld op <samp>NOOIT</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'De gebruikerspermissie voor dit forum is <samp>NEE</samp>, en de totale waarde was ingesteld op NEE, dus de standaard waarde is ingesteld op <samp>NOOIT</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'De gebruikerspermissie is ingesteld op <samp>JA</samp>, maar de totale <samp>NOOIT</samp> kan niet worden overschreven.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'De gebruikerspermissie voor dit forum is ingesteld op <samp>JA</samp>, maar de totale <samp>NOOIT</samp> kan niet worden overschreven.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'De gebruikerspermissie is ingesteld op <samp>JA</samp>, wat de totale waarde wordt omdat het was ingesteld op <samp>NEE</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'De gebruikerspermissie voor dit forum is ingesteld op <samp>JA</samp>, wat een totale waarde wordt, omdat het was ingesteld op <samp>NEE</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'De gebruikerspermissie is ingesteld op <samp>JA</samp>, en de totale waarde is ingesteld op <samp>JA</samp>, dus er is niks gewijzigd.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'De gebruikerspermissie voor dit forum is ingesteld op <samp>JA</samp>, en de totale waarde is ingesteld op <samp>JA</samp>, dus er is niks gewijzigd.',
	'TRACE_WHO'								=> 'Wie',
	'TRACE_TOTAL'							=> 'Totaal',

	'USERS_NOT_ASSIGNED'			=> 'Geen gebruiker toegewezen aan deze rol',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'Is een lid van de volgende voor-geïnstalleerde groepen',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'Is een lid van de volgende groepen die geïnstalleerd zijn door een gebruiker',

	'VIEW_ASSIGNED_ITEMS'	=> 'Toegewezen items bekijken',
	'VIEW_LOCAL_PERMS'		=> 'Lokale permissies',
	'VIEW_GLOBAL_PERMS'		=> 'Globale permissies',
	'VIEW_PERMISSIONS'		=> 'Permissies bekijken',

	'WRONG_PERMISSION_TYPE'				=> 'Verkeerd permissietype geselecteerd.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'De permissieinstellingen zijn in een verkeerd formaat, phpBB is niet in staat om ze correct te verwerken.',
));

?>