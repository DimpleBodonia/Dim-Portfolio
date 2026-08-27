# 💙 Dimple Portfolio

> A modern personal portfolio website built with **Laravel** and **Blade**, designed to showcase Dimple Kate B. Bodonia's profile, education, certifications, projects, skills, and contact information.

---

## ✨ Project Overview

**Dimple Portfolio** is a static, single-page personal portfolio website developed using the **Laravel PHP framework** and **Blade templating engine**.

The website presents:

* 👋 Personal introduction
* 🎓 Educational background
* 📜 Professional certification
* 💻 Featured projects
* 🛠️ Technical skills
* 📩 Contact information
* 🔗 Social media links

The portfolio was designed **from scratch** with a custom **black-and-blue gradient visual identity**.

> **Note:** The website does not use a database for portfolio content. All information is written directly inside the Blade views.

---

## 🎨 Design & UI

The portfolio uses a modern, dark, and slightly futuristic visual style.

### Main Design Features

* 🌑 Near-black background — `#06060e`
* 🔵 Blue gradient accents — `#00b4ff` and `#0066ff`
* ✨ Blue glow effects
* 🃏 Modern rounded cards
* 🎯 Interactive hover effects
* 📱 Fully responsive layout
* 🌐 Background grid pattern
* 💫 Decorative glow orbs
* 🔄 Animated hero ring
* ⚡ Smooth page transitions
* 🔘 Pulsing availability indicator

### Typography

* **Inter** — Primary body font
* **JetBrains Mono** — Accent and technical text

Both fonts are loaded through Google Fonts.

---

## 🧭 Navigation

The website includes a fixed navigation bar located at:

`resources/views/components/navbar.blade.php`

### Navigation Features

* **Dimple Portfolio** logo
* Home
* About
* Education
* Projects
* Contact
* Active section detection
* Mobile hamburger menu
* Accent color selector
* Dark/light mode toggle

The navigation automatically highlights the section currently visible while scrolling.

---

## 🎨 Theme Customization

The portfolio supports both **accent color customization** and **dark/light mode**.

User preferences are stored using browser `localStorage`.

### Accent Themes

| Theme      | Key       |
| ---------- | --------- |
| 🔵 Blue    | `blue`    |
| 🟣 Purple  | `purple`  |
| 🟢 Emerald | `emerald` |
| 🌹 Rose    | `rose`    |
| 🟠 Amber   | `amber`   |

The default accent theme is **Blue**.

### Display Modes

* 🌙 Dark mode — default
* ☀️ Light mode

Preferences are stored using:

```text
portfolio-theme
portfolio-mode
```

---

# 🏠 Portfolio Sections

## 👋 Home / Hero

The hero section introduces the portfolio owner.

### Includes

* Greeting — **"Hi, I'm"**
* Full name — **Dimple Kate B. Bodonia**
* Availability badge
* Short introduction
* Profile image
* Animated gradient ring
* Background grid
* Decorative glow effects
* **View My Projects** CTA
* **Contact Me** CTA

Profile image:

```text
public/images/profile.jpg
```

---

## 👩‍💻 About Me

The About section contains:

* Profile image
* Personal biography
* Learning journey
* Skills tag cloud
* Portfolio statistics

### Skills

* HTML5
* CSS3
* JavaScript
* PHP
* Laravel
* MySQL
* Git
* React
* Node.js
* Tailwind CSS
* Blade

### Statistics

| Statistic      | Value |
| -------------- | ----: |
| Projects       |     2 |
| Certifications |     1 |

---

## 🎓 Education & Certifications

The Education section uses a two-column layout.

### Education Timeline

**Data Center College of the Philippines**

> Bachelor of Science in Information Technology
> **2023 – Present**

**Abra High School**

> GAS Strand — General Academic Strand
> **2021 – 2023**

### Certification

**ONLINE SAFETY THROUGH NETIQUETTE**

* Issued by: **DICT**
* Year: **2026**
* Includes a **View Certificate** button
* Certificate is hosted through an external Google Drive file

---

# 💻 Projects

The Projects section currently contains two featured projects.

### 01 — Kusina ni Mama Reservation System

A desktop-based restaurant reservation application developed using:

* Microsoft Visual Studio
* Windows Forms
* MySQL

Project image:

```text
public/images/Kusina.png
```

---

### 02 — Vehicle Parking Monitoring System

A parking management application designed to manage:

* Vehicle entries
* Parking slots
* Customer records
* Transactions

Built using:

* Microsoft Visual Studio
* MySQL

Project image:

```text
public/images/parking.jpg
```

> **Note:** Project cards currently contain project information and images but do not include external project or GitHub repository links.

---

# 📩 Contact

The Contact section provides static contact information.

| Information | Details                    |
| ----------- | -------------------------- |
| 📧 Email    | `kbbersalona@gmail.com`    |
| 📱 Phone    | `+63 995 524 3015`         |
| 📍 Location | Zone 1, Bangued Abra       |
| 💻 GitHub   | `github.com/DimpleBodonia` |

### Call to Action

The section also includes:

> **Let's Build Something Great**

with a **Send Me an Email** button.

### Social Links

* GitHub
* Facebook
* Discord

---

# 🛠️ Technologies Used

| Technology       | Purpose                                |
| ---------------- | -------------------------------------- |
| **Laravel 13.x** | Application framework                  |
| **PHP 8.3+**     | Backend language                       |
| **Blade**        | Templating engine                      |
| **HTML5**        | Page structure                         |
| **CSS3**         | Custom styling                         |
| **JavaScript**   | Interactivity                          |
| **Vite**         | Frontend build tool                    |
| **Tailwind CSS** | Vite plugin dependency                 |
| **SQLite**       | Default Laravel database configuration |

### Additional Packages

The project also includes Laravel's standard development tools and packages such as:

* Laravel Tinker
* PHPUnit
* Laravel Pint
* Mockery
* Collision
* Laravel Pail
* Laravel Pao

These packages are not required for storing portfolio content.

---

# 📁 Project Structure

```text
Dimple-Portfolio/
│
├── routes/
│   └── web.php
│
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php
│   │   │
│   │   ├── components/
│   │   │   ├── navbar.blade.php
│   │   │   └── footer.blade.php
│   │   │
│   │   ├── home.blade.php
│   │   └── welcome.blade.php
│   │
│   ├── css/
│   │   └── app.css
│   │
│   └── js/
│       └── app.js
│
├── public/
│   ├── images/
│   │   ├── profile.jpg
│   │   ├── Kusina.png
│   │   └── parking.jpg
│   │
│   ├── css/
│   │   └── app.css
│   │
│   └── js/
│       └── app.js
│
├── vite.config.js
├── composer.json
└── package.json
```

---

# 🏗️ Architecture

The portfolio follows a **static Laravel architecture**.

### Routing

A single route in:

```text
routes/web.php
```

renders the main portfolio page.

### Views

The primary content is located in:

```text
resources/views/home.blade.php
```

Reusable components are separated into:

```text
resources/views/components/
```

### Data

Portfolio information is hardcoded directly into the Blade views.

The project does **not** use:

* ❌ Database queries
* ❌ Eloquent models
* ❌ Migrations for portfolio content
* ❌ Authentication
* ❌ Admin dashboard
* ❌ Backend content management

Laravel's default database configuration may still exist as part of the standard Laravel project structure, but it is **not used for portfolio content**.

---

# ⚙️ Installation

### 1. Install PHP dependencies

```bash
composer install
```

### 2. Create the environment file

```bash
cp .env.example .env
```

For Windows:

```cmd
copy .env.example .env
```

### 3. Generate the application key

```bash
php artisan key:generate
```

### 4. Install frontend dependencies

```bash
npm install
```

### 5. Build frontend assets

```bash
npm run build
```

### 6. Start Laravel

```bash
php artisan serve
```

Then open:

```text
http://localhost:8000
```

> No database configuration is required for the portfolio content.

---

# 🚀 Running the Project

Start the Laravel development server:

```bash
php artisan serve
```

Then visit:

```text
http://localhost:8000
```

The project can also be deployed using a standard Apache/XAMPP environment by pointing the web server to the Laravel:

```text
/public
```

directory.

---

# ✏️ Customization

Most portfolio information can be edited directly from:

```text
resources/views/home.blade.php
```

### Content Locations

| Content       | File / Section                |
| ------------- | ----------------------------- |
| Name & Hero   | `home.blade.php`              |
| About Me      | `home.blade.php`              |
| Skills        | `.skills-grid`                |
| Statistics    | `.stats-row`                  |
| Education     | `.edu-timeline`               |
| Certification | `.cert-card`                  |
| Projects      | `.project-card`               |
| Contact       | `.contact-grid`               |
| Footer        | `components/footer.blade.php` |
| Navigation    | `components/navbar.blade.php` |
| Images        | `public/images/`              |
| Styling       | `resources/css/app.css`       |
| JavaScript    | `resources/js/app.js`         |

After modifying CSS or JavaScript, rebuild the frontend assets:

```bash
npm run build
```

---

# 📱 Responsive Design

The portfolio is designed to work across:

* 📱 Mobile phones
* 📲 Tablets
* 💻 Laptops
* 🖥️ Desktop monitors

### Breakpoints

**992px and below**

* Columns collapse
* Hero layout adjusts
* About section becomes single-column
* Education layout stacks
* Project cards adapt
* Contact layout adjusts

**768px and below**

* Desktop navigation changes to hamburger menu
* Mobile navigation panel appears
* Layout spacing is reduced
* Content becomes optimized for smaller screens

The design also uses fluid sizing through CSS `clamp()`.

---

# ✨ Animations & Interactions

Interactive behavior is implemented using:

```text
resources/js/app.js
resources/css/app.css
```

### Features

* Smooth scrolling
* Dark/light mode
* Accent color switcher
* Mobile navigation
* Animated hamburger menu
* Active navigation highlighting
* Navbar scroll shadow
* IntersectionObserver reveal animations
* Card hover effects
* Button hover effects
* Skill tag animations
* Timeline animations
* Certificate hover effects
* Social icon transitions
* Blue glow effects
* Hero ring rotation
* Pulsing availability indicator

---

# 📊 Project Status

**Status: ✅ Complete**

The portfolio currently includes:

* ✅ Home
* ✅ About Me
* ✅ Education
* ✅ Certification
* ✅ Projects
* ✅ Contact
* ✅ Footer
* ✅ Responsive design
* ✅ Dark/light mode
* ✅ Accent color customization
* ✅ Scroll animations
* ✅ Interactive navigation
* ✅ Custom visual design

The portfolio is intentionally implemented as a **static Laravel website**, with content stored directly in Blade views rather than a database or admin panel.

---

## 👩‍💻 Author

**Dimple Kate B. Bodonia**

Bachelor of Science in Information Technology
Data Center College of the Philippines

---

⭐ **Thank you for visiting my portfolio!**
