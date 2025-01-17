<x-app-layout>
    <x-slot name="header">
        <nav class="font-semibold text-xl text-gray-800 leading-tight" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
                {{-- <li class="flex items-center">
                  <a href="#">Home</a>
                  <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
                </li> --}}
                <li class="flex items-center">
                    <a href="{{ route('farmaceuticos.index') }}">{{__('Farmaceuticos')}}</a>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/>
                    </svg>
                </li>
                <li>
                    <a href="#" class="text-gray-500" aria-current="page">{{$farmaceutico->user->name}}</a>
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
                    <div>
                        <x-input-label for="name" :value="__('Farmacia')"/>

                        <x-text-input id="name" readonly disabled class="block mt-1 w-full" type="text" name="name"
                                      :value="$farmaceutico->farmacia->nombre" required autofocus/>
                    </div>

                    <div>
                        <x-input-label for="genero" :value="__('Sexo')"/>

                        <x-text-input id="genero" readonly disabled class="block mt-1 w-full" type="text" name="genero"
                                      :value="$farmaceutico->user->genero" required />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="sueldo" :value="__('Sueldo')"/>

                        <x-text-input id="sueldo" readonly disabled class="block mt-1 w-full" type="number" name="sueldo"
                                      :value="$farmaceutico->sueldo" required/>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="fecha_contratacion" :value="__('Fecha contratación')"/>

                        <x-text-input readonly disabled id="fecha_contratacion" class="block mt-1 w-full"
                                      type="date"
                                      name="fecha_contratacion"
                                      :value="$farmaceutico->fecha_contratacion->format('Y-m-d')"
                                      required/>
                    </div>

                    <div>
                        <x-input-label for="antiguedad" :value="__('Días Contratado')"/>

                        <x-text-input id="antiguedad" readonly disabled class="block mt-1 w-full" type="number" name="antiguedad"
                                      :value="$farmaceutico->dias_contratado" required />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-danger-button type="button">
                            <a href="{{route('farmaceuticos.index')}}">
                                {{ __('Volver al listado') }}
                            </a>
                        </x-danger-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
