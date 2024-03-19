[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-24ddc0f5d75046c5622901739e7c5dd533143b0c8e959d652212380cedb1ea36.svg)](https://classroom.github.com/a/aMYFqSAE)
# CGIS - Proyecto evaluación continua

En este Readme.md deberá describir:
- **Título:**
GESTIÓN DE LOCALES FARMACEÚTICOS
  
- **Integrantes:**
Pablo Doblado Mendoza y Rodrigo Naranjo Pozas
  
- **Dominio:**

Nuestro proyecto se va a centrar en el desarrollo de una aplicación web para la gestión farmacéutica, tanto para locales únicos como para negocios integrados por varias sucursales. La idea principal es que la aplicación permita al cliente controlar y automatizar la gestión del inventario de medicamentos, a nivel de almacén. Es decir, necesitamos controlar tanto las ventas de la farmacia, los medicamentos que salen, como las compras que la misma haga a ciertos proveedores, los medicamentos que entran. Al tratarse de farmacias, necesitaremos diferenciar la venta de parafarmacia de la venta ligada a prescripción.

Fuera del objetivo básico, anteriormente descrito, nos gustaría que la aplicación puediera aportar valor extra al cliente (farmaceútico). Entre otras cosas, nos planteamos añadir una especie de "tienda online" dentro de la aplicación que permita al cliente realizar sus pedidos desde casa. También, contemplamos ofrecer una serie de estadísticas, sobre la actividad de su local, al farmaceútico que le permitan optimizar su negocio.

- **Objetivos:**
Los objetivos de nuestra aplicación web son:

  1) Visualizar un listado de los medicamentos presentes en la farmacia, pudiendo editarlos, conocer información sobre ellos y establecer su estado, entre otras opciones.

  2) Conectar al farmaceútico con los medicamentos disponibles en sus proveedores para que pueda comparar y elegir la opción que más le convenga.
        
  3) Registrar la entrada y salida de medicamentos de las farmacias para poder actualizar así los niveles de inventario.
        
  4) Ofrecer al cliente un área personal donde visualice su histórico de pedidos para que lleve un registro de sus compras.
        
  5) Calcular, en función de las ventas realizadas, el nivel mínimo de stock necesario antes de necesitar una nueva compra para así poder lanzar avisos y evitar faltas de existencias.
        
  8) Presentar una sección con todos los medicamentos de la farmacia dentro de la aplicación para que el paciente pueda visualizarlos y reservarlos desde su hogar.
  
- **Usuarios del sistema:**  

1.	***Administrador:*** Persona encargada del mantenimiento, gestión de incidencias, bajas de usuarios, asignación de permisos... En general, todas las necesidades que puedan surgir en cuanto a la gestión “técnica” de la aplicación. Podría haber más de un administrador.  

2.	***Paciente:*** Persona que accede a la página para realizar pedidos de producto o simplemente para consultar los mismos. Tendrá un área propia asignada, donde podrá gestionar sus pedidos. Su acceso es el más restringido.  

3.	***Farmacéutico:*** Persona con acceso a todas las funcionalidades que ofrece la aplicación para mejorar la gestión del negocio. Tendrá una seria de permisos específicos para modificación de inventario, realizar pedidos, información sobre ventas, pacientes...  

- **Requisitos de información:**

•	RI_001 - ***Farmacéuticos:*** Sobre cada farmaceútico, el sistema debe almacemar: 1) nombre, 2) apellidos, 3) DNI(VARCHAR), 4) fecha de contratación(DATE), 5) sueldo, 6) correo electrónico Y 7) contraseña. Un farmaceútico es un usuario (1:1).

•	RI_002 - ***Pacientes:*** Sobre cada paciente, el sistema debe almacenar: 1) nombre, 2) apellidos, 3) DNI(VARCHAR), 4) correo electrónico, 5) contraseña y 6) número de la seguridad social. Un paciente es un usuario (1:1). Un paciente interacciona con muchas farmacias y una farmacia recibe muchos pacientes (n:n). Ambos interactuan a través de los medicamentos que hay en la farmacia.

•	RI_003 - ***Medicamentos:*** Sobre cada medicamento, el sistema debe almacenar:  1) nombre, 2) número de unidades en "almacen", 3) familia (enumerado), 4) precio de venta público, 5) laboratorio fabricante, 6) descripción sobre las características principales, 7) precio con descuentos por la seguridad social, 8) imágenes , 9) fórmula/componente activo (VARCHAR) y 10) si está ligado a prescripción (BOOLEAN). Las farmacias y los proveedores tienen sus medicamentos propios, por separado.

•	RI_004 - ***Proveedores:*** Sobre cada proveedor, el sistema debe almacenar:  1)medicamentos en venta, 2) precio, 3) correo electrónico y 4) teléfono. Un proveedor vende a muchas farmacias y una farmacia compra a muchos proveedores (n:n). Ambos interactuan a través de la lista de medicamentos que ofrece el proveedor.

•	RI_005 - ***Ventas:*** Sobre cada venta, el sistema debe almacenar :  1) nombre del paciente, 2) fecha de reserva, 3)fecha de pago, 4) precio total, 5) medicamentos vendidos , 6) cantidad de medicamento y 7) farmaceútico involucrado. 

•   RI_006 - ***Compras:*** Sobre cada compra, el sistema debe almacenar: 1) proveedor, 2) fecha de compra, 3) fecha de recogida (cuando llegan los medicamentos), 4) precio total, 5) medicamentos y 6) cantidad de medicamentos.

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
        El sistema además deberá mostrar un mensaje de error en cada uno de los casos anteriores y, en caso de éxito, navegar al listado actualizado de los farmaceúticos con un mensaje de éxito.

    RF - 1.4: Como administrador,
        Quiero borrar un farmaceútico. El sistema deberá alertarme de la irrevocabilidad de esta acción y pedir confirmación. En caso de confirmación, el sistema deberá borrar el farmaceútico y navegar al listado actualizado de farmaceúticos con un mensaje de éxito.
  
RF - 2: Como administrador, quiero poder dar de alta/baja a farmacias.


RF - 3: Como farmacéutico, quiero poder dar de alta/baja a pacientes.


RF – 4: Como farmacéutico, quiero poder diferenciar los medicamentos preescritos de los que no lo son.  


RF – 5: Como farmacéutico, quiero controlar el estado de inventario de medicamentos de las farmacias.  


RF - 6: Como farmacéutico, quiero poder establecer niveles de stock mínimo para productos con mucha demanda.  


RF - 7: Como farmacéutico, quiero que el sistema me lance avisos cuando haya poco stock de un medicamento.  


RF – 8: Como farmacéutico, quiero acceder a la lista de medicamentos de distintos proveedores para comparar sus productos. 


RF – 9: Como paciente, quiero poder acceder a la oferta de medicamentos de las farmacias, conocer una serie de características sobre cada producto y poder “reservar” pedidos.  


RF – 10: Como administrador, quiero que el sistema genere información sobre las ventas para poder ofrecer distintas estadísticas, por ejemplo, productos más vendidos o tendencias mensuales y así otorgar mayor conocimiento al farmacéutico.  


RF - 11: Como farmacéutico, quiero llevar un registro de las compras y ventas realizadas y/o reservadas.  


RF – 12: Como farmacéutico, quiero que el sistema actualice los niveles de cantidad de medicamentos conforme se vayan realizando ventas/compras.  


- **Requisitos no funcionales:**  
•	RNF – 1: Como farmacéutico y como paciente, quiero que el sistema ofrezca una interfaz de usuario actualizada y atractiva visualmente.


•	RNF – 2: Como farmacéutico, el sistema debe ofreceme un nivel alto de seguridad, con contraseñas almacenadas y encriptadas.  


•   RNF - 3: Como paciente, quiero que se garantice la integridad de mis datos personales y de los pedidos realizados.  


•	RNF – 4: Como farmacéutico, quiero que el sistema soporte una carga de usuarios y ventas considerables.


•	RNF – 5: Como paciente, quiero que el sistema sea de uso intuitivo.  


- **Modelado conceptual en UML:**  
<img width="457" alt="Captura de pantalla 2024-03-19 a las 12 14 50" src="https://github.com/CGIS-2024/proyecto-evaluacion-continua-gruporp/assets/137097471/081b600c-d10a-4e53-8ed8-cd5eac5968c6">










- **Manual de usuario con capturas:**
