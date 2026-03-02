<!-- Contact Hero -->
<section class="relative pt-32 pb-16 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-navy-950 via-navy-900 to-navy-800 dark:opacity-100 opacity-0">
    </div>
    <div class="absolute inset-0 bg-gradient-to-br from-slate-50 via-blue-50 to-cyan-50 dark:opacity-0 opacity-100">
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center fade-in">
        <span class="inline-block px-4 py-1.5 rounded-full bg-cyber-500/10 text-cyber-500 text-sm font-medium mb-4">Get
            In Touch</span>
        <h1 class="text-4xl sm:text-5xl font-bold dark:text-white text-navy-900 mb-4">Contact Us</h1>
        <p class="text-lg text-slate-500 dark:text-slate-400 max-w-2xl mx-auto">Have questions about our programmes?
            Ready to take the next step? Our admissions team is here to help.</p>
    </div>
</section>

<!-- Contact Form & Info -->
<section class="py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-5 gap-12">
            <!-- Form -->
            <div class="lg:col-span-3 fade-in">
                <div class="glass-card rounded-2xl p-8 sm:p-10">
                    <h2 class="text-2xl font-bold dark:text-white text-navy-900 mb-2">Request Information</h2>
                    <p class="text-slate-500 dark:text-slate-400 mb-8">Fill in the form below and we'll get back to you
                        within 24 hours.</p>

                    <?php if (!empty($successMessage)): ?>
                        <div class="mb-6 p-4 rounded-xl bg-green-500/10 border border-green-500/20 text-green-400 flex items-center space-x-3"
                            id="success-msg">
                            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>
                                <?= htmlspecialchars($successMessage) ?>
                            </span>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($errorMessage)): ?>
                        <div class="mb-6 p-4 rounded-xl bg-red-500/10 border border-red-500/20 text-red-400 flex items-center space-x-3"
                            id="error-msg">
                            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>
                                <?= htmlspecialchars($errorMessage) ?>
                            </span>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="/?page=contact" id="contact-form" novalidate>
                        <div class="grid sm:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="name"
                                    class="block text-sm font-medium dark:text-slate-300 text-slate-700 mb-2">Full Name
                                    *</label>
                                <input type="text" id="name" name="name" required
                                    value="<?= htmlspecialchars($formData['name']) ?>"
                                    class="form-input w-full px-4 py-3 rounded-xl bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10 text-slate-800 dark:text-white placeholder-slate-400 dark:placeholder-slate-500 focus:ring-2 focus:ring-cyber-500 focus:border-transparent transition-all"
                                    placeholder="John Smith">
                            </div>
                            <div>
                                <label for="email"
                                    class="block text-sm font-medium dark:text-slate-300 text-slate-700 mb-2">Email
                                    Address *</label>
                                <input type="email" id="email" name="email" required
                                    value="<?= htmlspecialchars($formData['email']) ?>"
                                    class="form-input w-full px-4 py-3 rounded-xl bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10 text-slate-800 dark:text-white placeholder-slate-400 dark:placeholder-slate-500 focus:ring-2 focus:ring-cyber-500 focus:border-transparent transition-all"
                                    placeholder="john@example.com">
                            </div>
                        </div>

                        <div class="grid sm:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="phone"
                                    class="block text-sm font-medium dark:text-slate-300 text-slate-700 mb-2">Phone
                                    Number</label>
                                <input type="tel" id="phone" name="phone"
                                    value="<?= htmlspecialchars($formData['phone']) ?>"
                                    class="form-input w-full px-4 py-3 rounded-xl bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10 text-slate-800 dark:text-white placeholder-slate-400 dark:placeholder-slate-500 focus:ring-2 focus:ring-cyber-500 focus:border-transparent transition-all"
                                    placeholder="+44 7xxx xxx xxx">
                            </div>
                            <div>
                                <label for="program"
                                    class="block text-sm font-medium dark:text-slate-300 text-slate-700 mb-2">Programme
                                    of Interest</label>
                                <select id="program" name="program"
                                    class="form-input w-full px-4 py-3 rounded-xl bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10 text-slate-800 dark:text-white focus:ring-2 focus:ring-cyber-500 focus:border-transparent transition-all">
                                    <option value="">Select a programme</option>
                                    <?php foreach ($programs as $p): ?>
                                        <option value="<?= htmlspecialchars($p['title']) ?>"
                                            <?= $formData['program'] === $p['title'] ? 'selected' : '' ?>>
                                            <?= htmlspecialchars($p['title']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="message"
                                class="block text-sm font-medium dark:text-slate-300 text-slate-700 mb-2">Message
                                *</label>
                            <textarea id="message" name="message" rows="5" required
                                class="form-input w-full px-4 py-3 rounded-xl bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10 text-slate-800 dark:text-white placeholder-slate-400 dark:placeholder-slate-500 focus:ring-2 focus:ring-cyber-500 focus:border-transparent transition-all resize-none"
                                placeholder="Tell us about your goals..."><?= htmlspecialchars($formData['message']) ?></textarea>
                        </div>

                        <button type="submit" id="contact-submit"
                            class="w-full sm:w-auto px-8 py-4 rounded-xl bg-gradient-to-r from-cyber-500 to-blue-600 text-white font-semibold hover:shadow-lg hover:shadow-cyber-500/25 transition-all hover:-translate-y-0.5">
                            Send Enquiry
                            <svg class="w-5 h-5 inline ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Contact Info Sidebar -->
            <div class="lg:col-span-2 fade-in fade-in-delay-1 space-y-6">
                <div class="glass-card rounded-2xl p-8">
                    <h3 class="text-lg font-bold dark:text-white text-navy-900 mb-6">Contact Details</h3>
                    <div class="space-y-5">
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-cyber-500/10 rounded-xl flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-cyber-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium dark:text-white text-navy-900 text-sm">Address</p>
                                <p class="text-sm text-slate-500 dark:text-slate-400">Innovation Drive,
                                    Heslington<br>York, YO10 5DD, UK</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-cyber-500/10 rounded-xl flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-cyber-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium dark:text-white text-navy-900 text-sm">Email</p>
                                <a href="mailto:admissions@yorkbusinessschool.ac.uk"
                                    class="text-sm text-cyber-500 hover:text-cyber-400">admissions@yorkbusinessschool.ac.uk</a>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-cyber-500/10 rounded-xl flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-cyber-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium dark:text-white text-navy-900 text-sm">Phone</p>
                                <a href="tel:+441904328500" class="text-sm text-cyber-500 hover:text-cyber-400">+44 (0)
                                    1904 328 500</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="glass-card rounded-2xl p-8">
                    <h3 class="text-lg font-bold dark:text-white text-navy-900 mb-4">Office Hours</h3>
                    <div class="space-y-3 text-sm">
                        <div class="flex justify-between"><span class="text-slate-500 dark:text-slate-400">Monday –
                                Friday</span><span class="dark:text-white text-navy-900 font-medium">09:00 –
                                17:30</span></div>
                        <div class="flex justify-between"><span
                                class="text-slate-500 dark:text-slate-400">Saturday</span><span
                                class="dark:text-white text-navy-900 font-medium">10:00 – 14:00</span></div>
                        <div class="flex justify-between"><span
                                class="text-slate-500 dark:text-slate-400">Sunday</span><span
                                class="dark:text-white text-navy-900 font-medium">Closed</span></div>
                    </div>
                </div>

                <div class="glass-card rounded-2xl p-8">
                    <h3 class="text-lg font-bold dark:text-white text-navy-900 mb-4">Follow Us</h3>
                    <div class="flex space-x-3">
                        <a href="#"
                            class="w-10 h-10 bg-slate-100 dark:bg-white/5 rounded-xl flex items-center justify-center hover:bg-cyber-500/10 hover:text-cyber-500 transition-all text-slate-500 dark:text-slate-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-slate-100 dark:bg-white/5 rounded-xl flex items-center justify-center hover:bg-cyber-500/10 hover:text-cyber-500 transition-all text-slate-500 dark:text-slate-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-slate-100 dark:bg-white/5 rounded-xl flex items-center justify-center hover:bg-cyber-500/10 hover:text-cyber-500 transition-all text-slate-500 dark:text-slate-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>