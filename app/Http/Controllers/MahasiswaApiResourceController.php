<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoremahasiswaRequest;
use App\Http\Requests\UpdatemahasiswaRequest;
use App\Http\Resources\MahasiswaResource;
use App\Models\mahasiswa;
use Illuminate\Http\Request;

class MahasiswaApiResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MahasiswaResource::collection(Mahasiswa::paginate(5));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoremahasiswaRequest $request)
    {
    return new MahasiswaResource(Mahasiswa::create($request->validated()));
    }

    /**
     * Display the specified resource.
     */
    public function show(mahasiswa $mahasiswa)
    {
        return new MahasiswaResource($mahasiswa);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemahasiswaRequest $request, mahasiswa $mahasiswa)
    {
        $mahasiswa->update($request->validated());
        return new MahasiswaResource($mahasiswa);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return response()->noContent();
    }
}
