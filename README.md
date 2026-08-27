# Dimple Portfolio — Personal Portfolio Website

A personal portfolio website built with **Laravel** and **Blade**, showcasing the profile, education, projects, skills, and contact details of **Dimple Kate B. Bodonia**.

## Project Overview

This is a static, single-page personal portfolio developed using the Laravel PHP framework and its Blade templating engine. The site presents a personal introduction, educational background, professional certifications, featured projects, and contact information in a single scrollable page.

The portfolio is designed from scratch with a custom black-and-blue gradient visual style. It does not rely on a database for its content — all portfolio information is stored directly inside the Blade view files.

## Portfolio Sections

The website is a one-page layout organized into the following sections, all rendered on `resources/views/home.blade.php`:

- **Home / Hero** — Greeting, name, short introduction, profile image, and call-to-action buttons.
- **About Me** — Personal introduction, biography paragraphs, a skills tag cloud, and a small stats row.
- **Education & Certifications** — A two-column layout with an education timeline on the left and a certification card on the right.
- **Projects** — Two project cards highlighting featured work with images, descriptions, and the technologies used.
- **Contact** — Contact details (email, phone, location, GitHub) plus a call-to-action and social media links.
- **Footer** — Portfolio branding, quick links, contact summary, social links, and a copyright line.

## Design and UI

The design is an original custom creation and not based on a template. The visual style is dark-themed with blue accents:

- **Black + blue gradient theme**, with a near-black background (`#06060e`) and blue accent colors (`#00b4ff`, `#0066ff`).
- **Blue gradient** elements used for titles, buttons, section headings, and decorative lines.
- **Blue glow effects** (`box-shadow`) applied to buttons, cards, badges, and timeline dots.
- **Modern cards** with rounded corners, subtle borders, and card hover states.
- **Responsive layout** that adapts across tablets and mobile devices.
- **Hover effects** on buttons, project cards, skill tags, stat cards, timeline cards, and social icons.
- **Smooth transitions** driven by a shared easing curve (`cubic-bezier`), plus a slow 20-second rotating hero ring animation.
- **Slightly futuristic visual style** reinforced by a background grid pattern, blurred glow orbs, a pulsing status dot, and a spinning decorative ring around the hero image.

Fonts: **Inter** for body text and **JetBrains Mono** for accents, loaded via Google Fonts.

## Navigation

The site includes a **fixed (sticky) navigation bar** that stays at the top and gains a shadow when scrolled (`resources/views/components/navbar.blade.php`):

- A **portfolio name/logo** (`Dimple Portfolio`, with a gradient-accented suffix).
- Links to **Home, About, Education, Projects, and Contact**.
- The active section's link is highlighted automatically as the user scrolls.
- A **mobile hamburger menu** that slides in a full-height panel with an overlay on small screens.
- An **accent color control** button that opens a dropdown of color swatches.
- A **dark / light mode toggle** button.

### Theme & Mode Customization

The selected accent color and light/dark mode are preserved across visits using the browser's **localStorage**. The JavaScript in `resources/js/app.js` saves:

- The chosen accent theme under the key `portfolio-theme` (options: `blue`, `purple`, `emerald`, `rose`, `amber`; `blue` is the default).
- The light/dark mode under the key `portfolio-mode` (`dark` by default).

## Home / Hero Section

The hero section (`id="home"`) includes:

- A **greeting** ("Hi, I'm") followed by the owner's full name in gradient text: **Dimple Kate B. Bodonia**.
- An **availability badge** ("Available for opportunities") with a pulsing dot.
- A **short introduction** describing the owner as an Information Technology student creating modern web applications.
- A circular **profile image** (`public/images/profile.jpg`) framed by a spinning gradient ring and a dotted background.
- A **primary CTA** button labeled **"View My Projects"** (links to the Projects section).
- A **secondary CTA** button labeled **"Contact Me"** (links to the Contact section).
- **Decorative visual elements** including two blurred glow orbs and a background grid pattern.

## About Section

The about section (`id="about"`) features:

- A **profile image** displayed in a bordered, rounded card.
- A heading ("Student & Aspiring Developer") and **biography paragraphs** about the owner's journey and learning philosophy in Information Technology.
- A **skills tag cloud** listing technologies: HTML5, CSS3, JavaScript, PHP, Laravel, MySQL, Git, React, Node.js, Tailwind CSS, and Blade.
- A **statistics row** with two stat cards: **2 Projects** and **1 Certification**.

## Education Section

The Education section (`id="education"`) was implemented as a **two-column layout** containing an education timeline and a certificate card:

- **Left column — Education timeline** with two entries (via `.edu-timeline`):
  - **Data Center College of the Philippines** — Bachelor of Science in Information Technology, **2023 – Present**.
  - **Abra High School** — GAS Strand (General Academic Strand), **2021 – 2023**.
- A decorative **divider** separates the two columns.
- **Right column — Certification card** for the certificate **"ONLINE SAFETY THROUGH NETIQUETTE"** issued by **DICT**, dated **2026**, with a description and a **"View Certificate"** button linking to an external Google Drive file.

## Projects Section

The projects section (`id="projects"`) displays two project cards, each with an image, title, description, and technology tags:

1. **Kusina ni Mama Reservation System** — A desktop-based restaurant reservation application built with **Microsoft Visual Studio** (WinForms) and **MySQL**. Image: `public/images/Kusina.png`.
2. **Vehicle Parking Monitoring System** — Parking operations software that manages vehicle entries, parking slots, customer records, and transactions, built with **Microsoft Visual Studio** and **MySQL**. Image: `public/images/parking.jpg`.

Note: The project cards include images, titles, descriptions, and technology tags, but do **not** include external project or GitHub repository links.

## Contact Section

The contact section (`id="contact"`) is a static contact area (no database-backed form) that provides:

- **Email** — `kbbersalona@gmail.com` (as a `mailto:` link).
- **Phone** — `+63 995 524 3015` (as a `tel:` link).
- **Location** — Zone 1, Bangued Abra.
- **GitHub** — a link to `github.com/DimpleBodonia`.
- A **call-to-action panel** titled "Let's Build Something Great" with a **"Send Me an Email"** button (a `mailto:` link).
- **Social media links** via icon buttons: **GitHub**, **Facebook**, and **Discord**.

## Technologies Used

Based on the actual project files:

- **Laravel** (v13.x, `laravel/framework ^13.17`) — the application framework.
- **PHP** (^8.3) — the server-side language.
- **Blade** — Laravel's templating engine for the views.
- **HTML** — view markup.
- **CSS** — custom stylesheet (`resources/css/app.css`).
- **JavaScript** — custom behavior (`resources/js/app.js`).
- **Vite** — the frontend build tool (`vite.config.js`).
- **Tailwind CSS** — listed as a Vite plugin dependency (`@tailwindcss/vite`).
- **SQLite** — configured as the default database connection in `.env`, though the portfolio itself does not store content in a database.

Other PHP packages installed (from `composer.json`): `laravel/tinker` (runtime) and standard development packages such as PHPUnit, Laravel Pint, Mockery, Collision, Laravel Pail, and Laravel Pao (dev dependencies only).

## Project Structure

The important directories and files used by this portfolio:

```text
routes/
└── web.php                      # Single route rendering the home view

resources/
├── views/
│   ├── layouts/
│   │   └── app.blade.php        # Base layout (head, theme attrs, asset links)
│   ├── components/
│   │   ├── navbar.blade.php     # Fixed navigation bar
│   │   └── footer.blade.php     # Page footer
│   ├── home.blade.php           # Main portfolio content (all sections)
│   └── welcome.blade.php        # Default Laravel welcome view (unused by the site)
├── css/
│   └── app.css                  # Custom portfolio stylesheet
└── js/
    └── app.js                   # Theme/mode, menu, and interaction logic

public/
├── images/
│   ├── profile.jpg              # Hero & About profile image
│   ├── Kusina.png               # Project 1 image
│   └── parking.jpg              # Project 2 image
├── css/app.css                  # Built stylesheet referenced by the layout
└── js/app.js                    # Built script referenced by the layout

vite.config.js                   # Vite build configuration
composer.json                    # PHP dependencies
package.json                     # Node/npm dependencies
```

## Data and Architecture

The portfolio is architected as a **static website**:

- A single route in `routes/web.php` returns the `home` view with a page title.
- All portfolio content (personal info, bio, education, certificate, projects, skills, contact, social links) is written **directly in the Blade view** (`resources/views/home.blade.php`) — no database lookups are involved.
- The site does **not** use Eloquent models or migrations for portfolio content, and there is **no authentication**.
- Laravel's default migrations and the configured SQLite connection exist as part of the framework skeleton but are not used to store portfolio data.
- Rendering is handled entirely by the **Blade templating engine**, with custom **CSS** for styling and custom **JavaScript** for interactivity.

## Installation

These steps only require dependencies for the static portfolio and require no database configuration.

```bash
# 1. Install PHP dependencies
composer install

# 2. Create the environment file (if missing) and generate an app key
cp .env.example .env   # Windows: copy .env.example .env
php artisan key:generate

# 3. Install Node dependencies and build frontend assets
npm install
npm run build

# 4. Serve the application locally
php artisan serve
```

No `DB_*` configuration is required because the portfolio does not store content in a database.

## Running the Project

Start Laravel's built-in development server:

```bash
php artisan serve
```

Then open your browser and visit **http://localhost:8000** (as configured by `APP_URL` in `.env`).

Alternatively, because this is a standard Laravel application, it can also be served through a web server such as **XAMPP/Apache** pointed at the `public/` directory.

## Customization

All portfolio content is edited directly in the Blade view files:

- **Name, introduction, hero text, CTA labels** — `resources/views/home.blade.php` (Hero section).
- **About Me / biography** — About section of `resources/views/home.blade.php`.
- **Skills** — `.skills-grid` in the About section of `resources/views/home.blade.php`.
- **Statistics** — `.stats-row` in the About section of `resources/views/home.blade.php`.
- **Education** — `.edu-timeline` in the Education section of `resources/views/home.blade.php`.
- **Certificates** — `.cert-card` in the Education section of `resources/views/home.blade.php`.
- **Projects** — `.project-card` blocks in the Projects section of `resources/views/home.blade.php`.
- **Contact details and social links** — `.contact-grid` in the Contact section of `resources/views/home.blade.php`.
- **Footer links, contact summary, and social links** — `resources/views/components/footer.blade.php`.
- **Navigation links and logo** — `resources/views/components/navbar.blade.php`.
- **Images** — replace files in `public/images/` (e.g., `profile.jpg`, `Kusina.png`, `parking.jpg`), keeping the same filenames or updating the `asset()` paths.
- **Theme / colors / styling** — CSS variables in `resources/css/app.css` (then rebuild with `npm run build`).

## Responsive Design

The stylesheet includes dedicated responsive breakpoints:

- **`max-width: 992px`** (tablets) — hero, about, education, projects, and contact layouts collapse to single columns.
- **`max-width: 768px`** (mobile phones) — the navigation switches to a **hamburger menu** with a slide-in panel and backdrop overlay.

The layout uses fluid sizing (`clamp()`), a mobile-friendly navigation, and stacks columns on smaller screens, so it supports mobile phones, tablets, laptops, and desktop monitors.

## Animations and Interactions

Implemented in `resources/js/app.js` and `resources/css/app.css`:

- **Smooth scrolling** via CSS `scroll-behavior: smooth`.
- **Dark / light mode toggle** and **accent color switcher** with a dropdown, persisted in `localStorage`.
- **Mobile menu** with a hamburger that animates into an "X", a slide-in panel, and an overlay.
- **Active navigation link** highlighting on scroll.
- **Navbar scroll effect** (adds a shadow after scrolling past 50px).
- **Section reveal animations** — content fades/slides in as it enters the viewport using an IntersectionObserver and a `.reveal` / `.visible` pattern.
- **Hover transitions** on buttons, cards, skill tags, stat cards, timeline cards, certificate card, project cards, and social icons.
- **Button and card hover effects** (lift + glow).
- **Blue glow effects** used across interactive and decorative elements.
- A slow **spinning decorative ring** around the hero image and a **pulsing status dot** in the hero badge.

## Project Status

The portfolio is a **complete, functional static implementation**. It contains all main sections (Home, About, Education & Certifications, Projects, Contact) with a custom black-and-blue theme, theme/mode customization, responsive layout, and scroll animations. Portfolio content is currently hardcoded in the Blade views rather than stored in a database, and content on this static site is not editable from a backend admin interface.
