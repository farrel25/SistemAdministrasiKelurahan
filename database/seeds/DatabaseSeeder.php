<?php

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
            UserLevelSeeder::class,
            LetterDocumentSeeder::class,
            LetterTypeSeeder::class,
            LetterStatusSeeder::class,
        ]);
    }
}
