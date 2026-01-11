# PROJEK UAS PEMROGRAMAN WEB

## Nama: Syafarudiansya
## NIM: 312410381
## Kelas: TI 24 A6

# Projek UAS Pemrograman Web  
**Aplikasi CRUD Data Barang (PHP & MySQL – Modular)**

## Deskripsi Singkat
Projek ini merupakan aplikasi **CRUD (Create, Read, Update, Delete)** berbasis **PHP native dan MySQL** dengan konsep **modular**.  
Aplikasi digunakan untuk mengelola **data barang**, dilengkapi dengan fitur **login, role user & admin, pagination, dan pencarian data**.

Projek ini dibuat untuk memenuhi **Ujian Akhir Semester (UAS) Mata Kuliah Pemrograman Web**.

## 🎯 Fitur Utama
- Login & Logout
- Role User:
  - Melihat data barang
  - Pencarian & pagination
- Role Admin:
  - Tambah data barang
  - Ubah data barang
  - Hapus data barang
- Upload gambar barang
- Pagination
- Pencarian data (search)
- Tampilan responsif (mobile & desktop)
- Struktur kode modular

---

## 🧩 Struktur Folder
projek_modular/
│
├── assets/
│ ├── css/
│   └── style.css
│
├── config/
│ └── database.php
│
├── modules/
│ ├── auth/
│ │ ├── login.php
│ │ └── logout.php
│ └── user/
│ ├── list.php
│ ├── add.php
│ ├── edit.php
│ └── delete.php
│
├── views/
│ ├── header.php
│ └── footer.php
│
├── index.php
├── .htaccess
└── README.md


---

## 🗄️ Struktur Database
**Database:** `latihan1`

### Tabel `users`
| Field | Tipe |
|------|------|
| id | INT (PK) |
| username | VARCHAR |
| password | VARCHAR |
| role | ENUM('admin','user') |

> Password disimpan menggunakan **hash password PHP**.

### Tabel `data_barang`
| Field | Tipe |
|------|------|
| id_barang | INT (PK) |
| nama | VARCHAR |
| kategori | VARCHAR |
| gambar | VARCHAR |
| harga_beli | INT |
| harga_jual | INT |
| stok | INT |

---

## 🔐 Sistem Login
- Autentikasi menggunakan username & password
- Password di-hash menggunakan `password_hash()`
- Verifikasi login menggunakan `password_verify()`
- Session digunakan untuk menyimpan status login dan role

---

## 🔁 Routing
Routing sederhana menggunakan parameter `page` pada `index.php`.

Contoh:
index.php?page=user/list
index.php?page=user/add
index.php?page=auth/login


Routing diamankan menggunakan whitelist halaman.

---

## 📱 Responsive Design
- Tampilan menyesuaikan ukuran layar
- Tabel menggunakan `table-responsive`
- Form menyesuaikan mobile & desktop
- CSS dibuat sederhana dan konsisten

---

## ⚙️ Cara Menjalankan
1. Pindahkan folder ke:
2. Import database MySQL
3. Jalankan melalui browser:
```
http://localhost/uas/
```
4. Login menggunakan akun yang tersedia di database

---

## 👤 Role Akses
| Role | Akses |
|------|------|
| Admin | CRUD data barang |
| User | Lihat data barang |

---

## 📚 Teknologi yang Digunakan
- PHP Native
- MySQL
- HTML
- CSS
- Apache (XAMPP)

---

## Dokumentasi
<img src="gambar/1.png" width="500"/>


## ✍️ Penutup
Projek ini dibuat sebagai implementasi konsep:
- CRUD
- Modular programming
- Session & authentication
- Role-based access control

Diharapkan projek ini dapat memenuhi kriteria penilaian UAS Pemrograman Web.
