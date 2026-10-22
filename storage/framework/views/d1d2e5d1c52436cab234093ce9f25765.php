

<?php $__env->startSection('title', ($program->title ?? 'Layanan Jasa') . ' | Jasa Coating Blasting Painting Sertifikasi K3 Korporat Resmi'); ?>
<?php $__env->startSection('meta_description', Str::limit($program->short_description ?? ($program->full_description ?? ''), 160)); ?>

<?php $__env->startSection('content'); ?>

    <!-- HERO PROGRAM DETAIL -->
    <section class="hero-section" style="padding: 50px 0 46px; text-align: left;">
        <div class="container">
            <div style="font-size: 0.82rem; color: #a7f3d0; margin-bottom: 18px; display: flex; align-items: center; gap: 8px; flex-wrap: wrap;">
                <a href="<?php echo e(route('home')); ?>" style="color: #cbd5e1;"><i class="bi bi-house-door"></i> Beranda</a>
                <span>/</span>
                <a href="<?php echo e(route('programs')); ?>" style="color: #cbd5e1;">Layanan Jasa</a>
                <span>/</span>
                <span style="color: #ffffff; font-weight: 700;"><?php echo e($program->title); ?></span>
            </div>

            <div class="hero-badge">
                <i class="bi bi-shield-check"></i>
                <?php echo e($program->level_name ?? 'Sertifikasi Standar Mutu SSPC & NACE Resmi'); ?>

            </div>

            <h1 class="hero-title" style="margin-left: 0; font-size: 2.35rem; margin-bottom: 14px;">
                <?php echo e($program->title); ?>

            </h1>

            <p class="hero-lead" style="margin-left: 0; max-width: 860px; margin-bottom: 24px;">
                <?php echo e($program->short_description ?? $program->full_description); ?>

            </p>

            <div class="hero-cta" style="justify-content: flex-start; margin-bottom: 0;">
                <a href="<?php echo e($waLink); ?>" target="_blank" class="btn-primary-green">
                    <i class="bi bi-whatsapp"></i>
                    Konsultasi & Daftar: 081399810272
                </a>
                <a href="#wilayah-daerah" class="btn-outline-white">
                    <i class="bi bi-geo-alt-fill"></i>
                    Pilih Wilayah Layanan Jasa (38 Provinsi)
                </a>
            </div>
        </div>
    </section>

    <!-- CONTENT WRAPPER -->
    <section class="section-py">
        <div class="container">
            <div class="content-sidebar-grid" style="margin-bottom: 48px;">
                
                <!-- Main Content -->
                <div>
                    <!-- Deskripsi Lengkap -->
                    <div class="article-content-card" style="margin-bottom: 28px;">
                        <h2 style="font-size: 1.4rem; font-weight: 800; color: #062e22; margin-bottom: 16px; display: flex; align-items: center; gap: 10px;">
                            <i class="bi bi-file-text-fill" style="color: #10b981;"></i> Deskripsi & Tujuan Layanan Pengerjaan
                        </h2>
                        <div style="font-size: 0.92rem; color: #475569; line-height: 1.8; margin-bottom: 24px;">
                            <p><?php echo e($program->full_description ?? $program->short_description); ?></p>
                        </div>

                        <!-- Lingkup Pekerjaan & Spesifikasi Teknis -->
                        <h3 style="font-size: 1.25rem; font-weight: 800; color: #062e22; margin-bottom: 16px; border-top: 1px solid #f1f5f9; padding-top: 24px;">
                            Lingkup Pekerjaan & Spesifikasi Teknis (Scope of Work)
                        </h3>
                        <p style="font-size: 0.86rem; color: #64748b; margin-bottom: 18px;">
                            Lingkup pengerjaan dan standar teknis mengacu pada spesifikasi internasional SSPC, NACE/AMPP, ISO 8501-1, ISO 12944, dan ASTM:
                        </p>

                        <div style="display: flex; flex-direction: column; gap: 10px;">
                            <?php
                                $cData = $program->curriculum ?? [];
                                if (is_string($cData)) {
                                    $cList = array_filter(array_map('trim', explode("\n", $cData)));
                                } elseif (is_array($cData)) {
                                    $cList = $cData;
                                } else {
                                    $cList = [];
                                }
                            ?>
                            <?php $__currentLoopData = $cList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div style="display: flex; align-items: flex-start; gap: 14px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 12px 16px;">
                                    <span style="width: 26px; height: 26px; background: #062e22; color: #a7f3d0; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.75rem; font-weight: 800; flex-shrink: 0;">
                                        <?php echo e($idx + 1); ?>

                                    </span>
                                    <span style="font-size: 0.88rem; font-weight: 600; color: #09392b; margin-top: 2px;">
                                        <?php echo e($item); ?>

                                    </span>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <!-- Persyaratan Pengerjaan Proyek -->
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: var(--radius-xl); padding: 28px; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
                        <h3 style="font-size: 1.2rem; font-weight: 800; color: #062e22; margin-bottom: 14px; display: flex; align-items: center; gap: 10px;">
                            <i class="bi bi-card-checklist" style="color: #10b981;"></i> Persyaratan & Kesiapan Area Pengerjaan
                        </h3>
                        <ul style="list-style: none; display: flex; flex-direction: column; gap: 10px; font-size: 0.88rem; color: #475569; padding: 0;">
                            <?php
                                $rData = $program->requirements ?? [];
                                if (is_string($rData)) {
                                    $rList = array_filter(array_map('trim', explode("\n", $rData)));
                                } elseif (is_array($rData)) {
                                    $rList = $rData;
                                } else {
                                    $rList = [];
                                }
                            ?>
                            <?php if(count($rList) > 0): ?>
                                <?php $__currentLoopData = $rList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $req): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li style="display: flex; align-items: flex-start; gap: 10px;">
                                        <i class="bi bi-check2-circle" style="color: #10b981; font-size: 1.1rem; flex-shrink: 0;"></i>
                                        <span><?php echo e($req); ?></span>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <li style="display: flex; align-items: flex-start; gap: 10px;">
                                    <i class="bi bi-check2-circle" style="color: #10b981; font-size: 1.1rem; flex-shrink: 0;"></i>
                                    <span>Pendidikan minimal SLTA/SMK/D3/S1 terbuka untuk semua jurusan teknik maupun umum.</span>
                                </li>
                                <li style="display: flex; align-items: flex-start; gap: 10px;">
                                    <i class="bi bi-check2-circle" style="color: #10b981; font-size: 1.1rem; flex-shrink: 0;"></i>
                                    <span>Sehat jasmani dan rohani, tidak memiliki gangguan penglihatan warna (bebas buta warna total).</span>
                                </li>
                                <li style="display: flex; align-items: flex-start; gap: 10px;">
                                    <i class="bi bi-check2-circle" style="color: #10b981; font-size: 1.1rem; flex-shrink: 0;"></i>
                                    <span>Fotokopi KTP dan pas foto resmi 3x4 latar belakang merah (4 lembar).</span>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

                <!-- Sidebar Ringkasan -->
                <div>
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: var(--radius-xl); padding: 26px; position: sticky; top: 96px; box-shadow: 0 4px 16px rgba(0,0,0,0.04);">
                        <h3 style="font-size: 1.15rem; font-weight: 800; color: #062e22; margin-bottom: 20px; border-bottom: 1px solid #f1f5f9; padding-bottom: 12px;">
                            Ringkasan Program
                        </h3>

                        <ul style="list-style: none; display: flex; flex-direction: column; gap: 16px; margin-bottom: 24px; padding: 0;">
                            <li style="display: flex; align-items: flex-start; gap: 12px;">
                                <i class="bi bi-clock-fill" style="color: #10b981; font-size: 1.15rem;"></i>
                                <div>
                                    <div style="font-size: 0.74rem; color: #94a3b8; text-transform: uppercase; font-weight: 700;">Durasi Layanan Pengerjaan</div>
                                    <div style="font-size: 0.88rem; font-weight: 700; color: #062e22;"><?php echo e($program->duration ?? '3 Hari (24 Jam Pelajaran)'); ?></div>
                                </div>
                            </li>

                            <li style="display: flex; align-items: flex-start; gap: 12px;">
                                <i class="bi bi-award-fill" style="color: #10b981; font-size: 1.15rem;"></i>
                                <div>
                                    <div style="font-size: 0.74rem; color: #94a3b8; text-transform: uppercase; font-weight: 700;">Badan Sertifikasi</div>
                                    <div style="font-size: 0.88rem; font-weight: 700; color: #062e22;"><?php echo e($program->certification_body ?? 'Sertifikasi Resmi Jasa Proteksi Korosi & Blasting Painting'); ?></div>
                                </div>
                            </li>

                            <li style="display: flex; align-items: flex-start; gap: 12px;">
                                <i class="bi bi-shield-lock-fill" style="color: #10b981; font-size: 1.15rem;"></i>
                                <div>
                                    <div style="font-size: 0.74rem; color: #94a3b8; text-transform: uppercase; font-weight: 700;">Alat Praktik</div>
                                    <div style="font-size: 0.88rem; font-weight: 700; color: #062e22;">Audiometer & Spirometer Kalibrasi Kemenkes & Gas Detector 4-in-1 300 Bar</div>
                                </div>
                            </li>
                        </ul>

                        <a href="<?php echo e($waLink); ?>" target="_blank" class="btn-primary-green" style="width: 100%; justify-content: center; margin-bottom: 10px;">
                            <i class="bi bi-whatsapp"></i> Daftar Sekarang via WA
                        </a>

                        <a href="<?php echo e(route('contact')); ?>" class="btn-card-detail" style="width: 100%; display: block;">
                            <i class="bi bi-envelope"></i> Permohonan Proposal B2B
                        </a>
                    </div>
                </div>
            </div>

            <!-- 4 WHATSAPP HOTLINES (USER REQUIREMENT) -->
            <div class="wa-hotlines-box">
                <div class="wa-hotlines-header">
                    <h3><i class="bi bi-telephone-inbound-fill" style="color: var(--accent-mint); margin-right: 8px;"></i> 4 Nomor WhatsApp Resmi Layanan Pendaftaran & Konsultasi</h3>
                    <p>Hubungi hotline resmi kami di bawah ini untuk konsultasi langsung mengenai <?php echo e($program->title); ?>:</p>
                </div>

                <div class="wa-hotlines-grid">
                    <?php $__currentLoopData = $waNumbers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotline): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e($hotline['url']); ?>" target="_blank" class="wa-hotline-card">
                            <div class="wa-hotline-top">
                                <div class="wa-hotline-icon">
                                    <i class="bi <?php echo e($hotline['icon']); ?>"></i>
                                </div>
                                <span class="wa-hotline-badge"><?php echo e($hotline['badge']); ?></span>
                            </div>
                            <div class="wa-hotline-title"><?php echo e($hotline['title']); ?></div>
                            <div class="wa-hotline-desc"><?php echo e($hotline['desc']); ?></div>
                            <div class="wa-hotline-phone">
                                <i class="bi bi-whatsapp"></i> <?php echo e($hotline['number']); ?>

                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <!-- REGIONAL SELECTOR (38 PROVINCES FOR THIS PROGRAM) -->
            <div id="wilayah-daerah" style="margin-top: 56px;">
                <div class="section-header">
                    <span class="section-tag">Direktori Wilayah</span>
                    <h2 class="section-title">Pilih Wilayah Layanan Jasa <?php echo e($program->title); ?></h2>
                    <p class="section-desc">
                        Klik provinsi tempat perusahaan atau tempat tinggal Anda untuk melihat jadwal dan panduan modul panduan di setiap daerah.
                    </p>
                </div>

                <div class="provinces-grid">
                    <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prov): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('wilayah.provinsi.program', [$prov['slug'], $program->slug])); ?>" class="province-chip">
                            <span><?php echo e($prov['name']); ?></span>
                            <i class="bi bi-chevron-right" style="font-size: 0.9rem; color: #10b981;"></i>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\web-pelatihan\jasa-coaating-blasing-painting\resources\views/front/program-detail.blade.php ENDPATH**/ ?>