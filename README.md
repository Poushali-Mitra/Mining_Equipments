# 🛠️ Mining_Equipments

A complete web-based application to manage and monitor mining equipment maintenance schedules, alerts, and history using PHP and MySQL.

---

## 📂 Project Structure

mining-maintenance-portal/
│
├── index.html # Home dashboard
├── add_equipment.html # Form to add new equipment
├── schedule_maintenance.html # Interface to schedule maintenance
│
├── css/
│ └── styles.css # Frontend styling
│
├── php/
│ ├── add_equipment.php # Handles adding new equipment
│ ├── schedule_maintenance.php # Schedules maintenance
│ ├── view_equipment.php # Displays equipment list
│ ├── maintenance_history.php # Shows past maintenance
│ ├── get_due_equipment.php # Fetches equipment due for maintenance
│ ├── alerts.php # Alert system
│ └── db_connect.php # Database connection
│
└── sql/
└── mining_tracker.sql # MySQL schema file

---

## 🚀 Features

- Add and view mining equipment  
- Schedule maintenance tasks  
- Track maintenance history  
- View alerts for due maintenance  
- Simple and intuitive UI  

---

## 🛠️ Tech Stack

- **Frontend:** HTML, CSS  
- **Backend:** PHP  
- **Database:** MySQL  

---

## 🧑‍💻 How to Run Locally

### 1. Clone or Download the Repository

```bash
git clone https://github.com/yourusername/mining-maintenance-portal.git

2. Move to Local Server Directory
If you're using XAMPP, move the folder to:C:/xampp/htdocs/
3. Import the Database
Open phpMyAdmin
Create a new database called: mining_tracker
Import the SQL file from:
mining-maintenance-portal/sql/mining_tracker.sql
4. Update Database Connection
php/db_connect.php
Replace the contents with:<?php
$conn = new mysqli("localhost", "root", "", "mining_tracker");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
5. Run the Application
Start Apache and MySQL from the XAMPP control panel.
Then open your browser and go to:http://localhost/mining-maintenance-portal/index.html
📧 Author
Poushali Mitra
📬 poushali1704@gmail.com

📜 License
This project is released under the MIT License.

🌟 Show Some Love
If you found this project helpful, give it a ⭐ on GitHub!

🏷️ Made With
✅ Now just copy the full content above, paste it into a file called `README.md`, and include it in your GitHub repo before pushing.
Would you like a **GitHub-ready banner** image or badge for the top too (like “Open Source Project”)?













