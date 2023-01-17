<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profile</title>
</head>
<body>
    <h1>Ini Halaman profile</h1>
    <form action="/profile" method="POST">
        @csrf
        <input type="text" name="nama" placeholder="Nama">
        <input type="text" name="alamat" placeholder="Alamat">
        <button type="submit">Submit</button>
    </form>
</body>
</html>