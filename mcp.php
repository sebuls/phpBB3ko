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
	'ACTION'			=> '액션',
	'ACTION_NOTE'			=> '액션/노트',
	'ADD_FEEDBACK'			=> '피드백 추가',
	'ADD_FEEDBACK_EXPLAIN'	=> '보고서를 추가하려면 다음 양식을 작성하십시오. 일반 텍스트만 사용하십시오.; HTML, BBCode, 등은 안 됩니다.',
	'ADD_WARNING'			=> '경고 추가',
	'ADD_WARNING_EXPLAIN'	=> '이 사용자에게 경고를 보내려면 다음 양식을 작성하십시오. 일반 텍스트만 사용하십시오. HTML, BBCode 등은 허용되지 않습니다..',
	'ALL_ENTRIES'			=> '모든 항목',
	'ALL_NOTES_DELETED'		=> '모든 사용자 메모를 성공적으로 지웠습니다.',
	'ALL_REPORTS'			=> '모든 보고',
	'ALREADY_REPORTED'		=> '이 글은 이미 보고됨.',
	'ALREADY_REPORTED_PM'	=> '이 비공개 메시지는 이미 신고됨.',
	'ALREADY_WARNED'		=> '이 게시물에 대해 이미 경고가 발령되었습니다.',
	'APPROVE'			=> '승인',
	'APPROVE_POST'			=> '글 승인',
	'APPROVE_POST_CONFIRM'	=> '이 게시물을 승인하시겠습니까?',
	'APPROVE_POSTS'			=> '글 승인',
	'APPROVE_POSTS_CONFIRM'	=> '선택한 게시물을 승인하시겠습니까?',
	'APPROVE_TOPIC'			=> '주제 승인',
	'APPROVE_TOPIC_CONFIRM'	=> '이 주제를 승인하시겠습니까?',
	'APPROVE_TOPICS'		=> '주제 승인',
	'APPROVE_TOPICS_CONFIRM'=> '선택한 주제를 승인하시겠습니까?',

	'CANNOT_MOVE_SAME_FORUM'=> '이미 있는 포럼으로 주제를 이동할 수 없습니다.',
	'CANNOT_WARN_ANONYMOUS'	=> '등록되지 않은 손님에게 경고할 수 없습니다.',
	'CANNOT_WARN_SELF'		=> '자신에게 경고할 수 없음.',
	'CAN_LEAVE_BLANK'		=> '빈 칸 가능.',
	'CHANGE_POSTER'			=> '포스터 변경',
	'CLOSE_PM_REPORT'		=> 'PM 보고 닫기',
	'CLOSE_PM_REPORT_CONFIRM'	=> '선택한 PM 보고서를 닫으시겠습니까?',
	'CLOSE_PM_REPORTS'		=> 'PM 보고서 닫기',
	'CLOSE_PM_REPORTS_CONFIRM'	=> '선택한 PM 보고서를 닫으시겠습니까?',
	'CLOSE_REPORT'			=> '보고 닫기',
	'CLOSE_REPORT_CONFIRM'	=> '선택한 보고서를 닫으시겠습니까?',
	'CLOSE_REPORTS'			=> '보고 닫기',
	'CLOSE_REPORTS_CONFIRM'	=> '선택한 보고서를 닫으시겠습니까?',

	'DELETE_PM_REPORT'			=> 'PM 보고 지움',
	'DELETE_PM_REPORT_CONFIRM'	=> '선택한 PM 보고서를 삭제하시겠습니까??',
	'DELETE_PM_REPORTS'			=> 'PM 보고 지움',
	'DELETE_PM_REPORTS_CONFIRM'	=> '선택한 PM 보고서를 삭제하시겠습니까?',
	'DELETE_POSTS'				=> '글 지움',
	'DELETE_REPORT'				=> '보고 지움',
	'DELETE_REPORT_CONFIRM'		=> '선택한 보고서를 삭제하시겠습니까?',
	'DELETE_REPORTS'			=> '보고 지움',
	'DELETE_REPORTS_CONFIRM'	=> '선택한 보고서를 삭제하시겠습니까?',
	'DELETE_SHADOW_TOPIC'		=> '그림자 주제 지움',
	'DELETE_TOPICS'				=> '선택한 주제 지움',
	'DISAPPROVE'				=> '미승인',
	'DISAPPROVE_REASON'			=> '미승인 사유',
	'DISAPPROVE_POST'			=> '글 미승인',
	'DISAPPROVE_POST_CONFIRM'	=> '이 글 미승인하겠습니까?',
	'DISAPPROVE_POSTS'			=> '글 미승인',
	'DISAPPROVE_POSTS_CONFIRM'	=> '이 글 미승인하겠습니까?',
	'DISPLAY_LOG'				=> '이전 항목 표시',
	'DISPLAY_OPTIONS'			=> '표시 옵션',

	'EMPTY_REPORT'			=> '이 이유를 선택할 때 설명을 입력해야 합니다.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> '하나 또는 여러 개의 주제가 비어 있거나 비어 있기 때문에 데이터베이스에서 제거되었습니다.',

	'FEEDBACK'				=> '피드백',
	'FORK'					=> '복사',
	'FORK_TOPIC'			=> '주제 복사',
	'FORK_TOPIC_CONFIRM'	=> '이 주제 복사?',
	'FORK_TOPICS'			=> '선택 주제 복사',
	'FORK_TOPICS_CONFIRM'	=> '선택한 주제를 복사하시겠습니까?',
	'FORUM_DESC'			=> '설명',
	'FORUM_NAME'			=> '포럼 이름',
	'FORUM_NOT_EXIST'		=> '선택한 포럼 없음.',
	'FORUM_NOT_POSTABLE'	=> '선택한 포럼에 쓸 수 없음.',
	'FORUM_STATUS'			=> '포럼 상태',
	'FORUM_STYLE'			=> '포럼 스타일',

	'GLOBAL_ANNOUNCEMENT'	=> '전체 공지',

	'IP_INFO'				=> 'IP 주소 정보',
	'IPS_POSTED_FROM'		=> '사용자가 게시한 IP 주소',

	'LATEST_LOGS'				=> '최근 5 로그 앤션',
	'LATEST_REPORTED'			=> '최근 5 보고',
	'LATEST_REPORTED_PMS'		=> '최근 5 PM 보고',
	'LATEST_UNAPPROVED'			=> '최근 5 글 승인 대기',
	'LATEST_WARNING_TIME'		=> '최근 경고 이슈',
	'LATEST_WARNINGS'			=> '최근 5 경고',
	'LEAVE_SHADOW'				=> '그림자 주제 그대로',
	'LIST_REPORTS'				=> array(
		1	=> '%d 보고',
		2	=> '%d 보고',
	),
	'LOCK'				=> '잠금',
	'LOCK_POST_POST'		=> '포스트 잠금',
	'LOCK_POST_POST_CONFIRM'	=> '이 글을 편집하지 못하게 하시겠습니까?',
	'LOCK_POST_POSTS'		=> '선택한 글 잠금',
	'LOCK_POST_POSTS_CONFIRM'	=> '이 글을 편집하지 못하게 하시겠습니까?',
	'LOCK_TOPIC_CONFIRM'		=> '이 주제를 잠그시겠습니까?',
	'LOCK_TOPICS'			=> '선택한 주제 잠금',
	'LOCK_TOPICS_CONFIRM'		=> '선택한 주제를 모두 잠그시겠습니까?',
	'LOGS_CURRENT_TOPIC'		=> '현재 보는 로그:',
	'LOGIN_EXPLAIN_MCP'		=> '이 포럼을 조정하려면 로그인.',
	'LOGVIEW_VIEWPOST'		=> '글 보기',
	'LOGVIEW_VIEWTOPIC'		=> '주제 보기',
	'LOGVIEW_VIEWLOGS'		=> '주제 로그 보기',
	'LOGVIEW_VIEWFORUM'		=> '포럼 보기',
	'LOOKUP_ALL'			=> '모든 IP 조회',
	'LOOKUP_IP'			=> 'IP 조회',

	'MARKED_NOTES_DELETED'		=> '표시된 모든 사용자 메모를 성공적으로 제거했습니다.',

	'MCP_ADD'			=> '경고 추가',

	'MCP_BAN'				=> '차단',
	'MCP_BAN_EMAILS'			=> '메일 차단',
	'MCP_BAN_IPS'				=> 'IP 차단',
	'MCP_BAN_USERNAMES'			=> '사용자명 차단',

	'MCP_LOGS'				=> '중재자 로그',
	'MCP_LOGS_FRONT'			=> '첫 페이지',
	'MCP_LOGS_FORUM_VIEW'			=> '포럼 로그',
	'MCP_LOGS_TOPIC_VIEW'			=> '주제 로그',

	'MCP_MAIN'				=> '메인',
	'MCP_MAIN_FORUM_VIEW'			=> '포럼 보기',
	'MCP_MAIN_FRONT'			=> '첫 페이지',
	'MCP_MAIN_POST_DETAILS'			=> '글 상세',
	'MCP_MAIN_TOPIC_VIEW'			=> '주제 보기',
	'MCP_MAKE_ANNOUNCEMENT'			=> '“Announcement”으로 변경',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> '이 주제를 “Announcement”으로 바꾸겠습니까?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> '“Announcements”으로 변경',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> '이 주제를 “Announcement”으로 바꾸겠습니까?',
	'MCP_MAKE_GLOBAL'				=> '“Global announcement”로 변경',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> '이 주제를 “Global announcement”으로 바꾸겠습니까?',
	'MCP_MAKE_GLOBALS'				=> '“Global announcements”으로 변경',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> '이 주제를 “Global announcement”으로 바꾸겠습니까?',
	'MCP_MAKE_STICKY'				=> '“Sticky”로 변경',
	'MCP_MAKE_STICKY_CONFIRM'		=> '이 주제를 “Sticky”로 바꾸겠습니까?',
	'MCP_MAKE_STICKIES'				=> '“Stickies”로 변경',
	'MCP_MAKE_STICKIES_CONFIRM'		=> '선택한 주제를 “Stickies”로 바꾸겠습니까?',
	'MCP_MAKE_NORMAL'				=> '“Standard Topic”으로 변경',
	'MCP_MAKE_NORMAL_CONFIRM'		=> '이 주제를 “Standard Topic”으로 바꾸겠습니까?',
	'MCP_MAKE_NORMALS'				=> '“Standard Topics”으로 변경',
	'MCP_MAKE_NORMALS_CONFIRM'		=> '선택 주제를 “Standard Topics”으로 바꾸겠습니까?',

	'MCP_NOTES'			=> '사용자 노트',
	'MCP_NOTES_FRONT'		=> '첫 페이지',
	'MCP_NOTES_USER'		=> '사용자 상세',
	'MCP_POST_REPORTS'		=> '이 글에 대한 보고 발행',

	'MCP_PM_REPORTS'		=> '보고됙 PMs',
	'MCP_PM_REPORT_DETAILS'		=> 'PM 보고 상세',
	'MCP_PM_REPORTS_CLOSED'		=> '닫힌 PM 보고',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> '해결된 개인 메시지에 대한 모든 보고서 목록입니다..',
	'MCP_PM_REPORTS_OPEN'		=> 'PM 보고 열기',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> '처리되지 않은 보고된 모든 비공개 메시지 목록입니다.',

	'MCP_REPORTS'			=> '보고된 메시지',
	'MCP_REPORT_DETAILS'		=> '보고 상세',
	'MCP_REPORTS_CLOSED'		=> '닫힌 보고',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> '해결된 게시물에 대한 모든 보고서 목록입니다.',
	'MCP_REPORTS_OPEN'		=> '열린 보고',
	'MCP_REPORTS_OPEN_EXPLAIN'	=> '처리되지 않은 신고된 모든 게시물의 목록입니다.',

	'MCP_QUEUE'			=> '중재 큐',
	'MCP_QUEUE_APPROVE_DETAILS'		=> '승인 상세',
	'MCP_QUEUE_UNAPPROVED_POSTS'		=> '글 승인 대기',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> '사용자에게 표시되기 전에 승인이 필요한 모든 게시물의 목록입니다.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'		=> '승인 대기 주제',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> '사용자에게 표시되기 전에 승인이 필요한 모든 게시물의 목록입니다.',
	'MCP_QUEUE_DELETED_POSTS'				=> '지운 글',
	'MCP_QUEUE_DELETED_POSTS_EXPLAIN'		=> '소프트 삭제된 모든 게시물의 목록입니다. 이 화면에서 게시물을 복원하거나 영구적으로 삭제할 수 있습니다.',
	'MCP_QUEUE_DELETED_TOPICS'			=> '지운 주제',
	'MCP_QUEUE_DELETED_TOPICS_EXPLAIN'		=> '소프트 삭제된 모든 주제의 목록입니다. 이 화면에서 주제를 복원하거나 영구적으로 삭제할 수 있습니다.',

	'MCP_VIEW_USER'			=> '특정 사용자 경고 보기',

	'MCP_WARN'				=> '경고',
	'MCP_WARN_FRONT'		=> '첫 페이지',
	'MCP_WARN_LIST'			=> '경고 목록',
	'MCP_WARN_POST'			=> '특정 글 경고',
	'MCP_WARN_USER'			=> '사용자 경고',

	'MERGE_POSTS_CONFIRM'	=> '선택한 게시물을 이동하시겠습니까?',
	'MERGE_TOPIC_EXPLAIN'	=> '아래 양식을 사용하여 선택한 게시물을 다른 주제로 이동할 수 있습니다. 게시물은 이 주제에서 분리되어 다른 주제로 병합됩니다. 이 게시물은 재정렬되지 않으며 사용자가 새 주제에 게시한 것처럼 표시됩니다.<br />대상 주제 ID를 입력하거나 "주제 선택"을 클릭하여 검색하십시오.',
	'MERGE_TOPIC_ID'		=> '대상 주제 식별 번호',
	'MERGE_TOPICS'			=> '주제 병합',
	'MERGE_TOPICS_CONFIRM'	=> '선택 주제 병합하겠습니까?',
	'MODERATE_FORUM'		=> '포럼 중재',
	'MODERATE_TOPIC'		=> '주제 중재',
	'MODERATE_POST'			=> '글 중재',
	'MOD_OPTIONS'			=> '중재자 옵션',
	'MORE_INFO'				=> '추가 정보',
	'MOST_WARNINGS'			=> '경고 많은 사용자',
	'MOVE_TOPIC_CONFIRM'	=> '주제를 새 포럼으로 옮기겠습니까?',
	'MOVE_TOPICS'			=> '선택 주제 이동',
	'MOVE_TOPICS_CONFIRM'	=> '주제를 새 포럼으로 옮기겠습니까?',

	'NOTIFY_POSTER_APPROVAL'		=> '승인에 대해 게시자에게 알리겠습니까?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> '미승인에 대해 게시자에게 알리겠습니까?',
	'NOTIFY_USER_WARN'			=> '경고를 사용자에게 알리겠습까?',
	'NOT_MODERATOR'				=> '이 포럼 중재자 아님.',
	'NO_DESTINATION_FORUM'			=> '대상 포럼을 선탁하세요.',
	'NO_DESTINATION_FORUM_FOUND'	=> '사용할 수 있는 대상 포럼이 없음.',
	'NO_ENTRIES'					=> '로그 항목 없음.',
	'NO_FEEDBACK'					=> '이 사용자에 대한 피드백 없음.',
	'NO_FINAL_TOPIC_SELECTED'		=> '게시물을 병합하려면 대상 주제를 선택해야 합니다.',
	'NO_MATCHES_FOUND'				=> '일치 없음.',
	'NO_POST'			=> '사용자에게 게시물에 대해 경고하려면 게시물을 선택해야 합니다.',
	'NO_POST_REPORT'				=> '이 글은 보고되지 않음.',
	'NO_POST_SELECTED'				=> '하나 이상 선택하세요.',
	'NO_POSTS_DELETED'				=> '삭제된 게시물 없음.',
	'NO_POSTS_QUEUE'				=> '승인 대기 글 없음.',
	'NO_REASON_DISAPPROVAL'		=> '미승인에 대한 적절한 이유를 입력하세요.',
	'NO_REPORT'						=> '보고 없음',
	'NO_REPORTS'					=> '보고 없음',
	'NO_REPORT_SELECTED'			=> '이 작업을 수행하려면 하나 이상의 보고서를 선택해야 합니다.',
	'NO_TOPIC_ICON'					=> '없음',
	'NO_TOPIC_SELECTED'				=> '이 작업을 수행하려면 하나 이상의 주제를 선택해야 합니다.',
	'NO_TOPICS_DELETED'				=> '지운 주제 없음.',
	'NO_TOPICS_QUEUE'				=> '승인 대기 주제 없음.',

	'ONLY_TOPIC'			=> '오직 주제 “%s”',
	'OTHER_USERS'			=> '이 IP에서 글 쓰는 다른 사용자',

	'QUICKMOD_ACTION_NOT_ALLOWED' => "%s는 quickmod로 허용 안 됨",

	'PM_REPORT_CLOSED_SUCCESS'	=> '선택한 PM 보고서가 성공적으로 닫혔습니다.',
	'PM_REPORT_DELETED_SUCCESS'	=> '선택한 PM 보고서가 성공적으로 삭제되었습니다.',
	'PM_REPORTED_SUCCESS'		=> '이 개인 메시지는 성공적으로 보고되었습니다.',
	'PM_REPORTS_CLOSED_SUCCESS'	=> '선택한 PM 보고서가 성공적으로 닫혔습니다.',
	'PM_REPORTS_DELETED_SUCCESS'=> '선택한 PM 보고서가 성공적으로 삭제되었습니다.',
	'PM_REPORTS_TOTAL'			=> array(
		0	=> '검토할 PM 보고서가 없습니다.',
		1	=> '총 <strong>1</strong>개의 검토할 PM 보고서가 있습니다.',
		2	=> '전체적으로 검토할 PM 보고서가 <strong>%d</strong>개 있습니다.',
	),
	'PM_REPORT_DETAILS'			=> '비공개 메시지 보고 상세',
	'POSTER'					=> '게시자',
	'POSTS_APPROVED_SUCCESS'	=> '선택한 게시물이 승인되었습니다.',
	'POSTS_DELETED_SUCCESS'		=> '선택한 게시물이 데이터베이스에서 성공적으로 제거되었습니다.',
	'POSTS_DISAPPROVED_SUCCESS'	=> '선택한 게시물이 승인되지 않았습니다.',
	'POSTS_LOCKED_SUCCESS'		=> '선택한 게시물이 성공적으로 잠겼습니다.',
	'POSTS_MERGED_SUCCESS'		=> '선택한 게시물이 병합되었습니다.',
	'POSTS_PER_PAGE'		=> '페이지 당 글',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(0으로 설정하면 모든 글 보기.)',
	'POSTS_RESTORED_SUCCESS'	=> '선택한 게시물이 성공적으로 복원되었습니다.',
	'POSTS_UNLOCKED_SUCCESS'	=> '선택한 게시물이 성공적으로 잠금 해제되었습니다.',
	'POST_APPROVED_SUCCESS'		=> '선택한 게시물이 승인되었습니다.',
	'POST_DELETED_SUCCESS'		=> '선택한 게시물이 데이터베이스에서 성공적으로 제거되었습니다.',
	'POST_DISAPPROVED_SUCCESS'	=> '선택한 게시물이 승인되지 않았습니다.',
	'POST_LOCKED_SUCCESS'		=> '글이 성공적으로 잠겼습니다.',
	'POST_NOT_EXIST'		=> '요청한 글 없음.',
	'POST_REPORTED_SUCCESS'		=> '이 글 성공적으로 보고됨.',
	'POST_RESTORED_SUCCESS'		=> '이 글 성공적으로 복원됨.',
	'POST_UNLOCKED_SUCCESS'		=> '글이 성공적으로 잠김.',

	'READ_USERNOTES'			=> '사용자 노트',
	'READ_WARNINGS'				=> '사용자 경고',
	'REPORTER'					=> '보고자',
	'REPORTED'					=> '보고됨',
	'REPORTED_BY'				=> '보고자',
	'REPORTED_ON_DATE'			=> 'on',
	'REPORTS_CLOSED_SUCCESS'	=> '선택한 보고서 닫기 성공.',
	'REPORTS_DELETED_SUCCESS'	=> '선택한 보고서 지우기 성공.',
	'REPORTS_TOTAL'				=> array(
		0	=> '검토할 보고서 없음.',
		1	=> '검토할 보고서 <strong>1</strong>개.',
		2	=> '검토할 보고서 <strong>%d</strong>개.',
	),
	'REPORT_CLOSED'			=> '이 보고 닫힘.',
	'REPORT_CLOSED_SUCCESS'		=> '선택한 보고서 닫기 성공.',
	'REPORT_DELETED_SUCCESS'	=> '선택한 보고서 지우기 성공.',
	'REPORT_DETAILS'		=> '보고 상세',
	'REPORT_MESSAGE'		=> '이 메시지 보고',
	'REPORT_MESSAGE_EXPLAIN'	=> '선택한 비공개 메시지를 보고하려면 이 양식을 사용하세요. 보고는 일반적으로 메시지가 포럼 규칙을 위반하는 경우에만 사용해야 합니다. <strong>비공개 메시지를 신고하면 모든 중재자가 내용을 볼 수 있습니다.</strong>',
	'REPORT_NOTIFY'				=> '나에게 알림',
	'REPORT_NOTIFY_EXPLAIN'		=> '보고 처리되면 알림.',
	'REPORT_POST_EXPLAIN'		=> '포럼 중재자와 게시판 관리자에게 선택한 게시물을 보고하려면 이 양식을 사용하세요. 신고는 일반적으로 게시물이 포럼 규칙을 위반하는 경우에만 사용해야 합니다.',
	'REPORT_REASON'				=> '보고 이유',
	'REPORT_TIME'				=> '보고 시간',
	'RESTORE'				=> '복원',
	'RESTORE_POST'				=> '글 복원',
	'RESTORE_POST_CONFIRM'		=> '이 글을 복원하겠습니까?',
	'RESTORE_POSTS'				=> '글 복원',
	'RESTORE_POSTS_CONFIRM'		=> '선택한 글을 복원하겠습니까?',
	'RESTORE_TOPIC'				=> '주제 복원',
	'RESTORE_TOPIC_CONFIRM'		=> '이 주제를 복원하겠습니까?',
	'RESTORE_TOPICS'			=> '주제 복원',
	'RESTORE_TOPICS_CONFIRM'	=> '선택한 주제를 복원하겠습니까?',
	'RESYNC'				=> '재동기',
	'RETURN_MESSAGE'			=> '%s메시지로 돌아가기%s',
	'RETURN_NEW_FORUM'			=> '%s새 포럼으로%s',
	'RETURN_NEW_TOPIC'			=> '%s새 주제로%s',
	'RETURN_PM'			=> '%s비공개 메시지로%s',
	'RETURN_POST'				=> '%글로 돌아가기%s',
	'RETURN_QUEUE'				=> '%s큐로 돌아가기%s',
	'RETURN_REPORTS'			=> '%s보고서로 돌아가기%s',
	'RETURN_TOPIC_SIMPLE'		=> '%주제로 돌아가기%s',

	'SEARCH_POSTS_BY_USER'			=> '글 검색 기준',
	'SELECT_ACTION'				=> '원하ᅟ는 동작 선택',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> '이 글로벌 공지를 표시할 포럼을 선택하세요.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> '선택한 주제 중 하나 이상이 전체 공지입니다. 표시하려는 포럼을 선택하십시오.',
	'SELECT_MERGE'						=> '병합 선택',
	'SELECT_TOPICS_FROM'				=> '다음에서 주제 선택',
	'SELECT_TOPIC'						=> '주제 선택',
	'SELECT_USER'						=> '사용자 선택',
	'SORT_ACTION'						=> '로그 작업',
	'SORT_DATE'						=> '날짜',
	'SORT_IP'						=> 'IP 주소',
	'SORT_WARNINGS'						=> '경고',
	'SPLIT_AFTER'						=> '선택한 글에서 주제 분할',
	'SPLIT_FORUM'						=> '새 주제 제목',
	'SPLIT_POSTS'						=> '선택한 글 분할s',
	'SPLIT_SUBJECT'						=> '새 주제 제목',
	'SPLIT_TOPIC_ALL'					=> '선택할 글에서 주제 분할',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> '이 주제를 분할하겠습니까?',
	'SPLIT_TOPIC_BEYOND'				=> '선탁한 글에서 주제 분할',
	'SPLIT_TOPIC_BEYOND_CONFIRM'	=> '선택한 글에서 주제 분할하겠습니까?',
	'SPLIT_TOPIC_EXPLAIN'				=> '아래 양식을 사용하여 게시물을 개별적으로 선택하거나 선택한 게시물에서 분할하여 주제를 둘로 나눌 수 있습니다.',

	'THIS_PM_IP'			=> '이 비공개 메시지 IP',
	'THIS_POST_IP'			=> '이 글 IP',
	'TOPICS_APPROVED_SUCCESS'	=> '선택한 주제 승인됨.',
	'TOPICS_DELETED_SUCCESS'	=> '선택한 주제가 데이터베이스에서 성공적으로 지워짐.',
	'TOPICS_DISAPPROVED_SUCCESS'=> '선택한 주제 미승인.',
	'TOPICS_FORKED_SUCCESS'		=> '선택 주제 복사 성공.',
	'TOPICS_LOCKED_SUCCESS'		=> '선택 주제 잠김.',
	'TOPICS_MOVED_SUCCESS'		=> '선택 주제 이동 성공.',
	'TOPICS_RESTORED_SUCCESS'	=> '선택 주제 복원 성공.',
	'TOPICS_RESYNC_SUCCESS'		=> '선택 주제 재동기화.',
	'TOPICS_TYPE_CHANGED'		=> '주제 유형 변경 성공.',
	'TOPICS_UNLOCKED_SUCCESS'	=> '선택 주제 잠금 해제.',
	'TOPIC_APPROVED_SUCCESS'	=> '선택 주제 승인됨.',
	'TOPIC_DELETED_SUCCESS'		=> '선택 주제 데이터베이스에서 삭제 성공.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> '선택 주제 미승인 됨.',
	'TOPIC_FORKED_SUCCESS'		=> '선택 주제 복사 성공.',
	'TOPIC_LOCKED_SUCCESS'		=> '선택 주제 잠김.',
	'TOPIC_MOVED_SUCCESS'		=> '선택 주제 이동 성공.',
	'TOPIC_NOT_EXIST'		=> '선택 주제 없음.',
	'TOPIC_RESTORED_SUCCESS'	=> '선택 주제 복원 성공.',
	'TOPIC_RESYNC_SUCCESS'		=> '선택 주제 재동기됨.',
	'TOPIC_SPLIT_SUCCESS'		=> '선택 주제 분할 성공.',
	'TOPIC_TIME'			=> '주제 시간',
	'TOPIC_TYPE_CHANGED'		=> '주제 유형 변경 성공.',
	'TOPIC_UNLOCKED_SUCCESS'	=> '선택 주제 잠금 해제.',
	'TOTAL_WARNINGS'		=> '총 경고',

	'UNAPPROVED_POSTS_TOTAL'	=> array(
		0	=> '승인 대기 중인 게시물이 없습니다.',
		1	=> '총 <strong>1</strong>개의 게시물이 승인 대기 중입니다.',
		2	=> '총 <strong>%d</strong>개의 게시물이 승인 대기 중입니다.',
	),
	'UNLOCK'		=> '잠금해제',
	'UNLOCK_POST'					=> '글 잠금 해제',
	'UNLOCK_POST_EXPLAIN'			=> '편집 허용',
	'UNLOCK_POST_POST'				=> '글 잠금 해제',
	'UNLOCK_POST_POST_CONFIRM'		=> '정말 이 게시물의 편집을 허용하시겠습니까?',
	'UNLOCK_POST_POSTS'				=> '선택 글 잠금 해제',
	'UNLOCK_POST_POSTS_CONFIRM'		=> '정말 선택한 게시물의 편집을 허용하시겠습니까?',
	'UNLOCK_TOPIC'					=> '주제 잠금 해제',
	'UNLOCK_TOPIC_CONFIRM'			=> '이 주제 잠금해제 하겠습니까?',
	'UNLOCK_TOPICS'					=> '선택 주제 잠금해제',
	'UNLOCK_TOPICS_CONFIRM'			=> '선택 주제 모두 잠금해제 하겠습니까?',
	'USER_CANNOT_POST'				=> '이 포럼에 쓸 수 없음.',
	'USER_CANNOT_REPORT'			=> '이 포럼에 보고 불가.',
	'USER_FEEDBACK_ADDED'			=> '사용자 피드백 추가 성공.',
	'USER_WARNING_ADDED'			=> '사용자 경고 성공.',

	'VIEW_DETAILS'			=> '상세 보기',
	'VIEW_PM'				=> '비공개 메시지 보기',
	'VIEW_POST'				=> '글 보기',

	'WARNED_USERS'			=> '경고 사용자',
	'WARNED_USERS_EXPLAIN'	=> '만료되지 않은 경고가 발행된 사용자 목록입니다.',
	'WARNING_PM_BODY'	=> '다음은 이 사이트의 관리자 또는 중재자가 귀하에게 발행한 경고입니다.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> '보드 경고 발생',
	'WARNING_POST_DEFAULT'	=> '다음 글에 대한 경고: %s .',
	'NO_WARNINGS'	=> '경고 없음.',

	'YOU_SELECTED_TOPIC'	=> '선택한 주제 번호 %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> '스팸',
			'OFF_TOPIC'	=> '주제 외',
			'OTHER'		=> '기타',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> '메시지에는 불법 또는 해적판 소프트웨어에 대한 링크가 포함되어 있습니다.',
			'SPAM'		=> '신고된 메시지는 웹사이트나 다른 제품을 광고하는 유일한 목적을 가지고 있습니다.',
			'OFF_TOPIC'	=> '신고된 메시지는 주제에서 벗어났습니다.',
			'OTHER'		=> '신고된 메시지는 다른 범주에 맞지 않습니다. 추가 정보 필드를 사용하십시오.',
		),
	),
));
