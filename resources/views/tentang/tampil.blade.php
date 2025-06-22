<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tentang - Abijalu Angga Putra</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">

  <style>
    header {
      background-color: #1e3a8a;
      padding: 40px 20px;
      border-radius: 12px;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      margin-bottom: 30px;
      color: #ffffff;
      position: relative;
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
      color: #ffffff;
      padding: 10px 18px;
      border-radius: 6px;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    nav a:hover {
      background-color: rgba(255, 255, 255, 0.2);
      transform: translateY(-2px);
    }

    .profile-image {
      width: 250px;
      height: 250px;
      object-fit: cover;
      border-radius: 10px;
      box-shadow: 0 0 12px rgba(0, 0, 0, 0.2);
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

    .bg-primary-custom {
      background-color: #1e3a8a !important;
    }

    @media (max-width: 768px) {
      .profile-image {
        width: 100%;
        height: auto;
        margin-top: 20px;
      }

      .header-title {
        flex-direction: column;
        gap: 10px;
      }

      .header-profile {
        margin: 0;
      }
    }

     hr {
      border: none;
      height: 1px;
      background-color: #ccc;
      margin: 30px auto;
      width: 80%;
    }
  </style>
</head>
<body>

  <main>
    <div class="container py-4">

      <!-- Header Section -->
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
        <a href="{{ route('home.tampil') }}">HOME</a>
      <a href="{{route('tentang.tampil') }}">Tentang</a>
      <a href="{{ route('prestasi.tampil') }}">prestasi</a>
       <a href="{{route('feedback.tampil')}}">feedback</a>
      <a href="{{ route('kontak.tampil') }}">Kontak</a>
    </nav>
  </header>

      <!-- Jumbotron Tentang Section -->
      <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h1 class="display-5 fw-bold">Halo semuanya!</h1>
              <p class="fs-5">
                Perkenalkan nama saya <strong>Abijalu Angga Putra</strong>.<br>
                Saya lahir di Bandung, tepatnya di Hegarmanah Cikendi RT 06 RW 09.<br>
                Saya adalah seorang kakak dari 2 bersaudara, yaitu saya sendiri dan adik saya.<br>
                Selama bersekolah di SMK, saya menyukai membuat website sederhana, terlebih lagi membuat website profil pribadi.
              </p>

            </div>
            <div class="col-md-4 text-center">
              <img src="{{ asset('asset/images.jpeg') }}" alt="Foto Profil" class="profile-image">
            </div>
          </div>
        </div>
      </div>

      <!-- Konten Dua Kolom -->
      <div class="row align-items-md-stretch">
        <!-- Kolom Kiri -->
        <div class="col-md-6">
          <div class="h-100 p-4 bg-primary-custom text-white rounded-3 border border-light">
            <div class="row align-items-center">
              <div class="col-md-7">
                <h2>Pendidikan</h2>
                <p>Saya bersekolah di SMKN 11 Bandung dengan jurusan Rekayasa Perangkat Lunak (RPL).
                  <br>Selama bersekolah saya juga aktif mengikuti organisasi dalam sekolah yaitu MPK dan POLSIS.
                </p>
                <a href="{{ route('tentang/selengkapnya.tampil') }}" class="btn btn-outline-light mt-2" type="button">selengkapnya</a>

              </div>
              <div class="col-md-5 text-center mt-3 mt-md-0">
                <img src="{{ asset('asset/sekolah.png') }}" alt="Gambar Latar" class="profile-image">
              </div>
            </div>
          </div>
        </div>

        <!-- Kolom Kanan -->
        <div class="col-md-6">
          <div class="h-100 p-4 bg-light border rounded-3">
            <div class="row align-items-center">
              <div class="col-md-7">
                <h2>keahlian</h2>
                <p>- mampu penggunakan bahasa pemorgraman python
                <br> -mahir menggunakan HTML,CSS dan php
                <br>-mahir menggunakan framework laravel
                <br> - mampu berkomunikasi menggunakan bahasa ingris

                </p>

              </div>
              <div class="col-md-5 text-center mt-3 mt-md-0">
                <img src="{{ asset('asset/jalu.jpg') }}" alt="Ilustrasi Border" class="profile-image">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>

</body>
</html>
