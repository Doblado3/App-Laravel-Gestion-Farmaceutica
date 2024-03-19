<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFarmaciaRequest;
use App\Http\Requests\UpdateFarmaciaRequest;
use App\Models\Farmacia;

class FarmaciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->autorize('viewAny', Farmacia::class);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFarmaciaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Farmacia $farmacia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Farmacia $farmacia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFarmaciaRequest $request, Farmacia $farmacia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Farmacia $farmacia)
    {
        //
    }
}
