<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trending;

class TrendingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trending::create([
            'video_id' => 9,
        ]);

        Trending::create([
            'video_id' => 7,
        ]);

        Trending::create([
            'video_id' => 3,
        ]);

        Trending::create([
            'video_id' => 2,
        ]);

        Trending::create([
            'video_id' => 5,
        ]);

        Trending::create([
            'video_id' => 4,
        ]);

        Trending::create([
            'video_id' => 6,
        ]);
    }
}
