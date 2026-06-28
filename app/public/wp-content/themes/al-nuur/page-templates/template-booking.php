<?php
/* Template Name: Booking */
get_header();
$services = alnuur_get_pest_services();
?>
<section class="category-page-header" style="background:linear-gradient(135deg, #0D5C3F 0%, #1A7A55 100%);">
    <div class="container">
        <h1>Book a Service</h1>
        <p>Schedule your pest control service today — we'll confirm your appointment within 2 hours</p>
    </div>
</section>
<section class="booking-section">
    <div class="container">
        <div class="booking-layout">
            <div class="booking-info">
                <h2>Schedule Your <span style="color:var(--gold);">Pest Control</span> Service</h2>
                <p>Fill out the booking form and our team will confirm your appointment via WhatsApp or phone call within 2 hours during business hours.</p>
                <div class="booking-benefits">
                    <div class="booking-benefit">
                        <div class="booking-benefit-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20,6 9,17 4,12"/></svg></div>
                        <div>
                            <h4>Fast Confirmation</h4>
                            <p>We respond within 2 hours during business hours</p>
                        </div>
                    </div>
                    <div class="booking-benefit">
                        <div class="booking-benefit-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/><circle cx="12" cy="16" r="1"/></svg></div>
                        <div>
                            <h4>Licensed & Insured</h4>
                            <p>All our technicians are certified and fully insured</p>
                        </div>
                    </div>
                    <div class="booking-benefit">
                        <div class="booking-benefit-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23,4 23,10 17,10"/><polyline points="1,20 1,14 7,14"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg></div>
                        <div>
                            <h4>Satisfaction Guaranteed</h4>
                            <p>If pests return, we retreat for free within warranty</p>
                        </div>
                    </div>
                    <div class="booking-benefit">
                        <div class="booking-benefit-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/><line x1="8" y1="9" x2="16" y2="9"/><line x1="8" y1="13" x2="12" y2="13"/></svg></div>
                        <div>
                            <h4>WhatsApp Support</h4>
                            <p>Chat with us directly for quick questions</p>
                            <a href="https://wa.me/254758289578" target="_blank" rel="noopener" style="color:var(--emerald);font-weight:600;">+254 758 289 578</a>
                        </div>
                    </div>
                </div>
                <div style="margin-top:32px;padding:24px;background:var(--light-gray);border-radius:var(--radius);">
                    <p style="font-size:14px;color:var(--text-light);margin-bottom:12px;"><strong style="color:var(--charcoal);">Need immediate help?</strong> Call us directly:</p>
                    <a href="tel:+254758289578" class="btn btn-primary btn-lg" style="width:100%;">Call +254 758 289 578</a>
                </div>
            </div>
            <div class="booking-form-container">
                <h3>Book Your Service</h3>
                <form id="booking-form">
                    <div class="form-group">
                        <label for="booking-service">Service Type *</label>
                        <select id="booking-service" required>
                            <option value="">Select a service...</option>
                            <?php foreach ($services as $slug => $svc): ?>
                                <option value="<?php echo esc_attr($svc['name']); ?>"><?php echo esc_html($svc['name']); ?> — From <?php echo alnuur_format_kes($svc['price']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="booking-date">Preferred Date *</label>
                            <input type="date" id="booking-date" required>
                        </div>
                        <div class="form-group">
                            <label for="booking-time">Preferred Time *</label>
                            <select id="booking-time" required>
                                <option value="">Select time...</option>
                                <option value="8:00 AM - 10:00 AM">8:00 AM - 10:00 AM</option>
                                <option value="10:00 AM - 12:00 PM">10:00 AM - 12:00 PM</option>
                                <option value="12:00 PM - 2:00 PM">12:00 PM - 2:00 PM</option>
                                <option value="2:00 PM - 4:00 PM">2:00 PM - 4:00 PM</option>
                                <option value="4:00 PM - 6:00 PM">4:00 PM - 6:00 PM</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="booking-name">Your Name *</label>
                            <input type="text" id="booking-name" placeholder="John Doe" required>
                        </div>
                        <div class="form-group">
                            <label for="booking-phone">Phone Number *</label>
                            <input type="tel" id="booking-phone" placeholder="+254 7XX XXX XXX" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="booking-location">Location / Estate</label>
                        <input type="text" id="booking-location" placeholder="e.g. Westlands, Nairobi">
                    </div>
                    <div class="form-group">
                        <label for="booking-desc">Describe Your Pest Problem</label>
                        <textarea id="booking-desc" placeholder="Tell us about the pest issue you're experiencing..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-gold btn-lg form-submit"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right:4px;vertical-align:middle;"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg> Submit Booking Request</button>
                    <p style="font-size:12px;color:var(--text-light);text-align:center;margin-top:12px;">By submitting, you agree to receive a confirmation via WhatsApp</p>
                </form>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
