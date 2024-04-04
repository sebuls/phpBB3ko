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

$lang = array_merge($lang, array(
	'ABOUT_USER'			=> '프로필',
	'ACTIVE_IN_FORUM'		=> '가장 활동적인 포럼',
	'ACTIVE_IN_TOPIC'		=> '가장 활동적인 주제',
	'ADD_FOE'			=> '적 추가',
	'ADD_FRIEND'			=> '친구 추가',
	'AFTER'				=> '이후',

	'ALL'				=> '모두',

	'BEFORE'			=> '이전',

	'CC_SENDER'			=> '당신에게 이메일 사본 보내기.',
	'CONTACT_ADMIN'			=> '보드 관리자에게 연락',

	'DEST_LANG'			=> '언어',
	'DEST_LANG_EXPLAIN'		=> '이 메시지의 수신자에게 적절한 언어(사용 가능한 경우)를 선택하십시오',

	'EDIT_PROFILE'			=> '프로필 편집',

	'EMAIL_BODY_EXPLAIN'	=> '이 메시지는 일반 텍스트로 전송되며 HTML 또는 BBCode를 포함하지 않습니다. 이 메시지의 회신 주소는 당신의 이메일 주소로 설정됩니다',
	'EMAIL_DISABLED'	=> '이메일 관련 기능이 비활성화되었습니다.',
	'EMAIL_SENT'		=> '메일 보냈습니다.',
	'EMAIL_TOPIC_EXPLAIN'	=> '이 메시지는 일반 텍스트로 전송되며 HTML 또는 BBCode를 포함하지 않습니다. 주제 정보는 이미 메시지에 포함되어 있습니다. 이 메시지의 회신 주소는 귀하의 이메일 주소로 설정됩니다.',
	'EMPTY_ADDRESS_EMAIL'	=> '수신자의 유효한 이메일 주소를 제공해야 합니다.',
	'EMPTY_MESSAGE_EMAIL'	=> '이메일로 보낼 메시지를 입력해야 합니다.',
	'EMPTY_MESSAGE_IM'	=> '보낼 메시지를 입력해야 합니다',
	'EMPTY_NAME_EMAIL'	=> '받는 사람의 실명을 입력해야 합니다.',
	'EMPTY_SENDER_EMAIL'	=> '유효한 이메일 주소를 제공해야 합니다.',
	'EMPTY_SENDER_NAME'	=> '이름을 제공해야 합니다.',
	'EMPTY_SUBJECT_EMAIL'	=> '이메일 제목을 지정해야 합니다.',
	'EQUAL_TO'		=> '동일',

	'FIND_USERNAME_EXPLAIN'	=> '특정 멤버를 검색하려면 이 양식을 사용하십시오. 모든 필드를 채울 필요는 없습니다. 부분 데이터를 일치시키려면 *를 와일드카드로 사용하십시오. 날짜를 입력할 때 <kbd>YYYY-MM-DD</kbd> 형식을 사용하십시오. <samp>2004-02-29</samp>. 표시 확인란을 사용하여 하나 이상의 사용자 이름을 선택하고(양식 자체에 따라 여러 사용자 이름이 허용될 수 있음) 이전 양식으로 돌아가려면 표시 선택 버튼을 클릭합니다.',
	'FLOOD_EMAIL_LIMIT'	=> '지금은 다른 이메일을 보낼 수 없습니다. 나중에 다시 시도하십시오.',

	'GROUP_LEADER'		=> '그룹 리더',

	'HIDE_MEMBER_SEARCH'	=> '멤버 검색 숨기기',

	'IM_ADD_CONTACT'	=> '연락처 추가',
	'IM_DOWNLOAD_APP'	=> '신청서 다운로드',
	'IM_JABBER'		=> '요청하지 않은 인스턴트 메시지를 받지 않도록 선택했을 수 있습니다.',
	'IM_JABBER_SUBJECT'	=> '자동 메시지이니 답장하지 마세요! %2$s에 %1$s 사용자가 보낸 메시지.',
	'IM_MESSAGE'		=> '당신의 메시지',
	'IM_NAME'		=> '이름',
	'IM_NO_DATA'		=> '이 사용자에게 적합한 연락처 정보가 없습니다.',
	'IM_NO_JABBER'		=> 'Jabber 사용자의 다이렉트 메시지는 이 보드에서 지원되지 않습니다. 위의 수신자에게 연락하려면 시스템에 Jabber 클라이언트가 설치되어 있어야 합니다.',
	'IM_RECIPIENT'		=> '수신자',
	'IM_SEND'		=> '문자 보내기',
	'IM_SEND_MESSAGE'	=> '문자 보내기',
	'IM_SENT_JABBER'	=> '%1$s에 대한 메시지가 성공적으로 전송되었습니다.',
	'IM_USER'		=> '인스턴트 메시지 보내기',
	'LAST_ACTIVE'		=> '최근 활성',
	'LESS_THAN'		=> '미만',
	'LIST_USERS'		=> array(
		1	=> '%d 사용자',
		2	=> '%d 사용자',
	),
	'LOGIN_EXPLAIN_TEAM'		=> '보드에서 팀 목록을 보려면 등록 및 로그인이 필요합니다.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> '회원 목록에 액세스하려면 등록 및 로그인이 필요합니다.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> '검색하려면 등록 및 로그인이 필요합니다.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> '프로필을 보려면 보드에 등록하고 로그인해야 합니다.',

	'MANAGE_GROUP'		=> '그룹 관리',
	'MORE_THAN'		=> '이상',

	'NO_CONTACT_FORM'	=> '게시판 관리자 문의 양식이 비활성화되었습니다.',
	'NO_CONTACT_PAGE'	=> '게시판 관리자 연락처가 비활성화되었습니다.',
	'NO_EMAIL'		=> '이 사용자에게 이메일을 보낼 권한이 없습니다.',
	'NO_VIEW_USERS'		=> '회원 목록 또는 프로필을 볼 수 있는 권한이 없습니다.',

	'ORDER'			=> '순서',
	'OTHER'			=> '다른',
	'POST_IP'		=> 'IP/domain에 게시',

	'REAL_NAME'		=> '수신자 이름',
	'RECIPIENT'		=> '수신자',
	'REMOVE_FOE'		=> '적 제거',
	'REMOVE_FRIEND'		=> '친구 제거',

	'SELECT_MARKED'		=> '표시 선택',
	'SELECT_SORT_METHOD'	=> '정렬 방법 선택',
	'SENDER_EMAIL_ADDRESS'	=> '당신의 메일주소',
	'SENDER_NAME'		=> '이름',
	'SEND_ICQ_MESSAGE'	=> 'ICQ 메시지 보내기',
	'SEND_IM'		=> '인스턴트 메시지',
	'SEND_JABBER_MESSAGE'	=> 'Jabber 메시지 보내기',
	'SEND_MESSAGE'		=> '메시지',
	'SEND_YIM_MESSAGE'	=> 'YIM 메시지 전송',
	'SORT_EMAIL'		=> '이메일',
	'SORT_LAST_ACTIVE'	=> '최근 활성',
	'SORT_POST_COUNT'	=> '글 수',

	'USERNAME_BEGINS_WITH'	=> '사용자 이름 시작',
	'USER_ADMIN'		=> '사용자 관리',
	'USER_BAN'		=> '차단',
	'USER_FORUM'		=> '사용자 통계',
	'USER_LAST_REMINDED'	=> array(
		0		=> '전송된 알림이 없습니다',
		1		=> '%1$d 알림 전송<br />» %2$s',
		2		=> '%1$d 알림 전송<br />» %2$s',
	),
	'USER_ONLINE'		=> '온라인',
	'USER_PRESENCE'		=> '보드 있음',
	'USERS_PER_PAGE'	=> '페이지당 사용자',

	'VIEWING_PROFILE'	=> '프로필 보기 - %s',
	'VIEW_FACEBOOK_PROFILE'	=> '페이스북 프로필 보기',
	'VIEW_SKYPE_PROFILE'	=> '스카이프 프로필 보기',
	'VIEW_TWITTER_PROFILE'	=> '트위터 프로필 보기',
	'VIEW_YOUTUBE_PROFILE'	=> '유튜브 프로필 보기',
));
