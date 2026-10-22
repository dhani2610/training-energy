

<?php $__env->startSection('title', 'Jasa Coating Blasting Painting ' . $kecamatanData['name'] . ', ' . $kecamatanData['kabkot']['name'] . ' | Sertifikasi Jasa Proteksi Korosi & Blasting Painting Resmi'); ?>
<?php $__env->startSection('meta_description', 'Layanan resmi layanan pengerjaan dan inspeksi kompetensi K3 Jasa Proteksi Korosi & Blasting Painting (Jasa Coating Blasting Painting Crew) di Kecamatan ' . $kecamatanData['name'] . ', ' . $kecamatanData['kabkot']['name'] . ', ' . $kecamatanData['province']['name'] . '. Hubungi WhatsApp 081399810272.'); ?>

<?php $__env->startSection('content'); ?>

    <!-- HERO KECAMATAN -->
    <section class="hero-section" style="padding: 48px 0 44px; text-align: left;">
        <div class="container">
            <div style="font-size: 0.82rem; color: #a7f3d0; margin-bottom: 16px; display: flex; align-items: center; gap: 8px; flex-wrap: wrap;">
                <a href="<?php echo e(route('home')); ?>" style="color: #cbd5e1;"><i class="bi bi-house-door"></i> Beranda</a>
                <span>/</span>
                <a href="<?php echo e(route('wilayah.provinsi', $kecamatanData['province']['slug'])); ?>" style="color: #cbd5e1;">Provinsi <?php echo e($kecamatanData['province']['name']); ?></a>
                <span>/</span>
                <a href="<?php echo e(route('wilayah.kabkot', [$kecamatanData['province']['slug'], $kecamatanData['kabkot']['slug']])); ?>" style="color: #cbd5e1;"><?php echo e($kecamatanData['kabkot']['name']); ?></a>
                <span>/</span>
                <span style="color: #ffffff; font-weight: 700;">Kecamatan <?php echo e($kecamatanData['name']); ?></span>
            </div>

            <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 14px; flex-wrap: wrap;">
                <span class="hero-badge" style="margin-bottom: 0;">
                    <i class="bi bi-geo-alt-fill"></i> Kecamatan <?php echo e($kecamatanData['name']); ?>

                </span>
                <span class="hero-badge" style="margin-bottom: 0; background: rgba(16, 185, 129, 0.2); border-color: #34d399; color: #a7f3d0;">
                    <i class="bi bi-buildings"></i> <?php echo e($kecamatanData['kabkot']['name']); ?>

                </span>
                <span class="hero-badge" style="margin-bottom: 0; background: rgba(16, 185, 129, 0.2); border-color: #10b981; color: #a7f3d0;">
                    <i class="bi bi-shield-check"></i> Standar Mutu Preparasi Permukaan ISO 8501-1 & Standar Pelapisan SSPC / NACE Internasional
                </span>
            </div>

            <h1 class="hero-title" style="margin-left: 0; font-size: 2.2rem; line-height: 1.25; margin-bottom: 14px;">
                Jasa Coating Blasting Painting <span>Kecamatan <?php echo e($kecamatanData['name']); ?></span>
            </h1>

            <p class="hero-lead" style="margin-left: 0; max-width: 880px; margin-bottom: 22px;">
                Penyelenggaraan layanan jasa kompetensi Operator Keselamatan & Kesehatan Kerja Korporat (Jasa Coating Blasting Painting) di Kecamatan <?php echo e($kecamatanData['name']); ?>, <?php echo e($kecamatanData['kabkot']['name']); ?>, Provinsi <?php echo e($kecamatanData['province']['name']); ?>. Menguasai standar manajemen keselamatan kerja, keselamatan tempat kerja (Auditor SMK3), operasional menara (Analis Risiko HIRADC), pengendalian tekanan sumur (Manajemen Risiko K3 ISO 45001 & IADC), pengujian BOP bertekanan tinggi, dan formulasi keselamatan proses industri (Pengurus P2K3 Bipartit).
            </p>

            <div class="hero-cta" style="justify-content: flex-start; margin-bottom: 0;">
                <a href="<?php echo e($waLink); ?>" target="_blank" class="btn-primary-green">
                    <i class="bi bi-whatsapp"></i>
                    Konsultasi Wilayah <?php echo e($kecamatanData['name']); ?>

                </a>
                <a href="#kecamatan-nav-box" class="btn-outline-white">
                    <i class="bi bi-pin-map-fill"></i>
                    Pilih Kecamatan Lain
                </a>
            </div>
        </div>
    </section>

    <!-- 6 PROGRAM LAYANAN JASA -->
    <section class="section-py">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">6 Program Resmi di <?php echo e($kecamatanData['name']); ?></span>
                <h2 class="section-title">Layanan Jasa Proteksi Korosi Industri, Blasting Sa 2.5 Sa 3 & Aplikasi Protective Coating Resmi</h2>
                <p class="section-desc">
                    Tersedia 8 layanan jasa profesional yang masing-masing memiliki panduan lingkup pengerjaan dan spesifikasi teknis di Kecamatan <?php echo e($kecamatanData['name']); ?>:
                </p>
            </div>

            <div class="programs-grid" style="margin-bottom: 48px;">
                <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $progObj = (object)$prog;
                        $progDetailUrl = route('wilayah.kecamatan.program', [$kecamatanData['province']['slug'], $kecamatanData['kabkot']['slug'], $kecamatanData['slug'], $progObj->slug]);
                    ?>
                    <div class="program-card">
                        <div class="program-img-wrapper">
                            <img src="<?php echo e($progObj->image ?? 'https://images.unsplash.com/photo-1541888946425-d0fbb18615f3?w=800&auto=format&fit=crop&q=80'); ?>" alt="<?php echo e($progObj->title); ?>" class="program-img" loading="lazy">
                            <span class="program-badge"><?php echo e($progObj->badge ?? 'Sertifikasi Resmi'); ?></span>
                        </div>

                        <div class="program-body">
                            <div class="program-level"><?php echo e($progObj->level_name ?? 'Sertifikasi Ahli K3 Keselamatan Kerja'); ?></div>
                            <h3 class="program-title"><?php echo e($progObj->title); ?></h3>
                            <p class="program-desc">
                                <?php echo e(Str::limit($progObj->short_description ?? ($progObj->full_description ?? ''), 130)); ?>

                            </p>

                            <div class="program-meta">
                                <div><i class="bi bi-geo-alt" style="color: #10b981;"></i> <?php echo e($kecamatanData['name']); ?></div>
                                <div><i class="bi bi-journal-check" style="color: #10b981;"></i> Modul Panduan Lengkap</div>
                            </div>

                            <div class="program-footer-btn">
                                <a href="<?php echo e($progDetailUrl); ?>" class="btn-primary-green" style="width: 100%; justify-content: center; font-size: 0.84rem; padding: 10px 14px;">
                                    <i class="bi bi-collection-play-fill"></i> Buka Direktori Panduan <?php echo e($kecamatanData['name']); ?>

                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- 4 WHATSAPP HOTLINES -->
            <div class="wa-hotlines-box" style="margin-bottom: 48px;">
                <div class="wa-hotlines-header">
                    <h3><i class="bi bi-telephone-inbound-fill" style="color: var(--accent-mint); margin-right: 8px;"></i> 4 Nomor WhatsApp Resmi Layanan di <?php echo e($kecamatanData['name']); ?></h3>
                    <p>Silakan hubungi kontak resmi kami untuk konsultasi estimasi biaya, survei lapangan, dan jadwal pengerjaan proyek di lokasi Anda:</p>
                </div>

                <div class="wa-cards-grid">
                    <?php $__currentLoopData = $waNumbers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="wa-hotline-card <?php echo e(!empty($wa['is_primary']) ? 'primary-hotline-card' : ''); ?>">
                            <div class="wa-card-top">
                                <div class="wa-card-icon">
                                    <i class="bi <?php echo e($wa['icon']); ?>"></i>
                                </div>
                                <span class="wa-card-badge"><?php echo e($wa['badge']); ?></span>
                            </div>
                            <h4 class="wa-card-title"><?php echo e($wa['title']); ?></h4>
                            <p class="wa-card-desc"><?php echo e($wa['desc']); ?></p>
                            <a href="<?php echo e($wa['url']); ?>" target="_blank" class="btn-wa-card">
                                <i class="bi bi-whatsapp"></i> Chat <?php echo e($wa['number']); ?>

                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <!-- NAVIGASI KECAMATAN LAIN (SEBELUM ARTIKEL AGAR AKSES CEPAT TANPA SCROLL JAUH) -->
            <?php if(isset($kecamatanList) && count($kecamatanList) > 0): ?>
                <div id="kecamatan-nav-box" style="background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%); border: 2px solid #a7f3d0; border-radius: var(--radius-xl); padding: 32px; margin-bottom: 48px; box-shadow: 0 10px 30px -5px rgba(16, 185, 129, 0.1);">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 18px; border-bottom: 1px solid #e2e8f0; padding-bottom: 16px; flex-wrap: wrap; gap: 12px;">
                        <div>
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <a href="<?php echo e(route('wilayah.kabkot', [$kecamatanData['province']['slug'], $kecamatanData['kabkot']['slug']])); ?>" style="font-size: 0.78rem; font-weight: 700; color: #4c1d95; background: #ecfdf5; border: 1px solid #a7f3d0; padding: 4px 10px; border-radius: 6px; text-decoration: none;">
                                    <i class="bi bi-arrow-left"></i> <?php echo e($kecamatanData['kabkot']['name']); ?>

                                </a>
                                <span style="font-size: 0.78rem; font-weight: 800; background: #062e22; color: #a7f3d0; padding: 4px 12px; border-radius: 20px;">
                                    <i class="bi bi-geo-alt-fill"></i> Kecamatan di <?php echo e($kecamatanData['kabkot']['name']); ?>

                                </span>
                            </div>
                            <h2 style="font-size: 1.4rem; font-weight: 800; color: #062e22; margin: 0;">
                                Pilih Kecamatan Lain di <?php echo e($kecamatanData['kabkot']['name']); ?>

                            </h2>
                        </div>
                        <a href="<?php echo e(route('wilayah.provinsi', $kecamatanData['province']['slug'])); ?>" style="font-size: 0.82rem; color: #475569; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 6px;">
                            <i class="bi bi-globe"></i> Semua Kota di <?php echo e($kecamatanData['province']['name']); ?>

                        </a>
                    </div>

                    <p style="font-size: 0.88rem; color: #475569; line-height: 1.6; margin-bottom: 20px;">
                        Beralih ke kecamatan lain di lingkungan <?php echo e($kecamatanData['kabkot']['name']); ?> untuk melihat jangkauan layanan jasa pengerjaan Coating Blasting Painting terdekat:
                    </p>

                    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 10px;">
                        <?php $__currentLoopData = $kecamatanList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $kecSlug = Str::slug($kec);
                                $isCurrent = ($kecSlug === $kecamatanData['slug']);
                                $kecUrl = route('wilayah.kecamatan', [$kecamatanData['province']['slug'], $kecamatanData['kabkot']['slug'], $kecSlug]);
                            ?>
                            <a href="<?php echo e($kecUrl); ?>" style="padding: 10px 14px; border-radius: 8px; text-decoration: none; font-size: 0.86rem; font-weight: 700; display: flex; align-items: center; justify-content: space-between; border: 1px solid <?php echo e($isCurrent ? '#10b981' : '#cbd5e1'); ?>; background: <?php echo e($isCurrent ? '#ecfdf5' : '#ffffff'); ?>; color: <?php echo e($isCurrent ? '#854d0e' : '#09392b'); ?>;">
                                <span><i class="bi <?php echo e($isCurrent ? 'bi-check-circle-fill' : 'bi-pin-map'); ?>" style="color: #10b981; margin-right: 6px;"></i> Kec. <?php echo e($kec); ?></span>
                                <?php if($isCurrent): ?>
                                    <span style="font-size: 0.7rem; background: #10b981; color: #fff; padding: 2px 6px; border-radius: 4px;">Aktif</span>
                                <?php else: ?>
                                    <i class="bi bi-chevron-right" style="color: #94a3b8; font-size: 0.8rem;"></i>
                                <?php endif; ?>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- MODUL ARTIKEL PANDUAN KECAMATAN -->
            <div id="daftar-artikel" class="section-header" style="margin-top: 48px; text-align: left;">
                <span class="section-tag">Panduan Jasa Coating Blasting Painting</span>
                <h2 class="section-title">Daftar Direktori Panduan Lengkap Jasa Coating Blasting Painting di Kecamatan <?php echo e($kecamatanData['name']); ?></h2>
                <p class="section-desc" style="margin-left: 0;">
                    Kumpulan panduan modul mendalam mencakup standar kompetensi teknisi blasting & coating, prosedur penutupan sumur cepat (shut-in), sistem pengendalian tekanan sumur (Manajemen Risiko K3), pengujian BOP bertekanan tinggi, dan keselamatan tempat kerja di Kecamatan <?php echo e($kecamatanData['name']); ?>, <?php echo e($kecamatanData['kabkot']['name']); ?>:
                </p>
            </div>

            <div class="articles-grid">
                <?php $__currentLoopData = $regionalArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $artObj = (object)$art;
                        $artUrl = route('article.detail', $artObj->slug);
                    ?>
                    <div class="article-card">
                        <div class="article-badge">
                            <i class="bi bi-bookmark-fill me-1"></i> Modul #<?php echo e($loop->iteration); ?>

                        </div>
                        <h3 class="article-title">
                            <a href="<?php echo e($artUrl); ?>"><?php echo e($artObj->title); ?></a>
                        </h3>
                        <p class="article-excerpt">
                            Panduan teknis dan standar operasional Jasa Coating Blasting Painting di Kecamatan <?php echo e($kecamatanData['name']); ?>. Mengulas regulasi Standar Keselamatan Manajemen Keselamatan Kerja, Standar Manajemen Risiko K3 Internasional (IADC & ISO 45001), perhitungan keselamatan operasi tempat kerja dan penanganan pipa bor, serta sertifikasi kompetensi resmi.
                        </p>
                        <div class="article-footer">
                            <span><i class="bi bi-clock me-1"></i> <?php echo e($artObj->read_time ?? 35); ?> Menit Baca (Panduan Lengkap)</span>
                            <a href="<?php echo e($artUrl); ?>" class="btn-link" style="color: #4c1d95; font-weight: 700;">
                                Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- GOOGLE MAPS EMBED -->
            <div style="margin-top: 64px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; box-shadow: 0 4px 20px -2px rgba(15, 23, 42, 0.05);">
                <h3 style="font-size: 1.15rem; font-weight: 800; color: #062e22; margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                    <i class="bi bi-map-fill text-success"></i> Peta Lokasi Wilayah Kecamatan <?php echo e($kecamatanData['name']); ?>, <?php echo e($kecamatanData['kabkot']['name']); ?>

                </h3>
                <p style="font-size: 0.86rem; color: #64748b; margin-bottom: 18px;">
                    Kami melayani jasa blasting painting K3 Corporate baik secara publik maupun pengerjaan proyek industri langsung ke fasilitas perusahaan Anda di area Kecamatan <?php echo e($kecamatanData['name']); ?> dan sekitarnya.
                </p>
                <div style="width: 100%; height: 350px; border-radius: 12px; overflow: hidden; border: 1px solid #cbd5e1;">
                    <iframe src="<?php echo e($mapUrl); ?>" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\web-pelatihan\jasa-coaating-blasing-painting\resources\views/front/wilayah-kecamatan.blade.php ENDPATH**/ ?>