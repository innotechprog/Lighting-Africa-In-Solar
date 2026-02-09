<?php
$pageTitle   = 'Services | LIGHTING AFRICA IN SOLAR';
$currentPage = 'services';
include __DIR__ . '/partials/layout-top.php';
?>

<section class="section-wrap py-14 sm:py-16">
    <div class="mx-auto max-w-6xl space-y-10">
        <header class="page-header mb-8">
            <p class="section-label text-primary-600 dark:text-primary-400">Our services</p>
            <h1 class="mt-2 text-3xl font-bold tracking-tight text-slate-800 dark:text-slate-50 sm:text-4xl">What we offer</h1>
        </header>
        <div class="grid gap-8 lg:grid-cols-5">
            <div class="lg:col-span-2">
                <p class="text-base leading-relaxed text-slate-600 dark:text-slate-300">
                    LIGHTING AFRICA IN SOLAR supplies solar products online and supports you with product information, sizing guidance, and delivery. Browse our range, order securely, and get expert help when you need it.
                </p>
                <?php if (file_exists(__DIR__ . '/assets/images/solar-install-5.png')): ?>
                <div class="mt-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-soft dark:border-slate-800 dark:bg-slate-900/60 dark:shadow-soft-dark">
                    <img src="<?php echo $baseUrl; ?>/assets/images/solar-install-5.png" alt="Solar solutions we supply" class="h-56 w-full object-cover sm:h-64">
                </div>
                <?php endif; ?>
            </div>
            <div class="grid gap-5 sm:grid-cols-2 lg:col-span-3">
            <article class="card-hover rounded-2xl border border-slate-200 bg-white p-5 shadow-soft dark:border-slate-800 dark:bg-slate-900/60 dark:shadow-soft-dark">
                <h2 class="font-semibold text-slate-800 dark:text-slate-50">Online product catalog</h2>
                <p class="mt-2 text-sm text-slate-600 dark:text-slate-300">
                    Browse solar panels, inverters, batteries, complete systems, pumps, and accessories. Clear product
                    information and specs so you can choose with confidence.
                </p>
                <ul class="mt-2 space-y-1.5 text-xs text-slate-500 dark:text-slate-400">
                    <li>• Panels, inverters, batteries, and BOS</li>
                    <li>• Complete solar kits for home and business</li>
                    <li>• Solar pumps and irrigation solutions</li>
                </ul>
            </article>

            <article class="card-hover rounded-2xl border border-slate-200 bg-white p-5 shadow-soft dark:border-slate-800 dark:bg-slate-900/60 dark:shadow-soft-dark">
                <h2 class="font-semibold text-slate-800 dark:text-slate-50">Secure online purchasing</h2>
                <p class="mt-2 text-sm text-slate-600 dark:text-slate-300">
                    Order solar products quickly and securely online. We make the process simple so you can purchase
                    systems or components without hassle.
                </p>
                <ul class="mt-2 space-y-1.5 text-xs text-slate-500 dark:text-slate-400">
                    <li>• Easy checkout and payment options</li>
                    <li>• Order tracking and delivery updates</li>
                    <li>• National and international shipping</li>
                </ul>
            </article>

            <article class="card-hover rounded-2xl border border-slate-200 bg-white p-5 shadow-soft dark:border-slate-800 dark:bg-slate-900/60 dark:shadow-soft-dark">
                <h2 class="font-semibold text-slate-800 dark:text-slate-50">Product education & sizing</h2>
                <p class="mt-2 text-sm text-slate-600 dark:text-slate-300">
                    Not sure what you need? We help you understand solar solutions—how they work, what size system fits
                    your load, and which products suit your budget.
                </p>
                <ul class="mt-2 space-y-1.5 text-xs text-slate-500 dark:text-slate-400">
                    <li>• Load and system sizing guidance</li>
                    <li>• Grid-tied, hybrid, and off-grid options</li>
                    <li>• Quotes and recommendations on request</li>
                </ul>
            </article>

            <article class="card-hover rounded-2xl border border-slate-200 bg-white p-5 shadow-soft dark:border-slate-800 dark:bg-slate-900/60 dark:shadow-soft-dark">
                <h2 class="font-semibold text-slate-800 dark:text-slate-50">Delivery & support</h2>
                <p class="mt-2 text-sm text-slate-600 dark:text-slate-300">
                    We deliver to your door—whether you’re down the road or in another country. After purchase, we’re
                    here to answer questions and help you get the most from your system.
                </p>
                <ul class="mt-2 space-y-1.5 text-xs text-slate-500 dark:text-slate-400">
                    <li>• Reliable shipping nationally and internationally</li>
                    <li>• Post-purchase support and advice</li>
                    <li>• Warranty and product documentation</li>
                </ul>
            </article>
            </div>
        </div>

        <div class="rounded-2xl border border-primary-200 bg-primary-50 p-6 dark:border-primary-900/50 dark:bg-primary-500/10">
            <h2 class="text-sm font-semibold text-primary-700 dark:text-primary-200">Ready to order or need a quote?</h2>
            <p class="mt-2 text-sm text-slate-700 dark:text-slate-200">
                Browse our <a href="<?php echo $baseUrl; ?>/products" class="font-semibold text-primary-600 hover:text-primary-700 dark:text-primary-300 dark:hover:text-primary-200 underline">Products</a> page or contact us with your requirements. We’ll recommend the right products and get them to you.
            </p>
            <a href="<?php echo $baseUrl; ?>/contact" class="mt-3 inline-flex text-sm font-semibold text-primary-600 hover:text-primary-700 dark:text-primary-300 dark:hover:text-primary-200">
                Contact us &rarr;
            </a>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/partials/layout-bottom.php';
?>
