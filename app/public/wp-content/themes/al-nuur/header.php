<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Al Nuur Complex — Premium Furniture & Pest Control Services in Kenya. Shop sofas, beds, mattresses, appliances and book pest control services.">
    <meta name="theme-color" content="#0D5C3F">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page">
    <a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'alnuur'); ?></a>

    <header id="masthead" class="site-header">
        <div class="header-top">
            <div class="container">
                <div class="header-top-inner">
                    <span class="header-tagline">Premium Furniture & Pest Control — Nairobi, Kenya</span>
                    <div class="header-contacts">
                        <a href="tel:+254758289578" class="header-contact-link">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.362 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            +254 758 289 578
                        </a>
                        <a href="https://wa.me/254758289578" target="_blank" rel="noopener" class="header-contact-link whatsapp-link">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/></svg>
                            WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-main">
            <div class="container">
                <div class="header-main-inner">
                    <div class="site-branding">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="site-logo">
                            <span class="site-title">Al Nuur <span class="title-accent">Complex</span></span>
                            <span class="site-subtitle">Furnitures & Pest Control</span>
                        </a>
                    </div>

                    <nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e('Primary Menu', 'alnuur'); ?>">
                        <button class="menu-toggle" aria-expanded="false" aria-controls="primary-menu" aria-label="Menu">
                            <span class="menu-toggle-bar"></span>
                            <span class="menu-toggle-bar"></span>
                            <span class="menu-toggle-bar"></span>
                        </button>
                        <div class="nav-menu-wrapper">
                            <ul id="primary-menu" class="nav-menu">
                                <li class="menu-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="<?php echo esc_url(home_url('/furniture')); ?>">Furniture</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?php echo esc_url(add_query_arg('category', 'sofas', home_url('/furniture'))); ?>">Sofas</a></li>
                                        <li><a href="<?php echo esc_url(add_query_arg('category', 'beds', home_url('/furniture'))); ?>">Beds</a></li>
                                        <li><a href="<?php echo esc_url(add_query_arg('category', 'mattresses', home_url('/furniture'))); ?>">Mattresses</a></li>
                                        <li><a href="<?php echo esc_url(add_query_arg('category', 'dining', home_url('/furniture'))); ?>">Dining Sets</a></li>
                                        <li><a href="<?php echo esc_url(add_query_arg('category', 'wardrobes', home_url('/furniture'))); ?>">Wardrobes</a></li>
                                        <li><a href="<?php echo esc_url(add_query_arg('category', 'office', home_url('/furniture'))); ?>">Office Furniture</a></li>
                                        <li><a href="<?php echo esc_url(add_query_arg('category', 'outdoor', home_url('/furniture'))); ?>">Outdoor Furniture</a></li>
                                        <li><a href="<?php echo esc_url(add_query_arg('category', 'decor', home_url('/furniture'))); ?>">Home Decor</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="<?php echo esc_url(home_url('/appliances')); ?>">Appliances</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?php echo esc_url(add_query_arg('category', 'refrigerators', home_url('/appliances'))); ?>">Refrigerators</a></li>
                                        <li><a href="<?php echo esc_url(add_query_arg('category', 'washing', home_url('/appliances'))); ?>">Washing Machines</a></li>
                                        <li><a href="<?php echo esc_url(add_query_arg('category', 'cookers', home_url('/appliances'))); ?>">Cookers & Ovens</a></li>
                                        <li><a href="<?php echo esc_url(add_query_arg('category', 'microwaves', home_url('/appliances'))); ?>">Microwaves</a></li>
                                        <li><a href="<?php echo esc_url(add_query_arg('category', 'dispensers', home_url('/appliances'))); ?>">Water Dispensers</a></li>
                                        <li><a href="<?php echo esc_url(add_query_arg('category', 'televisions', home_url('/appliances'))); ?>">Televisions</a></li>
                                        <li><a href="<?php echo esc_url(add_query_arg('category', 'airconditioners', home_url('/appliances'))); ?>">Air Conditioners</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="<?php echo esc_url(home_url('/pest-control')); ?>">Pest Control</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?php echo esc_url(add_query_arg('service', 'cockroach', home_url('/pest-control'))); ?>">Cockroach Control</a></li>
                                        <li><a href="<?php echo esc_url(add_query_arg('service', 'bedbug', home_url('/pest-control'))); ?>">Bed Bug Treatment</a></li>
                                        <li><a href="<?php echo esc_url(add_query_arg('service', 'mosquito', home_url('/pest-control'))); ?>">Mosquito Control</a></li>
                                        <li><a href="<?php echo esc_url(add_query_arg('service', 'rat', home_url('/pest-control'))); ?>">Rat Control</a></li>
                                        <li><a href="<?php echo esc_url(add_query_arg('service', 'termite', home_url('/pest-control'))); ?>">Termite Treatment</a></li>
                                        <li><a href="<?php echo esc_url(add_query_arg('service', 'fumigation', home_url('/pest-control'))); ?>">Fumigation</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="<?php echo esc_url(home_url('/booking')); ?>" class="nav-cta">Book Service</a></li>
                                <li class="menu-item"><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main id="content" class="site-content">
