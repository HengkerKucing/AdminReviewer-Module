
<p  align="center">
<a  href="https://laravel.com"  target="_blank"><img  src="https://ik.polines.ac.id/wp-content/uploads/2023/11/logo-web.png"  width="360"  alt="Laravel Logo"></a> 
<a  href="https://laravel.com"  target="_blank"><img  src="https://ik.polines.ac.id/wp-content/uploads/2024/02/laravel-logo.jpg"  width="220"  alt="Laravel Logo"></a>
</p>  

## PBL Template D3 Teknik Informatika & S.Tr. Teknologi Rekayasa Komputer

Repository ini digunakan sebagai template aplikasi dasar yang akan digunakan untuk pelaksanaan Project-Based Learning pada kedua prodi di atas di Jurusan Teknik Elektro, Politeknik Negeri Semarang.

PBL template ini membutuhkan <i>minimum requirements</i> untuk aplikasi menggunakan:
- PHP 8.2
- Laravel 10
- MySQL 8.0/MariaDB 10.4

Cara menggunakan template ini adalah sebagai berikut:
- Kloning template ini menggunakan perintah:
``
git clone https://gitlab.com/sukotyasp/pbl-laravel-template.git {project-directory}
``
- Masuk ke``{project-directory}``, hapus folder tersembunyi bernama `` .git``.
- Install dependency menggunakan composer dengan perintah
``composer install``
- Salin file ``.env.example`` menjadi ``.env``
- Buat database sesuai yang anda butuhkan, kemudian sesuaikan entry berikut pada file ``.env``:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE={your database}
DB_USERNAME={your database username}
DB_PASSWORD={your database password}
```
- Jalankan perintah berikut:
```
php artisan key:generate
php artisan migrate
php artisan db:seed
```
- Jalankan aplikasi menggunakan perintah:
```
php artisan serve
```
- Anda dapat memodifikasi port yang digunakan:
```
php artisan serve --port={custom port}
```
- Login menggunakan:
```
username: superadmin@gmail.com
password: adminadmin
```
<hr>

Terima Kasih kepada:
- Kaprodi D3 Teknik Informatika
- Kaprodi S.Tr. Teknologi Rekayasa Komputer
- Ketua Jurusan Teknik Elektro, Politeknik Negeri Semarang
- Task Force PBL D3 Teknik Informatika & S.Tr. Teknologi Rekayasa Komputer
<hr>
Modifikasi dari Project: https://github.com/mjumain/RBAC-LARAVEL-9
