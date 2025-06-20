@extends('template')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Terjadi kesalahan:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul><input type="text" name="gaji" required="required" maxlength="10" class="form-control">

    </div>
@endif

    <h3>Tambah Data Karyawan Baru</h3>

    <a href="/newkaryawan" class="btn btn-info">Kembali</a>

    <br/>
    <br/>

    <!-- Form untuk menambah data karyawan dengan tampilan horizontal -->
    <form action="/newkaryawan/store" method="post">
        {{ csrf_field() }}

        <!-- Form Kode Pegawai -->
        <div class="row mb-3">
            <div class="col-3">
                NIP
            </div>
            <div class="col-4">
                <input type="text" name="NIP" required="required" maxlength="9" class="form-control">
            </div>
        </div>

        <!-- Form Nama Lengkap -->
        <div class="row mb-3">
            <div class="col-3">
                Nama
            </div>
            <div class="col-4">
                <input type="text" name="nama" required="required" maxlength="50" class="form-control">
            </div>
        </div>

        <!-- Form Divisi -->
        <div class="row mb-3">
            <div class="col-3">
                Pangkat
            </div>
            <div class="col-4">
                <input type="text" name="pangkat" required="required" maxlength="15" class="form-control">
            </div>
        </div>

        <!-- Form Departemen -->
        <div class="row mb-3">
            <div class="col-3">
                Gaji
            </div>
            <div class="col-4">
                <input type="number" name="gaji" required="required" maxlength="10" class="form-control">
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>

@endsection
