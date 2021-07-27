<?php

namespace App\Http\Controllers;

use App\Jenis_suara;
use Illuminate\Http\Request;

class JenisSuaraController extends Controller
{
    public function index()
    {
        $jenis_suara = Jenis_suara::all();
        return view('jenis_suara.index', compact('jenis_suara'));
    }

    public function add()
    {
        return view('jenis_suara.add');
    }

    public function store(Request $request)
    {
        try {
            $jenis_suara = new Jenis_suara();
            $jenis_suara->nama = $request->nama;
            $jenis_suara->keterangan = $request->keterangan;
            $jenis_suara->save();

            return redirect('backend/jenis_suara');
        } catch (\Throwable $th) {
            return redirect('backend/jenis_suara');
        }
    }

    public function edit($id)
    {
        $jenis_suara = Jenis_suara::find(decrypt($id));

        return view('jenis_suara.edit', compact('jenis_suara'));
    }

    public function update($id, Request $request)
    {
        try {
            $jenis_suara = Jenis_suara::find(decrypt($id));
            $jenis_suara->nama = $request->nama;
            $jenis_suara->keterangan = $request->keterangan;
            $jenis_suara->save();

            return redirect('backend/jenis_suara');
        } catch (\Throwable $th) {
            return redirect('backend/jenis_suara');
        }
    }

    public function destroy($id)
    {
        $jenis_suara = Jenis_suara::destroy(decrypt($id));

        return redirect('backend/jenis_suara');
    }
}
