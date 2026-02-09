<footer class="border-t border-slate-200 bg-white/90 dark:border-slate-800 dark:bg-slate-950/90 transition-colors duration-200">
    <div class="mx-auto max-w-6xl px-4 py-8">
        <div class="flex flex-col gap-6 md:flex-row md:items-start md:justify-between">
            <div class="space-y-2 max-w-sm">
                <div class="flex items-center gap-2">
                    <span class="flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-primary-500/10 text-xs font-bold text-primary-600 ring-1 ring-primary-500/40 dark:text-primary-300">
                        LA
                    </span>
                    <span class="text-sm font-semibold tracking-[0.12em] text-primary-600 uppercase dark:text-primary-300">
                        LIGHTING AFRICA IN SOLAR
                    </span>
                </div>
                <p class="text-sm text-slate-500 dark:text-slate-400">
                    Online solar solutions provider supplying high-quality solar products for homes and businesses.
                    We make renewable energy accessible, affordable, and reliable through convenient online purchasing
                    and delivery—nationally and internationally.
                </p>
            </div>

            <div class="grid grid-cols-2 gap-6 text-sm sm:grid-cols-3">
                <div>
                    <h3 class="mb-2 text-xs font-semibold uppercase tracking-wide text-slate-500 dark:text-slate-400">Navigate</h3>
                    <ul class="space-y-1.5">
                        <?php $base = isset($baseUrl) ? $baseUrl : ''; ?>
                        <li><a href="<?php echo $base ? $base . '/' : '/'; ?>" class="text-slate-600 hover:text-primary-600 dark:text-slate-300 dark:hover:text-primary-300">Home</a></li>
                        <li><a href="<?php echo $base; ?>/products" class="text-slate-600 hover:text-primary-600 dark:text-slate-300 dark:hover:text-primary-300">Products</a></li>
                        <li><a href="<?php echo $base; ?>/about" class="text-slate-600 hover:text-primary-600 dark:text-slate-300 dark:hover:text-primary-300">About</a></li>
                        <li><a href="<?php echo $base; ?>/services" class="text-slate-600 hover:text-primary-600 dark:text-slate-300 dark:hover:text-primary-300">Services</a></li>
                        <li><a href="<?php echo $base; ?>/contact" class="text-slate-600 hover:text-primary-600 dark:text-slate-300 dark:hover:text-primary-300">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="mb-2 text-xs font-semibold uppercase tracking-wide text-slate-500 dark:text-slate-400">Legal</h3>
                    <ul class="space-y-1.5">
                        <li><a href="<?php echo $base; ?>/privacy-policy" class="text-slate-600 hover:text-primary-600 dark:text-slate-300 dark:hover:text-primary-300">Privacy Policy</a></li>
                        <li><a href="<?php echo $base; ?>/cookie-policy" class="text-slate-600 hover:text-primary-600 dark:text-slate-300 dark:hover:text-primary-300">Cookie Policy</a></li>
                        <li><a href="<?php echo $base; ?>/return-policy" class="text-slate-600 hover:text-primary-600 dark:text-slate-300 dark:hover:text-primary-300">Return Policy</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="mb-2 text-xs font-semibold uppercase tracking-wide text-slate-500 dark:text-slate-400">Contact</h3>
                    <ul class="space-y-1.5 text-slate-600 dark:text-slate-300">
                        <li>Call &amp; WhatsApp: <a href="https://wa.me/27603967999" target="_blank" rel="noopener noreferrer" class="hover:text-primary-600 dark:hover:text-primary-400"><?php echo isset($sitePhone) ? htmlspecialchars($sitePhone, ENT_QUOTES, 'UTF-8') : '+27 603967999'; ?></a></li>
                        <?php if (!empty($siteWhatsApp)): ?>
                        <li>WhatsApp: <a href="https://wa.me/27715323926" target="_blank" rel="noopener noreferrer" class="hover:text-primary-600 dark:hover:text-primary-400"><?php echo htmlspecialchars($siteWhatsApp, ENT_QUOTES, 'UTF-8'); ?></a></li>
                        <?php endif; ?>
                        <li><a href="mailto:<?php echo isset($siteEmail) ? htmlspecialchars($siteEmail, ENT_QUOTES, 'UTF-8') : ''; ?>" class="hover:text-primary-600 dark:hover:text-primary-400"><?php echo isset($siteEmail) ? htmlspecialchars($siteEmail, ENT_QUOTES, 'UTF-8') : ''; ?></a></li>
                        <li class="text-xs text-slate-500 dark:text-slate-500">
                            <?php echo isset($siteAddress) ? htmlspecialchars($siteAddress, ENT_QUOTES, 'UTF-8') : 'Nairobi, Kenya'; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mt-6 border-t border-slate-200 pt-4 text-xs text-slate-500 dark:border-slate-800 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <p>&copy; <?php echo date('Y'); ?> LIGHTING AFRICA IN SOLAR. All rights reserved.</p>
            <p class="text-[11px]">
                Developed by <a href="https://ib-innovativesolutions.com/it-solutions" target="_blank" rel="noopener noreferrer" class="text-primary-600 hover:text-primary-700 dark:text-primary-400 dark:hover:text-primary-300 font-medium">IB Innovative Solutions</a>
            </p>
        </div>
    </div>
</footer>

