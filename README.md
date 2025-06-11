# Sistema de Gestión de Estudiantes y Matrículas

Este proyecto es una aplicación web construida con Laravel y Livewire, diseñada para gestionar estudiantes, materias y matriculas en una institución educativa. Permite agregar, editar y eliminar alumnos, materias y sus respectivas matrículas de forma sencilla y eficiente.

## Características

* **Gestión de Estudiantes**: Agregar, editar y eliminar alumnos del sistema.
* **Gestión de Materias**: Agregar, editar y eliminar materias disponibles para los estudiantes.
* **Gestión de Matrículas**: Matricular a los estudiantes en las materias, así como eliminar las matrículas cuando sea necesario.
* **Interfaz interactiva**: Utiliza Livewire para una experiencia de usuario fluida y dinámica sin necesidad de recargar la página.

## Requisitos

* PHP >= 8.0
* Composer
* Laravel 8.x o superior
* MySQL o cualquier otro sistema de base de datos soportado por Laravel
* Node.js (para la compilación de los assets de frontend)
* Laravel Livewire

## Instalación

1. Clona este repositorio en tu máquina local:

   ```bash
   git clone https://github.com/tu-usuario/gestion-estudiantes.git
   cd gestion-estudiantes
   ```

2. Instala las dependencias de PHP con Composer:

   ```bash
   composer install
   ``
4. Genera la clave de la aplicación:

   ```bash
   php artisan key:generate
   ```

5. Configura la conexión a la base de datos en el archivo `.env`:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nombre_de_tu_base_de_datos
   DB_USERNAME=tu_usuario
   DB_PASSWORD=tu_contraseña
   ```

6. Ejecuta las migraciones para crear las tablas necesarias en la base de datos:

   ```bash
   php artisan migrate
   ```

7. Instala las dependencias de frontend con NPM:

   ```bash
   npm install
   ```

8. Compila los assets de frontend:

   ```bash
   npm run dev
   ```

9. Finalmente, levanta el servidor de desarrollo:

   ```bash
   php artisan serve
   ```

## Uso

Una vez que la aplicación esté corriendo, puedes acceder a la interfaz de usuario a través de la URL:

```
http://127.0.0.1:8000
```

### Funcionalidades:

* **Gestionar Estudiantes**: Puedes añadir, editar y eliminar alumnos. Cada estudiante tiene un nombre, correo electrónico y otras opciones.

* **Gestionar Materias**: Las materias pueden ser agregadas, editadas o eliminadas.

* **Gestionar Matrículas**: Puedes matricular estudiantes en una o varias materias. También puedes eliminar matrículas cuando sea necesario.

### Livewire

Este proyecto utiliza **Livewire** para la interacción dinámica sin tener que recargar la página, lo que mejora la experiencia de usuario. Las operaciones como agregar, editar o eliminar registros se actualizan en tiempo real.

## Pruebas

Puedes correr los tests automatizados utilizando PHPUnit:

```bash
php artisan test
```

## Contribuciones

Si deseas contribuir a este proyecto, sigue estos pasos:

1. Haz un fork del proyecto.
2. Crea tu rama de características (`git checkout -b feature/mi-nueva-caracteristica`).
3. Realiza tus cambios.
4. Realiza un commit con tus cambios (`git commit -am 'Agregué nueva característica'`).
5. Sube tus cambios (`git push origin feature/mi-nueva-caracteristica`).
6. Crea un Pull Request.

## Licencia

Este proyecto está bajo la Licencia MIT. Consulta el archivo [LICENSE](LICENSE) para más detalles.

---

Espero que este README sea adecuado para tu proyecto. Si necesitas ajustes o agregar algo más, ¡avísame!
