<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\User;
use App\Models\Jawaban;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Kelas;

class BerandaController extends Controller
{

    public function beranda(){
        return view('welcome');
    }

    public function dataguru(){
        $data = User::all();
        return view('dataguru',compact('data'));
    }
    
    public function hapus_dataguru($id)
{
    // Cari user berdasarkan ID
    $user = User::find($id);

    // Jika user ditemukan, hapus data
    if ($user) {
        $user->delete();
        return redirect()->route('dataguru')->with('success', 'Data guru berhasil dihapus');
    } else {
        return redirect()->route('dataguru')->withErrors(['Data guru tidak ditemukan']);
    }
}

    public function datasiswa(){
        
          $user = Auth::user()->nama;
          $data = Data::all();
          $data2 = Jawaban::where('guru',$user)->get();
        return view('datasiswa',compact('data','data2'));
    }

    public function post_dataguru(Request $request){
    // Validasi input
    $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string',
        'jabatan' => 'required|string|max:255',
    ]);

    // Simpan data
    $data = new User;
    $data->nama = $request->nama;
    $data->email = $request->email;
    $data->password = bcrypt($request->password);
    $data->jabatan = $request->jabatan;
    $data->save();

    return redirect()->back()->with('success','Data Guru Berhasil Disimpan.');
}

    public function upload(){
        return view('Upload');
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
            
            Data::truncate();
            Jawaban::truncate();
 
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
    
        public function indexkelas()
    {
        $data = Kelas::all(); // Ambil semua data kelas
        return view('kelas', compact('data')); // Tampilkan ke view
    }

    // Menyimpan data kelas
    public function storekelas(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama_kelas' => 'required|string|max:255',
        ]);

        // Buat data kelas baru
        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
        ]);

        return redirect()->route('kelas.index')->with('success', 'Data kelas berhasil ditambahkan');
    }

    // Menghapus data kelas
    public function destroykelas($id)
    {
        $kelas = Kelas::find($id);

        if ($kelas) {
            $kelas->delete();
            return redirect()->route('kelas.index')->with('success', 'Data kelas berhasil dihapus');
        } else {
            return redirect()->route('kelas.index')->withErrors(['Data kelas tidak ditemukan']);
        }
    }
}
