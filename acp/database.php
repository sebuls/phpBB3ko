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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> '여기서 모든 PHPBB 관련 데이터를 백업 할 수 있습니다. 결과 아카이브는 <samp>store/</samp> 폴더에 저장됩니다. 서버 구성에 따라 파일을 여러 형식으로 압축합니다.',
	'ACP_RESTORE_EXPLAIN'	=> '저장된 파일에서 모든 PHPBB 테이블의 전체 복원을 수행합니다. 서버가 지원하면 GZIP 또는 BZIP2 압축 텍스트 파일을 사용할 수 있으며 자동으로 압축 해제됩니다. <strong>경고</strong> 기존 데이터를 덮어 씁니다. 복원은 처리하는 데 시간이 오래 걸릴 수 있습니다.이 페이지가 완료 될 때 까지이 페이지에서 이동하지 마십시오. 백업은 <samp>store/</samp> 폴더에 저장되며 PHPBB의 백업 기능에 의해 생성되는 것으로 가정합니다. 내장 시스템에 의해 생성되지 않은 백업 복원은 작동하거나 작동하지 않을 수 있습니다.',

	'BACKUP_DELETE'		=> '백업 파일이 성공적으로 지워졌습니다.',
	'BACKUP_INVALID'	=> '백업으로 선택한 파일이 유효하지 않습니다.',
	'BACKUP_NOT_SUPPORTED'	=> '백업으로 선택한 파일이 지원되지 않습니다',
	'BACKUP_OPTIONS'	=> '백업 옵션',
	'BACKUP_SUCCESS'	=> '백업 파일이 성공적으로 생성되었습니다..',
	'BACKUP_TYPE'		=> '백업 유형',

	'DATABASE'		=> '데이터베이스',
	'DATA_ONLY'		=> '데이터만',
	'DELETE_BACKUP'		=> '백업제거',
	'DELETE_SELECTED_BACKUP'	=> '선택한 백업을 지울 수 있나요?',
	'DESELECT_ALL'		=> '모두 선택해제',
	'DOWNLOAD_BACKUP'	=> '백업 다운로드',

	'FILE_TYPE'		=> '파일유형',
	'FILE_WRITE_FAIL'	=> '파일을 스토리지 폴더에 쓸 수 없습니다.',
	'FULL_BACKUP'		=> '전체',

	'RESTORE_FAILURE'		=> '백업 파일이 깨질 수 있습니다.',
	'RESTORE_OPTIONS'		=> '복원 옵션',
	'RESTORE_SELECTED_BACKUP'	=> '선택한 백업을 복구 하겠습니까?',
	'RESTORE_SUCCESS'		=> '데이터베이스 성공적 복구.<br /><br />Your board should be back to the state it was when the backup was made.',

	'SELECT_ALL'		=> '전체 선택',
	'SELECT_FILE'		=> '파일 선택',
	'START_BACKUP'		=> '백업 시작',
	'START_RESTORE'		=> '복구 시작',
	'STORE_AND_DOWNLOAD'	=> '저장 및 다운로드',
	'STORE_LOCAL'		=> '지역적으로 파일 저장',

	'TABLE_SELECT'		=> '테이블 선택',
	'TABLE_SELECT_ERROR'=> '적어도 한 테이블 선택하세요.',
));
