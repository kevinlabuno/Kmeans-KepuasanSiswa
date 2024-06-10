<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use Illuminate\Support\Facades\DB;

class PerhitunganController extends Controller
{
    public function dataset(){
        $data=Data::all();
        return view('dataset',compact('data'));
    }

    public function proses(){

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
                            pow($datas->c10 - $c1Data->c10, 2) 
                           );

            $jarakC2 = sqrt(pow($datas->c1 - $c2Data->c1, 2) +
                            pow($datas->c2 - $c2Data->c2, 2) +
                            pow($datas->c3 - $c2Data->c3, 2) +
                            pow($datas->c4 - $c2Data->c4, 2) +
                            pow($datas->c5 - $c2Data->c5, 2) +
                            pow($datas->c6 - $c2Data->c6, 2) +
                            pow($datas->c7 - $c2Data->c7, 2) +
                            pow($datas->c8 - $c2Data->c8, 2) +
                            pow($datas->c9 - $c2Data->c9, 2) +
                            pow($datas->c10 - $c2Data->c10, 2) 
                           );

            $jarakC3 = sqrt(pow($datas->c1 - $c3Data->c1, 2) +
                            pow($datas->c2 - $c3Data->c2, 2) +
                            pow($datas->c3 - $c3Data->c3, 2) +
                            pow($datas->c4 - $c3Data->c4, 2) +
                            pow($datas->c5 - $c3Data->c5, 2) +
                            pow($datas->c6 - $c3Data->c6, 2) +
                            pow($datas->c7 - $c3Data->c7, 2) +
                            pow($datas->c8 - $c3Data->c8, 2) +
                            pow($datas->c9 - $c3Data->c9, 2) +
                            pow($datas->c10 - $c3Data->c10, 2)
                           );


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

    )->where('cluster', $cluster1)->first();

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
    )->where('cluster', $cluster2)->first();

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
    )->where('cluster', $cluster3)->first();


        $dataKonversi = DB::table('data')->get();

        $jarak2 = [];

        foreach ($dataKonversi as $datass) {
        $jarak2C1 = sqrt(
        pow($datass->c1 - $centroid1->rata_c1, 2) +
        pow($datass->c2 - $centroid1->rata_c2, 2) +
        pow($datass->c3 - $centroid1->rata_c3, 2) +
        pow($datass->c4 - $centroid1->rata_c4, 2) +
        pow($datass->c5 - $centroid1->rata_c5, 2) +
        pow($datass->c6 - $centroid1->rata_c6, 2) +
        pow($datass->c7 - $centroid1->rata_c7, 2) +
        pow($datass->c8 - $centroid1->rata_c8, 2) +
        pow($datass->c9 - $centroid1->rata_c9, 2) +
        pow($datass->c10 - $centroid1->rata_c10, 2) 
         );

        $jarak2C2 = sqrt(
        pow($datass->c1 - $centroid2->rata_c1, 2) +
        pow($datass->c2 - $centroid2->rata_c2, 2) +
        pow($datass->c3 - $centroid2->rata_c3, 2) +
        pow($datass->c4 - $centroid2->rata_c4, 2) +
        pow($datass->c5 - $centroid2->rata_c5, 2) +
        pow($datass->c6 - $centroid2->rata_c6, 2) +
        pow($datass->c7 - $centroid2->rata_c7, 2) +
        pow($datass->c8 - $centroid2->rata_c8, 2) +
        pow($datass->c9 - $centroid2->rata_c9, 2) +
        pow($datass->c10 - $centroid2->rata_c10, 2)
        );

        $jarak2C3 = sqrt(
        pow($datass->c1 - $centroid3->rata_c1, 2) +
        pow($datass->c2 - $centroid3->rata_c2, 2) +
        pow($datass->c3 - $centroid3->rata_c3, 2) +
        pow($datass->c4 - $centroid3->rata_c4, 2) +
        pow($datass->c5 - $centroid3->rata_c5, 2) +
        pow($datass->c6 - $centroid3->rata_c6, 2) +
        pow($datass->c7 - $centroid3->rata_c7, 2) +
        pow($datass->c8 - $centroid3->rata_c8, 2) +
        pow($datass->c9 - $centroid3->rata_c9, 2) +
        pow($datass->c10 - $centroid3->rata_c10, 2) 
        );

        $clusterTerdekat2 = 'c1';
        $jarakTerdekat2 = $jarak2C1;

        if ($jarak2C2 < $jarakTerdekat2) {
        $clusterTerdekat2 = 'c2';
        $jarakTerdekat2 = $jarak2C2;
        }

        if ($jarak2C3 < $jarakTerdekat2) {
        $clusterTerdekat2 = 'c3';
        $jarakTerdekat2 = $jarak2C3;
         }

         $jarak2[] = [
        'data2' => $datass,
        'jarak2C1' => $jarak2C1,
        'jarak2C2' => $jarak2C2,
        'jarak2C3' => $jarak2C3,
        'clusterTerdekat2' => $clusterTerdekat2,
            ];

        DB::table('data')
        ->where('id', $datass->id)
        ->update(['cluster2' => $clusterTerdekat2]);


        }
        
        dd ($centroid1, $centroid2, $centroid3, $clusterTerdekat, $c1Data, $c2Data, $c2Data, $jumlah, $minTotal, $maxTotal, $middleTotal, $jarak, $jarak2);
        return view('dataset',compact('centroid1','centroid2','centroid3','data'
        ,'clusterTerdekat','data2','jumlah','minTotal'
        ,'maxTotal','middleTotal','c1Data','c2Data','c3Data','jarak','jarak2'));
    }

}
