# RESEPKU APPLICATION
Aplikasi Resepku merupakan aplikasi yang memberikan kemudahan untuk berbagi informasi tentang resep makanan yang di bagikan oleh pengguna.

## Persyaratan

Aplikasi ini memiliki persyaratan berikut sebelum menginstalnya:

- [PHP](https://www.php.net/) versi 8.1 atau lebih tinggi
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) dan [NPM](https://www.npmjs.com/)
- [Laravel](https://laravel.com/) versi 10.x

  ## Instalasi

1. Clone repositori:
   
   ```bash
   git clone https://github.com/hudaputrasantosa/resepku-application.git

2. Pindah Direktori

   ```bash
   cd resepku-application

3. Salin file .env.example menjadi .env
   
      ```bash
   cd resepku-application
4. Konfigurasi file .env dengan mengganti pengaturan nama database db_resepku
5. Install Dependencies
   
      ```bash
   composer install
6. Generate key aplikasi

   ```bash
   php artisan key:generate
7. Generate link storage

   ```bash
   php artisan storage
8. Jalankan Migrasi

   ```bash
   php artisan migrate
9. Install dependecies frontend Breeze

    ```bash
    npm install
10. Jalankan server

    ```bash
    php artisan serve
11. Buka proyek pada local server http://localhost:8000
    
