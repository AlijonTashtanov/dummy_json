# Laravel DummyJSON Import

Этот проект получает данные о продуктах iPhone с API https://dummyjson.com/products, сохраняет их в базу данных и предоставляет доступ через API.

## 📌 API Endpoints

| Method | URL                 | Maqsadi                         |
| ------ | ------------------- | ------------------------------- |
| GET    | /api/products       | Barcha mahsulotlarni ko‘rish    |
| POST   | /api/products/fetch | Dummyjson'dan olib DBga saqlash |

## ⚙️ O‘rnatish

```bash
git clone https://github.com/username/laravel-dummyjson-import.git
cd laravel-dummyjson-import
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```
