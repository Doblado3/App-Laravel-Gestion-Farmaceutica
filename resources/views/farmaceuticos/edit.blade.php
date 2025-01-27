<x-app-layout>
    <x-slot name="header">
        <nav class="font-semibold text-xl text-gray-800 leading-tight" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
              <li class="flex items-center">
                <a href="{{ route('farmaceuticos.index') }}">{{__('Farmaceuticos')}}</a>
                <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
              </li>
              <li>
                <a href="#" class="text-gray-500" aria-current="page">{{__('Editar')}} {{$farmaceutico->user->name}}</a>
              </li>
            </ol>
          </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="font-semibold text-lg px-6 py-4 bg-white border-b border-gray-200">
                    {{__('Información del farmaceutico')}}
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                        <!-- Errores de validación en servidor -->
                        <x-input-error class="mb-4" :messages="$errors->all()" />
                        <form method="POST" action="{{ route('farmaceuticos.update', $farmaceutico->id) }}">
                            @csrf
                            @method('put')
                            <div>
                                <x-input-label for="name" :value="__('Nombre')" />

                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$farmaceutico->user->name" required autofocus />
                            </div>

                            <div>
                                <x-input-label for="apellidos" :value="__('Apellidos')" />

                                <x-text-input id="apellidos" class="block mt-1 w-full" type="text" name="apellidos" :value="$farmaceutico->user->apellidos" required />
                            </div>
                            
                            <div class="mt-4">
                                <x-input-label for="genero" :value="__('Sexo')" />

                                <x-select id="genero" name="genero" required>
                                    <option value="{{$farmaceutico->user->genero}}" >{{$farmaceutico->user->genero}}</option>
                                    <option value="Femenino">{{__('Femenino')}}</option>
                                    <option value="Otro">{{__('Otro')}}</option>
                                </x-select>
                            </div>

                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />

                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$farmaceutico->user->email" required />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="fecha_contratacion" :value="__('Fecha contratación')" />

                                <x-text-input id="fecha_contratacion" class="block mt-1 w-full"
                                                type="date"
                                                name="fecha_contratacion"
                                                :value="$farmaceutico->fecha_contratacion->format('Y-m-d')"
                                                required />
                            </div>

                            <div>
                                <x-input-label for="dni" :value="__('DNI')" />

                                <x-text-input id="dni" class="block mt-1 w-full" type="text" name="dni" :value="$farmaceutico->dni" required />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="sueldo" :value="__('Sueldo')" />

                                <x-text-input id="sueldo" class="block mt-1 w-full" min="0" step="1" type="number" name="sueldo" :value="$farmaceutico->sueldo" required />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="farmacia_id" :value="__('Farmacia de Trabajo')" />


                                <x-select id="farmacia_id" name="farmacia_id" required>
                                    <option value="">{{__('Elige una opción')}}</option>
                                    @foreach ($farmacias as $farmacia)
                                    <option value="{{$farmacia->id}}" @if (old('farmacia_id') == $farmacia->id) selected @endif>{{$farmacia->nombre}}</option>
                                    @endforeach
                                </x-select>
                            </div>


                            <div class="flex items-center justify-end mt-4">
                                <x-danger-button type="button">
                                    <a href= "{{Auth::user()->es_adminitrador ? route('farmaceuticos.index') : url()->previous()}}">
                                    {{ __('Cancelar') }}
                                    </a>
                                </x-danger-button>
                                <x-primary-button class="ml-4">
                                    {{ __('Guardar') }}
                                </x-primary-button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>