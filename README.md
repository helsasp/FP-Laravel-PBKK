# Final Project Laravel Pemrograman Berbasis Kerangka Kerja Kelompok 29
***Note*** : Mohon mengecek branch [final](/../final/) untuk mengakses code akhir/final dari project ini.

# TutorIN - Unlock Your Coding Potential

| Name           | NRP        | Kelas     |
| ---            | ---        | ----------|
| Helsa Sriprameswari Putri | 5025221154 |  PBKK (D) |
| Nadia Evi Nathania | 5025221063 |  PBKK (D) |

## Plan :
1. Membuat views templating dengan bootstrap
2. Membuat database migration dan seeder edulevel
3. Membuat CRUD pada edulevel
4. Menerapkan eloquent ORM relationship di tabel edulevel dan program
5. Membuat CRUD pada program
6. Redesign UI dan pagination

## Website Features
1. User bisa menambahkan, mengedit, menghapus data class level.
2. User bisa menambahkan, melihat lengkap, mengedit, dan menghapus data programs serta melihat nama class levelnya.

## Installation
```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

## Table

### Edulevels 
![image](https://github.com/user-attachments/assets/3cea6274-c00e-4c0e-99b7-c48972e51afa)

### Programs
![image](https://github.com/user-attachments/assets/35be0030-31a6-45a1-ba99-8cd85fad725b)

### Relationship
![image](https://github.com/user-attachments/assets/dcf912a3-48ac-437d-a7fd-a8dfea5fffb2)



## Models

### Edulevel
```php
public function programs()
    {
        return $this->hasMany(Program::class);
    }
```

### Program
```php
public function edulevel()
    {
        return $this->belongsTo(Edulevel::class); 
    }
```
Dalam model tersebut, terdapat one-to-many relationship antara edulevel dan programs dimana suatu edulevel dapat memiliki banyak program.

## Views

### Edulevel
- Add view : View ini berfungsi untuk menambahkan data edulevel baru ke database. Dalam views ini, digunakan method `post` serta token csrf untuk menambahkan data.<br>
- Data view : View ini berfungsi untuk menamplikan semua data edulevels dengan menggunakan method `post` serta terdapat button delete dengan method `delete` untuk menghapus data. Tiap - tiap data dilakukan iterasi untuk ditampilkan masing - masing.<br>
- Edit view : View ini berfungsi untuk mengedit data lama dengan menginputkan data baru menggunakan method `patch`.<br>

### Program
- Index view : View ini berfungsi untuk menamplikan halaman berisi semua data program dengan menggunakan method `post` serta terdapat button delete dengan method `delete` untuk menghapus data. Tiap - tiap data dilakukan iterasi untuk ditampilkan masing - masing.<br>
- Create view : View ini berfungsi untuk menambahkan data program baru ke database. Dalam views ini, digunakan method `post` serta token csrf untuk menambahkan data.<br>
- Edit view : View ini berfungsi untuk mengupdate data yang sudah ada dengan menginputkan data terbaru, menggunakan method `put`.<br>
- Show view : View ini berfungsi untuk menampilkan tabel berisi informasi detail dari suatu program tertentu.<br>

## Controller
### Edulevel
Terdapat beberapa fungsi yaitu : 
```php
public function data()
public function add()
public function addProcess(Request $request)
public function edit ($id)
public function editProcess(Request $request, $id)
public function delete ($id)
```
- Fungsi `data` untuk menampilkan semua data edulevels. <br>
- Fungsi `add` dan `addProcess` untuk memproses data yang ditambahkan di edulevels. <br>
- Fungsi `edit` dan `editProcess` untuk memproses data yang diedit di edulevels. <br>
- Fungsi `delete` untuk menghapus data edulevels.<br>

### Program
Terdapat beberapa fungsi yaitu : 
```php
public function index()
public function create()
public function store(Request $request)
public function show(Program $program)
public function edit(Program $program)
public function update(Request $request, Program $program)
public function destroy(Program $program)
```
- Fungsi `index` untuk menampilkan semua data programs. <br>
- Fungsi `create` dan `store` untuk memproses data yang ditambahkan di programs. <br>
- Fungsi `edit` dan `update` untuk memproses data yang diedit di edulevels. <br>
- Fungsi `show` untuk menampilkan detail dari suatu data pada programs.<br>
- Fungsi `destroy` untuk menghapus data pada programs.<br>

## Routes 
```php
Route::get('/', function () {
    return view('welcome',['title'=>'TutorIN: Unlock Your Coding Potential']);
});

Route::get('home', function () {
    return view('home');
});

Route::get('edulevels', [EdulevelController::class, 'data']);
Route::get('edulevels/add', [EdulevelController::class, 'add']);
Route::post('edulevels', [EdulevelController::class, 'addProcess']);
Route::get('edulevels/edit/{id}', [EdulevelController::class, 'edit']);
Route::patch('edulevels/{id}', [EdulevelController::class, 'editProcess']);
Route::delete('edulevels/{id}', [EdulevelController::class, 'delete']);
Route::resource('programs', ProgramController::class);
```

## Website Overview

### Welcome Page

![image](https://github.com/user-attachments/assets/f919c149-fc84-4941-8df1-e9e7550054e0)

### Home Page 

![image](https://github.com/user-attachments/assets/50071e6f-1447-4750-bcbd-0798b2767fcf)

### Class Level Home

![image](https://github.com/user-attachments/assets/c67bf8c4-29bb-4ef1-834b-11fb19e16bca)

### Class Level Add

![image](https://github.com/user-attachments/assets/964b3d71-bbc0-4fc8-a12a-5c3ed4a6e671)
![image](https://github.com/user-attachments/assets/7a01263e-2b85-4963-934c-a092194f543e)

### Class Level Edit

![image](https://github.com/user-attachments/assets/8e0fc316-be71-4374-b439-c03c25549ade)
![image](https://github.com/user-attachments/assets/9bf3d3e7-70a9-42c3-b851-dddd12562d37)

### Class Level Delete

![image](https://github.com/user-attachments/assets/91034c5c-56e8-41a3-a1bb-fb3ec7002b75)
![image](https://github.com/user-attachments/assets/3a604a31-b80e-4363-841e-2c50000cedbb)

### Program Home

![image](https://github.com/user-attachments/assets/3599f1e7-e69a-43e4-87c7-03d0eeebab6c)

### Program Show

![image](https://github.com/user-attachments/assets/b85aabb1-ed8a-4278-a073-b1ab0fdaf76d)

### Program Add

![image](https://github.com/user-attachments/assets/426292c1-a090-4bf7-a558-b1cb0eb980c1)
![image](https://github.com/user-attachments/assets/b75577da-3aa7-4b03-82d1-64db37201c2b)

### Program Edit

![image](https://github.com/user-attachments/assets/4ccca45c-b767-447d-8c27-7957459b96d9)
![image](https://github.com/user-attachments/assets/f73b26c2-7979-4f1f-9b6a-036709a7889d)

### Program Delete

![image](https://github.com/user-attachments/assets/1cf21554-596c-4a6b-b61d-1b2dd0d3b234)
![image](https://github.com/user-attachments/assets/10bd1e79-5e76-4398-8e22-c30d2619b60c)


## Youtube Demo

https://youtu.be/oUmceywImXI
