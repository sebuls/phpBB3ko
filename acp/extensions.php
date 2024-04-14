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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'EXTENSION'		=> '확장',
	'EXTENSIONS'		=> '확장',
	'EXTENSIONS_ADMIN'	=> '확장 관리자',
	'EXTENSIONS_EXPLAIN'	=> '확장 관리자는 모든 확장 상태를 관리하고 그에 대한 정보를 볼 수 있는 phpBB 보드의 도구.',
	'EXTENSION_INVALID_LIST'	=> '“%s” 확장은 유효하지 않음.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> '선택한 확장은 이 보드에서 사용 불가, phpBB 및 PHP 버전이 허용하는지 확인 바람 (상세 페이지 보세요).',
	'EXTENSION_DIR_INVALID'		=> '선택한 확장의 디렉토리 구조가 잘못되어 활성화할 수 없습니다.',
	'EXTENSION_NOT_ENABLEABLE'	=> '선택한 확장을 사용할 수 없습니다. 확장의 요구 사항을 확인하세요.',
	'EXTENSION_NOT_INSTALLED'	=> '확장 %s 사용 불가. 올바르게 설치했는지 확인 바람.',

	'DETAILS'		=> '상세',

	'EXTENSIONS_DISABLED'	=> '비활성 확장',
	'EXTENSIONS_ENABLED'	=> '확정 확장',

	'EXTENSION_DELETE_DATA'	=> '데이터 지움',
	'EXTENSION_DISABLE'	=> '비활성',
	'EXTENSION_ENABLE'	=> '활성',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> '확장 프로그램의 데이터를 지우면 모든 데이터와 설정이 지워집니다. 확장 파일은 다시 활성화할 수 있도록 유지됩니다.',
	'EXTENSION_DISABLE_EXPLAIN'	=> '확장 프로그램을 비활성화하면 해당 파일, 데이터 및 설정은 유지되지만 확장 프로그램에 의해 추가된 모든 기능이 제거됩니다.',
	'EXTENSION_ENABLE_EXPLAIN'	=> '확장을 활성화하면 보드에서 사용할 수 있습니다.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> '확장 프로그램의 데이터가 현재 삭제 중입니다. 완료될 때까지 이 페이지를 떠나거나 새로 고치지 마십시오.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> '확장 프로그램이 현재 비활성화 중입니다. 완료될 때까지 이 페이지를 떠나거나 새로 고치지 마십시오.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> '확장 프로그램이 현재 활성화 중입니다. 완료될 때까지 이 페이지를 떠나거나 새로 고치지 마십시오.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> '확장 데이터 삭제 성공',
	'EXTENSION_DISABLE_SUCCESS'	=> '확장 비활성화 성공',
	'EXTENSION_ENABLE_SUCCESS'	=> '확장 활성화 성공',

	'EXTENSION_NAME'		=> '확장 이름',
	'EXTENSION_ACTIONS'		=> '작업',
	'EXTENSION_OPTIONS'		=> '옵션',
	'EXTENSION_INSTALL_HEADLINE'=> '확장 설치',
	'EXTENSION_INSTALL_EXPLAIN'	=> '<ol>
		<li>phpBB의 확장 데이터베이스에서 확장 다운로드</li>
		<li>확장 프로그램의 압축을 풀고 phpBB 보드의 <samp>ext/</samp> 디렉토리에 업로드합니다</li>
		<li>여기 확장 프로그램 관리자에서 확장 프로그램을 활성화합니다</li>
		</ol>',
	'EXTENSION_UPDATE_HEADLINE'	=> '확장 프로그램 업데이트 중',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
		<li>확장 비활성</li>
		<li>확장 파일을 파일시스템에서 삭제</li>
		<li>새 파일 업로드</li>
		<li>확장 가능</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> '확장을 보드에서 제거',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>확장 비활성화</li>
			<li>확장의 데이터 삭제</li>
			<li>확장의 파일을 파일시스템에서 지움</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> ' “%s” 관련 데이터를 지우겠습니까?<br /><br />모든 데이터와 설정이 없어지며 취소 안 됩니다!',
	'EXTENSION_DISABLE_CONFIRM'	=> 'Are you sure that you wish to disable the “%s” 확장을 비활성화하겠습니까extension?',
	'EXTENSION_ENABLE_CONFIRM'	=> 'Are you sure that you wish to enable the “%s” 확장을 활성화 하겠습니까?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Are you sure that you wish to force the use of unstable version?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Return to the extension list',

	'EXT_DETAILS'	=> '확장 상세Extension Details',
	'DISPLAY_NAME'	=> '이름 보이기Display Name',
	'CLEAN_NAME'	=> '이름 지우기Clean Name',
	'TYPE'		=> '유형Type',
	'DESCRIPTION'	=> '설명Description',
	'VERSION'	=> '버전Version',
	'HOMEPAGE'	=> '홈페이지Homepage',
	'PATH'		=> '파일 경로',
	'TIME'		=> '릴리스 시간',
	'LICENSE'	=> '라이선스',

	'REQUIREMENTS'		=> 'Requirements',
	'PHPBB_VERSION'		=> 'phpBB 버전',
	'PHP_VERSION'		=> 'PHP 버전',
	'AUTHOR_INFORMATION'	=> '저자 정보',
	'AUTHOR_NAME'		=> '이름',
	'AUTHOR_EMAIL'		=> '이메일',
	'AUTHOR_HOMEPAGE'	=> '홈페이지',
	'AUTHOR_ROLE'		=> '역할',

	'NOT_UP_TO_DATE'	=> '%s 최근 아님',
	'UP_TO_DATE'		=> '%s 최근',
	'ANNOUNCEMENT_TOPIC'	=> '랄리스 알림',
	'DOWNLOAD_LATEST'	=> 'Download Version',
	'NO_VERSIONCHECK'	=> '버전 확인 정보 없음.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> '모든 버전 재 확인',
	'FORCE_UNSTABLE'			=> '불안정 버전 항상 확인',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> '버전 확인 설정',

	'BROWSE_EXTENSIONS_DATABASE'		=> 'Browse extensions database',

	'META_FIELD_NOT_SET'	=> '필수 메타 필드 %s 설정 안 됨.',
	'META_FIELD_INVALID'	=> '%s 메타 필드 잘못됨.',
));
