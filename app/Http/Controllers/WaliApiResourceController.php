<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorewaliRequest;
use App\Http\Requests\UpdatewaliRequest;
use App\Http\Resources\WaliResource;
use App\Models\wali;
use Illuminate\Http\Request;

class WaliApiResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return WaliResource::collection(Wali::paginate(5));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorewaliRequest $request)
    {
        return new WaliResource(Wali::create($request->validated()));
    }

    /**
     * Display the specified resource.
     */
    public function show(wali $wali)
    {
        return new WaliResource($wali);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatewaliRequest $request, wali $wali)
    {
        $wali->update($request->validated());
        return new WaliResource($wali);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(wali $wali)
    {
        $wali->delete();
        return response()->noContent();
    }
}
