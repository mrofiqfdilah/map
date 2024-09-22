<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
</head>
<body>
    <ul>
        <li><a href="{{ route('dataprovinsi.index') }}">Data Provinsi</a></li>
        <li><a href="{{ route('datakabupaten.index') }}">Data Kabupaten</a></li>
        <li><a href="{{ route('datakategori.index') }}">Data Kategori</a></li>
        <li><a href="{{ route('dataplace.index') }}">Data Place</a></li>
        <li><a href="{{ route('dataplacedetail.index') }}">Data Place Details</a></li>
    </ul>
    <button><a href="{{ route('dataplacedetail.create') }}">Tambah Data</a></button>

    <table border="1" style="width: 100%;">
       <tr>
        <th>No</th>
        <th>Nama Tempat</th>
        <th>Deskripsi Tempat</th>
        <th>Lokasi</th>
        <th>Images</th>
        <th>Map</th>
       </tr>
       @foreach ($placedetail as $no => $data )
           <tr>
            <td>{{ $no + 1 }}</td>
            <td>{{ $data->places->name }}</td>
            <td>{{ $data->description }}</td>
            <td>{{ $data->address }}</td>
            <td><img src="{{ $data->images }}" width="80" alt=""></td>
            
              
                
          
           </tr>
       @endforeach
    </table>

    <div id="map-{{ $no }}" style="height: 200px; width:400px;"></div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            @foreach ($placedetail as $no => $data)
                var map = L.map('map-{{ $no }}').setView([{{ $data->latitude }}, {{ $data->longitude }}], 13);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 8,
                }).addTo(map);
                L.marker([{{ $data->latitude }}, {{ $data->longitude }}]).addTo(map);
            @endforeach
        });
    </script>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
</body>

<style>
    td{
        text-align: center;
    }
    #map {
        height: 150px;
        width: 200px;
    }
</style>
