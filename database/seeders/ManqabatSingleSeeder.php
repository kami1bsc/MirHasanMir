<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ManqabatSingle;

class ManqabatSingleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ManqabatSingle::create([
            'video_id' => 4,
        ]);

        ManqabatSingle::create([
            'video_id' => 5,
        ]);

        ManqabatSingle::create([
            'video_id' => 6,
        ]);

        ManqabatSingle::create([
            'video_id' => 7,
        ]);

        ManqabatSingle::create([
            'video_id' => 8,
        ]);
    }
}
