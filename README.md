<<<<<<< HEAD
=======
# Task-Manager
A simple single-user Task Management System built with Laravel 11 and MySQL. Supports creating, updating, completing, and deleting tasks with priority and status management. Built using MVC architecture.

>>>>>>> e852f08b9c1a8a2e38186d98f26daae884acd858
# Simple Task Management System

## Project Overview
This is a **single-user Task Management System** built using **Laravel 11** and **MySQL**.  
The application allows users to **create, view, update, mark as completed, and delete tasks**.  
It was developed as part of an **internship assessment** to demonstrate basic Laravel knowledge, MVC architecture, and clean coding practices.

---

## Features
- List all tasks
- Add a new task
- Edit existing tasks
- Mark tasks as completed
- Delete tasks
- Task priority levels: Low, Medium, High
- Task status: Pending, Completed
- Laravel form validation

---

## Technology Stack
- PHP 8.1+
- Laravel 11
- MySQL
- Blade Templates
- Git

---

## Folder Structure (Important)
- `app/Models/Task.php` – Task model
- `app/Http/Controllers/TaskController.php` – Task controller
- `database/migrations` – Task table migration
- `resources/views/tasks` – Blade views
- `routes/web.php` – Application routes

---

## Setup Instructions

### 1. Clone the repository

git clone <repository-url>
cd taskManager

### 2. Install dependencies
composer install

### 3. Set up environment
cp .env.example .env


Update .env database credentials:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tasks
DB_USERNAME=root
DB_PASSWORD=

### 4. Generate application key
php artisan key:generate

### 5. Run migrations
php artisan migrate

### 6. Start the server
php artisan serve


Open in your browser:

http://127.0.0.1:8000/tasks

### Validation Rules

Title: Required
Priority: Low / Medium / High
Status: Pending / Completed

### Notes

This is a single-user system (no authentication).
UI is styled using basic CSS for clarity.
Resource routing and MVC architecture are followed.

### Author

<<<<<<< HEAD
Charishma – MCA Student
=======
Charishma – MCA Student
>>>>>>> e852f08b9c1a8a2e38186d98f26daae884acd858
