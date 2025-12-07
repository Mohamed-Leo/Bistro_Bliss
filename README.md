# 🍽️ **Bistro Bliss — Restaurant Management System**

A full-stack Laravel application for managing restaurant reservations, menu items, customers, and administrative operations.

---

## 📌 **1. Project Overview**

**Bistro Bliss** is a modern restaurant management platform designed for two user groups:

### 🧑‍🍳 Customers

* Browse menu items
* Reserve tables
* Read blogs
* Contact the restaurant
* Manage bookings and notifications

### 🛠️ Administrators

* Manage menu items (CRUD + soft delete)
* Handle customer reservations
* Review contact inquiries
* View/manage registered users

Built with **Laravel 10**, **Blade templates**, **MySQL**, and optional integration with **Google/Facebook authentication**, the system offers a smooth booking process with real-time notifications.

---

## ⚙️ **2. Technical Architecture**

### **Tech Stack**

| Layer          | Technology                                     |
| -------------- | ---------------------------------------------- |
| Backend        | Laravel 10 (PHP 8.1+)                          |
| Frontend       | Blade Templates, Tailwind CSS, JavaScript      |
| Database       | MySQL                                          |
| Authentication | Laravel Jetstream, Fortify, Sanctum, Socialite |
| Notifications  | Mailgun, Database Notifications                |

### **Core Directories**

* `app/Http/Controllers` — Main business logic (Admin, Bookings, Menu, etc.)
* `app/Models` — Eloquent ORM models
* `resources/views` — Blade templates
* `routes/web.php` — Web routes configuration

---

## ⭐ **3. Key Features & Functionality**

---

### 🧑‍🍳 **A. Customer Features**

#### **Menu Browsing**

* Dynamic menu categorized as: *Breakfast*, *Main Dishes*, *Drinks*, *Desserts*
* Items fetched from the **menus** table

#### **Table Reservation System**

* Users choose **date**, **time**, and **party size**
* **Validation**:

  * Must be logged in
  * No duplicate matching bookings
  * Name/Email must match authenticated account
* **Booking Status Flow**: `Pending → Accepted/Rejected`
* Users receive notifications on status changes

#### **User Dashboard (My Bookings)**

* View all personal bookings
* Cancel **pending** bookings
* See system notifications

#### **Additional Features**

* Blog posts
* Contact form
* Google/Facebook login

---

### 🔐 **B. Admin Features (Admin Panel)**

Protected by custom middleware: `AdminPanelMiddleware`.

#### **Menu Management**

* Add, update, delete items
* Image upload
* Soft delete → Trash → Restore / Force Delete
* Bulk delete

#### **Booking Management**

* View all bookings
* Approve or reject reservations
* System automatically notifies the user

#### **User & Inquiry Management**

* View all users
* View messages submitted via contact form

---

## 🔄 **4. Operational Workflows**

### **1️⃣ Booking Lifecycle**

1. User submits a reservation
2. System validates & saves with status `Pending`
3. User receives a notification
4. Admin views bookings in dashboard
5. Admin Accepts or Rejects
6. User receives final status notification

### **2️⃣ Menu Management Workflow**

1. Admin opens “Add Menu Item”
2. Uploads image + fills form
3. Item appears immediately on public menu
4. Admin may soft delete it if unavailable
5. Item can later be restored from Trash

---

## 🗄️ **5. Database Schema (Inferred)**

### **users**

Standard Laravel Jetstream fields

### **menus**

| Field               | Description       |
| ------------------- | ----------------- |
| title               | Name of menu item |
| price               | Item price        |
| description         | Item details      |
| menu_type           | Category          |
| img_file / img_link | Photo             |
| deleted_at          | Soft delete       |

### **bookings**

| Field                | Description                   |
| -------------------- | ----------------------------- |
| user_id              | Foreign Key to users          |
| name / email / phone | Customer info                 |
| date, time           | Reservation slot              |
| total_person         | Party size                    |
| status               | pending / accepted / rejected |

### **contact_forms**

Stores user-submitted inquiries

### **notifications**

Polymorphic Laravel notifications table

---

## ▶️ **6. How to Run the Project**

### **1. Install dependencies**

```bash
composer install
npm install
```

### **2. Configure environment**

Copy `.env.example` and update database credentials:

```bash
cp .env.example .env
php artisan key:generate
```

### **3. Run migrations**

```bash
php artisan migrate
```

(Optional) Seed default admin/menu data:

```bash
php artisan db:seed
```

### **4. Start the development servers**

Backend:

```bash
php artisan serve
```

Frontend:

```bash
npm run dev
```

---

## 📁 **7. Project Directory Structure**

Below is the full directory structure included in this repository:

<details>
<summary><strong>Click to expand (full folder structure)</strong></summary>

```
[Full structure included exactly as you provided]
```

</details>

---

## 📬 **8. Notifications System**

The project uses Laravel's native notification channels:

* Email notifications (Mailgun)
* Database notifications (stored in `notifications` table)
* Real-time feedback for booking actions

---

## 🧪 **9. Testing**

The project includes:

* Authentication tests
* API token management tests
* Booking & profile tests
* Email verification tests

Run all tests:

```bash
php artisan test
```

---

## 🧾 **10. License**

This project is open-source and available under the **MIT License**.

---

## 🙌 **11. Author**

Developed by **Mohamed Othman**
For inquiries or contributions, feel free to connect!
