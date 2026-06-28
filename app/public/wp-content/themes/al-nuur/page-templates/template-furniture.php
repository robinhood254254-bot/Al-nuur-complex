<?php
/* Template Name: Furniture */
get_header();
$products = alnuur_get_products();
$furniture_keys = ['sofas', 'beds', 'mattresses', 'dining', 'wardrobes', 'office', 'outdoor', 'decor'];
$active_cat = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : '';
?>
<section class="category-page-header">
    <div class="container">
        <h1>Premium Furniture</h1>
        <p>Discover our curated collection of luxury furniture for every room in your home</p>
    </div>
</section>
<nav class="category-nav">
    <div class="container">
        <div class="category-nav-list">
            <a href="<?php echo esc_url(home_url('/furniture')); ?>" class="<?php echo empty($active_cat) ? 'active' : ''; ?>">All Furniture</a>
            <?php foreach ($furniture_keys as $key): ?>
                <a href="<?php echo esc_url(add_query_arg('category', $key, home_url('/furniture'))); ?>" class="<?php echo $active_cat === $key ? 'active' : ''; ?>"><?php echo esc_html($products[$key]['name']); ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</nav>
<section class="section">
    <div class="container">
        <?php $items = []; ?>
        <?php if ($active_cat && isset($products[$active_cat])): ?>
            <div style="margin-bottom:32px;">
                <h2 style="font-family:var(--font-primary);font-size:28px;color:var(--charcoal);"><?php echo esc_html($products[$active_cat]['name']); ?></h2>
                <p style="color:var(--text-light);margin-top:8px;"><?php echo esc_html($products[$active_cat]['description']); ?></p>
            </div>
            <?php $items = $products[$active_cat]['products']; ?>
        <?php else: ?>
            <?php foreach ($furniture_keys as $key): $items = array_merge($items, $products[$key]['products']); endforeach; ?>
        <?php endif; ?>
        <div class="products-grid">
            <?php foreach ($items as $item): ?>
                <div class="product-card">
                    <div class="product-card-image">
                        <img src="<?php echo alnuur_img($item['image']); ?>" alt="<?php echo esc_attr($item['name']); ?>" loading="lazy">
                        <div class="product-card-actions">
                            <a href="https://wa.me/254758289578?text=I'm%20interested%20in%20<?php echo urlencode($item['name']); ?>" target="_blank" rel="noopener" class="product-action-btn" title="Inquire on WhatsApp">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="product-card-body">
                        <h3 class="product-card-title"><?php echo esc_html($item['name']); ?></h3>
                        <p class="product-card-desc"><?php echo esc_html($item['desc']); ?></p>
                        <div class="product-card-price"><?php echo alnuur_format_kes($item['price']); ?></div>
                        <div class="product-card-buttons">
                            <a href="https://wa.me/254758289578?text=Quote%20request%20for%20<?php echo urlencode($item['name']); ?>" target="_blank" rel="noopener" class="btn btn-sm btn-primary">Get Quote</a>
                            <a href="tel:+254758289578" class="btn btn-sm btn-outline" style="border-color:var(--emerald);color:var(--emerald);">Call Now</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
