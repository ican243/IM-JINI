<?php
// 작은 아이콘 (직접 그린 단순 도형 SVG, 이모지·외부 로고 이미지 쓰지 않음)

// 말풍선: 카카오톡 문의 버튼용
function chat_icon(): string
{
    return '<svg class="chat-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">'
        . '<path d="M12 3.5c-5 0-9 3.1-9 7 0 2.5 1.7 4.7 4.3 6l-.9 3.4c-.1.3.3.6.6.4l4-2.7h1c5 0 9-3.1 9-7s-4-7.1-9-7.1Z"/></svg>';
}
