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
	'ACP_SEARCH_INDEX_EXPLAIN'	=> '여기에서 검색 백엔드의 인덱스를 관리할 수 있습니다. 일반적으로 하나의 백엔드만 사용하므로 사용하지 않는 모든 인덱스를 삭제해야 합니다. 일부 검색 설정(예: 최소/최대 문자 수)을 변경한 후 이러한 변경 사항을 반영하도록 인덱스를 다시 생성하는 것이 좋습니다H.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'	=> '여기에서 게시물을 인덱싱하고 검색을 수행하는 데 사용할 검색 백엔드를 정의할 수 있습니다. 이러한 작업에 필요한 처리량에 영향을 줄 수 있는 다양한 옵션을 설정할 수 있습니다. 이러한 설정 중 일부는 모든 검색 엔진 백엔드에서 동일합니다.',

	'COMMON_WORD_THRESHOLD'		=> '공통 단어 임계값',
	'COMMON_WORD_THRESHOLD_EXPLAIN'	=> '모든 게시물에서 더 많은 비율로 포함된 단어를 공통으로 간주합니다. 일반적인 단어는 검색어에서 무시됩니다. 비활성화하려면 0으로 설정합니다. 게시물이 100개 이상인 경우에만 적용됩니다. 현재 일반적으로 간주되는 단어를 다시 고려하려면 색인을 다시 만들어야 합니다.',
	'CONFIRM_SEARCH_BACKEND'	=> '다른 검색 백엔드로 전환하시겠습니까? 검색 백엔드를 변경한 후에는 새 검색 백엔드에 대한 인덱스를 만들어야 합니다. 이전 검색 백엔드로 다시 전환할 계획이 없다면 시스템 리소스를 확보하기 위해 이전 백엔드의 인덱스를 삭제할 수도 있습니다.',
	'CONTINUE_DELETING_INDEX'		=> 'Continue previous index removal process',
	'CONTINUE_DELETING_INDEX_EXPLAIN'	=> 'An index removal process has been started. In order to access the search index page you will have to complete it or cancel it.',
	'CONTINUE_INDEXING'			=> 'Continue previous indexing process',
	'CONTINUE_INDEXING_EXPLAIN'		=> 'An indexing process has been started. In order to access the search index page you will have to complete it or cancel it.',
	'CREATE_INDEX'				=> 'Create index',

	'DEFAULT_SEARCH_RETURN_CHARS'		=> 'Default number of returned characters',
	'DEFAULT_SEARCH_RETURN_CHARS_EXPLAIN'	=> 'The default number of characters that will be returned while searching. A value of 0 will return the entire post.',
	'DELETE_INDEX'				=> 'Delete index',
	'DELETING_INDEX_IN_PROGRESS'		=> 'Deletion of index is in progress…',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'The search backend is currently cleaning its index. This can take a few minutes.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'The MySQL fulltext backend can only be used with MySQL4 and above.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'		=> 'MySQL fulltext indexes can only be used with MyISAM or InnoDB tables. MySQL 5.6.8 or later is required for fulltext indexes on InnoDB tables.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Total number of indexed posts',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Words with at least this many characters will be indexed for searching. You or your host can only change this setting by changing the mysql configuration.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Words with no more than this many characters will be indexed for searching. You or your host can only change this setting by changing the mysql configuration.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'The PostgreSQL fulltext backend can only be used with PostgreSQL.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> 'Total number of indexed posts',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'PostgreSQL version',
	'FULLTEXT_POSTGRES_TS_NAME'				=> 'Text search Configuration Profile:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'Minimum word length for keywords',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'Maximum word length for keywords',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> 'This search backend requires PostgreSQL version 8.3 and above.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> 'The Text search configuration profile used to determine the parser and dictionary.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> 'Words with at least this many characters will be included in the query to the database.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> 'Words with no more than this many characters will be included in the query to the database.',

	'FULLTEXT_SPHINX_CONFIGURE'				=> 'Configure the following settings to generate sphinx config file',
	'FULLTEXT_SPHINX_DATA_PATH'				=> 'Path to data directory',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'It will be used to store the indexes and log files. You should create this directory outside the web accessible directories. (should have a trailing slash)',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> 'Number of posts in frequently updated delta index',
	'FULLTEXT_SPHINX_HOST'					=> 'Sphinx search daemon host',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'Host on which the sphinx search daemon (searchd) listens. Leave empty to use the default localhost',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'Indexer memory limit',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'This number should at all times be lower than the RAM available on your machine. If you experience periodic performance problems this might be due to the indexer consuming too many resources. It might help to lower the amount of memory available to the indexer.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'Number of posts in main index',
	'FULLTEXT_SPHINX_PORT'					=> 'Sphinx search daemon port',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Port on which the sphinx search daemon (searchd) listens. Leave empty to use the default Sphinx API port 9312',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'The sphinx search for phpBB supports MySQL and PostgreSQL only.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Sphinx config file',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'The generated content of the sphinx config file. This data needs to be pasted into the sphinx.conf which is used by sphinx search daemon. Replace the [dbuser] and [dbpassword] placeholders with your database credentials.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'The sphinx data directory path is not defined. Please define the path and submit to generate the config file.',

	'GENERAL_SEARCH_SETTINGS'				=> 'General search settings',
	'GO_TO_SEARCH_INDEX'					=> 'Go to search index page',

	'INDEX_STATS'							=> 'Index statistics',
	'INDEXING_IN_PROGRESS'					=> 'Indexing in progress…',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'The search backend is currently indexing all posts on the board. This can take from a few minutes to a few hours depending on your board’s size.',

	'LIMIT_SEARCH_LOAD'						=> 'Search page system load limit',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'If the 1 minute system load exceeds this value the search page will go offline, 1.0 equals ~100% utilisation of one processor. This only functions on UNIX based servers.',

	'MAX_SEARCH_CHARS'			=> '검색으로 인덱싱된 최대 문자 수',
	'MAX_SEARCH_CHARS_EXPLAIN'		=> '이 문자 수 이하의 단어는 검색을 위해 인덱싱됩니다.',
	'MAX_NUM_SEARCH_KEYWORDS'		=> '허용되는 키워드 최대 수',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'	=> '사용자가 검색할 수 있는 최대 단어 수. 값이 0이면 단어 수에 제한이 없.',
	'MIN_SEARCH_CHARS'			=> '검색으로 인덱싱된 최소 문자 수',
	'MIN_SEARCH_CHARS_EXPLAIN'		=> '적어도 이 문자 수만큼의 단어가 검색을 위해 인덱싱됩니다.',
	'MIN_SEARCH_AUTHOR_CHARS'		=> '최소 저자 이름 문자',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'	=> '와일드카드 작성자 검색을 수행할 때 사용자는 이름의 문자 수 이상을 입력해야 합니다. 작성자의 사용자 이름이 이 숫자보다 짧은 경우에도 전체 사용자 이름을 입력하여 작성자의 게시물을 검색할 수 있습니다.',

	'PROGRESS_BAR'		=> '진행률 막대',

	'SEARCH_GUEST_INTERVAL'		=> '손님 검색 플러드 간격',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'	=> '손님이 검색 사이에 기다려야 하는 시간(초). 한 손님이 검색하면 다른 모든 손님은 시간 간격이 지날 때까지 기다려야 합니다.',
	'SEARCH_INDEX_CREATE_REDIRECT'	=> array(
		2	=> 'All posts up to post id %2$d have now been indexed, of which %1$d posts were within this step.',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'	=> array(
		2	=> 'The current rate of indexing is approximately %1$.1f posts per second.',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'		=> array(
		2	=> 'All posts up to post id %2$d have been removed from the search index, of which %1$d posts were within this step.',
	),
	'SEARCH_INDEX_DELETE_REDIRECT_RATE'	=> array(
		2	=> 'The current rate of deleting is approximately %1$.1f posts per second.',
	),
	'SEARCH_INDEX_CREATED'		=> 'Successfully indexed all posts in the board database.',
	'SEARCH_INDEX_PROGRESS'		=> 'Done: %1$d | Pending: %2$d | Total: %3$d',
	'SEARCH_INDEX_REMOVED'		=> 'Successfully deleted the search index for this backend.',
	'SEARCH_INTERVAL'		=> 'User search flood interval',
	'SEARCH_INTERVAL_EXPLAIN'	=> 'Number of seconds users must wait between searches. This interval is checked independently for each user.',
	'SEARCH_STORE_RESULTS'		=> 'Search result cache length',
	'SEARCH_STORE_RESULTS_EXPLAIN'	=> 'Cached search results will expire after this time, in seconds. Set to 0 if you want to disable search cache.',
	'SEARCH_TYPE'			=> 'Search backend',
	'SEARCH_TYPE_EXPLAIN'		=> 'phpBB allows you to choose the backend that is used for searching text in post contents. By default the search will use phpBB’s own fulltext search.',
	'SWITCHED_SEARCH_BACKEND'	=> 'You switched the search backend. In order to use the new search backend you should make sure that there is an index for the backend you chose.',

	'TOTAL_WORDS'		=> 'Total number of indexed words',
	'TOTAL_MATCHES'		=> 'Total number of word to post relations indexed',

	'YES_SEARCH'		=> 'Enable search facilities',
	'YES_SEARCH_EXPLAIN'	=> 'Enables user facing search functionality including member search.',
	'YES_SEARCH_UPDATE'		=> 'Enable fulltext updating',
	'YES_SEARCH_UPDATE_EXPLAIN'	=> 'Updating of fulltext indexes when posting, overridden if search is disabled.',
));
