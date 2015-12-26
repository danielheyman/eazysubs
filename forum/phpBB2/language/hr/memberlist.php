<?php
/** 
*
* memberlist [Croatian]
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
'ABOUT_USER'=> 'Profil',
'ACTIVE_IN_FORUM'=> 'Najaktivniji/a na forumu',
'ACTIVE_IN_TOPIC'=> 'Najaktivniji/a u temi',
'ADD_FOE'=> 'Gnjavator/ica',
'ADD_FRIEND'=> 'Prijatelj/ica',
'AFTER'=> 'Poslije',
'AIM'=> 'AIM',
'ALL'=> 'Sva',

'BEFORE'=> 'Prije',

'CC_EMAIL'=> 'Pošalji i meni kopiju e-maila',
'CONTACT_USER'=> 'Kontakt',

'DEST_LANG'=> 'Jezik',
'DEST_LANG_EXPLAIN'=> 'Izaberi odgovarajući jezik [ukoliko je dostupan] za primatelja/icu poruke.',

'EMAIL_BODY_EXPLAIN'=> 'Poruka će biti poslana kao običan tekst, stoga nemoj koristiti HTML/BBKod.<br />Kao povratna adresa za poruku bit će navedena tvoja e-mail adresa.',
'EMAIL_DISABLED'=> 'Funkcije vezane uz e-mail su onemogućene.',
'EMAIL_SENT'=> 'E-mail/poruka je poslana',
'EMAIL_TOPIC_EXPLAIN'=> 'Poruka će biti poslana kao običan tekst, stoga nemoj koristiti HTML/BBKod.<br />Informacije o temi su uključene u poruku.<br />Kao povratna adresa za poruku bit će navedena tvoja e-mail adresa.',
'EMPTY_ADDRESS_EMAIL'=> 'Unesi ispravnu e-mail adresu primatelja/ice.',
'EMPTY_MESSAGE_EMAIL'=> 'Unesi tekst [sadržaj] poruke.',
'EMPTY_MESSAGE_IM'=> 'Unesi tekst [sadržaj] poruke.',
'EMPTY_NAME_EMAIL'=> 'Unesi ime primatelja/ice.',
'EMPTY_SUBJECT_EMAIL'=> 'Unesi naslov [predmet] poruke.',
'EQUAL_TO'=> '=',

'FIND_USERNAME_EXPLAIN'=> 'Formu možeš koristiti za traženje određenih korisnika/ca.<br />Ne moraš popuniti sva polja.<br />Možeš koristiti * ukoliko tražiš različite oblike neke riječi [npr. slasti* će rezultirati kao, npr., slastičar, slastičarna, slastice...].<br />Kod unošenja datuma koristi format <kbd>YYYY-MM-DD</kbd>, [npr. <samp>2007-01-01.</samp>].<br />Ukoliko forma omogućuje, koristi kućice za označavanje za odabir jednog/više korisničkih imena [klik na gumb “Odaberi označeno”].',
'FLOOD_EMAIL_LIMIT'=> 'Trenutno ne možeš slati e-mailove.<br />Pokušaj ponovo kasnije.',

'GROUP_LEADER'=> 'Vođa',

'HIDE_MEMBER_SEARCH'=> 'Sakrij pretraživanje članova/ica',

'ICQ'=> 'ICQ',
'IM_ADD_CONTACT'=> 'Dodaj kontakt',
'IM_AIM'=> 'Za korištenje ovoga moraš imati instaliran AOL Instant Messenger.',
'IM_AIM_EXPRESS'=> 'AIM Express',
'IM_DOWNLOAD_APP'=> 'Preuzmi aplikaciju',
'IM_ICQ'=> 'Moguće je da je korisnik/ca upalio/la opciju o ne primanju nezatraženih/neželjenih poruka.',
'IM_JABBER'=> 'Moguće je da je korisnik/ca upalio/la opciju o ne primanju nezatraženih/neželjenih poruka.',
'IM_JABBER_SUBJECT'=> 'Ovo je automatska poruka na koju, molim(o), ne odgovaraj.<br />Poruka od korisnika/ce: %1$s - %2$s.',
'IM_MESSAGE'=> 'Tvoja poruka',
'IM_MSNM'=> 'Za korištenje ovoga moraš imati instaliran Windows Messenger.',
'IM_MSNM_BROWSER'=> 'Tvoj preglednik ovo/to ne podržava.',
'IM_MSNM_CONNECT'=> 'Nisi spojen/a na MSNM.\nZa nastavak se moraš spojiti na MSNM.',
'IM_NAME'=> 'Tvoje ime',
'IM_NO_DATA'=> 'Kontakt informacija, za ovog/u korisnika/cu, nema.',
'IM_NO_JABBER'=> 'Direktno slanje poruka korisnicima/ama Jabbera nije podržano.<br />Treba ti [instaliran] Jabber klijent kako bi mogao/la kontaktirati primatelja/icu.',
'IM_RECIPIENT'=> 'Primatelj/ica',
'IM_SEND'=> 'Pošalji poruku',
'IM_SEND_MESSAGE'=> 'Pošalji poruku',
'IM_SENT_JABBER'=> 'Poruka, osobi %1$s, je poslana.',
'IM_USER'=> 'Pošalji poruku',

'JABBER'=> 'Jabber',

'LAST_ACTIVE'=> 'Zadnji put aktivan/na',
'LESS_THAN'=> '<',
'LIST_USER'=> '1 korisnik/ca',
'LIST_USERS'=> '%d korisnika/ca',
'LOGIN_EXPLAIN_LEADERS'=> 'Za pregledavanje popisa članova/ica Tima, moraš se prijaviti.',
'LOGIN_EXPLAIN_MEMBERLIST'=> 'Za pregledavanje popisa Članstva, moraš se prijaviti.',
'LOGIN_EXPLAIN_SEARCHUSER'=> 'Za pretraživanje Članstva, moraš se prijaviti.',
'LOGIN_EXPLAIN_VIEWPROFILE'=> 'Za pregledavanje profila korisnika/ca, moraš se prijaviti.',

'MORE_THAN'=> '>',
'MSNM'=> 'MSNM',

'NO_EMAIL'=> 'Nemaš dopuštenje za slanje e-maila korisniku/ci.',
'NO_VIEW_USERS'=> 'Nemaš dopuštenje za pristup popisu/profilima Članstva.',

'ORDER'=> 'Redanje',
'OTHER'=> 'Ostalo',

'POST_IP'=> 'Postano s IP/domene',

'RANK'=> 'Status',
'REAL_NAME'=> 'Ime primatelja/ice',
'RECIPIENT'=> 'Primatelj/ica',
'REMOVE_FOE'=> 'Izbriši gnjavatora/icu',
'REMOVE_FRIEND'=> 'Izbriši prijatelja/icu',

'SEARCH_USER_POSTS'=> 'Pronađi postove korisnika/ce',
'SELECT_MARKED'=> 'Odaberi označeno',
'SELECT_SORT_METHOD'=> 'Redanje',
'SEND_AIM_MESSAGE'=> 'AIM',
'SEND_ICQ_MESSAGE'=> 'ICQ',
'SEND_IM'=> 'IM',
'SEND_JABBER_MESSAGE'=> 'Jabber',
'SEND_MESSAGE'=> 'PP',
'SEND_MSNM_MESSAGE'=> 'MSNM/WLM',
'SEND_YIM_MESSAGE'=> 'YIM',
'SORT_EMAIL'=> 'E-mail',
'SEND_IM'=> 'IM',
'SEND_MESSAGE'=> 'PP',
'SORT_EMAIL'=> 'E-mail',
'SORT_LAST_ACTIVE'=> 'Zadnji put aktivan/na',
'SORT_POST_COUNT'=> 'Broj postova',

'USERNAME_BEGINS_WITH'=> 'Korisničko ime počinje s(a)',
'USER_ADMIN'=> 'Administriranje',
'USER_BAN'=> 'Isključivanje',
'USER_FORUM'=> 'Statistika',
'USER_LAST_REMINDED'=> array(
0=> 'Podsjetnik nije poslan',
1=> '%1$d podsjetnik je poslan<br />Â» %2$s',
),
	
'USER_ONLINE'=> 'Online',
'USER_PRESENCE'=> 'Info',

'VIEWING_PROFILE'=> 'Profil korisnika/ce - %s',
'VISITED'=> 'Zadnji put prijavljen/a',

'WWW'=> 'Web stranica',

'YIM'=> 'YIM',
));
?>