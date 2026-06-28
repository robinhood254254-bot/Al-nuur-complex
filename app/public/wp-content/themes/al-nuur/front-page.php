<?php
get_header();
$products = alnuur_get_products();
$services = alnuur_get_pest_services();
?>

<section class="hero-section">
    <div class="hero-slider">
        <div class="hero-slide active" style="background-image: linear-gradient(135deg, rgba(13,92,63,0.55) 0%, rgba(8,61,42,0.5) 100%), url('<?php echo alnuur_img('IMAGES/Sofas 1.jpg'); ?>');">
            <div class="container">
                <div class="hero-content">
                    <span class="hero-badge">Premium Quality</span>
                    <h1 class="hero-title">Elegant Furniture for <span class="text-gold">Modern Living</span></h1>
                    <p class="hero-desc">Discover Kenya's finest collection of luxury furniture, home appliances, and professional pest control services.</p>
                    <div class="hero-ctas">
                        <a href="<?php echo esc_url(home_url('/furniture')); ?>" class="btn btn-primary">Explore Furniture</a>
                        <a href="<?php echo esc_url(home_url('/appliances')); ?>" class="btn btn-outline">Shop Appliances</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slide" style="background-image: linear-gradient(135deg, rgba(13,92,63,0.55) 0%, rgba(8,61,42,0.5) 100%), url('<?php echo alnuur_img('IMAGES/refrigerators and freezers 1.jpg'); ?>');">
            <div class="container">
                <div class="hero-content">
                    <span class="hero-badge">Top Brands</span>
                    <h1 class="hero-title">Home Appliances at <span class="text-gold">Best Prices</span></h1>
                    <p class="hero-desc">From refrigerators to air conditioners — quality appliances for every home and budget.</p>
                    <div class="hero-ctas">
                        <a href="<?php echo esc_url(home_url('/appliances')); ?>" class="btn btn-primary">Shop Now</a>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-outline">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slide" style="background-image: linear-gradient(135deg, rgba(13,92,63,0.55) 0%, rgba(8,61,42,0.5) 100%), url('<?php echo alnuur_img('IMAGES/Bed Bug Treatment 1.jpg'); ?>');">
            <div class="container">
                <div class="hero-content">
                    <span class="hero-badge">Professional Service</span>
                    <h1 class="hero-title">Pest Control You Can <span class="text-gold">Trust</span></h1>
                    <p class="hero-desc">Protect your home and family with our certified pest control solutions. Fast, safe, and effective.</p>
                    <div class="hero-ctas">
                        <a href="<?php echo esc_url(home_url('/pest-control')); ?>" class="btn btn-primary">Our Services</a>
                        <a href="<?php echo esc_url(home_url('/booking')); ?>" class="btn btn-outline">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-nav">
            <button class="hero-dot active" data-slide="0"></button>
            <button class="hero-dot" data-slide="1"></button>
            <button class="hero-dot" data-slide="2"></button>
        </div>
    </div>
</section>

<section class="section categories-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">What We Offer</span>
            <h2 class="section-title">Shop by <span class="text-gold">Category</span></h2>
            <p class="section-desc">Explore our wide range of premium furniture and home appliances</p>
        </div>
        <div class="categories-grid">
            <a href="<?php echo esc_url(home_url('/furniture')); ?>" class="category-card card-furniture">
                <div class="category-icon"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 10V7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3"/><path d="M2 14v3a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-2h14v2a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-3"/><path d="M6 10h12v4H6z"/></svg></div>
                <h3 class="category-name">Furniture</h3>
                <p class="category-count">Sofas, Beds, Dining & More</p>
                <span class="category-arrow">&rarr;</span>
            </a>
            <a href="<?php echo esc_url(home_url('/appliances')); ?>" class="category-card card-appliances">
                <div class="category-icon"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="7" width="20" height="12" rx="2"/><polyline points="7,19 7,21 17,21 17,19"/><line x1="12" y1="7" x2="12" y2="4"/><polyline points="12,4 15,1"/><polyline points="9,4 12,4"/></svg></div>
                <h3 class="category-name">Appliances</h3>
                <p class="category-count">Fridges, TVs, ACs & More</p>
                <span class="category-arrow">&rarr;</span>
            </a>
            <a href="<?php echo esc_url(home_url('/pest-control')); ?>" class="category-card card-pest">
                <div class="category-icon"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
                <h3 class="category-name">Pest Control</h3>
                <p class="category-count">Cockroach, Bed Bug, Termite & More</p>
                <span class="category-arrow">&rarr;</span>
            </a>
        </div>
    </div>
</section>

<section class="section featured-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Featured Products</span>
            <h2 class="section-title">Featured <span class="text-gold">Furniture</span></h2>
            <p class="section-desc">Handpicked premium pieces for your home</p>
        </div>
        <div class="products-slider">
            <div class="products-grid">
                <?php
                $furniture_keys = ['sofas', 'beds', 'mattresses', 'dining', 'wardrobes', 'office', 'outdoor', 'decor'];
                $featured = [];
                foreach ($furniture_keys as $key) {
                    if (isset($products[$key])) {
                        foreach ($products[$key]['products'] as $p) {
                            if (!empty($p['featured'])) {
                                $p['cat_slug'] = $key;
                                $featured[] = $p;
                            }
                        }
                    }
                }
                shuffle($featured);
                $featured = array_slice($featured, 0, 8);
                foreach ($featured as $item): ?>
                    <div class="product-card">
                        <div class="product-card-image">
                            <img src="<?php echo alnuur_img($item['image']); ?>" alt="<?php echo esc_attr($item['name']); ?>" loading="lazy">
                            <div class="product-card-actions">
                                <a href="https://wa.me/254758289578?text=I'm%20interested%20in%20<?php echo urlencode($item['name']); ?>" target="_blank" rel="noopener" class="product-action-btn" title="Inquire on WhatsApp">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/></svg>
                                </a>
                            </div>
                            <span class="product-badge">Featured</span>
                        </div>
                        <div class="product-card-body">
                            <h3 class="product-card-title"><?php echo esc_html($item['name']); ?></h3>
                            <p class="product-card-desc"><?php echo esc_html($item['desc']); ?></p>
                            <div class="product-card-price"><?php echo alnuur_format_kes($item['price']); ?></div>
                            <div class="product-card-buttons">
                                <a href="https://wa.me/254758289578?text=Quote%20request%20for%20<?php echo urlencode($item['name']); ?>" target="_blank" rel="noopener" class="btn btn-sm btn-primary">Get Quote</a>
                                <a href="tel:+254758289578" class="btn btn-sm btn-outline">Call Now</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="section-footer">
            <a href="<?php echo esc_url(home_url('/furniture')); ?>" class="btn btn-primary">View All Furniture &rarr;</a>
        </div>
    </div>
</section>

<section class="section appliances-section bg-light">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Home Appliances</span>
            <h2 class="section-title">Featured <span class="text-gold">Appliances</span></h2>
            <p class="section-desc">Quality appliances from trusted brands</p>
        </div>
        <div class="products-grid">
            <?php
            $appliance_keys = ['refrigerators', 'washing', 'cookers', 'microwaves', 'dispensers', 'televisions', 'airconditioners'];
            $feat_app = [];
            foreach ($appliance_keys as $key) {
                if (isset($products[$key])) {
                    foreach ($products[$key]['products'] as $p) {
                        if (!empty($p['featured'])) {
                            $p['cat_slug'] = $key;
                            $feat_app[] = $p;
                        }
                    }
                }
            }
            shuffle($feat_app);
            $feat_app = array_slice($feat_app, 0, 4);
            foreach ($feat_app as $item): ?>
                <div class="product-card">
                    <div class="product-card-image">
                        <img src="<?php echo alnuur_img($item['image']); ?>" alt="<?php echo esc_attr($item['name']); ?>" loading="lazy">
                        <div class="product-card-actions">
                            <a href="https://wa.me/254758289578?text=I'm%20interested%20in%20<?php echo urlencode($item['name']); ?>" target="_blank" rel="noopener" class="product-action-btn">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/></svg>
                            </a>
                        </div>
                        <span class="product-badge">Featured</span>
                    </div>
                    <div class="product-card-body">
                        <h3 class="product-card-title"><?php echo esc_html($item['name']); ?></h3>
                        <p class="product-card-desc"><?php echo esc_html($item['desc']); ?></p>
                        <div class="product-card-price"><?php echo alnuur_format_kes($item['price']); ?></div>
                        <div class="product-card-buttons">
                            <a href="https://wa.me/254758289578?text=Quote%20request%20for%20<?php echo urlencode($item['name']); ?>" target="_blank" rel="noopener" class="btn btn-sm btn-primary">Get Quote</a>
                            <a href="tel:+254758289578" class="btn btn-sm btn-outline">Call Now</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="section-footer">
            <a href="<?php echo esc_url(home_url('/appliances')); ?>" class="btn btn-primary">View All Appliances &rarr;</a>
        </div>
    </div>
</section>

<section class="section pest-preview-section" style="background-image: linear-gradient(135deg, rgba(13,92,63,0.6) 0%, rgba(8,61,42,0.55) 100%), url('<?php echo alnuur_img('IMAGES/Pest Control.jpg'); ?>');">
    <div class="container">
        <div class="pest-preview-content">
            <div class="section-header light">
                <span class="section-subtitle">Pest Control Services</span>
                <h2 class="section-title">Professional <span class="text-gold">Pest Control</span></h2>
                <p class="section-desc">Fast, safe, and effective pest elimination for homes and businesses across Nairobi</p>
            </div>
            <div class="pest-services-grid">
                <?php foreach ($services as $slug => $svc): ?>
                    <a href="<?php echo esc_url(add_query_arg('service', $slug, home_url('/pest-control'))); ?>" class="pest-service-card">
                        <span class="pest-service-icon"><?php echo $svc['icon']; ?></span>
                        <h4><?php echo esc_html($svc['name']); ?></h4>
                        <p>From <?php echo alnuur_format_kes($svc['price']); ?></p>
                    </a>
                <?php endforeach; ?>
            </div>
            <div class="pest-ctas">
                <a href="<?php echo esc_url(home_url('/pest-control')); ?>" class="btn btn-primary btn-lg">View All Services</a>
                <a href="<?php echo esc_url(home_url('/booking')); ?>" class="btn btn-gold btn-lg">Book Appointment</a>
                <a href="https://wa.me/254758289578?text=I%20need%20pest%20control%20services" target="_blank" rel="noopener" class="btn btn-outline btn-lg">Chat on WhatsApp</a>
            </div>
        </div>
    </div>
</section>

<section class="section why-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Why Choose Us</span>
            <h2 class="section-title">The Al Nuur <span class="text-gold">Difference</span></h2>
        </div>
        <div class="why-grid">
            <div class="why-card">
                <div class="why-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3>Premium Quality</h3>
                <p>We source only the finest furniture and appliances from trusted manufacturers worldwide.</p>
            </div>
            <div class="why-card">
                <div class="why-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
                </div>
                <h3>Professional Service</h3>
                <p>Our team of certified technicians delivers exceptional service with every visit.</p>
            </div>
            <div class="why-card">
                <div class="why-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h3>Nairobi Delivery</h3>
                <p>Fast and reliable delivery across Nairobi and surrounding areas.</p>
            </div>
            <div class="why-card">
                <div class="why-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                </div>
                <h3>Affordable Prices</h3>
                <p>Competitive pricing with flexible payment options. Premium doesn't have to break the bank.</p>
            </div>
        </div>
    </div>
</section>

<section class="section testimonial-section bg-light">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Testimonials</span>
            <h2 class="section-title">What Our <span class="text-gold">Clients Say</span></h2>
        </div>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-text">"Excellent quality furniture! The sofa set I bought is beautiful and comfortable. Delivery was prompt and the team was professional."</p>
                <div class="testimonial-author">
                    <strong>James K.</strong>
                    <span>Nairobi</span>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-text">"Al Nuur handled our bed bug infestation quickly and effectively. The team was thorough and the treatment worked. Highly recommend!"</p>
                <div class="testimonial-author">
                    <strong>Mary W.</strong>
                    <span>Westlands</span>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-text">"Best place to shop for appliances in Nairobi. Great prices and the refrigerator I bought works perfectly. Will definitely be back."</p>
                <div class="testimonial-author">
                    <strong>Peter O.</strong>
                    <span>Kilimani</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section promo-section" style="background: linear-gradient(135deg, #C59B5B 0%, #A67C3D 100%);">
    <div class="container">
        <div class="promo-content">
            <h2 class="promo-title">Ready to Transform Your Space?</h2>
            <p class="promo-desc">Visit our showroom or contact us for a free consultation. We serve Nairobi and all major towns in Kenya.</p>
            <div class="promo-ctas">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-dark">Contact Us</a>
                <a href="https://wa.me/254758289578" target="_blank" rel="noopener" class="btn btn-outline btn-outline-light">Chat on WhatsApp</a>
                <a href="tel:+254758289578" class="btn btn-gold">Call Now</a>
            </div>
        </div>
    </div>
</section>

<section class="section service-areas-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Service Areas</span>
            <h2 class="section-title">Areas We <span class="text-gold">Serve</span></h2>
            <p class="section-desc">Proudly serving Nairobi and major towns across Kenya</p>
        </div>
        <div class="areas-grid">
            <div class="area-card"><span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="vertical-align:middle;margin-right:4px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span> Nairobi CBD</div>
            <div class="area-card"><span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="vertical-align:middle;margin-right:4px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span> Westlands</div>
            <div class="area-card"><span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="vertical-align:middle;margin-right:4px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span> Kilimani</div>
            <div class="area-card"><span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="vertical-align:middle;margin-right:4px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span> Karen</div>
            <div class="area-card"><span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="vertical-align:middle;margin-right:4px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span> Lang'ata</div>
            <div class="area-card"><span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="vertical-align:middle;margin-right:4px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span> Eastlands</div>
            <div class="area-card"><span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="vertical-align:middle;margin-right:4px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span> Thika</div>
            <div class="area-card"><span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="vertical-align:middle;margin-right:4px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span> Kiambu</div>
            <div class="area-card"><span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="vertical-align:middle;margin-right:4px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span> Ruaka</div>
            <div class="area-card"><span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="vertical-align:middle;margin-right:4px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span> Machakos</div>
            <div class="area-card"><span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="vertical-align:middle;margin-right:4px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span> Kajiado</div>
            <div class="area-card"><span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="vertical-align:middle;margin-right:4px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span> Mombasa</div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
