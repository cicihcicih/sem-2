<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Index</title>
</head>
<body>
    <h1>Ini Halaman Index Post</h1>

    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Title</td>
                <td>Body</td>
                <td>Action</td>
            </tr>
        </thead>
    <tbody>
        <tr>
            @forelse ($datapost as $item=>$value)
            <tr>
                <td>{{ $item + 1 }}</td>
                <td>{{ $value->title }}</td>
                <td>{{ $value->body }}</td>
                <td>
                    <form action="/post/{{$value->id}}" method="POST">
                        <a href="/post/{{ $value->id }}">detail</a>
                        <a href="/post/{{ $value->id }}/edit">edit</a>
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td>data masih kosong</td>
            </tr>
            @endforelse
        </tr>
    </tbody>
    </table>
</body>
</html>