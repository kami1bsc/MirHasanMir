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
            'banner_image' => 'https://imamhussain.org/filestorage/images/54f20da2d164f.jpg'
        ]);

        Banner::create([
            'banner_image' => 'https://shiawaves.com/english/wp-content/uploads/sites/4/2019/08/images_2019_08_31_636416283650823239.jpg'
        ]);

        Banner::create([
            'banner_image' => 'https://www.teahub.io/photos/full/243-2436587_muharram-labaik-ya-hussain.jpg'
        ]);

        Banner::create([
            'banner_image' => 'https://iqna.ir/files/fa/news/1398/6/9/1439008_121.jpg'
        ]);
    }
}
