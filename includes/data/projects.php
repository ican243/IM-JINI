<?php
// 프로젝트 기본 정보 (메인 카드와 상세 페이지가 함께 사용)
// 키(slug)가 상세 페이지 주소가 된다: /projects/linkr
// image: 실제 화면 캡처 jpg (같은 이름의 .webp 가 있으면 먼저 사용, 비어 있으면 '비공개' 표시)
// link: 사이트 주소, github: 저장소 주소 (비어 있으면 버튼 안 보임)
// 상세 본문은 includes/projects/{slug}.php
$projects = [
    'livef' => [
        'title'  => 'LiveF',
        'badge'  => '운영 중',
        'tag'    => '방송 후원 통합 관리',
        'desc'   => '세 곳으로 흩어진 후원을 한 화면에 모아 점수로 환산하고, 방송 화면에 실시간으로 띄웁니다. 운영 중인 상업 서비스를 맡아 개선하고 있습니다.',
        'period' => '2026.07 ~ 현재',
        'team'   => '운영·개선 담당',
        'stack'  => ['Node.js', 'Socket.IO', 'MySQL', 'Vue 2'],
        'image'  => '',
        'link'   => '',
        'github' => '',
    ],
    'lambda' => [
        'title'  => 'Lambda',
        'badge'  => '2인 팀',
        'tag'    => '실시간 주식 모의투자',
        'desc'   => '증권사 API로 실시간 시세를 받아 모의투자를 할 수 있는 플랫폼입니다.',
        'period' => '2026.05 ~ 2026.08',
        'team'   => '2인 팀',
        'stack'  => ['PHP', 'Node.js', 'WebSocket', 'MySQL'],
        'image'  => 'assets/img/projects/lambda.jpg',
        'link'   => 'https://kir1.cafe24.com/user/',
        'github' => 'https://github.com/ican243/Lambda',
    ],
    'linkr' => [
        'title'  => 'Linkr',
        'badge'  => '1인 개발',
        'tag'    => 'URL 단축 서비스',
        'desc'   => '긴 주소를 짧게 줄이고 클릭 통계를 보여줍니다. 처음부터 혼자 설계했습니다.',
        'period' => '2026.08 ~ 2026.09',
        'team'   => '1인 개발',
        'stack'  => ['CodeIgniter 4', 'MySQL', 'OAuth', '토스페이먼츠'],
        'image'  => 'assets/img/projects/linkr.jpg',
        'link'   => 'https://kir1.cafe24.com:8443/',
        'github' => 'https://github.com/ican243/linkr',
    ],
];
