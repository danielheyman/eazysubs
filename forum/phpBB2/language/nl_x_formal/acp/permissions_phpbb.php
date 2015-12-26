<?php
/**
* acp_permissions_phpbb (phpBB Permission Set) [Dutch]
*
* @package language
* @version $Id: permissions_phpbb.php 199 2009-10-08 20:08:49Z Raimon $
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
		'actions'		=> 'Acties',
		'content'		=> 'Inhoud',
		'forums'		=> 'Forums',
		'misc'			=> 'Algemeen',
		'permissions'	=> 'Permissies',
		'pm'			=> 'Privéberichten',
		'polls'			=> 'Peilingen',
		'post'			=> 'Bericht',
		'post_actions'	=> 'Berichtacties',
		'posting'		=> 'Plaatsing',
		'profile'		=> 'Profiel',
		'settings'		=> 'Instellingen',
		'topic_actions'	=> 'Onderwerp acties',
		'user_group'	=> 'Gebruikers en groepen',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Gebruikerspermissies',
		'a_'			=> 'Beheerderspermissies',
		'm_'			=> 'Moderatorpermissies',
		'f_'			=> 'Forumpermissies',
		'global'		=> array(
			'm_'			=> 'Algemene moderatorpermissies',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Kan profielen, ledenlijst en wie is er online zien', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'Kan gebruikersnaam wijzigen', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'Kan wachtwoord wijzigen', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'Kan e-mailadres wijzigen', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'Kan avatar wijzigen', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'Kan standaardgroep wijzigen', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'Kan bestanden toevoegen', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'Kan bestanden die zijn toegevoegd downloaden', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'Kan conceptberichten opslaan', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'Kan woordcensuur uitschakelen', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'Kan onderschrift gebruiken', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'Kan privéberichten versturen', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'Kan privéberichten naar meerdere gebruikers versturen', 'cat' => 'pm'),
	'acl_u_masspm_group'=> array('lang' => 'Kan privéberichten naar groepen versturen', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'Kan privéberichten lezen', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'Kan eigen privéberichten wijzigen', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'Kan privéberichten uit eigen map verwijderen', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'Kan privéberichten doorsturen', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'Kan privéberichten e-mailen', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'Kan privéberichten afdrukken', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'Kan bestanden aan privéberichten toevoegen', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'Kan bestanden die toegevoegd zijn aan privéberichten downloaden', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'Kan BBCode gebruiken in privéberichten', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'Kan smileys gebruiken in privéberichten', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'Kan in privéberichten de [img] BBCode-tag gebruiken', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'Kan in privéberichten de [flash] BBCode-tag gebruiken', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'Kan e-mailberichten versturen', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'Kan IM-berichten versturen', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'Kan de vloedbeperking negeren', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'Kan online-status verbergen', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'Kan verborgen online gebruikers zien', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'Kan het forum doorzoeken', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'Kan forum zien', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'Kan forum lezen', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'Kan nieuwe onderwerpen plaatsen', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'Kan op onderwerpen reageren', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'Kan onderwerp/berichtpictogrammen gebruiken', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'Kan mededelingen plaatsen', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'Kan stickies plaatsen', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'Kan peilingen aanmaken', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'Kan in peilingen stemmen', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'Kan bestaande stem wijzigen', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'Kan bestanden toevoegen', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'Kan bestanden downloaden', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'Kan onderschriften gebruiken', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'Kan BBCode gebruiken', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'Kan smileys gebruiken', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'Kan de [img] BBCode-tag gebruiken', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'Kan de [flash] BBCode-tag gebruiken', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'Kan eigen berichten wijzigen', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'Kan eigen berichten verwijderen', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'Kan eigen onderwerpen sluiten', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'Kan onderwerpen omhooghalen', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'Kan berichten melden', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'Kan op forum abonneren', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'Kan onderwerpen afdrukken', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'Kan onderwerpen e-mailen', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'Kan het forum doorzoeken', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'Kan de vloedbeperking negeren', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'Berichtenteller verhogen<br /><em>Vergeet niet dat deze instelling alleen effect heeft op nieuwe berichten.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'Kan berichten plaatsen zonder goedkeuring', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'Kan berichten wijzigen', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'Kan berichten verwijderen', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'Kan berichten goedkeuren', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'Kan meldingen sluiten en verwijderen', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'Kan berichtauteur wijzigen', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'Kan onderwerpen verplaatsen', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'Kan onderwerpen sluiten', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'Kan onderwerpen splitsen', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'Kan onderwerpen samenvoegen', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'Kan berichtdetails zien', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'Kan waarschuwingen geven<br /><em>Deze instelling is alleen globaal toegewezen. Het is niet forum gebaseerd.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'Kan verbanningen beheren<br /><em>Deze instelling is alleen globaal toegewezen. Het is niet forum gebaseerd.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'Kan foruminstellingen aanpassen/controleren voor updates', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'Kan server/communicatieinstellingen aanpassen', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'Kan Jabber-instellingen aanpassen', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'Kan PHP-instellingen zien', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'Kan forums beheren', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'Kan nieuwe forums toevoegen', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'Kan forums verwijderen', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'Kan forums opschonen', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'Kan onderwerp/berichtpictogrammen en smileys aanpassen', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'Kan woordcensuur aanpassen', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'Kan BBCode-tags opgeven', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'Kan gerelateerde bijlageninstellingen aanpassen', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'Kan gebruikers beheren<br /><em>Dit is ook inclusief het zien van de browser-agent van gebruikers op de wie is er online?-pagina.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'Kan gebruikers verwijderen/opschonen', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'Kan groepen beheren', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'Kan nieuwe groepen toevoegen', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'Kan groepen verwijderen', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'Kan rangen beheren', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'Kan aangepaste profielvelden beheren', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'Kan verboden gebruikersnamen beheren', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'Kan verbanningen beheren', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'Kan permissiemaskers bekijken', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'Kan permissies aanpassen van individuele groepen', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'Kan permissies aanpassen van individuele gebruikers', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'Kan de class van de forumpermissie aanpassen', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'Kan de class van de moderatorpermissie aanpassen', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'Kan de class van de beheerderpermissie aanpassen', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'Kan de class van de gebruikerpermissie aanpassen', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'Kan rollen beheren', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'Kan andere permissies gebruiken', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'Kan stijlen beheren', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'Kan logboeken bekijken', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'Kan logboeken legen', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'Kan modules beheren', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'Kan taalpakketten beheren', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'Kan massa-e-mail versturen', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'Kan bots beheren', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'Kan meldingen/- en afkeuringsreden beheren', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'Kan de database back-uppen/herstellen', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'Kan zoekbackends en instellingen beheren', 'cat' => 'misc'),
));

?>
