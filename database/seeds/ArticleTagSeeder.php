<?php

use App\ArticleTag;
use Illuminate\Database\Seeder;

class ArticleTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tags = collect([
            'category1',
            'category2',
            'category3',
            'category4'
        ]);

        $tags ->each(function ($tag) {
            ArticleTag::create([
                'name_tag' => $tag,
                'slug' => \Str::slug($tag),
                'enabled'=>1
            ]);
        });
    }
}
