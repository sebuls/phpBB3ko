<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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
	'ACP_MASS_EMAIL_EXPLAIN'		=> '여기서는 모든 사용자 또는 특정 그룹 <strong>모든 사용자에게 대량 이메일을 활성화 할 수 있는 옵션이 있는 모든 사용자에게 메시지를 이메일로 전자 메일로 전송할 수 있습니다</strong>. 이를 달성하기 위해 이메일은 모든 수신자에게 BCC(Blind Carbon Copy) 보내면서 제공된 관리 이메일 주소로 전송됩니다. 기본 설정은 이러한 이메일에 20 명의 수신자 만 포함하는 것입니다. 더 많은 수신자는 더 많은 이메일이 전송됩니다. 많은 사람들에게 이메일을 보내면 제출 한 후 인내심을 갖고 페이지를 중간에 중지하지 마십시오. 대량 이메일이 오랜 시간이 걸리는 것은 정상입니다. 스크립트가 완료되면 알림을 받게됩니다.',
	'ALL_USERS'		=> '모든 사용자',

	'COMPOSE'		=> '구성',

	'EMAIL_SEND_ERROR'	=> '이메일을 보내는 동안 하나 이상의 오류가있었습니다. Please check the %sError log%s for detailed error messages.',
	'EMAIL_SENT'		=> '메시지 전송 됨.',
	'EMAIL_SENT_QUEUE'	=> '메시지 대기.',

	'LOG_SESSION'		=> '로그 메일 세션 중요한 로그 메일 세션',

	'SEND_IMMEDIATELY'	=> '바로 보내기',
	'SEND_TO_GROUP'		=> '그룹 보내기',
	'SEND_TO_USERS'		=> '사용자에게 보내기',
	'SEND_TO_USERS_EXPLAIN'	=> '여기에 이름을 입력하면 위에서 선택한 그룹이 무시됩니다. 새 라인에 각 사용자 이름을 입력하십시오.',

	'MAIL_BANNED'		=> '메일 차단 사용자',
	'MAIL_BANNED_EXPLAIN'	=> '대량 이메일을 그룹에 보낼 때 금지 된 사용자도 이메일을 받을지 여부를 여기에서 선택할 수 있습니다.',
	'MAIL_HIGH_PRIORITY'	=> '높음',
	'MAIL_LOW_PRIORITY'	=> '낮음',
	'MAIL_NORMAL_PRIORITY'	=> '보통',
	'MAIL_PRIORITY'		=> '메일 우선 순위',
	'MASS_MESSAGE'		=> '메시지',
	'MASS_MESSAGE_EXPLAIN'	=> '일반 텍스트만 입력. 모든 마크업은 지워집니다.',

	'NO_EMAIL_MESSAGE'	=> '메시지를 입력하세요.',
	'NO_EMAIL_SUBJECT'	=> '메시지 주제를 입력하세요.',
));
