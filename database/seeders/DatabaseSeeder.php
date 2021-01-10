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
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(SessionSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(GalerySeeder::class);
        $this->call(TestimoniesSeeder::class);
        $this->call(BlogSeeder::class);
    }
}
