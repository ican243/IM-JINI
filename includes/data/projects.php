<?php
// 프로젝트 기본 정보 (메인 카드와 상세 페이지가 함께 사용)
// 키(slug)가 상세 페이지 주소가 된다: /projects/linkr
// 적힌 순서대로 메인에 나온다 (화면 사진이 있는 것 먼저)
// mobile: 휴대폰에서 보여줄 세로 화면 jpg (없으면 PC 화면 사용)
// image: 메인 카드 화면 jpg (같은 이름의 .webp 가 있으면 먼저 사용, 비어 있으면 '비공개' 표시)
// link: 사이트 주소, github: 저장소 주소 (비어 있으면 버튼 안 보임)
// intro, note: 상세 페이지 머리의 한 줄 소개와 알림
// shots: 상세 페이지 화면 목록. 첫 장이 가장 크게 나온다. 파일이 없는 화면은 숨김
// admin: 관리자 모드 소개 (title, desc, shots). shots 는 위 shots 와 같은 방식 (첫 장이 크게)
// 상세 본문은 includes/projects/{slug}.php
$projects = [
    'cafe' => [
        'title'  => 'MORROW COFFEE',
        'badge'  => '1인 개발',
        'tag'    => '카페 홈페이지',
        'desc'   => '동네 카페 홈페이지와 사장님 전용 관리자 모드를 함께 만들었습니다. 메뉴·사진·영업시간을 코드 없이 직접 바꾸고, 손님은 휴대폰에서 메뉴를 보고 바로 전화하거나 길을 찾습니다.',
        'stack'  => ['CodeIgniter 4', 'MySQL', 'PHP 8.3', '카카오맵'],
        'image'  => 'assets/img/projects/cafe.jpg',
        'mobile' => 'assets/img/projects/cafe-mobile.jpg',     // 휴대폰에서 보여줄 화면 (390x780)
        'link'   => 'https://kir1.cafe24.com/cafe/',
        'github' => 'https://github.com/ican243/morrow-cafe',
        'intro'  => '손님이 보는 홈페이지와 사장님이 쓰는 관리자 화면을 함께 만든 카페 홈페이지입니다. 메뉴, 사진, 영업시간, 휴무일을 코드 없이 관리자 화면에서 바로 바꿉니다.',
        'note'   => '직접 기획하고 만든 가상 매장입니다. 메뉴와 주소는 예시이며, 사진은 무료 사진(Unsplash)을 썼습니다.',
        'shots'  => [
            ['file' => 'assets/img/projects/cafe-main.jpg',      'caption' => '첫 화면'],
            ['file' => 'assets/img/projects/cafe-signature.jpg', 'caption' => '대표 메뉴'],
            ['file' => 'assets/img/projects/cafe-gallery.jpg',   'caption' => '매장 사진'],
            ['file' => 'assets/img/projects/cafe-story.jpg',     'caption' => '브랜드 이야기'],
            ['file' => 'assets/img/projects/cafe-menu.jpg',      'caption' => '메뉴'],
            ['file' => 'assets/img/projects/cafe-news.jpg',      'caption' => '공지·이벤트'],
            ['file' => 'assets/img/projects/cafe-location.jpg',  'caption' => '오시는 길 (카카오 지도)'],
        ],
        'admin'  => [
            'title' => '사장님 전용 관리자 모드',
            'desc'  => '사장님이 코드 없이 직접 고치는 화면입니다. 품절은 스위치로 바로 바꾸고, 가격은 목록에서 고치고, 메뉴 순서는 끌어서 옮깁니다. 매장에서 휴대폰으로도 쓸 수 있습니다.',
            'shots' => [
                ['file' => 'assets/img/projects/cafe-admin-menus.jpg',     'caption' => '메뉴 관리 (품절·가격·순서)'],
                ['file' => 'assets/img/projects/cafe-admin-dashboard.jpg', 'caption' => '대시보드'],
                ['file' => 'assets/img/projects/cafe-admin-new.jpg',       'caption' => '메뉴 추가'],
                ['file' => 'assets/img/projects/cafe-admin-media.jpg',     'caption' => '사진 보관함'],
                ['file' => 'assets/img/projects/cafe-admin-gallery.jpg',   'caption' => '매장 갤러리'],
                ['file' => 'assets/img/projects/cafe-admin-hours.jpg',     'caption' => '영업시간·휴무일'],
                ['file' => 'assets/img/projects/cafe-admin-mobile.jpg',    'caption' => '휴대폰 화면'],
            ],
        ],
    ],
    'fashion' => [
        'title'  => '옆길 YEPGIL',
        'badge'  => '1인 개발',
        'tag'    => '패션 쇼핑몰',
        'desc'   => '패션 쇼핑몰 화면과 운영자용 관리자 모드를 함께 만들었습니다. 손님은 상품을 고르고 장바구니에 담아 주문하고, 운영자는 상품과 재고, 주문을 관리자 화면에서 처리합니다.',
        'stack'  => ['CodeIgniter 4', 'MySQL', 'PHP 8.3', '토스페이먼츠'],
        'image'  => 'assets/img/projects/fashion.jpg',
        'mobile' => 'assets/img/projects/fashion-mobile.jpg',  // 휴대폰에서 보여줄 화면 (390x780)
        'link'   => 'https://kir1.cafe24.com/fashion/',
        'github' => '',
        'intro'  => '상품 구경부터 주문, 주문 조회, 교환·반품 신청까지 이어지는 쇼핑몰입니다. 운영자는 관리자 화면에서 상품과 재고, 주문을 처리합니다.',
        'note'   => '직접 기획하고 만든 가상 브랜드입니다. 상품과 가격은 예시이고 결제는 되지 않습니다. 사진은 예시 이미지입니다.',
        'shots'  => [
            ['file' => 'assets/img/projects/fashion-main.jpg',     'caption' => '첫 화면'],
            ['file' => 'assets/img/projects/fashion-shop.jpg',     'caption' => '상품 목록'],
            ['file' => 'assets/img/projects/fashion-lookbook.jpg', 'caption' => '옷차림 기록'],
            ['file' => 'assets/img/projects/fashion-product.jpg',  'caption' => '상품 상세'],
            ['file' => 'assets/img/projects/fashion-cart.jpg',     'caption' => '장바구니'],
            ['file' => 'assets/img/projects/fashion-checkout.jpg', 'caption' => '주문서'],
            ['file' => 'assets/img/projects/fashion-lookup.jpg',   'caption' => '주문 조회'],
        ],
        'admin'  => [
            'title' => '운영자 전용 관리자 모드',
            'desc'  => '상품 등록과 재고, 주문, 교환·반품을 한곳에서 처리합니다. 상품이 많으면 엑셀로 한 번에 올리고, 메인 화면 문구와 사진도 코드 없이 바꿉니다.',
            'shots' => [
                ['file' => 'assets/img/projects/fashion-admin-products.jpg',  'caption' => '상품 관리'],
                ['file' => 'assets/img/projects/fashion-admin-dashboard.jpg', 'caption' => '현황'],
                ['file' => 'assets/img/projects/fashion-admin-form.jpg',      'caption' => '상품 수정'],
                ['file' => 'assets/img/projects/fashion-admin-content.jpg',   'caption' => '메인 화면 수정'],
                ['file' => 'assets/img/projects/fashion-admin-categories.jpg', 'caption' => '카테고리'],
                ['file' => 'assets/img/projects/fashion-admin-launch.jpg',    'caption' => '출시 점검'],
                ['file' => 'assets/img/projects/fashion-admin-mobile.jpg',    'caption' => '휴대폰 화면'],
            ],
        ],
    ],
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
