<?php

use App\VillagerProfession;
use Illuminate\Database\Seeder;

class VillagerProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $professions = collect([
            'Belum / Tidak Bekerja',
            'Mengurus Rumah Tangga',
            'Pelajar / Mahasiswa',
            'Pensiunan',
            'Pegawai Negeri Sipil (PNS)',
            'Tentara Nasional Indonesia (TNI)',
            'Kepolisian RI (POLRI)',
            'Perdagangan',
            'Petani / Pekebun',
            'Peternak',
            'Nelayan / Perikanan',
            'Industri',
            'Konstruksi',
            'Transportasi',
            'Karyawan Swasta',
            'Karyawan BUMN',
            'Karyawan BUMD',
            'Karyawan Honorer',
            'Buruh Harian Lepas',
            'Buruh Tani / Perkebunan',
            'Buruh Nelayan / Perikanan',
            'Buruh Peternakan',
            'Pembantu RUmah Tangga',
            'Tukang Cukur',
            'Tukang Listrik',
            'Tukang Batu',
            'Tukang Kayu',
            'Tukang Sol Sepatu',
            'Tukang Las / Pandai Besi',
            'Tukang Jahit',
            'Tukang Gigi',
            'Penata Rias',
            'Penata Busana',
            'Penata Rambut',
            'Mekanik',
            'Seniman',
            'Tabib',
            'Paraji',
            'Perancang Busana',
            'Penerjemah',
            'Imam Masjid',
            'Pendeta',
            'Pastor',
            'Wartawan',
            'Ustadz / Mubaligh',
            'Juru Masak',
            'Promotor Acara',
            'Anggota DPR - RI',
            'Anggota DPD',
            'Anggota BPK',
            'Presiden',
            'Wakil Presiden',
            'Anggota Mahkamah Konstitusi',
            'Anggota Kabinet Kementerian',
            'Duta Besar',
            'Gubernur',
            'Wakil Gubernur',
            'Bupati',
            'Wakil Bupati',
            'Walikota',
            'Wakil Walikota',
            'Anggota DPRD Provinsi',
            'Anggota DPRD Kabupaten / kota',
            'Dosen',
            'Guru',
            'Pilot',
            'Pengacara',
            'Notaris',
            'Arsitek',
            'Akuntan',
            'Konsultan',
            'Dokter',
            'Bidan',
            'Perawat',
            'Apoteker',
            'Psikiater / Psikolog',
            'Penyiar Televisi',
            'Penyiar Radio',
            'Pelaut',
            'Peneliti',
            'Sopir',
            'Pialang',
            'Paranormal',
            'Pedagang',
            'Perangkat Desa',
            'Kepala Desa',
            'Biarawati',
            'Wiraswasta',
            'Lainnya'
        ]);

        $professions->each(function ($profession) {
            VillagerProfession::create([
                'profession' => $profession
            ]);
        });
    }
}
