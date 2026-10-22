<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Setting;
use App\Models\Statistic;
use App\Models\Program;
use App\Models\Article;
use App\Models\Faq;
use App\Services\EnergySchemeService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        // 1. Super Admin User
        User::updateOrCreate(
            ['email' => 'admin@trainingenergy.my.id'],
            [
                'name' => 'Administrator Training Energy',
                'password' => Hash::make('admin123'),
                'email_verified_at' => now(),
            ]
        );

        // 2. Settings
        $settings = [
            'site_name' => 'Training Energy',
            'site_tagline' => 'Pusat Pelatihan & Sertifikasi Rekayasa Energi, Sistem Tenaga Listrik, dan Keandalan Industri Nasional',
            'company_name' => 'Lembaga Pelatihan & Pengembangan Training Energy Indonesia',
            'license_info' => 'Standar Pelatihan & Akreditasi Sertifikasi ISO 50001, IEEE, IEC, ASME, API, NFPA 70E, & Kualifikasi Profesional',
            'whatsapp' => '081399810272', // Main WA Utama (Highlighted)
            'whatsapp_detail_1' => '08118500177',
            'whatsapp_detail_2' => '081399810272',
            'whatsapp_detail_3' => '087894580806',
            'whatsapp_detail_4' => '087894580649',
            'email' => 'kontak@trainingenergy.my.id',
            'email_secondary' => 'info@trainingenergy.my.id',
            'phone' => '081399810272',
            'address' => 'Pusat Workshop Pelatihan & Laboratorium Uji Training Energy Indonesia, Jakarta',
            'maps_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126920.28298835848!2d106.759478!3d-6.2297465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e498c0a531%3A0x7d87f7b2c0e86b0a!2sJakarta%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid',
            'office_hours' => 'Senin - Jumat: 08.00 - 17.00 WIB | Hotline Konsultasi Pendaftaran & WA: 24 Jam',
            'hero_title' => 'Pusat Pelatihan & Sertifikasi Kompetensi Resmi Training Energy di Indonesia',
            'hero_description' => 'Program Pelatihan & Sertifikasi Rekayasa Energi, Kualitas Daya ISO 50001, K3 Listrik, Instrumentasi & SCADA, Turbin Gas & Uap, Pemeliharaan Gardu Induk, serta Keandalan Fasilitas Industri Terintegrasi.',
            'about_history' => 'Lembaga Training Energy didirikan oleh asosiasi praktisi senior, lead auditor efisiensi energi internasional (ISO 50001), spesialis proteksi sistem tenaga listrik (IEEE / IEC), dan engineer turbin pembangkit terkemuka di Indonesia. Kami berdedikasi mentransformasikan keahlian para engineer dan teknisi industri menuju efisiensi daya maksimal, keandalan mesin tinggi, dan nihil kecelakaan kerja (Zero Harm). Hingga kini, kami telah melatih lebih dari 18.500 peserta dari berbagai sektor strategis di 38 provinsi di Indonesia yang mencakup pembangkitan tenaga listrik (PLTU/PLTG/PLTA), kilang migas, petrokimia, smelter mineral, manufaktur berat, dan utilitas nasional.',
            'about_vision' => 'Menjadi pusat keunggulan pelatihan teknologi energi terkemuka di Indonesia yang mencetak profesional rekayasa daya berdaya saing global dan berwawasan efisiensi berkelanjutan.',
            'about_mission' => "1. Menyelenggarakan program pelatihan dan sertifikasi kompetensi bidang energi, kelistrikan, instrumentasi, dan otomasi berstandar internasional (ISO 50001, IEEE, IEC, ASME, NFPA 70E).\n2. Memfasilitasi praktikum hands-on dengan unit simulator daya modern, instrumen uji terakreditasi, dan studi kasus rekayasa nyata.\n3. Menanamkan kepatuhan keselamatan kerja (K3 Listrik) tinggi, mitigasi bahaya arc flash, dan protokol Lockout/Tagout (LOTO).\n4. Mendorong transisi energi berkelanjutan melalui audit energi terstruktur, optimalisasi motor penggerak, dan integrasi energi terbarukan.",
            'floating_wa_text' => 'Halo Admin Utama Training Energy, saya ingin konsultasi pendaftaran pelatihan sertifikasi energi.',
            'whatsapp_template' => 'Halo Admin Utama Training Energy, saya ingin konsultasi pendaftaran pelatihan dan sertifikasi energi untuk wilayah {region}. Mohon info jadwal batch terbaru dan silabus teknis.'
        ];

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        // 3. Statistics
        $statistics = [
            [
                'key' => 'alumni_peserta',
                'label' => 'Alumni & Peserta Tersertifikasi',
                'value' => '18.500+',
                'icon' => 'bi-mortarboard-fill',
                'description' => 'Engineer, Teknisi Pembangkit, Auditor Energi, & Manajer Fasilitas',
                'sort_order' => 1
            ],
            [
                'key' => 'standar_mutu',
                'label' => 'Kepatuhan Standar Rekayasa',
                'value' => '100%',
                'icon' => 'bi-patch-check-fill',
                'description' => 'Standar Akreditasi ISO 50001, IEEE, IEC, ASME, API, & NFPA 70E',
                'sort_order' => 2
            ],
            [
                'key' => 'jangkauan_provinsi',
                'label' => 'Jangkauan Wilayah Pelatihan',
                'value' => '38',
                'icon' => 'bi-geo-alt-fill',
                'description' => 'Provinsi Penyelenggaraan Public Training & In-House Corporate di Indonesia',
                'sort_order' => 3
            ],
            [
                'key' => 'mitra_industri',
                'label' => 'Perusahaan Korporasi & Pabrik Klien',
                'value' => '950+',
                'icon' => 'bi-building-check',
                'description' => 'Pembangkit Listrik, Kilang Petrokimia, Smelter, & Kontraktor EPC Migas',
                'sort_order' => 4
            ]
        ];

        Statistic::truncate();
        foreach ($statistics as $stat) {
            Statistic::create(array_merge($stat, ['is_active' => true]));
        }

        // 4. Programs
        Program::truncate();
        $masterPrograms = EnergySchemeService::getMasterPrograms();
        foreach ($masterPrograms as $index => $prog) {
            Program::create([
                'title' => $prog['title'],
                'slug' => $prog['slug'],
                'code' => 'ENG-' . str_pad((string)$prog['id'], 3, '0', STR_PAD_LEFT),
                'level_name' => $prog['level_name'] ?? 'Energy Specialist',
                'level_code' => $prog['level_code'] ?? 'ENG-CERT',
                'badge' => $prog['badge'] ?? 'Sertifikasi Resmi',
                'method' => $prog['method'] ?? 'Offline Workshop & Praktik Lapangan',
                'certification' => $prog['certification'] ?? 'Sertifikat Kompetensi Energi Berstandar Internasional',
                'price_note' => $prog['price_note'] ?? 'Termasuk Modul Teknis, Safety Kit, Praktik & Sertifikat',
                'short_description' => $prog['short_description'] ?? 'Program pelatihan teknis komprehensif berstandar industri.',
                'full_description' => $prog['overview'] ?? 'Overview komprehensif materi pelatihan.',
                'curriculum' => $prog['curriculum'] ?? [],
                'requirements' => $prog['requirements'] ?? [],
                'facilities' => $prog['facilities'] ?? [],
                'target_audience' => $prog['target_audience'] ?? 'Praktisi, Engineer, dan Teknisi Industri',
                'certification_body' => 'Lembaga Sertifikasi Profesi & Standar Industri Global',
                'duration' => $prog['duration'] ?? '3 Hari Intensif',
                'icon' => $prog['icon'] ?? 'bi-lightning-charge-fill',
                'image' => 'https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?w=800&auto=format&fit=crop&q=80',
                'topic_key' => $prog['slug'],
                'is_featured' => $index < 6,
                'is_active' => true,
                'sort_order' => $index + 1,
            ]);
        }

        // 5. Featured Articles (Homepage 3 Cards)
        Article::truncate();
        $sampleArticles = [
            [
                'title' => 'Strategi Manajemen Kualitas Daya dan Eliminasi Harmonisa pada Jaringan Listrik Industri',
                'slug' => 'strategi-manajemen-kualitas-daya-dan-eliminasi-harmonisa-industri',
                'category' => 'Training Energy',
                'excerpt' => 'Panduan komprehensif mitigasi Total Harmonic Distortion (THD) tegangan dan arus sesuai standar IEEE 519 untuk mencegah degradasi transformator dan pemborosan energi listrik pabrik.',
                'content' => '<p>Kualitas daya listrik (Power Quality) merupakan faktor penentu utama keandalan peralatan produksi dan efisiensi konsumsi energi di sektor industri manufaktur berat dan pembangkitan listrik.</p>',
                'featured_image' => 'https://images.unsplash.com/photo-1513836279014-a89f7a76ae86?w=800&auto=format&fit=crop&q=80',
                'author' => 'Tim Instruktur Master Training Energy',
                'read_time' => 25,
                'views_count' => 1240,
                'is_featured' => true,
                'is_published' => true,
            ],
            [
                'title' => 'Prosedur Pemeliharaan Preventif dan Diagnostik Getaran Turbin Gas Pembangkit Listrik',
                'slug' => 'prosedur-pemeliharaan-preventif-dan-diagnostik-getaran-turbin-gas',
                'category' => 'Training Energy',
                'excerpt' => 'Metodologi evaluasi spektrum vibrasi FFT ISO 10816, inspeksi boroskopik sudu turbin, dan manajemen siklus termal Brayton untuk mencegah kegagalan katastrofik unit pembangkit.',
                'content' => '<p>Turbin gas beroperasi pada kecepatan rotasi dan temperatur pembakaran ekstrem yang menuntut pemantauan keandalan kondisi dinamis tanpa henti.</p>',
                'featured_image' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?w=800&auto=format&fit=crop&q=80',
                'author' => 'Tim Instruktur Master Training Energy',
                'read_time' => 30,
                'views_count' => 980,
                'is_featured' => true,
                'is_published' => true,
            ],
            [
                'title' => 'Implementasi Sistem Manajemen Energi ISO 50001 dan Audit Konsumsi Daya Pabrik',
                'slug' => 'implementasi-sistem-manajemen-energi-iso-50001-audit-daya-pabrik',
                'category' => 'Training Energy',
                'excerpt' => 'Langkah terstruktur penetapan Baseline Energi, Energy Performance Indicators (EnPI), dan pemetaan peluang konservasi energi pada sistem motor dan boiler industri.',
                'content' => '<p>Penerapan standar ISO 50001 memberikan kerangka sistematis bagi korporasi untuk memangkas intensitas energi secara berkelanjutan tanpa mengurangi kapasitas produksi.</p>',
                'featured_image' => 'https://images.unsplash.com/photo-1509391365360-2e959784a276?w=800&auto=format&fit=crop&q=80',
                'author' => 'Tim Instruktur Master Training Energy',
                'read_time' => 28,
                'views_count' => 870,
                'is_featured' => true,
                'is_published' => true,
            ],
        ];

        foreach ($sampleArticles as $art) {
            Article::create($art);
        }

        // 6. FAQs
        Faq::truncate();
        $faqs = [
            [
                'question' => 'Apa keunggulan program pelatihan di Lembaga Training Energy Indonesia?',
                'answer' => 'Program pelatihan kami dirancang berbasis standar rekayasa internasional (ISO 50001, IEEE, IEC, ASME, API, NFPA 70E), dibimbing langsung oleh instruktur master berpengalaman puluhan tahun di industri energi dan kelistrikan, serta dilengkapi sesi praktikum hands-on simulator dan instrumen uji terakreditasi.',
                'category' => 'Umum',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'question' => 'Apakah sertifikat yang diterbitkan diakui oleh sektor industri nasional?',
                'answer' => 'Ya, seluruh sertifikat kompetensi yang diterbitkan memenuhi standar kualifikasi industri nasional dan global, mencakup evaluasi teori berbasis standar rekayasa serta asesmen keterampilan praktikum lapangan yang kredibel bagi perusahaan migas, pembangkitan listrik, petrokimia, dan manufaktur.',
                'category' => 'Sertifikasi',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'question' => 'Apakah tersedia skema In-House Corporate Training di lokasi pabrik atau pembangkit kami?',
                'answer' => 'Ya, kami melayani penyelenggaraan In-House Corporate Customized Training di seluruh 38 provinsi di Indonesia. Kurikulum, studi kasus, dan jadwal pelatihan dapat disesuaikan secara spesifik dengan konfigurasi sistem tenaga, jenis mesin turbin/boiler, serta peralatan otomasi di fasilitas perusahaan Anda.',
                'category' => 'Penyelenggaraan',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'question' => 'Bagaimana prosedur pendaftaran dan berapa kuota peserta per kelas?',
                'answer' => 'Pendaftaran dapat dilakukan secara mudah melalui hotline WhatsApp resmi customer care kami. Demi menjaga efektivitas transfer ilmu dan kecukupan waktu praktikum pada instrumen uji, kuota per batch dibatasi maksimal 12 hingga 15 peserta per kelas.',
                'category' => 'Pendaftaran',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'question' => 'Fasilitas apa saja yang diperoleh setiap peserta pelatihan?',
                'answer' => 'Peserta memperoleh modul teknis eksklusif (hardcopy & softcopy), safety pocket guide, sertifikat kompetensi resmi, perlengkapan safety kit peserta, akses praktikum instrumen uji presisi, dokumentasi kegiatan, serta konsumsi lengkap (makan siang dan 2x coffee break) selama pelatihan tatap muka.',
                'category' => 'Fasilitas',
                'sort_order' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($faqs as $f) {
            Faq::create($f);
        }

        Schema::enableForeignKeyConstraints();
    }
}
