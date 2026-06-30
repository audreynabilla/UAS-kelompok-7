# PawSpa - Sistem Booking Grooming Hewan

**PawSpa** adalah aplikasi web manajemen layanan grooming untuk kucing dan anjing berbasis PHP Native (tanpa framework) dengan arsitektur MVC sederhana. Aplikasi ini mendukung multi-role (**Admin** dan **User**) serta dilengkapi dengan fitur upload bukti foto hewan dan manajemen status booking.

---

## Fitur Utama

### User (Pelanggan)
- Registrasi & Login akun
- Melihat daftar layanan grooming (kucing/anjing) dengan filter
- Melihat detail layanan (harga, durasi, deskripsi)
- Melakukan booking dengan upload foto hewan
- Melihat riwayat booking dan status (pending/confirmed/completed/cancelled)
- Membatalkan booking sendiri
- Mengedit profil pribadi

### Admin
- Login khusus admin
- **Dashboard statistik**: Total booking hari ini, total user, booking terbaru
- **Manajemen Layanan**: Tambah, edit, hapus layanan grooming (nama, harga, deskripsi, kategori)
- **Manajemen Booking**: Lihat semua booking, ubah status (confirmed/completed), hapus booking
- Mengakses semua data user dan booking

---

## Teknologi yang Digunakan

- **Backend**: PHP 7.4+ (Native OOP)
- **Database**: MySQL (MariaDB)
- **Frontend**: HTML, CSS (Custom), JavaScript (Vanilla)
- **Server**: Apache (dengan `.htaccess` untuk URL rewriting)
- **Version Control**: Git & GitHub

