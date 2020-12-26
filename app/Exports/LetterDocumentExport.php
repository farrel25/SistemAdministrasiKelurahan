<?php

namespace App\Exports;

use App\LetterDocument;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class LetterDocumentExport implements FromCollection, WithMapping, WithHeadings, WithStyles
{
    use Exportable;

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return LetterDocument::all();
    }

    /**
     * @var LetterDocument $letterDocument
     */
    protected $no = 0;
    public function map($letterDocument): array
    {
        $this->no += 1;
        return [
            $this->no,
            $letterDocument->document
        ];
    }

    public function headings(): array
    {
        return [
            'NOMOR',
            'DOKUMEN',
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
