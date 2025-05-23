# 🧾 PHP CRUD Resume Manager

This is a simple, clean **CRUD (Create, Read, Update, Delete)** application built with **PHP and MySQL**. It’s designed for managing basic resume details like name, education, experience, and skills.

This project marks my **first step into backend development** using raw PHP and a real database — no frameworks, just full-stack learning from scratch.

---

## ✨ Features

- Create resume records with fields like name, email, education, skills, and more
- View all entries in a styled management table
- Edit or delete any record
- View single record details
- Styled using Bootstrap with a custom layout

---

## 💻 Folder Structure

📁 PHP CRUD
├── dbconnection.php
├── index.php
├── insert.php
├── edit.php
├── read.php
└── data.sql

---

## ⚙️ How to Run This Project

### 🔵 For **Windows** using **XAMPP**

1. Start Apache and MySQL in XAMPP.
2. Place the project folder inside:
   `C:\xampp\htdocs\`
3. Open [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
4. Create a database named: `resume`
5. Import the `data.sql` file to generate the `data` table.
6. Open your browser and visit:
   `http://localhost/PHP%20CRUD/index.php`

---

### 🍎 For **Mac** using **MAMP**

1. Start Apache and MySQL from the **MAMP** control panel.
2. Place your project inside:
   `/Applications/MAMP/htdocs/`
3. Visit [http://localhost:8888/phpmyadmin](http://localhost:8888/phpmyadmin)
4. Create a database called `resume`.
5. Paste or import the `data.sql` structure into it.
6. Open in browser:
   `http://localhost:8888/PHP%20CRUD/index.php`

> 💡 Tip: Use port `8889` in `dbconnection.php` if you're using MAMP’s default MySQL port.

---

## 🛠 Technologies Used

- PHP (Procedural)
- MySQL (via phpMyAdmin)
- HTML/CSS
- Bootstrap 4

---

## 🙋 Author

Made with ❤️ by **Ali Ashir**  

---

## 📄 License

This project is open-sourced under the [MIT License](LICENSE).
