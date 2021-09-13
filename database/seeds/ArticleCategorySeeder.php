<?php

use App\ArticleCategory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = collect([
            'Sejarah dan Visi Misi',
            'Struktur Pemerintahan',
            'Kegiatan Desa',
            'Teknologi',
            'Bisnis',
        ]);

        $categories->each(function ($category) {
            ArticleCategory::create([
                'category' => $category,
                'slug' => Str::slug($category),
                'enabled' => 1
            ]);
        });
    }
}
