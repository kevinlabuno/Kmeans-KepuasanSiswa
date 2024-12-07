<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMA Negeri 1 Dimembe</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f4f6f9;
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .header {
      width: 100%;
      background-color: #007bff;
      color: #fff;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    .header > a {
    display: inline-flex;
    }

    .header .btn-back {
        margin-left: 10px;
      background-color: #fff;
      color: #007bff;
      border: none;
      padding: 5px 10px;
      font-size: 14px;
      border-radius: 5px;
      font-weight: 500;
      cursor: pointer;
    }

    .header .btn-back:hover {
    }

    .header .title-container {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .header .title-container img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      border: 2px solid #fff;
    }

    .header h1 {
      margin: 0;
      font-size: 20px;
      font-weight: 500;
    }

    .login-container {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-body {
      width: 100%;
      max-width: 900px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 30px;
      border-top: 3px solid #007bff;
      text-align: left;
    }

    .login-body h6 {
      margin-bottom: 20px;
      font-size: 18px;
      font-weight: 600;
      text-align: center;
    }

    .section-title {
      margin-top: 20px;
      font-size: 16px;
      font-weight: 600;
      color: #007bff;
    }

    .section-content {
      margin-top: 10px;
      font-size: 14px;
      line-height: 1.6;
      color: #333;
    }
    
    .button-container {
  display: flex;
  gap: 10px; /* Jarak antara tombol */
  align-items: center; /* Pastikan sejajar secara vertikal */
}

    .list-content {
      margin-top: 10px;
      padding-left: 20px;
      font-size: 14px;
      color: #333;
    }

    .line-divider {
      height: 1px;
      background-color: #ddd;
      margin: 20px 0;
    }
  </style>
</head>

<body>
  <div class="header">
    <div class="title-container">
      <img src="assets/img/Logo1.jpg" alt="Logo">
      <h1>SMA Negeri 1 Dimembe</h1>
    </div>
      <div class="button-container">
    <a href="{{url('siswainput')}}" class="btn-back">Input Data Siswa</a>
    <!-- @if($latestData)-->
    <!--    <a href="{{ url('siswadetail/'.$latestData->id) }}" class="btn-back">Hasil Input</a>-->
    <!--@else-->
        <!-- Bisa tambahkan pesan jika diperlukan -->
    <!--    <p>Tidak ada data yang terakhir ditambahkan.</p>-->
    <!--@endif-->
    <a href="{{url('login')}}" class="btn-back">Login</a>
  </div>
  </div>
  <div class="login-container">
    <div class="login-body">
      <h6>Kepuasan Siswa Terhadap Metode Pengajaran Guru</h6>
      <div class="line-divider"></div>
      
      <div class="section-title">Apa Itu K-Means?</div>
      <div class="section-content">
        K-Means adalah salah satu algoritma dalam machine learning yang digunakan untuk clustering data. Clustering adalah proses pengelompokkan data menjadi kelompok-kelompok berdasarkan kesamaan fitur.
        <br>Algoritma K-Means bekerja dengan cara mengelompokkan data ke dalam <i>k</i> kelompok (cluster) dengan jarak terdekat antara data dengan pusat kelompok.
      </div>

      <div class="section-title">Kegunaan Aplikasi</div>
      <div class="section-content">Aplikasi Tingkat Kepuasan Siswa Terhadap Metode Pengajaran Guru SMAN 1 Dimembe memiliki beberapa kegunaan yang sangat membantu dalam kegiatan belajar mengajar, antara lain:</div>
      <ul class="list-content">
        <li>Pencatatan Data Siswa</li>
        <li>Penjadwalan Pelajaran</li>
        <li>Pengelolaan Materi Pembelajaran</li>
        <li>Monitoring Kehadiran Siswa</li>
        <li>Evaluasi Pembelajaran</li>
      </ul>
      <div class="section-content">
        Dengan aplikasi ini, diharapkan kegiatan belajar mengajar menjadi lebih terstruktur dan efisien, sehingga meningkatkan kualitas pendidikan di sekolah ini.
      </div>
    </div>
  </div>
</body>

</html>
