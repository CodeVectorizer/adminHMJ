## Instalasi
- git clone https://github.com/CodeVectorizer/adminHMJ.git
- cd adminHMJ
- composer install
- npm install
- cp .env.example .env
- php artisan key:generate
- php artisan serve


## Migrate
- buat db 'hmjadmin'
- setting nama_database di .env
- npm install 
- php artisan migrate
- php artisan db:seed --class UserSeeder
- php artisan serve
- localhost:8000/admin/login
- admin@admin.com:admin
