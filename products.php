<?php
$pageTitle   = 'Products | LIGHTING AFRICA IN SOLAR';
$currentPage = 'products';
include __DIR__ . '/partials/layout-top.php';

// Categories with multiple items and "from" prices (KES – Kenyan Shillings)
$productCategories = [
    'panels' => [
        'title'   => 'Solar panels',
        'desc'    => 'Monocrystalline and polycrystalline panels for residential, commercial, and off-grid use. Tier-one brands, various wattages.',
        'interest' => 'panels',
        'image'   => 'category-panels.jpg', // fallback: solar-install-3.png
        'fallback_image' => 'solar-install-3.png',
        'items'   => [
            ['name' => 'Monocrystalline 100W',        'from' => 8500,  'note' => 'Ideal for small systems & lighting'],
            ['name' => 'Monocrystalline 200W',        'from' => 15000, 'note' => 'Residential & caravan'],
            ['name' => 'Polycrystalline 250W',        'from' => 12000, 'note' => 'Cost-effective option'],
            ['name' => 'Monocrystalline 330W',       'from' => 18500, 'note' => 'High efficiency, rooftop'],
            ['name' => 'Commercial 400W+',            'from' => 22000, 'note' => 'Large installations'],
        ],
    ],
    'inverters' => [
        'title'   => 'Inverters & charge controllers',
        'desc'    => 'Grid-tied, hybrid, and off-grid inverters. MPPT and PWM charge controllers for reliable energy conversion and battery charging.',
        'interest' => 'inverters',
        'image'   => 'category-inverters.jpg',
        'fallback_image' => 'solar-install-4.png',
        'items'   => [
            ['name' => 'PWM Charge controller 10A',  'from' => 2500,  'note' => 'Small systems'],
            ['name' => 'MPPT Charge controller 20A', 'from' => 6000,  'note' => 'Better efficiency'],
            ['name' => 'Pure sine inverter 1000W',   'from' => 15000, 'note' => 'Home backup'],
            ['name' => 'Hybrid inverter 3kW',       'from' => 45000, 'note' => 'Grid + solar + battery'],
            ['name' => 'Off-grid inverter 5kW',     'from' => 75000, 'note' => 'Standalone systems'],
        ],
    ],
    'batteries' => [
        'title'   => 'Batteries & storage',
        'desc'    => 'Solar batteries and energy storage for backup power and off-grid systems. Gel, AGM, and lithium options.',
        'interest' => 'batteries',
        'image'   => 'category-batteries.jpg',
        'fallback_image' => 'solar-install-5.png',
        'items'   => [
            ['name' => '12V 50Ah solar battery',    'from' => 9500,  'note' => 'Small backup'],
            ['name' => '12V 100Ah Gel',             'from' => 18000, 'note' => 'Deep cycle'],
            ['name' => '12V 200Ah AGM',             'from' => 32000, 'note' => 'Larger backup'],
            ['name' => 'Lithium 48V 5kWh',          'from' => 95000, 'note' => 'Long life, compact'],
            ['name' => 'Lithium 10kWh stack',       'from' => 165000,'note' => 'Home/business storage'],
        ],
    ],
    'systems' => [
        'title'   => 'Complete solar systems',
        'desc'    => 'Ready-to-install kits for homes, businesses, and farms. Sized for your load and location with mounting and cables included.',
        'interest' => 'systems',
        'image'   => 'category-systems.jpg',
        'fallback_image' => 'solar-install-3.png',
        'items'   => [
            ['name' => '100W home kit',              'from' => 25000, 'note' => 'Lighting & phone charging'],
            ['name' => '500W home system',           'from' => 65000, 'note' => 'Lights, TV, small loads'],
            ['name' => '1kW off-grid kit',           'from' => 120000,'note' => 'Full home backup'],
            ['name' => '3kW home/business',           'from' => 280000,'note' => 'Appliances & office'],
            ['name' => '5kW system',                  'from' => 420000,'note' => 'Larger homes & shops'],
        ],
    ],
    'accessories' => [
        'title'   => 'Accessories & balance of system',
        'desc'    => 'Cables, connectors, mounting hardware, meters, and other components to complete your installation.',
        'interest' => 'accessories',
        'image'   => 'category-accessories.jpg',
        'fallback_image' => 'solar-install-4.png',
        'items'   => [
            ['name' => 'MC4 connectors (pair)',     'from' => 350,   'note' => 'Panel connection'],
            ['name' => 'Solar cable 4mm (per m)',    'from' => 180,   'note' => 'DC wiring'],
            ['name' => 'Mounting kit (rooftop)',      'from' => 8000,  'note' => 'Rails & clamps'],
            ['name' => 'Energy meter',                'from' => 4500,  'note' => 'Monitor production'],
            ['name' => 'DC isolator',                 'from' => 2200, 'note' => 'Safety disconnect'],
        ],
    ],
    'pumps' => [
        'title'   => 'Solar pumps & irrigation',
        'desc'    => 'Solar water pumps and pump controllers for farms and remote water supply. Reliable, low-maintenance solutions.',
        'interest' => 'pumps',
        'image'   => 'category-pumps.jpg',
        'fallback_image' => 'solar-install-5.png',
        'items'   => [
            ['name' => '0.5HP solar pump',           'from' => 25000, 'note' => 'Borehole & tanks'],
            ['name' => '1HP solar pump',              'from' => 42000, 'note' => 'Deeper wells'],
            ['name' => 'Solar pump controller',      'from' => 12000, 'note' => 'Variable speed'],
            ['name' => 'Irrigation kit (pump + panels)', 'from' => 55000, 'note' => 'Complete solution'],
        ],
    ],
];

function formatPrice($kes) {
    return 'KES ' . number_format($kes);
}
?>

<section class="section-wrap py-14 sm:py-16">
    <div class="mx-auto max-w-6xl space-y-12">
        <header class="page-header text-center">
            <p class="section-label text-primary-600 dark:text-primary-400">Catalog</p>
            <h1 class="mt-2 text-3xl font-bold tracking-tight text-slate-800 dark:text-slate-50 sm:text-4xl">Solar products for every need</h1>
            <p class="mx-auto mt-3 max-w-2xl text-base leading-relaxed text-slate-600 dark:text-slate-300">
                Browse by category. Prices are indicative—contact us for exact quotes and delivery. We ship nationally and internationally.
            </p>
        </header>

        <?php if (file_exists(__DIR__ . '/assets/images/solar-install-3.png')): ?>
        <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-soft dark:border-slate-800 dark:bg-slate-900/60 dark:shadow-soft-dark">
            <img src="<?php echo $baseUrl; ?>/assets/images/solar-install-3.png" alt="Solar products we supply" class="h-48 w-full object-cover sm:h-56">
            <p class="px-4 py-3 text-sm text-slate-600 dark:text-slate-400">High-quality solar systems and components for homes and businesses</p>
        </div>
        <?php endif; ?>

        <?php foreach ($productCategories as $slug => $cat): ?>
        <section class="scroll-mt-6" id="<?php echo $slug; ?>">
            <div class="mb-6 flex flex-col gap-2 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <h2 class="text-xl font-bold text-slate-800 dark:text-slate-50 sm:text-2xl"><?php echo htmlspecialchars($cat['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
                    <p class="mt-1 max-w-2xl text-sm text-slate-600 dark:text-slate-400"><?php echo htmlspecialchars($cat['desc'], ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
                <a href="<?php echo $baseUrl; ?>/contact?interest=<?php echo $cat['interest']; ?>" class="mt-2 shrink-0 text-sm font-semibold text-primary-600 hover:text-primary-700 dark:text-primary-400 dark:hover:text-primary-300 sm:mt-0">
                    Get a quote for this category &rarr;
                </a>
            </div>
            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <?php
                $catImage = isset($cat['image']) ? $cat['image'] : '';
                $catImagePath = $catImage ? (__DIR__ . '/assets/images/' . $catImage) : '';
                $hasCatImage = $catImagePath && file_exists($catImagePath);
                if (!$hasCatImage && !empty($cat['fallback_image'])) {
                    $fallbackPath = __DIR__ . '/assets/images/' . $cat['fallback_image'];
                    if (file_exists($fallbackPath)) {
                        $catImage = $cat['fallback_image'];
                        $hasCatImage = true;
                    }
                }
                foreach ($cat['items'] as $item):
                ?>
                <article class="card-hover flex flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-soft dark:border-slate-800 dark:bg-slate-900/60 dark:shadow-soft-dark">
                    <div class="aspect-[16/10] w-full shrink-0 overflow-hidden bg-slate-100 dark:bg-slate-800">
                        <?php if ($hasCatImage): ?>
                            <img src="<?php echo $baseUrl; ?>/assets/images/<?php echo htmlspecialchars($catImage, ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?>" class="h-full w-full object-cover">
                        <?php else: ?>
                            <div class="flex h-full w-full items-center justify-center text-slate-400 dark:text-slate-500">
                                <svg class="h-12 w-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6z"/></svg>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="flex flex-1 flex-col gap-2 p-4">
                        <h3 class="font-semibold text-slate-800 dark:text-slate-50"><?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <?php if (!empty($item['note'])): ?>
                        <p class="text-xs text-slate-500 dark:text-slate-400"><?php echo htmlspecialchars($item['note'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <?php endif; ?>
                        <p class="mt-1 text-lg font-bold text-primary-600 dark:text-primary-400">From <?php echo formatPrice($item['from']); ?></p>
                        <a href="<?php echo $baseUrl; ?>/contact?interest=<?php echo $cat['interest']; ?>" class="mt-2 inline-block text-xs font-semibold text-primary-600 hover:text-primary-700 dark:text-primary-400 dark:hover:text-primary-300">
                            Request quote &rarr;
                        </a>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </section>
        <?php endforeach; ?>

        <div class="rounded-2xl border border-primary-200 bg-primary-50 p-6 text-center dark:border-primary-900/50 dark:bg-primary-500/10">
            <h2 class="text-sm font-semibold text-primary-700 dark:text-primary-200">Need help choosing?</h2>
            <p class="mt-2 text-sm text-slate-700 dark:text-slate-200">
                Tell us your usage, location, and budget. We’ll recommend the right products and deliver to you.
            </p>
            <a href="<?php echo $baseUrl; ?>/contact" class="mt-3 inline-flex items-center justify-center rounded-full bg-primary-500 px-5 py-2.5 text-sm font-semibold text-white hover:bg-primary-600 transition-colors">
                Contact us for a quote
            </a>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/partials/layout-bottom.php';
?>
