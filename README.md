# York Business School - PHP Website

A premium, tech-enabled PHP web platform for York Business School (UK).

## Requirements

- **PHP 8.0+** (built-in web server is sufficient for development)
- A modern web browser

## Quick Start

1. Open a terminal in the project root directory.

2. Start the PHP development server:
   ```bash
   php -S localhost:8000 -t public
   ```

3. Open your browser and visit: [http://localhost:8000](http://localhost:8000)

## Project Structure

```
├── public/              # Web root (all requests go through index.php)
│   ├── index.php        # Front controller
│   ├── css/style.css    # Custom CSS (glassmorphism, animations)
│   └── js/app.js        # Theme toggle, filtering, animations
├── app/
│   ├── controllers/     # Page controllers (Home, Program, Campus, Contact)
│   ├── models/          # Data models (Program.php - static data)
│   └── views/           # PHP templates
│       └── layouts/     # Base layout (nav, footer, SEO)
├── config/
│   └── routes.php       # URL → Controller mapping
└── data/                # Auto-created; stores contact form leads as JSON
```

## Features

- **Responsive Design** – Mobile-first with Tailwind CSS
- **Dark/Light Mode** – System-aware with localStorage persistence
- **Glassmorphism UI** – Premium frosted-glass card aesthetic
- **Programme Filtering** – Client-side category filtering with animations
- **Contact Form** – Server-side validation, saves leads to `data/leads.json`
- **SEO** – Schema.org JSON-LD, Open Graph, descriptive meta tags
- **Micro-animations** – Scroll-triggered fade-ins, floating elements

## Pages

| Page | URL |
|------|-----|
| Home | `/` |
| Programmes | `/?page=programs` |
| Campus | `/?page=campus` |
| Contact | `/?page=contact` |

## Production Deployment

For production, use a proper web server (Apache or Nginx) with the `public/` directory as the document root. Ensure `mod_rewrite` or equivalent is configured to route all requests through `index.php`.
