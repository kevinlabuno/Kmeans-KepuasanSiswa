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
              <h5 class="card-title">Tambah Data Guru/Pengguna</h5>
              <!-- Horizontal Form -->
              <form action="{{route('post.dataguru')}}" method="POST">
                @csrf
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="inputText">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Jabatan</label>
                  <div class="col-sm-10">
                    <select name="jabatan" id="jabatan" class="form-control">
                        <option value="">Pilih Jabatan</option>
                        <option value="Guru">Guru</option>
                        <option value="Staf">Staf</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword">
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
        @endif
        <div class="card-body">
            <h3 class="card-title text-center">Data Guru / Pengguna</h3>
            <table id="dataset1" class="table">
                <thead>
                    <tr class="table-warning">
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Email</th>
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
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->jabatan }}</td>
                        <td>{{ $item->email }}</td>
                        <td>                        <form action="{{ route('hapus.dataguru', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form></td>
                    </tr>                          
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection