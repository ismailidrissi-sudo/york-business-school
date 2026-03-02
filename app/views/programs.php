<!-- Programs Hero -->
<section class="relative pt-32 pb-16 overflow-hidden">
    <div
        class="absolute inset-0 bg-gradient-to-br from-navy-950 via-navy-900 to-navy-800 dark:opacity-100 opacity-0 transition-opacity">
    </div>
    <div
        class="absolute inset-0 bg-gradient-to-br from-slate-50 via-blue-50 to-cyan-50 dark:opacity-0 opacity-100 transition-opacity">
    </div>
    <div class="absolute inset-0 opacity-[0.03]"
        style="background-image: url('data:image/svg+xml,%3Csvg width=%2260%22 height=%2260%22 viewBox=%220 0 60 60%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cg fill=%22none%22 fill-rule=%22evenodd%22%3E%3Cg fill=%22%2300d4ff%22 fill-opacity=%221%22%3E%3Ccircle cx=%221%22 cy=%221%22 r=%221%22/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center fade-in">
        <span
            class="inline-block px-4 py-1.5 rounded-full bg-cyber-500/10 text-cyber-500 text-sm font-medium mb-4">Programme
            Directory</span>
        <h1 class="text-4xl sm:text-5xl font-bold dark:text-white text-navy-900 mb-4">Our Programmes</h1>
        <p class="text-lg text-slate-500 dark:text-slate-400 max-w-2xl mx-auto">
            World-class business education with cutting-edge technology integration. Explore our Masters, MBA, and
            Executive programmes.
        </p>
    </div>
</section>

<!-- Filter & Programs Grid -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Filter Tabs -->
        <div class="flex flex-wrap justify-center gap-3 mb-12 fade-in" id="program-filters">
            <?php foreach ($categories as $cat): ?>
                <button
                    class="filter-btn px-6 py-2.5 rounded-xl text-sm font-medium transition-all duration-300
                <?= $cat === $activeCategory ? 'bg-gradient-to-r from-cyber-500 to-blue-600 text-white shadow-lg shadow-cyber-500/25' : 'bg-slate-100 dark:bg-white/5 text-slate-600 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-white/10' ?>"
                    data-category="<?= $cat ?>" id="filter-<?= strtolower($cat) ?>">
                    <?= $cat === 'All' ? 'All Programmes' : $cat ?>
                </button>
            <?php endforeach; ?>
        </div>

        <!-- Programs Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="programs-grid">
            <?php foreach ($programs as $program): ?>
                <div class="fade-in program-card glass-card rounded-2xl overflow-hidden group hover:-translate-y-2 transition-all duration-300"
                    data-category="<?= $program['category'] ?>">
                    <!-- Gradient Header -->
                    <div
                        class="h-2 bg-gradient-to-r 
                    <?= $program['category'] === 'MBA' ? 'from-purple-500 to-pink-500' : ($program['category'] === 'Masters' ? 'from-cyber-500 to-blue-600' : 'from-amber-500 to-orange-500') ?>">
                    </div>

                    <div class="p-8">
                        <!-- Category Badge -->
                        <div class="flex items-center justify-between mb-4">
                            <span
                                class="inline-flex px-3 py-1 rounded-full text-xs font-medium
                            <?= $program['category'] === 'MBA' ? 'bg-purple-500/10 text-purple-400' : ($program['category'] === 'Masters' ? 'bg-cyber-500/10 text-cyber-500' : 'bg-amber-500/10 text-amber-400') ?>">
                                <?= $program['category'] ?>
                            </span>
                            <span class="text-sm font-semibold text-cyber-500">
                                <?= $program['price'] ?>
                            </span>
                        </div>

                        <!-- Title -->
                        <h3
                            class="text-xl font-bold dark:text-white text-navy-900 mb-3 group-hover:text-cyber-500 transition-colors leading-tight">
                            <?= htmlspecialchars($program['title']) ?>
                        </h3>

                        <!-- Meta -->
                        <div class="flex items-center space-x-4 mb-4 text-sm text-slate-500 dark:text-slate-400">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <?= $program['duration'] ?>
                            </span>
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <?= $program['format'] ?>
                            </span>
                        </div>

                        <!-- Description -->
                        <p class="text-sm text-slate-500 dark:text-slate-400 mb-6 leading-relaxed">
                            <?= htmlspecialchars($program['description']) ?>
                        </p>

                        <!-- Highlights -->
                        <div class="space-y-2 mb-6">
                            <?php foreach ($program['highlights'] as $highlight): ?>
                                <div class="flex items-center text-sm">
                                    <svg class="w-4 h-4 text-cyber-500 mr-2 shrink-0" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-slate-600 dark:text-slate-300">
                                        <?= htmlspecialchars($highlight) ?>
                                    </span>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- CTA -->
                        <a href="/?page=contact"
                            class="block w-full text-center px-6 py-3 rounded-xl bg-gradient-to-r from-cyber-500 to-blue-600 text-white text-sm font-semibold hover:shadow-lg hover:shadow-cyber-500/25 transition-all">
                            Request Information
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Why York CTA -->
<section class="py-24 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-navy-900 to-navy-800 dark:from-navy-950 dark:to-navy-900"></div>
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center fade-in">
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6">Can't Decide?</h2>
        <p class="text-lg text-slate-300 mb-10 max-w-2xl mx-auto">Speak with our admissions advisors. They'll help match
            your career goals with the ideal programme.</p>
        <a href="/?page=contact"
            class="inline-flex items-center px-8 py-4 rounded-2xl bg-gradient-to-r from-cyber-500 to-blue-600 text-white font-semibold hover:shadow-xl hover:shadow-cyber-500/25 transition-all hover:-translate-y-1">
            Book a Consultation
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>
    </div>
</section>