<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewKaryawanController extends Controller
{
    // Menampilkan semua data karyawan
    public function index()
    {
        $newkaryawan = DB::table('newkaryawan')->paginate(10);
        return view('indexnewkaryawan', ['newkaryawan' => $newkaryawan]);
    }

    // Menampilkan form tambah data
    public function tambah()
    {
        return view('tambahnewkaryawan');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'NIP' => 'required|size:9|unique:karyawan,kodepegawai',
            'nama' => 'required|max:50',
            'pangkat' => 'required|max:15',
            'gaji' => 'required|max:10',
        ]);

        try {
            DB::table('newkaryawan')->insert([
                'NIP' => $request->NIP,
                'nama' => $request->nama,
                'pangkat' => $request->pangkat,
                'gaji' => $request->gaji
            ]);

            return redirect('/newkaryawan')->with('success', 'Data karyawan berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect('/newkaryawan')->with('error', 'Data karyawan gagal disimpan: ' . $e->getMessage());
        }
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $newkaryawan = DB::table('newkaryawan')->where('NIP', $id)->get();
        return view('editnewkaryawan', ['newkaryawan' => $newkaryawan]);
    }

    // Menyimpan perubahan data
    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|max:50',
            'pangkat' => 'required|max:15',
            'gaji' => 'required|max:10',
        ]);

        try {
            DB::table('newkaryawan')->where('NIP', $request->NIP)->update([
                'nama' => $request->nama,
                'pangkat' => $request->pangkat,
                'gaji' => $request->gaji
            ]);

            return redirect('/newkaryawan')->with('success', 'Data karyawan berhasil diubah!');
        } catch (\Exception $e) {
            return redirect('/newkaryawan')->with('error', 'Gagal memperbarui data: ' . $e->getMessage());
        }
    }

    // Menghapus data
    public function hapus($id)
    {
        try {
            DB::table('newkaryawan')->where('NIP', $id)->delete();
            return redirect('/newkaryawan')->with('success', 'Data karyawan berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect('/newkaryawan')->with('error', 'Gagal menghapus data: ' . $e->getMessage());
        }
    }

    // Mencari data
    public function cari(Request $request)
    {
        $cari = $request->cari;

        $newkaryawan = DB::table('newkaryawan')
            ->where('nama', 'like', "%" . $cari . "%")
            ->orWhere('pangkat', 'like', "%" . $cari . "%")
            ->orWhere('gaji', 'like', "%" . $cari . "%")

            ->paginate();

        return view('indexnewkaryawan', ['newkaryawan' => $newkaryawan, 'cari' => $cari]);
    }
}
