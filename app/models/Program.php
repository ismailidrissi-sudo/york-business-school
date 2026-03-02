<?php
/**
 * Program Model - Static data for York Business School programs
 */
class Program
{
    public static function getAll(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'MBA – Master of Business Administration',
                'category' => 'MBA',
                'duration' => '12 months',
                'format' => 'Full-Time / Part-Time',
                'description' => 'Our flagship MBA programme combines strategic leadership, technology management, and real-world consulting projects. Designed for ambitious professionals ready to accelerate their careers in a tech-driven global economy.',
                'highlights' => ['Corporate Strategy & Innovation', 'AI & Digital Transformation', 'Live Business Consulting Projects', 'Leadership & Executive Coaching'],
                'price' => '£18,500',
            ],
            [
                'id' => 2,
                'title' => 'Executive MBA',
                'category' => 'MBA',
                'duration' => '18 months',
                'format' => 'Part-Time / Blended',
                'description' => 'Purpose-built for senior professionals and C-suite aspirants. Blend advanced management theory with hands-on tech-enabled workshops, without leaving your current role.',
                'highlights' => ['C-Suite Leadership Labs', 'Global Business Immersion Weeks', 'Executive Mentorship Programme', 'Digital Strategy & Data Analytics'],
                'price' => '£24,000',
            ],
            [
                'id' => 3,
                'title' => 'MSc International Management',
                'category' => 'Masters',
                'duration' => '12 months',
                'format' => 'Full-Time',
                'description' => 'Gain a global perspective on management practices and cross-cultural business strategies. Prepare to lead multinational teams in an interconnected world.',
                'highlights' => ['Cross-Cultural Management', 'Global Supply Chain Strategy', 'International Marketing', 'Study Trip to European Business Hubs'],
                'price' => '£14,500',
            ],
            [
                'id' => 4,
                'title' => 'MSc Marketing & Digital Innovation',
                'category' => 'Masters',
                'duration' => '12 months',
                'format' => 'Full-Time',
                'description' => 'Master the art and science of modern marketing. From AI-powered analytics to brand storytelling, learn to drive growth in the digital age.',
                'highlights' => ['AI-Driven Marketing Analytics', 'Brand Strategy & Storytelling', 'Social Media & Content Innovation', 'MarTech Ecosystem Management'],
                'price' => '£14,500',
            ],
            [
                'id' => 5,
                'title' => 'MSc Finance & FinTech',
                'category' => 'Masters',
                'duration' => '12 months',
                'format' => 'Full-Time',
                'description' => 'Bridge traditional finance with cutting-edge technology. Explore blockchain, algorithmic trading, and digital banking in one of the UK\'s most forward-looking programmes.',
                'highlights' => ['Blockchain & Distributed Ledger', 'Algorithmic Trading Simulation', 'Risk Management & Compliance', 'FinTech Start-up Incubator'],
                'price' => '£15,000',
            ],
            [
                'id' => 6,
                'title' => 'MSc Data Science for Business',
                'category' => 'Masters',
                'duration' => '12 months',
                'format' => 'Full-Time',
                'description' => 'Transform raw data into strategic decisions. This programme equips you with machine learning, Python, and business intelligence skills sought by top employers.',
                'highlights' => ['Machine Learning & AI', 'Python & R Programming', 'Business Intelligence & Dashboards', 'Capstone Industry Project'],
                'price' => '£15,000',
            ],
            [
                'id' => 7,
                'title' => 'Executive Programme in Leadership',
                'category' => 'Executive',
                'duration' => '6 months',
                'format' => 'Part-Time / Online',
                'description' => 'A transformational short programme for mid-career professionals seeking to elevate their leadership capabilities and drive organisational change.',
                'highlights' => ['Adaptive Leadership Frameworks', 'Emotional Intelligence & Influence', 'Change Management Masterclass', 'Peer Coaching Circles'],
                'price' => '£6,500',
            ],
            [
                'id' => 8,
                'title' => 'Executive Programme in Digital Transformation',
                'category' => 'Executive',
                'duration' => '4 months',
                'format' => 'Online / Weekend Intensives',
                'description' => 'Equip yourself to lead digital transformation initiatives. Understand emerging technologies, agile methodologies, and innovation management.',
                'highlights' => ['Agile & Design Thinking', 'Cloud & Platform Strategy', 'Cybersecurity Fundamentals', 'Digital Innovation Lab'],
                'price' => '£5,200',
            ],
            [
                'id' => 9,
                'title' => 'MSc Entrepreneurship & Innovation',
                'category' => 'Masters',
                'duration' => '12 months',
                'format' => 'Full-Time',
                'description' => 'From ideation to scale-up, develop the mindset and toolkit to launch ventures that matter. Backed by York\'s tech incubator and mentorship network.',
                'highlights' => ['Venture Building & Lean Startup', 'Fundraising & Investor Relations', 'Product Design & Prototyping', 'Start-up Incubator Access'],
                'price' => '£14,500',
            ],
        ];
    }

    public static function getByCategory(string $category): array
    {
        if ($category === 'all' || empty($category)) {
            return self::getAll();
        }
        return array_filter(self::getAll(), fn($p) => $p['category'] === $category);
    }

    public static function getCategories(): array
    {
        return ['All', 'Masters', 'MBA', 'Executive'];
    }

    public static function getFeatured(): array
    {
        return array_slice(self::getAll(), 0, 3);
    }
}
