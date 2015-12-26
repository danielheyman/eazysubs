<?php
/**
*
* memberlist [Dutch]
*
* @package language
* @version $Id: memberlist.php 231 2009-11-15 15:57:15Z Raimon $
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
	'ABOUT_USER'			=> 'Profiel',
	'ACTIVE_IN_FORUM'		=> 'Meest actief in het forum',
	'ACTIVE_IN_TOPIC'		=> 'Meest actief in onderwerp',
	'ADD_FOE'				=> 'Als vijand toevoegen',
	'ADD_FRIEND'			=> 'Als vriend toevoegen',
	'AFTER'					=> 'Erna',

	'ALL'					=> 'Alles',

	'BEFORE'				=> 'Ervoor',

	'CC_EMAIL'				=> 'Verstuur een kopie van deze e-mail naar uwzelf.',
	'CONTACT_USER'			=> 'Contactgegevens',

	'DEST_LANG'				=> 'Taal',
	'DEST_LANG_EXPLAIN'		=> 'Selecteer de gewenste taal (tenminste als die beschikbaar is) voor de ontvanger van dit bericht.',

    'EMAIL_BODY_EXPLAIN'	=> 'Dit bericht zal worden verzonden als normale tekst, gebruik geen HTML of BBCode. Het antwoordadres voor dit bericht zal worden ingesteld als uw e-mailadres.',
	'EMAIL_DISABLED'		=> 'Sorry, maar alle e-mail gerelateerde functies zijn uitgeschakeld.',
	'EMAIL_SENT'			=> 'De e-mail is verzonden.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Dit bericht zal worden verzonden als normale tekst, gebruik geen HTML of BBCode. Vergeet niet dat de onderwerpinformatie al is bijgevoegd in het bericht. Het antwoordadres voor dit bericht zal worden ingesteld als uw e-mailadres.',
	'EMPTY_ADDRESS_EMAIL'	=> 'U moet een geldig e-mailadres van de ontvanger invoeren.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Het e-mailbericht moet tekst bevatten.',
	'EMPTY_MESSAGE_IM'		=> 'U moet een bericht invoeren dat verzonden moet worden.',
	'EMPTY_NAME_EMAIL'		=> 'U moet de echte naam van de ontvanger invoeren.',
	'EMPTY_SUBJECT_EMAIL'	=> 'U moet een titel invoeren voor het e-mailbericht.',
	'EQUAL_TO'				=> 'Gelijk aan',

	'FIND_USERNAME_EXPLAIN'	=> 'Gebruik dit formulier om te zoeken naar specifieke gebruikers. U hoeft niet alle velden in te vullen. Voor een overeenkomst met gedeeltelijke gegevens kunt u het * (jokerteken) gebruiken. Wanneer u datums invoert, gebruik dan het formaat <kbd>JJJJ-MM-DD</kbd>, bijv <samp>2004-02-29</samp>. Gebruik de markeervakken om één of meerdere gebruikersname (diverse gebruikersnamen kunnen geaccepteerd worden afhankelijk van het formulier) en klik op de gemarkeerde selecteer knop om terug te keren naar het vorige formulier.',
	'FLOOD_EMAIL_LIMIT'		=> 'U kunt niet een andere e-mail op dit moment versturen. Probeer het over een aantal minuten nog eens.',

	'GROUP_LEADER'			=> 'Groepsleider',

	'HIDE_MEMBER_SEARCH'	=> 'Lid zoeken verbergen',

	'IM_ADD_CONTACT'		=> 'Contactgegevens toevoegen',
	'IM_AIM'				=> 'Vergeet niet dat u AOL Instant Messenger moet hebben geïnstalleerd, om dit te kunnen gebruiken.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Downloadapplicatie',
	'IM_ICQ'				=> 'Vergeet niet dat gebruikers misschien hebben gekozen dat ze geen ongevraagde instant messages willen ontvangen.',
	'IM_JABBER'				=> 'Vergeet niet dat gebruikers misschien hebben gekozen dat ze geen ongevraagde instant messages willen ontvangen.',
	'IM_JABBER_SUBJECT'		=> 'Dit is een automatisch bericht, reageer hier niet op! Bericht van gebruiker %1$s op %2$s.',
	'IM_MESSAGE'			=> 'Uw bericht',
	'IM_MSNM'				=> 'Vergeet niet dat u Windows ( Live ) Messenger moet hebben geïnstalleerd, om dit te kunnen gebruiken.',
	'IM_MSNM_BROWSER'		=> 'Uw internetbrowser ondersteunt dit niet.',
	'IM_MSNM_CONNECT'		=> 'MSNM is niet verbonden.\nU moet verbinding hebben met MSNM om verder te gaan.',
	'IM_NAME'				=> 'Uw naam',
	'IM_NO_DATA'			=> 'Er is geen geschikte contactinformatie gevonden voor deze gebruiker.',
  	'IM_NO_JABBER'			=> 'Sorry, direct versturen van berichten naar jabber-gebruikers wordt niet ondersteund door dit forum. U heeft een Jabber-client nodig dat is geïnstalleerd op uw computer om contact op te nemen met de ontvanger.',
	'IM_RECIPIENT'			=> 'Ontvanger',
	'IM_SEND'				=> 'Bericht versturen',
	'IM_SEND_MESSAGE'		=> 'Bericht versturen',
	'IM_SENT_JABBER'		=> 'Uw bericht naar %1$s is succesvol verzonden.',
	'IM_USER'				=> 'Instant message versturen',

	'LAST_ACTIVE'				=> 'Laatst actief',
	'LESS_THAN'					=> 'Minder dan',
	'LIST_USER'					=> '1 gebruiker',
	'LIST_USERS'				=> '%d gebruikers',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Het forum vereist dat u geregistreerd en aangemeld bent om de teamlijst te kunnen bekijken.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Het forum vereist dat u geregistreerd en aangemeld bent om de ledenlijst te kunnen bekijken.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Het forum vereist dat u geregistreerd en aangemeld bent om naar gebruikers te zoeken.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Het forum vereist dat u geregistreerd en aangemeld bent om profielen te bekijken.',

	'MORE_THAN'				=> 'Meer dan',

	'NO_EMAIL'				=> 'U heeft geen toestemming om deze gebruiker een e-mail te sturen.',
	'NO_VIEW_USERS'			=> 'U heeft niet de permissies om de gebruikerslijst of profielen te bekijken.',

	'ORDER'					=> 'Sorteren',
	'OTHER'					=> 'Anders',

	'POST_IP'				=> 'Geplaatst van IP/domein',

	'RANK'					=> 'Rang',
	'REAL_NAME'				=> 'Naam ontvanger',
	'RECIPIENT'				=> 'Ontvanger',
	'REMOVE_FOE'			=> 'Vijand verwijderen',
	'REMOVE_FRIEND'			=> 'Vriend verwijderen',

	'SEARCH_USER_POSTS'		=> 'Berichten van gebruiker zoeken',
	'SELECT_MARKED'			=> 'Selecteer gemarkeerde',
	'SELECT_SORT_METHOD'	=> 'Selecteer sorteermethode',
	'SEND_AIM_MESSAGE'		=> 'AIM-bericht versturen',
	'SEND_ICQ_MESSAGE'		=> 'ICQ-bericht versturen',
	'SEND_IM'				=> 'IM',
	'SEND_JABBER_MESSAGE'	=> 'Jabber-bericht versturen',
	'SEND_MESSAGE'			=> 'Bericht',
	'SEND_MSNM_MESSAGE'		=> 'MSNM/WLM-bericht versturen',
	'SEND_YIM_MESSAGE'		=> 'YIM-bericht versturen',
	'SORT_EMAIL'			=> 'E-mail',
	'SORT_LAST_ACTIVE'		=> 'Laatst actief',
	'SORT_POST_COUNT'		=> 'Berichtenteller',

	'USERNAME_BEGINS_WITH'	=> 'Gebruikersnaam begint met',
	'USER_ADMIN'			=> 'Gebruiker beheren',
	'USER_BAN'				=> 'Verbannen',
	'USER_FORUM'			=> 'Gebruikerstatistieken',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Op dit moment nog geen herinnering verzonden',
		1		=> '%1$d herinnering verzonden<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Online',
	'USER_PRESENCE'			=> 'Forumaanwezigheid',

	'VIEWING_PROFILE'		=> 'Bekijk profiel - %s',
	'VISITED'				=> 'Laatste bezoek',

	'WWW'					=> 'Website',
));

?>