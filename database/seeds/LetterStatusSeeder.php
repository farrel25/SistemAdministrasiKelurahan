<?php

use App\LetterStatus;
use Illuminate\Database\Seeder;

class LetterStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $statuses = collect([
            'Antrian',
            'Sedang diproses',
            'Sudah jadi',
            'Sudah diambil'
        ]);

        $statuses->each(function ($status) {
            LetterStatus::create([
                'status' => $status
            ]);
        });
    }
}
