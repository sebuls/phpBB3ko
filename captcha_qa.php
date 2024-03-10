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
	'CAPTCHA_QA'			=> '문답',
	'CONFIRM_QUESTION_EXPLAIN'	=> '이 질문은 스팸봇에 의한 자동 양식 제출을 막는 방법입니다.',
	'CONFIRM_QUESTION_WRONG'	=> '질문에 대한 틀린 답을 제출했습니다.',
	'CONFIRM_QUESTION_MISSING'	=> '보안 문자에 대한 질문을 검색할 수 없습니다. 게시판 관리자에게 문의하세요.',

	'QUESTION_ANSWERS'		=> '답',
	'ANSWERS_EXPLAIN'		=> '질문에 대한 답을 한 줄에 하나씩 넣으세요.',
	'CONFIRM_QUESTION'		=> '질문',

	'ANSWER'			=> '답',
	'EDIT_QUESTION'			=> '질문 편집',
	'QUESTIONS'			=> '질문',
	'QUESTIONS_EXPLAIN'		=> '문답 플러그인을 사용하도록 설정한 모든 양식 제출에 대해 사용자는 여기에 지정된 질문 중 하나를 받게 됩니다. 이 플러그인을 사용하려면 기본 언어로 적어도 하나의 질문을 설정해야 합니다. 이러한 질문은 대상 청중이 쉽게 대답할 수 있어야 하지만 Google™ 검색을 실행할 수 있는 봇의 능력을 넘어서는 것입니다. 적절한 질문 하나만 있으면 됩니다. 스팸 등록을 받기 시작하면 질문을 변경해야 합니다. 질문이 대소문자, 구두점 또는 공백에 의존하면 엄격한 설정을 사용하도록 설정하십시오.',
	'QUESTION_DELETED'		=> '질문 지워짐',
	'QUESTION_LANG'			=> '언어',
	'QUESTION_LANG_EXPLAIN'		=> '이 질문과 답이 써진 언어.',
	'QUESTION_STRICT'		=> '엄격한 검사',
	'QUESTION_STRICT_EXPLAIN'	=> '대소문자 혼용, 기호, 공백 가능.',

	'QUESTION_TEXT'			=> '질문',
	'QUESTION_TEXT_EXPLAIN'		=> '사용자에게 제시된 질문.',

	'QA_ERROR_MSG'			=> '모든 필드를 입력하고 하나 이상의 답을 입력하십시오.',
	'QA_LAST_QUESTION'		=> '플러그인이 활성화되어 있는 동안에는 모든 질문을 삭제할 수 없습니다.',
));
