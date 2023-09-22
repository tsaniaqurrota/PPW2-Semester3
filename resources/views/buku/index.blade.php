<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Buku</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
</head>
<body>

<p align="right"><a href="{{ route('buku.create') }}">Tambah Buku</a></p>

<table class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Harga</th>
            <th>Tgl. Terbit</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_buku as $buku)
            <tr>
                <td>{{ $buku->id }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>{{ "Rp ".number_format($buku->harga, 2, ',', '.') }}</td>
                <td>{{ $buku->tgl_terbit }}</td>
                <td>
                </td>
                <td>
                    <form action="{{ route('buku.destroy', $buku->id) }}" method="post">
                        @csrf
                        <button onclick="return confirm('Apakah yakin ingin menghapus data?')">Hapus</button>
                    </form>
                </td>
                <td>
                    @csrf
                    <button><a href="{{ route('buku.edit', $buku->id) }}">Edit</a></button>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    <p>Jumlah Data: {{ $total_buku }}</p>
    <p>Jumlah Total Harga: Rp {{ number_format($total_harga, 2, ',', '.') }}</p>
</body>
</html>



