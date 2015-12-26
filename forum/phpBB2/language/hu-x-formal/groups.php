<?php
/**
*
* groups [Hungarian]
*
* @package language
* @version $Id: groups.php 197 2009-10-18 20:12:18Z fberci $
* @copyright (c) 2009 „Magyar phpBB Közösség fordítók”
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Original copyright: (c) 2005 phpBB Group
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
	'ALREADY_DEFAULT_GROUP'	=> 'A kiválasztott csoport már az elsődleges csoportja.',
	'ALREADY_IN_GROUP'		=> 'Már tagja a kiválasztott csoportnak.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Már kérelmezte a csatlakozást a csoporthoz.',

	'CANNOT_JOIN_GROUP'			=> 'Nem tud csatlakozni ehhez a csoporthoz. Csak nyitott és szabadon nyitott csoportokhoz csatlakozhat.',
	'CANNOT_RESIGN_GROUP'		=> 'Nem tudja lemondani a csoporttagságát ebben a csoportban. Csak nyitott és szabadon nyitott csoportokból léphet ki.',
	'CHANGED_DEFAULT_GROUP'		=> 'Az elsődleges csoport sikeresen megváltoztatásra került.',

	'GROUP_AVATAR'						=> 'Csoport avatar',
	'GROUP_CHANGE_DEFAULT'				=> 'Biztosan meg akarja változtatni az elsődleges csoportját a „%s” csoportra?',
	'GROUP_CLOSED'						=> 'Zárt',
	'GROUP_DESC'						=> 'Csoport leírás',
	'GROUP_HIDDEN'						=> 'Rejtett',
	'GROUP_INFORMATION'					=> 'Csoport információ',
	'GROUP_IS_CLOSED'					=> 'Ez egy zárt csoport: új tagok csak a csoportvezető meghívására tudnak csatlakozni.',
	'GROUP_IS_FREE'						=> 'Ez egy teljesen nyitott csoport: minden új tagot szívesen látnak.',
	'GROUP_IS_HIDDEN'					=> 'Ez egy rejtett csoport: csak a csoport tagjai látják.',
	'GROUP_IS_OPEN'						=> 'Ez egy nyitott csoport: felhasználók kérhetik a felvételüket.',
	'GROUP_IS_SPECIAL'					=> 'Ez egy speciális csoport: a speciális csoportokat az adminisztrátor kezeli.',
	'GROUP_JOIN'						=> 'Csatlakozás a csoporthoz',
	'GROUP_JOIN_CONFIRM'				=> 'Biztosan csatlakozni akar a kiválasztott csoporthoz?',
	'GROUP_JOIN_PENDING'				=> 'Tagság kérelmezése',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Biztosan kérni akarja a felvételed a kiválasztott csoportba?',
	'GROUP_JOINED'						=> 'Sikeresen csatlakozott a kiválasztott csoporthoz.',
	'GROUP_JOINED_PENDING'				=> 'Sikeresen kérelmezte a felvételét a csoportba. Kérjük, várjon, míg egy csoportvezető elfogadja a jelentkezését.',
	'GROUP_LIST'						=> 'Felhasználók kezelése',
	'GROUP_MEMBERS'						=> 'Csoporttagok',
	'GROUP_NAME'						=> 'Csoport neve',
	'GROUP_OPEN'						=> 'Nyitott',
	'GROUP_RANK'						=> 'Csoport rang',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Lemondás a csoporttagságról',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Biztosan le akarja mondani a csoporttagságát a kiválasztott csoportban?',
	'GROUP_RESIGN_PENDING'				=> 'Függő csoporttagság lemondása',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Biztosan le akarja mondani a függő csoporttagságát a kiválasztott csoportban?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Sikeresen eltávolításra került a kiválasztott csoportból.',
	'GROUP_RESIGNED_PENDING'			=> 'A függő csoporttagsága sikeresen törlésre került a kiválasztott csoportból.',
	'GROUP_TYPE'						=> 'Csoport típusa',
	'GROUP_UNDISCLOSED'					=> 'Rejtett csoport',
	'FORUM_UNDISCLOSED'					=> 'Rejtett fórum(ok) moderálása',

	'LOGIN_EXPLAIN_GROUP'	=> 'A csoport adatainak megtekintéséhez be kell jelentkeznie.',

	'NO_LEADERS'					=> 'Ön nem egy csoport vezetője sem.',
	'NOT_LEADER_OF_GROUP'			=> 'A kért művelet nem végezhető el, mivel ön nem a kiválasztott csoport vezetője.',
	'NOT_MEMBER_OF_GROUP'			=> 'A kért művelet nem végezhető el, mivel ön nem a kiválasztott csoport tagja, vagy a csoporttagsága még nem lett jóváhagyva.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Nem mondhat le a csoporttagságáról az elsődleges csoportjában.',

	'PRIMARY_GROUP'		=> 'Elsődleges csoport',

	'REMOVE_SELECTED'		=> 'Kiválasztottak törlése',

	'USER_GROUP_CHANGE'			=> '„%1$s” csoportról „%2$s” csoportra',
	'USER_GROUP_DEMOTE'			=> 'Lemondás a csoportvezetőségről',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Biztosan le akar mondani a csoportvezetőségéről a kiválasztott csoportban?',
	'USER_GROUP_DEMOTED'		=> 'Sikeresen lemondott a csoportvezetőségről.',
));

?>
