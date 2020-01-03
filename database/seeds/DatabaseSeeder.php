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
        $this->call(ChaptersTableSeeder::class);
        $this->call(ExercisesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ActivityTableSeeder::class);
    }
}
