<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Mentor;
use App\Models\Kelas;
use App\Models\Durasi;
use App\Models\Paket;
use App\Models\VideoKelas;
use App\Models\Pembelian;

class PendapatanMentorController extends Controller
{
    public function index()
    {
        return view("admin.pages.pendapatan.index", [
            'mentor'   => Mentor::latest()->get(),
        ]);
    }

    public function hitung($id)
    {
        $mentor = Mentor::find($id);


        if ($mentor) {
            $totalwaktutonton = 0;

            // Menghitung total durasi tonton dari semua pengguna dalam ketiga kelas mentor
            foreach ($mentor->kelas as $kl) {
                foreach ($kl->video as $vid) {
                    $video = Durasi::with('video')->where('idVideo', $vid->id)->get();
                    foreach ($video as $vids ) {
                            $totalwaktutonton += $vids->durasi;
                            $totalwaktu = gmdate('i', $totalwaktutonton);
                    }
                }
            }

            // Menghitung presentase waktu tonton setiap kelas
            $totalwaktukelas = [];
            foreach ($mentor->kelas as $k) {
                foreach ($k->video as $vid) {
                    $video = VideoKelas::with('waktu')->where('idKelas', $k->id)->get();
                    foreach($video as $vid) {
                        $waktutontonkelas = $vid->waktu->sum('durasi');
                        if($waktutontonkelas){

                            $menit = gmdate('i', $waktutontonkelas);
                            $persentase = ($menit / $totalwaktutonton) * 100;
                            $totalwaktukelas[$k->id] = [
                                'kelas'         => $k->kelas,
                                'waktutonton'   => $menit,
                                'persentase'    => $persentase,
                                'paket'         => $k->idPaket,
                                'mentor'        => $k->mentor->mentor,
                            ];
                        } 
                        else
                        {
                            return redirect('/admin/pendapatan')->with('success','Belum ada durasi');
                        }
                    }
                }
            }

            // Menghitung pendapatan berdasarkan presentasi waktu tonton yang telah dihitung
            $totalpendapatan = 0;
            $totalpengguna = [];

            foreach ($totalwaktukelas as $kelasid => $data) {

                // Menghitung pendapatan bersih mentor
                $pembelian = Pembelian::with('paket')->where('idPaket', $data['paket'])->get();
                
                foreach ($pembelian as $p) {
                    $pengguna = Pembelian::where('idPaket', $p->idPaket)->count();
                    $hargapaket = $p->paket->harga;
                    
                    $totalpembelianpaket = $pengguna * $hargapaket;
                    $pendapatanbersih = (20/100) * $totalpembelianpaket;

                }

                $pendapatan = ($data['persentase'] / 100) * $totalwaktutonton * $pendapatanbersih;
                $totalpendapatan += $pendapatan;


                echo "Kelas: {$data['kelas']}\n";
                echo "Waktu Tonton: {$data['waktutonton']} menit\n";
                echo "Persentase: {$data['persentase']}%\n";
                echo "Pendapatan: $pendapatan\n";
                echo "\n";
            }

            echo "Total Pendapatan Mentor: $totalpendapatan\n";
            return view("admin.pages.pendapatan.hasil", [
                'data'          => $totalwaktukelas,
                'pendapatan'    => $pendapatan,
                'totaltonton'   => $totalwaktu,
                'total'         =>$totalpendapatan,
            ]);
        }
    }

    public function hasil()
    {
        return view("admin.pages.pendapatan.hasil");
    }
}