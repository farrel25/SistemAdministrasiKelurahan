<?php

namespace App\Imports;

use App\LetterType;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Str;

class LetterTypeImport implements ToModel, WithHeadingRow
{
    use Importable;

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new LetterType([
            'letter_code' => $row['kode_surat'],
            'type' => $row['jenis_surat'],
            'validity_period' => $row['masa_berlaku'],
            'validity_period_unit' => $this->setValidityPeriodUnit($row['satuan_masa_berlaku'])
        ]);
    }

    protected function setValidityPeriodUnit($period)
    {
        if (Str::lower($period) == 'hari') {
            return 'D';
        } elseif (Str::lower($period) == 'minggu') {
            return 'W';
        } elseif (Str::lower($period) == 'bulan') {
            return 'M';
        } elseif (Str::lower($period) == 'tahun') {
            return 'Y';
        }
    }
}
