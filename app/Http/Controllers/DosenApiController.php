<?php

namespace App\Http\Controllers;

use App\Models\dosen;
use Illuminate\Http\Request;

class DosenApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function relasi_3()
    {
        # Temukan dosen dengan yang bernama Yulianto
        $dosen = Dosen::where('nama', '=', 'Yulianto')->first();

        # Tampilkan seluruh data mahasiswa didikannya
        foreach ($dosen->mahasiswa as $temp) {
            // $rows = [];
            $response = [
                'nama' => $temp->nama,
                'nrp' => $temp->nrp,
            ];

            $responses[] = $response;
        }
        return $responses;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(dosen $dosen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dosen $dosen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dosen $dosen)
    {
        //
    }
}
