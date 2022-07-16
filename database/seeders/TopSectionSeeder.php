<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TopSection;
class TopSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TopSection::create([
            'video_id' => 13,
        ]);

        TopSection::create([
            'video_id' => 12,
        ]);

        TopSection::create([
            'video_id' => 11,
        ]);

        TopSection::create([
            'video_id' => 10,
        ]);

        TopSection::create([
            'video_id' => 9,
        ]);

        TopSection::create([
            'video_id' => 8,
        ]);

        TopSection::create([
            'video_id' => 7,
        ]);
    }
}
