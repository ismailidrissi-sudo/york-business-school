<?php
/**
 * ProgramController - Renders the programme directory
 */
require_once BASE_PATH . '/app/models/Program.php';

class ProgramController
{
    public function index(): void
    {
        $pageTitle = 'Our Programmes | York Business School';
        $pageDescription = 'Explore York Business School\'s Masters, MBA, and Executive Education programmes. Filterable directory of all courses designed for the new era of business.';
        $pageName = 'programs';

        $activeCategory = isset($_GET['category']) ? $_GET['category'] : 'All';
        $categories = Program::getCategories();
        $programs = Program::getAll();

        include BASE_PATH . '/app/views/layouts/main.php';
    }
}
