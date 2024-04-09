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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'			=> '봇 관리',
	'BOTS_EXPLAIN'		=> '“Bots”, “spiders” 또는 “crawlers”는  데이터베이스를 업데이트하는 데 가장 일반적으로 사용되는 자동 에이전트입니다. 세션을 적절히 사용하지 않기 때문에 방문자 수를 왜곡하고, 부하를 증가시키고, 때로는 사이트를 올바르게 색인화하지 못할 수 있습니다. 여기에서 이러한 문제를 극복하기 위해 특수 유형의 사용자를 정의할 수 있습니다.',
	'BOT_ACTIVATE'		=> '활성화',
	'BOT_ACTIVE'		=> '봇 활성',
	'BOT_ADD'		=> '봇 추가',
	'BOT_ADDED'		=> '새 봇 추가 성공.',
	'BOT_AGENT'		=> '에이전트 매치',
	'BOT_AGENT_EXPLAIN'	=> '봇 브라우저 에이전트와 일치하는 문자열이 허용됩니다. 부분 매치 허용.',
	'BOT_DEACTIVATE'	=> '비활성화',
	'BOT_DELETED'		=> '봇 제거 성공.',
	'BOT_EDIT'		=> '봇 편집',
	'BOT_EDIT_EXPLAIN'	=> '여기에서 기존 봇 항목을 추가하거나 편집할 수 있습니다. 일치할 에이전트 문자열 및/또는 하나 이상의 IP 주소 (또는 주소 범위)를 정의할 수 있습니다. 일치하는 에이전트 문자열 또는 주소를 정의할 때 주의하십시오. 봇이 보드를 사용하여 볼 수있는 스타일과 언어를 지정할 수도 있습니다. 이를 통해 봇에 대한 간단한 스타일을 설정하여 대역폭 사용을 줄일 수 있습니다. 특수 봇 사용자 그룹에 대한 적절한 권한을 설정하십시오.',
	'BOT_LANG'		=> '봇 언어',
	'BOT_LANG_EXPLAIN'	=> '봇이 탐색할 때 봇에 제시된 언어.',
	'BOT_LAST_VISIT'	=> '최근 방문',
	'BOT_IP'		=> 'Bot IP 주소',
	'BOT_IP_EXPLAIN'	=> '부분 일치가 허용되며, 쉼표로 주소를 분리.',
	'BOT_NAME'		=> '봇 이름',
	'BOT_NAME_EXPLAIN'	=> '자신의 정보에서만 사용.',
	'BOT_NAME_TAKEN'	=> '이름은 이미 보드에서 사용되며 봇에 사용할 수 없음.',
	'BOT_NEVER'		=> '절대 안 함',
	'BOT_STYLE'		=> '봇 유형',
	'BOT_STYLE_EXPLAIN'	=> '봇이 보드에 사용하는 스타일.',
	'BOT_UPDATED'		=> '기존 봇 업데이트 성공.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> '제공한 봇 에이전트는 현재 사용중인 봇 에이전트와 유사합니다. 이 봇의 에이전트를 조정하십시오.',
	'ERR_BOT_NO_IP'		=> '제공한 IP 주소가 유효하지 않았거나 호스트 이름을 해결할 수 없습니다.',
	'ERR_BOT_NO_MATCHES'	=> '이 봇 매치에 적어도 에이전트 또는 IP를 제공해야 합니다.',

	'NO_BOT'	=> '지정된 ID가 있는 봇이 없습니다.',
	'NO_BOT_GROUP'	=> '특별한 봇 그룹을 못 찾음.',
));
