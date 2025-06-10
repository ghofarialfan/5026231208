@extends('template')

@section('content')
    <h3>Tambah Sofa Baru</h3>

    <a href="/sofa" class="btn btn-info"> Kembali</a>

    <br/>
    <br/>

    <!-- Form untuk menambah data sofa dengan tampilan yang konsisten -->
    <form action="/sofa/store" method="post">
        {{ csrf_field() }}

        <!-- Form untuk Merk Sofa -->
        <div class="row mb-3">
            <div class="col-3">
                Merk Sofa
            </div>
            <div class="col-4">
                <input type="text" name="merkSofa" required="required" class="form-control">
            </div>
        </div>

        <!-- Form untuk Harga Sofa -->
        <div class="row mb-3">
            <div class="col-3">
                Harga Sofa
            </div>
            <div class="col-4">
                <input type="number" name="hargaSofa" required="required" class="form-control">
            </div>
        </div>

        <!-- Form untuk Tersedia (Checkbox) -->
        <div class="row mb-3">
            <div class="col-3">
                Tersedia
            </div>
            <div class="col-4">
                <input type="hidden" name="tersedia" value="0">
                <input type="checkbox" name="tersedia" value="1">
            </div>
        </div>

        <!-- Form untuk Berat Sofa -->
        <div class="row mb-3">
            <div class="col-3">
                Berat
            </div>
            <div class="col-4">
                <input type="number" name="berat" step="0.1" required="required" class="form-control">
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>

@endsection
