# Sistema de Gestión de Tareas

Este proyecto es un sistema simple de gestión de tareas desarrollado con Laravel 11, utilizando Tailwind CSS y DaisyUI para el diseño. El sistema permite realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) sobre las tareas.

## Requisitos

-   **PHP**: Asegúrate de tener PHP instalado (versión 8.0 o superior).
-   **Composer**: Necesario para gestionar las dependencias de PHP.
-   **Node.js**: Necesario para gestionar las dependencias de JavaScript.
-   **NPM**: Incluido con Node.js.

## Configuración del Proyecto

1. **Clonar el Repositorio**

-   git clone https://github.com/luisalbeto/PruebaTecnicaEfiEmpresa

2. **Instalar Dependencias**
   Ejecuta los siguientes comandos para instalar las dependencias del backend y del frontend:

-   composer install
-   npm install

3. **Configurar la Base de Datos**

-   Asegúrate de tener SQLite configurado en tu entorno.
-   Crea un archivo de base de datos SQLite en la raíz del proyecto (por ejemplo, `database/database.sqlite`).
-   Configura la conexión a la base de datos en el archivo `.env`:
    ```
    DB_CONNECTION=sqlite
    DB_DATABASE=/ruta/a/tu/proyecto/database/database.sqlite
    ```

4. **Ejecutar Migraciones**
   Ejecuta las migraciones para crear las tablas necesarias en la base de datos:

-   php artisan migrate

## Ejecutar el Proyecto

### Backend

Para iniciar el servidor backend, utiliza el siguiente comando:

-   php artisan serve

Esto iniciará el servidor en `http://localhost:8000`.

### Frontend

Para compilar los archivos CSS y JavaScript, ejecuta:

-   npm run dev

Este comando compilará los activos y los servirá para tu aplicación.

## Acceso a la Aplicación

Una vez que hayas iniciado el servidor backend y compilado los activos del frontend, puedes acceder a la aplicación en tu navegador en `http://localhost:8000`.

## Funcionalidades

-   **CRUD Completo**: Crear, leer, actualizar y eliminar tareas.
-   **Paginación**: Las tareas se muestran paginadas de a 5 por pagina.
-   **Búsqueda**: Funcionalidad para buscar tareas por título o descripción.

## Contribuciones

Si deseas contribuir a este proyecto, siéntete libre de hacer un fork y enviar un pull request.

## Licencia

Este proyecto está bajo la Licencia MIT. Consulta el archivo LICENSE para más detalles.
