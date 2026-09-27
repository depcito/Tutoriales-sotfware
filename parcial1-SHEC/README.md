Midterm 1 - Practical Part
Software Architecture
Professor Daniel Correa
Universidad EAFIT
Student: Samuel Hernando Echeverri Castrillon

Project built on top of Tutorial 03, adding the **Aura** module (register, list and battle
of aura-farming humans).

## Installation requirements

- PHP >= 8.3
- Composer
- PHP SQLite extension (pdo_sqlite) — no need to install MySQL
- PHP extensions: OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON, BCMath, Fileinfo, cURL

## How to run the project

The project uses SQLite by default (see `.env.example`), so there is no need to install or
configure a separate database engine: only a `database/database.sqlite` file is created.

```
composer install
cp .env.example .env
php artisan key:generate
```

Create the SQLite database file (Windows / PowerShell):

```
New-Item -ItemType File -Path database/database.sqlite -Force
```

On Git Bash / Linux / Mac, use this instead:

```
touch database/database.sqlite
```

Run the migrations and seed the database with test data (includes 8 products, 1 test user
and 10 random humans for the Aura module):

```
php artisan migrate
php artisan db:seed
```

Finally, start the server:

```
php artisan serve
```

Then open in the browser: http://127.0.0.1:8000/

- Tutorial A - Also open: http://127.0.0.1:8000/cart
- Tutorial B - Also open: http://127.0.0.1:8000/image and http://127.0.0.1:8000/image-not-di
- **Midterm 1 - Aura module**: http://127.0.0.1:8000/aura
  - Start zone: `/aura`
  - Register humans: `/aura/humans/create`
  - List humans: `/aura/humans`
  - Human battle: `/aura/humans/battle`

### MySQL alternative

If you prefer to use MySQL instead of SQLite, create an empty database (for example
`laravelcourse`) and configure `.env`:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelcourse
DB_USERNAME=root
DB_PASSWORD=
```

then continue with `php artisan migrate` and `php artisan db:seed` as shown above.

## Aura module - Business rules

- A human has: `id` (auto-increment), `name`, `aura` (integer) and `hierarchy`
  (`common`, `moderate` or `legendary`).
- **List humans**: ordered by `aura` descending. `legendary` humans show a "Boff" badge next
  to their name. `common` humans show their aura amount in blue.
- **Human battle**: compares the first two registered humans (by `id`) and announces who
  would win the aura farming battle, or if it's a tie.

## Architecture / clean code

Following the clean code rules agreed on in the course:

- `routes/web.php` only links URLs to controller methods (no logic, no HTML).
- The controllers (`AuraController`, `HumanController`) contain no business logic or
  validation; they send data to the view through a `viewData` array.
- Registration form validation lives in `App\Http\Requests\StoreHumanRequest`.
- The battle business logic lives in `App\Services\BattleService`.
- The `Human` model documents its attributes in comments and exposes typed getters/setters.
- The `humans` table migration has `up()` and `down()` methods, and uses `timestamps()`.
- Test data is provided through `HumanFactory` and `HumanSeeder`.
