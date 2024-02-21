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

  1) Situar a cada farmaceútico y paciente en su respectivo local para que el sistema diferencie claramente a distintos clientes.

  2) Conectar al farmaceútico con los medicamentos disponibles en sus proveedores para que pueda comparar y elegir la opción que más le convenga.
        
  3) Registrar la entrada y salida de medicamentos de las farmacias para poder actualizar así los niveles de inventario.
        
  4) Ofrecer al cliente un área personal donde visualice su histórico de pedidos para que lleve un registro de sus compras.
        
  5) Calcular, en función de las ventas realizadas, el nivel mínimo de stock necesario antes de necesitar una nueva compra para así poder lanzar avisos y evitar faltas de existencias.
        
  6) Diferenciar claramente aquellos medicamentos cuya venta está ligada a prescripción para que no ocurran ventas inapropiadas.
        
  7) Diferenciar aquellos pacientes pertenecientes a la seguridad social para vender medicamentos con sus descuentos asociados de forma correcta.
        
  8) Presentar una sección con todos los medicamentos de la farmacia dentro de la aplicación para que el paciente pueda visualizarlos y reservarlos desde su hogar.
        
  9) Preservar de forma segura los datos asociados de cada paciente y farmaceútico.
  
- **Usuarios del sistema:**  

1.	***Administrador:*** Persona encargada del mantenimiento, gestión de incidencias, bajas de usuarios, asignación de permisos... En general, todas las necesidades que puedan surgir en cuanto a la gestión “técnica” de la aplicación. Podría haber más de un administrador.  

2.	***Paciente:*** Persona que accede a la página para realizar pedidos de producto o simplemente para consultar los mismos. Tendrá un área propia asignada, donde podrá gestionar sus pedidos. Su acceso es el más restringido.  

3.	***Farmacéutico:*** Persona con acceso a todas las funcionalidades que ofrece la aplicación para mejorar la gestión del negocio. Tendrá una seria de permisos específicos para modificación de inventario, realizar pedidos, información sobre ventas, pacientes...  

- **Requisitos de información:**

•	RI_001 - ***Farmacéuticos:*** Sobre cada farmaceútico, el sistema debe almacemar: 1) nombre, 2) apellidos, 3) DNI(VARCHAR), 4) fecha de contratación(DATE), 5) sueldo, 6) correo electrónico Y 7) contraseña. 

•	RI_002 - ***Pacientes:*** Sobre cada paciente, el sistema debe almacenar: 1) nombre, 2) apellidos, 3) DNI(VARCHAR), 4) correo electrónico, 5) contraseña y 6) número de la seguridad social.  

•	RI_003 - ***Medicamentos:*** Sobre cada medicamento, el sistema debe almacenar:  1) nombre, 2) número de unidades en "almacen", 3) familia (enumerado), 4) precio de venta público, 5) laboratorio fabricante, 6) descripción sobre las características principales, 7) precio con descuentos por la seguridad social, 8) imágenes , 9) fórmula/componente activo (VARCHAR) y 10) si está ligado a prescripción (BOOLEAN).

•	RI_004 - ***Proveedores:*** Sobre cada proveedor, el sistema debe almacenar:  1)medicamentos en venta, 2) precio, 3) correo electrónico y 4) teléfono.  

•	RI_005 - ***Ventas:*** Sobre cada venta, el sistema debe almacenar :  1) nombre del paciente, 2) fecha de reserva, 3)fecha de pago, 4) precio total, 5) medicamentos vendidos , 6) cantidad de medicamento y 7) farmaceútico involucrado. 

•   RI_006 - ***Compras:*** Sobre cada compra, el sistema debe almacenar: 1) proveedor, 2) fecha de compra, 3) fecha de recogida (cuando llegan los medicamentos), 4) precio total, 5) medicamentos y 6) cantidad de medicamentos.

•	RI_007 - ***Farmacias:*** Sobre cada farmacia, el sistema debe almacenar:  1) ubicación, 2) nombre, 3)horarios en los que está abierta y 4) fecha de guardias asignadas

- **Requisitos funcionales:**  
RF – 001: El sistema deberá poder diferenciar aquellos pacientes que pertenecen al sistema sanitario nacional de los que no. Para los que sí, debe poder acceder a la receta electrónica del mismo en caso de que fuera necesario recetar, por ejemplo, antibióticos o estupefacientes.   
RF – 002: El sistema debe ser capaz de diferenciar aquellos productos ligados a prescripción de los que no.  
RF – 003: El sistema debe controlar el estado de inventario de medicamentos de las farmacias, de forma que pueda establecer niveles de stock mínimo para productos con mucha demanda, lanzando avisos cuando haya poca cantidad.  
RF – 004: El sistema debe permitir al farmacéutico acceder a la lista de medicamentos de distintos proveedores para comparar sus productos.  
RF – 005: El sistema deberá permitir al paciente acceder a la oferta de las farmacias, conocer una serie de características sobre cada producto y poder “reservar” pedidos.  
RF – 006: El sistema debe almacenar información sobre las ventas para poder ofrecer distintas estadísticas, por ejemplo, productos más vendidos o tendencias mensuales y así otorgar mayor conocimiento al farmacéutico. También, deberá llevar un registro de las compras y ventas realizadas y/o reservadas.  
RF – 007: El sistema deberá actualizar los niveles de cantidad de medicamentos conforme se vayan realizando ventas/compras.  

- **Requisitos no funcionales:**
•	RNF – 001: El sistema deberá ofrecer una interfaz de usuario actualizada y atractiva visualmente.  
•	RNF – 002: El sistema deberá ofrecer un nivel alto de seguridad con contraseñas seguras, almacenadas encriptadas... Para evitar posibles ataques y/o accesos indebidos.  
•	RNF – 003: El sistema deberá soportar una carga de usuarios y ventas considerables.  
•	RNF – 004: El sistema deberá estar disponible en los sistemas operativos más usados.  

- **Modelado conceptual en UML:**  
![Farmacia drawio](https://github.com/CGIS-2024/proyecto-evaluacion-continua-gruporp/assets/147496659/fbec692e-176d-40d6-81ef-333c664f9ec5)



- **Manual de usuario con capturas:**
