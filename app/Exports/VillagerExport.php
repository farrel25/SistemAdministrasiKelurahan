<?php

namespace App\Exports;

use App\Villager;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class VillagerExport implements FromCollection, WithMapping, WithHeadings, WithStyles
{
    use Exportable;
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Villager::all();
    }

    /**
     * @var Villager $villager
     */
    protected $no = 0;
    // protected $photos = '';
    // protected $photo = '';
    public function map($villager): array
    {
        // $this->photos = explode('/', $villager->photo);
        // dd(explode('/', $villager->photo));
        // $this->photo = $this->photos[2];

        $this->no += 1;
        return [
            $this->no,
            $villager->nik,
            // $villager->photo,
            $villager->full_name,
            $villager->villagerSex->sex,
            $villager->birth_place,
            $villager->birth_date,
            $villager->villagerReligion->religion,
            $villager->villagerEducation->education,
            $villager->villagerProfession->profession,
            $villager->villagerMaritalStatus->marital_status,
            $villager->villagerStayStatus->stay_status,
            $villager->villagerLifeStatus->life_status,
            $villager->villagerNationality->kewarganegaraan,
            $villager->villagerBloodType->blood_type,
            $villager->address,
            $villager->phone_number,
            $villager->father_nik,
            $villager->father_name,
            $villager->mother_nik,
            $villager->mother_name,
            $villager->villagerDisability->disability,
            $villager->villagerChronicDisease->disease,
        ];
    }

    public function headings(): array
    {
        return [
            'NO',
            'NIK',
            // 'FOTO',
            'NAMA LENGKAP',
            'JENIS KELAMIN',
            'TEMPAT LAHIR',
            'TANGGAL LAHIR',
            'AGAMA',
            'PENDIDIKAN',
            'PEKERJAAN',
            'STATUS KAWIN',
            'STATUS TINGGAL',
            'STATUS HIDUP',
            'KEWARGANEGARAAN',
            'GOLONGAN DARAH',
            'ALAMAT',
            'NOMOR TELEPON',
            'NIK AYAH',
            'NAMA AYAH',
            'NIK IBU',
            'NAMA IBU',
            'CACAT',
            'PENYAKIT KRONIS',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],

            // Styling a specific cell by coordinate.
            // 'B2' => ['font' => ['italic' => true]],

            // Styling an entire column.
            // 'C'  => ['font' => ['size' => 16]],
        ];
    }
}
