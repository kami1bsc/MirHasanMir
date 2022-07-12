<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Month;
class MonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Month::create([
            'month_name' => 'Muḥarram'
        ], 200);

        Month::create([
            'month_name' => 'Ṣafar'
        ], 200);

        Month::create([
            'month_name' => "Rabi‘ al-awwal"
        ], 200);

        Month::create([
            'month_name' => "Rabi‘ al-akhir"
        ], 200);

        Month::create([
            'month_name' => "Jumada al-ula"
        ], 200);

        Month::create([
            'month_name' => 'Jumada al-akhirah'
        ], 200);

        Month::create([
            'month_name' => 'Rajab'
        ], 200);

        Month::create([
            'month_name' => "Sha‘ban"
        ], 200);

        Month::create([
            'month_name' => 'Ramadan'
        ], 200);

        Month::create([
            'month_name' => 'Shawwal'
        ], 200);

        Month::create([
            'month_name' => "Thu al-Qa‘dah"
        ], 200);

        Month::create([
            'month_name' => "Thu al-Hijjah"
        ], 200);
    }
}
