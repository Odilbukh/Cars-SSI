# Закрытый каталог автомобилей

## Описание

Система позволяет добавлять автомобили в каталог

## Технологии
PHP, HTML, MySQL, Laravel 8, CSS, Bootstrap 4, JavaScript, Backpack

## Доступ в админ панель
Зайдите в /admin/login

Логин: admin@admin.com
Пароль: admin

## Установка

Скачайте проект из GitHub. Например через команду:
```sh
git clone https://github.com/Odilbukh/cars-ssi.git
```

##### Настройка .env
Создайте у себя новый база данных и меняйте параметры в файле .env 
Для удобства отправляю .env тоже в гит (что обычно не далаю из-за безопасности)

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

!! Если вы не собираетесь использовать веб сервер то пожалуйста укажите порт в конце APP_URL !! 

Например:  
APP_URL=http://localhost:8000
А то изображение не может загружаться правильно

##### Установка проекта и его компоненты

```sh
composer install
```

```sh
npm install 
```

```sh
php artisan backpack:install
```

```sh
php artisan storage:link
```

##### Запускаем миграции и сидери

```sh
php artisan migrate --seed
```

##### Запуск систему

```sh
php artisan serve
```


##### Плагины

| Plugin | Version |
| ------ | ------ |
| Backpack | v5.2 |


## Development

