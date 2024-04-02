<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMedicamentoComercialRequest;
use App\Http\Requests\UpdateMedicamentoComercialRequest;
use App\Models\MedicamentoComercial;

class MedicamentoComercialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', MedicamentoComercial::class);
        $medicamentosComerciales = MedicamentoComercial::paginate(10);
        return view('/medicamentos_comerciales/index', ['medicamentos_comerciales' => $medicamentosComerciales]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', MedicamentoComercial::class);
        return view('medicamentos_comerciales/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMedicamentoComercialRequest $request)
    {
        $medicamentoComercial = new MedicamentoComercial($request->validated());
        $medicamentoComercial->save();
        session()->flash('success','Medicamento Comercial creado correctamente');
        return redirect()->route('medicamentos_comerciales.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(MedicamentoComercial $medicamentoComercial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MedicamentoComercial $medicamentoComercial)
    {
        $this->authorize('update', $medicamentoComercial)
        return view('medicamentos_comerciales/edit', ['medicamento_comercial' => $medicamentoComercial]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMedicamentoComercialRequest $request, MedicamentoComercial $medicamentoComercial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MedicamentoComercial $medicamentoComercial)
    {
        //
    }
}
