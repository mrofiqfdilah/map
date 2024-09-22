<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parawisata.Maps</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background-color: #f4f5f8;
            padding: 0;
        }

        .nav {
            background-color: #fff;
            height: 50px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Efek shadow di bagian bawah */
            padding: 10px 20px; /* Tambahan padding untuk memberi jarak pada konten dalam navbar */
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start; /* Mengatur agar item berada di kiri */
            padding: 20px;
        }
        .box {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin: 10px; /* Mengurangi margin antar box */
            padding: 15px;
            text-align: center;
            width: 200px;
            transition: transform 0.3s;
        }
        .box img {
            width: 130px;
            height: auto;
            border-radius: 8px;
        }
        .box:hover {
            transform: scale(1.05);
        }
        .judul{
            position: relative;
            top:-14px;
            left: 15px;
        }
    </style>
</head>
<body>
    <div class="nav">
        <h2 class="judul">Parawisata<span style="color: #00712D;">.maps</span></h2>
    </div>
    <div class="container">
        @foreach ($kabupaten as $data)
            <a style="color: #000; text-decoration:none;" href="{{ route('pilihplace', $data->id) }}">
                <div class="box">
                    <img src="{{ asset($data->cover) }}" alt="{{ $data->name }}">
                    <h2>{{ $data->name }}</h2>
                </div>
            </a>
        @endforeach
    </div>
</body>
</html>
