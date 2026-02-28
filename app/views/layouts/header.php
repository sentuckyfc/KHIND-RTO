<?php
$_currentPage = currentPage();
?>
<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= SITE_NAME ?> | <?= SITE_TAGLINE ?></title>
    <meta name="description" content="KHIND Rent-To-Own Malaysia - Pelan ansuran barangan elektrik mudah milik. Aircond, Mesin Basuh, Peti Sejuk dan banyak lagi!">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- AOS Animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
</head>
<body>

<!-- Floating WhatsApp Button -->
<a href="<?= getWhatsAppLink($agent['whatsapp']) ?>" target="_blank" class="whatsapp-float" title="Chat via WhatsApp">
    <i class="fab fa-whatsapp"></i>
    <span class="pulse-ring"></span>
</a>

<!-- Notification Toast -->
<div class="notification-toast" id="notifToast">
    <div class="toast-icon">
        <img src="https://khind.pro/wp-content/uploads/2025/07/6747ddc200a7b28d5aedcc66_turning-RTO.png" alt="KHIND" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2240%22 height=%2240%22><rect fill=%22%23f2c213%22 width=%2240%22 height=%2240%22 rx=%2220%22/><text x=%2250%%22 y=%2255%%22 text-anchor=%22middle%22 fill=%22%23000%22 font-size=%2216%22 font-weight=%22bold%22>K</text></svg>'">
    </div>
    <div class="toast-content">
        <strong id="toastName">Ahmad</strong> dari <span id="toastLocation">Kuala Lumpur</span>
        <br><small>Baru sahaja R-T-O <span id="toastProduct">2.0HP Aircond</span></small>
    </div>
    <div class="toast-time">Baru sahaja</div>
</div>

<!-- Navigation -->
<nav class="navbar" id="navbar">
    <div class="container nav-container">
        <a href="<?= url() ?>" class="nav-logo">
            <span class="logo-icon">K</span>
            <div class="logo-text">
                <strong>KHIND</strong>
                <small>RENT-TO-OWN</small>
            </div>
        </a>

        <div class="nav-menu" id="navMenu">
            <a href="<?= url() ?>" class="nav-link <?= $_currentPage === 'home' ? 'active' : '' ?>">Utama</a>
            <a href="<?= url('catalog') ?>" class="nav-link <?= $_currentPage === 'catalog' ? 'active' : '' ?>">Katalog</a>
            <a href="#kenapa-khind" class="nav-link">Kenapa KHIND</a>
            <a href="#hubungi" class="nav-link">Hubungi</a>
            <a href="<?= url('join') ?>" class="nav-link nav-cta <?= $_currentPage === 'join' ? 'active' : '' ?>">
                <i class="fas fa-users"></i> Jadi Ejen
            </a>
        </div>

        <button class="nav-toggle" id="navToggle" aria-label="Toggle Menu">
            <span></span><span></span><span></span>
        </button>
    </div>
</nav>
