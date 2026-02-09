<?php
if (!isset($pageTitle)) {
    $pageTitle = 'LIGHTING AFRICA IN SOLAR';
}
if (!isset($currentPage)) {
    $currentPage = '';
}
// Base URL so links stay inside the project folder (e.g. /Lighting africa in solar)
$baseUrl = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <!-- Tailwind CSS via CDN (for simplicity) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            500: '#0ea5e9',
                            600: '#0284c7',
                        },
                    },
                }
            }
        };
    </script>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen flex flex-col">
<?php include __DIR__ . '/header.php'; ?>
<main class="flex-1">

