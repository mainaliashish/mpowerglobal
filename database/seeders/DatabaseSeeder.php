<?php

namespace Database\Seeders;

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
        $this->call(AboutSeeder::class);
        $this->call(AnnouncementSeeder::class);
        $this->call(MessageSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(SliderSeeder::class);
    }
}
