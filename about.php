<?php
$pageTitle   = 'About | LIGHTING AFRICA IN SOLAR';
$currentPage = 'about';
include __DIR__ . '/partials/layout-top.php';
?>

<section class="section-wrap py-14 sm:py-16">
    <div class="mx-auto max-w-6xl">
        <header class="page-header mb-10">
            <p class="section-label text-primary-600 dark:text-primary-400">Who we are</p>
            <h1 class="mt-2 text-3xl font-bold tracking-tight text-slate-800 dark:text-slate-50 sm:text-4xl">About LIGHTING AFRICA IN SOLAR</h1>
        </header>
        <div class="grid gap-10 lg:grid-cols-5 lg:gap-12">
            <div class="lg:col-span-3 space-y-6">
                <p class="text-base leading-relaxed text-slate-600 dark:text-slate-300">
                    LIGHTING AFRICA IN SOLAR is an online solar solutions provider specializing in supplying high-quality solar
                    products for homes and businesses. We focus on making renewable energy <strong class="text-slate-800 dark:text-slate-100">accessible</strong>,
                    <strong class="text-slate-800 dark:text-slate-100">affordable</strong>, and <strong class="text-slate-800 dark:text-slate-100">reliable</strong> through
                    convenient online purchasing and delivery—nationally and internationally.
                </p>
                <p class="text-base leading-relaxed text-slate-600 dark:text-slate-300">
                    Our website helps you browse products, get quotes, and order with confidence—wherever you are.
                </p>
                <div class="rounded-2xl border border-primary-200 bg-primary-50/80 p-5 dark:border-primary-900/50 dark:bg-primary-500/10">
                    <h2 class="text-sm font-bold uppercase tracking-wider text-primary-700 dark:text-primary-300">Our goal</h2>
                    <p class="mt-2 text-sm leading-relaxed text-slate-700 dark:text-slate-200">
                        To showcase and sell solar products online while educating customers about solar energy solutions. We make it easy to browse products, understand benefits, and purchase solar systems or components quickly and securely—building trust, generating leads, and positioning LIGHTING AFRICA IN SOLAR as your reliable online solar supplier.
                    </p>
                </div>
            </div>
            <div class="lg:col-span-2">
                <?php if (file_exists(__DIR__ . '/assets/images/solar-install-4.png')): ?>
                <div class="card-hover overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-soft dark:border-slate-800 dark:bg-slate-900/60 dark:shadow-soft-dark">
                    <img src="<?php echo $baseUrl; ?>/assets/images/solar-install-4.png" alt="Solar installation – LIGHTING AFRICA IN SOLAR" class="h-64 w-full object-cover sm:h-72">
                    <p class="px-4 py-3 text-sm text-slate-600 dark:text-slate-400">Quality solar solutions we supply</p>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="mt-12 grid gap-6 sm:grid-cols-2">
            <div class="card-hover rounded-2xl border border-slate-200 bg-white p-6 shadow-soft dark:border-slate-800 dark:bg-slate-900/60 dark:shadow-soft-dark">
                <div class="mb-3 inline-flex items-center gap-2 rounded-full bg-primary-50 px-2.5 py-1 text-[11px] font-semibold uppercase tracking-wide text-primary-700 dark:bg-primary-500/10 dark:text-primary-300">
                    <span class="h-1.5 w-1.5 rounded-full bg-primary-500 dark:bg-primary-300"></span>
                    <span>Our mission</span>
                </div>
                <h2 class="text-base font-bold text-slate-800 dark:text-slate-50">Empowering solar online</h2>
                <p class="mt-2 text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                    To be your trusted online source for solar products—helping individuals and organizations reduce energy costs,
                    gain backup power, and adopt clean energy by making it easy to browse, understand, and buy solar systems and
                    components securely online.
                </p>
            </div>
            <div class="card-hover rounded-2xl border border-slate-200 bg-white p-6 shadow-soft dark:border-slate-800 dark:bg-slate-900/60 dark:shadow-soft-dark">
                <div class="mb-3 inline-flex items-center gap-2 rounded-full bg-emerald-50 px-2.5 py-1 text-[11px] font-semibold uppercase tracking-wide text-emerald-700 dark:bg-emerald-500/10 dark:text-emerald-300">
                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-500 dark:bg-emerald-300"></span>
                    <span>Where we deliver</span>
                </div>
                <h2 class="text-base font-bold text-slate-800 dark:text-slate-50">Serving you wherever you are</h2>
                <p class="mt-2 text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                    We serve customers nationally and internationally. Whether you’re a homeowner, a business, a farmer, or a developer,
                    you can order our solar products online and have them delivered to your location.
                </p>
            </div>
        </div>

        <section class="mt-12">
            <h2 class="mb-4 text-lg font-bold text-slate-800 dark:text-slate-50">Who we serve</h2>
            <p class="mb-4 text-sm text-slate-600 dark:text-slate-300">Our website is designed for anyone looking for reliable solar energy solutions:</p>
            <ul class="grid gap-2 text-sm text-slate-600 dark:text-slate-300 sm:grid-cols-2">
                <li class="flex items-start gap-2"><span class="mt-1 h-1.5 w-1.5 shrink-0 rounded-full bg-primary-500"></span> Homeowners wanting backup power or lower electricity costs</li>
                <li class="flex items-start gap-2"><span class="mt-1 h-1.5 w-1.5 shrink-0 rounded-full bg-primary-500"></span> Small and medium businesses wanting to lower operating costs</li>
                <li class="flex items-start gap-2"><span class="mt-1 h-1.5 w-1.5 shrink-0 rounded-full bg-primary-500"></span> Large companies looking for sustainable energy solutions</li>
                <li class="flex items-start gap-2"><span class="mt-1 h-1.5 w-1.5 shrink-0 rounded-full bg-primary-500"></span> Property developers installing solar in new projects</li>
                <li class="flex items-start gap-2"><span class="mt-1 h-1.5 w-1.5 shrink-0 rounded-full bg-primary-500"></span> Farmers needing solar for irrigation, pumps, or remote power</li>
                <li class="flex items-start gap-2"><span class="mt-1 h-1.5 w-1.5 shrink-0 rounded-full bg-primary-500"></span> People in areas with unreliable electricity supply</li>
            </ul>
        </section>

        <section class="mt-12">
            <div class="mb-6 text-center sm:text-left">
                <p class="section-label text-primary-600 dark:text-primary-400">Why choose us</p>
                <h2 class="mt-2 text-lg font-bold text-slate-800 dark:text-slate-50 sm:text-xl">Why customers trust LIGHTING AFRICA IN SOLAR</h2>
            </div>
            <div class="grid gap-5 sm:grid-cols-2">
                <div class="card-hover rounded-2xl border border-slate-200 bg-white p-5 shadow-soft dark:border-slate-800 dark:bg-slate-900/60 dark:shadow-soft-dark">
                    <div class="mb-2 flex items-center gap-2 text-primary-600 dark:text-primary-300">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7 20h10a2 2 0 002-2V6a2 2 0 00-2-2H7a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span class="text-sm font-semibold text-slate-800 dark:text-slate-50">Quality products</span>
                    </div>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                        High-quality solar panels, inverters, batteries, and components from trusted brands—carefully selected for performance and reliability.
                    </p>
                </div>
                <div class="card-hover rounded-2xl border border-slate-200 bg-white p-5 shadow-soft dark:border-slate-800 dark:bg-slate-900/60 dark:shadow-soft-dark">
                    <div class="mb-2 flex items-center gap-2 text-primary-600 dark:text-primary-300">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21V3m4 18h6a2 2 0 002-2v-5a2 2 0 00-2-2h-3"/></svg>
                        <span class="text-sm font-semibold text-slate-800 dark:text-slate-50">Simple online experience</span>
                    </div>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                        Browse, compare, and request quotes in a few clicks. Clear information so you understand what you’re buying.
                    </p>
                </div>
                <div class="card-hover rounded-2xl border border-slate-200 bg-white p-5 shadow-soft dark:border-slate-800 dark:bg-slate-900/60 dark:shadow-soft-dark">
                    <div class="mb-2 flex items-center gap-2 text-primary-600 dark:text-primary-300">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h2l2 9h11l2-6H9m12-3h-5M5 21h14"/></svg>
                        <span class="text-sm font-semibold text-slate-800 dark:text-slate-50">Reliable delivery</span>
                    </div>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                        Convenient online ordering with delivery to your door, nationally and internationally.
                    </p>
                </div>
                <div class="card-hover rounded-2xl border border-slate-200 bg-white p-5 shadow-soft dark:border-slate-800 dark:bg-slate-900/60 dark:shadow-soft-dark">
                    <div class="mb-2 flex items-center gap-2 text-primary-600 dark:text-primary-300">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9l-6 6-3-3m9-7a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span class="text-sm font-semibold text-slate-800 dark:text-slate-50">Support & trust</span>
                    </div>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                        We build long-term relationships through honest advice, secure checkout, and support before and after your purchase.
                    </p>
                </div>
            </div>
        </section>

        <!-- Contact strip -->
        <div class="mt-12 rounded-2xl border border-slate-200 bg-slate-100/80 p-6 dark:border-slate-800 dark:bg-slate-900/40">
            <h2 class="text-sm font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Contact us</h2>
            <p class="mt-2 font-semibold text-slate-800 dark:text-slate-100">Call &amp; WhatsApp: <a href="https://wa.me/27603967999" target="_blank" rel="noopener noreferrer" class="text-primary-600 hover:underline dark:text-primary-400"><?php echo isset($sitePhone) ? htmlspecialchars($sitePhone, ENT_QUOTES, 'UTF-8') : '+27 603967999'; ?></a></p>
            <?php if (!empty($siteWhatsApp)): ?>
            <p class="text-slate-600 dark:text-slate-300">WhatsApp: <a href="https://wa.me/27715323926" target="_blank" rel="noopener noreferrer" class="text-primary-600 hover:underline dark:text-primary-400"><?php echo htmlspecialchars($siteWhatsApp, ENT_QUOTES, 'UTF-8'); ?></a></p>
            <?php endif; ?>
            <p class="text-slate-600 dark:text-slate-300"><a href="mailto:<?php echo isset($siteEmail) ? htmlspecialchars($siteEmail, ENT_QUOTES, 'UTF-8') : ''; ?>" class="text-primary-600 hover:underline dark:text-primary-400"><?php echo isset($siteEmail) ? htmlspecialchars($siteEmail, ENT_QUOTES, 'UTF-8') : ''; ?></a></p>
            <p class="mt-1 text-sm text-slate-500 dark:text-slate-400"><?php echo isset($siteAddress) ? htmlspecialchars($siteAddress, ENT_QUOTES, 'UTF-8') : 'Nairobi, Kenya'; ?> — Nationally & internationally</p>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/partials/layout-bottom.php';
?>
