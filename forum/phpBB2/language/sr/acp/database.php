<?php
/**
*
* acp_database [Serbian]
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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Овде можете направити резервну копију свих података везаних за phpBB. Можете сачувати добијену архиву у Вашој <samp>store/</samp> фасцикли или је преузети непосредно. У зависности од конфигурације Вашег сервера можете бити у могућности да сабијете датотеку у неколико облика.',
	'ACP_RESTORE_EXPLAIN'	=> 'Ово ће извести пуно враћање свих phpBB табела из сачуване датотеке. Уколико Ваш сервер подржава можете користити gzip или bzip2 сабијену текстуалну датотеку и биће аутоматски распакована. <strong>УПОЗОРЕЊЕ</strong> Ово ће преписати преко било којих постојећих података. Враћање података може да потраје са обрадом молимо Вас да се не померате са ове странице док се не употпуни. Резервне копије су сачуване у <samp>store/</samp> фасцикли и претпоставља се да су направљене од phpBB система за резервну копију. Враћање резервне копије која није направљена од уграђеног система може али не мора да ради.',

	'BACKUP_DELETE'		=> 'Датотека резервне копије је успешно обрисана.',
	'BACKUP_INVALID'	=> 'Одабрана датотека за резервну копију је неисправна.',
	'BACKUP_OPTIONS'	=> 'Поставке резервне копије',
	'BACKUP_SUCCESS'	=> 'Датотека резервне копије је успешно направљена.',
	'BACKUP_TYPE'		=> 'Тип резервне копије',

	'DATABASE'			=> 'Алати за базу',
	'DATA_ONLY'			=> 'Само подаци',
	'DELETE_BACKUP'		=> 'Обриши резервну копију',
	'DELETE_SELECTED_BACKUP'	=> 'Да ли сигурно желите да обришете изабрану резервну копију?',
	'DESELECT_ALL'		=> 'Одзначи све',
	'DOWNLOAD_BACKUP'	=> 'Преузми резервну копију',

	'FILE_TYPE'			=> 'Тип датотеке',
	'FILE_WRITE_FAIL'	=> 'Немогуће уписати датотеку у складишну фасциклу.',
	'FULL_BACKUP'		=> 'Потпун',

	'RESTORE_FAILURE'		=> 'Датотека резервне копије је можда неисправна.',
	'RESTORE_OPTIONS'		=> 'Поставке за враћање',
	'RESTORE_SUCCESS'		=> 'База је успешно враћена.<br /><br />Ваш форум би требало да се врати у стање када је резервна копија направљена.',

	'SELECT_ALL'			=> 'Означи све',
	'SELECT_FILE'			=> 'Означи датотеку',
	'START_BACKUP'			=> 'Почни прављење резервне копије',
	'START_RESTORE'			=> 'Почни враћање',
	'STORE_AND_DOWNLOAD'	=> 'Сачувај и преузми',
	'STORE_LOCAL'			=> 'Сачувај датотеку локално',
	'STRUCTURE_ONLY'		=> 'Само структура',

	'TABLE_SELECT'		=> 'Избор табела',
	'TABLE_SELECT_ERROR'=> 'Морате изабрати најмање једну табелу.',
));

?>