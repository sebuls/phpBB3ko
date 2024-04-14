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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
	'ACL_CAT_ACTIONS'	=> '액션',
	'ACL_CAT_CONTENT'	=> '콘텐트',
	'ACL_CAT_FORUMS'	=> '포럼',
	'ACL_CAT_MISC'		=> '기타',
	'ACL_CAT_PERMISSIONS'	=> '권한',
	'ACL_CAT_PM'		=> '비공개 메시지',
	'ACL_CAT_POLLS'		=> '투표',
	'ACL_CAT_POST'		=> '게시',
	'ACL_CAT_POST_ACTIONS'	=> '액션 게시',
	'ACL_CAT_POSTING'	=> '게시',
	'ACL_CAT_PROFILE'	=> '프로필',
	'ACL_CAT_SETTINGS'	=> '설정',
	'ACL_CAT_TOPIC_ACTIONS'	=> '주제 액션',
	'ACL_CAT_USER_GROUP'	=> '사용자 &amp; 그룹',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> '프로필, 회원 목록 및 온라인 목록을 볼 수 있음',
	'ACL_U_CHGNAME'		=> '사용자 이름 변경 가능',
	'ACL_U_CHGPASSWD'	=> '암호 변경 가능',
	'ACL_U_CHGEMAIL'	=> '이메일 변경 가능',
	'ACL_U_CHGAVATAR'	=> '아바타 변경 가능',
	'ACL_U_CHGGRP'		=> '기본 사용자 그룹 변경 가능',
	'ACL_U_CHGPROFILEINFO'	=> '프로필 필드 정보 변경 가능',

	'ACL_U_ATTACH'		=> '파일 첨부 가능',
	'ACL_U_DOWNLOAD'	=> '파일 다운로드 가능',
	'ACL_U_SAVEDRAFTS'	=> '초안 저장 가능',
	'ACL_U_CHGCENSORS'	=> '단어 검열 비활성 가능',
	'ACL_U_SIG'		=> '서명 사용 가능',
	'ACL_U_EMOJI'		=> '주제 제목에 이모지 및 서식 있는 텍스트 문자 사용 가능',

	'ACL_U_SENDPM'		=> '개인 메시지 발신 가능',
	'ACL_U_MASSPM'		=> '여러 사용자에게 개인 메시지 발신 가능',
	'ACL_U_MASSPM_GROUP'	=> '그룹에 개인 메시지 발신 가능',
	'ACL_U_READPM'		=> '개인 메시지 읽기 가능',
	'ACL_U_PM_EDIT'		=> '자신의 개인 메시지 편집 가능',
	'ACL_U_PM_DELETE'	=> '자신의 폴더에서 비공개 메시지를 삭제 가능',
	'ACL_U_PM_FORWARD'	=> '개인 메시지 전달 가능',
	'ACL_U_PM_EMAILPM'	=> '개인 메시지 메일 발송 가능',
	'ACL_U_PM_PRINTPM'	=> '개인 메시지 인쇄 가능',
	'ACL_U_PM_ATTACH'	=> '개인 메시지에 파일 첨부 가능',
	'ACL_U_PM_DOWNLOAD'	=> '개인 메시지 파일 다운로드 가능',
	'ACL_U_PM_BBCODE'	=> '개인 메시지에 BBCode 가능',
	'ACL_U_PM_SMILIES'	=> '개인 메시지에 스마일리 가능',
	'ACL_U_PM_IMG'		=> '개인 메시지에 [img] BBCode 태그 사용 가능',
	'ACL_U_PM_FLASH'	=> '개인 메시지에 [flash] BBCode 태그 사용 가능',

	'ACL_U_SENDEMAIL'	=> '메일 발송 가능',
	'ACL_U_SENDIM'		=> '인스턴트 메시지 발송 가능',
	'ACL_U_IGNOREFLOOD'	=> '플러드 제한 무시 가느',
	'ACL_U_HIDEONLINE'	=> '온라인 상태 숨기기 가능',
	'ACL_U_VIEWONLINE'	=> '숨은 온라인 사용자 보기 가능',
	'ACL_U_SEARCH'		=> '보드 검색 가능',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> '포럼 보기 가능',
	'ACL_F_LIST_TOPICS'	=> '주제 보기 가능',
	'ACL_F_READ'		=> '포럼 읽기 가능',
	'ACL_F_SEARCH'		=> '포럼 검색 가능',
	'ACL_F_SUBSCRIBE'	=> '포럼 구독 가능',
	'ACL_F_PRINT'		=> '주제 인쇄 가능',
	'ACL_F_EMAIL'		=> '주제 이메일 가능',
	'ACL_F_BUMP'		=> '주제 범프 가능',
	'ACL_F_USER_LOCK'	=> '자신의 주제 잠금 가능',
	'ACL_F_DOWNLOAD'	=> '파일 다운로드 가능',
	'ACL_F_REPORT'		=> '글 신고 가능',

	'ACL_F_POST'		=> '새 주제 시작 가능',
	'ACL_F_STICKY'		=> '스티커 게시 가능',
	'ACL_F_ANNOUNCE'	=> '공지 게시 가능',
	'ACL_F_ANNOUNCE_GLOBAL'	=> '글로벌 공지 게시 가능',
	'ACL_F_REPLY'		=> '주제에 댓글 가능',
	'ACL_F_EDIT'		=> '자신 글 수정 가능',
	'ACL_F_DELETE'		=> '자신의 글 영구 삭제 가능',
	'ACL_F_SOFTDELETE'	=> '자신의 게시물 일시 삭제 가능<br /><em>게시물 승인 권한이 있는 중재자는 일시 삭제된 게시물을 복원할 수 있습니다.</em>',
	'ACL_F_IGNOREFLOOD' 	=> '플러드 제한 무시 가능',
	'ACL_F_POSTCOUNT'	=> '게시물 카운터 증가<br /><em>이 설정은 새 게시물에만 영향을 미칩니다.</em>',
	'ACL_F_NOAPPROVE'	=> '승인 없이 게시 가능',

	'ACL_F_ATTACH'		=> '파일 첨부 가능',
	'ACL_F_ICONS'		=> '주제/게시물 아이콘 사용 가능',
	'ACL_F_BBCODE'		=> 'BBCode 사용 가능',
	'ACL_F_FLASH'		=> '[flash] BBCode 태그 사용 가능',
	'ACL_F_IMG'		=> '[img] BBCode 태그 사용 가능',
	'ACL_F_SIGS'		=> '서명 사용 가능',
	'ACL_F_SMILIES'		=> '스마일리 사용 가능',

	'ACL_F_POLL'		=> '설문 생성 가능',
	'ACL_F_VOTE'		=> '설문 투표 가능',
	'ACL_F_VOTECHG'		=> '기존 투표 변경 가능',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> '글 편집 가능',
	'ACL_M_DELETE'		=> '글 영구 삭제 가능',
	'ACL_M_SOFTDELETE'	=> 'Can soft delete posts<br /><em>Moderators, who have the approve posts permission, can restore soft deleted posts.</em>',
	'ACL_M_APPROVE'		=> '글 승인 및 복구 가능',
	'ACL_M_REPORT'		=> '보고 닫기 및 지우기 가능',
	'ACL_M_CHGPOSTER'	=> '글 저자 변경 가능',

	'ACL_M_MOVE'	=> '토픽 이동 가능',
	'ACL_M_LOCK'	=> '토픽 잠금 가능',
	'ACL_M_SPLIT'	=> '토픽 분리 가능',
	'ACL_M_MERGE'	=> '토픽 병합 가능',

	'ACL_M_INFO'	=> '글 상세 보기 가능',
	'ACL_M_WARN'	=> '경고 이슈 가능<br /><em>이 설정은 전역으로만 할당. 포럼 기반 아님.</em>', // This moderator setting is only global (and not local)
	'ACL_M_PM_REPORT'	=> 'Can close and delete reports of private messages<br /><em>This setting is only assigned globally. It is not forum based.</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'		=> 'Can manage bans<br /><em>This setting is only assigned globally. It is not forum based.</em>', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'Can alter board settings/check for updates',
	'ACL_A_SERVER'		=> 'Can alter server/communication settings',
	'ACL_A_JABBER'		=> 'Can alter Jabber settings',
	'ACL_A_PHPINFO'		=> 'php 설정 보기',

	'ACL_A_FORUM'		=> '포럼 관리 가능',
	'ACL_A_FORUMADD'	=> '새 포럼 추가 가능',
	'ACL_A_FORUMDEL'	=> '포럼 삭제 가능',
	'ACL_A_PRUNE'		=> '포럼 가지치기 가능',

	'ACL_A_ICONS'		=> 'Can alter topic/post icons and smilies',
	'ACL_A_WORDS'		=> 'Can alter word censors',
	'ACL_A_BBCODE'		=> 'Can define BBCode tags',
	'ACL_A_ATTACH'		=> 'Can alter attachment related settings',

	'ACL_A_USER'		=> 'Can manage users<br /><em>This also includes seeing the users browser agent within the viewonline list.</em>',
	'ACL_A_USERDEL'		=> 'Can delete/prune users',
	'ACL_A_GROUP'		=> 'Can manage groups',
	'ACL_A_GROUPADD'	=> 'Can add new groups',
	'ACL_A_GROUPDEL'	=> 'Can delete groups',
	'ACL_A_RANKS'		=> 'Can manage ranks',
	'ACL_A_PROFILE'		=> 'Can manage custom profile fields',
	'ACL_A_NAMES'		=> 'Can manage disallowed names',
	'ACL_A_BAN'		=> 'Can manage bans',

	'ACL_A_VIEWAUTH'	=> 'Can view permission masks',
	'ACL_A_AUTHGROUPS'	=> 'Can alter permissions for individual groups',
	'ACL_A_AUTHUSERS'	=> 'Can alter permissions for individual users',
	'ACL_A_FAUTH'		=> 'Can alter forum permission class',
	'ACL_A_MAUTH'		=> 'Can alter moderator permission class',
	'ACL_A_AAUTH'		=> 'Can alter admin permission class',
	'ACL_A_UAUTH'		=> 'Can alter user permission class',
	'ACL_A_ROLES'		=> 'Can manage roles',
	'ACL_A_SWITCHPERM'	=> 'Can use others permissions',

	'ACL_A_STYLES'		=> 'Can manage styles',
	'ACL_A_EXTENSIONS'	=> 'Can manage extensions',
	'ACL_A_VIEWLOGS'	=> 'Can view logs',
	'ACL_A_CLEARLOGS'	=> 'Can clear logs',
	'ACL_A_MODULES'		=> 'Can manage modules',
	'ACL_A_LANGUAGE'	=> 'Can manage language packs',
	'ACL_A_EMAIL'		=> 'Can send mass email',
	'ACL_A_BOTS'		=> 'Can manage bots',
	'ACL_A_REASONS'		=> 'Can manage report/denial reasons',
	'ACL_A_BACKUP'		=> 'Can backup/restore database',
	'ACL_A_SEARCH'		=> 'Can manage search backends and settings',
));
