@extends('template')

@section('content')
    <h3>Edit Sofa</h3>

    <a href="/sofa" class="btn btn-info"> Kembali</a>

    <br/>
    <br/>

    @foreach($sofa as $s)
    <form action="/sofa/update/{{ $s->ID }}" method="post">
        {{ csrf_field() }}

        <!-- Hidden input for ID -->
        <input type="hidden" name="ID" value="{{ $s->ID }}"> <br/>

        <!-- Form for Merk Sofa -->
        <div class="row mb-3">
            <div class="col-3">
                Merk Sofa
            </div>
            <div class="col-4">
                <input type="text" name="merkSofa" required="required" value="{{ $s->merkSofa }}">
            </div>
        </div>

        <!-- Form for Harga Sofa -->
        <div class="row mb-3">
            <div class="col-3">
                Harga Sofa
            </div>
            <div class="col-4">
                <input type="number" name="hargaSofa" required="required" value="{{ $s->hargaSofa }}">
            </div>
        </div>

        <!-- Form for Tersedia (Checkbox) -->
        <div class="row mb-3">
            <div class="col-3">
                Tersedia
            </div>
            <div class="col-4">
                <input type="hidden" name="tersedia" value="0">
                <input type="checkbox" name="tersedia" value="1" {{ $s->tersedia ? 'checked' : '' }}>
            </div>
        </div>

        <!-- Form for Berat Sofa -->
        <div class="row mb-3">
            <div class="col-3">
                Berat
            </div>
            <div class="col-4">
                <input type="number" name="berat" step="0.1" required="required" value="{{ $s->berat }}">
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
    @endforeach

@endsection
