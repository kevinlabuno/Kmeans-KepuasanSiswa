@extends('layoutsiswa.app')

@section('content')
<div class="container">
     
    <h2>Aplikasi Tingkat Kepuasan Siswa Terhadap Metode Pengajaran Guru</h2>
     @if (session('success'))
        <div class="alert alert-danger">
            {{ session('success') }}
        </div>
    @endif
    <hr>

    <h2>Apa Itu K-Means?</h2>
    <p>K-Means adalah salah satu algoritma dalam machine learning yang digunakan untuk clustering data. Clustering adalah proses pengelompokkan data menjadi kelompok-kelompok berdasarkan kesamaan fitur.</p>
    <p>Algoritma K-Means bekerja dengan cara mengelompokkan data ke dalam k kelompok (cluster) dengan jarak terdekat antara data dengan pusat kelompok.</p>

    <h2>Kegunaan Aplikasi Tingkat Kepuasan Siswa Terhadap Metode Pengajaran Guru</h2>
    <p>Aplikasi Tingkat Kepuasan Siswa Terhadap Metode Pengajaran Guru SMAN 1 Dimembe memiliki beberapa kegunaan yang sangat membantu dalam kegiatan belajar mengajar, antara lain:</p>
    <ol>
        <li>Pencatatan Data Siswa</li>
        <li>Penjadwalan Pelajaran</li>
        <li>Pengelolaan Materi Pembelajaran</li>
        <li>Monitoring Kehadiran Siswa</li>
        <li>Evaluasi Pembelajaran</li>
    </ol>
    <p>Dengan Aplikasi Tingkat Kepuasan Siswa Terhadap Metode Pengajaran Guru, diharapkan kegiatan belajar mengajar dapat menjadi lebih terstruktur dan efisien, sehingga meningkatkan kualitas pendidikan di sekolah ini.</p>
</div>

    
@endsection