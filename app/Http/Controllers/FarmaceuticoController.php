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
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'dni' => 'required|string|max:255|unique:users',
            'fecha_contratacion' => 'required|date',
            'sueldo' => 'required|numeric',
            //'farmacia_id' => 'required|exists:farmacias,id' // En caso de más de una farmacia

        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $farmaceutico = new Farmaceutico($request->all());
        $farmaceutico->farmacia_id = $farmacia->id;
        $farmaceutico->user_id = $user->id;
        $farmaceutico->save();
        session()->flash('success','Farmacéutico creado correctamente');
        return redirect()->route('farmaceuticos.index');
        //$this->authorize('create', Medico::class);
        // TODO: La creación de user y médico debería hacerse transaccionalmente. ¿Demasiado avanzado?
        //$user = $this->createUser($request);
        //$medico = new Medico($request->validated());
        //$medico->user_id = $user->id;
        //$medico->save();
        //session()->flash('success', 'Médico creado correctamente. Si nos da tiempo haremos este mensaje internacionalizable y parametrizable');
        //return redirect()->route('medicos.index');
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
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'dni' => 'required|string|max:255',
            'fecha_contratacion' => 'required|date',
            'sueldo' => 'required|numeric',
        ]);
        $user = $farmaceutico->user;
        $user->fill($request->all());
        $user->save();
        $farmaceutico->fill($request->all());
        $farmaceutico->save();
        session()->flash('success','Farmacéutico modificado correctamente');
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
        }
        return redirect()->route('farmaceuticos.index');
    }
}
