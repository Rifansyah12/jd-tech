# CLAUDE.md — JD Technology

Dokumen ini adalah panduan bagi AI agent (Claude) saat bekerja di project ini.
Baca dan patuhi semua aturan di bawah sebelum membuat perubahan apapun.

---

## Gambaran Project

**JD Technology** adalah website company profile berbasis Laravel 9 dengan panel admin custom.

- **Framework:** Laravel 9 (PHP ^8.0.2)
- **Admin Panel:** Filament v2 (`/admin`) + custom admin controllers
- **Auth:** Guard `filament` untuk admin, guard `web` untuk user biasa
- **Database:** MySQL
- **Frontend:** Blade templates + Tailwind CSS (tidak ada build step JS yang kompleks)

---

## Struktur Utama

```
app/
  Http/Controllers/
    Admin/              ← Controller admin (Dashboard, Portfolio, Services, Team, Messages, Settings)
    AdminAuthController.php
    AboutController.php
  Models/
    Admin.php, User.php, TeamMember.php, Portfolio.php, Service.php, Message.php
  Filament/Pages/       ← Filament pages

resources/views/
  layouts/              ← Layout publik (app, navbar, footer)
  admin/layouts/        ← Layout admin custom
  admin/{modul}/        ← CRUD views admin (portfolio, services, team, messages, settings)
  *.blade.php           ← Halaman publik (home, about, contact, services, portfolio, dll)
  vendor/filament/      ← View override Filament — JANGAN diubah kecuali diminta

routes/web.php          ← Semua route (publik + auth + admin)
database/migrations/    ← Semua migrasi database
```

---

## Aturan Wajib — Jangan Dilanggar

### 1. Jangan Ubah Desain / UI Tanpa Instruksi Eksplisit
- Jangan ganti warna, font, layout, atau struktur HTML/Blade yang sudah ada.
- Jangan tambah library CSS/JS baru tanpa diminta.
- Jangan hapus class Tailwind yang sudah ada kecuali diminta.

### 2. Jangan Refactor Kode yang Tidak Diminta
- Jangan rename variabel, method, atau file hanya karena terlihat "kurang rapi".
- Jangan ekstrak logika ke helper/trait/service baru kecuali diminta.
- Jangan ubah struktur controller/model yang sudah berjalan.

### 3. Jangan Tambah Fitur Tambahan
- Hanya implementasi apa yang diminta, tidak lebih.
- Jangan tambah validasi ekstra, error handling baru, atau fallback yang tidak diminta.
- Jangan buat seeder, factory, atau test file kecuali diminta.

### 4. Pertahankan Konvensi yang Sudah Ada
- Penamaan dalam bahasa **Indonesia** di komentar dan blade jika sudah ada pola itu.
- Route admin menggunakan prefix `/admin` + middleware `auth:filament`.
- View admin berada di `resources/views/admin/{modul}/`.
- View publik berada langsung di `resources/views/`.

### 5. Jangan Sentuh File Vendor
- Folder `resources/views/vendor/filament/` hanya diubah jika ada instruksi spesifik.
- Folder `vendor/` (PHP packages) tidak pernah diubah langsung.

### 6. Hati-hati dengan Migration
- Jangan buat migration baru kecuali diminta.
- Jangan ubah migration yang sudah ada (sudah dijalankan di database).
- Jika perlu perubahan skema, buat migration baru.

### 7. Jangan Commit Otomatis
- Jangan jalankan `git commit`, `git push`, atau destructive git command tanpa konfirmasi eksplisit dari user.

---

## Guard & Auth

| Guard      | Model   | Digunakan untuk          |
|------------|---------|--------------------------|
| `web`      | User    | Login user biasa         |
| `filament` | Admin   | Login panel admin custom |

Jangan tukar guard yang sudah dipakai di middleware atau controller.

---

## Database — Model Utama

| Model        | Tabel          | Keterangan                      |
|--------------|----------------|---------------------------------|
| Admin        | admins         | User admin panel                |
| User         | users          | User biasa (belum dipakai penuh)|
| TeamMember   | team_members   | Data tim (about page)           |
| Portfolio    | portfolios     | Portfolio project               |
| Service      | services       | Layanan perusahaan              |
| Message      | messages       | Pesan dari form kontak          |

---

## Cara Menjalankan Lokal

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

Admin panel: `/admin/login` menggunakan guard `filament`.

---

## Yang Boleh Dilakukan AI

- Memperbaiki bug yang dilaporkan secara spesifik.
- Menambah field/kolom sesuai instruksi (dengan migration baru).
- Membuat view/controller baru sesuai instruksi.
- Menjelaskan cara kerja kode yang sudah ada.
- Membantu debug error yang dilaporkan.

## Yang TIDAK Boleh Dilakukan AI Tanpa Izin

- Mengubah struktur folder atau namespace.
- Mengganti atau mengupgrade dependency di `composer.json`.
- Mengubah desain/tampilan halaman yang sudah ada.
- Menambah package/library baru.
- Menghapus file apapun.
- Melakukan push ke remote repository.
