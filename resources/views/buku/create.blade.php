<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>

<div class="container">
    <h4>Tambah Buku</h4>
    <form method="post" action="{{ route('buku.store') }}">
        @csrf
        <div>Judul <input type="text" name="judul"></div>
        <div>Penulis <input type="text" name="penulis"></div>
        <div>Harga <input type="text" name="harga"></div>
        <div>Tgl. Terbit <input type="date" name="tgl_terbit"></div>
        <button type="submit">Simpan</button>
        <a href="/buku">Batal</a>
    </form>
</div>

</body>
</html>




