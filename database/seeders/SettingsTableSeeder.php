<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;


class SettingsTableSeeder extends Seeder
{
      /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // إدراج بيانات افتراضية لجدول الإعدادات
        DB::table('settings')->insert([
            'site_name' => 'اسم الموقع',
            'about' => 'نبذة عن الموقع',
            'icon_url' => 'رابط الأيقونة',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}