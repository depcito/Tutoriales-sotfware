Tutorial 04 Ingeniería de Software
Profesor Daniel Correa
Samuel Hernando Echeverri Castrillon

## Requisitos de instalación

- PHP >= 8.3
- Composer
- MySQL / MariaDB
- Extensiones de PHP: OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON, BCMath, Fileinfo, cURL

## Cómo ejecutar el proyecto

```
composer install
cp .env.example .env
php artisan key:generate
```

Configurar en el archivo `.env` la conexión a la base de datos (crear antes una base de datos vacía, por ejemplo `laravelcourse`):

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelcourse
DB_USERNAME=root
DB_PASSWORD=
```

Luego ejecutar las migraciones y poblar la base de datos:

```
php artisan migrate
php artisan db:seed
```

Finalmente iniciar el servidor:

```
php artisan serve
```

Luego abrir en el navegador: http://127.0.0.1:8000/
Tutorial A - Abrir tambien: http://127.0.0.1:8000/cart
Tutorial B - abrir tambien:http://127.0.0.1:8000/image y http://127.0.0.1:8000/image-not-di

## Tutorial 04 - API REST

- A. API sin recursos: http://127.0.0.1:8000/api/products y http://127.0.0.1:8000/api/products/1
- B. API con Resource: http://127.0.0.1:8000/api/v2/products y http://127.0.0.1:8000/api/v2/products/1
- C. API con ResourceCollection: http://127.0.0.1:8000/api/v3/products y http://127.0.0.1:8000/api/v3/products/paginate
- D. Proyecto de prueba fuera de Laravel: ver carpeta `../tutorial04-test-laravel-api` (abrir `index.html` en el navegador con el servidor de Laravel corriendo)

