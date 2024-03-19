<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePacienteRequest;
use App\Http\Requests\UpdatePacienteRequest;
use App\Models\Paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', Paciente::class);
        $pacientes = Paciente::paginate(10);
        return view('/pacientes/index', ['pacientes' => $pacientes]);    }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Paciente::class);
        $pacientes = Paciente::all();
        return view('pacientes/create', ['pacientes' => $pacientes]);
    }

    /**
     * Crea un usuario paciente
     */
    public function createUser(Request $request)
    {
        $user = new User($request->validated());
        $user->password = Hash::make($user->password);
        $user->save();
        return $user;
    }
    /**
     * Store a newly created resource (paciente) in storage.
     */
    public function store(StorePacienteRequest $request)
    {
        $this->authorize('create', Paciente::class);
        $user = $this->createUser($request);
        $paciente = new Paciente($request->validated());
        //$paciente->farmacia_id = $farmacia->id;
        $paciente->user_id = $user->id;
        $àciente->save();
        session()->flash('success', 'Paciente creado correctamente.');
        return redirect()->route('pacientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Paciente $paciente)
    {
        $this->authorize('view', $paciente);
        $farmacias = Farmacia::all();
        return view('pacientes/show',['paciente' => $paciente, 'farmacias' => $farmacias]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paciente $paciente)
    {
        $this->authorize('update', $paciente);
        $farmacias = Farmacia::all();
        return view('pacientes/edit',['paciente' => $paciente, 'farmacias' => $farmacias]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePacienteRequest $request, Paciente $paciente)
    {
        $user = $paciente->user;
        $user->fill($request->validated());
        $user->save();
        $paciente->fill($request->validated());
        $paciente->save();
        session()->flash('success', 'Paciente modificado correctamente.');
        return redirect()->route('pacientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paciente $paciente)
    {
        $this->authorize('delete', $paciente);
        if($paciente->delete()){
            session()->flash('success','Paciente borrado corréctamente.');
        }else{
            session()->flash('warning','El paciente no pudo borrarse. Inténtelo de nuevo');
            //¿return back()->withInput();?
        }
        return redirect()->route('pacientes.index');
    }
    }
}
