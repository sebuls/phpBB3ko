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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>권한은 매우 세분화되어 있으며 다음과 같은 4개의 주요 섹션으로 그룹화됩니다:</p>

		<h2>전역 권한</h2>
		<p>전체 수준에서 액세스를 제어하고 전체 게시판에 적용하는 데 사용됩니다. 이들은 사용자 권한, 그룹 권한, 관리자 및 글로벌 중재자로 더 나뉩니다.</p>

		<h2>포럼 기반 권한</h2>
		<p>포럼별로 액세스를 제어하는 데 사용됩니다. 포럼 권한, 포럼 중재자, 사용자 포럼 권한 및 그룹 포럼 권한으로 더 나뉩니다.</p>

		<h2>권한 역할</h2>
		<p>나중에 역할 기반으로 할당할 수 있는 다양한 권한 유형에 대한 다양한 권한 집합을 만드는 데 사용됩니다. 기본 역할은 크고 작은 게시판 관리를 포함해야 하지만 4개 부분 각각 내에서 필요에 따라 역할을 추가/수정/삭제할 수 있습니다.</p>

		<h2>권한 마스크</h2>
		<p>사용자, 중재자(지역 및 전역), 관리자 또는 포럼에 할당된 유효 권한을 보는 데 사용됩니다.</p>

		<br />

		<p>phpBB3 보드의 권한 설정 및 관리에 대한 자세한 내용은 <a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/permissions/">Setting permissions of our Quick Start Guide</a> 섹션을 참조하십시오.</p>
	',

	'ACL_NEVER'		=> '안 함',
	'ACL_SET'		=> '권한 설정',
	'ACL_SET_EXPLAIN'	=> '권한은 단순한 <strong>YES</strong>/<strong>NO</strong> 시스템을 기반으로 합니다. 사용자 또는 사용자 그룹에 대해 <strong>NEVER</strong>으로 옵션을 설정하면 할당된 다른 모든 값이 재정의됩니다. 이 사용자 또는 그룹에 대한 옵션 값을 지정하지 않으려면 <<strong>NO</strong>를 선택하십시오. 다른 곳에서 이 옵션에 값이 지정되면 기본 설정에서 사용되며 그렇지 않으면 <strong>NEVER</strong>로 간주됩니다. 표시된 모든 개체(앞에 확인란이 있음)는 사용자가 정의한 권한 집합을 복사합니다. 창시자 계정에 대한 관리 권한 설정은 창시자의 경우 항상 <strong>YES</strong>으로 설정되므로 아무런 영향을 미치지 않습니다..',
	'ACL_SETTING'		=> '설정',

	'ACL_TYPE_A_'		=> '관리 권한',
	'ACL_TYPE_F_'		=> '포럼 권한',
	'ACL_TYPE_M_'		=> '중재 권한',
	'ACL_TYPE_U_'		=> '사용자 권한',

	'ACL_TYPE_GLOBAL_A_'	=> '관리 권한',
	'ACL_TYPE_GLOBAL_U_'	=> '사용자 권한',
	'ACL_TYPE_GLOBAL_M_'	=> '전역 중재 권한',
	'ACL_TYPE_LOCAL_M_'	=> '포럼 중재 권한',
	'ACL_TYPE_LOCAL_F_'	=> '포럼 권한',

	'ACL_NO'		=> '아뇨',
	'ACL_VIEW'		=> '권한 보기',
	'ACL_VIEW_EXPLAIN'	=> '여기서 사용자/그룹이 보유한 유효 권한을 볼 수 있습니다. 빨간 사각형은 사용자/그룹에 권한이 없음을 나타내고 녹색 사각형은 사용자/그룹에 권한이 있음을 나타냅니다.',
	'ACL_YES'		=> '예',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Here you can assign administrator permissions to users or groups. All users with administrator permissions can view the administration control panel.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Here you can assign users and groups as forum moderators. To assign users access to forums, to define global moderative permissions or administrators please use the appropriate page.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Here you can alter which users and groups can access which forums. To assign moderators or define administrators please use the appropriate page.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Here you can copy forum permissions from one forum to one or more other forums.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Here you can assign global moderator permissions to users or groups. These moderators are like ordinary moderators except they have access to every forum on your board.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Here you can assign forum permissions to groups.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Here you can assign global permissions to groups - user permissions, global moderator permissions and administrator permissions. User permissions include capabilities such as the use of avatars, sending private messages, et cetera; global moderator permissions such as approving posts, manage topics, manage bans, et cetera and lastly administrator permissions such as altering permissions, define custom BBCodes, manage forums, et cetera. Individual user permissions should only be changed in rare occasions, the preferred method is putting users in groups and assigning the group permissions.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Here you are able to manage the roles for administrative permissions. Roles are effective permissions, if you change a role the items having this role assigned will change its permissions too.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Here you are able to manage the roles for forum permissions. Roles are effective permissions, if you change a role the items having this role assigned will change its permissions too.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Here you are able to manage the roles for moderative permissions. Roles are effective permissions, if you change a role the items having this role assigned will change its permissions too.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Here you are able to manage the roles for user permissions. Roles are effective permissions, if you change a role the items having this role assigned will change its permissions too.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Here you can assign forum permissions to users.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Here you can assign global permissions to users - user permissions, global moderator permissions and administrator permissions. User permissions include capabilities such as the use of avatars, sending private messages, et cetera; global moderator permissions such as approving posts, manage topics, manage bans, et cetera and lastly administrator permissions such as altering permissions, define custom BBCodes, manage forums, et cetera. To alter these settings for large numbers of users the Group permissions system is the preferred method. User permissions should only be changed in rare occasions, the preferred method is putting users in groups and assigning the group permissions.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Here you can view the effective administrative permissions assigned to the selected users/groups.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Here you can view the global moderative permissions assigned to the selected users/groups.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Here you can view the forum permissions assigned to the selected users/groups and forums.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Here you can view the forum moderator permissions assigned to the selected users/groups and forums.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Here you can view the effective user permissions assigned to the selected users/groups.',

	'ADD_GROUPS'			=> '그룹 추가',
	'ADD_PERMISSIONS'		=> '권한 추가',
	'ADD_USERS'			=> '사용자 추가',
	'ADVANCED_PERMISSIONS'		=> '고급 권한',
	'ALL_GROUPS'			=> '모든 그룹 선택',
	'ALL_NEVER'			=> 'All <strong>NEVER</strong>',
	'ALL_NO'			=> 'All <strong>NO</strong>',
	'ALL_USERS'			=> '모든 사용자 선택',
	'ALL_YES'			=> '모두 <strong>YES</strong>',
	'APPLY_ALL_PERMISSIONS'		=> '모든 권한 적용',
	'APPLY_PERMISSIONS'		=> '권한 적용',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'The permissions and role defined for this item will only be applied to this item and all checked items.',
	'AUTH_UPDATED'			=> '권한 업데이트.',

	'COPY_PERMISSIONS_CONFIRM'	=> 'Are you sure you wish to carry out this operation? Please be aware that this will overwrite any existing permissions on the selected targets.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'The source forum you want to copy permissions from.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'	=> 'The destination forums you want the copied permissions applied to.',
	'COPY_PERMISSIONS_FROM'			=> 'Copy permissions from',
	'COPY_PERMISSIONS_TO'			=> 'Apply permissions to',

	'CREATE_ROLE'				=> 'Create role',
	'CREATE_ROLE_FROM'			=> 'Use settings from…',
	'CUSTOM'				=> 'Custom…',

	'DEFAULT'			=> 'Default',
	'DELETE_ROLE'			=> 'Delete role',
	'DELETE_ROLE_CONFIRM'		=> 'Are you sure you want to remove this role? Items having this role assigned will <strong>not</strong> lose their permission settings.',
	'DISPLAY_ROLE_ITEMS'		=> 'View items using this role',

	'EDIT_PERMISSIONS'			=> 'Edit permissions',
	'EDIT_ROLE'					=> 'Edit role',

	'GROUPS_NOT_ASSIGNED'		=> 'No group assigned to this role',

	'LOOK_UP_GROUP'				=> 'Look up usergroup',
	'LOOK_UP_USER'				=> 'Look up user',

	'MANAGE_GROUPS'		=> 'Manage groups',
	'MANAGE_USERS'		=> 'Manage users',

	'NO_AUTH_SETTING_FOUND'		=> 'Permission settings not defined.',
	'NO_ROLE_ASSIGNED'			=> 'No role assigned…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Setting to this role does not change permissions on the right. If you want to unset/remove all permissions you should use the “All <strong>NO</strong>” link.',
	'NO_ROLE_AVAILABLE'			=> 'No role available',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Please give the role a name.',
	'NO_ROLE_SELECTED'			=> 'Role could not be found.',
	'NO_USER_GROUP_SELECTED'	=> 'You haven’t selected any user or group.',

	'ONLY_FORUM_DEFINED'	=> 'You only defined forums in your selection. Please also select at least one user or one group.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Permissions and role will also be applied to all checked objects',
	'PLUS_SUBFORUMS'				=> '+Subforums',

	'REMOVE_PERMISSIONS'			=> 'Remove permissions',
	'REMOVE_ROLE'					=> 'Remove role',
	'RESULTING_PERMISSION'			=> 'Resulting permission',
	'ROLE'							=> 'Role',
	'ROLE_ADD_SUCCESS'				=> 'Role successfully added.',
	'ROLE_ASSIGNED_TO'				=> 'Users/Groups assigned to %s',
	'ROLE_DELETED'					=> 'Role successfully removed.',
	'ROLE_DESCRIPTION'				=> 'Role description',

	'ROLE_ADMIN_FORUM'			=> 'Forum Admin',
	'ROLE_ADMIN_FULL'			=> 'Full Admin',
	'ROLE_ADMIN_STANDARD'		=> 'Standard Admin',
	'ROLE_ADMIN_USERGROUP'		=> 'User and Groups Admin',
	'ROLE_FORUM_BOT'			=> 'Bot Access',
	'ROLE_FORUM_FULL'			=> 'Full Access',
	'ROLE_FORUM_LIMITED'		=> 'Limited Access',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Limited Access + Polls',
	'ROLE_FORUM_NOACCESS'		=> 'No Access',
	'ROLE_FORUM_ONQUEUE'		=> 'On Moderation Queue',
	'ROLE_FORUM_POLLS'			=> 'Standard Access + Polls',
	'ROLE_FORUM_READONLY'		=> 'Read Only Access',
	'ROLE_FORUM_STANDARD'		=> 'Standard Access',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Newly Registered User Access',
	'ROLE_MOD_FULL'				=> 'Full Moderator',
	'ROLE_MOD_QUEUE'			=> 'Queue Moderator',
	'ROLE_MOD_SIMPLE'			=> 'Simple Moderator',
	'ROLE_MOD_STANDARD'			=> 'Standard Moderator',
	'ROLE_USER_FULL'			=> 'All Features',
	'ROLE_USER_LIMITED'			=> 'Limited Features',
	'ROLE_USER_NOAVATAR'		=> 'No Avatar',
	'ROLE_USER_NOPM'			=> 'No Private Messages',
	'ROLE_USER_STANDARD'		=> 'Standard Features',
	'ROLE_USER_NEW_MEMBER'		=> 'Newly Registered User Features',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Can access the forum management and forum permission settings.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Has access to all administrative functions of this board.<br />Not recommended.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Has access to most administrative features but is not allowed to use server or system related tools.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Can manage groups and users: Able to change permissions, settings, manage bans, and manage ranks.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'This role is recommended for bots and search spiders.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Can use all forum features, including posting of announcements and stickies. Can also ignore the flood limit.<br />Not recommended for normal users.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Can use some forum features, but cannot attach files or use post icons.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'As per Limited Access but can also create polls.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Can neither see nor access the forum.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Can use most forum features including attachments, but posts and topics need to be approved by a moderator.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Like Standard Access but can also create polls.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Can read the forum, but cannot create new topics or reply to posts.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Can use most forum features including attachments and deleting own topics, but cannot lock own topics, and cannot create polls.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'A role for members of the special newly registered users group; contains <strong>NEVER</strong> permissions to lock features for new users.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Can use all moderating features, including banning.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Can use the Moderation Queue to validate and edit posts, but nothing else.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Can only use basic topic actions. Cannot send warnings or use moderation queue.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Can use most moderating tools, but cannot ban users or change the post author.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Can use all available forum features for users, including changing the user name or ignoring the flood limit.<br />Not recommended.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Can access some of the user features. Attachments, emails, or instant messages are not allowed.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Has a limited feature set and is not allowed to use the Avatar feature.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Has a limited feature set, and is not allowed to use Private Messages.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Can access most but not all user features. Cannot change user name or ignore the flood limit, for instance.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'A role for members of the special newly registered users group; contains <strong>NEVER</strong> permissions to lock features for new users.',

	'ROLE_DESCRIPTION_EXPLAIN'		=> 'You are able to enter a short explanation of what the role is doing or for what it is meant for. The text you enter here will be displayed within the permissions screens too.',
	'ROLE_DESCRIPTION_LONG'			=> 'The role description is too long, please limit it to 4000 characters.',
	'ROLE_DETAILS'					=> 'Role details',
	'ROLE_EDIT_SUCCESS'				=> 'Role successfully edited.',
	'ROLE_NAME'						=> 'Role name',
	'ROLE_NAME_ALREADY_EXIST'		=> 'A role named <strong>%s</strong> already exist for the specified permission type.',
	'ROLE_NOT_ASSIGNED'				=> 'Role has not been assigned yet.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'The selected forum(s) do not exist.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'The selected group(s) do not exist.',
	'SELECTED_USER_NOT_EXIST'		=> 'The selected user(s) do not exist.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'The forum you select here will include all subforums into the selection.',
	'SELECT_ROLE'					=> 'Select role…',
	'SELECT_TYPE'					=> 'Select type',
	'SET_PERMISSIONS'				=> 'Set permissions',
	'SET_ROLE_PERMISSIONS'			=> 'Set role permissions',
	'SET_USERS_PERMISSIONS'			=> 'Set user permissions',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Set user forum permissions',

	'TRACE_DEFAULT'					=> 'By default every permission is <strong>NO</strong> (unset). So the permission can be overwritten by other settings.',
	'TRACE_FOR'						=> 'Trace for',
	'TRACE_GLOBAL_SETTING'			=> '%s (global)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'This group’s permission is set to <strong>NEVER</strong> like the total result so the old result is kept.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'This group’s permission for this forum is set to <strong>NEVER</strong> like the total result so the old result is kept.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'This group’s permission is set to <strong>NEVER</strong> which becomes the new total value because it wasn’t set yet (set to <strong>NO</strong>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'This group’s permission for this forum is set to <strong>NEVER</strong> which becomes the new total value because it wasn’t set yet (set to <strong>NO</strong>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'This group’s permission is set to <strong>NEVER</strong> which overwrites the total <strong>YES</strong> to a <strong>NEVER</strong> for this user.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'This group’s permission for this forum is set to <strong>NEVER</strong> which overwrites the total <strong>YES</strong> to a <strong>NEVER</strong> for this user.',
	'TRACE_GROUP_NO'				=> 'The permission is <strong>NO</strong> for this group so the old total value is kept.',
	'TRACE_GROUP_NO_LOCAL'			=> 'The permission is <strong>NO</strong> for this group within this forum so the old total value is kept.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'This group’s permission is set to <strong>YES</strong> but the total <strong>NEVER</strong> cannot be overwritten.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'This group’s permission for this forum is set to <strong>YES</strong> but the total <strong>NEVER</strong> cannot be overwritten.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'This group’s permission is set to <strong>YES</strong> which becomes the new total value because it wasn’t set yet (set to <strong>NO</strong>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'This group’s permission for this forum is set to <strong>YES</strong> which becomes the new total value because it wasn’t set yet (set to <strong>NO</strong>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'This group’s permission is set to <strong>YES</strong> and the total permission is already set to <strong>YES</strong>, so the total result is kept.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'This group’s permission for this forum is set to <strong>YES</strong> and the total permission is already set to <strong>YES</strong>, so the total result is kept.',
	'TRACE_PERMISSION'				=> 'Trace permission - %s',
	'TRACE_RESULT'					=> 'Trace result',
	'TRACE_SETTING'					=> 'Trace setting',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'The forum independent user permission evaluates to <strong>YES</strong> but the total permission is already set to <strong>YES</strong>, so the total result is kept. %sTrace global permission%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'The forum independent user permission evaluates to <strong>YES</strong> which overwrites the current local result <strong>NEVER</strong>. %sTrace global permission%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'The forum independent user permission evaluates to <strong>NEVER</strong> which doesn’t influence the local permission. %sTrace global permission%s',

	'TRACE_USER_FOUNDER'					=> 'The user is a founder, therefore admin permissions are always set to <strong>YES</strong>.',
	'TRACE_USER_KEPT'						=> 'The user’s permission is <strong>NO</strong> so the old total value is kept.',
	'TRACE_USER_KEPT_LOCAL'					=> 'The user’s permission for this forum is <strong>NO</strong> so the old total value is kept.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'The user’s permission is set to <strong>NEVER</strong> and the total value is set to <strong>NEVER</strong>, so nothing is changed.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'The user’s permission for this forum is set to <strong>NEVER</strong> and the total value is set to <strong>NEVER</strong>, so nothing is changed.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'The user’s permission is set to <strong>NEVER</strong> which becomes the total value because it was set to NO.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'The user’s permission for this forum is set to <strong>NEVER</strong> which becomes the total value because it was set to NO.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'The user’s permission is set to <strong>NEVER</strong> and overwrites the previous <strong>YES</strong>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'The user’s permission for this forum is set to <strong>NEVER</strong> and overwrites the previous <strong>YES</strong>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'The user’s permission is <strong>NO</strong> and the total value was set to NO so it defaults to <strong>NEVER</strong>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'The user’s permission for this forum is <strong>NO</strong> and the total value was set to NO so it defaults to <strong>NEVER</strong>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'The user’s permission is set to <strong>YES</strong> but the total <strong>NEVER</strong> cannot be overwritten.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'The user’s permission for this forum is set to <strong>YES</strong> but the total <strong>NEVER</strong> cannot be overwritten.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'The user’s permission is set to <strong>YES</strong> which becomes the total value because it was set to <strong>NO</strong>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'The user’s permission for this forum is set to <strong>YES</strong> which becomes the total value because it was set to <strong>NO</strong>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'The user’s permission is set to <strong>YES</strong> and the total value is set to <strong>YES</strong>, so nothing is changed.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'The user’s permission for this forum is set to <strong>YES</strong> and the total value is set to <strong>YES</strong>, so nothing is changed.',
	'TRACE_WHO'	=> 'Who',
	'TRACE_TOTAL'	=> 'Total',

	'USERS_NOT_ASSIGNED'		=> 'No users are assigned to this role',
	'USER_IS_MEMBER_OF_DEFAULT'	=> 'is a member of the following pre-defined groups',
	'USER_IS_MEMBER_OF_CUSTOM'	=> 'is a member of the following user defined groups',

	'VIEW_ASSIGNED_ITEMS'	=> '할당된 항목 보기',
	'VIEW_LOCAL_PERMS'	=> '지역 권한',
	'VIEW_GLOBAL_PERMS'	=> '전역 권한',
	'VIEW_PERMISSIONS'	=> '권한 보기',

	'WRONG_PERMISSION_TYPE'			=> '잘못된 권한 유형 선택됨.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> '권한 설정이 잘못된 형식입니다. phpBB가 올바르게 처리할 수 없습니다.',
));
