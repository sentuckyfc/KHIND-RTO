<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-mesh"></div>

    <!-- Decorative floating shapes -->
    <div class="hero-deco hero-deco-1"></div>
    <div class="hero-deco hero-deco-2"></div>
    <div class="hero-deco hero-deco-3"></div>

    <div class="container hero-container">
        <div class="hero-content" data-aos="fade-up" data-aos-duration="1000">
            <div class="hero-eyebrow">
                <span class="eyebrow-dot"></span>
                <span>Pelan Rent-To-Own #1 Malaysia</span>
                <span class="eyebrow-tag">BARU</span>
            </div>

            <h1 class="hero-title">
                <span class="title-line">Barangan Elektrik</span>
                <span class="title-line title-gradient">Mudah Milik.</span>
                <span class="title-line title-light">Hidup Lebih Senang.</span>
            </h1>

            <p class="hero-subtitle">
                Tak perlu bayar cash. Tak perlu kad kredit. Tak perlu penjamin.<br>
                Cuma perlukan IC — dan semua barangan KHIND <strong>terus sampai rumah.</strong>
            </p>

            <div class="hero-actions">
                <a href="#katalog" class="btn-hero-primary">
                    <i class="fas fa-arrow-right"></i>
                    <span>Lihat Katalog</span>
                </a>
                <a href="<?= getWhatsAppLink($agent['whatsapp']) ?>" target="_blank" class="btn-hero-wa">
                    <i class="fab fa-whatsapp"></i>
                    <span>WhatsApp Kami</span>
                </a>
            </div>

            <div class="hero-trust-strip">
                <div class="trust-chip"><i class="fas fa-check"></i> IC Sahaja</div>
                <div class="trust-chip"><i class="fas fa-check"></i> Tanpa Kredit</div>
                <div class="trust-chip"><i class="fas fa-check"></i> 0 Penjamin</div>
                <div class="trust-chip"><i class="fas fa-check"></i> Hantar Percuma</div>
            </div>
        </div>

        <div class="hero-visual" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <div class="hero-showcase">
                <!-- Product card -->
                <div class="showcase-product-card">
                    <span class="showcase-tag">Paling Popular</span>
                    <img src="<?= image('Washer1.png') ?>" alt="KHIND Dryer">
                    <div class="showcase-price">
                        <span class="showcase-from">Serendah</span>
                        <span class="showcase-amount">RM<b>55</b></span>
                        <span class="showcase-per">/bulan</span>
                    </div>
                </div>

                <!-- Stats strip -->
                <div class="showcase-stats">
                    <div class="showcase-stat">
                        <span class="showcase-stat-num">7,000+</span>
                        <span class="showcase-stat-label">Keluarga</span>
                    </div>
                    <div class="showcase-stat">
                        <span class="showcase-stat-num">RM55</span>
                        <span class="showcase-stat-label">Serendah/bln</span>
                    </div>
                    <div class="showcase-stat">
                        <span class="showcase-stat-num">0%</span>
                        <span class="showcase-stat-label">Faedah</span>
                    </div>
                </div>

                <!-- Feature grid -->
                <div class="showcase-features">
                    <div class="showcase-feat">
                        <div class="feat-icon feat-red"><i class="fas fa-shield-alt"></i></div>
                        <div class="feat-text">
                            <strong>Insuran Penuh</strong>
                            <span>Perlindungan 360°</span>
                        </div>
                    </div>
                    <div class="showcase-feat">
                        <div class="feat-icon feat-blue"><i class="fas fa-snowflake"></i></div>
                        <div class="feat-text">
                            <strong>Inverter</strong>
                            <span>Jimat Tenaga</span>
                        </div>
                    </div>
                    <div class="showcase-feat">
                        <div class="feat-icon feat-green"><i class="fas fa-truck"></i></div>
                        <div class="feat-text">
                            <strong>100% Percuma</strong>
                            <span>Hantar & Pasang</span>
                        </div>
                    </div>
                    <div class="showcase-feat">
                        <div class="feat-icon feat-yellow"><i class="fas fa-wrench"></i></div>
                        <div class="feat-text">
                            <strong>Waranti Penuh</strong>
                            <span>Servis Berjadual</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Bar -->
<section class="benefits-bar" id="kelebihan">
    <div class="container">
        <div class="benefits-grid">
            <div class="benefit-item" data-aos="fade-up" data-aos-delay="0">
                <div class="benefit-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <div class="benefit-text">
                    <strong>Pelan Penjagaan KHIND</strong>
                    <span>Waranti Komprehensif & Servis Berjadual</span>
                </div>
            </div>
            <div class="benefit-item" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-icon">
                    <i class="fas fa-tools"></i>
                </div>
                <div class="benefit-text">
                    <strong>Pemasangan PERCUMA</strong>
                    <span>Profesional & Penempatan Semula</span>
                </div>
            </div>
            <div class="benefit-item" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-icon">
                    <i class="fas fa-truck"></i>
                </div>
                <div class="benefit-text">
                    <strong>Penghantaran PERCUMA</strong>
                    <span>Selamat & Tepat Pada Masanya</span>
                </div>
            </div>
            <div class="benefit-item" data-aos="fade-up" data-aos-delay="300">
                <div class="benefit-icon">
                    <i class="fas fa-umbrella"></i>
                </div>
                <div class="benefit-text">
                    <strong>Insuran Penuh</strong>
                    <span>Dilindungi Sepenuhnya</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Insurance Section -->
<section class="insurance-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-badge">Perlindungan Anda</span>
            <h2>Ketenangan Fikiran Dengan Perlindungan Insuran Penuh</h2>
            <p>Mudah dengan KHIND — kalau mesin rosak, ada gangguan teknikal, atau berlaku bencana alam — kami akan urus semuanya untuk anda.</p>
        </div>
        <div class="insurance-grid">
            <div class="insurance-card" data-aos="fade-up" data-aos-delay="0">
                <div class="insurance-icon"><i class="fas fa-tools"></i></div>
                <h4>Kerosakan Mekanikal</h4>
                <p>Kami tanggung kos baik pulih</p>
            </div>
            <div class="insurance-card" data-aos="fade-up" data-aos-delay="100">
                <div class="insurance-icon"><i class="fas fa-fire-alt"></i></div>
                <h4>Kebakaran</h4>
                <p>Dilindungi sepenuhnya</p>
            </div>
            <div class="insurance-card" data-aos="fade-up" data-aos-delay="200">
                <div class="insurance-icon"><i class="fas fa-bolt"></i></div>
                <h4>Kilat</h4>
                <p>Perlindungan kerosakan kilat</p>
            </div>
            <div class="insurance-card" data-aos="fade-up" data-aos-delay="300">
                <div class="insurance-icon"><i class="fas fa-water"></i></div>
                <h4>Bencana Alam</h4>
                <p>Banjir, ribut & lain-lain</p>
            </div>
            <div class="insurance-card" data-aos="fade-up" data-aos-delay="400">
                <div class="insurance-icon"><i class="fas fa-user-secret"></i></div>
                <h4>Kecurian</h4>
                <p>Perlindungan kecurian</p>
            </div>
            <div class="insurance-card" data-aos="fade-up" data-aos-delay="500">
                <div class="insurance-icon"><i class="fas fa-exclamation-triangle"></i></div>
                <h4>Kemalangan</h4>
                <p>Kemalangan tidak sengaja</p>
            </div>
        </div>
    </div>
</section>

<!-- Product Catalog Section -->
<section class="catalog-section" id="katalog">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-badge">Koleksi Produk</span>
            <h2>Katalog KHIND RTO</h2>
            <p>Pilih peralatan rumah idaman anda dengan bayaran bulanan yang rendah</p>
        </div>

        <!-- Category Filter -->
        <div class="catalog-filter" data-aos="fade-up" data-aos-delay="100">
            <button class="filter-btn active" data-filter="all">
                <i class="fas fa-th-large"></i> Semua
            </button>
            <?php foreach ($products as $key => $cat): ?>
            <button class="filter-btn" data-filter="<?= $key ?>">
                <i class="<?= $cat['icon'] ?>"></i> <?= $cat['category'] ?>
            </button>
            <?php endforeach; ?>
        </div>

        <!-- Products Grid -->
        <div class="products-grid">
            <?php foreach ($products as $catKey => $cat): ?>
                <?php foreach ($cat['items'] as $product): ?>
                <div class="product-card" data-category="<?= $catKey ?>" data-aos="fade-up">
                    <?php if (!empty($product['badge'])): ?>
                    <div class="product-badge"><?= $product['badge'] ?></div>
                    <?php endif; ?>
                    <?php if (!empty($product['price_original']) && $product['price_original'] > $product['price_monthly']): ?>
                    <div class="product-badge sale">
                        -<?= round((1 - $product['price_monthly']/$product['price_original']) * 100) ?>%
                    </div>
                    <?php endif; ?>

                    <div class="product-image">
                        <img src="<?= image($product['image']) ?>" alt="<?= $product['name'] ?>" loading="lazy" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22300%22 height=%22300%22><rect fill=%22%23f8f8f8%22 width=%22300%22 height=%22300%22/><text x=%2250%%22 y=%2250%%22 text-anchor=%22middle%22 fill=%22%23ccc%22 font-size=%2214%22><?= urlencode($product['model']) ?></text></svg>'">
                    </div>

                    <div class="product-info">
                        <span class="product-category"><?= $cat['category_label'] ?></span>
                        <h3 class="product-model"><?= $product['model'] ?></h3>
                        <p class="product-name"><?= $product['name'] ?></p>

                        <div class="product-features">
                            <?php foreach (array_slice($product['features'], 0, 3) as $feat): ?>
                            <span class="feature-tag"><i class="fas fa-check"></i> <?= $feat ?></span>
                            <?php endforeach; ?>
                        </div>

                        <div class="product-price">
                            <span class="price-label">Bulanan Serendah</span>
                            <div class="price-row">
                                <?php if (!empty($product['price_original']) && $product['price_original'] > $product['price_monthly']): ?>
                                <span class="price-original">RM<?= $product['price_original'] ?></span>
                                <?php endif; ?>
                                <span class="price-current">RM<?= $product['price_monthly'] ?></span>
                                <span class="price-period">/bulan</span>
                            </div>
                        </div>

                        <div class="product-actions">
                            <a href="<?= getWhatsAppLink($agent['whatsapp'], 'Hai, Saya berminat dengan ' . $product['name'] . ' secara RTO') ?>" target="_blank" class="btn btn-primary btn-sm">
                                <i class="fab fa-whatsapp"></i> Tanya Sekarang
                            </a>
                            <button class="btn btn-ghost btn-sm btn-detail" onclick="showProductDetail('<?= $product['id'] ?>')">
                                <i class="fas fa-info-circle"></i> Info
                            </button>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>

        <div class="catalog-cta" data-aos="fade-up">
            <a href="<?= url('catalog') ?>" class="btn btn-outline btn-lg">
                <i class="fas fa-th-large"></i> Lihat Semua Produk
            </a>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="steps-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-badge">Cara Memohon</span>
            <h2>4 Langkah Mudah!</h2>
            <p>Proses permohonan yang ringkas dan pantas</p>
        </div>
        <div class="steps-grid">
            <div class="step-card" data-aos="fade-up" data-aos-delay="0">
                <div class="step-number">1</div>
                <div class="step-icon"><i class="fas fa-hand-pointer"></i></div>
                <h4>Pilih Produk</h4>
                <p>Pilih barangan elektrik yang anda inginkan dari katalog kami</p>
            </div>
            <div class="step-connector" data-aos="fade-up"><i class="fas fa-chevron-right"></i></div>
            <div class="step-card" data-aos="fade-up" data-aos-delay="100">
                <div class="step-number">2</div>
                <div class="step-icon"><i class="fas fa-id-card"></i></div>
                <h4>Hantar IC</h4>
                <p>Hanya perlu salinan IC — tanpa penjamin, tanpa kad kredit</p>
            </div>
            <div class="step-connector" data-aos="fade-up"><i class="fas fa-chevron-right"></i></div>
            <div class="step-card" data-aos="fade-up" data-aos-delay="200">
                <div class="step-number">3</div>
                <div class="step-icon"><i class="fas fa-file-signature"></i></div>
                <h4>Tandatangan</h4>
                <p>Tandatangan perjanjian RTO secara digital — mudah dan cepat</p>
            </div>
            <div class="step-connector" data-aos="fade-up"><i class="fas fa-chevron-right"></i></div>
            <div class="step-card" data-aos="fade-up" data-aos-delay="300">
                <div class="step-number">4</div>
                <div class="step-icon"><i class="fas fa-home"></i></div>
                <h4>Terima & Guna</h4>
                <p>Barang dihantar & dipasang PERCUMA terus ke rumah anda</p>
            </div>
        </div>
    </div>
</section>

<!-- Comparison Table -->
<section class="comparison-section" id="kenapa-khind">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-badge">Perbandingan</span>
            <h2>Kelebihan KHIND RTO VS Jenama Lain</h2>
        </div>
        <div class="comparison-table-wrapper" data-aos="fade-up" data-aos-delay="100">
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>Ciri-ciri</th>
                        <th class="khind-col">
                            <span class="logo-icon small">K</span> KHIND RTO
                        </th>
                        <th>Jenama Lain</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Penghantaran PERCUMA</td>
                        <td class="khind-col"><i class="fas fa-check-circle text-success"></i></td>
                        <td><i class="fas fa-check-circle text-success"></i></td>
                    </tr>
                    <tr>
                        <td>Pemasangan PERCUMA</td>
                        <td class="khind-col"><i class="fas fa-check-circle text-success"></i></td>
                        <td><i class="fas fa-check-circle text-success"></i></td>
                    </tr>
                    <tr>
                        <td>Waranti</td>
                        <td class="khind-col"><i class="fas fa-check-circle text-success"></i></td>
                        <td><i class="fas fa-check-circle text-success"></i></td>
                    </tr>
                    <tr>
                        <td>PERCUMA Penempatan Semula</td>
                        <td class="khind-col"><i class="fas fa-check-circle text-success"></i></td>
                        <td><i class="fas fa-times-circle text-danger"></i></td>
                    </tr>
                    <tr>
                        <td>Guna IC Sahaja</td>
                        <td class="khind-col"><i class="fas fa-check-circle text-success"></i></td>
                        <td><i class="fas fa-times-circle text-danger"></i></td>
                    </tr>
                    <tr>
                        <td>Tiada Kad Kredit Diperlukan</td>
                        <td class="khind-col"><i class="fas fa-check-circle text-success"></i></td>
                        <td><i class="fas fa-times-circle text-danger"></i></td>
                    </tr>
                    <tr>
                        <td>Tak Perlu Penjamin</td>
                        <td class="khind-col"><i class="fas fa-check-circle text-success"></i></td>
                        <td><i class="fas fa-times-circle text-danger"></i></td>
                    </tr>
                    <tr>
                        <td>Bukan Pinjaman Kredit / Tanpa Faedah</td>
                        <td class="khind-col"><i class="fas fa-check-circle text-success"></i></td>
                        <td><i class="fas fa-times-circle text-danger"></i></td>
                    </tr>
                    <tr>
                        <td>Suri Rumah Boleh Mohon</td>
                        <td class="khind-col"><i class="fas fa-check-circle text-success"></i></td>
                        <td><i class="fas fa-times-circle text-danger"></i></td>
                    </tr>
                    <tr>
                        <td>Pelan Penjagaan Tahunan</td>
                        <td class="khind-col"><i class="fas fa-check-circle text-success"></i></td>
                        <td><i class="fas fa-times-circle text-danger"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Enquiry Form -->
<section class="form-section">
    <div class="container">
        <div class="form-wrapper" data-aos="fade-up">
            <div class="form-content">
                <span class="section-badge">Berminat?</span>
                <h2>Berminat Untuk Rent-To-Own?</h2>
                <p>Isi borang ringkas ini dan ejen kami akan menghubungi anda segera!</p>

                <form class="rto-form" id="rtoForm" onsubmit="handleFormSubmit(event)">
                    <div class="form-group">
                        <label for="fullName"><i class="fas fa-user"></i> Nama Penuh *</label>
                        <input type="text" id="fullName" name="fullName" required placeholder="Masukkan nama penuh anda">
                    </div>
                    <div class="form-group">
                        <label for="phone"><i class="fas fa-phone"></i> Nombor Telefon *</label>
                        <input type="tel" id="phone" name="phone" required placeholder="60XXXXXXXXX">
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="fas fa-envelope"></i> Email *</label>
                        <input type="email" id="email" name="email" required placeholder="email@contoh.com">
                    </div>
                    <div class="form-group">
                        <label for="planSelection"><i class="fas fa-box"></i> Pilihan Pelan *</label>
                        <select id="planSelection" name="planSelection" required>
                            <option value="">-- Pilih Produk --</option>
                            <?php foreach ($products as $cat): ?>
                                <?php foreach ($cat['items'] as $product): ?>
                                <option value="<?= $product['model'] ?>"><?= $product['model'] ?> - <?= $product['name'] ?></option>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        <i class="fas fa-paper-plane"></i> Hantar Permohonan
                    </button>
                </form>
            </div>
            <div class="form-visual">
                <div class="form-visual-content">
                    <i class="fas fa-headset"></i>
                    <h3>Kami Sedia Membantu</h3>
                    <p>Ejen kami akan menghubungi anda dalam masa 24 jam untuk membantu proses permohonan.</p>
                    <div class="form-visual-features">
                        <div><i class="fas fa-check"></i> Proses pantas</div>
                        <div><i class="fas fa-check"></i> Tiada caj tersembunyi</div>
                        <div><i class="fas fa-check"></i> Kelulusan dalam 24 jam</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
