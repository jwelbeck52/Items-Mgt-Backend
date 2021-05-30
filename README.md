# BreezeItems API Backend (Laravel)

This is the backend for the BreezeItems Web Application using Laravel 8 API Resources. This is an API for an Item Management (CRUD) Application.

Try it live [here](#)


### Prerequisites
```
PHP 7.4 and above
Composer
MySQL
```
## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### 1) Clone the repository
```
git clone https://github.com/jwelbeck52/Items-Mgt-Backend.git
```

### 2) Install Dependencies
```
composer install
```

### 3) Rename .env.example to .env and update with your configurations
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=item_mgt
DB_USERNAME=
DB_PASSWORD=
```
### 4) Run Migrations
```
php artisan migrate
```

### 5) Seed the db with initial data
```
php artisan db:seed
```

### 6) Generate encryption key
```
php artisan key:generate
```
### 7) (Optional) Add virtual host if using Apache


## API Endpoints

### Get Owned items
```
GET api/items
```

### Get Wishlist items
```
GET api/wishes
```


## Built With

* [Laravel](https://laravel.com) - A php web framework

## Authors

* **Joshua Nii Okai Welbeck**  - [jwelbeck52](https://github.com/jwelbeck52/)

See also the list of [contributors](https://github.com/jwelbeck52/Items-Mgt-Backend/contributors) who participated in this project.

## License

This project is licensed under GPL-3.0 License - see the [LICENSE.md](LICENSE.md) file for details


