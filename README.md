# Product Management System

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel Version">
  <img src="https://img.shields.io/badge/TailwindCSS-4.x-06B6D4?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind Version">
  <img src="https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP Version">
  <img src="https://img.shields.io/badge/License-MIT-green.svg" alt="License">
</p>

## 📋 Descripción

Sistema de gestión de productos desarrollado con **Laravel 12**, **Jetstream**, **Livewire** y **Tailwind CSS v4**. Permite crear, leer, actualizar y eliminar productos con una interfaz moderna y responsiva.

## 🛠️ Características

- **Autenticación**: Sistema de login y registro con Laravel Jetstream (Sanctum)
- **Gestión de Productos**: CRUD completo de productos
- **Campos de Productos**:
    - Modelo (string)
    - Proveedor (string)
    - Galería (string)
    - Desperdicio (numeric)
    - Costo (numeric)
- **Interfaz Moderna**: Diseño responsivo con Tailwind CSS v4
- **Confirmaciones**: Alertify.js para diálogos de confirmación de eliminación
- **Componentes UI**: Utiliza Flowbite para componentes interactivos
- **Estilos Tipográficos**: Plugin Tailwind Typography integrado

## 📦 Tecnologías

| Tecnología   | Versión |
| ------------ | ------- |
| Laravel      | 12.x    |
| PHP          | 8.2+    |
| Tailwind CSS | 4.x     |
| Jetstream    | 最新    |
| Livewire     | 3.x     |
| Flowbite     | 4.x     |
| Alertify.js  | 1.x     |

## 🚀 Instalación

### Prerrequisitos

- PHP 8.2 o superior
- Composer
- Node.js 18+
- XAMPP (MySQL/MariaDB)

### Pasos de Instalación

1. **Clonar el repositorio**

    ```bash
    git clone <repository-url>
    cd product-management-system
    ```

2. **Instalar dependencias PHP**

    ```bash
    composer install
    ```

3. **Configurar archivo de entorno**

    ```bash
    cp .env.example .env
    ```

4. **Generar clave de aplicación**

    ```bash
    php artisan key:generate
    ```

5. **Configurar base de datos**

    Edita el archivo `.env` con tus credenciales:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=product_management
    DB_USERNAME=root
    DB_PASSWORD=
    ```

6. **Ejecutar migraciones**

    ```bash
    php artisan migrate
    ```

7. **Instalar dependencias Node.js**

    ```bash
    npm install
    ```

8. **Agregar Alertify.js (para diálogos de confirmación)**

    ```bash
    # Copiar los archivos de Alertify.js a la carpeta public
    # Los archivos ya están incluidos en public/js y public/css
    ```

9. **Compilar assets**
    ```bash
    npm run build
    ```

## ⚡ Comandos Útiles

### Desarrollo

```bash
# Iniciar servidor de desarrollo
npm run dev

# Iniciar servidor Laravel
php artisan serve
```

### Producción

```bash
# Compilar assets para producción
npm run build
```

### Base de Datos

```bash
# Crear migración
php artisan make:migration create_products_table

# Ejecutar migraciones
php artisan migrate

# Rollback de migraciones
php artisan migrate:rollback

# Ver estado de migraciones
php artisan migrate:status
```

### Artisan

```bash
# Limpiar caché
php artisan config:clear
php artisan cache:clear
php artisan view:clear

# Ver rutas
php artisan route:list
```

## 📁 Estructura del Proyecto

```
product-management-system/
├── app/
│   ├── Actions/           # Acciones de Jetstream
│   ├── Http/
│   │   └── Controllers/  # Controladores (ProductController)
│   ├── Models/            # Modelos Eloquent (Product)
│   └── Providers/         # Proveedores de servicios
├── database/
│   ├── migrations/        # Migraciones de base de datos
│   ├── seeders/          # Seeders
│   └── factories/        # Factories
├── resources/
│   ├── css/              # Estilos (app.css, alertify.min.css)
│   ├── js/               # JavaScript (alertify.min.js)
│   └── views/            # Vistas Blade
│       ├── components/   # Componentes Blade
│       ├── products/     # Vistas de productos (index, create, edit)
│       └── auth/        # Vistas de autenticación
├── routes/
│   ├── web.php          # Rutas web
│   └── api.php          # Rutas API
├── public/
│   ├── css/             # CSS público (alertify.min.css)
│   └── js/              # JS público (alertify.min.js)
├── config/              # Archivos de configuración
├── vite.config.js       # Configuración de Vite
└── tailwind.config.js  # Configuración de Tailwind (v3 legacy)
```

## 🔐 Rutas

| Método | Ruta                  | Descripción                        |
| ------ | --------------------- | ---------------------------------- |
| GET    | `/`                   | Página de bienvenida               |
| GET    | `/dashboard`          | Dashboard (requiere autenticación) |
| GET    | `/products`           | Lista de productos                 |
| GET    | `/products/create`    | Crear producto                     |
| POST   | `/products`           | Guardar producto                   |
| GET    | `/products/{id}/edit` | Editar producto                    |
| PUT    | `/products/{id}`      | Actualizar producto                |
| DELETE | `/products/{id}`      | Eliminar producto                  |

## 🎨 Personalización

### Tailwind CSS v4

El proyecto usa Tailwind CSS v4. La configuración del tema está en `resources/css/app.css`:

```css
@theme {
    --font-sans: "Figtree", ui-sans-serif, system-ui, sans-serif;
    --color-primary-50: #eff6ff;
    --color-primary-500: #3b82f6;
    /* ... más colores */
}
```

### Compilar para Producción

```bash
npm run build
```

Esto generará los archivos optimizados en `public/build/`.

## 🧪 Testing

```bash
# Ejecutar tests
php artisan test

# Ejecutar tests con Pest
./vendor/bin/pest
```

## 📝 Licencia

Este proyecto está bajo la licencia [MIT](https://opensource.org/licenses/MIT).
