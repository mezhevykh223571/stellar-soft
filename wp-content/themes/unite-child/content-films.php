<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header page-header">
    <a href="<?php echo get_permalink(get_the_ID()); ?>">
      <?php the_post_thumbnail('unite-featured', ['class' => 'thumbnail']); ?>
    </a>

    <h1 class="entry-title">
      <a href="<?php echo get_permalink(get_the_ID()); ?>">
        <?php the_title(); ?>
      </a>
    </h1>
  </header>

  <div class="entry-content">
    <?php the_content(); ?>
  </div>

  <footer class="entry-meta">
    <hr class="section-divider">

    <div>
      <span class="col-title"><?php _e('Страна', ''); ?>:</span>

      <?php echo get_the_term_list(get_the_ID(), 'countries', '', ', '); ?>
    </div>

    <div>
      <span class="col-title"><?php _e('Жанр', ''); ?>:</span>

      <?php echo get_the_term_list(get_the_ID(), 'genres', '', ', '); ?>
    </div>

    <hr class="section-divider">
  </footer>
</article>
