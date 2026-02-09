<?php
$pageTitle   = 'LIGHTING AFRICA IN SOLAR | Home';
$currentPage = 'home';
include __DIR__ . '/partials/layout-top.php';
?>

<section class="px-4 py-10 sm:py-14">
    <div class="mx-auto flex max-w-6xl flex-col gap-10 lg:flex-row lg:items-center">
        <div class="flex-1 space-y-6">
            <p class="inline-flex items-center gap-2 rounded-full border border-emerald-500/30 bg-emerald-500/5 px-3 py-1 text-xs font-medium uppercase tracking-wide text-emerald-300">
                <span class="h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
                Your trusted online solar supplier
            </p>
            <h1 class="text-balance text-3xl font-semibold tracking-tight text-slate-50 sm:text-4xl lg:text-5xl">
                High-quality solar products <span class="text-primary-300">for homes & businesses.</span>
            </h1>
            <p class="max-w-xl text-sm leading-relaxed text-slate-300 sm:text-base">
                LIGHTING AFRICA IN SOLAR is an online solar solutions provider specializing in supplying high-quality
                solar products. We make renewable energy accessible, affordable, and reliable through convenient online
                purchasing and delivery—nationally and internationally.
            </p>

            <div class="flex flex-wrap gap-3">
                <a href="<?php echo $baseUrl; ?>/products"
                   class="inline-flex items-center justify-center rounded-full bg-primary-500 px-5 py-2.5 text-sm font-semibold text-slate-950 shadow-lg shadow-primary-500/30 hover:bg-primary-600 transition-colors">
                    Browse products
                </a>
                <a href="<?php echo $baseUrl; ?>/contact"
                   class="inline-flex items-center justify-center rounded-full border border-slate-700 px-5 py-2.5 text-sm font-semibold text-slate-100 hover:border-primary-400 hover:text-primary-200 transition-colors">
                    Get a quote
                </a>
            </div>

            <dl class="mt-4 grid grid-cols-2 gap-4 text-xs text-slate-300 sm:text-sm sm:max-w-md">
                <div>
                    <dt class="font-semibold text-slate-100">Quality assured</dt>
                    <dd class="text-slate-400">Tier-one panels & trusted brands</dd>
                </div>
                <div>
                    <dt class="font-semibold text-slate-100">Secure ordering</dt>
                    <dd class="text-slate-400">Safe, simple online purchase</dd>
                </div>
                <div>
                    <dt class="font-semibold text-slate-100">Delivery nationwide & abroad</dt>
                    <dd class="text-slate-400">We ship where you need it</dd>
                </div>
                <div>
                    <dt class="font-semibold text-slate-100">Expert support</dt>
                    <dd class="text-slate-400">Guidance before and after purchase</dd>
                </div>
            </dl>
        </div>

        <div class="flex-1">
            <div class="relative mx-auto max-w-md">
                <div class="absolute -inset-12 rounded-full bg-primary-500/10 blur-3xl"></div>
                <div class="relative overflow-hidden rounded-3xl border border-slate-800 bg-slate-900/60 shadow-2xl">
                    <?php if (file_exists(__DIR__ . '/images/solar-install-3.png')): ?>
                        <img
                            src="<?php echo $baseUrl; ?>/images/solar-install-3.png"
                            alt="Solar installation – commercial rooftop"
                            class="h-64 w-full object-cover sm:h-80"
                        >
                    <?php else: ?>
                        <div class="flex h-64 w-full items-center justify-center bg-gradient-to-br from-slate-800 to-slate-900 sm:h-80">
                            <span class="text-sm text-slate-400">
                                Add <code>images/solar-install-3.png</code> for hero image
                            </span>
                        </div>
                    <?php endif; ?>
                    <div class="border-t border-slate-800 bg-slate-950/70 px-4 py-3 text-xs text-slate-300 flex items-center justify-between">
                        <span>Solar systems we supply & support</span>
                        <span class="inline-flex items-center gap-1 text-emerald-300">
                            <span class="h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
                            Order online
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="px-4 pb-10">
    <div class="mx-auto max-w-6xl">
        <h2 class="mb-6 text-center text-sm font-semibold uppercase tracking-wide text-slate-400">
            Who we serve
        </h2>
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            <div class="rounded-2xl border border-slate-800 bg-slate-900/60 p-5">
                <h3 class="text-sm font-semibold text-slate-50">Homeowners</h3>
                <p class="mt-2 text-sm text-slate-400">
                    Backup power and lower electricity costs with rooftop solar and storage. Browse systems and
                    components suited to your home.
                </p>
            </div>
            <div class="rounded-2xl border border-slate-800 bg-slate-900/60 p-5">
                <h3 class="text-sm font-semibold text-slate-50">Small & medium businesses</h3>
                <p class="mt-2 text-sm text-slate-400">
                    Reduce operating costs with reliable solar products. We supply panels, inverters, and complete
                    systems for shops, offices, and workshops.
                </p>
            </div>
            <div class="rounded-2xl border border-slate-800 bg-slate-900/60 p-5">
                <h3 class="text-sm font-semibold text-slate-50">Large companies & developers</h3>
                <p class="mt-2 text-sm text-slate-400">
                    Sustainable energy solutions at scale. Solar products for offices, factories, and new property
                    developments.
                </p>
            </div>
            <div class="rounded-2xl border border-slate-800 bg-slate-900/60 p-5">
                <h3 class="text-sm font-semibold text-slate-50">Farmers & agribusiness</h3>
                <p class="mt-2 text-sm text-slate-400">
                    Solar for irrigation, pumps, and remote power. Order pumps, panels, and batteries online with
                    delivery to your location.
                </p>
            </div>
            <div class="rounded-2xl border border-slate-800 bg-slate-900/60 p-5">
                <h3 class="text-sm font-semibold text-slate-50">Unreliable grid areas</h3>
                <p class="mt-2 text-sm text-slate-400">
                    Where the grid is weak or absent, we supply off-grid systems and components so you can power
                    your home or business independently.
                </p>
            </div>
            <div class="rounded-2xl border border-slate-800 bg-slate-900/60 p-5">
                <h3 class="text-sm font-semibold text-slate-50">International customers</h3>
                <p class="mt-2 text-sm text-slate-400">
                    We ship nationally and internationally. Wherever you are, you can browse our range and order
                    solar products online.
                </p>
            </div>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/partials/layout-bottom.php';
?>
