<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container">
        <h1 class="text-center mb-4">📚 Daftar Buku dan Penulis</h1>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Genre</th>
                    <th>Penulis</th>
                    <th>Email Penulis</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $index => $book)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->genre }}</td>
                        <td>{{ $book->author->name }}</td>
                        <td>{{ $book->author->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
