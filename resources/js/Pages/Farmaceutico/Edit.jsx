import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import UpdateFarmaceuticoForm from '@/Pages/Farmaceutico/Partials/UpdateFarmaceuticoForm'

export default function Edit({ auth, farmaceutico }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Farmaceutico {farmaceutico.user.name}</h2>}
        >
            <Head title={'Farmaceutico' + farmaceutico.user.id} />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div className="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <UpdateFarmaceuticoForm
                            farmaceutico={farmaceutico}
                            className="max-w-xl"
                        />
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}