<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('dataplacedetail.store') }}" enctype="multipart/form-data" method="post">
    @csrf
    <select name="place_id">
        @foreach ($place as $data )
            <option value="{{ $data->id }}">{{ $data->name }}</option>
        @endforeach
    </select><br>
   <input type="file" name="images" id=""><br>
   <textarea name="description" id="" cols="30" rows="10"></textarea><br>
   <textarea name="address" id="" cols="30" rows="10"></textarea><br>
   <input type="text" name="latitude" id=""><br>
   <input type="text" name="longitude" id=""><br>
    <button type="submit">Submit</button>
    </form>
</body>
</html>