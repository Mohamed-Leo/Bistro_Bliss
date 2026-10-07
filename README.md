# Bistro Bliss

**Full-stack restaurant booking and management platform built with Laravel 10, Blade, MySQL, Eloquent ORM, Jetstream, Sanctum, Socialite, Livewire, Tailwind CSS, and Vite.**

Bistro Bliss combines a customer-facing restaurant website with authenticated customer functionality and a protected administration panel for menu management, reservations, users, notifications, and contact inquiries.

---
---

## Table of Contents

- [Project Overview](#project-overview)
- [User Roles and Experiences](#user-roles-and-experiences)
- [Customer Experience](#customer-experience)
- [Administration Experience](#administration-experience)
- [Reservation Lifecycle](#reservation-lifecycle)
- [Menu Management](#menu-management)
- [Authentication and Accounts](#authentication-and-accounts)
- [Social Authentication](#social-authentication)
- [Notifications](#notifications)
- [Contact Management](#contact-management)
- [Technology Stack](#technology-stack)
- [Laravel Architecture](#laravel-architecture)
- [Routes and Access Boundaries](#routes-and-access-boundaries)
- [Database and Eloquent](#database-and-eloquent)
- [Soft Delete Lifecycle](#soft-delete-lifecycle)
- [Testing](#testing)
- [Local Development](#local-development)
- [Environment Configuration](#environment-configuration)
- [Frontend Build](#frontend-build)
- [Production Preparation](#production-preparation)
- [Engineering Conventions](#engineering-conventions)
- [Project Status](#project-status)
- [License](#license)

---

## Project Overview

Bistro Bliss is a complete Laravel application rather than a static restaurant template.

The project demonstrates a connected set of real application concerns:

- Public restaurant pages
- Menu/category browsing
- Customer registration and authentication
- Table reservations
- Personal booking management
- Reservation approval/rejection
- Notifications
- Contact inquiries
- Social authentication
- Admin-only management routes
- Menu CRUD with soft deletion and restoration
- User administration
- Framework-level authentication tests

The application uses Laravel's server-rendered architecture, Blade templates, Eloquent models, and framework authentication ecosystem to keep backend and frontend behavior integrated in one codebase.

---

## User Roles and Experiences

The application can be understood through three access levels.

### Public visitor

Can access public content such as:

- Homepage
- About
- Menu
- Menu categories
- Blogs
- Contact
- Authentication entry points

### Authenticated customer

Can access account-related functionality such as:

- Reservations
- Personal bookings
- Booking cancellation where allowed
- Notifications
- Profile/security features provided by Jetstream

### Administrator

Can access protected administration functionality such as:

- Menu management
- Deleted menu records
- User administration
- Reservation review
- Accept/reject actions
- Contact-message review

Administration routes are protected through a custom `AdminPanelMiddleware`.

---

## Customer Experience

### Public pages

The restaurant experience includes public routes for:

- Home
- About
- Menu
- Blogs
- Contact

### Menu discovery

Public menu browsing includes category-oriented presentation such as:

- Breakfast
- Main dishes
- Drinks
- Desserts

### Booking

Customers can create restaurant reservations through the booking workflow.

### Personal bookings

Authenticated users can access their own bookings and cancel eligible reservations through dedicated routes.

---

## Administration Experience

The administration panel centralizes operational restaurant workflows.

### Menu administration

Administrators can:

- Create menu items
- Update menu items
- View/manage menu records
- Soft-delete items
- View deleted items
- Restore deleted items
- Permanently delete archived items
- Perform bulk deletion where implemented

### User administration

Administrators can review/manage registered user records through protected routes.

### Booking administration

Administrators can:

- Review customer reservations
- Accept bookings
- Reject bookings

### Contact administration

Customer inquiries submitted through the public site can be reviewed from the protected admin area.

---

## Reservation Lifecycle

A simplified reservation lifecycle is:

```text
Customer submits booking
        ↓
Reservation is persisted
        ↓
Admin reviews reservation
        ↓
Admin accepts or rejects
        ↓
Booking status changes
        ↓
Customer receives/reads related notification state
```

### Customer-side responsibilities

- Enter reservation information
- Submit booking
- Review own bookings
- Cancel when allowed

### Admin-side responsibilities

- Review pending reservations
- Change reservation status
- Communicate resulting state through the application's notification behavior

---

## Menu Management

The menu domain demonstrates more than simple create/update behavior.

### Standard CRUD

```text
Create item
   ↓
Display in menu/admin view
   ↓
Update when required
```

### Archive lifecycle

```text
Active item
   ↓
Soft delete
   ↓
Archived/deleted view
   ├─ restore
   └─ force delete
```

Soft deletion allows content to be removed from active use without immediately destroying the database record.

This is useful for restaurant products that may need to be temporarily removed or restored later.

---

## Authentication and Accounts

The project uses Laravel's authentication ecosystem:

- **Laravel Jetstream**
- **Laravel Fortify** through Jetstream
- **Laravel Sanctum**
- **Livewire**

The application includes framework-level account capabilities and test coverage for areas such as:

- Login/authentication
- Registration
- Email verification
- Password reset
- Password confirmation
- Password update
- Profile update
- Browser sessions
- API tokens
- Two-factor authentication configuration
- Account deletion

These features provide a stronger account foundation than manually implementing every authentication flow from scratch.

---

## Social Authentication

The application uses **Laravel Socialite** for third-party authentication.

Implemented social providers include:

- Google
- Facebook

Typical flow:

```text
User selects provider
   ↓
Redirect to provider
   ↓
Provider authenticates user
   ↓
Application callback
   ↓
Resolve/create local account
   ↓
Authenticated session
```

Provider credentials belong in environment configuration and must never be committed to source control.

---

## Notifications

The application includes routes for notification behavior such as:

- Listing/viewing notifications
- Marking notifications as read
- Deleting notifications

Notifications support user awareness of application events such as reservation status changes.

---

## Contact Management

Public visitors can submit contact inquiries.

The application separates:

- Public contact submission
- Protected administration review

This allows the restaurant team to review incoming messages without exposing administration interfaces publicly.

The backend stack also includes Symfony Mailgun mailer support for email-related delivery workflows.

---

## Technology Stack

### Backend

- **PHP 8.1+**
- **Laravel 10.10+**
- **Eloquent ORM**
- **MySQL**

### Authentication

- **Laravel Jetstream 4.1**
- **Laravel Sanctum 3.3**
- **Laravel Socialite 5.10**
- **Livewire 3**

### Server-rendered Frontend

- **Blade**
- **Tailwind CSS 3.1**
- **Vite 4**
- **Axios**

### Mail and HTTP

- **Guzzle**
- **Symfony HTTP Client**
- **Symfony Mailgun Mailer**

### Development and Testing

- **PHPUnit 10**
- **Laravel Pint**
- **Laravel Sail**
- **Mockery**
- **Collision**
- **Faker**

Exact PHP dependencies are defined in `composer.json`. Frontend tooling versions are defined in `package.json`.

---

## Laravel Architecture

The project follows the conventional Laravel application structure.

```text
app/
├── Http/
│   ├── Controllers/        # Customer/admin request handling
│   └── Middleware/         # Access control such as AdminPanelMiddleware
├── Models/                 # Eloquent models
├── Mail/                   # Mail-related classes
└── ...

resources/
└── views/                  # Blade templates

routes/
└── web.php                 # Public/authenticated/admin routes

database/
├── migrations/
├── factories/
└── seeders/

tests/
├── Feature/
└── Unit/
```

### Responsibility boundaries

#### Controllers
Coordinate HTTP requests and application behavior.

#### Models
Represent persistent restaurant/account entities through Eloquent.

#### Middleware
Protect admin-only routes and other request boundaries.

#### Blade views
Render server-side UI for public/customer/admin experiences.

#### Migrations
Track database schema evolution.

---

## Routes and Access Boundaries

The route layer includes flows for:

- Homepage
- About
- Menu and menu categories
- Blogs
- Booking creation
- Personal bookings
- Booking cancellation
- Notifications
- Contact
- Admin dashboard
- Menu CRUD
- Soft-delete / restore / force-delete
- User administration
- Booking accept/reject
- Contact inquiry administration
- Google authentication
- Facebook authentication

### Admin protection

Administration routes are grouped behind `AdminPanelMiddleware`.

This separation matters because route visibility alone is not sufficient; sensitive administration actions should always be protected on the server.

---

## Database and Eloquent

The application uses MySQL through Laravel's Eloquent ORM.

### Persistence concerns include

- Users
- Menu items
- Reservations/bookings
- Contact inquiries
- Notifications
- Authentication/account-related tables

### Database workflow

```text
Migration
   ↓
Database schema
   ↓
Eloquent model
   ↓
Controller/domain action
   ↓
Blade/admin/customer experience
```

Migrations should be committed alongside schema changes so environments remain reproducible.

---

## Soft Delete Lifecycle

Menu soft deletion is a notable project workflow.

### Why use soft deletes

- Prevent accidental permanent removal
- Allow administrative recovery
- Preserve historical records
- Support separate archived/deleted views

### Lifecycle

```text
Active menu item
   ↓
Soft delete
   ↓
Hidden from active collection
   ↓
Admin archived view
   ├─ restore → active again
   └─ force delete → permanently removed
```

Force deletion should be treated as destructive and intentionally restricted to admin workflows.

---

## Testing

Laravel feature tests cover important account/authentication behavior.

### Run application tests

```bash
php artisan test
```

### PHPUnit directly

```bash
./vendor/bin/phpunit
```

### Useful test areas in the project foundation

- Authentication
- Registration
- Email verification
- Password reset
- Password confirmation
- Profile update
- Password update
- API tokens
- Browser sessions
- Two-factor authentication
- Account deletion

For future extension, high-value restaurant-specific tests would include reservation authorization/status transitions and admin-only menu operations.

---

## Local Development

### Requirements

- PHP 8.1+
- Composer
- Node.js / npm
- MySQL

### Clone

```bash
git clone https://github.com/Mohamed-Leo/Bistro_Bliss.git
cd Bistro_Bliss
```

### Install PHP dependencies

```bash
composer install
```

### Install frontend dependencies

```bash
npm install
```

### Create environment file

```bash
cp .env.example .env
```

### Generate application key

```bash
php artisan key:generate
```

### Configure database

Update the MySQL connection values inside `.env`.

### Run migrations

```bash
php artisan migrate
```

### Start Laravel

```bash
php artisan serve
```

### Start frontend development build

```bash
npm run dev
```

---

## Environment Configuration

Common configuration categories include:

```env
APP_URL=
DB_CONNECTION=mysql
DB_HOST=
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

GOOGLE_CLIENT_ID=
GOOGLE_CLIENT_SECRET=

FACEBOOK_CLIENT_ID=
FACEBOOK_CLIENT_SECRET=
```

Mail/provider configuration may also be required depending on enabled workflows.

Exact variables should be verified against `.env.example` and current application configuration.

### Environment rules

- Never commit real database credentials.
- Never commit social-provider secrets.
- Keep local/production credentials separate.
- Use production-safe mail/session settings before deployment.

---

## Frontend Build

### Development

```bash
npm run dev
```

### Production assets

```bash
npm run build
```

The frontend pipeline uses Vite through Laravel's Vite integration.

---

## Production Preparation

Before deployment verify:

- Environment values are production-safe.
- `APP_KEY` exists and is protected.
- Database migrations are reviewed/applied.
- Social-auth callback URLs match production.
- Mail configuration is correct.
- Admin middleware protects admin routes.
- Storage/cache/session configuration is appropriate.
- Frontend assets are built.
- Tests pass.

Typical optimization commands may include standard Laravel cache/config commands as appropriate to the target deployment environment.

---

## Engineering Conventions

1. Keep admin routes behind server-side middleware.
2. Keep database changes migration-driven.
3. Use Eloquent relationships/models instead of ad-hoc SQL where the existing architecture supports it.
4. Preserve soft-delete behavior for menu items unless the domain requirement changes.
5. Keep social/provider secrets in environment configuration.
6. Keep controllers focused and move reusable business behavior into appropriate Laravel abstractions when complexity grows.
7. Add tests for permission-sensitive workflows.
8. Keep Blade views reusable instead of duplicating layout markup.
9. Run PHP and frontend build/test checks before handoff.
10. Treat permanent deletes as destructive operations.

---

## Project Status

Bistro Bliss represents a completed full-stack Laravel project demonstrating customer-facing restaurant UX, authenticated account workflows, reservation management, protected administration, menu lifecycle management, notifications, contact handling, social authentication, relational persistence, and framework-level testing.

---

## License

The project uses the **MIT License** as defined by its Laravel project configuration.
