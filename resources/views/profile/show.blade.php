<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profile</title>
</head>
<body>
    <h1>Ini Halaman profile detail</h1>
        @csrf
        <input type="text" name="nama" value="{{ $profiles->nama}}" disabled>
        <input type="text" name="alamat" value="{{ $profiles->alamat}}" disabled>
        {{-- <a href="/profile">Kembali</a> --}}
        <a href="{{ route('profile.index') }}">Kembali</a>
</body>
</html>