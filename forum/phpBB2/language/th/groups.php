<?php
/** 
* ภาษาไทย เวอร์ชั่น 1.ๅ.0 
* 27/11/2553
* ไฟล์ภาษาไทยสำหรับ PHPBB3 โดย www.mindphp.com และ www.phpbbthailand.com
*
* groups [Thai]
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
	'ALREADY_DEFAULT_GROUP'				=> 'ขณะนี้กลุ่มผู้ใช้ที่คุณเลือกถูกกำหนดเป็นค่าเริ่มต้นอยู่แล้ว',
	'ALREADY_IN_GROUP'					=> 'คุณเป็นสมาชิกของกลุ่มผู้ใช้นี่อยู่แล้ว',
	'ALREADY_IN_GROUP_PENDING'			=> 'คุณถูกร้องขอให้เป็นสมาชิกของกลุ่มผู้ใช้นี้',
	'CANNOT_JOIN_GROUP'			=> 'คุณไม่สามารถเข้าร่วมกลุ่มนี้ได้. คุณสามารถเข้าร่วมกลุ่มที่เปิด และเปิดอย่างอิสระเท่านั้น.',
	'CANNOT_RESIGN_GROUP'		=> 'คุณไม่สามารถลาออกจากกลุ่มนี้. คุณไม่สามารถลาออกจากกลุ่มที่เปิดและเปิดอย่างเสรีเท่านั้น.',	
	'CHANGED_DEFAULT_GROUP'				=> 'การเปลี่ยนกลุ่มผู้ใช้เรียบร้อยแล้ว',
	
	'GROUP_AVATAR'						=> 'ไอคอนประจำกลุ่ม', 
	'GROUP_CHANGE_DEFAULT'				=> 'คุณแน่ใจไช่ไหม ที่ต้องการเปลี่ยนกลุ่มผู้ใช้ “%s”?',
	'GROUP_CLOSED'						=> 'ถูกปิด',
	'GROUP_DESC'						=> 'รายละเอียดกลุ่ม',
	'GROUP_HIDDEN'						=> 'ซ่อน',
	'GROUP_INFORMATION'					=> 'ข้อมูลของกลุ่มผุ้ใช้', 
	'GROUP_IS_CLOSED'					=> 'กลุ่มนี้ถูกปิด,สมาชิกใหม่สามารถเข้ามาร่วมเป็นสมาชิกได้ ก็ต่อเมื่อผู้นำกลุ่มเชื้อเชิญเท่านั้น',
	'GROUP_IS_FREE'						=> 'กลุ่มนี้เปิดอิสระ, ยินดีต้อนรับสมาชิกใหม่', 
	'GROUP_IS_HIDDEN'					=> 'กลุ่มนี้ถูกซ่อน, มีเพียงสมาชิกเท่านั้นที่สามารถเห็นสมาชิกท่านอื่นได้',
	'GROUP_IS_OPEN'						=> 'กลุ่มนี้ถูกเปิด, สมาชิกสามารถสมัครได้แล้ว',
	'GROUP_IS_SPECIAL'					=> 'กลุ่มนี้พิเศษ, โดยกลุ่มนี้ถูกดูแลโดยผู้ดูแลบอร์ด', 
	'GROUP_JOIN'						=> 'เข้าร่วมกลุ่ม',
	'GROUP_JOIN_CONFIRM'				=> 'คุณแน่ใจแล้วหรือว่าต้องการเข้าร่วมกลุ่มที่เลือก?',
	'GROUP_JOIN_PENDING'				=> 'ต้องการเข้ากลุ่ม',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'คุณแน่ใจใช่ไหม ที่จะร้องขอการเข้ากลุ่มนี้?',
	'GROUP_JOINED'						=> 'เข้าร่วมกลุ่มที่เลือกเรียบร้อยแล้ว',
	'GROUP_JOINED_PENDING'				=> 'การร้องขอการเป็นสมาชิกของกลุ่มนี้เสร็จเรียบร้อยแล้ว. กรุณารอผู้นำกลุ่มอนุมัติการสมัครของคุณ.',
	
	'GROUP_LIST'						=> 'จัดการผู้ใช้งาน',
	'GROUP_MEMBERS'						=> 'สมาชิกกลุ่ม',
	'GROUP_NAME'						=> 'ชื่อกลุ่ม',
	'GROUP_OPEN'						=> 'เปิด',
	'GROUP_RANK'						=> 'อันดับของกลุ่ม', 
	'GROUP_RESIGN_MEMBERSHIP'			=> 'ออกจากสมาชิกกลุ่ม',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'คุณแน่ใจใช่ไหมที่ต้องการออกจากการเป็นสมาชิกของกลุ่มที่คุณเลือก?',
	'GROUP_RESIGN_PENDING'				=> 'Resign a pending group membership',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Are you sure you want to resign your pending membership from the selected group?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'คุณได้ย้ายออกจากกลุ่มนี้เรียบร้อยแล้ว.',
	'GROUP_RESIGNED_PENDING'			=> 'Your pending membership was successfully removed from the selected group.',
	'GROUP_TYPE'						=> 'ประเภทกลุ่ม',
	'GROUP_UNDISCLOSED'					=> 'ซ่อนกลุ่ม',
	'FORUM_UNDISCLOSED'					=> 'Moderating hidden forum(s)',

	'LOGIN_EXPLAIN_GROUP'			=> 'คุณต้องเข้าสู่ระบบก่อน จึงจะดูข้อมูลของกลุ่มสมาชิกนี้ได้',

	'NO_LEADERS'					=> 'คุณไม่ได้เป็นผู้นำของกลุ่มใดเลย',
	'NOT_LEADER_OF_GROUP'			=> 'The requested operation cannot be taken because you are not a leader of the selected group.',
	'NOT_MEMBER_OF_GROUP'			=> 'The requested operation cannot be taken because you are not a member of the selected group or your membership has not been approved yet.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'You are not allowed to resign from your default group.',
	
	'PRIMARY_GROUP'		=> 'กลุ่มหลัก',

	'REMOVE_SELECTED'		=> 'ลบที่เลือก',

	'USER_GROUP_CHANGE'			=> 'จาก “%1$s” กลุ่ม “%2$s”',
	'USER_GROUP_DEMOTE'			=> 'ความเป็นผู้นำถูกลดระดัับ',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Are you sure you want to demote as group leader from the selected group?',
	'USER_GROUP_DEMOTED'		=> 'Successfully demoted your leadership.',
));

?>