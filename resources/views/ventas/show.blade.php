<x-app-layout>
    <x-slot name="header">
        <nav class="font-semibold text-xl text-gray-800 leading-tight" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="{{ route('ventas.index') }}">Ventas</a>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
                </li>
                <li>
                    <a href="#" class="text-gray-500" aria-current="page">Ver venta</a>
                </li>
            </ol>
        </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="font-semibold text-lg px-6 py-4 bg-white border-b border-gray-200">
                    Información de la venta
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                        <div class="mt-4">
                            <x-input-label for="paciente_id" :value="__('Paciente')" />

                                <x-text-input class="block mt-1 w-full"
                                         type="text"
                                         disabled
                                         value="{{$venta->paciente->user->name}} ({{$venta->paciente->nuhsa}})"
                                />

                        </div>
                        <div class="mt-4">
                            <x-input-label for="cantidad" :value="__('Cantidad')" />

                                <x-text-input class="block mt-1 w-full"
                                         type="number"
                                         disabled
                                         value="{{$venta->cantidad}}"
                                />

                        </div>
                        <div class="mt-4">
                            <x-input-label for="farmacia_id" :value="__('Farmacia')" />

                                <x-text-input class="block mt-1 w-full"
                                         type="text"
                                         disabled
                                         value="{{$venta->farmacia->nombre}} ({{$venta->farmacia->telefono}})"
                                />

                        </div>
                        <div class="mt-4">
                            <x-input-label for="fecha_compra" :value="__('Fecha de Compra')" />

                            <x-text-input id="fecha_compra" class="block mt-1 w-full"
                                     type="datetime-local"
                                     name="fecha_compra"
                                     disabled
                                     :value="$venta->fecha_compra->format('Y-m-d\TH:i:s')"
                                     required />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="precio_unitario" :value="__('Precio Unitario')" />

                                <x-text-input class="block mt-1 w-full"
                                         type="number"
                                         disabled
                                         value="{{$venta->precio_unitario}}"
                                />

                        </div>
                        <div class="mt-4">
                            <x-input-label for="precio_total" :value="__('Precio Total')" />

                                <x-text-input class="block mt-1 w-full"
                                         type="number"
                                         disabled
                                         value="{{$venta->precio_total}}"
                                />

                        </div>

                        <div class="mt-4">
                            <x-input-label for="medico_comercial_id" :value="__('Medicamento')" />
                                <x-text-input class="block mt-1 w-full"
                                         type="text"
                                         disabled
                                         value="{{$venta->medicamento_comercial->name}}"
                                />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-danger-button type="button">
                                <a href="{{route('ventas.index')}}">
                                    {{ __('Volver') }}
                                </a>
                            </x-danger-button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>