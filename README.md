

# 📦 Aplicación web de Gestión Farmacéutica

Este es un sistema de gestión farmacéutica desarrollado con Laravel, React e Inertia. Proporciona herramientas para administrar productos, pedidos y usuarios dentro de un entorno web moderno y eficiente.

## 🚀 Tecnologías Utilizadas

- **Laravel** (Backend PHP) con plantillas Blade
- **React** con **Inertia.js** (Frontend)
- **Docker** (Entorno de desarrollo y despliegue)
- **MariaDB** (Base de datos)
- **Postman** (Pruebas de API)

## Arquitectura MVC

El proyecto sigue el patrón Modelo-Vista-Controlador (MVC):
- **Modelo**: Representa los datos y la lógica de negocio.
- **Vista**: Se encarga de la interfaz de usuario, utilizando React con Inertia.js.
- **Controlador**: Gestiona las solicitudes y respuestas entre el modelo y la vista.

## 📌 Requisitos Previos

Asegúrate de tener instalados los siguientes programas en tu sistema:

- [Docker](https://www.docker.com/) y Docker Compose
- [Node.js](https://nodejs.org/) y npm
- [Composer](https://getcomposer.org/)

## ⚙️ Instalación y Configuración

Clona el repositorio y navega a la carpeta del proyecto:

```sh
git clone https://github.com/Doblado3/App-Laravel-Gestion-Farmaceutica.git
cd App-Laravel-Gestion-Farmaceutica
```

### 📌 Configuración con Docker

Ejecuta el siguiente comando para iniciar el entorno:

```sh
docker-compose up -d
```

Luego, accede al contenedor de la aplicación y ejecuta las migraciones:

```sh
docker exec -it app-laravel bash
php artisan migrate --seed
```

### 📌 Configuración Manual (Sin Docker)

Si prefieres ejecutarlo localmente, sigue estos pasos:

1. Instala las dependencias de PHP:

    ```sh
    composer install
    ```

2. Instala las dependencias de Node.js:

    ```sh
    npm install && npm run build
    ```

3. Configura el archivo `.env` y genera la clave de la aplicación:

    ```sh
    cp .env.example .env
    php artisan key:generate
    ```

4. Ejecuta las migraciones y seeding de la base de datos:

    ```sh
    php artisan migrate --seed
    ```

5. Inicia el servidor:

    ```sh
    php artisan serve
    ```

## 📝 Uso

Accede a la aplicación en [http://localhost](http://localhost).

- **Administración de productos**: Crear, editar y eliminar productos.
- **Gestión de pedidos**: Controlar pedidos y estados.
- **Usuarios**: Registro e inicio de sesión.

## 🧪 Pruebas con Postman

Puedes importar la colección de Postman ubicada en `docs/postman_collection.json` y ejecutar las pruebas para verificar los endpoints.

## 🛠️ Despliegue

Para desplegar la aplicación con Docker en un servidor, puedes usar:

```sh
docker-compose up -d --build
```

Asegúrate de configurar las variables de entorno correctamente en el servidor.



## 🙋🏽‍♂️ Licencia

Este proyecto ha sido desarrollado por Rodrigo Naranjo Pozas y Pablo Doblado Mendoza, Ingenieros de la Salud.

---
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




