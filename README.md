# PHP Native MVC

A lightweight **native PHP MVC framework** built from scratch (no
external libraries, no frameworks).\
This project is designed to **teach you the core principles of MVC** and
how frameworks like Laravel or CodeIgniter work under the hood.

------------------------------------------------------------------------

## 🚀 Features

-   Pure PHP (no external dependencies)
-   Simple **routing system**
-   Clean **MVC structure** (Model, View, Controller)
-   Easy to extend
-   Apache `.htaccess` support for pretty URLs

------------------------------------------------------------------------

## 📂 Project Structure

    project/
    │── index.php          # Front controller (entry point)
    │── .htaccess          # URL rewriting
    │── app/
    │   ├── controllers/   # Controllers
    │   │    └── HomeController.php
    │   ├── models/        # Models (DB logic)
    │   │    └── User.php
    │   ├── views/         # Views (templates)
    │   │    └── home.php
    │   └── core/          # Core classes (Router, Controller, etc.)
    │        ├── App.php
    │        ├── Controller.php
    │        ├── Database.php (optional)
    │        └── Model.php (optional)
    └── public/
         └── css/, js/ …   # Assets

------------------------------------------------------------------------

## ⚙️ Installation

1.  Clone the repo:

    ``` bash
    git clone https://github.com/ehab-elshimi/php-native-mvc.git
    cd php-native-mvc
    ```

2.  Run using **Apache (XAMPP/LAMP/MAMP)** and enable `.htaccess`.\
    Place project inside `htdocs/` or `www/`.

3.  Visit in your browser:

        http://localhost/php-native-mvc/home/index

------------------------------------------------------------------------

## 🧩 Usage

-   **Controller Example**

    ``` php
    class HomeController extends Controller {
        public function index() {
            $this->view("home", ["title" => "Welcome to Native PHP MVC!"]);
        }
    }
    ```

-   **View Example**

    ``` php
    <h1><?= $data['title']; ?></h1>
    ```

-   **Model Example**

    ``` php
    class User {
        public function getUsers() {
            return [
                ["name" => "Ali", "email" => "ali@test.com"],
                ["name" => "Sara", "email" => "sara@test.com"]
            ];
        }
    }
    ```

------------------------------------------------------------------------

## 🏷️ Tags

`php` · `mvc` · `native-php` · `framework` · `learning` · `router`

------------------------------------------------------------------------

## 📜 License

MIT License. Free to use, learn, and extend.
