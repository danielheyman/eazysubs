<?php
/**
*
* captcha_qa [Serbian]
*
* @package language
* @version $Id$
* @copyright (c) 2009 phpBB Group
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
	'CAPTCHA_QA'				=> 'Q&amp;A CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Ово питање је за откривање и спречавање аутоматских пријава.',
	'CONFIRM_QUESTION_WRONG'	=> 'Нисте пружили ваљан одговор на питање за потврду.',

	'QUESTION_ANSWERS'			=> 'Одговори',
	'ANSWERS_EXPLAIN'			=> 'Молимо унесите ваљане одговоре на питање, једно по линији.',
	'CONFIRM_QUESTION'			=> 'Питање',

	'ANSWER'					=> 'Одговор',
	'EDIT_QUESTION'				=> 'Учитај питање',
	'QUESTIONS'					=> 'Питања',
	'QUESTIONS_EXPLAIN'			=> 'Током регистрације, корисници ће бити питани једно од питања назначених овде. За коришћење овог прикључка, бар једно питање мора бити постављено у задатом језику. Ова питања би требало да буду лака за Вашу циљну групу да одговори, but beyond the ability of a bot capable of running a Google™ search. Коришћење великог и редовно мењаног комплета питања ће постићи најбоље резултате. Омогућите стриктну поставку уколико Ваше питање указује на тачке и зарезе и велика слова.',
	'QUESTION_DELETED'			=> 'Питање обрисано',
	'QUESTION_LANG'				=> 'Језик',
	'QUESTION_LANG_EXPLAIN'		=> 'Језик на којем су ова питања и њихови одговори написани.',
	'QUESTION_STRICT'			=> 'Стриктна провера',
	'QUESTION_STRICT_EXPLAIN'	=> 'Уколико је омогућено, велика слова и празни простори ће такође бити укључени.',

	'QUESTION_TEXT'				=> 'Питање',
	'QUESTION_TEXT_EXPLAIN'		=> 'Питање које ће бити питано на регистрацији.',

	'QA_ERROR_MSG'				=> 'Молимо попуните сва поља и унесите бар један одговор.',
	'QA_LAST_QUESTION'			=> 'Не можете да обришете сва питања док је прикључак активан.',

));

?>