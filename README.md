Server Requirements:
==========================
PHP >= 8.0
OpenSSL PHP Extension
PDO PHP Extension
Mbstring PHP Extension

Database Connection

Inside the .env file change db information:
============================================

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_name
DB_USERNAME=root
DB_PASSWORD=


Migrate your database
=======================

php artisan migrate

Run seeder
============
php artisan make:seeder UsersTableSeeder


Table structure for table `rand_nums` run this:
===================================

CREATE TABLE `rand_nums` (
  `id` bigint(20) NOT NULL,
  `rand_nums_value` longtext NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `rand_nums`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `rand_nums`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;


Test Lumen JWT Authentication API with Postman
===========================================

php -S localhost:8000 -t public

Route list
========================

POST localhost:8000/api/login
POST localhost:8000/api/user-profile
POST localhost:8000/api/refresh
POST localhost:8000/api//logout
POST localhost:8000/api/rand-nums






