<?php
/**
 * The main template file.
 *
 * @package Internee_Profile
 */

get_header(); ?>

<main id="content" class="site-main">
    <section class="section">
        <div class="container">
            <header class="section-head">
                <p class="eyebrow">Latest posts</p>
                <h2><?php esc_html_e( 'Updates and Notes', 'internee-profile' ); ?></h2>
                <p><?php esc_html_e( 'Recent posts from this site.', 'internee-profile' ); ?></p>
            </header>

            <?php if ( have_posts() ) : ?>
                <div class="grid grid-2">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-card' ); ?>>
                            <header class="entry-header">
                                <?php if ( is_singular() ) : ?>
                                    <?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
                                <?php else : ?>
                                    <?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h3>' ); ?>
                                <?php endif; ?>
                                <p class="entry-meta">
                                    <span><?php echo esc_html( get_the_author() ); ?></span>
                                    <span aria-hidden="true">/</span>
                                    <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
                                </p>
                            </header>

                            <div class="entry-content">
                                <?php the_excerpt(); ?>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <div class="pagination">
                    <?php the_posts_pagination(); ?>
                </div>
            <?php else : ?>
                <article class="entry-card">
                    <h3><?php esc_html_e( 'Nothing Found', 'internee-profile' ); ?></h3>
                    <p><?php esc_html_e( 'Sorry, no posts were found.', 'internee-profile' ); ?></p>
                </article>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer();
