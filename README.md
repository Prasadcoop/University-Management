# University Student Management System

A Laravel-based CRUD application to manage university students and their class teachers.

## Features

- Add, update, delete students
- Assign class teachers
- View and search student records

## Tech Stack

- Laravel 9+
- Bootstrap 4
- MySQL
- jQuery + DataTables

## Installation

```bash
git clone https://github.com/yPrasadcoop/University-Management.git
cd University-Management
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
