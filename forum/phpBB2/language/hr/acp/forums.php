<?php
/** 
*
* acp_forums [Croatian]
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

// Forum Admin
$lang = array_merge($lang, array(
'AUTO_PRUNE_DAYS'=> 'Starost postova za automatsko izbrisivanje',
'AUTO_PRUNE_DAYS_EXPLAIN'=> 'Broj dana koji mora proći od postanja zadnjeg posta kako bi tema bila izbrisana.',
'AUTO_PRUNE_FREQ'=> 'Frekvencija automatskog izbrisivanja',
'AUTO_PRUNE_FREQ_EXPLAIN'=> 'Vrijeme, u danima, između izbrisivanja.',
'AUTO_PRUNE_VIEWED'=> 'Pregledanost postova za automatsko izbrisivanje',
'AUTO_PRUNE_VIEWED_EXPLAIN'=> 'Broj dana koji mora proći od  zadnjeg pregledavanja teme kako bi tema bila izbrisana.',
'CONTINUE'=> 'Nastavi',

'COPY_PERMISSIONS'=> 'Kopiraj dopuštenja iz',
'COPY_PERMISSIONS_EXPLAIN'=> 'Kako bi se olakšalo postavljanje dopuštenja novih foruma, omogućeno je kopiranje dopuštenja sa postojećih foruma.',
'COPY_PERMISSIONS_ADD_EXPLAIN'=> 'Po kreiranju, forum će dobiti (imati) ista dopuštenja kao izabrana.<br />Ukoliko ništa ne izabereš, novi forum neće biti vidljiv sve dok ne postaviš dopuštenja za njega.',
'COPY_PERMISSIONS_EDIT_EXPLAIN'=> 'Ukoliko izabereš kopiranje dopuštenja, forum će dobiti (imati) ista dopuštenja kao izabrana, (a) što će prepisati sva (dotadašnja) dopuštenja koja su bila postavljena za forum.<br />Ukoliko ništa ne izabereš, trenutna dopuštenja će (ostati nepromijenjena) biti zadržana.',
'COPY_TO_ACL'=> 'Alternativno, možeš %spostaviti nova dopuštenja%s za ovaj forum.',
'CREATE_FORUM'=> 'Kreiraj novi forum',

'DECIDE_MOVE_DELETE_CONTENT'=> 'Izbriši sadržaj ili premjesti u forum',
'DECIDE_MOVE_DELETE_SUBFORUMS'=> 'Izbriši podforum(e) ili premjesti u forum',
'DEFAULT_STYLE'=> 'Zadani stil',
'DELETE_ALL_POSTS'=> 'Izbriši postove',
'DELETE_SUBFORUMS'=> 'Izbriši podforum(e) i postove',
'DISPLAY_ACTIVE_TOPICS'=> 'Omogući aktivne teme',
'DISPLAY_ACTIVE_TOPICS_EXPLAIN'=> 'Ukoliko izabereš “Da”, aktivne teme, u odabranim podforumima, bit će prikazane ispod (ove) kategorije.',

'EDIT_FORUM'=> 'Uredi forum',
'ENABLE_INDEXING'=> 'Omogući indekse pretraživanja',
'ENABLE_INDEXING_EXPLAIN'=> 'Ukoliko izabereš “Da”, postovi postani u (ovaj) forum bit će indeksirani za pretraživanje.',
'ENABLE_POST_REVIEW'=> 'Omogući osvrte na postove',
'ENABLE_POST_REVIEW_EXPLAIN'=> 'Ukoliko izabereš “Da”, korisnici/e se mogu osvrtati na svoje postove ukoliko su postani novi postovi u temu za vrijeme dok su pisali/e post.<br />Kako to izgleda u praksi? U već postojećoj temi, započneš s pisanjem novog posta, netko u međuvremenu posta, (ti) završiš s pisanjem (čime li već) i klikneš na “Pošalji”, prije nego post bude postan, dobiješ obavijest [s prikazom novog(ih) post(ov)a] da je u međuvremenu odgovoreno na temu, te mogućnost da prije slanja posta (još) nešto izmijeniš/dodaš/izbrišeš odnosno odustaneš od posta.<br />Ovo bi trebalo onemogućiti za “chat” forume.',
'ENABLE_QUICK_REPLY'=> 'Omogući brzi odgovor',
'ENABLE_QUICK_REPLY_EXPLAIN'=> 'Omogućuje brzi odgovor na ovom forumu. Ove postavke se ne prihvaćaju ukoliko je brzi odgovor isključen na cijelom forumu. Brzi odgovor će biti prikazan samo za korisnike koji imaju dopuštenje za postanje unutar ovog foruma.',
'ENABLE_RECENT'=> 'Prikaži aktivne teme',
'ENABLE_RECENT_EXPLAIN'=> 'Ukoliko izabereš “Da”, teme postane u (ovaj) forum bit će prikazane na listi aktivnih tema.',
'ENABLE_TOPIC_ICONS'=> 'Omogući ikone tema',

'FORUM_ADMIN'=> 'Administriranje foruma',
'FORUM_ADMIN_EXPLAIN'=> 'U phpBB3 nema kategorija, sve je forumski bazirano što će reći da svaki forum može imati neograničen broj podforuma.<br />Ovdje možeš dodavati/uređivati/izbrisati/zaključavati/otključavati (pojedinačne) forume te postavljati određene kontrole.<br />Ukoliko teme i postovi (p)ostanu nesinkronizirani, ovdje ih možeš resinkronizirati.<br /><strong>Kako bi novo kreirani forumi bili prikazani, moraš kopirati ili postaviti dopuštenja.</strong>',
'FORUM_AUTO_PRUNE'=> 'Omogući automatsko izbrisivanje',
'FORUM_AUTO_PRUNE_EXPLAIN'=> 'Izbrisuje forum(e)/teme u skladu sa (dolje) određenim parametrima.',
'FORUM_CREATED'=> 'Forum je kreiran.',
'FORUM_DATA_NEGATIVE'=> 'Parametri izbrisivanja ne mogu biti negativni.',
'FORUM_DESC_TOO_LONG'=> 'Opis foruma je predugačak, mora sadržavati manje od 4000 znakova.',
'FORUM_DELETE'=> 'Izbrisivanje foruma',
'FORUM_DELETE_EXPLAIN'=> 'Donjom formom možeš izbrisati forum.<br />Ukoliko forum ima podforume odnosno sadrži teme/postove, možeš odlučiti hoćeš li ih izbrisati zajedno s forumom ili premjestiti.',
'FORUM_DELETED'=> 'Forum je izbrisan',
'FORUM_DESC'=> 'Opis foruma',
'FORUM_DESC_EXPLAIN'=> 'Svo uneseno HTML formatiranje bit će prikazano.',
'FORUM_EDIT_EXPLAIN'=> 'Donjom formom možeš podesiti forum.<br />Moderiranje i kontrole postanja podešavaju se za svakog/u korisnika/cu odnosno grupu putem dopuštenja.',
'FORUM_IMAGE'=> 'Slika foruma',
'FORUM_IMAGE_EXPLAIN'=> 'Lokacija, u odnosu na phpBB, slike koja će [asocirati na] biti povezana s forumom.',
'FORUM_IMAGE_NO_EXIST'=> 'Slika foruma ne postoji.',
'FORUM_LINK_EXPLAIN'=> 'Cijeli URL (uključujući protokol, npr.: <samp>http://</samp>) do odredišne lokacije na koju će korisnik/ca biti odveden/a, npr.: <samp>http://www.phpbb.com/</samp>.',
'FORUM_LINK_TRACK'=> 'Prati preusmjerenja linka',
'FORUM_LINK_TRACK_EXPLAIN'=> 'Bilježi koliko je puta kliknuto na link foruma.',
'FORUM_NAME'=> 'Naziv foruma',
'FORUM_NAME_EMPTY'=> 'Moraš unijeti naziv foruma.',
'FORUM_PARENT'=> 'Krovni forum',
'FORUM_PASSWORD'=> 'Zaporka foruma',
'FORUM_PASSWORD_CONFIRM'=> 'Potvrdi zaporku foruma',
'FORUM_PASSWORD_CONFIRM_EXPLAIN'=> 'Mora biti uneseno samo ako je postavljena zaporka foruma.',
'FORUM_PASSWORD_EXPLAIN'=> 'Definira zaporku foruma, prednost se daje korištenju sustava dopuštenja.',
'FORUM_PASSWORD_UNSET' => 'Izbriši zaporku foruma',
'FORUM_PASSWORD_UNSET_EXPLAIN' => 'Ukoliko želiš izbrisati zaporku foruma, označi za to predviđeno polje.',
'FORUM_PASSWORD_OLD'=> 'Zaporka foruma koristi staru metodu raspršivanja i trebalo bi je zamijeniti.',
'FORUM_PASSWORD_MISMATCH'=> 'Zaporke koje si unio/la se ne podudaraju.',
'FORUM_PRUNE_SETTINGS'=> 'Postavke automatskog izbrisivanja foruma',
'FORUM_RESYNCED'=> 'Forum “%s” je resinkroniziran.',
'FORUM_RULES_EXPLAIN'=> 'Pravila foruma su prikazan na svakoj stranici foruma.',
'FORUM_RULES_LINK'=> 'Link na pravila foruma',
'FORUM_RULES_LINK_EXPLAIN'=> 'Možeš unijeti URL na stranicu/post na/u kojoj/em se nalaze pravila foruma.<br />Ukoliko postaviš URL, dolje upisan, tekst, Pravila foruma, bit će prepisan.',
'FORUM_RULES_PREVIEW'=> 'Prikaz pravila foruma',
'FORUM_RULES_TOO_LONG'=> 'Pravila foruma su predugačka, moraju sadržavati manje od 4000 znakova.',
'FORUM_SETTINGS'=> 'Postavke foruma',
'FORUM_STATUS'=> 'Status foruma',
'FORUM_STYLE'=> 'Stil foruma',
'FORUM_TOPICS_PAGE'=> 'Tema po stranici',
'FORUM_TOPICS_PAGE_EXPLAIN'=> '0 = bit će primjenjivane zadane postavke foruma.<br />Ukoliko uneseš drugu vrijednost, zadane postavke foruma bit će prepisane [naravno, samo za ovaj forum].',
'FORUM_TYPE'=> 'Tip foruma',
'FORUM_UPDATED'=> 'Informacije o forumu su ažurirane.',
'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'=> 'Želiš promijeniti postajući forum, s pripadajućim podforumima, u link.<br />Prije nastavka, premjesti sve podforume iz ovog foruma jer, ukoliko to ne napraviš, nakon promjene, nećeš moći vidjeti podforume povezane s ovim forumom.',

'GENERAL_FORUM_SETTINGS'=> 'Opće postavke foruma',

'LINK'=> 'Link',
'LIST_INDEX'=> 'Link na podforum u legendi krovnog foruma',
'LIST_INDEX_EXPLAIN'=> 'Prikazuje forum, na početnoj stranici i drugdje, kao link u sklopu legende krovnog foruma ukoliko je opcija <em>Prikaži podforume u legendi</em> omogućena.',
'LIST_SUBFORUMS'=> 'Prikaži podforume u legendi',
'LIST_SUBFORUMS_EXPLAIN'   => 'Prikazuje podforume foruma, na početnoj stranici i drugdje, kao link u sklopu legende ukoliko je opcija <em>Link na podforum u legendi krovnog foruma</em> omogućena.',
'LOCKED'=> 'Zaključano',

'MOVE_POSTS_NO_POSTABLE_FORUM'=> 'Kao odredišni forum, izabrao/la si forum u/po kojem se ne može postati<br />Izaberi drugi forum.',
'MOVE_POSTS_TO'=> 'Premjesti postove u',
'MOVE_SUBFORUMS_TO'=> 'Premjesti podforume u',

'NO_DESTINATION_FORUM'=> 'Moraš specificirati odredišni forum.',
'NO_FORUM_ACTION'=> 'Nije odabrana radnja vezana uz to što će biti sa sadržajem foruma.',
'NO_PARENT'=> 'Bez krovnog foruma',
'NO_PERMISSIONS'=> 'Nemoj kopirati dopuštenja',
'NO_PERMISSION_FORUM_ADD'=> 'Nemaš potrebna dopuštenja za dodavanje foruma.',
'NO_PERMISSION_FORUM_DELETE'=> 'Nemaš potrebna dopuštenja za izbrisivanje foruma.',

'PARENT_IS_LINK_FORUM'=> 'Kao krovni forum izabrao/la si linkni forum, (a) koji ne može sadržavati druge (pod)forume.<br />Izaberi kategoriju ili forum kao krovni forum.',
'PARENT_NOT_EXIST'=> 'Krovni forum ne postoji.',
'PRUNE_ANNOUNCEMENTS'=> 'Izbrisuj obavijesti',
'PRUNE_STICKY'=> 'Izbrisuj “važno”',
'PRUNE_OLD_POLLS'=> 'Izbrisuj stare ankete',
'PRUNE_OLD_POLLS_EXPLAIN'=> 'Izbrisuje ankete u kojima nije bilo glasovanja određen broj dana.',

'REDIRECT_ACL'=> '(Sada) Možeš %spostaviti dopuštenja %s za (ovaj) forum.',

'SYNC_IN_PROGRESS'=> 'Sinkroniziranje je u tijeku.',
'SYNC_IN_PROGRESS_EXPLAIN'=> 'Trenutno je resinkronizirano %1$d/%2$d tema.',

'TYPE_CAT'=> 'Kategorija',
'TYPE_FORUM'=> 'Forum',
'TYPE_LINK'=> 'Link',

'UNLOCKED'=> 'Otključano',
));
?>