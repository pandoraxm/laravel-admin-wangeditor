# laravel-admin中如何使用WangEditor，以及laravel-admin多图上传的demo

# Screenshots
![图1](https://github.com/pandoraxm/laravel-admin-wangeditor/blob/master/Screenshots.png)

# Installation

## 1. 下载
```
git clone https://github.com/pandoraxm/laravel-admin-wangeditor.git
```

## 2. composer安装

```
cd laravel_markdown

composer install
```

## 3. 修改env以及数据库配置

```
cp .env.example .env

vim .env
```

## 4. 生成key

```
php artisan key:generate

```

## 5. 迁移

```
php artisan migrate
```

## 6. laravel-admin表迁移

```
php artisan admin:install
```

# Usage
执行`artisan`命令运行

```
php artisan serve
```