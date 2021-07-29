<?php

namespace App\Http\Controllers;

use App\Audio;
use App\Jenis_suara;
use App\Materi;
use App\Question;
use App\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public function __construct()
    {
        $this->knn = new KnnController();
    }
    public function home()
    {
        return view('frontend.home');
    }

    public function test()
    {
        return view('frontend.test');
    }

    public function materi()
    {
        $materi = Materi::where('publish', 1)->get();
        return view('frontend.materi.index', compact('materi'));
    }

    public function materi_detail($slug)
    {
        $materi = Materi::where('slug', $slug)->first();
        $audio = Audio::where('slug', $slug)->get();
        return view('frontend.materi.detail', compact('materi', 'audio'));
    }

    public function uji()
    {

        return view('frontend.uji.index');
    }

    public function uji_proses(Request $request)
    {
        $input['pitch'] = trim($request->pitch);
        $input['jenis_kelamin'] = trim($request->jenis_kelamin);
        $input['c'] = trim($request->c);
        $input['f'] = trim($request->f);
        $input['b'] = trim($request->b);
        $input['e'] = trim($request->e);

        $training = Training::all();
        $hasil = $this->knn->knn($training, $input);
        $nilai = $this->knn->memilah($hasil);

        $hasil_uji = $this->knn->hasil_uji($nilai, $training, $input);

        return view('frontend.uji.hasil', compact('hasil_uji'));
    }

    public function daftar_anggota()
    {
        return view('frontend.daftar.index');
    }

    public function hasil_daftar()
    {
        $hasil = Session::get('msg');

        if (empty($hasil)) {
            return redirect('klasifikasi');
        } else {
            return view('frontend.daftar.hasil', compact('hasil'));
        }
    }
}
