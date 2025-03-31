# Project Setup

## Requirements
- PHP >= 8.1
- Composer
- Node.js
- MySQL or compatible database

## Installation Steps

1. Clone the repository:
```bash
git clone https://github.com/viniszofx/simple-laravel-project.git
```

2. Navigate to project directory:
```bash
cd simple-laravel-project
```

3. Install PHP dependencies:
```bash
composer install
```

4. Install Node.js dependencies:
```bash
npm install
```

5. Create environment file:
```bash
cp .env.example .env
```

6. Configure database settings in .env:
- DB_DATABASE
- DB_USERNAME
- DB_PASSWORD

7. Generate application key:
```bash
php artisan key:generate
```

8. Run database migrations:
```bash
php artisan migrate
```

9. (Optional) Seed database with test data:
```bash
php artisan db:seed
```

10. Compile assets:
```bash
npm run dev
```

11. Start development server:
```bash
php artisan serve
```

12. Access the application at:
```
http://localhost:8000
```

## Useful Commands
```
- Clear cache: `php artisan optimize:clear`
- List routes: `php artisan route:list`
```

This addition provides comprehensive instructions for setting up and running the Laravel project. The commands are compatible with Windows when using WSL.