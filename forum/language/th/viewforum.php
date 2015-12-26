<?php
/** 
* ภาษาไทย เวอร์ชั่น 1.2.0 
* 26/11/2553 
* ไฟล์ภาษาไทยสำหรับ PHPBB3 โดย www.mindphp.com และ www.phpbbthailand.com
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

$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'			=> 'Active topics',
	'ANNOUNCEMENTS'			=> 'ประกาศ',

	'FORUM_PERMISSIONS'		=> 'การอนุญาตของคุณในบอร์ดนี้',

	'ICON_ANNOUNCEMENT'		=> 'ประกาศ',
	'ICON_STICKY'			=> 'ปักหมุด',

	'LOGIN_NOTIFY_FORUM'	=> 'คุณได้รับแจ้งจากหัวข้อ นี้ให้เข้าสู่ระบบก่อนจึงจะสามารถเข้าใช้งานได้',

	'MARK_TOPICS_READ'		=> 'บันทึกว่าอ่านทุกหัวข้อแล้ว',
	
	'NEW_POSTS_HOT'			=> 'โพสต์ใหม่ [ ยอดนิยม ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> 'โพสต์ใหม่ [ ล็อค ]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'ไม่มีโพสต์ใหม่ [ ยอดนิยม ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'ไม่มีโพสต์ใหม่ [ ถูกเล็อค ]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'คุณไม่สามารถอ่านกระทู้ในบอร์ดนี้ได้.',
	'NO_UNREAD_POSTS_HOT'		=> 'ไม่มีโพสที่ยัีงไม่ได้อ่าน [ ยอดนิยม ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'ไม่มีโพสที่ยัีงไม่ได้อ่าน [ ล็อค ]',

	'POST_FORUM_LOCKED'		=> 'บอร์ดนี้ถูกล็อก',

	'TOPICS_MARKED'			=> 'หัวข้อสำหรับบอร์ดนี้ขณะนี้ได้มีการทำเครื่องหมายว่าอ่านแล้ว.',

	'UNREAD_POSTS_HOT'		=> 'โพสที่ยังไม่ได้อ่าน [ ยอดนิยม ]',
	'UNREAD_POSTS_LOCKED'	=> 'โพสที่ยังไม่ได้อ่าน [ ถูกล็อค ]',
	

	'VIEW_FORUM'			=> 'บอร์ด',
	'VIEW_FORUM_TOPIC'		=> '1 หัวข้อ',
	'VIEW_FORUM_TOPICS'		=> '%d หัวข้อ',
));

?>