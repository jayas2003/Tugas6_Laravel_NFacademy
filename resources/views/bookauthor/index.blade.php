<!DOCTYPE html>
<html>
<head>
    <title>Book & Author List</title>
</head>
<body>
    <h1>Daftar Buku dan Penulis</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Judul Buku</th>
                <th>Genre</th>
                <th>Tahun</th>
                <th>Penulis</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->genre }}</td>
                    <td>{{ $book->publication_year }}</td>
                    <td>{{ $book->author->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
