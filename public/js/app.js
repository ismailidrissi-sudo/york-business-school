/**
 * York Business School - App JavaScript
 * Dark/light mode, filtering, animations, mobile nav, form validation
 */
(function () {
    'use strict';

    // ========== DARK/LIGHT MODE ==========
    const html = document.documentElement;
    const toggle = document.getElementById('theme-toggle');

    function setTheme(theme) {
        html.setAttribute('data-theme', theme);
        localStorage.setItem('ybs-theme', theme);
    }

    // Init: respect saved pref or system
    const saved = localStorage.getItem('ybs-theme');
    if (saved) {
        setTheme(saved);
    } else if (window.matchMedia('(prefers-color-scheme: light)').matches) {
        setTheme('light');
    }

    if (toggle) {
        toggle.addEventListener('click', function () {
            const current = html.getAttribute('data-theme') || 'dark';
            setTheme(current === 'dark' ? 'light' : 'dark');
        });
    }

    // ========== MOBILE NAV ==========
    const menuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');
        });
        // Close on link click
        mobileMenu.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                mobileMenu.classList.add('hidden');
            });
        });
    }

    // ========== SCROLL FADE-IN ==========
    var fadeEls = document.querySelectorAll('.fade-in');

    if ('IntersectionObserver' in window) {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

        fadeEls.forEach(function (el) { observer.observe(el); });
    } else {
        fadeEls.forEach(function (el) { el.classList.add('visible'); });
    }

    // ========== PROGRAM FILTERING ==========
    var filterBtns = document.querySelectorAll('.filter-btn');
    var programCards = document.querySelectorAll('.program-card');

    filterBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var cat = this.getAttribute('data-category');

            // Update active tab styling
            filterBtns.forEach(function (b) {
                b.className = b.className
                    .replace(/bg-gradient-to-r from-cyber-500 to-blue-600 text-white shadow-lg shadow-cyber-500\/25/g, '')
                    .replace(/bg-slate-100 dark:bg-white\/5 text-slate-600 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-white\/10/g, '');
                b.classList.add('bg-slate-100', 'dark:bg-white/5', 'text-slate-600', 'dark:text-slate-300', 'hover:bg-slate-200', 'dark:hover:bg-white/10');
            });
            this.classList.remove('bg-slate-100', 'dark:bg-white/5', 'text-slate-600', 'dark:text-slate-300', 'hover:bg-slate-200', 'dark:hover:bg-white/10');
            this.classList.add('bg-gradient-to-r', 'from-cyber-500', 'to-blue-600', 'text-white', 'shadow-lg', 'shadow-cyber-500/25');

            // Filter cards
            programCards.forEach(function (card) {
                var cardCat = card.getAttribute('data-category');
                if (cat === 'All' || cardCat === cat) {
                    card.style.display = '';
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(16px)';
                    setTimeout(function () {
                        card.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(16px)';
                    setTimeout(function () { card.style.display = 'none'; }, 300);
                }
            });
        });
    });

    // ========== NAVBAR SCROLL EFFECT ==========
    var nav = document.getElementById('main-nav');
    if (nav) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 20) {
                nav.classList.add('shadow-lg');
            } else {
                nav.classList.remove('shadow-lg');
            }
        });
    }

    // ========== CONTACT FORM VALIDATION ==========
    var form = document.getElementById('contact-form');
    if (form) {
        form.addEventListener('submit', function (e) {
            var name = document.getElementById('name');
            var email = document.getElementById('email');
            var message = document.getElementById('message');
            var errors = [];

            [name, email, message].forEach(function (el) {
                el.classList.remove('ring-2', 'ring-red-500');
            });

            if (!name.value.trim()) {
                errors.push('Name is required.');
                name.classList.add('ring-2', 'ring-red-500');
            }
            if (!email.value.trim() || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
                errors.push('A valid email is required.');
                email.classList.add('ring-2', 'ring-red-500');
            }
            if (!message.value.trim()) {
                errors.push('Message is required.');
                message.classList.add('ring-2', 'ring-red-500');
            }

            if (errors.length > 0) {
                e.preventDefault();
            }
        });
    }
})();
