<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoredosenRequest;
use App\Http\Requests\UpdatedosenRequest;
use App\Http\Resources\DosenResource;
use App\Models\dosen;
use Illuminate\Http\Request;

class DosenApiResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DosenResource::collection(Dosen::paginate(5));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoredosenRequest $request)
    {
        return new DosenResource(Dosen::create($request->validated()));
    }

    /**
     * Display the specified resource.
     */
    public function show(dosen $dosen)
    {
        return new DosenResource($dosen);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedosenRequest $request, dosen $dosen)
    {
        $dosen->update($request->validated());
        return new DosenResource($dosen);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dosen $dosen)
    {
        $dosen->delete();
        return response()->noContent();
    }
}
