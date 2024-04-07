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
	'ACP_GROUPS_MANAGE_EXPLAIN'	=> '이 패널에서 모든 사용자 그룹을 관리할 수 있습니다. 기존 그룹을 삭제, 생성 및 편집할 수 있습니다. 또한 그룹 리더를 선택하고 공개/숨김/비공개 그룹 상태를 전환하고 그룹 이름과 설명을 설정할 수 있습니다.',
	'ADD_GROUP_CATEGORY'	=> '카테고리 추가',
	'ADD_USERS'		=> '사용자 추가',
	'ADD_USERS_EXPLAIN'	=> '여기에서 그룹에 새 사용자를 추가할 수 있습니다. 이 그룹이 선택한 사용자의 새 기본값이 될지 여부를 선택할 수 있습니다. 또한 이들을 그룹 리더로 정의할 수 있습니다. 각 사용자 이름을 각 줄에 입력하십시오.',

	'COPY_PERMISSIONS'		=> '다음에서 권한 복사',
	'COPY_PERMISSIONS_EXPLAIN'	=> '그룹이 생성되면 여기에서 선택한 그룹과 같은 권한을 갖습니다.',
	'CREATE_GROUP'			=> '새 그룹 생성',

	'GROUPS_NO_MEMBERS'		=> '이 그룹에 멤버 없음',
	'GROUPS_NO_MODS'		=> '그룹 리더 정의 안 됨',

	'GROUP_APPROVE'			=> '멤버 승인',
	'GROUP_APPROVED'		=> '승인된 멤버',
	'GROUP_AVATAR'			=> '그룹 아바타',
	'GROUP_AVATAR_EXPLAIN'		=> '이 이미지는 그룹 제어판에 나타납니다.',
	'GROUP_CATEGORY_NAME'		=> '카테고리 이름',
	'GROUP_CLOSED'			=> '닫힘',
	'GROUP_COLOR'			=> '그룹 색',
	'GROUP_COLOR_EXPLAIN'		=> '표시될 색상 멤버의 사용자 이름을 정의합니다. 사용자 기본값은 비워두세요.',
	'GROUP_CONFIRM_ADD_USERS'	=> array(
		1	=> '정말 %2$s 사용자를 그룹에 더하겠습니까?',
		2	=> '정말 %2$s 사용자를 그룹에 더하겠습니까?',
	),
	'GROUP_CREATED'		=> '그룹 생성 성공.',
	'GROUP_DEFAULT'		=> '멤버의 그룹 기본값으로',
	'GROUP_DEFS_UPDATED'	=> '선택된 멤버의 기본 그룹 설정.',
	'GROUP_DELETE'		=> '멤버를 그룹에서 제거',
	'GROUP_DELETED'		=> '그룹이 삭제되고 사용자 기본 그룹이 성공적으로 설정되었습니다.',
	'GROUP_DEMOTE'		=> '그룹 리더 강등',
	'GROUP_DESC'		=> '그룹 설명',
	'GROUP_DETAILS'		=> '그룹 상세',
	'GROUP_EDIT_EXPLAIN'	=> '여기에서 기존 그룹을 편집할 수 있습니다. 이름, 설명 및 유형(열림, 닫힘 등)을 변경할 수 있습니다. 색상, 순위 등과 같은 특정 그룹 전체 옵션을 설정할 수도 있습니다. 여기서 변경한 사항은 사용자의 현재 설정보다 우선합니다. 적절한 사용자 권한을 설정하지 않는 한 그룹 구성원은 그룹 아바타 설정을 재정의할 수 있습니다.',
	'GROUP_ERR_USERS_EXIST'	=> '지정된 사용자는 이미 이 그룹의 멤버입니다.',
	'GROUP_FOUNDER_MANAGE'	=> '창립자만 관리',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> '이 그룹의 관리를 창립자에게만 제한합니다. 그룹 권한이 있는 사용자는 여전히 이 그룹과 이 그룹의 구성원을 볼 수 있습니다.',
	'GROUP_HIDDEN'		=> '숨김',
	'GROUP_LANG'		=> '그룹 언어',
	'GROUP_LEAD'		=> '그룹 리더',
	'GROUP_LEADERS_ADDED'	=> '새 리더가 그룹에 추가 성공.',
	'GROUP_LEGEND'		=> '범례에 그룹 표시',
	'GROUP_LIST'		=> '현재 멤버',
	'GROUP_LIST_EXPLAIN'	=> '이 그룹에 속한 모든 현재 사용자의 전체 목록입니다. 구성원을 삭제하거나(특정 특수 그룹 제외) 필요에 따라 새 구성원을 추가할 수 있습니다.',
	'GROUP_MEMBERS'		=> '그룹 멤버',
	'GROUP_MEMBERS_EXPLAIN'	=> '이것은 이 사용자 그룹의 모든 멤버의 전체 목록입니다. 여기에는 리더, 대기 중인 회원 및 기존 회원을 위한 별도의 섹션이 들어갑니다. 여기에서 이 그룹의 멤버 자격을 가진 사람과 그들의 역할에 대한 모든 측면을 관리할 수 있습니다. 리더를 제거하지만 그룹에 유지하려면 삭제보다는 강등을 사용하십시오. 마찬가지로 승격을 사용하여 기존 구성원을 리더로 만듭니다.',
	'GROUP_MESSAGE_LIMIT'	=> 'Group private message limit per folder',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> '이 설정은 사용자별 폴더 메시지 제한을 무시합니다. 사용자의 모든 그룹에 대한 최대값은 실제 값을 결정하는 데 사용됩니다.<br />이 그룹의 모든 사용자에 대한 설정을 보드 전체 설정으로 덮어쓰려면 이 값을 0으로 설정합니다.',
	'GROUP_MODS_ADDED'	=> '새 그룹 리더가 성공적으로 추가되었습니다.',
	'GROUP_MODS_DEMOTED'	=> '그룹 리더가 강등되었습니다.',
	'GROUP_MODS_PROMOTED'	=> '그룹 멤버가 승격되었습니다.',
	'GROUP_NAME'		=> '그룹 이룸',
	'GROUP_NAME_TAKEN'	=> '입력한 그룹 이름은 이미 사용 중입니다. 다른 이름을 선택하세요.',
	'GROUP_OPEN'		=> '열기',
	'GROUP_PENDING'		=> '보류 멤버',
	'GROUP_MAX_RECIPIENTS'		=> '개인 메시지당 허용되는 최대 수신자 수',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> '개인 메시지에 허용된 최대 수신자 수입니다. 사용자의 모든 그룹에 대한 최대값은 실제 값을 결정하는 데 사용됩니다.<br />이 그룹의 모든 사용자에 대한 설정을 보드 전체 설정으로 덮어쓰려면 이 값을 0으로 설정합니다.',
	'GROUP_OPTIONS_SAVE'		=> '그룹 옵션',
	'GROUP_PROMOTE'			=> '그룹 리더로 승격',
	'GROUP_RANK'			=> '그룹 순위',
	'GROUP_RECEIVE_PM'		=> '개인 메시지 받을 수 있는 그룹',
	'GROUP_RECEIVE_PM_EXPLAIN'	=> '이 설정에 관계없이 숨겨진 그룹에 메시지를 보낼 수 없습니다.',
	'GROUP_REQUEST'			=> '요청',
	'GROUP_SETTINGS_SAVE'		=> '그룹 설정',
	'GROUP_SKIP_AUTH'		=> '권한에서 그룹 리더 면제',
	'GROUP_SKIP_AUTH_EXPLAIN'	=> '활성화되면 그룹 리더는 더 이상 그룹에서 권한을 상속받지 않습니다.',
	'GROUP_SPECIAL'			=> '미리 정의됨',
	'GROUP_TEAMPAGE'		=> '팀 페이지에 그룹 표시',
	'GROUP_TYPE'			=> '그룹 유형',
	'GROUP_TYPE_EXPLAIN'		=> '이 그룹에 가입하거나 볼 수 있는 사용자를 결정합니다.',
	'GROUP_UPDATED'			=> '그룹 기본 설정이 성공적으로 업데이트되었습니다.',

	'GROUP_USERS_ADDED'		=> '새 사용자가 그룹에 추가되었습니다.',
	'GROUP_USERS_EXIST'		=> '선택돈 사용자는 이미 멤버입니다.',
	'GROUP_USERS_REMOVE'		=> '사용자가 그룹에서 빠졌고 새 기본값이 설정되었습니다.',
	'GROUP_USERS_INVALID'		=> '다음 사용자 이름이 존재하지 않기 때문에 그룹에 추가된 사용자가 없습니다: %s',

	'LEGEND_EXPLAIN'		=> '그룹 범례에 표시되는 그룹입니다:',
	'LEGEND_SETTINGS'		=> '범례 설정',
	'LEGEND_SORT_GROUPNAME'		=> '그룹 이름으로 범례 정렬',
	'LEGEND_SORT_GROUPNAME_EXPLAIN'	=> '이 옵션이 활성화되면 아래 순서는 무시됩니다.',

	'MANAGE_LEGEND'			=> '그룹 범례 관리',
	'MANAGE_TEAMPAGE'		=> '팀페이지 관리',
	'MAKE_DEFAULT_FOR_ALL'	=> '이 옵션이 활성화되면 아래 순서는 무시됩니다',
	'MEMBERS'		=> '멤버',

	'NO_GROUP'		=> '그룹 지정 안 됨.',
	'NO_GROUPS_ADDED'	=> '아직 그룹 추가 안 됨.',
	'NO_GROUPS_CREATED'	=> '아직 그룹 생성 안 됨.',
	'NO_PERMISSIONS'	=> '권한 복사 없음',
	'NO_USERS'		=> '입력한 사용자 없음.',
	'NO_USERS_ADDED'	=> '그룹에 추가된 사용자 없음.',
	'NO_VALID_USERS'	=> '해당 작업에 적합한 사용자를 입력하지 않았습니다.',

	'PENDING_MEMBERS'	=> '보류',

	'SELECT_GROUP'		=> '그룹 선택',
	'SPECIAL_GROUPS'	=> '이미 정의된 그룹',
	'SPECIAL_GROUPS_EXPLAIN'	=> '미리 정의된 그룹은 특수 그룹이므로 삭제하거나 직접 수정할 수 없습니다. 그러나 여전히 사용자를 추가하고 기본 설정을 변경할 수 있습니다.',

	'TEAMPAGE'			=> '팀페이지',
	'TEAMPAGE_DISP_ALL'		=> '모든 멤버십',
	'TEAMPAGE_DISP_DEFAULT'		=> '사용자 기본 그룹만',
	'TEAMPAGE_DISP_FIRST'		=> '첫 멤버십만',
	'TEAMPAGE_EXPLAIN'		=> '팀 페이지에 표시되는 그룹입니다:',
	'TEAMPAGE_FORUMS'		=> '중재자 포럼 표시',
	'TEAMPAGE_FORUMS_EXPLAIN'	=> 'If set to yes, moderators will have a list with all of the forums where they have moderator permissions displayed in their row. This can be very database intensive for big boards.',
	'TEAMPAGE_MEMBERSHIPS'		=> '사용자 멤버십 표시',
	'TEAMPAGE_SETTINGS'		=> '팀페이지 설정',
	'TOTAL_MEMBERS'			=> '멤버',

	'USERS_APPROVED'		=> '사용자 승인 성공.',
	'USER_DEFAULT'			=> '사용자 기본값',
	'USER_DEF_GROUPS'		=> '사용자 정의 그룹',
	'USER_DEF_GROUPS_EXPLAIN'	=> '이러한 그룹은 사용자 또는 이 보드의 다른 관리자가 만든 그룹입니다. 그룹 속성을 편집하거나 그룹을 삭제할 뿐만 아니라 멤버 자격을 관리할 수 있습니다.',
	'USER_GROUP_DEFAULT'		=> '기본값으로 설정',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> '여기서 예라고 대답하면 이 그룹이 추가된 사용자의 기본 그룹으로 설정됩니다.',
	'USER_GROUP_LEADER'		=> '그룹 리더로 설정',
));
