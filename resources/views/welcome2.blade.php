<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>ParaFarmacial</title>
    <link rel="icon" href="/components/icono-farmacia1.blade.php">
    <meta name="description" content="Digitaliza de forma completa la gestión de tu local farmaceutico. Controla
    tu ventas y tus compras, puediendo comparar entre distintos proveedores, y lleva un listado al completo de tus pacientes
    y de tus trabajadores">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body class="font-[Poppins] bg-gradient-to-t from-[#c2f4fb] to-[#c2ddfb] h-screen">
    <header class="bg-white">
        <nav class="flex justify-between items-center w-[92%]">
            <div>
                <img class="w-16" src="https://cdn-icons-png.flaticon.com/512/5968/5968204.png" alt="...">
            </div>
            <div class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                    <li>
                        <a class="hover:text-gray-300" href="#">Productos</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-300" href="#">Redes</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-300" href="#">Acceder</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-300" href="#">Registrarse</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-300" href="#">Registrarse como farmaceutico</a>
                    </li>
                </ul>

            </div> 
            <div class="flex items-center gap-6">
                <button class="bg-[#c2ddfb] text-white px-5 py-2 rounded-full hover:bg-[#87ac]">Acceder</button>
                <ion-icon onclick="onToggleMenu(this)" name="menu-outline" class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>
        </nav>
    </header>
    <section class="mt-8">
        <div>
            Aquí iran los objetivos
        </div>
    </section>
    <footer>
        Aquí ira un poco el spam y la "publicidad"
    </footer>

    
    
    
    <script>
        const navLinks = document.querySelector('.nav-links')
        function onToggleMenu(e){
            e.name = e.name === 'menu-outline' ? 'close' : 'menu-outline'
            navLinks.classList.toggle('top-[8%]')
        }
    </script>
</body>
</html>
