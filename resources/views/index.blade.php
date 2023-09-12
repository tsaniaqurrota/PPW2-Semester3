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
        </tr>
        @endforeach
    </tbody>
</table>


