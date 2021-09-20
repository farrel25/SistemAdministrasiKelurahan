<?php

use App\ComplaintCategory;
use App\VillageIdentity;
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
            // Permission
            RoleTableSeeder::class,
            PermissionTableSeeder::class,
            RoleHasPermissionTableSeeder::class,

            // dashboard menu and submenu
            DashboardMenuSeeder::class,
            DashboardSubMenuSeeder::class,

            // Villager
            VillagerBloodTypeSeeder::class,
            VillagerReligionSeeder::class,
            VillagerEducationSeeder::class,
            VillagerProfessionSeeder::class,
            VillagerSexSeeder::class,
            VillagerMaritalStatusSeeder::class,
            VillagerStayStatusSeeder::class,
            VillagerNationalityStatusSeeder::class,
            VillagerLifeStatusSeeder::class,
            VillagerAgeRangeSeeder::class,
            VillagerChronicDiseaseSeeder::class,
            VillagerDisabilitySeeder::class,
            VillagerSeeder::class,

            // Staff
            StaffSeeder::class,

            // Letter
            LetterDocumentSeeder::class,
            LetterTypeSeeder::class,
            LetterStatusSeeder::class,

            // Article
            ArticleCategorySeeder::class,
            ArticleTagSeeder::class,

            // User
            UserSeeder::class,

            // Village Information
            VillageIdentitySeeder::class,

            // Complaint
            ComplaintCategorySeeder::class,

            //UMKM
            UmkmCategorySeeder::class,
        ]);
    }
}
