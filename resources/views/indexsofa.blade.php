@extends('template')

@section('content')

    <h3>Data Sofa</h3>

    <!-- Menampilkan pesan sukses jika ada -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tombol untuk menambah sofa -->
    <a href="sofa/tambah" class="btn btn-primary">+ Tambah Sofa Baru</a>
    <p>Cari Data Sofa :</p>

    <!-- Form Pencarian Sofa -->
    <form action="sofa/cari" method="GET">
        <input type="text" class="form-control" name="cari" placeholder="Cari Sofa ..">
        <input type="submit" class="btn btn-info" value="CARI">
    </form>
    <br/>

    <!-- Tabel Data Sofa -->
    <table class="table table-striped">
        <tr>
            <th>Merk Sofa</th>
            <th>Harga Sofa</th>
            <th>Tersedia</th>
            <th>Berat</th>
            <th>Opsi</th>
        </tr>

        @foreach($sofa as $s)
        <tr>
            <td>{{ $s->merkSofa }}</td>
            <td>{{ $s->hargaSofa }}</td>
            <td>{{ $s->tersedia ? 'Tersedia' : 'Tidak Tersedia' }}</td>
            <td>{{ $s->berat }}</td>
            <td>
                <!-- Tombol Edit Sofa -->
                <a href="/sofa/edit/{{ $s->ID }}" class="btn btn-success">Edit</a>

                <!-- Tombol Hapus Sofa -->
                <form action="/sofa/hapus/{{ $s->ID }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data sofa ini?')">
                    @csrf
                    @method('DELETE') <!-- Menyimulasikan metode DELETE -->
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <!-- Pagination -->
    {{ $sofa->links() }}

@endsection
