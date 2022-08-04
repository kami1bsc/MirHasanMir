<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(AlbumSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(MonthSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(MajlisUpdateSeeder::class);
        $this->call(TopSectionSeeder::class);
        $this->call(MonthKalamSeeder::class);
        $this->call(TrendingSeeder::class);
        $this->call(NohaySingleSeeder::class);
        $this->call(ManqabatSingleSeeder::class);
        $this->call(SettingSeeder::class);
    }
}
