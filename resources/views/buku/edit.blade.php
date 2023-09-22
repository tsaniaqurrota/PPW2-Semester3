<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
</head>
<body>

<div class="container">
    <h4>Edit Buku</h4>
    <form action="{{ route('buku.update', $buku->id) }}" method="post">
    @csrf
    <div>Judul <input type="text" name="judul" value="{{ $buku->judul }}"></div>
    <div>Penulis <input type="text" name="penulis" value="{{ $buku->penulis }}"></div>
    <div>Harga <input type="text" name="harga" value="{{ $buku->harga }}"></div>
    <div>Tgl. Terbit <input type="date" name="tgl_terbit" value="{{ $buku->tgl_terbit }}"></div>

    <button onclick="return confirm('Apakah ingin menyimpan perubahan?')" type="submit">Simpan Perubahan</button>
    <a href="/buku">Batal</a>
</form>
</div>

</body>
</html>