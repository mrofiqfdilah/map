<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('dataplace.store') }}" enctype="multipart/form-data" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nama Tempat" id=""><br>
    <select name="regency_id">
        @foreach ($kabupaten as $data )
            <option value="{{ $data->id }}">{{ $data->name }}</option>
        @endforeach
    </select><br>
    <select name="category_id">
        @foreach ($kategori as $data )
            <option value="{{ $data->id }}">{{ $data->name }}</option>
        @endforeach
    </select><br>
    <input type="file" name="images" ><br>
    <button type="submit">Submit</button>
    </form>
</body>
</html>