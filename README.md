# Tranquilstead — Premium Real Estate Platform

<p align="center">
  <img src="https://images.unsplash.com/photo-1600585154340-be6199f7a099?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" width="100%" alt="Tranquilstead Hero Banner">
</p>

Tranquilstead is a high-end, editorial-style real estate platform designed to offer a "serene" property search experience. Built with a focus on premium aesthetics and fluid interactions, Tranquilstead transforms the real estate journey into an architectural narrative.

## ✨ Premium Features

- **"Pro Max" Design System**: A sophisticated visual hierarchy using the **Cinzel** serif for elegance and **Josefin Sans** for modern readability.
- **Layered Brand Hero**: A statement hero section featuring massive brand typography layered with high-fidelity property imagery.
- **Smooth Interaction Engine**: Integrated with **Lenis Smooth Scroll** and custom minimalist 'pill' scrollbars for a fluid, high-end agency feel.
- **Modular 11-Section Homepage**: A comprehensive, responsive layout including Featured Estates, Popular Locations, Interactive Maps, and Testimonials.
- **Dynamic Content Architecture**: Fully powered by Laravel, featuring property categories, location-based filtering, and a powerful admin management system.

## 🛠 Tech Stack

- **Framework**: [Laravel 11](https://laravel.com)
- **Styling**: [Tailwind CSS](https://tailwindcss.com) (Utility-first)
- **Icons**: [Lucide Icons](https://lucide.dev)
- **Smooth Scroll**: [Lenis](https://lenis.studiofreight.com/)
- **Typography**: Cinzel & Josefin Sans (Google Fonts)

## 🚀 Getting Started

### Prerequisites

- PHP 8.2+
- Composer
- Node.js & NPM
- MySQL/SQLite

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/ParthGorde/tranquilstead.git
   cd tranquilstead
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment Setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database Configuration**
   Configure your database in `.env`, then run migrations and seeders:
   ```bash
   php artisan migrate --seed
   ```

5. **Build Assets**
   ```bash
   npm run dev
   ```

6. **Start the Server**
   ```bash
   php artisan serve
   ```

## 📸 visual Overview

The project follows a specific "Sanctuary" aesthetic:
- **Teal Palette**: Primary colors focus on #0F766E (Teal-800) and #14B8A6 (Teal-500).
- **Glassmorphism**: Heavy use of glass-blur effects for search bars and UI overlays.
- **Fluid Scaling**: Typography and spacing use modern `clamp()` functions for seamless responsiveness.

---

Built with ❤️ for elevated real estate experiences.
