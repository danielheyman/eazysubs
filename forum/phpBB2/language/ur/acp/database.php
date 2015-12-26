<?php
/**
*
* acp_database.php [Urdu]
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
	'ACP_BACKUP_EXPLAIN'	=> 'آپ یہاں‌تمام phpBB سے متعلقہ مواد بیک اپ کر سکتے ہیں. آپکے لیے ضروری ہے کہ آپ اسے <samp>ذخیرہ</samp> میں‌رکھیں‌یا ڈائون لوڈ کریں. ',
	'ACP_RESTORE_EXPLAIN'	=> 'یہ phpBB کو مکمل طور پر ری سٹور کر دے گا. اگر آپکا سرور حمایت کرتا ہے تو آپ gzip یا bzip2 کمپریس ہوئی ٹیکسٹ‌فائل استعمال کر سکتے ہیں جو خود بہ خود ڈی-کمپریس ہو سکتی ہیں. <strong>تنبیہ</strong> یہ کوئی بھی موجودہ ڈیٹا بدل دے گا. ',
	'BACKUP_DELETE'	=> 'بیک اپ فائل کامیابی سے حذف کر دی گئی ہے',
	'BACKUP_INVALID'	=> 'منتخب بیک-اپ کی فائل درست نہیں‌ہے',
	'BACKUP_OPTIONS'	=> 'بیک-اپ کے اختیارات',
	'BACKUP_SUCCESS'	=> 'بیک اپ فائل کامیابی سے بنا دی گئی ہے',
	'BACKUP_TYPE'	=> 'بیک اپ کی قسم',
	'DATABASE'	=> 'ڈیٹا بیس کے آلات',
	'DATA_ONLY'	=> 'صرف ڈیٹا',
	'DELETE_BACKUP'	=> 'بیک-اپ حذف کریں',
	'DELETE_SELECTED_BACKUP'	=> 'کیا آپ واقعی بیک-اپ حذف کرنا چاہتے ہیں؟',
	'DESELECT_ALL'	=> 'تمام غیر منتخب',
	'DOWNLOAD_BACKUP'	=> 'بیک-اپ ڈائون لوڈ کریں',
	'FILE_TYPE'	=> 'فائل کی قسم',
	'FILE_WRITE_FAIL'	=> 'فائل کو ذخیرہ فولڈر میں‌رکھنے میں‌ناکامی',
	'FULL_BACKUP'	=> 'مکمل',
	'RESTORE_FAILURE'	=> 'بیاپ فائل خراب بھی ہو سکتی ہے',
	'RESTORE_OPTIONS'	=> 'ری سٹور کے اختیارات',
	'RESTORE_SUCCESS'	=> 'ڈیٹا بیس کامیابی سے ریسٹور کر دی گئی ہے. <br /><br /> آپکا بورڈ‌ واپیس اس حالت میں‌چلا جائے گا جب بیک-اپ بنایا گیا تھا',
	'SELECT_ALL'	=> 'تمام منتخب',
	'SELECT_FILE'	=> 'ایک فائل منتخب کریں',
	'START_BACKUP'	=> 'بیک-اپ شروع کریں',
	'START_RESTORE'	=> 'ریسٹور شروع کریں',
	'STORE_AND_DOWNLOAD'	=> 'ذخیرہ اور ڈائون لوڈ‌کریں',
	'STORE_LOCAL'	=> 'فائل مقامی سٹور کریں',
	'STRUCTURE_ONLY'	=> 'صرف ڈھانچہ',
	'TABLE_SELECT'	=> 'ٹیبل منتخب کریں',
	'TABLE_SELECT_ERROR'	=> 'آپکے لیے کم سے کم ایک ٹیبل منتخب کرنا ضروری ہے',
));

?>