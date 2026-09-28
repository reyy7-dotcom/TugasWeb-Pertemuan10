# 📘 TugasWeb-P9-LaravelSetup

> **Tugas Rutin 9** — Setup Laravel  
> Mata Kuliah: Pemrograman Web

---

## 📋 Deskripsi

Project Laravel yang dibuat untuk memenuhi Tugas Rutin 9. Project ini mendemonstrasikan:
- Instalasi dan konfigurasi Laravel
- Koneksi database MySQL
- Arsitektur MVC (Model-View-Controller)
- Blade templating dengan data dinamis
- Route dan Controller
- Styling menggunakan Tailwind CSS CDN

---

## ⚙️ Requirement

| No | Requirement | Status |
|----|-------------|--------|
| 1  | Install Composer & buat project Laravel | ✅ |
| 2  | Konfigurasi database MySQL di `.env` | ✅ |
| 3  | Artisan serve & welcome page | ✅ |
| 4  | 3 route custom → Blade View | ✅ |
| 5  | View dengan data dinamis | ✅ |
| 6  | `make:controller` & `make:model -m` | ✅ |
| 7  | README.md | ✅ |
| 8  | Repository siap | ✅ |
| **Bonus** | Tailwind CSS CDN + Route `/hello/{nama}` | ✅ |

---

## 🚀 Instalasi

### 1. Clone Repository

```bash
git clone <url-repository>
cd TugasWeb-P9-LaravelSetup
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Konfigurasi Environment

Salin file `.env.example` menjadi `.env`:

```bash
cp .env.example .env
```

Edit `.env` dan sesuaikan konfigurasi database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tugas_rutin_9
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Buat Database

Buat database di **phpMyAdmin** atau melalui terminal MySQL:

```sql
CREATE DATABASE tugas_rutin_9;
```

### 6. Jalankan Migration

```bash
php artisan migrate
```

### 7. Jalankan Server

```bash
php artisan serve
```

Buka browser di: **http://127.0.0.1:8000**

---

## 📁 Struktur Folder Utama

```
tugas pemrograman_TR9/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── PageController.php      ← Controller utama
│   └── Models/
│       └── Post.php                    ← Model Post (Eloquent)
│
├── database/
│   └── migrations/
│       ├── ..._create_users_table.php
│       ├── ..._create_cache_table.php
│       ├── ..._create_jobs_table.php
│       └── ..._create_posts_table.php  ← Migration model Post
│
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php           ← Layout utama (Tailwind CDN)
│       ├── home.blade.php              ← Halaman Home (data dinamis)
│       ├── about.blade.php             ← Halaman About
│       ├── contact.blade.php           ← Halaman Contact
│       └── hello.blade.php             ← Bonus: /hello/{nama}
│
├── routes/
│   └── web.php                         ← Definisi route
│
├── .env                                ← Konfigurasi environment (TIDAK di-commit)
├── .env.example                        ← Template environment
├── composer.json                       ← Dependency PHP
└── README.md                           ← Dokumentasi ini
```

---

## 🏗 Penjelasan MVC

### Model (`app/Models/`)
Representasi data dan interaksi dengan database menggunakan **Eloquent ORM**.
- `Post.php` — Model untuk tabel `posts` dengan kolom `title`, `body`, `author`.

### View (`resources/views/`)
Template HTML menggunakan **Blade Templating Engine**.
- `layouts/app.blade.php` — Layout utama dengan navbar & footer.
- `home.blade.php` — Menampilkan data dinamis dari Controller menggunakan `{{ $variable }}` dan `@foreach`.
- `about.blade.php` — Informasi project.
- `contact.blade.php` — Informasi kontak developer.
- `hello.blade.php` — Bonus: menampilkan nama dari route parameter.

### Controller (`app/Http/Controllers/`)
Logika bisnis yang menghubungkan Model dan View.
- `PageController.php` — Menangani 4 route:
  - `home()` → mengirim data dinamis ke view
  - `about()` → halaman about
  - `contact()` → halaman contact
  - `hello($nama)` → bonus route parameter

---

## 🛣 Routes

| Method | URI | Controller Method | Keterangan |
|--------|-----|-------------------|------------|
| GET | `/` | `PageController@home` | Halaman utama + data dinamis |
| GET | `/about` | `PageController@about` | Halaman about |
| GET | `/contact` | `PageController@contact` | Halaman contact |
| GET | `/hello/{nama}` | `PageController@hello` | Bonus: route parameter |

---

## 🎨 Bonus

### Tailwind CSS CDN
Seluruh halaman menggunakan styling dari Tailwind CSS via CDN (`<script src="https://cdn.tailwindcss.com"></script>`).

### Route Parameter `/hello/{nama}`
Contoh: buka `http://127.0.0.1:8000/hello/Reyhan` → menampilkan **"Halo, Reyhan!"**

---

## 📝 Command yang Digunakan

```bash
# Instalasi
composer create-project laravel/laravel .

# Artisan
php artisan make:controller PageController
php artisan make:model Post -m
php artisan migrate
php artisan config:clear
php artisan serve
```

---

## 📄 Lisensi

Project ini dibuat untuk keperluan akademik — Tugas Rutin 9.
