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
	'ADMIN_SIG_PREVIEW'		=> '서명 미리보기',
	'AT_LEAST_ONE_FOUNDER'	=> '이 설립자를 일반 사용자로 변경할 수 없습니다. 이 보드에 활성화된 설립자가 하나 이상 있어야 합니다. 이 사용자의 설립자 상태를 변경하려면 먼저 다른 사용자를 설립자로 승격하십시오.',

	'BAN_ALREADY_ENTERED'	=> '이전에 차단이 성공적으로 입력되었습니다. 차단 목록이 업데이트되지 않았습니다.',
	'BAN_SUCCESSFUL'		=> '차단 입력 성공.',

	'CANNOT_BAN_ANONYMOUS'		=> '익명 계정을 차단할 수 없습니다. 익명 사용자에 대한 권한은 권한 탭에서 설정할 수 있습니다.',
	'CANNOT_BAN_FOUNDER'			=> '설립자 계정을 차단할 수 없습니다.',
	'CANNOT_BAN_YOURSELF'			=> '자신을 차단할 수 없습니다.',
	'CANNOT_DEACTIVATE_BOT'			=> '봇 계정을 비활성화할 수 없습니다. 대신 봇 페이지에서 봇을 비활성화하십시오.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> '설립자 계정을 비활성화할 수 없습니다.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> '자신의 계정을 비활성화할 수 없습니다.',
	'CANNOT_FORCE_REACT_BOT'		=> '봇 계정을 강제로 재활성화할 수 없습니다. 대신 봇 페이지 내에서 봇을 다시 활성화하십시오.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> '설립자 계정을 강제로 재활성화할 수 없습니다.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> '자신 계정을 강제로 재활성화할 수 없습니다.',
	'CANNOT_REMOVE_ANONYMOUS'	=> '손님 사용자 계정을 없앨 수 없습니다.',
	'CANNOT_REMOVE_FOUNDER'		=> '설립자 계정을 없앨 수 없습니다.',
	'CANNOT_REMOVE_YOURSELF'	=> '자신 계정을 없앨 수 없습니다.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> '무시된 사용자를 창립자로 승격시킬 수 없음.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> '사용자를 창립자로 승격시키기 전에 사용자를 활성화해야 합니다. 활성화된 사용자만 승격될 수 있습니다.',
	'CONFIRM_EMAIL_EXPLAIN'		=> '사용자 이메일 주소를 변경하는 경우에만 지정하면 됩니다.',

	'DELETE_POSTS'			=> '글 삭제',
	'DELETE_USER'			=> '사용자 삭제',
	'DELETE_USER_EXPLAIN'	=> '사용자 삭제는 최종이며 복구할 수 없습니다. 이 사용자가 보낸 읽지 않은 개인 메시지는 삭제되며 수신자는 사용할 수 없습니다.',

	'FORCE_REACTIVATION_SUCCESS'	=> '성공적으로 강제 재활성.',
	'FOUNDER'			=> '설립자',
	'FOUNDER_EXPLAIN'		=> '설립자는 모든 관리 권한을 가지며 비설립자 구성원이 차단, 삭제 또는 변경할 수 없습니다.',

	'GROUP_APPROVE'			=> '회원 승인',
	'GROUP_DEFAULT'			=> '회원 기본 그룹으로 설정',
	'GROUP_DELETE'			=> '그룹에서 회원 제거',
	'GROUP_DEMOTE'			=> '그룹 리더 강등',
	'GROUP_PROMOTE'			=> '그룹 리더로 승격',

	'IP_WHOIS_FOR'			=> '%s 후이즈 IP',

	'LAST_ACTIVE'			=> '최근 활성',

	'MOVE_POSTS_EXPLAIN'	=> '포럼을 선택해서 이사용자가 작성한 모든 게시물을 옮기세요.',

	'NO_SPECIAL_RANK'		=> '특정 순위 할당 없음',
	'NO_WARNINGS'			=> '경고 없음.',
	'NOT_MANAGE_FOUNDER'	=> '설립자 상태의 사용자를 관리하려 했습니다. 설립자만이 다른 설립자를 관리할 수 있습니다.',

	'QUICK_TOOLS'			=> '빠른도구',

	'REGISTERED'			=> '등록됨',
	'REGISTERED_IP'			=> 'IP로 등록',
	'RETAIN_POSTS'			=> 'Retain posts',

	'SELECT_FORM'			=> 'form 선택',
	'SELECT_USER'			=> '사용자 선택',

	'USER_ADMIN'				=> '사용자 관리',
	'USER_ADMIN_ACTIVATE'			=> '계정 활성',
	'USER_ADMIN_ACTIVATED'			=> '사용자 활성 성공.',
	'USER_ADMIN_AVATAR_REMOVED'		=> '사용자 계정에서 아바타 지움.',
	'USER_ADMIN_BAN_EMAIL'			=> '이메일로 차단',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> '사용자 관리로 이메일 차단',
	'USER_ADMIN_BAN_IP'				=> 'IP 차단',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP가 사용자 관리로 차단됨',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Username banned via user management',
	'USER_ADMIN_BAN_USER'			=> '사용자 이름 차단',
	'USER_ADMIN_DEACTIVATE'			=> '계정 비활성화',
	'USER_ADMIN_DEACTIVED'			=> '사용자 비활성화 성공.',
	'USER_ADMIN_DEL_ATTACH'			=> '모든 첨부 삭제',
	'USER_ADMIN_DEL_AVATAR'			=> '아바타 삭제',
	'USER_ADMIN_DEL_OUTBOX'			=> '빈 PM 발신함',
	'USER_ADMIN_DEL_POSTS'			=> '모든 글 삭제',
	'USER_ADMIN_DEL_SIG'			=> '서명 삭제',
	'USER_ADMIN_EXPLAIN'			=> '여기에서 사용자 정보 및 특정 특정 옵션을 변경할 수 있습니다.',
	'USER_ADMIN_FORCE'			=> '강제 재활성화',
	'USER_ADMIN_LEAVE_NR'			=> '새로 등록된 항목에서 제거',
	'USER_ADMIN_MOVE_POSTS'			=> '모든 글 이동',
	'USER_ADMIN_SIG_REMOVED'		=> '사용자 계정에서 서명을 성공적으로 제거했습니다.',
	'USER_ATTACHMENTS_REMOVED'		=> '이 사용자가 만든 모든 첨부 제거 성공.',
	'USER_AVATAR_NOT_ALLOWED'		=> '아바타가 허용되지 않았기 때문에 아바타를 표시할 수 없습니다.',
	'USER_AVATAR_UPDATED'			=> '사용자 아바타 정보를 성공적으로 업데이트했습니다.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> '현재 아바타 유형이 허용되지 않아 표시할 수 없습니다.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> '사용자 정의 프로필 핀드',
	'USER_DELETED'					=> '사용자 삭제 성공.',
	'USER_GROUP_ADD'				=> '사용자를 그룹에 추가',
	'USER_GROUP_NORMAL'				=> '사용자가 속한 사용자 정의 그룹',
	'USER_GROUP_PENDING'			=> '그룹 사용자 보류 모드',
	'USER_GROUP_SPECIAL'			=> '사용자가 속한 미리정의된 그룹',
	'USER_LIFTED_NR'				=> '사용자의 신규 등록 상태 제거 성공.',
	'USER_NO_ATTACHMENTS'			=> '표시할 청부 없음.',
	'USER_NO_POSTS_TO_DELETE'			=> '보유하거나 지울 글 없음.',
	'USER_OUTBOX_EMPTIED'			=> '사용자의 비공개 메시지 발신함을 성공적으로 비웠습니다.',
	'USER_OUTBOX_EMPTY'				=> '사용자의 비공개 메시지 발신함이 이미 비어 있습니다.',
	'USER_OVERVIEW_UPDATED'			=> '사용자 정보 업데이트.',
	'USER_POSTS_DELETED'			=> '이 사용자가 작성한 모든 게시물을 성공적으로 제거했습니다.',
	'USER_POSTS_MOVED'				=> '사용자 게시물을 대상 포럼으로 성공적으로 이동했습니다.',
	'USER_PREFS_UPDATED'			=> '사용자 기본설정 업데이트.',
	'USER_PROFILE'					=> '사용자 프로필',
	'USER_PROFILE_UPDATED'			=> '사용자 프로필 업데이트.',
	'USER_RANK'				=> '사용자 순위',
	'USER_RANK_UPDATED'				=> '사용자 순위 업데이트.',
	'USER_SIG_UPDATED'				=> '사용자 서명 업데이트 성공.',
	'USER_WARNING_LOG_DELETED'		=> '정보 없음. 로그 항목이 지워졌을 수 있음.',
	'USER_TOOLS'					=> '기본 도구',
));
