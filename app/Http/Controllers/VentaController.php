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
        $ventas = Venta::orderBy('fecha_compra','desc')->paginate(15);
        if(Auth::user()->es_farmaceutico)
            $ventas = Auth::user()->farmaceutico->farmacia->ventas()->orderBy('fecha_compra','desc')->paginate(15);
        elseif(Auth::user()->es_paciente)
            $ventas = Auth::user()->paciente->ventas()->orderBy('fecha_compra','desc')->paginate(15);
        return view('/ventas/index', ['ventas' => $ventas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Venta::class);
        $medicamentoComercials = MedicamentoComercial::all();
        $farmacias = Farmacia::all();
        $pacientes = Paciente::all();
        if(Auth::user()->es_farmaceutico)
            return view('ventas/create',['farmacia' => Auth::user()->farmaceutico->farmacia, 'pacientes' => $pacientes, 'medicamentos' => $medicamentoComercials]);
        elseif(Auth::user()->es_paciente)
            return view('ventas/create',['paciente' => Auth::user()->paciente, 'farmacias' => $farmacias]);            
        return view('ventas/create', ['pacientes' => $pacientes, 'farmacias' => $farmacias, 'medicamentos' => $medicamentoComercials]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVentaRequest $request)
    {
        $venta = new Venta($request->validated());
        $venta->save();
        session()->flash('succes', 'Venta realizada de forma correcta');
        return redirect()->route('ventas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Venta $venta)
    {
        $this->authorize('view',$venta);
        return view('ventas/show',['venta' => $venta]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Venta $venta)
    {
        $this->authorize('update', $venta);
        $medicamentoComercials = MedicamentoComercial::all();
        $farmacias = Farmacia::all();
        $pacientes = Paciente::all();
        if(Auth::user()->es_farmaceutico){
            return view('ventas/edit', ['venta' => $venta, 'farmacia' => Auth::user()->farmaceutico->farmacia, 'pacientes' => $pacientes, 'medicamentos' => $medicamentoComercials]);
        }
        elseif(Auth::user()->es_paciente){
            return view('ventas/edit', ['venta' => $venta, 'paciente' => Auth::user()->paciente, 'farmacias' => $farmacias, 'medicamentos' => $medicamentoComercials]);
        }
        return view('ventas/edit',['venta' => $venta, 'pacientes' => $pacientes, 'farmacias' => $farmacias, 'medicamentos' => $medicamentoComercials]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVentaRequest $request, Venta $venta)
    {
        $venta->fill($request->validated());
        $venta->save();
        session()->flash('succes', 'Venta modificada de forma correcta');
        return redirect()->route('ventas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Venta $venta)
    {
        $this->authorize('delete',$venta);
        if($venta->delete())
            session()->flash('succes', 'Venta borrada correctamente');
        else
            session()->flash('warning', 'La venta no pudo borrarse. Probablemente se deba a que haya información que dependa de ella');
        return redirect()->route('ventas.index');
    }

    //---------- PREGUNTAR ESTA FUNCIÓN ----------

    //----------                        ----------
    public function attach_medicamento_comercial(Request $request, Venta $venta)
    {
       
        $this->validateWithBag('attach', $request, [
            'medicamento_comercial_id' => 'required|exists:medicamentoComercial,id',
            'fecha_compra' => 'required|date',
            'cantidad' => 'integer',
            'precio_total' => 'required|numeric|min:0',
        ]);
        $venta->medicamento_comercials()->attach($request->medicamento_comercial_id, [
            'fecha_compra' => $request->fecha_compra,
            'cantidad' => $request->cantidad,
            'precio_total' => $request->precio_total,
        ]);
        return redirect()->route('ventas.edit', $venta->id);
    }

    public function detach_medicamento_comercial(Venta $venta, MedicamentoComercial $medicamentoComercial)
    {
        $venta->medicamento_comercials()->detach($medicamentoComercial->id);
        return redirect()->route('ventas.edit', $venta->id);
    }
}

