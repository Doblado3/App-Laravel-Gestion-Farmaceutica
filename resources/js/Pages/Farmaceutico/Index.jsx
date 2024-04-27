import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import Table from '@/Components/Table.jsx';
import { Head } from '@inertiajs/react';

const columns = [
    'Nombre',
    'Apellidos',
    'Email',
    'Genero',
    'dni',
    'fecha_contratacion',
    'sueldo',
]

export default function Index({ auth, farmaceuticos }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Farmacéuticos</h2>}
        >
            <Head title="Farmacéuticos" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <Table items={farmaceuticos} columns={columns} primary="ID" action="farmaceuticos.edit"></Table>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}