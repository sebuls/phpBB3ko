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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> '여기서 모든 종류의 모듈을 관리할 수 있습니다. ACP에는 3 레벨 메뉴 구조 (카테고리 -> 카테고리 -> 모듈)가 있어 2 레벨 메뉴 구조 (카테고리 -> 모듈)가 유지되어야 합니다. 모듈 관리 자체에 책임이 있는 모듈을 비활성화하거나 지우면 스스로 잠그는 경우도 있습니다.',
	'ADD_MODULE'		=> '모듈 추가',
	'ADD_MODULE_CONFIRM'	=> '선택된 모드와 함께 선택한 모듈을 추가 하시겠습니까?',
	'ADD_MODULE_TITLE'	=> '모듈 추가',

	'CANNOT_REMOVE_MODULE'	=> '모듈을 제거할 수 없습니다. 자식이 할당되었습니다. 이 작업을 수행하기 전에 모든 자식을 제거하거나 이동하십시오.',
	'CATEGORY'		=> '카테고리Category',
	'CHOOSE_MODE'		=> '모드 선택Choose module mode',
	'CHOOSE_MODE_EXPLAIN'	=> '사용되는 모듈 모드 선택Choose the modules mode being used.',
	'CHOOSE_MODULE'		=> '모둘 선택Choose module',
	'CHOOSE_MODULE_EXPLAIN'	=> '이 모둘이 부르는 파일 선택Choose the file being called by this module.',
	'CREATE_MODULE'		=> '새 모둘 선택Create new module',

	'DEACTIVATED_MODULE'	=> '비활성화된 모둘',
	'DELETE_MODULE'		=> '모둘 지우기',
	'DELETE_MODULE_CONFIRM'	=> '이 모둘을 지우겠습니까Are you sure you want to remove this module?',

	'EDIT_MODULE'		=> '모둘 편집',
	'EDIT_MODULE_EXPLAIN'	=> '여기에서 모듈 특정 설정을 입력 할 수 있습니다Here you are able to enter module specific settings.',

	'HIDDEN_MODULE'		=> '숨은 모둘Hidden module',

	'MODULE'		=> '모둘',
	'MODULE_ADDED'		=> '모둘 추가 성공Module successfully added.',
	'MODULE_DELETED'	=> '모둘 지우기 성공Module successfully removed.',
	'MODULE_DISPLAYED'	=> '모둘 표시Module displayed',
	'MODULE_DISPLAYED_EXPLAIN'	=> '이 모듈을 표시하지 않으려면, 그러나 이 모듈을 사용하려면 이것을 아니오로 설정.',
	'MODULE_EDITED'		=> '모둘 편집 성공.',
	'MODULE_ENABLED'	=> '모둘 활성화 됨',
	'MODULE_LANGNAME'	=> '모둘 언어 이름',
	'MODULE_LANGNAME_EXPLAIN'	=> '표시된 모듈 이름을 입력하십시오. 언어 파일에서 이름이 제공되면 언어 상수를 사용하십시오.',
	'MODULE_TYPE'		=> '모둘 유형Module type',

	'NO_CATEGORY_TO_MODULE'	=> '카테고리를 모듈로 전환할 수 없습니다. 이 액션 수행 전에 모든 자식을 제거/이동하십시오.',
	'NO_MODULE'		=> '모둘 못 찾음.',
	'NO_MODULE_ID'		=> '모둘 id 지정 안 됨.',
	'NO_MODULE_LANGNAME'	=> '모둘 언어 이름이 지정 안 됨.',
	'NO_PARENT'		=> '부모 없음',

	'PARENT'		=> '부모',
	'PARENT_NO_EXIST'	=> '부모 없음.',

	'SELECT_MODULE'		=> '모둘 선택',
));
