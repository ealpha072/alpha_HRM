CREATE TABLE employees (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    first_name TEXT NOT NULL,
    last_name TEXT NOT NULL,
    personal_email TEXT UNIQUE NOT NULL,
    gender TEXT NOT NULL,
    phone_number TEXT NOT NULL,
    photo TEXT,
    employee_id TEXT UNIQUE NOT NULL,
    employee_type TEXT NOT NULL,
    employee_level TEXT NOT NULL,
    date_of_joining TEXT NOT NULL,
    department TEXT NOT NULL
);

CREATE TABLE leave_types (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    leave_name TEXT,
    number_of_days INTEGER
);
