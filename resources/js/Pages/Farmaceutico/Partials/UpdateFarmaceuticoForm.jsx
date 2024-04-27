import InputLabel from '@/Components/InputLabel';
import InputError from '@/Components/InputError';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import { Transition } from '@headlessui/react';
import { Link, useForm, usePage } from '@inertiajs/react';
import SelectInput from "@/Components/SelectInput.jsx";


export default function UpdatePizzaOrderForm({ farmaceutico, className = '' }) {

    const {data, setData, patch, errors, processing, recentlySuccessful} = useForm({ //data representa al objeto con los valores iniciales para cada uno de los campos
        Nombre:farmaceutico.Nombre,                                                  //setData es un método para poder cambiarlos
        Apellidos:farmaceutico.Apellidos,                                            //errors es el bad de validación
        Email:farmaceutico.Email,                                                    //processing es un boolean que determina si estamos o no cambiando la información
        Genero:farmaceutico.Genero,                                                  //recentlySuccessfull es el mensaje para indicar que todo ha ido bien
        dni:farmaceutico.dni,
        fecha_contratacion:farmaceutico.fecha_contratacion,
        sueldo:farmaceutico.sueldo,
    })

    const submit = (e) => {
        e.preventDefault();

        patch(route('farmaceuticos.update', farmaceutico.id), {
            preserveScroll: true
        }); //Le pasamos toda la información a esta ruta con useForm, preserveScroll es para que al pulsar en guardar no se vaya a la parte superior de la página
    };

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
                        disabled
                    />
                </div>

                <div>
                    <InputLabel htmlFor="Apellidos" value="Apellidos" />

                    <TextInput
                        id="Apellidos"
                        className="mt-1 block w-full"
                        value={data.Apellidos}
                        disabled
                    />
                </div>

                <div>
                    <InputLabel htmlFor="Email" value="Email" />

                    <TextInput
                        id="Email"
                        className="mt-1 block w-full"
                        value={data.Email}
                        disabled
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
                        disabled
                    />
                </div>

                <div>
                    <InputLabel htmlFor="fecha_contratacion" value="Fecha Contratación" />

                    <TextInput
                        id="fecha_contratacion"
                        className="mt-1 block w-full"
                        value={data.fecha_contratacion}
                        disabled
                    />
                </div>

                <div>
                    <InputLabel htmlFor="sueldo" value="Sueldo" />

                    <TextInput
                        id="sueldo"
                        className="mt-1 block w-full"
                        value={data.sueldo}
                        disabled
                    />
                </div>


                <div className="flex items-center gap-4">
                    <PrimaryButton>Guardar</PrimaryButton>

                    <Transition
                        show={recentlySuccessful}
                        enter="transition ease-in-out"
                        enterFrom="opacity-0"
                        leave="transition ease-in-out"
                        leaveTo="opacity-0"
                    > 
                        <p className="text-sm text-gray-600">Guardado</p> 
                    </Transition>
                    
                </div>
            </form>
        </section>
    );
}