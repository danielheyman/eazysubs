<?php
/**
*
* acp_prune [Serbian]
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Овај одељак Вам омогућава да бришете или деактивирате кориснике на Вашем форуму. Налози могу бити пречишћени на више начина; по броју порука, најскоријој активности, итд. Мерила се могу комбиновати да би се видело који се налози каче. На пример, можете поткресати кориснике са мање од 10 порука, који су такође и неактивни од 2002-01-01. Други начин, можете заобићи мерила одабира у потпуности уносећи списак корисника (сваког у одвојен ред) непосредно у текстуално поље. Будите опрезни са овом опремом! Када једном обришете корисника, нема начина за повратак.',

	'DEACTIVATE_DELETE'			=> 'Деактивирај или обриши',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Изаберите да ли желите да деактивирате кориснике или да их потпуно обришете. Молимо знајте да обрисани корисници не могу бити враћени!',
	'DELETE_USERS'				=> 'Обриши',
	'DELETE_USER_POSTS'			=> 'Обриши поруке поткресаног корисника',
	'DELETE_USER_POSTS_EXPLAIN' => 'Уклања поруке обрисаних корисника, нема никаквог утицаја ако су корисници деактивирани.',

	'JOINED_EXPLAIN'			=> 'Унесите датум у <kbd>ГГГГ-ММ-ДД</kbd> облику.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Унесите датум у <kbd>ГГГГ-ММ-ДД</kbd> облику. Унесите <kbd>0000-00-00</kbd> за поткресивање корисника који се никада нису пријавили, <em>Пре</em> и <em>После</em> услови ће бити занемарени.',

	'PRUNE_USERS_LIST'				=> 'Корисници за поткресивање',
	'PRUNE_USERS_LIST_DELETE'		=> 'Са изабраним мерилима за поткресивање корисника следећи налози ће бити уклоњени.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Са изабраним мерилима за поткресивање корисника следећи налози ће бити деактивирани.',

	'SELECT_USERS_EXPLAIN'		=> 'Унесите одређена корисничка имена овде, она ће бити коришћена у предности према мерилима горе. Оснивачи не могу бити поткресани.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Одабрани корисници су успешно деактивирани.',
	'USER_DELETE_SUCCESS'		=> 'Одабрани корисници су успешно обрисани.',
	'USER_PRUNE_FAILURE'		=> 'Ниједан корисник не задовољава изабрана мерила.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'Унети датум је погрешан, очекиван је у <kbd>ГГГГ-ММ-ДД</kbd> облику.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Ово ће обрисати све теме које нису послате или прегледане у изабраном броју дана. Уколико не унесете број онда ће све теме бити обрисане. По задатом, неће уклонити теме у којима су гласања у току нити ће уклонити лепљиве и саопштења.',

	'FORUM_PRUNE'		=> 'Поткресивање форума',

	'NO_PRUNE'			=> 'Није поткресан ниједан форум.',

	'SELECTED_FORUM'	=> 'Одабрани форум',
	'SELECTED_FORUMS'	=> 'Одабрани форуми',

	'POSTS_PRUNED'					=> 'Поткресане поруке',
	'PRUNE_ANNOUNCEMENTS'			=> 'Поткресивање саопштења',
	'PRUNE_FINISHED_POLLS'			=> 'Поткресивање затворених гласања',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Уклања теме са гласањима која су окончана.',
	'PRUNE_FORUM_CONFIRM'			=> 'Да ли сигурно желите да поткрешете изабране форуме са изабраним поставкама? Једном уклоњени, не постоји начин да повратите поткресане поруке и теме.',
	'PRUNE_NOT_POSTED'				=> 'Дана од последње поруке',
	'PRUNE_NOT_VIEWED'				=> 'Дана од последњег прегледа',
	'PRUNE_OLD_POLLS'				=> 'Поткресивање старих гласања',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Уклања теме са гласањима у којима није гласано одређени број дана.',
	'PRUNE_STICKY'					=> 'Поткресивање лепљивих',
	'PRUNE_SUCCESS'					=> 'Поткресивање форума је било успешно.',

	'TOPICS_PRUNED'		=> 'Поткресане теме',
));

?>