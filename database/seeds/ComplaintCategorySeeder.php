<?php

use App\ComplaintCategory;
use Illuminate\Database\Seeder;

class ComplaintCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = collect([
            'Website',
            'Administratif',
            'Pelayanan',
            'Kegiatan Desa'
        ]);

        $categories->each(function ($category) {
            ComplaintCategory::create([
                'category' => $category,
                'is_enable' => 1
            ]);
        });
    }
}
