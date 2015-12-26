<?php
/**
*
* acp_language [Serbian]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
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
	'ACP_FILES'						=> 'Админ језичке датотеке',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Овде можете да инсталирате/уклоните језичке пакете. Задати језички пакет је означен са звездицом (*).',

	'EMAIL_FILES'			=> 'E-mail предлошци',

	'FILE_CONTENTS'				=> 'Садржај датотеке',
	'FILE_FROM_STORAGE'			=> 'Датотека из фасцикле за складиштење',

	'HELP_FILES'				=> 'Датотеке помоћи',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Инсталирани језички пакети',
	'INVALID_LANGUAGE_PACK'		=> 'Одабрани језички пакет изгледа да није исправан. Молимо Вас да проверите језички пакет и поново га додајте на сервер уколико је неопходно.',
	'INVALID_UPLOAD_METHOD'		=> 'Одабрани начин за додавање није ваљан, молимо Вас да изаберете други начин.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Појединости језика су успешно ажуриране.',
	'LANGUAGE_ENTRIES'					=> 'Језички уноси',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Овде можете да промените уносе постојећег језичког пакета или оног који још увек није преведен.<br /><strong>Белешка:</strong> Када једном промените језички пакет, промене ће бити сачуване у посебној фасцикли коју можете преузимати. Промене неће бити виђене од Ваших корисника све док не замените изворне језичке датотеке на Вашем веб простору (њиховим додавањем).',
	'LANGUAGE_FILES'					=> 'Језичке датотеке',
	'LANGUAGE_KEY'						=> 'Језички кључ',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Овај језички пакет је већ инсталиран.',
	'LANGUAGE_PACK_DELETED'				=> 'Језички пакет <strong>%s</strong> је успешно уклоњен. Сви корисници који користе овај језик су враћени на задати језик форума.',
	'LANGUAGE_PACK_DETAILS'				=> 'Појединости језичког пакета',
	'LANGUAGE_PACK_INSTALLED'			=> 'Језички пакет <strong>%s</strong> је успешно инсталиран.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Месни назив',
	'LANGUAGE_PACK_NAME'				=> 'Име',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Одабрани језички пакет не постоји.',
	'LANGUAGE_PACK_USED_BY'				=> 'Коришћен од (укључујући робот)',
	'LANGUAGE_VARIABLE'					=> 'Језичка променљива',
	'LANG_AUTHOR'						=> 'Аутор језичког пакета',
	'LANG_ENGLISH_NAME'					=> 'Енглески назив',
	'LANG_ISO_CODE'						=> 'ISO Код',
	'LANG_LOCAL_NAME'					=> 'Месни назив',

	'MISSING_LANGUAGE_FILE'		=> 'Недостаје језичка датотека: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Недостају језичке променљиве',
	'MODS_FILES'				=> 'Језичке датотеке модова',

	'NO_FILE_SELECTED'				=> 'Нисте изабрали језичку датотеку.',
	'NO_LANG_ID'					=> 'Нисте изабрали језички пакет.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Нисте у могућности да уклоните задати језички пакет.<br />Уколико желите да уклоните овај језички пакет, прво промените задати језик форума.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Нема деинсталираних језичких пакета',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Уклони из фасцикле за складиштење',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Изаберите облик за преузимање',
	'SUBMIT_AND_DOWNLOAD'		=> 'Прихвати и преузми датотеку',
	'SUBMIT_AND_UPLOAD'			=> 'Прихвати и додај датотеку',

	'THOSE_MISSING_LANG_FILES'			=> 'Следеће језичке датотеке недостају у %s језичкој фасцикли',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Следеће језичке променљиве недостају у <strong>%s</strong> језичком пакету',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Деинсталирани језички пакети',

	'UNABLE_TO_WRITE_FILE'		=> 'Датотека не може да буде уписана у %s.',
	'UPLOAD_COMPLETED'			=> 'Додавање је успешно употпуњено.',
	'UPLOAD_FAILED'				=> 'Додавање није успело из непознатих разлога. Можда треба да замените одговарајућу датотеку ручно.',
	'UPLOAD_METHOD'				=> 'Начин додавања',
	'UPLOAD_SETTINGS'			=> 'Поставке додавања',

	'WRONG_LANGUAGE_FILE'		=> 'Одабрана језичка датотека је неисправна.',
));

?>