<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/seo.php';

$message_sent = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message_sent = true;
}

$page_seo = [
    'title' => 'Contact Us - FinWise Financial Advisory Portal',
    'description' => 'Get in touch with the FinWise editorial team for inquiries, feedback, or financial calculation tool suggestions.',
    'breadcrumbs' => ['Home' => 'index.php', 'Contact Us' => 'contact.php']
];

include __DIR__ . '/components/header.php';
?>

<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/components/breadcrumbs.php'; ?>
        <h1>Contact FinWise</h1>
        <p>Have questions, feedback, or suggestions for new calculators? Reach out to our team.</p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div style="max-width: 650px; margin: 0 auto; background:#fff; padding:2.5rem; border:1px solid var(--clr-border); border-radius:var(--radius-md);">
            <?php if ($message_sent): ?>
                <div class="callout-box" style="border-left-color:var(--clr-emerald); background:#ecfdf5; margin-bottom:1.5rem;">
                    <h4>✅ Message Sent Successfully!</h4>
                    <p>Thank you for reaching out. Our editorial team will review your inquiry and respond within 24 to 48 business hours.</p>
                </div>
            <?php endif; ?>

            <form action="contact.php" method="POST">
                <div class="form-group" style="margin-bottom:1.25rem;">
                    <label style="display:block; font-weight:600; margin-bottom:0.4rem;">Full Name</label>
                    <input type="text" name="name" required style="width:100%; padding:0.75rem; border:1px solid var(--clr-border); border-radius:var(--radius-sm);">
                </div>
                <div class="form-group" style="margin-bottom:1.25rem;">
                    <label style="display:block; font-weight:600; margin-bottom:0.4rem;">Email Address</label>
                    <input type="email" name="email" required style="width:100%; padding:0.75rem; border:1px solid var(--clr-border); border-radius:var(--radius-sm);">
                </div>
                <div class="form-group" style="margin-bottom:1.25rem;">
                    <label style="display:block; font-weight:600; margin-bottom:0.4rem;">Subject</label>
                    <input type="text" name="subject" required style="width:100%; padding:0.75rem; border:1px solid var(--clr-border); border-radius:var(--radius-sm);">
                </div>
                <div class="form-group" style="margin-bottom:1.5rem;">
                    <label style="display:block; font-weight:600; margin-bottom:0.4rem;">Message</label>
                    <textarea name="message" rows="5" required style="width:100%; padding:0.75rem; border:1px solid var(--clr-border); border-radius:var(--radius-sm); font-family:inherit;"></textarea>
                </div>
                <button type="submit" class="btn btn-emerald" style="width:100%; justify-content:center;">Send Inquiry →</button>
            </form>
        </div>
    </div>
</section>

<?php include __DIR__ . '/components/footer.php'; ?>
