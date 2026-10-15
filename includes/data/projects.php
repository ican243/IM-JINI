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
