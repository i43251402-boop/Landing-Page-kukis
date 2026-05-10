<!-- ==================== HERO ==================== -->
<section class="hero" id="home">
    <div class="hero-blobs">
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
        <div class="blob blob-3"></div>
    </div>
    <div class="hero-container">
        <div class="hero-content">
            <span class="hero-badge">✨ Homemade with Love</span>
            <h1 class="hero-title">
                Kukis <em>Manis</em><br>untuk Hari<br>yang <em>Spesial</em>
            </h1>
            <p class="hero-desc">
                Dibuat dari bahan-bahan pilihan terbaik, dipanggang dengan penuh kasih sayang setiap harinya. Rasakan kelezatan kukis homemade yang bikin kamu senyum!
            </p>
            <div class="hero-buttons">
                <a href="#menu" class="btn-primary">Lihat Menu 🍪</a>
                <a href="https://wa.me/6281234567890" class="btn-secondary" target="_blank">Pesan Custom</a>
            </div>
            <div class="hero-stats">
                <div class="stat">
                    <strong>500+</strong>
                    <span>Pelanggan Puas</span>
                </div>
                <div class="stat-divider"></div>
                <div class="stat">
                    <strong>20+</strong>
                    <span>Varian Kukis</span>
                </div>
                <div class="stat-divider"></div>
                <div class="stat">
                    <strong>4.9⭐</strong>
                    <span>Rating</span>
                </div>
            </div>
        </div>
        <div class="hero-visual">
            <div class="hero-img-wrapper">
                <img src="assets/images/kukis.jpg" alt="Kukis Premium Crumble & Co" class="hero-img">
                <div class="hero-img-deco hero-img-deco-1">🍪</div>
                <div class="hero-img-deco hero-img-deco-2">💕</div>
                <div class="hero-img-deco hero-img-deco-3">✨</div>
            </div>
        </div>
    </div>
    <div class="hero-wave">
        <svg viewBox="0 0 1440 80" preserveAspectRatio="none">
            <path d="M0,40 C360,80 1080,0 1440,40 L1440,80 L0,80 Z" fill="#fff9fb"/>
        </svg>
    </div>
</section>

<!-- ==================== FEATURES ==================== -->
<section class="features" id="features">
    <div class="section-container">
        <div class="feature-card reveal">
            <div class="feature-icon">🌿</div>
            <h3>Bahan Alami</h3>
            <p>Menggunakan butter asli, telur segar, dan bahan pilihan tanpa pengawet buatan.</p>
        </div>
        <div class="feature-card reveal">
            <div class="feature-icon">🏠</div>
            <h3>Homemade</h3>
            <p>Dibuat langsung di dapur kami dengan resep rahasia turun-temurun yang otentik.</p>
        </div>
        <div class="feature-card reveal">
            <div class="feature-icon">🚀</div>
            <h3>Pengiriman Cepat</h3>
            <p>Dikemas dengan aman dan dikirim hari yang sama untuk menjaga kesegaran kukis.</p>
        </div>
        <div class="feature-card reveal">
            <div class="feature-icon">🎁</div>
            <h3>Custom Order</h3>
            <p>Bisa pesan sesuai keinginan untuk hampers, ulang tahun, pernikahan, atau acara spesial lainnya.</p>
        </div>
    </div>
</section>

<!-- ==================== MENU ==================== -->
<section class="menu-section" id="menu">
    <div class="section-header reveal">
        <span class="section-tag">Menu Kami</span>
        <h2 class="section-title">Pilihan Kukis <em>Favorit</em></h2>
        <p class="section-desc">Dari yang klasik hingga yang unik, semua ada di sini. Pilih favoritmu!</p>
    </div>

    <div class="menu-grid">
        <?php foreach ($menus as $index => $menu): ?>
        <div class="menu-card reveal" style="animation-delay: <?= $index * 0.1 ?>s">
            <div class="menu-img-wrap">
                <img src="<?= htmlspecialchars($menu['image']) ?>"
                     alt="<?= htmlspecialchars($menu['name']) ?>"
                     class="menu-img"
                     onerror="this.src='assets/images/placeholder.jpg'; this.style.objectFit='contain';">
                <?php if (!empty($menu['badge'])): ?>
                <span class="menu-badge"><?= htmlspecialchars($menu['badge']) ?></span>
                <?php endif; ?>
            </div>
            <div class="menu-body">
                <h3 class="menu-name"><?= htmlspecialchars($menu['name']) ?></h3>
                <p class="menu-desc"><?= htmlspecialchars($menu['description']) ?></p>
                <div class="menu-footer">
                    <span class="menu-price">Rp <?= number_format($menu['price'], 0, ',', '.') ?></span>
                    <a href="https://wa.me/6281234567890?text=Halo,%20saya%20mau%20pesan%20<?= urlencode($menu['name']) ?>"
                       class="menu-order-btn" target="_blank">Pesan</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- ==================== ABOUT ==================== -->
<section class="about-section" id="about">
    <div class="about-blob"></div>
    <div class="about-container">
        <div class="about-visual reveal">
            <div class="about-img-stack">
                <img src="assets/images/dapur.jpg" alt="Dapur kami" class="about-img about-img-main">
                <img src="assets/images/proses.jpg" alt="Proses membuat kukis" class="about-img about-img-secondary">
                <div class="about-badge-float">
                    <span>🍪</span>
                    <p>Dibuat<br>setiap hari</p>
                </div>
            </div>
        </div>
        <div class="about-content reveal">
            <span class="section-tag">Tentang Kami</span>
            <h2 class="section-title">Kisah di Balik<br>Setiap <em>Gigitan</em></h2>
            <p>Crumble & Co. lahir dari dapur kecil seorang ibu rumah tangga yang percaya bahwa makanan terbaik adalah yang dibuat dengan cinta. Sejak 2020, kami telah membahagiakan ratusan pelanggan dengan kukis homemade premium kami.</p>
            <p>Setiap kukis yang kami buat adalah hasil dari resep yang telah kami sempurnakan bertahun-tahun, menggunakan bahan-bahan segar berkualitas tinggi tanpa bahan pengawet.</p>
            <ul class="about-list">
                <li>✅ Tanpa pengawet & pewarna buatan</li>
                <li>✅ Bahan baku segar pilihan setiap hari</li>
                <li>✅ Dikemas higienis & ramah lingkungan</li>
                <li>✅ Tersedia pilihan vegan & gluten-free</li>
            </ul>
            <a href="#menu" class="btn-primary">Lihat Menu Lengkap</a>
        </div>
    </div>
</section>

<!-- ==================== TESTIMONIALS ==================== -->
<section class="testimonial-section" id="testimonial">
    <div class="section-header reveal">
        <span class="section-tag">Review Pelanggan</span>
        <h2 class="section-title">Kata Mereka<br>tentang <em>Crumble & Co.</em></h2>
    </div>

    <div class="testi-grid">
        <div class="testi-card reveal">
            <div class="testi-stars">⭐⭐⭐⭐⭐</div>
            <p class="testi-text">"Kukisnya enak banget! Lembut, harum, dan tidak terlalu manis. Cocok banget buat hampers lebaran. Pasti repeat order terus!"</p>
            <div class="testi-author">
                <div class="testi-avatar">SR</div>
                <div>
                    <strong>Siti Rahayu</strong>
                    <span>Surabaya, Jawa Timur</span>
                </div>
            </div>
        </div>
        <div class="testi-card reveal">
            <div class="testi-stars">⭐⭐⭐⭐⭐</div>
            <p class="testi-text">"Pesan buat ulang tahun anak, hasilnya cantik banget dan rasanya enak. Anakku suka banget! Packagingnya juga lucuuu 💕"</p>
            <div class="testi-author">
                <div class="testi-avatar">DL</div>
                <div>
                    <strong>Dinda Lestari</strong>
                    <span>Malang, Jawa Timur</span>
                </div>
            </div>
        </div>
        <div class="testi-card reveal">
            <div class="testi-stars">⭐⭐⭐⭐⭐</div>
            <p class="testi-text">"Sudah langganan dari 2021, konsisten enak terus! Choco Dreamy favorit saya, selalu jadi pilihan saat ngidam kukis."</p>
            <div class="testi-author">
                <div class="testi-avatar">AN</div>
                <div>
                    <strong>Andi Nugroho</strong>
                    <span>Jember, Jawa Timur</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== CTA BANNER ==================== -->
<section class="cta-section">
    <div class="cta-blob cta-blob-1"></div>
    <div class="cta-blob cta-blob-2"></div>
    <div class="cta-content reveal">
        <span class="cta-emoji">🍪</span>
        <h2>Mau Pesan Kukis<br>Spesialmu?</h2>
        <p>Hubungi kami sekarang dan wujudkan kukis impianmu. Custom bentuk, rasa, dan kemasan tersedia!</p>
        <div class="cta-buttons">
            <a href="https://wa.me/6281234567890" class="btn-primary btn-large" target="_blank">
                💬 Chat WhatsApp
            </a>
            <a href="#menu" class="btn-outline btn-large">Lihat Menu</a>
        </div>
    </div>
</section>