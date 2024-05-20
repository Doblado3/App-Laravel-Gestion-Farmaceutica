<?php

namespace App\Http\Controllers;

use App\Http\Requests\Farmaceutico\StoreFarmaceuticoRequest;
use App\Http\Requests\Farmaceutico\UpdateFarmaceuticoRequest;
use App\Models\Farmaceutico;
use App\Models\User;
use App\Models\Farmacia;
use Inertia\Inertia;
use Inertia\Response;

use DB;
use Hash;
use Illuminate\Http\Request;

class FarmaceuticoController extends Controller
{
    
    public function index(): Response
    {
       $this->authorize('viewAny', Farmaceutico::class);
        $farmaceuticos = Farmaceutico::all();
        return Inertia::render('Farmaceutico/Index', [
            'farmaceuticos' => $farmaceuticos,
        ]);
    }

    
    public function create()
    {
        $this->authorize('create', Farmaceutico::class);
        $farmacias = Farmacia::all();
        return view('farmaceuticos/create', ['farmacias' => $farmacias]);
    }
    private function createUser(Request $request)
    {
        $user = new User($request->validated());
        $user->password = Hash::make($user->password);
        $user->save();
        return $user;
    }

   
    public function store(StoreFarmaceuticoRequest $request)
    {
        
        $this->authorize('create', Farmaceutico::class);
        $user = $this->createUser($request);
        $farmaceutico = new Farmaceutico($request->validated());
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
        $this->authorize('view', $farmaceutico);
        $farmacias = Farmacia::all();
        return view('farmaceuticos/show',['farmaceutico' => $farmaceutico, 'farmacias' => $farmacias]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Farmaceutico $farmaceutico): Response
    {
        $this->authorize('update', $farmaceutico);
        $farmacias = Farmacia::all();
        $user = $farmaceutico->user();
        return Inertia::render('Farmaceutico/Edit', [
            'farmaceutico' => $farmaceutico
        ]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(UpdateFarmaceuticoRequest $request, Farmaceutico $farmaceutico)
    {
        $data = $request->validated();
        $farmaceutico->update($data);
        return redirect(route('farmaceuticos.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Farmaceutico $farmaceutico)
    {
        $this->authorize('delete', $farmaceutico);
        if($farmaceutico->delete()){
            session()->flash('success','Farmacéutico borrado corréctamente.');
        }else{
            session()->flash('warning','El farmacéutico no pudo borrarse. Inténtelo de nuevo');
        }
        return redirect()->route('farmaceuticos.index');
    }
}
