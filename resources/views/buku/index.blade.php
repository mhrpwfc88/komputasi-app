    <!-- resources/views/buku/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <ul>
        @foreach ($bukus as $buku)
            <li>{{ $buku->judul }} - {{ $buku->penulis }}</li>
        @endforeach
    </ul>
</body>
</html>
