<?php
$pageTitle   = 'Privacy Policy | LIGHTING AFRICA IN SOLAR';
$currentPage = '';
include __DIR__ . '/partials/layout-top.php';
?>

<section class="section-wrap py-14 sm:py-16">
    <div class="mx-auto max-w-4xl policy-content space-y-6 text-sm text-slate-600 dark:text-slate-300 sm:text-base">
        <header class="page-header">
            <p class="section-label text-primary-600 dark:text-primary-400">Legal</p>
            <h1 class="mt-2 text-2xl font-bold tracking-tight text-slate-800 dark:text-slate-50 sm:text-3xl">
                Privacy Policy
            </h1>
        </header>
        <p>
            This Privacy Policy describes how LIGHTING AFRICA IN SOLAR (&ldquo;we&rdquo;, &ldquo;us&rdquo;, or
            &ldquo;our&rdquo;) collects, uses, and protects personal information when you use this website.
        </p>

        <section class="space-y-2">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-50">Information we may collect</h2>
            <p>We may collect information such as:</p>
            <ul class="list-disc pl-5 space-y-1">
                <li>contact details you provide (name, email, phone number) via our contact form;</li>
                <li>basic technical information such as your IP address and browser type;</li>
                <li>usage data, such as pages visited and time spent on the site (if analytics are enabled).</li>
            </ul>
        </section>

        <section class="space-y-2">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-50">How we use your information</h2>
            <p>We may use your information to:</p>
            <ul class="list-disc pl-5 space-y-1">
                <li>respond to your enquiries and provide customer support;</li>
                <li>improve our website and services;</li>
                <li>comply with legal obligations.</li>
            </ul>
        </section>

        <section class="space-y-2">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-50">Data retention</h2>
            <p>
                We retain personal information only for as long as necessary to fulfill the purposes described in this
                policy, unless a longer retention period is required or permitted by law.
            </p>
        </section>

        <section class="space-y-2">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-50">Your rights</h2>
            <p>
                Depending on your local laws, you may have rights to access, correct, or delete your personal
                information, or to object to certain types of processing.
            </p>
        </section>

        <section class="space-y-2">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-50">Cookies</h2>
            <p>
                For details on how we use cookies and similar technologies, please see our
                <a href="<?php echo isset($baseUrl) ? $baseUrl . '/cookie-policy' : '/cookie-policy'; ?>" class="text-primary-600 hover:text-primary-700 dark:text-primary-300 dark:hover:text-primary-200">Cookie Policy</a>.
            </p>
        </section>

        <section class="space-y-2">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-50">Changes to this policy</h2>
            <p>
                We may update this Privacy Policy from time to time. Any changes will be posted on this page with an
                updated &ldquo;Last updated&rdquo; date.
            </p>
        </section>

        <section class="space-y-2">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-50">Contact</h2>
            <p>
                If you have questions about this Privacy Policy or how we handle your data, please contact us at
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

