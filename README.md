# Bistro Bliss

**A full-stack restaurant booking and management platform built with Laravel 10, Blade, MySQL, Tailwind CSS, Jetstream, Sanctum and Socialite.**

Bistro Bliss combines a customer-facing restaurant experience with an authenticated administration panel for managing menus, reservations, users and customer inquiries.

---

## Project Overview

The application supports two main user experiences:

### Customer Experience

- Browse the restaurant menu by category
- Explore public pages such as About and Blogs
- Create table reservations
- Review personal bookings
- Cancel eligible bookings
- Receive and manage booking notifications
- Submit contact inquiries
- Sign in with supported social providers

### Administration Experience

- Access a middleware-protected admin panel
- Create, update and manage menu items
- Soft-delete menu items and restore them later
- Permanently delete archived items when required
- Review registered users
- Review customer reservations
- Accept or reject bookings
- Review contact-form submissions

## Key Workflows

### Reservation Lifecycle

```text
Customer submits reservation
        ↓
Reservation is stored with an initial status
        ↓
Admin reviews the booking
        ↓
Admin accepts or rejects it
        ↓
Customer receives a status notification
```

### Menu Management

```text
Admin creates or edits a menu item
        ↓
Item is available to the public menu
        ↓
Admin can soft-delete unavailable content
        ↓
Deleted items can be restored or permanently removed
```

## Verified Application Routes

The Laravel route layer includes dedicated flows for:

- Homepage and about page
- Menu and menu categories
- Blogs
- Booking creation
- Personal bookings and cancellation
- Notifications
- Contact form
- Admin dashboard
- Menu CRUD
- Soft-delete / restore / force-delete operations
- User administration
- Booking approval/rejection
- Contact inquiry administration
- Google authentication
- Facebook authentication

The administration routes are grouped behind a custom `AdminPanelMiddleware`.

## Technology Stack

| Area | Technology |
| --- | --- |
| Backend | Laravel 10 / PHP 8.1+ |
| Server-rendered UI | Blade templates |
| Database | MySQL through Eloquent ORM |
| Authentication | Laravel Jetstream, Fortify, Sanctum |
| Social login | Laravel Socialite |
| Frontend styling | Tailwind CSS 3 |
| Asset pipeline | Vite 4 |
| Interactive components | Livewire 3 / JavaScript where required |
| Email integration | Symfony Mailgun Mailer |
| Testing | PHPUnit / Laravel Feature Tests |

## Application Architecture

The project follows a conventional Laravel application structure:

```text
app/
├── Http/
│   ├── Controllers/        # Customer and administration workflows
│   └── Middleware/         # Access-control middleware
├── Models/                 # Eloquent models
├── Mail/                   # Mail-related classes
└── ...

resources/
└── views/                  # Blade templates

routes/
└── web.php                 # Public, authenticated and admin routes

database/
├── migrations/
├── factories/
└── seeders/

tests/
├── Feature/
└── Unit/
```

## Authentication & Account Features

The project uses Laravel's authentication ecosystem and includes test coverage for several account-level behaviors, including:

- Authentication
- Registration
- Email verification
- Password reset and password confirmation
- Password updates
- Profile information
- API token creation/deletion and permissions
- Browser sessions
- Two-factor authentication settings
- Account deletion

Social-authentication routes are also implemented for **Google** and **Facebook** through Laravel Socialite.

## Menu Management

The admin workflow supports:

- Creating menu items
- Updating existing items
- Viewing menu records
- Soft deletion
- Viewing deleted items
- Restoring deleted items
- Force deletion
- Bulk deletion

Public menu routes expose dedicated categories including breakfast, main dishes, drinks and desserts.

## Booking Management

Customers can create reservations and access a personal bookings area. Administrators can review incoming bookings and change their status through dedicated accept/reject actions.

The project also includes notification routes so customers can view, read and delete stored notifications related to application events.

## Contact & Communication

A dedicated contact workflow allows public users to submit inquiries. Administrators can review those messages from the protected admin area.

The application also includes email-support dependencies through Symfony's Mailgun integration.

## Testing

Laravel Feature Tests are included for the authentication/account foundation of the application.

Run the test suite with:

```bash
php artisan test
```

## Local Development

### Requirements

- PHP 8.1+
- Composer
- Node.js / npm
- MySQL

### Install dependencies

```bash
composer install
npm install
```

### Configure the application

```bash
cp .env.example .env
php artisan key:generate
```

Update the database and any optional social/email credentials in `.env`.

### Run migrations

```bash
php artisan migrate
```

### Start development servers

```bash
php artisan serve
npm run dev
```

## Production Build

```bash
npm run build
```

## Why This Project Matters

Bistro Bliss demonstrates a complete Laravel workflow beyond static pages: authenticated users, role-restricted administration, relational data, reservation lifecycle handling, menu CRUD with soft deletion, notifications, social authentication, contact management, and framework-level testing.

## License

The project uses the MIT license as defined by the Laravel project configuration.
