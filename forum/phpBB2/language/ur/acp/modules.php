<?php
/**
*
* acp_modules.php [Urdu]
*
* @package language
* @version $Id: $
* @copyright (c) 2010 phpBB Group
* @author 2010-11-27 - phpBB Group
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Here you are able to manage all kind of modules. Please note that the ACP has a three-level menu structure (Category -> Category -> Module) whereby the others having a two-level menu structure (Category -> Module) which must be kept. Please also be aware that you may lock out yourself if you disable or delete the modules responsible for the module management itself.',
	'ADD_MODULE'	=> 'ماڈیول شامل کریں',
	'ADD_MODULE_CONFIRM'	=> 'کیا آپ واقعی منتخب کردہ طریقہ کے ساتھ منتخب شدہ ماڈیول کو شامل کرنا چاہتے ہیں؟',
	'ADD_MODULE_TITLE'	=> 'ماڈیول شامل کریں',
	'CANNOT_REMOVE_MODULE'	=> 'ماڈیول ختم نہیں‌کر سکتے. اس میں ذیلی ماڈیول ہیں. اس عمل سے پہلے انہیں ختم کریں',
	'CATEGORY'	=> 'زمرہ',
	'CHOOSE_MODE'	=> 'ماڈیول کا طریقہ منتخب کریں',
	'CHOOSE_MODE_EXPLAIN'	=> 'استعمال ہو رہا ماڈیول کا طریقہ منتخب کریں',
	'CHOOSE_MODULE'	=> 'ماڈیول شامل کریں',
	'CHOOSE_MODULE_EXPLAIN'	=> 'اس ماڈیول کی طرف سے عمل والی فائل منتخب کریں',
	'CREATE_MODULE'	=> 'نیا ماڈیول شامل کریں',
	'DEACTIVATED_MODULE'	=> 'غیر فعال ماڈیول',
	'DELETE_MODULE'	=> 'ماڈیول حذف کریں',
	'DELETE_MODULE_CONFIRM'	=> 'کیا آپ واقعی اس ماڈیول حذف کرنا چاہتے ہیں؟',
	'EDIT_MODULE'	=> 'ماڈیول ترمیم کریں',
	'EDIT_MODULE_EXPLAIN'	=> 'یہاں آپ ماڈیول کی خصوصی ترتیبات داخل کر سکتے ہیں.',
	'HIDDEN_MODULE'	=> 'خفیہ ماڈیول',
	'MODULE'	=> 'ماڈیول',
	'MODULE_ADDED'	=> 'ماڈیول کامیابی سے شامل کر دیا گیا',
	'MODULE_DELETED'	=> 'ماڈیول کامیابی سے ختم کر دیا گیا',
	'MODULE_DISPLAYED'	=> 'ماڈیول ظاہرکر دیا گیا',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'اگر آپ ماڈیول ظاہر نہیں کرنا چاہتے لیکن اسے ااستعمال کرنا چاہتے ہیں تو اسے "نہیں" پر سیٹ کریں',
	'MODULE_EDITED'	=> 'ماڈیول کامیابی سے ترمیم کر دیا گیا',
	'MODULE_ENABLED'	=> 'ماڈیول فعال کر دیا گیا',
	'MODULE_LANGNAME'	=> 'ماڈیول ذبان کا نام',
	'MODULE_LANGNAME_EXPLAIN'	=> 'ظاہر کیا گیا ماڈیول کا نام لکھیں. اگر نام زبان فائل میں سے ہے تو کانسٹنٹ استعمال کریں',
	'MODULE_TYPE'	=> 'ماڈیول کی قسم',
	'NO_CATEGORY_TO_MODULE'	=> 'ذمرہ کو ماڈیول میں تبدیل نہیں کر سکتے. اس عمل سے پہلے تمام ذیلی ہٹائیں',
	'NO_MODULE'	=> 'کوئی ماڈیول نہیں ملا',
	'NO_MODULE_ID'	=> 'کوئی ماڈیول شناخت واضح‌نہیں کی گئی',
	'NO_MODULE_LANGNAME'	=> 'کوئی ماڈیول زبان نام واضح‌نہیں کیا گیا',
	'NO_PARENT'	=> 'کوئی بڑا نہیں',
	'PARENT'	=> 'سر پرست',
	'PARENT_NO_EXIST'	=> 'کوئی سرپرست نہیں',
	'SELECT_MODULE'	=> 'ماڈیول منتخب کریں',
));

?>