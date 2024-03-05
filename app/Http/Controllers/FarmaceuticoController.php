<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFarmaceuticoRequest;
use App\Http\Requests\UpdateFarmaceuticoRequest;
use App\Models\Farmaceutico;
use DB;

class FarmaceuticoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', Farmaceutico::class);
        $mfarmaceuticos = Farmaceutico::paginate(10);
        return view('/farmaceuticos/index', ['farmaceuticos' => $farmaceuticos]);    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/farmaceuticos/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFarmaceuticoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Farmaceutico $farmaceutico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Farmaceutico $farmaceutico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFarmaceuticoRequest $request, Farmaceutico $farmaceutico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Farmaceutico $farmaceutico)
    {
        //
    }
}
