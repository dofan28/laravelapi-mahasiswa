<?php

namespace App\Http\Controllers;

use App\Models\wali;
use App\Models\dosen;
use App\Models\mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MahasiswaResource;

class MahasiswaApiController extends Controller
{
    public function relasi_1()
    {

        # Temukan mahasiswa dengan nrp 1015015072
        $mahasiswa = Mahasiswa::where('nrp', '=', '1015015072')->first();

        # Tampilkan nama wali mahasiswa
        $response = [
            'nama' =>  $mahasiswa->wali->nama
        ];
        return $response;
    }

    public function relasi_2()
    {
        # Temukan mahasiswa dengan nrp 1015015072
        $mahasiswa = Mahasiswa::where('nrp', '=', '1015015072')->first();


        # Tampilkan nama dosen pembimbing
        $response = [
            'nama' => $mahasiswa->dosen->nama
        ];
        
        return $response;
    }
}
