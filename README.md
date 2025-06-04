# 🌍 Credivoy – Tourism Marketplace (Laravel)

**Credivoy** is a feature-rich tourism marketplace platform developed in Laravel. It allows tour companies, hotel managers, and transport providers to list their services, while users can explore, book, and earn rewards (Trip Coins). It also features membership tiers, travel partner matching, and a robust review system.

---

## 🛠️ Tech Stack

- **Framework:** Laravel 10.x
- **Language:** PHP 8.x
- **Frontend:** Blade, Bootstrap 5 / Tailwind CSS, Vue.js (if used)
- **Database:** MySQL
- **Authentication:** Laravel Breeze / Jetstream / Sanctum (as applicable)
- **Payment Integration:** Stripe, PayPal (or custom gateways)
- **APIs:** RESTful API for bookings (if implemented)

---

## 📦 Key Features

- 🧳 **Trips, Hotels & Transport Listings**
- ⭐ **User Reviews & Rankings**
- 💰 **Trip Coins Rewards System**
- 👥 **Membership Tiers (Silver, Gold, Platinum)**
- 🧭 **Travel Partner Matchmaking**
- 🛒 **Marketplace Booking System**
- 🔐 Secure User Authentication (Companies & Travelers)
- 📊 Admin Panel to Manage Listings, Reviews, Users
- 📨 Booking Confirmations via Email
- 📱 Fully Responsive UI

---

## ⚙️ Installation Guide

### 1. Clone the Repository

```bash
git clone https://github.com/yourusername/credivoy.git
cd credivoy
````

### 2. Install Dependencies

```bash
composer install
npm install && npm run dev
```

### 3. Configure Environment

```bash
cp .env.example .env
php artisan key:generate
```

Update `.env` with database, mail, and payment settings:

```env
APP_NAME=Credivoy
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=credivoy_db
DB_USERNAME=root
DB_PASSWORD=secret

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls

STRIPE_KEY=your_stripe_key
STRIPE_SECRET=your_stripe_secret
```

### 4. Run Migrations and Seeders

```bash
php artisan migrate --seed
```

### 5. Serve the Application

```bash
php artisan serve
```

Visit [http://localhost:8000](http://localhost:8000)

---

## 📂 Project Structure Overview

```
/app
    /Models
    /Http/Controllers
/resources
    /views
    /js
    /css
/routes
    web.php
    api.php
/database
    /migrations
/public
.env
artisan
```

---

## 🧪 Testing

Run Laravel test suite:

```bash
php artisan test
```

Or with PHPUnit directly:

```bash
vendor/bin/phpunit
```

---

## 🛫 Deployment Tips

* Run `npm run build` or `npm run prod`
* Set `APP_ENV=production`
* Use `php artisan config:cache` for performance
* Use HTTPS and secure headers (via Laravel middleware)

---

## 📈 Roadmap (Planned Features)

* Mobile App Integration (Flutter or React Native)
* AI-based Travel Partner Matching
* Coupon & Promo Code System
* Multi-language & Multi-currency Support
* Affiliate Program for Referrals

---

## 🤝 Contributors

Developed by the **Credivoy Team**
Project Lead: \[Your Name]
Co-Founders: \[Partner Names]

---

## 📬 Contact

For support, partnership, or demo requests:

📧 [support@credivoy.com](mailto:support@credivoy.com)
🌐 [www.credivoy.com](https://www.credivoy.com)

---

```

---

Let me know if you want to include screenshots, API docs, ER diagrams, or instructions for Docker or server deployment (e.g., cPanel, DigitalOcean, or Laravel Forge).
```
