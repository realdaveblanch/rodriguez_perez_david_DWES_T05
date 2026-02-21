# ¡Blog con Laravel! - Núcleo de Comunicación

**Autor:** David Rodríguez Pérez  
**Proyecto:** Tarea 5 - Desarrollo Web en Entorno Servidor (DWES)

## Descripción

Este proyecto consiste en el desarrollo de un sistema de comunicación para el **Consejo Científico de Azkernia**, denominado **Núcleo de Comunicación**. Es una aplicación web construida con **Laravel 12** que permite la gestión integral (CRUD) de informes (Posts) sobre el estado de los autómatas y las operaciones del reino, facilitando el intercambio de información estratégica entre ingenieros.

## Características Principales

- **Gestión de Publicaciones (Posts):** CRUD completo para crear, listar, ver, editar y eliminar informes de misiones.
- **Sistema de Comentarios:** Interacción en las publicaciones permitiendo añadir comentarios asociados a cada post.
- **Arquitectura MVC:** Implementación robusta siguiendo el patrón Modelo-Vista-Controlador.
- **Vistas con Blade:** Uso de componentes y layouts para una interfaz coherente y reutilizable.
- **Persistencia de Datos:** Uso de Eloquent ORM para la gestión de la base de datos.
- **Datos de Prueba:** Integración de Seeders y Factories para generar automáticamente 50 publicaciones de ejemplo.
- **Diseño Personalizado:** Estilos aplicados mediante CSS nativo para una experiencia de usuario moderna.

## Requisitos del Sistema

- PHP >= 8.2
- Composer
- Servidor de Base de Datos (MySQL, MariaDB o SQLite)

## Instalación y Configuración

Sigue estos pasos para poner en marcha el proyecto en tu entorno local:

1. **Clonar el repositorio:**
   ```bash
   git clone <url-del-repositorio>
   cd rodriguez_perez_david_DWES_T05
   ```

2. **Instalar las dependencias de PHP:**
   ```bash
   composer install
   ```

3. **Configurar el entorno:**
   Copia el archivo de ejemplo y genera la clave de la aplicación:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   *Nota: Asegúrate de configurar correctamente las credenciales de tu base de datos en el archivo `.env`.*

4. **Ejecutar Migraciones y Seeders:**
   Prepara la estructura de la base de datos y carga los datos iniciales:
   ```bash
   php artisan migrate --seed
   ```

5. **Iniciar el servidor de desarrollo:**
   ```bash
   php artisan serve
   ```

## Estructura del Modelo de Datos

- **Modelo Post:** Gestiona los informes con campos para `titulo` y `contenido`.
- **Modelo Comment:** Gestiona los comentarios asociados a los posts, incluyendo `autor` y `contenido`.

## Tecnologías Utilizadas

- **Framework:** Laravel 12
- **Lenguaje:** PHP 8.2+
- **Frontend:** Blade Templating Engine & CSS Nativo
- **Herramientas de Desarrollo:** FakerPHP, Artisan CLI

---
*Proyecto realizado siguiendo las directrices del Consejo Científico de Azkernia.*
