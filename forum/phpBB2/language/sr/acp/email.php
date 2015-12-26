<?php
/**
*
* acp_email [Serbian]
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Овде можете послати e-mail свим корисницима или свим корисницима одређене групе <strong>који имају поставку пријема масовних e-mails омогућену</strong>. Како бисте ово постигли e-mail ће бити разаслат са администраторове e-mail адресе коју сте дали, са BCCом послатим свим примаоцима. Задата поставка је да се укључи само 50 прималаца за такав e-mail, а за више прималаца више e-mails ће бити послато. Ако шаљете мејл великој групи људи молимо Вас да након потврде будете стрпљиви и не заустављате страницу док се поступак не заврши. Уобичајено је да је за слање масовног мејла потребно пуно времена, бићете обавештени када се поступак заврши.',
	'ALL_USERS'						=> 'Сви корисници',

	'COMPOSE'				=> 'Писање поруке',

	'EMAIL_SEND_ERROR'		=> 'Била је једна или више грешака током слања e-mail. Молимо Вас да проверите %sЗапис грешака%s за појединачне грешке о порукама.',
	'EMAIL_SENT'			=> 'Ова порука је послата.',
	'EMAIL_SENT_QUEUE'		=> 'Ова порука чека на слање.',

	'LOG_SESSION'			=> 'Запиши мејл сесију у критични запис',

	'SEND_IMMEDIATELY'		=> 'Пошаљи одмах',
	'SEND_TO_GROUP'			=> 'Пошаљи групи',
	'SEND_TO_USERS'			=> 'Пошаљи корисницима',
	'SEND_TO_USERS_EXPLAIN'	=> 'Уношење имена овде ће поништити утицај било које групе изабране изнад. Унесите свако корисничко име у нови ред.',
	
	'MAIL_HIGH_PRIORITY'	=> 'Висок',
	'MAIL_LOW_PRIORITY'		=> 'Низак',
	'MAIL_NORMAL_PRIORITY'	=> 'Нормалан',
	'MAIL_PRIORITY'			=> 'Приоритет мејла',
	'MASS_MESSAGE'			=> 'Ваша порука',
	'MASS_MESSAGE_EXPLAIN'	=> 'Молимо знајте да можете унети само plain text. Све остало ће бити уклоњено пре слања.',
	
	'NO_EMAIL_MESSAGE'		=> 'Морате унети поруку.',
	'NO_EMAIL_SUBJECT'		=> 'Морате одредити наслов за Вашу поруку.',
));

?>