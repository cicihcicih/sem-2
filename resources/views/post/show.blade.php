<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Show</title>
</head>
<body>
<h1>Ini Halaman Show Post</h1>
    <form action="/post"method="POST">
        @csrf
        <label for="InputTitle">Nama Title</label>
        <input type="text"name="title" class="form-control" id="InputTitle" value="{{ $showpostbyid->title }}" disabled>
        <br>
        <br>
        <label for="InputBody">Nama Body</label>
        <input type="text"name="body" class="form-control" id="InputBody" value="{{ $showpostbyid->body }}" disabled>
                  
    </form>
</body>
</html>