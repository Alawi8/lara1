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
     */
    public function run()
    {
        // اذا كان الجدول غير فارغ، لا تقم بإضافة المزيد من البيانات
        if (DB::table('settings')->count() > 0) {
            $this->command->info('The table is not empty. Seeder skipped.');
            return;
        }

        // إدراج بيانات افتراضية لجدول الإعدادات
        DB::table('settings')->insert([
            'site_name' => 'اسم الموقع',
            'about' => 'نبذة عن الموقع',
            'icon_url' => 'رابط الأيقونة',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->command->info('Seeder executed successfully!');
    }
}