<?php
$pageTitle   = 'Contact | LIGHTING AFRICA IN SOLAR';
$currentPage = 'contact';

// Load contact config so mail config can use $siteEmail
if (file_exists(__DIR__ . '/config/contact.php')) {
    include __DIR__ . '/config/contact.php';
}
if (!isset($siteEmail))    $siteEmail    = 'infolightingafricainsolar@gmail.com';
if (!isset($sitePhone))    $sitePhone    = '+27 603967999';
if (!isset($siteWhatsApp)) $siteWhatsApp = '+27 715323926';
if (!isset($siteAddress)) $siteAddress = 'Nairobi, Kenya';

require_once __DIR__ . '/PHPMailer/Exception.php';
require_once __DIR__ . '/PHPMailer/PHPMailer.php';
require_once __DIR__ . '/PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;
use PHPMailer\PHPMailer\SMTP;

$formErrors = [];
$formSuccess = false;
$formInput = [
    'name'    => '',
    'email'   => '',
    'phone'   => '',
    'segment' => '',
    'message' => '',
    'interest' => isset($_GET['interest']) ? trim((string) $_GET['interest']) : '',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formInput['name']    = trim((string) ($_POST['name'] ?? ''));
    $formInput['email']   = trim((string) ($_POST['email'] ?? ''));
    $formInput['phone']   = trim((string) ($_POST['phone'] ?? ''));
    $formInput['segment'] = trim((string) ($_POST['segment'] ?? ''));
    $formInput['message'] = trim((string) ($_POST['message'] ?? ''));
    $formInput['interest'] = trim((string) ($_POST['interest'] ?? ''));

    // Validation
    if ($formInput['name'] === '') {
        $formErrors['name'] = 'Please enter your name.';
    } elseif (mb_strlen($formInput['name']) < 2) {
        $formErrors['name'] = 'Name must be at least 2 characters.';
    } elseif (mb_strlen($formInput['name']) > 120) {
        $formErrors['name'] = 'Name is too long.';
    }

    if ($formInput['email'] === '') {
        $formErrors['email'] = 'Please enter your email address.';
    } elseif (!filter_var($formInput['email'], FILTER_VALIDATE_EMAIL)) {
        $formErrors['email'] = 'Please enter a valid email address.';
    } elseif (mb_strlen($formInput['email']) > 180) {
        $formErrors['email'] = 'Email is too long.';
    }

    if (mb_strlen($formInput['phone']) > 30) {
        $formErrors['phone'] = 'Phone number is too long.';
    }

    if ($formInput['message'] === '') {
        $formErrors['message'] = 'Please enter your message.';
    } elseif (mb_strlen($formInput['message']) < 10) {
        $formErrors['message'] = 'Message must be at least 10 characters.';
    } elseif (mb_strlen($formInput['message']) > 5000) {
        $formErrors['message'] = 'Message is too long.';
    }

    if (mb_strlen($formInput['segment']) > 100) {
        $formErrors['segment'] = 'Invalid selection.';
    }
    if (mb_strlen($formInput['interest']) > 100) {
        $formErrors['interest'] = 'Invalid value.';
    }

    if (empty($formErrors)) {
        if (file_exists(__DIR__ . '/config/mail.php')) {
            include __DIR__ . '/config/mail.php';
        }
        $toEmail   = isset($mailToEmail) ? $mailToEmail : (isset($siteEmail) ? $siteEmail : 'infolightingafricainsolar@gmail.com');
        $fromEmail = isset($mailFromEmail) ? $mailFromEmail : $toEmail;
        $fromName  = isset($mailFromName) ? $mailFromName : 'LIGHTING AFRICA IN SOLAR';

        try {
            $mail = new PHPMailer(true);
            $mail->CharSet = 'UTF-8';
            $mail->setFrom($fromEmail, $fromName);
            $mail->addAddress($toEmail, isset($mailToName) ? $mailToName : 'LIGHTING AFRICA IN SOLAR');
            $mail->addReplyTo($formInput['email'], $formInput['name']);

            if (!empty($mailUseSmtp) && !empty($mailHost)) {
                $mail->isSMTP();
                $mail->Host       = $mailHost;
                $mail->Port       = isset($mailPort) ? (int) $mailPort : 587;
                $mail->SMTPAuth   = !empty($mailUsername);
                $mail->Username   = isset($mailUsername) ? $mailUsername : '';
                $mail->Password   = isset($mailPassword) ? $mailPassword : '';
                if (!empty($mailEncryption)) {
                    $mail->SMTPSecure = $mailEncryption === 'ssl' ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
                }
            }

            $mail->Subject = 'Contact form: LIGHTING AFRICA IN SOLAR';
            $body = "New message from the website contact form.\n\n";
            $body .= "Name: " . $formInput['name'] . "\n";
            $body .= "Email: " . $formInput['email'] . "\n";
            $body .= "Phone: " . $formInput['phone'] . "\n";
            if ($formInput['segment'] !== '') {
                $body .= "I am a: " . $formInput['segment'] . "\n";
            }
            if ($formInput['interest'] !== '') {
                $body .= "Interest: " . $formInput['interest'] . "\n";
            }
            $body .= "\nMessage:\n" . $formInput['message'] . "\n";
            $mail->Body = $body;
            $mail->AltBody = $body;

            $mail->send();
            $formSuccess = true;
            $formInput = ['name' => '', 'email' => '', 'phone' => '', 'segment' => '', 'message' => '', 'interest' => ''];
        } catch (PHPMailerException $e) {
            $formSentError = true;
            $formErrors['_mail'] = 'Sorry, we could not send your message. Please try again or email us directly.';
        } catch (Exception $e) {
            $formSentError = true;
            $formErrors['_mail'] = 'Sorry, something went wrong. Please try again or email us directly.';
        }
    }
}

include __DIR__ . '/partials/layout-top.php';
?>

<section class="section-wrap py-14 sm:py-16">
    <div class="mx-auto max-w-5xl space-y-10">
        <header class="page-header text-center">
            <p class="section-label text-primary-600 dark:text-primary-400">Get in touch</p>
            <h1 class="mt-2 text-3xl font-bold tracking-tight text-slate-800 dark:text-slate-50 sm:text-4xl">Contact us</h1>
            <p class="mx-auto mt-3 max-w-xl text-base leading-relaxed text-slate-600 dark:text-slate-300">
                Have a product question, need a quote, or want to place an order? Get in touch. We serve customers nationally and internationally and usually respond within one business day.
            </p>
        </header>

        <?php if ($formSuccess): ?>
        <div class="rounded-2xl border border-emerald-200 bg-emerald-50 p-6 text-center dark:border-emerald-900/50 dark:bg-emerald-500/10">
            <p class="font-semibold text-emerald-800 dark:text-emerald-200">Thank you for your message.</p>
            <p class="mt-2 text-sm text-emerald-700 dark:text-emerald-300">We will get back to you as soon as possible.</p>
        </div>
        <?php endif; ?>

        <?php if (!empty($formErrors['_mail'])): ?>
        <div class="rounded-2xl border border-red-200 bg-red-50 p-4 text-center text-sm text-red-700 dark:border-red-900/50 dark:bg-red-500/10 dark:text-red-200">
            <?php echo htmlspecialchars($formErrors['_mail'], ENT_QUOTES, 'UTF-8'); ?>
        </div>
        <?php endif; ?>

        <div class="grid gap-8 lg:grid-cols-[1fr_340px]">
            <form method="post" action="" class="space-y-5 rounded-2xl border border-slate-200 bg-white p-6 shadow-soft dark:border-slate-800 dark:bg-slate-900/60 dark:shadow-soft-dark">
                <?php if (!empty($formErrors) && !isset($formErrors['_mail'])): ?>
                <p class="text-sm text-red-600 dark:text-red-400">Please correct the errors below and try again.</p>
                <?php endif; ?>

                <div class="grid gap-4 sm:grid-cols-2">
                    <div>
                        <label class="mb-1 block text-xs font-medium text-slate-600 dark:text-slate-300" for="name">Name <span class="text-red-500">*</span></label>
                        <input
                            id="name"
                            name="name"
                            type="text"
                            value="<?php echo htmlspecialchars($formInput['name'], ENT_QUOTES, 'UTF-8'); ?>"
                            class="w-full rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 placeholder-slate-400 focus:border-primary-500 focus:outline-none focus:ring-1 focus:ring-primary-500 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100 dark:placeholder-slate-500 dark:focus:border-primary-400 <?php echo !empty($formErrors['name']) ? 'border-red-500 dark:border-red-500' : ''; ?>"
                            placeholder="Your full name"
                            required
                        >
                        <?php if (!empty($formErrors['name'])): ?>
                        <p class="mt-1 text-xs text-red-600 dark:text-red-400"><?php echo htmlspecialchars($formErrors['name'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label class="mb-1 block text-xs font-medium text-slate-600 dark:text-slate-300" for="email">Email <span class="text-red-500">*</span></label>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            value="<?php echo htmlspecialchars($formInput['email'], ENT_QUOTES, 'UTF-8'); ?>"
                            class="w-full rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 placeholder-slate-400 focus:border-primary-500 focus:outline-none focus:ring-1 focus:ring-primary-500 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100 dark:placeholder-slate-500 dark:focus:border-primary-400 <?php echo !empty($formErrors['email']) ? 'border-red-500 dark:border-red-500' : ''; ?>"
                            placeholder="you@example.com"
                            required
                        >
                        <?php if (!empty($formErrors['email'])): ?>
                        <p class="mt-1 text-xs text-red-600 dark:text-red-400"><?php echo htmlspecialchars($formErrors['email'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    <div>
                        <label class="mb-1 block text-xs font-medium text-slate-600 dark:text-slate-300" for="phone">Phone</label>
                        <input
                            id="phone"
                            name="phone"
                            type="tel"
                            value="<?php echo htmlspecialchars($formInput['phone'], ENT_QUOTES, 'UTF-8'); ?>"
                            class="w-full rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 placeholder-slate-400 focus:border-primary-500 focus:outline-none focus:ring-1 focus:ring-primary-500 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100 dark:placeholder-slate-500 dark:focus:border-primary-400 <?php echo !empty($formErrors['phone']) ? 'border-red-500 dark:border-red-500' : ''; ?>"
                            placeholder="+254..."
                        >
                        <?php if (!empty($formErrors['phone'])): ?>
                        <p class="mt-1 text-xs text-red-600 dark:text-red-400"><?php echo htmlspecialchars($formErrors['phone'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label class="mb-1 block text-xs font-medium text-slate-600 dark:text-slate-300" for="segment">I am a</label>
                        <select
                            id="segment"
                            name="segment"
                            class="w-full rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 focus:border-primary-500 focus:outline-none focus:ring-1 focus:ring-primary-500 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100 dark:focus:border-primary-400"
                        >
                            <option value="">Select...</option>
                            <option value="Homeowner" <?php echo $formInput['segment'] === 'Homeowner' ? 'selected' : ''; ?>>Homeowner</option>
                            <option value="Small or medium business" <?php echo $formInput['segment'] === 'Small or medium business' ? 'selected' : ''; ?>>Small or medium business</option>
                            <option value="Large company" <?php echo $formInput['segment'] === 'Large company' ? 'selected' : ''; ?>>Large company</option>
                            <option value="Property developer" <?php echo $formInput['segment'] === 'Property developer' ? 'selected' : ''; ?>>Property developer</option>
                            <option value="Farmer / agribusiness" <?php echo $formInput['segment'] === 'Farmer / agribusiness' ? 'selected' : ''; ?>>Farmer / agribusiness</option>
                            <option value="Other" <?php echo $formInput['segment'] === 'Other' ? 'selected' : ''; ?>>Other</option>
                        </select>
                        <?php if (!empty($formErrors['segment'])): ?>
                        <p class="mt-1 text-xs text-red-600 dark:text-red-400"><?php echo htmlspecialchars($formErrors['segment'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if ($formInput['interest'] !== ''): ?>
                <input type="hidden" name="interest" value="<?php echo htmlspecialchars($formInput['interest'], ENT_QUOTES, 'UTF-8'); ?>">
                <?php endif; ?>

                <div>
                    <label class="mb-1 block text-xs font-medium text-slate-600 dark:text-slate-300" for="message">Your message <span class="text-red-500">*</span></label>
                    <textarea
                        id="message"
                        name="message"
                        rows="4"
                        class="w-full rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 placeholder-slate-400 focus:border-primary-500 focus:outline-none focus:ring-1 focus:ring-primary-500 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100 dark:placeholder-slate-500 dark:focus:border-primary-400 <?php echo !empty($formErrors['message']) ? 'border-red-500 dark:border-red-500' : ''; ?>"
                        placeholder="Product enquiry, quote request, or order question. Include your location if relevant."
                        required
                    ><?php echo htmlspecialchars($formInput['message'], ENT_QUOTES, 'UTF-8'); ?></textarea>
                    <?php if (!empty($formErrors['message'])): ?>
                    <p class="mt-1 text-xs text-red-600 dark:text-red-400"><?php echo htmlspecialchars($formErrors['message'], ENT_QUOTES, 'UTF-8'); ?></p>
                    <?php endif; ?>
                </div>

                <button
                    type="submit"
                    class="inline-flex items-center justify-center rounded-full bg-primary-500 px-6 py-3 text-sm font-semibold text-white shadow-soft hover:bg-primary-600 transition-all duration-200"
                >
                    Send message
                </button>
            </form>

            <aside class="space-y-4 rounded-2xl border border-slate-200 bg-slate-100/80 p-6 dark:border-slate-800 dark:bg-slate-900/40">
                <h2 class="text-sm font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Contact details</h2>
                <p class="font-semibold text-slate-800 dark:text-slate-100">Call &amp; WhatsApp: <a href="https://wa.me/27603967999" target="_blank" rel="noopener noreferrer" class="text-primary-600 hover:underline dark:text-primary-400"><?php echo isset($sitePhone) ? htmlspecialchars($sitePhone, ENT_QUOTES, 'UTF-8') : '+27 603967999'; ?></a></p>
                <?php if (!empty($siteWhatsApp)): ?>
                <p class="text-slate-600 dark:text-slate-300">WhatsApp: <a href="https://wa.me/27715323926" target="_blank" rel="noopener noreferrer" class="text-primary-600 hover:underline dark:text-primary-400"><?php echo htmlspecialchars($siteWhatsApp, ENT_QUOTES, 'UTF-8'); ?></a></p>
                <?php endif; ?>
                <p class="text-slate-600 dark:text-slate-300"><a href="mailto:<?php echo isset($siteEmail) ? htmlspecialchars($siteEmail, ENT_QUOTES, 'UTF-8') : ''; ?>" class="text-primary-600 hover:underline dark:text-primary-400"><?php echo isset($siteEmail) ? htmlspecialchars($siteEmail, ENT_QUOTES, 'UTF-8') : ''; ?></a></p>
                <p class="text-sm text-slate-600 dark:text-slate-400"><?php echo isset($siteAddress) ? htmlspecialchars($siteAddress, ENT_QUOTES, 'UTF-8') : 'Nairobi, Kenya'; ?></p>
                <p class="border-t border-slate-200 pt-3 text-xs text-slate-500 dark:border-slate-700 dark:text-slate-400">
                    We serve customers nationally and internationally. Office hours: Monday–Friday, 8:30–17:30 EAT.
                </p>
            </aside>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/partials/layout-bottom.php';
?>
