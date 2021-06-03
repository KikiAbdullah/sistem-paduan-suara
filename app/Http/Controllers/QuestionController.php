<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();

        return view('question.index', compact('questions'));
    }

    public function add()
    {
        return view('question.add');
    }

    public function store(Request $request)
    {
        $question = new Question();
        if ($request->show == 'on') {
            $show = 1;
        } else {
            $show = 0;
        }

        $question->show = $show;
        $question->question = $request->question;
        $question->save();

        return redirect('backend/question');
    }

    public function edit($id)
    {
        $question = Question::find(decrypt($id));

        return view('question.edit', compact('question'));
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
