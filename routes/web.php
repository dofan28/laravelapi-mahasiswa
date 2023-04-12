<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Dengan hanya menggunakan model Mahasiswa, saya bisa memanggil data dari tabel wali yang notabene milik model Wali.
// relasi 1 - one to one
// Route::get('relasi-1', function () {
//     # Temukan mahasiswa dengan nrp 1015015072
//     $mahasiswa = App\Models\Mahasiswa::where('nrp', '=', '1015015072')->first();

//     # Tampilkan nama wali mahasiswa
//     return $mahasiswa->wali->nama;

// });

// Relasi one to Many
// Route::get('relasi-2', function () {
//     # Temukan mahasiswa dengan nrp 1015015072
//     $mahasiswa = App\Models\Mahasiswa::where('nrp', '=', '1015015072')->first();

//     # Tampilkan nama dosen pembimbing
//     return $mahasiswa->dosen->nama;
// });

// Route::get('relasi-3', function () {
//     # Temukan dosen dengan yang bernama Yulianto
//     $dosen = App\Models\Dosen::where('nama', '=', 'Yulianto')->first();

//     # Tampilkan seluruh data mahasiswa didikannya
//     foreach ($dosen->mahasiswa as $temp) {
//         echo '<li> Nama : ' . $temp->nama . ' <strong>' . $temp->nrp . '</strong></li>';
//     }
// });