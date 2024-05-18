# Hệ thống làm bài kiểm tra

## Overview

Hệ thống cho phép thành viên/khách có thể làm bài test - kiểm tra ở trên hệ thống. Hệ thống sẽ tự động chấm điểm và hiển
thị kết quả sau khi làm xong bài test. Hệ thống cũng sẽ hiển thị bảng xếp hạng của tất cả thành viên đã tham gia làm bài
test.

## Database Schema

![image](https://i.ibb.co/HKRnGvX/quiz-system.png)

## Tính năng

#### Tính năng Admin

- Quản lý các admin khác
- Quản lý các bài test
- Quản lý câu hỏi và lựa chọn
- Hiện thị kết quả và bảng xếp hạng của bài test

#### Tính năng người dùng

- Đăng ký đăng nhập
- Làm bài test
- Xem kết quả sau khi làm bài test, bảng xếp hạng
- Xem lịch sử làm bài test và bảng xêp hạng của toàn hệ thống

#### Điều kiện tiên quyết

- Composer dependency manager
- PHP 8+
- Laravel 10.18+
- Livewire 3
- Tailwind CSS 
- Alpine JS
- Mysql Database

#### Installation

1- Clone the project

```
git clone https://github.com/duwscan/quiz-system.git
```

2- Install the dependencies

```
composer install
```

3- Configure the environment: (Copy file .env.example rồi đổt thành env)

```
cp .env.example .env
```

4- Generate the application key:

```
php artisan key:generate
```

5- Migrate the database:

```
php artisan migrate --seed
```

6- Start the development server:

```
php artisan serve
```

