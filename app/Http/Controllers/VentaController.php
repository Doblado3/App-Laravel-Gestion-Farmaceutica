<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVentaRequest;
use App\Http\Requests\UpdateVentaRequest;
use App\Models\Venta;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', Venta::class);
        $ventas = Venta::orderBy('fecha_de_compra', 'desc')->paginate(10);
        if(Auth::user()->es_farmaceutico)
            $ventas = Auth::user()->farmaceutico->ventas()->orderBy('fecha_de_compra', 'desc')->paginate(25);
        elseif(Auth::user()->es_paciente)
            $ventas = Auth::user()->paciente->ventas()->orderBy('fecha_de_compra', 'desc')->paginate(25);
        return view('/ventas/index', ['ventas' => $ventas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Venta::class);
        $medicamentos = MedicamentoComercial::all();
        return view('ventas/create', ['medicamentos' => $medicamentos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVentaRequest $request)
    {
        $venta = new Venta($request->validated());
        $venta->save();
        session()->flash('success', 'Venta creada correctamente');
        return redirect()->route('ventas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Venta $venta)
    {
        $this->authorize('view', $venta);
        return view('ventas/show', ['venta' => $venta]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Venta $venta)
    {
        $this->authorize('update', $venta);
        return view('ventas/edit', ['venta' => $venta]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVentaRequest $request, Venta $venta)
    {
        $venta->fill($request->validated());
        &venta->save();
        session()->flash('succes','Venta modificada correctamente.');
        return redirect()->route('ventas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Venta $venta)
    {
        $this->authorize('delete', $venta);
        if($venta->delete()){
            session()->flash('success','Venta borrada corréctamente.');
        }else{
            session()->fash('warning','La venta no pudo borrarse. Inténtelo de nuevo');
            //¿return back()->withInput();?
        }
        return redirect()->route('ventas.index');
    }
}
