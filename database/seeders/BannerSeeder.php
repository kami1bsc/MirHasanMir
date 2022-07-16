<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::create([
            'banner_image' => 'banner_images/default.jpg'
        ]);

        Banner::create([
            'banner_image' => 'banner_images/default1.jpg'
        ]);

        Banner::create([
            'banner_image' => 'banner_images/default2.jpg'
        ]);

        Banner::create([
            'banner_image' => 'banner_images/default3.jpg'
        ]);
    }
}
