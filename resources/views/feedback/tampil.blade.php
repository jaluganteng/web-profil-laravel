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

        hr {
            border: none;
            height: 1px;
            background-color: #ccc;
            margin: 30px auto;
            width: 80%;
        }

        .ucapan {
            text-align: center;
        }
    </style>
</head>
<body>

<main>
    <div class="container py-4">

        <!-- Header Section -->
        <header>
            <img src="{{ asset('asset/profil.png') }}" alt="Foto Profil" class="profile-pic">
            <div class="title">SISWA SMKN 11 BANDUNG | Web Profile Dev</div>
            <div class="name">Abijalu Angga Putra</div>
            <hr>
            <nav>
                <a href="{{ route('home.tampil') }}">HOME</a>
                <a href="{{ route('tentang.tampil') }}">Tentang</a>
                <a href="{{ route('prestasi.tampil') }}">Prestasi</a>
                <a href="#">feedback</a>
                <a href="{{ route('kontak.tampil') }}">Kontak</a>
            </nav>
        </header>

        <!-- Feedback Form Section -->
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-4">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <h2 class="fw-bold text-center mb-4">Feedback</h2>
                        <p class="ucapan">Silakan berikan kritik dan sarannya :)</p>

                        <form action="{{ route('feedback.tampil') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                       placeholder="Masukkan nama" required>
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <input type="text" class="form-control" id="status" name="status"
                                       placeholder="Misal: Siswa/Guru" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="Masukkan email" required>
                            </div>

                            <div class="mb-3">
                                <label for="pesan" class="form-label">Pesan</label>
                                <textarea class="form-control" id="pesan" name="pesan" rows="4"
                                          placeholder="Tulis pesan atau saran di sini..." required></textarea>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary px-4">Kirim</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<!-- Bootstrap JS (opsional jika tidak pakai JavaScript Bootstrap bisa dihapus) -->
<script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>

</body>
</html>
