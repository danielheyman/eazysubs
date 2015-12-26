<?php
/**
*
* acp_posting [Dutch]
*
* @package language
* @version $Id: posting.php 270 2010-02-23 00:48:35Z Raimon $
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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode is een speciale implantatie van HTML, het bied betere controle over hoe iets wordt weergegeven. Vanuit deze pagina kunt u aangepaste BBCodes toevoegen, wijzigen en verwijderen.',
	'ADD_BBCODE'				=> 'Nieuwe BBCode toevoegen',
	
	'BBCODE_DANGER'				=> 'De BBCode die u probeert toe te voegen blijkt een {TEXT}-element te gebruiken binnen een HTML-attribuut. Dit kan een mogelijke XSS-veiligheidsprobleem veroorzaken. Probeer in plaats van de {TEXT}-type een meer beperkte type te gebruiken zoals de {SIMPLETEXT} of {INTTEXT}. Ga alleen verder als u de risico’s begrijpt die de {TEXT}-token met zich meebrengt, en/of dat het gebruik van de {TEXT}-token onvermijdelijk is.',
	'BBCODE_DANGER_PROCEED'		=> 'Doorgaan', //'I understand the risk',	

	'BBCODE_ADDED'				=> 'BBCode is succesvol toegevoegd.',
	'BBCODE_EDITED'				=> 'BBCode is succesvol gewijzigd.',
	'BBCODE_NOT_EXIST'			=> 'De BBCode die u heeft geselecteerd bestaat niet.',
	'BBCODE_HELPLINE'			=> 'Tip',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Dit veld bevat de tekst die weergegeven wordt zodra u met uw muis over de BBCode gaat.',
	'BBCODE_HELPLINE_TEXT'		=> 'Tiptekst',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'De tip die u heeft ingevoerd is te lang.',

	'BBCODE_INVALID_TAG_NAME'	=> 'De tagnaam van de BBCode die u heeft geselecteerd bestaat al.',
	'BBCODE_INVALID'			=> 'De BBCode is gemaakt in een ongeldig formulier.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'De aangepaste BBCode moet een start- en sluittag bevatten.',
	'BBCODE_TAG'				=> 'Tag',
	'BBCODE_TAG_TOO_LONG'		=> 'De tagnaam die u heeft geselecteerd is te lang.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'De opgegeven tagnaam die u heeft ingevoerd is te lang, kort uw tagnaam in.',
	'BBCODE_USAGE'				=> 'BBCode gebruik',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Hier kunt u opgeven hoe de BBCode gebruikt kan worden. Vervang alle variabele invoer door het juiste element (%szie hieronder%s).',

	'EXAMPLE'						=> 'Voorbeeld:',
	'EXAMPLES'						=> 'Voorbeelden:',

	'HTML_REPLACEMENT'				=> 'HTML-vervanging',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Hier kunt u de standaard HTML-vervanging opgeven. Vergeet niet om de elementen die u hierboven heeft gebruikt terug te zetten!',

	'TOKEN'					=> 'Element',
	'TOKENS'				=> 'Elementen',
	'TOKENS_EXPLAIN'		=> 'Elementen zijn plaatsvervangers voor de gebruikersinvoer. Hetgene wat ingevoerd is zal alleen worden gecontroleerd als het overeenkomt met de bijbehorende omschrijving. Als het nodig is kunt u ook cijfers toevoegen aan het laatste teken tussen de koppels, bijvoorbeeld: {TEXT1}, {TEXT2}.<br /><br />Binnen de HTML-vervanging kunt u ook taalwaarden gebruiken die voorkomen in uw language/-directory zoals dit:  {L_<em>&lt;STRINGNAME&gt;</em>}  wat <em>&lt;STRINGNAME&gt;</em> de vertaalwaarde is die u wilt toevoegen. Als voorbeeld; {L_WROTE} zal worden weergegeven als “schreef” of hoe het vertaald is in de forumtaal die de gebruikers hebben geselecteerd.<br /><br /><strong>Vergeet niet dat u alleen de elementen kunt gebruiken die hieronder zijn weergegeven met aangepaste BBCodes.</strong>',
	'TOKEN_DEFINITION'		=> 'Wat kan het zijn?',
	'TOO_MANY_BBCODES'		=> 'U kunt geen BBCodes meer aanmaken. Verwijder één of meerde BBCodes en probeer het daarna opnieuw.',

	'tokens'	=>	array(
		'TEXT'			=> 'Tekst, inclusief vreemde tekens, cijfers, etc… U zult dit element niet moeten gebruiken binnen HTML-tags. Gebruik in plaats daarvan de IDENTIFIER, INTTEXT of SIMPLETEXT.',
		'SIMPLETEXT'	=> 'Tekens van het Latijnse alfabet (A-Z), cijfers, spaties, komma’s, punten, mintekens, plustekens, koppelingstekens en onderstrepingstekens.',
		'INTTEXT'       => 'Unicode lettertekens, cijfers, spaties, komma’s, punten, mintekens, plustekens, koppelingstekens en onderstrepingstekens en witregels.',
		'IDENTIFIER'	=> 'Tekens van het Latijnse alfabet (A-Z), cijfers, koppelingstekens en onderstrepingstekens.',
		'NUMBER'		=> 'Een serie van cijfers.',
		'EMAIL'			=> 'Een geldig e-mailadres.',
		'URL'			=> 'Een geldige URL die een protocol gebruikt (http, ftp, etc… kunnen niet worden gebruikt wegens javascript veiligheidslekken). Als er niks is opgegeven zal “http://” worden toegevoegd aan de reeks.',
		'LOCAL_URL'		=> 'Een lokale URL. De URL moet relatief zijn naar de onderwerppagina en kan niet een server-naam of een protocol bevatten.',
		'COLOR'			=> 'Een HTML-kleur, die kan op worden gegeven via een digitale manier <samp>#FF1234</samp> of via een <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS-kleuren trefwoord</a> zoals <samp>fuchsia</samp> of <samp>InactiveBorder</samp>.'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Vanuit deze pagina kunt u pictogrammen toevoegen, verwijderen en wijzigen die de gebruikers mogen toevoegen aan onderwerpen, berichten of privéberichten. Deze pictogrammen zijn normaal weergegeven naast de onderwerptitel in de forumlijst of in de berichttitel in de onderwerplijst. U kunt ook nieuwe pakketten van pictogrammen installeren en aanmaken.',
	'ACP_SMILIES_EXPLAIN'	=> 'Smileys of emoticons zijn typische kleine, soms geanimeerde afbeeldingen die gebruikt worden om een emotie of een gevoel uit te drukken. Vanuit deze pagina kunt u emoticons toevoegen, verwijderen en wijzigen die gebruikers kunnen gebruiken in hun berichten en privéberichten. U kunt ook nieuwe pakketten van smileys installeren en aanmaken.',
	'ADD_SMILIES'			=> 'Meerdere smileys toevoegen',
	'ADD_SMILEY_CODE'		=> 'Extra smiley-code toevoegen',
	'ADD_ICONS'				=> 'Meerdere pictogrammen toevoegen',
	'AFTER_ICONS'			=> 'Na %s',
	'AFTER_SMILIES'			=> 'Na %s',

	'CODE'						=> 'Code',
	'CURRENT_ICONS'				=> 'Huidige pictogrammen',
	'CURRENT_ICONS_EXPLAIN'		=> 'Kies wat u wilt doen met de huidige geïnstalleerde pictogrammen.',
	'CURRENT_SMILIES'			=> 'Huidige smileys',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Kies wat u wilt doen met de huidige smileys.',

	'DISPLAY_ON_POSTING'		=> 'Weergeven op de pagina om berichten te plaatsen',
	'DISPLAY_POSTING'			=> 'Op de pagina om berichten te plaatsen',
	'DISPLAY_POSTING_NO'		=> 'Niet op de pagina om berichten te plaatsen',

	'EDIT_ICONS'				=> 'Pictogrammen wijzigen',
	'EDIT_SMILIES'				=> 'Smileys wijzigen',
	'EMOTION'					=> 'Emotie',
	'EXPORT_ICONS'				=> 'Icons.pak exporteren en downloaden',
	'EXPORT_ICONS_EXPLAIN'		=> '%sWanneer u op deze link klikt, zal de configuratie van uw geïnstalleerde pictogrammen worden ingepakt in <samp>icons.pak</samp>. Wanneer u het download kan het worden gebruikt om een <samp>.zip</samp> of <samp>.tgz</samp> bestand aan te maken, het zal al uw pictogrammen bevatten plus het <samp>icons.pak</samp> configuratiebestand%s.%s',
	'EXPORT_SMILIES'			=> 'Smilies.pak exporteren en downloaden',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sWanneer u op deze link klikt, zal de configuratie van uw geïnstalleerde smileys worden ingepakt in <samp>smilies.pak</samp>. Wanneer u het download kan het worden gebruikt om een <samp>.zip</samp> of <samp>.tgz</samp> bestand aan te maken, het zal al uw smileys bevatten plus het <samp>smilies.pak</samp> configuratiebestand.%s',

	'FIRST'			=> 'Eerste',

	'ICONS_ADD'				=> 'Nieuwe pictogram toevoegen',
	'ICONS_NONE_ADDED'		=> 'Er zijn geen pictogrammen toegevoegd.',
	'ICONS_ONE_ADDED'		=> 'Het pictogram is succesvol toegevoegd.',
	'ICONS_ADDED'			=> 'De pictogrammen zijn succesvol toegevoegd.',
	'ICONS_CONFIG'			=> 'Pictogramconfiguratie',
	'ICONS_DELETED'			=> 'Het pictogram is succesvol verwijderd.',
	'ICONS_EDIT'			=> 'Pictogram wijzigen',
	'ICONS_ONE_EDITED'		=> 'Het pictogram is succesvol bijgewerkt.',
	'ICONS_NONE_EDITED'		=> 'Er zijn geen pictogrammen bijgewerkt.',
	'ICONS_EDITED'			=> 'De pictogrammen zijn succesvol bijgewerkt.',
	'ICONS_HEIGHT'			=> 'Pictogramhoogte',
	'ICONS_IMAGE'			=> 'Pictogramafbeelding',
	'ICONS_IMPORTED'		=> 'Het pictogrampakket is succesvol geïnstalleerd.',
	'ICONS_IMPORT_SUCCESS'	=> 'Het pictogrammenpakket is succesvol geïmporteert.',
	'ICONS_LOCATION'		=> 'Pictogramlocatie',
	'ICONS_NOT_DISPLAYED'	=> 'De volgende pictogrammen worden niet weergegeven op de berichtpagina', //post page reactiepagina plaatsen van berichten pagina mehhhh!!
	'ICONS_ORDER'			=> 'Pictogramvolgorde',
	'ICONS_URL'				=> 'Pictogram-afbeeldingsbestand',
	'ICONS_WIDTH'			=> 'Pictogrambreedte',
	'IMPORT_ICONS'			=> 'Pictogrammenpakket installeren',
	'IMPORT_SMILIES'		=> 'Smiley-pakket installeren',

	'KEEP_ALL'			=> 'Alles behouden',

	'MASS_ADD_SMILIES'	=> 'Meerdere smileys toevoegen',

	'NO_ICONS_ADD'		=> 'Er zijn geen pictogrammen beschikbaar om te kunnen toevoegen.',
	'NO_ICONS_EDIT'		=> 'Er zijn geen pictogrammen beschikbaar om te wijzigen.',
	'NO_ICONS_EXPORT'	=> 'U heeft geen pictogrammen om een pakket mee aan te maken.',
	'NO_ICONS_PAK'		=> 'Er zijn geen pictogrampakketten gevonden.',
	'NO_SMILIES_ADD'	=> 'Er zijn geen smileys beschikbaar om te kunnen toevoegen.',
	'NO_SMILIES_EDIT'	=> 'Er zijn geen smileys beschikbaar om te kunnen wijzigen.',
	'NO_SMILIES_EXPORT'	=> 'U heeft geen smileys om een pakket mee aan te maken.',
	'NO_SMILIES_PAK'	=> 'Er zijn geen smiley-pakketten gevonden.',

	'PAK_FILE_NOT_READABLE'		=> 'Het <samp>.pak</samp>-bestand kan niet worden gelezen.',

	'REPLACE_MATCHES'	=> 'Overeenkomsten vervangen',

	'SELECT_PACKAGE'			=> 'Een pakketbestand selecteren',
	'SMILIES_ADD'				=> 'Nieuwe smiley toevoegen',
	'SMILIES_NONE_ADDED'		=> 'Er zijn geen smileys toegevoegd.',
	'SMILIES_ONE_ADDED'			=> 'De smiley is succesvol toegevoegd.',
	'SMILIES_ADDED'				=> 'De smileys zijn succesvol toegevoegd.',
	'SMILIES_CODE'				=> 'Smiley-code',
	'SMILIES_CONFIG'			=> 'Smiley-configuratie',
	'SMILIES_DELETED'			=> 'De smiley is succesvol verwijderd.',
	'SMILIES_EDIT'				=> 'Smiley wijzigen',
	'SMILIE_NO_CODE'			=> 'De smiley “%s” is genegeerd, omdat er geen code is ingevoerd.',
	'SMILIE_NO_EMOTION'			=> 'De smiley “%s” is genegeerd, omdat er geen emotie is ingevoerd.',
	'SMILIES_NONE_EDITED'		=> 'Er zijn geen smileys bijgewerkt.',
	'SMILIES_ONE_EDITED'		=> 'De smiley is succesvol bijgewerkt.',
	'SMILIES_EDITED'			=> 'De smileys zijn succesvol bijgewerkt.',
	'SMILIES_EMOTION'			=> 'Emotie',
	'SMILIES_HEIGHT'			=> 'Smiley-hoogte',
	'SMILIES_IMAGE'				=> 'Smiley-afbeelding',
	'SMILIES_IMPORTED'			=> 'Het smiley-pakket is succesvol geïnstalleerd.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Het smiley-pakket is succesvol geïmporteerd.',
	'SMILIES_LOCATION'			=> 'Smiley-locatie',
	'SMILIES_NOT_DISPLAYED'		=> 'De volgende smileys worden niet weergeven op de berichtpagina', // posting page, reactiepagina mehmhe
	'SMILIES_ORDER'				=> 'Smiley-volgorde',
	'SMILIES_URL'				=> 'Smiley-afbeeldingsbestand',
	'SMILIES_WIDTH'				=> 'Smiley-breedte',

	'TOO_MANY_SMILIES'			=> 'Limiet van %d smileys is bereikt.',

	'WRONG_PAK_TYPE'	=> 'Het opgegeven pakket bevat niet de juiste gegevens.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Vanuit dit controlepaneel kunt u woorden toevoegen, wijzigen en verwijderen die automatisch worden gecensureerd op uw forum. Mensen kunnen zich nog steeds registeren met gebruikersnamen die deze woorden bevatten. Jokertekens (*) worden geaccepteerd in het woordenveld, bijvoorbeeld: *test* zal overeenkomen met detestable, test* zal overeenkomen met testing en *test zal overeenkomen met detest.',
	'ADD_WORD'				=> 'Nieuw woord toevoegen',

	'EDIT_WORD'		=> 'Woordcensuur wijzigen',
	'ENTER_WORD'	=> 'U moet een woord en het vervangingswoord invoeren.',

	'NO_WORD'	=> 'Er is geen woord geselecteerd om te kunnen wijzigen.',

	'REPLACEMENT'	=> 'Vervanging',

	'UPDATE_WORD'	=> 'Woordcensuur bijwerken',

	'WORD'				=> 'Woord',
	'WORD_ADDED'		=> 'De woordcensuur is succesvol toegevoegd.',
	'WORD_REMOVED'		=> 'De geselecteerde woordcensuur is succesvol verwijderd.',
	'WORD_UPDATED'		=> 'De geselecteerde woordcensuur is succesvol bijgewerkt.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Door dit formulier te gebruiken kunt u rangen toevoegen, wijzigen, bekijken en verwijderen. U kunt ook speciale rangen aanmaken die toegewezen kunnen worden aan een gebruiker via de optie in het gebruikersbeheer.',
	'ADD_RANK'				=> 'Nieuwe rang toevoegen',

	'MUST_SELECT_RANK'		=> 'U moet een rang selecteren.',

	'NO_ASSIGNED_RANK'		=> 'Er is geen speciale rang toegewezen.',
	'NO_RANK_TITLE'			=> 'U heeft geen titel voor de rang opgegeven.',
	'NO_UPDATE_RANKS'		=> 'De rang is succesvol verwijderd. Maar gebruikersaccounts die deze rang gebruiken zijn niet bijgewerkt. U moet de rang voor die accounts handmatig resetten.',

	'RANK_ADDED'			=> 'De rang is succesvol toegevoegd.',
	'RANK_IMAGE'			=> 'Rangafbeelding',
	'RANK_IMAGE_EXPLAIN'	=> 'Gebruik dit om een kleine afbeelding op te geven die verbonden is met de rang. Het path is relatief naar de phpBB-hoofddirectory.',
	'RANK_IMAGE_IN_USE'		=> '(In gebruik)',
	'RANK_MINIMUM'			=> 'Minimum aantal berichten',
	'RANK_REMOVED'			=> 'De rang is succesvol verwijderd.',
	'RANK_SPECIAL'			=> 'Als speciale rang instellen',
	'RANK_TITLE'			=> 'Rangtitel',
	'RANK_UPDATED'			=> 'De rang is succesvol bijgewerkt.',
));

// Disallow Usernames // is dit correct verboden gebruikersnamen? // Niet toegestaande gebruikersnaam Geweigerde gebruikersnamen etc??? zie acp/attachments.php "	'DEFINE_DISALLOWED_IPS'			=> 'Niet-toegestaande IP-adressen/hostnamen opgeven'," @_@
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Hier kunt u controleren welke gebruikersnamen gebruikt mogen worden en welke niet. Verboden gebruikersnamen mogen een jokerteken (*) bevatten. Vergeet niet dat het niet is toegestaan om een gebruikersnaam op te geven die al geregistreerd is, u zult die gebruiker eerst moeten verwijderen voordat u het kunt verbieden.',
	'ADD_DISALLOW_EXPLAIN'	=> 'U kunt een gebruikersnaam verbieden doormiddel van een joker (*) te gebruiken zodat het overeenkomt met elk teken.',
	'ADD_DISALLOW_TITLE'	=> 'Een verboden gebruikersnaam toevoegen',

	'DELETE_DISALLOW_EXPLAIN'	=> 'U kunt een verboden gebruikersnaam verwijderen doormiddel van de gebruikersnaam te selecteren van deze lijst en daarna op de versturen-knop te klikken.',
	'DELETE_DISALLOW_TITLE'		=> 'Een verboden gebruikersnaam verwijderen',
	'DISALLOWED_ALREADY'		=> 'De naam die u heeft ingevoerd kan niet worden verboden. Of het bestaat al in de lijst, of het bestaat in de woordcensuur, of de overeengekomen gebruikersnaam is actief.',
	'DISALLOWED_DELETED'		=> 'De verboden gebruikersnaam is succesvol verwijderd.',
	'DISALLOW_SUCCESSFUL'		=> 'De verboden gebruikersnaam is succesvol toegevoegd.',

	'NO_DISALLOWED'				=> 'Er zijn geen verboden gebruikersnamen.',
	'NO_USERNAME_SPECIFIED'		=> 'U heeft geen gebruikersnaam geselecteer of opgegeven.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Hier kunt u redenen beheren die gebruikt worden in meldingen en bij afkeuringsberichten wanneer er berichten worden afgekeurd. Er is één standaard reden (gemarkeerd met een jokerteken *) die u niet kunt verwijderen, deze reden wordt normaal gebruikt voor aangepaste berichten als er er geen reden bij past.',
	'ADD_NEW_REASON'		=> 'Nieuwe reden toevoegen',
	'AVAILABLE_TITLES'		=> 'Beschikbare vertaalde titels van redenen',

	'IS_NOT_TRANSLATED'			=> 'Reden is <strong>niet</strong> vertaald.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'De reden is <strong>niet</strong> vertaald. Als u de vertaalde tekst wilt opgeven, geef dan de correcte variabele van de meldingsredenen sectie die in de taalbestanden staan.',
	'IS_TRANSLATED'				=> 'Reden is vertaald.',
	'IS_TRANSLATED_EXPLAIN'		=> 'De reden is vertaald. Als de titel die u hier heeft ingevoerd, opgegeven is in de meldingsredenen sectie van de taalbestanden, dan zal de vertaalde tekst van de titel en beschrijving gebruikt worden.',

	'NO_REASON'					=> 'Reden kon niet worden gevonden.',
	'NO_REASON_INFO'			=> 'U moet een titel en beschrijving opgeven voor deze reden.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'U kunt niet de standaard reden “Anders” verwijderen.',

	'REASON_ADD'				=> 'Melding-/afkeurings-reden toevoegen',
	'REASON_ADDED'				=> 'Melding-/afkeurings-reden is succesvol toegevoegd.',
	'REASON_ALREADY_EXIST'		=> 'Een reden met deze titel bestaat al, geef een andere titel op voor deze reden.',
	'REASON_DESCRIPTION'		=> 'Beschrijving van reden',
	'REASON_DESC_TRANSLATED'	=> 'Weergegeven beschrijving van reden',
	'REASON_EDIT'				=> 'Melding-/afkeurings-reden wijzigen',
	'REASON_EDIT_EXPLAIN'		=> 'Hier kunt u een reden toevoegen of wijzigen. Als de reden is vertaald dan zal de vertaalde versie gebruikt worden inplaats van de beschrijving die hier is ingevoerd.',
	'REASON_REMOVED'			=> 'Melding-/afkeurings-reden is succesvol verwijderd.',
	'REASON_TITLE'				=> 'Titel van reden',
	'REASON_TITLE_TRANSLATED'	=> 'Weergegeven titel van reden',
	'REASON_UPDATED'			=> 'Melding-/afkeurings-reden is succesvol bijgewerkt.',

	'USED_IN_REPORTS'		=> 'Gebruikt in meldingen',
));

?>