<?php
/**
*
* acp_permissions_phpbb.php [Urdu]
*
* @package language
* @version $Id: $
* @copyright (c) 2010 phpBB Group
* @author 2010-11-18 - phpBB Group
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

	'permission_cat'	=> array(
		'actions'	=> 'اعمال',
		'content'	=> 'مواد',
		'forums'	=> 'فورم',
		'misc'	=> 'مختلف',
		'permissions'	=> 'اجازات',
		'pm'	=> 'ذاتی پیغامات',
		'polls'	=> 'انتخابات',
		'post'	=> 'مراسلہ',
		'post_actions'	=> 'مراسلہ کے اعمال',
		'posting'	=> 'پوسٹنگ',
		'profile'	=> 'پروفائل',
		'settings'	=> 'ترتیبات',
		'topic_actions'	=> 'موضوع کے اعمال',
		'user_group'	=> 'صارفین اور گروپس',
	),


	'permission_type'	=> array(
		'u_'	=> 'صارفین کی اجازات',
		'a_'	=> 'ایڈمن کی اجازات',
		'm_'	=> 'ماڈریٹر کی اجازات',
		'f_'	=> 'فورم کی اجازات',

		'global'	=> array(
			'm_'	=> 'عالمی ماڈریٹر کی اجازات',
		),

	),


	'acl_u_viewprofile'	=> array(
		'lang'	=> 'پروفائل، ارکان کی فہرست اور آن لائن فہرست دیکھ سکتے ہیں',
		'cat'	=> 'profile',
	),


	'acl_u_chgname'	=> array(
		'lang'	=> 'رکنیتی نام بدل سکتے ہیں',
		'cat'	=> 'profile',
	),


	'acl_u_chgpasswd'	=> array(
		'lang'	=> 'پاس ورڈ بدل سکتے ہیں',
		'cat'	=> 'profile',
	),


	'acl_u_chgemail'	=> array(
		'lang'	=> 'ای-میل بدل سکتے ہیں',
		'cat'	=> 'profile',
	),


	'acl_u_chgavatar'	=> array(
		'lang'	=> 'اوتار بدل سکتے ہیں',
		'cat'	=> 'profile',
	),


	'acl_u_chggrp'	=> array(
		'lang'	=> 'طے شدہ صارف گروہ بدل سکتے ہیں',
		'cat'	=> 'profile',
	),


	'acl_u_attach'	=> array(
		'lang'	=> 'فائل منسلک کر سکتے ہیں',
		'cat'	=> 'post',
	),


	'acl_u_download'	=> array(
		'lang'	=> 'فائل ڈائون لوڈ‌کر سکتے ہیں',
		'cat'	=> 'post',
	),


	'acl_u_savedrafts'	=> array(
		'lang'	=> 'مسودات محفوظ‌کر سکتے ہیں',
		'cat'	=> 'post',
	),


	'acl_u_chgcensors'	=> array(
		'lang'	=> 'سنسر الفاظ‌ غیر فعال کر سکتے ہیں',
		'cat'	=> 'post',
	),


	'acl_u_sig'	=> array(
		'lang'	=> 'دستخط استعمال کر سکتے ہیں',
		'cat'	=> 'post',
	),


	'acl_u_sendpm'	=> array(
		'lang'	=> 'ذاتی پیغامات بھیج سکتے ہیں',
		'cat'	=> 'pm',
	),


	'acl_u_masspm'	=> array(
		'lang'	=> 'اجتماعی صارفین کو اجتماعی ذاتی پیغامات بھیج سکتے ہیں',
		'cat'	=> 'pm',
	),


	'acl_u_masspm_group'	=> array(
		'lang'	=> 'گروہ کو پیغامات بھیج سکتے ہیں',
		'cat'	=> 'pm',
	),


	'acl_u_readpm'	=> array(
		'lang'	=> 'ذاتی پیغامات پڑھ سکتے ہیں',
		'cat'	=> 'pm',
	),


	'acl_u_pm_edit'	=> array(
		'lang'	=> 'اپنے ذاتی پیغامات ترمیم کر سکتے ہیں',
		'cat'	=> 'pm',
	),


	'acl_u_pm_delete'	=> array(
		'lang'	=> 'اپنے فولڈر سے ذاتی پیغامات ختم کر سکتے ہیں',
		'cat'	=> 'pm',
	),


	'acl_u_pm_forward'	=> array(
		'lang'	=> 'ذاتی پیغامات آگے بھیج سکتے ہیں',
		'cat'	=> 'pm',
	),


	'acl_u_pm_emailpm'	=> array(
		'lang'	=> 'ذاتی پیغامات ای-میل کر سکتے ہیں',
		'cat'	=> 'pm',
	),


	'acl_u_pm_printpm'	=> array(
		'lang'	=> 'ذاتی پیغامات پرنٹ کر سکتے ہیں',
		'cat'	=> 'pm',
	),


	'acl_u_pm_attach'	=> array(
		'lang'	=> 'ذاتی پیغامات میں فائلز منسلک کر سکتے ہیں',
		'cat'	=> 'pm',
	),


	'acl_u_pm_download'	=> array(
		'lang'	=> 'ذاتی پیغامات میں فائلز ڈائون لوڈ کر سکتے ہیں',
		'cat'	=> 'pm',
	),


	'acl_u_pm_bbcode'	=> array(
		'lang'	=> 'ذاتی پیغامات میں BBCode استعمال کر سکتے ہیں',
		'cat'	=> 'pm',
	),


	'acl_u_pm_smilies'	=> array(
		'lang'	=> 'ذاتی پیغامات میں مسکانیں استعمال کر سکتے ہیں',
		'cat'	=> 'pm',
	),


	'acl_u_pm_img'	=> array(
		'lang'	=> 'ذاتی پیغامات میں [img] کا BBCode ٹیگ استعمال کر سکتے ہیں',
		'cat'	=> 'pm',
	),


	'acl_u_pm_flash'	=> array(
		'lang'	=> 'ذاتی پیغامات میں [flash] کا BBCode ٹیگ استعمال کر سکتے ہیں',
		'cat'	=> 'pm',
	),


	'acl_u_sendemail'	=> array(
		'lang'	=> 'ای-میلز بھیج سکتے ہیں',
		'cat'	=> 'misc',
	),


	'acl_u_sendim'	=> array(
		'lang'	=> 'فوری پیغام بھیج سکتے ہیں',
		'cat'	=> 'misc',
	),


	'acl_u_ignoreflood'	=> array(
		'lang'	=> 'فلڈ کی حد کو نظر انداز کر سکتے ہیں',
		'cat'	=> 'misc',
	),


	'acl_u_hideonline'	=> array(
		'lang'	=> 'آن لائن حیثیت چھپا سکتے ہیں',
		'cat'	=> 'misc',
	),


	'acl_u_viewonline'	=> array(
		'lang'	=> 'چھپے آن لائن صارفین کو دیکھ سکتے ہیں',
		'cat'	=> 'misc',
	),


	'acl_u_search'	=> array(
		'lang'	=> 'بورڈ پر تلاش کر سکتے ہیں',
		'cat'	=> 'misc',
	),


	'acl_f_list'	=> array(
		'lang'	=> 'فورم دیکھ سکتے ہیں',
		'cat'	=> 'post',
	),


	'acl_f_read'	=> array(
		'lang'	=> 'فورم پڑھ سکتے ہیں',
		'cat'	=> 'post',
	),


	'acl_f_post'	=> array(
		'lang'	=> 'نئے موضوعات شروع کر سکتے ہیں',
		'cat'	=> 'post',
	),


	'acl_f_reply'	=> array(
		'lang'	=> 'موضوعات میں‌جواب دے سکتے ہیں',
		'cat'	=> 'post',
	),


	'acl_f_icons'	=> array(
		'lang'	=> 'موضوع/ مراسلات کے آئیکن استعمال کر سکتے ہیں',
		'cat'	=> 'post',
	),


	'acl_f_announce'	=> array(
		'lang'	=> 'اعلانات ارسال کر سکتے ہیں',
		'cat'	=> 'post',
	),


	'acl_f_sticky'	=> array(
		'lang'	=> 'سٹکی ارسال کر سکتے ہیں',
		'cat'	=> 'post',
	),


	'acl_f_poll'	=> array(
		'lang'	=> 'سروے بنا سکتے ہیں',
		'cat'	=> 'polls',
	),


	'acl_f_vote'	=> array(
		'lang'	=> 'سروے میں‌ووٹ‌کر سکتے ہیں',
		'cat'	=> 'polls',
	),


	'acl_f_votechg'	=> array(
		'lang'	=> 'موجودہ ووٹ‌تبدیل کر سکتے ہیں',
		'cat'	=> 'polls',
	),


	'acl_f_attach'	=> array(
		'lang'	=> 'فائلز منسلک کر سکتے ہیں',
		'cat'	=> 'content',
	),


	'acl_f_download'	=> array(
		'lang'	=> 'فائلز ڈائون لوڈ کر سکتے ہیں',
		'cat'	=> 'content',
	),


	'acl_f_sigs'	=> array(
		'lang'	=> 'دستخط استعمال کر سکتے ہیں',
		'cat'	=> 'content',
	),


	'acl_f_bbcode'	=> array(
		'lang'	=> 'BBCodes استعمال کر سکتے ہیں',
		'cat'	=> 'content',
	),


	'acl_f_smilies'	=> array(
		'lang'	=> 'مسکانیں استعمال کر سکتے ہیں',
		'cat'	=> 'content',
	),


	'acl_f_img'	=> array(
		'lang'	=> '[img] کا BBCode ٹیگ استعمال کر سکتے ہیں',
		'cat'	=> 'content',
	),


	'acl_f_flash'	=> array(
		'lang'	=> '[flash] کا BBCode ٹیگ استعمال کر سکتے ہیں',
		'cat'	=> 'content',
	),


	'acl_f_edit'	=> array(
		'lang'	=> 'اپنے مراسلات میں‌ترمیم کر سکتے ہیں',
		'cat'	=> 'content',
	),


	'acl_f_delete'	=> array(
		'lang'	=> 'اپنے مراسلات حذف کر سکتے ہیں',
		'cat'	=> 'content',
	),


	'acl_f_user_lock'	=> array(
		'lang'	=> 'اپنے مراسلات مقفل کر سکتے ہیں',
		'cat'	=> 'content',
	),


	'acl_f_bump'	=> array(
		'lang'	=> 'موضوعات اوپر لا سکتے ہیں',
		'cat'	=> 'actions',
	),


	'acl_f_report'	=> array(
		'lang'	=> 'مراسلات رپورٹ‌کر سکتے ہیں',
		'cat'	=> 'actions',
	),


	'acl_f_subscribe'	=> array(
		'lang'	=> 'فورم میں‌اشتراک کر سکتے ہیں',
		'cat'	=> 'actions',
	),


	'acl_f_print'	=> array(
		'lang'	=> 'موضوعات پرنٹ کر سکتے ہیں',
		'cat'	=> 'actions',
	),


	'acl_f_email'	=> array(
		'lang'	=> 'موضوعات ای-میل کر سکتے ہیں',
		'cat'	=> 'actions',
	),


	'acl_f_search'	=> array(
		'lang'	=> 'فورم پر تلاش کر سکتے ہیں',
		'cat'	=> 'misc',
	),


	'acl_f_ignoreflood'	=> array(
		'lang'	=> 'فلڈ‌کی حد نظر انداز کر سکتے ہیں',
		'cat'	=> 'misc',
	),


	'acl_f_postcount'	=> array(
		'lang'	=> 'مراسلات کے کائونٹر میں‌اظافہ‌<br /><em>براہ مہربانی نوٹ‌کریں‌کہ یہ صرف نئے مراسلات پر قابلِ عمل ہے</em>',
		'cat'	=> 'misc',
	),


	'acl_f_noapprove'	=> array(
		'lang'	=> 'منظوری کے بغیر ارسال کر سکتے ہیں',
		'cat'	=> 'misc',
	),


	'acl_m_edit'	=> array(
		'lang'	=> 'مراسلات میں‌ترمیم کر سکتے ہیں',
		'cat'	=> 'post_actions',
	),


	'acl_m_delete'	=> array(
		'lang'	=> 'مراسلات حذف کر سکتے ہیں',
		'cat'	=> 'post_actions',
	),


	'acl_m_approve'	=> array(
		'lang'	=> 'مراسلات منظورکر سکتے ہیں',
		'cat'	=> 'post_actions',
	),


	'acl_m_report'	=> array(
		'lang'	=> 'رپورٹس بند اور حذف کر سکتے ہیں',
		'cat'	=> 'post_actions',
	),


	'acl_m_chgposter'	=> array(
		'lang'	=> 'مراسلہ کا مصنف بدل سکتے ہیں',
		'cat'	=> 'post_actions',
	),


	'acl_m_move'	=> array(
		'lang'	=> 'موضوعات منتقل کر سکتے ہیں',
		'cat'	=> 'topic_actions',
	),


	'acl_m_lock'	=> array(
		'lang'	=> 'موضوعات مقفل کر سکتے ہیں',
		'cat'	=> 'topic_actions',
	),


	'acl_m_split'	=> array(
		'lang'	=> 'موضوعات الگ کر سکتے ہیں',
		'cat'	=> 'topic_actions',
	),


	'acl_m_merge'	=> array(
		'lang'	=> 'موضوعات ایک کر سکتے ہیں',
		'cat'	=> 'topic_actions',
	),


	'acl_m_info'	=> array(
		'lang'	=> 'مراسلہ کی تفصیلات دیکھ سکتے ہیں',
		'cat'	=> 'misc',
	),


	'acl_m_warn'	=> array(
		'lang'	=> 'تنبیہات جاری کر سکتے ہیں.<br /><em>یہ ترتیب عالمی ہے. یہ فورم پر مبنی نہیں‌ہے.</em>',
		'cat'	=> 'misc',
	),


	'acl_m_ban'	=> array(
		'lang'	=> 'تنبیہات کا انتظام کر سکتے ہیں. <br /><em>یہ ترتیب عالمی ہے. یہ فورم پر مبنی نہیں‌ہے.</em>',
		'cat'	=> 'misc',
	),


	'acl_a_board'	=> array(
		'lang'	=> 'بورڈ کی ترتیبات بدل سکتے ہیں‌/ اپ ڈیٹ‌ دیکھ سکتے ہیں',
		'cat'	=> 'settings',
	),


	'acl_a_server'	=> array(
		'lang'	=> 'سرور/ بات چیت کی ترتیبات بدل سکتے ہیں',
		'cat'	=> 'settings',
	),


	'acl_a_jabber'	=> array(
		'lang'	=> 'جیبر ترتیبات بدل سکتے ہیں',
		'cat'	=> 'settings',
	),


	'acl_a_phpinfo'	=> array(
		'lang'	=> 'php ترتیبات دیکھ سکتے ہیں',
		'cat'	=> 'settings',
	),


	'acl_a_forum'	=> array(
		'lang'	=> 'فورم کا انتظام کر سکتے ہیں',
		'cat'	=> 'forums',
	),


	'acl_a_forumadd'	=> array(
		'lang'	=> 'نئے فورم شامل کر سکتے ہیں',
		'cat'	=> 'forums',
	),


	'acl_a_forumdel'	=> array(
		'lang'	=> 'فورم حذف کر سکتے ہیں',
		'cat'	=> 'forums',
	),


	'acl_a_prune'	=> array(
		'lang'	=> 'فورم پرون کر سکتے ہیں',
		'cat'	=> 'forums',
	),


	'acl_a_icons'	=> array(
		'lang'	=> 'موضوع/ مراسلہ کے آئیکن اور مسکانیں‌ بدل سکتے ہیں',
		'cat'	=> 'posting',
	),


	'acl_a_words'	=> array(
		'lang'	=> 'لفظ‌سنسر بدل سکتے ہیں',
		'cat'	=> 'posting',
	),


	'acl_a_bbcode'	=> array(
		'lang'	=> 'BBCode ٹیگ وضح کر سکتے ہیں',
		'cat'	=> 'posting',
	),


	'acl_a_attach'	=> array(
		'lang'	=> 'منسلکات سے متعلقہ ترتیبات بدل سکتے ہیں',
		'cat'	=> 'posting',
	),


	'acl_a_user'	=> array(
		'lang'	=> 'صارفین کا انتظام کر سکتے ہیں',
		'cat'	=> 'user_group',
	),


	'acl_a_userdel'	=> array(
		'lang'	=> 'صارفین کو پرون/ حذف کر سکتے ہیں',
		'cat'	=> 'user_group',
	),


	'acl_a_group'	=> array(
		'lang'	=> 'گروہ کا انتظام کر سکتے ہیں',
		'cat'	=> 'user_group',
	),


	'acl_a_groupadd'	=> array(
		'lang'	=> 'نئے گروہ شامل کر سکتے ہیں',
		'cat'	=> 'user_group',
	),


	'acl_a_groupdel'	=> array(
		'lang'	=> 'گروہ حذف کر سکتے ہیں',
		'cat'	=> 'user_group',
	),


	'acl_a_ranks'	=> array(
		'lang'	=> 'درجات کا انتظام کر سکتے ہیں',
		'cat'	=> 'user_group',
	),


	'acl_a_profile'	=> array(
		'lang'	=> 'کسٹم پروفائل کی فیلڈ کا انتظام کر سکتے ہیں',
		'cat'	=> 'user_group',
	),


	'acl_a_names'	=> array(
		'lang'	=> 'رد کیے گئے رکنیتی ناموں‌کا انتظام کر سکتے ہیں',
		'cat'	=> 'user_group',
	),


	'acl_a_ban'	=> array(
		'lang'	=> 'پابندی کا انتظام کر سکتے ہیں',
		'cat'	=> 'user_group',
	),


	'acl_a_viewauth'	=> array(
		'lang'	=> 'اجازات کا نقاب دیکھ سکتے ہیں',
		'cat'	=> 'permissions',
	),


	'acl_a_authgroups'	=> array(
		'lang'	=> 'انفرادی گروہ کی اجازات بدل سکتے ہیں',
		'cat'	=> 'permissions',
	),


	'acl_a_authusers'	=> array(
		'lang'	=> 'انفرادی صارفین کی اجازات بدل سکتے ہیں',
		'cat'	=> 'permissions',
	),


	'acl_a_fauth'	=> array(
		'lang'	=> 'فورم اجازات کی کلاس بدل سکتے ہیں',
		'cat'	=> 'permissions',
	),


	'acl_a_mauth'	=> array(
		'lang'	=> 'مدیران اجازات کی کلاس بدل سکتے ہیں',
		'cat'	=> 'permissions',
	),


	'acl_a_aauth'	=> array(
		'lang'	=> 'منتظم اجازات کی کلاس بدل سکتے ہیں',
		'cat'	=> 'permissions',
	),


	'acl_a_uauth'	=> array(
		'lang'	=> 'صارف اجازات کی کلاس بدل سکتے ہیں',
		'cat'	=> 'permissions',
	),


	'acl_a_roles'	=> array(
		'lang'	=> 'کردار کا انتظام کر سکتے ہیں',
		'cat'	=> 'permissions',
	),


	'acl_a_switchperm'	=> array(
		'lang'	=> 'دوسری اجازات استعمال کر سکتے ہیں',
		'cat'	=> 'permissions',
	),


	'acl_a_styles'	=> array(
		'lang'	=> 'سٹائلز کا انتظام کر سکتے ہیں',
		'cat'	=> 'misc',
	),


	'acl_a_viewlogs'	=> array(
		'lang'	=> 'لاگ دیکھ سکتے ہیں',
		'cat'	=> 'misc',
	),


	'acl_a_clearlogs'	=> array(
		'lang'	=> 'لاگ صاف کر سکتے ہیں',
		'cat'	=> 'misc',
	),


	'acl_a_modules'	=> array(
		'lang'	=> 'ماڈیول کا انتظام کر سکتے ہیں',
		'cat'	=> 'misc',
	),


	'acl_a_language'	=> array(
		'lang'	=> 'زبان کے پیک کا انتظام کر سکتے ہیں',
		'cat'	=> 'misc',
	),


	'acl_a_email'	=> array(
		'lang'	=> 'اجتماعی ای-میلز بھیج سکتے ہیں',
		'cat'	=> 'misc',
	),


	'acl_a_bots'	=> array(
		'lang'	=> 'خود کار صارفین کا انتظام کر سکتے ہیں',
		'cat'	=> 'misc',
	),


	'acl_a_reasons'	=> array(
		'lang'	=> 'رپورٹ/ نامنظوری وجوہات کا انتظام کر سکتے ہیں',
		'cat'	=> 'misc',
	),


	'acl_a_backup'	=> array(
		'lang'	=> 'ڈیٹا بیس بیک اپ/ ری سٹور کر سکتے ہیں',
		'cat'	=> 'misc',
	),


	'acl_a_search'	=> array(
		'lang'	=> 'تلاش کا پس منظر اور ترتیبات بدل سکتے ہیں',
		'cat'	=> 'misc',
	),

));

?>