# Laravel CRUD Application - Admin Panel

## Setup Instructions

Follow these steps to get the application running locally:

### 1. Clone the repository

Clone the repository to your local machine:

run:
git clone https://github.com/yourusername/your-repository-name.git
cd your-repository-name

### 2.Set up environment variables
run:
cp .env.example .env

### 3. Configure the Database
Open the .env file and configure your database settings:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password

ALSO add 
QUEUE_CONNECTION=database

Make sure you create a new database with the name specified in DB_DATABASE (you can create the database manually using a tool like phpMyAdmin or via the MySQL command line).

### 4. Install dependencies
run:
composer install

### 5. Run migrations
run:
php artisan migrate

// Ensure that your database is created before running this command.

### 6. Create a symbolic link for storage
run:
php artisan storage:link
php artisan key:generate

### 7. Seed the database with the admin user
run:
php artisan db:seed

// This will create an admin user with the following credentials:
Email: admin@admin.com
Password: password

### 8.Install dependencies
run:

npm install

### 9.Configure SMTP

Open the .env file and configure your mail settings:

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=465
MAIL_USERNAME=username
MAIL_PASSWORD=password
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=email
MAIL_FROM_NAME="${APP_NAME}"

### 11. Start the local development server

run:

php artisan serve
+
npm run dev
+
php artisan queue:work

The application should now be accessible at http://127.0.0.1:8000.
