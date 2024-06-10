@extends('layouts.app')

@section('content')

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            @if (session('success'))
                <div class="alert alert-primary">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Unggah Dataset</h5>

                    <form method="POST" action="{{ route('upload.data') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="file" class="col-sm-2 col-form-label">Unggah Dataset Siswa</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="file" name="csv_file">
                            </div>
                        </div>

                        <div class="text-left text-danger">
                            <button type="submit" class="btn btn-danger btn-lg">Simpan</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection
