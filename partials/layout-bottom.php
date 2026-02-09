</main>
<?php include __DIR__ . '/footer.php'; ?>

<?php if (!empty($siteWhatsApp)): ?>
<!-- Floating WhatsApp button -->
<a
    href="https://wa.me/27715323926"
    target="_blank"
    rel="noopener noreferrer"
    class="fixed bottom-4 right-4 z-50 inline-flex h-12 w-12 items-center justify-center rounded-full bg-emerald-500 text-white shadow-lg shadow-emerald-500/40 hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-400 focus:ring-offset-2 focus:ring-offset-slate-50 dark:focus:ring-offset-slate-950"
    aria-label="Chat with us on WhatsApp"
>
    <svg class="h-6 w-6" viewBox="0 0 32 32" aria-hidden="true">
        <path fill="currentColor" d="M16.004 5.333C10.845 5.333 6.667 9.51 6.667 14.67c0 2.036.64 3.926 1.733 5.487L6 26l5.987-2.353a9.26 9.26 0 004.017.924c5.16 0 9.337-4.177 9.337-9.337 0-5.16-4.177-9.337-9.337-9.337zm0 16.96a7.6 7.6 0 01-3.897-1.067l-.28-.167-3.553 1.397 1.32-3.64-.18-.3a7.58 7.58 0 01-1.173-4.05c0-4.207 3.413-7.62 7.62-7.62 4.207 0 7.62 3.413 7.62 7.62 0 4.207-3.413 7.62-7.62 7.62zm4.187-5.693c-.227-.113-1.347-.667-1.555-.74-.207-.073-.36-.113-.513.114-.153.227-.587.74-.72.893-.133.153-.267.173-.493.06-.227-.113-.957-.352-1.824-1.123-.674-.6-1.13-1.34-1.263-1.567-.133-.227-.014-.35.1-.463.103-.103.227-.267.34-.4.113-.133.153-.227.227-.38.073-.153.04-.287-.02-.4-.06-.113-.513-1.233-.703-1.687-.185-.445-.374-.384-.513-.39l-.44-.007c-.153 0-.4.06-.607.287-.207.227-.8.78-.8 1.9 0 1.12.82 2.203.933 2.357.113.153 1.614 2.467 3.907 3.457.546.236.972.378 1.304.484.548.174 1.048.15 1.444.091.441-.066 1.347-.551 1.537-1.083.19-.533.19-.99.133-1.083-.06-.093-.207-.153-.434-.267z"/>
    </svg>
</a>
<?php endif; ?>

<!-- Cookie consent banner -->
<div
    id="cookie-banner"
    class="fixed inset-x-0 bottom-0 z-40 translate-y-full opacity-0 transition-all duration-300"
>
    <div class="mx-auto max-w-5xl px-4 pb-4">
        <div class="rounded-xl border border-slate-300 bg-white/95 px-4 py-3 shadow-xl backdrop-blur dark:border-slate-700 dark:bg-slate-900/95 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 transition-colors duration-200">
            <div class="text-sm text-slate-700 dark:text-slate-200">
                <p class="font-medium">We use cookies.</p>
                <p class="text-slate-500 dark:text-slate-400">
                    This website uses cookies to enhance your browsing experience and analyze traffic.
                    By clicking <span class="font-semibold text-primary-500 dark:text-primary-400">Accept</span>, you consent to our use of cookies.
                    Read more in our <a href="<?php echo isset($baseUrl) ? $baseUrl . '/cookie-policy' : '/cookie-policy'; ?>" class="text-primary-500 underline hover:text-primary-600 dark:text-primary-400 dark:hover:text-primary-300">Cookie Policy</a>.
                </p>
            </div>
            <div class="flex gap-2 justify-end">
                <button
                    id="cookie-accept"
                    class="inline-flex items-center justify-center rounded-full bg-primary-500 px-4 py-1.5 text-sm font-semibold text-white hover:bg-primary-600 transition-colors"
                    type="button"
                >
                    Accept
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    (function () {
        const banner = document.getElementById('cookie-banner');
        const acceptBtn = document.getElementById('cookie-accept');
        if (!banner || !acceptBtn) return;

        const storageKey = 'la_solar_cookie_consent';
        const hasConsent = window.localStorage.getItem(storageKey) === 'true';

        function showBanner() {
            banner.classList.remove('translate-y-full', 'opacity-0');
            banner.classList.add('translate-y-0', 'opacity-100');
        }

        function hideBanner() {
            banner.classList.add('translate-y-full', 'opacity-0');
            banner.classList.remove('translate-y-0', 'opacity-100');
        }

        if (!hasConsent) {
            showBanner();
        }

        acceptBtn.addEventListener('click', function () {
            try {
                window.localStorage.setItem(storageKey, 'true');
            } catch (e) {
                // ignore storage errors
            }
            hideBanner();
        });
    })();
</script>

<!-- Theme toggle -->
<script>
    (function () {
        var storageKey = 'la_solar_theme';
        var btn = document.getElementById('theme-toggle');
        if (!btn) return;
        btn.addEventListener('click', function () {
            var isDark = document.documentElement.classList.toggle('dark');
            try { localStorage.setItem(storageKey, isDark ? 'dark' : 'light'); } catch (e) {}
        });
    })();
</script>

<!-- Mobile navigation toggle -->
<script>
    (function () {
        const toggle = document.getElementById('mobile-nav-toggle');
        const menu = document.getElementById('mobile-nav-menu');
        const backdrop = document.getElementById('mobile-nav-backdrop');
        if (!toggle || !menu) return;

        function openMenu() {
            document.body.classList.add('overflow-hidden');
            if (backdrop) {
                backdrop.classList.remove('hidden', 'opacity-0');
                backdrop.classList.add('opacity-100');
                backdrop.setAttribute('aria-hidden', 'false');
            }
            menu.classList.remove('hidden', 'opacity-0', '-translate-y-2');
            menu.classList.add('opacity-100', 'translate-y-0');
            toggle.setAttribute('aria-expanded', 'true');
            toggle.setAttribute('aria-label', 'Close menu');
            menu.setAttribute('aria-hidden', 'false');
        }
        function closeMenu() {
            document.body.classList.remove('overflow-hidden');
            if (backdrop) {
                backdrop.classList.remove('opacity-100');
                backdrop.classList.add('opacity-0');
                backdrop.setAttribute('aria-hidden', 'true');
                setTimeout(function () { backdrop.classList.add('hidden'); }, 200);
            }
            menu.classList.add('opacity-0', '-translate-y-2');
            toggle.setAttribute('aria-expanded', 'false');
            toggle.setAttribute('aria-label', 'Open menu');
            menu.setAttribute('aria-hidden', 'true');
            setTimeout(function () { menu.classList.add('hidden'); }, 200);
        }

        toggle.addEventListener('click', function () {
            if (menu.classList.contains('hidden')) openMenu();
            else closeMenu();
        });
        if (backdrop) backdrop.addEventListener('click', closeMenu);
        menu.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', closeMenu);
        });
    })();
</script>
</body>
</html>

