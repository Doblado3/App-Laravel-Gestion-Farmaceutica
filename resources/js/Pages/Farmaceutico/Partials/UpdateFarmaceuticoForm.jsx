import InputLabel from '@/Components/InputLabel';
import InputError from '@/Components/InputError';
import { router } from '@inertiajs/vue3'
import { reactive } from 'vue'
import TextInput from '@/Components/TextInput';
import { Transition } from '@headlessui/react';
import { Link, useForm, usePage } from '@inertiajs/react';
import SelectInput from "@/Components/SelectInput.jsx";


export default function UpdatePizzaOrderForm({ farmaceutico, className = '' }) {

    const {form, data, setData, errors, recentlySuccessful} = useForm({ //data representa al objeto con los valores iniciales para cada uno de los campos
        Nombre:farmaceutico.Nombre,                                                  //setData es un método para poder cambiarlos
        Apellidos:farmaceutico.Apellidos,                                            //errors es el bad de validación
        Email:farmaceutico.Email,                                                    //processing es un boolean que determina si estamos o no cambiando la información
        Genero:farmaceutico.Genero,                                                  //recentlySuccessfull es el mensaje para indicar que todo ha ido bien
        dni:farmaceutico.dni,
        fecha_contratacion:farmaceutico.fecha_contratacion,
        sueldo:farmaceutico.sueldo,
    });

    

    function submit() {
        router.post('farmaceuticos.update', form)
      }

    const generoOptions = [
        'Masculino',
        'Femenino',
        'Otro',
    ];
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
                    <InputLabel htmlFor="Nombre" value="Nombre" />

                    <TextInput
                        id="Nombre"
                        className="mt-1 block w-full"
                        value={data.Nombre} //antes aqui ponía farmaceutico.Nombre, cambiándolo usamos el useForm de Inertia
                        onChange={(e) => setData('Nombre', e.target.value)}

                    />
                </div>

                <div>
                    <InputLabel htmlFor="Apellidos" value="Apellidos" />

                    <TextInput
                        id="Apellidos"
                        className="mt-1 block w-full"
                        value={data.Apellidos}
                        onChange={(e) => setData('Apellidos', e.target.value)}

                    />
                </div>

                <div>
                    <InputLabel htmlFor="Email" value="Email" />

                    <TextInput
                        id="Email"
                        className="mt-1 block w-full"
                        value={data.Email}
                        onChange={(e) => setData('Email', e.target.value)}

                    />
                </div>

                <div>
                    <InputLabel htmlFor="Genero" value="Sexo" />

                    <SelectInput
                        id="Genero"
                        className="mt-1 block w-full"
                        options = {generoOptions}
                        value={data.Genero}
                        onChange={(e) => setData('Genero', e.target.value)} //sin esto, el cliente puede actualizar pero manteniendo lo que hay en "data"
                        
                    />
                </div>

                <div>
                    <InputLabel htmlFor="dni" value="DNI" />

                    <TextInput
                        id="dni"
                        className="mt-1 block w-full"
                        value={data.dni}
                        onChange={(e) => setData('dni', e.target.value)}
                    />
                </div>

                <div>
                    <InputLabel htmlFor="fecha_contratacion" value="Fecha Contratación" />

                    <TextInput
                        id="fecha_contratacion"
                        className="mt-1 block w-full"
                        value={data.fecha_contratacion}
                        onChange={(e) => setData('fecha_contratacion', e.target.value)}

                    />
                </div>

                <div>
                    <InputLabel htmlFor="sueldo" value="Sueldo" />

                    <TextInput
                        id="sueldo"
                        className="mt-1 block w-full"
                        value={data.sueldo}
                        onChange={(e) => setData('sueldo', e.target.value)}

                    />
                    <InputError className="mt-2" message={errors.Genero} />
                </div>


                <div className="mt-4 text-right">
                    <Link
                        href={route("farmaceuticos.index")}
                        className="bg-gray-100 py-1 px-3 text-gray-800 rounded shadow transition-all hover:bg-gray-200 mr-2"
                        >
                        Cancelar
                    </Link>
                    <button className="bg-emerald-500 py-1 px-3 text-white rounded shadow transition-all hover:bg-emerald-600">
                        Guardar
                    </button>
              

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
            </form>
        </section>
    );
}