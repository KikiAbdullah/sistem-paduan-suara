<?php

namespace App\Http\Controllers;

use App\KriteriaSmart;
use Illuminate\Http\Request;

class KriteriaSmartController extends Controller
{
    public function index()
    {
        $kriteria_smart = KriteriaSmart::all();
        return view('kriteria_smart.index', compact('kriteria_smart'));
    }

    public function add()
    {
        return view('kriteria_smart.add');
    }

    public function store(Request $request)
    {
        try {
            $kriteria_smart = new KriteriaSmart();
            $kriteria_smart->nama = $request->nama;
            $kriteria_smart->keterangan = $request->keterangan;
            $kriteria_smart->save();

            return redirect('backend/kriteria_smart');
        } catch (\Throwable $th) {
            return redirect('backend/kriteria_smart');
        }
    }

    public function edit($id)
    {
        $kriteria_smart = KriteriaSmart::find(decrypt($id));

        return view('kriteria_smart.edit', compact('kriteria_smart'));
    }

    public function update($id, Request $request)
    {
        try {
            $kriteria_smart = KriteriaSmart::find(decrypt($id));
            $kriteria_smart->nama = $request->nama;
            $kriteria_smart->keterangan = $request->keterangan;
            $kriteria_smart->save();

            return redirect('backend/kriteria_smart');
        } catch (\Throwable $th) {
            return redirect('backend/kriteria_smart');
        }
    }

    public function destroy($id)
    {
        $kriteria_smart = KriteriaSmart::destroy(decrypt($id));

        return redirect('backend/kriteria_smart');
    }
}
