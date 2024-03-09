<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFarmaceuticoRequest;
use App\Http\Requests\UpdateFarmaceuticoRequest;
use App\Models\Farmaceutico;
use DB;
use Hash;

class FarmaceuticoController extends Controller
{
    
    public function index()
    {
        //$this->authorize('viewAny', Farmaceutico::class);
        $farmaceuticos = Farmaceutico::paginate(10);
        return view('/farmaceuticos', ['farmaceuticos' => $farmaceuticos]);    }

    
    public function create()
    {
        return view('/farmaceuticos/create');
    }

    
    public function store(StoreFarmaceuticoRequest $request)
    {
        
        //$this->authorize('create', Medico::class);
        // TODO: La creación de user y médico debería hacerse transaccionalmente. ¿Demasiado avanzado?
        $user = $this->createUser($request);
        $farmaceutico = new Farmaceutico($request->validated());
        $farmaceutico->farmacia_id = $farmacia->id;
        $farmaceutico->user_id = $user->id;
        $farmaceutico->save();
        session()->flash('success', 'Farmacéutico creado correctamente.');
        return redirect()->route('farmaceuticos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Farmaceutico $farmaceutico)
    {
        return view('farmaceuticos/show',['farmaceutico => $farmaceutico']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Farmaceutico $farmaceutico)
    {
        return view('farmaceuticos/edit',['farmaceutico' => $farmaceutico]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFarmaceuticoRequest $request, Farmaceutico $farmaceutico)
    {
        $user = $farmaceutico->user;
        $user->fill($request->validated());
        $user->save();
        $farmaceutico->fill($request->validated());
        $farmaceutico->save();
        session()->flash('success', 'Farmaceutico modificado correctamente.');
        return redirect()->route('farmaceuticos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Farmaceutico $farmaceutico)
    {
        if($farmaceutico->delete()){
            session()->flash('success','Farmacéutico borrado corréctamente.');
        }else{
            session()->flash('warning','El farmacéutico no pudo borrarse. Inténtelo de nuevo');
            //¿return back()->withInput();?
        }
        return redirect()->route('farmaceuticos.index');
    }
}
