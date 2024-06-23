<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


use App\Models\DetailBenefit;

class DetailBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailBenefit::create([
            "idBenefit"=> "1",
            "judul"=> "Optimalkan potensi karyawan Anda dengan Learning Management System (LMS)",
            "isi"=> "Berdayakan tim Anda untuk mencapai kesuksesan dengan data yang akurat dan solusi pembelajaran yang terintegrasi. Transformasikan pengelolaan sumber daya manusia Anda dan hadirkan produktivitas yang unggul dengan LMS kami!",
        ]);

        DetailBenefit::create([
            "idBenefit"=> "1",
            "judul"=> "Issued Certificate",
            "isi"=> "Berikan kemudahan dalam mengatur dan mendistribusikan sertifikat kepada setiap karyawan.",
        ]);

        DetailBenefit::create([
            "idBenefit"=> "1",
            "judul"=> "on boarding",
            "isi"=> "Memastikan setiap karyawan siap memberikan kontribusi maksimal sejak hari pertama mereka bergabung",
        ]);

        DetailBenefit::create([
            "idBenefit"=> "1",
            "judul"=> "Training on-demand",
            "isi"=> "Training On-Demand yang berfokus pada pengalaman pengguna, pelatihan berkualitas tinggi menjadi lebih mudah diakses dan disesuaikan dengan kebutuhan Anda.",
        ]);
        // 
        // 

        DetailBenefit::create([
            "idBenefit"=> "2",
            "judul"=> "Optimalkan potensi karyawan Anda",
            "isi"=> "Berdayakan tim Anda untuk mencapai kesuksesan",
        ]);

        DetailBenefit::create([
            "idBenefit"=> "2",
            "judul"=> "Issued Certificate",
            "isi"=> "Berikan kemudahan dalam mengatur dan mendistribusikan sertifikat kepada setiap karyawan.",
        ]);

        DetailBenefit::create([
            "idBenefit"=> "2",
            "judul"=> "on boarding",
            "isi"=> "Memastikan setiap karyawan siap memberikan kontribusi maksimal sejak hari pertama mereka bergabung",
        ]);
        // 
        // 

        DetailBenefit::create([
            "idBenefit"=> "3",
            "judul"=> "Bangun ilmu dengan bantuan Video + Webinar",
            "isi"=> "Berdayakan tim Anda untuk mencapai kesuksesan dengan data yang akurat dan solusi pembelajaran yang terintegrasi. Transformasikan pengelolaan sumber daya manusia Anda dan hadirkan produktivitas yang unggul dengan LMS kami!",
        ]);

        DetailBenefit::create([
            "idBenefit"=> "3",
            "judul"=> "Issued Certificate",
            "isi"=> "Berikan kemudahan dalam mengatur dan mendistribusikan sertifikat kepada setiap karyawan.",
        ]);
        // 
        // 

        DetailBenefit::create([
            "idBenefit"=> "4",
            "judul"=> "Inquiry Learning",
            "isi"=> "Berdayakan tim Anda untuk mencapai kesuksesan",
        ]);

        DetailBenefit::create([
            "idBenefit"=> "4",
            "judul"=> "Training on-demand",
            "isi"=> "Training On-Demand yang berfokus pada pengalaman pengguna, pelatihan berkualitas tinggi menjadi lebih mudah diakses dan disesuaikan dengan kebutuhan Anda.",
        ]);
        // 
        // 
    }
}
