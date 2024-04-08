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
	'ADD_ATTACHMENT'		=> '첨부파일 업로드',
	'ADD_ATTACHMENT_EXPLAIN'	=> '하나 이상의 파일을 첨부하려면 아래에 세부 정보를 입력하세요.',
	'ADD_FILE'			=> '파일 추가',
	'ADD_POLL'			=> '설문 생성',
	'ADD_POLL_EXPLAIN'		=> '주제에 투표를 추가하지 않으려면 필드를 비워두세요.',
	'ALREADY_DELETED'		=> '이 메시지는 이미 삭제되었습니다.',
	'ATTACH_COMMENT_NO_EMOJIS'	=> '첨부된 댓글에 금지된 문자(이모지)가 포함되어 있습니다..',
	'ATTACH_DISK_FULL'		=> '디스크 공간이 부족해서 첨부 안 됩니다.',
	'ATTACH_QUOTA_REACHED'		=> '게시판 첨부 할당량에 도달했습니다',
	'ATTACH_SIG'			=> '서명을 첨부하세요(서명은 UCP를 통해 변경할 수 있습니다)',

	'BBCODE_A_HELP'			=> '인라인 업로드 첨부파일: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'			=> '굵은 글씨: [b]text[/b]',
	'BBCODE_C_HELP'			=> '코드 표시: [code]code[/code]',
	'BBCODE_D_HELP'			=> '플래시: [flash=width,height]http://url[/flash]',
	'BBCODE_F_HELP'			=> '폰트 크기: [size=85]작은 텍스트[/size]',
	'BBCODE_IS_OFF'			=> '%sBBCode%s <em>끔</em>',
	'BBCODE_IS_ON'			=> '%sBBCode%s <em>켬</em>',
	'BBCODE_I_HELP'			=> '이탤릭: [i]text[/i]',
	'BBCODE_L_HELP'			=> '리스트: [list][*]text[/list]',
	'BBCODE_LISTITEM_HELP'		=> '리스트 아이템: [*]text',
	'BBCODE_O_HELP'			=> '정렬 목록: e.g. [list=1][*]First point[/list] or [list=a][*]Point a[/list]',
	'BBCODE_P_HELP'			=> '이미지 삽입: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'			=> '텍스트 인용: [quote]text[/quote]',
	'BBCODE_S_HELP'			=> '글꼴 색: [color=red]text[/color] or [color=#FF0000]text[/color]',
	'BBCODE_U_HELP'			=> '밑줄 텍스트: [u]text[/u]',
	'BBCODE_W_HELP'			=> 'URL 넣기: [url]http://url[/url] or [url=http://url]URL text[/url]',
	'BBCODE_Y_HELP'			=> 'List: Add list element',
	'BUMP_ERROR'			=> '마지막 게시물 이후에는 이 주제를 바로 BUMP할 수 없습니다.',

	'CANNOT_DELETE_REPLIED'		=> '답글을 달지 않은 게시물만 삭제할 수 있습니다.',
	'CANNOT_EDIT_POST_LOCKED'	=> '이 게시물은 잠겨 있습니다. 더 이상 해당 게시물을 편집할 수 없습니다.',
	'CANNOT_EDIT_TIME'		=> '더 이상 해당 게시물을 수정하거나 삭제할 수 없습니다.',
	'CANNOT_POST_ANNOUNCE'		=> '공지사항을 게시할 수 없습니다.',
	'CANNOT_POST_STICKY'		=> '죄송하지만 고정 주제를 게시할 수 없습니다.',
	'CHANGE_TOPIC_TO'		=> '주제 유형 변경',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> '메시지에 %1$d 문자가 포함되어 있습니다.',
		2	=> '메시지에 %1$d 문자가 포함되어 있습니다.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> '서명에 %1$d 문자가 포함되어 있습니다.',
		2	=> '서명에 %1$d 문자가 포함되어 있습니다.',
	),
	'CLOSE_TAGS'			=> '태그 닫기',
	'CURRENT_TOPIC'			=> '현 주제',
	'DELETE_FILE'			=> '파일 삭제',
	'DELETE_MESSAGE'		=> '메시지 삭제',
	'DELETE_MESSAGE_CONFIRM'	=> '메시지 지우겠습니까?',
	'DELETE_OWN_POSTS'		=> '자신의 게시물만 지울 수 있습니다.',
	'DELETE_PERMANENTLY'		=> '영구 삭제',
	'DELETE_POST_CONFIRM'		=> '이 글을 지우겠습니까?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> '이 게시물을 <strong>완전히</strong> 삭제하시겠습니까?',
	'DELETE_POST_PERMANENTLY'	=> array(
		1	=> '이 글 영구 삭제 복구 불가',
		2	=> '이 글 영구 삭제 복구 불가',
	),
	'DELETE_POSTS_CONFIRM'		=> '이 글을 지우겠습니까?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> '이 게시물을 <strong>영구적으로</strong> 삭제하시겠습니까?',
	'DELETE_REASON'			=> '삭제 이유',
	'DELETE_REASON_EXPLAIN'		=> '삭제 이유는 중재자가 볼 수 있습니다.',
	'DELETE_POST_WARN'		=> '이 글 삭제',
	'DELETE_TOPIC_CONFIRM'		=> '이 주제를 삭제하시겠습니까?',
	'DELETE_TOPIC_PERMANENTLY'	=> array(
		1	=> '이 주제 영구 삭제 복구 불가',
		2	=> '이 주제 영구 삭제 복구 불가',
	),
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> '이 주제를 <strong>영구적으로</strong> 삭제하시겠습니까??',
	'DELETE_TOPICS_CONFIRM'		=> '이 주제를 삭제하시겠습니까??',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> '이 주제를 <strong>영구적으로</strong> 삭제하시겠습니까??',
	'DISABLE_BBCODE'		=> 'BB코드 비활성화',
	'DISABLE_MAGIC_URL'		=> 'URL을 자동으로 파싱하지 않음',
	'DISABLE_SMILIES'		=> '스마일리 비활성',
	'DISALLOWED_CONTENT'		=> '업로드된 파일이 가능한 공격 벡터로 식별되어 업로드가 거부되었습니다.',
	'DISALLOWED_EXTENSION'		=> '확장자 %s 는 허용 안 됩니다.',
	'DRAFT_LOADED'			=> '초안이 게시되었습니다, 지금 완성하는 게 좋습니다.<br />초안은 글을 제출하면 지워집니다.',
	'DRAFT_LOADED_PM'		=> '메시지 영역에 초안이 로드되었습니다. 지금 개인 메시지를 완료하는 것이 좋습니다.<br />이 개인 메시지를 제출하면 초안이 삭제됩니다.',
	'DRAFT_SAVED'			=> '초안 저장 성공.',
	'DRAFT_TITLE'			=> '초안 제목',
	'EDIT_REASON'			=> '이 글 편집 사유',
	'EMPTY_FILEUPLOAD'		=> '업로드 된 파일 비었음.',
	'EMPTY_MESSAGE'			=> '메시지를 게시할 때 입력하세요.',
	'EMPTY_REMOTE_DATA'		=> '파일 업로드 불가, 수동으로 업로드해 보세요.',

	'FLASH_IS_OFF'			=> '[flash] <em>끔</em>',
	'FLASH_IS_ON'			=> '[flash] <em>켬</em>',
	'FLOOD_ERROR'			=> '마지막 게시물 이후 너무 빨리 다른 게시물을 작성할 수 없습니다.',
	'FONT_COLOR'			=> '글꼴 색',
	'FONT_COLOR_HIDE'		=> '글꼴 색 숨김',
	'FONT_HUGE'			=> '거대한',
	'FONT_LARGE'			=> '큰',
	'FONT_NORMAL'			=> '보통',
	'FONT_SIZE'			=> '글꼴 크기',
	'FONT_SMALL'			=> '작은',
	'FONT_TINY'			=> '더 작은',

	'GENERAL_UPLOAD_ERROR'		=> '첨부를 %s에 할 수 없음.',

	'IMAGES_ARE_OFF'		=> '[img] <em>끔</em>',
	'IMAGES_ARE_ON'			=> '[img] <em>켬</em>',
	'INVALID_FILENAME'		=> '%s 잘못된 파일명.',

	'LOAD'				=> '로드',
	'LOAD_DRAFT'			=> '초안 로드',
	'LOAD_DRAFT_EXPLAIN'		=> '여기에서 계속 쓰고 싶은 초안을 선택할 수 있습니다. 현재 게시물이 취소되고 현재 게시물 내용이 모두 삭제됩니다. 사용자 제어판 내에서 초안 보기, 편집 및 삭제.',
	'LOGIN_EXPLAIN_BUMP'		=> '이 포럼에서 주제를 BUMP하려면 로그인해야 합니다.',
	'LOGIN_EXPLAIN_DELETE'		=> '이 포럼에서 게시물을 삭제하려면 로그인해야 합니다.',
	'LOGIN_EXPLAIN_SOFT_DELETE'	=> '이 포럼 내에서 게시물을 일시 삭제하려면 로그인해야 합니다.',
	'LOGIN_EXPLAIN_POST'		=> '이 포럼에 게시하려면 로그인해야 합니다.',
	'LOGIN_EXPLAIN_QUOTE'		=> '이 포럼에서 게시물을 인용하려면 로그인해야 합니다.',
	'LOGIN_EXPLAIN_REPLY'		=> '이 포럼의 주제에 답글을 작성하려면 로그인해야 합니다.',

	'MAX_ATTACHMENT_FILESIZE'	=> '첨부파일 당 최대 크기: %s.',
	'MAX_FONT_SIZE_EXCEEDED'	=> '글꼴 최대 크기 %d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> '플래시 파일의 높이는 %d픽셀까지만 가능.',
		2	=> '플래시 파일의 높이는 %d픽셀까지만 가능.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> '플래시 파일의 너비는 %d픽셀까지만 가능.',
		2	=> '플래시 파일의 너비는 %d픽셀까지만 가능.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> '이미지 높이는 %d픽셀까지만 가능.',
		2	=> '이미지 높이는 %d픽셀까지만 가능.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> '이미지 너비는 %d픽셀까지만 가능.',
		2	=> '이미지 너비는 %d픽셀까지만 가능.',
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // zero means no limit, so we don't view a message here.
		1	=> '여기에 메시지를 입력하십시오. <strong>%d</strong>자를 초과할 수 없습니다.',
		2	=> '여기에 메시지를 입력하십시오. <strong>%d</strong>자를 초과할 수 없습니다.',
	),
	'MESSAGE_DELETED'			=> '메시지 삭제 성공.',
	'MORE_SMILIES'				=> '스마일리 더보기',

	'NOTIFY_REPLY'				=> '댓글 게시 알림',
	'NOT_UPLOADED'				=> '파일 업로드 불가.',
	'NO_DELETE_POLL_OPTIONS'	=> '기존 투표 옵션 삭제 불가.',
	'NO_PM_ICON'				=> 'PM 아이콘 없음',
	'NO_POLL_TITLE'				=> '설문 제목 입력 하세요.',
	'NO_POST'				=> '요청한 글 없음.',
	'NO_POST_MODE'				=> '포스트 모드 지정 안 됨.',
	'NO_TEMP_DIR'				=> '임시 폴더를 찾을 수 없거나 쓸 수 없습니다.',

	'PARTIAL_UPLOAD'			=> '파일이 부분적으로 업로드됨.',
	'PHP_UPLOAD_STOPPED'		=> 'PHP 확장이 파일 업로드 중지.',
	'PHP_SIZE_NA'				=> '첨부 파일 크기가 너무 큽니다.<br />php.ini에서 PHP가 정의한 최대 크기를 결정할 수 없습니다..',
	'PHP_SIZE_OVERRUN'			=> '첨부파일의 파일 크기가 너무 큽니다. 최대 업로드 크기는 %1$d %2$s입니다.<br />이 값은 php.ini에 설정되어 있으며 무시할 수 없습니다.',
	'PLACE_INLINE'				=> '인라인 배치',
	'POLL_DELETE'				=> '설문 삭제',
	'POLL_FOR'				=> '설문 실행',
	'POLL_FOR_EXPLAIN'			=> '0 입력하면 끝없는 투표.',
	'POLL_MAX_OPTIONS'			=> '사용자 별 옵션',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> '투표할 때 각 사용자가 선택할 수 있는 옵션의 수.',
	'POLL_OPTIONS'				=> '설문 옵션',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> '각 옵션을 새 줄에 배치합니다. <strong>%d</strong> 옵션을 입력할 수 있습니다.',
		2	=> '각 옵션을 새 줄에 배치합니다. 최대 <strong>%d</strong> 옵션을 입력할 수 있습니다.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> '각 옵션을 새 줄에 배치합니다. <strong>%d</strong> 옵션을 입력할 수 있습니다. 옵션을 제거하거나 추가하면 이전의 모든 투표가 재설정됩니다.',
		2	=> '각 옵션을 새 줄에 배치합니다. 최대 <strong>%d</strong> 옵션을 입력할 수 있습니다. 옵션을 제거하거나 추가하면 이전의 모든 투표가 재설정됩니다.',
	),
	'POLL_QUESTION'			=> '설문 질문',
	'POLL_TITLE_TOO_LONG'		=> '설문 제목은 100자 미만.',
	'POLL_TITLE_COMP_TOO_LONG'	=> '설문조사 제목의 파싱된 크기가 너무 큽니다. BBCode나 스마일리를 없애는 것이 좋습니다.',
	'POLL_VOTE_CHANGE'		=> '재투표 허용',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> '활성화된 사용자는 투표를 변경할 수 있습니다.',
	'POSTED_ATTACHMENTS'		=> '게시된 첨부파일',
	'POST_APPROVAL_NOTIFY'		=> '게시물이 승인되면 알려드립니다.',
	'POST_CONFIRMATION'		=> '게시물 확인',
	'POST_CONFIRM_EXPLAIN'		=> '자동 게시를 막기 위해 게시판에서 확인 코드를 입력해야 합니다. 코드는 아래에 표시되어야 하는 이미지에 표시됩니다. 시각 장애가 있거나 이 코드를 읽을 수 없는 경우 %s보드 관리자%s에게 문의하십시오.',
	'POST_DELETED'			=> '게시물 삭제 성공.',
	'POST_EDITED'			=> '게시물 편집 성공.',
	'POST_EDITED_MOD'		=> '이 글 편집 성공, 그러나 중재자 승인 후 보입니다.',
	'POST_GLOBAL'			=> '글로벌',
	'POST_ICON'			=> '글 아이콘',
	'POST_NORMAL'			=> '보통',
	'POST_REVIEW'			=> '리뷰 게시',
	'POST_REVIEW_EDIT'		=> '리뷰 게시',
	'POST_REVIEW_EDIT_EXPLAIN'	=> '이 게시물은 편집하는 동안 다른 사용자에 의해 변경되었습니다. 이 게시물의 현재 버전을 검토하고 편집 내용을 조정할 수 있습니다.',
	'POST_REVIEW_EXPLAIN'		=> '이 주제에 대해 하나 이상의 새로운 게시물이 작성되었습니다. 이에 비추어 게시물을 검토할 수 있습니다.',
	'POST_STORED'			=> '메시지 게시 성공.',
	'POST_STORED_MOD'		=> '이 메시지는 지출 성공했지만 중재자 승인 후 보입니다.',
	'POST_TOPIC_AS'				=> '다음으로 주제 게시',
	'PROGRESS_BAR'				=> '진행률 막대',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> '서로 %d 인용만 포함할 수 있습니다.',
		2	=> '서로 %d 인용만 포함할 수 있습니다.',
	),
	'QUOTE_NO_NESTING'		=> '따옴표를 서로 삽입할 수 없습니다.',

	'REMOTE_UPLOAD_TIMEOUT'		=> '요청 시간이 초과되어 지정된 파일을 업로드할 수 없습니다.',
	'SAVE'				=> '저장',
	'SAVE_DATE'			=> '저장된 때',
	'SAVE_DRAFT'			=> '초안 저장',
	'SAVE_DRAFT_CONFIRM'		=> '저장된 초안에는 제목과 메시지만 포함되며 다른 요소는 제거됩니다. 지금 초안을 저장하시겠습니까?',
	'SMILIES'			=> '스마일리',
	'SMILIES_ARE_OFF'		=> '스마일리 <em>OFF</em>',
	'SMILIES_ARE_ON'		=> '스마일리 <em>ON</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'	=> '고정/공지/글로벌 시간 제한',
	'STICK_TOPIC_FOR'		=> '고정 주제',
	'STICK_TOPIC_FOR_EXPLAIN'	=> '끝나지 않는 고정/공지/전역에 대해 0을 입력하십시오. 이 숫자는 게시 날짜를 기준으로 합니다.',
	'STYLES_TIP'			=> '팁: 선택한 텍스트에 스타일을 빠르게 적용할 수 있습니다.',

	'TOO_FEW_CHARS'			=> '메시지에 글자 수가 너무 적습니다.',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> '최소 %1$d자를 입력해야 합니다.',
		2	=> '최소 %1$d자를 입력해야 합니다.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> '최소 2개의 투표 옵션을 입력해야 합니다.',
	'TOO_MANY_ATTACHMENTS'		=> '다른 첨부 파일을 추가할 수 없습니다. %d가 최대입니다.',
	'TOO_MANY_CHARS'		=> '메시지에 너무 많은 문자가 있습니다.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		2	=> '최대 허용 문자 %1$d.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> '너무 많은 투표 옵션을 입력하려고 했습니다.',
	'TOO_MANY_SMILIES'		=> '메시지에 스마일리가 너무 많습니다. 허용되는 웃음의 최대 수는 %d개입니다.',
	'TOO_MANY_URLS'			=> '메시지에 너무 많은 URL이 포함되어 있습니다. 허용되는 최대 URL 수는 %d개입니다.',
	'TOO_MANY_USER_OPTIONS'		=> '사용자당 기존 투표 옵션보다 더 많은 옵션을 지정할 수 없습니다.',
	'TOPIC_BUMPED'				=> '주제 BUMP 성공.',

	'UNAUTHORISED_BBCODE'		=> '특정 BBCode 사용 불가: %s.',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> '메시지에 다음과 같은 지원되지 않는 문자가 포함되어 있습니다:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> '제목에 다음과 같은 지원되지 않는 문자가 포함되어 있습니다:<br />%s',
	'UPDATE_COMMENT'			=> '댓글 업데이트',
	'URL_INVALID'				=> '지정한 URL이 유효하지 않습니다.',
	'URL_NOT_FOUND'				=> '지정한 파일을 찾을 수 없습니다.',
	'URL_IS_OFF'				=> '[url] <em>OFF</em>',
	'URL_IS_ON'				=> '[url] <em>ON</em>',
	'USER_CANNOT_BUMP'			=> '이 포럼에서는 주제를 BUMP할 수 없습니다.',
	'USER_CANNOT_DELETE'		=> '이 포럼 게시물을 지울 수 없습니다.',
	'USER_CANNOT_EDIT'		=> '이 포럼 글을 편집할 수 없습니다.',
	'USER_CANNOT_REPLY'		=> '이 포럼 답글 작성 못 함.',
	'USER_CANNOT_FORUM_POST'	=> '포럼 유형이 지원하지 않기 때문에 이 포럼에서 게시 작업을 수행할 수 없습니다.',

	'VIEW_MESSAGE'			=> '%s제출된 메시지 보기%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%s제출된 비공개 메시지 보기%s',

	'WRONG_FILESIZE'		=> '파일이 너무 큽니다. 최대 허용 크기는 %1$d %2$s입니다.',
	'WRONG_SIZE'			=> '이미지는 최소 너비 %1$s, 높이 %2$s, 최대 %3$s 너비 및 %4$s 높이여야 합니다. 제출된 이미지는 너비가 %5$s이고 높이가 %6$s입니다.',
));
