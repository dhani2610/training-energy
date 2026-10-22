@extends('layouts.front')

@section('title', 'Program Training & Sertifikasi Training Energy | Lisensi & Sertifikasi K3 Korporasi Resmi')
@section('meta_description', 'Katalog 10 program resmi program training Training Energy: Training Energy, Audit SMK3 PP 50/2012, Manajemen Risiko HIRADC, Investigasi Insiden RCA/SCAT, Kelembagaan P2K3, Tanggap Darurat ERP, Training Energy Resmi, Training Energy Sertifikasi, Kebakaran Industri, dan K3 Ruang Terbatas & Ketinggian.')

@section('content')

    <!-- HERO PROGRAMS -->
    <section class="hero-section" style="padding: 56px 0 50px;">
        <div class="container">
            <div class="hero-badge">
                <i class="bi bi-shield-check"></i>
                Skema Sertifikasi Training Energy & Pengawas Keselamatan Kerja Korporat Nasional
            </div>

            <h1 class="hero-title" style="font-size: 2.35rem;">
                Program Unggulan <span>Pelatihan & Sertifikasi Training Energy</span>
            </h1>

            <p class="hero-lead" style="max-width: 800px;">
                Program komprehensif pelatihan operator abrasive energi Sa 2.5 Sa 3, aplikasi protective coating industri, coating inspection QA/QC, hydroenergi UHP, tank lining, hingga pipeline coating di seluruh Indonesia.
            </p>
        </div>
    </section>

    <!-- PROGRAM LIST -->
    <section class="section-py">
        <div class="container">
            <div class="programs-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 26px; margin-bottom: 50px;">
                @foreach($programs as $prog)
                    @php
                        $progObj = is_array($prog) ? (object)$prog : $prog;
                        $slug = $progObj->slug ?? '';
                        $detailUrl = route('program.detail', $slug);
                        $directWa = "https://api.whatsapp.com/send?phone=6281399810272&text=" . urlencode("Halo Admin Training Energy, saya ingin pendaftaran program {$progObj->title}.");
                    @endphp
                    <div class="program-card" style="background: #ffffff; border: 1px solid #c084fc; border-radius: 16px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 4px 14px rgba(37, 99, 235, 0.05);">
                        <div class="program-body" style="padding: 24px; display: flex; flex-direction: column; flex-grow: 1;">
                            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 12px;">
                                <span style="background: #f5f3ff; color: #9a3412; font-size: 0.72rem; font-weight: 800; padding: 4px 10px; border-radius: 6px; text-transform: uppercase;">
                                    {{ $progObj->badge ?? 'Sertifikasi K3 Korporat Resmi' }}
                                </span>
                                <span style="font-size: 0.78rem; font-weight: 700; color: #64748b;">
                                    <i class="bi bi-clock-history" style="color: #1d4ed8;"></i> {{ $progObj->duration ?? '4-5 Hari' }}
                                </span>
                            </div>

                            <h3 class="program-title" style="font-size: 1.15rem; font-weight: 800; color: #0a0e1a; margin-bottom: 10px; line-height: 1.4;">
                                <a href="{{ $detailUrl }}" style="color: inherit;">{{ $progObj->title }}</a>
                            </h3>

                            <p class="program-desc" style="font-size: 0.86rem; color: #64748b; line-height: 1.6; margin-bottom: 18px; flex-grow: 1;">
                                {{ Str::limit($progObj->short_description ?? ($progObj->full_description ?? ''), 130) }}
                            </p>

                            <div style="font-size: 0.78rem; color: #1e1b4b; background: #fffaf5; border: 1px solid #c084fc; padding: 8px 12px; border-radius: 8px; margin-bottom: 18px;">
                                <strong><i class="bi bi-person-check-fill" style="color: #1d4ed8;"></i> Sasaran:</strong> {{ Str::limit(is_array($progObj->target_audience) ? implode(', ', $progObj->target_audience) : ($progObj->target_audience ?? 'Training Energy, Auditor SMK3, Analis Risiko HIRADC, Pengurus P2K3 Bipartit, Toolpusher, Safety Officer'), 75) }}
                            </div>

                            <div class="program-footer-btn" style="display: flex; gap: 8px; padding-top: 14px; border-top: 1px solid #f1f5f9;">
                                <a href="{{ $detailUrl }}" class="btn-card-detail" style="flex: 1; text-align: center; background: #f8fafc; color: #131b2e; padding: 9px 12px; border-radius: 8px; font-size: 0.82rem; font-weight: 700; display: inline-flex; align-items: center; justify-content: center; gap: 6px; border: 1px solid #e2e8f0;">
                                    <i class="bi bi-info-circle"></i> Detail & Wilayah
                                </a>
                                <a href="{{ $directWa }}" target="_blank" class="btn-card-wa" style="flex: 1; text-align: center; background: #1d4ed8; color: #ffffff; padding: 9px 12px; border-radius: 8px; font-size: 0.82rem; font-weight: 700; display: inline-flex; align-items: center; justify-content: center; gap: 6px;" title="Konsultasi WhatsApp">
                                    <i class="bi bi-whatsapp"></i> Chat WA
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- 4 WHATSAPP HOTLINES -->
            <div class="wa-hotlines-box" style="background: linear-gradient(145deg, #0a0e1a 0%, #131b2e 100%); border-radius: 18px; padding: 32px; color: #ffffff; border: 1px solid rgba(37, 99, 235, 0.4);">
                <div class="wa-hotlines-header" style="text-align: center; max-width: 680px; margin: 0 auto 26px;">
                    <h3 style="font-size: 1.35rem; font-weight: 800; color: #ffffff; margin-bottom: 8px;">
                        <i class="bi bi-headset" style="color: #7c3aed; margin-right: 8px;"></i> 4 Hotline WhatsApp Layanan Konsultasi & Pendaftaran K3 Korporasi
                    </h3>
                    <p style="font-size: 0.88rem; color: #cbd5e1;">Hubungi petugas spesialis kami untuk survei lokasi, estimasi anggaran proyek, atau pengerjaan on-site di fasilitas Anda:</p>
                </div>

                <div class="wa-hotlines-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 16px;">
                    @foreach($waNumbers as $hotline)
                        <a href="{{ $hotline['url'] }}" target="_blank" class="wa-hotline-card" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.12); border-radius: 12px; padding: 18px; color: #ffffff; display: flex; flex-direction: column; text-decoration: none;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                <div style="width: 36px; height: 36px; background: rgba(37, 99, 235, 0.2); color: #7c3aed; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 1.1rem;">
                                    <i class="bi {{ $hotline['icon'] }}"></i>
                                </div>
                                <span style="font-size: 0.72rem; font-weight: 800; background: rgba(37, 99, 235, 0.2); color: #c084fc; padding: 2px 8px; border-radius: 4px;">{{ $hotline['badge'] }}</span>
                            </div>
                            <div style="font-size: 0.95rem; font-weight: 800; margin-bottom: 4px;">{{ $hotline['title'] }}</div>
                            <div style="font-size: 0.78rem; color: #cbd5e1; margin-bottom: 14px; flex-grow: 1;">{{ $hotline['desc'] }}</div>
                            <div style="font-size: 0.88rem; font-weight: 800; color: #7c3aed; display: flex; align-items: center; gap: 6px; font-family: monospace;">
                                <i class="bi bi-whatsapp"></i> {{ $hotline['number'] }}
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
