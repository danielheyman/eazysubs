<?php
/**
*
* acp_profile [Dutch]
*
* @package language
* @version $Id: profile.php 204 2009-10-11 17:04:22Z rotsblok $
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Het aangepaste profielveld is succesvol toegevoegd.',
	'ALPHA_ONLY'			=> 'Alleen alfanumeriek',
	'ALPHA_SPACERS'			=> 'Alfanumeriek en scheidingstekens',
	'ALWAYS_TODAY'			=> 'Altijd de huidige datum gebruiken',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Voer nu uw opties in',
	'BOOL_TYPE_EXPLAIN'		=> 'Bepaal het type, een selectievakje of keuzerondjes. Een selectievakje zal alleen worden weergegeven als het is aangevinkt voor een gebruiker. In dat geval zal de <strong>tweede</strong> taaloptie gebruikt worden. Keuzerondjes zullen worden weergegeven wat ook hun waarde is.',

	'CHANGED_PROFILE_FIELD'		=> 'Profielveld is succesvol gewijzigd.',
	'CHARS_ANY'					=> 'Elk teken',
	'CHECKBOX'					=> 'Selectievakje',
	'COLUMNS'					=> 'Kolommen',
	'CP_LANG_DEFAULT_VALUE'		=> 'Standaardwaarde',
	'CP_LANG_EXPLAIN'			=> 'Veldbeschrijving', // beschrijving van veld? beter of zo laten???
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'De uitleg voor dit veld die wordt weergegeven aan de gebruiker.',
	'CP_LANG_NAME'				=> 'Veldnaam-/titel die wordt weergegeven aan de gebruiker',
	'CP_LANG_OPTIONS'			=> 'Opties',
	'CREATE_NEW_FIELD'			=> 'Nieuw veld aanmaken',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Ten minste één profielveld is nog niet vertaald. Voer de verplichte informatie in door te klikken op de “vertaal” link.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Standaardtaal [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'De taalwaarden voor de standaardtaal zijn niet opgegeven voor dit profielveld.',
	'DEFAULT_VALUE'					=> 'Standaardwaarde',
	'DELETE_PROFILE_FIELD'			=> 'Profielveld verwijderen',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Weet u zeker dat u dit profielveld wilt verwijderen?',
	'DISPLAY_AT_PROFILE'			=> 'Weergeven in het gebruikerspaneel',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'De gebruiker is in staat om het profielveld te wijzigen in het gebruikerspaneel.',
	'DISPLAY_AT_REGISTER'			=> 'Weergeven op de registratie-pagina',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Als deze optie is ingeschakeld, zal het veld worden weergegeven tijdens de registratie.',
	'DISPLAY_ON_VT'					=> 'Weergeven op de onderwerppagina',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'Als deze optie is ingeschakeld, zal het veld worden weergegeven in het mini-profiel op de onderwerppagina.',
	'DISPLAY_PROFILE_FIELD'			=> 'Profielveld publiekelijk weergeven',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Het profielveld zal worden weergegeven in alle locaties die zijn toegestaan in de laadinstellingen. Als u dit instelt op “nee” zal het veld niet worden weergegeven op de onderwerppagina’s, profielen en de ledenlijst.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'U kunt uw opties hier nu invoeren, elke optie moet op één nieuwe regel beginnen.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Vergeet niet dat u uw tekstopties kunt wijzigen en dat u ook nieuwe opties kunt toevoegen op het einde. Het is niet geadviseerd op nieuwe opties toe te voegen tussen bestaande opties - dit kan resulteren in het toewijzen van verkeerde opties aan uw gebruikers. Dit kan ook gebeuren als u tussen opties verwijderd. Het verwijderen van opties van het einde, zal resulteren dat de toegewezen items van gebruikers zullen worden teruggedraaid naar de standaardwaarde.',
	'EMPTY_FIELD_IDENT'				=> 'U moet een veld-ID invoeren.',
	'EMPTY_USER_FIELD_NAME'			=> 'U moet een veldnaam/titel invoeren.',
	'ENTRIES'						=> 'Waarden',
	'EVERYTHING_OK'					=> 'Alles oké',

	'FIELD_BOOL'				=> 'Boolean (Ja/Nee)',
	'FIELD_DATE'				=> 'Datum',
	'FIELD_DESCRIPTION'			=> 'Veldbeschrijving',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'De uitleg voor dit veld die gepresenteerd wordt aan de gebruiker.',
	'FIELD_DROPDOWN'			=> 'Selectiemenu',
	'FIELD_IDENT'				=> 'Veld-ID',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Het gekozen veld-ID bestaat al. Kies een andere naam.',
	'FIELD_IDENT_EXPLAIN'		=> 'Het veld-ID is een naam om het profielveld te herkennen in de database en in de templates.',
	'FIELD_INT'					=> 'Cijfers',
	'FIELD_LENGTH'				=> 'Lengte van invoerveld',
	'FIELD_NOT_FOUND'			=> 'Profielveld niet gevonden.',
	'FIELD_STRING'				=> 'Tekstveld met één regel',
	'FIELD_TEXT'				=> 'Tekstveld',
	'FIELD_TYPE'				=> 'Veldtype',
	'FIELD_TYPE_EXPLAIN'		=> 'U kunt het veldtype later niet wijzigen.',
	'FIELD_VALIDATION'			=> 'Veldvalidatie',
	'FIRST_OPTION'				=> 'Eerste optie',

	'HIDE_PROFILE_FIELD'			=> 'Profielveld verbergen',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Verberg het profielveld voor alle andere gebruikers behalve de gebruiker zelf, beheerders en moderators zullen dit veld nog steeds kunnen zien. Als de optie weergeven in het gebruikerspaneel is uitgeschakeld, zal de gebruiker dit veld niet zien en kan het ook niet wijzigen, het veld kan dan alleen worden gewijzigd door de beheerders.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Het veld-ID kan alleen kleine letters van a tot z en _ bevatten.',
	'INVALID_FIELD_IDENT_LEN'	=> 'Het veld-ID kan alleen 17 tekens lang zijn.',
	'ISO_LANGUAGE'				=> 'Taal [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Taalspecifieke opties [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> 'Maximum aantal tekens',
	'MAX_FIELD_NUMBER'		=> 'Hoogst toegestane cijfer',
	'MIN_FIELD_CHARS'		=> 'Minimum aantal tekens',
	'MIN_FIELD_NUMBER'		=> 'Laagst toegestane cijfer',

	'NO_FIELD_ENTRIES'			=> 'Er is geen waarden opgegeven',
	'NO_FIELD_ID'				=> 'Geen veld-ID opgegeven.',
	'NO_FIELD_TYPE'				=> 'Er is geen veldtype opgegeven.',
	'NO_VALUE_OPTION'			=> 'Optie die gelijk is aan een niet ingevoerde waarde',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Waarde voor een niet ingevoerde waarde. Als het veld verplicht is krijgt de gebruiker een fout-melding als hij de optie die hier geselecteerd is kiest.',
	'NUMBERS_ONLY'				=> 'Alleen cijfers (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Basisopties',
	'PROFILE_FIELD_ACTIVATED'	=> 'Profielveld succesvol geactiveerd.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Profielveld succesvol gedeactiveerd.',
	'PROFILE_LANG_OPTIONS'		=> 'Specifieke taalopties', // taalspecifieke opties wat is mooier??
	'PROFILE_TYPE_OPTIONS'		=> 'Specifieke profieltype opties',

	'RADIO_BUTTONS'				=> 'Keuzerondjes', // Radio buttons klopt dit ?
	'REMOVED_PROFILE_FIELD'		=> 'Profielveld succesvol verwijderd.',
	'REQUIRED_FIELD'			=> 'Verplicht veld',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Verplicht dat het profielveld moet worden ingevuld door een gebruiker of door een beheerder. Als de optie weergegeven op de registratie-pagina is uitgeschakeld, zal het veld alleen worden verplicht wanneer een gebruiker het profiel wijzigt.',
	'ROWS'						=> 'Rijen',

	'SAVE'							=> 'Opslaan',
	'SECOND_OPTION'					=> 'Tweede optie',
	'STEP_1_EXPLAIN_CREATE'			=> 'Hier kunt u de eerste basisparameters invoeren van uw nieuwe profielveld. Deze informatie is nodig voor de tweede stap, waar u de overgebleven opties kunt instellen en uw profielveld verder kan aanpassen.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Hier kunt u de basisparameters van uw profielveld wijzigen. De relevante opties worden herberekend bij de volgende stap.',
	'STEP_1_TITLE_CREATE'			=> 'Profielveld toevoegen',
	'STEP_1_TITLE_EDIT'				=> 'Profielveld wijzigen',
	'STEP_2_EXPLAIN_CREATE'			=> 'Hier kunt u sommige standaardopties bepalen die u kunt aanpassen.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Hier kunt u sommige standaardopties wijzigen.<br /><strong>Vergeet niet dat dat wijzigingen aan profielvelden geen effect zullen hebben op bestaande profielvelden die al ingevoerd zijn door uw gebruikers.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Specifieke profieltype opties',
	'STEP_2_TITLE_EDIT'				=> 'Specifieke profieltype opties',
	'STEP_3_EXPLAIN_CREATE'			=> 'Omdat u meer als één forumtaal heeft geïnstalleerd, moet u nu ook de overgebleven taalitems opgeven. Het profielveld zal werken met de ingeschakelde standaardtaal, u kunt ook later de overgebleven taalitems opgeven.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Omdat u meer als één forumtaal heeft geïnstalleerd, kunt u nu ook de overgebleven taalitems toevoegen of wijzigen. Het profielveld zal werken met de ingeschakelde standaardtaal.',
	'STEP_3_TITLE_CREATE'			=> 'Overgebleven taalopties',
	'STEP_3_TITLE_EDIT'				=> 'Taalopties',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Voer een standaardzin die moet worden weergegeven als een standaardwaarde. Laat het leeg wanneer u wilt om het eerst leeg te laten weergeven.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Voer een standaardtekst in die zal worden weergegeven als een standaardwaarde. Laat het leeg wanneer u wilt om het eerst leeg te laten weergeven.',
	'TRANSLATE'						=> 'Vertaal',

	'USER_FIELD_NAME'	=> 'Veldnaam-/titel die weergegeven wordt aan de gebruiker',

	'VISIBILITY_OPTION'				=> 'Zichtbaarheidopties',
));

?>