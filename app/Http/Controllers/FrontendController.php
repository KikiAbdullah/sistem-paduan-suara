<?php

namespace App\Http\Controllers;

use App\Audio;
use App\Jenis_suara;
use App\Materi;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
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
        $questions = Question::select('questions.id as id_quest', 'kriteria', 'question', 'jenis_suara.nama as jenis_suara', 'kriteria_id')
            ->join('kriteria_smart', 'questions.kriteria_id', 'kriteria_smart.id')
            ->join('jenis_suara', 'questions.jenis_suara_id', 'jenis_suara.id')
            ->where('show', 1)
            ->orderBy('jenis_suara', 'asc')->get();

        $jenis_suara = Jenis_suara::all();

        foreach ($jenis_suara as $key => $value) {
            $suara[] = $value['id'];
        }
        $class_audio = new Audio;

        return view('frontend.uji.index', compact('questions', 'class_audio', 'suara'));
    }

    public function hasil_uji()
    {
        $hasil = Session::get('hasil');

        if (!empty($hasil)) {
            return redirect('uji');
        } else {
            return view('frontend.uji.hasil', compact('hasil'));
        }
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
