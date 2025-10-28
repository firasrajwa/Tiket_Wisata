<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #74b9ff, #a29bfe);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background: #fff;
            padding: 2rem 3rem;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
            text-align: center;
            max-width: 400px;
        }
        h2 { color: #0984e3; margin-bottom: 1rem; }
        a {
            text-decoration: none;
            background: #0984e3;
            color: white;
            padding: 10px 20px;
            border-radius: 10px;
            transition: background 0.3s;
        }
        a:hover { background: #74b9ff; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Profil Mahasiswa</h2>
        <p>Halo, ini profil milik <b>{{ $nama }}</b></p>
        <p> saya kuliah di <i>Politeknik Negeri Jember</i> Kampus 2 Bondowoso</p>
        <a href="/">⬅ Kembali ke Halaman Utama</a>
    </div>
</body>
</html>
