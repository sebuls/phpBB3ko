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

$lang = array_merge($lang, array(
	'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'	=> '각 보드 관리자는 특정 첨부 파일 유형을 허용하거나 허용하지 않을 수 있습니다. 업로드 할 내용이 확실하지 않으면 관리자에게 연락하여 도움을 요청하십시오.',
	'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION'	=> '어떤 첨부가 이 보드에서 허용되나요?',
	'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'	=> '업로드 한 첨부 파일 목록을 찾으려면 사용자 제어판으로 이동하여 첨부 파일 섹션으로 이동하십시오.',
	'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'	=> '모든 첨부 파일을 어떻게 찾나요?',

	'HELP_FAQ_BLOCK_ATTACHMENTS'	=> '첨부 파일',
	'HELP_FAQ_BLOCK_BOOKMARKS'	=> '구독 및 북마크',
	'HELP_FAQ_BLOCK_FORMATTING'	=> '서식 및 주제 유형',
	'HELP_FAQ_BLOCK_FRIENDS'	=> '친구와 적',
	'HELP_FAQ_BLOCK_GROUPS'	=> '사용자 수준 및 그룹',
	'HELP_FAQ_BLOCK_ISSUES'	=> 'phpBB 이슈',
	'HELP_FAQ_BLOCK_LOGIN'	=> '로그인 및 등록 Issues',
	'HELP_FAQ_BLOCK_PMS'	=> '개인 메시지',
	'HELP_FAQ_BLOCK_POSTING'	=> '게시 이슈',
	'HELP_FAQ_BLOCK_SEARCH'	=> '포럼 검색',
	'HELP_FAQ_BLOCK_USERSETTINGS'	=> '사용자 선호 및 설정',

	'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'	=> 'HPBB 3.0에서 북마크 주제는 웹 브라우저에서 북마크와 같이 작동했습니다. 업데이트가 있을 때 경고를받지 않았습니다. PHPBB 3.1 기준으로 북마크는 주제를 구독하는 것과 비슷합니다. 북마크 된 주제가 업데이트되면 알릴 수 있습니다. 그러나 가입은 보드 주제 또는 포럼에 대한 업데이트가 있을 때 알려줍니다. 북마크 및 구독에 대한 알림 옵션은 사용자 제어판에서 "보드 기본 설정"에 따라 구성할 수 있습니다.',
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION'	=> '북마크와 가입의 차이점은?',
	'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'	=> '특정 포럼을 구독하려면 페이지 하단의“Subscribe Forum”링크를 클릭하십시오.',
	'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'	=> '특정 포럼을 구독하려면 어떻게 하나요?',
	'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'	=> '구독 취소하려면 사용자 제어판으로 이동하여 구독 링크를 따라 가십시오.',
	'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'	=> '어떻게 구독 취소 하나요?',
	'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'	=> '주제 토론의 상단과 하단 근처에 편리하게 위치한“주제 도구”메뉴에서 적절한 링크를 클릭하여 특정 주제를 북마크하거나 구독할 수 있습니다. 게시 된 옵션 확인 된 옵션도 주제를 구독합니다.',
	'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'	=> '특정 주제를 북마크하거나 구독하려면?',

	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'	=> '공지사항에는 종종 현재 읽고있는 포럼에 대한 중요한 정보가 있으며 가능할 때마다 읽어야합니다. 공지 사항은 게시 된 포럼의 모든 페이지 상단에 나타납니다. 글로벌 공지 사항과 마찬가지로 보드 관리자는 공지권한을 부여합니다.',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'	=> '공지사항은 무엇인가요?',
	'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'	=> 'BBCode는 HTML의 특수 구현으로 게시물의 특정 객체에 대한 훌륭한 형식 제어를 제공합니다. BBCode의 사용은 관리자가 부여하지만 게시 양식에서 게시물 당 비활성화 할 수도 있습니다. BBCode 자체는 HTML과 스타일이 비슷하지만 태그는 &lt 및 &gt;가 아닌 사각형 브래킷으로 둘러싸여 있습니다. BBCode에 대한 자세한 내용은 게시 페이지에서 액세스 할 수 있는 안내서를 참조하십시오.',
	'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'	=> 'BBCode는 무엇인가요?',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'	=> '글로벌 공지에는 중요한 정보가 있으며 가능할 때마다 읽어야합니다. 모든 포럼의 맨 위와 사용자 제어판에 나타납니다. 보드 관리자는 글로벌 공지 권한을 부여합니다.',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION'	=> '글로벌 공지는 무엇인가요?',
	'HELP_FAQ_FORMATTING_HTML_ANSWER'	=> '아니요.이 보드에 HTML을 게시할 수 없으며 HTML로 렌더링 할 수 없습니다. HTML을 사용하여 수행할 수 있는 대부분의 서식은 BBCode를 사용하여 적용할 수 있습니다.',
	'HELP_FAQ_FORMATTING_HTML_QUESTION'	=> 'HTML 사용할 수 있나요?',
	'HELP_FAQ_FORMATTING_ICONS_ANSWER'	=> '주제 아이콘은 컨텐츠를 나타내는 게시물과 관련된 작성자 선택 이미지입니다. 주제 아이콘을 사용하는 기능은 보드 관리자가 설정 한 권한에 따라 다릅니다.',
	'HELP_FAQ_FORMATTING_ICONS_QUESTION'	=> '주제 아이콘은 무엇인가요?',
	'HELP_FAQ_FORMATTING_IMAGES_ANSWER'	=> '예, 이미지는 게시물에 표시될 수 있습니다. 관리자가 첨부 파일을 허용한 경우 이미지를 보드에 업로드 할 수 있습니다. 그렇지 않으면 공개적으로 액세스 할 수 있는 웹 서버에 저장된 이미지 (예: http://www.example.com/my-picture.gif. 자신의 PC에 저장된 사진 (공개적으로 액세스 가능한 서버가 아닌 한) 또는 인증 메커니즘 뒤에 저장된 이미지에 링크 할 수 없습니다 (예 : Hotmail 또는 Yahoo 사서함, 비밀번호 보호 사이트 등. 이미지를 표시하려면 BBCode [img] 태그를 사용하십시오.',
	'HELP_FAQ_FORMATTING_IMAGES_QUESTION'	=> '이미지를 게시할 수 있나요?',
	'HELP_FAQ_FORMATTING_LOCKED_ANSWER'	=> '잠긴 주제는 사용자가 더 이상 응답할 수 없는 주제이며 포함된 여론 조사는 자동으로 종료되었습니다. 주제는 여러 가지 이유로 잠겨있을 수 있으며 포럼 중재자 또는 보드 관리자가 이런 식으로 설정했습니다. 보드 관리자가 부여한 권한에 따라 자신의 주제를 잠글 수 있습니다.',
	'HELP_FAQ_FORMATTING_LOCKED_QUESTION'	=> '잠긴 주제는?',
	'HELP_FAQ_FORMATTING_SMILIES_ANSWER'	=> '스마일리 또는 이모티콘은 짧은 코드를 사용하여 감정을 표현하는 데 사용할 수 있는 작은 이미지입니다. 예를 들어 :)는 행복을 의미하는 반면 :(는 슬픔을 의미합니다. 이모티콘의 전체 목록은 게시 양식에서 볼 수 있습니다. 그러나 스ㅁ일리는 게시물을 읽을 수 없게 빠르게 만들 수 있고 진행자는 게시물을 편집하거나 게시물을 완전히 제거할 수 있으므로 과도하게 사용하지 마십시오. 게시물 관리자는 게시물 내에서 사용할 수 있는 스마일리 수에 제한을 두었을 수도 있습니다.',
	'HELP_FAQ_FORMATTING_SMILIES_QUESTION'	=> '스마일리는 무엇인가요?',
	'HELP_FAQ_FORMATTING_STICKIES_ANSWER'	=> '포럼 내의 고정토픽 주제는 공지 사항 아래에 있으며 첫 페이지에만 나타납니다. 그들은 종종 매우 중요하므로 가능할 때마다 읽어야합니다. 공지 및 글로벌 공지 사항과 마찬가지로 보드 관리자는 고정토픽 주제 권한을 부여합니다.',
	'HELP_FAQ_FORMATTING_STICKIES_QUESTION'	=> '고정토픽은?',

	'HELP_FAQ_FRIENDS_BASIC_ANSWER'	=> '이 목록을 사용하여 보드의 다른 구성원을 구성 할 수 있습니다. 친구 목록에 추가 된 회원은 사용자 제어판 내에 나열되어 온라인 상태를보고 개인 메시지를 보내려면 빠른 액세스 권한이 있습니다. 템플릿 지원에 따라이 사용자의 게시물도 강조 표시 될 수 있습니다. 사용자 목록에 사용자를 추가하면 기본적으로 게시물이 숨겨집니다이 목록을 사용하여 보드의 다른 구성원을 구성 할 수 있습니다. 친구 목록에 추가 된 회원은 사용자 제어판 내에 나열되어 온라인 상태를보고 개인 메시지를 보내려면 빠른 액세스 권한이 있습니다. 템플릿 지원에 따라이 사용자의 게시물도 강조 표시 될 수 있습니다. 사용자 목록에 사용자를 추가하면 기본적으로 게시물이 숨겨집니다.',
	'HELP_FAQ_FRIENDS_BASIC_QUESTION'	=> '친구 및 적 목록은?',
	'HELP_FAQ_FRIENDS_MANAGE_ANSWER'	=> '두 가지 방법으로 사용자를 목록에 추가 할 수 있습니다. 각 사용자의 프로필 내에는 친구 또는 적 목록에 추가 할 수있는 링크가 있습니다. 또는 사용자 제어판에서 회원 이름을 입력하여 직접 추가 할 수 있습니다. 같은 페이지를 사용하여 목록에서 사용자를 제거 할 수도 있습니다.',
	'HELP_FAQ_FRIENDS_MANAGE_QUESTION'	=> '친구 또는 적 목록에 사용자를 추가 / 제거하려면?',

	'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'	=> 'A관리자는 전체 보드에 대한 최고 수준의 제어 기능을 갖춘 회원입니다. 이 멤버는 권한 설정, 사용자 금지, 사용자 그룹 또는 중재자 생성 등, 보드 설립자 및 다른 관리자에게 어떤 권한을 부여한 지 등 모든 보드 작업 측면을 제어 할 수 있습니다. 또한 보드 설립자가 제시 한 설정에 따라 모든 포럼에서 완전한 중재자 기능을 가질 수 있습니다.',
	'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'	=> '관리자는?',
	'HELP_FAQ_GROUPS_COLORS_ANSWER'	=> '보드 관리자는이 그룹의 구성원을 쉽게 식별 할 수 있도록 사용자 그룹 구성원에게 색상을 할당 할 수 있습니다.',
	'HELP_FAQ_GROUPS_COLORS_QUESTION'	=> '왜 사용자 그룹이 다른 색인가요?',
	'HELP_FAQ_GROUPS_DEFAULT_ANSWER'	=> '하나 이상의 사용자 그룹의 구성원 인 경우 기본값은 기본적으로 어떤 그룹 색상 및 그룹 순위를 표시 해야하는지 결정하는 데 사용됩니다. 보드 관리자는 사용자 제어판을 통해 기본 사용자 그룹을 변경할 수있는 권한을 부여 할 수 있습니다.',
	'HELP_FAQ_GROUPS_DEFAULT_QUESTION'	=> '“Default usergroup”은?',
	'HELP_FAQ_GROUPS_MODERATORS_ANSWER'	=> '중재자는 매일 포럼을 돌보는 개인 (또는 개인 그룹)입니다. 그들은 포럼에서 게시물을 편집하거나 삭제하고 포럼에서 주제를 잠금 해제, 잠금 해제, 이동, 삭제 및 분할 할 권한이 있습니다. 일반적으로, 중재자는 사용자가 주제를 벗어나거나 학대 또는 공격 자료를 게시하는 것을 막기 위해 존재합니다..',
	'HELP_FAQ_GROUPS_MODERATORS_QUESTION'	=> '중재자는?',
	'HELP_FAQ_GROUPS_TEAM_ANSWER'	=> '이 페이지에서는 보드 관리자 및 중재자 및 중재 포럼과 같은 기타 세부 사항을 포함한 보드 직원 목록을 제공합니다..',
	'HELP_FAQ_GROUPS_TEAM_QUESTION'	=> '“팀” 링크는?',
	'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'	=> '사용자 그룹은 커뮤니티를 관리 가능한 섹션으로 나누는 그룹입니다. 보드 관리자가 작업 할 수 있습니다. 각 사용자는 여러 그룹에 속할 수 있으며 각 그룹은 개별 권한을 할당 할 수 있습니다. 이를 통해 관리자가 중재자 권한 변경 또는 사용자에게 개인 포럼에 대한 액세스 권한 부여와 같은 많은 사용자의 권한을 한 번에 변경하는 쉬운 방법을 제공합니다..',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'	=> '사용자 제어판 내 "사용자 그룹"링크를 통해 모든 사용자 그룹을 볼 수 있습니다. 하나에 가입하려면 적절한 버튼을 클릭하여 진행하십시오. 그러나 모든 그룹에 공개 액세스가있는 것은 아닙니다. 일부는 가입 승인이 필요할 수 있고, 일부는 폐쇄되었으며 일부는 숨겨진 멤버십을 가질 수도 있습니다. 그룹이 열려 있으면 적절한 버튼을 클릭하여 결합 할 수 있습니다. 그룹이 가입 승인이 필요한 경우 적절한 버튼을 클릭하여 가입을 요청할 수 있습니다. 사용자 그룹 리더는 당신의 요청을 승인해야하며 그룹에 가입하려는 이유를 물어볼 수 있습니다. 요청을 거부하면 그룹 리더를 괴롭히지 마십시오. 그들은 그들의 이유를 가질 것입니다..',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION'	=> '사용자 그룹은 어디에 있으며 어떻게 가입하나요?',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'	=> '사용자 그룹 리더는 일반적으로 사용자 그룹이 처음에 보드 관리자가 생성할 때 할당됩니다. 사용자 그룹 생성에 관심 있으면 첫 번째 연락처는 관리자이어야합니다. 개인 메시지를 보내십시오.',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION'	=> '사용자 그룹 리더가 되려면?',
	'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'	=> '사용자 그룹은 무엇인가요?',

	'HELP_FAQ_ISSUES_ADMIN_ANSWER'	=> '보드의 모든 사용자는 보드 관리자가 옵션을 활성화 한 경우“Contact us”양식을 사용할 수 있습니다. <br /> 보드 구성원은“The team”링크를 사용할 수도 있습니다.',
	'HELP_FAQ_ISSUES_ADMIN_QUESTION'	=> '보드 관리자에게 어떻게 연락?',
	'HELP_FAQ_ISSUES_FEATURE_ANSWER'	=> '이 소프트웨어는 PHPBB Limited를 통해 작성되었으며 라이센스가 부여되었습니다. 기능을 추가해야한다고 생각되면 기존 아이디어를 발전 시키거나 새로운 기능을 제안 할 수있는 <a href="https://www.phpbb.com/ideas/"> Phpbb 아이디어 센터</a>를 방문하십시오.',
	'HELP_FAQ_ISSUES_FEATURE_QUESTION'	=> '왜 X 기능을 사용할 수없나요?',
	'HELP_FAQ_ISSUES_LEGAL_ANSWER'	=> '“The team” 페이지에 나열된 관리자는 불만 사항에 적합한 연락 지점이어야합니다. 이것이 여전히 응답이 없다면 도메인의 소유자에게 연락해야 합니다 (<a href="http://www.google.com/search?q=whois"> whois hookup </a>) 또는 if. 해당 서비스의 관리 또는 남용 부서 인 무료 서비스 (예 : Yahoo!, Free.Fr, F2S.com 등)에서 실행됩니다. PHPBB Limited는 <strong> 관할권</strong>이 없으며 이 보드가 어떻게, 어디서 사용되는지에 대해 어떤 식 으로든 책임을지지 않습니다. PHPBB.com 웹 사이트 또는 PHPBB 자체의 이산 소프트웨어와 <strong>직접 관련 없는</strong> 법적 (중단 및 원치 않는 책임, 명예 훼손 의견 등)과 관련하여 PHPBB 제한에 연락하지 마십시오. 이 소프트웨어의 타사에 대해 PHPBB Limited에 이메일을 보내면 소프트웨어의 사용에 대해서는 간결한 응답 또는 전혀 응답이 없을 겁니다.',
	'HELP_FAQ_ISSUES_LEGAL_QUESTION'	=> '이 보드와 관련된 학대 및/또는 법적 문제에 대해 누구에게 연락해야하나요?',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'	=> '이 소프트웨어 (수정되지 않은 양식)는 제작, 출시 및 저작권 <a href="https://www.phpbb.com/"> phpbb limited </a>입니다. GNU 일반 공개 라이센스, 버전 2 (GPL-2.0)에 따라 제공되며 자유롭게 배포 될 수 있습니다. 자세한 내용은 phpbb </a>에 대해 <a href="https://www.phpbb.com/about/"> 참조하십시오.',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION'	=> '누가 이 보드를 썼나요?',

	'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'	=> '로그인 할 때 <em>Remember me</em> 상자를 확인하지 않으면 보드는 사전 설정 시간 동안만 로그인합니다. 이것은 다른 사람이 계정의 오용을 방지합니다. 로그인을 유지하려면 로그인하는 동안 <em>Remember me</em> 상자를 확인하십시오. 공유 컴퓨터에서 보드에 액세스하는 경우 권장되지 않습니다 (예 : 도서관, 인터넷 카페, 대학 컴퓨터 실 등 이이 확인란이 표시되지 않으면 보드 관리자가 이 기능을 비활성화했음을 의미합니다.',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'	=> '왜 자동 로그아웃?',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'	=> '이것이 발생할 수 있는 몇 가지 이유가 있습니다. 먼저 사용자 이름과 비밀번호가 올바른지 확인하십시오. 그들이 있다면, 보드 관리자에게 연락하여 금지되지 않았는지 확인하십시오. 또한 웹 사이트 소유자가 끝에 구성 오류가 발생할 수 있으며 이를 해결해야 합니다.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'	=> '관리자가 어떤 이유로 계정을 비활성화하거나 삭제했을 가능성이 있습니다. 또한 많은 보드는 데이터베이스의 크기를 줄이기 위해 오랫동안 게시되지 않은 사용자를 주기적으로 제거합니다. 이런 일이 발생했다면 다시 등록하고 토론에 더 참여해보십시오..',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION'	=> '과거에 등록했지만 더 이상 로그인 할 수 없나요?',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'	=> '왜 로그인 안 되나요?',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'	=> '보드 관리자가 신규 방문자가 가입하지 못하도록 등록을 비활성화했을 가능성이 있습니다. 보드 관리자는 또한 IP 주소를 금지하거나 등록하려는 사용자 이름을 허용하지 않았을 수도 있습니다. 도움은 보드 관리자에게 문의하십시오I.',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'	=> '왜 등록 안 되나요?',
	'HELP_FAQ_LOGIN_COPPA_ANSWER'	=> 'COPPA 또는 1998년 어린이 온라인 개인 정보 보호법은 미국에서 13세 미만 미성년자의 정보를 수집할 수 있는 웹사이트에 부모 동의 또는 기타 법적 후견인 확인 방법을 기재하여 13세 미만 미성년자의 개인 식별 가능한 정보를 수집할 수 있도록 요구하는 법입니다. 이것이 등록하려는 사람으로서 귀하에게 해당되는지 아니면 등록하려는 웹사이트에 적용되는지 확신이 서지 않으면 법률 상담원에게 연락하여 도움을 받으십시오. PHPBB Limited와 이 게시판의 소유자는 법률 조언을 제공할 수 없으며 “이 게시판과 관련된 학대 및/또는 법적 문제에 대해 누구에게 연락해야 합니까?”라는 질문에 명시된 것을 제외하고는 어떤 종류의 법적 문제에 대해서도 연락할 수 없습니다.',
	'HELP_FAQ_LOGIN_COPPA_QUESTION'	=> 'COPPA 뭐죠?',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'	=> '“Delete cookies” PHPBB로 만든 쿠키를 삭제하여 인증 및 보드에 로그인합니다. 쿠키는 또한 보드 관리자가 활성화 한 경우 읽기 추적과 같은 기능을 제공합니다. 로그인 또는 로그아웃 문제가 있는 경우 보드 쿠키 삭제가 도움이 될 수 있습니다..',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'	=> '“쿠키 삭제” ?',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'	=> '당황하지 말 것! 비밀번호를 검색 할 수는 없지만 쉽게 재설정 할 수 있습니다. 로그인 페이지를 방문하여 <em>Remember me</em>을 클릭하십시오. 지침을 따르면 곧 다시 로그인 할 수 있어야합니다. <br /> 그러나 비밀번호를 재설정 할 수 없으면 보드 관리자에게 문의하십시오..',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'	=> '암호 잊음!',
	'HELP_FAQ_LOGIN_REGISTER_ANSWER'	=> '메시지를 게시하려면 등록 해야하는지 여부에 대해서는 보드 관리자에게 달려있을 필요가 없습니다. 하지만; 등록하면 정의 가능한 아바타 이미지, 개인 메시징, 동료 사용자의 이메일, 사용자 그룹 구독 등과 같은 게스트 사용자가 사용할 수없는 추가 기능에 액세스 할 수 있습니다. 등록하는 데 몇 분만 걸리므로 권장합니다.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'	=> '먼저, 사용자 이름과 비밀번호를 확인하십시오. 그들이 옳다면 두 가지 중 하나가 일어 났을 수 있습니다. COPPA 지원이 활성화되고 등록 중 13세 미만인 경우 받은 지침을 따라야합니다. 일부 보드는 또한 로그온하기 전에 직접 또는 관리자에 의해 새로운 등록을 활성화해야합니다. 이 정보는 등록 중에 나타났습니다. 이메일을 보낸 경우 지침을 따르십시오. 이메일을받지 못한 경우 잘못된 이메일 주소를 제공했거나 스팸 파일러가 이메일을받을 수 있습니다. 제공한 이메일 주소가 올바른지 확인한 경우 관리자에게 연락하십시오.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'	=> '등록했는데 로그인 안 됨!',
	'HELP_FAQ_LOGIN_REGISTER_QUESTION'	=> '왜 등록해야죠?',

	'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'	=> '이것에 대한 세 가지 이유가 있습니다. 등록 및/또는 로그온하지 않았으며, 보드 관리자는 전체 보드에 대한 개인 메시지를 비활성화했거나 보드 관리자가 메시지를 보내는 것을 막았습니다. 자세한 내용은 보드 관리자에게 문의하십시오..',
	'HELP_FAQ_PMS_CANNOT_SEND_QUESTION'	=> '개인 메시지 못 보냄!',
	'HELP_FAQ_PMS_SPAM_ANSWER'	=> '이 보드의 이메일 양식 기능에는 해당 게시물을 보내는 사용자를 시도하고 추적 할 수있는 보호 조치가 포함되어 있으므로받은 이메일의 전체 사본을 보드 관리자에게 이메일로 보내주십시오. 여기에는 이메일을 보낸 사용자의 세부 정보가 포함 된 헤더가 포함되어 있어야합니다. 보드 관리자는 조치를 취할 수 있습니다.',
	'HELP_FAQ_PMS_SPAM_QUESTION'	=> '이 보드의 누군가로부터 스팸 또는 학대 이메일을 받았습니다!',
	'HELP_FAQ_PMS_UNWANTED_ANSWER'	=> '사용자 제어판 내에서 메시지 규칙을 사용하여 사용자로부터 개인 메시지를 자동으로 삭제할 수 있습니다. 특정 사용자로부터 모욕적 인 개인 메시지를받는 경우 메시지를 중재자에게보고하십시오. 사용자가 개인 메시지를 보내지 못하게하는 힘이 있습니다.',
	'HELP_FAQ_PMS_UNWANTED_QUESTION'	=> '나는 원치 않는 개인 메시지를 계속 받고 있습니다!',

	'HELP_FAQ_POSTING_BUMP_ANSWER'	=> '“Bump topic”링크를 볼 때 그 링크를 클릭하면 첫 페이지의 포럼 맨 위에 주제를 “bump”할 수 있습니다. 그러나 이것을 보지 못하면 주제 충돌이 비활성화되거나 범프 간의 시간 허용에 아직 도달하지 못했습니다. 주제에 회신하여 주제를 단순히 충돌 할 수도 있지만, 그렇게 할 때는 보드 규칙을 따라야합니다.',
	'HELP_FAQ_POSTING_BUMP_QUESTION'	=> '어떻게 내 주제가 충돌하나요?',
	'HELP_FAQ_POSTING_CREATE_ANSWER'	=> '포럼에 새로운 주제를 게시하려면 "New Topic"를 클릭하십시오. 주제에 대한 답장을 게시하려면 "Post Reply"를 클릭하십시오. 메시지를 게시하기 전에 등록해야 할 수도 있습니다. 각 포럼의 권한 목록은 포럼 및 주제 화면의 하단에 있습니다. 예 : 새로운 주제를 게시 할 수 있고 첨부 파일 등을 게시 할 수 있습니다.',
	'HELP_FAQ_POSTING_CREATE_QUESTION'	=> '새 주제를 만들거나 답장을 게시하려면 어떻게 하나요?',
	'HELP_FAQ_POSTING_DRAFT_ANSWER'	=> '이를 통해 초안을 저장하고 나중에 제출할 수 있습니다. 저장된 초안을 다시 로드하려면 사용자 제어판을 방문하십시오..',
	'HELP_FAQ_POSTING_DRAFT_QUESTION'	=> '주제 게시에서 “저장” 버튼은 무엇인가요?',
	'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'	=> '당신가 보드 관리자 또는 중재자가 아닌 한, 당신는 자신의 게시물 만 편집하거나 삭제할 수 있습니다. 관련 게시물의 편집 버튼을 클릭하여 게시물을 편집 할 수 있으며, 게시물을 작성한 후에 제한된 시간 동안 만 게시 할 수 있습니다. 누군가가 이미 게시물에 답장을 한 경우, 날짜 및 시간과 함께 편집 한 횟수를 나열하는 주제로 돌아갈 때 게시물 아래에 작은 텍스트 출력을 찾을 수 있습니다. 이것은 누군가가 답장을 한 경우에만 나타납니다. 중재자 나 관리자가 게시물을 편집 한 경우에는 나타나지 않지만 자신의 재량에 따라 게시물을 편집 한 이유에 대한 메모를 남길 수 있습니다. 누군가가 대답 한 후에는 일반 사용자가 게시물을 삭제할 수 없습니다..',
	'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'	=> '게시물을 편집하거나 삭제하려면 어떻게합니까?',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'	=> '일부 포럼은 특정 사용자 또는 그룹으로 제한 될 수 있습니다. 다른 조치를보고 읽거나 게시하거나 수행하려면 특별한 권한이 필요할 수 있습니다. 액세스 권한을 부여하려면 중재자 또는 보드 관리자에게 문의하십시오..',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION'	=> '왜 포럼 액세스 안 되나요?',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'	=> '첨부 권한은 포럼 당, 그룹 별 또는 사용자 기준으로 부여됩니다. 보드 관리자는 게시중인 특정 포럼에 첨부 파일이 추가되지 않았거나 특정 그룹만 첨부 파일을 게시할 수 있습니다. 첨부 파일을 추가할 수없는 이유가 확실하지 않은 경우 보드 관리자에게 문의하십시오..',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'	=> '왜 첨부를 못 하나요?',
	'HELP_FAQ_POSTING_POLL_ADD_ANSWER'	=> '폴링 옵션의 한도는 보드 관리자가 설정합니다. 허용 금액보다 설문 조사에 더 많은 옵션을 추가해야한다고 생각되면 보드 관리자에게 문의하십시오.',
	'HELP_FAQ_POSTING_POLL_ADD_QUESTION'	=> '왜 더 많은 설문 추가 안 되나요?',
	'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'	=> '새 주제를 게시하거나 주제의 첫 번째 게시물을 편집 할 때 메인 게시 양식 아래의 “Poll creation”탭을 클릭하십시오. 이것을 볼 수 없다면 여론 조사를위한 적절한 권한이 없습니다. 적절한 필드에 제목과 두 가지 이상의 옵션을 입력하여 각 옵션이 Textarea의 별도의 줄에 있는지 확인하십시오. 또한 “Options per user”에서 투표 중에 사용자가 선택할 수있는 옵션 수, 설문 조사의 날 시간 제한 (무한 기간의 경우 0) 및 사용자가 투표를 수정할 수있는 옵션을 설정할 수 있습니다',
	'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'	=> '어떻게 설문을 만드나요?',
	'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'	=> '게시물과 마찬가지로 설문은 원래 포스터, 중재자 또는 관리자로만 편집 할 수 있습니다. 설문 조사를 편집하려면 클릭하여 주제의 첫 번째 게시물을 편집하십시오. 이것은 항상 그와 관련된 설문이 있습니다. 아무도 투표 하지 않으면 사용자는 설문을 삭제하거나 설문 옵션을 편집 할 수 있습니다. 그러나 회원이 이미 투표권을 행사 한 경우 중재자 또는 관리자만이 편집하거나 삭제할 수 있습니다. 이로 인해 여론 조사 옵션이 여론 조사 중반에 변경되는 것을 방지합니다.',
	'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'	=> '설문 편집 또는 삭제?',
	'HELP_FAQ_POSTING_QUEUE_ANSWER'	=> '보드 관리자는 포럼의 게시물이 제출하기 전에 검토를 요구하기 위해 게시 한 것으로 결정했을 수 있습니다. 관리자가 제출 전에 검토가 필요한 사용자 그룹에 당신를 배치했을 수도 있습니다. 자세한 내용은 보드 관리자에게 문의하십시오.',
	'HELP_FAQ_POSTING_QUEUE_QUESTION'	=> '왜 내 게시물을 승인해야 되죠?',
	'HELP_FAQ_POSTING_REPORT_ANSWER'	=> '보드 관리자가 허용 하면 보고하려는 게시물 옆에 게시물을 보고 할 버튼이 표시됩니다. 이것을 클릭하면 게시물을보고하는 데 필요한 단계를 안내합니다.',
	'HELP_FAQ_POSTING_REPORT_QUESTION'	=> '중재자에게 게시물을 보고하려면 어떻게 ?',
	'HELP_FAQ_POSTING_SIGNATURE_ANSWER'	=> '게시물에 서명을 추가하려면 먼저 사용자 제어판을 통해 하나를 작성해야합니다. 일단 생성되면 게시 양식에 <em>서명 첨부</em> 상자를 점검하여 서명을 추가 할 수 있습니다. 사용자 제어판에서 적절한 라디오 버튼을 확인하여 모든 게시물에 기본적으로 서명을 추가 할 수도 있습니다. 그렇게하면 게시 양식 내에서 서명 추가 상자를 확인하여 개별 게시물에 서명이 추가되는 것을 막을 수 있습니다.',
	'HELP_FAQ_POSTING_SIGNATURE_QUESTION'	=> '내 글에 서명 추가 하려면?',
	'HELP_FAQ_POSTING_WARNING_ANSWER'	=> '각 보드 관리자는 사이트에 대한 자체 규칙 세트가 있습니다. 규칙을 깨뜨린 경우 경고가 발행 될 수 있습니다. 이것은 보드 관리자의 결정이며 PHPBB Limited는 주어진 사이트의 경고와 관련이 없습니다. 경고가 발행 된 이유가 확실하지 않은 경우 보드 관리자에게 문의하십시오..',
	'HELP_FAQ_POSTING_WARNING_QUESTION'	=> '왜 경고를 받죠?',

	'HELP_FAQ_SEARCH_BLANK_ANSWER'	=> '검색은 웹 서버가 처리하기에 너무 많은 결과를 반환했습니다. “Advanced search”을 사용하고 사용 된 용어와 검색 할 포럼에서보다 구체적으로하십시오.',
	'HELP_FAQ_SEARCH_BLANK_QUESTION'	=> '왜 내 검색이 빈 페이지를 반환하죠?',
	'HELP_FAQ_SEARCH_FORUM_ANSWER'	=> '인덱스, 포럼 또는 주제 페이지에 있는 검색 상자에 검색어를 입력하십시오. 포럼의 모든 페이지에서 사용할 수있는 “Advance Search”링크를 클릭하면 고급 검색에 액세스 할 수 있습니다. 검색에 액세스하는 방법은 사용 된 스타일에 따라 다를 수 있습니다.',
	'HELP_FAQ_SEARCH_FORUM_QUESTION'	=> '어떻게 포럼을 검색하죠?',
	'HELP_FAQ_SEARCH_MEMBERS_ANSWER'	=> ' “Members” 페이지 방문해서 “Find a member” 링크 클릭.',
	'HELP_FAQ_SEARCH_MEMBERS_QUESTION'	=> '어떻게 멤버를 검색하죠?',
	'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'	=> '당신의 검색은 아마도 너무 모호했으며 PHPBB에 의해 색인되지 않은 많은 일반적인 용어가 포함되어 있습니다. 보다 구체적으로 고급 검색 내에서 사용 가능한 옵션을 사용하십시오.',
	'HELP_FAQ_SEARCH_NO_RESULT_QUESTION'	=> '왜 내 검색 결과가 없죠?',
	'HELP_FAQ_SEARCH_OWN_ANSWER'	=> '사용자 제어판에서 “Show your posts”링크를 클릭하거나 자신의 프로필 페이지를 통해 “Search user’s posts”링크를 클릭하거나 “Quick links”메뉴를 클릭하여 자신의 게시물을 검색 할 수 있습니다. 판자. 주제를 검색하려면 고급 검색 페이지를 사용하여 다양한 옵션을 적절하게 작성하십시오',
	'HELP_FAQ_SEARCH_OWN_QUESTION'	=> '내 자신의 게시물과 주제를 어떻게 찾을 수 있나요?',

	'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'	=> '게시물을 볼 때 사용자 이름과 함께 표시될 수 있는 두 가지 이미지가 있습니다. 그중 하나는 일반적으로 별, 블록 또는 점의 형태로 당신의 계급과 관련된 이미지 일 수 있으며, 보드의 게시물 수 또는 상태를 나타냅니다. 일반적으로 더 큰 이미지는 아바타로 알려져 있으며 일반적으로 각 사용자에게 독특하거나 개인적입니다.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'	=> '사용자 제어판 내에서 “Profile” 아래에서 Gravatar, Gallery, Remote 또는 Upload의 4가지 방법 중 하나를 사용하여 아바타를 추가할 수 있습니다. 아바타를 가능하게하고 아바타를 사용할 수있는 방법을 선택하는 것은 보드 관리자에게 달려 있습니다. 아바타를 사용할 수 없는 경우 보드 관리자에게 문의하십시오.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'	=> '아바타를 어떻게 나타내나요?',
	'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'	=> '내 사용자이름 옆 이미지는 무엇인가요?',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'	=> '등록 사용자라면 모든 설정이 보드 데이터베이스에 저장됩니다. 이를 변경하려면 사용자 제어판을 방문하십시오. 보드 페이지 상단에서 사용자 이름을 클릭하면 일반적으로 링크를 찾을 수 있습니다. 이 시스템은 모든 설정과 환경 설정을 변경할 수 있습니다.',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION'	=> '어떻게 설정을 바꾸나요?',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'	=> '등록 사용자만 내장 이메일 양식을 통해 다른 사용자에게 이메일을 보낼 수 있으며 관리자가 이 기능을 활성화 한 경우에만 전자 메일을 보낼 수 있습니다. 이는 익명 사용자의 이메일 시스템의 악의적 사용을 막기위한 것입니다..',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'	=> '사용자의 이메일 링크를 클릭하면 로그인을 요청하나요?',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'	=> '사용자 제어판 내에서 “Board preferences”에서 <em>온라인 상태를 숨기는</em> 옵션을 찾을 수 있습니다. 이 옵션을 활성화하면 관리자, 중재자 및 자신에게만 나타납니다. 당신은 숨겨진 사용자로 간주됩니다.',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'	=> '온라인 사용자 목록에 내 사용자 이름이 나타나는 것을 어떻게 막나요?',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'	=> '관리자가 당신의 언어를 설치하지 않았거나 아무도이 보드를 당신의 언어로 번역하지 않았습니다. 필요한 언어 팩을 설치할 수 있는지 보드 관리자에게 물어보십시오. 언어 팩이 존재하지 않으면 새로운 번역을 자유롭게 만들 수 있습니다. 자세한 내용은 <a href="https://www.phpbb.com/"> phpbb</a> &reg; 웹 사이트에서 찾으세요',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'	=> '내 언어가 목록에 없어요!',
	'HELP_FAQ_USERSETTINGS_RANK_ANSWER'	=> '사용자 이름 아래에 표시되는 순위는 특정 사용자 (예 : 특정 사용자를 식별하거나 식별 한 게시물 수를 나타냅니다). 중재자 및 관리자. 일반적으로 보드 관리자가 설정 한 보드 순위의 문구를 직접 변경할 수는 없습니다. 당신의 계급을 높이기 위해 불필요하게 게시하여 보드를 남용하지 마십시오. 대부분의 보드는 이를 견딜 수 없으며 중재자 또는 관리자는 게시물 수를 단순히 낮추게됩니다.',
	'HELP_FAQ_USERSETTINGS_RANK_QUESTION'	=> '내 계급은 무엇이며 어떻게 변경?',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'	=> '시간대를 올바르게 설정하고 시간이 여전히 잘못되었다고 확신하면 서버 클록에 저장된 시간이 잘못되었습니다. 문제를 수정하도록 관리자에게 알리십시오.',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'	=> '타임존을 바꿨는데 아직 시간이 틀려요!',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'	=> '표시되는 시간은 당신이 있는 것과 다른 시간대에서 다른 일을 할 수 있습니다.이 경우 사용자 제어판을 방문하여 특정 영역에 맞게 시간대를 변경하십시오 (예 : London, Paris, New York, Sydney 등. 대부분의 환경과 마찬가지로 시간대 변경은 등록된 사용자만 수행 할 수 있습니다. 등록되지 않았다면 지금이 좋은 시기입니다.',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'	=> '시간이 정확하지 않아요!',
));
