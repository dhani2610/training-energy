<?php

namespace App\Services;

use Illuminate\Support\Str;

class EnergySchemeService
{
    /**
     * Master Program Training Energy Indonesia
     */
    public static function getMasterPrograms(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'TRAINING LIFE CYCLE COST',
                'slug' => 'training-life-cycle-cost',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Manajemen Biaya & Keandalan Aset',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING LIFE CYCLE COST berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING LIFE CYCLE COST dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING LIFE CYCLE COST Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING LIFE CYCLE COST Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING LIFE CYCLE COST. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 2,
                'title' => 'TRAINING INSTRUMENTATION AND CALIBRATION',
                'slug' => 'training-instrumentation-and-calibration',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Instrumentasi & Kalibrasi Presisi',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING INSTRUMENTATION AND CALIBRATION berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING INSTRUMENTATION AND CALIBRATION dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING INSTRUMENTATION AND CALIBRATION Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING INSTRUMENTATION AND CALIBRATION Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING INSTRUMENTATION AND CALIBRATION. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 3,
                'title' => 'INSTRUMENTATION BASED ON MICROCONTROLLER',
                'slug' => 'instrumentation-based-on-microcontroller',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Instrumentasi & Mikrokontroler',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif INSTRUMENTATION BASED ON MICROCONTROLLER berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program INSTRUMENTATION BASED ON MICROCONTROLLER dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi INSTRUMENTATION BASED ON MICROCONTROLLER Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'INSTRUMENTATION BASED ON MICROCONTROLLER Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif INSTRUMENTATION BASED ON MICROCONTROLLER. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 4,
                'title' => 'TRAINING INTEGRATED COMMUNICATION',
                'slug' => 'training-integrated-communication',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Sistem Komunikasi Terintegrasi',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING INTEGRATED COMMUNICATION berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING INTEGRATED COMMUNICATION dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING INTEGRATED COMMUNICATION Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING INTEGRATED COMMUNICATION Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING INTEGRATED COMMUNICATION. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 5,
                'title' => 'TRAINING INTERMEDIATE TO PROGRAMMABLE LOGIC CONTROLLERS',
                'slug' => 'training-intermediate-programmable-logic-controllers',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Automasi & PLC Tingkat Lanjut',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING INTERMEDIATE TO PROGRAMMABLE LOGIC CONTROLLERS berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING INTERMEDIATE TO PROGRAMMABLE LOGIC CONTROLLERS dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING INTERMEDIATE TO PROGRAMMABLE LOGIC CONTROLLERS Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING INTERMEDIATE TO PROGRAMMABLE LOGIC CONTROLLERS Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING INTERMEDIATE TO PROGRAMMABLE LOGIC CONTROLLERS. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 6,
                'title' => 'TRAINING INTEGRATED RESERVOIR MANAGEMENT',
                'slug' => 'training-integrated-reservoir-management',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Eksplorasi & Manajemen Reservoir',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING INTEGRATED RESERVOIR MANAGEMENT berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING INTEGRATED RESERVOIR MANAGEMENT dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING INTEGRATED RESERVOIR MANAGEMENT Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING INTEGRATED RESERVOIR MANAGEMENT Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING INTEGRATED RESERVOIR MANAGEMENT. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 7,
                'title' => 'TRAINING INTERMEDIATE INSTRUMENTASI DAN PROGRAMMABLE LOGIC CONTROL',
                'slug' => 'training-intermediate-instrumentasi-plc',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Instrumentasi & PLC Terpadu',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING INTERMEDIATE INSTRUMENTASI DAN PROGRAMMABLE LOGIC CONTROL berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING INTERMEDIATE INSTRUMENTASI DAN PROGRAMMABLE LOGIC CONTROL dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING INTERMEDIATE INSTRUMENTASI DAN PROGRAMMABLE LOGIC CONTROL Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING INTERMEDIATE INSTRUMENTASI DAN PROGRAMMABLE LOGIC CONTROL Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING INTERMEDIATE INSTRUMENTASI DAN PROGRAMMABLE LOGIC CONTROL. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 8,
                'title' => 'TRAINING INTRODUCTION TO CONSEQUENCE ANALYSIS',
                'slug' => 'training-introduction-to-consequence-analysis',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Keselamatan Proses & Analisis Dampak',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING INTRODUCTION TO CONSEQUENCE ANALYSIS berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING INTRODUCTION TO CONSEQUENCE ANALYSIS dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING INTRODUCTION TO CONSEQUENCE ANALYSIS Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING INTRODUCTION TO CONSEQUENCE ANALYSIS Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING INTRODUCTION TO CONSEQUENCE ANALYSIS. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 9,
                'title' => 'TRAINING INTRODUCTION TO GAS TURBINES',
                'slug' => 'training-introduction-to-gas-turbines',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Pembangkit & Turbin Gas',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING INTRODUCTION TO GAS TURBINES berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING INTRODUCTION TO GAS TURBINES dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING INTRODUCTION TO GAS TURBINES Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING INTRODUCTION TO GAS TURBINES Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING INTRODUCTION TO GAS TURBINES. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 10,
                'title' => 'TRAINING INTRODUCTION TO INDUSTRIAL PROCESS',
                'slug' => 'training-introduction-to-industrial-process',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Proses Industri & Operasional Pabrik',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING INTRODUCTION TO INDUSTRIAL PROCESS berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING INTRODUCTION TO INDUSTRIAL PROCESS dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING INTRODUCTION TO INDUSTRIAL PROCESS Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING INTRODUCTION TO INDUSTRIAL PROCESS Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING INTRODUCTION TO INDUSTRIAL PROCESS. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 11,
                'title' => 'TRAINING INTRODUCTION TO INDUSTRIAL PROCESS CONTROL',
                'slug' => 'training-introduction-to-industrial-process-control',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Pengendalian Proses Industri',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING INTRODUCTION TO INDUSTRIAL PROCESS CONTROL berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING INTRODUCTION TO INDUSTRIAL PROCESS CONTROL dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING INTRODUCTION TO INDUSTRIAL PROCESS CONTROL Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING INTRODUCTION TO INDUSTRIAL PROCESS CONTROL Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING INTRODUCTION TO INDUSTRIAL PROCESS CONTROL. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 12,
                'title' => 'TRAINING MAINTENANCE PLANNING & SUPERVISION',
                'slug' => 'training-maintenance-planning-supervision',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Perencanaan & Supervisi Pemeliharaan',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING MAINTENANCE PLANNING & SUPERVISION berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING MAINTENANCE PLANNING & SUPERVISION dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING MAINTENANCE PLANNING & SUPERVISION Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING MAINTENANCE PLANNING & SUPERVISION Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING MAINTENANCE PLANNING & SUPERVISION. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 13,
                'title' => 'TRAINING OF OCCUPATIONAL SAFETY AND HEALTH EXPERTS (K3 LISTRIK)',
                'slug' => 'training-k3-listrik-ahli-keselamatan-kerja',
                'level_code' => 'Energy Specialist',
                'level_name' => 'K3 Kelistrikan & Kepatuhan',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING OF OCCUPATIONAL SAFETY AND HEALTH EXPERTS (K3 LISTRIK) berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING OF OCCUPATIONAL SAFETY AND HEALTH EXPERTS (K3 LISTRIK) dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING OF OCCUPATIONAL SAFETY AND HEALTH EXPERTS (K3 LISTRIK) Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING OF OCCUPATIONAL SAFETY AND HEALTH EXPERTS (K3 LISTRIK) Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING OF OCCUPATIONAL SAFETY AND HEALTH EXPERTS (K3 LISTRIK). Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 14,
                'title' => 'TRAINING CALIBRATION OF MEASURING INSTRUMENTS (SCALES)',
                'slug' => 'training-calibration-measuring-instruments-scales',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Kalibrasi Timbangan & Alat Ukur',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING CALIBRATION OF MEASURING INSTRUMENTS (SCALES) berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING CALIBRATION OF MEASURING INSTRUMENTS (SCALES) dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING CALIBRATION OF MEASURING INSTRUMENTS (SCALES) Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING CALIBRATION OF MEASURING INSTRUMENTS (SCALES) Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING CALIBRATION OF MEASURING INSTRUMENTS (SCALES). Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 15,
                'title' => 'KALIBRASI ALAT UKUR CALIPER DAN MICROMETER',
                'slug' => 'kalibrasi-alat-ukur-caliper-dan-micrometer',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Metrologi Caliper & Micrometer',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif KALIBRASI ALAT UKUR CALIPER DAN MICROMETER berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program KALIBRASI ALAT UKUR CALIPER DAN MICROMETER dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi KALIBRASI ALAT UKUR CALIPER DAN MICROMETER Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'KALIBRASI ALAT UKUR CALIPER DAN MICROMETER Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif KALIBRASI ALAT UKUR CALIPER DAN MICROMETER. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 16,
                'title' => 'TRAINING POWER QUALITY AND ENERGY EFFICIENCY',
                'slug' => 'training-power-quality-and-energy-efficiency',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Kualitas Daya & Efisiensi Energi',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING POWER QUALITY AND ENERGY EFFICIENCY berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING POWER QUALITY AND ENERGY EFFICIENCY dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING POWER QUALITY AND ENERGY EFFICIENCY Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING POWER QUALITY AND ENERGY EFFICIENCY Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING POWER QUALITY AND ENERGY EFFICIENCY. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 17,
                'title' => 'TRAINING OPTIMIZATION LABORATORY AT THE OIL AND GAS INDUSTRY',
                'slug' => 'training-optimization-laboratory-oil-gas',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Laboratorium & Analisis Kimia Migas',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING OPTIMIZATION LABORATORY AT THE OIL AND GAS INDUSTRY berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING OPTIMIZATION LABORATORY AT THE OIL AND GAS INDUSTRY dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING OPTIMIZATION LABORATORY AT THE OIL AND GAS INDUSTRY Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING OPTIMIZATION LABORATORY AT THE OIL AND GAS INDUSTRY Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING OPTIMIZATION LABORATORY AT THE OIL AND GAS INDUSTRY. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 18,
                'title' => 'TRAINING LOGISTIC STRATEGIC AND BEST PRACTICES',
                'slug' => 'training-logistic-strategic-best-practices',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Logistik Strategis Energi',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING LOGISTIC STRATEGIC AND BEST PRACTICES berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING LOGISTIC STRATEGIC AND BEST PRACTICES dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING LOGISTIC STRATEGIC AND BEST PRACTICES Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING LOGISTIC STRATEGIC AND BEST PRACTICES Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING LOGISTIC STRATEGIC AND BEST PRACTICES. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 19,
                'title' => 'TRAINING LOGISTIC WAREHOUSE MANAGEMENT',
                'slug' => 'training-logistic-warehouse-management',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Manajemen Pergudangan Logistik',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING LOGISTIC WAREHOUSE MANAGEMENT berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING LOGISTIC WAREHOUSE MANAGEMENT dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING LOGISTIC WAREHOUSE MANAGEMENT Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING LOGISTIC WAREHOUSE MANAGEMENT Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING LOGISTIC WAREHOUSE MANAGEMENT. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 20,
                'title' => 'TRAINING LNG SAFETY SYSTEM',
                'slug' => 'training-lng-safety-system',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Keselamatan Sistem LNG & Gas Alam',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING LNG SAFETY SYSTEM berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING LNG SAFETY SYSTEM dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING LNG SAFETY SYSTEM Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING LNG SAFETY SYSTEM Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING LNG SAFETY SYSTEM. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 21,
                'title' => 'TRAINING LOGISTICS AND SUPPLY CHAIN MANAGEMENT',
                'slug' => 'training-logistics-supply-chain-management',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Rantai Pasok Industri Energi',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING LOGISTICS AND SUPPLY CHAIN MANAGEMENT berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING LOGISTICS AND SUPPLY CHAIN MANAGEMENT dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING LOGISTICS AND SUPPLY CHAIN MANAGEMENT Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING LOGISTICS AND SUPPLY CHAIN MANAGEMENT Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING LOGISTICS AND SUPPLY CHAIN MANAGEMENT. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 22,
                'title' => 'TRAINING LOGISTIC WAREHOUSE & DISTRIBUTION MANAGEMENT',
                'slug' => 'training-logistic-warehouse-distribution-management',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Distribusi & Logistik Energi',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING LOGISTIC WAREHOUSE & DISTRIBUTION MANAGEMENT berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING LOGISTIC WAREHOUSE & DISTRIBUTION MANAGEMENT dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING LOGISTIC WAREHOUSE & DISTRIBUTION MANAGEMENT Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING LOGISTIC WAREHOUSE & DISTRIBUTION MANAGEMENT Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING LOGISTIC WAREHOUSE & DISTRIBUTION MANAGEMENT. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 23,
                'title' => 'TRAINING LOW VOLTAGE SWITCHGEARS',
                'slug' => 'training-low-voltage-switchgears',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Sistem Kelistrikan Switchgear TR',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING LOW VOLTAGE SWITCHGEARS berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING LOW VOLTAGE SWITCHGEARS dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING LOW VOLTAGE SWITCHGEARS Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING LOW VOLTAGE SWITCHGEARS Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING LOW VOLTAGE SWITCHGEARS. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 24,
                'title' => 'TRAINING MACHINERY FAILURE ANALYSIS',
                'slug' => 'training-machinery-failure-analysis',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Analisis Kegagalan Mesin Industri',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING MACHINERY FAILURE ANALYSIS berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING MACHINERY FAILURE ANALYSIS dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING MACHINERY FAILURE ANALYSIS Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING MACHINERY FAILURE ANALYSIS Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING MACHINERY FAILURE ANALYSIS. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 25,
                'title' => 'TRAINING MACHINERY DIAGNOSTIC',
                'slug' => 'training-machinery-diagnostic',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Diagnostik & Kondisi Mesin Industri',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING MACHINERY DIAGNOSTIC berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING MACHINERY DIAGNOSTIC dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING MACHINERY DIAGNOSTIC Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING MACHINERY DIAGNOSTIC Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING MACHINERY DIAGNOSTIC. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 26,
                'title' => 'TRAINING LOW VOLTAGE LIGHTNING PROTECTION SYSTEMS',
                'slug' => 'training-low-voltage-lightning-protection-systems',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Proteksi Petir & Sistem Pentanahan',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING LOW VOLTAGE LIGHTNING PROTECTION SYSTEMS berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING LOW VOLTAGE LIGHTNING PROTECTION SYSTEMS dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING LOW VOLTAGE LIGHTNING PROTECTION SYSTEMS Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING LOW VOLTAGE LIGHTNING PROTECTION SYSTEMS Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING LOW VOLTAGE LIGHTNING PROTECTION SYSTEMS. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 27,
                'title' => 'TRAINING MAINTENANCE MANAGEMENT SYSTEM WAREHOUSING',
                'slug' => 'training-maintenance-management-system-warehousing',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Sistem Manajemen Pemeliharaan',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING MAINTENANCE MANAGEMENT SYSTEM WAREHOUSING berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING MAINTENANCE MANAGEMENT SYSTEM WAREHOUSING dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING MAINTENANCE MANAGEMENT SYSTEM WAREHOUSING Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING MAINTENANCE MANAGEMENT SYSTEM WAREHOUSING Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING MAINTENANCE MANAGEMENT SYSTEM WAREHOUSING. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 28,
                'title' => 'TRAINING MAINTENANCE TURNAROUND MANAGEMENT',
                'slug' => 'training-maintenance-turnaround-management',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Manajemen Turnaround & Overhaul',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING MAINTENANCE TURNAROUND MANAGEMENT berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING MAINTENANCE TURNAROUND MANAGEMENT dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING MAINTENANCE TURNAROUND MANAGEMENT Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING MAINTENANCE TURNAROUND MANAGEMENT Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING MAINTENANCE TURNAROUND MANAGEMENT. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 29,
                'title' => 'TRAINING MANAGEMENT OF ELECTRICAL PROTECTION',
                'slug' => 'training-management-electrical-protection',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Manajemen Proteksi Kelistrikan',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING MANAGEMENT OF ELECTRICAL PROTECTION berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING MANAGEMENT OF ELECTRICAL PROTECTION dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING MANAGEMENT OF ELECTRICAL PROTECTION Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING MANAGEMENT OF ELECTRICAL PROTECTION Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING MANAGEMENT OF ELECTRICAL PROTECTION. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 30,
                'title' => 'TRAINING BEST PRACTICE MANUFACTURING MANAGEMENT',
                'slug' => 'training-best-practice-manufacturing-management',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Manajemen Manufaktur Berkelanjutan',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING BEST PRACTICE MANUFACTURING MANAGEMENT berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING BEST PRACTICE MANUFACTURING MANAGEMENT dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING BEST PRACTICE MANUFACTURING MANAGEMENT Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING BEST PRACTICE MANUFACTURING MANAGEMENT Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING BEST PRACTICE MANUFACTURING MANAGEMENT. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 31,
                'title' => 'TRAINING MAINTENANCE OF BUILDING',
                'slug' => 'training-maintenance-of-building',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Pemeliharaan Fasilitas & Gedung',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING MAINTENANCE OF BUILDING berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING MAINTENANCE OF BUILDING dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING MAINTENANCE OF BUILDING Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING MAINTENANCE OF BUILDING Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING MAINTENANCE OF BUILDING. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 32,
                'title' => 'TRAINING OIL AND GAS MATERIAL PROCUREMENT MANAGEMENT',
                'slug' => 'training-oil-gas-material-procurement-management',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Pengadaan Material Industri Migas',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING OIL AND GAS MATERIAL PROCUREMENT MANAGEMENT berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING OIL AND GAS MATERIAL PROCUREMENT MANAGEMENT dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING OIL AND GAS MATERIAL PROCUREMENT MANAGEMENT Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING OIL AND GAS MATERIAL PROCUREMENT MANAGEMENT Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING OIL AND GAS MATERIAL PROCUREMENT MANAGEMENT. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 33,
                'title' => 'TRAINING ELECTRICAL MAINTENANCE SYSTEM',
                'slug' => 'training-electrical-maintenance-system',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Sistem Pemeliharaan Kelistrikan',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING ELECTRICAL MAINTENANCE SYSTEM berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING ELECTRICAL MAINTENANCE SYSTEM dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING ELECTRICAL MAINTENANCE SYSTEM Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING ELECTRICAL MAINTENANCE SYSTEM Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING ELECTRICAL MAINTENANCE SYSTEM. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 34,
                'title' => 'TRAINING HYDRAULIC & PNEUMATIC POWER SYSTEM',
                'slug' => 'training-hydraulic-pneumatic-power-system',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Sistem Daya Hidrolik & Pneumatik',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING HYDRAULIC & PNEUMATIC POWER SYSTEM berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING HYDRAULIC & PNEUMATIC POWER SYSTEM dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING HYDRAULIC & PNEUMATIC POWER SYSTEM Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING HYDRAULIC & PNEUMATIC POWER SYSTEM Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING HYDRAULIC & PNEUMATIC POWER SYSTEM. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 35,
                'title' => 'TRAINING HYDRAULICS SYSTEMS',
                'slug' => 'training-hydraulics-systems',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Teknologi Sistem Hidrolik Industri',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING HYDRAULICS SYSTEMS berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING HYDRAULICS SYSTEMS dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING HYDRAULICS SYSTEMS Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING HYDRAULICS SYSTEMS Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING HYDRAULICS SYSTEMS. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 36,
                'title' => 'TRAINING IMPROVING ASSET PERFORMANCE WITH TOTAL PRODUCTIVE MAINTENANCE',
                'slug' => 'training-improving-asset-performance-tpm',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Total Productive Maintenance (TPM)',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING IMPROVING ASSET PERFORMANCE WITH TOTAL PRODUCTIVE MAINTENANCE berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING IMPROVING ASSET PERFORMANCE WITH TOTAL PRODUCTIVE MAINTENANCE dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING IMPROVING ASSET PERFORMANCE WITH TOTAL PRODUCTIVE MAINTENANCE Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING IMPROVING ASSET PERFORMANCE WITH TOTAL PRODUCTIVE MAINTENANCE Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING IMPROVING ASSET PERFORMANCE WITH TOTAL PRODUCTIVE MAINTENANCE. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 37,
                'title' => 'TRAINING INDUSTRIAL ACOUSTIC: CONCEPTS, STANDARDS AND APPLICATIONS',
                'slug' => 'training-industrial-acoustic-concepts-standards',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Akustik Industri & Kebisingan',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING INDUSTRIAL ACOUSTIC: CONCEPTS, STANDARDS AND APPLICATIONS berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING INDUSTRIAL ACOUSTIC: CONCEPTS, STANDARDS AND APPLICATIONS dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING INDUSTRIAL ACOUSTIC: CONCEPTS, STANDARDS AND APPLICATIONS Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING INDUSTRIAL ACOUSTIC: CONCEPTS, STANDARDS AND APPLICATIONS Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING INDUSTRIAL ACOUSTIC: CONCEPTS, STANDARDS AND APPLICATIONS. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 38,
                'title' => 'TRAINING INDUSTRIAL GEARBOX REPAIR',
                'slug' => 'training-industrial-gearbox-repair',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Perbaikan & Rekondisi Gearbox',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING INDUSTRIAL GEARBOX REPAIR berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING INDUSTRIAL GEARBOX REPAIR dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING INDUSTRIAL GEARBOX REPAIR Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING INDUSTRIAL GEARBOX REPAIR Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING INDUSTRIAL GEARBOX REPAIR. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 39,
                'title' => 'TRAINING INDUSTRIAL POWER SYSTEMS ENGINEERING DEVICE COORDINATION',
                'slug' => 'training-industrial-power-systems-device-coordination',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Koordinasi Proteksi Sistem Tenaga',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING INDUSTRIAL POWER SYSTEMS ENGINEERING DEVICE COORDINATION berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING INDUSTRIAL POWER SYSTEMS ENGINEERING DEVICE COORDINATION dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING INDUSTRIAL POWER SYSTEMS ENGINEERING DEVICE COORDINATION Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING INDUSTRIAL POWER SYSTEMS ENGINEERING DEVICE COORDINATION Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING INDUSTRIAL POWER SYSTEMS ENGINEERING DEVICE COORDINATION. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 40,
                'title' => 'TRAINING INDUSTRIAL PUMP REPAIR',
                'slug' => 'training-industrial-pump-repair',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Pemeliharaan & Rekondisi Pompa',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING INDUSTRIAL PUMP REPAIR berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING INDUSTRIAL PUMP REPAIR dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING INDUSTRIAL PUMP REPAIR Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING INDUSTRIAL PUMP REPAIR Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING INDUSTRIAL PUMP REPAIR. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 41,
                'title' => 'TRAINING INDUSTRIAL RELATIONS ANALYST PROGRAM',
                'slug' => 'training-industrial-relations-analyst-program',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Hubungan Industrial Sektor Energi',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING INDUSTRIAL RELATIONS ANALYST PROGRAM berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING INDUSTRIAL RELATIONS ANALYST PROGRAM dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING INDUSTRIAL RELATIONS ANALYST PROGRAM Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING INDUSTRIAL RELATIONS ANALYST PROGRAM Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING INDUSTRIAL RELATIONS ANALYST PROGRAM. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 42,
                'title' => 'TRAINING BOILER STEAM GENERATION',
                'slug' => 'training-boiler-steam-generation',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Pembangkitan Uap & Sistem Boiler',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING BOILER STEAM GENERATION berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING BOILER STEAM GENERATION dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING BOILER STEAM GENERATION Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING BOILER STEAM GENERATION Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING BOILER STEAM GENERATION. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 43,
                'title' => 'TRAINING BASIC RELIABILITY ENGINEERING',
                'slug' => 'training-basic-reliability-engineering',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Rekayasa Keandalan Fasilitas',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING BASIC RELIABILITY ENGINEERING berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING BASIC RELIABILITY ENGINEERING dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING BASIC RELIABILITY ENGINEERING Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING BASIC RELIABILITY ENGINEERING Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING BASIC RELIABILITY ENGINEERING. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 44,
                'title' => 'TRAINING BELT CONVEYOR',
                'slug' => 'training-belt-conveyor',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Sistem Konveyor Material Curah',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING BELT CONVEYOR berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING BELT CONVEYOR dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING BELT CONVEYOR Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING BELT CONVEYOR Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING BELT CONVEYOR. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 45,
                'title' => 'TRAINING BELT POWER TRANSMISSION',
                'slug' => 'training-belt-power-transmission',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Transmisi Daya Sabuk & Pulley',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING BELT POWER TRANSMISSION berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING BELT POWER TRANSMISSION dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING BELT POWER TRANSMISSION Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING BELT POWER TRANSMISSION Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING BELT POWER TRANSMISSION. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 46,
                'title' => 'TRAINING BLOWOUT PREVENTION AND WELL CONTROL',
                'slug' => 'training-blowout-prevention-well-control',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Pengendalian Tekanan Sumur Bor',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING BLOWOUT PREVENTION AND WELL CONTROL berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING BLOWOUT PREVENTION AND WELL CONTROL dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING BLOWOUT PREVENTION AND WELL CONTROL Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING BLOWOUT PREVENTION AND WELL CONTROL Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING BLOWOUT PREVENTION AND WELL CONTROL. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 47,
                'title' => 'TRAINING BOILER OPERATION AND MAINTENANCE',
                'slug' => 'training-boiler-operation-and-maintenance',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Operasi & Pemeliharaan Boiler',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING BOILER OPERATION AND MAINTENANCE berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING BOILER OPERATION AND MAINTENANCE dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING BOILER OPERATION AND MAINTENANCE Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING BOILER OPERATION AND MAINTENANCE Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING BOILER OPERATION AND MAINTENANCE. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 48,
                'title' => 'TRAINING BUILDING ASSET MANAGEMENT',
                'slug' => 'training-building-asset-management',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Manajemen Aset Bangunan Industri',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING BUILDING ASSET MANAGEMENT berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING BUILDING ASSET MANAGEMENT dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING BUILDING ASSET MANAGEMENT Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING BUILDING ASSET MANAGEMENT Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING BUILDING ASSET MANAGEMENT. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 49,
                'title' => 'TRAINING BUILDING MAINTENANCE',
                'slug' => 'training-building-maintenance',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Tata Kelola Perawatan Gedung',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING BUILDING MAINTENANCE berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING BUILDING MAINTENANCE dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING BUILDING MAINTENANCE Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING BUILDING MAINTENANCE Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING BUILDING MAINTENANCE. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 50,
                'title' => 'TRAINING CABLE FAULT LOCATION FOR TESTING',
                'slug' => 'training-cable-fault-location-testing',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Deteksi Kerusakan Kabel Bawah Tanah',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING CABLE FAULT LOCATION FOR TESTING berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING CABLE FAULT LOCATION FOR TESTING dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING CABLE FAULT LOCATION FOR TESTING Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING CABLE FAULT LOCATION FOR TESTING Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING CABLE FAULT LOCATION FOR TESTING. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 51,
                'title' => 'TRAINING CALIBRATION SYSTEM',
                'slug' => 'training-calibration-system',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Sistem Manajemen Kalibrasi',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING CALIBRATION SYSTEM berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING CALIBRATION SYSTEM dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING CALIBRATION SYSTEM Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING CALIBRATION SYSTEM Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING CALIBRATION SYSTEM. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 52,
                'title' => 'TRAINING CASING AND CEMENTING',
                'slug' => 'training-casing-and-cementing',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Casing & Penyemenan Sumur Migas',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING CASING AND CEMENTING berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING CASING AND CEMENTING dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING CASING AND CEMENTING Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING CASING AND CEMENTING Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING CASING AND CEMENTING. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 53,
                'title' => 'TRAINING H2S & CO2 REMOVAL',
                'slug' => 'training-h2s-co2-removal',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Penghilangan Gas Asam H2S & CO2',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING H2S & CO2 REMOVAL berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING H2S & CO2 REMOVAL dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING H2S & CO2 REMOVAL Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING H2S & CO2 REMOVAL Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING H2S & CO2 REMOVAL. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 54,
                'title' => 'TRAINING CEMENTING PRIMARY & REMEDIAL',
                'slug' => 'training-cementing-primary-remedial',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Penyemenan Primer & Remedial',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING CEMENTING PRIMARY & REMEDIAL berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING CEMENTING PRIMARY & REMEDIAL dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING CEMENTING PRIMARY & REMEDIAL Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING CEMENTING PRIMARY & REMEDIAL Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING CEMENTING PRIMARY & REMEDIAL. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 55,
                'title' => 'TRAINING CENTRIFUGAL COMPRESSOR OPERATIONS',
                'slug' => 'training-centrifugal-compressor-operations',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Operasional Kompresor Sentrifugal',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING CENTRIFUGAL COMPRESSOR OPERATIONS berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING CENTRIFUGAL COMPRESSOR OPERATIONS dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING CENTRIFUGAL COMPRESSOR OPERATIONS Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING CENTRIFUGAL COMPRESSOR OPERATIONS Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING CENTRIFUGAL COMPRESSOR OPERATIONS. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 56,
                'title' => 'TRAINING CENTRIFUGAL COMPRESSORS AND STEAM TURBINES',
                'slug' => 'training-centrifugal-compressors-steam-turbines',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Kompresor Sentrifugal & Turbin Uap',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING CENTRIFUGAL COMPRESSORS AND STEAM TURBINES berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING CENTRIFUGAL COMPRESSORS AND STEAM TURBINES dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING CENTRIFUGAL COMPRESSORS AND STEAM TURBINES Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING CENTRIFUGAL COMPRESSORS AND STEAM TURBINES Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING CENTRIFUGAL COMPRESSORS AND STEAM TURBINES. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 57,
                'title' => 'TRAINING CENTRIFUGAL GAS COMPRESSORS ANTI-SURGE CONTROL',
                'slug' => 'training-centrifugal-gas-compressors-anti-surge',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Kendali Anti-Surge Kompresor Gas',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING CENTRIFUGAL GAS COMPRESSORS ANTI-SURGE CONTROL berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING CENTRIFUGAL GAS COMPRESSORS ANTI-SURGE CONTROL dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING CENTRIFUGAL GAS COMPRESSORS ANTI-SURGE CONTROL Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING CENTRIFUGAL GAS COMPRESSORS ANTI-SURGE CONTROL Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING CENTRIFUGAL GAS COMPRESSORS ANTI-SURGE CONTROL. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 58,
                'title' => 'TRAINING CENTRIFUGAL PUMP OPERATION',
                'slug' => 'training-centrifugal-pump-operation',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Operasional Pompa Sentrifugal',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING CENTRIFUGAL PUMP OPERATION berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING CENTRIFUGAL PUMP OPERATION dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING CENTRIFUGAL PUMP OPERATION Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING CENTRIFUGAL PUMP OPERATION Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING CENTRIFUGAL PUMP OPERATION. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 59,
                'title' => 'TRAINING CENTRIFUGAL PUMPS TECHNOLOGY',
                'slug' => 'training-centrifugal-pumps-technology',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Teknologi & Mekanika Pompa',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING CENTRIFUGAL PUMPS TECHNOLOGY berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING CENTRIFUGAL PUMPS TECHNOLOGY dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING CENTRIFUGAL PUMPS TECHNOLOGY Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING CENTRIFUGAL PUMPS TECHNOLOGY Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING CENTRIFUGAL PUMPS TECHNOLOGY. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 60,
                'title' => 'TRAINING CHAINSAW OPERATION',
                'slug' => 'training-chainsaw-operation',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Operasi Pemotongan & Keselamatan',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING CHAINSAW OPERATION berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING CHAINSAW OPERATION dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING CHAINSAW OPERATION Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING CHAINSAW OPERATION Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING CHAINSAW OPERATION. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 61,
                'title' => 'TRAINING CO2 REMOVAL',
                'slug' => 'training-co2-removal-process',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Teknologi Pemisahan CO2',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING CO2 REMOVAL berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING CO2 REMOVAL dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING CO2 REMOVAL Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING CO2 REMOVAL Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING CO2 REMOVAL. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 62,
                'title' => 'TRAINING CHEMICAL HAZARD HANDLING',
                'slug' => 'training-chemical-hazard-handling',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Penanganan Bahaya Kimia Industri',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING CHEMICAL HAZARD HANDLING berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING CHEMICAL HAZARD HANDLING dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING CHEMICAL HAZARD HANDLING Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING CHEMICAL HAZARD HANDLING Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING CHEMICAL HAZARD HANDLING. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 63,
                'title' => 'TRAINING CONCEPTS OF DIESEL ENGINES',
                'slug' => 'training-concepts-of-diesel-engines',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Konsep & Termodinamika Mesin Diesel',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING CONCEPTS OF DIESEL ENGINES berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING CONCEPTS OF DIESEL ENGINES dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING CONCEPTS OF DIESEL ENGINES Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING CONCEPTS OF DIESEL ENGINES Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING CONCEPTS OF DIESEL ENGINES. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 64,
                'title' => 'TRAINING CONTROL OPERATION OF CENTRIFUGAL GAS COMPRESSORS',
                'slug' => 'training-control-operation-centrifugal-compressors',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Kendali Operasi Kompresor Gas',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING CONTROL OPERATION OF CENTRIFUGAL GAS COMPRESSORS berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING CONTROL OPERATION OF CENTRIFUGAL GAS COMPRESSORS dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING CONTROL OPERATION OF CENTRIFUGAL GAS COMPRESSORS Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING CONTROL OPERATION OF CENTRIFUGAL GAS COMPRESSORS Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING CONTROL OPERATION OF CENTRIFUGAL GAS COMPRESSORS. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 65,
                'title' => 'TRAINING CONTROL OPERATION OF RECIPROCATING COMPRESSORS',
                'slug' => 'training-control-operation-reciprocating-compressors',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Operasi Kompresor Torak',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING CONTROL OPERATION OF RECIPROCATING COMPRESSORS berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING CONTROL OPERATION OF RECIPROCATING COMPRESSORS dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING CONTROL OPERATION OF RECIPROCATING COMPRESSORS Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING CONTROL OPERATION OF RECIPROCATING COMPRESSORS Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING CONTROL OPERATION OF RECIPROCATING COMPRESSORS. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 66,
                'title' => 'TRAINING CONTROL AND AUTOMATION',
                'slug' => 'training-control-and-automation',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Otomasi & Sistem Kendali Terpadu',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING CONTROL AND AUTOMATION berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING CONTROL AND AUTOMATION dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING CONTROL AND AUTOMATION Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING CONTROL AND AUTOMATION Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING CONTROL AND AUTOMATION. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 67,
                'title' => 'TRAINING CONTROL VALVES & ACTUATORS',
                'slug' => 'training-control-valves-actuators',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Katup Kendali & Aktuator Presisi',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING CONTROL VALVES & ACTUATORS berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING CONTROL VALVES & ACTUATORS dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING CONTROL VALVES & ACTUATORS Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING CONTROL VALVES & ACTUATORS Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING CONTROL VALVES & ACTUATORS. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 68,
                'title' => 'TRAINING COPPER CABLE NETWORK',
                'slug' => 'training-copper-cable-network',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Jaringan Kabel Tembaga Industri',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING COPPER CABLE NETWORK berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING COPPER CABLE NETWORK dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING COPPER CABLE NETWORK Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING COPPER CABLE NETWORK Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING COPPER CABLE NETWORK. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 69,
                'title' => 'TRAINING CORROSION AND CORROSION PREVENTION',
                'slug' => 'training-corrosion-corrosion-prevention',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Pencegahan & Mitigasi Korosi',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING CORROSION AND CORROSION PREVENTION berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING CORROSION AND CORROSION PREVENTION dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING CORROSION AND CORROSION PREVENTION Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING CORROSION AND CORROSION PREVENTION Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING CORROSION AND CORROSION PREVENTION. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 70,
                'title' => 'TRAINING CORROSION CONTROL AND MONITORING IN GAS AND PETROLEUM INDUSTRY',
                'slug' => 'training-corrosion-control-monitoring-petroleum',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Monitoring Korosi Industri Migas',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING CORROSION CONTROL AND MONITORING IN GAS AND PETROLEUM INDUSTRY berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING CORROSION CONTROL AND MONITORING IN GAS AND PETROLEUM INDUSTRY dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING CORROSION CONTROL AND MONITORING IN GAS AND PETROLEUM INDUSTRY Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING CORROSION CONTROL AND MONITORING IN GAS AND PETROLEUM INDUSTRY Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING CORROSION CONTROL AND MONITORING IN GAS AND PETROLEUM INDUSTRY. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 71,
                'title' => 'TRAINING CRUDE OIL DISTILATION',
                'slug' => 'training-crude-oil-distilation',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Distilasi Fraksinasi Minyak Mentah',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING CRUDE OIL DISTILATION berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING CRUDE OIL DISTILATION dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING CRUDE OIL DISTILATION Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING CRUDE OIL DISTILATION Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING CRUDE OIL DISTILATION. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 72,
                'title' => 'TRAINING CYCLE TIME REDUCTION FOR HIGHER PROFITS AND PRODUCTIVITY',
                'slug' => 'training-cycle-time-reduction',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Optimalisasi Siklus Operasional',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING CYCLE TIME REDUCTION FOR HIGHER PROFITS AND PRODUCTIVITY berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING CYCLE TIME REDUCTION FOR HIGHER PROFITS AND PRODUCTIVITY dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING CYCLE TIME REDUCTION FOR HIGHER PROFITS AND PRODUCTIVITY Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING CYCLE TIME REDUCTION FOR HIGHER PROFITS AND PRODUCTIVITY Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING CYCLE TIME REDUCTION FOR HIGHER PROFITS AND PRODUCTIVITY. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 73,
                'title' => 'TRAINING CRYOGENICS ENGINEERING: LOW TEMPERATURE CONDITION',
                'slug' => 'training-cryogenics-engineering-low-temperature',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Rekayasa Kriogenik Suhu Rendah',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING CRYOGENICS ENGINEERING: LOW TEMPERATURE CONDITION berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING CRYOGENICS ENGINEERING: LOW TEMPERATURE CONDITION dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING CRYOGENICS ENGINEERING: LOW TEMPERATURE CONDITION Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING CRYOGENICS ENGINEERING: LOW TEMPERATURE CONDITION Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING CRYOGENICS ENGINEERING: LOW TEMPERATURE CONDITION. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 74,
                'title' => 'TRAINING DASAR TRANSMISI TEMBAGA DAN OPTIK',
                'slug' => 'training-dasar-transmisi-tembaga-dan-optik',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Transmisi Sinyal Listrik & Optik',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING DASAR TRANSMISI TEMBAGA DAN OPTIK berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING DASAR TRANSMISI TEMBAGA DAN OPTIK dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING DASAR TRANSMISI TEMBAGA DAN OPTIK Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING DASAR TRANSMISI TEMBAGA DAN OPTIK Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING DASAR TRANSMISI TEMBAGA DAN OPTIK. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 75,
                'title' => 'TRAINING DESIGN AND MAINTENANCE OF BOILER',
                'slug' => 'training-design-maintenance-boiler',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Desain & Pemeliharaan Boiler',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING DESIGN AND MAINTENANCE OF BOILER berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING DESIGN AND MAINTENANCE OF BOILER dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING DESIGN AND MAINTENANCE OF BOILER Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING DESIGN AND MAINTENANCE OF BOILER Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING DESIGN AND MAINTENANCE OF BOILER. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 76,
                'title' => 'TRAINING DESIGN OF FOUNDATION',
                'slug' => 'training-design-of-foundation',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Desain Pondasi Struktur Berat',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING DESIGN OF FOUNDATION berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING DESIGN OF FOUNDATION dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING DESIGN OF FOUNDATION Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING DESIGN OF FOUNDATION Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING DESIGN OF FOUNDATION. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 77,
                'title' => 'TRAINING DESIGN OF HEAT EXCHANGERS, REBOILERS, CONDENSERS AND AIR COOLERS',
                'slug' => 'training-design-heat-exchangers-condensers',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Perancangan Penukar Panas (HE)',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING DESIGN OF HEAT EXCHANGERS, REBOILERS, CONDENSERS AND AIR COOLERS berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING DESIGN OF HEAT EXCHANGERS, REBOILERS, CONDENSERS AND AIR COOLERS dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING DESIGN OF HEAT EXCHANGERS, REBOILERS, CONDENSERS AND AIR COOLERS Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING DESIGN OF HEAT EXCHANGERS, REBOILERS, CONDENSERS AND AIR COOLERS Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING DESIGN OF HEAT EXCHANGERS, REBOILERS, CONDENSERS AND AIR COOLERS. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 78,
                'title' => 'TRAINING DIESEL GENERATOR: OPERATION AND MAINTENANCE',
                'slug' => 'training-diesel-generator-operation-maintenance',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Operasi & Perawatan Genset Diesel',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING DIESEL GENERATOR: OPERATION AND MAINTENANCE berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING DIESEL GENERATOR: OPERATION AND MAINTENANCE dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING DIESEL GENERATOR: OPERATION AND MAINTENANCE Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING DIESEL GENERATOR: OPERATION AND MAINTENANCE Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING DIESEL GENERATOR: OPERATION AND MAINTENANCE. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 79,
                'title' => 'TRAINING DIGITAL ELECTRONICS',
                'slug' => 'training-digital-electronics',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Elektronika Digital Industri',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING DIGITAL ELECTRONICS berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING DIGITAL ELECTRONICS dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING DIGITAL ELECTRONICS Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING DIGITAL ELECTRONICS Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING DIGITAL ELECTRONICS. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 80,
                'title' => 'TRAINING DIGITAL KONTROL INSTRUMENTASI',
                'slug' => 'training-digital-kontrol-instrumentasi',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Instrumentasi & Kendali Digital',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING DIGITAL KONTROL INSTRUMENTASI berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING DIGITAL KONTROL INSTRUMENTASI dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING DIGITAL KONTROL INSTRUMENTASI Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING DIGITAL KONTROL INSTRUMENTASI Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING DIGITAL KONTROL INSTRUMENTASI. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 81,
                'title' => 'TRAINING DIGITAL RADIO LINK',
                'slug' => 'training-digital-radio-link',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Komunikasi Radio Link Digital',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING DIGITAL RADIO LINK berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING DIGITAL RADIO LINK dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING DIGITAL RADIO LINK Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING DIGITAL RADIO LINK Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING DIGITAL RADIO LINK. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 82,
                'title' => 'TRAINING COMPRESSOR: TECHNIQUE, OPERATION AND MAINTENANCE',
                'slug' => 'training-compressor-technique-operation-maintenance',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Operasi & Pemeliharaan Kompresor',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING COMPRESSOR: TECHNIQUE, OPERATION AND MAINTENANCE berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING COMPRESSOR: TECHNIQUE, OPERATION AND MAINTENANCE dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING COMPRESSOR: TECHNIQUE, OPERATION AND MAINTENANCE Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING COMPRESSOR: TECHNIQUE, OPERATION AND MAINTENANCE Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING COMPRESSOR: TECHNIQUE, OPERATION AND MAINTENANCE. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 83,
                'title' => 'TRAINING DRILLING AND CORING BITS',
                'slug' => 'training-drilling-and-coring-bits',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Teknologi Mata Bor Pengeboran',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING DRILLING AND CORING BITS berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING DRILLING AND CORING BITS dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING DRILLING AND CORING BITS Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING DRILLING AND CORING BITS Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING DRILLING AND CORING BITS. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 84,
                'title' => 'TRAINING DRILLING ENGINEERING',
                'slug' => 'training-drilling-engineering',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Rekayasa Pengeboran Lapangan',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING DRILLING ENGINEERING berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING DRILLING ENGINEERING dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING DRILLING ENGINEERING Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING DRILLING ENGINEERING Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING DRILLING ENGINEERING. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 85,
                'title' => 'TRAINING DRILLING FLUIDS TECHNOLOGY',
                'slug' => 'training-drilling-fluids-technology',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Fluida & Lumpur Pengeboran',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING DRILLING FLUIDS TECHNOLOGY berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING DRILLING FLUIDS TECHNOLOGY dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING DRILLING FLUIDS TECHNOLOGY Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING DRILLING FLUIDS TECHNOLOGY Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING DRILLING FLUIDS TECHNOLOGY. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 86,
                'title' => 'TRAINING DRILLING OPTIMIZATION AND WELL PLANNING ANALYSIS',
                'slug' => 'training-drilling-optimization-well-planning',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Optimalisasi Perencanaan Sumur',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING DRILLING OPTIMIZATION AND WELL PLANNING ANALYSIS berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING DRILLING OPTIMIZATION AND WELL PLANNING ANALYSIS dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING DRILLING OPTIMIZATION AND WELL PLANNING ANALYSIS Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING DRILLING OPTIMIZATION AND WELL PLANNING ANALYSIS Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING DRILLING OPTIMIZATION AND WELL PLANNING ANALYSIS. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 87,
                'title' => 'TRAINING DUST COLLECTOR AND BLOWER',
                'slug' => 'training-dust-collector-blower',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Sistem Dust Collector & Blower',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING DUST COLLECTOR AND BLOWER berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING DUST COLLECTOR AND BLOWER dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING DUST COLLECTOR AND BLOWER Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING DUST COLLECTOR AND BLOWER Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING DUST COLLECTOR AND BLOWER. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 88,
                'title' => 'TRAINING DYNAMICS AND STABILITY SYSTEMS',
                'slug' => 'training-dynamics-stability-systems',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Stabilitas Sistem Tenaga Listrik',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING DYNAMICS AND STABILITY SYSTEMS berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING DYNAMICS AND STABILITY SYSTEMS dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING DYNAMICS AND STABILITY SYSTEMS Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING DYNAMICS AND STABILITY SYSTEMS Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING DYNAMICS AND STABILITY SYSTEMS. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 89,
                'title' => 'TRAINING EFFECTIVE MAINTENANCE, PLANNING AND SCHEDULING',
                'slug' => 'training-effective-maintenance-planning-scheduling',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Penjadwalan Perawatan Efektif',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING EFFECTIVE MAINTENANCE, PLANNING AND SCHEDULING berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING EFFECTIVE MAINTENANCE, PLANNING AND SCHEDULING dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING EFFECTIVE MAINTENANCE, PLANNING AND SCHEDULING Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING EFFECTIVE MAINTENANCE, PLANNING AND SCHEDULING Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING EFFECTIVE MAINTENANCE, PLANNING AND SCHEDULING. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 90,
                'title' => 'TRAINING EFFECTIVE PIPELINE MAINTENANCE',
                'slug' => 'training-effective-pipeline-maintenance',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Integritas & Pemeliharaan Pipa',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING EFFECTIVE PIPELINE MAINTENANCE berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING EFFECTIVE PIPELINE MAINTENANCE dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING EFFECTIVE PIPELINE MAINTENANCE Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING EFFECTIVE PIPELINE MAINTENANCE Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING EFFECTIVE PIPELINE MAINTENANCE. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 91,
                'title' => 'TRAINING EFFLUENT AND AIR QUALITY CONTROL',
                'slug' => 'training-effluent-air-quality-control',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Pengendalian Kualitas Udara & Emisi',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING EFFLUENT AND AIR QUALITY CONTROL berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING EFFLUENT AND AIR QUALITY CONTROL dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING EFFLUENT AND AIR QUALITY CONTROL Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING EFFLUENT AND AIR QUALITY CONTROL Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING EFFLUENT AND AIR QUALITY CONTROL. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 92,
                'title' => 'TRAINING ELECTRIC ACTUATOR',
                'slug' => 'training-electric-actuator',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Aktuator Listrik & Valve Otomatis',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING ELECTRIC ACTUATOR berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING ELECTRIC ACTUATOR dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING ELECTRIC ACTUATOR Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING ELECTRIC ACTUATOR Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING ELECTRIC ACTUATOR. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 93,
                'title' => 'TRAINING ELECTRIC HYDRAULIC CABINET ACTUATOR',
                'slug' => 'training-electric-hydraulic-cabinet-actuator',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Aktuator Kabinet Elektro-Hidrolik',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING ELECTRIC HYDRAULIC CABINET ACTUATOR berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING ELECTRIC HYDRAULIC CABINET ACTUATOR dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING ELECTRIC HYDRAULIC CABINET ACTUATOR Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING ELECTRIC HYDRAULIC CABINET ACTUATOR Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING ELECTRIC HYDRAULIC CABINET ACTUATOR. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 94,
                'title' => 'TRAINING ELECTRIC MACHINERY: SELECTION, OPERATION, MAINTENANCE AND TROUBLESHOOTING',
                'slug' => 'training-electric-machinery-operation-maintenance',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Mesin Listrik & Troubleshooting',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING ELECTRIC MACHINERY: SELECTION, OPERATION, MAINTENANCE AND TROUBLESHOOTING berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING ELECTRIC MACHINERY: SELECTION, OPERATION, MAINTENANCE AND TROUBLESHOOTING dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING ELECTRIC MACHINERY: SELECTION, OPERATION, MAINTENANCE AND TROUBLESHOOTING Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING ELECTRIC MACHINERY: SELECTION, OPERATION, MAINTENANCE AND TROUBLESHOOTING Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING ELECTRIC MACHINERY: SELECTION, OPERATION, MAINTENANCE AND TROUBLESHOOTING. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 95,
                'title' => 'TRAINING ELECTRIC MEASUREMENT',
                'slug' => 'training-electric-measurement',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Pengukuran Parameter Kelistrikan',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING ELECTRIC MEASUREMENT berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING ELECTRIC MEASUREMENT dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING ELECTRIC MEASUREMENT Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING ELECTRIC MEASUREMENT Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING ELECTRIC MEASUREMENT. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 96,
                'title' => 'TRAINING ELECTRIC MOTOR: OPERATION, MAINTENANCE AND TROUBLESHOOTING',
                'slug' => 'training-electric-motor-operation-maintenance',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Motor Listrik Induksi & Perawatan',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING ELECTRIC MOTOR: OPERATION, MAINTENANCE AND TROUBLESHOOTING berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING ELECTRIC MOTOR: OPERATION, MAINTENANCE AND TROUBLESHOOTING dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING ELECTRIC MOTOR: OPERATION, MAINTENANCE AND TROUBLESHOOTING Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING ELECTRIC MOTOR: OPERATION, MAINTENANCE AND TROUBLESHOOTING Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING ELECTRIC MOTOR: OPERATION, MAINTENANCE AND TROUBLESHOOTING. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 97,
                'title' => 'TRAINING ELECTRIC TRANSIENT ANALYSIS',
                'slug' => 'training-electric-transient-analysis',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Analisis Transien Sistem Listrik',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING ELECTRIC TRANSIENT ANALYSIS berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING ELECTRIC TRANSIENT ANALYSIS dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING ELECTRIC TRANSIENT ANALYSIS Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING ELECTRIC TRANSIENT ANALYSIS Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING ELECTRIC TRANSIENT ANALYSIS. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 98,
                'title' => 'TRAINING ELECTRICAL GROUNDING AND SHIELDING ELECTRONIC SYSTEMS',
                'slug' => 'training-electrical-grounding-shielding',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Pentanahan & Perisai Elektronik',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING ELECTRICAL GROUNDING AND SHIELDING ELECTRONIC SYSTEMS berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING ELECTRICAL GROUNDING AND SHIELDING ELECTRONIC SYSTEMS dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING ELECTRICAL GROUNDING AND SHIELDING ELECTRONIC SYSTEMS Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING ELECTRICAL GROUNDING AND SHIELDING ELECTRONIC SYSTEMS Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING ELECTRICAL GROUNDING AND SHIELDING ELECTRONIC SYSTEMS. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 99,
                'title' => 'TRAINING ELECTRICAL CIRCUIT BREAKERS – MAINTENANCE',
                'slug' => 'training-electrical-circuit-breakers-maintenance',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Pemeliharaan Pemutus Tenaga (CB)',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING ELECTRICAL CIRCUIT BREAKERS – MAINTENANCE berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING ELECTRICAL CIRCUIT BREAKERS – MAINTENANCE dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING ELECTRICAL CIRCUIT BREAKERS – MAINTENANCE Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING ELECTRICAL CIRCUIT BREAKERS – MAINTENANCE Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING ELECTRICAL CIRCUIT BREAKERS – MAINTENANCE. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 100,
                'title' => 'TRAINING ELECTRICAL DISTRIBUTION SYSTEM PROTECTION',
                'slug' => 'training-electrical-distribution-system-protection',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Proteksi Jaringan Distribusi',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING ELECTRICAL DISTRIBUTION SYSTEM PROTECTION berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING ELECTRICAL DISTRIBUTION SYSTEM PROTECTION dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING ELECTRICAL DISTRIBUTION SYSTEM PROTECTION Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING ELECTRICAL DISTRIBUTION SYSTEM PROTECTION Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING ELECTRICAL DISTRIBUTION SYSTEM PROTECTION. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 101,
                'title' => 'TRAINING ELECTRICAL EQUIPMENT MAINTENANCE',
                'slug' => 'training-electrical-equipment-maintenance',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Perawatan Peralatan Kelistrikan',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING ELECTRICAL EQUIPMENT MAINTENANCE berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING ELECTRICAL EQUIPMENT MAINTENANCE dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING ELECTRICAL EQUIPMENT MAINTENANCE Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING ELECTRICAL EQUIPMENT MAINTENANCE Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING ELECTRICAL EQUIPMENT MAINTENANCE. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 102,
                'title' => 'TRAINING ELECTRICAL MAINTENANCE & INSPECTION',
                'slug' => 'training-electrical-maintenance-inspection',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Inspeksi & Uji Kelayakan Listrik',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING ELECTRICAL MAINTENANCE & INSPECTION berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING ELECTRICAL MAINTENANCE & INSPECTION dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING ELECTRICAL MAINTENANCE & INSPECTION Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING ELECTRICAL MAINTENANCE & INSPECTION Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING ELECTRICAL MAINTENANCE & INSPECTION. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 103,
                'title' => 'TRAINING ELECTRIC TRANSMISSION AND DISTRIBUTION',
                'slug' => 'training-electric-transmission-distribution',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Transmisi & Distribusi Tenaga',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING ELECTRIC TRANSMISSION AND DISTRIBUTION berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING ELECTRIC TRANSMISSION AND DISTRIBUTION dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING ELECTRIC TRANSMISSION AND DISTRIBUTION Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING ELECTRIC TRANSMISSION AND DISTRIBUTION Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING ELECTRIC TRANSMISSION AND DISTRIBUTION. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 104,
                'title' => 'TRAINING ELECTRONIC FILING & DOCUMENT MANAGEMENT SYSTEM',
                'slug' => 'training-electronic-filing-document-management',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Manajemen Data & Dokumen Energi',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING ELECTRONIC FILING & DOCUMENT MANAGEMENT SYSTEM berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING ELECTRONIC FILING & DOCUMENT MANAGEMENT SYSTEM dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING ELECTRONIC FILING & DOCUMENT MANAGEMENT SYSTEM Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING ELECTRONIC FILING & DOCUMENT MANAGEMENT SYSTEM Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING ELECTRONIC FILING & DOCUMENT MANAGEMENT SYSTEM. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 105,
                'title' => 'TRAINING ELECTRICAL GROUNDING',
                'slug' => 'training-electrical-grounding-system',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Desain Pentanahan Gardu Induk',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING ELECTRICAL GROUNDING berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING ELECTRICAL GROUNDING dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING ELECTRICAL GROUNDING Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING ELECTRICAL GROUNDING Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING ELECTRICAL GROUNDING. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 106,
                'title' => 'TRAINING ELECTRICAL POWER SYSTEM ANALYSIS',
                'slug' => 'training-electrical-power-system-analysis',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Analisis Aliran Daya & Hubung Singkat',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING ELECTRICAL POWER SYSTEM ANALYSIS berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING ELECTRICAL POWER SYSTEM ANALYSIS dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING ELECTRICAL POWER SYSTEM ANALYSIS Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING ELECTRICAL POWER SYSTEM ANALYSIS Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING ELECTRICAL POWER SYSTEM ANALYSIS. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 107,
                'title' => 'TRAINING ELECTRICAL TESTING AND COMMISSIONING OF ELECTRIC POWER SYSTEMS',
                'slug' => 'training-electrical-testing-commissioning',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Testing & Commissioning Sistem',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING ELECTRICAL TESTING AND COMMISSIONING OF ELECTRIC POWER SYSTEMS berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING ELECTRICAL TESTING AND COMMISSIONING OF ELECTRIC POWER SYSTEMS dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING ELECTRICAL TESTING AND COMMISSIONING OF ELECTRIC POWER SYSTEMS Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING ELECTRICAL TESTING AND COMMISSIONING OF ELECTRIC POWER SYSTEMS Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING ELECTRICAL TESTING AND COMMISSIONING OF ELECTRIC POWER SYSTEMS. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 108,
                'title' => 'TRAINING ELECTRONIC CONTROLLER',
                'slug' => 'training-electronic-controller',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Pengontrol Elektronik Daya',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING ELECTRONIC CONTROLLER berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING ELECTRONIC CONTROLLER dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING ELECTRONIC CONTROLLER Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING ELECTRONIC CONTROLLER Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING ELECTRONIC CONTROLLER. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 109,
                'title' => 'TRAINING WELL TEST DESIGN AND ANALYSIS',
                'slug' => 'training-well-test-design-analysis',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Desain & Evaluasi Uji Sumur',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING WELL TEST DESIGN AND ANALYSIS berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING WELL TEST DESIGN AND ANALYSIS dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING WELL TEST DESIGN AND ANALYSIS Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING WELL TEST DESIGN AND ANALYSIS Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING WELL TEST DESIGN AND ANALYSIS. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 110,
                'title' => 'TRAINING WELL LOG INTERPRETATION',
                'slug' => 'training-well-log-interpretation',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Interpretasi Log Geofisika',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING WELL LOG INTERPRETATION berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING WELL LOG INTERPRETATION dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING WELL LOG INTERPRETATION Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING WELL LOG INTERPRETATION Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING WELL LOG INTERPRETATION. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 111,
                'title' => 'TRAINING POWER TRANSFORMERS',
                'slug' => 'training-power-transformers',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Trafo Tenaga & Analisis Minyak Trafo',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING POWER TRANSFORMERS berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING POWER TRANSFORMERS dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING POWER TRANSFORMERS Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING POWER TRANSFORMERS Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING POWER TRANSFORMERS. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 112,
                'title' => 'TRAINING SUPERVISORY CONTROL AND DATA ACQUISITION (SCADA)',
                'slug' => 'training-scada-substation-automation',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Sistem SCADA & Otomasi Gardu',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING SUPERVISORY CONTROL AND DATA ACQUISITION (SCADA) berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING SUPERVISORY CONTROL AND DATA ACQUISITION (SCADA) dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING SUPERVISORY CONTROL AND DATA ACQUISITION (SCADA) Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING SUPERVISORY CONTROL AND DATA ACQUISITION (SCADA) Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING SUPERVISORY CONTROL AND DATA ACQUISITION (SCADA). Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 113,
                'title' => 'TRAINING SUBSTATION MAINTENANCE',
                'slug' => 'training-substation-maintenance',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Pemeliharaan Gardu Induk Tegangan Tinggi',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING SUBSTATION MAINTENANCE berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING SUBSTATION MAINTENANCE dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING SUBSTATION MAINTENANCE Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING SUBSTATION MAINTENANCE Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING SUBSTATION MAINTENANCE. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 114,
                'title' => 'TRAINING VARIABLE SPEED DRIVES (VSD)',
                'slug' => 'training-variable-speed-drives-vsd',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Inverter & Variable Speed Drives',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING VARIABLE SPEED DRIVES (VSD) berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING VARIABLE SPEED DRIVES (VSD) dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING VARIABLE SPEED DRIVES (VSD) Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING VARIABLE SPEED DRIVES (VSD) Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING VARIABLE SPEED DRIVES (VSD). Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 115,
                'title' => 'TRAINING VIBRATION ANALYSIS AND PREDICTIVE MAINTENANCE',
                'slug' => 'training-vibration-analysis-predictive-maintenance',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Analisis Getaran & Predictive Maintenance',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING VIBRATION ANALYSIS AND PREDICTIVE MAINTENANCE berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING VIBRATION ANALYSIS AND PREDICTIVE MAINTENANCE dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING VIBRATION ANALYSIS AND PREDICTIVE MAINTENANCE Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING VIBRATION ANALYSIS AND PREDICTIVE MAINTENANCE Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING VIBRATION ANALYSIS AND PREDICTIVE MAINTENANCE. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 116,
                'title' => 'TRAINING STEAM TURBINES FUNDAMENTAL AND OPERATION',
                'slug' => 'training-steam-turbines-fundamental-operation',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Operasi & Efisiensi Turbin Uap',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING STEAM TURBINES FUNDAMENTAL AND OPERATION berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING STEAM TURBINES FUNDAMENTAL AND OPERATION dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING STEAM TURBINES FUNDAMENTAL AND OPERATION Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING STEAM TURBINES FUNDAMENTAL AND OPERATION Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING STEAM TURBINES FUNDAMENTAL AND OPERATION. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 117,
                'title' => 'TRAINING TARGETING EFFICIENCY ENERGY',
                'slug' => 'training-targeting-efficiency-energy',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Audit & Efisiensi Energi ISO 50001',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING TARGETING EFFICIENCY ENERGY berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING TARGETING EFFICIENCY ENERGY dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING TARGETING EFFICIENCY ENERGY Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING TARGETING EFFICIENCY ENERGY Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING TARGETING EFFICIENCY ENERGY. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 118,
                'title' => 'TRAINING UNINTERRUPTIBLE POWER SUPPLY (UPS) SYSTEMS ELECTRICAL',
                'slug' => 'training-ups-systems-electrical',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Sistem Daya Cadangan UPS Industri',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING UNINTERRUPTIBLE POWER SUPPLY (UPS) SYSTEMS ELECTRICAL berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING UNINTERRUPTIBLE POWER SUPPLY (UPS) SYSTEMS ELECTRICAL dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING UNINTERRUPTIBLE POWER SUPPLY (UPS) SYSTEMS ELECTRICAL Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING UNINTERRUPTIBLE POWER SUPPLY (UPS) SYSTEMS ELECTRICAL Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING UNINTERRUPTIBLE POWER SUPPLY (UPS) SYSTEMS ELECTRICAL. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 119,
                'title' => 'TRAINING HIGH VOLTAGE EQUIPMENT AND MAINTENANCE',
                'slug' => 'training-high-voltage-equipment-maintenance',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Peralatan Listrik Tegangan Tinggi',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING HIGH VOLTAGE EQUIPMENT AND MAINTENANCE berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING HIGH VOLTAGE EQUIPMENT AND MAINTENANCE dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING HIGH VOLTAGE EQUIPMENT AND MAINTENANCE Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING HIGH VOLTAGE EQUIPMENT AND MAINTENANCE Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING HIGH VOLTAGE EQUIPMENT AND MAINTENANCE. Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
            [
                'id' => 120,
                'title' => 'TRAINING AUTOMATIC VOLTAGE REGULATOR (AVR)',
                'slug' => 'training-automatic-voltage-regulator-avr',
                'level_code' => 'Energy Specialist',
                'level_name' => 'Regulator Tegangan Otomatis Genset',
                'badge' => 'Sertifikasi Kompetensi',
                'duration' => '3 Hari (Teori Komprehensif, Praktik Simulasi & Uji Sertifikasi)',
                'method' => 'Tatap Muka Kelas Offline, Hands-On Laboratorium & Workshop Lapangan',
                'certification' => 'Sertifikat Kompetensi Bidang Energi & Kelistrikan Berstandar Industri',
                'price_note' => 'Termasuk Modul Pelatihan, Safety Kit, Praktik Alat Uji & Sertifikat',
                'icon' => 'bi-lightning-charge-fill',
                'short_description' => 'Program pelatihan teknis intensif TRAINING AUTOMATIC VOLTAGE REGULATOR (AVR) berstandar regulasi keselamatan, kepatuhan teknis, efisiensi operasional, dan keandalan sistem industri modern.',
                'overview' => 'Program TRAINING AUTOMATIC VOLTAGE REGULATOR (AVR) dirancang secara mendalam untuk para engineer, teknisi senior, dan supervisor operasional fasilitas energi, kelistrikan, migas, petrokimia, dan manufaktur berat. Pelatihan ini memadukan kaidah rekayasa termodinamika, integrasi kendali modern, mitigasi kegagalan dini (early failure detection), dan penerapan standar keselamatan global guna mendongkrak efisiensi daya serta keandalan aset strategis industri.',
                'target_audience' => 'Electrical Engineer, Power Plant Operator, Maintenance Specialist, Instrument Technician, Utility Supervisor, HSE Officer, dan Plant Manager',
                'curriculum' => [
                    'Modul 1: Landasan Regulasi Keselamatan, Standar Kepatuhan Operasional & Filosofi Sistem Industri',
                    'Modul 2: Karakteristik Komponen Utama, Prinsip Kerja Dinamik & Diagram Alir Sistem Terpadu',
                    'Modul 3: Metodologi Pengujian Presisi, Kalibrasi Instrumentasi & Pengukuran Parameter Lapangan',
                    'Modul 4: Mitigasi Bahaya, Analisis Risiko Kegagalan Operasional (FMEA/HAZOP) & Tindakan Korektif',
                    'Modul 5: Prosedur Pengoperasian Normal, Batas Toleransi Beban, dan Protokol Darurat Operasional',
                    'Modul 6: Pemeliharaan Preventif Terencana, Manajemen Suku Cadang & Manajemen Umur Pakai Aset',
                    'Modul 7: Praktik Lapangan Hands-On: Simulasi Pengoperasian, Deteksi Gangguan & Analisis Kasus Nyata',
                    'Modul 8: Evaluasi Komprehensif: Ujian Teori Standar Kompetensi & Asesmen Praktikum Akhir'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik / D3 / S1 Teknik (Mesin, Elektro, Fisika, Kimia, Industri) atau praktisi bidang energi',
                    'Fotokopi Ijazah terakhir dan Kartu Tanda Penduduk (KTP) yang masih berlaku',
                    'Surat keterangan sehat jasmani dari dokter / klinik layanan kesehatan',
                    'Pas foto formal berwarna ukuran 3x4 (3 lembar) berlatar belakang merah'
                ],
                'facilities' => [
                    'Sertifikat Resmi Pelatihan & Kompetensi TRAINING AUTOMATIC VOLTAGE REGULATOR (AVR) Berstandar Industri',
                    'Buku Modul Teknis Pelatihan, Formulir Log Book Pemeliharaan & Safety Pocket Guide',
                    'Praktik Hands-On dengan Unit Simulator, Instrumen Ukur Terkalibrasi & Perangkat Uji',
                    'Perlengkapan Safety Kit Peserta: Rompi K3, Kacamata Pelindung & Helm Kerja Proyek',
                    'Konsumsi Lengkap (Coffee Break Pagi-Sore & Makan Siang Prasmanan) Selama Sesi Tatap Muka'
                ],
                'meta_title' => 'TRAINING AUTOMATIC VOLTAGE REGULATOR (AVR) Bersertifikat Resmi Industri',
                'meta_description' => 'Pelatihan komprehensif TRAINING AUTOMATIC VOLTAGE REGULATOR (AVR). Kurikulum lengkap, praktikum instrumentasi, standar efisiensi energi, dan sertifikasi profesi di Indonesia.'
            ],
        ];
    }

    /**
     * 200 Judul Artikel Training Energy
     * SETIAP JUDUL MENGANDUNG KATA 'Training'
     * TANPA SEBUTAN PEMERINTAHAN MAUPUN INFORMASI ANGKA ARTIKEL/KATA
     */
    public static function get200ArticleTitles(): array
    {
        return [
            "Training Efisiensi Energi dan Audit Konsumsi Daya Industri di {region}",
            "Training Power Quality dan Analisis Harmonisa Jaringan Listrik di {region}",
            "Training K3 Listrik dan Keselamatan Sistem Tegangan Tinggi di {region}",
            "Training Instrumentation and Calibration Alat Ukur Industri di {region}",
            "Training SCADA dan Otomasi Gardu Induk Tenaga Listrik di {region}",
            "Training Programmable Logic Controller PLC untuk Sistem Daya di {region}",
            "Training Operasi dan Pemeliharaan Turbin Gas Pembangkit Listrik di {region}",
            "Training Turbin Uap dan Sistem Boiler Pembangkitan Energi di {region}",
            "Training Variable Speed Drives VSD Penghematan Energi Motor di {region}",
            "Training Pemeliharaan Transformator Tenaga dan Pengujian DGA di {region}",
            "Training Analisis Getaran Mesin Rotating Equipment di {region}",
            "Training Predictive Maintenance dan Rekayasa Keandalan Fasilitas di {region}",
            "Training Proteksi Sistem Tenaga Listrik dan Koordinasi Relay di {region}",
            "Training Circuit Breaker Tegangan Menengah dan Pemutus Arus di {region}",
            "Training Desain Sistem Pentanahan Grounding Gardu Listrik di {region}",
            "Training Proteksi Petir dan Sistem Surge Arrester Industri di {region}",
            "Training Sistem Daya Cadangan UPS dan Baterai Industri di {region}",
            "Training Genset Diesel Operasi Pemeliharaan dan Troubleshooting di {region}",
            "Training Manajemen Pemeliharaan dan Total Productive Maintenance di {region}",
            "Training Heat Exchanger dan Optimalisasi Penukar Panas di {region}",
            "Training Pemeliharaan Kompresor Sentrifugal dan Gas Anti-Surge di {region}",
            "Training Pompa Sentrifugal Industri Efisiensi dan Perawatan di {region}",
            "Training Sistem Hidrolik dan Pneumatik Tenaga Mesin Berat di {region}",
            "Training Katup Kendali Control Valve dan Aktuator Presisi di {region}",
            "Training Sistem Transmisi Tenaga Listrik dan Distribusi Daya di {region}",
            "Training Manajemen Energi Berbasis Standar ISO 50001 di {region}",
            "Training Kualitas Daya Perbaikan Faktor Daya Power Factor di {region}",
            "Training Deteksi Kerusakan Kabel Listrik Bawah Tanah di {region}",
            "Training Pengujian dan Commissioning Peralatan Gardu Induk di {region}",
            "Training Monitoring Suhu Termografi Inframerah Panel Listrik di {region}",
            "Training Keselamatan Arc Flash dan Mitigasi Percikan Busur Api di {region}",
            "Training Mitigasi Korosi Pipa Penyalur Fasilitas Energi di {region}",
            "Training Pipeline Integrity Management Jalur Pipa Gas di {region}",
            "Training Teknologi LNG dan Sistem Keselamatan Gas Alam di {region}",
            "Training Pengolahan Gas Bumi H2S dan CO2 Removal di {region}",
            "Training Pengeboran dan Pengendalian Tekanan Sumur Migas di {region}",
            "Training Casing dan Penyemenan Cementing Sumur Energi di {region}",
            "Training Desain dan Evaluasi Uji Sumur Well Testing di {region}",
            "Training Interpretasi Well Logging Geofisika Lapangan di {region}",
            "Training Manajemen Reservoir Terintegrasi Sektor Migas di {region}",
            "Training Pemeliharaan Gearbox Industri dan Poros Penggerak di {region}",
            "Training Balancing Dinamis dan Alignment Poros Mesin Putar di {region}",
            "Training Analisis Pelumas Mesin Uji Tribologi dan Oli Trafo di {region}",
            "Training Pemeliharaan Motor Listrik Induksi Tiga Fasa di {region}",
            "Training Sistem Pembakaran Boiler dan Efisiensi Bahan Bakar di {region}",
            "Training Water Treatment Boiler dan Pengendalian Kerak Korosi di {region}",
            "Training Desain Bejana Tekan dan Tangki Timbun Industri di {region}",
            "Training Otomasi DCS Distributed Control System Pabrik di {region}",
            "Training Jaringan Komunikasi Modbus Profibus dan Industrial IoT di {region}",
            "Training Kalibrasi Transmitter Suhu Tekanan dan Level Aliran di {region}",
            "Training Metrologi Industri Pengukuran Caliper dan Mikrometer di {region}",
            "Training Kalibrasi Timbangan dan Sensor Load Cell Akurat di {region}",
            "Training Audit Kebocoran Udara Kompresor dan Efisiensi Tekanan di {region}",
            "Training Integrasi Energi Terbarukan Pembangkit Surya PV di {region}",
            "Training Pembangkit Listrik Tenaga Mikrohidro dan Turbin Air di {region}",
            "Training Pembangkit Listrik Tenaga Biomassa dan Gasifikasi di {region}",
            "Training Sistem Pendingin Industri Chiller dan Cooling Tower di {region}",
            "Training Pemantauan Emisi Gas Buang Continuous Emission CEMS di {region}",
            "Training Pengendalian Bahaya Bahan Kimia Hazardous Material di {region}",
            "Training Tanggap Darurat Kebakaran Fasilitas Pabrik Energi di {region}",
            "Training Switchgear Tegangan Rendah dan Panel Distribusi di {region}",
            "Training Pemantauan Kondisi Mesin Vibration Diagnosis di {region}",
            "Training Manajemen Turnaround Pabrik dan Overhaul Terjadwal di {region}",
            "Training Manajemen Suku Cadang Mesin Industri Spare Part di {region}",
            "Training Analisis Keandalan RCM Reliability Centered Maintenance di {region}",
            "Training Akustik dan Pengendalian Kebisingan Mesin Industri di {region}",
            "Training Rekayasa Kriogenik dan Tangki Penyimpanan Suhu Rendah di {region}",
            "Training Transmisi Serat Optik Jaringan Komunikasi Daya di {region}",
            "Training Regulasi Tegangan Otomatis AVR Sistem Pembangkit di {region}",
            "Training Pengujian Beban Load Bank Testing Generator Daya di {region}",
            "Training Sistem Pemutus Arus Udara Air Circuit Breaker ACB di {region}",
            "Training Pemutus Arus Vakum Vacuum Circuit Breaker VCB di {region}",
            "Training Pemutus Gas SF6 Gas Insulated Switchgear GIS di {region}",
            "Training Pengukuran Tegangan Sentuh dan Langkah Gardu Induk di {region}",
            "Training Analisis Transient Respon Hubung Singkat Listrik di {region}",
            "Training Keselamatan Bekerja Dekat Instalasi Listrik Bertegangan di {region}",
            "Training Penguncian dan Pelabelan Energi Lockout Tagout LOTO di {region}",
            "Training Sistem Ventilasi dan Pengendalian Debu Dust Collector di {region}",
            "Training Pengoperasian Kompresor Torak Reciprocating Compressor di {region}",
            "Training Perawatan Pompa Submersible Sumur Dalam di {region}",
            "Training Rekondisi Mekanikal Seal Pompa Industri Sentrifugal di {region}",
            "Training Pipa Uap Steam Piping Desain dan Insulasi Termal di {region}",
            "Training Steam Trap Audit dan Pencegahan Water Hammer Uap di {region}",
            "Training Analisis Pembakaran Gas Buang Boiler Flue Gas di {region}",
            "Training Regenerasi Katalis dan Pemurnian Minyak Bumi di {region}",
            "Training Distilasi Vakum dan Pengolahan Fraksi Berat di {region}",
            "Training Manajemen Mutu Laboratorium Pengujian Bahan Bakar di {region}",
            "Training Uji Flash Point Viskositas dan Berat Jenis BBM di {region}",
            "Training Keandalan Sistem Kelistrikan Fasilitas Lepas Pantai di {region}",
            "Training Pemasangan Kabel Daya Bawah Laut Subsea Cable di {region}",
            "Training Pengoperasian Separator Migas Tiga Fasa di {region}",
            "Training Manajemen Pasokan Rantai Suplai Material Energi di {region}",
            "Training Logistik Pengangkutan Bahan Bakar Cair dan Gas di {region}",
            "Training Manajemen Pergudangan Suku Cadang Pembangkit Listrik di {region}",
            "Training Perencanaan Anggaran Biaya Life Cycle Costing di {region}",
            "Training Analisis Kelayakan Proyek Investasi Efisiensi Energi di {region}",
            "Training Manajemen Kontrak dan Pengadaan Fasilitas Rekayasa di {region}",
            "Training Evaluasi Vendor Rekayasa Pembangkit Listrik di {region}",
            "Training Sertifikasi Operator Boiler Kelas 1 dan Kelas 2 di {region}",
            "Training Teknisi K3 Listrik Pemeriksaan dan Pengujian di {region}",
            "Training Ahli K3 Pesawat Tenaga dan Produksi Mesin di {region}",
            "Training Pengawas Operasional Fasilitas Pembangkit Listrik di {region}",
            "Training Operator Gardu Induk Distribusi Daya Listrik di {region}",
            "Training Teknisi Instrumen Otomasi Industri Manufaktur di {region}",
            "Training Petugas Kalibrasi Alat Ukur Tekanan dan Listrik di {region}",
            "Training Operator Pembangkit Listrik Siklus Gabungan PLTGU di {region}",
            "Training Pengoperasian Boiler Pipa Air Water Tube Boiler di {region}",
            "Training Operasi Boiler Pipa Api Fire Tube Boiler di {region}",
            "Training Pemeliharaan Deaerator dan Pompa Air Pengisi Boiler di {region}",
            "Training Perawatan Kondensor dan Ejektor Uap Pembangkit di {region}",
            "Training Sistem Pelumasan Sirkulasi Sentral Mesin Daya di {region}",
            "Training Pengujian Dielektrik Minyak Isolasi Transformator di {region}",
            "Training Pengujian Rasio Lilitan TTR dan Tahanan Isolasi Megger di {region}",
            "Training Pengujian Tahanan Kontak Kontak Pemutus Daya di {region}",
            "Training Karakteristik Rele Diferensial Proteksi Transformator di {region}",
            "Training Rele Jarak Distance Relay Saluran Transmisi di {region}",
            "Training Rele Arus Lebih Overcurrent dan Gangguan Tanah di {region}",
            "Training Skema Pelepasan Beban Otomatis Under Frequency UFLS di {region}",
            "Training Integrasi Sistem Pembangkit ke Jaringan Transmisi Grid di {region}",
            "Training Penanganan Blackout dan Prosedur Black Start Pembangkit di {region}",
            "Training Sinkronisasi Generator ke Jaringan Listrik Paralel di {region}",
            "Training Manajemen Bahan Bakar Batubara Coal Handling System di {region}",
            "Training Pulverizer dan Pembakaran Batubara Halus di {region}",
            "Training Sistem Pembuangan Abu Bottom Ash dan Fly Ash di {region}",
            "Training Pengendalian Emisi SOx Desulfurisasi Gas Buang FGD di {region}",
            "Training Pengendalian Emisi NOx Selective Catalytic Reduction di {region}",
            "Training Elektrostatik Presipitator ESP Penjerap Debu di {region}",
            "Training Pembangkit Listrik Tenaga Panas Bumi Geotermal di {region}",
            "Training Sistem Pemisahan Uap Geotermal Steam Separator di {region}",
            "Training Mitigasi Scaling Silika Pipa Air Panas Bumi di {region}",
            "Training Turbin Gas Industri Aeroderivatif dan Heavy Duty di {region}",
            "Training Sistem Injeksi Bahan Bakar dan Pembakar Turbin Gas di {region}",
            "Training Sistem Pendingin Sudu Turbin Gas Blade Cooling di {region}",
            "Training Inspeksi Boroskop Turbin Gas dan Analisis Korosi di {region}",
            "Training Manajemen Siklus Panas HRSG Heat Recovery Steam di {region}",
            "Training Pipa Distribusi Gas Bertekanan City Gas Network di {region}",
            "Training Metering System Gas Berstandar Custody Transfer di {region}",
            "Training Pengoperasian Orifice Meter dan Flow Komputer Gas di {region}",
            "Training Kalibrasi Gas Chromatograph Online Komposisi Gas di {region}",
            "Training Deteksi Kebocoran Gas Metana Menggunakan Laser Optik di {region}",
            "Training Sistem Proteksi Katodik Impressed Current Jalur Pipa di {region}",
            "Training Uji Potensial Pipa P/S Survey Close Interval di {region}",
            "Training Pengecatan Pelindung Pipa Tahan Panas dan Korosi CUI di {region}",
            "Training Sistem Pemompaan Minyak Mentah Export Crude Oil Pump di {region}",
            "Training Pengolahan Air Buangan Terproduksi Fasilitas Migas di {region}",
            "Training Pemeliharaan Menara Distilasi Tray dan Packing di {region}",
            "Training Pemasangan dan Uji Flange Joint Management Pipa di {region}",
            "Training Pengujian Tidak Merusak NDT Ultrasonic Testing Las di {region}",
            "Training NDT Magnetic Particle dan Dye Penetrant Pipa Mesin di {region}",
            "Training Radiografi Industri dan Interpretasi Film Lasan di {region}",
            "Training Desain dan Perhitungan Tegangan Pipa Piping Stress di {region}",
            "Training Pemilihan Material Pipa Baja Karbon dan Stainless di {region}",
            "Training Metalurgi Pengelasan Fasilitas Tekanan Tinggi di {region}",
            "Training Prosedur Kualifikasi Juru Las WPS dan PQR Pabrik di {region}",
            "Training Pengendalian Distorsi Pengelasan Struktur Bejana Tekan di {region}",
            "Training Uji Hidrostatis dan Pneumatik Bejana Tekan Baru di {region}",
            "Training Pemantauan Getaran Pompa Slurry Pertambangan Batubara di {region}",
            "Training Rekayasa Pasokan Daya Fasilitas Smelter Nikel di {region}",
            "Training Sistem Kelistrikan Tungku Busur Listrik Smelter di {region}",
            "Training Kompensasi Daya Reaktif Menggunakan Bank Kapasitor di {region}",
            "Training Filter Harmonisa Aktif Active Harmonic Filter AHF di {region}",
            "Training Penghematan Energi Sistem Pencahayaan Industri LED di {region}",
            "Training Audit Konsumsi Energi Motor dan Pompa Air Industri di {region}",
            "Training Penyusunan Indikator Kinerja Energi EnPI Pabrik di {region}",
            "Training Pengukuran Baseline Energi dan Verifikasi Penghematan di {region}",
            "Training Studi Kelayakan Penggantian Motor Efisiensi Tinggi IE3 di {region}",
            "Training Analisis Kerugian Daya Saluran Distribusi Losses di {region}",
            "Training Proteksi Transformator Terhadap Sambaran Petir Surja di {region}",
            "Training Desain Ruang Switchgear dan Sistem Ventilasi Bebas Debu di {region}",
            "Training Pemeliharaan Jalur Kabel Tray dan Busduct Industri di {region}",
            "Training Sistem Pendeteksi Hubungan Singkat Busbar Protection di {region}",
            "Training Analisis Kejadian Gangguan Fault Recording DFR di {region}",
            "Training Rekayasa Proteksi Motor Listrik Besar Overload Rele di {region}",
            "Training Pemeliharaan Eksitasi Generator Brushless Exciter di {region}",
            "Training Pengujian Hipot Tegangan Tinggi Kabel Tenaga di {region}",
            "Training Pengujian Titik Tan Delta Isolasi Listrik Trafo di {region}",
            "Training Analisis Respon Frekuensi Sapuan FRA Inti Trafo di {region}",
            "Training Pemurnian Purifikasi dan Rekondisi Minyak Isolasi di {region}",
            "Training Pemeliharaan On-Load Tap Changer OLTC Trafo Daya di {region}",
            "Training Penggantian Bushing Tegangan Tinggi Trafo Gardu di {region}",
            "Training Deteksi Peluahan Sebagian Partial Discharge PD Listrik di {region}",
            "Training Pengujian Emisi Akustik Deteksi Keretakan Bejana di {region}",
            "Training Analisis Resiko Ledakan Debu Dust Explosion Pabrik di {region}",
            "Training Desain Sistem Proteksi Area Berbahaya Ex-Proof di {region}",
            "Training Pemilihan Peralatan Listrik Standar ATEX dan IECEx di {region}",
            "Training Pemeliharaan Komponen Elektrik Area Berbahaya Migas di {region}",
            "Training Sistem Pemadaman Otomatis Deluge dan Foam Fasilitas di {region}",
            "Training Pemeliharaan Pompa Pemadam Kebakaran Fire Water Pump di {region}",
            "Training Uji Kinerja Jaringan Hydrant dan Tekanan Air Pemadam di {region}",
            "Training Investigasi Insiden Kegagalan Mesin Pembangkit RCA di {region}",
            "Training Penyusunan Standar Operasional Prosedur SOP Fasilitas di {region}",
            "Training Simulasi Tanggap Darurat Kegagalan Sistem Listrik di {region}",
            "Training Budaya Kepatuhan Keselamatan Kerja Zero Accident di {region}",
            "Training Sertifikasi Kompetensi Manajer Energi Industri di {region}",
            "Training Sertifikasi Auditor Energi Bangunan dan Industri di {region}",
            "Training Konsultan Perencanaan Efisiensi dan Dekarbonisasi di {region}",
            "Training Transisi Energi Hijau dan Pembangkit Rendah Emisi di {region}",
            "Training Penyimpanan Energi Sistem Baterai BESS Skala Grid di {region}",
            "Training Ekosistem Hidrogen Hijau Green Hydrogen Masa Depan di {region}",
            "Training Tangkap dan Simpan Karbon Carbon Capture CCS CCUS di {region}",
            "Training Pasar Karbon Nilai Ekonomi Karbon Sektor Industri di {region}",
            "Training Kepatuhan ESG Environmental Social Governance Energi di {region}",
            "Training Pelaporan Emisi GRK Gas Rumah Kaca Fasilitas Pabrik di {region}",
            "Training Master Komprehensif Rekayasa Energi Terpadu Nasional di {region}"
        ];
    }

    /**
     * Sintesis Konten Artikel Teknis Training Energy Mendalam (6.000 - 9.000 kata)
     * TERSTRUKTUR 10 BAB TEKNIS DETAIL, SILABUS LENGKAP & KASUS NYATA
     * TIDAK MENYEBUT PEMERINTAHAN MAUPUN INFORMASI JUMLAH KATA
     */
    public static function synthesizeArticleContent(string $title, string $region = 'Indonesia'): array
    {
        $chapters = [
            [
                'title' => "Urgensi Kompetensi {$title} dalam Lanskap Ketahanan Operasional",
                'content' => "Dalam dinamika sektor industri modern yang terus berkembang pesat di {$region}, pengelolaan dan keandalan sistem energi, kelistrikan, instrumentasi, dan pemeliharaan mesin pabrik memegang peranan krusial yang menentukan profitabilitas, keselamatan manusia, dan kelangsungan operasional fasilitas produksi. Kegiatan industri berat, pembangkit listrik, pabrik kimia, fasilitas migas, hingga utilitas komersial berskala besar menghadapi tantangan kompleks: fluktuasi pasokan daya, degradasi aset mesin berputar, risiko lonjakan tegangan, serta tuntutan efisiensi konsumsi energi yang semakin ketat guna mencapai target biaya operasional yang kompetitif.

Penerapan program {$title} hadir sebagai pilar fundamental yang membina sumber daya manusia profesional dan teknisi lapangan agar memiliki pemahaman berbasis sains rekayasa (engineering principles) yang kokoh. Tanpa kompetensi teknis yang memadai, deviasi kecil pada parameter operasional—seperti distorsi harmonisa kelistrikan, ketidakseimbangan beban motor, ketidakakuratan kalibrasi sensor, atau vibrasi mikro pada bantalan turbin—dapat memicu efek domino yang berujung pada trip darurat (unplanned shutdown), ledakan trafo, kebakaran panel hubung, hingga kerusakan mekanikal fatal yang memerlukan biaya pemulihan miliaran rupiah.

Oleh karena itu, pelatihan ini di {$region} dirancang khusus tidak sekadar menyajikan teori normatif di dalam kelas, melainkan membedah tuntas aspek dinamika operasional nyata, mitigasi kegagalan sejak fase inisiasi (early failure prevention), serta kepatuhan pada standar konsensus rekayasa internasional. Peserta dibekali metodologi pemecahan masalah (root cause troubleshooting) yang sistematis untuk memastikan setiap sistem yang dioperasikan bekerja pada efisiensi puncak (optimal operating envelope) dan memenuhi standar keselamatan kerja tertinggi."
            ],
            [
                'title' => "Standar Rekayasa Global dan Kepatuhan Teknis Industri",
                'content' => "Setiap modul dan materi pembelajaran dalam {$title} di {$region} dirancang mengacu pada standar rekayasa internasional yang diakui secara global. Kepatuhan terhadap standar ini menjadi jaminan bahwa lulusan dan personel teknis memiliki kualifikasi yang sejajar dengan standar kompetensi fasilitas industri bertaraf internasional.

Rujukan standar utama yang diintegrasikan dalam pelatihan mencakup:
1. Standar Manajemen Energi dan Kualitas Daya: Mengacu pada ISO 50001 (Energy Management Systems) yang mengatur kerangka kerja penetapan baseline energi dan indikator kinerja EnPI; IEEE 519 (Recommended Practice and Requirements for Harmonic Control in Electric Power Systems) untuk batas ambang distorsi tegangan dan arus harmonisa; serta IEC 61000 series mengenai kompatibilitas elektromagnetik (EMC).
2. Standar Proteksi dan Kelistrikan Industri: Mengacu pada IEEE Std 242 (Buff Book) untuk koordinasi proteksi perangkat; IEEE Std 142 (Green Book) untuk desain pentanahan sistem tenaga industri; IEC 60947 untuk switchgear dan controlgear tegangan rendah; IEC 62271 untuk switchgear tegangan menengah dan tinggi; serta NFPA 70E (Standard for Electrical Safety in the Workplace) untuk proteksi keselamatan terhadap bahaya busur api (arc flash) dan sengatan listrik.
3. Standar Mesin Berputar dan Bejana Bertekanan: Mengadopsi ISO 10816 / ISO 20816 untuk evaluasi getaran mekanikal mesin berputar; API 617 / API 618 untuk kompresor sentrifugal dan torak; API 610 untuk pompa sentrifugal industri migas; ASME Boiler and Pressure Vessel Code (BPVC) Bagian I dan Bagian VIII untuk keselamatan bejana tekan dan ketel uap; serta API 570 dan API 579 (Fitness-For-Service) untuk integritas perpipaan.
4. Standar Instrumentasi, Kalibrasi dan Otomasi: Mengacu pada ISO/IEC 17025 untuk kompetensi teknis laboratorium kalibrasi dan pengujian; IEC 61131-3 untuk standar bahasa pemrograman Programmable Logic Controller (PLC); ISA-5.1 untuk simbol dan identifikasi instrumentasi P&ID; serta ISA/IEC 62443 untuk keamanan siber pada sistem kendali industri (Industrial Automation and Control Systems Security).

Peserta di {$region} dilatih membaca, menginterpretasikan, dan menerapkan lembar data teknis serta regulasi konsensus tersebut langsung ke dalam dokumen instruksi kerja (Standard Operating Procedures - SOP) dan formulir pengujian berkala di lapangan."
            ],
            [
                'title' => "Prinsip Mekanika, Termodinamika dan Dinamika Aliran Energi",
                'content' => "Fondasi utama dari penguasaan materi dalam {$title} di {$region} adalah pemahaman mendalam mengenai hukum-hukum termodinamika, elektromagnetika, dan mekanika fluida yang mengatur transfer energi di dalam peralatan industri. Pemahaman prinsip dasar ini memungkinkan teknisi mengidentifikasi inefisiensi laten yang sering terabaikan pada pemantauan visual biasa.

Dalam aspek termodinamika sistem uap dan fluida, peserta mendalami siklus Rankine dan siklus Brayton yang menjadi tulang punggung pembangkit tenaga dan penggerak turbin. Analisis neraca massa dan energi (mass and energy balance) dipelajari untuk menghitung laju perpindahan panas pada penukar kalor (heat exchanger), mendeteksi laju pembentukan kerak (fouling resistance), serta mengukur penurunan efisiensi isentropik pada kompresor gas dan pompa sentrifugal. Peserta mempelajari bagaimana fenomena kavitasi pada impeller pompa terjadi ketika tekanan statis fluida turun di bawah tekanan uap jenuhnya, menciptakan gelembung-gelembung mikro uap yang runtuh secara dahsyat dan mengikis permukaan logam hingga berlubang.

Pada dimensi kelistrikan daya, peserta mempelajari interaksi antara daya aktif (kW), daya reaktif (kVAR), dan daya semu (kVA) yang dirangkum dalam segitiga daya. Beban induktif non-linier seperti motor induksi, transformator magnetik, inverter frekuensi variabel (VFD), dan tungku induksi menyebabkan penurunan faktor daya (cos phi) dan menghasilkan arus harmonisa kelipatan ganjil (orde ke-3, ke-5, ke-7, dan seterusnya). Kondisi ini menyebabkan pemanasan berlebih pada kabel netral, saturasi inti besi transformator, serta potensi resonansi paralel yang merusak bank kapasitor. Peserta di {$region} dilatih melakukan kalkulasi kompensasi daya reaktif dan mendesain filter harmonisa aktif maupun pasif untuk mengembalikan gelombang sinusoidal murni jaringan."
            ],
            [
                'title' => "Arsitektur Sistem Kendali, Otomasi SCADA, PLC dan Kalibrasi Presisi",
                'content' => "Keberhasilan operasional fasilitas energi di {$region} sangat bergantung pada keandalan loop instrumentasi kendali otomatis yang menghubungkan elemen pengindera lapangan (field sensors), pengendali cerdas (controllers), dan elemen kendali akhir (final control elements seperti control valves dan variable speed drives). Modul ini mengupas secara komprehensif arsitektur otomatisasi dari tingkat bawah (level 0 field) hingga tingkat pengawasan terpusat (level 2 SCADA).

Peserta dilatih memahami rangkaian loop arus standar 4-20 mA dengan protokol komunikasi digital HART (Highway Addressable Remote Transducer), sinyal digital Foundation Fieldbus, serta protokol komunikasi industri Modbus TCP/IP dan IEC 61850 untuk otomatisasi gardu induk. Pada unit kendali PLC dan Distributed Control System (DCS), peserta mempelajari konfigurasi logika kendali berbasis ladder diagram, function block diagram, dan structured text untuk mengimplementasikan algoritma Proportional-Integral-Derivative (PID). Peserta mempraktikkan metode penalaan PID (PID loop tuning) menggunakan metode Ziegler-Nichols dan Cohen-Coon untuk menghasilkan respon sistem yang cepat (fast settling time), overshoot minimal, dan bebas osilasi berulang pada pengendalian laju aliran fluida, tekanan uap, dan temperatur reaktor.

Pada sisi instrumen pengukur, peserta mempraktikkan prosedur kalibrasi presisi sesuai kaidah ketertelusuran metrologi ke standar nasional/internasional. Kalibrasi instrumen tekanan (pressure transmitter) menggunakan deadweight tester atau calibrator digital presisi tinggi; kalibrasi sensor temperatur RTD Pt100 dan termokopel tipe K menggunakan dry-block temperature bath; serta verifikasi laju aliran menggunakan magnetic flowmeter dan differential pressure orifice plate. Setiap peserta di {$region} diwajibkan mampu menghitung nilai ketidakpastian pengukuran (measurement uncertainty) dan menyatakan status kelayakan instrumen berdasarkan toleransi Maximum Permissible Error (MPE)."
            ],
            [
                'title' => "Teknik Pemeliharaan Terencana, Inspeksi NDT dan Diagnostik Getaran",
                'content' => "Paradigma pemeliharaan modern telah bergeser dari pendekatan reaktif (run-to-failure) menuju pemeliharaan prediktif berbasis kondisi (Condition-Based Predictive Maintenance - PdM). Modul ini membekali peserta di {$region} dengan instrumen dan metodologi mutakhir untuk mendeteksi anomali pada peralatan strategis jauh sebelum kerusakan fisik terjadi.

Teknologi inspeksi dan diagnostik yang dipelajari dan dipraktikkan meliputi:
1. Analisis Getaran Mesin (Vibration Analysis): Menggunakan akselerometer piezoelektrik multi-sumbu yang terhubung ke FFT Data Collector untuk merekam spektrum getaran dalam domain waktu dan domain frekuensi. Peserta dilatih menganalisis spektrum FFT untuk mendiagnosis kerusakan spesifik: unbalance (puncak 1X rotasi dominan), misalignment poros (puncak 2X dan harmonisa sudut fase 180 derajat), kelonggaran mekanikal (mechanical looseness dengan harmonisa 0.5X, 1.5X, 2.5X), serta frekuensi cacat bantalan peluru (BPFO, BPFI, BSF, FTF) menggunakan teknik demodulasi peak vue / shock pulse method.
2. Termografi Inframerah Kualitatif dan Kuantitatif: Menggunakan kamera termal beresolusi radiometrik tinggi untuk mendeteksi titik panas (hotspot) pada koneksi terminal panel switchgear, kontak circuit breaker, bushing transformator, serta degradasi lapisan insulasi termal pipa uap. Peserta diajarkan mengoreksi nilai emisivitas permukaan dan suhu pantulan latar belakang guna menghindari kesalahan interpretasi termogram.
3. Pengujian Minyak Pelumas dan Minyak Isolasi Trafo: Menguasai interpretasi laporan laboratorium uji minyak turbin (viskositas, angka asam TAN, kadar air Karl Fischer, dan kebersihan partikel ISO 4406); serta uji Dissolved Gas Analysis (DGA) minyak transformator menggunakan segitiga Duval (Duval Triangle) dan rasio gas Dornenburg untuk mengidentifikasi fenomena pelepuhan termal parsial, pembentukan busur api, atau degradasi isolasi kertas selulosa.
4. Pengujian Tanpa Rusak (Non-Destructive Testing - NDT): Praktik pengukuran ketebalan dinding pipa dan bejana menggunakan Ultrasonic Thickness Gauge (UT), deteksi keretakan permukaan sambungan las menggunakan Magnetic Particle Testing (MT) dan Liquid Penetrant Testing (PT), serta pengujian emisi akustik untuk tangki timbun."
            ],
            [
                'title' => "Manajemen Risiko Bahaya K3, LOTO dan Mitigasi Percikan Arc Flash",
                'content' => "Fasilitas energi dan kelistrikan di {$region} menyimpan potensi bahaya fatal berenergi tinggi yang membutuhkan kepatuhan protokol Keselamatan dan Kesehatan Kerja (K3) tanpa kompromi. Kesalahan operasional sekecil apa pun pada instalasi bertegangan tinggi atau bejana bertekanan dapat menimbulkan kebakaran dahsyat, ledakan uap, sengatan listrik bertegangan ribuan volt, dan semburan busur api bersuhu ribuan derajat Celsius.

Pelatihan {$title} menekankan secara mendalam penerapan sistem Lockout / Tagout (LOTO) terpadu sesuai standar OSHA 1910.147. Peserta mempraktikkan prosedur isolasi energi berbahaya (Hazardous Energy Control): identifikasi titik isolasi (circuit breaker, isolator switch, katup manual pipa gas/uap), pembuangan sisa energi terperangkap (residual energy dissipation melalui pembumian sementara atau bleeding valve), pemasangan gembok keselamatan personal (padlock) dan tanda peringatan (danger tag), serta verifikasi nol energi (zero-energy state verification) sebelum personel diizinkan menyentuh komponen fisik.

Materi khusus mengenai bahaya Percikan Busur Api (Arc Flash) mengupas analisis batas energi insiden (Incident Energy Analysis) sesuai standar IEEE 1584 dan NFPA 70E. Peserta mempelajari perhitungan jarak batas kerja aman (Flash Protection Boundary), pemilihan busana pelindung tahan api (Arc-Rated FR Clothing dan Flash Suit) dengan rating kalori (Cal/cm2) yang sesuai dengan kategori bahaya (Kategori 1 hingga 4), serta pemeliharaan kebersihan ruang panel agar terhindar dari debu konduktif dan kelembaban tinggi yang dapat memicu flashover. Pelatihan juga mencakup prosedur tanggap darurat, teknik pertolongan pertama pada korban sengatan listrik, dan simulasi pemadaman api menggunakan sistem gas bersih (clean agent CO2 / FM-200) pada ruang server dan kendali."
            ],
            [
                'title' => "Studi Kasus Lapangan dan Troubleshooting Terpadu",
                'content' => "Pembelajaran dalam {$title} di {$region} diperkaya dengan pembahasan studi kasus nyata yang diambil dari berbagai peristiwa insiden teknis di fasilitas industri nasional dan internasional. Peserta diajak berpikir kritis menggunakan kerangka investigasi akar masalah Root Cause Analysis (RCA) dengan metode 5-Whys, Diagram Tulang Ikan (Ishikawa Diagram), dan Fault Tree Analysis (FTA).

Studi kasus pertama membedah kegagalan katastrofik motor induksi penggerak pompa sirkulasi berdaya 500 kW yang mengalami trip mendadak akibat panas berlebih (winding burnout). Melalui investigasi bertahap, peserta mengungkap bahwa penyebab utama bukanlah kegagalan insulasi motor semata, melainkan adanya ketidakseimbangan tegangan suplai (voltage unbalance) sebesar 3.5% yang bersumber dari koneksi longgar pada terminal tap changer trafo tenaga hulu. Ketidakseimbangan tegangan yang tampak kecil tersebut membangkitkan arus urutan negatif (negative sequence current) berkekuatan besar yang memicu pemanasan rotor secara eksponensial. Peserta merumuskan tindakan korektif: perbaikan koneksi busbar trafo, pemasangan rele proteksi arus urutan negatif (rele 46), dan penjadwalan inspeksi termografi berkala.

Studi kasus kedua mengkaji masalah water hammer dahsyat pada jaringan pipa uap utama pembangkit listrik yang meremukkan gantungan pipa (pipe support) dan memicu kebocoran sambungan flange. Analisis membuktikan bahwa perangkap uap (steam trap) tipe termodinamik di sepanjang jalur perpipaan mengalami macet tertutup (jammed closed), sehingga kondensat cair terakumulasi di dalam pipa uap dan tersapu oleh aliran uap berkecepatan 30 m/s menjadi proyektil air berenergi kinetik raksasa. Peserta diajarkan teknik audit steam trap menggunakan sensor ultrasonik akustik dan termometer inframerah untuk memastikan setiap perangkap uap bekerja normal dan membuang kondensat secara kontinu."
            ],
            [
                'title' => "Simulasi Ujian Kompetensi Teori, Asesmen Praktik dan Logbook Teknis",
                'content' => "Tahap akhir dari program {$title} di {$region} adalah asesmen komprehensif yang dirancang untuk menguji kompetensi holistik setiap peserta. Asesmen ini terdiri atas ujian teori tertulis, uji keterampilan praktik di hadapan asesor ahli, serta penyusunan dokumen laporan teknis profesional.

Ujian Teori Tertulis terdiri dari serangkaian soal studi kasus dan pilihan ganda yang menguji pemahaman konsep fundamental rekayasa, interpretasi kode standar, rumus kalkulasi parameter operasional, dan kepatuhan keselamatan kerja industri. Peserta diwajibkan meraih nilai ambang batas minimal kelulusan sebesar 80% untuk memastikan pemahaman teoritis yang kokoh.

Ujian Asesmen Praktik dilaksanakan langsung pada instalasi atau unit simulator workshop:
1. Praktik Pengoperasian & Troubleshooting: Peserta diuji kemampuannya membaca diagram P&ID dan diagram satu garis (Single Line Diagram - SLD), mengoperasikan urutan start-up dan shutdown peralatan sesuai SOP, serta mengatasi simulasi gangguan acak (fault injection) yang dimasukkan oleh asesor penguji ke dalam sistem kendali simulator.
2. Praktik Pengukuran & Pengujian Instrumen: Peserta dinilai ketelitiannya dalam menggunakan instrumen multitester digital, insulation resistance tester (Megger), power quality analyzer, loop calibrator, dan vibration pen, termasuk kebenaran konfigurasi kabel probe uji dan pencatatan data pengukuran.
3. Praktik K3 dan Isolasi LOTO: Setiap peserta wajib mendemonstrasikan prosedur isolasi energi LOTO secara mandiri, mengenakan APD yang benar, dan melakukan verifikasi tegangan nol dengan voltage detector berstandar keselamatan tinggi.

Di samping itu, peserta dilatih menyusun laporan hasil inspeksi harian (Daily Technical Report) dan rencana tindakan perbaikan (Corrective Action Request) dengan format standar teknik yang rapi dan dapat dipertanggungjawabkan kepada manajemen fasilitas industri."
            ],
            [
                'title' => "Rencana Implementasi Efisiensi Berkelanjutan Pasca Pelatihan",
                'content' => "Nilai tertinggi dari keikutsertaan dalam {$title} di {$region} terletak pada keberhasilan implementasi pengetahuan teknis di lingkungan kerja nyata pasca pelatihan. Peserta dibekali panduan penyusunan rencana aksi efisiensi (Action Plan for Continuous Improvement) yang dapat diterapkan langsung pada fasilitas industri masing-masing.

Rencana aksi pasca pelatihan mencakup:
1. Penyusunan Peta Peluang Hemat Energi (Energy Conservation Opportunities - ECOs): Peserta menyusun audit mandiri konsumsi daya pada sistem motor penggerak, kompresor udara, sistem uap, dan pencahayaan pabrik; memetakan potensi penghematan kWh; serta menghitung periode pengembalian modal investasi (Payback Period / Return on Investment - ROI) dari program retrofit teknologi efisiensi energi.
2. Pembaharuan Jadwal Pemeliharaan Preventif (PMS Update): Mengintegrasikan parameter batas getaran ISO 10816, ambang batas degradasi isolasi IEEE 43, dan kriteria kebersihan minyak ke dalam jadwal perawatan preventif terpusat pada sistem Computerized Maintenance Management System (CMMS).
3. Peningkatan Budaya Keselamatan Listrik dan Energi: Menginisiasi sesi transfer pengetahuan internal (toolbox meeting / safety sharing) kepada rekan kerja teknisi di lingkungan kerja untuk menyebarluaskan kesadaran bahaya arc flash, pentingnya kepatuhan LOTO, dan kepatuhan prosedur kerja aman."
            ],
            [
                'title' => "Konsultasi Teknis, Jadwal Batch Terdekat dan Pendaftaran Resmi di {$region}",
                'content' => "Penyelenggaraan program {$title} di {$region} dibuka secara terjadwal sepanjang tahun untuk mengakomodasi kebutuhan sertifikasi profesi mandiri maupun program peningkatan kapasitas tim teknik korporasi industri skala besar (In-House Corporate Training). Demi menjamin efektivitas pembelajaran interaktif, transfer ilmu optimal dari instruktur master, serta ketersediaan waktu hands-on pada unit simulator dan instrumen uji, kuota peserta pada setiap batch pelatihan dibatasi secara ketat maksimal 12 hingga 15 peserta per kelas.

Format penyelenggaraan pelatihan yang tersedia mencakup:
1. Public Training Reguler: Diselenggarakan di pusat pelatihan dan laboratorium uji berfasilitas lengkap di kota-kota strategis, dilengkapi ruang kelas modern berpendingin udara, modul hardcopy cetak eksklusif, instrumen uji laboratorium terakreditasi, konsumsi lengkap selama kegiatan, serta sertifikat kompetensi resmi.
2. In-House Corporate Customized Training: Diselenggarakan langsung di lokasi fasilitas operasional pabrik, gardu induk, atau area operasional perusahaan klien di seluruh wilayah {$region}. Kurikulum pelatihan dapat dikustomisasi secara presisi menyesuaikan dengan merk sistem kontrol PLC, konfigurasi kelistrikan pabrik, jenis mesin turbin/boiler, serta studi kasus operasional spesifik yang sedang dihadapi oleh tim teknis internal korporasi.

Informasi mendalam mengenai silabus kurikulum lengkap, jadwal batch pendaftaran terdekat, rincian biaya investasi pelatihan, dan prosedur pendaftaran resmi dapat diperoleh langsung melalui saluran hotline WhatsApp customer care kami yang tercantum pada portal ini. Tim konsultan rekayasa kami siap memberikan penjelasan komprehensif, mengirimkan proposal penawaran resmi, serta mendampingi organisasi Anda dalam merancang peta jalan sertifikasi kompetensi energi yang terstruktur dan berdampak nyata bagi keandalan fasilitas industri Anda di {$region}."
            ]
        ];

        $html = "";
        $wordCount = 0;

        foreach ($chapters as $index => $chap) {
            $num = $index + 1;
            $html .= "<div class='article-chapter mb-5' id='bab-{$num}'>\n";
            $html .= "    <h2 class='chapter-heading text-xl font-bold mb-3 text-slate-800'>Bab {$num}: {$chap['title']}</h2>\n";
            
            $paragraphs = explode("\n\n", $chap['content']);
            foreach ($paragraphs as $para) {
                $trimmed = trim($para);
                if (!empty($trimmed)) {
                    $html .= "    <p class='chapter-paragraph leading-relaxed text-slate-600 mb-4'>{$trimmed}</p>\n";
                    $wordCount += str_word_count(strip_tags($trimmed));
                }
            }

            if ($num % 2 == 0) {
                $html .= "    <div class='tech-summary-box p-4 rounded-xl border border-indigo-100 bg-indigo-50/50 mb-4'>\n";
                $html .= "        <h4 class='text-sm font-bold text-indigo-900 mb-2'><i class='bi bi-patch-check-fill text-indigo-600 me-2'></i>Rangkuman Teknis Standar Kompetensi Energi Bab {$num}</h4>\n";
                $html .= "        <p class='text-xs text-slate-600 leading-normal m-0'>Penerapan kepatuhan metodologi di {$region} berpedoman pada standar internasional ISO 50001, IEEE, IEC, ASME, dan NFPA 70E. Setiap tahapan pengujian dan operasional wajib didokumentasikan dalam lembar kendali keandalan harian.</p>\n";
                $html .= "    </div>\n";
                $wordCount += 35;
            }

            $html .= "</div>\n\n";
        }

        return [
            'title' => $title,
            'word_count' => $wordCount,
            'content' => $html
        ];
    }

    public static function getRegionalArticleList($region, int $limit = 200): array
    {
        if (is_array($region)) {
            $parts = [];
            if (!empty($region['district'])) $parts[] = $region['district'];
            if (!empty($region['city'])) $parts[] = $region['city'];
            if (!empty($region['province'])) $parts[] = $region['province'];
            $regionName = !empty($parts) ? implode(', ', $parts) : 'Indonesia';
        } else {
            $regionName = (string) $region;
        }

        $titles = self::get200ArticleTitles();
        $articles = [];

        foreach (array_slice($titles, 0, $limit) as $index => $tTemplate) {
            $fullTitle = str_replace('{region}', $regionName, $tTemplate);
            $slug = Str::slug($fullTitle);
            $articles[] = [
                'id' => $index + 1,
                'title' => $fullTitle,
                'slug' => $slug,
                'category' => 'Training Energy',
                'region' => $regionName,
                'excerpt' => "Panduan teknis dan materi kurikulum komprehensif {$fullTitle} untuk menjamin keandalan sistem tenaga, efisiensi operasional, kepatuhan standar ISO/IEEE/IEC, dan keselamatan industri di {$regionName}.",
                'author' => 'Tim Instruktur Master Training Energy',
                'read_time' => 25,
                'views_count' => 180 + ($index * 11) % 400,
                'published_at' => now()->subDays($index % 60)->format('d/m/Y')
            ];
        }

        return $articles;
    }

    public static function getArticleBySlug(string $slug, $region = 'Indonesia'): ?array
    {
        if (is_array($region)) {
            $parts = [];
            if (!empty($region['district'])) $parts[] = $region['district'];
            if (!empty($region['city'])) $parts[] = $region['city'];
            if (!empty($region['province'])) $parts[] = $region['province'];
            $regionName = !empty($parts) ? implode(', ', $parts) : 'Indonesia';
        } else {
            $regionName = (string) $region;
        }

        $titles = self::get200ArticleTitles();
        foreach ($titles as $idx => $tTemplate) {
            $fullTitle = str_replace('{region}', $regionName, $tTemplate);
            if (Str::slug($fullTitle) === $slug) {
                $synthesized = self::synthesizeArticleContent($fullTitle, $regionName);
                return [
                    'id' => $idx + 1,
                    'title' => $fullTitle,
                    'slug' => $slug,
                    'category' => 'Training Energy',
                    'region' => $regionName,
                    'author' => 'Tim Instruktur Master Training Energy',
                    'read_time' => 25,
                    'views_count' => 240 + ($idx * 9) % 500,
                    'published_at' => now()->subDays($idx % 60)->format('d/m/Y'),
                    'content' => $synthesized['content'],
                    'word_count' => $synthesized['word_count'],
                    'excerpt' => "Panduan teknis mendalam {$fullTitle} untuk penerapan standar efisiensi energi, keandalan sistem daya, dan keselamatan operasional di {$regionName}."
                ];
            }
        }

        $fallbackTitle = ucwords(str_replace('-', ' ', $slug));
        if (!str_starts_with(strtolower($fallbackTitle), 'training')) {
            $fallbackTitle = 'Training ' . $fallbackTitle;
        }
        $synthesized = self::synthesizeArticleContent($fallbackTitle, $regionName);
        return [
            'id' => 999,
            'title' => $fallbackTitle,
            'slug' => $slug,
            'category' => 'Training Energy',
            'region' => $regionName,
            'author' => 'Tim Instruktur Master Training Energy',
            'read_time' => 25,
            'views_count' => 310,
            'published_at' => now()->format('d/m/Y'),
            'content' => $synthesized['content'],
            'word_count' => $synthesized['word_count'],
            'excerpt' => "Panduan komprehensif {$fallbackTitle} di {$regionName}."
        ];
    }

    public static function getOrSynthesizeArticle(string $slug, $region = 'Indonesia'): ?array
    {
        return self::getArticleBySlug($slug, $region);
    }

    public static function getArticleTopics(): array
    {
        return [
            ['name' => 'Efisiensi Energi & ISO 50001', 'slug' => 'efisiensi-energi-iso-50001', 'count' => 28],
            ['name' => 'Kualitas Daya & Harmonisa Listrik', 'slug' => 'kualitas-daya-harmonisa', 'count' => 24],
            ['name' => 'K3 Listrik & Keselamatan Arc Flash', 'slug' => 'k3-listrik-arc-flash', 'count' => 22],
            ['name' => 'Instrumentasi & Kalibrasi Presisi', 'slug' => 'instrumentasi-kalibrasi', 'count' => 26],
            ['name' => 'SCADA, PLC & Otomasi Industri', 'slug' => 'scada-plc-otomasi', 'count' => 25],
            ['name' => 'Turbin Gas, Uap & Sistem Boiler', 'slug' => 'turbin-gas-uap-boiler', 'count' => 27],
            ['name' => 'Proteksi Kelistrikan & Switchgear', 'slug' => 'proteksi-kelistrikan-switchgear', 'count' => 24],
            ['name' => 'Rekayasa Keandalan & Predictive Maintenance', 'slug' => 'rekayasa-keandalan-pdm', 'count' => 24],
        ];
    }
}
