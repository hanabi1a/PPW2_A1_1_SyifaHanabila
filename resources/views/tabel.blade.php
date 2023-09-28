<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>ID Supplier</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_barang as $barang)
        <tr>
            <td>{{ $barang->id }}</td>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ "Rp ".number_format($barang->harga, 2, ',', '.') }}</td>
            <td>{{ $barang->id_supplier }}</td>
        </tr>

        @endforeach
    </tbody>
</table>