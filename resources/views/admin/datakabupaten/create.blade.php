<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('datakabupaten.store') }}" enctype="multipart/form-data" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nama Kabupaten" id=""><br>
    <select name="province_id">
        @foreach ($provinsi as $data )
            <option value="{{ $data->id }}">{{ $data->name }}</option>
        @endforeach
    </select><br>
    <input type="file" name="cover" id=""><br>
    <button type="submit">Submit</button>
    </form>
</body>
</html>