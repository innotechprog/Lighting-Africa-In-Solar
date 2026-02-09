<?php
$pageTitle   = 'Cookie Policy | LIGHTING AFRICA IN SOLAR';
$currentPage = '';
include __DIR__ . '/partials/layout-top.php';
?>

<section class="section-wrap py-14 sm:py-16">
    <div class="mx-auto max-w-4xl policy-content space-y-6 text-sm text-slate-600 dark:text-slate-300 sm:text-base">
        <header class="page-header">
            <p class="section-label text-primary-600 dark:text-primary-400">Legal</p>
            <h1 class="mt-2 text-2xl font-bold tracking-tight text-slate-800 dark:text-slate-50 sm:text-3xl">
                Cookie Policy
            </h1>
        </header>
        <p>
            This Cookie Policy explains how LIGHTING AFRICA IN SOLAR (&ldquo;we&rdquo;, &ldquo;us&rdquo;, or
            &ldquo;our&rdquo;) uses cookies and similar technologies on this website.
        </p>

        <section class="space-y-2">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-50">What are cookies?</h2>
            <p>
                Cookies are small text files that are placed on your device when you visit a website.
                They help the site remember information about your visit, such as your preferred language and other
                settings, which can make subsequent visits easier and the site more useful to you.
            </p>
        </section>

        <section class="space-y-2">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-50">How we use cookies</h2>
            <p>On this site, we use cookies to:</p>
            <ul class="list-disc pl-5 space-y-1">
                <li>remember that you have accepted our cookie banner so it does not appear on every visit;</li>
                <li>improve your browsing experience and keep layouts consistent;</li>
                <li>optionally help us understand how the site is used (if analytics are enabled).</li>
            </ul>
        </section>

        <section class="space-y-2">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-50">Types of cookies used</h2>
            <ul class="list-disc pl-5 space-y-1">
                <li>
                    <strong>Essential cookies</strong> – required for the website to function properly, such as
                    remembering your cookie consent.
                </li>
                <li>
                    <strong>Optional cookies</strong> – for analytics or performance, which may only be used with your
                    consent (if enabled in the future).
                </li>
            </ul>
        </section>

        <section class="space-y-2">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-50">Managing cookies</h2>
            <p>
                Most web browsers allow you to control cookies through their settings. You can usually configure your
                browser to block cookies, delete existing cookies, or alert you when cookies are being set.
            </p>
            <p class="text-sm text-slate-400">
                Note: if you disable cookies, some parts of this website may not function correctly.
            </p>
        </section>

        <section class="space-y-2">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-50">Updates to this policy</h2>
            <p>
                We may update this Cookie Policy from time to time. Any changes will be posted on this page with an
                updated &ldquo;Last updated&rdquo; date.
            </p>
        </section>

        <section class="space-y-2">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-50">Contact</h2>
            <p>
                If you have questions about this Cookie Policy, please contact us at
                <a href="mailto:<?php echo isset($siteEmail) ? htmlspecialchars($siteEmail, ENT_QUOTES, 'UTF-8') : 'infolightingafricainsolar@gmail.com'; ?>" class="text-primary-600 hover:text-primary-700 dark:text-primary-300 dark:hover:text-primary-200">
                    <?php echo isset($siteEmail) ? htmlspecialchars($siteEmail, ENT_QUOTES, 'UTF-8') : 'infolightingafricainsolar@gmail.com'; ?>
                </a>.
            </p>
        </section>
    </div>
</section>

<?php
include __DIR__ . '/partials/layout-bottom.php';
?>

