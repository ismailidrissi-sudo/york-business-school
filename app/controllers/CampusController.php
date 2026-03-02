<?php
/**
 * CampusController - Renders the York Campus page
 */
class CampusController
{
    public function index(): void
    {
        $pageTitle = 'York Campus | York Business School';
        $pageDescription = 'Discover our state-of-the-art campus in the heart of York, United Kingdom. World-class facilities, industry partnerships, and a vibrant student community.';
        $pageName = 'campus';

        $partnerships = [
            ['name' => 'Deloitte', 'description' => 'Strategic consulting projects and graduate placements'],
            ['name' => 'Barclays', 'description' => 'FinTech innovation labs and sponsored research'],
            ['name' => 'Microsoft', 'description' => 'Cloud & AI curriculum co-development'],
            ['name' => 'Rolls-Royce', 'description' => 'Engineering management case studies'],
            ['name' => 'NHS Digital', 'description' => 'Health-tech transformation projects'],
            ['name' => 'McKinsey & Company', 'description' => 'Executive masterclasses and workshops'],
        ];

        $facilities = [
            ['name' => 'Innovation Hub', 'description' => 'A 2,000 sqm co-working and incubator space with prototyping labs, 3D printers, and VR stations.', 'icon' => 'lightbulb'],
            ['name' => 'Bloomberg Lab', 'description' => '24 Bloomberg Terminal workstations for real-time financial data analysis and trading simulations.', 'icon' => 'monitor'],
            ['name' => 'Executive Centre', 'description' => 'Premium boardroom-style teaching spaces with telepresence suites for global guest lectures.', 'icon' => 'briefcase'],
            ['name' => 'Digital Library', 'description' => 'Over 50,000 digital resources, AI-assisted research tools, and 24/7 study pods.', 'icon' => 'library'],
        ];

        include BASE_PATH . '/app/views/layouts/main.php';
    }
}
