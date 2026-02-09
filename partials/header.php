<?php
// Determine current path for active link highlighting (fallback to $currentPage if provided)
$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$path = rtrim($path, '/');
$pathWithoutBase = $path;
if (isset($baseUrl) && $baseUrl !== '' && strpos($path, $baseUrl) === 0) {
    $pathWithoutBase = substr($path, strlen($baseUrl)) ?: '/';
}
$pathWithoutBase = $pathWithoutBase === '' ? '/' : $pathWithoutBase;

function navLinkClass(string $slug, string $path, string $currentPage): string {
    $isActive = ($slug === 'home' && ($path === '/' || $currentPage === 'home'))
        || ($slug !== 'home' && (strpos($path, '/' . $slug) === 0 || $currentPage === $slug));

    return $isActive
        ? 'text-primary-600 border-primary-500 dark:text-primary-300 dark:border-primary-400'
        : 'text-slate-600 border-transparent hover:text-primary-600 hover:border-primary-500 dark:text-slate-200 dark:hover:text-primary-200 dark:hover:border-primary-500';
}
$base = isset($baseUrl) ? $baseUrl : '';

// Product categories used in the Products dropdown.
// These map to section IDs on the products page (e.g. /products#panels).
$productCategories = [
    ['label' => 'Solar panels',                'slug' => 'panels'],
    ['label' => 'Inverters & charge controllers', 'slug' => 'inverters'],
    ['label' => 'Batteries & storage',         'slug' => 'batteries'],
    ['label' => 'Complete solar systems',      'slug' => 'systems'],
    ['label' => 'Accessories & BOS',           'slug' => 'accessories'],
    ['label' => 'Solar pumps & irrigation',    'slug' => 'pumps'],
];
?>
<header class="border-b border-slate-200 bg-white/95 backdrop-blur-sm dark:border-slate-800 dark:bg-slate-950/95 transition-colors duration-200 sticky top-0 z-40">
    <div class="mx-auto flex min-h-14 max-w-6xl items-center justify-between gap-3 px-3 md:min-h-20 md:px-4">
        <!-- Logo: compact on mobile -->
        <a href="<?php echo $base ? $base . '/' : '/'; ?>" class="flex flex-shrink-0 items-center gap-2 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 rounded-lg md:gap-0" aria-label="LIGHTING AFRICA IN SOLAR – Home">
            <span class="flex h-10 w-10 flex-shrink-0 overflow-hidden rounded-lg bg-slate-100 dark:bg-slate-800 md:h-16 md:w-16">
                <?php if (file_exists(__DIR__ . '/../assets/images/logo.png')): ?>
                    <img src="<?php echo $base; ?>/assets/images/logo.png" alt="" class="h-full w-full object-cover">
                <?php else: ?>
                    <span class="flex h-full w-full items-center justify-center text-xs font-bold text-primary-500 dark:text-primary-400">LA</span>
                <?php endif; ?>
            </span>
            <span class="hidden text-sm font-semibold tracking-tight text-slate-800 dark:text-slate-100 sm:inline md:text-base">LIGHTING AFRICA IN SOLAR</span>
        </a>

        <!-- Desktop: contact bar + nav (two rows in one column) -->
        <div class="hidden min-w-0 flex-1 flex-col md:flex">
            <div class="flex items-center justify-between gap-2 border-b border-slate-200 px-3 py-1.5 text-xs text-slate-500 dark:border-slate-800 dark:text-slate-400">
                <div class="flex min-w-0 items-center gap-2">
                    <a href="https://wa.me/27603967999" target="_blank" rel="noopener noreferrer" class="shrink-0 hover:text-primary-600 dark:hover:text-primary-300"><?php echo isset($sitePhone) ? htmlspecialchars($sitePhone, ENT_QUOTES, 'UTF-8') : '+27 603967999'; ?></a>
                    <span class="hidden h-3 w-px bg-slate-300 dark:bg-slate-600 sm:block" aria-hidden="true"></span>
                    <a href="mailto:<?php echo isset($siteEmail) ? htmlspecialchars($siteEmail, ENT_QUOTES, 'UTF-8') : ''; ?>" class="min-w-0 truncate hover:text-primary-600 dark:hover:text-primary-300"><?php echo isset($siteEmail) ? htmlspecialchars($siteEmail, ENT_QUOTES, 'UTF-8') : ''; ?></a>
                </div>
            </div>
            <nav class="relative flex min-h-12 w-full items-center justify-between gap-4 px-3 py-2">
                <ul class="hidden flex-1 items-center gap-6 text-sm font-semibold text-slate-700 dark:text-slate-200 md:flex">
                    <li>
                        <a href="<?php echo $base ? $base . '/' : '/'; ?>"
                           class="inline-flex items-center border-b-2 border-transparent pb-1.5 pt-0.5 <?php echo navLinkClass('home', $pathWithoutBase, $currentPage); ?>">
                            Home
                        </a>
                    </li>
                    <li class="relative group">
                        <a href="<?php echo $base; ?>/products"
                           class="inline-flex items-center gap-0.5 border-b-2 border-transparent pb-1.5 pt-0.5 <?php echo navLinkClass('products', $pathWithoutBase, $currentPage); ?>">
                            Products
                            <svg class="h-4 w-4 shrink-0 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </a>
                        <div class="absolute left-0 top-full z-20 pt-1 opacity-0 invisible transition-[opacity,visibility] duration-150 group-hover:opacity-100 group-hover:visible group-focus-within:opacity-100 group-focus-within:visible">
                            <div class="min-w-[220px] rounded-xl border border-slate-200 bg-white py-1.5 shadow-lg dark:border-slate-700 dark:bg-slate-900">
                                <a href="<?php echo $base; ?>/products" class="block border-b border-slate-100 px-4 py-2 text-sm font-medium text-primary-600 hover:bg-primary-50 dark:border-slate-800 dark:text-primary-400 dark:hover:bg-primary-500/10">All products</a>
                                <?php foreach ($productCategories as $cat): ?>
                                <a href="<?php echo $base; ?>/products#<?php echo htmlspecialchars($cat['slug'], ENT_QUOTES, 'UTF-8'); ?>" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-primary-600 dark:text-slate-300 dark:hover:bg-slate-800 dark:hover:text-primary-400"><?php echo htmlspecialchars($cat['label'], ENT_QUOTES, 'UTF-8'); ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo $base; ?>/about"
                           class="inline-flex items-center border-b-2 border-transparent pb-1.5 pt-0.5 <?php echo navLinkClass('about', $pathWithoutBase, $currentPage); ?>">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $base; ?>/services"
                           class="inline-flex items-center border-b-2 border-transparent pb-1.5 pt-0.5 <?php echo navLinkClass('services', $pathWithoutBase, $currentPage); ?>">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $base; ?>/contact"
                           class="inline-flex items-center border-b-2 border-transparent pb-1.5 pt-0.5 <?php echo navLinkClass('contact', $pathWithoutBase, $currentPage); ?>">
                            Contact
                        </a>
                    </li>
                </ul>
                <a href="<?php echo $base; ?>/contact?type=quote"
                   class="hidden rounded-full border border-primary-500 bg-primary-500 px-4 pb-1.5 pt-1 text-sm font-semibold text-white shadow-sm shadow-primary-500/40 transition-colors hover:bg-primary-600 hover:text-white md:inline-block md:shrink-0">
                    Request quote
                </a>
            </nav>
        </div>

        <!-- Mobile: theme + hamburger (large tap targets) -->
        <div class="flex flex-shrink-0 items-center gap-1 md:hidden">
            <button id="theme-toggle" type="button" class="inline-flex h-11 w-11 items-center justify-center rounded-full text-slate-600 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-800" aria-label="Toggle light/dark mode">
                <span class="dark:hidden" aria-hidden="true"><svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"/></svg></span>
                <span class="hidden dark:inline" aria-hidden="true"><svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"/></svg></span>
            </button>
            <button id="mobile-nav-toggle" type="button" class="inline-flex h-11 w-11 items-center justify-center rounded-full text-slate-700 hover:bg-slate-100 dark:text-slate-200 dark:hover:bg-slate-800" aria-label="Open menu" aria-expanded="false">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>
    </div>

    <!-- Mobile menu backdrop (tap to close) -->
    <div id="mobile-nav-backdrop" class="fixed inset-0 z-20 bg-black/50 backdrop-blur-[2px] md:hidden hidden opacity-0 transition-opacity duration-200" aria-hidden="true"></div>

    <!-- Mobile menu panel (full-width below header) -->
    <div id="mobile-nav-menu" class="absolute left-0 right-0 top-full z-30 max-h-[calc(100vh-3.5rem)] overflow-y-auto border-b border-slate-200 bg-white shadow-lg dark:border-slate-800 dark:bg-slate-900 md:hidden hidden opacity-0 -translate-y-2 transition-all duration-200 ease-out" aria-hidden="true">
        <div class="mx-auto max-w-6xl px-4 py-4">
            <div class="mb-4 rounded-xl bg-slate-50 dark:bg-slate-800/50 p-3 text-xs">
                <p class="font-medium text-slate-500 dark:text-slate-400 mb-2">Contact</p>
                <a href="https://wa.me/27603967999" target="_blank" rel="noopener noreferrer" class="block py-1.5 text-slate-700 dark:text-slate-200 hover:text-primary-600 dark:hover:text-primary-400"><?php echo isset($sitePhone) ? htmlspecialchars($sitePhone, ENT_QUOTES, 'UTF-8') : '+27 603967999'; ?></a>
                <a href="mailto:<?php echo isset($siteEmail) ? htmlspecialchars($siteEmail, ENT_QUOTES, 'UTF-8') : ''; ?>" class="block py-1.5 text-slate-700 dark:text-slate-200 hover:text-primary-600 dark:hover:text-primary-400 truncate"><?php echo isset($siteEmail) ? htmlspecialchars($siteEmail, ENT_QUOTES, 'UTF-8') : ''; ?></a>
            </div>
            <ul class="flex flex-col gap-0.5 text-sm font-medium">
                <li><a href="<?php echo $base ? $base . '/' : '/'; ?>" class="block rounded-lg px-3 py-3 <?php echo navLinkClass('home', $pathWithoutBase, $currentPage); ?>">Home</a></li>
                <li class="border-t border-slate-100 dark:border-slate-800">
                    <a href="<?php echo $base; ?>/products" class="block rounded-lg px-3 py-3 <?php echo navLinkClass('products', $pathWithoutBase, $currentPage); ?>">Products</a>
                    <ul class="flex flex-col gap-0.5 pb-2 pl-3">
                        <li><a href="<?php echo $base; ?>/products" class="block rounded-lg px-3 py-2.5 text-primary-600 dark:text-primary-400">All products</a></li>
                        <?php foreach ($productCategories as $cat): ?>
                        <li><a href="<?php echo $base; ?>/products#<?php echo htmlspecialchars($cat['slug'], ENT_QUOTES, 'UTF-8'); ?>" class="block rounded-lg px-3 py-2.5 text-slate-600 dark:text-slate-400"><?php echo htmlspecialchars($cat['label'], ENT_QUOTES, 'UTF-8'); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li class="border-t border-slate-100 dark:border-slate-800"><a href="<?php echo $base; ?>/about" class="block rounded-lg px-3 py-3 <?php echo navLinkClass('about', $pathWithoutBase, $currentPage); ?>">About</a></li>
                <li class="border-t border-slate-100 dark:border-slate-800"><a href="<?php echo $base; ?>/services" class="block rounded-lg px-3 py-3 <?php echo navLinkClass('services', $pathWithoutBase, $currentPage); ?>">Services</a></li>
                <li class="border-t border-slate-100 dark:border-slate-800"><a href="<?php echo $base; ?>/contact" class="block rounded-lg px-3 py-3 <?php echo navLinkClass('contact', $pathWithoutBase, $currentPage); ?>">Contact</a></li>
            </ul>
            <a href="<?php echo $base; ?>/contact?type=quote" class="mt-4 block w-full rounded-xl bg-primary-500 py-3.5 text-center text-sm font-semibold text-white hover:bg-primary-600">Request quote</a>
        </div>
    </div>
</header>

