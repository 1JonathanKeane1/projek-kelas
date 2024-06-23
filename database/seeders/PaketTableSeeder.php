<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Paket;

class PaketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paket::create([
            "paket"         => "Starter",
            "harga_lama"    => "187500",
            "harga"         => "159000",
        ]);

        Paket::create([
            "paket"         => "Basic",
            "harga_lama"    => "187500",
            "harga"         => "159000",
        ]);


        Paket::create([
            "paket"         => "Pro",
            "harga_lama"    => "3750000",
            "harga"         => "2900000",
        ]);

    }
}
