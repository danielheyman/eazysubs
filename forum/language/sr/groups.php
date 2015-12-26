<?php
/**
*
* groups [Serbian]
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
	'ALREADY_DEFAULT_GROUP'		=> 'Одабрана група је већ Ваша задата група.',
	'ALREADY_IN_GROUP'			=> 'Већ сте члан одабране групе.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Већ сте тражили да се придружите одабраној групи.',

	'CANNOT_JOIN_GROUP'			=> 'Не можете се придружити овој групи. Можете се придружити само отвореним и слободнo отвореним групама.',
	'CANNOT_RESIGN_GROUP'		=> 'Не можете се повући из ове групе. Можете се повући само из отворених и слободнo отворених група.',
	'CHANGED_DEFAULT_GROUP'		=> 'Успешно сте променили задату групу.',

	'GROUP_AVATAR'						=> 'Грб групе',
	'GROUP_CHANGE_DEFAULT'				=> 'Да ли сигурно желите да промените Ваше задато чланство у групи “%s”?',
	'GROUP_CLOSED'						=> 'Затворена',
	'GROUP_DESC'						=> 'Опис групе',
	'GROUP_HIDDEN'						=> 'Сакривена',
	'GROUP_INFORMATION'					=> 'Подаци о корисничкој групи',
	'GROUP_IS_CLOSED'					=> 'Ово је затворена група, нови чланови се могу придружити само на позив вође групе.',
	'GROUP_IS_FREE'						=> 'Ово је слободно отворена група, сви нови чланови су добро дошли.',
	'GROUP_IS_HIDDEN'					=> 'Ово је сакривена група, само чланови ове групе могу прегледати њене чланове.',
	'GROUP_IS_OPEN'						=> 'Ово је отворена група, чланови се могу пријавити за приступ.',
	'GROUP_IS_SPECIAL'					=> 'Ово је посебна група, посебним групама управљају администратори форума.',
	'GROUP_JOIN'						=> 'Придружи се групи',
	'GROUP_JOIN_CONFIRM'				=> 'Да ли сигурно желите да се придружите одабраној групи?',
	'GROUP_JOIN_PENDING'				=> 'Захтев за приступ групи',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Да ли сигурно желите да пошаљете захтев за придруживање одабраној групи?',
	'GROUP_JOINED'						=> 'Успешно сте се придружили одабраној групи.',
	'GROUP_JOINED_PENDING'				=> 'Успешно сте послали захтев за чланство у групи. Молимо Вас да сачекате вођу групе да одобри Ваше чланство.',
	'GROUP_LIST'						=> 'Управљање члановима',
	'GROUP_MEMBERS'						=> 'Чланови групе',
	'GROUP_NAME'						=> 'Назив групе',
	'GROUP_OPEN'						=> 'Отворена',
	'GROUP_RANK'						=> 'Чин групе',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Повући чланство у групи',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Да ли сигурно желите да се повучете из чланства у одабраној групи?',
	'GROUP_RESIGN_PENDING'				=> 'Повуци захтев на чекању одобрења за чланство у групи',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Да ли сигурно желите да повучете Ваш захтев на чекању за чланство у одабраној групи?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Успешно сте уклоњени из одабране групе.',
	'GROUP_RESIGNED_PENDING'			=> 'Ваш захтев на чекању за чланство је успешно уклоњен из одабране групе.',
	'GROUP_TYPE'						=> 'Тип групе',
	'GROUP_UNDISCLOSED'					=> 'Сакривена група',
	'FORUM_UNDISCLOSED'					=> 'Уређивање сакривеног(их) форума',

	'LOGIN_EXPLAIN_GROUP'	=> 'Треба да се пријавите за преглед појединости о групи.',

	'NO_LEADERS'					=> 'Нисте вођа ниједне групе.',
	'NOT_LEADER_OF_GROUP'			=> 'Захтевани поступак се не може извршити јер нисте вођа одабране групе.',
	'NOT_MEMBER_OF_GROUP'			=> 'Захтевани поступак се не може извршити јер нисте члан одабране групе или Ваше чланство још није одобрено.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Није Вам омогућено да се повучете из Ваше задате групе.',
	
	'PRIMARY_GROUP'		=> 'Основна група',

	'REMOVE_SELECTED'		=> 'Уклони одабрано',

	'USER_GROUP_CHANGE'			=> 'Из “%1$s” групе у “%2$s”',
	'USER_GROUP_DEMOTE'			=> 'Откажи вођство',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Да ли сигурно желите да откажете вођство у одабраној групи?',
	'USER_GROUP_DEMOTED'		=> 'Успешно сте отказали Ваше вођство.',
));

?>