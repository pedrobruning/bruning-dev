# Pedro Bruning - Portfolio & Blog

This repository hosts the source code for my personal portfolio website and blog. Built with Laravel, it showcases my projects, skills, and thoughts on software development.

## Features

- **Portfolio**: A showcase of my professional work and side projects.
- **Blog**: Articles and tutorials about web development, AI, and technology.
- **Multilingual Support**: Content available in English and Portuguese.

## Tech Stack

- **Framework**: [Laravel](https://laravel.com)
- **Frontend**: Blade Templates, Tailwind CSS
- **Database**: MySQL / SQLite (for development)

## Local Development

1. Clone the repository.
2. Install dependencies:
   ```bash
   composer install
   npm install
   ```
3. Copy `.env.example` to `.env` and configure your database.
4. Generate application key:
   ```bash
   php artisan key:generate
   ```
5. Run migrations:
   ```bash
   php artisan migrate
   ```
6. Start the development server:
   ```bash
   npm run dev
   php artisan serve
   ```

---
