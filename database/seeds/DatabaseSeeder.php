<?php

use App\ArticleCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(UserLevelSeeder::class);
        // $this->call(LetterDocumentSeeder::class);
        // $this->call(LetterTypeSeeder::class);
        $this->call([
            RoleTableSeeder::class,

            // Letter
            LetterDocumentSeeder::class,
            LetterTypeSeeder::class,
            LetterStatusSeeder::class,

            // Villager
            VillagerBloodTypeSeeder::class,
            VillagerReligionSeeder::class,
            VillagerSexSeeder::class,
            VillagerMaritalStatusSeeder::class,
            VillagerStayStatusSeeder::class,
            VillagerNationalityStatusSeeder::class,
            VillagerLifeStatusSeeder::class,
            VillagerAgeRangeSeeder::class,
            VillagerChronicDiseaseSeeder::class,
            VillagerDisabilitySeeder::class,

            // Article
            ArticleCategorySeeder::class,
            ArticleTagSeeder::class,
        ]);
    }
}
