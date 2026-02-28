<?php
/**
 * KHIND RTO - Konfigurasi Utama
 */

// Tetapan Laman
define('SITE_NAME', 'KHIND Rent-To-Own');
define('SITE_TAGLINE', 'Pelan Ansuran Barangan Elektrik Mudah Milik');

// Auto-detect SITE_URL based on current domain
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
// Front controller is always at root index.php, so base is just host
$scriptDir = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
define('SITE_URL', $protocol . '://' . $host . $scriptDir);

// Tetapan Default Ejen
define('DEFAULT_AGENT_NAME', 'KHIND RTO');
define('DEFAULT_AGENT_PHONE', '60123456789');
define('DEFAULT_AGENT_WHATSAPP', '60123456789');

// Warna Tema
define('PRIMARY_COLOR', '#F97316');    // Oren KHIND
define('SECONDARY_COLOR', '#1a1a2e'); // Gelap
define('ACCENT_COLOR', '#e63946');    // Merah CTA
