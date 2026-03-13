<?php
/**
 * Template Name: Landing Page
 */

get_header();

$hero_title = get_field('hero_title');
$hero_subtitle = get_field('hero_subtitle');
$cta_label = get_field('cta_label');
$cta_url = get_field('cta_url');
?>

<section class="hero">
    <?php if ($hero_title): ?>
        <h1 class="hero-title"><?php echo esc_html($hero_title); ?></h1>
    <?php endif; ?>

    <?php if ($hero_subtitle): ?>
        <p class="hero-subtitle"><?php echo esc_html($hero_subtitle); ?></p>
    <?php endif; ?>

    <?php if ($cta_label && $cta_url) : ?>
        <a href="<?php echo esc_url($cta_url); ?>" class="btn btn-primary"><?php echo esc_html($cta_label); ?></a>
    <?php endif; ?>
    </section>

<?php
if (have_rows('features')) :
    echo '<section class="features">';
    while (have_rows('features')) : the_row();
        $feature_title = get_sub_field('feature_title');
        $feature_description = get_sub_field('feature_description');
        ?>
        <div class="feature">
                <h3 class="feature-title"><?php echo esc_html(get_sub_field('feature_title')); ?></h3>
                <p class="feature-description"><?php echo esc_html(get_sub_field('feature_description')); ?></p>
</div>
            <?php endwhile; ?>
        </section>
            <?php endif; ?>
<?php
get_footer();   
?>