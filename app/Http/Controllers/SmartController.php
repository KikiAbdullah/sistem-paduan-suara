<?php

namespace App\Http\Controllers;

use App\Jenis_suara;
use App\Normalisasi;
use App\Pembobotan;
use App\Question;
use Illuminate\Http\Request;

class SmartController extends Controller
{
    public function proses(Request $request)
    {
        // dd($request);
        $bobot = 0;
        $jml_quest = Question::count();
        for ($i = 0; $i < $jml_quest; $i++) {
            $pembobotan = new Pembobotan();
            $pembobotan->jenis_suara = $request->jenis_suara[$i];
            $pembobotan->kriteria = $request->kriteria[$i];
            $pembobotan->total = $request->bobot[$i];
            $pembobotan->save();
        }

        $this->normalisasi();
        $hasil = $this->ranking();

        return view('frontend.uji.hasil', compact('hasil'));
    }

    public function normalisasi()
    {
        $total = Pembobotan::groupBy('kriteria')
            ->selectRaw('sum(total) as sum, kriteria')
            ->pluck('sum', 'kriteria');
        $all = Pembobotan::all();

        foreach ($all as $key => $value) {
            $normalisasi = new Normalisasi();
            $normalisasi->jenis_suara = $value['jenis_suara'];
            $normalisasi->kriteria = $value['kriteria'];
            $normalisasi->total = $value['total'] / $total[$value['kriteria']];
            $normalisasi->save();
        }
    }

    public function ranking()
    {
        $data = Pembobotan::groupBy('jenis_suara')
            ->selectRaw('sum(total) as sum, jenis_suara')
            ->orderBy('sum', 'desc')
            ->pluck('sum', 'jenis_suara');

        return $this->getRanking($data);
    }

    public function getRanking($data)
    {
        $collection = collect($data);
        $data       = $collection;
        $key      = $data->keys()->first();
        $total      = $data->first();
        $value = [
            'jenis_suara' => $key,
            'total' => $total
        ];
        return $value;
    }
}