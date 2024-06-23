<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Benefit::create([
            "benefit"=> "LMS",
        ]);

        Benefit::create([
            "benefit"=> "Featured",
        ]);
        Benefit::create([
            "benefit"=> "Video + Webinar",
        ]);
        Benefit::create([
            "benefit"=> "Inquiry Learning",
        ]);
    }
}
