<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;

class BerandaController extends Controller
{
    public function upload(){
        return view('upload');
    }

    public function upload_data(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'csv_file' => 'required|mimes:csv,txt',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('csv_file')) {
            $file = $request->file('csv_file');
            $data = array_map('str_getcsv', file($file));

            foreach ($data as $index => $row) {
                if ($index == 0) {
                    continue;
                }

                $total = array_sum(array_slice($row, 3, 10));

                Data::create([
                    'nama' => $row[0],
                    'kelas' => $row[1],
                    'jenis' => $row[2],
                    'c1' => $row[3],
                    'c2' => $row[4],
                    'c3' => $row[5],
                    'c4' => $row[6],
                    'c5' => $row[7],
                    'c6' => $row[8],
                    'c7' => $row[9],
                    'c8' => $row[10],
                    'c9' => $row[11],
                    'c10' => $row[12],
                    'total' => $total,
                    'c' => null,
                ]);
            }

            return redirect()->route('dataset')->with('success', 'Dataset Berhasil Diunggah');
        }

        return redirect()->route('dataset')->with('error', 'Gagal Mengunggah Dataset');
    }
}
