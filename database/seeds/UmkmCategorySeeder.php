<?php

use App\UmkmCategory;
use Illuminate\Database\Seeder;

class UmkmCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = collect([
            'Kuliner',
            'Fashion',
            'Agribisnis',
            'Teknologi',
        ]);

        $categories->each(function ($category) {
            UmkmCategory::create([
                'category' => $category,
                'is_enable' => 1
            ]);
        });
    }
}
