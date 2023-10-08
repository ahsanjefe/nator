Modified settings of Soft Delete and false for timestamps

Added
1. Copy the `.env.example` file to `.env`:
   ```
   cp .env.example .env
   ```

2. Update the `.env` file with your database connection details.

3. Install the required dependencies using Composer:
   ```
   composer install
   ```

4. Generate an application key:
   ```
   php artisan key:generate
   ```

5. use the below to generate new migrations
```
composer require --dev kitloong/laravel-migrations-generator
```

6.  Install sanctum below
   ```
   composer require laravel/sanctum
```

7. Install Service Provider
   ```
   php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
   ```
      
8. Add Verification File
```
    php artisan make:mail VerificationEmail
```
