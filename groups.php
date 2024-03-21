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
	'ALREADY_DEFAULT_GROUP'		=> '선택한 그룹은 이미 기본 그룹입니다.',
	'ALREADY_IN_GROUP'		=> '선택한 그룹의 회원입니다.',
	'ALREADY_IN_GROUP_PENDING'	=> '선택한 그룹에 이미 가입을 요청했습니다.',

	'CANNOT_JOIN_GROUP'		=> '이 그룹에 가입할 수 없습니다. 개방적이고 자유로운 그룹에만 가입할 수 있습니다.',
	'CANNOT_RESIGN_GROUP'		=> '이 그룹에서 탈퇴할 수 없습니다. 공개 및 자유롭게 공개된 그룹에서만 탈퇴할 수 있습니다.',
	'CHANGED_DEFAULT_GROUP'		=> '성공적으로 기본 그룹을 바꾸었습니다.',

	'GROUP_AVATAR'			=> '그룹 아바타',
	'GROUP_CHANGE_DEFAULT'		=> '기본 회원을 "%s" 그룹으로 변경하시겠습니까?',
	'GROUP_CLOSED'			=> '닫힘',
	'GROUP_DESC'			=> '그룹 설명',
	'GROUP_HIDDEN'				=> '숨김',
	'GROUP_INFORMATION'			=> '사용자그룹 정보',
	'GROUP_IS_CLOSED'			=> '비공개 그룹입니다. 새 회원은 그룹 리더의 초대가 있어야만 가입할 수 있습니다.',
	'GROUP_IS_FREE'				=> '자유롭게 개방된 그룹입니다. 모든 신규 회원을 환영합니다.',
	'GROUP_IS_HIDDEN'			=> '숨겨진 그룹입니다. 이 그룹의 회원만 회원을 볼 수 있습니다.',
	'GROUP_IS_OPEN'				=> '이 그룹은 공개 그룹입니다. 회원이 가입을 신청할 수 있습니다.',
	'GROUP_IS_SPECIAL'			=> '이것은 특수 그룹이며, 특수 그룹은 게시판 관리자가 관리합니다.',
	'GROUP_JOIN'				=> '그룹 가입',
	'GROUP_JOIN_CONFIRM'			=> '선택한 그룹에 가입하겠습니까?',
	'GROUP_JOIN_PENDING'			=> '그룹 가입 요청',
	'GROUP_JOIN_PENDING_CONFIRM'		=> '선택한 그룹에 가입요청하겠습니까?',
	'GROUP_JOINED'				=> '선택한 그룹에 성공적으로 가입.',
	'GROUP_JOINED_PENDING'			=> '그룹 멤버십 요청에 성공했습니다. 그룹 리더가 회원 자격을 승인할 때까지 기다리십시오.',
	'GROUP_LIST'				=> '사용자 관리',
	'GROUP_MEMBERS'				=> '그룹 회원',
	'GROUP_NAME'				=> '그룹 이름',
	'GROUP_OPEN'				=> 'Open',
	'GROUP_RANK'				=> '그룹 순위',
	'GROUP_RESIGN_MEMBERSHIP'		=> '그루 탈퇴',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> '선택한 그룹에서 나가겠습니까?',
	'GROUP_RESIGN_PENDING'			=> '보류중 그룹 멤버십 탈퇴',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> '선택한 그룹에서 보류 중인 멤버십을 탈퇴하시겠습니까?',
	'GROUP_RESIGNED_MEMBERSHIP'		=> '선택한 그룹에서 성공적으로 제거되었습니다.',
	'GROUP_RESIGNED_PENDING'		=> '선택한 그룹에서 보류 중인 멤버십이 성공적으로 제거되었습니다.',
	'GROUP_TYPE'				=> '그룹 유형',
	'GROUP_UNDISCLOSED'			=> '숨은 그룹',
	'FORUM_UNDISCLOSED'			=> '숨은 포럼 검토',

	'LOGIN_EXPLAIN_GROUP'	=> '로그인 해서 그룹 상세를 보세요.',

	'NO_LEADERS'				=> '어느 그룹의 리더도 아닙니다.',
	'NOT_LEADER_OF_GROUP'			=> '선택한 그룹의 리더가 아니므로 요청한 작업을 수행할 수 없습니다.',
	'NOT_MEMBER_OF_GROUP'			=> '선택한 그룹의 회원이 아니거나 아직 회원 자격이 승인되지 않았기 때문에 요청한 작업을 수행할 수 없습니다.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> '기본 그룹에서 탈퇴할 수 없습니다.',

	'PRIMARY_GROUP'		=> '기본 그룹',

	'REMOVE_SELECTED'		=> '선택 삭제',

	'USER_GROUP_CHANGE'			=> '“%1$s” 그룹에서“%2$s”으로',
	'USER_GROUP_DEMOTE'			=> '리더십 강등',
	'USER_GROUP_DEMOTE_CONFIRM'	=> '선택한 그룹에서 그룹 리더로 강등하시겠습니까?',
	'USER_GROUP_DEMOTED'		=> '리더십 강등에 성공했습니다.',
));
