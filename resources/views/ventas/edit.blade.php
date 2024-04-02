<x-app-layout>
    <x-slot name="header">
        <nav class="font-semibold text-xl text-gray-800 leading-tight" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
              <li class="flex items-center">
                <a href="{{ route('ventas.index') }}">{{__('Ventas')}}</a>
                <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
              </li>
              <li>
                <a href="#" class="text-gray-500" aria-current="page">{{__('Editar')}} {{$venta->fecha_de_compra}}</a>
              </li>
            </ol>
          </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="font-semibold text-lg px-6 py-4 bg-white border-b border-gray-200">
                    {{__('Información de la Venta')}}
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                        <!-- Errores de validación en servidor -->
                        <x-input-error class="mb-4" :messages="$errors->all()" />
                        <form method="POST" action="{{ route('ventas.update', $ventas->id) }}">
                            @csrf
                            @method('put')
                            <div class="mt-4">
                            <x-input-label for="paciente_id" :value="__('Paciente')" />

                            @isset($paciente)
                                <x-text-input id="paciente_id" class="block mt-1 w-full"
                                         type="hidden"
                                         name="paciente_id"
                                         :value="$paciente->id"
                                         required />
                                <x-text-input class="block mt-1 w-full"
                                         type="text"
                                         disabled
                                         value="{{$paciente->user->name}} ({{$paciente->nuhsa}})"
                                          />
                            @else
                            <x-select id="paciente_id" name="paciente_id" required>
                                <option value="">{{__('Elige un paciente')}}</option>
                                @foreach ($pacientes as $paciente)
                                    <option value="{{$paciente->id}}" @if (old('paciente_id') == $paciente->id) selected @endif>{{$paciente->user->name}} ({{$paciente->nuhsa}})</option>
                                @endforeach
                            </x-select>
                            @endisset
                            </div>
                            <div class="mt-4">
                            <x-input-label for="farmaceutico_id" :value="__('Farmacéutico')" />

                            @isset($farmaceutico)
                                <x-text-input id="farmaceutico_id" class="block mt-1 w-full"
                                         type="hidden"
                                         name="farmaceutico_id"
                                         :value="$farmaceutico->id"
                                         required />
                                <x-text-input class="block mt-1 w-full"
                                         type="text"
                                         disabled
                                         value="{{$farmacia->farmaceutico->user->name}}"
                                          />
                            @else
                                <x-select id="farmaceutico_id" name="farmaceutico_id" required>
                                    <option value="">{{__('Elige un farmacéutico')}}</option>
                                    @foreach ($farmaceuticos as $farmaceutico)
                                        <option value="{{$farmaceutico->id}}" @if (old('farmaceutico_id') == $farmacia->farmaceutico->id) selected @endif>{{$farmacia->farmaceutico->user->name}}</option>
                                    @endforeach
                                </x-select>
                            @endisset
                            </div>
                            <div>
                                <x-input-label for="cantidad" :value="__('Cantidad')" />

                                <x-text-input id="cantidad" class="block mt-1 w-full" type="text" name="name" :value="old('cantidad')" required autofocus />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="farmacia_id" :value="__('Farmacia')" />


                                <x-select id="farmacia_id" name="farmacia_id" required>
                                    <option value="">{{__('Elige una opción')}}</option>
                                    @foreach ($farmacias as $farmacia)
                                    <option value="{{$farmacia->id}}" @if (old('farmacia_id') == $farmacia->id) selected @endif>{{$farmacia->nombre}}</option>
                                    @endforeach
                                </x-select>
                            </div>
                            <div class="mt-4">
                                <x-input-label for="fecha_de_compra" :value="__('Fecha y hora de venta')" />

                                <x-text-input id="fecha_de_compra" class="block mt-1 w-full"
                                        type="datetime-local"
                                        name="fecha_de_compra"
                                        :value="old('fecha_de_compra')"
                                        required />
                            </div>
                            <div>
                                <x-input-label for="precio_unitario" :value="__('Precio por Unidad')" />

                                <x-text-input id="precio_unitario" class="block mt-1 w-full" type="text" name="precio_unitario" :value="old('precio_unitario')" required autofocus />
                            </div>
                            <div>
                                <x-input-label for="precio_total" :value="__('Precio Total')" />

                                <x-text-input id="precio_total" class="block mt-1 w-full" type="text" name="precio_total" :value="old('precio_total')" required autofocus />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="medicamento_comercial_id" :value="__('Medicamento')" />

                                @isset($medicamentoComercials)
                                    <x-text-input id="medicamento_comercial_id" class="block mt-1 w-full"
                                            type="hidden"
                                            name="medicamento_comercial_id"
                                            :value="$medicamentoComercial->id"
                                            required />
                                    <x-text-input class="block mt-1 w-full"
                                            type="text"
                                            disabled
                                            value="{{$medicamentoComercial->name}}"
                                          />
                                @else
                                    <x-select id="medicamento_comercial_id" name="medicamento_comercial_id" required>
                                        <option value="">{{__('Medicamentos vendidos')}}</option>
                                        @foreach ($medicamentoComercials as $medicamentoComercial)
                                            <option value="{{$medicamentoComercial->id}}" @if (old('medicamento_comercial_id') == $medicamentoComercial->id) selected @endif>{{$medicamentoComercial->name}}</option>
                                        @endforeach
                                    </x-select>
                                @endisset
                             </div>


                            <div class="flex items-center justify-end mt-4">
                                <x-danger-button type="button">
                                    <a href= "{{Auth::user()->es_adminitrador ? route('ventas.index') : url()->previous()}}">
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