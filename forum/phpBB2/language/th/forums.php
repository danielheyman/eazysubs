<?php
/** 
* ภาษาไทย เวอร์ชั่น 1.0.0 
* 05/06/2551 
* ไฟล์ภาษาไทยสำหรับ PHPBB3 โดย www.mindphp.com และ www.phpbbthailand.com
*
*/ 


/**
*
* acp_forums [English]
*
* @package language
* @version $Id: forums.php,v 1.32 2007/10/05 13:14:58 kellanved Exp $
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'อายุการโพสต์ของการตัดทอนอัตโนมัต',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'จำนวนวันนับจากการโพสต์ครั้งสุดท้ายที่กระทู้จะถูกลบ',
	'AUTO_PRUNE_FREQ'			=> 'ความถี่ของการตัดทอนอัตโนมัต',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'เวลาในระหว่างวันที่ทำการตัดทอน',
	'AUTO_PRUNE_VIEWED'			=> 'อายุการดูโพสต์ของ Auto-prune',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'จำนวนวันตั้งแต่การดูโพสต์ครั้งสุดท้ายที่กระทู้จะถูกลบ',

	'COPY_PERMISSIONS'				=> 'คัดลอกการอนุญาตจาก',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'เมื่อบอร์ด ถูกสร้างขึ้น มันจะมีการอนุญาตเหมือนกับที่คุณเลือกที่นี่ ถ้าไม่มีบอร์ด ถูกเลือก บอร์ดใหม่ที่ถูกสร้างนี้จะยังไม่สามารถใช้ได้ จนกว่าการอนุญาต จะถูกตั้งค่า',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'ถ้าคุณเลือกที่จะคัดลอกการอนุญาต forum จะมีการอนุญาตเหมือนกับที่คุณเลือกที่นี่ การกระทำนี้จะเขียนทับการอนุญาตที่คุณได้ตั้งค่ามาก่อนหน้านี้ ',
	'CREATE_FORUM'					=> 'สร้างบอร์ดใหม่',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'ลบเนื้อหาหรือย้ายไปที่บอร์ด',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'ลบบอร์ดย่อย หรือย้ายไปที่บอร์ดหลัก',
	'DEFAULT_STYLE'						=> 'รูปแบบมาตฐาน',
	'DELETE_ALL_POSTS'					=> 'ลบโพสต์',
	'DELETE_SUBFORUMS'					=> 'ลบบอร์ดย่อยและโพสต์',
	'DISPLAY_ACTIVE_TOPICS'				=> 'ทำให้กระทู้ที่แอคทีฟใช้ได้',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'ถ้าตั้งค่าเป็น ใช่ กระทู้แอคทีฟที่เลือกใน บอร์ดย่อยจะถูกแสดงภายใต้หมวดนี้',

	'EDIT_FORUM'					=> 'แก้ไขบอร์ด',
	'ENABLE_INDEXING'				=> 'ทำให้การค้นหาดัชนีใช้การได้',
	'ENABLE_INDEXING_EXPLAIN'		=> 'ถ้าตั้งค่าเป็น ใช่ โพสต์ที่เกิดในกระทู้นี้ จะถูกทำดัชนีเพื่อการค้นหา',
	'ENABLE_POST_REVIEW'			=> 'ทำให้การดูโพสต์ใช้ได้',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'ถ้าตั้งค่าเป็น ใช่ ผู้ใช้สามารถดูโพสต์ของตัวเอง ค่านี้ไม่ควรใช้สำหรับแชทบอร์ด',
	'ENABLE_RECENT'					=> 'แสดงกระทู้แอคทีฟ',
	'ENABLE_RECENT_EXPLAIN'			=> 'ถ้าตั้งค่าเป็น ใช่ กระทู้ที่เกิดในบอร์ดจะถูกแสดงใน รายการกระทู้แอคทีฟ',
	'ENABLE_TOPIC_ICONS'			=> 'ทำให้ไอคอนกระทู้ใช้งานได้',

	'FORUM_ADMIN'						=> 'Forum administration',
	'FORUM_ADMIN_EXPLAIN'				=> 'ใน phpBB3 แต่ละบอร์ดสามารถมีจำนวนบอร์ดย่อยได้ไม่จำกัด และสามารถกำหนดว่าอันไหนสามารถโพสต์ได้หรือไม่ได้ คุณสามารถเพิ่ม แก้ไข ลบ ล็อค แก้ล็อค แต่ละบอร์ด ได้เหมือนกับการควบคุมเพิ่มเติม ถ้าโพสต์และกระทู้ จำนวนไม่ถูกตรง คุณสามารถให้ระบบนับจำนวนใหม่เพื่อให้ตรงกันได้ <strong>คุณต้องคัดลอกหรือตั้งค่าการอนุญาตที่เหมาะสมให้กับบอร์ดที่สร้างขึ้น เพื่อให้สามารถใช้การได้</strong>',
	'FORUM_AUTO_PRUNE'					=> 'ทำให้การการตัดทอนอัตโนมัตใช้งานได้',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'ตัดทอนบอร์ด ของกระทู้, ตั้งค่า ความถี่/อายุ โดยพารามิเตอร์ข้างล่าง',
	'FORUM_CREATED'						=> 'สร้างบอร์ดสำเร็จ',
	'FORUM_DATA_NEGATIVE'				=> 'ค่าการ ตัดแต่ง ไม่สามารถเป็นค่าลบได้',
	'FORUM_DESC_TOO_LONG'				=> 'คำอธิบายบอร์ดยาวเกินไป, ต้องไม่เกิน 4000 ตัวอักษร',
	'FORUM_DELETE'						=> 'ลบบอร์ด',
	'FORUM_DELETE_EXPLAIN'				=> 'คุณสามารถลบบอร์ดนี้ได้ คุณสามารถเลือกได้ว่าจะเก็บกระทู้ทั้งหมดหรือบอร์ดไว้ที่ไหน',
	'FORUM_DELETED'						=> 'ลบบอร์ดเรียบร้อยแล้ว',
	'FORUM_DESC'						=> 'คำอธิบาย',
	'FORUM_DESC_EXPLAIN'				=> 'โค้ด HTML ใดๆที่กรอก ที่นี่จะถูกแสดงทุกอย่างที่เป็นข้อความธรรมดา',
	'FORUM_EDIT_EXPLAIN'				=> 'คุณสามารถปรับแต่งบอร์ดนี้ โปรดทราบว่าการแก้ไข และการควบคุมการนับโพสต์ถูกตั้งค่าผ่านทางการอนุญาตสำหรับแต่ละผู้ใช้และกลุ่มผู้ใช้ ',
	'FORUM_IMAGE'						=> 'ภาพประจำบอร์ดนี้',
	'FORUM_IMAGE_EXPLAIN'				=> 'เส้นทางที่สัมพันธ์กับไดเรกทอรี่ราก phpBB ของภาพที่เกี่ยวข้องกับบอร์ด',
	'FORUM_LINK_EXPLAIN'				=> 'Full URL (including the protocol, i.e.: <samp>http://</samp>) to the destination location that clicking this forum will take the user, e.g.: <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK'					=> 'ติดตามเส้นทางการเปลี่ยนหน้า',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Records the number of times a forum link was clicked.',
	'FORUM_NAME'						=> 'ชื่อบอร์ด',
	'FORUM_NAME_EMPTY'					=> 'คุณต้องกรอกชื่อสำหรับบอร์ดนี้',
	'FORUM_PARENT'						=> 'บอร์ดหลัก',
	'FORUM_PASSWORD'					=> 'รหัสผ่านบอร์ด',
	'FORUM_PASSWORD_CONFIRM'			=> 'ยืนยันรหัสผ่านบอร์ด',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'ต้องตั้งค่าเมื่อมีการกรอกรหัสผ่านของบอร์ด',
	'FORUM_PASSWORD_EXPLAIN'			=> 'กำหนดรหัสผ่าน ของบอร์ด',
	'FORUM_PASSWORD_UNSET'				=> 'ลบรหัสผ่านบอร์ด',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'เลือกตัวเลือกนี้ถ้าคุณต้องการลบรหัสผ่านบอร์ด',
	'FORUM_PASSWORD_OLD'				=> 'รหัสผ่านบอร์ดใช้การเข้ารหัสแบบเก่า ควรเปลี่ยน',
	'FORUM_PASSWORD_MISMATCH'			=> 'รหัสผ่านที่คุณกรอกไม่สามารถจับคู่ได้',
	'FORUM_PRUNE_SETTINGS'				=> 'การตั้งค่าการตัดทอนบอร์ด',
	'FORUM_RESYNCED'					=> 'นับจำนวนโพสต์และบอร์ด “%s” สำเร็จ ',
	'FORUM_RULES_EXPLAIN'				=> 'กฎของบอร์ด ถูกแสดงทุกหน้าในบอร์ด ที่เลือก',
	'FORUM_RULES_LINK'					=> 'ลิงค์ไปกฎของบอร์ด',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'คุณสามารถกรอก URL ของหน้าที่มีกฎการใช้บอร์ด ค่านี้จะทับข้อความที่คุณระบุ',
	'FORUM_RULES_PREVIEW'				=> 'ดูกฎบอร์ดก่อน',
	'FORUM_RULES_TOO_LONG'				=> 'ข้อความกฎบอร์ดต้องมีไม่เกิน 4000 อักษร',
	'FORUM_SETTINGS'					=> 'การตั้งค่าบอร์ด',
	'FORUM_STATUS'						=> 'สถานะของบอร์ด',
	'FORUM_STYLE'						=> 'รูปแบบของบอร์ด',
	'FORUM_TOPICS_PAGE'					=> 'จำนวนกระทู้ต่อหนึ่งหน้า',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'ถ้ามีค่าไม่เป็น 0 ค่านี้จะถูกใช้แทนค่าเริ่มต้น',
	'FORUM_TYPE'						=> 'รูปแบบบอร์ด',
	'FORUM_UPDATED'						=> 'อัพเดทข้อมูลบอร์ดสำเร็จ',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'คุณต้องการเปลี่ยนบอร์ด ที่มีบอร์ดย่อยไปเป็นลิงค์ คุณต้องย้ายบอร์ดย่อยท้งหมดออกจากบอร์ดหลัก ก่อนคุณจะทำการเปลี่ยน ',

	'GENERAL_FORUM_SETTINGS'	=> 'การตั้งค่าบอร์ดทั่วไป',

	'LINK'					=> 'ลิงค์',
	'LIST_INDEX'			=> 'รายการบอร์ดย่อยในบอร์ดหลัก',
	'LIST_INDEX_EXPLAIN'	=> 'แสดงบอร์ดนี้ในดัชนีและที่อื่นในรูปแบบลิงค์ ',
	'LIST_SUBFORUMS'			=> 'แสดงบอร์ดย่อย',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'แสดงบอร์ดย่อยในหน้าหลัก จะแสดงลิงค์ไปหาบอร์ดย่อย จากบอร์ดหลัก ',

	'LOCKED'				=> 'ล็อก',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'บอร์ดที่คุณเลือกที่จะย้าย ไม่สามารถโพสต์ได้ โปรดเลือกอันที่โพสต์ได้',
	'MOVE_POSTS_TO'					=> 'ย้ายโพสต์ไปที่',
	'MOVE_SUBFORUMS_TO'				=> 'บอร์ดย่อยไปที่',

	'NO_DESTINATION_FORUM'			=> 'คุณไม่ได้ระบุบอร์ดที่จะย้ายเนื้อหาไป',
	'NO_FORUM_ACTION'				=> 'ไม่มีการระบุกระทำที่ทำกับเนื้อหาบอร์ด',
	'NO_PARENT'						=> 'ไม่มีบอร์ดหลัก',
	'NO_PERMISSIONS'				=> 'ไม่คัดลอกการอนุญาต',
	'NO_PERMISSION_FORUM_ADD'		=> 'คุณไม่มีสิทธิ์ที่จะเพิ่มบอร์ด',
	'NO_PERMISSION_FORUM_DELETE'	=> 'คุณไม่มีสิทธิ์ที่จะลบบอร์ด',

	'PARENT_IS_LINK_FORUM'		=> 'ลิงค์แม่ที่คุณเลือกเป็นบอร์ดลิงค์ บอร์ดลิงค์ ไม่สามารถถือ บอร์ดอื่นๆได้, โปรดระบุหมวดหรือบอร์ด เป็นบอร์ดหลัก',
	'PARENT_NOT_EXIST'			=> 'บอร์ดหลักไม่มีอยู่จริง',
	'PRUNE_ANNOUNCEMENTS'		=> 'การประกาศการตัดแต่ง',
	'PRUNE_STICKY'				=> 'ตัดทอนกระทู้ปักหมุด',
	'PRUNE_OLD_POLLS'			=> 'ตัดแต่งแบบสำรวจเก่า',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'ลบกระทู้ที่แบบสำรวจไม่มีการโหวดเป็นระยะเวลานาน',

	'REDIRECT_ACL'	=> 'คุณสามารถตั้งค่า %s การอนุญาต%s สำหรับบอร์ดนี้',

	'SYNC_IN_PROGRESS'			=> 'กำลังปรับจำนวนโพสต์ของบอร์ด',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'ตอนนี้ปรับจำนวนโพสต์แล้วจาก %1$d/%2$d.',

	'TYPE_CAT'			=> 'หมวดหมู่',
	'TYPE_FORUM'		=> 'บอร์ด',
	'TYPE_LINK'			=> 'ลิงค์',

	'UNLOCKED'			=> 'ปกติ',
));

?>