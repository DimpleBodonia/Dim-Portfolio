document.addEventListener('DOMContentLoaded', () => {
    const body = document.body;
    const navbar = document.getElementById('navbar');
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('navLinks');
    const themeBtn = document.getElementById('themeBtn');
    const modeBtn = document.getElementById('modeBtn');

    // ========== DARK / LIGHT MODE ==========
    const savedMode = localStorage.getItem('portfolio-mode') || 'dark';
    body.setAttribute('data-mode', savedMode);

    modeBtn.addEventListener('click', () => {
        const current = body.getAttribute('data-mode');
        const next = current === 'dark' ? 'light' : 'dark';
        body.setAttribute('data-mode', next);
        localStorage.setItem('portfolio-mode', next);
    });

    // ========== THEME COLOR CORRECTOR ==========
    const themes = ['blue', 'purple', 'emerald', 'rose', 'amber'];
    const savedTheme = localStorage.getItem('portfolio-theme') || 'blue';
    body.setAttribute('data-theme', savedTheme);

    const dropdown = document.createElement('div');
    dropdown.className = 'theme-dropdown';
    themes.forEach(t => {
        const swatch = document.createElement('button');
        swatch.className = 'theme-swatch' + (t === savedTheme ? ' active' : '');
        const colors = {
            blue: 'linear-gradient(135deg, #0066ff, #00b4ff)',
            purple: 'linear-gradient(135deg, #7c3aed, #a855f7)',
            emerald: 'linear-gradient(135deg, #059669, #10b981)',
            rose: 'linear-gradient(135deg, #e11d48, #f43f5e)',
            amber: 'linear-gradient(135deg, #d97706, #f59e0b)'
        };
        swatch.style.background = colors[t];
        swatch.setAttribute('aria-label', t + ' theme');
        swatch.addEventListener('click', () => {
            body.setAttribute('data-theme', t);
            localStorage.setItem('portfolio-theme', t);
            dropdown.querySelectorAll('.theme-swatch').forEach(s => s.classList.remove('active'));
            swatch.classList.add('active');
        });
        dropdown.appendChild(swatch);
    });
    document.querySelector('.nav-actions').appendChild(dropdown);

    themeBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        dropdown.classList.toggle('show');
    });

    document.addEventListener('click', (e) => {
        if (!dropdown.contains(e.target) && e.target !== themeBtn) {
            dropdown.classList.remove('show');
        }
    });

    // ========== MOBILE MENU ==========
    let overlay = document.createElement('div');
    overlay.className = 'nav-overlay';
    document.body.appendChild(overlay);

    function toggleMenu() {
        hamburger.classList.toggle('active');
        navLinks.classList.toggle('open');
        overlay.classList.toggle('show');
        body.style.overflow = navLinks.classList.contains('open') ? 'hidden' : '';
    }

    hamburger.addEventListener('click', toggleMenu);
    overlay.addEventListener('click', toggleMenu);

    navLinks.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            if (navLinks.classList.contains('open')) toggleMenu();
        });
    });

    // ========== ACTIVE NAV LINK ON SCROLL ==========
    const sections = document.querySelectorAll('.section[id]');
    const navLinkEls = document.querySelectorAll('.nav-link[data-section]');

    function updateActiveNav() {
        const scrollY = window.scrollY + 100;
        sections.forEach(section => {
            const top = section.offsetTop;
            const height = section.offsetHeight;
            const id = section.getAttribute('id');
            if (scrollY >= top && scrollY < top + height) {
                navLinkEls.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('data-section') === id) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }

    window.addEventListener('scroll', updateActiveNav);
    updateActiveNav();

    // ========== NAVBAR SCROLL EFFECT ==========
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 50);
    });

    // ========== REVEAL ON SCROLL ==========
    const reveals = document.querySelectorAll('.reveal');

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

    reveals.forEach(el => revealObserver.observe(el));
});
