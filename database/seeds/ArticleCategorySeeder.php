<?php

use App\ArticleCategory;
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
            'Category1',
            'Category2',
            'Category3',
            'Category4',
            'Category5',
        ]);

        $categories->each(function ($category) {
            ArticleCategory::create([
                'category' => $category,
                'slug' => \Str::slug($category),
                'enabled' => 1
            ]);
        });
    }
}
