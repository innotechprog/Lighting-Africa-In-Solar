<?php
$pageTitle   = 'Return Policy | LIGHTING AFRICA IN SOLAR';
$currentPage = '';
include __DIR__ . '/partials/layout-top.php';
$base = isset($baseUrl) ? $baseUrl : '';
?>

<section class="section-wrap py-14 sm:py-16">
    <div class="mx-auto max-w-4xl policy-content space-y-6 text-sm text-slate-600 dark:text-slate-300 sm:text-base">
        <header class="page-header">
            <p class="section-label text-primary-600 dark:text-primary-400">Legal</p>
            <h1 class="mt-2 text-2xl font-bold tracking-tight text-slate-800 dark:text-slate-50 sm:text-3xl">
                Return Policy
            </h1>
        </header>
        <p>
            At LIGHTING AFRICA IN SOLAR we want you to be satisfied with your purchase. This Return Policy explains the conditions under which we accept returns and how to request a return or refund.
        </p>

        <section class="space-y-2">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-50">Eligibility for returns</h2>
            <p>
                Products may be eligible for return or exchange if they are defective, damaged in transit, or do not match the description. You must contact us within a specified period (e.g. 7–14 days from delivery) and provide proof of purchase. Some items, such as custom or installed systems, may not be returnable.
            </p>
        </section>

        <section class="space-y-2">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-50">How to request a return</h2>
            <p>To request a return:</p>
            <ul class="list-disc pl-5 space-y-1">
                <li>Contact us at <?php echo isset($siteEmail) ? htmlspecialchars($siteEmail, ENT_QUOTES, 'UTF-8') : 'infolightingafricainsolar@gmail.com'; ?> or call / WhatsApp <?php echo isset($sitePhone) ? htmlspecialchars($sitePhone, ENT_QUOTES, 'UTF-8') : '+27 603967999'; ?> with your order details.</li>
                <li>Describe the issue (defect, damage, or mismatch) and, if possible, attach photos.</li>
                <li>We will confirm whether your item is eligible and provide return instructions if applicable.</li>
            </ul>
        </section>

        <section class="space-y-2">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-50">Refunds and replacements</h2>
            <p>
                Approved returns may result in a refund to your original payment method or a replacement product, at our discretion. Refunds are processed within a reasonable time after we receive and inspect the returned item. Shipping costs for returns may be the responsibility of the customer unless the return is due to our error or a defective product.
            </p>
        </section>

        <section class="space-y-2">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-50">Warranty</h2>
            <p>
                Many of our solar products are covered by manufacturer warranties. Warranty claims should be directed to us; we will assist you in processing claims in accordance with the manufacturer’s terms.
            </p>
        </section>

        <section class="space-y-2">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-50">Changes to this policy</h2>
            <p>
                We may update this Return Policy from time to time. Any changes will be posted on this page. For questions about returns or refunds, contact us at
                <a href="mailto:<?php echo isset($siteEmail) ? htmlspecialchars($siteEmail, ENT_QUOTES, 'UTF-8') : 'infolightingafricainsolar@gmail.com'; ?>" class="text-primary-600 hover:text-primary-700 dark:text-primary-300 dark:hover:text-primary-200">
                    <?php echo isset($siteEmail) ? htmlspecialchars($siteEmail, ENT_QUOTES, 'UTF-8') : 'infolightingafricainsolar@gmail.com'; ?>
                </a>.
            </p>
        </section>
    </div>
</section>

<?php
include __DIR__ . '/partials/layout-bottom.php';
?>
