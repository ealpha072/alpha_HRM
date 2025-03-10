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

CREATE TABLE "leave_types" (
	"id"	INTEGER,
	"leave_name"	TEXT UNIQUE,
	"number_of_days"	INTEGER,
	PRIMARY KEY("id" AUTOINCREMENT)
);

CREATE TABLE "departments" (
	"id"	INTEGER,
	"department_name"	TEXT UNIQUE,
	PRIMARY KEY("id" AUTOINCREMENT)
);

CREATE TABLE "org_details" (
	"id"	INTEGER,
	"name"	TEXT NOT NULL,
	"username"	TEXT NOT NULL UNIQUE,
	"password"	TEXT NOT NULL,
	"telephone"	TEXT NOT NULL,
	"email"	TEXT NOT NULL UNIQUE,
	"vision"	TEXT,
	"mission"	TEXT,
	"created_at"	DATETIME DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY("id" AUTOINCREMENT)
);
