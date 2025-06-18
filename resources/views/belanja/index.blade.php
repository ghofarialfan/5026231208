@extends('template')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Data Belanja</h3>
        <a href="/belanja/tambah" class="btn btn-primary">+ Beli</a>
    </div>

    <table class="table table-striped">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian </th>
            <th>Harga Per Item</th>
            <th>Total</th>
            <th>Action</th>

        </tr>
       @foreach ($belanja->items() as $b)
    <tr>
        <td>{{ $b->id ?? 'No ID' }}</td>
        <td>{{ $b->kode_barang ?? 'No Code' }}</td>
        <td>{{ $b->jumlah ?? 'No Quantity' }}</td>
        <td>Rp{{ number_format($b->Harga ?? 0, 0, ',', '.') }}</td>
        <td>Rp{{ number_format($b->jumlah * $b->Harga, 0, ',', '.') }}</td>
        <td>
            <a href="/belanja/hapus/{{ $b->id ?? 'No ID' }}" class="btn btn-danger">Batal</a>
        </td>
    </tr>
@endforeach
 </table>

    {{ $belanja->links() }}
@endsection