@extends('template')

@section('content')
    <h3>Edit Data Karyawan</h3>

    <a href="/newkaryawan" class="btn btn-info">Kembali</a>

    <br/>
    <br/>

    @foreach($karyawan as $k)
    <form action="/newkaryawan/update" method="post">
        {{ csrf_field() }}
        <!-- Kode Pegawai (hidden, karena PK tidak boleh diubah) -->
        <input type="hidden" name="NIP" value="{{ $k->NIP }}">

        <!-- Form Nama Lengkap -->
        <div class="row mb-3">
            <div class="col-3">
                Nama Lengkap
            </div>
            <div class="col-4">
                <input type="text" name="nama" required="required" value="{{ $k->nama }}" class="form-control">
            </div>
        </div>

        <!-- Form Divisi -->
        <div class="row mb-3">
            <div class="col-3">
                Divisi
            </div>
            <div class="col-4">
                <input type="text" name="pangkat" required="required" maxlength="15" value="{{ $k->pangkat }}" class="form-control">
            </div>
        </div>

        <!-- Form Departemen -->
        <div class="row mb-3">
            <div class="col-3">
                Departemen
            </div>
            <div class="col-4">
                <input type="number" name="gaji" required="required" maxlength="10" value="{{ $k->gaji }}" class="form-control">
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
    @endforeach

@endsection
