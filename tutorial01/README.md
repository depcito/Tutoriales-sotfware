Tutorial 01 Ingeniería de Software
* Profesor: Daniel Correa

 
 * Por: Samuel Hernando Echeverri Castrillon

## Requisitos de instalación

- PHP >= 8.3
- Composer
- Extensiones de PHP: OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON, BCMath, Fileinfo, cURL

## Cómo ejecutar el proyecto

```
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

Luego abrir en el navegador: http://127.0.0.1:8000/
