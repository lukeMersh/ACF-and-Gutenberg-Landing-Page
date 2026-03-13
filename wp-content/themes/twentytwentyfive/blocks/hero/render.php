<?php
$title = get_field( 'hero_title' );
$subtitle = get_field( 'hero_subtitle' );
$label = get_field( 'cta_label' );
$url = get_field( 'cta_url' );
$bg = get_field( 'hero_bg' );
?>

<section class="hero" <?php if ( $bg ) : ?> style="background-image: url('<?php echo esc_url( $bg ); ?>');"<?php endif; ?>>
    <?php if ( $title ) : ?>
        <h1><?php echo esc_html( $title ); ?></h1>
    <?php endif; ?>

    <?php if ( $subtitle ) : ?>
        <p><?php echo esc_html( $subtitle ); ?></p>
    <?php endif; ?>

    <?php if ( $label && $url ) : ?>
        <a href="<?php echo esc_url( $url ); ?>" class="btn">
            <?php echo esc_html( $label ); ?>
        </a>
    <?php endif; ?>
</section>


<?php
if (have_rows('features')) : ?>
<section class="features">
    <?php while (have_rows('features')) : the_row(); ?>
    <?php
        $feature_title = get_sub_field('feature_title');
        $feature_description = get_sub_field('feature_text');
        ?>
        <div class="feature-card">
                <h3><?php echo esc_html(get_sub_field('feature_title')); ?></h3>
                <p><?php echo esc_html(get_sub_field('feature_text')); ?></p>
                </div>
            <?php
          endwhile;?>
        </section>
    <?php endif; ?>

<?php
// Registers block pattern categories.
$quote = get_field('testimonial_quote');
$author = get_field('testimonial_author');
$role = get_field('testimonial_role');

if ($quote && $author) : ?>
<section class="testimonial">
    <blockquote>
      <p><?php echo esc_html($quote); ?></p>
      <cite>
        <?php echo esc_html($author); ?>
        <?php if ($role) : ?>
            <span class="role"><?php echo esc_html($role); ?></span>
        <?php endif; ?>
        </cite>
    </blockquote>
</section>
<?php endif; ?>
  