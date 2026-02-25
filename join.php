<?php
require_once 'config.php';
$products = getProducts();
$agent = getAgentInfo();
include 'includes/header.php';
?>

<!-- Join Hero -->
<section class="page-hero join-hero">
    <div class="container">
        <div class="page-hero-content" data-aos="fade-up">
            <span class="section-badge light">Peluang Kerjaya</span>
            <h1>Jadi Ejen KHIND RTO</h1>
            <p>Jana pendapatan lumayan sebagai Ejen Jualan Sah KHIND Rent-To-Own</p>
        </div>
    </div>
</section>

<!-- Why Join -->
<section class="join-benefits-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-badge">Kenapa Jadi Ejen?</span>
            <h2>Kelebihan Menjadi Ejen KHIND RTO</h2>
            <p>Peluang perniagaan tanpa modal besar — hanya perlukan semangat dan komitmen!</p>
        </div>
        
        <div class="join-benefits-grid">
            <div class="join-benefit-card" data-aos="fade-up" data-aos-delay="0">
                <div class="join-benefit-icon">
                    <i class="fas fa-money-bill-wave"></i>
                </div>
                <h3>Komisen Menarik</h3>
                <p>Terima komisen untuk setiap jualan yang berjaya. Lebih banyak jual, lebih banyak pendapatan!</p>
            </div>
            <div class="join-benefit-card" data-aos="fade-up" data-aos-delay="100">
                <div class="join-benefit-icon">
                    <i class="fas fa-laptop-house"></i>
                </div>
                <h3>Kerja Dari Mana-Mana</h3>
                <p>Tiada pejabat tetap — anda boleh bekerja dari rumah atau mana sahaja menggunakan telefon.</p>
            </div>
            <div class="join-benefit-card" data-aos="fade-up" data-aos-delay="200">
                <div class="join-benefit-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3>Latihan Disediakan</h3>
                <p>Kami sediakan latihan lengkap supaya anda yakin dan bersedia untuk mula menjual.</p>
            </div>
            <div class="join-benefit-card" data-aos="fade-up" data-aos-delay="300">
                <div class="join-benefit-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Komuniti Sokongan</h3>
                <p>Sertai komuniti ejen yang saling membantu dan berkongsi tips kejayaan.</p>
            </div>
            <div class="join-benefit-card" data-aos="fade-up" data-aos-delay="400">
                <div class="join-benefit-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Potensi Tanpa Had</h3>
                <p>Tiada had pendapatan — semuanya bergantung pada usaha anda sendiri.</p>
            </div>
            <div class="join-benefit-card" data-aos="fade-up" data-aos-delay="500">
                <div class="join-benefit-icon">
                    <i class="fas fa-award"></i>
                </div>
                <h3>Jenama Dipercayai</h3>
                <p>KHIND adalah jenama terkenal sejak 1961 — mudah untuk meyakinkan pelanggan.</p>
            </div>
        </div>
    </div>
</section>

<!-- How to Join Steps -->
<section class="join-steps-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-badge">Langkah Demi Langkah</span>
            <h2>Macamana Nak Jadi Ejen?</h2>
        </div>
        
        <div class="join-steps-grid">
            <div class="join-step" data-aos="fade-up" data-aos-delay="0">
                <div class="join-step-number">01</div>
                <h3>Hubungi Kami</h3>
                <p>Tekan butang di bawah untuk berhubung dengan kami melalui WhatsApp</p>
            </div>
            <div class="join-step" data-aos="fade-up" data-aos-delay="100">
                <div class="join-step-number">02</div>
                <h3>Pendaftaran</h3>
                <p>Isi borang pendaftaran ringkas dan hantar dokumen yang diperlukan</p>
            </div>
            <div class="join-step" data-aos="fade-up" data-aos-delay="200">
                <div class="join-step-number">03</div>
                <h3>Latihan</h3>
                <p>Hadiri sesi latihan percuma untuk memahami produk dan proses jualan</p>
            </div>
            <div class="join-step" data-aos="fade-up" data-aos-delay="300">
                <div class="join-step-number">04</div>
                <h3>Mula Menjual!</h3>
                <p>Anda kini sah sebagai Ejen KHIND RTO dan boleh mula menjana pendapatan</p>
            </div>
        </div>
    </div>
</section>

<!-- Recruitment Form -->
<section class="join-form-section">
    <div class="container">
        <div class="join-form-wrapper" data-aos="fade-up">
            <div class="join-form-content">
                <span class="section-badge">Daftar Sekarang</span>
                <h2>Sertai Pasukan Kami</h2>
                <p>Isi maklumat anda dan kami akan menghubungi anda untuk proses seterusnya.</p>
                
                <form class="rto-form" id="joinForm" onsubmit="handleJoinSubmit(event)">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="joinName"><i class="fas fa-user"></i> Nama Penuh *</label>
                            <input type="text" id="joinName" name="joinName" required placeholder="Masukkan nama penuh">
                        </div>
                        <div class="form-group">
                            <label for="joinIC"><i class="fas fa-id-card"></i> No. IC *</label>
                            <input type="text" id="joinIC" name="joinIC" required placeholder="XXXXXX-XX-XXXX">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="joinPhone"><i class="fas fa-phone"></i> No. Telefon *</label>
                            <input type="tel" id="joinPhone" name="joinPhone" required placeholder="60XXXXXXXXX">
                        </div>
                        <div class="form-group">
                            <label for="joinEmail"><i class="fas fa-envelope"></i> Email *</label>
                            <input type="email" id="joinEmail" name="joinEmail" required placeholder="email@contoh.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="joinState"><i class="fas fa-map-marker-alt"></i> Negeri *</label>
                        <select id="joinState" name="joinState" required>
                            <option value="">-- Pilih Negeri --</option>
                            <option>Johor</option>
                            <option>Kedah</option>
                            <option>Kelantan</option>
                            <option>Melaka</option>
                            <option>Negeri Sembilan</option>
                            <option>Pahang</option>
                            <option>Perak</option>
                            <option>Perlis</option>
                            <option>Pulau Pinang</option>
                            <option>Sabah</option>
                            <option>Sarawak</option>
                            <option>Selangor</option>
                            <option>Terengganu</option>
                            <option>Kuala Lumpur</option>
                            <option>Putrajaya</option>
                            <option>Labuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="joinExperience"><i class="fas fa-briefcase"></i> Pengalaman Jualan</label>
                        <select id="joinExperience" name="joinExperience">
                            <option value="">-- Pilih --</option>
                            <option>Tiada pengalaman</option>
                            <option>Kurang dari 1 tahun</option>
                            <option>1-3 tahun</option>
                            <option>Lebih dari 3 tahun</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="joinMessage"><i class="fas fa-comment"></i> Mesej (Pilihan)</label>
                        <textarea id="joinMessage" name="joinMessage" rows="3" placeholder="Beritahu kami kenapa anda berminat menjadi ejen KHIND RTO"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        <i class="fas fa-user-plus"></i> Daftar Sebagai Ejen
                    </button>
                </form>
            </div>
            
            <div class="join-form-sidebar">
                <div class="sidebar-card">
                    <div class="sidebar-icon"><i class="fas fa-headset"></i></div>
                    <h4>Ada Soalan?</h4>
                    <p>Hubungi kami terus melalui WhatsApp untuk sebarang pertanyaan tentang peluang ejen.</p>
                    <a href="<?= getWhatsAppLink($agent['whatsapp'], 'Hai, saya berminat untuk menjadi ejen KHIND RTO. Boleh berikan maklumat lanjut?') ?>" target="_blank" class="btn btn-whatsapp btn-sm">
                        <i class="fab fa-whatsapp"></i> Chat Sekarang
                    </a>
                </div>
                
                <div class="sidebar-testimonial">
                    <div class="testimonial-quote">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p>"Saya mula sebagai ejen part-time, sekarang pendapatan saya dah melebihi gaji bulanan saya. Terima kasih KHIND RTO!"</p>
                    <div class="testimonial-author">
                        <strong>Ahmad R.</strong>
                        <span>Ejen KHIND RTO, Selangor</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
