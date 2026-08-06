# DevFlow - Sistem Manajemen Alur Kerja (Workflow Management System)

DevFlow adalah sistem manajemen proyek dan alur kerja komprehensif yang dirancang untuk mengelola siklus hidup pengembangan perangkat lunak (SDLC). Proyek ini dibangun menggunakan **Laravel 11** dan memanfaatkan desain arsitektur modern.

## Fitur Utama

- **Manajemen Proyek & Klien**: Mendata proyek dari klien beserta dengan tenggat waktu dan anggaran.
- **Sprint Planning**: Melacak target spesifik per iterasi (sprint) beserta jangka waktunya.
- **Task Management**: Membagi pekerjaan ke dalam unit-unit tugas yang terukur dengan prioritas, tenggat waktu, dan sistem status Kanban (To-Do, In Progress, Review, Done).
- **Manajemen User & Role**: Pengaturan otorisasi berlapis untuk Admin, Project Manager, Team Leader, Developer, QA Engineer, dan Klien.
- **Program Magang (Internship)**: Modul untuk melacak aktivitas, logbook, dan mentor dari mahasiswa magang.
- **Issue Tracking (Bug Management)**: Mengawasi kecacatan atau *bug* dari tahapan QA (Quality Assurance) hingga selesai diperbaiki.
- **Sistem Notifikasi Terpusat**: Pemberitahuan otomatis ketika terdapat perubahan penting pada status proyek.
- **Dashboard Overview**: Ringkasan statistik, daftar tugas terbaru, dan aktivitas proyek yang diperbarui secara *real-time*.

## Persyaratan Sistem

- **PHP**: >= 8.2
- **Composer**: >= 2.0
- **Database**: SQLite (dikonfigurasi secara default untuk kemudahan *development*)

## Panduan Instalasi & Menjalankan Aplikasi

Langkah-langkah untuk menyiapkan dan menjalankan proyek DevFlow secara lokal di mesin Anda:

1. **Kloning Repositori**
   ```bash
   git clone https://github.com/neocore-tech/DevFlow.git
   cd DevFlow/devflow-app
   ```

2. **Instalasi Dependensi PHP**
   ```bash
   composer install
   ```

3. **Pengaturan Lingkungan (*Environment*)**
   Salin file `.env.example` menjadi `.env` jika belum ada:
   ```bash
   cp .env.example .env
   ```
   Pastikan variabel *Database* di dalam `.env` sudah diatur ke SQLite (ini adalah pengaturan default di Laravel 11):
   ```env
   DB_CONNECTION=sqlite
   ```

4. **Menghasilkan Kunci Aplikasi (*Application Key*)**
   ```bash
   php artisan key:generate
   ```

5. **Migrasi Database**
   Perintah ini akan membuat file `database.sqlite` dan menghasilkan semua tabel entitas yang relevan:
   ```bash
   php artisan migrate
   ```

6. **Menjalankan Server Pengembangan (*Development Server*)**
   ```bash
   php artisan serve
   ```
   Aplikasi sekarang sudah berjalan. Buka [http://localhost:8000](http://localhost:8000) di peramban web (browser) Anda untuk melihat UI Dashboard utama.

## Struktur Database
Sistem ini menggunakan struktur relasional untuk mengelola data:
- `users`: Data klien dan pegawai internal perusahaan.
- `projects`: Induk dari segala iterasi pengembangan.
- `sprints`: Bagian-bagian waktu kerja dari sebuah Proyek.
- `tasks`: Pekerjaan detail dalam Sprint.
- `issues`: Bug/Kerusakan yang terkait langsung dengan sebuah task.
- `internships`: Rekam jejak mahasiswa magang.
- `app_notifications`: Riwayat log sistem untuk pengguna.

## Kontribusi & Panduan Kode

Jika Anda ingin berpartisipasi dalam pengembangan:
- Pastikan logika penambahan aplikasi baru mengikuti skema *Migration -> Model -> Controller* yang sudah diinisiasi.
- Jaga kerapian dan standar estetika tampilan pada *blade views*.
- Komunikasikan perubahan *Business Flow* dengan meninjau ulang `README.md` utama di root proyek yang berisi dokumentasi flowchart.

---
*Dibuat untuk memudahkan produktivitas pengembangan perangkat lunak.*
