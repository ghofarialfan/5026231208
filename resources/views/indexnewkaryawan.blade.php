@extends('template')

@section('content')

    <h3>Data Karyawan</h3>

    <!-- Menampilkan pesan sukses -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Menampilkan pesan error -->
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif


    <!-- Tombol untuk menambah data karyawan -->
    <a href="newkaryawan/tambah" class="btn btn-primary">+ Tambah Data Karyawan</a>

    <p>Cari Data Karyawan :</p>

    <!-- Form Pencarian Karyawan -->
    <form action="newkaryawan/cari" method="GET">
        <input type="text" class="form-control" name="cari" placeholder="Cari nama atau divisi...">
        <input type="submit" class="btn btn-info mt-2" value="CARI">
    </form>
    <br/>

    <!-- Tabel Data Karyawan -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Pangkat</th>
                <th>gaji</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($newkaryawan as $k)
            <tr>
                <td>{{ $k->NIP }}</td>
                <!-- Tampilkan huruf kapital semua -->
                <td>{{ strtoupper($k->nama) }}</td>
                <td>{{ $k->pangkat }}</td>
                <!-- Tampilkan huruf kecil semua -->
                <td>{{ strtolower($k->gaji) }}</td>
                <td>
                    <!-- Tombol Edit -->
                    <a href="/newkaryawan/edit/{{ $k->NIP }}" class="btn btn-success">Edit</a>

                    <!-- Tombol Hapus -->
                    <form action="/newkaryawan/hapus/{{ $k->NIP }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data karyawan ini?')">
                        @csrf
                        @method('DELETE') <!-- Menyimulasikan metode DELETE -->
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    {{ $newkaryawan->links() }}

@endsection
