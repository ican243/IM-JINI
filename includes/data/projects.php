<?php
// 프로젝트 기본 정보 (메인 카드와 상세 페이지가 함께 사용)
// 키(slug)가 상세 페이지 주소가 된다: /projects/linkr
// 적힌 순서대로 메인에 나온다 (화면 사진이 있는 것 먼저)
// mobile: 휴대폰에서 보여줄 세로 화면 jpg (없으면 PC 화면 사용)
// image: 메인 카드 화면 jpg (같은 이름의 .webp 가 있으면 먼저 사용, 비어 있으면 '비공개' 표시)
// link: 사이트 주소, github: 저장소 주소 (비어 있으면 버튼 안 보임)
// intro, note: 상세 페이지 머리의 한 줄 소개와 알림
// shots: 상세 페이지 화면 목록. 첫 장이 가장 크게 나온다. 파일이 없는 화면은 숨김
// 상세 본문은 includes/projects/{slug}.php
$projects = [
    'notedot' => [
        'title'  => 'notedot',
        'badge'  => '1인 개발',
        'tag'    => '예약·고객관리 서비스',
        'desc'   => '미용실·필라테스·스터디룸처럼 예약 방식이 다른 매장을 하나로 운영하는 예약·고객관리 서비스입니다. 데모 매장에서 손님 예약과 관리자 화면을 바로 써 볼 수 있습니다.',
        'stack'  => ['Laravel', 'MySQL', 'Node.js', 'Socket.IO'],
        'image'  => 'assets/img/projects/notedot.jpg',
        'mobile' => 'assets/img/projects/notedot-mobile.jpg',  // 휴대폰에서 보여줄 화면 (손님 예약, 390x780)
        'link'   => 'https://kir1.cafe24.com/notedot/',
        'github' => '',
        'intro'  => '업종에 맞게 말과 예약 방식이 바뀌는 범용 예약·고객관리 서비스입니다. 손님은 휴대폰으로 예약하고, 매장은 관리자 화면에서 일정과 고객을 관리합니다.',
        'note'   => '직접 기획하고 만든 데모 서비스이며, 결제와 문자 발송은 데모 모드로 동작합니다.',
        'shots'  => [
            ['file' => 'assets/img/projects/notedot-main.jpg',     'caption' => '메인 화면'],
            ['file' => 'assets/img/projects/notedot-calendar.jpg', 'caption' => '관리자 예약 캘린더'],
            ['file' => 'assets/img/projects/notedot-dashboard.jpg', 'caption' => '관리자 대시보드'],
        ],
    ],
    'kbc' => [
        'title'  => 'KBC아카데미',
        'badge'  => '외주 제작',
        'tag'    => '교육기관 홈페이지',
        'desc'   => '방송·크리에이터 교육기관의 홈페이지와 관리자입니다. 교육과정 안내와 상담 신청, 과정·강사·공지·문의 관리까지 만들었습니다.',
        'stack'  => ['CodeIgniter 4', 'MySQL', 'PHP 8.3', 'Nginx'],
        'image'  => 'assets/img/projects/kbc.jpg',
        'mobile' => 'assets/img/projects/kbc-mobile.jpg',      // 휴대폰에서 보여줄 화면 (390x780)
        'link'   => '',  // 정식 도메인 공개 후 연결
        'github' => '',
        'intro'  => '방송·크리에이터 교육기관의 공개 홈페이지와 관리자 화면을 함께 만든 외주 작업입니다. 방문자는 휴대폰으로 과정을 비교하고 상담을 신청하며, 운영자는 관리자 화면에서 문의와 홈페이지 내용을 관리합니다.',
        'note'   => '고객사의 기획안을 바탕으로 만든 사이트입니다. 정식 공개 전이라 화면만 싣고, 관리자 화면은 고객 정보가 있어 싣지 않았습니다.',
        'shots'  => [
            ['file' => 'assets/img/projects/kbc-main.jpg',    'caption' => '첫 화면'],
            ['file' => 'assets/img/projects/kbc-courses.jpg', 'caption' => '교육과정 비교'],
            ['file' => 'assets/img/projects/kbc-contact.jpg', 'caption' => '상담 신청'],
        ],
    ],
    'linkr' => [
        'title'  => 'Linkr',
        'badge'  => '1인 개발',
        'tag'    => 'URL 단축 서비스',
        'desc'   => '긴 주소를 짧게 줄이고 클릭 통계를 보여줍니다. 요금제, 결제, 관리자 도구까지 처음부터 혼자 설계했습니다.',
        'stack'  => ['CodeIgniter 4', 'MySQL', 'OAuth', '토스페이먼츠'],
        'image'  => 'assets/img/projects/linkr.jpg',
        'mobile' => 'assets/img/projects/linkr-mobile.jpg',    // 휴대폰에서 보여줄 화면 (390x780)
        'link'   => 'https://kir1.cafe24.com:8443/',
        'github' => 'https://github.com/ican243/linkr',
        'intro'  => '긴 주소를 짧게 줄이고, 누가 얼마나 눌렀는지 보여주는 서비스입니다.',
        'note'   => '직접 기획하고 만든 개인 서비스이며, 결제는 테스트 모드로 동작합니다.',
        'shots'  => [
            ['file' => 'assets/img/projects/linkr-main.jpg',    'caption' => '메인 화면'],
            ['file' => 'assets/img/projects/linkr-stats.jpg',   'caption' => '통계 화면'],
            ['file' => 'assets/img/projects/linkr-payment.jpg', 'caption' => '결제 화면'],
            ['file' => 'assets/img/projects/linkr-admin.jpg',   'caption' => '관리자 화면'],
        ],
    ],
    'lambda' => [
        'title'  => '모아증권',
        'badge'  => '2인 팀',
        'tag'    => '실시간 주식 모의투자',
        'desc'   => '증권사 API로 실시간 시세를 받아 모의투자를 할 수 있는 플랫폼입니다. 가입 없이 체험 계정으로 바로 써 볼 수 있습니다.',
        'stack'  => ['PHP', 'Node.js', 'WebSocket', 'MySQL'],
        'image'  => 'assets/img/projects/lambda.jpg',
        'mobile' => 'assets/img/projects/lambda-mobile.jpg',   // 휴대폰에서 보여줄 화면 (390x780)
        'link'   => 'https://kir1.cafe24.com/user/',
        'github' => 'https://github.com/ican243/Lambda',
        'intro'  => '증권사 API로 코스피·코스닥 전 종목의 실시간 시세를 받아, 차트를 보며 모의투자를 할 수 있는 서비스입니다.',
        'note'   => '시세를 받아오는 서버와 데이터 처리, 화면을 맡았고 자동매매 기능은 팀원이 맡았습니다. 모의투자 서비스라 실제 주문은 나가지 않으며, 가입 없이 체험 계정으로 바로 써 볼 수 있습니다.',
        'shots'  => [
            ['file' => 'assets/img/projects/lambda-main.jpg',   'caption' => '메인 화면'],
            ['file' => 'assets/img/projects/lambda-detail.jpg', 'caption' => '종목 상세 (차트·호가)'],
            ['file' => 'assets/img/projects/lambda-trade.jpg',  'caption' => '내 계좌 (체험 계정)'],
        ],
    ],
    'livef' => [
        'title'  => 'LiveF',
        'badge'  => '운영 중',
        'tag'    => '방송 후원 통합 관리',
        'desc'   => '흩어진 방송 후원을 한 화면에 모아 실시간으로 띄웁니다. 운영 중인 상업 서비스라 화면은 공개하지 않습니다.',
        'stack'  => ['Node.js', 'Socket.IO', 'MySQL', 'Vue 2'],
        'image'  => '',
        'link'   => '',
        'github' => '',
        'intro'  => '투네이션·펀네이션·계좌이체로 흩어진 후원을 한곳에 모아 점수로 바꾸고, 방송 화면에 실시간으로 띄우는 서비스입니다.',
        'note'   => '기존 개발자가 만든 상업 서비스를 넘겨받아 운영과 개선을 맡고 있습니다. 고객사 서비스라 화면은 싣지 않았습니다.',
    ],
];
