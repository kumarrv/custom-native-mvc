# 🧩 Custom Native MVC — PHP Implementation
![Architecture Diagram](https://github.com/ehab-elshimi/custom-native-mvc/raw/main/public/images/native-mvc.png)


A lightweight, custom-built MVC architecture written in **native PHP**,  
showcasing a deep understanding of the **Model–View–Controller (MVC)** pattern —  
a concept applicable across multiple back-end technologies such as **Java Spring MVC**.  

This project demonstrates how MVC can be implemented from scratch using PHP and PDO,  
focusing on clean architecture, reusable code, and a clear separation of concerns.

---

## 👨‍💻 Author
**Name:** Ehhab Elshimi  
**Title:** Software Developer  
**GitHub:** [github.com/ehab-elshimi](https://github.com/ehab-elshimi)

---

## 📦 Folder Structure
```
custom-native-mvc/
├── app/
│   ┣ core/
│   │ ┣ App.php
│   │ ┣ Router.php
│   │ ┣ Controller.php           ← Abstract base controller
│   │ ┣ Database.php
│   │ ┗ traits/
│   │     ┗ ApiResponseTrait.php ← reusable JSON response trait
│   ┣ controllers/
│   │ ┣ HomeController.php
│   │ ┣ UserController.php
│   │ ┣ UserApiController.php
│   │ ┗ ProductController.php
│   ┣ models/
│   │ ┗ User.php
│   ┗ views/
│       ┣ errors/
│       ┃ ┗ 404.php
│       ┣ home/
│       ┃ ┗ index.php
│       ┗ users/
│           ┗ index.php
│
├── routes.php                    ← Central route definitions
├── docs/
│   ┣ database.sql
│   ┗ instructions.md
├── index.php
└── README.md
```

---

## ⚙️ Installation & Setup

### 1️⃣ Create the Database
Import the provided SQL file into your MySQL server:
```bash
mysql -u root -p < docs/database.sql
```

### 2️⃣ Configure the Database Connection
Open `app/core/Database.php` and update credentials if necessary:
```php
private $host = 'localhost';
private $user = 'root';
private $pass = 'your_password';
private $dbname = 'mvc_native';
```

### 3️⃣ Run the Application
Start the local PHP server:
```bash
php -S localhost:8000
```

Then open your browser:

- 🌐 [http://localhost/custom-native-mvc/](http://localhost/custom-native-mvc) → View all users (HTML page)  
- 🌐 [http://localhost/custom-native-mvc/api/users](http://localhost/custom-native-mvc/api/users) → Get all users (JSON API)

---

## 🌐 API Endpoints
| Route | Method | Description |
|--------|---------|-------------|
| `/api` | GET | Get all users |
| `/api/user/{id}` | GET | Get a single user |
| `/api/create` | POST | Create new user |
| `/api/delete/{id}` | DELETE | Delete a user |

### Example Request
```bash
curl http://localhost/custom-native-mvc/api/users
```

### Example Response
```json
{
  "success": true,
  "message": "All users returned successfully!",
  "data": [
    { "id": 1, "name": "Ehhab Elshimi", "email": "ehhab@example.com" }
  ]
}
```

---

## 📚 Features
✅ Custom-built MVC architecture (Model / View / Controller)  
✅ Secure PDO-based database layer  
✅ JSON API endpoint with proper HTTP status codes  
✅ Lightweight, extensible, and framework-independent  

---

## 🧠 Future Enhancements
- Add user creation and edit forms  
- Implement full RESTful CRUD API  
- Add a routing class for clean URLs  
- Integrate a front-end framework (Bootstrap or TailwindCSS)  
- Build a Java Spring MVC version to compare architecture patterns  

---

## 📜 License
This project is open-source and available under the MIT License.
