<?php

namespace App\Http\Controllers;

use App\Audio;
use App\KriteriaSmart;
use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::join('kriteria_smart', 'questions.kriteria_id', 'kriteria_smart.id')->get();

        return view('question.index', compact('questions'));
    }

    public function add()
    {
        $kriteria = KriteriaSmart::all();
        return view('question.add', compact('kriteria'));
    }

    public function store(Request $request)
    {
        $question = new Question();
        if ($request->show == 'on') {
            $show = 1;
        } else {
            $show = 0;
        }

        $question->kriteria_id = $request->kriteria_id;
        $question->show = $show;
        $question->question = $request->question;
        $question->save();


        //cari id
        $quest = Question::where('question', $request->question)->first();
        $slug = 'question-' . $quest['id'];

        $path = public_path('uploads/question/' . $slug);

        //upload audio
        foreach ($request->audio as $key => $audio) {
            $audio_db = new Audio();
            $audio_db->title = 'Audio ' . $key;
            $audio_db->slug = $slug;
            $audio_db->vocal = $key;
            if ($audio != null) {
                $audio_db->audio = $audio->getClientOriginalName();
                // upload file
                $audio->move($path . '/audio/', $audio->getClientOriginalName());
            } else {
                $audio_db->audio = null;
            }
            $audio_db->save();
        }

        return redirect('backend/question');
    }

    public function edit($id)
    {
        $kriteria = KriteriaSmart::all();

        $question = Question::find(decrypt($id));

        $audio = Audio::where('slug', 'question-' . decrypt($id))->get();

        $category = ['a', 'i', 'u', 'e', 'o'];

        return view('question.edit', compact('question', 'audio', 'category', 'kriteria'));
    }

    public function update($id, Request $request)
    {
        try {
            $question = Question::find(decrypt($id));
            if ($request->show == 'on') {
                $show = 1;
            } else {
                $show = 0;
            }

            $question->kriteria_id = $request->kriteria_id;
            $question->show = $show;
            $question->question = $request->question;
            $question->save();

            return redirect('backend/question');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function destroy($id)
    {
        $question = Question::destroy(decrypt($id));

        return redirect('backend/question');
    }
}
