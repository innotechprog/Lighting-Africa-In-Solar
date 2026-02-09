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
        ? 'text-primary-300 border-primary-400'
        : 'text-slate-200 border-transparent hover:text-primary-200 hover:border-primary-500';
}
$base = isset($baseUrl) ? $baseUrl : '';
?>
<header class="border-b border-slate-800 bg-slate-950/90 backdrop-blur">
    <div class="mx-auto flex max-w-6xl">
        <!-- Logo section -->
        <div class="flex w-44 flex-shrink-0 flex-col items-start justify-center border-r-0 px-4 py-2 sm:w-56">
            <a href="<?php echo $base ? $base . '/' : '/'; ?>" class="flex flex-col items-start gap-0.5 leading-tight">
                <span class="text-[11px] font-semibold tracking-[0.22em] text-primary-300 uppercase sm:text-xs">
                    Lighting Africa
                </span>
                <span class="text-sm font-bold tracking-tight text-slate-50 sm:text-base">
                    In Solar
                </span>
            </a>
        </div>

        <!-- Vertical divider -->
        <div class="w-px bg-slate-800"></div>

        <!-- Right content (contact + nav) -->
        <div class="flex flex-1 flex-col">
            <!-- Contact row -->
            <div class="flex items-center justify-between px-4 py-1.5 text-xs text-slate-400">
                <div class="flex flex-col gap-0.5 sm:flex-row sm:items-center sm:gap-4">
                    <span class="flex items-center gap-1.5">
                        <span class="h-1.5 w-1.5 rounded-full bg-primary-400"></span>
                        <span>+254 700 000 000</span>
                    </span>
                    <span class="hidden h-3 w-px bg-slate-700 sm:block"></span>
                    <span>support@lightingafricasolar.com</span>
                </div>

                <!-- Mobile nav toggle -->
                <button
                    id="mobile-nav-toggle"
                    type="button"
                    class="inline-flex items-center justify-center rounded-full border border-slate-700 px-2 py-1 text-[11px] font-medium text-slate-200 hover:bg-slate-800 md:hidden"
                >
                    Menu
                    <svg class="ml-1 h-3 w-3" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M3 6h14M3 10h14M3 14h10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </button>
            </div>

            <!-- Horizontal divider -->
            <div class="h-px bg-slate-800"></div>

            <!-- Navigation row -->
            <nav class="relative px-4 py-2">
                <!-- Desktop nav -->
                <ul class="hidden items-center justify-center gap-6 text-sm font-medium md:flex">
                    <li>
                        <a href="<?php echo $base ? $base . '/' : '/'; ?>"
                           class="border-b-2 pb-1.5 <?php echo navLinkClass('home', $pathWithoutBase, $currentPage); ?>">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $base; ?>/products"
                           class="border-b-2 pb-1.5 <?php echo navLinkClass('products', $pathWithoutBase, $currentPage); ?>">
                            Products
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $base; ?>/about"
                           class="border-b-2 pb-1.5 <?php echo navLinkClass('about', $pathWithoutBase, $currentPage); ?>">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $base; ?>/services"
                           class="border-b-2 pb-1.5 <?php echo navLinkClass('services', $pathWithoutBase, $currentPage); ?>">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $base; ?>/contact"
                           class="border-b-2 pb-1.5 <?php echo navLinkClass('contact', $pathWithoutBase, $currentPage); ?>">
                            Contact
                        </a>
                    </li>
                </ul>

                <!-- Mobile menu -->
                <div
                    id="mobile-nav-menu"
                    class="absolute left-0 right-0 top-full z-30 mt-1 hidden origin-top rounded-b-xl border border-slate-800 bg-slate-900/98 px-4 py-2 text-sm shadow-2xl backdrop-blur opacity-0 -translate-y-2 md:hidden"
                >
                    <ul class="flex flex-col gap-1.5">
                        <li>
                            <a href="<?php echo $base ? $base . '/' : '/'; ?>"
                               class="block rounded-md px-3 py-1.5 <?php echo navLinkClass('home', $pathWithoutBase, $currentPage); ?>">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $base; ?>/products"
                               class="block rounded-md px-3 py-1.5 <?php echo navLinkClass('products', $pathWithoutBase, $currentPage); ?>">
                                Products
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $base; ?>/about"
                               class="block rounded-md px-3 py-1.5 <?php echo navLinkClass('about', $pathWithoutBase, $currentPage); ?>">
                                About
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $base; ?>/services"
                               class="block rounded-md px-3 py-1.5 <?php echo navLinkClass('services', $pathWithoutBase, $currentPage); ?>">
                                Services
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $base; ?>/contact"
                               class="block rounded-md px-3 py-1.5 <?php echo navLinkClass('contact', $pathWithoutBase, $currentPage); ?>">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

