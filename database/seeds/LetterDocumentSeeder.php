<?php

use App\LetterDocument;
use Illuminate\Database\Seeder;

class LetterDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $documents = collect([
            'Surat Pengantar RT/RW',
            'Fotokopi Kartu Keluarga (KK)',
            'Fotokopi Kartu Tanda Penduduk (KTP)',
            'Fotokopi Surat Nikah / Akta Nikah / Kutipan Akta Perkawinan',
            'Fotokopi Akta Kelahiran / Surat Kelahiran bagi keluarga yang mempunyai anak',
            'Surat Pindah Datang dari tempat asal',
            'Surat Keterangan Kematian dari Rumah Sakit, Rumah Bersalin Puskesmas, atau visum Dokter',
            'Surat Keterangan Cerai',
            'Fotokopi Ijazah Terakhir',
            'SK. PNS / KARIP / SK. TNI – POLRI',
            'Surat Keterangan Kematian dari Kepala Desa / Kelurahan',
            'Surat imigrasi / STMD (Surat Tanda Melapor Diri)'
        ]);

        $documents->each(function ($document) {
            LetterDocument::create([
                'document' => $document
            ]);
        });
    }
}
