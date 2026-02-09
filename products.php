<?php
$pageTitle   = 'Products | LIGHTING AFRICA IN SOLAR';
$currentPage = 'products';
include __DIR__ . '/partials/layout-top.php';
?>

<section class="px-4 py-10 sm:py-12">
    <div class="mx-auto max-w-6xl space-y-8">
        <header class="space-y-3 text-center">
            <h1 class="text-2xl font-semibold tracking-tight text-slate-50 sm:text-3xl">
                Solar products for every need
            </h1>
            <p class="mx-auto max-w-2xl text-sm leading-relaxed text-slate-300 sm:text-base">
                Browse high-quality solar panels, inverters, batteries, and complete systems. Order online and we’ll
                deliver to your door—anywhere nationally or internationally.
            </p>
        </header>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <article class="rounded-2xl border border-slate-800 bg-slate-900/60 p-5 transition-colors hover:border-slate-700">
                <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-xl bg-primary-500/10 text-primary-300">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                    </svg>
                </div>
                <h2 class="text-sm font-semibold text-slate-50">Solar panels</h2>
                <p class="mt-2 text-sm text-slate-400">
                    Monocrystalline and polycrystalline panels for residential, commercial, and off-grid use. Tier-one
                    brands, various wattages.
                </p>
                <a href="<?php echo $baseUrl; ?>/contact?interest=panels" class="mt-3 inline-block text-xs font-semibold text-primary-300 hover:text-primary-200">
                    Get a quote &rarr;
                </a>
            </article>

            <article class="rounded-2xl border border-slate-800 bg-slate-900/60 p-5 transition-colors hover:border-slate-700">
                <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-xl bg-primary-500/10 text-primary-300">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h2 class="text-sm font-semibold text-slate-50">Inverters & charge controllers</h2>
                <p class="mt-2 text-sm text-slate-400">
                    Grid-tied, hybrid, and off-grid inverters. MPPT and PWM charge controllers for reliable energy
                    conversion and battery charging.
                </p>
                <a href="<?php echo $baseUrl; ?>/contact?interest=inverters" class="mt-3 inline-block text-xs font-semibold text-primary-300 hover:text-primary-200">
                    Get a quote &rarr;
                </a>
            </article>

            <article class="rounded-2xl border border-slate-800 bg-slate-900/60 p-5 transition-colors hover:border-slate-700">
                <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-xl bg-primary-500/10 text-primary-300">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"/>
                    </svg>
                </div>
                <h2 class="text-sm font-semibold text-slate-50">Batteries & storage</h2>
                <p class="mt-2 text-sm text-slate-400">
                    Solar batteries and energy storage for backup power and off-grid systems. Gel, AGM, and lithium
                    options.
                </p>
                <a href="<?php echo $baseUrl; ?>/contact?interest=batteries" class="mt-3 inline-block text-xs font-semibold text-primary-300 hover:text-primary-200">
                    Get a quote &rarr;
                </a>
            </article>

            <article class="rounded-2xl border border-slate-800 bg-slate-900/60 p-5 transition-colors hover:border-slate-700">
                <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-xl bg-primary-500/10 text-primary-300">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h2 class="text-sm font-semibold text-slate-50">Complete solar systems</h2>
                <p class="mt-2 text-sm text-slate-400">
                    Ready-to-install kits for homes, businesses, and farms. Sized for your load and location with
                    mounting and cables included.
                </p>
                <a href="<?php echo $baseUrl; ?>/contact?interest=systems" class="mt-3 inline-block text-xs font-semibold text-primary-300 hover:text-primary-200">
                    Get a quote &rarr;
                </a>
            </article>

            <article class="rounded-2xl border border-slate-800 bg-slate-900/60 p-5 transition-colors hover:border-slate-700">
                <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-xl bg-primary-500/10 text-primary-300">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86 3.86l-.478 2.387a2 2 0 01-.547 1.022L5 21l3-3 8-8 3 3-2.572 2.572z"/>
                    </svg>
                </div>
                <h2 class="text-sm font-semibold text-slate-50">Accessories & balance of system</h2>
                <p class="mt-2 text-sm text-slate-400">
                    Cables, connectors, mounting hardware, meters, and other components to complete your installation.
                </p>
                <a href="<?php echo $baseUrl; ?>/contact?interest=accessories" class="mt-3 inline-block text-xs font-semibold text-primary-300 hover:text-primary-200">
                    Get a quote &rarr;
                </a>
            </article>

            <article class="rounded-2xl border border-slate-800 bg-slate-900/60 p-5 transition-colors hover:border-slate-700">
                <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-xl bg-primary-500/10 text-primary-300">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                    </svg>
                </div>
                <h2 class="text-sm font-semibold text-slate-50">Solar for irrigation & pumps</h2>
                <p class="mt-2 text-sm text-slate-400">
                    Solar water pumps and pump controllers for farms and remote water supply. Reliable, low-maintenance
                    solutions.
                </p>
                <a href="<?php echo $baseUrl; ?>/contact?interest=pumps" class="mt-3 inline-block text-xs font-semibold text-primary-300 hover:text-primary-200">
                    Get a quote &rarr;
                </a>
            </article>
        </div>

        <div class="rounded-2xl border border-primary-500/40 bg-primary-500/5 p-5 text-center">
            <h2 class="text-sm font-semibold text-primary-200">Need help choosing?</h2>
            <p class="mt-2 text-sm text-slate-200">
                Tell us your usage, location, and budget. We’ll recommend the right products and deliver to you.
            </p>
            <a href="<?php echo $baseUrl; ?>/contact" class="mt-3 inline-flex items-center justify-center rounded-full bg-primary-500 px-5 py-2.5 text-sm font-semibold text-slate-950 hover:bg-primary-600 transition-colors">
                Contact us for a quote
            </a>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/partials/layout-bottom.php';
?>
