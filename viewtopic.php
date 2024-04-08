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
	'APPROVE'				=> '승인',
	'ATTACHMENT'				=> '첨부',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> '첨부기능 비활성화 됨.',

	'BOOKMARK_ADDED'		=> '주제를 북마크.',
	'BOOKMARK_ERR'			=> '주제 북마크 실패. 다시 해 보세요.',
	'BOOKMARK_REMOVED'		=> '북마크 주제 제거.',
	'BOOKMARK_TOPIC'		=> '북마크 주제',
	'BOOKMARK_TOPIC_REMOVE'	=> '북마크에서 제거',
	'BUMPED_BY'	=> '%1$s가 %2$s에 최근 BUMP.',
	'BUMP_TOPIC'	=> '주제 BUMP',

	'DELETE_TOPIC'			=> '주제 삭제',
	'DELETED_INFORMATION'	=> '%1$s에의해 %2$s 최근 지워짐',
	'DISAPPROVE'			=> '비승인',
	'DOWNLOAD_NOTICE'		=> '이 게시물에 첨부된 파일을 볼 수 있는 권한이 없습니다',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> '%2$s이(가) %3$s에 마지막으로 편집했으며 총 %1$d번 편집했습니다.',
		2	=> '%2$s이(가) %3$s에 마지막으로 편집했으며 총 %1$d번 편집했습니다..',
	),
	'EMAIL_TOPIC'			=> '메일 주제',
	'ERROR_NO_ATTACHMENT'	=> '선택한 첨부가 없음.',

	'FILE_NOT_FOUND_404'	=> '파일 <strong>%s</strong> 없음.',
	'FORK_TOPIC'			=> '주제 복사',
	'FULL_EDITOR'			=> '전체 편집 &amp; 미리보기',

	'LINKAGE_FORBIDDEN'	=> '이 사이트를 보거나 다운로드하거나 링크할 권한이 없습니다.',
	'LOGIN_NOTIFY_TOPIC'	=> '이 주제에 대한 알림을 받았으니, 로그인해서 보세요.',
	'LOGIN_VIEWTOPIC'	=> '등록하고 로그인해서 이 주제를 보세요.',

	'MAKE_ANNOUNCE'		=> '“공지”로 변경',
	'MAKE_GLOBAL'		=> '“글로벌”로 변경',
	'MAKE_NORMAL'		=> '“표준 글”로 변경',
	'MAKE_STICKY'		=> '“고정 글”로 변경',
	'MAX_OPTIONS_SELECT'	=> array(
		1	=> ' <strong>%d</strong> 옵션 선택 가능',
		2	=> '최대 <strong>%d</strong> 옵션 선택 가능',
	),
	'MISSING_INLINE_ATTACHMENT'	=> '첨부 <strong>%s</strong> 더 이상 사용 불가',
	'MOVE_TOPIC'			=> '주제 이동',

	'NO_ATTACHMENT_SELECTED'=> '다운로드하거나 볼 첨부 파일을 선택하지 않았습니다.',
	'NO_NEWER_TOPICS'		=> '이 포럼에는 새로운 주제가 없습니다.',
	'NO_OLDER_TOPICS'		=> '이 포럼에는 이전 주제가 없습니다.',
	'NO_UNREAD_POSTS'		=> '이 포럼에는 안 읽은 새 주제가 없습니다.',
	'NO_VOTE_OPTION'		=> '옵션을 지정해서 투표하세요.',
	'NO_VOTES'			=> '투표 없음',
	'NO_AUTH_PRINT_TOPIC'	=> '주제를 인쇄할 권한 없음.',

	'POLL_ENDED_AT'			=> '%s에서 투표 끝',
	'POLL_RUN_TILL'			=> '투표는 %s까지',
	'POLL_VOTED_OPTION'		=> '이 옵션에 투표함',
	'POST_DELETED_RESTORE'	=> '이 글은 지워졌습니다. 복원 가능.',
	'PRINT_TOPIC'			=> '인쇄 보기',

	'QUICK_MOD'			=> '빠른 모드 도구',
	'QUICKREPLY'			=> '빠른 답장',

	'REPLY_TO_TOPIC'		=> '주제에 답글',
	'RESTORE'			=> '복원',
	'RESTORE_TOPIC'			=> '주제 복원',
	'RETURN_POST'			=> '%s포스트로 돌아가기%s',

	'SUBMIT_VOTE'			=> '투표 제출',

	'TOPIC_TOOLS'			=> '주제 도구',
	'TOTAL_VOTES'			=> '전체 투표',

	'UNLOCK_TOPIC'			=> '주제 잠금해제',

	'VIEW_INFO'			=> '게시 상세',
	'VIEW_NEXT_TOPIC'		=> '다음 주제',
	'VIEW_PREVIOUS_TOPIC'	=> '이전 주제',
	'VIEW_RESULTS'			=> '결과 보기',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d 글',
		2	=> '%d 글',
	),
	'VIEW_UNREAD_POST'		=> '안 읽은 첫 글',
	'VOTE_SUBMITTED'		=> '투표 됨.',
	'VOTE_CONVERTED'		=> '변환된 투표는 투표 변경이 지원되지 않음.',
));
