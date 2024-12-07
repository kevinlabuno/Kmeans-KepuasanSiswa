<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMA Negeri 1 Dimembe</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="/jquery-3.6.0.min.js" type="text"></script>
    <script src="./public/js/jquery-3.6.0.min.js" type="text"> </script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="{{ asset('style/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
    <script src="https://unpkg.com/jquery@2.2.4/dist/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
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
    <a href="{{url('login')}}" class="btn-back">Login</a>
    <button class="btn-back" onclick="history.back()">Kembali</button>
  </div>
  </div>
  <div class="login-container">
    <div class="login-body">
    <div class="card-body">
        @if (session('success'))
        <div class="alert alert-primary">
            {{ session('success') }}
        </div>
        @endif
        
        <h5 class="card-title">Hasil Inputan Siswa Terbaru</h5>
        
        <ol class="list-group list-group">
            <li class="list-group-item d-flex justify-content-between align-items">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Nama</div>
                    {{ $data->nama }}
                </div>
                <span class="badge bg-primary rounded-pill"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Kelas</div>
                    {{ $data->kelas }}
                </div>
                <span class="badge bg-primary rounded-pill"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Jenis Kelamin</div>
                    {{ $data->jenis }}
                </div>
                <span class="badge bg-primary rounded-pill"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Nama Guru</div>
                    {{ $data->guru }}
                </div>
                <span class="badge bg-primary rounded-pill"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Apakah anda puas dengan penjelasan rencana kegiatan belajar mengajar yang diberikan Guru SMAN 1 Dimembe?</div>
                    {{ $data->c1 }}
                </div>
                <span class="badge bg-primary rounded-pill">1</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Apakah anda puas dengan kesiapan dan penguasaan materi yang diberikan Guru SMAN 1 Dimembe?</div>
                    {{ $data->c2 }}
                </div>
                <span class="badge bg-primary rounded-pill">2</span>
            </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Apakah anda puas dengan pemberian kesempatan tanya jawab yang diberikan Guru SMAN 1 Dimembe?</div>
                    {{ $data->c3 }}
                </div>
                <span class="badge bg-primary rounded-pill">3</span>
            </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Apakah anda puas dengan pemberian soal ujian yang diberikan Guru SMAN 1 Dimembe?</div>
                    {{ $data->c4 }}
                </div>
                <span class="badge bg-primary rounded-pill">4</span>
            </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Apakah anda puas dengan pemberian kuis dan tugas sebagai evaluasi pembelajaran yang diberikan Guru SMAN 1 Dimembe?</div>
                    {{ $data->c5 }}
                </div>
                <span class="badge bg-primary rounded-pill">5</span>
            </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Apakah anda puas dengan penggunaan media pembelajaran atau alat bantu pembelajaran materi?</div>
                    {{ $data->c6 }}
                </div>
                <span class="badge bg-primary rounded-pill">6</span>
            </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Apakah anda puas dengan keterbukaan dan kejelasan guru mengenai pemeriksaan tugas dan hasil ujian?</div>
                    {{ $data->c7 }}
                </div>
                <span class="badge bg-primary rounded-pill">7</span>
            </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Apakah anda puas dengan variasi metode pembelajaran yang dilakukan guru?</div>
                    {{ $data->c8 }}
                </div>
                <span class="badge bg-primary rounded-pill">8</span>
            </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Apakah anda puas dengan kehadiran guru pada jam pelajaran yang ditentukan?</div>
                    {{ $data->c9 }}
                </div>
                <span class="badge bg-primary rounded-pill">9</span>
            </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Apakah anda puas dengan keterkaitan materi pembelajaran dan penerapan materi pembelajaran di tengah masyarakat?</div>
                    {{ $data->c10 }}
                </div>
                <span class="badge bg-primary rounded-pill">10</span>
            </li>

        </ol>
        
    </div>
      </div>
</body>

</html>
