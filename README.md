# Laravel DummyJSON Import

Bu loyiha `https://dummyjson.com/products` API'sidan iPhone mahsulotlarini olib, ularni bazaga saqlaydi va API orqali ko‘rsatadi.

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
