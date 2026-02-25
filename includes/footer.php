<!-- Agent Profile Section -->
<section class="agent-section" id="hubungi">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-badge">Penasihat Jualan</span>
            <h2>KHIND RTO</h2>
        </div>
        
        <div class="agent-card" data-aos="fade-up" data-aos-delay="100">
            <div class="agent-avatar">
                <?php if (!empty($agent['image'])): ?>
                    <img src="<?= $agent['image'] ?>" alt="<?= $agent['name'] ?>">
                <?php else: ?>
                    <div class="avatar-placeholder">
                        <i class="fas fa-user"></i>
                    </div>
                <?php endif; ?>
                <div class="agent-status-badge online">
                    <span class="status-dot"></span> Online
                </div>
            </div>
            
            <h3 class="agent-name"><?= $agent['name'] ?></h3>
            <span class="agent-title"><?= $agent['title'] ?></span>
            
            <p class="agent-desc">
                Sebagai ejen jualan yang berpengalaman dan terlatih, saya komited membantu anda 
                memiliki barangan Khind dengan cepat dan mudah melalui pelan Rent-To-Own yang fleksibel.
            </p>
            
            <div class="agent-contact-info">
                <div class="contact-label">PERTANYAAN PRODUK</div>
                <a href="tel:+<?= $agent['phone'] ?>" class="agent-phone">
                    <i class="fas fa-phone"></i> <?= $agent['phone'] ?>
                </a>
                <div class="contact-sublabel">(Pertanyaan, Sebut Harga & Pembelian Produk)</div>
            </div>
            
            <div class="agent-actions">
                <a href="<?= getWhatsAppLink($agent['whatsapp']) ?>" target="_blank" class="btn btn-whatsapp btn-lg">
                    <i class="fab fa-whatsapp"></i>
                    <div>
                        <small><?= $agent['name'] ?> (dalam talian)</small>
                        <span>Chat Sekarang via WhatsApp</span>
                    </div>
                </a>
                <a href="tel:+<?= $agent['phone'] ?>" class="btn btn-outline btn-lg">
                    <i class="fas fa-phone-alt"></i> Hubungi Sekarang
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Recruitment CTA Section -->
<section class="recruit-cta-section">
    <div class="container">
        <div class="recruit-cta-card" data-aos="fade-up">
            <div class="recruit-cta-content">
                <span class="section-badge light">Peluang Kerjaya</span>
                <h2>Nak Jana Pendapatan Bersama KHIND?</h2>
                <p>Anda mahukan pendapatan tambahan dengan cara yang mudah dan menguntungkan? KHIND menawarkan peluang untuk anda! Sesuai untuk sesiapa sahaja yang mahu kewangan lebih stabil.</p>
                <a href="<?= SITE_URL ?>/join.php<?= !empty($_GET['agent']) ? '?agent='.$_GET['agent'] : '' ?>" class="btn btn-primary btn-lg">
                    <i class="fas fa-rocket"></i> Sertai Sekarang
                </a>
            </div>
            <div class="recruit-cta-image">
                <div class="cta-graphic">
                    <div class="cta-icon-wrapper">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <div class="cta-stats">
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Ejen Aktif</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">7,000+</span>
                            <span class="stat-label">Keluarga Dilayan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About KHIND -->
<section class="about-section" id="tentang">
    <div class="container">
        <div class="about-grid">
            <div class="about-content" data-aos="fade-right">
                <span class="section-badge">Tentang KHIND</span>
                <h2>Jenama Dipercayai Sejak 1961</h2>
                <p>KHIND bukan nama baru — KHIND adalah jenama yang paling dipercayai di Malaysia. Terkenal dengan peralatan rumah yang mampu milik dan berkualiti tinggi, direka khas untuk memenuhi keperluan harian.</p>
                <p>Dengan ciri-ciri inovatif, setiap peralatan KHIND bukan sahaja menjimatkan tenaga, tetapi juga memudahkan gaya hidup keluarga. Hidup lebih senang, hati pun lebih tenang — dan semuanya bermula dengan KHIND.</p>
                
                <div class="about-stats">
                    <div class="about-stat">
                        <i class="fas fa-globe-asia"></i>
                        <div>
                            <strong>58+</strong>
                            <span>Negara</span>
                        </div>
                    </div>
                    <div class="about-stat">
                        <i class="fas fa-calendar-alt"></i>
                        <div>
                            <strong>60+</strong>
                            <span>Tahun</span>
                        </div>
                    </div>
                    <div class="about-stat">
                        <i class="fas fa-home"></i>
                        <div>
                            <strong>7,000+</strong>
                            <span>Keluarga</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-visual" data-aos="fade-left">
                <div class="about-image-wrapper">
                    <img src="https://khind.pro/wp-content/uploads/2025/06/about-khind.png" alt="KHIND" onerror="this.parentElement.innerHTML='<div class=\'about-placeholder\'><i class=\'fas fa-building\'></i><span>KHIND Holdings Berhad</span><small>Sejak 1961</small></div>'">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <div class="footer-logo">
                    <span class="logo-icon">K</span>
                    <div class="logo-text">
                        <strong>KHIND</strong>
                        <small>RENT-TO-OWN</small>
                    </div>
                </div>
                <p>Pelan ansuran barangan elektrik mudah milik untuk semua rakyat Malaysia.</p>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
            
            <div class="footer-links">
                <h4>Pautan Pantas</h4>
                <a href="<?= SITE_URL ?>/">Utama</a>
                <a href="<?= SITE_URL ?>/catalog.php">Katalog Produk</a>
                <a href="<?= SITE_URL ?>/join.php">Jadi Ejen</a>
                <a href="#hubungi">Hubungi Kami</a>
            </div>
            
            <div class="footer-links">
                <h4>Produk</h4>
                <a href="<?= SITE_URL ?>/catalog.php#aircond">Aircond</a>
                <a href="<?= SITE_URL ?>/catalog.php#washer">Mesin Basuh</a>
                <a href="<?= SITE_URL ?>/catalog.php#fridge">Peti Sejuk</a>
                <a href="<?= SITE_URL ?>/catalog.php#iron">Seterika</a>
            </div>
            
            <div class="footer-contact">
                <h4>Hubungi</h4>
                <a href="<?= getWhatsAppLink($agent['whatsapp']) ?>" target="_blank">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
                <a href="tel:+<?= $agent['phone'] ?>">
                    <i class="fas fa-phone"></i> <?= $agent['phone'] ?>
                </a>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>Copyright &copy; <?= date('Y') ?> | Laman ini bukan laman rasmi Khind Malaysia tetapi diuruskan oleh Ejen Sah Khind bagi tujuan promosi dan jualan.</p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="<?= SITE_URL ?>/assets/js/main.js"></script>
</body>
</html>
