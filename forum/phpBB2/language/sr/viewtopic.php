<?php
/**
*
* viewtopic [Serbian]
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
	'ATTACHMENT'						=> 'Прилог',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Могућност прилога је искључена.',

	'BOOKMARK_ADDED'		=> 'Успешно сте убацили тему у белешке.',
	'BOOKMARK_ERR'			=> 'Бележење теме није успело. Молимо пробајте поново.',
	'BOOKMARK_REMOVED'		=> 'Успешно сте уклонили тему из белешки.',
	'BOOKMARK_TOPIC'		=> 'Тему у белешке',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Уклони из белешки',
	'BUMPED_BY'				=> 'Задње погурана од %1$s у %2$s.',
	'BUMP_TOPIC'			=> 'Погурај тему',

	'CODE'					=> 'Код',
	'COLLAPSE_QR'			=> 'Сакриј брзи одговор',

	'DELETE_TOPIC'			=> 'Обриши тему',
	'DOWNLOAD_NOTICE'		=> 'Немате потребне дозволе да прегледате прилоге у овој поруци.',

	'EDITED_TIMES_TOTAL'	=> 'Последње учитавање од %1$s дана %2$s, учитано %3$d пута укупно.',
	'EDITED_TIME_TOTAL'		=> 'Последње учитавање од %1$s дана %2$s, учитано %3$d пут.',
	'EMAIL_TOPIC'			=> 'Пошаљи тему пријатељу у e-mail',
	'ERROR_NO_ATTACHMENT'	=> 'Одабрани прилог више не постоји.',

	'FILE_NOT_FOUND_404'	=> 'Датотека <strong>%s</strong> не постоји.',
	'FORK_TOPIC'			=> 'Копирај тему',
	'FULL_EDITOR'			=> 'Пуни уређивач',
	
	'LINKAGE_FORBIDDEN'		=> 'Нисте овлашћени да прегледате, преузмете или везујете од/до ове веб странице.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Обавештени сте о овој теми, молимо Вас да се пријавите како бисте је прегледали.',
	'LOGIN_VIEWTOPIC'		=> 'Форум захтева да будете регистровани и пријављени како бисте прегледали ову тему.',

	'MAKE_ANNOUNCE'				=> 'Промени у “Саопштење”',
	'MAKE_GLOBAL'				=> 'Промени у “Глобално”',
	'MAKE_NORMAL'				=> 'Промени у “Обичну тему”',
	'MAKE_STICKY'				=> 'Промени у “Лепљиву”',
	'MAX_OPTIONS_SELECT'		=> 'Можете изабрати највише <strong>%d</strong> поставки',
	'MAX_OPTION_SELECT'			=> 'Можете изабрати највише <strong>1</strong> поставку',
	'MISSING_INLINE_ATTACHMENT'	=> 'Прилог <strong>%s</strong> више није доступан',
	'MOVE_TOPIC'				=> 'Помери тему',

	'NO_ATTACHMENT_SELECTED'=> 'Нисте изабрали прилог за преузимање или преглед.',
	'NO_NEWER_TOPICS'		=> 'Нема новијих тема у овом форуму.',
	'NO_OLDER_TOPICS'		=> 'Нема старијих тема у овом форуму.',
	'NO_UNREAD_POSTS'		=> 'Нема нових непрочитаних порука за ову тему.',
	'NO_VOTE_OPTION'		=> 'Морате изабрати понуду када гласате.',
	'NO_VOTES'				=> 'Нема гласова',

	'POLL_ENDED_AT'			=> 'Гласање се завршава %s',
	'POLL_RUN_TILL'			=> 'Гласање траје до %s',
	'POLL_VOTED_OPTION'		=> 'Гласали сте за ову понуду',
	'PRINT_TOPIC'			=> 'Преглед за штампу',

	'QUICK_MOD'				=> 'Брзи-мод алати',
	'QUICKREPLY'			=> 'Брзи одговор',
	'QUOTE'					=> 'Цитирај',

	'REPLY_TO_TOPIC'		=> 'Одговори на тему',
	'RETURN_POST'			=> '%sПовратак на поруку%s',

	'SHOW_QR'				=> 'Брзи одговор',
	'SUBMIT_VOTE'			=> 'Гласај',

	'TOTAL_VOTES'			=> 'Укупно гласова',

	'UNLOCK_TOPIC'			=> 'Откључај тему',

	'VIEW_INFO'				=> 'Појединости поруке',
	'VIEW_NEXT_TOPIC'		=> 'Следећа тема',
	'VIEW_PREVIOUS_TOPIC'	=> 'Претходна тема',
	'VIEW_RESULTS'			=> 'Преглед резултата',
	'VIEW_TOPIC_POST'		=> '1 порука',
	'VIEW_TOPIC_POSTS'		=> '%d порука',
	'VIEW_UNREAD_POST'		=> 'Прва непрочитана порука',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'Ваш глас је прихваћен.',
	'VOTE_CONVERTED'		=> 'Мењање гласова није подржано за пребачена гласања.',

));

?>