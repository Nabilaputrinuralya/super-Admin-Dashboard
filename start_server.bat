@echo off
@REM Directory of Laravel project
cd /d F:\project-laravel\Dashboard\SuperAdmin

@REM Run clear cache
php artisan cache:clear

@REM Running server
php artisan serve --port=8001