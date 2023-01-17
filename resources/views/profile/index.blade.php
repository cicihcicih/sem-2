<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman index Profile</h1>
    <button>
    <a href="/profile/create">CREATE</a>
    </button>
    <table>
        <thead>
            <tbody>
                <tr>
                    <td>Nama</td>
                    <td>Alamat</td>
                    <td>Actions</td>
                    
                </tr>
            </tbody>
        </thead>
        @foreach ($profiles as $profile)
        <tbody>
        <tr>
            <td>{{ $profile->nama}}</td>
            <td>{{ $profile->alamat}}</td>
            <td>
            <form action="{{ route('profile.destroy', [$profile->id]) }}"method="POST">
            <a href="{{ route('profile.show', $profile->id)}}">Detail</a>
            <a href="{{ route('profile.edit', $profile->id)}}">Edit</a>
            @csrf
            @method('DELETE')   
           <input class="delete"type="submit"value="Delete">
           </form>
            </td>
        </tr>
        </tbody>
        @endforeach
    </table>

</body>
</html>