<?php
/**
*
* groups [Dutch]
*
* @package language
* @version $Id: groups.php 202 2009-10-09 07:52:03Z rotsblok $
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
	'ALREADY_DEFAULT_GROUP'		=> 'De geselecteerde groep is al uw standaardgroep.',
	'ALREADY_IN_GROUP'			=> 'U bent al lid van de geselecteerde groep.',
	'ALREADY_IN_GROUP_PENDING'	=> 'U heeft al aangegeven lid te willen worden van de geselecteerde groep.',

	'CANNOT_JOIN_GROUP'			=> 'U kunt niet lid worden van deze groep. U kunt alleen lid woden van open en vrije open groepen.',
	'CANNOT_RESIGN_GROUP'		=> 'U kunt uw groepslidmaatschap niet opzeggen van deze groep. U kunt alleen uw groepslidmaatschap opzeggen van open en vrije groepen.',
	'CHANGED_DEFAULT_GROUP'		=> 'Standaardgroep is succesvol gewijzigd.',

	'GROUP_AVATAR'						=> 'Groeps-avatar',
	'GROUP_CHANGE_DEFAULT'				=> 'Weet u zeker dat u uw standaard lidmaatschap wilt wijzigen naar de groep “%s”?',
	'GROUP_CLOSED'						=> 'Gesloten',
	'GROUP_DESC'						=> 'Groepsbeschrijving',
	'GROUP_HIDDEN'						=> 'Verborgen',
	'GROUP_INFORMATION'					=> 'Informatie over gebruikersgroep',
	'GROUP_IS_CLOSED'					=> 'Dit is een gesloten groep, nieuwe gebruikers kunnen alleen lid worden van deze groep op uitnodiging van de groepsleider.',
	'GROUP_IS_FREE'						=> 'Dit is een vrije open groep, alle nieuwe leden zijn welkom.',
	'GROUP_IS_HIDDEN'					=> 'Dit is een verborgen groep, alleen leden van deze groep kunnen hun lidmaatschap van deze groep zien.',
	'GROUP_IS_OPEN'						=> 'Dit is een open groep, gebruikers kunnen lid worden.',
	'GROUP_IS_SPECIAL'					=> 'Dit is een speciale groep, speciale groepen worden beheerd door de beheerders van dit forum.',
	'GROUP_JOIN'						=> 'Lid worden',
	'GROUP_JOIN_CONFIRM'				=> 'Weet u zeker dat u lid wilt worden van de geselecteerde groep?',
	'GROUP_JOIN_PENDING'				=> 'Lidmaatschap aanvragen',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Weet u zeker dat uw lidmaatschap voor de geselecteerde groep wilt aanvragen?',
	'GROUP_JOINED'						=> 'U bent succesvol lid geworden van de geselecteerde groep.',
	'GROUP_JOINED_PENDING'				=> 'U heeft succesvol de lidmaatschap voor de geselecteerde groep aangevraagd. Het wachten is nu op de groepsleider of die uw lidmaatschap goedkeurd.',
	'GROUP_LIST'						=> 'Gebruikers beheren',
	'GROUP_MEMBERS'						=> 'Groepsleden',
	'GROUP_NAME'						=> 'Groepsnaam',
	'GROUP_OPEN'						=> 'Open',
	'GROUP_RANK'						=> 'Groepsrang',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Groepslidmaatschap opzeggen',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Weet u zeker dat u uw lidmaatschap van de geselecteerde groep wilt opzeggen?',
	'GROUP_RESIGN_PENDING'				=> 'Een wachtend groepslidmaatschap opzeggen',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Weet u zeker dat u uw wachtend lidmaatschap van de geselecteerde groep wilt opzeggen?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'U bent succesvol van de geselecteerde groep verwijderd.',
	'GROUP_RESIGNED_PENDING'			=> 'Uw wachtend lidmaatschap van de geselecteerde groep is succesvol verwijderd.',
	'GROUP_TYPE'						=> 'Groepstype',
	'GROUP_UNDISCLOSED'					=> 'Verborgen groep',
	'FORUM_UNDISCLOSED'					=> 'Verborgen forum(s) modereren',

	'LOGIN_EXPLAIN_GROUP'	=> 'U moet aangemeld zijn om de groepsdetails te kunnen bekijken.',

	'NO_LEADERS'					=> 'U bent geen leider van een groep.',
	'NOT_LEADER_OF_GROUP'			=> 'De opgevraagde actie kan niet worden gedaan, omdat u geen leider bent van de geselecteerde groep.',
	'NOT_MEMBER_OF_GROUP'			=> 'De opgevraagde actie kan niet worden gedaan, omdat u geen lid bent van de groep en/of dat u lidmaatschap nog niet is goedgekeurd.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'U kunt het lidmaatschap van uw standaardgroep niet opzeggen.',

	'PRIMARY_GROUP'		=> 'Hoofdgroep',

	'REMOVE_SELECTED'		=> 'Geselecteerde verwijderen',

	'USER_GROUP_CHANGE'			=> 'Van “%1$s” groep naar “%2$s” groep',
	'USER_GROUP_DEMOTE'			=> 'Groepsleiderschap opzeggen',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Weet u zeker dat u het groepsleiderschap van de geselecteerde groep wilt opzeggen?',
	'USER_GROUP_DEMOTED'		=> 'U heeft succesvol uw groepsleiderschap opgezegd.',
));

?>