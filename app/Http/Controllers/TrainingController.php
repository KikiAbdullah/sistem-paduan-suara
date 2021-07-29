<?php

namespace App\Http\Controllers;

use App\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index()
    {
        $training = Training::all();
        return view('training.index', compact('training'));
    }

    public function add()
    {
        return view('training.add');
    }

    public function store(Request $request)
    {
        try {
            $training = new Training();
            $training->pitch = $request->pitch;
            $training->jenis_kelamin = $request->jenis_kelamin;
            $training->c = $request->c;
            $training->f = $request->f;
            $training->b = $request->b;
            $training->e = $request->e;
            $training->suara = $request->suara;
            $training->save();

            return redirect('backend/training');
        } catch (\Throwable $th) {
            return redirect('backend/training');
        }
    }

    public function edit($id)
    {
        $training = Training::find(decrypt($id));

        return view('training.edit', compact('training'));
    }

    public function update($id, Request $request)
    {
        try {
            $training = Training::find(decrypt($id));
            $training->pitch = $request->pitch;
            $training->jenis_kelamin = $request->jenis_kelamin;
            $training->c = $request->c;
            $training->f = $request->f;
            $training->b = $request->b;
            $training->e = $request->e;
            $training->suara = $request->suara;
            $training->save();

            return redirect('backend/training');
        } catch (\Throwable $th) {
            return redirect('backend/training');
        }
    }

    public function destroy($id)
    {
        $training = Training::destroy(decrypt($id));

        return redirect('backend/training');
    }
}
