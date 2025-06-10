<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SofaController extends Controller
{
    // Menampilkan semua data sofa
    public function index()
    {
        // Mengambil data dari tabel sofa dengan pagination
        $sofa = DB::table('sofa')->paginate(10);  // Menampilkan 10 data per halaman

        // Mengirim data sofa ke view indexsofa
        return view('indexsofa', ['sofa' => $sofa]);
    }

    // Menampilkan form untuk menambah sofa
    public function tambah()
    {
        // Memanggil view untuk form tambah sofa
        return view('tambahsofa');
    }

    // Menyimpan data sofa baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'merkSofa' => 'required|max:25',
            'hargaSofa' => 'required|integer',
            'tersedia' => 'required|boolean',
            'berat' => 'required|numeric'
        ]);

        // Insert data ke tabel sofa
        DB::table('sofa')->insert([
            'merkSofa' => $request->merkSofa,
            'hargaSofa' => $request->hargaSofa,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);

        // Alihkan halaman ke halaman daftar sofa dengan pesan sukses
        return redirect('/sofa')->with('success', 'Data sofa berhasil ditambahkan!');
    }

    // Menampilkan form untuk edit data sofa
    public function edit($id)
    {
        // Mengambil data sofa berdasarkan ID
        $sofa = DB::table('sofa')->where('ID', $id)->get();

        // Mengirim data sofa yang ditemukan ke view editsofa
        return view('editsofa', ['sofa' => $sofa]);
    }

    // Menyimpan perubahan data sofa
    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'merkSofa' => 'required|max:25',
            'hargaSofa' => 'required|integer',
            'tersedia' => 'required|boolean',
            'berat' => 'required|numeric'
        ]);

        // Update data sofa di tabel sofa berdasarkan ID
        DB::table('sofa')->where('ID', $request->ID)->update([
            'merkSofa' => $request->merkSofa,
            'hargaSofa' => $request->hargaSofa,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);

        // Alihkan halaman ke halaman daftar sofa dengan pesan sukses
        return redirect('/sofa')->with('success', 'Data sofa berhasil diubah!');
    }

    // Menghapus data sofa
    public function hapus($id)
    {
        // Menghapus data sofa berdasarkan ID
        DB::table('sofa')->where('ID', $id)->delete();

        // Alihkan halaman ke halaman daftar sofa dengan pesan sukses
        return redirect('/sofa')->with('success', 'Data sofa berhasil dihapus!');
    }

    // Menyaring data sofa berdasarkan pencarian
    public function cari(Request $request)
    {
        // Menangkap data pencarian
        $cari = $request->cari;

        // Mengambil data dari tabel sofa sesuai pencarian
        $sofa = DB::table('sofa')
            ->where('merkSofa', 'like', "%" . $cari . "%")
            ->paginate();

        // Mengirim data sofa dan pencarian ke view indexsofa
        return view('indexsofa', ['sofa' => $sofa, 'cari' => $cari]);
    }
}
