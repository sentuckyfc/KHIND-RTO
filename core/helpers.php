<?php
/**
 * KHIND RTO - Helper Functions
 */

/**
 * Generate a WhatsApp link
 */
function getWhatsAppLink($phone, $message = '') {
    if (empty($message)) {
        $message = 'Hai, Saya berminat untuk dapatkan barangan KHIND secara RTO/';
    }
    return 'https://wa.me/' . $phone . '?text=' . urlencode($message);
}

/**
 * Generate a site URL, automatically preserving the ?agent= parameter
 */
function url($path = '', $params = []) {
    $base = SITE_URL;
    $url = $base . ($path ? '/' . ltrim($path, '/') : '/');

    // Preserve existing agent param unless overridden
    if (!isset($params['agent']) && !empty($_GET['agent'])) {
        $params['agent'] = $_GET['agent'];
    }

    if (!empty($params)) {
        $url .= '?' . http_build_query($params);
    }

    return $url;
}

/**
 * Generate a URL for a public asset (CSS/JS)
 */
function asset($path) {
    return SITE_URL . '/public/assets/' . ltrim($path, '/');
}

/**
 * Generate a URL for a product image
 */
function image($path) {
    return SITE_URL . '/public/Image/' . ltrim($path, '/');
}

/**
 * Return the current route name for navbar active state
 */
function currentPage() {
    $url = trim($_GET['url'] ?? '', '/');
    if ($url === '') return 'home';
    return $url; // 'catalog', 'join', etc.
}
