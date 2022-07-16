<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NohaySingle;
class NohaySingleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NohaySingle::create([
            'video_id' => 9,
        ]);

        NohaySingle::create([
            'video_id' => 11,
        ]);

        NohaySingle::create([
            'video_id' => 10,
        ]);

        NohaySingle::create([
            'video_id' => 12,
        ]);

        NohaySingle::create([
            'video_id' => 13,
        ]);

    }
}
