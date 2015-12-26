<?php
/**
*
* acp_groups [Dutch]
*
* @package language
* @version $Id: groups.php 204 2009-10-11 17:04:22Z rotsblok $
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Hier kunt u al uw gebruikersgroepen beheren. U kunt bestaande groepen verwijderen en wijzigen en u kunt nieuwe groepen aanmaken. Verder kunt u ook de groepsleiders kiezen, de groepsstatus instellen (open/verborgen/gesloten groep) en u kunt de groepsnaam en beschrijving instellen.',
	'ADD_USERS'						=> 'Gebruikers toevoegen',
	'ADD_USERS_EXPLAIN'				=> 'Hier kunt u nieuwe gebruikers toevoegen aan de groep. U mag instellen of deze groep de standaardgroep wordt van de geselecteerde gebruikers. Ook kunt u bepalen of ze groepsleider worden. Voer elke gebruikersnaam in op een aparte regel.',

	'COPY_PERMISSIONS'				=> 'Permissies kopiëren van',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Nadat u de groep heeft aangemaakt, zal het dezelfde permissies hebben als degene die u hier heeft geselecteerd.',
	'CREATE_GROUP'					=> 'Nieuwe groep aanmaken',

	'GROUPS_NO_MEMBERS'				=> 'Deze groep heeft geen leden',
	'GROUPS_NO_MODS'				=> 'Er zijn geen groepsleiders opgegeven',

	'GROUP_APPROVE'					=> 'Lid goedkeuren',
	'GROUP_APPROVED'				=> 'Leden goedkeuren',
	'GROUP_AVATAR'					=> 'Groeps-avatar',
	'GROUP_AVATAR_EXPLAIN'			=> 'Deze afbeelding zal worden weergegeven in het groepspaneel.',
	'GROUP_CLOSED'					=> 'Gesloten',
	'GROUP_COLOR'					=> 'Groepskleur',
	'GROUP_COLOR_EXPLAIN'			=> 'Dit bepaald de kleur van de gebruikersnamen van de leden van deze groep waarin ze zulllen verschijnen, laat het leeg voor de standaardkleur van de gebruiker.',
	'GROUP_CONFIRM_ADD_USER'		=> 'Weet u zeker dat u de gebruiker %1$s wilt toevoegen aan de groep?',
	'GROUP_CONFIRM_ADD_USERS'		=> 'Weet u zeker dat u de gebruikers %1$s wilt toevoegen aan de groep?',
	'GROUP_CREATED'					=> 'Groep is succesvol aangemaakt.',
	'GROUP_DEFAULT'					=> 'Groep standaard maken voor lid',
	'GROUP_DEFS_UPDATED'			=> 'Standaardgroep ingesteld voor alle geselecteerde leden.',
	'GROUP_DELETE'					=> 'Lid verwijderen van groep',
	'GROUP_DELETED'					=> 'Groep verwijderd en de standaardgroep van de gebruiker succesvol ingesteld.',
	'GROUP_DEMOTE'					=> 'Groepsleider degraderen',
	'GROUP_DESC'					=> 'Groepbeschrijving',
	'GROUP_DETAILS'					=> 'Groepsdetails',
	'GROUP_EDIT_EXPLAIN'			=> 'Hier kunt u een bestaande groep wijzigen. U kunt ook de naam, beschrijving, en het type (open, gesloten, etc.) wijzigen. U kunt ook bepaalde groepswijde-opties instellen zoals de kleur, rang, etc. De wijzigingen die u hier maakt zal de huidige instellingen van de gebruikers overschrijven. Vergeet niet dat de groepsleden kunnen worden overschreven met de instellingen van de groeps-avatar, tenzij u de juiste gebruikerspermissies instelt.',
	'GROUP_ERR_USERS_EXIST'			=> 'De opgegeven gebruikers zijn al lid van deze groep.',
	'GROUP_FOUNDER_MANAGE'			=> 'Alleen de oprichter kan de groep beheren',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Het beheren van deze groep beperken naar oprichters alleen. Gebruikers zullen de groepspermissies blijven houden en kunnen nog steeds deze groep zien en ook de groepsleden ervan.',
	'GROUP_HIDDEN'					=> 'Verborgen',
	'GROUP_LANG'					=> 'Groepstaal',
	'GROUP_LEAD'					=> 'Groepsleiders',
	'GROUP_LEADERS_ADDED'			=> 'Nieuwe leiders zijn succesvol toegevoegd aan de groep.',
	'GROUP_LEGEND'					=> 'Groep weergeven in de legenda',
	'GROUP_LIST'					=> 'Huidige leden',
	'GROUP_LIST_EXPLAIN'			=> 'Dit is een complete lijst van alle huidige gebruikers die een lidmaatschap hebben van deze groep. U kunt leden verwijderen (behalve in bepaalde speciale groepen) of u kunt nieuwe leden toevoegen.',
	'GROUP_MEMBERS'					=> 'Groepsleden',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Dit is een complete lijst van alle leden van deze gebruikersgroep. Het bevat apparte secties voor leiders, leden die wachten op goedkeuring en bestaande leden. Vanaf hier kunt u de hele groep beheren van wie een lidmaatschap heeft van deze groep en wat hun rol is. Om een leider te verwijderen, maar om hem te behouden in de groep gebruikt u degraderen i.p.v verwijderen. Hetzelfde doet u met promoveren, om van een bestaand lid een leider te maken.',
	'GROUP_MESSAGE_LIMIT'			=> 'Limiet van privéberichten per map voor deze groep',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Deze instelling overschrijft het limiet voor de per gebruiker berichtenmap. Een waarde van 0 betekend dat het standaard limiet zal worden gebruikt.',
	'GROUP_MODS_ADDED'				=> 'Nieuwe groepsleiders succesvol toegevoegd.',
	'GROUP_MODS_DEMOTED'			=> 'Groepsleider succesvol gedegradeerd.',
	'GROUP_MODS_PROMOTED'			=> 'Groepslid succesvol gepromoveerd.',
	'GROUP_NAME'					=> 'Groepsnaam',
	'GROUP_NAME_TAKEN'				=> 'De groepsnaam die u heeft ingevoerd is al in gebruik, selecteer een alternatieve.',
	'GROUP_OPEN'					=> 'Open',
	'GROUP_PENDING'					=> 'Gebruikers die wachten op goedkeuring',
	'GROUP_MAX_RECIPIENTS'			=> 'Maximaal aantal toegestaande ontvangers per privébericht',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'Het maximaal aantal toegestaande ontvangers in een privébericht. Als er 0 is ingevoerd, dan zullen de foruminstellingen worden gebruikt.',
	'GROUP_OPTIONS_SAVE'			=> 'Groepswijde-opties', //?
	'GROUP_PROMOTE'					=> 'Naar groepsleider promoveren',
	'GROUP_RANK'					=> 'Groepsrang',
	'GROUP_RECEIVE_PM'				=> 'Groep kan privéberichten ontvangen',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Vergeet niet dat verborgen groepen niet in staat zijn om berichten te ontvangen, hoe u deze instellingen ook ingesteld heeft.',
	'GROUP_REQUEST'					=> 'Aanvragen',
	'GROUP_SETTINGS_SAVE'			=> 'Groepswijde-instellingen',
	'GROUP_SKIP_AUTH'				=> 'Groepsleider uitsluiten van permissies',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'Wanneer het is ingeschakeld zal de groepsleider de permissies niet langer overnemen van de groep.',
	'GROUP_TYPE'					=> 'Groepstype',
	'GROUP_TYPE_EXPLAIN'			=> 'Dit bepaalt welke gebruikers lid kunnen worden of deze groep kunnen bekijken.',
	'GROUP_UPDATED'					=> 'Groepsvoorkeuren zijn succesvol bijgewerkt.',

	'GROUP_USERS_ADDED'				=> 'Nieuwe gebruikers zijn succesvol toegevoegd aan de groep.',
	'GROUP_USERS_EXIST'				=> 'De geselecteerde gebruikers zijn al lid van de groep.',
	'GROUP_USERS_REMOVE'			=> 'Gebruikers zijn verwijderd van de groep en nieuwe standaarden zijn succesvol ingesteld.',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Standaardgroep maken voor elk lid',
	'MEMBERS'				=> 'Leden',

	'NO_GROUP'					=> 'Er is geen groep opgegeven.',
	'NO_GROUPS_CREATED'			=> 'Er zijn nog geen groepen aangemaakt.',
	'NO_PERMISSIONS'			=> 'Permissies niet kopiëren',
	'NO_USERS'					=> 'U heeft geen gebruikers ingevoerd.',
	'NO_USERS_ADDED'			=> 'Er zijn geen gebruikers toegevoegd aan de groep.',
	'NO_VALID_USERS'			=> 'U heeft geen geschikte gebruikers ingevoerd voor deze actie.',

	'SPECIAL_GROUPS'			=> 'Voor-opgegeven groepen',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Voor-opgegeven groepen zijn speciale groepen, ze kunnen niet worden verwijderd of direct worden aangepast. Maar u kunt wel gebruikers er aan toevoegen en de basisinstellingen wijzigen.',

	'TOTAL_MEMBERS'				=> 'Leden',

	'USERS_APPROVED'				=> 'Gebruikers succesvol goedgekeurd.',
	'USER_DEFAULT'					=> 'Standaardrang',
	'USER_DEF_GROUPS'				=> 'Gebruiker-opgegeven groepen',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Dit zijn groepen die aangemaakt zijn door u of een andere beheerder van dit forum. U kunt de lidmaatschapen beheren en u kunt de groepseigenschappen wijzigen of zelfs de groep verwijderen.',
	'USER_GROUP_DEFAULT'			=> 'Als standaardgroep instellen',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Wanneer u hier ja zegt, zal voor de toegevoegde gebruikers deze groep hun standaardgroep worden.',
	'USER_GROUP_LEADER'				=> 'Als groepsleider instellen',
));

?>