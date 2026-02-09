<?php
if (!isset($pageTitle)) {
    $pageTitle = 'LIGHTING AFRICA IN SOLAR';
}
if (!isset($currentPage)) {
    $currentPage = '';
}
// Base URL so links stay inside the project folder (e.g. /Lighting africa in solar)
$baseUrl = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/');

// Contact details (single source of truth – edit config/contact.php)
if (file_exists(__DIR__ . '/../config/contact.php')) {
    include __DIR__ . '/../config/contact.php';
}
if (!isset($sitePhone))    $sitePhone    = '+27 603967999';
if (!isset($siteEmail))    $siteEmail    = 'infolightingafricainsolar@gmail.com';
if (!isset($siteWhatsApp)) $siteWhatsApp = '+27 715323926';
if (!isset($siteAddress))  $siteAddress  = 'Nairobi, Kenya';
if (!isset($siteAddressFull)) $siteAddressFull = $siteAddress;
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Theme: apply before paint to avoid flash -->
    <script>
        (function () {
            var storageKey = 'la_solar_theme';
            var stored = localStorage.getItem(storageKey);
            var prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
            var isDark = stored === 'dark' || (stored !== 'light' && prefersDark);
            document.documentElement.classList.toggle('dark', isDark);
        })();
    </script>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                        },
                    },
                    boxShadow: {
                        'soft': '0 4px 24px -4px rgba(0,0,0,0.08), 0 8px 16px -6px rgba(0,0,0,0.04)',
                        'soft-dark': '0 4px 24px -4px rgba(0,0,0,0.3)',
                    },
                }
            }
        };
    </script>
    <!-- Project assets -->
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/style.css">
    <script defer src="<?php echo $baseUrl; ?>/assets/js/app.js"></script>
</head>
<body class="min-h-screen flex flex-col bg-slate-50 text-slate-800 dark:bg-slate-950 dark:text-slate-100 transition-colors duration-200 font-sans antialiased">
<?php include __DIR__ . '/header.php'; ?>
<main class="flex-1">

