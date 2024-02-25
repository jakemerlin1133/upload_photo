<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Upload</h1>

<form action="/upload" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image" id="image">
    <input type="submit" name="upload" id="upload">
</form>
</hr>


<ul>
    @foreach ($photos as $photo)
        <img width="200" height="200" src="{{ asset('storage/images/'.$photo->name) }}">
    @endforeach
</ul>



</body>
</html>
