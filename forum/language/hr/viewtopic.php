<?php
/** 
*
* viewtopic [Croatian]
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
'ATTACHMENT'=> 'Privitak',
'ATTACHMENT_FUNCTIONALITY_DISABLED'=> 'Privitak/ci je/su onemogućen/i.',

'BOOKMARK_ADDED'=> 'Tema je dodana u Bookmarke.',
'BOOKMARK_ERR'=> 'Bookmarkiranje teme nije uspjelo.<br />Pokušaj ponovo.',
'BOOKMARK_REMOVED'=> 'Tema je izbrisana iz Bookmarka.',
'BOOKMARK_TOPIC'=> 'Bookmarkiraj',
'BOOKMARK_TOPIC_REMOVE'=> 'Odbookmarkiraj',
'BUMPED_BY'=> 'Zadnji/a bumpirao/la %1$s on %2$s.',
'BUMP_TOPIC'=> 'Bumpiraj',

'CODE'=> 'Kod',
'COLLAPSE_QR'=> 'Sakrij Brzi Odgovor',

'DELETE_TOPIC'=> 'Izbriši temu',
'DOWNLOAD_NOTICE'=> 'Nemaš dopuštenje za pregledavanje privit(a)ka dodan(og)ih postu.',

'EDITED_TIMES_TOTAL'=> 'Zadnja izmjena: %1$s; %2$s; ukupno mijenjano %3$d put/a.',
'EDITED_TIME_TOTAL'=> 'Zadnja izmjena: %1$s; %2$s; ukupno mijenjano %3$d put/a.',
'EMAIL_TOPIC'=> 'E-mailiraj',
'ERROR_NO_ATTACHMENT'=> 'Privitak više ne postoji.',

'FILE_NOT_FOUND_404'=> 'Datoteka <strong>%s</strong> ne postoji.',
'FORK_TOPIC'=> 'Kopiraj temu',
'FULL_EDITOR'=> 'Potpuno uređivanje',

'LINKAGE_FORBIDDEN'=> 'Nemaš dopuštenje za pregledavanje/preuzimanje/linkanje s/na ove stranice.',
'LOGIN_NOTIFY_TOPIC'=> 'Za pregledavanje ove teme, [o kojoj ti je stigla obavijest], moraš se prijaviti.',
'LOGIN_VIEWTOPIC'=> 'Za pregledavanje ove teme, moraš se prijaviti.',

'MAKE_ANNOUNCE'=> 'Promijeni u “Obavijest”',
'MAKE_GLOBAL'=> 'Promijeni u “Globalno”',
'MAKE_NORMAL'=> 'Promijeni u “Normalno”',
'MAKE_STICKY'=> 'Promijeni u “Važno”',
'MAX_OPTIONS_SELECT'=> 'Možeš odabrati <strong>%d</strong> opcija/e.',
'MAX_OPTION_SELECT'=> 'Možeš izabrati <strong>1</strong> opciju.',
'MISSING_INLINE_ATTACHMENT'=> 'Privitak <strong>%s</strong> više nije dostupan.',
'MOVE_TOPIC'=> 'Premjesti temu',

'NO_ATTACHMENT_SELECTED'=> 'Nisi izabrao/la privitak za preuzimanje/pregledavanje.',
'NO_NEWER_TOPICS'=> 'Nema novijih tema.',
'NO_OLDER_TOPICS'=> 'Nema starijih tema.',
'NO_UNREAD_POSTS'=> 'Nema novih nepročitanih postova.',
'NO_VOTE_OPTION'=> 'Moraš označiti opciju za koju glasuješ.',
'NO_VOTES'=> 'Nema glasova',

'POLL_ENDED_AT'=> 'Anketa je završila: %s.',
'POLL_RUN_TILL'=> 'Anketa traje do: %s.',
'POLL_VOTED_OPTION'=> 'Glasovao/la si za ovu opciju.',
'PRINT_TOPIC'=> 'Prikaz ispisa',

'QUICK_MOD'=> 'Brz(o)Bir',
'QUICKREPLY'=> 'Brzi Odgovor',
'QUOTE'=> 'Citat',

'REPLY_TO_TOPIC'=> 'Odgovori',
'RETURN_POST'=> 'Klikni %sovdje%s za povratak na post.',
'SHOW_QR'=> 'Brzi Odgovor',

'SUBMIT_VOTE'=> 'Glasuj',

'TOTAL_VOTES'=> 'Ukupno glasova',

'UNLOCK_TOPIC'=> 'Otključaj temu',

'VIEW_INFO'=> 'Detalji o postu',
'VIEW_NEXT_TOPIC'=> 'Sljedeća tema',
'VIEW_PREVIOUS_TOPIC'=> 'Prethodna tema',
'VIEW_RESULTS'=> 'Rezultati',
'VIEW_TOPIC_POST'=> '1 post',
'VIEW_TOPIC_POSTS'=> '%d post(ov)a',
'VIEW_UNREAD_POST'=> 'Prvi nepročitan post',
'VISIT_WEBSITE'=> 'Web stranica',
'VOTE_SUBMITTED'=> 'Glas je zabilježen.',
'VOTE_CONVERTED'=> '“Predomišljanje” odnosno mijenjanje glasov(anj)a nije podržano u konvertiranim anketama.',
));
?>