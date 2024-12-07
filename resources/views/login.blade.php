<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - SMA Negeri 1 Dimember</title>
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

    .header .btn-back {
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
      background-color: #f4f4f4;
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
      max-width: 400px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 30px;
      text-align: center;
      border-top: 3px solid #007bff;
    }

    .login-body h6 {
      margin-bottom: 20px;
      font-size: 18px;
      font-weight: 600;
    }

    .form-label {
      font-size: 14px;
      font-weight: 500;
    }

    .line-divider {
      height: 1px;
      background-color: #ddd;
      margin: 20px 0;
    }

    .btn-login {
      background-color: #007bff;
      border: none;
      color: #fff;
      padding: 10px;
      border-radius: 5px;
      font-size: 14px;
      font-weight: 500;
    }

    .btn-login:hover {
      background-color: #0056b3;
    }

    .form-control {
      border: 1px solid #ddd;
      border-radius: 5px;
    }

    .form-control:focus {
      border-color: #007bff;
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
  </style>
</head>

<body>
  <div class="header">
    <div class="title-container">
     <img src="assets/img/Logo1.jpg" alt="Logo">
      <h1>SMA Negeri 1 Dimember</h1>
    </div>
        <button class="btn-back" onclick="history.back()">Kembali</button>
  </div>
  <div class="login-container">
    <div class="login-body">
      <h6>Kepuasan Siswa Terhadap Metode Pengajaran Guru</h6>
      <div class="line-divider"></div>
      <form action="{{ route('login') }}" method="POST" novalidate>
        @csrf
        <div class="mb-3">
          <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
        </div>
        <button type="submit" class="btn btn-login w-100">Masuk</button>
      </form>
    </div>
  </div>
</body>

</html>
