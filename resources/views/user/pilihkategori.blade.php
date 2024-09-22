<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Provinsi</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start; /* Mengatur agar item berada di kiri */
            padding: 20px;
        }
        .box {
            background-color: #f4f4f4;
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
    </style>
</head>
<body>
    <div class="container">
        @foreach ($kategori as $data)
            <a style="color: #000; text-decoration:none;" href="{{ route('pilihplace', $kab) }}">
                <div class="box" >
                    <img src="{{ asset($data->cover) }}" alt="{{ $data->name }}">
                    <h2>{{ $data->name }}</h2>
                </div>
            </a>
        @endforeach
    </div>
</body>
</html>
