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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> '커스텀 프로필 필드 추가 성공.',
	'ALPHA_DOTS'		=> '영숫자 및 점(마침표)',
	'ALPHA_ONLY'		=> '영숫자',
	'ALPHA_SPACERS'		=> '영숫자 및 공백',
	'ALPHA_UNDERSCORE'	=> '영숫자 및 밑줄',
	'ALPHA_PUNCTUATION'	=> '문자로 시작하는 쉼표, 점, 밑줄 및 대시가 있는 영숫자',
	'ALWAYS_TODAY'		=> '항상 현재 날짜',

	'BOOL_ENTRIES_EXPLAIN'	=> '옵션을 지금 입력하세요',
	'BOOL_TYPE_EXPLAIN'	=> '확인란 또는 라디오 버튼 유형을 정의합니다. 확인란은 지정된 사용자에 대해 선택된 경우에만 표시됩니다. 이 경우 <strong>두 번째</strong> 언어 옵션이 사용됩니다. 라디오 버튼은 값에 관계없이 표시됩니다.',

	'CHANGED_PROFILE_FIELD'	=> '프로필 필드 성공적 변경.',
	'CHARS_ANY'		=> '아무 문자',
	'CHECKBOX'		=> '체크박스',
	'COLUMNS'		=> '칼럼',
	'CP_LANG_DEFAULT_VALUE'	=> '기본 값',
	'CP_LANG_EXPLAIN'	=> '필드 설명',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> '이 필드에 대한 설명이 사용자에게 표시됩니다.',
	'CP_LANG_NAME'			=> '사용자에게 표시되는 필드 이름/제목',
	'CP_LANG_OPTIONS'		=> '옵션',
	'CREATE_NEW_FIELD'		=> '새 필드 만들기',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> '하나 이상의 커스텀 프로필 필드가 아직 번역되지 않았습니다.필요한 정보를 “Translate” 링크를 클릭해서 입력하세요.',

	'DEFAULT_ISO_LANGUAGE'		=> '기본 언어 [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> '기본 언어에 대한 언어 항목이 이 프로필 필드에 채워지지 않았습니다.',
	'DEFAULT_VALUE'			=> '기본값',
	'DELETE_PROFILE_FIELD'		=> '프로필 필드 제거',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> '이 프로필 필드를 지우겠습니까?',
	'DISPLAY_AT_PROFILE'		=> '사용자 제어판에 표시',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> '사용자가 사용자 제어판 내에서 이 프로필 필드를 변경할 수 있습니다.',
	'DISPLAY_AT_REGISTER'		=> '등록 화면에 표시',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> '이 옵션을 사용하면 등록 시 필드가 표시됩니다.',
	'DISPLAY_ON_MEMBERLIST'		=> '회원목록 화면에 표시',
	'DISPLAY_ON_MEMBERLIST_EXPLAIN'	=> '이 옵션을 사용하면 회원목록 화면의 사용자 행에 필드가 표시됩니다.',
	'DISPLAY_ON_PM'			=> '개인 메시지 보기 화면에 표시',
	'DISPLAY_ON_PM_EXPLAIN'		=> '이 옵션을 사용하면 개인 메시지 화면의 미니 프로필에 필드가 표시됩니다.',
	'DISPLAY_ON_VT'			=> 'viewtopic screen에 표시',
	'DISPLAY_ON_VT_EXPLAIN'		=> '이 옵션을 사용하면 주제 화면의 미니 프로필에 필드가 표시됩니다.',
	'DISPLAY_PROFILE_FIELD'		=> '프로필 필드 공개',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> '로드 설정 내에서 허용된 모든 위치에 프로필 필드가 표시됩니다. Setting this to “no” will hide the field from topic pages, profiles and the memberlist.',
	'DROPDOWN_ENTRIES_EXPLAIN'	=> '지금 옵션을 입력하세요. 모든 옵션을 한 줄에 입력하세요.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> '옵션 텍스트를 변경할 수 있고 마지막에 새 옵션을 추가할 수도 있습니다. 기존 옵션 사이에 새 옵션을 추가하는 것은 권장되지 않습니다. 이렇게 하면 사용자에게 잘못된 옵션이 할당될 수 있습니다. 중간에 옵션을 제거한 경우에도 이런 일이 발생할 수 있습니다. 최종 결과에서 옵션을 제거하면 사용자가 이 항목을 할당한 후 기본 항목으로 되돌아갑니다.',
	'EMPTY_FIELD_IDENT'		=> '빈 필드 식별',
	'EMPTY_USER_FIELD_NAME'		=> '필드 이름/제목을 입력하세요',
	'ENTRIES'			=> 'Entries',
	'EVERYTHING_OK'			=> '모두 OK',

	'FIELD_BOOL'			=> '부울 (Yes/No)',
	'FIELD_CONTACT_DESC'		=> '연락처 설명',
	'FIELD_CONTACT_URL'		=> '연락처 링크',
	'FIELD_DATE'			=> '날짜',
	'FIELD_DESCRIPTION'		=> '필드 설명',
	'FIELD_DESCRIPTION_EXPLAIN'	=> '사용자에게 표시되는 이 필드에 대한 설명.',
	'FIELD_DROPDOWN'		=> 'Dropdown box',
	'FIELD_IDENT'			=> '필드 식별',
	'FIELD_IDENT_ALREADY_EXIST'	=> '선택한 필드 ID가 이미 존재합니다. 다른 이름을 선택하십시오.',
	'FIELD_IDENT_EXPLAIN'		=> '필드 식별은 데이터베이스와 템플릿 내에서 프로필 필드를 식별하기 위한 이름입니다.',
	'FIELD_INT'			=> '숫자',
	'FIELD_IS_CONTACT'		=> '필드를 연락처 필드로 표시',
	'FIELD_IS_CONTACT_EXPLAIN'	=> '연락처 필드는 사용자 프로필의 연락처 섹션에 표시되며 게시물 및 개인 메시지 옆에 있는 미니 프로필에서 다르게 표시됩니다. 사용자가 제공한 값으로 대체될 자리 표시자 변수로 <samp>%s</samp>를 사용할 수 있습니다.',
	'FIELD_LENGTH'			=> '입력 란 길이',
	'FIELD_NOT_FOUND'		=> '프로필 필드 못 찾음.',
	'FIELD_STRING'			=> '단일 텍스트 필드',
	'FIELD_TEXT'			=> 'Textarea',
	'FIELD_TYPE'			=> '필드 유형',
	'FIELD_TYPE_EXPLAIN'		=> '필드 유형을 나중에 바꿀 수 없습니다.',
	'FIELD_URL'			=> 'URL (Link)',
	'FIELD_VALIDATION'		=> '필드 검증',
	'FIRST_OPTION'			=> '첫 옵션',

	'HIDE_PROFILE_FIELD'		=> '프로필 필드 숨김',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> '이 필드를 계속 볼 수 있는 관리자와 중재자를 제외한 모든 사용자로부터 프로필 필드를 숨깁니다. 사용자 제어판에 표시 옵션이 비활성화되어 있으면 사용자는 이 필드를 보거나 변경할 수 없으며 필드는 관리자만 변경할 수 있습니다.',

	'INVALID_CHARS_FIELD_IDENT'	=> '필드 식별에는 소문자 a-z 및 _만 포함할 수 있습니다',
	'INVALID_FIELD_IDENT_LEN'	=> '필드 식별은 17자까지만 가능합니다',
	'ISO_LANGUAGE'			=> '언어 [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> '언어 옵션 [<strong>%s</strong>]',

	'LETTER_NUM_DOTS'		=> '모든 문자, 숫자 및 점(마침표))',
	'LETTER_NUM_ONLY'		=> '모든 문자 및 숫자',
	'LETTER_NUM_PUNCTUATION'	=> '모든 문자로 시작하는 모든 문자, 숫자, 쉼표, 점, 밑줄 및 대시',
	'LETTER_NUM_SPACERS'		=> '모든 문자, 숫자 및 공백',
	'LETTER_NUM_UNDERSCORE'		=> '모든 문자, 숫자 및 밑줄',

	'MAX_FIELD_CHARS'	=> '최대 문자 수',
	'MAX_FIELD_NUMBER'	=> '최대 허용 수',
	'MIN_FIELD_CHARS'	=> '최소 문자 수',
	'MIN_FIELD_NUMBER'	=> '가장 낮은 허용 수',

	'NO_FIELD_ENTRIES'	=> '정의된 항목 없음',
	'NO_FIELD_ID'		=> '지정된 필드 id 없음.',
	'NO_FIELD_TYPE'		=> '지정된 필드 유형 없음.',
	'NO_VALUE_OPTION'	=> '입력하지 않은 값과 같은 옵션',
	'NO_VALUE_OPTION_EXPLAIN'	=> '비항목 값. 필드가 필수인 경우 여기에서 선택한 옵션을 선택하면 사용자에게 오류가 발생합니다.',
	'NUMBERS_ONLY'			=> '숫자만 (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> '기본 옵션',
	'PROFILE_FIELD_ACTIVATED'	=> '프로필 필드가 성공적으로 활성화되었습니다.',
	'PROFILE_FIELD_DEACTIVATED'	=> '프로필 필드가 성공적으로 비활성화되었습니다.',
	'PROFILE_LANG_OPTIONS'		=> '언어 옵션',
	'PROFILE_TYPE_OPTIONS'		=> '프로필 유형 옵션',

	'RADIO_BUTTONS'			=> 'Radio buttons',
	'REMOVED_PROFILE_FIELD'		=> '프로필 필드 제거 성공.',
	'REQUIRED_FIELD'		=> '필요한 필드',
	'REQUIRED_FIELD_EXPLAIN'	=> '사용자 또는 관리자가 프로필 필드를 채우거나 지정하도록 강제합니다. 등록 화면에 표시 옵션이 비활성화되어 있으면 사용자가 프로필을 편집할 때만 필드가 필요합니다.',
	'ROWS'		=> '행',

	'SAVE'		=> '저장',
	'SECOND_OPTION'	=> '두번째 옵션',
	'SHOW_NOVALUE_FIELD'		=> '값이 선택되지 않으면 필드 표시',
	'SHOW_NOVALUE_FIELD_EXPLAIN'	=> '선택 필드에 값을 선택하지 않았거나 필수 필드에 값을 아직 선택하지 않으면 프로필 필드를 표시할지 여부를 결정합니다.',
	'STEP_1_EXPLAIN_CREATE'		=> '여기에 새 프로필 필드의 첫 번째 기본 매개변수를 입력할 수 있습니다. 이 정보는 나머지 옵션을 설정하고 프로필 필드를 추가로 조정할 수 있는 두 번째 단계에 필요합니다.',
	'STEP_1_EXPLAIN_EDIT'		=> '여기에서 프로필 필드의 기본 매개변수를 변경할 수 있습니다. 관련 옵션은 두 번째 단계에서 다시 계산됩니다.',
	'STEP_1_TITLE_CREATE'		=> '프로필 필드 추가',
	'STEP_1_TITLE_EDIT'		=> '프로필 필드 편집',
	'STEP_2_EXPLAIN_CREATE'		=> '여기에서 조정할 수 있는 몇 가지 일반적인 옵션을 정의할 수 있습니다.',
	'STEP_2_EXPLAIN_EDIT'		=> '여기에서 몇 가지 일반적인 옵션을 변경할 수 있습니다.<br /><strong>프로필 입력란을 변경해도 사용자가 입력한 기존 프로필 입력란에는 영향을 미치지 않습니다.</strong>',
	'STEP_2_TITLE_CREATE'		=> '프로필 유형 옵션',
	'STEP_2_TITLE_EDIT'		=> '프로필 유형 옵션',
	'STEP_3_EXPLAIN_CREATE'		=> '두 개 이상의 보드 언어가 설치되어 있으므로 나머지 언어 항목도 채워야 합니다. 그러지 않으면 이 사용자 정의 프로필 필드에 대한 기본 언어 설정이 사용되며 나중에 나머지 언어 항목도 채울 수 있습니다S.',
	'STEP_3_EXPLAIN_EDIT'		=> '두 개 이상의 보드 언어가 설치되어 있으므로 이제 나머지 언어 항목도 변경하거나 추가할 수 있습니다. 그러지 않으면 이 사용자 지정 프로필 필드에 대한 기본 언어 설정이 사용됩니다.',
	'STEP_3_TITLE_CREATE'		=> '남은 언어 정의',
	'STEP_3_TITLE_EDIT'		=> '언어 정의',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> '표시할 기본 구문, 기본값을 입력하세요. 처음부터 비워두려면 비워두세요.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> '표시할 기본 텍스트, 기본값을 입력하세요. 처음부터 비워두려면 비워두세요.',
	'TRANSLATE'		=> '번역',

	'USER_FIELD_NAME'	=> '필드 이름/제목이 사용자에게 나타남',

	'VISIBILITY_OPTION'	=> '보기 옵션',
));
