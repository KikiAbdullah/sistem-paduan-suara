<?php

namespace App\Http\Controllers;

use App\Anggota;
use App\Klasifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KlasifikasiController extends Controller
{
    public function index()
    {
        return view('klasifikasi.index');
    }

    public function store(Request $request)
    {

        $anggota = new Anggota();
        $anggota->nama = $request->nama;
        $anggota->status = 0;
        $anggota->save();


        $klasifikasi  = new Klasifikasi();
        $klasifikasi->id_anggota = $anggota->id;
        $klasifikasi->pengalaman = $request->pengalaman;
        $klasifikasi->nilai_semester = $request->nilai_semester;
        $klasifikasi->alat_musik = $request->alat_musik;
        $klasifikasi->organisasi = $request->organisasi;
        $klasifikasi->jarak = $request->jarak;
        $klasifikasi->save();

        $hasil = $this->proses($klasifikasi->id);

        if ($hasil < 50) {
            $update_anggota = Anggota::find($anggota->id);
            $update_anggota->status = 0;
            $update_anggota->save();

            return redirect('hasil')->with('msg', $request->nama . ', Mohon Maaf Anda Belum Lolos :(');
        } else if ($hasil > 50) {
            $update_anggota = Anggota::find($anggota->id);
            $update_anggota->status = 1;
            $update_anggota->save();

            return redirect('hasil')->with('msg', $request->nama . ', Selamat Anda Lolos!');
        }
    }

    public function proses($id)
    {
        $max = DB::select(
            'select max(pengalaman) as max1, 
            max(nilai_semester) as max2, 
            max(alat_musik) as max3, 
            max(organisasi) as max4, 
            max(jarak) as max5 from klasifikasi',
            [1]
        );

        $min = DB::select(
            'select min(pengalaman) as min1, 
            min(nilai_semester) as min2, 
            min(alat_musik) as min3, 
            min(organisasi) as min4, 
            min(jarak) as min5 from klasifikasi',
            [1]
        );

        $data = Klasifikasi::find($id);

        $hasil = round((($data['pengalaman'] / $max[0]->max1)) +
            (($data['nilai_semester'] / $max[0]->max2)) +
            (($data['alat_musik'] / $max[0]->max3)) +
            (($data['organisasi'] / $max[0]->max4)) +
            (($min[0]->min5 / $data['jarak'])), 2);

        return ($hasil / 5) * 100;
    }
}
