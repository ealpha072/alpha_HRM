# alph_HRM
A human resources management system by Alpha Systems

## Folder structure

### 1️⃣ `app/` – Main Application Logic
- `controllers/` → Handles requests & business logic (e.g., EmployeeController.php)
- `models/` → Defines database interactions (e.g., Employee.php)
- `views/` → Contains UI templates (e.g., employees/list.php)
- `config/` → Stores database & app config files
- `helpers/` → Stores helper functions
- `routes.php` → Defines application routes

### 2️⃣ `public/` – Frontend & Entry Point
- `assets/` → Stores CSS, JavaScript, images
- `index.php` → Main entry point for the app

### 3️⃣ `core/` – Framework Core
- `Database.php` → Handles database connections
- `Controller.php` → Base controller for all controllers
- `Model.php` → Base model for all models
- `View.php` → Handles rendering of views

### 4️⃣ `storage/` – File Storage
- Stores uploaded documents (e.g., employee CVs, payslips)

### 5️⃣ Other Files
- `.env` → Environment variables
- `composer.json` → PHP dependencies
- `.htaccess` → URL rewriting

## App modules
### ✅ Employee Management
- Add, update, delete employees
- View employee details
- Assign departments & job roles

### ✅ Attendance & Leave Management
- Employee clock-in/out tracking
- Leave requests & approvals
- Monthly attendance reports

### ✅ Payroll Management
- Salary structure & deductions
- Payslip generation
- Tax & benefits calculations


### ✅ User Roles & Authentication
- Admin, HR, and Employee roles
- Secure login/logout
- Permissions & access control

### ✅ Reports & Analytics
- Employee statistics
- Payroll summary reports
- Attendance insights

