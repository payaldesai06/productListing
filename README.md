# Laravel Product Listing Feature

This is a Product Listing Feature code built with Laravel.

## Prerequisites

Before running the project, make sure you have the following installed on your machine:

- [PHP](https://www.php.net/) (version 8.x or higher)
- [Composer](https://getcomposer.org/)
- [Laravel](https://laravel.com/docs) (version 9.x or higher)
- [Node.js](https://nodejs.org/) (optional, for front-end assets)

## Steps to Run the Project

### 1. Clone the Repository

Clone this repository to your local machine:

git clone https://github.com/payaldesai06/productListing.git

cd productListing

Run the following command to install Laravel's dependencies:

composer install

Copy the .env.example file to create your .env file:

cp .env.example .env

Set up your database credentials in the .env file (MySQL or SQLite, etc.):

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

Generate the application key:

php artisan key:generate

Run the migrations to set up the database:

php artisan migrate

Seed the database with some initial product data:

php artisan db:seed --class=ProductSeeder

Running the Application:

php artisan serve

By default, this will run the application at http://127.0.0.1:8000

Product List Request:

GET http://127.0.0.1:8000/products?category=Electronics&sort=asc


## Testing

This project includes tests for the Product Listing Endpoint. You can run the tests using the following command:

php artisan test




