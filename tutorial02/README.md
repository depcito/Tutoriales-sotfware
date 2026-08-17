Tutorial 02 Ingeniería de Software
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
