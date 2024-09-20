Laravel OCR Project

Ini adalah dokumentasi untuk menginstall dan menjalankan project Laravel 10 yang menggunakan OCR (Optical Character Recognition). Project ini dapat ditemukan di Github Repository.
Prerequisites

Sebelum memulai, pastikan Anda memiliki hal-hal berikut:

    PHP: Versi 8.1 atau lebih baru
    Composer: Untuk mengelola dependensi PHP
    Laravel: Versi 10.x
    Database: MySQL
    Node.js: Untuk mengelola asset frontend (diperlukan)

Langkah-langkah Instalasi
1. Clone Repository

Pertama, clone repository ke mesin lokal Anda:

bash

```
git clone https://github.com/aslan-asilon31/laravel_ocr.git
```


Pindah ke direktori project:

bash

```
cd laravel_ocr
```


2. Instal Dependensi

Jalankan perintah berikut untuk menginstal semua dependensi yang diperlukan:

bash

```
composer install
```


3. Konfigurasi .env

Salin file .env.example menjadi .env dan sesuaikan dengan konfigurasi Anda:

bash

```
cp .env.example .env
```

Buka file .env dan atur database serta pengaturan lainnya sesuai kebutuhan Anda:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_ocr
DB_USERNAME=root
DB_PASSWORD={sesuikan password jika ada}
```

4. Generate Kunci Aplikasi

Jalankan perintah berikut untuk membuat kunci aplikasi:

```
php artisan key:generate
```

5. Migrasi Database

Setelah konfigurasi database selesai, jalankan migrasi untuk membuat tabel-tabel yang diperlukan:

```
php artisan migrate
```

6. Instalasi Node Modules

Jika project ini menggunakan asset frontend, jalankan:

```
npm install
```

Kemudian, bangun asset frontend dengan:

```
npm run dev
```

Menjalankan Project

Setelah semua langkah di atas selesai, Anda dapat menjalankan server pengembangan Laravel dengan perintah:

```
php artisan serve
```

Project Anda akan berjalan di http://localhost:8000.
Penggunaan

Setelah server berjalan, Anda dapat mengakses aplikasi di browser Anda. Pastikan untuk mengikuti petunjuk penggunaan yang terdapat dalam dokumentasi aplikasi jika ada.
Contributing

Jika Anda ingin berkontribusi pada project ini, silakan buat issue atau pull request di GitHub repository.
Lisensi


Semoga panduan ini membantu Anda dalam menginstall dan menjalankan project Laravel OCR!