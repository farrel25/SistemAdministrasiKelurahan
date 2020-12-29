<?php

namespace App\Exports;

use App\LetterType;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class LetterTypeExport implements FromCollection, WithMapping, WithHeadings, WithStyles
{
    use Exportable;

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return LetterType::all();
    }

    /**
     * @var LetterType $letterType
     */
    protected $no = 0;
    // protected $validity_period = "";
    protected $validity_period_unit = "";

    public function map($letterType): array
    {
        if ($letterType->validity_period_unit == "D") {
            $this->validity_period_unit = "Hari";
        } elseif ($letterType->validity_period_unit == "W") {
            $this->validity_period_unit = "Minggu";
        } elseif ($letterType->validity_period_unit == "M") {
            $this->validity_period_unit = "Bulan";
        } elseif ($letterType->validity_period_unit == "Y") {
            $this->validity_period_unit = "Tahun";
        }

        // $this->validity_period = $letterType->validity_period . $this->validity_period_unit;
        $this->no += 1;
        return [
            $this->no,
            $letterType->letter_code,
            $letterType->type,
            // $this->validity_period
            $letterType->validity_period,
            $this->validity_period_unit
        ];
    }

    public function headings(): array
    {
        return [
            'NOMOR',
            'KODE SURAT',
            'JENIS SURAT',
            'MASA BERLAKU',
            'SATUAN MASA BERLAKU',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],
        ];
    }
}
