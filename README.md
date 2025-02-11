# To-Do List Application
A simple to-do list application built with Laravel.

# Features
- Add tasks with a name and description.
- Mark tasks as completed.
- Delete tasks.
- View all tasks.

- # How to run the code in local
- 1. Clone the repository:https://github.com/Nilukshan-97/Todo_laravel_php.git
  2. cd todo-app
  3. composer install #install the packages
  4. cp .env.example .env  #Set up your .env file set up the MySQL database
  5. php artisan key:generate
  6. php artisan migrate #create the table in mysql
  7. php artisan serve #run the program

finally tasks will open http://localhost:8000/tasks this link
