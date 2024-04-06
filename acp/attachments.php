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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> '여기에서 첨부 파일 및 관련 특수 카테고리에 대한 기본 설정을 구성할 수 있습니다.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> '여기에서 확장 그룹을 추가, 삭제, 수정 또는 비활성화할 수 있습니다. 추가 옵션에는 특별한 카테고리 할당, 다운로드 메커니즘 변경 및 그룹에 속하는 첨부 파일 앞에 표시될 업로드 아이콘 정의가 들어갑니다.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> '여기에서 허용된 확장자를 관리할 수 있습니다. 확장을 활성화하려면 확장 그룹 관리 패널을 참조하십시오. 스크립팅 확장 프로그램(예: <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, 등…).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> '여기에서 분리된 파일을 볼 수 있습니다. 이는 사용자가 파일을 첨부하지만 게시물을 제출하지 않는 경우에 주로 발생합니다. 파일을 삭제하거나 기존 게시물에 첨부할 수 있습니다. 게시물에 첨부하려면 유효한 게시물 ID가 필요하며 이 ID를 직접 결정해야 합니다. 이렇게 하면 이미 업로드된 첨부 파일이 입력한 게시물에  할당됩니다.',
	'ADD_EXTENSION'			=> '확장 추가',
	'ADD_EXTENSION_GROUP'		=> '확장 그룹 추가',
	'ADMIN_UPLOAD_ERROR'		=> '파일 첨부 시도 중 오류: “%s”.',
	'ALLOWED_FORUMS'		=> '허용된 포럼',
	'ALLOWED_FORUMS_EXPLAIN'	=> '선택한 (또는 선택한 경우 모든)포럼에 할당된 확장자를 게시할 수 있습니다.',
	'ALLOWED_IN_PM_POST'		=> '허용됨',
	'ALLOW_ATTACHMENTS'		=> '첨부 허용',
	'ALLOW_ALL_FORUMS'		=> '모든 포럼 허용',
	'ALLOW_IN_PM'			=> '개인 메시지에 허용',
	'ALLOW_PM_ATTACHMENTS'		=> '개인 메시지어 첨부 허용',
	'ALLOW_SELECTED_FORUMS'		=> '아래 선택 포럼만',
	'ASSIGNED_EXTENSIONS'		=> '지정된 확장',
	'ASSIGNED_GROUP'		=> '지정된 확장 그룹',
	'ATTACH_EXTENSIONS_URL'		=> '확장',
	'ATTACH_EXT_GROUPS_URL'		=> '확장 그룹',
	'ATTACH_ID'			=> 'ID',
	'ATTACH_MAX_FILESIZE'		=> '최대 파일 크기',
	'ATTACH_MAX_FILESIZE_EXPLAIN'	=> '각 파일 최대 크기. 이 값이 0이면, 업로드 가능 파일 크기는 PHP configuration에 의해 제한됨.',
	'ATTACH_MAX_PM_FILESIZE'	=> '최대 파일 크기 메시지',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'=> '개인 메시지에 첨부된 각 파일의 최대 크기(0은 무제한).',
	'ATTACH_ORPHAN_URL'		=> '고아 첨부',
	'ATTACH_POST_ID'		=> '글 ID',
	'ATTACH_POST_TYPE'		=> '글 유형',
	'ATTACH_QUOTA'			=> '전체 첨부 할당',
	'ATTACH_QUOTA_EXPLAIN'		=> '전체 보드의 첨부 파일에 사용할 수 있는 최대 드라이브 공간. 0은 무제한.',
	'ATTACH_TO_POST'		=> '글에 파일 첨부',

	'CAT_IMAGES'			=> '이미지',
	'CHECK_CONTENT'			=> '첨부파일 점검',
	'CHECK_CONTENT_EXPLAIN'		=> '일부 브라우저는 업로드된 파일에 대해 잘못된 MIME 유형을 가정하도록 속일 수 있습니다. 이 옵션은 이러한 문제를 일으킬 가능성이 있는 파일이 거부되도록 합니다.',
	'CREATE_GROUP'			=> '새 그룹 생성',
	'CREATE_THUMBNAIL'		=> '썸네일 생성',
	'CREATE_THUMBNAIL_EXPLAIN'	=> '가능한 모든 상황에서 썸네일을 만듭니다.',

	'DEFINE_ALLOWED_IPS'			=> '허용된 IP/호스트 이름 정의',
	'DEFINE_DISALLOWED_IPS'			=> '허용 안 된 IP/호스트 이름 정의',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> '여러 개의 서로 다른 IP 또는 호스트 이름을 지정하려면 새 줄에 각각 입력하십시오. IP 주소 범위를 지정하려면 하이픈(-)으로 시작과 끝을 구분하고 와일드카드를 지정하려면 “*” 쓰세요.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> '컴퓨터와 브라우저에 적합한 마우스와 키보드 조합을 사용하여 한 번에 여러 IP 주소를 제거(또는 제외 해제)할 수 있습니다. 제외된 IP는 파란색 배경.',
	'DISPLAY_INLINED'		=> '이미지 인라인 표시',
	'DISPLAY_INLINED_EXPLAIN'	=> '이미지 첨부 없음으로 설정하면 링크로 보여줌.',
	'DISPLAY_ORDER'			=> '첨부 표시 순서',
	'DISPLAY_ORDER_EXPLAIN'		=> '첨부를 시간 순으로 표시.',

	'EDIT_EXTENSION_GROUP'		=> '확장 그룹 편집',
	'EXCLUDE_ENTERED_IP'		=> '입력한 IP/호스트 이름을 제외하려면 이것을 활성화하십시오.',
	'EXCLUDE_FROM_ALLOWED_IP'	=> '허용된 IP/호스트 이름에서 IP 제외',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> '허용되지 않은 IP/호스트 이름에서 IP 제외',
	'EXTENSIONS_UPDATED'		=> '확장 업데이트 성공.',
	'EXTENSION_EXIST'		=> '확장 %s 이미 존재.',
	'EXTENSION_GROUP'		=> '확장 그룹',
	'EXTENSION_GROUPS'		=> '확장 그룹',
	'EXTENSION_GROUP_DELETED'	=> '확장 그룹 삭제 성공.',
	'EXTENSION_GROUP_EXIST'		=> '확장 그룹 %s 이미 존재.',

	'EXT_GROUP_ARCHIVES'		=> '아카이브',
	'EXT_GROUP_DOCUMENTS'		=> '문서',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> '다운로드 가능한 파일',
	'EXT_GROUP_IMAGES'		=> '이미지',
	'EXT_GROUP_PLAIN_TEXT'		=> '텍스트',

	'FILES_GONE'			=> '삭제하기 위해 선택한 첨부 파일 중 일부가 존재하지 않습니다. 이미 삭제되었을 수 있습니다. 존재했던 첨부 파일은 삭제되었습니다.',
	'FILES_STATS_WRONG'		=> '파일 통계가 정확하지 않을 수 있으므로 다시 동기화해야 합니다. 실제 값: 첨부파일 수 = %1$d, 총 첨부파일 크기 = %2$s.<br />다시 동기화하려면 %3$shere%4$s 클릭하세요.',

	'GO_TO_EXTENSIONS'		=> '확장 관리 화면으로 가기',
	'GROUP_NAME'			=> '그룹 이름',

	'IMAGE_LINK_SIZE'		=> '이미지 링크 dimensions',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> '이미지가 이보다 크면 인라인 텍스트 링크로 이미지 첨부를 표시합니다. 이 동작을 비활성화하려면 값을 0px x 0px로 설정하십시오.',
	'IMAGE_QUALITY'			=> '업로드된 이미지 첨부 파일의 품질(JPEG만 )',
	'IMAGE_QUALITY_EXPLAIN'		=> '50%(작은 파일 크기)에서 90%(높은 품질) 사이의 값을 지정하십시오. 90%보다 높은 품질은 파일 크기를 증가시키고 비활성화됩니다. 최대 이미지 크기가 0px x 0px 아닌 값으로 설정된 경우에만 설정이 적용됩니다.',
	'IMAGE_STRIP_METADATA'		=> 'image metadata 제거(JPEG만)',
	'IMAGE_STRIP_METADATA_EXPLAIN'	=> 'Exif metadata 제거, 예. 저자명, GPS 좌표 및 카메라 상세. 최대 이미지 크기가 0px x 0px 아닌 값으로 설정된 경우에만 설정이 적용됩니다.',

	'MAX_ATTACHMENTS'		=> '글 하나당 최대 첨부 수',
	'MAX_ATTACHMENTS_PM'		=> '개인 메시지 당 최대 첨부 수',
	'MAX_EXTGROUP_FILESIZE'		=> '최대 파일 크기',
	'MAX_IMAGE_SIZE'		=> '최대 이미지 차원',
	'MAX_IMAGE_SIZE_EXPLAIN'	=> '첨부 이미지의 최대 크기. 크기 확인을 비활성화하려면 두 값을 모두 0px x 0px로 설정하십시오.',
	'MAX_THUMB_WIDTH'		=> '최대 썸네일 폭/높이 픽셀',
	'MAX_THUMB_WIDTH_EXPLAIN'	=> '생성된 썸네일은 여기 설정된 폭을 넘지 않습니다.',
	'MIN_THUMB_FILESIZE'		=> '최소 썸네일 파일 크기',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> '이보다 작은 이미지는 썸네일 만들지 마세요.',
	'MODE_INLINE'			=> '인라인',
	'MODE_PHYSICAL'			=> '물리적',

	'NOT_ALLOWED_IN_PM'		=> '글에서만 허용',
	'NOT_ALLOWED_IN_PM_POST'	=> '불허',
	'NOT_ASSIGNED'			=> '할당 안 됨',
	'NO_ATTACHMENTS'		=> '이 기간 첨부 없음.',
	'NO_EXT_GROUP'			=> '없음',
	'NO_EXT_GROUP_ALLOWED_PM'	=> '개인 메시지에 대해 <a href="%s">allowed extension groups</a> 없음.',
	'NO_EXT_GROUP_ALLOWED_POST'	=> '글에 대해 <a href="%s">allowed extension groups</a> 없음.',
	'NO_EXT_GROUP_NAME'		=> '입력한 그룹 이름 없음',
	'NO_EXT_GROUP_SPECIFIED'	=> '지정된 확장 그룹 없음.',
	'NO_FILE_CAT'			=> '없음',
	'NO_IMAGE'			=> '이미지 없음',
	'NO_UPLOAD_DIR'			=> '지정한 업로드 디렉터리 없음.',
	'NO_WRITE_UPLOAD'		=> '지정한 업로드 디렉토리에 쓸 수 없습니다. 웹 서버가 쓸 수 있도록 권한을 변경하십시오.',

	'ONLY_ALLOWED_IN_PM'	=> '개인 메시지에만 적용',
	'ORDER_ALLOW_DENY'		=> '허용',
	'ORDER_DENY_ALLOW'		=> '거부',

	'REMOVE_ALLOWED_IPS'		=> '<em>허용된</em> IP/호스트 이름 제거 또는 제외 해제',
	'REMOVE_DISALLOWED_IPS'		=> '<em>허용 안된</em> IP/호스트 이름 제거 또는 제외 해제',
	'RESYNC_FILES_STATS_CONFIRM'	=> '파일 통계 재동기화?',

	'SECURE_ALLOW_DENY'		=> '허용/불허 목록',
	'SECURE_ALLOW_DENY_EXPLAIN'	=> '허용/거부 목록의 보안 다운로드가 활성화될 때 기본 동작을 <strong>화이트리스트</strong>(허용) 또는 <strong>블랙리스트</strong>(거부)로 변경합니다.',
	'SECURE_DOWNLOADS'		=> '보안 다운로드 가능',
	'SECURE_DOWNLOADS_EXPLAIN'	=> '이 옵션을 사용하면 정의한 IP/호스트 이름으로 다운로드가 제한됩니다.',
	'SECURE_DOWNLOAD_NOTICE'	=> '보안 다운로드가 활성화되지 않았습니다. 보안 다운로드를 활성화하면 아래 설정이 적용됩니다.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'IP 목록이 성공적으로 업데이트되었습니다.',
	'SECURE_EMPTY_REFERRER'		=> '빈 레퍼러 허용',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> '보안 다운로드는 리퍼러를 기반으로 합니다. 리퍼러를 생략한 사람들을 위해 다운로드를 허용하시겠습니까?',
	'SETTINGS_CAT_IMAGES'		=> '이미지 카테고리 설정',
	'SPECIAL_CATEGORY'		=> '특수 카테고리',
	'SPECIAL_CATEGORY_EXPLAIN'	=> '특수 카테고리는 게시물에 표시되는 방식에 따라 다릅니다.',
	'SUCCESSFULLY_UPLOADED'		=> '업로드 성공.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> '확장 그룹 추가 성공.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> '확장 그룹 업데이트 성공.',

	'UPLOADING_FILES'		=> '파일 업로드 중',
	'UPLOADING_FILE_TO'		=> '파일 “%1$s”을 글 번호 %2$d에 업로드 중…',
	'UPLOAD_DENIED_FORUM'		=> ' “%s” 에 파일 업로드 권한 없음.',
	'UPLOAD_DIR'			=> '업로드 디렉터리',
	'UPLOAD_DIR_EXPLAIN'		=> '첨부 파일 저장 경로. 첨부 파일을 이미 업로드한 상태에서 이 디렉터리를 변경하려면 파일을 새 위치에 수동으로 복사해야 합니다.',
	'UPLOAD_ICON'			=> '아이콘 업로드',
	'UPLOAD_NOT_DIR'		=> '지정한 업로드 위치가 디렉터리 아님.',
	'UPLOAD_POST_NOT_EXIST'		=> '글이 존재하지 않기 때문에 “%1$s” 파일을 게시글 번호 %2$d에 업로드할 수 없습니다.',
));
