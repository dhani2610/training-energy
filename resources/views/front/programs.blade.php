@extends('layouts.front')

@section('title', 'Katalog 120 Program Pelatihan & Sertifikasi Training Energy | Standar ISO 50001 & IEEE')
@section('meta_description', 'Katalog lengkap 120 program pelatihan dan sertifikasi kompetensi rekayasa energi: ISO 50001, IEEE 519, Instrumentasi & Kalibrasi, PLC & Otomasi, K3 Listrik NFPA 70E, dan Keandalan Sistem Pembangkit Daya di Indonesia.')

@section('content')

    <!-- HERO PROGRAMS -->
    <section class="hero-section" style="padding: 56px 0 50px; background: radial-gradient(circle at 80% 20%, rgba(37, 99, 235, 0.28) 0%, transparent 45%), radial-gradient(circle at 10% 80%, rgba(124, 58, 237, 0.22) 0%, transparent 50%), #0a0e1a; color: #ffffff;">
        <div class="container">
            <div class="hero-badge" style="background: rgba(37, 99, 235, 0.2); border: 1px solid rgba(37, 99, 235, 0.5); color: #38bdf8; font-size: 0.78rem; font-weight: 800; padding: 6px 16px; border-radius: 30px; display: inline-flex; align-items: center; gap: 8px; margin-bottom: 16px; text-transform: uppercase;">
                <i class="bi bi-lightning-charge-fill"></i>
                Katalog Resmi 120 Program Sertifikasi Training Energy Indonesia
            </div>

            <h1 class="hero-title" style="font-size: 2.35rem; font-weight: 800; color: #ffffff; line-height: 1.25; margin-bottom: 14px;">
                Portofolio Lengkap <span style="background: linear-gradient(135deg, #38bdf8 0%, #a855f7 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Pelatihan & Rekayasa Energi</span>
            </h1>

            <p class="hero-lead" style="max-width: 820px; color: #cbd5e1; font-size: 1rem; line-height: 1.7; margin-bottom: 0;">
                Membina para engineer dan teknisi industri menguasai manajemen energi ISO 50001, audit daya listrik, mitigasi harmonisa IEEE 519, instrumentasi proses, SCADA & PLC, dan keselamatan instalasi daya listrik berlisensi resmi.
            </p>
        </div>
    </section>

    <!-- PROGRAM LIST (PAGINATED VIA JS FETCH) -->
    <section class="section-py" id="programsSection" style="scroll-margin-top: 80px; background: #f8fafc;">
        <div class="container">
            
            <!-- SEARCH & FILTER BAR -->
            <div class="program-filter-bar" style="background: #ffffff; padding: 22px 24px; border-radius: 18px; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px rgba(37, 99, 235, 0.06); margin-bottom: 34px;">
                <div style="display: flex; gap: 12px; align-items: center; margin-bottom: 16px; flex-wrap: wrap;">
                    <div style="position: relative; flex: 1; min-width: 260px;">
                        <i class="bi bi-search" style="position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: #64748b; font-size: 1rem;"></i>
                        <input type="text" id="programSearchInput" placeholder="Cari dari 120 program (contoh: Instrumentation, Life Cycle, PLC, ISO 50001, Turbin)..." style="width: 100%; padding: 12px 40px 12px 42px; border: 1px solid #cbd5e1; border-radius: 10px; font-size: 0.92rem; outline: none; transition: all 0.2s;" onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37,99,235,0.15)'" onblur="this.style.borderColor='#cbd5e1'; this.style.boxShadow='none'">
                        <button type="button" id="programSearchClear" style="display: none; position: absolute; right: 12px; top: 50%; transform: translateY(-50%); background: none; border: none; color: #94a3b8; cursor: pointer; font-size: 1.1rem;"><i class="bi bi-x-circle-fill"></i></button>
                    </div>
                    <div id="programCountInfo" style="font-size: 0.85rem; font-weight: 700; color: #2563eb; background: #eff6ff; padding: 10px 16px; border-radius: 10px; border: 1px solid #bfdbfe; white-space: nowrap;">
                        Menampilkan 1 - 9 dari {{ $totalPrograms ?? 120 }} Program
                    </div>
                </div>

                <!-- CATEGORY PILLS -->
                <div style="display: flex; gap: 8px; flex-wrap: wrap; align-items: center;" id="programCategoryPills">
                    <span style="font-size: 0.78rem; font-weight: 700; color: #64748b; text-transform: uppercase; margin-right: 4px;">Kategori:</span>
                    <button type="button" class="prog-cat-btn active" data-cat="all" style="padding: 6px 14px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; border: 1px solid #2563eb; background: linear-gradient(135deg, #2563eb, #7c3aed); color: #fff; cursor: pointer; transition: all 0.2s;">Semua (120)</button>
                    <button type="button" class="prog-cat-btn" data-cat="ISO 50001" style="padding: 6px 14px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; border: 1px solid #e2e8f0; background: #f8fafc; color: #475569; cursor: pointer; transition: all 0.2s;">ISO 50001 & Audit</button>
                    <button type="button" class="prog-cat-btn" data-cat="Instrumentation" style="padding: 6px 14px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; border: 1px solid #e2e8f0; background: #f8fafc; color: #475569; cursor: pointer; transition: all 0.2s;">Instrumentasi & PLC</button>
                    <button type="button" class="prog-cat-btn" data-cat="Power" style="padding: 6px 14px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; border: 1px solid #e2e8f0; background: #f8fafc; color: #475569; cursor: pointer; transition: all 0.2s;">Kelistrikan & Daya</button>
                    <button type="button" class="prog-cat-btn" data-cat="Turbin" style="padding: 6px 14px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; border: 1px solid #e2e8f0; background: #f8fafc; color: #475569; cursor: pointer; transition: all 0.2s;">Pembangkit & Turbin</button>
                </div>
            </div>

            <!-- PROGRAMS GRID -->
            <div class="programs-grid" id="programsGridContainer" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 26px; margin-bottom: 40px; position: relative; min-height: 440px; transition: opacity 0.2s ease;">
                @foreach($programs as $prog)
                    @php
                        $progObj = is_array($prog) ? (object)$prog : $prog;
                        $slug = $progObj->slug ?? '';
                        $detailUrl = route('program.detail', $slug);
                        $directWa = "https://api.whatsapp.com/send?phone=6281399810272&text=" . urlencode("Halo Admin Training Energy, saya ingin pendaftaran resmi program {$progObj->title}.");
                    @endphp
                    <div class="program-card" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 4px 14px rgba(37, 99, 235, 0.05); transition: transform 0.2s, box-shadow 0.2s;">
                        <div class="program-body" style="padding: 24px; display: flex; flex-direction: column; flex-grow: 1;">
                            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 12px;">
                                <span style="background: #eff6ff; color: #1d4ed8; font-size: 0.72rem; font-weight: 800; padding: 4px 10px; border-radius: 6px; text-transform: uppercase;">
                                    {{ $progObj->badge ?? 'Sertifikasi Kompetensi' }}
                                </span>
                                <span style="font-size: 0.78rem; font-weight: 700; color: #64748b;">
                                    <i class="bi bi-clock-history" style="color: #2563eb;"></i> {{ $progObj->duration ?? '3 Hari' }}
                                </span>
                            </div>

                            <h3 class="program-title" style="font-size: 1.15rem; font-weight: 800; color: #0a0e1a; margin-bottom: 10px; line-height: 1.4;">
                                <a href="{{ $detailUrl }}" style="color: inherit; text-decoration: none;">{{ $progObj->title }}</a>
                            </h3>

                            <p class="program-desc" style="font-size: 0.86rem; color: #64748b; line-height: 1.6; margin-bottom: 18px; flex-grow: 1;">
                                {{ Str::limit($progObj->short_description ?? ($progObj->full_description ?? ''), 130) }}
                            </p>

                            <div style="font-size: 0.78rem; color: #1e1b4b; background: #f8fafc; border: 1px solid #e2e8f0; padding: 8px 12px; border-radius: 8px; margin-bottom: 18px;">
                                <strong><i class="bi bi-person-check-fill" style="color: #2563eb;"></i> Sasaran:</strong> {{ Str::limit(is_array($progObj->target_audience) ? implode(', ', $progObj->target_audience) : ($progObj->target_audience ?? 'Engineer Rekayasa Energi, Teknisi Pembangkit, Safety Officer K3 Listrik'), 75) }}
                            </div>

                            <div class="program-footer-btn" style="display: flex; gap: 8px; padding-top: 14px; border-top: 1px solid #f1f5f9;">
                                <a href="{{ $detailUrl }}" class="btn-card-detail" style="flex: 1; text-align: center; background: #f8fafc; color: #131b2e; padding: 9px 12px; border-radius: 8px; font-size: 0.82rem; font-weight: 700; display: inline-flex; align-items: center; justify-content: center; gap: 6px; border: 1px solid #cbd5e1; text-decoration: none;">
                                    <i class="bi bi-info-circle"></i> Detail Silabus
                                </a>
                                <a href="{{ $directWa }}" target="_blank" class="btn-card-wa" style="flex: 1; text-align: center; background: linear-gradient(135deg, #2563eb, #7c3aed); color: #ffffff; padding: 9px 12px; border-radius: 8px; font-size: 0.82rem; font-weight: 700; display: inline-flex; align-items: center; justify-content: center; gap: 6px; text-decoration: none;" title="Konsultasi WhatsApp">
                                    <i class="bi bi-whatsapp"></i> Chat WA
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- PAGINATION CONTROLS -->
            <div id="programsPaginationWrapper" style="display: flex; justify-content: center; align-items: center; gap: 8px; margin-bottom: 50px; flex-wrap: wrap;"></div>

            <!-- 4 WHATSAPP HOTLINES -->
            <div class="wa-hotlines-box" style="background: linear-gradient(145deg, #0a0e1a 0%, #131b2e 100%); border-radius: 18px; padding: 32px; color: #ffffff; border: 1px solid rgba(37, 99, 235, 0.4);">
                <div class="wa-hotlines-header" style="text-align: center; max-width: 680px; margin: 0 auto 26px;">
                    <h3 style="font-size: 1.35rem; font-weight: 800; color: #ffffff; margin-bottom: 8px;">
                        <i class="bi bi-headset" style="color: #7c3aed; margin-right: 8px;"></i> 4 Hotline WhatsApp Layanan Konsultasi & Pendaftaran Training Energy
                    </h3>
                    <p style="font-size: 0.88rem; color: #cbd5e1;">Hubungi petugas konsultan kami untuk info jadwal publik, silabus teknis, atau pengajuan penawaran in-house corporate training:</p>
                </div>

                <div class="wa-hotlines-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 16px;">
                    @foreach($waNumbers as $hotline)
                        <a href="{{ $hotline['url'] }}" target="_blank" class="wa-hotline-card" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.12); border-radius: 12px; padding: 18px; color: #ffffff; display: flex; flex-direction: column; text-decoration: none; transition: transform 0.2s;" onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='none'">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                <div style="width: 36px; height: 36px; background: rgba(37, 99, 235, 0.2); color: #38bdf8; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 1.1rem;">
                                    <i class="bi {{ $hotline['icon'] }}"></i>
                                </div>
                                <span style="font-size: 0.72rem; font-weight: 800; background: rgba(37, 99, 235, 0.2); color: #93c5fd; padding: 2px 8px; border-radius: 4px;">{{ $hotline['badge'] }}</span>
                            </div>
                            <div style="font-size: 0.95rem; font-weight: 800; margin-bottom: 4px;">{{ $hotline['title'] }}</div>
                            <div style="font-size: 0.78rem; color: #cbd5e1; margin-bottom: 14px; flex-grow: 1;">{{ $hotline['desc'] }}</div>
                            <div style="font-size: 0.88rem; font-weight: 800; color: #38bdf8; display: flex; align-items: center; gap: 6px; font-family: monospace;">
                                <i class="bi bi-whatsapp"></i> {{ $hotline['number'] }}
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
    let currentProgPage = 1;
    const progPerPage = 9;
    let currentProgSearch = '';
    let currentProgCategory = 'all';
    let progSearchDebounceTimer = null;

    const progGridContainer = document.getElementById('programsGridContainer');
    const progPaginationWrapper = document.getElementById('programsPaginationWrapper');
    const progSearchInput = document.getElementById('programSearchInput');
    const progSearchClear = document.getElementById('programSearchClear');
    const progCountInfo = document.getElementById('programCountInfo');

    async function fetchPaginatedPrograms(page = 1, isManual = false) {
        if (!progGridContainer) return;
        currentProgPage = page;
        progGridContainer.style.opacity = '0.4';

        try {
            const params = new URLSearchParams({
                page: page,
                per_page: progPerPage,
                search: currentProgSearch,
                category: currentProgCategory
            });

            const response = await fetch(`/api/programs?${params.toString()}`);
            const result = await response.json();

            if (result.success) {
                renderProgramsGrid(result.data);
                renderProgramsPagination(result.pagination);
                if (progCountInfo) {
                    if (result.pagination.total === 0) {
                        progCountInfo.textContent = 'Tidak ada program ditemukan';
                    } else {
                        progCountInfo.textContent = `Menampilkan ${result.pagination.from} - ${result.pagination.to} dari ${result.pagination.total} Program`;
                    }
                }

                if (isManual) {
                    const section = document.getElementById('programsSection');
                    if (section) {
                        section.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                }
            }
        } catch (err) {
            console.error('Error fetching programs:', err);
        } finally {
            progGridContainer.style.opacity = '1';
        }
    }

    function renderProgramsGrid(items) {
        if (!progGridContainer) return;

        if (!items || items.length === 0) {
            progGridContainer.innerHTML = `
                <div style="grid-column: 1 / -1; text-align: center; padding: 60px 20px; background: #ffffff; border-radius: 16px; border: 1px dashed #cbd5e1;">
                    <div style="font-size: 2.5rem; color: #94a3b8; margin-bottom: 12px;"><i class="bi bi-search"></i></div>
                    <h4 style="font-size: 1.15rem; font-weight: 800; color: #0a0e1a; margin-bottom: 6px;">Program Tidak Ditemukan</h4>
                    <p style="font-size: 0.88rem; color: #64748b; margin-bottom: 18px;">Tidak ada pelatihan yang cocok dengan kata kunci "${escapeHtml(currentProgSearch)}".</p>
                    <button type="button" onclick="resetProgramSearch()" style="background: linear-gradient(135deg, #2563eb, #7c3aed); color: #fff; border: none; padding: 8px 18px; border-radius: 8px; font-weight: 700; font-size: 0.85rem; cursor: pointer;">
                        Reset Pencarian
                    </button>
                </div>
            `;
            return;
        }

        let html = '';
        items.forEach(prog => {
            html += `
                <div class="program-card" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 4px 14px rgba(37, 99, 235, 0.05); transition: transform 0.2s, box-shadow 0.2s;">
                    <div class="program-body" style="padding: 24px; display: flex; flex-direction: column; flex-grow: 1;">
                        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 12px;">
                            <span style="background: #eff6ff; color: #1d4ed8; font-size: 0.72rem; font-weight: 800; padding: 4px 10px; border-radius: 6px; text-transform: uppercase;">
                                ${escapeHtml(prog.badge)}
                            </span>
                            <span style="font-size: 0.78rem; font-weight: 700; color: #64748b;">
                                <i class="bi bi-clock-history" style="color: #2563eb;"></i> ${escapeHtml(prog.duration)}
                            </span>
                        </div>

                        <h3 class="program-title" style="font-size: 1.15rem; font-weight: 800; color: #0a0e1a; margin-bottom: 10px; line-height: 1.4;">
                            <a href="${escapeHtml(prog.detail_url)}" style="color: inherit; text-decoration: none;">${escapeHtml(prog.title)}</a>
                        </h3>

                        <p class="program-desc" style="font-size: 0.86rem; color: #64748b; line-height: 1.6; margin-bottom: 18px; flex-grow: 1;">
                            ${escapeHtml(prog.short_description)}
                        </p>

                        <div style="font-size: 0.78rem; color: #1e1b4b; background: #f8fafc; border: 1px solid #e2e8f0; padding: 8px 12px; border-radius: 8px; margin-bottom: 18px;">
                            <strong><i class="bi bi-person-check-fill" style="color: #2563eb;"></i> Sasaran:</strong> ${escapeHtml(prog.target_audience)}
                        </div>

                        <div class="program-footer-btn" style="display: flex; gap: 8px; padding-top: 14px; border-top: 1px solid #f1f5f9;">
                            <a href="${escapeHtml(prog.detail_url)}" class="btn-card-detail" style="flex: 1; text-align: center; background: #f8fafc; color: #131b2e; padding: 9px 12px; border-radius: 8px; font-size: 0.82rem; font-weight: 700; display: inline-flex; align-items: center; justify-content: center; gap: 6px; border: 1px solid #cbd5e1; text-decoration: none;">
                                <i class="bi bi-info-circle"></i> Detail Silabus
                            </a>
                            <a href="${escapeHtml(prog.wa_url)}" target="_blank" class="btn-card-wa" style="flex: 1; text-align: center; background: linear-gradient(135deg, #2563eb, #7c3aed); color: #ffffff; padding: 9px 12px; border-radius: 8px; font-size: 0.82rem; font-weight: 700; display: inline-flex; align-items: center; justify-content: center; gap: 6px; text-decoration: none;" title="Konsultasi WhatsApp">
                                <i class="bi bi-whatsapp"></i> Chat WA
                            </a>
                        </div>
                    </div>
                </div>
            `;
        });
        progGridContainer.innerHTML = html;
    }

    function renderProgramsPagination(meta) {
        if (!progPaginationWrapper) return;
        if (!meta || meta.last_page <= 1) {
            progPaginationWrapper.innerHTML = '';
            return;
        }

        const totalPages = meta.last_page;
        const current = meta.current_page;
        let html = '';

        // Prev Button
        if (current > 1) {
            html += `<button type="button" onclick="fetchPaginatedPrograms(${current - 1}, true)" style="display: flex; align-items: center; gap: 6px; padding: 8px 14px; border: 1px solid #cbd5e1; background: #ffffff; color: #1e293b; border-radius: 8px; font-size: 0.85rem; font-weight: 700; cursor: pointer; transition: all 0.2s;"><i class="bi bi-chevron-left"></i> Prev</button>`;
        } else {
            html += `<button type="button" disabled style="display: flex; align-items: center; gap: 6px; padding: 8px 14px; border: 1px solid #e2e8f0; background: #f8fafc; color: #94a3b8; border-radius: 8px; font-size: 0.85rem; font-weight: 700; cursor: not-allowed;"><i class="bi bi-chevron-left"></i> Prev</button>`;
        }

        // Smart Page Numbering
        let pages = [];
        if (totalPages <= 7) {
            for (let i = 1; i <= totalPages; i++) pages.push(i);
        } else {
            if (current <= 4) {
                pages = [1, 2, 3, 4, 5, '...', totalPages];
            } else if (current >= totalPages - 3) {
                pages = [1, '...', totalPages - 4, totalPages - 3, totalPages - 2, totalPages - 1, totalPages];
            } else {
                pages = [1, '...', current - 1, current, current + 1, '...', totalPages];
            }
        }

        pages.forEach(p => {
            if (p === '...') {
                html += `<span style="padding: 8px 10px; color: #94a3b8; font-weight: 700;">...</span>`;
            } else if (p === current) {
                html += `<button type="button" style="padding: 8px 14px; border: none; background: linear-gradient(135deg, #2563eb, #7c3aed); color: #ffffff; border-radius: 8px; font-size: 0.85rem; font-weight: 800; box-shadow: 0 4px 12px rgba(37,99,235,0.3);">${p}</button>`;
            } else {
                html += `<button type="button" onclick="fetchPaginatedPrograms(${p}, true)" style="padding: 8px 14px; border: 1px solid #cbd5e1; background: #ffffff; color: #1e293b; border-radius: 8px; font-size: 0.85rem; font-weight: 700; cursor: pointer; transition: all 0.2s;" onmouseover="this.style.background='#eff6ff'; this.style.borderColor='#2563eb'" onmouseout="this.style.background='#ffffff'; this.style.borderColor='#cbd5e1'">${p}</button>`;
            }
        });

        // Next Button
        if (current < totalPages) {
            html += `<button type="button" onclick="fetchPaginatedPrograms(${current + 1}, true)" style="display: flex; align-items: center; gap: 6px; padding: 8px 14px; border: 1px solid #cbd5e1; background: #ffffff; color: #1e293b; border-radius: 8px; font-size: 0.85rem; font-weight: 700; cursor: pointer; transition: all 0.2s;">Next <i class="bi bi-chevron-right"></i></button>`;
        } else {
            html += `<button type="button" disabled style="display: flex; align-items: center; gap: 6px; padding: 8px 14px; border: 1px solid #e2e8f0; background: #f8fafc; color: #94a3b8; border-radius: 8px; font-size: 0.85rem; font-weight: 700; cursor: not-allowed;">Next <i class="bi bi-chevron-right"></i></button>`;
        }

        progPaginationWrapper.innerHTML = html;
    }

    function escapeHtml(str) {
        if (!str) return '';
        return String(str).replace(/[&<>"']/g, function(m) {
            return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;' }[m];
        });
    }

    window.resetProgramSearch = function() {
        if (progSearchInput) progSearchInput.value = '';
        if (progSearchClear) progSearchClear.style.display = 'none';
        currentProgSearch = '';
        currentProgCategory = 'all';
        document.querySelectorAll('.prog-cat-btn').forEach(b => {
            if (b.getAttribute('data-cat') === 'all') {
                b.style.background = 'linear-gradient(135deg, #2563eb, #7c3aed)';
                b.style.color = '#fff';
                b.style.borderColor = '#2563eb';
            } else {
                b.style.background = '#f8fafc';
                b.style.color = '#475569';
                b.style.borderColor = '#e2e8f0';
            }
        });
        fetchPaginatedPrograms(1, false);
    };

    if (progSearchInput) {
        progSearchInput.addEventListener('input', function() {
            const val = this.value.trim();
            if (progSearchClear) {
                progSearchClear.style.display = val ? 'block' : 'none';
            }
            clearTimeout(progSearchDebounceTimer);
            progSearchDebounceTimer = setTimeout(() => {
                currentProgSearch = val;
                fetchPaginatedPrograms(1, false);
            }, 300);
        });
    }

    if (progSearchClear) {
        progSearchClear.addEventListener('click', function() {
            resetProgramSearch();
        });
    }

    document.querySelectorAll('.prog-cat-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.prog-cat-btn').forEach(b => {
                b.style.background = '#f8fafc';
                b.style.color = '#475569';
                b.style.borderColor = '#e2e8f0';
            });
            this.style.background = 'linear-gradient(135deg, #2563eb, #7c3aed)';
            this.style.color = '#fff';
            this.style.borderColor = '#2563eb';

            currentProgCategory = this.getAttribute('data-cat') || 'all';
            fetchPaginatedPrograms(1, false);
        });
    });

    fetchPaginatedPrograms(1, false);
</script>
@endpush
