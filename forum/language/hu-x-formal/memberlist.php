<?php
/**
*
* memberlist [Hungarian Formal]
*
* @package language
* @version $Id: memberlist.php 220 2010-07-31 15:18:21Z marcee $
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
	'ABOUT_USER'			=> 'Profil',
	'ACTIVE_IN_FORUM'		=> 'Legaktívabb fórum',
	'ACTIVE_IN_TOPIC'		=> 'Legaktívabb téma',
	'ADD_FOE'				=> 'Hozzáadás a haragosokhoz',
	'ADD_FRIEND'			=> 'Hozzáadás a barátokhoz',
	'AFTER'					=> 'Később mint',

	'ALL'					=> 'Összes',

	'BEFORE'				=> 'Korábban mint',

	'CC_EMAIL'				=> 'Másolat küldése önmagának',
	'CONTACT_USER'			=> 'Kapcsolat:',

	'DEST_LANG'				=> 'Nyelv',
	'DEST_LANG_EXPLAIN'		=> 'Válasszon ki egy az üzenet címzettjének megfelelő nyelvet (ha elérhető).',

	'EMAIL_BODY_EXPLAIN'	=> 'Az üzenet sima szövegként kerül elküldésre, ne használjon HTML-t vagy BBCode-ot. Az üzenet válaszcíme az ön e-mail címe lesz.',
	'EMAIL_DISABLED'		=> 'Sajnáljuk, de az e-mail küldéssel kapcsolatos funkciók kikapcsolásra kerültek.',
	'EMAIL_SENT'			=> 'Az e-mail sikeresen elküldésre került.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Az üzenet sima szövegként kerül elküldésre, ne használjon HTML-t vagy BBCode-ot. Kérjük, vegye figyelembe, hogy az üzenet már tartalmazza a témával kapcsolatos információkat. Az üzenet válaszcíme az ön e-mail címe lesz.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Meg kell adnia a címzett valódi e-mail címét.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Nem küldhet üres üzenetet.',
 	'EMPTY_MESSAGE_IM'		=> 'Nem küldhet üres üzenetet.',
	'EMPTY_NAME_EMAIL'		=> 'Meg kell adnia a címzett valódi nevét.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Meg kell adnod az e-mail témáját.',
	'EQUAL_TO'				=> 'Annyi mint',

	'FIND_USERNAME_EXPLAIN'	=> 'Ennek az űrlapnak a segítségével konkrét felhasználókra kereshet rá. Nem kell az összes mezőt kitöltenie. Részleges szavakhoz használja a * jokerkaraktert. A dátumokat <kbd>ÉÉÉÉ-HH-NN</kbd> formában adja meg (például <samp>2004-02-29</samp>). Használja a jelölőnégyzeteket egy vagy több felhasználó kiválasztásához (az űrlaptól függ, hányat választhat ki), majd kattintson a kijelöltek kiválasztása gombra, hogy visszatérjen az előző űrlaphoz.',
	'FLOOD_EMAIL_LIMIT'		=> 'Most nem küldhet több e-mailt. Kérjük, próbálkozzon később.',

	'GROUP_LEADER'			=> 'Csoportvezető',

	'HIDE_MEMBER_SEARCH'	=> 'Felhasználó keresésének elrejtése',

	'IM_ADD_CONTACT'		=> 'Felvétel a kapcsolatok közé',
	'IM_AIM'				=> 'Kérjük, vegye figyelembe, hogy ennek használatához szükséged van az AOL Instant Messenger programra.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Alkalmazás letöltése',
	'IM_ICQ'				=> 'Kérjük, vegye figyelembe, hogy a felhasználók lehet, hogy beállították, hogy ne kapjanak kéretlen üzeneteket.',
	'IM_JABBER'				=> 'Kérjük, vegye figyelembe, hogy a felhasználók lehet, hogy beállították, hogy ne kapjanak kéretlen üzeneteket.',
	'IM_JABBER_SUBJECT'		=> 'Ez egy automatikus üzenet, kérjük, ne válaszoljon! Üzenet %1$s felhasználótól %2$s-kor.',
	'IM_MESSAGE'			=> 'Az üzenete',
	'IM_MSNM'				=> 'Kérjük, vegye figyelembe, hogy ennek használatához szüksége van a Windows Messenger programra.',
	'IM_MSNM_BROWSER'		=> 'Sajnos a böngészője nem támogatja ezt.',
	'IM_MSNM_CONNECT'		=> 'Az MSNM nem csatlakozott.\nA folytatáshoz kapcsolódnia kell az MSNM-hez.',
	'IM_NAME'				=> 'Neve',
 	'IM_NO_DATA'			=> 'Nincs megfelelő kapcsolat információ ehhez a felhasználóhoz.',
	'IM_NO_JABBER'			=> 'Sajnos ezen a fórumon nem támogatott a direkt üzenetküldés Jabberes felhasználóknak. A címzettel való kapcsolatba lépéshez szüksége lesz egy Jabber kliensre.',
	'IM_RECIPIENT'			=> 'Címzett',
	'IM_SEND'				=> 'Üzenet elküldése',
	'IM_SEND_MESSAGE'		=> 'Üzenet küldése',
	'IM_SENT_JABBER'		=> 'Az üzenete sikeresen elküldésre került %1$snek.',
	'IM_USER'				=> 'Azonnali üzenet küldése',

	'LAST_ACTIVE'				=> 'Utoljára aktív',
	'LESS_THAN'					=> 'Kevesebb mint',
	'LIST_USER'					=> '1 felhasználó',
	'LIST_USERS'				=> '%d felhasználó',
	'LOGIN_EXPLAIN_LEADERS'		=> 'A csapat megtekintéséhez be kell jelentkeznie.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'A taglista megtekintéséhez be kell jelentkeznie.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Felhasználók kereséséhez be kell jelentkeznie.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Egy felhasználó profiljának megtekintéséhez be kell jelentkeznie.',

	'MORE_THAN'				=> 'Több mint',

	'NO_EMAIL'				=> 'Nem küldhet e-mailt ennek a felhasználónak.',
	'NO_VIEW_USERS'			=> 'Nincs jogosultsága a taglista vagy a felhasználók profiljainak megtekintéséhez.',

	'ORDER'					=> 'Sorrend',
	'OTHER'					=> 'Más',

	'POST_IP'				=> 'IP/domain, melyről írt',

	'RANK'					=> 'Rang',
	'REAL_NAME'				=> 'Címzett neve',
	'RECIPIENT'				=> 'Címzett',
	'REMOVE_FOE'			=> 'Törlés az ellenségek közül',
	'REMOVE_FRIEND'			=> 'Törlés a barátok közül',

	'SEARCH_USER_POSTS'		=> 'Felhasználó hozzászólásainak megtekintése',
	'SELECT_MARKED'			=> 'Kijelöltek kiválasztása',
	'SELECT_SORT_METHOD'	=> 'Rendezés',
	'SEND_AIM_MESSAGE'		=> 'AIM üzenet küldése',
	'SEND_ICQ_MESSAGE'		=> 'ICQ üzenet küldése',
	'SEND_IM'				=> 'Azonnali üzenetküldés',
	'SEND_JABBER_MESSAGE'	=> 'Jabber üzenet küldése',
	'SEND_MESSAGE'			=> 'Üzenet küldése',
	'SEND_MSNM_MESSAGE'		=> 'MSNM/WLM üzenet küldése',
	'SEND_YIM_MESSAGE'		=> 'YIM üzenet küldése',
	'SORT_EMAIL'			=> 'E-mail',
	'SORT_LAST_ACTIVE'		=> 'Utolsó aktivitás időpontja',
	'SORT_POST_COUNT'		=> 'Hozzászólások száma',

	'USERNAME_BEGINS_WITH'	=> 'Felhasználónév kezdőbetűje',
	'USER_ADMIN'			=> 'Felhasználó kezelése',
	'USER_BAN'				=> 'Kitiltások',
	'USER_FORUM'			=> 'Statisztika',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Még nem lett emlékeztető küldve.',
		1		=> '%1$d emlékeztető lett küldve<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Online',
	'USER_PRESENCE'			=> 'Jelenlét a fórumban',

	'VIEWING_PROFILE'		=> 'Profil megtekintése: %s',
	'VISITED'				=> 'Utolsó látogatás',

	'WWW'					=> 'Honlap',
));

?>
