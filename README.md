# todolist
A simple TODO list app built with Laravel which can :

    Create tasks.
    Edit tasks.
    Delete tasks.
    Complete tasks.
    Restore tasks.
-----------------------------------------------------------    
    
Technologies used in this project:

    Laravel - The Laravel PHP framework.
    Bootstrap - Bootstrap.
------------------------------------------------------------

Installation

Install the dependencies and devDependencies:

$ cd todolist
$ composer install

Create your .env file and generate the application key:

$ cp .env.example .env
$ php artisan key:generate

Run migrations and start the server:

$ php artisan migrate --seed
$ php artisan serve
