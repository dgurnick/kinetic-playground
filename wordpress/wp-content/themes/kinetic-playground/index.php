<?php get_header(); ?>
<main class="max-w-7xl mx-auto px-6 py-20">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-16' ); ?>>
            <h2 class="font-headline text-3xl font-bold text-on-surface mb-4">
                <a href="<?php the_permalink(); ?>" class="hover:text-primary transition-colors"><?php the_title(); ?></a>
            </h2>
            <div class="text-on-surface-variant leading-relaxed">
                <?php the_excerpt(); ?>
            </div>
        </article>
    <?php endwhile; else : ?>
        <p class="text-on-surface-variant text-lg">No content found.</p>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
