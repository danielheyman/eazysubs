<?php
/**
*
* acp_permissions.php [Urdu]
*
* @package language
* @version $Id: $
* @copyright (c) 2010 phpBB Group
* @author 2010-11-14 - phpBB Group
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '<p>اجازات بہت دانے دار ہیں اور 4 بڑے حصوں میں رکھی گئی ہیں، جو یہ ہیں، </p>

<h2>عالمی اجازات</h2>
<p>یہ عالمی پیمانے پر بورڈ استعمال کرنے میں استعمال ہوتی ہیں. یہ مزید تقسیم ہوتی ہیں صارف اجازات، گروہ اجازات، انتظامیہ اور مدیران.</p>

<h2>فورم کی بنیاد پر اجازات</h2>
<p>یہ اجازات فی فورم رسائی کے لیے استعمال ہوتی ہیں. یہ مزید تقسیم ہوتی ہیں فورم کی اجازات، فورم مدیران، صارف فورم اجازات، گروہ فورم اجازات.</p>

<h2>فورم کی بنیاد پر اجازات</h2>
<p>یہ مختلف قسم کی اجازات کے لیے مختلف اجازت نامے بنانے میں استعمال ہوتی ہیں جو کہ بعد میں‌کرداری طور پر لاگو کی جاسکتی ہیں. پہلے سے طے شدہ کرداروں میں انتظامیہ (چھوٹی اور بڑی)، ہونے چاہیے. اگرچہ چاروں‌ڈیویژن میں کرداروں کو شامل، ترمیم اور ختم کر سکتے ہیں.</p>

<h2>اجازات کےماسک</h2>
<p>یہ ماسک ان موثر اجازات کو دیکھنے کے لیے استعمال ہوتا ہے جو انتظامیہ، مدیران اور صارفین پر لاگو کی گئی ہیں.</p>

PHPbb بورڈ پر اجازات بنانے سے متعلق معلومات کا مزید مطالہ کرنے کے لیے دیکھیں
<a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Chapter 1.5 of our Quick Start Guide</a>.</p>',
	'ACL_NEVER'	=> 'کبھی نہیں',
	'ACL_SET'	=> 'اجازات کی ترتیب',
	'ACL_SET_EXPLAIN'	=> 'اجازات ایک سادہ <samp>ہاں</samp> <samp>نہیں</samp> سسٹم پر مشتمل ہیں. ایک صارٍف یا گروہ کے لیے <samp>کبھی نہیں</samp> منتخب کرنے سے یہ کسی بھی دوسری قیمت پر عبوری ہوگا. ',
	'ACL_SETTING'	=> 'ترتیب',
	'ACL_TYPE_A_'	=> 'انتظامیہ کی اجازات',
	'ACL_TYPE_F_'	=> 'فورم کی اجازات',
	'ACL_TYPE_M_'	=> 'مدیران کی اجازات',
	'ACL_TYPE_U_'	=> 'صارف کی اجازات',
	'ACL_TYPE_GLOBAL_A_'	=> 'انتظامیہ کی اجازات',
	'ACL_TYPE_GLOBAL_U_'	=> 'صارف کی اجازات',
	'ACL_TYPE_GLOBAL_M_'	=> 'مدیر عالمی کی اجازات',
	'ACL_TYPE_LOCAL_M_'	=> 'فورم مدیر کی اجازات',
	'ACL_TYPE_LOCAL_F_'	=> 'فورم کی اجازات',
	'ACL_NO'	=> 'نہیں',
	'ACL_VIEW'	=> 'اجازات دیکھ رہے ہیں',
	'ACL_VIEW_EXPLAIN'	=> 'آپ یہاں صارف/ گروہ پر موثر اجازات دیکھ سکتے ہیں. سرخ ڈبے کا مطلب ہے کہ کوئی اجازت موثر نہیں ہے، سبز ڈبے کا مطلب ہے اجازات موثر ہیں.',
	'ACL_YES'	=> 'ہاں',
	'ACP_ADMINISTRATORS_EXPLAIN'	=> 'آپ یہاں صارفین یا گروہ کے لیے انتظامی اجازات لاگو کر سکتے ہیں. انتظامی اجازات والے تمام صارفین انتظامی کنٹرول پینل دیکھ سکتے ہیں.',
	'ACP_FORUM_MODERATORS_EXPLAIN'	=> 'آپ یہاں صارف کو فورم کا یا گروہ کا مدیر بنا سکتے ہیں. ',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'	=> 'آپ یہاں‌طے کر سکتے ہیں کہ کون سے صارفین کا گروہ کون سے فورم پر رسائی حاصل کر سکتے ہیں. ',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'	=> 'آپ یہاں فورم کی اجازات ایک یا ایک سے زیادہ فورمز پر کاپی کر سکتے ہیں. ',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'	=> 'آپ یہاں صارفین یا گروہ پر عالمی مدیران کی اجازات لاگو کر سکتے ہیں. یہ مدیران عام مدیران ہی ہوتے ہین سوائے اسکے کہ یہ ہر فورم پر جا سکتے ہیں.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'	=> 'آپ یہاں گروہ پر فورم اجازات لاگو کر سکتے ہیں.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'	=> 'آپ یہاں گروہ کے صارفین، عالمی مدیران کی اجازات اور انتظامیہ کی اجازات پر عالمی اجازات لاگو کر سکتے ہیں.',
	'ACP_ADMIN_ROLES_EXPLAIN'	=> 'آپ یہاں انتظامیہ کی اجازات کے کردار بنا سکتے ہیں. کردار موثر اجازات ہوتی ہیں، اگر آپ ایک کردار بدلیں تو اس کردار میں موجود تمام اشیاء کی اجازات بھی تبدیل ہو جائیں گی.',
	'ACP_FORUM_ROLES_EXPLAIN'	=> 'آپ یہاں فورم کی اجازات کے کردار بنا سکتے ہیں. کردار موثر اجازات ہوتی ہیں، اگر آپ ایک کردار بدلیں تو اس کردار میں موجود تمام اشیاء کی اجازات بھی تبدیل ہو جائیں گی.',
	'ACP_MOD_ROLES_EXPLAIN'	=> 'آپ یہاں مدیران کی اجازات کے کردار بنا سکتے ہیں. کردار موثر اجازات ہوتی ہیں، اگر آپ ایک کردار بدلیں تو اس کردار میں موجود تمام اشیاء کی اجازات بھی تبدیل ہو جائیں گی.',
	'ACP_USER_ROLES_EXPLAIN'	=> 'آپ یہاں صارفین کی اجازات کے کردار بنا سکتے ہیں. کردار موثر اجازات ہوتی ہیں، اگر آپ ایک کردار بدلیں تو اس کردار میں موجود تمام اشیاء کی اجازات بھی تبدیل ہو جائیں گی.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'	=> 'آپ یہاں صارفین پر فورم کی اجازات لاگو کر سکتے ہیں.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'	=> 'آپ یہاں گروہ کے صارفین، عالمی مدیران کی اجازات اور انتظامیہ کی اجازات پر عالمی اجازات لاگو کر سکتے ہیں.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'	=> 'آپ یہاں انتظامی منتخب صارفین/ گروہ کو دی گئیں موثر انتظامی اجازات دیکھ سکتے ہیں',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'آپ یہاں انتظامی منتخب صارفین/ گروہ کو دی گئیں موثر عالمی مدیران کی اجازات دیکھ سکتے ہیں',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'	=> 'آپ یہاں انتظامی منتخب صارفین/ گروہ کو دی گئیں موثر فورم کی اجازات دیکھ سکتے ہیں',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'آپ یہاں انتظامی منتخب صارفین/ گروہ کو دی گئیں موثر فورم مدیر کی اجازات دیکھ سکتے ہیں',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'	=> 'آپ یہاں انتظامی منتخب صارفین/ گروہ کو دی گئیں موثر صارف کی اجازات دیکھ سکتے ہیں',
	'ADD_GROUPS'	=> 'گروہ شامل کریں',
	'ADD_PERMISSIONS'	=> 'اجازات شامل کریں',
	'ADD_USERS'	=> 'صارفین شامل کریں',
	'ADVANCED_PERMISSIONS'	=> 'اعلیٰ درجہ کی اجازات',
	'ALL_GROUPS'	=> 'تمام گروہ منتخب کریں',
	'ALL_NEVER'	=> 'تمام <samp>کبھی نہیں</samp>',
	'ALL_NO'	=> 'تمام <samp>نہیں</samp>',
	'ALL_USERS'	=> ' تمام صارفین منتخب کریں',
	'ALL_YES'	=> 'تمام <samp>ہاں</samp>',
	'APPLY_ALL_PERMISSIONS'	=> 'تمام اجازات لاگو کریں',
	'APPLY_PERMISSIONS'	=> 'اجازات لاگو کریں',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'اس شے کے لیے بنایا گیا کردار یا اجازات صرف اسی شے یا منتخب اشیاء پر لاگو ہونگی',
	'AUTH_UPDATED'	=> 'اجازات کو اپ ڈیٹ کر دیا گیا ہے',
	'COPY_PERMISSIONS_CONFIRM'	=> 'کیا آپ واقعی یہ عمل جاری رکھنا چاہتے ہیں؟ براہ مہربانی یاد رکھیں کہ یہ عمل منتخب شدہ منزلات پر تمام اجازات کو تبدیل کر دے گا.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'وہ زریع فورم جس سے آپ اجازات کاپی کرنا چاہتے ہیں',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'	=> 'وہ منزل فورم جہاں‌آپ اجازات کاپی کرنا چاہتے ہیں',
	'COPY_PERMISSIONS_FROM'	=> 'سے اجازات کاپی کریں',
	'COPY_PERMISSIONS_TO'	=> 'پر اجازات لاگو کریں',
	'CREATE_ROLE'	=> 'کردار بنائیں',
	'CREATE_ROLE_FROM'	=> 'سے ترتیبات استعمال کریں',
	'CUSTOM'	=> 'اپنی مرضی سے...',
	'DEFAULT'	=> 'طے شدہ',
	'DELETE_ROLE'	=> 'کردار ختم کریں',
	'DELETE_ROLE_CONFIRM'	=> 'کیا آپ یہ کردار ختم کرنا چاہتے ہیں؟ اس کردار پر لاگو کردہ اشیاء اپنی اجازات کی ترتیبات <strong>نہیں</strong> کھوئیں گی.',
	'DISPLAY_ROLE_ITEMS'	=> 'اس کردار کو استعمال کرنے والی اشیاء دیکھیں',
	'EDIT_PERMISSIONS'	=> 'اجازات میں ترمیم کریں',
	'EDIT_ROLE'	=> 'کردار میں ترمیم کریں',
	'GROUPS_NOT_ASSIGNED'	=> 'یہ کردار کسی گروہ پر لاگو نہیں',
	'LOOK_UP_GROUP'	=> 'صارف کا گروہ تلاش کریں',
	'LOOK_UP_USER'	=> 'صارف تلاش کریں',
	'MANAGE_GROUPS'	=> 'گروہ کا انتظام کریں',
	'MANAGE_USERS'	=> 'صارفین کا انتظام کریں',
	'NO_AUTH_SETTING_FOUND'	=> 'اجازت ترتیبات نہیں بنائی گئیں',
	'NO_ROLE_ASSIGNED'	=> 'کوئی کردار لاگو نہیں....',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'اس کردار کو مقرر کرنے سے دائیں جانب اجازات تبدیل نہیں ہونگی. اگر آپ تمام اجازات ختم کرنا چاہتے ہیں تو تمام <samp>نہیں</samp> منتخب کریں',
	'NO_ROLE_AVAILABLE'	=> 'کوئی کردار دستیاب نہیں',
	'NO_ROLE_NAME_SPECIFIED'	=> 'براہ مہربانی کردار کو ایک نام دیں',
	'NO_ROLE_SELECTED'	=> 'کردار تلاش نہیں کیا جا سکا',
	'NO_USER_GROUP_SELECTED'	=> 'آپ نے کوئی صارف یا گروہ منتخب نہیں کیا.',
	'ONLY_FORUM_DEFINED'	=> 'آپ نے اپنے انتخاب میں صرف فورم کی وضاحت کی ہے. براہ مہربانی کم سے کم ایک صارف یا گروہ بھی منتخب کریں.',
	'PERMISSION_APPLIED_TO_ALL'	=> 'اجازات اور کردار تمام منتخب چیزوں پر بھی لاگو ہونگے',
	'PLUS_SUBFORUMS'	=> 'ذیلی فارمز+',
	'REMOVE_PERMISSIONS'	=> 'اجازات مٹائیں',
	'REMOVE_ROLE'	=> 'کردار مٹائیں',
	'RESULTING_PERMISSION'	=> 'اجازت کا نتیجہ',
	'ROLE'	=> 'کردار',
	'ROLE_ADD_SUCCESS'	=> 'کردار کامیابی سے شامل کر دیا گیا',
	'ROLE_ASSIGNED_TO'	=> 'صارفین/ گروہ %s پر لاگو کر دیے گئے',
	'ROLE_DELETED'	=> 'کردار کامیابی سے مٹا دیا گیا',
	'ROLE_DESCRIPTION'	=> 'کردار کی وضاحت',
	'ROLE_ADMIN_FORUM'	=> 'فورم منتظم',
	'ROLE_ADMIN_FULL'	=> 'مکمل منتظم',
	'ROLE_ADMIN_STANDARD'	=> 'معیاری منتظم',
	'ROLE_ADMIN_USERGROUP'	=> 'صارف اور گروہ منتظم',
	'ROLE_FORUM_BOT'	=> 'خودکار صارف کی رسائی',
	'ROLE_FORUM_FULL'	=> 'مکمل رسائی',
	'ROLE_FORUM_LIMITED'	=> 'محدود رسائی',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'محدود رسائی + سروے',
	'ROLE_FORUM_NOACCESS'	=> 'کوئی رسائی نہیں',
	'ROLE_FORUM_ONQUEUE'	=> 'اعتدالی قطار میں',
	'ROLE_FORUM_POLLS'	=> 'معیاری رسائی + سروے',
	'ROLE_FORUM_READONLY'	=> 'صرف پڑھنے کی رسائی',
	'ROLE_FORUM_STANDARD'	=> 'معیاری رسائی',
	'ROLE_FORUM_NEW_MEMBER'	=> 'نیا مندرج رکن',
	'ROLE_MOD_FULL'	=> 'مکمل مدیر',
	'ROLE_MOD_QUEUE'	=> 'قطاری مدیر',
	'ROLE_MOD_SIMPLE'	=> 'سادہ مدیر',
	'ROLE_MOD_STANDARD'	=> 'معیاری مدیر',
	'ROLE_USER_FULL'	=> 'تمام خصوصیات',
	'ROLE_USER_LIMITED'	=> 'محدود خصوصیات',
	'ROLE_USER_NOAVATAR'	=> 'کوئی اوتار نہیں',
	'ROLE_USER_NOPM'	=> 'کوئی ذاتی پیغام نہیں',
	'ROLE_USER_STANDARD'	=> 'معیاری خصوصیات',
	'ROLE_USER_NEW_MEMBER'	=> 'نیا مندرج رکن',
	'ROLE_DESCRIPTION_ADMIN_FORUM'	=> 'فورم اتظامیہ اور فورم اجازات کی ترتیبات تک رسائی ہے',
	'ROLE_DESCRIPTION_ADMIN_FULL'	=> 'اس بورڈ کے تمام انتظامی افعال تک رسائی ممکن ہے.<br /> اسکی تلقین نہیں کی جاتی',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'	=> 'کافی انتظامی خصوصیات تک رسائی ہے لیکن سرور یا سسٹم سے متعلق چیزوں کو استعمال نہیں کر سکتے',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'	=> 'صارفین اور گروہ کا انتظام کر سکتے ہیں:‌اجازات کی تبدیلی، ترتیبات، پابندی اور درجہ بندی کا انتظام',
	'ROLE_DESCRIPTION_FORUM_BOT'	=> 'یہ کردار خودکار صارفین اور تلاشی سپائڈرز کے لیے ہے.',
	'ROLE_DESCRIPTION_FORUM_FULL'	=> 'اعلان اور سٹکی کی تحریروں کے ساتھ تمام خصوصیات استعمال کر سکتے ہیں. عام صارفین کے لیے تلقین نہیں ہے.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'	=> 'فورم کی کچھ خصوصیات استعمال کر سکتے ہیں، لیکن نہ تو فائلز منسلک کر سکتے ہیں اور نہ ہی مراسلات کے ائیکن.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'جیسے محدود رسائی لیکن سروے بنا سکتے ہیں',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'	=> 'نہ ہی فورم دیکھ سکتے ہیں اور نہ اس تک رسائی ہے',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'	=> 'کافی خصوصیات استعمال کر سکتے ہیں جیسا کہ منسلکات لیکن مراسلات کی منظوری درکار ہوگی.',
	'ROLE_DESCRIPTION_FORUM_POLLS'	=> 'جیسا کہ معیاری رسائی لیکن سروے بھی بنا سکتے ہیں',
	'ROLE_DESCRIPTION_FORUM_READONLY'	=> 'فورم پڑھ سکتے ہیں لیکن نہ ہی نئے موضوعات شروع کر سکتے ہیں اور نہ ہی مراسلات کے جواب دے سکتے ہیں',
	'ROLE_DESCRIPTION_FORUM_STANDARD'	=> 'فورم کی کافی خصوصیات استعمال کر سکتے ہیں لیکن اپنے مراسلات کو بند نہیں کر سکتے اور نہ ہی سروے بنا سکتے ہیں',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'	=> 'نئے مندج اراکین کے لیے کردار جس میں <samp>کبھی نہیں</samp> اجازات ہیں.',
	'ROLE_DESCRIPTION_MOD_FULL'	=> 'مدیران کی تمام خصوصیات بشمول پابندی، استعمال کر سکتے ہیں',
	'ROLE_DESCRIPTION_MOD_QUEUE'	=> 'مراسلات کی ترمیم/ تصدیق کی اعتدالی قطار کا ستعمال کر سکتے ہیں، لیکن اسکے علاوہ کچھ نہیں',
	'ROLE_DESCRIPTION_MOD_SIMPLE'	=> 'صرف موضوع کے بنیادی اعمال استعمال کر سکتے ہیں. تنبیہات یا اعتدالی قطار استعمال نہیں کر سکتے.',
	'ROLE_DESCRIPTION_MOD_STANDARD'	=> 'ماڈریشن کے کافی آلات استعمال کر سکتے ہیں لیکن مراسلہ کا مصنف تبدیل یا پابند نہیں کر سکتے.',
	'ROLE_DESCRIPTION_USER_FULL'	=> 'صارفین کے لیے فورم کی تمام خصوصیات کا استعمال کر سکتے ہیں بشمول رکنیتی نام کی تبدیلی اور فلڈ کی حد. <br /> اسکی تلقین نہیں کی جاتی',
	'ROLE_DESCRIPTION_USER_LIMITED'	=> 'صارفین کے لیے فورم کی کچھ خصوصیات کا استعمال کر سکتے ہیں. منسلکات، ای-میلز، فوری پیغامات کی اجازت نہیں',
	'ROLE_DESCRIPTION_USER_NOAVATAR'	=> 'محدود خصوصیات افعال ہیں. اوتار کے استعمال کی اجازت نہیں ہے',
	'ROLE_DESCRIPTION_USER_NOPM'	=> 'محدود خصوصیات افعال ہیں. ذاتی پیغامات کے استعمال کی اجازت نہیں ہے',
	'ROLE_DESCRIPTION_USER_STANDARD'	=> 'کافی لیکن تمام صارف خصوصیات استعمال نہیں کر سکتے. صارف کا نام یا فلڈ کی حد عبور نہیں کر سکتے. ',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'	=> 'نئے مندج اراکین کے لیے کردار جس میں <samp>کبھی نہیں</samp> اجازات ہیں.',
	'ROLE_DESCRIPTION_EXPLAIN'	=> 'آپ یہاں ایک چھوٹی سی وضاحت لکھ سکتے ہیں کہ کردار کیوں بنایا جا رہا ہے اور اسکا کام کیا ہے. آپ یہاں‌جو لکھیں گے وہ اجازات کے صفحے پر بھی ظاہر ہوگا.',
	'ROLE_DESCRIPTION_LONG'	=> 'کرادر کی یہ وضاحت بہت لمبی ہے. براہ مہربانی 4000 حروف تک محدود رہیں',
	'ROLE_DETAILS'	=> 'کردار کی تفصیلات',
	'ROLE_EDIT_SUCCESS'	=> 'کردار کامیابی سے ترمیم کر دیا گیا',
	'ROLE_NAME'	=> 'کردار کا نام',
	'ROLE_NAME_ALREADY_EXIST'	=> 'درج کی گئی اجازت کی قسم کے لیے <strong>%s</strong> نای کردار پہلے سے موجود ہے',
	'ROLE_NOT_ASSIGNED'	=> 'کردار ابھی تک لاگو نہیں ہوا',
	'SELECTED_FORUM_NOT_EXIST'	=> 'منتخب فورم موجود نہیں ہے/ ہیں',
	'SELECTED_GROUP_NOT_EXIST'	=> 'منتخب گروہ موجود نہیں ہے/ ہیں',
	'SELECTED_USER_NOT_EXIST'	=> 'منتخب صارف(ین) موجود نہیں ہیں.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'آپ جو فورم یہاں منتخب کریں گے، اس میں تمام ذیلی فارمز بھی شامل ہونگے',
	'SELECT_ROLE'	=> 'کردار منتخب کریں...',
	'SELECT_TYPE'	=> 'قسم منتخب کریں',
	'SET_PERMISSIONS'	=> 'اجازات سیٹ کریں',
	'SET_ROLE_PERMISSIONS'	=> 'کردار اجازات سیٹ کریں',
	'SET_USERS_PERMISSIONS'	=> 'صارفین اجازات سیٹ کریں',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'صارفین کی فورم اجازات سیٹ کریں',
	'TRACE_DEFAULT'	=> 'طے شدہ طور پر تمام اجازات <samp>نہیں<samp> ہیں. تاکہ دوسری ترتیبات اسے عبور کر سکیں',
	'TRACE_FOR'	=> 'کیلیے ٹریس کریں',
	'TRACE_GLOBAL_SETTING'	=> '%s (عالمی)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'گروہ کی اجازت <samp>کبھی نہیں<samp> جیسا کہ کل نتائج تاکہ پرانا نتیجہ رکھا جائے',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'اس فورم کے لیےگروہ کی اجازت <samp>کبھی نہیں<samp> جیسا کہ کل نتائج تاکہ پرانا نتیجہ رکھا جائے',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'گروہ کی اجازت <samp>کبھی نہیں<samp> ہے جو کہ نئی کل قیمت بن گئی ہے کیونکہ یہ ابھی تک سیٹ نہیں کی گئی تھی.  (<samp>نہیں</samp> پر سیٹ کریں)',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'اس فورم کے لیےگروہ کی اجازت <samp>کبھی نہیں<samp> ہے جو کہ نئی کل قیمت بن گئی ہے کیونکہ یہ ابھی تک سیٹ نہیں کی گئی تھی.  (<samp>نہیں</samp> پر سیٹ کریں)',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'گروہ کی اجازت <samp>کبھی نہیں<samp> ہے جو کہ اس صارف کے لیے تمام <samp>ہاں</samp> پر <samp>کبھی نہیں</samp> کی جگہ لیتی ہے.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'اس فورم کے لیے گروہ کی اجازت <samp>کبھی نہیں<samp> ہے جو کہ اس صارف کے لیے تمام <samp>ہاں</samp> پر <samp>کبھی نہیں</samp> کی جگہ لیتی ہے.',
	'TRACE_GROUP_NO'	=> 'اس گروہ کی اجازت <samp>نہیں<samp> ہے تاکہ پرانی قیمت رکھی جائے',
	'TRACE_GROUP_NO_LOCAL'	=> 'اس فورم میں اس گروہ کی اجازت <samp>نہیں<samp> ہے تاکہ پرانی قیمت رکھی جائے',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'اس گروہ کی اجازت <samp>ہاں<samp> پر سیٹ ہیں لیکن تمام <samp>کبھی نہیں</samp>کی جگہ نہین لی جا سکی',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'اس فورم کی اس گروہ کی اجازت <samp>ہاں<samp> پر سیٹ ہیں لیکن تمام <samp>کبھی نہیں</samp>کی جگہ نہین لی جا سکی',
	'TRACE_GROUP_YES_TOTAL_NO'	=> 'گروہ کی اجازت <samp>ہاں<samp> ہے جو کہ نئی کل قیمت بن گئی ہے کیونکہ یہ ابھی تک سیٹ نہیں کی گئی تھی.  (<samp>نہیں</samp> پر سیٹ کریں)',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'اس فورم کیلیے گروہ کی اجازت <samp>ہاں<samp> ہے جو کہ نئی کل قیمت بن گئی ہے کیونکہ یہ ابھی تک سیٹ نہیں کی گئی تھی.  (<samp>نہیں</samp> پر سیٹ کریں)',
	'TRACE_GROUP_YES_TOTAL_YES'	=> 'اس گروہ کی اجازت <samp>ہاں<samp> ہےاور تمام اجازات پہلے ہی  <samp>ہاں</samp> پر ہیں تاکہ پرانی قیمت رکھی جائے',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'اس فورم کے لیے اس گروہ کی اجازت <samp>ہاں<samp> ہےاور تمام اجازات پہلے ہی  <samp>ہاں</samp> پر ہیں تاکہ پرانی قیمت رکھی جائے',
	'TRACE_PERMISSION'	=> 'اجازت ٹریس کریں - %s',
	'TRACE_RESULT'	=> 'نتیجہ ٹریس کریں',
	'TRACE_SETTING'	=> 'ترتیب ٹریس کریں',
	'TRACE_USER_GLOBAL_YES_TOTAL_YES'	=> 'فورم کی آزاد صارف اجازت <samp>ہاں<samp> بتاتی ہے لیکن تمام اجازات پہلے ہی <samp>ہاں<samp>پر سیٹ ہیں، اس لیے کل نتیجہ رکھا گیا ہے. %sتمام عالمی اجازات ٹریس کریں%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'	=> 'فورم کی آزاد صارف اجازت <samp>ہاں<samp> بتاتی ہے جو موجودہ مقامی نتیجہ  <samp>کبھی نہیں</samp> کی جگہ لیتا ہے. %sتمام عالمی اجازات ٹریس کریں%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'فورم کی آزاد صارف اجازت <samp>کبھی نہیں<samp> بتاتی ہے جو مقامی اجازت پر اثر انداز نہیں ہے. %sتمام عالمی اجازات ٹریس کریں%s',
	'TRACE_USER_FOUNDER'	=> 'یہ صارف بانی ہے، اس لیے تمام انتظامی اجازات <samp>ہاں</samp> ہیں.',
	'TRACE_USER_KEPT'	=> 'اس صارف کی اجازت <samp>نہیں<samp> ہے اور پرانی کل قیمت رکھی گئی ہے.',
	'TRACE_USER_KEPT_LOCAL'	=> 'اس فورم کے لیے صارف کی اجازت <samp>نہیں<samp> ہے اور پرانی کل قیمت رکھی گئی ہے.',
	'TRACE_USER_NEVER_TOTAL_NEVER'	=> 'اس صارف کی اجازت <samp>کبھی نہیں<samp> ہے اور کل قیمت بھی  <samp>کبھی نہیں </samp> رکھی گئی ہے، اسلیے کچھ نہیں بدلا',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'اس فورم کیلیے صارف کی اجازت <samp>کبھی نہیں<samp> ہے اور کل قیمت بھی  <samp>کبھی نہیں </samp> رکھی گئی ہے، اسلیے کچھ نہیں بدلا',
	'TRACE_USER_NEVER_TOTAL_NO'	=> 'صارف کی اجازت <samp>کبھی نہیں</samp> پر سیٹ ہے کو نئی کل قیمت بن گئی ہے کیونکہ پہلے یہ <samp>نہیں</samp> پر سیٹ تھی',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'	=> 'اس فورم کیلیے صارف کی اجازت <samp>کبھی نہیں</samp> پر سیٹ ہے کو نئی کل قیمت بن گئی ہے کیونکہ پہلے یہ <samp>نہیں</samp> پر سیٹ تھی',
	'TRACE_USER_NEVER_TOTAL_YES'	=> 'اس صارف کی اجازت <samp>کبھی نہیں</samp> پر سیٹ ہے اور پرانی قیمت <samp>ہاں</samp> کی جگہ لیتی ہے',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'	=> 'اس فورم کے لیے  صارف کی اجازت <samp>کبھی نہیں</samp> پر سیٹ ہے اور پرانی قیمت <samp>ہاں</samp> کی جگہ لیتی ہے',
	'TRACE_USER_NO_TOTAL_NO'	=> 'صارف کی اجازت <samp>نہیں</samp> ہے اور کل قیمت بھی نہیں پر رکھی گئی تھی،  اس لیے یہ طے شدہ طور پر <samp>کبھی نہیں</samp> ہو گئی ہے',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'	=> 'اس فورم کے لیے صارف کی اجازت <samp>نہیں</samp> ہے اور کل قیمت بھی نہیں پر رکھی گئی تھی،  اس لیے یہ طے شدہ طور پر <samp>کبھی نہیں</samp> ہو گئی ہے',
	'TRACE_USER_YES_TOTAL_NEVER'	=> 'اس صارف کی اجازت <samp>ہاں</samp> ہے لیکن <samp>کبھی نہیں</samp> کی جگہ نہیں لی جا سکی',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'	=> 'اس فورم کے لیے صارف کی اجازت <samp>ہاں</samp> ہے لیکن <samp>کبھی نہیں</samp> کی جگہ نہیں لی جا سکی',
	'TRACE_USER_YES_TOTAL_NO'	=> 'اس صارف کی اجازت <samp>ہاں</samp> ہے جو کل قیمت بن گئی ہے کیونکہ پہلے یہ <samp>نہیں</samp> پر سیٹ تھی',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'	=> 'اس فورم کے لیے صارف کی اجازت <samp>ہاں</samp> ہے جو کل قیمت بن گئی ہے کیونکہ پہلے یہ <samp>نہیں</samp> پر سیٹ تھی',
	'TRACE_USER_YES_TOTAL_YES'	=> 'اس صارف کی اجازت <samp>ہاں<samp> ہے اور کل قیمت بھی  <samp>ہاں</samp> رکھی گئی ہے، اسلیے کچھ نہیں بدلا',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'	=> 'اس فورم کے لیے صارف کی اجازت <samp>ہاں<samp> ہے اور کل قیمت بھی  <samp>ہاں</samp> رکھی گئی ہے، اسلیے کچھ نہیں بدلا',
	'TRACE_WHO'	=> 'کون',
	'TRACE_TOTAL'	=> 'ٹوٹل',
	'USERS_NOT_ASSIGNED'	=> 'یہ کردار کسی صارف پر لاگو نہیں ہوا',
	'USER_IS_MEMBER_OF_DEFAULT'	=> 'مندرجہ ذیل پہلے سے طے شدہ گروہ کے رکن ہیں',
	'USER_IS_MEMBER_OF_CUSTOM'	=> 'مندرجہ ذیل صارف کے طے شدہ گروہ کے رکن ہیں',
	'VIEW_ASSIGNED_ITEMS'	=> 'لاگو ہوئیں اشیاء دیکھیں',
	'VIEW_LOCAL_PERMS'	=> 'مقامی اجازات',
	'VIEW_GLOBAL_PERMS'	=> 'عالمی اجازات',
	'VIEW_PERMISSIONS'	=> 'اجازات دیکھیں',
	'WRONG_PERMISSION_TYPE'	=> 'اجازت کی غلط قسم منتخب کی گئی',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'اجازات کی ترتیبات غلط ہیں، PHPbb انہیں ٹھیک طرح سے کاروائی میں نہیں لا پا رہا',
));

?>