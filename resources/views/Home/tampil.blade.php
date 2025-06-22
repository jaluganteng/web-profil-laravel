<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profil Abijalu Angga Putra</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background-color: #f5f6fa;
      color: #2c3e50;
      padding: 0 20px;
    }

    header {
      background-color: #1e3a8a;
      padding: 40px 20px;
      border-radius: 12px;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      margin-bottom: 30px;
      color: #ffffff;
    }

    .profile-pic {
      width: 160px;
      height: 160px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid #fff;
      margin-bottom: 20px;
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
    }

    .title {
      font-size: 16px;
      color: #dbeafe;
      margin-bottom: 6px;
      letter-spacing: 0.5px;
    }

    .name {
      font-size: 30px;
      font-weight: 600;
      color: #ffffff;
      margin-bottom: 10px;
    }

    nav {
      display: flex;
      justify-content: center;
      gap: 30px;
      flex-wrap: wrap;
      margin-top: 20px;
    }

    nav a {
      text-decoration: none;
      font-size: 16px;
      color: #ffffff; /* teks putih */
      padding: 10px 18px;
      border-radius: 6px;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    nav a:hover {
      background-color: rgba(255, 255, 255, 0.2);
      color: #ffffff;
      transform: translateY(-2px);
    }

    hr {
      border: none;
      height: 1px;
      background-color: #ccc;
      margin: 30px auto;
      width: 80%;
    }

    .content {
      text-align: center;
      max-width: 700px;
      margin: 0 auto 50px;
      background-color: #ffffff;
      padding: 30px 20px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .content h3 {
      font-size: 22px;
      margin-bottom: 15px;
      color: #1e3a8a;
    }

    .content p {
      font-size: 16px;
      line-height: 1.6;
      color: #34495e;
    }

  </style>
</head>
<body>

  <header>
    <!-- Foto Profil -->
    <img src="{{ asset('asset/profil.png') }}" alt="Foto Profil" class="profile-pic">

    <!-- Title -->
    <div class="title">SISWA SMKN 11 BANDUNG | Web Profile Dev</div>

    <!-- Nama -->
    <div class="name">Abijalu Angga Putra</div>

  <hr>

    <!-- Navigasi -->
    <nav>
        <a href="#">HOME</a>
      <a href="{{route('tentang.tampil') }}">Tentang</a>
      <a href="{{ route('prestasi.tampil') }}">prestasi</a>
      <a href="{{route('feedback.tampil')}}">feedback</a>
      <a href="{{ route('kontak.tampil') }}">Kontak</a>
    </nav>
  </header>

  <!-- Konten Sambutan -->
  <div class="content">
    <h3>Halo semuanya, selamat datang di website profil saya!</h3>
    <p>
      Perkenalkan, nama saya <strong>Abijalu Angga Putra</strong>.<br>
      Saya adalah seorang siswa dari Sekolah Menengah Kejuruan, yaitu <strong>SMKN 11 BANDUNG</strong>.<br><br>
      Silakan jelajahi website ini untuk mengetahui lebih banyak tentang saya. <br>
      Kritik dan saran yang membangun sangat saya butuhkan untuk pengembangan ke depan.
    </p>
  </div>

</body>
</html>
