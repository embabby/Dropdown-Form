## Requirements
This project built using **laravel 5.5**, so your php version must be >= **7.0**

## Installation
1. Clone the source code. `git clone https://github.com/embabby/Dropdown-Form.git`
2. Go to inside the project. `cd Dropdown-Form`
3. Run `composer install` to install all the dependencies.
4. Copy configrations file. `cp .env.example .env`
5. Create a new database.
6. Open .env file and set database configrations
```php
      DB_DATABASE= YOUR_DATABASE_NAME_HERE
      DB_USERNAME= YOUR_USERNAME_HERE
      DB_PASSWORD= YOUR_PASSWORD_HERE
```
7. Migrate the tables `php artisan migrate`
8. seed the data `php artisan db:seed`
9. Run the project! `php artisan serve`

