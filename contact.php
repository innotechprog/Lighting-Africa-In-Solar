<?php
$pageTitle   = 'Contact | LIGHTING AFRICA IN SOLAR';
$currentPage = 'contact';
include __DIR__ . '/partials/layout-top.php';
?>

<section class="px-4 py-10 sm:py-12">
    <div class="mx-auto max-w-4xl space-y-8">
        <header class="space-y-3">
            <h1 class="text-2xl font-semibold tracking-tight text-slate-50 sm:text-3xl">
                Contact us
            </h1>
            <p class="max-w-xl text-sm leading-relaxed text-slate-300 sm:text-base">
                Have a product question, need a quote, or want to place an order? Get in touch. We serve customers
                nationally and internationally and usually respond within one business day.
            </p>
        </header>

        <div class="grid gap-8 md:grid-cols-[minmax(0,2fr)_minmax(0,1.3fr)]">
            <form class="space-y-4 rounded-2xl border border-slate-800 bg-slate-900/60 p-5">
                <div class="grid gap-4 sm:grid-cols-2">
                    <div>
                        <label class="mb-1 block text-xs font-medium text-slate-300" for="name">Name</label>
                        <input
                            id="name"
                            name="name"
                            type="text"
                            class="w-full rounded-lg border border-slate-700 bg-slate-950 px-3 py-2 text-sm text-slate-100 placeholder-slate-500 focus:border-primary-400 focus:outline-none focus:ring-1 focus:ring-primary-500"
                            placeholder="Your full name"
                        >
                    </div>
                    <div>
                        <label class="mb-1 block text-xs font-medium text-slate-300" for="email">Email</label>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            class="w-full rounded-lg border border-slate-700 bg-slate-950 px-3 py-2 text-sm text-slate-100 placeholder-slate-500 focus:border-primary-400 focus:outline-none focus:ring-1 focus:ring-primary-500"
                            placeholder="you@example.com"
                        >
                    </div>
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    <div>
                        <label class="mb-1 block text-xs font-medium text-slate-300" for="phone">Phone</label>
                        <input
                            id="phone"
                            name="phone"
                            type="tel"
                            class="w-full rounded-lg border border-slate-700 bg-slate-950 px-3 py-2 text-sm text-slate-100 placeholder-slate-500 focus:border-primary-400 focus:outline-none focus:ring-1 focus:ring-primary-500"
                            placeholder="+254..."
                        >
                    </div>
                    <div>
                        <label class="mb-1 block text-xs font-medium text-slate-300" for="segment">I am a</label>
                        <select
                            id="segment"
                            name="segment"
                            class="w-full rounded-lg border border-slate-700 bg-slate-950 px-3 py-2 text-sm text-slate-100 focus:border-primary-400 focus:outline-none focus:ring-1 focus:ring-primary-500"
                        >
                            <option value="">Select...</option>
                            <option>Homeowner</option>
                            <option>Small or medium business</option>
                            <option>Large company</option>
                            <option>Property developer</option>
                            <option>Farmer / agribusiness</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="mb-1 block text-xs font-medium text-slate-300" for="message">Your message</label>
                    <textarea
                        id="message"
                        name="message"
                        rows="4"
                        class="w-full rounded-lg border border-slate-700 bg-slate-950 px-3 py-2 text-sm text-slate-100 placeholder-slate-500 focus:border-primary-400 focus:outline-none focus:ring-1 focus:ring-primary-500"
                        placeholder="Product enquiry, quote request, or order question. Include your location if relevant."
                    ></textarea>
                </div>

                <button
                    type="submit"
                    class="inline-flex items-center justify-center rounded-full bg-primary-500 px-5 py-2.5 text-sm font-semibold text-slate-950 hover:bg-primary-600 transition-colors"
                >
                    Send message
                </button>

                <p class="text-[11px] text-slate-500">
                    This form is for demonstration. Connect it to your email or CRM to process enquiries.
                </p>
            </form>

            <aside class="space-y-4 rounded-2xl border border-slate-800 bg-slate-900/40 p-5 text-sm text-slate-300">
                <h2 class="text-sm font-semibold text-slate-50">Direct contact</h2>
                <p>Prefer to call or email? Reach us at:</p>
                <ul class="space-y-1.5 text-slate-200">
                    <li>Phone: +254 700 000 000</li>
                    <li>Email: support@lightingafricasolar.com</li>
                </ul>
                <p class="mt-3 text-xs text-slate-400">
                    We serve customers nationally and internationally. Office hours: Monday–Friday, 8:30–17:30 EAT.
                </p>
            </aside>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/partials/layout-bottom.php';
?>
