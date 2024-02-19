[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-24ddc0f5d75046c5622901739e7c5dd533143b0c8e959d652212380cedb1ea36.svg)](https://classroom.github.com/a/aMYFqSAE)
# CGIS - Proyecto evaluación continua

En este Readme.md deberá describir:
- **Título:**
PROYECTO FARMACIA
  
- **Integrantes:**
Pablo Doblado Mendoza y Rodrigo Naranjo Pozas
  
- **Dominio:**
Nuestro proyecto se va a centrar en el desarrollo de una aplicación web para la gestión farmacéutica, tanto para locales únicos como para negocios integrados por varias sucursales. Por lo tanto, nuestros clientes serán profesionales del mundo farmacéutico. La idea principal es permitir controlar y automatizar la gestión de inventario de medicamentos, a nivel de almacén, de los clientes. Para ello, tenemos que llevar el registro tanto de los productos que salen (ventas) como de los que entran (compras). Necesitaremos acceder a la información del paciente, por ejemplo, a la receta electrónica del sistema nacional de salud para vender productos ligados a prescripción. Esto nos permitirá diferenciar ventas de parafarmacia de aquellas que no lo son. También, deberemos conectar a las farmacias con distintos proveedores para que puedan realizar sus compras comparando precios y marcas. Con la información que vayamos almacenando de ventas nos gustaría ofrecer distintas estadísticas, como productos más vendidos o “productos en tendencia”. Esto permitiría, por ejemplo, establecer un stock mínimo para un determinado producto y lanzar un aviso cuando se esté agotando.

- **Objetivos:**
Al hablar con farmacias de Sevilla, nos han comentado algunos problemas que sufren con los softwares que usan actualmente. A nivel general, primero, nos han indicado que las interfaces de usuario están muy anticuadas a nivel estético y, segundo, nos han dicho que algunas veces tienen problemas con los proveedores. Según cuentan, hay veces que les sale que un producto no tiene stock cuando realmente lo que ha ocurrido es que lo han retirado de venta. Para solucionarlo, se ven obligados a llamar directamente a los proveedores. 
Como objetivo propio, nos gustaría que los clientes pudieran acceder a una especie de tienda online de la farmacia. Podrían reservar los artículos que deseen desde casa. Sería como una especie de Amazon. Por lo que hemos visto, de momento las farmacias no lo tienen implementado, al menos en España.
  
- **Usuarios del sistema:**  
1.	***Administrador:*** Persona encargada del mantenimiento, gestión de incidencias, bajas de usuarios, asignación de permisos... En general, todas las necesidades que puedan surgir en cuanto a la gestión “técnica” de la aplicación. Podría haber más de un administrador.  

2.	***Paciente:*** Persona que accede a la página para realizar pedidos de producto o simplemente para consultar los mismos. Tendrá un área propia asignada, donde podrá gestionar sus pedidos. Su acceso es el más restringido.  

3.	***Farmacéutico:*** Persona con acceso a todas las funcionalidades que ofrece la aplicación para mejorar la gestión del negocio. Tendrá una seria de permisos específicos para modificación de inventario, realizar pedidos, información sobre ventas, pacientes...  

- **Requisitos de información:**  
•	RI_001 - Farmacéuticos: El sistema deberá almacenar nombre, apellidos, DNI, fecha en la que fue contratado, sueldo asignado, el correo electrónico que ofrezca y su contraseña personal. Además, tendrá asignado un identificador que lo asocie a la farmacia en la que trabaja.  
•	RI_002 - Pacientes: El sistema deberá almacenar nombre, apellidos, DNI, correo electrónico, contraseña y número de la seguridad social. Deberemos poder acceder a la RSNS.  
•	RI_003 - Medicamentos: El sistema deberá almacenar el nombre, la cantidad de cada medicamento que hay en el almacén, la familia a la que pertenece el medicamento, el precio de venta público, laboratorio fabricante, una descripción textual, los descuentos que se aplican a cada medicamento, varias imágenes y la fórmula o componente activo. También, muy importante, diferenciaremos a aquellos medicamentos que estén ligados a prescripción.  
•	RI_004 - Proveedores: El sistema deberá almacenar un “listado” sobre los medicamentos que ofrecen, el precio, los distintos métodos de envío, correo de las empresas y teléfono.  
•	RI_005 - Ventas/Compras: El sistema deberá almacenar información sobre las ventas que se realizan a cada paciente, fechas, precio, número y medicamentos vendidos. Pero, también guardará información, de forma muy similar, sobre las compras de producto que realiza la propia farmacia.  
•	RI_006 - Farmacias: El sistema deberá almacenar información sobre la ubicación, nombre, horarios en los que está abierta, fecha de guardias asignadas, sobre las farmacias.  

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
![image](https://github.com/CGIS-2024/proyecto-evaluacion-continua-gruporp/assets/147496659/daa0ec87-dea7-49f5-9e06-316fe9de58ac)


- **Manual de usuario con capturas:**
