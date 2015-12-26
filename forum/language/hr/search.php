<?php
/** 
*
* search [Croatian]
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
'ALL_AVAILABLE'=> 'Svih',
'ALL_RESULTS'=> 'Od početka',

'DISPLAY_RESULTS'=> 'Prikaz rezultata',

'FOUND_SEARCH_MATCH'=> 'Pronađeno: %d',
'FOUND_SEARCH_MATCHES'=> 'Pronađeno: %d',
'FOUND_MORE_SEARCH_MATCHES'=> 'Pronađeno više od: %d',

'GLOBAL'=> 'Globalna obavijest',

'IGNORED_TERMS'=> 'Ignorirano',
'IGNORED_TERMS_EXPLAIN'=> 'Za pretraživanja, a zato što su (pre)učestale, ignorirane su sljedeće riječi: <strong>%s</strong>.',

'JUMP_TO_POST'=> 'Idi na post',

'LOGIN_EXPLAIN_EGOSEARCH'=> 'Za pregledavanje vlastitih postova, moraš se prijaviti.',
'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Forum zahtjeva da si registriran/a i prijavljen/a kako bi mogao/la pregledavati vlastite nepročitane postove.',

'MAX_NUM_SEARCH_KEYWORDS_REFINE'=> 'Unio/la si previše riječi za pretraživanje.<br />Ne možeš unijeti više od %1$d riječi.',

'NO_KEYWORDS'=> 'Moraš unijeti najmanje jednu riječ za pretraživanje.<br />Riječ(i) [isključujući zamjenske znakove]:<br />mora(ju) sadržavati najmanje %d znak(ov)a;<br />ne smije(u) sadržavati više od %d znak(ov)a.',
'NO_RECENT_SEARCHES'=> 'Pretražnik nije nedavno korišten.',
'NO_SEARCH'=> 'Nemaš dopuštenje za korištenje Pretražnika.',
'NO_SEARCH_RESULTS'=> 'Ništa nije pronađeno.',
'NO_SEARCH_TIME'=> 'Trenutno ne možeš koristiti Pretražnik.<br />Pokušaj ponovo kasnije.',
'WORD_IN_NO_POST'=> 'Nije pronađen niti jedan post zato što riječ <strong>%s</strong> ne postoji u niti jednom postu.',
'WORDS_IN_NO_POST'=> 'Nije pronađen niti jedan post zato što riječi <strong>%s</strong> ne postoje u niti jednom postu.',

'POST_CHARACTERS'=> 'znakova posta',

'RECENT_SEARCHES'=> 'Nedavno traženo',
'RESULT_DAYS'=> 'Pretraživanje [vrijeme]',
'RESULT_SORT'=> 'Redanje',
'RETURN_FIRST'=> 'Prikaz [prvih]',
'RETURN_TO_SEARCH_ADV'=> 'Napredno pretraživanje',

'SEARCHED_FOR'=> 'Traženo',
'SEARCHED_TOPIC'=> 'Pretražene teme',
'SEARCH_ALL_TERMS'=> 'Sve riječi',
'SEARCH_ANY_TERMS'=> 'Bilo koja riječ',
'SEARCH_AUTHOR'=> 'Pretraživanje po autorima/cama',
'SEARCH_AUTHOR_EXPLAIN'=> 'Možeš koristiti * kao zamjenski znak.',
'SEARCH_FIRST_POST'=> 'Samo prvi post teme',
'SEARCH_FORUMS'=> 'Pretraživanje foruma',
'SEARCH_FORUMS_EXPLAIN'=> 'Označi forum/e unutar kojeg/ih želiš pretraživati.<br />Ukoliko ne onemogućiš “Pretraživanje podforuma”, podforumi će automatski biti uključeni u pretraživanje.',
'SEARCH_IN_RESULTS'=> 'Pretraživanje u rezultatima',
'SEARCH_KEYWORDS_EXPLAIN'=> 'Upiši <strong>+</strong> ispred riječi koja mora biti u rezultatima.<br />Upiši <strong>-</strong> ispred riječi koja ne smije biti u rezultatima.<br />Ukoliko samo jedna riječ može biti u rezultatima, niz riječi odvojenih sa <strong>|</strong> stavi u zagrade.<br />Možeš koristiti * kao zamjenski znak.',
'SEARCH_MSG_ONLY'=> 'Samo tekstovi',
'SEARCH_OPTIONS'=> 'Opcije pretraživanja',
'SEARCH_QUERY'=> 'Pretražnik',
'SEARCH_SUBFORUMS'=> 'Pretraživanje podforuma',
'SEARCH_TITLE_MSG'=> 'Naslovi i tekstovi',
'SEARCH_TITLE_ONLY'=> 'Samo naslovi',
'SEARCH_WITHIN'=> 'Pretraživanje',
'SORT_ASCENDING'=> 'A-Ž',
'SORT_AUTHOR'=> 'Autor/ica',
'SORT_DESCENDING'=> 'Ž-A',
'SORT_FORUM'=> 'Forum',
'SORT_POST_SUBJECT'=> 'Naslov posta',
'SORT_TIME'=> 'Datum postanja',

'TOO_FEW_AUTHOR_CHARS'=> 'Moraš unijeti najmanje %d znakova korisničkog imena autora/ice.',
));
?>