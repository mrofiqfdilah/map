<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parawisata.Maps</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"> <!-- Tambahkan ini -->
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
            margin: 10px;
            text-align: center;
            width: 300px;
            transition: transform 0.3s;
            padding: 0; /* Menghapus padding */
        }

        .box img {
            width: 100%; /* Gambar memenuhi 100% lebar box */
            height: auto;
            border-radius: 8px 8px 0 0; /* Hanya bagian atas gambar yang membulat */
        }

        .box:hover {
            transform: scale(1.05);
        }

        .judul {
            position: relative;
            top: -14px;
            left: 15px;
            
        }

        .box p {
    margin: 0;
    text-align: left;
   font-weight: 500;
    
}

.box .rating {
    display: flex;
    justify-content: flex-start; /* Mengatur rating ke kiri */
    margin-top: 5px;
}

.box button {
    margin-top: 10px;
    padding: 8px 12px;
    background-color: #00712D;
    color: #fff;
    border: none;
    font-family: 'poppins',sans-serif;
    letter-spacing: 1px;
    border-radius: 5px;
    position: relative;
    left: -80px;
    margin-bottom: 20px;
    cursor: pointer;
    text-align: left; /* Mengatur teks tombol ke kiri */
}


     
        .rating i {
            color: gold; /* Warna bintang */
            font-size: 24px;
            position: relative; left:10px;
            margin-bottom: 10px;
        }

      

        .box button:hover {
            background-color: #005a24;
        }
    </style>
</head>
<body>
    <div class="nav">
        <h2 class="judul">Parawisata<span style="color: #00712D;">.maps</span></h2>
    </div>
    <div class="container">
        @foreach ($place as $data)
        <a style="color: #000; text-decoration:none;" href="{{ route('placedetail', $data->id) }}">
            <div class="box">
                <img src="{{ asset($data->images) }}" alt="">
                <p style="font-weight: 600; position: relative; left:10px; color:#888;">Kabupaten Kotim</p>
                <p style="font-weight: 600; position: relative; left:10px;  letter-spacing: 0.5px; font-size:20px;">{{ $data->name }}</p>
                <div class="rating">
                    <!-- Bintang rating -->
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-half-fill"></i> <!-- Contoh setengah bintang -->
                </div>
                <button>Lihat detail</button>
            </div>
        </a>
        @endforeach
    </div>
</body>
</html>
