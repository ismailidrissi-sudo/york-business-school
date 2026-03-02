<?php
/**
 * HomeController - Renders the homepage
 */
require_once BASE_PATH . '/app/models/Program.php';

class HomeController
{
    public function index(): void
    {
        $pageTitle = 'York Business School | Tech-Enabled Education for the New Era';
        $pageDescription = 'York Business School – A cutting-edge, tech-enabled business school in the United Kingdom. Discover our MBA, Masters, and Executive programmes designed to train the next generation of professionals.';
        $pageName = 'home';
        $featuredPrograms = Program::getFeatured();

        $stats = [
            ['value' => '2,500+', 'label' => 'Students Worldwide', 'icon' => 'users'],
            ['value' => '150+', 'label' => 'Employer Partners', 'icon' => 'building'],
            ['value' => '9', 'label' => 'Programmes Offered', 'icon' => 'book'],
            ['value' => '94%', 'label' => 'Employment Rate', 'icon' => 'chart'],
        ];

        $intakes = [
            ['month' => 'April 2026', 'status' => 'Enrolling Now', 'class' => 'active'],
            ['month' => 'September 2026', 'status' => 'Early Bird Open', 'class' => 'upcoming'],
            ['month' => 'January 2027', 'status' => 'Coming Soon', 'class' => 'future'],
        ];

        $testimonials = [
            [
                'name' => 'Sarah Mitchell',
                'role' => 'MBA Graduate, 2025',
                'quote' => 'York Business School transformed my career trajectory. The tech-integrated approach gave me skills that set me apart from every other candidate.',
                'avatar' => 'SM',
            ],
            [
                'name' => 'James O\'Connor',
                'role' => 'MSc Finance & FinTech, 2024',
                'quote' => 'The FinTech programme blended theory with real-world projects. I walked into my first day at a top bank feeling genuinely prepared.',
                'avatar' => 'JO',
            ],
            [
                'name' => 'Aisha Patel',
                'role' => 'Executive Programme, 2025',
                'quote' => 'As a working professional, the flexibility and depth of the Executive Programme exceeded every expectation. World-class faculty.',
                'avatar' => 'AP',
            ],
        ];

        include BASE_PATH . '/app/views/layouts/main.php';
    }
}
