<!DOCTYPE html>
<html>
<head>
    <title>Data Ruangan LP3I</title>
</head>
<body>
    <h1>Tambah Ruangan</h1>
    <form method="POST" action="/ruangan">
        @csrf
        <input type="text" name="ruangan" placeholder="Nama Ruangan"><br>
        <input type="number" name="kapasitas" placeholder="Kapasitas Ruangan"><br>
        <button type="submit">Simpan</button>
    </form>

    <h2>Data Ruangan</h2>
    <ul>
        @foreach($data as $ruangan)
            <li>{{ $ruangan->ruangan }} - {{ $ruangan->kapasitas }}</li>
        @endforeach
    </ul>
</body>
</html>