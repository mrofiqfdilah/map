<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Provinsi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .nav {
            background-color: #fff;
            height: 50px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 10px 20px;
        }

        .nav .judul {
            margin: 0;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px;
        }

        .item {
            display: flex;
            flex-direction: row; 
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin: 10px;
            height: 470px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 80%;
        }

        .item img {
            width: 500px; /* Lebar gambar tetap */
            height: 460px;
            border-radius: 8px;
            object-fit: cover;
            margin-right: 30px;
        }

        .map {
            height: 220px;
            position: relative;
            top: -10px;
            width: 530px; /* Memastikan peta mengisi area */
        }

        .text-container {
            flex: 1; /* Membuat kontainer teks mengambil sisa ruang */
            position: relative;
            top: -22px;
        }
    </style>
</head>
<body>
    <div class="nav">
        <h2 class="judul">Parawisata<span style="color: #00712D;">.maps</span></h2>
    </div>
    <div class="container">
        @foreach ($details as $no => $data)
        <div class="item">
            <img src="{{ asset($data->images) }}" alt="">
            <div class="text-container">
                <h2>{{ $data->places->name }}</h2>
                <p style="color:#888; font-weight:500; position: relative; top:-20px;">Kecamatan Teluk Sampit</p>
                <p style="text-align: justify; position: relative; top:-24px; color:#333; width:530px;">{{ $data->description }}</p>
                <p style="color:#333; position: relative; top:-20px;"><i style="font-size:20px; color:#64CD8A;" class="ri-map-pin-line"></i> {{ $data->address }}</p>
                <div id="map-{{ $no }}" class="map"></div>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                @foreach ($details as $no => $data)
                    var map = L.map('map-{{ $no }}').setView([{{ $data->latitude }}, {{ $data->longitude }}], 13);
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        maxZoom: 8,
                    }).addTo(map);
                    L.marker([{{ $data->latitude }}, {{ $data->longitude }}]).addTo(map);
                @endforeach
            });
        </script>
        @endforeach
    </div>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
</body>
</html>
