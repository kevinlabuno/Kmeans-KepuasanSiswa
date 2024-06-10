@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Hasil Data Siswa Yang Telah Diinput</h2>
    <hr>

    <!-- Tampilkan pesan sukses -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tampilkan pesan error validasi -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- ----------DATASET SISWA 1------------- --}}
    <div class="card">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Keterangan
        </button>
        <div class="card-body">
            <h3 class="card-title text-center">Data Input Siswa Terkonversi</h3>
            <table id="dataset1" class="table">
                <thead>
                    <tr class="table-warning">
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">c1</th>
                        <th scope="col">c2</th>
                        <th scope="col">c3</th>
                        <th scope="col">c4</th>
                        <th scope="col">c5</th>
                        <th scope="col">c6</th>
                        <th scope="col">c7</th>
                        <th scope="col">c8</th>
                        <th scope="col">c9</th>
                        <th scope="col">c10</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $data2->nama }}</td>
                        <td>{{ $data2->kelas }}</td>
                        <td>{{ $data2->jenis }}</td>
                        <td>{{ $data2->c1 }}</td>
                        <td>{{ $data2->c2 }}</td>
                        <td>{{ $data2->c3 }}</td>
                        <td>{{ $data2->c4 }}</td>
                        <td>{{ $data2->c5 }}</td>
                        <td>{{ $data2->c6 }}</td>
                        <td>{{ $data2->c7 }}</td>
                        <td>{{ $data2->c8 }}</td>
                        <td>{{ $data2->c9 }}</td>
                        <td>{{ $data2->c10 }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    {{-- ------------------------------------------------------- --}}

    {{-- ----------DATASET SISWA 2------------- --}}
    <div class="card">
        <div class="card-body">
            <h3 class="card-title text-center">Data Input Siswa Terkonversi</h3>
            <table id="dataset2" class="table">
                <thead>
                    <tr class="table-warning">
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">c1</th>
                        <th scope="col">c2</th>
                        <th scope="col">c3</th>
                        <th scope="col">c4</th>
                        <th scope="col">c5</th>
                        <th scope="col">c6</th>
                        <th scope="col">c7</th>
                        <th scope="col">c8</th>
                        <th scope="col">c9</th>
                        <th scope="col">c10</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $data1->nama }}</td>
                        <td>{{ $data1->kelas }}</td>
                        <td>{{ $data1->jenis }}</td>
                        <td>{{ $data1->c1 }}</td>
                        <td>{{ $data1->c2 }}</td>
                        <td>{{ $data1->c3 }}</td>
                        <td>{{ $data1->c4 }}</td>
                        <td>{{ $data1->c5 }}</td>
                        <td>{{ $data1->c6 }}</td>
                        <td>{{ $data1->c7 }}</td>
                        <td>{{ $data1->c8 }}</td>
                        <td>{{ $data1->c9 }}</td>
                        <td>{{ $data1->c10 }}</td>
                        <td><b>{{ $data1->total }}</b></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    {{-- ------------------------------------------------------- --}}

</div>

<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg"> <!-- modal-lg untuk modal besar atau modal-xl untuk modal ekstra besar -->
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Pertanyaan</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <p>1. Apakah anda puas dengan penjelasan rencana kegiatan belajar mengajar yang diberikan Guru SMAN 1 Dimembe? (Tidak Puas = 1, Cukup Puas = 2, Sangat Puas = 3)</p>
                <p>2. Apakah anda puas dengan kesiapan dan penguasaan materi yang diberikan Guru SMAN 1 Dimembe? (Tidak Puas = 1, Cukup Puas = 2, Sangat Puas = 3)</p>
                <p>3. Apakah anda puas dengan pemberian kesempatan tanya jawab yang diberikan Guru SMAN 1 Dimembe? (Tidak Puas = 1, Cukup Puas = 2, Sangat Puas = 3)</p>
                <p>4. Apakah anda puas dengan pemberian soal ujian yang diberikan Guru SMAN 1 Dimembe? (Soal Ujian yang diberikan sesuai dengan materi yang telah diberikan) (Tidak Puas = 1, Cukup Puas = 2, Sangat Puas = 3)</p>
                <p>5. Apakah anda puas dengan pemberian kuis dan tugas sebagai evaluasi pembelajaran yang diberikan Guru SMAN 1 Dimembe? (Tidak Puas = 1, Cukup Puas = 2, Sangat Puas = 3)</p>
                <p>6. Apakah anda puas dengan penggunaan media pembelajaran atau alat bantu pembelajaran materi? (Media pembelajaran/alat bantu seperti materi dalam bentuk powerpoint, video, buku cetak) (Tidak Puas = 1, Cukup Puas = 2, Sangat Puas = 3)</p>
                <p>7. Apakah anda puas dengan keterbukaan dan kejelasan guru mengenai pemeriksaan tugas dan hasil ujian? (Tidak Puas = 1, Cukup Puas = 2, Sangat Puas = 3)</p>
                <p>8. Apakah anda puas dengan variasi metode pembelajaran yang dilakukan guru? (Variasi metode pembelajaran: Banyak atau kurangnya interaksi antar guru dan siswa, pembelajaran materi tidak dijelaskan dan siswa langsung diminta untuk melakukan latihan soal) (Tidak Puas = 1, Cukup Puas = 2, Sangat Puas = 3)</p>
                <p>9. Apakah anda puas dengan kehadiran guru pada jam pelajaran yang ditentukan? (Tidak Puas = 1, Cukup Puas = 2, Sangat Puas = 3)</p>
                <p>10. Apakah anda puas dengan keterkaitan materi pembelajaran dan penerapan materi pembelajaran di tengah masyarakat? (Tidak Puas = 1, Cukup Puas = 2, Sangat Puas = 3)</p>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </div>
    </div>
@endsection