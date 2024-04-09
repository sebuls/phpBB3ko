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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> '이 섹션에서 사용자를 보드에서 지우거나 비활성화할 수 있습니다. 다양한 방법으로 계정을 필터링할 수 있습니다. 게시물 수, 가장 최근 활동 등. 영향을 받는 계정의 범위를 좁히기 위해 기준을 결합할 수 있습니다. 예를 들어 게시물이 10개 미만이고 2002년 1월 1일 이후에 비활성 상태인 사용자를 정리할 수 있습니다. *를 텍스트 필드의 와일드카드로 사용하십시오. 또는 텍스트 필드에 사용자 목록(각각 별도의 행에 있음)을 입력하여 기준 선택을 완전히 건너뛸 수 있습니다. 이 것을 조심하세요! 사용자가 지워지면 작업을 되돌릴 방법이 없습니다.',

	'CRITERIA'			=> 'Criteria',

	'DEACTIVATE_DELETE'		=> '비활성 또는 삭제',
	'DEACTIVATE_DELETE_EXPLAIN'	=> '사용자를 비활성화할지 완전히 삭제할지 선택하십시오. 삭제된 사용자는 복원할 수 없습니다!',
	'DELETE_USERS'			=> '삭제',
	'DELETE_USER_POSTS'		=> '정리된 사용자 게시물 삭제',
	'DELETE_USER_POSTS_EXPLAIN' => '삭제된 사용자가 작성한 게시물을 없앱니다. 사용자가 비활성화되어 있으면 효과가 없습니다.',

	'JOINED_EXPLAIN'		=> 'Enter a date in <kbd>YYYY-MM-DD</kbd> format. You may use both fields to specify an interval, or leave one blank for an open date range.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Enter a date in <kbd>YYYY-MM-DD</kbd> format. Enter <kbd>0000-00-00</kbd> to prune users who never logged in, <em>Before</em> and <em>After</em> conditions will be ignored.',

	'POSTS_ON_QUEUE'		=> 'Posts Awaiting Approval',
	'PRUNE_USERS_GROUP_EXPLAIN'	=> 'Limit to users within the selected group.',
	'PRUNE_USERS_GROUP_NONE'	=> 'All groups',
	'PRUNE_USERS_LIST'		=> 'Users to be pruned',
	'PRUNE_USERS_LIST_DELETE'	=> 'With the selected critera for pruning users the following accounts will be removed. You can remove individual users from the deletion list by unchecking the box next to their username.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'With the selected critera for pruning users the following accounts will be deactivated. You can remove individual users from the deactivation list by unchecking the box next to their username.',

	'SELECT_USERS_EXPLAIN'		=> 'Enter specific usernames here. They will be used in preference to the criteria above. Founders cannot be pruned.',

	'USER_DEACTIVATE_SUCCESS'	=> 'The selected users have been deactivated successfully.',
	'USER_DELETE_SUCCESS'		=> 'The selected users have been deleted successfully.',
	'USER_PRUNE_FAILURE'		=> 'No users fit the selected criteria.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'The date entered is wrong, it is expected in <kbd>YYYY-MM-DD</kbd> format.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> '선택한 일수 내에 게시되거나 조회되지 않은 주제를 지웁니다. 숫자를 입력하지 않으면 모든 주제가 지워집니다. 기본적으로 설문이 진행 중인 주제는 지우지 않으며 스티키 및 공지도 지우지 않습니다.',

	'FORUM_PRUNE'		=> 'Forum prune',

	'NO_PRUNE'		=> 'No forums pruned.',

	'SELECTED_FORUM'	=> 'Selected forum',
	'SELECTED_FORUMS'	=> 'Selected forums',

	'POSTS_PRUNED'			=> 'Posts pruned',
	'PRUNE_ANNOUNCEMENTS'		=> 'Prune announcements',
	'PRUNE_FINISHED_POLLS'		=> 'Prune closed polls',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Removes topics with polls which have ended.',
	'PRUNE_FORUM_CONFIRM'		=> '지정된 설정으로 선택한 포럼을 지우겠습니까? 일단 지우면 지운 게시물과 주제를 복구할 수 없습니다.',
	'PRUNE_NOT_POSTED'		=> 'Days since last posted',
	'PRUNE_NOT_VIEWED'		=> 'Days since last viewed',
	'PRUNE_OLD_POLLS'		=> 'Prune old polls',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Removes topics with polls not voted in for post age days.',
	'PRUNE_STICKY'			=> 'Prune stickies',
	'PRUNE_SUCCESS'			=> 'Pruning of forums was successful.',

	'TOPICS_PRUNED'		=> 'Topics pruned',
));
