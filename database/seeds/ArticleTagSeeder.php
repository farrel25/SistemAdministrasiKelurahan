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
            'Tag1',
            'Tag2',
            'Tag3',
            'Tag4',
            'Tag5',
        ]);

        $tags->each(function ($tag) {
            ArticleTag::create([
                'name_tag' => $tag,
                'slug' => \Str::slug($tag),
                'enabled' => 1
            ]);
        });
    }
}
