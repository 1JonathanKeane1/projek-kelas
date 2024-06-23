<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::create([
            "nama"=> "Kelas.com",
        ]);

        Video::create([
            "nama"=> "Kelas.work",
        ]);

        Video::create([
            "nama"=> "bootcamp",
        ]);
    }
}
