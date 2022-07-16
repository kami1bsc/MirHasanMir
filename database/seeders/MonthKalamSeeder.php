<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MonthKalam;

class MonthKalamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MonthKalam::create([
            'video_id' => 3,
        ]);

        MonthKalam::create([
            'video_id' => 7,
        ]);

        MonthKalam::create([
            'video_id' => 9,
        ]);

        MonthKalam::create([
            'video_id' => 11,
        ]);

        MonthKalam::create([
            'video_id' => 13,
        ]);

        MonthKalam::create([
            'video_id' => 2,
        ]);

        MonthKalam::create([
            'video_id' => 1,
        ]);
    }
}
