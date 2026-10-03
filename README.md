# Portofolio Fani Lestari

Portofolio pribadi Fani Lestari, mahasiswa Teknik Informatika di Universitas Sains Al-Qur’an yang sedang mengembangkan kemampuan di bidang web.

Personal portfolio for Fani Lestari, an Informatics Engineering student exploring web development.

## Fitur

- Pilihan bahasa Indonesia dan Inggris, tersimpan saat berpindah halaman.
- Halaman beranda, profil, aktivitas dan kemampuan, serta kontak.
- Proyek latihan ditampilkan menggunakan screenshot halaman asli dan tautan ke situsnya.
- Kedai KotaKu ditampilkan sebagai proyek milik klien, bukan demo atau template.
- Unduhan CV dalam bahasa Indonesia dan Inggris.
- Tautan kontak email dan LinkedIn.
- Tampilan responsif dengan navigasi desktop dan menu burger untuk layar kecil.

## Teknologi

- PHP 8.2 atau lebih baru
- Laravel 12
- SQLite untuk pengembangan lokal
- HTML dan CSS

## Menjalankan secara lokal

Pastikan PHP, Composer, dan ekstensi PHP yang dibutuhkan Laravel sudah tersedia. Dari folder proyek, jalankan perintah berikut di PowerShell:

```powershell
composer install
if (-not (Test-Path .env)) { Copy-Item .env.example .env }
if (-not (Test-Path database\database.sqlite)) { New-Item database\database.sqlite -ItemType File }
php artisan key:generate
php artisan migrate
php artisan serve
```

Kemudian buka alamat yang ditampilkan oleh Artisan, biasanya `http://127.0.0.1:8000`.

Jika file `.env` sudah ada, jangan menimpanya dengan `.env.example`; cukup pastikan pengaturan lokal seperti `APP_LOCALE=id` sesuai kebutuhan. Jangan unggah `.env` ke repository.

## Pengujian

```powershell
php artisan test
```

## Berkas portofolio

- CV: `public/files/cv-fani-lestari.pdf` dan `public/files/cv-fani-lestari-en.pdf`
- Screenshot proyek: `public/images/projects/`

## Deployment

Deployment produksi memerlukan server yang mendukung Laravel 12 dan PHP 8.2 atau lebih baru. Atur environment variables produksi secara aman di penyedia hosting; jangan gunakan atau mengunggah `.env` lokal. Karena sesi secara default disimpan di database, konfigurasi database dan migrasi produksi perlu disiapkan sebelum situs dipublikasikan.
