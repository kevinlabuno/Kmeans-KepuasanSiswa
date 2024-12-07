@extends('layouts.app')
@section('content')

<div class="card">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (Auth::user()->jabatan == 'Staf')
        <div class="card-body">
            <h5 class="card-title">Tambah Data Kelas</h5>
            <form action="{{route('kelas.store')}}" method="POST">
                @csrf
                <div class="row mb-3">
                    <label for="namaKelas" class="col-sm-2 col-form-label">Nama Kelas</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_kelas" class="form-control" id="namaKelas">
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    @endif

    <div class="card-body">
        <h3 class="card-title text-center">Data Kelas</h3>
        <table id="dataset1" class="table">
            <thead>
                <tr class="table-warning">
                    <th scope="col">No</th>
                    <th scope="col">Nama Kelas</th>
                    <th scope="col">Hapus</th>
                </tr>
            </thead>
            @php
                {{$no=1;}}
            @endphp
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>{{ $item->nama_kelas }}</td>
                    <td>
                        <form action="{{ route('kelas.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
