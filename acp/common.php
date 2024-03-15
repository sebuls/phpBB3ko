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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'      => '관리자',
	'ACP_ADMIN_LOGS'          => '관리자 로그',
	'ACP_ADMIN_ROLES'         => '관리자 역할',
	'ACP_ATTACHMENTS'         => '첨부파일',
	'ACP_ATTACHMENT_SETTINGS' => '첨부파일 설정',
	'ACP_AUTH_SETTINGS'       => '인증',
	'ACP_AUTOMATION'          => '자동화',
	'ACP_AVATAR_SETTINGS'     => '아바타 설정',

	'ACP_BACKUP'               => '백업',
	'ACP_BAN'                  => '차단',
	'ACP_BAN_EMAILS'           => '이메일 차단',
	'ACP_BAN_IPS'              => 'IP 금지',
	'ACP_BAN_USERNAMES'        => '사용자 차단',
	'ACP_BBCODES'              => 'BB코드',
	'ACP_BOARD_CONFIGURATION'  => '보드 구성',
	'ACP_BOARD_FEATURES'       => '보드 기능',
	'ACP_BOARD_MANAGEMENT'     => '보드 관리',
	'ACP_BOARD_SETTINGS'       => '보드 설정',
	'ACP_BOTS'                 => '스파이더/로봇',

	'ACP_CAPTCHA'              => '캡차',

	'ACP_CAT_CUSTOMISE'         => '사용자 지정',
	'ACP_CAT_DATABASE'          => '데이터베이스',
	'ACP_CAT_DOT_MODS'          => '확장 프로그램',
	'ACP_CAT_FORUMS'            => '포럼',
	'ACP_CAT_GENERAL'           => '일반',
	'ACP_CAT_MAINTENANCE'       => '유지 관리',
	'ACP_CAT_PERMISSIONS'       => '권한',
	'ACP_CAT_POSTING'           => '게시',
	'ACP_CAT_STYLES'            => '스타일',
	'ACP_CAT_SYSTEM'            => '시스템',
	'ACP_CAT_USERGROUP'         => '사용자 및 그룹',
	'ACP_CAT_USERS'             => '사용자',
	'ACP_CLIENT_COMMUNICATION'  => '클라이언트 통신',
	'ACP_COOKIE_SETTINGS'       => '쿠키 설정',
	'ACP_CONTACT'               => '연락처 페이지',
	'ACP_CONTACT_SETTINGS'      => '연락처 페이지 설정',
	'ACP_CRITICAL_LOGS'         => '오류 로그',
	'ACP_CUSTOM_PROFILE_FIELDS' => '사용자 정의 프로필 필드',

	'ACP_DATABASE'             => '데이터베이스 관리',
	'ACP_DISALLOW'             => '금지',
	'ACP_DISALLOW_USERNAMES'   => '사용자 이름 금지',

	'ACP_EMAIL_SETTINGS'       => '이메일 설정',
	'ACP_EXTENSION_GROUPS'     => '첨부 확장 그룹 관리',
	'ACP_EXTENSION_MANAGEMENT' => '확장 프로그램 관리',
	'ACP_EXTENSIONS'           => '확장 프로그램 관리',

	'ACP_FORUM_BASED_PERMISSIONS' => '포럼 기반 권한',
	'ACP_FORUM_LOGS'              => '포럼 로그',
	'ACP_FORUM_MANAGEMENT'        => '포럼 관리',
	'ACP_FORUM_MODERATORS'        => '포럼 중재자',
	'ACP_FORUM_PERMISSIONS'       => '포럼 권한',
	'ACP_FORUM_PERMISSIONS_COPY'  => '포럼 권한 복사',
	'ACP_FORUM_ROLES'             => '포럼 역할',

	'ACP_GENERAL_CONFIGURATION' => '일반 구성',
	'ACP_GENERAL_TASKS'         => '일반 작업',
	'ACP_GLOBAL_MODERATORS'     => '글로벌 중재자',
	'ACP_GLOBAL_PERMISSIONS'    => '전역 권한',
	'ACP_GROUPS'                => '그룹',
	'ACP_GROUPS_FORUM_PERMISSIONS' => '그룹 포럼 권한',
	'ACP_GROUPS_MANAGE'         => '그룹 관리',
	'ACP_GROUPS_MANAGEMENT'     => '그룹 관리',
	'ACP_GROUPS_PERMISSIONS'    => '그룹 권한',
	'ACP_GROUPS_POSITION'       => '그룹 위치 관리',

	'ACP_HELP_PHPBB'      => 'phpBB 지원에 도움',

	'ACP_ICONS'           => '주제 아이콘',
	'ACP_ICONS_SMILIES'   => '주제 아이콘/웃음',
	'ACP_INACTIVE_USERS'  => '비활성 사용자',
	'ACP_INDEX'           => 'ACP 색인',

	'ACP_JABBER_SETTINGS' => '재버 설정',

	'ACP_LANGUAGE'       => '언어 관리',
	'ACP_LANGUAGE_PACKS' => '언어 팩',
	'ACP_LOAD_SETTINGS'  => '설정 불러오기',
	'ACP_LOGGING'        => '로깅',

	'ACP_MAIN'           => 'ACP 인덱스',

	'ACP_MANAGE_ATTACHMENTS' => '첨부파일 관리',
	'ACP_MANAGE_ATTACHMENTS_EXPLAIN' => '게시물과 비공개 메시지에 첨부된 파일을 나열하고 삭제할 수 있습니다.',

	'ACP_MANAGE_EXTENSIONS'  => '첨부파일 확장자 관리',
	'ACP_MANAGE_FORUMS'      => '포럼 관리',
	'ACP_MANAGE_RANKS'       => '랭크 관리',
	'ACP_MANAGE_REASONS'     => '신고/거부 사유 관리',
	'ACP_MANAGE_USERS'       => '사용자 관리',
	'ACP_MASS_EMAIL'         => '대량 이메일',
	'ACP_MESSAGES'           => '메시지',
	'ACP_MESSAGE_SETTINGS'   => '비공개 메시지 설정',
	'ACP_MODULE_MANAGEMENT'  => '모듈 관리',
	'ACP_MOD_LOGS'           => '조정자 로그',
	'ACP_MOD_ROLES'          => '조정자 역할',

	'ACP_NO_ITEMS'           => '항목이 없습니다.',

	'ACP_ORPHAN_ATTACHMENTS' => '고아 첨부 파일',

	'ACP_PERMISSIONS'        => '권한',
	'ACP_PERMISSION_MASKS'   => '권한 마스크',
	'ACP_PERMISSION_ROLES'   => '권한 역할',
	'ACP_PERMISSION_TRACE'   => '권한 추적',
	'ACP_PHP_INFO'           => 'PHP 정보',
	'ACP_POST_SETTINGS'      => '포스트 설정',
	'ACP_PRUNE_FORUMS'       => '포럼 정리',
	'ACP_PRUNE_USERS'        => '사용자 정리',
	'ACP_PRUNING'            => '가지치기',

	'ACP_QUICK_ACCESS'       => '빠른 액세스',

	'ACP_RANKS'              => '순위',
	'ACP_REASONS'            => '신고/거부 이유',
	'ACP_REGISTER_SETTINGS'  => '사용자 등록 설정',

	'ACP_RESTORE'            => '복원',

	'ACP_FEED'               => '피드 관리',
	'ACP_FEED_SETTINGS'      => '피드 설정',

	'ACP_SEARCH'             => '검색 구성',
	'ACP_SEARCH_INDEX'       => '검색 인덱스',
	'ACP_SEARCH_SETTINGS'    => '검색 설정',
	
	'ACP_SECURITY_SETTINGS'     => '보안 설정',
	'ACP_SERVER_CONFIGURATION'  => '서버 구성',
	'ACP_SERVER_SETTINGS'       => '서버 설정',
	'ACP_SIGNATURE_SETTINGS'    => '서명 설정',
	'ACP_SMILIES'               => '웃음',
	'ACP_STYLE_MANAGEMENT'      => '스타일 관리',
	'ACP_STYLES'                => '스타일',
	'ACP_STYLES_CACHE'          => '캐시 제거',
	'ACP_STYLES_INSTALL'        => '스타일 설치',

	'ACP_SUBMIT_CHANGES'        => '변경사항 제출',

	'ACP_TEMPLATES'             => '템플릿',
	'ACP_THEMES'                => '테마',

	'ACP_UPDATE'          => '업데이트 중',
	'ACP_USERS_FORUM_PERMISSIONS' => '사용자 포럼 권한',
	'ACP_USERS_LOGS'      => '사용자 로그',
	'ACP_USERS_PERMISSIONS'       => '사용자 권한',
	'ACP_USER_ATTACH'     => '첨부파일',
	'ACP_USER_AVATAR'     => '아바타',
	'ACP_USER_FEEDBACK'   => '피드백',
	'ACP_USER_GROUPS'     => '그룹',
	'ACP_USER_MANAGEMENT' => '사용자 관리',
	'ACP_USER_OVERVIEW'   => '개요',
	'ACP_USER_PERM'       => '권한',
	'ACP_USER_PREFS'      => '환경설정',
	'ACP_USER_PROFILE'    => '프로필',
	'ACP_USER_RANK'       => '순위',
	'ACP_USER_ROLES'      => '사용자 역할',
	'ACP_USER_SECURITY'   => '사용자 보안',
	'ACP_USER_SIG'        => '서명',
	'ACP_USER_WARNINGS'   => '경고',

	'ACP_VC_SETTINGS'                 => '스팸봇 대책',
	'ACP_VC_CAPTCHA_DISPLAY'          => 'CAPTCHA 이미지 미리보기',
	'ACP_VERSION_CHECK'               => '업데이트 확인',
	'ACP_VIEW_ADMIN_PERMISSIONS'      => '관리 권한 보기',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'  => '포럼 검토 권한 보기',
	'ACP_VIEW_FORUM_PERMISSIONS'      => '포럼 기반 권한 보기',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS' => '전역 검토 권한 보기',
	'ACP_VIEW_USER_PERMISSIONS'       => '사용자 기반 권한 보기',

	'ACP_WORDS'       => '단어 검열',

	'ACTION'          => '액션',
	'ACTIONS'         => '액션들',
	'ACTIVATE'        => '활성화',
	'ADD'             => '추가',
	'ADMIN'           => '관리',
	'ADMIN_INDEX'     => '관리 색인',
	'ADMIN_PANEL'     => '관리 제어판',

	'ADM_LOGOUT'       => 'ACP&nbsp;로그아웃',
	'ADM_LOGGED_OUT'   => '관리 제어판에서 성공적으로 로그아웃했습니다.',

	'BACK'             => '뒤로',

	'CONTAINER_EXCEPTION'     => '설치된 확장으로 인해 phpBB에서 컨테이너를 빌드하는 중 오류가 발생했습니다. 이러한 이유로 모든 확장 프로그램이 일시적으로 비활성화되었습니다. 포럼 캐시를 삭제해 보십시오. 컨테이너 오류가 해결되면 모든 확장이 자동으로 다시 활성화됩니다. 이 오류가 계속되면 지원을 위해 <a href="https://www.phpbb.com/support">phpBB.com</a>을 방문하세요.',
	'EXCEPTION'               => '예외',

	'COLOUR_SWATCH'     => '웹에 적합한 색상 견본',
	'CONFIG_UPDATED'    => '구성이 성공적으로 업데이트되었습니다.',
	'CRON_LOCK_ERROR'   => '크론 잠금을 얻을 수 없습니다.',
	'CRON_NO_SUCH_TASK' => '크론 작업 “%s”을(를) 찾을 수 없습니다.',
	'CRON_NO_TASK'      => '지금 실행할 필요가 있는 크론 작업이 없습니다.',
	'CRON_NO_TASKS'     => '크론 작업을 찾을 수 없습니다.',
	'CSV_INVALID'       => '제공된 쉼표로 구분된 설정 "%1$s"이(가) 유효하지 않습니다. 값은 쉼표로만 구분해야 하며 선행 또는 후행 구분 기호를 포함해서는 안 됩니다.',
	'CURRENT_VERSION'   => '현재 버전',

	'DEACTIVATE'               => '비활성화',
	'DIRECTORY_DOES_NOT_EXIST' => '입력한 경로 “%s”가 존재하지 않습니다.',
	'DIRECTORY_NOT_DIR'        => '입력한 경로 “%s”는 디렉터리가 아닙니다.',
	'DIRECTORY_NOT_WRITABLE'   => '입력한 경로 "%s"는 쓸 수 없습니다.',
	'DEACTIVATE'               => '비활성화',
	'DOWNLOAD'                 => '다운로드',
	'DOWNLOAD_AS'              => '다른 이름으로 다운로드',
	'DOWNLOAD_STORE'           => '파일 다운로드 또는 저장',
	'DOWNLOAD_STORE_EXPLAIN'   => '파일을 직접 다운로드하거나 <samp>store/</samp> 폴더에 저장할 수 있습니다.',
	'DOWNLOAD'                 => '다운로드',

	'EDIT'             => '편집',
	'ENABLE'           => '활성화',
	'EXPORT_DOWNLOAD'  => '다운로드',
	'EXPORT_STORE'     => '저장',

	'GENERAL_OPTIONS'  => '일반 옵션',
	'GENERAL_SETTINGS' => '일반 설정',
	'GLOBAL_MASK'      => '전역 권한 마스크',

	'INSTALL'          => '설치',
	'IP'               => '사용자 IP',
	'IP_HOSTNAME'      => 'IP 주소 또는 호스트 이름',

	'LATEST_VERSION'             => '최신 버전',
	'LOAD_NOTIFICATIONS'         => '알림 표시',
	'LOAD_NOTIFICATIONS_EXPLAIN' => '모든 페이지(일반적으로 헤더)에 알림 목록을 표시합니다.',
	'LOGGED_IN_AS'               => '다음 계정으로 로그인하셨습니다:',
	'LOGIN_ADMIN'                => '게시판을 관리하려면 인증된 사용자여야 합니다.',
	'LOGIN_ADMIN_CONFIRM'        => '게시판을 관리하려면 자신을 다시 인증해야 합니다.',
	'LOGIN_ADMIN_SUCCESS'        => '인증에 성공했으며 이제 관리 제어판으로 리디렉션됩니다.',
	'LOOK_UP_FORUM'              => '포럼 선택',
	'LOOK_UP_FORUMS_EXPLAIN'     => '하나 이상의 포럼을 선택할 수 있습니다.',

	'MANAGE'               => '관리',
	'MENU_TOGGLE'          => '사이드 메뉴 숨기기 또는 표시',
	'MORE'                 => '더', // Not used at the moment
	'MORE_INFORMATION'     => '추가 정보 »',
	'MOVE_DOWN'            => '아래로 이동',
	'MOVE_UP'              => '위로 이동',
	
	'NOTIFY'               => '알림',
	'NO_ADMIN'             => '이 게시판을 관리할 권한이 없습니다.',
	'NO_EMAILS_DEFINED'    => '올바른 이메일 주소를 찾을 수 없습니다.',
	'NO_FILES_TO_DELETE'   => '삭제하려고 선택한 첨부 파일이 없습니다.',
	'NO_PASSWORD_SUPPLIED' => '관리 제어판에 액세스하려면 비밀번호를 입력해야 합니다.',

	'OFF' => '꺼짐',
	'ON'  => '켜짐',

	'PARSE_BBCODE'                    => 'BB코드 구문 분석',
	'PARSE_SMILIES'                   => '웃음 분석',
	'PARSE_URLS'                      => '링크 구문 분석',
	'PERMISSIONS_TRANSFERRED'         => '권한이 이전됨',
	'PERMISSIONS_TRANSFERRED_EXPLAIN' => '현재 %1$s의 권한을 가지고 있습니다. 이 사용자의 권한으로 게시판을 탐색할 수 있지만 관리자 권한이 전송되지 않았기 때문에 관리 제어판에 액세스할 수 없습니다. 언제든지 <a href="%2$s"><strong>권한 집합으로 되돌릴</strong></a> 수 있습니다.',
	'PROCEED_TO_ACP'                  => '%s ACP%s로 진행',

	'RELEASE_ANNOUNCEMENT'            => '공지',
	'RELEASE_ANNOUNCEMENT'            => '알려주기',
	'REPARSE_LOCK_ERROR'              => '다른 프로세스에서 이미 재분석이 진행 중입니다.',
	'RESYNC'                          => '재동기화',

	'RUNNING_TASK'        => '실행 중인 작업: %s.',
	'SELECT_ANONYMOUS'    => '익명 사용자 선택',
	'SELECT_OPTION'       => '옵션 선택',

	'SETTING_TOO_LOW'     => '설정 "%1$s"에 제공된 값이 너무 낮습니다. 최소 허용 값은 %2$d입니다.',
	'SETTING_TOO_BIG'     => '설정 "%1$s"에 제공된 값이 너무 높습니다. 최대 허용 값은 %2$d입니다.',
	'SETTING_TOO_LONG'    => '설정 "%1$s"에 제공된 값이 너무 깁니다. 최대 길이는 %2$d입니다.',
	'SETTING_TOO_SHORT'   => '설정 "%1$s"에 제공된 값이 너무 짧습니다. 최소 허용 길이는 %2$d입니다.',

	'SHOW_ALL_OPERATIONS' => '모든 작업 보기',

	'TASKS_NOT_READY'     => '준비되지 않은 작업:',
	'TASKS_READY'         => '준비된 작업:',
	'TOTAL_SIZE'          => '전체 크기',

	'UCP'                 => '사용자 제어판',
	'URL_INVALID'         => '“%1$s” 설정에 제공된 URL이 유효하지 않습니다.',
	'URL_SCHEME_INVALID'  => '쉼표로 구분된 설정 “%1$s”에서 제공된 스킴 “%2$s”이(가) 유효하지 않습니다. 스킴은 라틴 문자로 시작하고 그 뒤에 영숫자 문자, 하이픈 또는 점이 와야 합니다.',
	'USERNAMES_EXPLAIN'   => '각각의 사용자 이름을 별도의 줄에 입력하세요.',
	'USER_CONTROL_PANEL'  => '사용자 제어판',

	'UPDATE_NEEDED'       => '보드가 최신 상태가 아닙니다.',
	'UPDATE_NOT_NEEDED'   => '보드가 최신 상태입니다.',
	'UPDATES_AVAILABLE'   => '사용 가능한 업데이트:',

	'WARNING'             => '경고',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN' => '이 페이지는 이 서버에 설치된 PHP 버전에 대한 정보를 나열합니다. 여기에는 로드된 모듈, 사용 가능한 변수 및 기본 설정에 대한 세부 정보가 포함됩니다. 이 정보는 문제를 진단할 때 유용할 수 있습니다. 일부 호스팅 회사는 보안상의 이유로 여기에 표시되는 정보를 제한할 수 있습니다. 지원 포럼에서 <a href="https://www.phpbb.com/about/team/">공식 팀 구성원</a>이 요청하는 경우를 제외하고는 이 페이지에 대한 세부 정보를 제공하지 않는 것이 좋습니다.' ,

	'NO_PHPINFO_AVAILABLE' => 'PHP 구성에 대한 정보를 확인할 수 없습니다. 보안상의 이유로 Phpinfo()가 비활성화되었습니다.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'    => '게시판 관리자가 수행한 모든 작업을 나열합니다. 사용자 이름, 날짜, IP 또는 작업별로 정렬할 수 있습니다. 적절한 권한이 있는 경우 개별 작업 또는 전체 로그를 지울 수도 있습니다.',
	'ACP_CRITICAL_LOGS_EXPLAIN' => '보드 자체에서 수행하는 작업을 나열합니다. 이 로그는 이메일 미배달과 같은 특정 문제를 해결하는 데 사용할 수 있는 정보를 제공합니다. 사용자 이름, 날짜, IP 또는 작업별로 정렬할 수 있습니다. 적절한 권한이 있는 경우 개별 작업 또는 전체 로그를 지울 수도 있습니다.',
	'ACP_MOD_LOGS_EXPLAIN'      => '이 목록에는 포럼, 주제 및 게시물에 대한 모든 작업과 차단을 포함하여 중재자가 사용자에게 수행한 작업이 나열됩니다. 사용자 이름, 날짜, IP 또는 작업별로 정렬할 수 있습니다. 적절한 권한이 있는 경우 개별 작업 또는 전체 로그를 지울 수도 있습니다.',
	'ACP_USERS_LOGS_EXPLAIN'    => '사용자 또는 사용자가 수행한 모든 작업(보고서, 경고 및 사용자 메모)을 나열합니다.',
	'ALL_ENTRIES'               => '모든 항목',

	'DISPLAY_LOG'               => '이전 항목 표시',

	'NO_ENTRIES'                => '이 기간 동안 로그 항목이 없습니다.',

	'SORT_IP'                   => 'IP 주소',
	'SORT_DATE'                 => '날짜',
	'SORT_ACTION'               => '로그 작업',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'             => '보드 솔루션으로 phpBB를 선택해 주셔서 감사합니다. 이 화면은 보드의 모든 다양한 통계에 대한 빠른 개요를 제공합니다. 이 화면의 왼쪽에 있는 링크를 사용하면 보드 경험의 모든 측면을 제어할 수 있습니다. 각 페이지에는 도구 사용 방법에 대한 지침이 있습니다.',
	'ADMIN_LOG'               => '기록된 관리자 작업',
	'ADMIN_LOG_INDEX_EXPLAIN' => '게시판 관리자가 수행한 최근 다섯 가지 작업에 대한 개요를 제공합니다. 로그의 전체 사본은 해당 메뉴 항목이나 아래 링크에서 볼 수 있습니다.',
	'AVATAR_DIR_SIZE'         => '아바타 디렉토리 크기',

	'BOARD_STARTED'           => '보드 시작됨',
	'BOARD_VERSION'           => '보드 버전',

	'DATABASE_SERVER_INFO'    => '데이터베이스 서버',
	'DATABASE_SIZE'           => '데이터베이스 크기',

	// Environment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'                => '함수 과부하가 잘못 설정되었습니다.',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'        => '<var>mbstring.func_overload</var>는 0 또는 4로 설정되어야 합니다. <samp>PHP 정보</samp> 페이지에서 현재 값을 확인할 수 있습니다.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'         => '투명한 문자 인코딩이 잘못 설정되었습니다.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN' => '<var>mbstring.encoding_translation</var>은 0으로 설정해야 합니다. <samp>PHP 정보</samp> 페이지에서 현재 값을 확인할 수 있습니다.',
	'ERROR_MBSTRING_HTTP_INPUT'                   => 'HTTP 입력 문자 변환이 잘못 구성되었습니다.',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'           => '<var>mbstring.http_input</var>은 비어 있어야 합니다. <samp>PHP 정보</samp> 페이지에서 현재 값을 확인할 수 있습니다.',
	'ERROR_MBSTRING_HTTP_OUTPUT'                  => 'HTTP 출력 문자 변환이 잘못 구성되었습니다.',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'          => '<var>mbstring.http_output</var>은 비어 있어야 합니다. <samp>PHP 정보</samp> 페이지에서 현재 값을 확인할 수 있습니다.',
	'ERROR_DEFAULT_CHARSET'                       => '기본 문자 집합이 잘못 구성되었습니다.',
	'ERROR_DEFAULT_CHARSET_EXPLAIN'               => '<var>default_charset</var>은 <samp>UTF-8</samp>로 설정되어야 합니다. <samp>PHP 정보</samp> 페이지에서 현재 값을 확인할 수 있습니다.',

	'FILES_PER_DAY'       => '일별 첨부 파일',
	'FORUM_STATS'         => '게시판 통계',

	'GZIP_COMPRESSION'    => 'GZip 압축',

	'NO_SEARCH_INDEX'     => '선택한 검색 백엔드에 검색 인덱스가 없습니다.<br />%2$ssearch index%3$s 섹션에 “%1$s”에 대한 인덱스를 만드세요.',
	'NOT_AVAILABLE'       => '사용할 수 없음',
	'NUMBER_FILES'        => '첨부파일 개수',
	'NUMBER_POSTS'        => '게시물 수',
	'NUMBER_TOPICS'       => '주제 수',
	'NUMBER_USERS'        => '사용자 수',
	'NUMBER_ORPHAN'       => '고아 첨부 파일',

	'PHP_VERSION'         => 'PHP 버전',
	'PHP_VERSION_OLD'     => '이 서버의 PHP 버전(%1$s)은 향후 phpBB 버전에서 더 이상 지원되지 않습니다. 필요한 최소 버전은 PHP %2$s입니다. %3$s세부정보%4$s',

	'POSTS_PER_DAY'       => '일별 게시물',

	'PURGE_CACHE'         => '캐시 제거',
	'PURGE_CACHE_CONFIRM' => '캐시를 제거하시겠습니까?',
	'PURGE_CACHE_EXPLAIN' => '모든 캐시 관련 항목을 제거합니다. 여기에는 캐시된 템플릿 파일이나 쿼리가 포함됩니다.',
	'PURGE_CACHE_SUCCESS' => '캐시가 성공적으로 제거되었습니다.',

	'PURGE_SESSIONS'                 => '모든 세션 제거',
	'PURGE_SESSIONS_CONFIRM'         => '모든 세션을 제거하시겠습니까? 이렇게 하면 모든 사용자가 로그아웃됩니다.',
	'PURGE_SESSIONS_EXPLAIN'         => '모든 세션을 제거합니다. 이렇게 하면 세션 테이블을 잘라 모든 사용자가 로그아웃됩니다.',
	'PURGE_SESSIONS_SUCCESS'         => '세션을 성공적으로 제거했습니다.',

	'RESET_DATE'                     => '보드 시작 날짜 재설정',
	'RESET_DATE_CONFIRM'             => '게시판의 시작 날짜를 재설정하시겠습니까?',
	'RESET_DATE_SUCCESS'             => '보드 시작 날짜 재설정',
	'RESET_ONLINE'                   => '대부분의 온라인 사용자 재설정',
	'RESET_ONLINE_CONFIRM'           => '가장 많은 온라인 사용자 카운터를 재설정하시겠습니까?',
	'RESET_ONLINE_SUCCESS'           => '지금까지 대부분의 사용자가 온라인 상태로 재설정됨',
	'RESYNC_POSTCOUNTS'              => '게시물 개수 재동기화',
	'RESYNC_POSTCOUNTS_EXPLAIN'      => '기존 게시물만 고려합니다. 정리된 게시물은 집계하지 않습니다.',
	'RESYNC_POSTCOUNTS_CONFIRM'      => '게시물 수를 다시 동기화하시겠습니까?',
	'RESYNC_POSTCOUNTS_SUCCESS'      => '다시 동기화된 게시물 수',
	'RESYNC_POST_MARKING'            => '점선 주제 다시 동기화',
	'RESYNC_POST_MARKING_CONFIRM'    => '점선 주제를 다시 동기화하시겠습니까?',
	'RESYNC_POST_MARKING_EXPLAIN'    => '먼저 모든 주제의 표시를 해제한 다음 지난 6개월 동안 활동이 있었던 주제를 올바르게 표시합니다.',
	'RESYNC_POST_MARKING_SUCCESS'    => '점선 주제 재동기화',
	'RESYNC_STATS'                   => '통계 재동기화',
	'RESYNC_STATS_CONFIRM'           => '통계를 다시 동기화하시겠습니까?',
	'RESYNC_STATS_EXPLAIN'       => '게시물, 주제, 사용자 및 파일의 총 수를 다시 계산합니다.',
	'RESYNC_STATS_SUCCESS'           => '재동기화된 통계',
	'RUN'                            => '지금 실행',

	'STATISTIC'                      => '통계',
	'STATISTIC_RESYNC_OPTIONS'       => '통계 재동기화 또는 재설정',

	'TIMEZONE_INVALID'               => '선택한 시간대가 잘못되었습니다.',
	'TIMEZONE_SELECTED'              => '(현재 선택됨)',
	'TOPICS_PER_DAY'                 => '일별 주제',

	'UPLOAD_DIR_SIZE'                => '게시된 첨부 파일의 크기',
	'USERS_PER_DAY'                  => '일별 사용자 수',

	'VALUE'                          => '값',
	'VERSIONCHECK_FAIL'              => '최신 버전 정보를 가져오지 못했습니다.',
	'VERSIONCHECK_FORCE_UPDATE'      => '버전 재확인',
	'VERSION_CHECK'                  => '버전 확인',
	'VERSION_CHECK_EXPLAIN'          => 'phpBB 설치가 최신인지 확인합니다.',
	'VERSIONCHECK_INVALID_ENTRY'     => '최신 버전 정보에 지원되지 않는 항목이 포함되어 있습니다.',
	'VERSIONCHECK_INVALID_URL'       => '최신 버전 정보에 잘못된 URL이 포함되어 있습니다.',
	'VERSIONCHECK_INVALID_VERSION'   => '최신 버전 정보에 잘못된 버전이 포함되어 있습니다.',
	'VERSION_NOT_UP_TO_DATE_ACP'     => 'phpBB 설치가 최신 버전이 아닙니다.<br />아래는 업데이트에 대한 자세한 정보와 지침이 포함된 릴리스 발표 링크입니다.',
	'VERSION_NOT_UP_TO_DATE_TITLE'   => 'phpBB 설치가 최신 버전이 아닙니다.',
	'VERSION_UP_TO_DATE_ACP'         => 'phpBB 설치가 최신 버전입니다. 현재 사용 가능한 업데이트가 없습니다.',
	'VIEW_ADMIN_LOG'                 => '관리자 로그 보기',
	'VIEW_INACTIVE_USERS'            => '비활성 사용자 보기',

	'WELCOME_PHPBB'                  => 'phpBB에 오신 것을 환영합니다',
	'WRITABLE_CONFIG'                => '구성 파일(config.php)은 현재 누구나 쓸 수 있습니다. 권한을 640 또는 최소 644로 변경하는 것이 좋습니다(예: <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640). config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'            => '비활성 날짜',
	'INACTIVE_REASON'          => '이유',
	'INACTIVE_REASON_MANUAL'   => '관리자가 비활성화한 계정',
	'INACTIVE_REASON_PROFILE'  => '프로필 정보 변경됨',
	'INACTIVE_REASON_REGISTER' => '새로 등록된 계정',
	'INACTIVE_REASON_REMIND'   => '사용자 계정 강제 재활성화',
	'INACTIVE_REASON_UNKNOWN'  => '알 수 없음',
	'INACTIVE_USERS'           => '비활성 사용자',
	'INACTIVE_USERS_EXPLAIN'   => '등록했지만 계정이 비활성화된 사용자 목록입니다. 원하는 경우 이러한 사용자를 활성화, 삭제 또는 알림(이메일 전송)할 수 있습니다.',
	'INACTIVE_USERS_EXPLAIN_INDEX' => '비활성 계정을 가지고 있는 최근 10명의 등록 사용자 목록입니다. 사용자 등록 설정에서 계정 활성화가 활성화되었고 해당 사용자의 계정이 아직 활성화되지 않았거나 해당 계정이 비활성화되었기 때문에 계정이 비활성화됩니다. 원하는 경우 이러한 사용자를 활성화, 삭제 또는 알림(이메일 전송)할 수 있는 아래 링크를 따라 전체 목록을 사용할 수 있습니다.',

	'NO_INACTIVE_USERS' => '비활성 사용자 없음',

	'SORT_INACTIVE'     => '비활성 날짜',
	'SORT_LAST_VISIT'   => '마지막 방문',
	'SORT_REASON'       => '이유',
	'SORT_REG_DATE'     => '등록일',
	'SORT_LAST_REMINDER'=> '마지막 알림',
	'SORT_REMINDER'     => '알림 전송됨',

	'USER_IS_INACTIVE'  => '사용자가 비활성 상태입니다.',
));

// Help support phpBB page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS' => '통계 분석을 위해 서버 및 보드 구성에 대한 정보를 phpBB로 보내십시오. 귀하 또는 귀하의 웹사이트를 식별할 수 있는 모든 정보가 제거되었습니다. 데이터는 완전히 <strong>익명</strong>입니다. 우리는 이 정보를 기반으로 향후 phpBB 버전에 대한 결정을 내립니다. 통계는 공개적으로 제공됩니다. 우리는 또한 이 데이터를 PHP 프로젝트, phpBB를 만드는 프로그래밍 언어와 공유합니다.',
	'EXPLAIN_SHOW_STATISTICS' => '아래 버튼을 사용하여 전송될 모든 변수를 미리 볼 수 있습니다.',
	'DONT_SEND_STATISTICS'    => 'phpBB에 통계 정보를 보내지 않으려면 ACP로 돌아가십시오.',
	'GO_ACP_MAIN'             => 'ACP 시작 페이지로 이동',
	'HIDE_STATISTICS'         => '세부정보 숨기기',
	'SEND_STATISTICS'         => '통계 보내기',
	'SEND_STATISTICS_LONG'    => '통계 정보 보내기',
	'SHOW_STATISTICS'         => '자세히 보기',
	'THANKS_SEND_STATISTICS'  => '정보를 제출해 주셔서 고맙습니다.',
	'FAIL_SEND_STATISTICS'    => 'phpBB에서 통계를 보낼 수 없습니다.',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'  => '<strong>사용자의 사용자 권한을 추가 또는 수정</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_' => '<strong>그룹의 사용자 권한을 추가하거나 수정</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'  => '<strong>사용자의 글로벌 중재자 권한을 추가하거나 수정</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_' => '<strong>그룹의 전역 중재자 권한을 추가하거나 수정</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'  => '<strong>사용자의 관리자 권한을 추가하거나 수정</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_' => '<strong>그룹의 관리자 권한을 추가하거나 수정</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_' => '<strong>추가 또는 수정된 관리자</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'   => '<strong>글로벌 중재자를 추가하거나 수정</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'   => '%1$s<br />» %2$s에 대한 <strong>사용자의 포럼 액세스 권한을 추가 또는 수정</strong>',
	'LOG_ACL_ADD_USER_LOCAL_M_'   => '%1$s<br />» %2$s에 대한 <strong>사용자의 포럼 중재자 액세스 권한을 추가 또는 수정</strong>',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'  => '%1$s<br />» %2$s에 대한 <strong>그룹의 포럼 액세스 권한을 추가 또는 수정</strong>',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'  => '%1$s<br />» %2$s에 대한 <strong>그룹의 포럼 중재자 액세스 권한을 추가 또는 수정</strong>',

	'LOG_ACL_ADD_MOD_LOCAL_M_'    => '%1$s<br />» %2$s에 대해 <strong>관리자를 추가하거나 수정</strong>',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'  => '%1$s<br />» %2$s에 대한 <strong>포럼 권한 추가 또는 수정</strong>',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_' => '<strong>삭제된 관리자</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'   => '<strong>삭제된 전역 중재자</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'    => '%1$s에서 <strong>제거된 중재자</strong><br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'  => '%1$s<br />» %2$s에서 <strong>제거된 사용자/그룹 포럼 권한</strong>',

	'LOG_ACL_TRANSFER_PERMISSIONS'=> '<strong>사용 권한</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS' => '<strong></strong><br />» %s의 권한을 사용한 후 복원된 자신의 권한',

	'LOG_ADMIN_AUTH_FAIL'      => '<strong>관리자 로그인 시도 실패</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'   => '<strong>성공적인 관리 로그인</strong>',

	'LOG_ATTACHMENTS_DELETED'  => '<strong>제거된 사용자 첨부파일</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'       => '<strong>첨부 파일 확장자를 추가하거나 수정했습니다</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'       => '<strong>제거된 첨부 파일 확장자</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'    => '<strong>업데이트된 첨부 파일 확장자</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'  => '<strong>추가된 확장 그룹</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT' => '<strong>편집된 확장 그룹</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'  => '<strong>제거된 확장 그룹</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'    => '<strong>게시물에 업로드된 고아 파일</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'    => '<strong>고아 파일 삭제됨</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'  => '“<em>%1$s</em>” 이유로 <strong>차단에서 제외된 사용자</strong><br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'    => '“<em>%1$s</em>” 이유로 <strong>차단에서 제외된 IP</strong><br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '“<em>%1$s</em>” 이유로 <strong>차단에서 제외된 이메일</strong><br />» %2$s',
	'LOG_BAN_USER'      => '“<em>%1$s</em>” 이유로 <strong>차단된 사용자</strong><br />» %2$s',
	'LOG_BAN_IP'        => '“<em>%1$s</em>” 이유로 <strong>금지된 IP</strong><br />» %2$s',
	'LOG_BAN_EMAIL'     => '“<em>%1$s</em>” 이유로 <strong>이메일 차단</strong><br />» %2$s',
	'LOG_UNBAN_USER'    => '<strong>차단 해제된 사용자</strong><br />» %s',
	'LOG_UNBAN_IP'      => '<strong>차단 해제된 IP</strong><br />» %s',
	'LOG_UNBAN_EMAIL'   => '<strong>차단 해제된 이메일</strong><br />» %s',

	'LOG_BBCODE_ADD'    => '<strong>새로운 BBCode 추가됨</strong><br />» %s',
	'LOG_BBCODE_EDIT'   => '<strong>수정된 BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE' => '<strong>BBCode가 삭제됨</strong><br />» %s',
	'LOG_BBCODE_CONFIGURATION_ERROR' => '<strong>BBCode 구성 중 오류</strong>: %1$s<br />» %2$s',

	'LOG_BOT_ADDED'   => '<strong>새로운 봇 추가됨</strong><br />» %s',
	'LOG_BOT_DELETE'  => '<strong>삭제된 봇</strong><br />» %s',
	'LOG_BOT_UPDATED' => '<strong>기존 봇 업데이트됨</strong><br />» %s',

	'LOG_CLEAR_ADMIN'    => '<strong>관리자 로그 삭제</strong>',
	'LOG_CLEAR_CRITICAL' => '<strong>오류 로그 삭제</strong>',
	'LOG_CLEAR_MOD'      => '<strong>운영자 로그 삭제됨</strong>',
	'LOG_CLEAR_USER'     => '<strong>사용자 로그 삭제됨</strong><br />» %s',
	'LOG_CLEAR_USERS'    => '<strong>사용자 로그 삭제</strong>',

	'LOG_CONFIG_ATTACH'       => '<strong>변경된 첨부 파일 설정</strong>',
	'LOG_CONFIG_AUTH'         => '<strong>변경된 인증 설정</strong>',
	'LOG_CONFIG_AVATAR'       => '<strong>변경된 아바타 설정</strong>',
	'LOG_CONFIG_COOKIE'   => '<strong>변경된 쿠키 설정</strong>',
	'LOG_CONFIG_EMAIL'        => '<strong>변경된 이메일 설정</strong>',
	'LOG_CONFIG_FEATURES'     => '<strong>변경된 보드 기능</strong>',
	'LOG_CONFIG_LOAD'         => '<strong>변경된 로드 설정</strong>',
	'LOG_CONFIG_MESSAGE'      => '<strong>비공개 메시지 설정 변경</strong>',
	'LOG_CONFIG_POST'         => '<strong>글 설정 변경</strong>',
	'LOG_CONFIG_REGISTRATION' => '<strong>변경된 사용자 등록 설정</strong>',
	'LOG_CONFIG_FEED'         => '<strong>변경된 신디케이션 피드 설정</strong>',
	'LOG_CONFIG_SEARCH'       => '<strong>변경된 검색 설정</strong>',
	'LOG_CONFIG_SECURITY'     => '<strong>변경된 보안 설정</strong>',
	'LOG_CONFIG_SERVER'       => '<strong>변경된 서버 설정</strong>',
	'LOG_CONFIG_SETTINGS'     => '<strong>변경된 보드 설정</strong>',
	'LOG_CONFIG_SIGNATURE'    => '<strong>변경된 서명 설정</strong>',
	'LOG_CONFIG_VISUAL'       => '<strong>안티스팸봇 설정 변경</strong>',

	'LOG_APPROVE_TOPIC'       => '<strong>승인된 주제</strong><br />» %s',
	'LOG_BUMP_TOPIC'          => '<strong>사용자 충돌 주제</strong><br />» %s',
	'LOG_DELETE_POST'         => '<strong>다음과 같은 이유로 "%2$s"이(가) 작성한 "%1$s" 게시물이 삭제되었습니다.</strong><br />» %3$s',
	'LOG_DELETE_SHADOW_TOPIC' => '<strong>삭제된 그림자 주제</strong><br />» %s',
	'LOG_DELETE_TOPIC'        => '<strong>다음과 같은 이유로 "%2$s"이(가) 작성한 "%1$s" 항목을 삭제했습니다.</strong><br />» %3$s',
	'LOG_FORK'                => '%s에서 <strong>복사된 주제</strong><br />»',
	'LOG_LOCK'                => '<strong>잠긴 주제</strong><br />» %s',
	'LOG_LOCK_POST'           => '<strong>잠긴 게시물</strong><br />» %s',
	'LOG_MERGE'               => '주제<br />» %s에 <strong>게시물을 병합했습니다</strong>.',
	'LOG_MOVE'                => '%1$s에서 %2$s로 <strong>주제 이동</strong><br />»',
	'LOG_MOVED_TOPIC'         => '<strong>이동된 주제</strong><br />» %s',
	'LOG_PM_REPORT_CLOSED'    => '<strong>마감된 PM 보고서</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'   => '<strong>삭제된 PM 보고서</strong><br />» %s',
	'LOG_POST_APPROVED'       => '<strong>승인된 게시물</strong><br />» %s',
	'LOG_POST_DISAPPROVED'    => '<strong>다음과 같은 이유로 "%3$s"이(가) 작성한 "%1$s" 게시물이 승인되지 않았습니다.</strong><br />» %2$s',
	'LOG_POST_EDITED'         => '<strong>다음과 같은 이유로 "%2$s"이(가) 작성한 게시물 "%1$s"을(를) 수정했습니다.</strong><br />» %3$s',
	'LOG_POST_RESTORED'       => '<strong>복원된 게시물</strong><br />» %s',
	'LOG_REPORT_CLOSED'       => '<strong>닫힌 보고서</strong><br />» %s',
	'LOG_REPORT_DELETED'      => '<strong>삭제된 보고서</strong><br />» %s',
	'LOG_RESTORE_TOPIC'       => '<strong>복원된 주제 "%1$s" 작성:</strong><br />» %2$s',
	'LOG_SOFTDELETE_POST'     => '<strong>다음과 같은 이유로 "%2$s"이(가) 작성한 게시물 "%1$s"을 일시 삭제했습니다</strong><br />» %3$s',
	'LOG_SOFTDELETE_TOPIC'    => '<strong>다음과 같은 이유로 "%2$s"이(가) 작성한 소프트 삭제된 주제 "%1$s"</strong><br />» %3$s',
	'LOG_SPLIT_DESTINATION'   => '<strong>분할 게시물</strong><br />»을(를) %s로 이동함',
	'LOG_SPLIT_SOURCE'        => '<strong>게시물 분할</strong><br />» %s에서',

	'LOG_TOPIC_APPROVED'      => '<strong>승인된 주제</strong><br />» %s',
	'LOG_TOPIC_RESTORED'      => '<strong>복원된 주제</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'   => '<strong>다음과 같은 이유로 "%3$s"이(가) 쓴 "%1$s" 주제가 승인되지 않았습니다.</strong><br />» %2$s',
	'LOG_TOPIC_RESYNC'        => '<strong>재동기화된 주제 카운터</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'  => '<strong>주제 유형 변경됨</strong><br />» %s',
	'LOG_UNLOCK'              => '<strong>잠금 해제된 주제</strong><br />» %s',
	'LOG_UNLOCK_POST'         => '<strong>잠금 해제된 게시물</strong><br />» %s',

	'LOG_DISALLOW_ADD'        => '<strong>허용되지 않는 사용자 이름 추가</strong><br />» %s',
	'LOG_DISALLOW_DELETE'     => '<strong>허용되지 않는 사용자 이름 삭제</strong>',

	'LOG_DB_BACKUP'           => '<strong>데이터베이스 백업</strong>',
	'LOG_DB_DELETE'           => '<strong>삭제된 데이터베이스 백업</strong>',
	'LOG_DB_RESTORE'          => '<strong>복원된 데이터베이스 백업</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP' => '<strong>다운로드 목록에서 제외된 IP/호스트 이름</strong><br />» %s',
	'LOG_DOWNLOAD_IP'         => '<strong>다운로드 목록에 IP/호스트 이름을 추가함</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'  => '<strong>다운로드 목록에서 IP/호스트 이름을 제거함</strong><br />» %s',

	'LOG_ERROR_JABBER'        => '<strong>재버 오류</strong><br />» %s',
	'LOG_ERROR_EMAIL'         => '<strong>이메일 오류</strong><br />» %s',
	'LOG_ERROR_CAPTCHA'       => '<strong>CAPTCHA 오류</strong><br />» %s',

	'LOG_FORUM_ADD'                         => '<strong>새 포럼 생성</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'          => '%1$s에서 <strong>복사된 포럼 권한</strong><br />» %2$s',
	'LOG_FORUM_DEL_FORUM'                   => '<strong>삭제된 포럼</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'              => '<strong>삭제된 포럼 및 하위 포럼</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'             => '<strong>포럼을 삭제하고 하위 포럼을</strong> %1$s로 이동했습니다.<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'              => '<strong>포럼을 삭제하고 </strong> 게시물을 %1$s로 이동했습니다.<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'       => '<strong>삭제된 포럼 및 하위 포럼, 포스트를</strong> %1$s로 이동했습니다.<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'  => '<strong>포럼 삭제, 게시물</strong>을 %1$s로 <strong>하위 포럼</strong>을 %2$s로 이동<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'                   => '<strong>삭제된 포럼 및 게시물</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'            => '<strong>삭제된 포럼, 게시물 및 하위 포럼</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'       => '<strong>포럼과 게시물이 삭제되고 하위 포럼이</strong> %1$s로 이동되었습니다.<br />» %2$s',
	'LOG_FORUM_EDIT'                        => '<strong>포럼 세부정보 수정</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'                   => '<strong>포럼</strong> %1$s <strong>%2$s 아래로</strong> 이동함',
	'LOG_FORUM_MOVE_UP'                     => '<strong>포럼</strong> %1$s <strong>%2$s 위로</strong> 이동',
	'LOG_FORUM_SYNC'                        => '<strong>다시 동기화된 포럼</strong><br />» %s',

	'LOG_GENERAL_ERROR'     => '<strong>일반 오류 발생</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'     => '<strong>새 사용자 그룹이 생성됨</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'    => '<strong>그룹 "%1$s"이(가) 구성원의 기본 설정</strong><br />» %2$s',
	'LOG_GROUP_DELETE'      => '<strong>사용자 그룹 삭제됨</strong><br />» %s',
	'LOG_GROUP_DEMOTED'     => '<strong>사용자 그룹에서 강등된 리더</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'    => '<strong>사용자 그룹의 리더로 승격된 구성원</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'      => '<strong>사용자 그룹에서 제거된 구성원</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'     => '<strong>사용자 그룹 정보 업데이트됨</strong><br />» %s',
	'LOG_MODS_ADDED'        => '<strong>사용자 그룹에 새 리더 추가</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'       => '<strong>사용자 그룹에 새 회원 추가</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'    => '<strong>사용자 그룹</strong> %1$s<br />» %2$s에서 승인된 사용자',
	'LOG_USERS_PENDING'     => '<strong>사용자가 “%1$s” 그룹에 가입을 요청했고 승인이 필요합니다</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR' => '<strong>이미지 생성 중 오류</strong><br />» %2$s 줄의 %1$s 오류: %3$s',

	'LOG_INACTIVE_ACTIVATE' => '<strong>비활성 사용자 활성화</strong><br />» %s',
	'LOG_INACTIVE_DELETE'   => '<strong>삭제된 비활성 사용자</strong><br />» %s',
	'LOG_INACTIVE_REMIND'   => '<strong>비활성 사용자에게 알림 이메일을 보냄</strong><br />» %s',
	'LOG_INSTALL_CONVERTED' => '<strong>%1$s에서 phpBB %2$s로 변환됨</strong>',
	'LOG_INSTALL_INSTALLED' => '<strong>phpBB %s 설치됨</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK' => '<strong>세션 IP/브라우저/X_FORWARDED_FOR 확인 실패</strong><br />»사용자 IP "<em>%1$s</em>"가 세션 IP "<em>%"에 대해 확인됨 2$s</em>”, 사용자 브라우저 문자열 “<em>%3$s</em>”이 세션 브라우저 문자열 “<em>%4$s</em>” 및 사용자 X_FORWARDED_FOR 문자열 “<em >%5$s</em>” 세션 X_FORWARDED_FOR 문자열 “<em>%6$s</em>”에 대해 확인했습니다.',

	'LOG_JAB_CHANGED'                => '<strong>Jabber 계정이 변경됨</strong>',
	'LOG_JAB_PASSCHG'                => '<strong>Jabber 비밀번호가 변경됨</strong>',
	'LOG_JAB_REGISTER'               => '<strong>Jabber 계정이 등록됨</strong>',
	'LOG_JAB_SETTINGS_CHANGED'       => '<strong>Jabber 설정이 변경됨</strong>',

	'LOG_LANGUAGE_PACK_DELETED'      => '<strong>삭제된 언어 팩</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'    => '<strong>설치된 언어 팩</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'      => '<strong>업데이트된 언어 팩 세부 정보</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'     => '<strong>교체된 언어 파일</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'    => '<strong>언어 파일을 제출하고 저장 폴더에 저장</strong><br />» %s',

	'LOG_MASS_EMAIL'        => '<strong>대량 이메일 전송</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER' => '<strong>주제 "%1$s"의 게시자가 변경됨</strong><br />» %2$s에서 %3$s로 변경됨',

	'LOG_MODULE_DISABLE'    => '<strong>모듈 비활성화</strong><br />» %s',
	'LOG_MODULE_ENABLE'     => '<strong>모듈 활성화</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'  => '<strong>모듈이 아래로 이동함</strong><br />» %1$s이(가) %2$s 아래로 이동함',
	'LOG_MODULE_MOVE_UP'    => '<strong>모듈이 위로 이동</strong><br />» %1$s이(가) %2$s보다 높음',
	'LOG_MODULE_REMOVED'    => '<strong>모듈 제거됨</strong><br />» %s',
	'LOG_MODULE_ADD'        => '<strong>모듈 추가됨</strong><br />» %s',
	'LOG_MODULE_EDIT'       => '<strong>모듈 수정됨</strong><br />» %s',

	'LOG_A_ROLE_ADD'        => '<strong>관리자 역할 추가됨</strong><br />» %s',
	'LOG_A_ROLE_EDIT'       => '<strong>관리자 역할 수정됨</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'    => '<strong>관리자 역할이 제거됨</strong><br />» %s',
	'LOG_F_ROLE_ADD'        => '<strong>포럼 역할이 추가됨</strong><br />» %s',
	'LOG_F_ROLE_EDIT'   => '<strong>포럼 역할 수정됨</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'    => '<strong>포럼 역할이 제거됨</strong><br />» %s',
	'LOG_M_ROLE_ADD'        => '<strong>조정자 역할이 추가됨</strong><br />» %s',
	'LOG_M_ROLE_EDIT'       => '<strong>조정자 역할 수정됨</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'    => '<strong>중재자 역할이 제거됨</strong><br />» %s',
	'LOG_U_ROLE_ADD'        => '<strong>사용자 역할 추가됨</strong><br />» %s',
	'LOG_U_ROLE_EDIT'       => '<strong>사용자 역할 수정됨</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'    => '<strong>사용자 역할이 제거됨</strong><br />» %s',

	'LOG_PLUPLOAD_TIDY_FAILED'     => '<strong>정돈을 위해 %1$s을(를) 열 수 없습니다. 권한을 확인하세요.</strong><br />예외: %2$s<br />추적: %3$s',

	'LOG_PROFILE_FIELD_ACTIVATE'   => '<strong>프로필 필드 활성화</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'     => '<strong>프로필 필드가 추가됨</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE' => '<strong>프로필 필드 비활성화됨</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'       => '<strong>프로필 필드가 변경됨</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'    => '<strong>프로필 필드가 제거됨</strong><br />» %s',

	'LOG_PRUNE' => '<strong>정리된 포럼</strong><br />» %s',
	'LOG_AUTO_PRUNE' => '<strong>자동 정리된 포럼</strong><br />» %s',
	'LOG_PRUNE_SHADOW' => '<strong>자동 정리된 그림자 항목</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC' => '<strong>사용자 비활성화됨</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL' => '<strong>사용자 정리 및 게시물 삭제</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'  => '<strong>사용자 정리 및 게시물 유지</strong><br />» %s',

	'LOG_PURGE_CACHE'     => '<strong>제거된 캐시</strong>',
	'LOG_PURGE_SESSIONS'  => '<strong>제거된 세션</strong>',

	'LOG_RANK_ADDED'      => '<strong>새 순위 추가됨</strong><br />» %s',
	'LOG_RANK_REMOVED'    => '<strong>삭제된 순위</strong><br />» %s',
	'LOG_RANK_UPDATED'    => '<strong>업데이트된 순위</strong><br />» %s',

	'LOG_REASON_ADDED'    => '<strong>신고/거부 이유 추가됨</strong><br />» %s',
	'LOG_REASON_REMOVED'  => '<strong>삭제된 신고/거부 이유</strong><br />» %s',
	'LOG_REASON_UPDATED'  => '<strong>업데이트된 신고/거부 사유</strong><br />» %s',

	'LOG_REFERER_INVALID' => '<strong>리퍼러 확인 실패</strong><br />»리퍼러는 “<em>%1$s</em>”이었습니다. 요청이 거부되었고 세션이 종료되었습니다.',
	'LOG_RESET_DATE'      => '<strong>보드 시작 날짜 재설정</strong>',
	'LOG_RESET_ONLINE'    => '<strong>대부분의 온라인 사용자 재설정</strong>',
	'LOG_RESYNC_FILES_STATS'   => '<strong>파일 통계 재동기화됨</strong>',
	'LOG_RESYNC_POSTCOUNTS'    => '<strong>사용자 게시물 수가 다시 동기화됨</strong>',
	'LOG_RESYNC_POST_MARKING'  => '<strong>점선 주제가 다시 동기화됨</strong>',
	'LOG_RESYNC_STATS'         => '<strong>게시물, 주제 및 사용자 통계가 다시 동기화됨</strong>',

	'LOG_SEARCH_INDEX_CREATED' => '<strong></strong><br />» %s에 대한 검색 인덱스 생성됨',
	'LOG_SEARCH_INDEX_REMOVED' => '<strong>삭제된 검색 색인</strong><br />» %s',
	'LOG_SPHINX_ERROR'         => '<strong>스핑크스 오류</strong><br />» %s',

	'LOG_SPAMHAUS_OPEN_RESOLVER'  => 'Spamhaus는 open resolver를 사용하는 쿼리를 허용하지 않습니다. 블랙리스트 확인이 비활성화되었습니다. 자세한 내용은 https://www.spamhaus.com/product/help-for-spamhaus-public-mirror-users/를 참조하세요.',
	'LOG_SPAMHAUS_VOLUME_LIMIT'   => 'Spamhaus 쿼리 볼륨 제한을 초과했습니다. 블랙리스트 확인이 비활성화되었습니다. 자세한 내용은 https://www.spamhaus.com/product/help-for-spamhaus-public-mirror-users/를 참조하세요.',

	'LOG_STYLE_ADD' => '<strong>새 스타일 추가됨</strong><br />» %s',
	'LOG_STYLE_DELETE' => '<strong>삭제된 스타일</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS' => '<strong>편집된 스타일</strong><br />» %s',
	'LOG_STYLE_EXPORT'           => '<strong>내보낸 스타일</strong><br />» %s',

	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_DB'        => '<strong>데이터베이스에 새 템플릿 세트를 추가함</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_FS'        => '<strong>파일 시스템에 설정된 새 템플릿 추가</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED' => '<strong>템플릿 집합 <em>%1$s</em></strong><br />» %2$s에서 템플릿 파일의 캐시된 버전을 삭제함',
	'LOG_TEMPLATE_DELETE'        => '<strong>삭제된 템플릿 세트</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'          => '<strong>편집된 템플릿 집합 <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'  => '<strong>편집된 템플릿 세부 정보</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'        => '<strong>내보낸 템플릿 세트</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_REFRESHED'     => '<strong>새로 고친 템플릿 세트</strong><br />» %s',

	// @deprecated 3.1
	'LOG_THEME_ADD_DB'       => '<strong>데이터베이스에 새 테마 추가</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_ADD_FS'       => '<strong>파일 시스템에 새 테마 추가</strong><br />» %s',
	'LOG_THEME_DELETE      ' => '<strong>테마 삭제됨</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS' => '<strong>테마 세부정보 수정</strong><br />» %s',
	'LOG_THEME_EDIT'     => '<strong>편집된 테마 <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'    => '<strong>편집된 테마 <em>%1$s</em></strong><br />» 수정된 파일 <em>%2$s</em>',
	'LOG_THEME_EXPORT'       => '<strong>내보낸 테마</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_REFRESHED' => '<strong>새로고침된 테마</strong><br />» %s',

	'LOG_UPDATE_DATABASE' => '<strong>%1$s 버전에서 %2$s 버전으로 데이터베이스 업데이트</strong>',
	'LOG_UPDATE_PHPBB'    => '<strong>phpBB를 %1$s 버전에서 %2$s 버전으로 업데이트</strong>',
 
	'LOG_USER_ACTIVE'     => '<strong>사용자 활성화</strong><br />» %s',
	'LOG_USER_BAN_USER'   => '<em>%1$s</em> 이유로 <strong>사용자 관리를 통한 사용자 차단</strong><br />» %2$s',
	'LOG_USER_BAN_IP'     => '<em>%1$s</em> 이유로 <strong>사용자 관리를 통해 금지된 IP</strong><br />» %2$s',
	'LOG_USER_BAN_EMAIL'  => '<em>%1$s</em> 이유로 <strong>사용자 관리를 통한 이메일 차단</strong><br />» %2$s',
	'LOG_USER_DELETED'    => '<strong>삭제된 사용자</strong><br />» %s',
	'LOG_USER_DEL_ATTACH' => '<strong>사용자가 만든 모든 첨부 파일을 제거했습니다.</strong><br />» %s',
	'LOG_USER_DEL_AVATAR' => '<strong>삭제된 사용자 아바타</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX' => '<strong>비워진 사용자 발신함</strong><br />» %s',
	'LOG_USER_DEL_POSTS'  => '<strong>사용자가 작성한 모든 게시물을 제거함</strong><br />» %s',
	'LOG_USER_DEL_SIG'    => '<strong>사용자 서명이 제거됨</strong><br />» %s',
	'LOG_USER_INACTIVE'   => '<strong>사용자 비활성화됨</strong><br />» %s',
	'LOG_USER_MOVE_POSTS' => '<strong>사용자 게시물</strong><br />» 게시물을 "%1$s"이(가) 포럼 "%2$s"(으)로 이동함',
	'LOG_USER_NEW_PASSWORD' => '<strong>변경된 사용자 비밀번호</strong><br />» %s',
	'LOG_USER_REACTIVATE' => '<strong>강제 사용자 계정 재활성화</strong><br />» %s',
	'LOG_USER_REMOVED_NR' => '<strong>사용자로부터 새로 등록된 플래그를 제거함</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL' => '<strong>사용자 "%1$s"가 이메일을 변경했습니다</strong><br />» "%2$s"에서 "%3$s"로 변경',
	'LOG_USER_UPDATE_NAME'  =>  '<strong>사용자 이름 변경</strong><br />» "%1$s"에서 "%2$s"로',
	'LOG_USER_USER_UPDATE'  => '<strong>업데이트된 사용자 정보</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'      => '<strong>사용자 계정 활성화</strong>',
	'LOG_USER_DEL_AVATAR_USER'  => '<strong>사용자 아바타가 제거됨</strong>',
	'LOG_USER_DEL_SIG_USER'     => '<strong>사용자 서명이 제거됨</strong>',
	'LOG_USER_FEEDBACK'         => '<strong>추가된 사용자 피드백</strong><br />» %s',
	'LOG_USER_GENERAL'          => '<strong>추가된 항목:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'    => '<strong>사용자 계정 비활성화됨</strong>',
	'LOG_USER_LOCK'             => '<strong>사용자가 자신의 주제를 잠갔습니다</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'  => '<strong>모든 게시물을 포럼으로 이동했습니다</strong>» %s',
	'LOG_USER_REAACTIVATE_USER' => '<strong>사용자 계정 강제 재활성화</strong>',
	'LOG_USER_UNLOCK'           => '<strong>사용자가 자신의 주제를 잠금 해제함</strong><br />» %s',
	'LOG_USER_WARNING'          => '<strong>추가된 사용자 경고</strong><br />» %s',
	'LOG_USER_WARNING_BODY'     => '<strong>다음 경고가 이 사용자에게 발행되었습니다</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'       => '<strong>사용자가 기본 그룹을 변경함</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'       => '<strong>사용자 그룹에서 리더로 강등된 사용자</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'         => '<strong>그룹에 가입한 사용자</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING' => '<strong>사용자가 그룹에 가입했으며 승인이 필요합니다</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'       => '<strong>사용자가 그룹에서 탈퇴했습니다</strong><br />» %s',

	'LOG_WARNING_DELETED'         => '<strong>삭제된 사용자 경고</strong><br />» %s',
	'LOG_WARNINGS_DELETED'        => array(
	   1 => '<strong>삭제된 사용자 경고</strong><br />» %1$s',
	   2 => '<strong>%2$d 사용자 경고 삭제</strong><br />» %1$s', // 예: '<strong>2 사용자 경고 삭제</strong><br />» 사용자 이름'
	),
	'LOG_WARNINGS_DELETED_ALL'    => '<strong>모든 사용자 경고 삭제</strong><br />» %s',

	'LOG_WORD_ADD'    => '<strong>단어 검열 추가됨</strong><br />» %s',
	'LOG_WORD_DELETE' => '<strong>단어 검열 삭제됨</strong><br />» %s',
	'LOG_WORD_EDIT'   => '<strong>편집된 단어 검열</strong><br />» %s',

	'LOG_EXT_ENABLE'  => '<strong>확장 프로그램 사용 가능</strong><br />» %s',
	'LOG_EXT_DISABLE' => '<strong>확장 기능 비활성화</strong><br />» %s',
	'LOG_EXT_PURGE'   => '<strong>확장 프로그램의 데이터가 삭제됨</strong><br />» %s',
	'LOG_EXT_UPDATE'  => '<strong>확장 프로그램 업데이트됨</strong><br />» %s',
));
