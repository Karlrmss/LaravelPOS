# LaravelPOS System

LaravelPOS System is a polished point-of-sale account dashboard built with Laravel and Blade. It demonstrates the MVC pattern through four connected pages and uses static PHP arrays as temporary data sources for customer and staff accounts.

## Features

- Responsive landing page at `/`
- Project and MVC overview at `/about`
- Customer account directory at `/customers`
- User account directory at `/users`
- Named Laravel routes and separate controllers
- Blade `@foreach` loops for customer and user records
- Responsive, accessible interface with no frontend build required
- Feature tests for every public page

## Requirements

- PHP 8.3 or newer
- Composer 2
- SQLite PHP extension (included in most local PHP installations)

## Local setup

```bash
git clone <your-repository-url>
cd violet-pos
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
php artisan serve
```

Open [http://127.0.0.1:8000](http://127.0.0.1:8000) in a browser.

The application CSS is stored in `public/css/app.css`, so Node.js and npm are not needed to run the project.

## Useful Artisan commands

```bash
# Show all registered routes
php artisan route:list

# Clear cached framework files
php artisan optimize:clear

# Run the automated test suite
php artisan test
```

## MVC structure

| Responsibility | Project location |
| --- | --- |
| Routes | `routes/web.php` |
| Page controller | `app/Http/Controllers/PageController.php` |
| Customer data/controller | `app/Http/Controllers/CustomerController.php` |
| User data/controller | `app/Http/Controllers/UserController.php` |
| Blade templates | `resources/views/` |
| Shared styling | `public/css/app.css` |

The account records are intentionally stored as PHP arrays inside their controllers for this laboratory exercise. They can later be replaced by Eloquent model queries without changing the Blade templates' role.

## Tests

Run the full test suite with `php artisan test`.

## Deployment

For submission, deploy the repository to a PHP-compatible platform and configure the web root as the project's `public` directory. Set `APP_ENV=production`, `APP_DEBUG=false`, and a valid `APP_KEY` in the host's environment settings. Run `php artisan migrate --force` during deployment.

Add the final links after publishing:

- **GitHub repository:** `https://github.com/<username>/<repository>`
- **Hosted application:** `https://<your-live-domain>`

## Laboratory outcomes addressed

- Set up and run a Laravel application locally.
- Use Artisan to inspect and work with application files.
- Create routes, controllers, and Blade views.
- Render static PHP array data with Blade `@foreach` directives.
