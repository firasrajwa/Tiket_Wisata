<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Tiket Wisata')</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(120deg, #00c6ff, #0072ff);
            color: #2c3e50;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
            margin: 0;
            padding: 40px 20px;
        }

        .card {
            background: white;
            color: #2d3436;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            max-width: 600px;
            width: 90%;
            text-align: center;
        }

        h1 {
            margin-bottom: 10px;
            color: #0072ff;
        }

        a {
            color: #0072ff;
            text-decoration: none;
            font-weight: 600;
        }

        a:hover {
            text-decoration: underline;
        }

        .navbar {
            margin-bottom: 30px;
        }

        .navbar a {
            background: white;
            padding: 10px 15px;
            border-radius: 8px;
            margin: 0 8px;
            color: #0072ff;
            font-weight: 600;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .navbar a:hover {
            background: #0072ff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="/home">🏠 Beranda</a>
        <a href="/tentang">ℹ️ Tentang</a>
        <a href="/profil/Yanto">👤 Profil</a>
    </div>

    <div class="card">
        @yield('content')
    </div>
</body>
</html>
