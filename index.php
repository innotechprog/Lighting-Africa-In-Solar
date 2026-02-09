<?php
$pageTitle   = 'LIGHTING AFRICA IN SOLAR | Home';
$currentPage = 'home';
include __DIR__ . '/partials/layout-top.php';
?>

<section class="section-wrap py-12 sm:py-16 lg:py-20">
    <div class="mx-auto flex max-w-6xl flex-col gap-12 lg:flex-row lg:items-center lg:gap-16">
        <div class="flex-1 space-y-6">
            <p class="inline-flex items-center gap-2 rounded-full border border-emerald-500/30 bg-emerald-500/10 px-3 py-1.5 text-xs font-medium uppercase tracking-wide text-emerald-700 dark:bg-emerald-500/5 dark:text-emerald-300">
                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500 dark:bg-emerald-400"></span>
                Your trusted online solar supplier
            </p>
            <h1 class="text-balance font-bold tracking-tight text-slate-800 dark:text-slate-50" style="font-size: 24px;">
                <span class="text-primary-600 dark:text-primary-300">LIGHTING AFRICA IN SOLAR</span>
            </h1>
            <p class="max-w-xl text-base leading-relaxed text-slate-600 dark:text-slate-300">
                Your online solar solutions provider—supplying high-quality solar products for homes and businesses. We make renewable energy <strong class="text-slate-800 dark:text-slate-100">accessible</strong>, <strong class="text-slate-800 dark:text-slate-100">affordable</strong>, and <strong class="text-slate-800 dark:text-slate-100">reliable</strong> through convenient online purchasing and delivery—nationally and internationally.
            </p>

            <div class="flex flex-wrap gap-3">
                <a href="<?php echo $baseUrl; ?>/products"
                   class="inline-flex items-center justify-center rounded-full bg-primary-500 px-6 py-3 text-sm font-semibold text-white shadow-soft shadow-primary-500/20 hover:bg-primary-600 transition-all duration-200 hover:shadow-lg hover:shadow-primary-500/25">
                    Browse products
                </a>
                <a href="<?php echo $baseUrl; ?>/contact?type=quote"
                   class="inline-flex items-center justify-center rounded-full border-2 border-slate-300 px-6 py-3 text-sm font-semibold text-slate-700 hover:border-primary-500 hover:bg-primary-50 hover:text-primary-700 dark:border-slate-600 dark:text-slate-200 dark:hover:border-primary-400 dark:hover:bg-primary-500/10 dark:hover:text-primary-200 transition-all duration-200">
                    Get a quote
                </a>
            </div>

            <dl class="grid grid-cols-2 gap-x-6 gap-y-3 text-sm sm:max-w-md">
                <div class="rounded-xl bg-slate-100/80 p-3 dark:bg-slate-800/50">
                    <dt class="font-semibold text-slate-800 dark:text-slate-100">Quality assured</dt>
                    <dd class="text-slate-500 dark:text-slate-400">Tier-one panels & trusted brands</dd>
                </div>
                <div class="rounded-xl bg-slate-100/80 p-3 dark:bg-slate-800/50">
                    <dt class="font-semibold text-slate-800 dark:text-slate-100">Secure ordering</dt>
                    <dd class="text-slate-500 dark:text-slate-400">Safe, simple online purchase</dd>
                </div>
                <div class="rounded-xl bg-slate-100/80 p-3 dark:bg-slate-800/50">
                    <dt class="font-semibold text-slate-800 dark:text-slate-100">Delivery nationwide & abroad</dt>
                    <dd class="text-slate-500 dark:text-slate-400">We ship where you need it</dd>
                </div>
                <div class="rounded-xl bg-slate-100/80 p-3 dark:bg-slate-800/50">
                    <dt class="font-semibold text-slate-800 dark:text-slate-100">Expert support</dt>
                    <dd class="text-slate-500 dark:text-slate-400">Guidance before and after purchase</dd>
                </div>
            </dl>
        </div>

        <div class="flex-1">
            <div class="relative mx-auto max-w-md">
                <div class="absolute -inset-8 rounded-3xl bg-primary-500/10 blur-3xl dark:bg-primary-500/5"></div>
                <div class="relative overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-soft dark:border-slate-800 dark:bg-slate-900/80 dark:shadow-soft-dark transition-colors duration-200">
                    <?php if (file_exists(__DIR__ . '/assets/images/solar-install-3.png')): ?>
                        <img
                            src="<?php echo $baseUrl; ?>/assets/images/solar-install-3.png"
                            alt="Solar installation – commercial rooftop"
                            class="h-72 w-full object-cover sm:h-96"
                        >
                    <?php else: ?>
                        <div class="flex h-72 w-full items-center justify-center bg-gradient-to-br from-slate-200 to-slate-300 dark:from-slate-800 dark:to-slate-900 sm:h-96">
                            <span class="text-sm text-slate-500 dark:text-slate-400">Hero image</span>
                        </div>
                    <?php endif; ?>
                    <div class="border-t border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-600 dark:border-slate-700 dark:bg-slate-900/80 dark:text-slate-300 flex items-center justify-between">
                        <span>Solar systems we supply & support</span>
                        <span class="inline-flex items-center gap-1.5 font-medium text-emerald-600 dark:text-emerald-400">
                            <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                            Order online
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Website goal -->
<section class="border-y border-slate-200 bg-slate-100/50 py-12 dark:border-slate-800 dark:bg-slate-900/30">
    <div class="section-wrap mx-auto max-w-4xl text-center">
        <p class="section-label text-primary-600 dark:text-primary-400">Why we're here</p>
        <h2 class="mt-2 text-xl font-bold text-slate-800 dark:text-slate-50 sm:text-2xl">Our goal</h2>
        <p class="mt-3 text-base leading-relaxed text-slate-600 dark:text-slate-300 sm:text-lg">
            We showcase and sell solar products online while educating customers about solar energy solutions. Our site makes it easy to browse products, understand their benefits, and purchase solar systems or components quickly and securely. We build trust, generate leads, and position LIGHTING AFRICA IN SOLAR as your reliable online solar supplier.
        </p>
    </div>
</section>

<!-- Featured products -->
<section class="section-wrap py-12 sm:py-16">
    <div class="mx-auto max-w-6xl">
        <div class="mb-10 text-center">
            <p class="section-label text-primary-600 dark:text-primary-400">What we supply</p>
            <h2 class="mt-2 text-2xl font-bold text-slate-800 dark:text-slate-50 sm:text-3xl">Featured products</h2>
            <p class="mx-auto mt-3 max-w-xl text-slate-600 dark:text-slate-400">Quality solar products for every need—order online with delivery nationwide and internationally.</p>
        </div>
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <?php
            $featuredProducts = [
                [
                    'name'        => 'Solar panels',
                    'description' => 'Monocrystalline & polycrystalline panels for home, business & off-grid. Tier-one brands, various wattages.',
                    'image'       => 'solar panel.jpg',
                    'quote'       => 'panels',
                ],
                [
                    'name'        => 'Inverters & charge controllers',
                    'description' => 'Grid-tied, hybrid & off-grid inverters. MPPT and PWM controllers for reliable conversion.',
                    'image'       => 'inverter.jpg',
                    'quote'       => 'inverters',
                ],
                [
                    'name'        => 'Batteries & storage',
                    'description' => 'Solar batteries for backup and off-grid. Gel, AGM and lithium options available.',
                    'image'       => 'solar-install-5.png',
                    'quote'       => 'batteries',
                ],
                [
                    'name'        => 'Complete solar systems',
                    'description' => 'Ready-to-install kits for homes and businesses. Sized to your load, mounting & cables included.',
                    'image'       => 'solar-install-3.png',
                    'quote'       => 'systems',
                ],
            ];
            foreach ($featuredProducts as $i => $prod):
                $imgPath = __DIR__ . '/assets/images/' . $prod['image'];
                $hasImage = file_exists($imgPath);
            ?>
            <a href="<?php echo $baseUrl; ?>/contact?interest=<?php echo urlencode($prod['quote']); ?>" class="group card-hover flex flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-soft dark:border-slate-800 dark:bg-slate-900/60 dark:shadow-soft-dark focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 dark:focus:ring-offset-slate-900">
                <div class="relative aspect-[4/3] overflow-hidden bg-slate-100 dark:bg-slate-800">
                    <?php if ($hasImage): ?>
                        <img src="<?php echo $baseUrl; ?>/assets/images/<?php echo htmlspecialchars($prod['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($prod['name'], ENT_QUOTES, 'UTF-8'); ?>" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105">
                    <?php else: ?>
                        <div class="flex h-full w-full items-center justify-center text-slate-400 dark:text-slate-500">
                            <svg class="h-14 w-14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6z"/></svg>
                        </div>
                    <?php endif; ?>
                    <span class="absolute right-3 top-3 rounded-full bg-white/90 px-2.5 py-1 text-xs font-semibold text-slate-700 shadow-sm dark:bg-slate-800/90 dark:text-slate-200">Get quote</span>
                </div>
                <div class="flex flex-1 flex-col p-4">
                    <h3 class="font-semibold text-slate-800 dark:text-slate-50 group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors"><?php echo htmlspecialchars($prod['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                    <p class="mt-2 flex-1 text-sm leading-relaxed text-slate-600 dark:text-slate-400"><?php echo htmlspecialchars($prod['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                    <span class="mt-3 inline-flex items-center text-sm font-semibold text-primary-600 dark:text-primary-400">
                        Request a quote
                        <svg class="ml-1 h-4 w-4 transition-transform group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </span>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
        <p class="mt-8 text-center">
            <a href="<?php echo $baseUrl; ?>/products" class="inline-flex items-center rounded-full border-2 border-primary-500 bg-transparent px-6 py-2.5 text-sm font-semibold text-primary-600 hover:bg-primary-50 dark:text-primary-400 dark:hover:bg-primary-500/10 transition-colors">
                View all products
                <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </p>
    </div>
</section>

<!-- Image gallery -->
<section class="border-y border-slate-200 bg-slate-100/40 py-12 dark:border-slate-800 dark:bg-slate-900/30">
    <div class="section-wrap mx-auto max-w-6xl">
        <h2 class="mb-8 text-center text-xl font-bold text-slate-800 dark:text-slate-50 sm:text-2xl">Solar solutions in action</h2>
        <div class="grid gap-6 sm:grid-cols-3">
            <?php
            $galleryImages = [
                ['file' => 'solar-install-3.png', 'alt' => 'Commercial rooftop solar installation', 'caption' => 'Commercial & industrial'],
                ['file' => 'solar-install-4.png', 'alt' => 'Solar panel installation', 'caption' => 'Residential & off-grid'],
                ['file' => 'solar-install-5.png', 'alt' => 'Solar installation project', 'caption' => 'Projects we supply'],
            ];
            foreach ($galleryImages as $img):
                $path = __DIR__ . '/assets/images/' . $img['file'];
                if (!file_exists($path)) continue;
            ?>
            <div class="card-hover overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-soft dark:border-slate-800 dark:bg-slate-900/60 dark:shadow-soft-dark">
                <img src="<?php echo $baseUrl; ?>/assets/images/<?php echo $img['file']; ?>" alt="<?php echo htmlspecialchars($img['alt'], ENT_QUOTES, 'UTF-8'); ?>" class="h-52 w-full object-cover sm:h-60">
                <p class="px-4 py-3 text-sm font-medium text-slate-700 dark:text-slate-200"><?php echo htmlspecialchars($img['caption'], ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section-wrap pb-14 sm:pb-20">
    <div class="mx-auto max-w-6xl">
        <p class="section-label mb-2 text-center text-primary-600 dark:text-primary-400">Who we serve</p>
        <h2 class="mb-2 text-center text-2xl font-bold text-slate-800 dark:text-slate-50 sm:text-3xl">Our customers</h2>
        <p class="mb-8 text-center text-slate-600 dark:text-slate-400">We serve customers nationally and internationally.</p>
        <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">
            <div class="card-hover rounded-2xl border border-slate-200 bg-white p-5 shadow-soft dark:border-slate-800 dark:bg-slate-900/60 dark:shadow-soft-dark">
                <h3 class="font-semibold text-slate-800 dark:text-slate-50">Homeowners</h3>
                <p class="mt-2 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                    Backup power and lower electricity costs with rooftop solar and storage. Browse systems and components suited to your home.
                </p>
            </div>
            <div class="card-hover rounded-2xl border border-slate-200 bg-white p-5 shadow-soft dark:border-slate-800 dark:bg-slate-900/60 dark:shadow-soft-dark">
                <h3 class="font-semibold text-slate-800 dark:text-slate-50">Small & medium businesses</h3>
                <p class="mt-2 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                    Reduce operating costs with reliable solar products. We supply panels, inverters, and complete systems for shops, offices, and workshops.
                </p>
            </div>
            <div class="card-hover rounded-2xl border border-slate-200 bg-white p-5 shadow-soft dark:border-slate-800 dark:bg-slate-900/60 dark:shadow-soft-dark">
                <h3 class="font-semibold text-slate-800 dark:text-slate-50">Large companies & developers</h3>
                <p class="mt-2 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                    Sustainable energy solutions at scale. Solar products for offices, factories, and new property developments.
                </p>
            </div>
            <div class="card-hover rounded-2xl border border-slate-200 bg-white p-5 shadow-soft dark:border-slate-800 dark:bg-slate-900/60 dark:shadow-soft-dark">
                <h3 class="font-semibold text-slate-800 dark:text-slate-50">Farmers & agribusiness</h3>
                <p class="mt-2 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                    Solar for irrigation, pumps, and remote power. Order pumps, panels, and batteries online with delivery to your location.
                </p>
            </div>
            <div class="card-hover rounded-2xl border border-slate-200 bg-white p-5 shadow-soft dark:border-slate-800 dark:bg-slate-900/60 dark:shadow-soft-dark">
                <h3 class="font-semibold text-slate-800 dark:text-slate-50">Unreliable grid areas</h3>
                <p class="mt-2 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                    Where the grid is weak or absent, we supply off-grid systems and components so you can power your home or business independently.
                </p>
            </div>
            <div class="card-hover rounded-2xl border border-slate-200 bg-white p-5 shadow-soft dark:border-slate-800 dark:bg-slate-900/60 dark:shadow-soft-dark">
                <h3 class="font-semibold text-slate-800 dark:text-slate-50">International customers</h3>
                <p class="mt-2 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                    We ship nationally and internationally. Wherever you are, you can browse our range and order solar products online.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Why choose us -->
<section class="section-wrap py-14 sm:py-16">
    <div class="mx-auto max-w-6xl">
        <div class="mb-12 text-center">
            <p class="section-label text-primary-600 dark:text-primary-400">Why choose us</p>
            <h2 class="mt-2 text-2xl font-bold text-slate-800 dark:text-slate-50 sm:text-3xl">Reasons to buy from LIGHTING AFRICA IN SOLAR</h2>
            <p class="mx-auto mt-3 max-w-2xl text-slate-600 dark:text-slate-400">We make going solar simple, transparent, and reliable—from browse to delivery.</p>
        </div>
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <div class="card-hover group relative rounded-2xl border border-slate-200 bg-white p-6 shadow-soft dark:border-slate-800 dark:bg-slate-900/60 dark:shadow-soft-dark">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-500/10 text-primary-600 transition-colors group-hover:bg-primary-500/20 dark:text-primary-400">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                </div>
                <h3 class="font-bold text-slate-800 dark:text-slate-50">Quality products</h3>
                <p class="mt-2 text-sm leading-relaxed text-slate-600 dark:text-slate-400">Tier-one panels, trusted inverter and battery brands, and reliable components—so your system performs for years.</p>
            </div>
            <div class="card-hover group relative rounded-2xl border border-slate-200 bg-white p-6 shadow-soft dark:border-slate-800 dark:bg-slate-900/60 dark:shadow-soft-dark">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-500/10 text-primary-600 transition-colors group-hover:bg-primary-500/20 dark:text-primary-400">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-slate-800 dark:text-slate-50">Fair, clear pricing</h3>
                <p class="mt-2 text-sm leading-relaxed text-slate-600 dark:text-slate-400">Transparent "from" prices and no hidden fees. Get a quote tailored to your needs and budget.</p>
            </div>
            <div class="card-hover group relative rounded-2xl border border-slate-200 bg-white p-6 shadow-soft dark:border-slate-800 dark:bg-slate-900/60 dark:shadow-soft-dark">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-500/10 text-primary-600 transition-colors group-hover:bg-primary-500/20 dark:text-primary-400">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/></svg>
                </div>
                <h3 class="font-bold text-slate-800 dark:text-slate-50">Nationwide & international delivery</h3>
                <p class="mt-2 text-sm leading-relaxed text-slate-600 dark:text-slate-400">We ship to your door—whether you're in Kenya or abroad. Reliable delivery so you get your order on time.</p>
            </div>
            <div class="card-hover group relative rounded-2xl border border-slate-200 bg-white p-6 shadow-soft dark:border-slate-800 dark:bg-slate-900/60 dark:shadow-soft-dark">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-500/10 text-primary-600 transition-colors group-hover:bg-primary-500/20 dark:text-primary-400">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                </div>
                <h3 class="font-bold text-slate-800 dark:text-slate-50">Expert support</h3>
                <p class="mt-2 text-sm leading-relaxed text-slate-600 dark:text-slate-400">Sizing help, product advice, and post-purchase support. We're here so you choose right and get the most from your system.</p>
            </div>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/partials/layout-bottom.php';
?>
