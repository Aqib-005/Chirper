# Chirper - Basic Social Media Web Application

Chirper is a modern social media web application built with Laravel, designed to provide users with a Twitter-like experience. Users can post, edit, and delete tweets, interact with others, and receive real-time updates, all while staying informed with email notifications.

Built using Laravel’s features such as event handling, broadcasting, and email notifications, Chirper is a scalable platform for social interaction. With a clean and responsive UI, Chirper delivers a seamless experience for users to engage in conversations, post thoughts, and manage their profiles.

Note: The web app only focuses on the core functionality of this web app therefore some pages are simple 

🚀Setup Guide
Prerequisites
Before you begin, ensure you have the following installed on your machine:

PHP (7.4 or higher)
Composer (for dependency management)
Laravel (latest version)
SQLite or another database (if using SQLite, this is set up automatically)
Node.js (for compiling assets with Laravel Mix)

1. Clone the Repository
Clone the Chirper project repository to your local machine:

```
git clone https://github.com/yourusername/chirper.git
cd chirper
```

2. Install Dependencies
Run the following command to install all PHP and JavaScript dependencies:
```
composer install
npm install
```

3. Set Up Environment
Create a .env file by copying the example configuration provided:

```
cp .env.example .env
```

Configure your environment variables in the .env file:
Set the APP_KEY (you can generate this using the command php artisan key:generate).
Set up your database (for SQLite, ensure DB_CONNECTION=sqlite and the DB_DATABASE points to the correct SQLite file).
For email notifications:

Set up your MAIL_MAILER configuration to use an SMTP service (Gmail, Mailgun, etc.).

4. Migrate the Database
Run the migrations to create the necessary database tables (e.g., users, tweets, sessions):
```
php artisan migrate
```

6. Install WebSocket Server
If you're using Laravel Echo with Pusher or want to set up your own WebSocket server locally:
```
npm run dev
```


7. Run the Application
Start the local development server using Laravel Artisan:
```
php artisan serve
```
🎉Chirper should now be running locally



