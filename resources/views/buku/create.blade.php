<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Sertakan link ke file CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <title>Tambah Buku</title>
</head>
<body>

<div class="container">
    <h4 class="mt-2">Tambah Buku</h4>

    <form method="post" action="{{ route('buku.store') }}">
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul">
        </div>
        <div class="form-group">
            <label for="penulis">Penulis</label>
            <input type="text" class="form-control" id="penulis" name="penulis">
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga">
        </div>
        <div class="form-group">
            <label for="tgl_terbit">Tgl. Terbit</label>
            <input type="date" class="form-control" id="tgl_terbit" name="tgl_terbit" placeholder="dd/mm/yyyy">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/buku" class="btn btn-secondary">Batal</a>
    </form>
</div>

<!-- Sertakan script JavaScript Bootstrap -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>


</body>
</html>
