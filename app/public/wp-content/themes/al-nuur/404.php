<?php get_header(); ?>
<section class="section" style="min-height:60vh;display:flex;align-items:center;text-align:center;">
    <div class="container">
        <h1 style="font-family:var(--font-primary);font-size:120px;color:var(--emerald);line-height:1;margin-bottom:16px;">404</h1>
        <h2 style="font-family:var(--font-primary);font-size:32px;color:var(--charcoal);margin-bottom:12px;">Page Not Found</h2>
        <p style="font-size:16px;color:var(--text-light);margin-bottom:32px;">The page you're looking for doesn't exist or has been moved.</p>
        <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">Go Home</a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-outline" style="border-color:var(--emerald);color:var(--emerald);">Contact Us</a>
        </div>
    </div>
</section>
<?php get_footer(); ?>
