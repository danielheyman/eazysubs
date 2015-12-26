<?php
/** 
*
* acp_bots [Croatian]
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

// Bot settings
$lang = array_merge($lang, array(
'BOTS'=> 'Upravljanje robotima',
'BOTS_EXPLAIN'=> '“Roboti” [“pauci”, “puzači”...], automatizirani agenti, najčešće (su) korišteni od strane pretražnika, a poradi ažuriranja podataka (njihovih) baza.<br />S obzirom da mogu utjecati na niz faktora, poput “povećanja” broja posjetitelja/ica, preopterećivanja resursa, te nepotpuno/netočno indeksirati stranice, ovdje možeš definirati specijalan korisnički tip kako bi se izbjegli navedeni problemi.',
'BOT_ACTIVATE'=> 'Aktiviraj',
'BOT_ACTIVE'=> 'Aktivacija robota',
'BOT_ADD'=> 'Dodaj robota',
'BOT_ADDED'=> 'Robot je dodan.',
'BOT_AGENT'=> 'Agentsko podudaranje',
'BOT_AGENT_EXPLAIN'=> 'Niz podataka koji se podudara s robotovim agentom preglednika.',
'BOT_DEACTIVATE'=> 'Deaktiviraj',
'BOT_DELETED'=> 'Robot je izbrisan.',
'BOT_EDIT'=> 'Uređivanje robota',
'BOT_EDIT_EXPLAIN'=> 'Ovdje možeš dodati/uređivati robote.<br />Možeš definirati <em>agent string</em> (niz podataka agenta) i(li) jednu/više IP adresa [raspon adresa] za slaganje. Budi oprezan/na kod definiranja slaganja <em>agent strings</em> (niza podataka agenta) i(li) adresa.<br />Također možeš odrediti koji će stil i s kojim jezikom robot “vidjeti” [smanjit ćeš bandwidth određivanjem nekog jednostavnog stila].<br />Ne zaboravi postaviti (određena) dopuštenja za korisničku grupu robota.',
'BOT_LANG'=> 'Jezik robota',
'BOT_LANG_EXPLAIN'=> 'Zadani jezik (za) robota.',
'BOT_LAST_VISIT'=> 'Zadnji posjet',
'BOT_IP'=> 'IP adresa robota',
'BOT_IP_EXPLAIN'=> 'Adrese odvoji zarezom.<br />Dopušteno je parcijalno slaganje.',
'BOT_NAME'=> 'Ime robota',
'BOT_NAME_TAKEN'=> 'Naziv je [već] u uporabi te ne može biti korišten za robota.',
'BOT_NAME_EXPLAIN'=> 'Služi samo tebi kao informacija.',
'BOT_NEVER'=> 'Nikad',
'BOT_STYLE'=> 'Stil robota',
'BOT_STYLE_EXPLAIN'=> 'Zadani stil (za) robota.',
'BOT_UPDATED'=> 'Robot je ažuriran.',

'ERR_BOT_AGENT_MATCHES_UA'=> 'Agent robota je sličan jednome kojeg trenutno koristiš, prilagodi agenta za (ovog) robota.',
'ERR_BOT_NO_IP'=> 'IP adresa je neispravna ili je greška kod/s imenom hosta.',
'ERR_BOT_NO_MATCHES'=> 'Moraš unijeti barem agenta ili IP adresu.',

'NO_BOT'=> 'Nije pronađen niti jedan robot sa spcificiranim ID-em.',
'NO_BOT_GROUP'=> 'Nije bilo moguće pronaći grupu robota.',
));
?>