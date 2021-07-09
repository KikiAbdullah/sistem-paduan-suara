<?php

namespace App\Http\Controllers;

use App\Audio;
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
        $questions = Question::where('show', 1)->get();
        $class_audio = new Audio;

        return view('frontend.uji.index', compact('questions', 'class_audio'));
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
