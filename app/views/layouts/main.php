<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= htmlspecialchars($pageTitle) ?>
    </title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">

    <!-- Open Graph -->
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_GB">

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "EducationalOrganization",
        "name": "York Business School",
        "url": "https://www.yorkbusinessschool.ac.uk",
        "description": "A cutting-edge, tech-enabled business school in York, United Kingdom.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Innovation Drive, Heslington",
            "addressLocality": "York",
            "addressRegion": "North Yorkshire",
            "postalCode": "YO10 5DD",
            "addressCountry": "GB"
        },
        "telephone": "+44 1904 328 500",
        "email": "admissions@yorkbusinessschool.ac.uk"
    }
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: ['class', '[data-theme="dark"]'],
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        navy: {
                            950: '#040d1a',
                            900: '#0a1628',
                            800: '#0f2035',
                            700: '#162d4a',
                            600: '#1e3a5f',
                        },
                        cyber: {
                            400: '#33ddff',
                            500: '#00d4ff',
                            600: '#00b8e6',
                        },
                        slate: {
                            750: '#1e293b',
                        }
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/style.css">
</head>

<body
    class="font-sans antialiased transition-colors duration-300 bg-white dark:bg-navy-950 text-slate-800 dark:text-slate-200">

    <!-- Navigation -->
    <nav id="main-nav" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
        <div class="glass-nav border-b border-white/10 dark:border-white/5">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-20">
                    <!-- Logo -->
                    <a href="/" class="flex items-center group" id="nav-logo">
                        <img src="/images/logo.png" alt="York Business School" class="h-12 w-auto">
                    </a>

                    <!-- Desktop Navigation -->
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="/" class="nav-link <?= $pageName === 'home' ? 'nav-link-active' : '' ?>"
                            id="nav-home">Home</a>
                        <a href="/?page=programs"
                            class="nav-link <?= $pageName === 'programs' ? 'nav-link-active' : '' ?>"
                            id="nav-programs">Programmes</a>
                        <a href="/?page=campus" class="nav-link <?= $pageName === 'campus' ? 'nav-link-active' : '' ?>"
                            id="nav-campus">Campus</a>
                        <a href="/?page=contact"
                            class="nav-link <?= $pageName === 'contact' ? 'nav-link-active' : '' ?>"
                            id="nav-contact">Contact</a>
                    </div>

                    <!-- Right Section -->
                    <div class="flex items-center space-x-3">
                        <!-- Theme Toggle -->
                        <button id="theme-toggle"
                            class="w-10 h-10 rounded-xl flex items-center justify-center hover:bg-slate-200/50 dark:hover:bg-white/10 transition-all"
                            aria-label="Toggle dark mode">
                            <svg id="theme-icon-sun" class="w-5 h-5 hidden dark:block text-yellow-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="5" />
                                <path stroke-linecap="round"
                                    d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42" />
                            </svg>
                            <svg id="theme-icon-moon" class="w-5 h-5 block dark:hidden text-navy-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
                            </svg>
                        </button>

                        <!-- Apply CTA -->
                        <a href="/?page=contact"
                            class="hidden sm:inline-flex items-center px-5 py-2.5 rounded-xl bg-gradient-to-r from-cyber-500 to-blue-600 text-white text-sm font-semibold hover:shadow-lg hover:shadow-cyber-500/25 transition-all hover:-translate-y-0.5"
                            id="nav-apply-btn">
                            Apply Now
                        </a>

                        <!-- Mobile Menu Button -->
                        <button id="mobile-menu-btn"
                            class="md:hidden w-10 h-10 rounded-xl flex items-center justify-center hover:bg-slate-200/50 dark:hover:bg-white/10 transition-all"
                            aria-label="Open menu">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden glass-nav border-b border-white/10">
            <div class="max-w-7xl mx-auto px-4 py-4 space-y-2">
                <a href="/" class="mobile-nav-link <?= $pageName === 'home' ? 'mobile-nav-active' : '' ?>">Home</a>
                <a href="/?page=programs"
                    class="mobile-nav-link <?= $pageName === 'programs' ? 'mobile-nav-active' : '' ?>">Programmes</a>
                <a href="/?page=campus"
                    class="mobile-nav-link <?= $pageName === 'campus' ? 'mobile-nav-active' : '' ?>">Campus</a>
                <a href="/?page=contact"
                    class="mobile-nav-link <?= $pageName === 'contact' ? 'mobile-nav-active' : '' ?>">Contact</a>
                <a href="/?page=contact"
                    class="block w-full text-center px-5 py-3 rounded-xl bg-gradient-to-r from-cyber-500 to-blue-600 text-white text-sm font-semibold mt-3">Apply
                    Now</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <?php include BASE_PATH . '/app/views/' . $pageName . '.php'; ?>
    </main>

    <!-- Footer -->
    <footer class="relative bg-slate-50 dark:bg-navy-900 border-t border-slate-200 dark:border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <!-- Brand -->
                <div class="lg:col-span-1">
                    <div class="mb-4">
                        <img src="/images/logo.png" alt="York Business School" class="h-10 w-auto">
                    </div>
                    <p class="text-sm text-slate-500 dark:text-slate-400 leading-relaxed">
                        Training the next generation of professionals to solve real-world complexity through
                        tech-enabled education.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-sm font-semibold uppercase tracking-wider text-slate-800 dark:text-white mb-4">Quick
                        Links</h4>
                    <ul class="space-y-3">
                        <li><a href="/"
                                class="text-sm text-slate-500 dark:text-slate-400 hover:text-cyber-500 transition-colors">Home</a>
                        </li>
                        <li><a href="/?page=programs"
                                class="text-sm text-slate-500 dark:text-slate-400 hover:text-cyber-500 transition-colors">Programmes</a>
                        </li>
                        <li><a href="/?page=campus"
                                class="text-sm text-slate-500 dark:text-slate-400 hover:text-cyber-500 transition-colors">Campus</a>
                        </li>
                        <li><a href="/?page=contact"
                                class="text-sm text-slate-500 dark:text-slate-400 hover:text-cyber-500 transition-colors">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Programmes -->
                <div>
                    <h4 class="text-sm font-semibold uppercase tracking-wider text-slate-800 dark:text-white mb-4">
                        Programmes</h4>
                    <ul class="space-y-3">
                        <li><a href="/?page=programs"
                                class="text-sm text-slate-500 dark:text-slate-400 hover:text-cyber-500 transition-colors">MBA</a>
                        </li>
                        <li><a href="/?page=programs"
                                class="text-sm text-slate-500 dark:text-slate-400 hover:text-cyber-500 transition-colors">Executive
                                MBA</a></li>
                        <li><a href="/?page=programs"
                                class="text-sm text-slate-500 dark:text-slate-400 hover:text-cyber-500 transition-colors">Masters
                                Degrees</a></li>
                        <li><a href="/?page=programs"
                                class="text-sm text-slate-500 dark:text-slate-400 hover:text-cyber-500 transition-colors">Executive
                                Education</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-sm font-semibold uppercase tracking-wider text-slate-800 dark:text-white mb-4">
                        Contact</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <svg class="w-4 h-4 text-cyber-500 mt-0.5 shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-sm text-slate-500 dark:text-slate-400">Innovation Drive,
                                Heslington<br>York, YO10 5DD, UK</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-4 h-4 text-cyber-500 shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <a href="mailto:admissions@yorkbusinessschool.ac.uk"
                                class="text-sm text-slate-500 dark:text-slate-400 hover:text-cyber-500 transition-colors">admissions@yorkbusinessschool.ac.uk</a>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-4 h-4 text-cyber-500 shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <a href="tel:+441904328500"
                                class="text-sm text-slate-500 dark:text-slate-400 hover:text-cyber-500 transition-colors">+44
                                (0) 1904 328 500</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div
                class="mt-12 pt-8 border-t border-slate-200 dark:border-white/5 flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="text-xs text-slate-400 dark:text-slate-500">&copy;
                    <?= date('Y') ?> York Business School. All rights reserved.
                </p>
                <div class="flex items-center space-x-6">
                    <a href="#"
                        class="text-xs text-slate-400 dark:text-slate-500 hover:text-cyber-500 transition-colors">Privacy
                        Policy</a>
                    <a href="#"
                        class="text-xs text-slate-400 dark:text-slate-500 hover:text-cyber-500 transition-colors">Terms
                        of Service</a>
                    <a href="#"
                        class="text-xs text-slate-400 dark:text-slate-500 hover:text-cyber-500 transition-colors">Cookie
                        Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Custom JS -->
    <script src="/js/app.js"></script>
</body>

</html>