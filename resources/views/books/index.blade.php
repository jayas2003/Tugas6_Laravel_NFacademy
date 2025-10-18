<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <table border="1" cellpadding="8">
        <tr>
            <th>Judul</th>
            <th>Genre</th>
            <th>Author</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->genre }}</td>
            <td>{{ $book->author->name }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>

