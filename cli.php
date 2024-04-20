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
	'CLI_APCU_CACHE_NOTICE'			=> 'APCu cache는 관리 제어판을 통해 지워야 합니다.',

	'CLI_CONFIG_CANNOT_CACHED'		=> '이 옵션은 설정 옵션이 너무 자주 바뀌어서 효율적으로 캐시 되야 할 때 설정하십시오.',
	'CLI_CONFIG_CURRENT'			=> '현재 설정값, 0과 1은 부울 값',
	'CLI_CONFIG_DELETE_SUCCESS'		=> '성공적 삭제 config %s.',
	'CLI_CONFIG_NEW'			=> '새 설정값, 0과 1은 부울 값',
	'CLI_CONFIG_NOT_EXISTS'			=> 'Config %s 없음',
	'CLI_CONFIG_OPTION_NAME'		=> '설정 옵션의 이름',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> '끝에 새 행 없이 값이 출력 되려면 이 옵션을 설정하십시오.',
	'CLI_CONFIG_INCREMENT_BY'		=> '증분 값',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> '설정 %s를 증가했습니다',
	'CLI_CONFIG_SET_FAILURE'		=> '설정 %s 할 수 없습니다',
	'CLI_CONFIG_SET_SUCCESS'		=> '설정 %s 했습니다',

	'CLI_DESCRIPTION_CRON_LIST'		=> '준비 및 미 준비 cron job을 출력.',
	'CLI_DESCRIPTION_CRON_RUN'		=> '준비된 cron task 모두 실행.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'	=> '실행할 태스크 이름',
	'CLI_DESCRIPTION_DB_LIST'		=> '설치되고 가능한 마이그레이션 목록.',
	'CLI_DESCRIPTION_DB_MIGRATE'		=> '마이그레이션 적용하여 데이터베이스 업데이트.',
	'CLI_DESCRIPTION_DB_REVERT'		=> '마이그레이션 되돌림.',
	'CLI_DESCRIPTION_DELETE_CONFIG'		=> '설정 옵션 지움',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'	=> '명시된 확장 비활성.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'	=> '명시된 확장 활성.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'	=> '의존하지 않는 마이그레이션을 검색.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'	=> '포럼 및 모듈 트리 구조 복구.',
	'CLI_DESCRIPTION_GET_CONFIG'		=> '설정 옵션 값 얻기',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'	=> '설정 옵션 정수값 증가',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'	=> '데이터베이스 및 파일 확장 모두 나열.',

	'CLI_DESCRIPTION_OPTION_ENV'		=> '환경명.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'	=> '안전 모드 (확장 없음)에서 실행.',
	'CLI_DESCRIPTION_OPTION_SHELL'		=> '셸 시작.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'	=> '명시된 확장 제거.',

	'CLI_DESCRIPTION_REPARSER_LIST'		=> '재분석 가능한 텍스트 유형 목록.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'	=> '가능한 재분석기:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'	=> '현재 text_formatter 서비스로 저장된 텍스트 재분석.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'		=> '재분석할 텍스트 유형. 비워두변 모든 것을 재분석.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> '변경을 저장하지 마세요. 무슨 일이 생길 지 출력만',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> '처리할 가장 낮은 레코드 ID',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> '처리할 가장 높은 레코드 ID',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> '한번에 처리할 대략적 레코드 수',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> '마지막 실행이 멈춘 곳에서 재분석 시작',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'	=> '이전과 현재가 매치 할 때만 옵션 값 설정',
	'CLI_DESCRIPTION_SET_CONFIG'		=> '설정 옵션 값 설정',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'	=> '모든 썸네일 지움.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'	=> '없는 썸네일 모두 생성.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'	=> '모든 썸네일 재생성.',

	'CLI_DESCRIPTION_UPDATE_CHECK'			=> '보드가 최근인지 점검.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'	=> '점검할 확장명 (all이면, 모든 확장)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'	=> '캐시 갖고 check 명령 실행.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> '안정 또는 불안정 버전만 확인하도록 선택하여 명령 실행.',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> '오래된 암호를 업데이트 해서 bcrypt로 해시되게 합니다.',

	'CLI_ERROR_INVALID_STABILITY' => '"%s"는 "안정" 또는 "불안정"으로 설정합니다.',

	'CLI_DESCRIPTION_USER_ACTIVATE'			=> '사용자 계정을 활성(또는 비활성)화 합니다.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> '활성화할 계정 사용자 이름.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> '사용자 계정 비활성화',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> '사용자는 이미 활성되었습니다.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> '사용자는 이미 비활성되었습니다.',
	'CLI_DESCRIPTION_USER_ADD'			=> '사용자 추가.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> '사용자 이름',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> '사용자 암호',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> '사용자의 E-mail 주소',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> '계정 활성화 메일을 사용자에게 보내기 (기본값은 보내지 않음)',
	'CLI_DESCRIPTION_USER_DELETE'			=> '사용자 계정 삭제.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> '삭제할 사용자 이름',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> '사용자가 쓴 글을 모두 삭제. 이 옵션이 없으면, 사용자의 글이 유지됩니다.',
	'CLI_DESCRIPTION_USER_RECLEAN'			=> '사용자 이름 다시 정리.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> '확장 %s를 비활성화 할 수 없음',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> '확장 %s를 비활성화 했습니다',
	'CLI_EXTENSION_DISABLED'		=> '확장 %s를 확장할 수 없습니다',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> '확장 %s를 확장할 수 없습니다',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> '확장 %s를 활성화 했습니다',
	'CLI_EXTENSION_ENABLED'			=> '확장 %s는 이미 활성화되었습니다',
	'CLI_EXTENSION_NOT_EXIST'		=> '확장 %s가 없습니다',
	'CLI_EXTENSION_NAME'			=> '확장 이름',
	'CLI_EXTENSION_PURGE_FAILURE'		=> '확장 %s를 제거할 수 없습니다',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> '확장 %s를 제거했습니다',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> '확장 %s를 업데이트 못 합니다',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> '확장 %s를 업데이트 했습니다',
	'CLI_EXTENSION_NOT_FOUND'		=> '확장을 못 찾았습니다.',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> '확장 %s는 활성화 안 됨니다.',
	'CLI_EXTENSIONS_AVAILABLE'		=> '사용가능',
	'CLI_EXTENSIONS_DISABLED'		=> '비활성화',
	'CLI_EXTENSIONS_ENABLED'		=> '활성화',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'	=> '포럼과 모듈의 트리 구조를 복구했습니다.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'	=> '오래된 암호 해시를 bcrypt로 복구 했습니다.',

	'CLI_MIGRATION_NAME'			=> '마이그레이션 이름, 네임스페이스 포함 (슬래시를 백슬래시 대신 사용하여 문제를 피하세요).',
	'CLI_MIGRATIONS_AVAILABLE'		=> '가능한 마이그레이션',
	'CLI_MIGRATIONS_INSTALLED'		=> '설치된 마이그레이션',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		=> '가능한 마이그레이션만 보이기',
	'CLI_MIGRATIONS_EMPTY'                  => '마이그레이션 없음.',

	'CLI_REPARSER_REPARSE_REPARSING'	=> '%1$s 재분석(범위 %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> '재분석 %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'		=> '재분석 성공',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) 지워짐.',
	'CLI_THUMBNAIL_DELETING'	=> '썸네일 지움',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) 건너뜀.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) 생성.',
	'CLI_THUMBNAIL_GENERATING'	=> '썸네일 생성',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> '모든 썸네일 생성.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> '모든 썸네일 지움.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> '생성할 썸네일 없음.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> '지울 썸네일 없음.',

	'CLI_USER_ADD_SUCCESS'		=> '사용자 %s 추가 성공.',
	'CLI_USER_DELETE_CONFIRM'	=> '‘%s’를 지우겠습니까? [y/N]',
	'CLI_USER_RECLEAN_START'	=> '사용자 이름 다시 정리',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> '다시 정리 완료. 정리할 사용자 이름 불필요.',
		1	=> '다시 정리 완료. %d 사용자 이름 정리.',
		2	=> '다시 정리 완료. %d 사용자 이름 정리.',
	],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'		=> $lang['CLI_DESCRIPTION_CRON_RUN'] . '선택적으로 지정된 cron 태스크만 실행하도록 cron 태스크 이름을 지정할 수 있습니다.',
	'CLI_HELP_USER_ACTIVATE'	=> '사용자 계정을 활성화 또는 비활성화 <info>--deactivate</info> 옵션.사용자에게 활성화 이메일을 보내려면 <info>--send-email</info> 옵션을 사용합니다. 
사용자에게 활성화 이메일을 보내려면 <info>--send-email</info> 옵션을 사용합니다.',
	'CLI_HELP_USER_ADD'		=> '<info>%command.name%</info> 명령은 사용자를 추가:
이 명령을 옵션 없이 실행하면, 그것을 입력하라고 할 겁니다.
선택적으로 새 사용자에게 메일 보내려면, <info>--send-email</info> 옵션을 쓰세요.',
	'CLI_HELP_USER_RECLEAN'		=> 'Re-clean usernames will check all stored usernames and ensure clean versions are also stored. Cleaned usernames are a case insensitive form, NFC normalized and transformed to ASCII.',
));
