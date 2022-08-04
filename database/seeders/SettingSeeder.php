<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;
class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'settings_type' => 'top_string',
            'settings_value' => 'Muharram-ul-Haram',
        ]);
        
        Setting::create([
            'settings_type' => 'mood',
            'settings_value' => 'Sad',
        ]);
    }
}
