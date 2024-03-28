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
	'ACP_FILES'			=> '관리 언어 파일Admin language files',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> '여기에서 언어 팩을 설치/제거할 수 있습니다. 기본 언어 팩은 별표(*)로 표시됩니다.',

	'DELETE_LANGUAGE_CONFIRM'	=> '정말로 “%s”을(를) 삭제하시겠습니까?',

	'INSTALLED_LANGUAGE_PACKS'	=> '설치된 언어 팩',

	'LANGUAGE_DETAILS_UPDATED'	=> '언어 세부 정보가 성공적으로 업데이트되었습니다.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> '이 언어 팩은 이미 설치되어 있습니다.',
	'LANGUAGE_PACK_DELETED'			=> '언어 팩 “%s”이(가) 성공적으로 제거되었습니다. 이 언어를 사용하는 모든 사용자는 보드의 기본 언어로 재설정되었습니다.',
	'LANGUAGE_PACK_DETAILS'			=> '언어 팩 상세',
	'LANGUAGE_PACK_INSTALLED'		=> '언어팩 “%s” 성공적 설치.',
	'LANGUAGE_PACK_CPF_UPDATE'		=> '사용자 정의 프로필 필드의 언어 문자열이 기본 언어에서 복사되었습니다. 필요한 경우 변경하십시오.',
	'LANGUAGE_PACK_ISO'			=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'		=> '로컬 이름',
	'LANGUAGE_PACK_NAME'			=> '이름',
	'LANGUAGE_PACK_NOT_EXIST'		=> '선택한 언어팩 없음.',
	'LANGUAGE_PACK_USED_BY'			=> '사용 (including robots)',
	'LANGUAGE_VARIABLE'			=> '언어 변수',
	'LANG_AUTHOR'				=> '언어 팩 저자',
	'LANG_ENGLISH_NAME'			=> '영어 이름',
	'LANG_ISO_CODE'				=> 'ISO 코드',
	'LANG_LOCAL_NAME'			=> '로컬 이름',

	'MISSING_LANG_FILES'		=> '빠진 언어 파일',
	'MISSING_LANG_VARIABLES'	=> '빠진 언어 변수',

	'NO_FILE_SELECTED'		=> '언어 파일을 지정하지 않았습니다.',
	'NO_LANG_ID'			=> '언어 팩을 지정하지 않았습니다.',
	'NO_REMOVE_DEFAULT_LANG'	=> '기본 언어 팩을 제거할 수 없습니다.<br />이 언어 팩을 제거하려면 먼저 보드의 기본 언어를 변경하세요.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> '제거된 언어 팩 없음',

	'THOSE_MISSING_LANG_FILES'	=> ' “%s” 언어 폴더에 다음 언어 파일이 없습니다',
	'THOSE_MISSING_LANG_VARIABLES'	=> ' “%s” 언어 팩에서 다음 언어 변수가 누락되었습니다',

	'UNINSTALLED_LANGUAGE_PACKS'	=> '제거된 언어 팩',

	'BROWSE_LANGUAGE_PACKS_DATABASE'	=> '언어 팩 데이터베이스 찾아보기',
));
