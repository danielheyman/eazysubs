<?php
/**
* acp_permissions_phpbb (phpBB Permission Set) [Serbian]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

/**
*	MODDERS PLEASE NOTE
*
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> 'Поступци',
		'content'		=> 'Садржај',
		'forums'		=> 'Форуми',
		'misc'			=> 'Разно',
		'permissions'	=> 'Дозволе',
		'pm'			=> 'Приватне поруке',
		'polls'			=> 'Гласања',
		'post'			=> 'Поруке',
		'post_actions'	=> 'Поступци порука',
		'posting'		=> 'Писање порука',
		'profile'		=> 'Профил',
		'settings'		=> 'Поставке',
		'topic_actions'	=> 'Поступци тема',
		'user_group'	=> 'Корисници &amp; Групе',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Дозволе корисника',
		'a_'			=> 'Дозволе администратора',
		'm_'			=> 'Дозволе уредника',
		'f_'			=> 'Дозволе форума',
		'global'		=> array(
			'm_'			=> 'Дозволе општих уредника',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Може прегледати профиле, списак чланова и На вези списак', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'Може променити корисничко име', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'Може променити лозинку', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'Може променити e-mail адресу', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'Може променити грб', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'Може променити задату корисничку групу', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'Може додавати прилоге', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'Може преузимати датотеке', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'Може сачувати нацрте', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'Може искључити пречистаче речи', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'Може користити потпис', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'Може слати приватне поруке', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'Може слати поруке вишеструким корисницима', 'cat' => 'pm'),
	'acl_u_masspm_group'=> array('lang' => 'Може слати поруке групама', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'Може да чита приватне поруке', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'Може да учита сопствене приватне поруке', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'Може да уклони приватне поруке из сопствене фасцикле', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'Може да прослеђује приватне поруке', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'Може да шаље приватне поруке преко e-mail', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'Може да штампа приватне поруке', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'Може да дода прилог у приватне поруке', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'Може да преузима датотеке у приватним порукама', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'Може да користи ББКод у приватним порукама', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'Може да користи смајлиће у приватним порукама', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'Може да користи [img] ББКод таг у приватним порукама', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'Може да користи [flash] ББКод таг у приватним порукама', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'Може да шаље e-mails', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'Може да шаље тренутне поруке', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'Може да игнорише ограничење поплаве', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'Може да сакрије статус На вези', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'Може да види сакривене кориснике На вези', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'Може да претражује форум', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'Може да види форум', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'Може да чита форум', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'Може да започне нову тему', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'Може да одговара на теме', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'Може да користи тема/порука иконице', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'Може да шаље саопштења', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'Може да шаље лепљиве', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'Може да прави гласања', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'Може да гласа', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'Може да измени постојећи глас', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'Може да додаје прилоге', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'Може да преузима датотеке', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'Може да користи потписе', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'Може да користи ББКод', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'Може да користи смајлиће', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'Може да користи [img] ББКод таг', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'Може да користи [flash] ББКод таг', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'Може да учита сопствене поруке', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'Може да обрише сопствене поруке', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'Може да закључа сопствене теме', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'Може да гура теме', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'Може да пријави поруке', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'Може да прати форум', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'Може да штампа теме', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'Може да шаље теме на e-mail', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'Може да претражује форум', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'Може да игнорише ограничење поплаве', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'Повећа бројач порука<br /><em>Молимо знајте да ова поставка делује само на нове поруке.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'Може да шаље поруке без одобрења', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'Може да учита поруке', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'Може да брише поруке', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'Може да одобрава поруке', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'Може да затвори и брише пријаве', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'Може да промени аутора поруке', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'Може да помера теме', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'Може да закључа теме', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'Може да раздвоји теме', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'Може да споји теме', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'Може видети појединости поруке', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'Може давати опомене<br /><em>Ова поставка је додељена само уопште. Није основана на форумима.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'Може управљати забранама<br /><em>Ова поставка је додељена само уопште. Није основана на форумима.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'Може да мења поставке форума/проверава за надоградњу', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'Може да мења сервер/комуникација поставке', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'Може да мења Jabber поставке', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'Може да прегледа php поставке', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'Може да управља форумима', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'Може да дода нове форуме', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'Може да брише форуме', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'Може да поткресује форуме', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'Може да мења иконице тема/порука и смајлиће', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'Може да мења пречистаче речи', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'Може да одређује ББКод тагове', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'Може да мења поставке у вези прилога', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'Може да управља корисницима<br /><em>Ово такође укључује виђење корисниковог прегледача на списку На вези.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'Може брисати/поткресивати кориснике', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'Може да управља групама', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'Може да додаје нове групе', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'Може да брише групе', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'Може да управља чиновима', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'Може да управља властитим пољима профила', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'Може да управља недозвољеним именима', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'Може да управља забранама', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'Може да види маске дозвола', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'Може да мења дозволе за појединачне групе', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'Може да мења дозволе за појединачне кориснике', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'Може да мења дозволе форума', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'Може да мења дозволе уредника', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'Може да мења дозволе администратора', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'Може да мења дозволе корисника', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'Може да управља ролама', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'Може да користи друге дозволе', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'Може да управља стиловима', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'Може да прегледа записе', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'Може да брише записе', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'Може да управља модулима', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'Може да управља језичким пакетима', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'Може да шаље масовни e-mail', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'Може да управља роботима', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'Може да управља извештај/одбијања разлозима', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'Може да прави резервну копију/поврати базу', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'Може да управља позадинама претраге и поставкама', 'cat' => 'misc'),
));

?>