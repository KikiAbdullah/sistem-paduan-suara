<?php

namespace App\Http\Controllers;

use App\Audio;
use App\Materi;
use App\Question;
use Illuminate\Http\Request;

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
}
