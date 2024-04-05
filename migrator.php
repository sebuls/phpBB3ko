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
	'CONFIG_NOT_EXIST'			=> '구성 설정 "%s" 예기치 않게 없음.',

	'GROUP_NOT_EXIST'			=> '그룹 "%s" 예기치 않게 없음.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> '%s 종속성 적용.',
	'MIGRATION_DATA_DONE'			=> '설치된 데이터: %1$s; Time: %2$.2f seconds',
	'MIGRATION_DATA_IN_PROGRESS'		=> '데이터 설치 중: %1$s; Time: %2$.2f seconds',
	'MIGRATION_DATA_RUNNING'		=> '데이터 설치 중: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> '마이그레이션이 이미 효과적으로 설치됨(건너뜀): %s',
	'MIGRATION_EXCEPTION_ERROR'		=> '요청 중에 문제가 발생하여 예외가 발생했습니다. 오류가 발생하기 전에 변경한 내용은 최대한 되돌렸지만 보드에서 오류를 확인해야 합니다.',
	'MIGRATION_NOT_FULFILLABLE'		=> '마이그레이션 "%1$s" 수행 안 됨, 빠진 마이그레이션 "%2$s".',
	'MIGRATION_NOT_INSTALLED'		=> '마이그레이션 "%s" 설치 안 됨.',
	'MIGRATION_NOT_VALID'			=> '%s 유효하지 않은 마이그레이션.',
	'MIGRATION_SCHEMA_DONE'			=> '설치된 스키마: %1$s; Time: %2$.2f seconds',
	'MIGRATION_SCHEMA_IN_PROGRESS'		=> '스키마 설치중: %1$s; Time: %2$.2f seconds',
	'MIGRATION_SCHEMA_RUNNING'		=> '스키마 설치중: %s.',

	'MIGRATION_REVERT_DATA_DONE'		=> '되돌린 데이터: %1$s; Time: %2$.2f seconds',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> '데이터 되돌리기: %1$s; Time: %2$.2f seconds',
	'MIGRATION_REVERT_DATA_RUNNING'		=> '데이터 되돌리기: %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'		=> '되돌린 스키마: %1$s; Time: %2$.2f seconds',
	'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> '스키마 되돌리기: %1$s; Time: %2$.2f seconds',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> '스키마 되돌리기: %s.',

	'MIGRATION_INVALID_DATA_MISSING_CONDITION'	=> '마이그레이션 잘못됨. if 문 도우미에 조건 빠짐.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'		=> '마이그레이션 잘못됨. if 문 도우미에 마이그레이션 단계에 대한 유효한 호출이 없습니다.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> '마이그레이션 잘못됨. 사용자 지정 호출가능 함수 호출 불가.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'		=> '마이그레이션 잘못됨. 모르는 마이그레이션 도구 유형 발견.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'		=> '마이그레이션 잘못됨. 정의되지 않은 마이그레이션 도구 발견되었습니다.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'	=> '마이그레이션 잘못됨. 정의되지 않은 마이그레이션 도구 발견되었습니다..',

	'MODULE_ERROR'				=> '모듈 생성 에러: %s',
	'MODULE_EXISTS'				=> '모듈 이미 존재: %s',
	'MODULE_EXIST_MULTIPLE'			=> '지정된 상위 모듈 이름을 가진 여러 모듈이 이미 있습니다: %s. 전/후 키를 사용하여 모듈 배치를 명확히 하십시오.',
	'MODULE_INFO_FILE_NOT_EXIST'		=> '필요한 정보 파일 없음: %2$s',
	'MODULE_NOT_EXIST'			=> '필요한 모듈 없음: %s',

	'PARENT_MODULE_FIND_ERROR'		=> '상위 모듈 식별자를 확인할 수 없음: %s',
	'PERMISSION_NOT_EXIST'			=> '권한 설정 "%s" 예기치 않게 없음.',

	'ROLE_ASSIGNED_NOT_EXIST'		=> '그룹에 할당된 권한 역할 "%1$s" 뎨기치 않게 없음. Role id: "%2$s"',
	'ROLE_NOT_EXIST'			=> '권한 역할 "%s" 예기치 않게 없음.',
));
