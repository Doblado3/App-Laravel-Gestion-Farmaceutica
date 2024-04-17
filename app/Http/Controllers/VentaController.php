<?php

namespace App\Http\Controllers;

use App\Http\Requests\Venta\StoreVentaRequest;
use App\Http\Requests\Venta\UpdateVentaRequest;
use App\Models\Venta;
use App\Models\Paciente;
use App\Models\Farmacia;
use App\Models\Medicamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', Venta::class);
        
        $ventas = Venta::orderBy('fecha_compra','desc')->paginate(15);
        if(Auth::user()->es_paciente)
            $ventas = Auth::user()->paciente->venta()->orderBy('fecha_compra','desc')->paginate(15);
        elseif(Auth::user()->es_farmaceutico)
            $ventas = Auth::user()->farmaceutico->farmacia->venta()->orderBy('fecha_compra','desc')->paginate(15);
        return view('/ventas/index', ['ventas' => $ventas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Venta $venta)
    {
        $this->authorize('create', Venta::class);
        $medicamentos = Medicamento::all();
        $pacientes = Paciente::all();
        $farmacias = Farmacia::all();
        if(Auth::user()->es_farmaceutico){
            return view('ventas/create', ['venta' => $venta, 'farmacia' => Auth::user()->farmaceutico->farmacia, 'pacientes' => $pacientes, 'medicamentos' => $medicamentos]);
        }
        return view('ventas/create', ['farmacias' => $farmacias, 'pacientes' => $pacientes, 'medicamentos' => $medicamentos]);
    }

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
        $medicamentos = Medicamento::all();
        $farmacias = Farmacia::all();
        $pacientes = Paciente::all();
        if(Auth::user()->es_farmaceutico){
            return view('ventas/edit', ['venta' => $venta, 'farmacia' => Auth::user()->farmaceutico->farmacia, 'pacientes' => $pacientes, 'medicamentos' => $medicamentos]);
        }
        return view('ventas/edit',['venta' => $venta, 'pacientes' => $pacientes, 'farmacias' => $farmacias, 'medicamentos' => $medicamentos]);

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
    public function attach_medicamentoe(Request $request, Venta $venta)
    {

        $this->validateWithBag('attach', $request, [
            'medicamento_id' => 'required|exists:medicamentos,id',
            'cantidad' => 'numeric',
            'precio_unidad' => 'required|numeric|min:0',
        ]);
        $venta->medicamentos()->attach($request->medicamento_id, [
            'cantidad' => $request->cantidad,
            'precio_unitario' => $request->precio_unitario,
        ]);
        return redirect()->route('ventas.edit', $venta->id)->with('success', 'Medicamento añadido exitosamente');
    }

    public function detach_medicamentoe(Venta $venta, Medicamento $medicamento)
    {
        $venta->medicamentos()->detach($medicamento->id);
        return redirect()->route('ventas.create', $venta->id);
    }

    public function attach_medicamentoc(Request $request, Venta $venta)
    {

        $this->validateWithBag('attach', $request, [
            'medicamento_id' => 'required|exists:medicamentos,id',
            'cantidad' => 'numeric',
            'precio_unidad' => 'required|numeric|min:0',
        ]);
        $venta->medicamentos()->attach($request->medicamento_id, [
            'cantidad' => $request->cantidad,
            'precio_unitario' => $request->precio_unitario,
        ]);
        return redirect()->route('ventas.create', $venta->id)->with('success', 'Medicamento añadido exitosamente');
    }
}
