@extends('layoutsiswa.app')

@section('content')
<div class="container">
    <h2>Algoritma K-Means</h2>
    <p>Algoritma K-Means adalah metode yang digunakan untuk mengelompokkan data menjadi beberapa kelompok berdasarkan kesamaan fitur. Tujuan utama dari algoritma ini adalah untuk meminimalkan varians di antara data dalam satu kelompok dan memaksimalkan varians antara kelompok.</p>

    <h3>Langkah-langkah Algoritma K-Means:</h3>
    <ol>
        <li>Pilih jumlah cluster (k) yang diinginkan.</li>
        <li>Acak dan tentukan posisi awal dari k centroid untuk setiap cluster.</li>
        <li>Hitung jarak antara setiap data point dengan centroid dan masukkan data point ke dalam cluster dengan centroid terdekat.</li>
        <li>Hitung ulang posisi centroid untuk setiap cluster berdasarkan rata-rata dari data point dalam cluster tersebut.</li>
        <li>Ulangi langkah 3 dan 4 hingga tidak ada perubahan dalam posisi centroid atau jumlah iterasi maksimum tercapai.</li>
    </ol>

    <h3>Rumus K-Means:</h3>
    <p>Jarak antara data point x (x1, x2, ..., xn) dan centroid c (c1, c2, ..., cn) dihitung menggunakan rumus Euclidean Distance:</p>
    <p>$$\sqrt{(x_1 - c_1)^2 + (x_2 - c_2)^2 + \ldots + (x_n - c_n)^2}$$</p>
    <p>Di mana n adalah jumlah dimensi dari data.</p>
</div>
@endsection
