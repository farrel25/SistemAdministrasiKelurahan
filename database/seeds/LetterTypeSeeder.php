<?php

use App\LetterType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LetterTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $codes = [
            'S-01', 'S-02', 'S-03', 'S-04', 'S-05', 'S-06', 'S-07', 'S-08', 'S-09', 'S-10', 'S-11', 'S-12', 'S-13', 'S-14', 'S-15',
            'S-16', 'S-17', 'S-18', 'S-19', 'S-20', 'S-21', 'S-22', 'S-23', 'S-24', 'S-25', 'S-26', 'S-27', 'S-28', 'S-29', 'S-30', 'S-31', 'S-32',
            'S-33', 'S-34', 'S-35', 'S-36', 'S-37', 'S-38', 'S-39', 'S-40', 'S-41', 'S-42', 'S-43'
        ];
        $types = [
            'Keterangan Pengantar',
            'Keterangan Penduduk',
            'Biodata Penduduk',
            'Keterangan Pindah Penduduk',
            'Keterangan Jual Beli',
            'Pengantar Surat Keterangan Catatan Kepolisian',
            'Keterangan KTP dalam Proses',
            'Keterangan Beda Identitas',
            'Keterangan Bepergian / Jalan',
            'Keterangan Kurang Mampu',
            'Pengantar Izin Keramaian',
            'Pengantar Laporan Kehilangan',
            'Keterangan Usaha',
            'Keterangan JAMKESOS',
            'Keterangan Domisili Usaha',
            'Keterangan Kelahiran',
            'Permohonan Akta Lahir',
            'Pernyataan Belum Memiliki Akta Lahir',
            'Permohonan Duplikat Kelahiran',
            'Keterangan Kematian',
            'Keterangan Lahir Mati',
            'Keterangan Untuk Nikah (N-1 s/d N-7)',
            'Keterangan Pergi Kawin',
            'Keterangan Wali Hakim',
            'Permohonan Duplikat Surat Nikah',
            'Permohonan Cerai',
            'Keterangan Pengantar Rujuk/Cerai',
            'Permohonan Kartu Keluarga',
            'Domisili Usaha Non-Warga',
            'Keterangan Beda Identitas KIS',
            'Keterangan Izin Orang Tua/Suami/Istri',
            'Pernyataan Penguasaan Fisik Bidang Tanah (SPORADIK)',
            'Permohonan Perubahan Kartu Keluarga',
            'Non Warga',
            'Keterangan Domisili',
            'Keterangan Penghasilan Orangtua',
            'Pengantar Permohonan Penerbitan Buku Pas Lintas',
            'Keterangan Penghasilan Ayah',
            'Keterangan Penghasilan Ibu',
            'Perintah Perjalanan Dinas',
            'Kuasa',
            'Keterangan Kepemilikan Kendaraan',
            'Keterangan Kepemilikan Tanah'
        ];

        for ($i = 0; $i < count($codes); $i++) {
            LetterType::create([
                'letter_code' => $codes[$i],
                'type' => $types[$i],
                'validity_period' => 1,
                'validity_period_unit' => 'M',
            ]);
        }
    }
}
