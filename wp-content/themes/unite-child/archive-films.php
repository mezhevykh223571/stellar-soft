<?php get_header(); ?>

  <section id="primary" class="content-area col-sm-12 col-md-8 <?php echo esc_attr(unite_get_option('site_layout')); ?>">
    <main id="main" class="site-main" role="main">
      <?php if (have_posts()) : ?>
        <header class="page-header">
          <?php
          the_archive_title('<h1 class="page-title">', '</h1>');
          the_archive_description('<div class="taxonomy-description">', '</div>');
          ?>
        </header>

        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('content', 'films'); ?>
        <?php endwhile; ?>

        <?php if (function_exists('pagination')) : ?>
          <div>
            <?php pagination(); ?>
          </div>
        <?php endif; ?>

      <?php else : ?>
        <?php get_template_part('content', 'none'); ?>
      <?php endif; ?>
    </main>
  </section>

<?php
get_sidebar();
get_footer();
