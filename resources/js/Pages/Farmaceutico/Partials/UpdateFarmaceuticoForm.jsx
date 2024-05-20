import InputLabel from '@/Components/InputLabel';
import InputError from '@/Components/InputError';
import TextInput from '@/Components/TextInput';
import { Transition } from '@headlessui/react';
import { Link, useForm } from '@inertiajs/react';
import SelectInput from "@/Components/SelectInput.jsx";
import React from 'react';


export default function UpdateFarmaceuticoOrderForm({ farmaceutico, className = '' }) {

    const {data, setData, patch,errors,recentlySuccessful} = useForm({ 
        name: farmaceutico.user.name,
        apellidos: farmaceutico.user.apellidos,
        email: farmaceutico.user.email,
        genero: farmaceutico.user.genero,
        dni: farmaceutico.dni,
        fecha_contratacion: farmaceutico.fecha_contratacion,
        sueldo: farmaceutico.sueldo,
    });

    const submit = (e) => {
        e.preventDefault();
        console.log(data);
        patch(route('farmaceuticos.update', farmaceutico.id));
    };

    const generoOptions = [
        'Masculino',
        'Femenino',
        'Otro',
    ];

    React.useEffect(() => {
        console.log(farmaceutico.user)
    }, [])

    return (
        <section className={className}>
            <header>
                <h2 className="text-lg font-medium text-gray-900">Información sobre el farmacéutico</h2>

                <p className="mt-1 text-sm text-gray-600">
                    Aquí puedes modificar la información sobre éste empleado
                </p>
            </header>

            <form onSubmit={submit} className="mt-6 space-y-6">
                <div>
                    <InputLabel htmlFor="name" value="name" />

                    <TextInput
                        id="name"
                        className="mt-1 block w-full"
                        value={data.name}
                        onChange={(e) => setData('name', e.target.value)}
                        autoFocus
                    />
                </div>

                <div>
                    <InputLabel htmlFor="apellidos" value="apellidos" />

                    <TextInput
                        id="apellidos"
                        className="mt-1 block w-full"
                        value={data.apellidos}
                        onChange={(e) => setData('apellidos', e.target.value)}
                        autoFocus
                    />
                </div>

                <div>
                    <InputLabel htmlFor="email" value="email" />

                    <TextInput
                        id="email"
                        className="mt-1 block w-full"
                        value={data.email}
                        onChange={(e) => setData('email', e.target.value)}
                        autoFocus
                    />
                </div>

                <div>
                    <InputLabel htmlFor="genero" value="genero" />

                    <SelectInput
                        id="genero"
                        className="mt-1 block w-full"
                        options={generoOptions}
                        value={data.genero}
                        onChange={(e) => setData('genero', e.target.value)}
                        autoFocus
                    />
                </div>

                <div>
                    <InputLabel htmlFor="dni" value="DNI" />

                    <TextInput
                        id="dni"
                        className="mt-1 block w-full"
                        value={data.dni}
                        onChange={(e) => setData('dni', e.target.value)}
                        autoFocus
                    />
                </div>

                <div>
                    <InputLabel htmlFor="fecha_contratacion" value="Fecha Contratación" />

                    <TextInput
                        id="fecha_contratacion"
                        className="mt-1 block w-full"
                        value={data.fecha_contratacion}
                        onChange={(e) => setData('fecha_contratacion', e.target.value)}
                        autoFocus
                    />
                </div>

                <div>
                    <InputLabel htmlFor="sueldo" value="Sueldo" />

                    <TextInput
                        id="sueldo"
                        className="mt-1 block w-full"
                        value={data.sueldo}
                        onChange={(e) => setData('sueldo', e.target.value)}
                        autoFocus
                    />
                    
                </div>

                <div className="mt-4 text-right">
                    <Link
                        href={route("farmaceuticos.index")}
                        className="bg-gray-100 py-1 px-3 text-gray-800 rounded shadow transition-all hover:bg-gray-200 mr-2"
                    >
                        Cancelar
                    </Link>
                    <button
                        className="bg-emerald-500 py-1 px-3 text-white rounded shadow transition-all hover:bg-emerald-600"
                    >
                        Guardar
                    </button>

                    {/* Moved Transition component out of button */}
                    <Transition
                        show={recentlySuccessful}
                        enter="transition ease-in-out"
                        enterFrom="opacity-0"
                        leave="transition ease-in-out"
                        leaveTo="opacity-0"
                    >
                        <p className="text-sm text-gray-600">Guardado.</p>
                    </Transition>
                </div>
                <InputError message={errors.message} className='mt-2'/>
            </form>
        </section>
    );
}
