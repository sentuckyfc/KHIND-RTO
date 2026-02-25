<?php
require_once 'config.php';
$products = getProducts();
$agent = getAgentInfo();
include 'includes/header.php';
?>

<!-- Catalog Hero -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content" data-aos="fade-up">
            <span class="section-badge">Koleksi Lengkap</span>
            <h1>Katalog Produk KHIND RTO</h1>
            <p>Semua barangan elektrik berkualiti dengan pelan ansuran fleksibel</p>
        </div>
    </div>
</section>

<!-- Catalog Filter Bar -->
<div class="catalog-sticky-filter">
    <div class="container">
        <div class="catalog-filter">
            <button class="filter-btn active" data-filter="all">
                <i class="fas fa-th-large"></i> Semua
            </button>
            <?php foreach ($products as $key => $cat): ?>
            <button class="filter-btn" data-filter="<?= $key ?>">
                <i class="<?= $cat['icon'] ?>"></i> <?= $cat['category'] ?>
            </button>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Full Catalog -->
<section class="catalog-full-section">
    <div class="container">
        <?php foreach ($products as $catKey => $cat): ?>
        <div class="catalog-category" id="<?= $catKey ?>" data-category="<?= $catKey ?>">
            <div class="category-header" data-aos="fade-up">
                <div class="category-icon"><i class="<?= $cat['icon'] ?>"></i></div>
                <div>
                    <h2><?= $cat['category_label'] ?></h2>
                    <p><?= count($cat['items']) ?> produk tersedia</p>
                </div>
            </div>
            
            <div class="catalog-products-grid">
                <?php foreach ($cat['items'] as $product): ?>
                <div class="product-card-full" data-aos="fade-up">
                    <?php if (!empty($product['badge'])): ?>
                    <div class="product-badge"><?= $product['badge'] ?></div>
                    <?php endif; ?>
                    <?php if (!empty($product['price_original']) && $product['price_original'] > $product['price_monthly']): ?>
                    <div class="product-badge sale">
                        PROMO -<?= round((1 - $product['price_monthly']/$product['price_original']) * 100) ?>%
                    </div>
                    <?php endif; ?>
                    
                    <div class="product-card-full-inner">
                        <div class="product-image-full">
                            <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" loading="lazy" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22400%22><rect fill=%22%23f8f8f8%22 width=%22400%22 height=%22400%22/><text x=%2250%%22 y=%2250%%22 text-anchor=%22middle%22 fill=%22%23999%22 font-size=%2216%22><?= urlencode($product['model']) ?></text></svg>'">
                        </div>
                        
                        <div class="product-detail-full">
                            <span class="product-subtitle"><?= $product['subtitle'] ?></span>
                            <h3 class="product-model-full"><?= $product['model'] ?></h3>
                            <p class="product-name-full"><?= $product['name'] ?></p>
                            <p class="product-desc"><?= $product['desc'] ?></p>
                            
                            <div class="product-features-full">
                                <?php foreach ($product['features'] as $feat): ?>
                                <div class="feature-item-full">
                                    <i class="fas fa-check-circle"></i> <?= $feat ?>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            
                            <?php if (!empty($product['capacity'])): ?>
                            <div class="product-variants">
                                <span class="variant-label">Pilihan:</span>
                                <?php foreach ($product['capacity'] as $cap): ?>
                                <span class="variant-tag"><?= $cap ?></span>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>
                            
                            <div class="product-price-full">
                                <span class="price-label">Bulanan Serendah</span>
                                <div class="price-row-full">
                                    <?php if (!empty($product['price_original']) && $product['price_original'] > $product['price_monthly']): ?>
                                    <span class="price-original-full">RM<?= $product['price_original'] ?></span>
                                    <?php endif; ?>
                                    <span class="price-current-full">RM<?= $product['price_monthly'] ?></span>
                                    <span class="price-period">/bulan*</span>
                                </div>
                                <small class="price-note">*Harga promosi, tertakluk kepada terma & syarat</small>
                            </div>
                            
                            <div class="product-actions-full">
                                <a href="<?= getWhatsAppLink($agent['whatsapp'], 'Hai, Saya berminat dengan ' . $product['model'] . ' - ' . $product['name'] . ' secara RTO. Boleh berikan maklumat lanjut?') ?>" target="_blank" class="btn btn-whatsapp">
                                    <i class="fab fa-whatsapp"></i> Tanya Sekarang
                                </a>
                                <a href="<?= getWhatsAppLink($agent['whatsapp'], 'Hai, Saya ingin mohon RTO untuk ' . $product['model'] . ' - ' . $product['name']) ?>" target="_blank" class="btn btn-primary">
                                    <i class="fas fa-shopping-cart"></i> Mohon RTO
                                </a>
                            </div>
                            
                            <div class="product-guarantees">
                                <span><i class="fas fa-truck"></i> Hantar Percuma</span>
                                <span><i class="fas fa-tools"></i> Pasang Percuma</span>
                                <span><i class="fas fa-shield-alt"></i> Waranti Penuh</span>
                                <span><i class="fas fa-umbrella"></i> Insuran</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
