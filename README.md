# Laravel DummyJSON Import

Этот проект получает данные о продуктах iPhone с API https://dummyjson.com/products, сохраняет их в базу данных и предоставляет доступ через API.

## 📌 API Endpoints

| Метод | URL                 | Назначение                         |
| ------ | ------------------- | ------------------------------- |
| GET    | /api/products       | Просмотр всех продуктов    |
| POST   | /api/products/fetch | Получение данных с DummyJSON и сохранение в БД |

📄 Swagger Документация
Вы можете просмотреть и протестировать API через Swagger по следующему адресу:

/docs/api

⚙️ Установка

```bash
git clone https://github.com/AlijonTashtanov/dummy_json.git
cd laravel-dummyjson-import
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```
