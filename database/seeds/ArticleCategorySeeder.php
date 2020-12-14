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
            'category1',
            'category2',
            'category3',
            'category4'
        ]);

        $categories->each(function ($category) {
            ArticleCategory::create([
                'category' => $category,
                'slug' => \Str::slug($category),
                'enabled'=>1
            ]);
        });
    }
}
