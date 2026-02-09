</main>
<?php include __DIR__ . '/footer.php'; ?>

<!-- Cookie consent banner -->
<div
    id="cookie-banner"
    class="fixed inset-x-0 bottom-0 z-40 translate-y-full opacity-0 transition-all duration-300"
>
    <div class="mx-auto max-w-5xl px-4 pb-4">
        <div class="rounded-xl border border-slate-700 bg-slate-900/95 px-4 py-3 shadow-xl backdrop-blur flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
            <div class="text-sm text-slate-200">
                <p class="font-medium">We use cookies.</p>
                <p class="text-slate-400">
                    This website uses cookies to enhance your browsing experience and analyze traffic.
                    By clicking <span class="font-semibold text-primary-400">Accept</span>, you consent to our use of cookies.
                    Read more in our <a href="<?php echo isset($baseUrl) ? $baseUrl . '/cookie-policy' : '/cookie-policy'; ?>" class="text-primary-400 underline hover:text-primary-300">Cookie Policy</a>.
                </p>
            </div>
            <div class="flex gap-2 justify-end">
                <button
                    id="cookie-accept"
                    class="inline-flex items-center justify-center rounded-full bg-primary-500 px-4 py-1.5 text-sm font-semibold text-slate-950 hover:bg-primary-600 transition-colors"
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

<!-- Mobile navigation toggle -->
<script>
    (function () {
        const toggle = document.getElementById('mobile-nav-toggle');
        const menu = document.getElementById('mobile-nav-menu');
        if (!toggle || !menu) return;

        toggle.addEventListener('click', function () {
            const isHidden = menu.classList.contains('hidden');
            if (isHidden) {
                menu.classList.remove('hidden', 'opacity-0', '-translate-y-2');
                menu.classList.add('opacity-100', 'translate-y-0');
            } else {
                menu.classList.add('opacity-0', '-translate-y-2');
                setTimeout(() => {
                    menu.classList.add('hidden');
                }, 150);
            }
        });
    })();
</script>
</body>
</html>

