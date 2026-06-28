<?php
/* Template Name: Pest Control */
get_header();
$services = alnuur_get_pest_services();
$active_service = isset($_GET['service']) ? sanitize_text_field($_GET['service']) : '';
?>
<section class="category-page-header" style="background:linear-gradient(135deg, #A67C3D 0%, #C59B5B 100%);">
    <div class="container">
        <h1>Pest Control Services</h1>
        <p>Professional, safe, and effective pest control for homes and businesses across Kenya</p>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Our Services</span>
            <h2 class="section-title">Complete <span class="text-gold">Pest Control</span></h2>
            <p class="section-desc">From cockroaches to termites — we handle all pest problems with expertise and care</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;">
            <?php if ($active_service && isset($services[$active_service])): ?>
                <?php $svc = $services[$active_service]; ?>
                <div class="product-card" style="grid-column:1/-1;max-width:800px;margin:0 auto;">
                    <div class="product-card-image" style="aspect-ratio:16/9;">
                        <img src="<?php echo alnuur_img($svc['image']); ?>" alt="<?php echo esc_attr($svc['name']); ?>" loading="lazy">
                    </div>
                    <div class="product-card-body">
                        <h3 class="product-card-title" style="font-size:24px;"><?php echo esc_html($svc['name']); ?></h3>
                        <p class="product-card-desc" style="font-size:15px;"><?php echo esc_html($svc['desc']); ?></p>
                        <div class="product-card-price" style="font-size:24px;">From <?php echo alnuur_format_kes($svc['price']); ?></div>
                        <ul style="font-size:14px;color:var(--text-light);margin-bottom:20px;padding-left:20px;list-style:disc;">
                            <?php foreach ($svc['features'] as $f): ?>
                                <li style="margin-bottom:6px;"><?php echo esc_html($f); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="product-card-buttons" style="flex-direction:row;">
                            <a href="<?php echo esc_url(home_url('/booking')); ?>" class="btn btn-sm btn-primary">Book Now</a>
                            <a href="https://wa.me/254758289578?text=I%20need%20<?php echo urlencode($svc['name']); ?>" target="_blank" rel="noopener" class="btn btn-sm btn-gold">Inquire on WhatsApp</a>
                            <a href="<?php echo esc_url(home_url('/pest-control')); ?>" class="btn btn-sm btn-outline" style="border-color:var(--emerald);color:var(--emerald);">View All Services</a>
                        </div>
                    </div>
                </div>
            <?php else: ?>
            <?php foreach ($services as $slug => $svc): ?>
                <div class="product-card">
                    <div class="product-card-image" style="aspect-ratio:16/9;">
                        <img src="<?php echo alnuur_img($svc['image']); ?>" alt="<?php echo esc_attr($svc['name']); ?>" loading="lazy">
                    </div>
                    <div class="product-card-body">
                        <h3 class="product-card-title"><?php echo esc_html($svc['name']); ?></h3>
                        <p class="product-card-desc"><?php echo esc_html($svc['desc']); ?></p>
                        <div class="product-card-price">From <?php echo alnuur_format_kes($svc['price']); ?></div>
                        <ul style="font-size:13px;color:var(--text-light);margin-bottom:16px;padding-left:20px;list-style:disc;">
                            <?php foreach ($svc['features'] as $f): ?>
                                <li style="margin-bottom:4px;"><?php echo esc_html($f); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="product-card-buttons" style="flex-direction:column;">
                            <a href="<?php echo esc_url(home_url('/booking')); ?>" class="btn btn-sm btn-primary" style="justify-content:center;">Book Now</a>
                            <a href="https://wa.me/254758289578?text=I%20need%20<?php echo urlencode($svc['name']); ?>" target="_blank" rel="noopener" class="btn btn-sm btn-gold" style="justify-content:center;">Inquire on WhatsApp</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<section class="section bg-light">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">FAQ</span>
            <h2 class="section-title">Frequently Asked <span class="text-gold">Questions</span></h2>
        </div>
        <div style="max-width:800px;margin:0 auto;display:grid;gap:12px;">
            <details class="faq-item" style="background:var(--white);border-radius:var(--radius-sm);padding:20px 24px;box-shadow:var(--shadow);">
                <summary style="font-weight:600;color:var(--charcoal);cursor:pointer;font-size:16px;">Are your pest control treatments safe for children and pets?</summary>
                <p style="margin-top:12px;color:var(--text-light);font-size:14px;line-height:1.7;">Yes. We use EPA-approved products that are safe when used as directed. We recommend keeping children and pets away from treated areas for 2-4 hours after application.</p>
            </details>
            <details class="faq-item" style="background:var(--white);border-radius:var(--radius-sm);padding:20px 24px;box-shadow:var(--shadow);">
                <summary style="font-weight:600;color:var(--charcoal);cursor:pointer;font-size:16px;">How long does a typical pest control treatment take?</summary>
                <p style="margin-top:12px;color:var(--text-light);font-size:14px;line-height:1.7;">Most residential treatments take 30-60 minutes depending on the size of your property and the severity of the infestation.</p>
            </details>
            <details class="faq-item" style="background:var(--white);border-radius:var(--radius-sm);padding:20px 24px;box-shadow:var(--shadow);">
                <summary style="font-weight:600;color:var(--charcoal);cursor:pointer;font-size:16px;">Do you offer warranties on your pest control services?</summary>
                <p style="margin-top:12px;color:var(--text-light);font-size:14px;line-height:1.7;">Yes. We offer warranties ranging from 1-3 months on most treatments. If pests return within the warranty period, we'll retreat at no extra cost.</p>
            </details>
            <details class="faq-item" style="background:var(--white);border-radius:var(--radius-sm);padding:20px 24px;box-shadow:var(--shadow);">
                <summary style="font-weight:600;color:var(--charcoal);cursor:pointer;font-size:16px;">Do you deliver furniture across Kenya?</summary>
                <p style="margin-top:12px;color:var(--text-light);font-size:14px;line-height:1.7;">Yes! We deliver to Nairobi, Mombasa, Kisumu, Nakuru, Thika, and all major towns across Kenya. Delivery charges apply based on location.</p>
            </details>
            <details class="faq-item" style="background:var(--white);border-radius:var(--radius-sm);padding:20px 24px;box-shadow:var(--shadow);">
                <summary style="font-weight:600;color:var(--charcoal);cursor:pointer;font-size:16px;">What payment methods do you accept?</summary>
                <p style="margin-top:12px;color:var(--text-light);font-size:14px;line-height:1.7;">We accept M-Pesa, bank transfers, and cash on delivery (for select areas). For large orders, we offer flexible payment plans.</p>
            </details>
        </div>
    </div>
</section>
<?php get_footer(); ?>
