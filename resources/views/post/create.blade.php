<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Create</title>
</head>
<body>
    <h1>Ini Halaman Create Post</h1>
    <form action="/profile" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="body" placeholder="Body">
        <button type="submit">Submit</button>
    </form>
</body>
</html>