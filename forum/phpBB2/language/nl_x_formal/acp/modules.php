<?php
/**
*
* acp_modules [Dutch]
*
* @package language
* @version $Id: modules.php 204 2009-10-11 17:04:22Z rotsblok $
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Hier kunt u alle modules beheren. Vergeet niet dat het beheerderspaneel een drie-niveau menustructuur heeft (Categorie -> Categorie -> Module) terwijl de andere beschikken over een twee niveaus menustructuur (Categorie -> Module) wat behouden moet blijven. Vergeet ook niet dat het mogelijk is dat u uwzelf kunt uitsluiten als u de modules die verantwoordelijk zijn voor het beheren van de modules verwijderd of uitschakeld.',
	'ADD_MODULE'					=> 'Module toevoegen',
	'ADD_MODULE_CONFIRM'			=> 'Weet u zeker dat u de geselecteerde module wilt toevoegen met de geselecteerde mode?',
	'ADD_MODULE_TITLE'				=> 'Module toevoegen',

	'CANNOT_REMOVE_MODULE'	=> 'Niet in staat om de module te verwijderen, het heeft onderligende modules. Verwijder alle alle onderliggende modules voordat u verder gaat met deze actie.',
	'CATEGORY'				=> 'Categorie',
	'CHOOSE_MODE'			=> 'Modulemode kiezen',
	'CHOOSE_MODE_EXPLAIN'	=> 'Kies de modulemode die gebruikt moet worden.',
	'CHOOSE_MODULE'			=> 'Module kiezen',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Kies het bestand dat wordt opgeroepen door deze module.',
	'CREATE_MODULE'			=> 'Nieuwe module aanmaken',

	'DEACTIVATED_MODULE'	=> 'Module deactiveren',
	'DELETE_MODULE'			=> 'Module verwijderen',
	'DELETE_MODULE_CONFIRM'	=> 'Weet u zeker dat u deze module wilt verwijderen?',

	'EDIT_MODULE'			=> 'Module wijzigen',
	'EDIT_MODULE_EXPLAIN'	=> 'Hier kunt u gespecificeerde module-instellingen invoeren.',

	'HIDDEN_MODULE'			=> 'Verborgen module',

	'MODULE'					=> 'Module',
	'MODULE_ADDED'				=> 'Module is succesvol toegevoegd.',
	'MODULE_DELETED'			=> 'Module is succesvol verwijderd.',
	'MODULE_DISPLAYED'			=> 'Module weergeven',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Als u niet wilt dat deze module wordt weergegeven, maar u wilt het wel gebruiken, stel dit dan in op nee.',
	'MODULE_EDITED'				=> 'Module is succesvol gewijzigd.',
	'MODULE_ENABLED'			=> 'Module inschakelen',
	'MODULE_LANGNAME'			=> 'Module taalnaam',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Voer hier de naam in van de module-naam die moet worden weergegeven. Gebruik een taalvariabele als de naam voorkomt in een taalbestand.',
	'MODULE_TYPE'				=> 'Moduletype',

	'NO_CATEGORY_TO_MODULE'	=> 'Niet in staat om de categorie terug te zetten in een module. Verwijder/verplaats alle modules die onder deze categorie zitten, voordat u verder gaat met deze actie.',
	'NO_MODULE'				=> 'Er is geen module gevonden.',
	'NO_MODULE_ID'			=> 'Er is geen module-id opgegeven.',
	'NO_MODULE_LANGNAME'	=> 'Er is geen taalnaam voor de module opgegeven.',
	'NO_PARENT'				=> 'Geen hoofdmodule',

	'PARENT'				=> 'Hoofdmodule',
	'PARENT_NO_EXIST'		=> 'Hoofdmodule bestaat niet.',

	'SELECT_MODULE'			=> 'Een module selecteren',
));

?>