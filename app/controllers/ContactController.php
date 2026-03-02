<?php
/**
 * ContactController - Renders and processes the contact form
 */
require_once BASE_PATH . '/app/models/Program.php';

class ContactController
{
    public function index(): void
    {
        $pageTitle = 'Contact Us | York Business School';
        $pageDescription = 'Get in touch with York Business School. Request information about our programmes, schedule a campus visit, or speak to our admissions team.';
        $pageName = 'contact';

        $successMessage = '';
        $errorMessage = '';
        $formData = ['name' => '', 'email' => '', 'phone' => '', 'program' => '', 'message' => ''];
        $programs = Program::getAll();

        // Handle form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $formData = [
                'name' => trim($_POST['name'] ?? ''),
                'email' => trim($_POST['email'] ?? ''),
                'phone' => trim($_POST['phone'] ?? ''),
                'program' => trim($_POST['program'] ?? ''),
                'message' => trim($_POST['message'] ?? ''),
            ];

            // Validation
            $errors = [];
            if (empty($formData['name']))
                $errors[] = 'Name is required.';
            if (empty($formData['email']) || !filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'A valid email address is required.';
            }
            if (empty($formData['message']))
                $errors[] = 'Message is required.';

            if (!empty($errors)) {
                $errorMessage = implode(' ', $errors);
            } else {
                // Save lead to JSON file
                $dataDir = BASE_PATH . '/data';
                $dataFile = $dataDir . '/leads.json';

                if (!is_dir($dataDir)) {
                    mkdir($dataDir, 0755, true);
                }

                $leads = [];
                if (file_exists($dataFile)) {
                    $leads = json_decode(file_get_contents($dataFile), true) ?? [];
                }

                $formData['submitted_at'] = date('Y-m-d H:i:s');
                $leads[] = $formData;

                file_put_contents($dataFile, json_encode($leads, JSON_PRETTY_PRINT));

                $successMessage = 'Thank you for your enquiry! Our admissions team will be in touch within 24 hours.';
                $formData = ['name' => '', 'email' => '', 'phone' => '', 'program' => '', 'message' => ''];
            }
        }

        include BASE_PATH . '/app/views/layouts/main.php';
    }
}
