<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>ParaFarmacial</title>
    <link rel="icon" type="image/svg" href="/components/icono-farmacia1.blade.php">
    <meta name="description" content="Digitaliza de forma completa la gestión de tu local farmaceutico. Controla
    tu ventas y tus compras, puediendo comparar entre distintos proveedores, y lleva un listado al completo de tus pacientes
    y de tus trabajadores">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="font-[Poppins] bg-gradient-to-t from-[#c2f4fb] to-[#c2ddfb] h-screen">
    <header class="bg-white">
        <nav class="">
            <div>
                <img class="w-16" src="https://cdn-icons-png.flaticon.com/512/5968/5968204.png" alt="...">
            </div>
            <div class="">
                <ul>
                    <li>
                        <a href="#">Products</a>
                    </li>
                    <li>
                        <a href="#">Solution</a>
                    </li>
                    <li>
                        <a href="#">Resource</a>
                    </li>
                    <li>
                        <a href="#">Developers</a>
                    </li>
                    <li>
                        <a href="#">Pricing</a>
                    </li>
                </ul>

            </div> 
            <div>
                <button class="bg-[#c2ddfb] text-white px-5 py-2">Sign in</button>
            </div>
        </nav>
    </header>
</body>
</html>
