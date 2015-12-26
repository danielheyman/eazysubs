<?php
/**
*
* captcha_qa [Ukrainian]
*
* @package language
* @version $Id: captcha_qa.php 9966 2009-08-12 15:12:03Z Kellanved $
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
	'CAPTCHA_QA' => 'CAPTCHA запитання-відповідь',
	'CONFIRM_QUESTION_EXPLAIN' => 'Це запитання призначено для виявлення і запобігання автоматичних реєстрацій.',
	'CONFIRM_QUESTION_WRONG' => 'Ви ввели неправильну відповідь на запитання.',

	'QUESTION_ANSWERS' => 'Відповіді',
	'ANSWERS_EXPLAIN' => 'Введіть, будь-ласка, правильні відповіді на запитання. Кожну відповідь на окремому рядку.',
	'CONFIRM_QUESTION' => 'Запитання',

	'ANSWER' => 'Відповідь',
	'EDIT_QUESTION' => 'Редагування запитання',
	'QUESTIONS' => 'Запитання',
	'QUESTIONS_EXPLAIN' => 'Під час реєстрації користувачеві буде запропоновано одне із зазначених тут запитань. Для використання даного модуля, принаймні одне запитання повинно бути встановлено в мові за замовчуванням. Ці питання повинні бути простими для вашої потенційної аудиторії, але, в той же час, складні для бота, здатного почати пошук у Google. Використання великого і часто змінного набору питань дасть найкращі результати. Увімкніть сувору перевірку, якщо ваше питання залежить від знаків пунктуації або регістру букв.',
	'QUESTION_DELETED' => 'Запитання видалено',
	'QUESTION_LANG' => 'Мова',
	'QUESTION_LANG_EXPLAIN' => 'Мова, на якій написані це запитання і відповідь.',
	'QUESTION_STRICT' => 'Сувора перевірка',
	'QUESTION_STRICT_EXPLAIN' => 'Якщо увімкнено, при перевірці відповідей будуть враховуватися регістр букв та пробіли.',

	'QUESTION_TEXT' => 'Запитання',
	'QUESTION_TEXT_EXPLAIN' => 'Запитання, яке буде задано при реєстрації.',

	'QA_ERROR_MSG' => 'Заповніть усі поля, і введіть не менше однієї відповіді.',
	'QA_LAST_QUESTION'			=> 'Ви не можете видалити усі запитання, допоки плагін є активним.',
));

?>