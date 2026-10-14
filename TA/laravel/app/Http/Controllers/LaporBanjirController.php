<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporBanjirController extends Controller
{
    // 1. Menampilkan halaman form input
    public function form()
    {
        return view('laporbanjir.form');
    }

    // 2. Menyimpan data dari form ke database
    public function simpan(Request $request)
    {
        // Validasi dan Simpan menggunakan Eloquent Model
        Laporan::create([
            'nama_pelapor' => $request->nama_pelapor,
            'lokasi' => $request->lokasi,
            'tinggi_genangan' => $request->tinggi_genangan,
            'tanggal_kejadian' => $request->tanggal_kejadian,
        ]);

        // Bisa diarahkan langsung kembali ke halaman daftar atau pesan sukses
        return redirect('/daftar')->with('success', 'Data laporan berhasil disimpan!');
    }

    // 3. Menampilkan daftar laporan dari database
    public function daftar()
    {
        // Mengambil seluruh data dari tabel laporan
        $laporan = Laporan::all();
        
        // Mengirim data ke view
        return view('laporbanjir.index', compact('laporan'));
    }
}