@extends('layouts.app')
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <!-- Add Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@section('content')
    <div class="card-body">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#descriptionModal">
            Lihat Deskripsi
        </button>
        <h3 class="card-title text-center">Data Siswa</h3>
        
         @if (Auth::user()->jabatan == 'Staf');
        <table id="data" class="table">
            <thead>
                <tr class="table-warning">
                    <th scope="col">No</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Cluster</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $item)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $item->kelas }}</td>
                        <td>{{ $item->jenis }}</td>
                        <td>{{ $item->cluster }}</td>
                    </tr>                          
                @endforeach
            </tbody>
        </table>
         @endif
         
         @if (Auth::user()->jabatan == 'Guru');
        
        <table id="data" class="table">
            <thead>
                <tr class="table-warning">
                    <th scope="col">No</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Cluster</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data2 as $index => $item)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $item->kelas }}</td>
                        <td>{{ $item->jenis }}</td>
                        <td>{{ $item->cluster }}</td>
                    </tr>                          
                @endforeach
            </tbody>
        </table>
        @endif
    </div>

    <!-- Modal -->
    <div class="modal fade" id="descriptionModal" tabindex="-1" aria-labelledby="descriptionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="descriptionModalLabel">Deskripsi Cluster</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>C1:</strong> Tidak Puas</p>
                    <p><strong>C2:</strong> Cukup Puas</p>
                    <p><strong>C3:</strong> Sangat Puas</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#data').DataTable();
        });
    </script>
@endsection
