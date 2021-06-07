<?php

namespace App\Http\Controllers;

use App\Audio;
use App\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Alert;

class MateriController extends Controller
{
    public function index()
    {
        $materi = Materi::all();
        $total = Materi::count();
        $published = Materi::where('publish', 1)->count();
        $draft = Materi::where('publish', 0)->count();

        return view('materi.index', compact('materi', 'total', 'published', 'draft'));
    }

    public function add()
    {
        return view('materi.add');
    }

    public function store(Request $request)
    {
        $slug = Str::slug($request->title, '-');
        $materi = new Materi();
        $materi->user_id = Auth::id();
        $materi->slug = $slug;
        $materi->title = $request->title;
        $materi->isi = $request->isi;
        if ($request->publish == 'on') {
            $materi->publish = 1;
        } else {
            $materi->publish = 0;
        }

        $path = public_path('uploads/materi/' . $slug);

        if ($request->file('image') != null) {
            $image = $request->file('image');
            $materi->image = $image->getClientOriginalName();
            // upload file
            $image->move($path . '/image/', $image->getClientOriginalName());
        }
        $materi->save();

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

        return redirect('backend/materi');
    }

    public function edit($id)
    {
        $materi = Materi::find(decrypt($id));

        $audio = Audio::where('slug', $materi->slug)->get();

        $category = ['a', 'i', 'u', 'e', 'o'];

        return view('materi.edit', compact('materi', 'audio', 'category'));
    }

    public function update($id, Request $request)
    {
        $slug = Str::slug($request->title, '-');
        $materi = Materi::find(decrypt($id));
        $materi->user_id = Auth::id();
        $materi->slug = $slug;
        $materi->title = $request->title;
        $materi->isi = $request->isi;
        if ($request->publish == 'on') {
            $materi->publish = 1;
        } else {
            $materi->publish = 0;
        }

        $path = public_path('uploads/materi/' . $slug);

        if ($request->file('image') != null) {
            $image = $request->file('image');
            $materi->image = $image->getClientOriginalName();
            // upload file
            $image->move($path . '/image/', $image->getClientOriginalName());
        }
        $materi->save();


        //upload audio
        if (!empty($request->audio)) {
            foreach ($request->audio as $key => $audio) {
                $audio_db = Audio::find($request->id_audio[$key]);
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

        Alert::success('success', 'Data berhasil diubah');
        return redirect('backend/materi');
    }

    public function destroy($id)
    {
        $materi = Materi::destroy(decrypt($id));

        if ($materi) {
            return redirect('backend/materi');
        }
    }
}
