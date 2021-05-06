<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header page-header">
    <div class="row">
      <div class="col-xs-12">
        <h1 class="entry-title film-title"><?php the_title(); ?></h1>
      </div>

      <div class="col-md-4">
        <?php the_post_thumbnail('full', ['class' => 'thumbnail']); ?>
      </div>

      <div class="col-md-8">
        <div class="row film-description">
          <div class="col-xs-3 col-title">
            <?php _e('Дата выхода', 'unite-child'); ?>:
          </div>

          <div class="col-xs-9">
            <?php echo get_post_meta(get_the_ID(), 'release-date', true); ?>
          </div>
        </div>

        <div class="row film-description">
          <div class="col-xs-3 col-title">
            <?php _e('Страна', 'unite-child'); ?>:
          </div>

          <div class="col-xs-9">
            <?php echo get_the_term_list(get_the_ID(), 'countries', '', ', '); ?>
          </div>
        </div>

        <div class="row film-description">
          <div class="col-xs-3 col-title">
            <?php _e('Жанр', 'unite-child'); ?>:
          </div>

          <div class="col-xs-9">
            <?php echo get_the_term_list(get_the_ID(), 'genres', '', ', '); ?>
          </div>
        </div>

        <div class="row film-description">
          <div class="col-xs-3 col-title">
            <?php _e('Актеры', 'unite-child'); ?>:
          </div>

          <div class="col-xs-9">
            <?php echo get_the_term_list(get_the_ID(), 'actors', '', ', '); ?>
          </div>
        </div>

        <div class="row film-description">
          <div class="col-xs-3 col-title">
            <?php _e('Стоимость', 'unite-child'); ?>:
          </div>

          <div class="col-xs-9">
            <?php echo get_post_meta(get_the_ID(), 'session-cost', true); ?>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="entry-content">
    <?php the_content(); ?>
  </div>
</article>
