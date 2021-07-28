<?php

namespace App\Http\Controllers;

use App\Audio;
use App\Jenis_suara;
use App\KriteriaSmart;
use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::select('questions.id as id_quest', 'kriteria', 'question', 'jenis_suara.nama as jenis_suara')
            ->join('kriteria_smart', 'questions.kriteria_id', 'kriteria_smart.id')
            ->join('jenis_suara', 'questions.jenis_suara_id', 'jenis_suara.id')->get();

        return view('question.index', compact('questions'));
    }

    public function add()
    {
        $kriteria = KriteriaSmart::all();
        $jenis_suara = Jenis_suara::all();
        return view('question.add', compact('kriteria', 'jenis_suara'));
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
        $question->jenis_suara_id = $request->jenis_suara_id;
        $question->show = $show;
        $question->question = $request->question;
        $question->save();


        //cari id
        $quest = Question::where('question', $request->question)->first();
        $slug = 'question-' . $quest['id'];

        $path = public_path('uploads/question/' . $slug);

        //upload audio
        if (!empty($request->audio)) {
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
        }


        return redirect('backend/question');
    }

    public function edit($id)
    {
        $kriteria = KriteriaSmart::all();
        $jenis_suara = Jenis_suara::all();


        $question = Question::find(decrypt($id));

        $audio = Audio::where('slug', 'question-' . decrypt($id))->get();

        $category = ['a', 'i', 'u', 'e', 'o'];

        return view('question.edit', compact('question', 'audio', 'category', 'kriteria', 'jenis_suara'));
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
            $question->jenis_suara_id = $request->jenis_suara_id;
            $question->show = $show;
            $question->question = $request->question;

            //cari id
            $quest = Question::where('question', $request->question)->first();
            $slug = 'question-' . $quest['id'];

            $path = public_path('uploads/question/' . $slug);


            if (!empty($request->audio)) {
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
            }

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
