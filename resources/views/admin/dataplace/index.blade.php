<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="{{ route('dataprovinsi.index') }}">Data Provinsi</a></li>
        <li><a href="{{ route('datakabupaten.index') }}">Data Kabupaten</a></li>
        <li><a href="{{ route('datakategori.index') }}">Data Kategori</a></li>
        <li><a href="{{ route('dataplace.index') }}">Data Place</a></li>
        <li><a href="{{ route('dataplacedetail.index') }}">Data Place Details</a></li>
    </ul>
    <button><a href="{{ route('dataplace.create') }}">Tambah Data</a></button>

    <table border="1" style="width: 80%;">
       <tr>
        <th>No</th>
        <th>Nama Tempat</th>
        <th>Asal Kabupaten</th>
        <th>Kategori Tempat</th>
       </tr>
       @foreach ($place as $no => $data )
           <tr>
            <td>{{ $no + 1 }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->regencies->name }}</td>
            <td>{{ $data->categories->name }}</td>
           </tr>
       @endforeach
    </table>
</body>
</html>

<style>
    td{
        text-align: center;
    }
</style>