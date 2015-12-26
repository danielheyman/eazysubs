<?php
/** 
*
* groups [Croatian]
*
* @package language
* @version $Id: $
* @copyright phpBB (c) 2000-2008 phpBB Group 
* @author Ančica Sečan 2003-2008
* @author hecos 2010
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
'ALREADY_DEFAULT_GROUP'=> 'Grupa već je zadana grupa.',
'ALREADY_IN_GROUP'=> 'Već jesi član/ica izabrane grupe.',
'ALREADY_IN_GROUP_PENDING'=> 'Već jesi zatražio/la pristupanje grupi.',

'CANNOT_JOIN_GROUP'=> 'Ne možeš pristupiti grupi.<br />Možeš pristupiti samo otvorenim grupama.',
'CANNOT_RESIGN_GROUP'=> 'Ne možeš istupiti iz grupe.<br />Možeš istupiti samo iz otvorenih grupa.',
'CHANGED_DEFAULT_GROUP'=> 'Zadana grupa je promijenjena.',

'GROUP_AVATAR'=> 'Avatar', 
'GROUP_CHANGE_DEFAULT'=> 'Jesi li siguran/na da svoje zadano članstvo želiš premjestiti u grupu “%s”?',
'GROUP_CLOSED'=> 'Zatvorena',
'GROUP_DESC'=> 'Opis',
'GROUP_HIDDEN'=> 'Skrivena',
'GROUP_INFORMATION'=> 'Info', 
'GROUP_IS_CLOSED'=> 'Grupa je zatvorenog tipa, automatsko pristupanje nije moguće.',
'GROUP_IS_FREE'=> 'Grupa je otvorenog tipa, novi/e članovi/ce su dobrodošli/e.', 
'GROUP_IS_HIDDEN'=> 'Grupa je skrivenog tipa, samo članovi/ce grupe mogu vidjeti Članstvo.',
'GROUP_IS_OPEN'=> 'Grupa je otvorenog tipa, moguće je prijaviti se za pristup.',
'GROUP_IS_SPECIAL'=> 'Grupa je specijalnog tipa [grupe takvog tipa administriraju administratori/ce].', 
'GROUP_JOIN'=> 'Pristupi grupi',
'GROUP_JOIN_CONFIRM'=> 'Jesi li siguran/na da želiš pristupiti grupi?',
'GROUP_JOIN_PENDING'=> 'Zahtjev za pristupanje grupi',
'GROUP_JOIN_PENDING_CONFIRM'=> 'Jesi li siguran/na da želiš pristupiti grupi?',
'GROUP_JOINED'=> 'Od sada si član/ica grupe.',
'GROUP_JOINED_PENDING'=> 'Uspješno si se prijavio/la za pristupanje grupi.<br />Ostaje ti pričekati da moderatori/ca grupe odobri zahtjev.',
'GROUP_LIST'=> 'Administriranje korisnika/ca',
'GROUP_MEMBERS'=> 'Članstvo',
'GROUP_NAME'=> 'Naziv',
'GROUP_OPEN'=> 'Otvorena',
'GROUP_RANK'=> 'Status', 
'GROUP_RESIGN_MEMBERSHIP'=> 'Istupi',
'GROUP_RESIGN_MEMBERSHIP_CONFIRM'=> 'Jesi li siguran/na da želiš istupiti iz grupe?',
'GROUP_RESIGN_PENDING'=> 'Istupi',
'GROUP_RESIGN_PENDING_CONFIRM'=> 'Jesi li siguran/na da želiš istupiti iz grupe?',
'GROUP_RESIGNED_MEMBERSHIP'=> 'Više nisi član/ica grupe.',
'GROUP_RESIGNED_PENDING'=> 'Više nisi član/ica grupe.',
'GROUP_TYPE'=> 'Tip',
'GROUP_UNDISCLOSED'=> 'Skrivena',
'FORUM_UNDISCLOSED'=> 'Moderira(nje) skriven/e(og/ih) forum/e(a)',

'LOGIN_EXPLAIN_GROUP'=> 'Za pregledavanje detalja o grupi, moraš se prijaviti.',

'NO_LEADERS'=> 'Nisi vođa niti jedne grupe.',
'NOT_LEADER_OF_GROUP'=> 'Radnja ne može biti izvršena jer nisi vođa grupe.',
'NOT_MEMBER_OF_GROUP'=> 'Radnja ne može biti izvršena jer nisi član/ica grupe.',
'NOT_RESIGN_FROM_DEFAULT_GROUP'=> 'Istupanje iz zadane grupe nije dopušteno.',

'PRIMARY_GROUP'=> 'Glavna grupa',

'REMOVE_SELECTED'=> 'Izbriši označeno',

'USER_GROUP_CHANGE'=> 'Iz “%1$s” grupe u “%2$s”',
'USER_GROUP_DEMOTE'=> 'Degradiranje u običnog/u korisnika/cu',
'USER_GROUP_DEMOTE_CONFIRM'=> 'Jesi li siguran/na da se želiš “spustiti na nižu razinu” - iz statusa vođe grupe u status običnog/e korisnika/ce?',
'USER_GROUP_DEMOTED'=> 'Više nisi vođa grupe.',
));
?>