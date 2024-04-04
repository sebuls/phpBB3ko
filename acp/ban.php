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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1시간',
	'30_MINS'		=> '30분',
	'6_HOURS'		=> '6시간',

	'ACP_BAN_EXPLAIN'	=> '이름, IP 또는 이메일 주소로 사용자 차단을 제어할 수 있습니다. 이러한 방법은 사용자가 보드의 어떤 부분에도 닿지 못하게 합니다. 원하는 경우 짧은(최대 3000자) 차단 이유를 제공할 수 있습니다. 이것은 관리자 로그에 표시됩니다. 차단 기간도 지정할 수 있습니다. 정해진 기간이 아닌 특정 날짜에 차단을 종료하려면 차단 기간으로 <span style="text-decoration: underline;">종료 -&gt;</span>를 선택하고 날짜를 입력합니다. <kbd>YYYY-MM-DD</kbd> 형식.',

	'BAN_EXCLUDE'		=> '차단에서 제외',
	'BAN_LENGTH'		=> '차단 기간',
	'BAN_REASON'		=> '차단 사유',
	'BAN_GIVE_REASON'	=> '차단된 사람에게 표시되는 이유',
	'BAN_UPDATE_SUCCESSFUL'	=> '차단 목록이 성공적으로 업데이트되었습니다.',
	'BANNED_UNTIL_DATE'	=> '%s까지', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (%2$s까지)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"

	'EMAIL_BAN'			=> '하나 이상의 이메일 주소 금지',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> '입력한 이메일 주소를 현재 모든 차단에서 제외하려면 이것을 활성화하십시오.',
	'EMAIL_BAN_EXPLAIN'		=> '두 개 이상의 이메일 주소를 지정하려면 새 줄에 각각 입력하세요. 부분 주소를 일치시키려면 *를 와일드카드로 사용하십시오. <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp> 등.',
	'EMAIL_NO_BANNED'		=> '차단된 이메일 주소 없음',
	'EMAIL_UNBAN'			=> '이메일 차단 해제 또는 제외 해제',
	'EMAIL_UNBAN_EXPLAIN'		=> '컴퓨터와 브라우저에 적합한 마우스와 키보드 조합을 사용하여 한 번에 여러 이메일 주소를 차단 해제(또는 제외 해제)할 수 있습니다. 제외된 이메일 주소는 강조 표시됩니다.',

	'IP_BAN'			=> '하나 이상 IP 차단',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> '입력한 IP를 현재 모든 차단에서 제외하려면 활성화하세요.',
	'IP_BAN_EXPLAIN'		=> '여러 개의 서로 다른 IP 또는 호스트 이름을 지정하려면 새 줄에 각각 입력하십시오. IP 주소 범위를 지정하려면 하이픈(-)으로 시작과 끝을 구분하고 와일드카드를 지정하려면 "*"를 사용하십시오.',
	'IP_HOSTNAME'		=> 'IP 주소 또는 호스트명',
	'IP_NO_BANNED'		=> '차단 IP 주소 없음',
	'IP_UNBAN'		=> 'IP 차단 해제 또는 제외 해제',
	'IP_UNBAN_EXPLAIN'	=> '컴퓨터와 브라우저에 적합한 마우스와 키보드 조합을 사용하여 한 번에 여러 IP 주소를 차단 해제(또는 제외 해제)할 수 있습니다. 제외된 IP는 강조 표시됩니다.',

	'LENGTH_BAN_INVALID'	=> '날짜는 <kbd>YYYY-MM-DD</kbd> 형식이어야 합니다.',

	'OPTIONS_BANNED'	=> '차단됨',
	'OPTIONS_EXCLUDED'	=> '제외됨',

	'PERMANENT'		=> '영구',

	'UNTIL'				=> '까지',
	'USER_BAN'			=> '사용자 이름으로 한 명 이상의 사용자 차단',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> '입력한 사용자를 현재 모든 금지에서 제외하려면 이 옵션을 활성화하세요.',
	'USER_BAN_EXPLAIN'		=> '새 줄에 각 이름을 입력하여 한 번에 여러 사용자를 차단할 수 있습니다. <span style="text-decoration: underline;">구성원 찾기</span> 기능을 사용하여 한 명 이상의 사용자를 자동으로 조회하고 추가하세요.',
	'USER_NO_BANNED'		=> '차단된 사용자 이름 없음',
	'USER_UNBAN'			=> '사용자 이름으로 사용자 차단 해제 또는 제외 해제',
	'USER_UNBAN_EXPLAIN'		=> '컴퓨터와 브라우저에 적합한 마우스와 키보드 조합을 사용하여 한 번에 여러 사용자를 차단 해제(또는 제외 해제)할 수 있습니다. 제외된 사용자는 강조 표시됩니다.',
));
