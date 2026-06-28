<?php
/* Template Name: Contact Us */
get_header();
?>
<section class="category-page-header" style="background:linear-gradient(135deg, #0D5C3F 0%, #1A7A55 100%);">
    <div class="container">
        <h1>Contact Us</h1>
        <p>Get in touch with the Al Nuur Complex team — we're here to help</p>
    </div>
</section>
<section class="contact-page bg-light">
    <div class="container">
        <div class="contact-grid">
            <div>
                <div class="contact-info-cards">
                    <div class="contact-card">
                        <div class="contact-card-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.362 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        </div>
                        <div>
                            <h3>Call Us</h3>
                            <p>Speak directly with our team</p>
                            <a href="tel:+254758289578">+254 758 289 578</a>
                        </div>
                    </div>
                    <div class="contact-card">
                        <div class="contact-card-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/></svg>
                        </div>
                        <div>
                            <h3>WhatsApp</h3>
                            <p>Chat with us instantly</p>
                            <a href="https://wa.me/254758289578" target="_blank" rel="noopener" style="color:#25D366;">+254 758 289 578</a>
                        </div>
                    </div>
                    <div class="contact-card">
                        <div class="contact-card-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </div>
                        <div>
                            <h3>Email Us</h3>
                            <p>Send us an email</p>
                            <a href="mailto:info@alnuurcomplex.co.ke">info@alnuurcomplex.co.ke</a>
                        </div>
                    </div>
                    <div class="contact-card">
                        <div class="contact-card-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div>
                            <h3>Visit Us</h3>
                            <p>Nairobi, Kenya</p>
                            <p style="font-size:13px;">Showroom visits by appointment. Contact us to schedule.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="contact-form-wrapper">
                    <h3>Send Us a Message</h3>
                    <p>Fill out the form and we'll get back to you within 2 hours</p>
                    <form id="contact-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="contact-name">Your Name *</label>
                                <input type="text" id="contact-name" placeholder="John Doe" required>
                            </div>
                            <div class="form-group">
                                <label for="contact-phone">Phone Number *</label>
                                <input type="tel" id="contact-phone" placeholder="+254 7XX XXX XXX" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-email">Email (Optional)</label>
                            <input type="email" id="contact-email" placeholder="john@example.com">
                        </div>
                        <div class="form-group">
                            <label for="contact-subject">Subject</label>
                            <select id="contact-subject">
                                <option value="General Inquiry">General Inquiry</option>
                                <option value="Furniture Purchase">Furniture Purchase</option>
                                <option value="Appliance Purchase">Appliance Purchase</option>
                                <option value="Pest Control Booking">Pest Control Booking</option>
                                <option value="Quote Request">Quote Request</option>
                                <option value="Delivery Inquiry">Delivery Inquiry</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="contact-message">Message *</label>
                            <textarea id="contact-message" placeholder="How can we help you?" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg form-submit">Send Message via WhatsApp</button>
                        <p style="font-size:12px;color:var(--text-light);text-align:center;margin-top:12px;">We'll respond via WhatsApp for fastest service</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
