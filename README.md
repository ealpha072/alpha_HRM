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

## 👤 User Roles
1. Admin – Manages system settings, users, and company-wide HR policies.
2. HR Manager – Manages employees, leaves, payroll, and reports.

### 🛠 Core User Stories

#### 1️⃣ User Authentication & Access Control
- As an Admin, I want to create and manage user accounts so that only authorized users can access the system.
- As a Manager, I want to log in securely so that I can access my department's HR functionalities.
- As an Admin, I want to reset user passwords so that managers can regain access if they forget their credentials.

#### 2️⃣ Employee Management
- As an Admin, I want to add new employees so that they can be registered in the system.
- As a Manager, I want to view and update employee details so that I can ensure records are accurate.
- As an Admin, I want to deactivate employees when they leave the company.
- As an Admin, I want to assign employees to specific departments so that managers can oversee their teams.

#### 3️⃣ Leave & Attendance Management
- As a Manager, I want to apply for leave on behalf of employees so that I can manage team availability.
- As an Admin, I want to approve or reject leave requests so that I can maintain workforce planning.
- As a Manager, I want to track leave balances so that I can plan for department staffing.
- As an Admin, I want to generate leave reports so that I can analyze employee attendance trends.


#### 4️⃣ Payroll & Salary Management
- As an Admin, I want to set and update employee salaries so that payroll is accurate.
- As a Manager, I want to view salary details of my department so that I can verify payroll.
- As an Admin, I want to generate salary slips so that employees can download their payslips.
- As an Admin, I want to process payroll so that salaries are disbursed on time.

#### 5️⃣ Performance & Reports
- As a Manager, I want to submit performance reviews so that employee evaluations are documented.
- As an Admin, I want to generate company-wide HR reports so that I can make informed business decisions.
- As an Admin, I want to track and analyze department performance so that I can ensure productivity.

