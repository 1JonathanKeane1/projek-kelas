<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'nama' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
        ]);

        $this->call([
            BenefitTableSeeder::class,
            DetailBenefitTableSeeder::class,
            PaketTableSeeder::class,
            DetailPaketTableSeeder::class,
            VideoTableSeeder::class,
            DetailVideoTableSeeder::class,
        ]);
    }
}
