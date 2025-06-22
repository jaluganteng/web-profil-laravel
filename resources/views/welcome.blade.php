<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Web Profil</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    <style>
        body {
            background: linear-gradient(135deg, #1e3a8a, #3b82f6);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
        }

        .welcome-box {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.05);
            padding: 60px 30px;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 90%;
        }

        .welcome-box h1 {
            font-size: 42px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .welcome-box p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .btn-welcome {
            background-color: #2563eb;
            border: none;
            padding: 12px 28px;
            font-size: 16px;
            color: #fff;
            border-radius: 8px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-welcome:hover {
            background-color: #1d4ed8;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <div class="welcome-box">
        <h1>Selamat Datang</h1>
        <p>Website Profil Resmi - Abijalu Angga Putra</p>
        <a href="{{ route('home.tampil') }}" class="btn btn-welcome">Lihat Profil Saya</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
