@echo off
@REM Directory of Laravel project
cd /d F:\project-laravel\Dashboard\SuperAdmin

@REM Run clear cache
php artisan cache:clear

@REM Run database migrations
php artisan migrate

@REM Run user data into table
php artisan db:seed --class=UserTableSeeder

@REM Directory of public (where image saved)
cd /d F:\project-laravel\Dashboard\SuperAdmin\public

@REM Remove storage (image saved)
rmdir storage

@REM Exit for public directory
cd ..

@REM Set directory of image become public and also auto created storage folder again
php artisan storage:link

@REM Running server
php artisan serve --port=8001