<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'		=> 'Viglink 설정',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'Viglink는 사용자 경험을 변경하지 않고 포럼 사용자가 게시 한 링크를 개별적으로 수익을 창출하는 타사 서비스입니다. 사용자가 제품이나 서비스에 대한 아웃 바운드 링크를 클릭하고 무언가를 구매하면 상인은 Viglink에 커미션을 지불하며, 그 중 공유는 PHPBB 프로젝트에 기부됩니다. Viglink를 활성화하고 PHPBB 프로젝트에 수익을 기부함으로써 오픈 소스 조직을 지원하고 지속적인 재무 보안을 보장합니다.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> '설정을 “<a href="%1$s">VigLink 설정</a>” 패널에서 언제든지 변경할 수 있습니다.',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> '제출 버튼을 클릭하여 아래에서 선호하는 옵션을 제출하면 더 이상 이 페이지로 리디렉션되지 않습니다.',
	'ACP_VIGLINK_ENABLE'		=> 'Viglink 활성화',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Viglink 서비스를 사용할 수 있습니다.',
	'ACP_VIGLINK_EARNINGS'		=> '자신의 수입을 청구하십시오 (선택사항)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'	=> 'Viglink Convert 계정에 가입하여 자신의 수입을 청구할 수 있습니다.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'Viglink 서비스를 PHPBB가 비활성화했습니다.',
	'ACP_VIGLINK_CLAIM'		=> '수입 청구',
	'ACP_VIGLINK_CLAIM_EXPLAIN'	=> 'PHPBB 프로젝트에 수입을 기부하는 대신 Viglink 수익 창출 링크에서 포럼의 수입을 청구할 수 있습니다. 계정 설정을 관리하려면 “계정 변환”을 클릭하여 “Viglink Convert”계정에 가입하십시오.',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> '계정 변환',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'Viglink 변환 계정 링크를 검색할 수 없습니다.',
));
