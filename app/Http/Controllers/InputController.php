<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\Jawaban;
use Illuminate\Support\Facades\DB;

class InputController extends Controller
{
    public function index(){
        return view('input');
    }

    public function algoritma(){
        return view('algoritma');
    }

    public function datainput(){
         $data1 = DB::table('data')->orderBy('created_at', 'desc')->first();
        $data2 = DB::table('jawaban')->orderBy('created_at', 'desc')->first();
        return view('datainput',compact('data1','data2'));
    }

public function post(Request $request) {
    $validatedData = $request->validate([
        'nama' => 'required|string|max:255',
        'kelas' => 'required|string|max:255',
        'jenis' => 'required|string|max:255',
        'p1' => 'required|string',
        'p2' => 'required|string',
        'p3' => 'required|string',
        'p4' => 'required|string',
        'p5' => 'required|string',
        'p6' => 'required|string',
        'p7' => 'required|string',
        'p8' => 'required|string',
        'p9' => 'required|string',
        'p10' => 'required|string',
    ]);

    // Konversi nilai untuk tabel 'data'
    $konversi = [
        'Tidak Puas' => 1,
        'Cukup Puas' => 2,
        'Sangat Puas' => 3
    ];

    $data = new Data();
    $data->nama = $request->nama;
    $data->kelas = $request->kelas;
    $data->jenis = $request->jenis;
    $data->c1 = $konversi[$request->p1];
    $data->c2 = $konversi[$request->p2];
    $data->c3 = $konversi[$request->p3];
    $data->c4 = $konversi[$request->p4];
    $data->c5 = $konversi[$request->p5];
    $data->c6 = $konversi[$request->p6];
    $data->c7 = $konversi[$request->p7];
    $data->c8 = $konversi[$request->p8];
    $data->c9 = $konversi[$request->p9];
    $data->c10 = $konversi[$request->p10];
    $data->total = array_sum([$data->c1, $data->c2, $data->c3, $data->c4, $data->c5, $data->c6, $data->c7, $data->c8, $data->c9, $data->c10]);
    $data->cluster = '';
    $data->cluster2 = '';
    $data->save();

    $jawaban = new Jawaban();
    $jawaban->nama = $request->nama;
    $jawaban->kelas = $request->kelas;
    $jawaban->jenis = $request->jenis;
    $jawaban->c1 = $request->p1;
    $jawaban->c2 = $request->p2;
    $jawaban->c3 = $request->p3;
    $jawaban->c4 = $request->p4;
    $jawaban->c5 = $request->p5;
    $jawaban->c6 = $request->p6;
    $jawaban->c7 = $request->p7;
    $jawaban->c8 = $request->p8;
    $jawaban->c9 = $request->p9;
    $jawaban->c10 = $request->p10;
     $jawaban->total = $data->total;
    $jawaban->save();

    $this->proses();

    return redirect()->route('datainput')->with('success', 'Data berhasil disimpan. Terima Kasih');
}

public function proses() {
    $data = Data::all();

    $totals = DB::table('data')->pluck('total')->toArray();
    sort($totals);

    $minTotal = 19;
    $middleTotal = 25;
    $maxTotal = 30;

    $c1Data = DB::table('data')->where('total', $minTotal)->first();
    $c2Data = DB::table('data')->where('total', $middleTotal)->first();
    $c3Data = DB::table('data')->where('total', $maxTotal)->first();

    $dataKonversi = DB::table('data')->get();

    $jarak = [];

    foreach ($dataKonversi as $datas) {
        $jarakC1 = sqrt(pow($datas->c1 - $c1Data->c1, 2) +
                        pow($datas->c2 - $c1Data->c2, 2) +
                        pow($datas->c3 - $c1Data->c3, 2) +
                        pow($datas->c4 - $c1Data->c4, 2) +
                        pow($datas->c5 - $c1Data->c5, 2) +
                        pow($datas->c6 - $c1Data->c6, 2) +
                        pow($datas->c7 - $c1Data->c7, 2) +
                        pow($datas->c8 - $c1Data->c8, 2) +
                        pow($datas->c9 - $c1Data->c9, 2) +
                        pow($datas->c10 - $c1Data->c10, 2));

        $jarakC2 = sqrt(pow($datas->c1 - $c2Data->c1, 2) +
                        pow($datas->c2 - $c2Data->c2, 2) +
                        pow($datas->c3 - $c2Data->c3, 2) +
                        pow($datas->c4 - $c2Data->c4, 2) +
                        pow($datas->c5 - $c2Data->c5, 2) +
                        pow($datas->c6 - $c2Data->c6, 2) +
                        pow($datas->c7 - $c2Data->c7, 2) +
                        pow($datas->c8 - $c2Data->c8, 2) +
                        pow($datas->c9 - $c2Data->c9, 2) +
                        pow($datas->c10 - $c2Data->c10, 2));

        $jarakC3 = sqrt(pow($datas->c1 - $c3Data->c1, 2) +
                        pow($datas->c2 - $c3Data->c2, 2) +
                        pow($datas->c3 - $c3Data->c3, 2) +
                        pow($datas->c4 - $c3Data->c4, 2) +
                        pow($datas->c5 - $c3Data->c5, 2) +
                        pow($datas->c6 - $c3Data->c6, 2) +
                        pow($datas->c7 - $c3Data->c7, 2) +
                        pow($datas->c8 - $c3Data->c8, 2) +
                        pow($datas->c9 - $c3Data->c9, 2) +
                        pow($datas->c10 - $c3Data->c10, 2));

        $clusterTerdekat = 'c1';
        $jarakTerdekat = $jarakC1;

        if ($jarakC2 < $jarakTerdekat) {
            $clusterTerdekat = 'c2';
            $jarakTerdekat = $jarakC2;
        }

        if ($jarakC3 < $jarakTerdekat) {
            $clusterTerdekat = 'c3';
            $jarakTerdekat = $jarakC3;
        }

        $jarak[] = [
            'data' => $datas,
            'jarakC1' => $jarakC1,
            'jarakC2' => $jarakC2,
            'jarakC3' => $jarakC3,
            'clusterTerdekat' => $clusterTerdekat,
        ];

        DB::table('data')
            ->where('id', $datas->id)
            ->update(['cluster' => $clusterTerdekat]);
             DB::table('jawaban')
            ->where('id', $datas->id)
            ->update(['cluster' => $clusterTerdekat]);
    }

    // --------------------------------------------------------------------------------------

    // ---------------------------------------------------------------------------------------

    // ---------------ITERASI II-----------Centroid Baru------PROSES 1- SAMPAI SETERUSNYA--------------
    $jumlah = Data::all()->count();
    $data2 = Data::all();

    $cluster1 = 'c1';
    $cluster2 = 'c2';
    $cluster3 = 'c3';

    $centroid1 = DB::table('data')
        ->select(
            DB::raw('ROUND(SUM(c1) / COUNT(c1), 2) AS rata_c1'),
            DB::raw('ROUND(SUM(c2) / COUNT(c2), 2) AS rata_c2'),
            DB::raw('ROUND(SUM(c3) / COUNT(c3), 2) AS rata_c3'),
            DB::raw('ROUND(SUM(c4) / COUNT(c4), 2) AS rata_c4'),
            DB::raw('ROUND(SUM(c5) / COUNT(c5), 2) AS rata_c5'),
            DB::raw('ROUND(SUM(c6) / COUNT(c6), 2) AS rata_c6'),
            DB::raw('ROUND(SUM(c7) / COUNT(c7), 2) AS rata_c7'),
            DB::raw('ROUND(SUM(c8) / COUNT(c8), 2) AS rata_c8'),
            DB::raw('ROUND(SUM(c9) / COUNT(c9), 2) AS rata_c9'),
            DB::raw('ROUND(SUM(c10) / COUNT(c10), 2) AS rata_c10')
        )
        ->where('cluster', $cluster1)
        ->first();

    $centroid2 = DB::table('data')
        ->select(
            DB::raw('ROUND(SUM(c1) / COUNT(c1), 2) AS rata_c1'),
            DB::raw('ROUND(SUM(c2) / COUNT(c2), 2) AS rata_c2'),
            DB::raw('ROUND(SUM(c3) / COUNT(c3), 2) AS rata_c3'),
            DB::raw('ROUND(SUM(c4) / COUNT(c4), 2) AS rata_c4'),
            DB::raw('ROUND(SUM(c5) / COUNT(c5), 2) AS rata_c5'),
            DB::raw('ROUND(SUM(c6) / COUNT(c6), 2) AS rata_c6'),
            DB::raw('ROUND(SUM(c7) / COUNT(c7), 2) AS rata_c7'),
            DB::raw('ROUND(SUM(c8) / COUNT(c8), 2) AS rata_c8'),
            DB::raw('ROUND(SUM(c9) / COUNT(c9), 2) AS rata_c9'),
            DB::raw('ROUND(SUM(c10) / COUNT(c10), 2) AS rata_c10')
        )
        ->where('cluster', $cluster2)
        ->first();

    $centroid3 = DB::table('data')
        ->select(
            DB::raw('ROUND(SUM(c1) / COUNT(c1), 2) AS rata_c1'),
            DB::raw('ROUND(SUM(c2) / COUNT(c2), 2) AS rata_c2'),
            DB::raw('ROUND(SUM(c3) / COUNT(c3), 2) AS rata_c3'),
            DB::raw('ROUND(SUM(c4) / COUNT(c4), 2) AS rata_c4'),
            DB::raw('ROUND(SUM(c5) / COUNT(c5), 2) AS rata_c5'),
            DB::raw('ROUND(SUM(c6) / COUNT(c6), 2) AS rata_c6'),
            DB::raw('ROUND(SUM(c7) / COUNT(c7), 2) AS rata_c7'),
            DB::raw('ROUND(SUM(c8) / COUNT(c8), 2) AS rata_c8'),
            DB::raw('ROUND(SUM(c9) / COUNT(c9), 2) AS rata_c9'),
            DB::raw('ROUND(SUM(c10) / COUNT(c10), 2) AS rata_c10')
        )
        ->where('cluster', $cluster3)
        ->first();

    $data2 = DB::table('data')->get();

    $jarak = [];

    foreach ($data2 as $datas) {
        $jarakC1 = sqrt(pow($datas->c1 - $centroid1->rata_c1, 2) +
            pow($datas->c2 - $centroid1->rata_c2, 2) +
            pow($datas->c3 - $centroid1->rata_c3, 2) +
            pow($datas->c4 - $centroid1->rata_c4, 2) +
            pow($datas->c5 - $centroid1->rata_c5, 2) +
            pow($datas->c6 - $centroid1->rata_c6, 2) +
            pow($datas->c7 - $centroid1->rata_c7, 2) +
            pow($datas->c8 - $centroid1->rata_c8, 2) +
            pow($datas->c9 - $centroid1->rata_c9, 2) +
            pow($datas->c10 - $centroid1->rata_c10, 2));

        $jarakC2 = sqrt(pow($datas->c1 - $centroid2->rata_c1, 2) +
            pow($datas->c2 - $centroid2->rata_c2, 2) +
            pow($datas->c3 - $centroid2->rata_c3, 2) +
            pow($datas->c4 - $centroid2->rata_c4, 2) +
            pow($datas->c5 - $centroid2->rata_c5, 2) +
            pow($datas->c6 - $centroid2->rata_c6, 2) +
            pow($datas->c7 - $centroid2->rata_c7, 2) +
            pow($datas->c8 - $centroid2->rata_c8, 2) +
            pow($datas->c9 - $centroid2->rata_c9, 2) +
            pow($datas->c10 - $centroid2->rata_c10, 2));

        $jarakC3 = sqrt(pow($datas->c1 - $centroid3->rata_c1, 2) +
            pow($datas->c2 - $centroid3->rata_c2, 2) +
            pow($datas->c3 - $centroid3->rata_c3, 2) +
            pow($datas->c4 - $centroid3->rata_c4, 2) +
            pow($datas->c5 - $centroid3->rata_c5, 2) +
            pow($datas->c6 - $centroid3->rata_c6, 2) +
            pow($datas->c7 - $centroid3->rata_c7, 2) +
            pow($datas->c8 - $centroid3->rata_c8, 2) +
            pow($datas->c9 - $centroid3->rata_c9, 2) +
            pow($datas->c10 - $centroid3->rata_c10, 2));

        $clusterTerdekat = 'c1';
        $jarakTerdekat = $jarakC1;

        if ($jarakC2 < $jarakTerdekat) {
            $clusterTerdekat = 'c2';
            $jarakTerdekat = $jarakC2;
        }

        if ($jarakC3 < $jarakTerdekat) {
            $clusterTerdekat = 'c3';
            $jarakTerdekat = $jarakC3;
        }

        $jarak[] = [
            'data' => $datas,
            'jarakC1' => $jarakC1,
            'jarakC2' => $jarakC2,
            'jarakC3' => $jarakC3,
            'clusterTerdekat' => $clusterTerdekat,
        ];

        DB::table('data')
            ->where('id', $datas->id)
            ->update(['cluster2' => $clusterTerdekat]);
        DB::table('jawaban')
            ->where('id', $datas->id)
            ->update(['cluster2' => $clusterTerdekat]);
    }
}

}
