[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-24ddc0f5d75046c5622901739e7c5dd533143b0c8e959d652212380cedb1ea36.svg)](https://classroom.github.com/a/aMYFqSAE)
# Laravel App Gestión de locales farmaceuticos

En este Readme.md deberá describir:
- **Título:**
GESTIÓN DE LOCALES FARMACEÚTICOS
  
- **Integrantes:**
Pablo Doblado Mendoza y Rodrigo Naranjo Pozas
  
- **Dominio:**

Nuestro proyecto se va a centrar en el desarrollo de una aplicación web para la gestión de locales farmacéutica, tanto para locales únicos como para negocios integrados por varias sucursales. La idea principal es que la aplicación permita al cliente (profesionales farmacéuticos) controlar y automatizar la gestión del flujo compras/ventas de su farmacia. Para ello, necesitamos controlar tanto las ventas de la farmacia, los medicamentos que salen, como las compras que la misma haga a ciertos proveedores, los medicamentos que entran.

- **Objetivos:**
Los objetivos de nuestra aplicación web son:

  1) Visualizar un listado de los medicamentos presentes en la farmacia, pudiendo editarlos, conocer información sobre ellos y establecer su estado, entre otras opciones.

  2) Conectar al farmaceútico con los medicamentos disponibles en sus proveedores para que pueda comparar y elegir la opción que más le convenga.
        
  3) Registrar la entrada y salida de medicamentos de las farmacias para poder actualizar así los niveles de inventario.
        
  4) Ofrecer al cliente un área personal donde visualice su histórico de pedidos para que lleve un registro de sus compras.

  5) Visualizar un listado con el personal contratado por el gestor del local farmacéutico.
        
  6) Calcular, en función de las ventas realizadas, el nivel mínimo de stock necesario antes de necesitar una nueva compra para así poder lanzar avisos y evitar faltas de existencias.
        
  7) Presentar una sección con todos los medicamentos de la farmacia dentro de la aplicación para que el paciente pueda visualizarlos y reservarlos desde su hogar.
  
- **Usuarios del sistema:**  

1.	***Administrador:*** Persona encargada del mantenimiento, gestión de incidencias, bajas de usuarios, asignación de permisos... En general, todas las necesidades que puedan surgir en cuanto a la gestión “técnica” de la aplicación. Podría haber más de un administrador, incluso pudiendo llegar a ser el propietario de un local.  

2.	***Paciente:*** Persona que accede a la página para realizar pedidos de producto o simplemente para consultar los mismos. Tendrá un área propia asignada, donde podrá gestionar sus pedidos. Su acceso es el más limitado.  

3.	***Farmacéutico:*** Persona con acceso a todas las funcionalidades que ofrece la aplicación para mejorar la gestión del negocio. Tendrá una seria de permisos específicos para modificación de inventario, realizar pedidos, información sobre ventas, creación de nuevas ventas, pacientes...  

- **Requisitos de información:**

•	RI_001 - ***Farmacéuticos:*** Sobre cada farmaceútico, el sistema debe almacemar: 1) nombre, 2) apellidos, 3) DNI(VARCHAR), 4) fecha de contratación(DATE), 5) sueldo, 6) correo electrónico, 7) contraseña y 8)género. Un farmaceútico es un usuario (1:1).

•	RI_002 - ***Pacientes:*** Sobre cada paciente, el sistema debe almacenar: 1) nombre, 2) apellidos, 3) DNI(VARCHAR), 4) correo electrónico, 5) contraseña, 6) número de la seguridad social y 7)género. Un paciente es un usuario (1:1). Un paciente interacciona con muchas farmacias y una farmacia recibe muchos pacientes (n:n). Ambos interactuan a través de los medicamentos que hay en la farmacia, con la relación "ventas".

•	RI_003 - ***Medicamentos:*** Sobre cada medicamento, el sistema debe almacenar:  1) nombre comercial (ej: Ibudol) , 2) número de registro, 3) forma (enumerado), 4) laboratorio fabricante, 5) componente activo (ej: Ibuprofeno) , 6) descripción , 7) si está ligado o no a receta (BOOLEAN), 8) imágenes , 9) fecha de expiración (DATE) y 10) su dosis recomendada. Además, la información sobre los medicamentos de cada proveedor contendrá: 1) precio de cada unidad y 2) nivel de stock.

•	RI_004 - ***Proveedores:*** Sobre cada proveedor, el sistema debe almacenar:  1)nombre, 2) país de origen, 3) correo electrónico, 4) teléfono y 5)dirección. Un proveedor vende a muchas farmacias y una farmacia compra a muchos proveedores (n:n). Ambos interactuan a través de la lista de medicamentos que ofrece el proveedor, para cada compra hay una línea de compra qué detalla información sobre la misma: 1)cantidad, 2)precio por unidad y 3)fecha de la compra.

•	RI_005 - ***Ventas:*** Sobre cada venta, el sistema debe almacenar :  1) nombre del paciente, 2) fecha de la venta, 3)cantidad total de producto, 4) precio total y 5) farmacia. Cada venta tendrá asociada su línea de venta en la que se detalla: 1)medicamentos asocidados, 2)cantidad de cada medicamento y 3)precio de cada medicamento . 

•   RI_006 - ***Compras:*** Sobre cada compra, el sistema debe almacenar: 1) proveedor, 2) fecha de compra, 3) cantidad total, 4) precio total, 5) medicamentos, 6) cantidad de medicamentos y 7) precio de cada medicamento.

•	RI_007 - ***Farmacias:*** Sobre cada farmacia, el sistema debe almacenar:  1) ubicación, 2) nombre, 3)horarios en los que está abierta y 4) fecha de guardias asignadas.

- **Requisitos funcionales:**

RF - 1: Como administrador,
    Quiero ver un listado de los farmaceúticos del sistema paginados de 10 en 10.

    RF -  1.1: Como administrador,
        Quiero ver el detalle de un farmaceútico.

    RF - 1.2: Como administrador,
        Quiero crear un farmaceútico. Para ello, se debe indicar el nombre y apellidos, email, contraseña, fecha de contratación y el sueldo. El sistema debe impedir la creación de un farmaceútico si:
            - El email ya existe.
            - El email no tiene el formato correcto.
            - La contraseña no tiene al menos 8 caracteres y coinciden la contraseña y su confirmación.
            - El sueldo no puede ser negativo
        El sistema además deberá mostrar un mensaje de error en cada uno de los casos anteriores y, en caso de éxito, navegar al listado actualizado de farmaceúticos con un mensaje de éxito.

    RF - 1.3: Como administrador,
        Quiero editar un farmaceútico eligiéndolo a partir del listado de farmaceúticos y llevándome a una nueva pantalla donde pueda trabajar con los datos. Para ello, se debe poder modificar el nombre y apellidos, email, fecha de contratación y el sueldo. El sistema          debe impedir la edición de un farmaceútico si:
            - El email no tiene el formato correcto.
            - La contraseña no tiene al menos 8 caracteres y coinciden la contraseña y su confirmación.
            - El sueldo no puede ser negativo
        El sistema, además, deberá mostrar un mensaje de error en cada uno de los casos anteriores y, en caso de éxito, navegar al listado actualizado de los farmaceúticos con un mensaje de éxito.

    RF - 1.4: Como administrador,
        Quiero borrar un farmaceútico. El sistema deberá alertarme de la irrevocabilidad de esta acción y pedir confirmación. En caso de confirmación, el sistema deberá borrar el farmaceútico y navegar al listado actualizado de farmaceúticos con un mensaje de éxito.
  
RF - 2: Como paciente,
    Quiero ver un listado de las compras que he realizado en una farmacia paginadas.

    RF -  2.1: Como paciente,
        Quiero ver el detalle de los medicamentos asociados a la venta, así como la fecha en la que se produjo.

RF - 3: Como farmacéutico,
    Quiero ver un listado de las ventas de mi farmacia paginadas.

    RF -  3.1: Como farmacéutico,
        Quiero ver el detalle de una venta, medicamentos asociados, fecha en la que se produjo, cantidad total,...

    RF - 3.2: Como farmacéutico,
        Quiero crear una venta. Para ello, se debe indicar el paciente asociado, la fecha y hora en la que se produce, precio total, cantidad total y registrar que se produce en         mi farmacia. El sistema debe impedir la creación de una venta si:
            - La fecha introducida es posterior a la actual.
            - La farmacia asociada no es la misma en la que trabajo.
            - El paciente no se ha registrado.
        El sistema, además, deberá mostrar un mensaje de error en cada uno de los casos anteriores y, en caso de éxito, navegar al listado actualizado de ventas con un mensaje de éxito.

    RF - 3.3: Como farmacéutico,
        Quiero editar una venta eligiéndola a partir del listado de ventas y llevándome a una nueva pantalla donde pueda trabajar con los datos. Para ello, se debe poder modificar el paciente asociado, la fecha y hora en la que se produce, precio total y cantidad total. El sistema debe impedir la edición de una venta si:
            - La fecha introducida es posterior a la actual.
            - La farmacia asociada no es la misma en la que trabajo.
            - El paciente no se ha registrado.
        El sistema además deberá mostrar un mensaje de error en cada uno de los casos anteriores y, en caso de éxito, navegar al listado actualizado de las ventas con un mensaje de éxito.
        
    RF - 3.4: Como farmacéutico,
        Quiero editar los medicamentos asociados a una venta eligiéndola a partir del listado de ventas y llevándome a una nueva pantalla donde pueda trabajar con los datos. Para ello, se debe poder modificar el nombre del medicamento, la cantidad unitaria vendida y el precio de cada unidad. El sistema debe impedir la edición de un medicamento si:
            - No se encuentra registrado en la farmacia.
        El sistema además deberá mostrar un mensaje de error en el caso anterior y, en caso de éxito, mantenerme en la página de edición de la venta, pudiendo comprobar que el medicamento ha sido añadido corréctamente.

    RF - 3.5: Como farmacéutico,
        Quiero borrar una venta. El sistema deberá alertarme de la irrevocabilidad de esta acción y pedir confirmación. En caso de confirmación, el sistema deberá borrar la venta y navegar al listado actualizado de ventas con un mensaje de éxito.

RF - 4: Como administrador,
    Quiero ver un listado de las ventas de mi aplicación paginadas.

    RF -  4.1: Como administrador,
        Quiero ver el detalle de una venta, medicamentos asociados, fecha en la que se produjo, cantidad total,...

    RF - 4.2: Como administrador,
        Quiero crear una venta. Para ello, se debe indicar el paciente asociado, la fecha y hora en la que se produce, precio total, cantidad total y la farmacia asociada. El sistema debe impedir la creación de una venta si:
            - La fecha introducida es posterior a la actual.
            - La farmacia asociada no está registrada en la página web.
            - El paciente no se ha registrado.
        El sistema, además, deberá mostrar un mensaje de error en cada uno de los casos anteriores y, en caso de éxito, navegar al listado actualizado de ventas con un mensaje de éxito.

    RF - 4.3: Como administrador,
        Quiero editar una venta eligiéndola a partir del listado de ventas y llevándome a una nueva pantalla donde pueda trabajar con los datos. Para ello, se debe poder modificar el paciente asociado, la fecha y hora en la que se produce, precio total, cantidad total y la farmacia asociada. El sistema debe impedir la edición de una venta si:
            - La fecha introducida es posterior a la actual.
            - La farmacia asociada no está registrada en la aplicación web.
            - El paciente no se ha registrado.
        El sistema además deberá mostrar un mensaje de error en cada uno de los casos anteriores y, en caso de éxito, navegar al listado actualizado de las ventas con un mensaje de éxito.
        
    RF - 4.4: Como administrador,
        Quiero editar los medicamentos asociados a una venta eligiéndola a partir del listado de ventas y llevándome a una nueva pantalla donde pueda trabajar con los datos. Para ello, se debe poder modificar el nombre del medicamento, la cantidad unitaria vendida y el precio de cada unidad. El sistema debe impedir la edición de un medicamento si:
            - No se encuentra registrado en la farmacia.
        El sistema además deberá mostrar un mensaje de error en el caso anterior y, en caso de éxito, mantenerme en la página de edición de la venta, pudiendo comprobar que el medicamento ha sido añadido corréctamente.

    RF - 4.5: Como administrador,
        Quiero borrar una venta. El sistema deberá alertarme de la irrevocabilidad de esta acción y pedir confirmación. En caso de confirmación, el sistema deberá borrar la venta y navegar al listado actualizado de ventas con un mensaje de éxito.

            
RF –5: Como farmacéutico, quiero poder diferenciar los medicamentos que requieren preescripción de los que no.  

RF – 6: Como farmacéutico, quiero acceder a la lista de medicamentos de distintos proveedores para comparar sus productos. 

RF - 7: Como farmacéutico, quiero llevar un registro de las compras realizadas.  


- **Requisitos no funcionales:**  
•	RNF – 1: Como farmacéutico y como paciente, quiero que el sistema ofrezca una interfaz de usuario actualizada y atractiva visualmente.


•	RNF – 2: Como farmacéutico, el sistema debe ofreceme un nivel alto de seguridad, con contraseñas almacenadas y encriptadas. Además de funcionalidades que eviten y/o prevengan         de los ataques más comunes (asignación masiva, escalado de privilegios...) .  


•   RNF - 3: Como paciente, quiero que se garantice la integridad de mis datos personales y de los pedidos realizados.  


•	RNF – 4: Como farmacéutico, quiero que el sistema soporte una carga de usuarios y ventas considerables.


•	RNF – 5: Como paciente, quiero que el sistema sea de uso intuitivo.

•	RNF – 6: Como administrador, quiero que los pacientes tengan una capacidad ilimitada a sus ventas y que los farmacéuticos la tenga a su farmacia.

- **Trabajo extra:**

  Tras realizar la estructura básica de la página web, objetivo primordial de la asignatura, y siguiendo las indicaciones del profesor Damián Fernandez Cerero, hemos realizado      dos "proyectos". En el primero de ellos, hemos desarrollado una pequeña parte de la aplicación web haciendo uso de Inertia con React, en una rama aparte. En el segundo, hemos   trabajado con el        concepto de API REST para probar la aplicación principal simulando el papel de cliente con POSTMAN. En este último, simplemente nos hemos autenticado, y hemos hecho   tanto un GET como un      POST. 


- **Modelado conceptual en UML:**  
![image](https://github.com/CGIS-2024/proyecto-evaluacion-continua-gruporp/assets/137097471/19d628e9-f79d-470b-9440-fee1d0953ebe)









- **Manual de usuario con capturas:**

Acceso para usuarios:

![Acceso](https://github.com/CGIS-2024/proyecto-evaluacion-continua-gruporp/assets/147496659/37a6f470-af71-41a8-b91c-b1d963cfc7ec)

Registro de nuevos usuarios:

![Registro](https://github.com/CGIS-2024/proyecto-evaluacion-continua-gruporp/assets/147496659/c725f820-f888-4d62-ab14-b070be60ec6b)

Listado de farmaceuticos visto como administrador:

![image](https://github.com/CGIS-2024/proyecto-evaluacion-continua-gruporp/assets/147496659/6b255de8-0085-4bc1-aa59-5b59e275f058)

Acceso al perfil de usuario para editar sus datos:

![image](https://github.com/CGIS-2024/proyecto-evaluacion-continua-gruporp/assets/147496659/3d214b35-ba24-4418-a415-c0a3e4c739e5)

Visualizador de ventas realizadas realizadas como farmacéuticos, con posibilidad de visualizar en detalles la venta, modificarla y borrarla:

![image](https://github.com/CGIS-2024/proyecto-evaluacion-continua-gruporp/assets/147496659/39f4df87-0dd6-4eda-8b42-e8a3734e05a6)

Modelo de creación de venta como farmacéutico:

![image](https://github.com/CGIS-2024/proyecto-evaluacion-continua-gruporp/assets/147496659/02d48173-afb8-4ca8-bd66-d51a366d4ad7)

Visualizador de ventas vistas como paciente. en este caso, solo se podrán visualizar, no se podrán editar ni borrar:

![image](https://github.com/CGIS-2024/proyecto-evaluacion-continua-gruporp/assets/147496659/73aa4281-0bc7-45a5-b64e-65dddefbc3f7)

En cuanto a las policy del proyecto, podemos observar como, si entramos como el ususario administrador, podemos acceder a la lista de farmaceuticos registrados:

![image](https://github.com/CGIS-2024/proyecto-evaluacion-continua-gruporp/assets/147496659/a0909b86-1d15-456c-98ea-385b44d563ac)

Sin embargo, si intentaramos acceder al listado de farmaceuticos como un paciente, se nos deniega el acceso:

![image](https://github.com/CGIS-2024/proyecto-evaluacion-continua-gruporp/assets/147496659/871f2f42-ae34-4e57-a9f5-c65c21bf5bde)
![image](https://github.com/CGIS-2024/proyecto-evaluacion-continua-gruporp/assets/147496659/9bf30bc8-a63c-41c7-89c7-4ad88060e343)

En cuanto a la custom Rule, en nuestro caso hemos realizado una comprobación detellada para que el DNI introducido a la hora de registrar un nuevo farmaceutico se un DNI válido (que tenga 9 caracteres en total, que los 8 primeros sean números y el noveno sea una letra):

![image](https://github.com/CGIS-2024/proyecto-evaluacion-continua-gruporp/assets/147496659/af167a47-19c2-4970-a29c-aa229cf160fe)


Editado de un Farmaceutico con Inertia y React:

<img width="1440" alt="Captura de pantalla 2024-05-20 a las 17 22 03" src="https://github.com/CGIS-2024/proyecto-evaluacion-continua-gruporp/assets/137097471/193c2131-10a1-46de-a806-a5e8310561bf">

<img width="1440" alt="Captura de pantalla 2024-05-20 a las 17 22 13" src="https://github.com/CGIS-2024/proyecto-evaluacion-continua-gruporp/assets/137097471/4ec12c0d-de8e-4958-9df7-4dc7a6c1366d">

<img width="1440" alt="Captura de pantalla 2024-05-20 a las 17 22 21" src="https://github.com/CGIS-2024/proyecto-evaluacion-continua-gruporp/assets/137097471/fda22b8b-dc83-48f9-9cf6-086c5690eb65">




API REST usando Potsman:
<img width="1440" alt="Captura de pantalla 2024-05-20 a las 16 45 31" src="https://github.com/CGIS-2024/proyecto-evaluacion-continua-gruporp/assets/137097471/622a013e-d0ce-41f1-b0c7-b32fa858cc1d">
<img width="1440" alt="Captura de pantalla 2024-05-20 a las 17 00 58" src="https://github.com/CGIS-2024/proyecto-evaluacion-continua-gruporp/assets/137097471/dabb0ed1-70ca-4636-bd59-eb5182a2f79b">
<img width="1440" alt="Captura de pantalla 2024-05-20 a las 12 46 07" src="https://github.com/CGIS-2024/proyecto-evaluacion-continua-gruporp/assets/137097471/5b9d56c9-d4c9-4f1b-aaea-7ee18890e6a9">




