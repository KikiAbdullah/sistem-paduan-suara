<?php

namespace App\Http\Controllers;

use App\Training;
use Illuminate\Http\Request;

class KnnController extends Controller
{
    public function index()
    {
        $training = Training::all();
        return view('knn.index', compact('training'));
    }

    public function process(Request $request)
    {
        // $dataNada = trim($request->pitch);
        // $dataKelamin = trim($request->kelamin);
        // $dataC = trim($request->c);
        // $dataF = trim($request->f);
        // $dataB = trim($request->b);
        // $dataE = trim($request->e);
        $input['pitch'] = trim($request->pitch);
        $input['jenis_kelamin'] = trim($request->jenis_kelamin);
        $input['c'] = trim($request->c);
        $input['f'] = trim($request->f);
        $input['b'] = trim($request->b);
        $input['e'] = trim($request->e);

        $training = Training::all();
        $hasil = $this->knn($training, $input);
        $nilai = $this->memilah($hasil);

        return view('knn.hasil', compact('hasil', 'nilai', 'training', 'input'));
    }

    public function knn($dataAngka, $input)
    {
        // Menghitung nilai databaru yang sudah dipilih dengan nilai dataset menggunakan rumus jarak encludian
        // dan memasukkan nilai hasil perhitungan kedalam array dataAngka index jarak
        for ($i = 0; $i < count($dataAngka); $i++) {
            $dataAngka[$i]['jarak'] = sqrt(pow($dataAngka[$i]['pitch'] - $input['pitch'], 2) + pow($dataAngka[$i]['jenis_kelamin'] - $input['jenis_kelamin'], 2) + pow($dataAngka[$i]['c'] - $input['c'], 2) + pow($dataAngka[$i]['f'] - $input['f'], 2) + pow($dataAngka[$i]['b'] - $input['b'], 2) + pow($dataAngka[$i]['e'] - $input['e'], 2));
        }
        // Perulangan untuk memasukkan nilai array dataAngka index jarak kedalam array urutan
        for ($i = 0; $i < count($dataAngka); $i++) {
            $urutan[] = $dataAngka[$i]['jarak'];
        }
        // Perulangan untuk memasukkan nilai array dataAngka index jarak kedalam array urut
        for ($i = 0; $i < count($dataAngka); $i++) {
            $urut[] = $dataAngka[$i]['jarak'];
        }

        $a = 0;
        asort($urutan); // Mengurutkan nilai array urutan dengan index tetap
        // Perulangan untuk memasukkan nilai variabel a kedalam array dataAngka index urutan
        // menggunakan index dari array urutan untuk menentukan posisi nilai variabel a yang akan dimasukkan
        // Nilai variabel a akan bertambah terus di setiap perulangan
        foreach ($urutan as $val => $isi) {
            $a += 1;
            $dataAngka[$val]['urutan'] = $a;
        }
        // Perulangan untuk memasukkan nilai array dataAngka index jarak kedalam array gabung index jarak
        // dan memasukkan nilai array dataAngka index jarak kedalam array gabung index urutan
        for ($i = 0; $i < count($dataAngka); $i++) {
            $gabung[$i]['jarak'] = $dataAngka[$i]['jarak'];
            $gabung[$i]['urutan'] = $dataAngka[$i]['urutan'];
        }

        sort($gabung); // Mengurutkan nilai array gabung dengan index tetap
        $b = 1;
        // Mengisi nilai array gabung index urut dengan nilai sesuai urutan dan mengisi nilai sama jika nilai jarak memiliki nilai yang sama
        for ($i = 0; $i < count($dataAngka); $i++) {
            if ($gabung[$i]['jarak'] == $gabung[abs($i - 1)]['jarak']) {
                $gabung[$i]['urut'] = $b;
            } else {
                if ($i < $b) {
                    $gabung[$i]['urut'] = $b;
                    $b += 1;
                } else {
                    $b += 1;
                    $gabung[$i]['urut'] = $b;
                }
            }
        }
        // Memasukkan nilai array gabung index urut kedalam array dataAngka index urut
        $c = 0;
        foreach ($urutan as $val => $isi) {
            $dataAngka[$val]['urut'] = $gabung[$c]['urut'];
            $c += 1;
        }
        // Menentukan nilai terkecil dari index urut
        $terkecil1 = 10;
        for ($i = 0; $i < count($dataAngka); $i++) {
            if ($terkecil1 > $dataAngka[$i]['urut']) {
                $terkecil1 = $dataAngka[$i]['urut'];
            }
        }
        // Mencari dan Mengisi nilai array dataAngka index nn1 jika nilai terkecil samadengan variabel terkecil
        for ($i = 0; $i < count($dataAngka); $i++) {
            if ($terkecil1 == $dataAngka[$i]['urut']) {
                $dataAngka[$i]['nn1'] = 1;
            } else {
                $dataAngka[$i]['nn1'] = 0;
            }
        }
        // Mencari nilai array dataAngka index urut dan Mengisi kedalam array nn jika nilai urut lebihkecil samadengan 3
        foreach ($dataAngka as $key => $value) {
            if ($dataAngka[$key]['urut'] <= 3) {
                $nn[$key] = $dataAngka[$key]['urut'];
            }
        }
        // Mencari nilai array nn dan Mengisi kedalam array nn3 jika isi dari array nn tidak samadengan 3
        foreach ($nn as $key => $value) {
            if (count($nn) != 3) {
                if ($dataAngka[$key]['urut'] <= 3) {
                    $nn3[$key] = $dataAngka[$key]['urut'];
                }
            } else {
                $nn3[$key] = $dataAngka[$key]['urut'];
            }
        }
        // Mengisi nilai 0 kedalam array dataAngka index nn3
        for ($i = 0; $i < count($dataAngka); $i++) {
            $dataAngka[$i]['nn3'] = 0;
        }
        // Memasukkan nilai sesuai index array nn3 kedalam array dataAngka index nn3
        foreach ($nn3 as $key => $value) {
            $dataAngka[$key]['nn3'] = $nn3[$key];
        }



        return $dataAngka;
    }

    public function memilah($dataAngka)
    {
        // Memilah nilai yang paling banyak untuk menentukan nilai nn1
        $nilai['nn1']['sopran'] = 0;
        $nilai['nn1']['alto'] = 0;
        $nilai['nn1']['tenor'] = 0;
        $nilai['nn1']['bass'] = 0;

        for ($i = 0; $i < count($dataAngka); $i++) {
            if ($dataAngka[$i]['nn1'] > 0) {
                if ($dataAngka[$i]['suara'] == 4) {
                    $nilai['nn1']['sopran'] += 1;
                } else  if ($dataAngka[$i]['suara'] == 3) {
                    $nilai['nn1']['alto'] += 1;
                } else  if ($dataAngka[$i]['suara'] == 2) {
                    $nilai['nn1']['tenor'] += 1;
                } else  if ($dataAngka[$i]['suara'] == 1) {
                    $nilai['nn1']['bass'] += 1;
                }
            }
        }
        // Memilah nilai yang paling banyak untuk menentukan nilai nn3
        $nilai['nn3']['sopran'] = 0;
        $nilai['nn3']['alto'] = 0;
        $nilai['nn3']['tenor'] = 0;
        $nilai['nn3']['bass'] = 0;
        for ($i = 0; $i < count($dataAngka); $i++) {
            if ($dataAngka[$i]['nn3'] > 0) {
                if ($dataAngka[$i]['suara'] == 4) {
                    $nilai['nn3']['sopran'] += 1;
                } else  if ($dataAngka[$i]['suara'] == 3) {
                    $nilai['nn3']['alto'] += 1;
                } else  if ($dataAngka[$i]['suara'] == 2) {
                    $nilai['nn3']['tenor'] += 1;
                } else  if ($dataAngka[$i]['suara'] == 1) {
                    $nilai['nn3']['bass'] += 1;
                }
            }
        }

        return $nilai;
    }
}
