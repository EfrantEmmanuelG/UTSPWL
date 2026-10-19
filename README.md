# UTS Pemrograman Web Lanjut — Grup A

Implementasi Laravel 12 untuk soal pada `GRUP-A-SOAL-UTS-PWL-2026.pdf`.

## 1. Form POST, layout, dan inheritance

- `GET /nim` menampilkan form NIM dan nama; `POST /nim` memvalidasi dan menampilkan hasil.
- Form menggunakan `@csrf` dan validasi request.
- `resources/views/layouts/base.blade.php` adalah parent layout Bootstrap: left header, right header, left navigation, content, right navigation, dan footer.
- Child `home`, `section`, `nim-form`, dan `nim-result` memakai `@extends`/`@section`. Empat halaman Courses, Students, Grades, Assignments memiliki navigasi vertikal di area content.

## 2. Schema relational

Migration mengikuti diagram pada PDF soal, bukan dataset contoh akademik di `Dataset_PWL (2).pdf`:

- `companies(company_id PK, company_name, headquarters_phone_number)`
- `customers(customer_id PK, first_name, last_name, email_address, number_of_complaints)`
- `items(item_code PK, item, unit_price, company_id FK)`
- `sales(purchase_number PK, date_of_purchase, customer_id FK, item_code FK)`

Relasi Eloquent: Company hasMany Items; Item belongsTo Company dan hasMany Sales; Customer hasMany Sales; Sale belongsTo Customer dan Item. Seeder membuat masing-masing 10 data menggunakan factory dan urutan yang menjaga foreign key.

### Konfigurasi database

Nama database contoh untuk NIM yang disimpulkan dari nama folder proyek adalah `db_71230973`. Untuk menjalankan migration di proyek ini, `.env` memakai file SQLite `database/db_71230973.sqlite`. Bila NIM Anda berbeda, ganti nama file/nilai `DB_DATABASE`. Jika memakai MySQL, siapkan database tersebut, lalu atur `.env`:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_71230973
DB_USERNAME=root
DB_PASSWORD=
```

Atau gunakan SQLite yang sudah dikonfigurasi proyek ini. Kemudian jalankan:

```bash
php artisan migrate --seed
```

Dataset contoh akademik pada PDF terpisah tidak dipakai, karena tabel relational pada soal adalah Customers/Sales/Items/Companies.

## Tampilan data melalui controller (tanpa view)

Route mengembalikan JSON hasil query Eloquent beserta relasi:

- `GET /data/customers`
- `GET /data/sales`
- `GET /data/items`
- `GET /data/companies`

## Menjalankan aplikasi

```bash
php artisan serve
```

Navigasi halaman: `/`, `/courses`, `/students`, `/grades`, `/assignments`, dan `/nim`.
