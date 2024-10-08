
# FSE Fashion Laravel Project

This project is a Laravel-based web application for FSE Fashion, featuring a `users` table seeder to populate default users in the system.

## Installation

### 1. Clone the Repository

```bash
git clone https://github.com/yourusername/fse-fashion.git
cd fse-fashion
```

### 2. Install Dependencies

Make sure you have [Composer](https://getcomposer.org/) installed, then run the following command to install Laravel dependencies:

```bash
composer install
```

### 3. Set Up the Environment File

Copy the `.env.example` file and rename it to `.env`:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

### 4. Set Up the Database

Edit the `.env` file to match your database credentials:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=fse_fashion
DB_USERNAME=your_db_username
DB_PASSWORD=your_db_password
```

Then, run the migration and seeding commands:

```bash
php artisan migrate --seed
```

This will run the database migrations and populate the `users` table with default data from the `UserSeeder`.

### 5. Run the Application

You can now start the Laravel development server:

```bash
php artisan serve
```

Access the application at [http://localhost:8000](http://localhost:8000).

## Default Users

The `UserSeeder` populates the `users` table with the following default users:

| Full Name  | Email               | Password   | Role   | Status   |
|------------|---------------------|------------|--------|----------|
| fse Admin  | admin@fsefashion.com | admin@123  | admin  | Active   |
| fse User   | user@fsefashion.com  | user@123   | customer| Inactive |

**Note:** Passwords are hashed using Laravel's `Hash::make()` function.

## Useful Commands

- **Run Migrations:**
  ```bash
  php artisan migrate
  ```

- **Run Database Seeder:**
  ```bash
  php artisan db:seed
  ```

- **Clear Cache:**
  ```bash
  php artisan cache:clear
  ```
## Adding Storage Link (Optional)

  ```bash
  php artisan storage:link
  ```
## Troubleshooting

If you encounter any issues, try the following commands:

- **Clear Config Cache:**
  ```bash
  php artisan config:clear
  ```

- **Rebuild Autoloader:**
  ```bash
  composer dump-autoload
  ```

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
