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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> '"%1$s"(이하 "우리", "당사를", "우리의", "%1$s", "%2$s")에 액세스함으로써 당신는 다음 용어. 다음 조건에 법적으로 구속되는 데 동의하지 않는 경우 "%1$s"에 액세스 및/또는 사용하지 마십시오. 언제든지 이를 변경할 수 있으며 최선을 다해 알려드리겠습니다. 변경 후에도 "%1$s"을(를) 계속 사용하는 것은 당신가 이에 법적으로 구속된다는 데 동의한다는 의미이므로 정기적으로 직접 검토하는 것이 좋습니다. 업데이트 및/또는 수정된 약관.
     <br><br>
     우리 포럼은 출시된 게시판 솔루션인 phpBB(이하 "그들", "그들", "그들의", "phpBB 소프트웨어", "www.phpbb.com", "phpBB Limited", "phpBB Teams")에 의해 구동됩니다. "<a href="http://opensource.org/licenses/gpl-2.0.php">GNU General Public License v2</a>"(이하 "GPL")에 따라 <a href= "https://www.phpbb.com/">www.phpbb.com</a>. phpBB 소프트웨어는 인터넷 기반 토론만 가능하게 합니다. phpBB Limited는 허용 가능한 콘텐츠 및/또는 행위로 허용 및/또는 허용하지 않는 것에 대해 책임을 지지 않습니다. phpBB에 대한 자세한 내용은 <a href="https://www.phpbb.com/">https://www.phpbb.com/</a>을 참조하세요.
     <br><br>
     당신는 당신의 국가, "%1$s"이(가) 호스팅되는 국가 또는 국제법을 위반할 수 있는 학대, 외설, 저속, 비방, 증오, 위협, 성적 지향 또는 기타 모든 자료를 게시하지 않는 데 동의합니다. 그렇게 하면 당사에서 요구하는 것으로 간주되는 경우 당신의 인터넷 서비스 공급자에게 통지하여 즉시 영구적으로 금지될 수 있습니다. 이러한 조건을 적용하는 데 도움이 되도록 모든 게시물의 IP 주소가 기록됩니다. 당신는 "%1$s"이(가) 적절하다고 판단되는 경우 언제든지 주제를 제거, 편집, 이동 또는 닫을 수 있는 권한이 있음에 동의합니다. 사용자로서 당신는 입력한 모든 정보가 데이터베이스에 저장되는 데 동의합니다. 이 정보는 당신의 동의 없이 제3자에게 공개되지 않지만 "%1$s" 또는 phpBB는 데이터 손상으로 이어질 수 있는 해킹 시도에 대해 책임을 지지 않습니다.',

	'PRIVACY_POLICY'	=> '이 정책은 "%1$s"와 그 계열사(이하 "우리", "us", "our", "%1$s", "%2$s")가 어떻게 운영되는지 자세히 설명합니다. ) 및 phpBB(이하 "그들", "그들", "그들의", "phpBB 소프트웨어", "www.phpbb.com", "phpBB Limited", "phpBB 팀")은 당신(이하 "당신의 정보").
		<br><br>
		당신의 정보는 두 가지 방법으로 수집됩니다. 첫째, "%1$s"를 탐색하면 phpBB 소프트웨어가 컴퓨터의 웹 브라우저 임시 파일에 다운로드되는 작은 텍스트 파일인 여러 쿠키를 생성하게 됩니다. 처음 두 개의 쿠키에는 phpBB 소프트웨어에 의해 자동으로 할당되는 사용자 식별자(이하 "user-id")와 익명의 세션 식별자(이하 "session-id")가 포함됩니다. 세 번째 쿠키는 "%1$s" 내에서 주제를 탐색하면 생성되며 읽은 주제를 저장하는 데 사용되어 사용자 경험을 향상시킵니다.
		<br><br>
		"%1$s"를 탐색하는 동안 phpBB 소프트웨어 외부에 쿠키를 생성할 수도 있지만, phpBB 소프트웨어에 의해 생성된 페이지만 다루기 위한 이 문서의 범위를 벗어납니다. 당신의 정보를 수집하는 두 번째 방법은 당신가 당사에 제출하는 정보입니다. 익명 사용자로 게시(이하 "익명 게시물"), "%1$s"(이하 "당신의 계정")에 등록, 등록 후 로그인한 동안 당신가 제출한 게시물( 이하 "당신의 게시물").
		<br><br>
		당신의 계정에는 최소한 고유하게 식별할 수 있는 이름(이하 "당신의 사용자 이름"), 당신의 계정에 로그인하는 데 사용되는 개인 암호(이하 "당신의 암호") 및 유효한 개인 이메일 주소(이하 "당신의 이메일")가 포함됩니다. ). "%1$s" 계정에 대한 당신의 정보는 당사를 호스팅하는 국가에서 적용되는 데이터 보호법에 의해 보호됩니다. 등록 과정에서 "%1$s"에서 요구하는 사용자 이름, 암호 및 이메일 주소 이외의 정보는 "%1$s"의 재량에 따라 필수 또는 선택 사항입니다. 모든 경우에 당신는 계정의 어떤 정보를 공개적으로 표시할지 선택할 수 있습니다. 또한 당신의 계정 내에서 phpBB 소프트웨어에서 자동으로 생성된 이메일을 옵트인 또는 옵트아웃할 수 있는 옵션이 있습니다.
		<br><br>
		암호는 암호화되어(단방향 해시) 안전합니다. 그러나 여러 웹사이트에서 동일한 암호를 재사용하지 않는 것이 좋습니다. 당신의 암호는 "%1$s"에 있는 당신의 계정에 액세스하는 수단이므로 신중하게 관리하시기 바랍니다. 어떠한 경우에도 "%1$s", phpBB 또는 다른 제3자와 관련된 사람이 합법적으로 당신의 암호를 묻지 않습니다. 계정의 암호를 잊은 경우 phpBB 소프트웨어에서 제공하는 "암호를 잊어버렸습니다" 기능을 사용할 수 있습니다. 이 프로세스는 사용자 이름과 이메일을 제출하도록 요청한 다음 phpBB 소프트웨어가 계정을 되찾기 위해 새 암호를 생성합니다.',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'		=> '계정이 활성화되었습니다. 등록해 주셔서 감사합니다.',
	'ACCOUNT_ACTIVE_ADMIN'		=> '이제 계정이 활성화되었습니다.',
	'ACCOUNT_ACTIVE_PROFILE'	=> '당신의 계정이 이제 성공적으로 재활성화되었습니다.',
	'ACCOUNT_ADDED'			=> '등록해 주셔서 감사합니다. 계정이 생성되었습니다.',
	'ACCOUNT_COPPA'			=> '계정이 생성되었지만 승인이 필요합니다. 자세한 내용은 이메일을 확인하세요.',
	'ACCOUNT_EMAIL_CHANGED'		=> '당신의 계정이 업데이트되었습니다. 그러나 이 게시판은 이메일 변경 시 계정 재활성화가 필요합니다. 당신가 제공한 새 이메일 주소로 활성화 키가 전송되었습니다. 자세한 내용은 이메일을 확인하세요',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> '당신의 계정이 업데이트되었습니다. 그러나 이 게시판은 이메일 변경 시 관리자가 계정을 재활성화해야 합니다. 그들에게 이메일이 전송되었으며 계정이 재활성화되면 알려드립니다.',
	'ACCOUNT_INACTIVE'		=> '당신의 계정이 생성되었습니다. 단, 이 게시판은 계정 활성화가 필요합니다. 당신가 제공한 이메일 주소로 활성화 키가 전송되었습니다. 자세한 내용은 이메일을 확인하고 정크 메일함도 확인하십시오. 이메일 제공업체에 따라 이메일을 받는 데 다소 시간이 걸릴 수 있습니다.',
	'ACCOUNT_INACTIVE_ADMIN'	=> '당신의 계정이 생성되었습니다. 단, 이 게시판은 관리자 그룹의 계정 활성화가 필요합니다. 그들에게 이메일이 전송되었으며 계정이 활성화되면 알려드립니다.',
	'ACTIVATION_EMAIL_SENT'		=> '활성화 이메일이 당신의 이메일 주소로 발송되었습니다.',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> '활성화 이메일이 관리자 이메일 주소로 발송되었습니다.',
	'ADD'				=> '추가',
	'ADD_BCC'			=> '[BCC] 추가',
	'ADD_FOES'			=> '새 적 추가',
	'ADD_FOES_EXPLAIN'		=> '한 행에 하나씩 여러 사용자 이름을 입력할 수 있습니다.',
	'ADD_FOLDER'			=> '폴더 추가',
	'ADD_FRIENDS'			=> '새 친구 추가',
	'ADD_FRIENDS_EXPLAIN'		=> '각각 다른 행에 여러 사용자 이름을 입력할 수 있습니다.',
	'ADD_NEW_RULE'			=> '새 규칙 추가',
	'ADD_RULE'			=> '규칙 추가',
	'ADD_TO'			=> '[에] 추가',
	'ADD_USERS_UCP_EXPLAIN'		=> '여기에서 그룹에 새 사용자를 추가할 수 있습니다. 이 그룹이 선택한 사용자의 새 기본값이 될지 여부를 선택할 수 있습니다. 각 사용자 이름을 별도의 줄에 입력하십시오.',
	'ADMIN_EMAIL'			=> '관리자가 나에게 정보를 메일 보낼 수 있습니다.',
	'AGREE'				=> '이 약관에 동의',
	'ALLOW_PM'			=> '사용자가 개인 메시지 보내기 허용',
	'ALLOW_PM_EXPLAIN'		=> '관리자와 중재자는 항상 메시지를 보낼 수 있습니다.',
	'ALREADY_ACTIVATED'		=> '이미 계정을 활성화 했습니다.',
	'ATTACHMENTS_EXPLAIN'		=> '이 게시판의 게시물에 첨부한 목록입니다.',
	'ATTACHMENTS_DELETED'		=> '첨부 성공적 삭제.',
	'ATTACHMENT_DELETED'		=> '첨부 성공적 삭제.',
	'ATTACHMENT_LOCKED'		=> '이 주제 잠김, 첨부 삭제 불가.',
	'AUTOLOGIN_SESSION_KEYS_DELETED'=> '선택한 "Remember Me" 로그인 키가 성공적으로 삭제되었습니다.',
	'AVATAR_CATEGORY'		=> '카테고리',
	'AVATAR_DRIVER_GRAVATAR_TITLE'	=> 'Gravatar',
	'AVATAR_DRIVER_GRAVATAR_EXPLAIN'=> 'Gravatar는 여러 웹사이트에서 동일한 아바타를 유지할 수 있게 해주는 서비스입니다. 자세한 내용은 <a href="http://www.gravatar.com/">Gravatar</a>를 방문하세요.',
	'AVATAR_DRIVER_LOCAL_TITLE'	=> '갤러리 아바타',
	'AVATAR_DRIVER_LOCAL_EXPLAIN'	=> '로컬에서 사용할 수 있는 아바타 세트에서 아바타를 선택할 수 있습니다.',
	'AVATAR_DRIVER_REMOTE_TITLE'	=> '원격 아바타',
	'AVATAR_DRIVER_REMOTE_EXPLAIN'	=> '다른 웹사이트의 아바타 이미지 링크.',
	'AVATAR_DRIVER_UPLOAD_TITLE'	=> '아바타 업로드',
	'AVATAR_DRIVER_UPLOAD_EXPLAIN'	=> '맞춤형 아바타 업로드.',
	'AVATAR_EXPLAIN'		=> '최대 차원; 폭: %1$s, 높이: %2$s, 파일크기: %3$.2f KiB.',
	'AVATAR_EXPLAIN_NO_FILESIZE'	=> 'Maximum dimensions; 폭: %1$s, 높이: %2$s.',
	'AVATAR_FEATURES_DISABLED'	=> '아바타 기능 현재 비활성.',
	'AVATAR_GALLERY'		=> '로컬 갤러리',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> '아바타를 %s에 업로드 안 됨.',
	'AVATAR_NOT_ALLOWED'		=> '아바타가 허용되지 않았기 때문에 아바타를 표시할 수 없습니다.',
	'AVATAR_PAGE'			=> '페이지',
	'AVATAR_SELECT'			=> '아바타 선택',
	'AVATAR_TYPE'			=> '아바타 유형',
	'AVATAR_TYPE_NOT_ALLOWED'	=> '아바타 유형이 허용되지 않았기 때문에 아바타를 표시할 수 없습니다.',

	'BACK_TO_DRAFTS'		=> '저장된 초안으로',
	'BACK_TO_LOGIN'			=> '로그인 화면으로',
	'BIRTHDAY'			=> '생일',
	'BIRTHDAY_EXPLAIN'		=> '연도를 설정하면 생일이 되면 나이가 나열됩니다.',
	'BOARD_DATE_FORMAT'		=> '내 날짜 형식',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'PHP 함수와 동일한 구문 <a href="https://www.php.net/manual/datetime.format.php">date functions</a>.',
	'BOARD_LANGUAGE'		=> '내 언어',
	'BOARD_STYLE'			=> '내 보드 스타일',
	'BOARD_TIMEZONE'		=> '내 시간대',
	'BOOKMARKS'			=> '북마크',
	'BOOKMARKS_EXPLAIN'		=> '나중에 참조할 주제를 북마크할 수 있습니다. 삭제하려는 북마크의 확인란을 선택한 다음 <em>표시된 북마크 제거</em> 버튼을 누르세요.',
	'BOOKMARKS_DISABLED'		=> '이 보드에서 북마크 사용 불가.',
	'BOOKMARKS_REMOVED'		=> '북마크 제거 성공.',

	'CANNOT_EDIT_MESSAGE_TIME'	=> '더 이상 해당 메시지를 수정하거나 삭제할 수 없습니다.',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> '제거하려는 폴더로 메시지를 이동할 수 없습니다.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> '메시지를 발신함에서 옮길 수 없음.',
	'CANNOT_RENAME_FOLDER'		=> '이 폴더는 이름을 바꿀 수 없습니다.',
	'CANNOT_REMOVE_FOLDER'		=> '이 폴더는 삭제할 수 없습니다.',
	'CHANGE_DEFAULT_GROUP'		=> '기본 그룹 변경',
	'CHANGE_PASSWORD'			=> '암호 변경',
	'CLICK_GOTO_FOLDER'			=> '%1$sGo to your “%3$s” folder%2$s',
	'CLICK_RETURN_FOLDER'		=> '%1$sReturn to your “%3$s” folder%2$s',
	'CONFIRMATION'				=> '등록 확인',
	'CONFIRM_CHANGES'			=> '변경 확인',
	'CONFIRM_EXPLAIN'			=> '자동 등록을 방지하기 위해 보드에서 확인 코드를 입력해야 합니다. 코드는 아래에 표시되어야 하는 이미지에 표시됩니다. 시각 장애가 있거나 이 코드를 읽을 수 없는 경우 %s보드 관리자%s에게 문의하십시오.',
	'VC_REFRESH'				=> '확인 코드 새로 고침',
	'VC_REFRESH_EXPLAIN'		=> '코드를 읽을 수 없으면 버튼을 클릭하여 새 코드를 요청할 수 있습니다.',

	'CONFIRM_PASSWORD'			=> '암호 확인',
	'CONFIRM_PASSWORD_EXPLAIN'	=> '위에서 암호를 변경한 경우에만 암호를 확인하면 됩니다.',
	'COPPA_BIRTHDAY'			=> '등록 절차를 계속하려면 출생일을 알려주세요.',
	'COPPA_COMPLIANCE'			=> 'COPPA compliance',
	'COPPA_EXPLAIN'				=> '제출을 클릭하면 계정이 생성됩니다. 그러나 부모 또는 보호자가 등록을 승인할 때까지 활성화할 수 없습니다. 어디로 보내야 하는지에 대한 세부 정보와 함께 필요한 양식의 사본을 이메일로 받게 됩니다.',
	'CREATE_FOLDER'				=> '폴더 추가…',
	'CURRENT_IMAGE'				=> '현재 이미지',
	'CURRENT_PASSWORD'			=> '현재 암호',
	'CURRENT_PASSWORD_EXPLAIN'	=> '이메일 주소나 사용자 이름을 변경하려면 현재 암호를 입력해야 합니다.',
	'CURRENT_CHANGE_PASSWORD_EXPLAIN' => '암호, 이메일 주소 또는 사용자 이름을 변경하려면 현재 암호를 입력해야 합니다.',
	'CUR_PASSWORD_EMPTY'		=> '현재 암호를 입력 안 했습니다.',
	'CUR_PASSWORD_ERROR'		=> '현재 암호가 안 맞습니다.',
	'CUSTOM_DATEFORMAT'			=> '맞춤…',

	'DEFAULT_ACTION'			=> '기본 동작',
	'DEFAULT_ACTION_EXPLAIN'	=> '위의 항목 중 어느 것도 해당되지 않으면 이 작업이 실행됩니다.',
	'DEFAULT_ADD_SIG'		=> '기본값 내 서명 첨부',
	'DEFAULT_BBCODE'		=> '기본값 BBCode 활성화',
	'DEFAULT_NOTIFY'		=> '기본값 응답시 알림',
	'DEFAULT_SMILIES'		=> '기본값 스마일리 사용',
	'DEFINED_RULES'			=> '정의된 규칙',
	'DELETED_TOPIC'			=> '주제 지워짐.',
	'DELETE_ATTACHMENT'		=> '첨부 삭제',
	'DELETE_ATTACHMENTS'		=> '첨부 삭제',
	'DELETE_ATTACHMENT_CONFIRM'	=> '이 첨부파일을 삭제하시겠습니까?',
	'DELETE_ATTACHMENTS_CONFIRM'	=> '이 첨부파일을 삭제하시겠습니까?',
	'DELETE_AVATAR'			=> '이미지 삭제',
	'DELETE_COOKIES_CONFIRM'	=> 'Are you sure you want to delete all cookies set by this board?',
	'DELETE_MARKED_PM'		=> '표시된 메시지 지움',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Are you sure you want to delete all marked messages?',
	'DELETE_OLDEST_MESSAGES'	=> 'Delete oldest messages',
	'DELETE_MESSAGE'		=> '메시지 지움',
	'DELETE_MESSAGE_CONFIRM'	=> 'Are you sure you want to delete this private message?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Delete all messages within removed folder',
	'DELETE_RULE'			=> '규칙 지움',
	'DELETE_RULE_CONFIRM'		=> '이 규칙을 지우겠습니까?',
	'DEMOTE_SELECTED'		=> '선택 항목 강등',
	'DISABLE_CENSORS'		=> '단어 검열 사용',
	'DISPLAY_GALLERY'		=> '갤러리 표시',
	'DOWNLOADS'			=> '다운로드',
	'DRAFTS_DELETED'		=> '선택한 초안을 모두 지웠습니다.',
	'DRAFTS_EXPLAIN'		=> '여기에서 저장된 초안을 보고 편집하고 삭제할 수 있습니다.',
	'DRAFT_UPDATED'			=> '초안 성공적 업데이트.',

	'EDIT_DRAFT_EXPLAIN'		=> '여기에서 초안을 편집할 수 있습니다. 초안에는 첨부 파일 및 투표 정보가 포함되어 있지 않습니다.',
	'EMAIL_BANNED_EMAIL'		=> '입력한 이메일 주소는 사용할 수 없습니다.',
	'EMAIL_REMIND'			=> '당신의 계정과 연결된 이메일 주소여야 합니다. 사용자 제어판을 통해 변경하지 않은 경우 계정을 등록한 이메일 주소입니다.',
	'EMAIL_TAKEN_EMAIL'		=> '입력한 이메일 이미 사용중.',
	'EMPTY_DRAFT'			=> '메시지를 입력해서 변경을 제출하세요.',
	'EMPTY_DRAFT_TITLE'		=> '초안 제목을 입력하세요.',
	'EXPORT_AS_XML'			=> 'XML로 내보내기',
	'EXPORT_AS_CSV'			=> 'CSV로 내보내기',
	'EXPORT_AS_CSV_EXCEL'		=> 'CSV (Excel)로 내보내기',
	'EXPORT_AS_TXT'			=> 'TXT로 내보내기',
	'EXPORT_AS_MSG'			=> 'MSG로 내보내기',
	'EXPORT_FOLDER'			=> 'Export this view',

	'FIELD_REQUIRED'		=> '“%s” 필드를 완료하세요.',
	'FIELD_TOO_SHORT'		=> array(
		1	=> '“%2$s” 필드가 너무 짧습니다. 최소 %1$d 문자가 필요.',
		2	=> '“%2$s” 필드가 너무 짧습니다. 최소 %1$d 문자가 필요.',
	),
	'FIELD_TOO_LONG'		=> array(
		1	=> '“%2$s” 필드가 너무 깁니다. 최대 %1$d 문자 허용.',
		2	=> '“%2$s” 필드가 너무 깁니다. 최대 %1$d 문자 허용.',
	),
	'FIELD_TOO_SMALL'		=> '“%2$s” 값이 너무 작습니다. 최소값 %1$d .',
	'FIELD_TOO_LARGE'		=> '“%2$s” 값이 너무 작습니다. 최소값 %1$d .',
	'FIELD_INVALID_CHARS_INVALID'		=> '“%s” 필드에 유효하지 않은 문자 있음.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> '“%s” 필드에 유효하지 않은 문자 있음. 숫자만 허용.',
	'FIELD_INVALID_CHARS_ALPHA_DOTS'	=> '“%s” 필드에 유효하지 않은 문자 있음. 영숫자 또는 . 허용.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> '“%s” 필드에 유효하지 않은 문자 있음. 영숫자만 허용.',
	'FIELD_INVALID_CHARS_ALPHA_PUNCTUATION'	=> '“%s” 필드에 유효하지 않은 문자 있음.영숫자 _,- 만 허용. 첫 글자는 알파벳만.',
	'FIELD_INVALID_CHARS_ALPHA_SPACERS'	=> '“%s” 필드에 유효하지 않은 문자 있음. 영숫자, 공백 또는 -+_[] 만 허용.',
	'FIELD_INVALID_CHARS_ALPHA_UNDERSCORE'	=> '“%s” 필드에 유효하지 않은 문자 있음.영숫자, _ 허용.',
	'FIELD_INVALID_CHARS_LETTER_NUM_DOTS'	=> '“%s” 필드에 유효하지 않은 문자 있음.문자, 숫자 또는 . 허용.',
	'FIELD_INVALID_CHARS_LETTER_NUM_ONLY'	=> '“%s” 필드에 유효하지 않은 문자 있음.문자와 숫자만 허용.',
	'FIELD_INVALID_CHARS_LETTER_NUM_PUNCTUATION'	=> '“%s” 필드에 유효하지 않은 문자 있음.문자, 숫자 또는 _,- 허용. 첫 글자는 알파벳만.',
	'FIELD_INVALID_CHARS_LETTER_NUM_SPACERS'		=> 'The field “%s” has invalid characters, only letter, number, space or -+_[] characters are allowed.',
	'FIELD_INVALID_CHARS_LETTER_NUM_UNDERSCORE'		=> 'The field “%s” has invalid characters, only letter, number or _ characters are allowed.',
	'FIELD_INVALID_DATE'				=> 'The field “%s” has an invalid date.',
	'FIELD_INVALID_URL'					=> 'The field “%s” has an invalid url.',
	'FIELD_INVALID_VALUE'				=> 'The field “%s” has an invalid value.',

	'FOE_MESSAGE'				=> '적군에게 온 메시지',
	'FOES_EXPLAIN'				=> '적은 기본적으로 무시되는 사용자입니다. 이러한 사용자의 게시물은 완전히 표시되지 않습니다. 적의 개인 메시지는 여전히 허용됩니다. 중재자나 관리자는 무시할 수 없습니다 중재자, 관리자는 무시할 수 없음.',
	'FOES_UPDATED'				=> '적군 목록 업데이트 성공.',
	'FOLDER_ADDED'				=> '적군이 성공적으로 추가됨.',
	'FOLDER_MESSAGE_STATUS'		=> array(
		1 => '%1$s 중 %2$d 저장됨',
		2 => '%1$s 중 %2$d 저장됨',
	),
	'FOLDER_NAME_EMPTY'	=> '폴더 이름 입력하세요.',
	'FOLDER_NAME_EXIST'	=> '폴더 <strong>%s</strong> 이미 존재.',
	'FOLDER_OPTIONS'	=> '폴더 옵션',
	'FOLDER_RENAMED'	=> '폴더 이름 변경 성공.',
	'FOLDER_REMOVED'	=> '폴더 삭제 성공.',
	'FOLDER_STATUS_MSG'	=> array(
		1	=> 'Folder is %3$d%% full (%2$d out of %1$s stored)',
		2	=> 'Folder is %3$d%% full (%2$d out of %1$s stored)',
	),
	'FORWARD_PM'			=> 'PM 전달',
	'FORCE_PASSWORD_EXPLAIN'	=> '보드 탐색을 계속하려면 암호를 변경해야 합니다.',
	'FRIEND_MESSAGE'		=> '친구가 보낸 메시지',
	'FRIENDS'			=> '친구',
	'FRIENDS_EXPLAIN'	=> '친구는 자주 연락하는 회원에게 빠르게 접근할 수 있게 해줍니다. 템플릿에 관련 지원이 있는 경우 친구가 작성한 모든 게시물이 강조 표시될 수 있습니다.',
	'FRIENDS_OFFLINE'		=> '오프라인',
	'FRIENDS_ONLINE'		=> '온라인',
	'FRIENDS_UPDATED'		=> '친구 목록 업데이트 성공.',
	'FULL_FOLDER_OPTION_CHANGED'=> '폴더가 가득 찼을 때 할 행동 변경 성공.',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- 원본 메시지 --------',
	'FWD_SUBJECT'			=> '제목: %s',
	'FWD_DATE'			=> '날짜: %s',
	'FWD_FROM'			=> '발신: %s',
	'FWD_TO'			=> '수신: %s',

	'GLOBAL_ANNOUNCEMENT'		=> '전체 공지',

	'GRAVATAR_AVATAR_EMAIL'		=> '그라바타 이메일',
	'GRAVATAR_AVATAR_EMAIL_EXPLAIN'	=> '계정을 등록할 때 사용한 이메일 주소를 <a href="http://www.gravatar.com/">Gravatar</a>에 입력하세요>.',
	'GRAVATAR_AVATAR_SIZE'			=> 'Avatar dimensions',
	'GRAVATAR_AVATAR_SIZE_EXPLAIN'	=> '아바타의 너비와 높이를 지정하세요. 자동 인증을 시도하려면 비워두세요.',

	'HIDE_ONLINE'			=> '내 온라인 상태 숨김',
	'HIDE_ONLINE_EXPLAIN'		=> '이 설정 변경은 다음 로그인 때 적용됩니다.',
	'HOLD_NEW_MESSAGES'		=> '새 메시지를 수락하지 않음(충분한 공간이 확보될 때까지 새 메시지가 보류됨)',
	'HOLD_NEW_MESSAGES_SHORT'	=> '새 메시지 보류',

	'IF_FOLDER_FULL'		=> '폴더 가득 차면',
	'IMPORTANT_NEWS'		=> '중요 공지',
	'INVALID_USER_BIRTHDAY'		=> '생일이 유효하지 않음.',
	'INVALID_CHARS_USERNAME'	=> '사용자 이름에 금지된 문자가 포함되어 있습니다.',
	'INVALID_EMOJIS_USERNAME'	=> '사용자 이름에 금지된 문자(이모지)가 포함되어 있습니다.',
	'INVALID_CHARS_NEW_PASSWORD'=> '암호에 필요한 문자가 안 들어감.',
	'ITEMS_REQUIRED'		=> '*로 표시된 항목은 필수 프로필 필드이며 작성해야 합니다.',

	'JOIN_SELECTED'	=> 'Join selected',

	'LANGUAGE'			=> '언어',
	'LINK_REMOTE_AVATAR'		=> '외부 링크',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> '연결하려는 아바타 이미지가 있는 위치의 URL을 입력하세요.',
	'LINK_REMOTE_SIZE'		=> 'Avatar dimensions',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> '아바타의 너비와 높이를 지정하세요. 자동 인증을 시도하려면 비워두세요.',
	'LOGIN_EXPLAIN_UCP'		=> '사용자 제어판에 액세스하려면 로그인하십시오.',
	'LOGIN_LINK'			=> '보드 계정으로 외부 서비스에 계정을 연결 또는 등록',
	'LOGIN_LINK_EXPLAIN'	=> '이 보드의 계정에 아직 연결되지 않은 외부 서비스로 로그인을 시도했습니다. 이제 이 계정을 기존 계정에 연결하거나 새 계정을 만들어야 합니다.',
	'LOGIN_LINK_MISSING_DATA'	=> '당신의 계정을 외부 서비스와 연결하는 데 필요한 데이터를 사용할 수 없습니다. 로그인 프로세스를 다시 시작하십시오.',
	'LOGIN_LINK_NO_DATA_PROVIDED'	=> '외부 계정을 포럼 계정에 연결하기 위해 이 페이지에 제공된 데이터가 없습니다. 문제가 계속 발생하면 게시판 관리자에게 문의하세요.',
	'LOGIN_KEY'			=> '로그인 키',
	'LOGIN_TIME'		=> '로그인 시각',
	'LOGIN_REDIRECT'	=> '로그인 성공.',
	'LOGOUT_FAILED'		=> '요청이 세션과 일치하지 않아 로그아웃되지 않았습니다. 문제가 계속 발생하면 보드 관리자에게 문의하세요..',
	'LOGOUT_REDIRECT'	=> '로그 아웃 성공.',

	'MARK_IMPORTANT'		=> '중요한 것으로 표시/표시 해제',
	'MARKED_MESSAGE'		=> '표시된 메시지',
	'MAX_FOLDER_REACHED'		=> '허용된 사용자 정의 폴더의 최대 수에 도달했습니다.',
	'MESSAGE_BY_AUTHOR'		=> '글쓴이',
	'MESSAGE_COLOURS'		=> '메시지 색',
	'MESSAGE_DELETED'		=> '메시지 지워짐.',
	'MESSAGE_EDITED'		=> '메시지 편집됨.',
	'MESSAGE_HISTORY'		=> '메시지 역사',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> '이 메시지를 작성자가 지움.',
	'MESSAGE_REPORTED_MESSAGE'	=> '보고된 메시지',
	'MESSAGE_SENT_ON'		=> '켬',
	'MESSAGE_STORED'		=> '이 메시지 전송 성공.',
	'MESSAGE_TO'			=> '수신자',
	'MESSAGES_DELETED'		=> '메시지 삭제 성공',
	'MOVE_DELETED_MESSAGES_TO'	=> '제거된 폴더에서 다음으로 메시지 이동',
	'MOVE_DOWN'			=> '아래로',
	'MOVE_MARKED_TO_FOLDER'		=> '마크를 %s 로',
	'MOVE_PM_ERROR'			=> array(
		1	=> '메시지를 새 폴더로 이동하는 중 오류가 발생하여 %1$s 중 %2$d만 이동.',
		2	=> '메시지를 새 폴더로 이동하는 중 오류가 발생하여 %1$s 중 %2$d만 이동.',
	),
	'MOVE_TO_FOLDER'		=> '폴더로 이동',
	'MOVE_UP'			=> '위로',

	'NEW_FOLDER_NAME'		=> '새 폴더 이름',
	'NEW_PASSWORD'			=> '새 암호',
	'NEW_PASSWORD_CONFIRM_EMPTY'	=> '암호 확인을 입력하세요.',
	'NEW_PASSWORD_ERROR'		=> '암호가 일치하지 않음.',

	'NOTIFICATIONS_MARK_ALL_READ'		=> '알림을 모두 읽은 것으로 표시',
	'NOTIFICATIONS_MARK_ALL_READ_CONFIRM'	=> '알림을 모두 읽은 것으로 표시하겠습니까?',
	'NOTIFICATIONS_MARK_ALL_READ_SUCCESS'	=> '알림을 모두 읽은 것으로 표시했습니다.',
	'NOTIFICATION_GROUP_MISCELLANEOUS'	=> '기타 알림',
	'NOTIFICATION_GROUP_MODERATION'		=> '중재 알림',
	'NOTIFICATION_GROUP_ADMINISTRATION'	=> '관리 알림',
	'NOTIFICATION_GROUP_POSTING'		=> '글 알림',
	'NOTIFICATION_METHOD_BOARD'		=> '알림',
	'NOTIFICATION_METHOD_EMAIL'		=> '이메일',
	'NOTIFICATION_METHOD_JABBER'		=> 'Jabber',
	'NOTIFICATION_TYPE'			=> '알림 유형',
	'NOTIFICATION_TYPE_BOOKMARK'		=> '당신이 북마크한 주제에 누군가 답글을 달았습니다',
	'NOTIFICATION_TYPE_GROUP_REQUEST'	=> '당신이 이끄는 그룹에 누군가 답글을 달았습니다',
	'NOTIFICATION_TYPE_FORUM'		=> '당신이 가입한 포럼 주제에 누군가 답글을 달았습니다',
	'NOTIFICATION_TYPE_IN_MODERATION_QUEUE'	=> '글 또는 주제에 승인 필요',
	'NOTIFICATION_TYPE_MODERATION_QUEUE'	=> '토픽/게시물이 조정자에 의해 승인 또는 비승인되었습니다',
	'NOTIFICATION_TYPE_PM'			=> '누군가 당신에게 비공개 메시지를 보냈습니다',
	'NOTIFICATION_TYPE_POST'		=> '당신이 구독한 것에 누군가 답글을 달았습니다',
	'NOTIFICATION_TYPE_QUOTE'		=> '글에서 누군가 당신을 인용함',
	'NOTIFICATION_TYPE_REPORT'		=> '누군가 게시물 신고함',
	'NOTIFICATION_TYPE_REPORT_CLOSED'	=> '게시물 신고를 중재자가 종료했습니다',
	'NOTIFICATION_TYPE_REPORT_PM'		=> '비공개 메시지 신고',
	'NOTIFICATION_TYPE_REPORT_PM_CLOSED'	=> '비공개 메시지에 대한 당신의 신고를 중재자가 종료했습니다',
	'NOTIFICATION_TYPE_TOPIC'		=> '당신이 가입한 포럼에 다른 사람이 주제를 만듭니다',
	'NOTIFICATION_TYPE_ADMIN_ACTIVATE_USER'	=> '활성화 필요한 사용자',

	'NOTIFY_METHOD'				=> '알림 방식',
	'NOTIFY_METHOD_BOTH'			=> '둘 다',
	'NOTIFY_METHOD_EMAIL'			=> '이메일만',
	'NOTIFY_METHOD_EXPLAIN'			=> '이 보드를 통해 메시지를 보내는 방법.',
	'NOTIFY_METHOD_IM'				=> 'Jabber 전용',
	'NOTIFY_ON_PM'					=> '새 비공개 메시지 알림',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> '친구 목록에 익명의 사용자를 추가할 수 없습니다.',
	'NOT_ADDED_FRIENDS_BOTS'		=> '친구 목록에 봇을 추가할 수 없습니다.',
	'NOT_ADDED_FRIENDS_FOES'		=> '적 목록에 있는 사용자를 친구 목록에 추가할 수 없습니다.',
	'NOT_ADDED_FRIENDS_SELF'		=> '친구 목록에 자신을 추가할 수 없음.',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> '적 목록에 관리자와 중재자를 추가할 수 없습니다.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> '적 목록에 익명 사용자를 추가할 수 없습니다.',
	'NOT_ADDED_FOES_BOTS'			=> '봇을 적 목록에 추가할 수 없음.',
	'NOT_ADDED_FOES_FRIENDS'		=> '친구 목록에 있는 사용자를 적 목록에 추가할 수 없습니다.',
	'NOT_ADDED_FOES_SELF'			=> '적 목록에 자신을 추가할 수 없습니다.',
	'NOT_AGREE'				=> '이 조건에 동의하지 않음',
	'NOT_ENOUGH_SPACE_FOLDER'		=> '대상 폴더 “%s” 꽉 참. 요청한 작업 수행 안 됨.',
	'NOT_MOVED_MESSAGES'			=> array(
		1	=> '폴더가 꽉 찼기 때문에 현재 %d개의 개인 메시지가 보류 중입니다.',
		2	=> '폴더가 꽉 찼기 때문에 현재 %d개의 개인 메시지가 보류 중입니다.',
	),
	'NO_ACTION_MODE'		=> '지정된 메시지 동작이 없습니다.',
	'NO_AUTHOR'			=> '이 메시지에 정의된 작성자 없음',
	'NO_AVATAR'			=> '선택된 아바타 없으',
	'NO_AVATAR_CATEGORY'		=> '없음',

	'NO_AUTH_DELETE_MESSAGE'	=> '비공개 메시지 삭제 권한 없음.',
	'NO_AUTH_EDIT_MESSAGE'		=> '비공개 메시지 편집 권한 없음.',
	'NO_AUTH_FORWARD_MESSAGE'	=> '비공개 메시지 전달 권한 없음.',
	'NO_AUTH_GROUP_MESSAGE'		=> '비공개 메시지 그룹 전송 권한 없음.',
	'NO_AUTH_PROFILEINFO'		=> '프로필 정보 변경 권한 없음.',
	'NO_AUTH_READ_HOLD_MESSAGE'	=> '보류 중인 비공개 메시지를 읽을 권한이 없음.',
	'NO_AUTH_READ_MESSAGE'		=> '비공개 메시지를 읽을 권한이 없음.',
	'NO_AUTH_PRINT_MESSAGE'		=> '비공개 메시지를 프린트할 권한이 없음.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> '작성자가 삭제했기 때문에 이 메시지를 읽을 수 없습니다.',
	'NO_AUTH_SEND_MESSAGE'		=> '비공개 메시지를 보낼 권한이 없.',
	'NO_AUTH_SIGNATURE'		=> '서명 정의 권한 없음.',

	'NO_BCC_RECIPIENT'		=> '없음',
	'NO_BOOKMARKS'			=> '북마크 없음.',
	'NO_BOOKMARKS_SELECTED'		=> '선택한 북마크 없음.',
	'NO_EDIT_READ_MESSAGE'		=> '이미 읽었으므로 비공개 메시지를 편잡할 수 없음.',
	'NO_EMAIL_USER'			=> '제출된 이메일/사용자 이름 정보를 찾을 수 없습니다.',
	'EMAIL_NOT_UNIQUE'		=> '지정한 이메일은 여러 사용자가 사용하고 있습니다. 사용자 이름도 지정하세요.',
	'NO_FOES'			=> '정의된 적군 없음',
	'NO_FRIENDS'			=> '정의된 친구 없음',
	'NO_FRIENDS_OFFLINE'		=> '오프라인 친국 없음',
	'NO_FRIENDS_ONLINE'		=> '온라인 친구 없음',
	'NO_GROUP_SELECTED'		=> '지정 그룹 없음.',
	'NO_IMPORTANT_NEWS'		=> '종요 공지 없음.',
	'NO_MESSAGE'			=> '비공개 메시지 없음.',
	'NO_NEW_FOLDER_NAME'		=> '새 폴더 이름을 지정하세요.',
	'NO_NEWER_PM'			=> '새 메시지 없음.',
	'NO_OLDER_PM'			=> '오래된 메시지 없음.',
	'NO_PASSWORD_SUPPLIED'		=> '암호 없이 로그인 안 됨.',
	'NO_RECIPIENT'			=> '수신자 정의 안 됨.',
	'NO_RESET_TOKEN'		=> '암호 재설정 토큰 제공 안 함.',
	'NO_RULES_DEFINED'		=> '정의된 규칙 없음.',
	'NO_SAVED_DRAFTS'		=> '저장된 초안 없음.',
	'NO_TO_RECIPIENT'		=> '없음',
	'NO_WATCHED_FORUMS'		=> '가입한 포럼 없음.',
	'NO_WATCHED_SELECTED'		=> '구독 주제나 포럼을 선택 안 함.',
	'NO_WATCHED_TOPICS'		=> '구독 중인 주제 없음.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> '암호는 적어도 %1$s 이상, 대소문자 혼용 및 숫자 포함.',
	'PASS_TYPE_ANY_EXPLAIN'		=> '적어도 %1$s 길이.',
	'PASS_TYPE_CASE_EXPLAIN'	=> '암호는 최소 %1$s 이상이어야 하며 대소문자가 혼합된 문자를 포함해야 합니다.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> '암호는 최소 %1$s 이상이어야 하며 대소문자 혼용 문자, 숫자 및 기호를 포함해야 합니다.',
	'PASSWORD'			=> '암호',
	'PASSWORD_ACTIVATED'		=> '새 암호 활성화.',
	'PASSWORD_RESET'		=> '암호 재설정 성공.',
	'PASSWORD_RESET_LINK_SENT'	=> '계정이 존재하면, 등록된 이메일 주소로 암호 재설정 링크가 발송되었습니다. 이메일을 받지 못한 경우 차단되었거나, 계정이 활성화되지 않았거나, 짧은 기간 내에 여러 번 암호 재설정을 요청했거나, 암호 변경이 허용되지 않았기 때문일 수 있습니다. 이러한 이유 중 하나라도 해당되면 관리자에게 문의하십시오. 또한 스팸 필터를 확인하십시오.',
	'PERMISSIONS_RESTORED'		=> '성공적으로 원래 권한 복구.',
	'PERMISSIONS_TRANSFERRED'	=> '<strong>%s</strong>에서 권한을 성공적으로 전송했습니다. 이제 이 사용자의 권한으로 보드를 탐색할 수 있습니다.<br />관리자 권한이 전송되지 않았음을 유의하세요. 언제든지 권한 집합으로 되돌릴 수 있습니다.',
	'PM_DISABLED'			=> '이 보드에서 개인 메시지를 사용할 수 없습니다.',
	'PM_FROM'			=> '발신',
	'PM_FROM_REMOVED_AUTHOR'	=> '발신자는 등록 안 된 사람.',
	'PM_ICON'			=> 'PM 아이콘',
	'PM_INBOX'			=> '받은 편지함',
	'PM_MARK_ALL_READ'		=> '모든 메시지를 읽은 것으로 표시',
	'PM_MARK_ALL_READ_SUCCESS'	=> '이 폴더의 모든 비공개 메시지를 읽은 것으로 표시했습니다',
	'PM_NO_USERS'			=> '추가 요청한 사용자 없음.',
	'PM_OUTBOX'			=> '보낸 편지함',
	'PM_SENTBOX'			=> '보낸 메시지',
	'PM_SUBJECT'			=> '메시지 제목',
	'PM_TO'				=> '보내기',
	'PM_TOOLS'			=> '메시지 도구',
	'PM_USERS_REMOVED_NO_PERMISSION'	=> '일부 사용자는 비공개 메시지를 읽을 수 있는 권한이 없기 때문에 추가할 수 없습니다.',
	'PM_USERS_REMOVED_NO_PM'	=> '일부 사용자는 개인 메시지 수신을 비활성화했기 때문에 추가할 수 없습니다.',
	'POST_EDIT_PM'			=> '메시지 편집',
	'POST_FORWARD_PM'		=> '메시지 전달',
	'POST_NEW_PM'			=> '메시지 작성',
	'POST_PM_LOCKED'		=> '개인 메시지 잠김.',
	'POST_PM_POST'			=> '글 인용',
	'POST_QUOTE_PM'			=> '메시지 인용',
	'POST_REPLY_PM'			=> '메시지 답장',
	'PRINT_PM'			=> '인쇄 보기',
	'PREFERENCES_UPDATED'		=> '기본설정 업데이트 됨.',
	'PROFILE_INFO_NOTICE'		=> '이 정보는 다른 회원이 볼 수 있습니다. 개인 정보를 포함할 때 주의하십시오. * 표시가 있는 필드는 모두 작성해야 합니다.',
	'PROFILE_UPDATED'		=> '프로필 업데이트 됨.',
	'PROFILE_AUTOLOGIN_KEYS'	=> '게시판을 방문하면 "Remember Me" 로그인 키가 자동으로 로그인됩니다. 로그아웃하면 로그아웃에 사용하는 컴퓨터에서만 Remember Me 로그인 키가 삭제됩니다. 여기에서 이 사이트에 액세스하는 데 사용한 다른 컴퓨터에서 생성된 로그인 키 기억을 볼 수 있습니다.',
	'PROFILE_NO_AUTOLOGIN_KEYS'	=> '저장된 "Remember Me" 로그인 키 없음.',

	'RECIPIENT'			=> '수신',
	'RECIPIENTS'			=> '수신',
	'REGISTRATION'			=> '등록',
	'OAUTH_REGISTRATION'		=> '외부 서비스 이용한 등록',
	'RELEASE_MESSAGES'		=> '%s보류 중인 모든 메시지를 해제합니다%s... 충분한 공간이 확보되면 적절한 폴더로 다시 정렬됩니다.',
	'REMOVE_ADDRESS'			=> '주소 삭제',
	'REMOVE_SELECTED_BOOKMARKS'		=> '선택한 북마크 제거',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> '선택한 북마크를 모두 없애겠습니까?',
	'REMOVE_BOOKMARK_MARKED'		=> '표시된 북마크 없앰',
	'REMOVE_FOLDER'				=> '폴더 제거',
	'REMOVE_FOLDER_CONFIRM'			=> '이 폴더를 없애겠습니까?',
	'RENAME'				=> '이름바꿈',
	'RENAME_FOLDER'				=> '폴더 이름 바꿈',
	'REPLIED_MESSAGE'			=> '메시지에 답장',
	'REPLY_TO_ALL'				=> '발신자 및 모든 수신자에게 답장.',
	'REPORT_PM'				=> '비공개 메시지 신고',
	'RESET_PASSWORD'			=> '암호 재설정',
	'RESET_TOKEN_EXPIRED_OR_INVALID'	=> '제공한 암호 재설정 토큰이 유효하지 않거나 만료되었습니다.',
	'RESIGN_SELECTED'			=> '사퇴 선택',
	'RETURN_FOLDER'				=> '%1$s이전 폴더로 돌아가기%2$s',
	'RETURN_UCP'				=> '%s사용자 제어판%s으로 돌아가기',
	'RULE_ADDED'				=> '규칙 추가 성공.',
	'RULE_ALREADY_DEFINED'			=> '이 규칙은 이전에 정의되었습니다.',
	'RULE_DELETED'				=> '규칙 제거 성공.',
	'RULE_LIMIT_REACHED'			=> '더 이상 PM 규칙을 추가할 수 없습니다. 최대 규칙 수에 도달했습니다.',
	'RULE_NOT_DEFINED'			=> '규칙이 올바르게 지정되지 않았습니다.',
	'RULE_REMOVED_MESSAGES'			=> array(
		1	=> '개인 메시지 필터로 인해 %d 개인 메시지가 제거되었습니다.',
		2	=> '개인 메시지 필터로 인해 %d 개인 메시지가 제거되었습니다..',
	),

	'SAME_PASSWORD_ERROR'	=> '새 암호와 현재 암호가 같습니다.',
	'SEARCH_YOUR_POSTS'	=> '게시물 보기',
	'SENT_AT'		=> '보냄',			// Used before dates in private messages
	'SHOW_EMAIL'		=> '사용자는 이메일로 나에게 연락할 수 있습니다',
	'SIGNATURE_EXPLAIN'	=> '게시물에 추가할 수 있는 텍스트 블록입니다. %d자 제한이 있습니다.',
	'SIGNATURE_PREVIEW'	=> '서명이 게시물에 이렇게 나옵니다',
	'SIGNATURE_TOO_LONG'	=> '서명이 너무 깁니다.',
	'SELECT_CURRENT_TIME'	=> '현재 시간 선택',
	'SELECT_TIMEZONE'	=> '시간대 선택',
	'SORT'			=> '정렬',
	'SORT_COMMENT'		=> '파일 주석',
	'SORT_DOWNLOADS'	=> '다운로드',
	'SORT_EXTENSION'	=> '확장',
	'SORT_FILENAME'		=> '파일명',
	'SORT_POST_TIME'	=> '글 쓴 시간',
	'SORT_SIZE'		=> '파일 크기',

	'TIMEZONE'		=> '시간대',
	'TIMEZONE_DATE_SUGGESTION'	=> '제안: %s',
	'TIMEZONE_INVALID'		=> '선택한 시간대 잘못됨.',
	'TO'				=> '수신',
	'TO_MASS'			=> '수신',
	'TO_ADD'			=> '수신 추가',
	'TO_ADD_MASS'			=> '수신 추가',
	'TO_ADD_GROUPS'			=> '그룹 추가',
	'TOO_MANY_RECIPIENTS'		=> '비공개 메시지를 너무 많은 수신자에게 보내려고 했습니다.',
	'TOO_MANY_REGISTERS'		=> '이 세션에 대한 최대 등록 시도 횟수를 초과했습니다. 나중에 다시 시도 해주십시오.',

	'UCP'				=> '사용자 제어판',
	'UCP_ACTIVATE'			=> '계정 활성',
	'UCP_ADMIN_ACTIVATE'		=> '계정이 활성화되기 전에 유효한 이메일 주소를 입력해야 합니다. 관리자가 당신의 계정을 검토하고 승인되면 당신가 지정한 주소로 이메일을 받게 됩니다.',
	'UCP_ATTACHMENTS'		=> '첨부',
	'UCP_AUTH_LINK'			=> '외부 계정',
	'UCP_AUTH_LINK_ASK'		=> '현재 이 외부 서비스와 연결된 계정이 없습니다. 이 외부 서비스를 사용하여 보드 계정을 계정에 연결하려면 아래 버튼을 클릭하십시오.',
	'UCP_AUTH_LINK_ID'		=> '유일 ID',
	'UCP_AUTH_LINK_LINK'		=> '링크',
	'UCP_AUTH_LINK_MANAGE'		=> '외부 계정 연결 관리',
	'UCP_AUTH_LINK_NOT_SUPPORTED'	=> '보드 계정을 외부 서비스에 연결하는 것은 이 보드의 현재 인증 방법에서 지원되지 않습니다.',
	'UCP_AUTH_LINK_TITLE'		=> '외부 계정 연결 관리',
	'UCP_AUTH_LINK_UNLINK'		=> '링크 해제',
	'UCP_COPPA_BEFORE'		=> '%s 전',
	'UCP_COPPA_ON_AFTER'		=> '%s 이후',
	'UCP_EMAIL_ACTIVATE'		=> '계정이 활성화되기 전에 유효한 이메일 주소를 입력해야 합니다. 제공한 주소로 계정 활성화 링크가 포함된 이메일을 받게 됩니다.',
	'UCP_JABBER'			=> 'Jabber 주소',
	'UCP_LOGIN_LINK'		=> '외부 계정 연결 설정',

	'UCP_MAIN'			=> '개관',
	'UCP_MAIN_ATTACHMENTS'		=> '첨부 관리',
	'UCP_MAIN_BOOKMARKS'		=> '북마크 관리',
	'UCP_MAIN_DRAFTS'		=> '초안 관리',
	'UCP_MAIN_FRONT'		=> '첫 페이지',
	'UCP_MAIN_SUBSCRIBED'		=> '구독 관리',

	'UCP_NO_ATTACHMENTS'		=> '글 쓴 파일 없음.',

	'UCP_NOTIFICATION_LIST'		=> '알림 관리',
	'UCP_NOTIFICATION_LIST_EXPLAIN'	=> '지난 알람 모두 보기.',
	'UCP_NOTIFICATION_OPTIONS'	=> '알림 옵션 수정',
	'UCP_NOTIFICATION_OPTIONS_EXPLAIN'	=> '여기에서 게시판에 기본 알림 방법을 설정할 수 있습니다.',

	'UCP_PREFS'			=> '보드 기본 설정',
	'UCP_PREFS_PERSONAL'		=> '글로벌 설정 편집',
	'UCP_PREFS_POST'		=> '글 기본 편집',
	'UCP_PREFS_VIEW'		=> '표시 옵션 편집',
	'UCP_PM'			=> '비공개 메시지',
	'UCP_PM_COMPOSE'		=> '메시지 작성',
	'UCP_PM_DRAFTS'			=> 'PM 초안 관리',
	'UCP_PM_OPTIONS'		=> '규칙, 폴더 &amp; 설정',
	'UCP_PM_UNREAD'			=> '안 읽은 메시지',
	'UCP_PM_VIEW'			=> '메시지 보기',

	'UCP_PROFILE'			=> '프로필',
	'UCP_PROFILE_AVATAR'		=> '아바타 편집',
	'UCP_PROFILE_PROFILE_INFO'	=> '프로필 편집',
	'UCP_PROFILE_REG_DETAILS'	=> '계정 설정 편집',
	'UCP_PROFILE_SIGNATURE'		=> '서명 편집',
	'UCP_PROFILE_AUTOLOGIN_KEYS'	=> ' “Remember Me” 로그인 키 관리',

	'UCP_USERGROUPS'		=> '사용자 그룹',
	'UCP_USERGROUPS_MEMBER'		=> '멤버십 편집',
	'UCP_USERGROUPS_MANAGE'		=> '그룹 관리',

	'UCP_PASSWORD_RESET_DISABLED'	=> '암호 초기화 기능이 비활성화되었습니다. 계정에 액세스하는 데 도움이 필요하면 %s보드 관리자%s에게 문의하세요',
	'UCP_REGISTER_DISABLE'		=> '새 계정 만들기 현재 불가.',
	'UCP_RESEND'			=> '활성화 메일 보내기',
	'UCP_WELCOME'			=> '사용자 제어판에 오신 것을 환영합니다. 여기에서 프로필, 기본 설정, 가입한 포럼 및 주제를 모니터링하고 보고 업데이트할 수 있습니다. 다른 사용자에게 메시지를 보낼 수도 있습니다(허용된 경우). 계속하기 전에 모든 공지사항을 읽어보시기 바랍니다.',
	'UCP_ZEBRA'			=> '친구 &amp; 적군',
	'UCP_ZEBRA_FOES'		=> '적군 관리',
	'UCP_ZEBRA_FRIENDS'		=> '친구 관리',
	'UNDISCLOSED_RECIPIENT'		=> '비공개 수신자',
	'UNKNOWN_FOLDER'		=> '폴더 모름',
	'UNWATCH_MARKED'		=> '시청취소 표시',
	'UPLOAD_AVATAR_FILE'		=> '컴에서 업로드',
	'UPLOAD_AVATAR_URL'		=> 'URL에서 URL 얻기',
	'UPLOAD_AVATAR_URL_EXPLAIN'	=> '이미지가 포함된 위치의 URL을 입력하세요. 이미지가 이 사이트에 복사됩니다.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> '사용자명은 %1$s 에서 %2$s 영숫자만 가능.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> '사용자명은 %1$s 에서 %2$s 영숫자, 공백 또는 -+_[] 문자 가능.',
	'USERNAME_ASCII_EXPLAIN'	=> '사용자 이름은 %1$s에서 %2$s 사이여야 하며 특수 기호가 아닌 ASCII 문자만 사용해야 합니다.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> '사용자 이름은 %1$s에서 %2$s 사이여야 하며 문자 또는 숫자만 사용할 수 있습니다.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> '사용자 이름은 %1$s에서 %2$s 사이여야 하며 문자, 숫자, 공백 또는 -+_[] 문자를 사용해야 합니다.',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> '길이는 %1$s 에서 %2$s 사이여야 합니다.',
	'USERNAME_TAKEN_USERNAME'	=> '입력한 사용자 이름은 이미 사용 중입니다. 다른 이름을 선택하십시오.',
	'USERNAME_DISALLOWED_USERNAME'	=> '입력한 사용자 이름은 허용되지 않았거나 허용되지 않는 단어가 포함되어 있습니다. 다른 이름을 선택하십시오.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> '지정한 사용자 이름을 찾을 수 없거나 활성화된 사용자가 아닙니다.',

	'VIEW_AVATARS'				=> '아바타 표시',
	'VIEW_EDIT'				=> '보기/편집',
	'VIEW_FLASH'				=> '플래시 표시',
	'VIEW_IMAGES'				=> '글 안에 이미지 표시',
	'VIEW_NEXT_HISTORY'			=> '다음 PM in history',
	'VIEW_NEXT_PM'				=> '다음 PM',
	'VIEW_PM'				=> '메시지 보기',
	'VIEW_PM_INFO'				=> '메시지 상세',
	'VIEW_PM_MESSAGES'			=> array(
		1	=> '%d 메시지',
		2	=> '%d 메시지',
	),
	'VIEW_PREVIOUS_HISTORY'		=> '이전 PM 히스토리에서',
	'VIEW_PREVIOUS_PM'		=> '이전 PM',
	'VIEW_PROFILE'			=> '프로필 보기',
	'VIEW_SIGS'			=> '서명 표시',
	'VIEW_SMILIES'			=> '스마일리를 이미지로',
	'VIEW_TOPICS_DAYS'		=> '지난 날 주제 표시',
	'VIEW_TOPICS_DIR'		=> '주제 순서 방향 표시',
	'VIEW_TOPICS_KEY'		=> '주제 순서 방향',
	'VIEW_POSTS_DAYS'		=> '이전 글 보기',
	'VIEW_POSTS_DIR'		=> '글 정렬 방향',
	'VIEW_POSTS_KEY'		=> '글 정렬 기준',

	'WATCHED_EXPLAIN'		=> '다음은 당신이 구독 중인 포럼 및 주제 목록입니다. 둘 중 하나에서 새 게시물에 대한 알림을 받게 됩니다. 구독을 취소하려면 포럼이나 주제를 표시한 다음 <em>표시된 보기 해제</em> 버튼을 누르세요.',
	'WATCHED_FORUMS'		=> '본 포럼',
	'WATCHED_TOPICS'		=> '본 주제',
	'WRONG_ACTIVATION'		=> '제공한 활성화 키가 데이터베이스 어떤 것과도 일치 안 합니다.',

	'YOUR_DETAILS'			=> '내 활동',
	'YOUR_FOES'			=> '내 적군',
	'YOUR_FOES_EXPLAIN'		=> '사용자 이름을 제거하려면 사용자 이름을 선택하고 제출을 클릭하세요.',
	'YOUR_FRIENDS'			=> '내 친구',
	'YOUR_FRIENDS_EXPLAIN'		=> '사용자 이름을 제거하려면 사용자 이름을 선택하고 제출을 클릭하세요.',
	'YOUR_WARNINGS'			=> '경고 수준',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> '폴더에 넣기',
		'MARK_AS_READ'		=> '읽은 것으로 표시',
		'MARK_AS_IMPORTANT'	=> '메시지 표시',
		'DELETE_MESSAGE'	=> '메시지 삭제',
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> '제목',
		'SENDER'	=> '발신자',
		'MESSAGE'	=> '메시지',
		'STATUS'	=> '메시지 상태',
		'TO'		=> '수신',
	),

	'PM_RULE'      => array(
	'IS_LIKE'      => '같다',
	'IS_NOT_LIKE'  => '같지 않다',
	'IS'           => '이다',
	'IS_NOT'       => '아니오',
	'BEGINS_WITH'  => '시작',
	'ENDS_WITH'    => '다음으로 끝남',
	'IS_FRIEND'    => '친구입니다',
	'IS_FOE'       => '적이다',
	'IS_USER'      => '사용자',
	'IS_GROUP'     => '사용자 그룹에 있음',
	'ANSWERED'     => '답변',
	'FORWARDED'    => '전달됨',
	'TO_GROUP'     => '내 기본 사용자 그룹으로',
	'TO_ME'        => '나에게',
	),	

	'GROUPS_EXPLAIN'	=> '게시판 관리자는 사용자 그룹을 통해 사용자를 더 잘 관리할 수 있습니다. 기본적으로 특정 그룹에 배치되며 이것이 기본 그룹입니다. 이 그룹은 예를 들어 사용자 이름 색상, 아바타, 순위 등 다른 사용자에게 표시되는 방식을 정의합니다. 관리자의 허용 여부에 따라 기본 그룹을 변경할 수 있습니다. 다른 그룹에 배치되거나 가입이 허용될 수도 있습니다. 일부 그룹은 콘텐츠를 보거나 다른 영역에서 기능을 향상할 수 있는 추가 권한을 부여할 수 있습니다.',
	'GROUP_LEADER'		=> '리더십',
	'GROUP_MEMBER'		=> '멤버십',
	'GROUP_PENDING'		=> '보류 멤버십',
	'GROUP_NONMEMBER'	=> '비회원',
	'GROUP_DETAILS'		=> '그룹 상세',

	'NO_LEADER'		=> '그룹 리더십 없음',
	'NO_MEMBER'		=> '그룹 멤버십 없음',
	'NO_PENDING'	=> '보류 멤버십 없음',
	'NO_NONMEMBER'	=> '비회원 그룹 없음',
));