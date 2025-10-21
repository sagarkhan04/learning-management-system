# Learning Management System - Laravel Multi User Project

A multi user project using Laravel 10 and Learning Management System

## Features

- Multi User (Admin, Author)
- Featured post, Popular post
- Category, Tag, Search module
- Media Library
- Pages
- Dynamic header, footer menu
- category trash and restore
- etc.

## Installation

- Clone this repository
```
git clone https://github.com/sagarkhan04/learning-management-system
```
- Change directory
```
cd learning-management-system
```
- Copy .env.example file
```
cp .env.example .env
```
- Install composer
```
composer i
```
- Generate key
```
php artisan key:generate
```
- Update database information in .env file
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=learning-management-system
DB_USERNAME=
DB_PASSWORD=
```
- Run migration
```
php artisan migrate
```
- Seed databse
```
php artisan db:seed
```
- Start server
```
php artisan serve
```
- See the result
```
http://127.0.0.1:8000/
```

## Admin Details
- Admin credential
```
Username:admin@gmail.com
Password:1234
```

## Studnt Details
- Student credential
```
Username:student@gmail.com
Password:1234
```

## Credit

- **[Md. Sagar](https://github.com/sagarkhan04/)**

## Contact:
[![Find me on Facebook](https://img.shields.io/badge/Facebook-1877F2?style=for-the-badge&logo=facebook&logoColor=white)](https://www.facebook.com/sagarr04)  [![Message me on WhatsApp](https://img.shields.io/badge/WhatsApp-25D366?style=for-the-badge&logo=whatsapp&logoColor=white)](https://wa.me/01518955440)
