<?php

function recentFilmsShortcode() {
  ob_start();

  $query = new WP_Query([
    'posts_per_page' => 5,
    'post_type' => 'films'
  ]);

  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();

      get_template_part('content', 'films');
    }
  }

  wp_reset_postdata();

  return ob_get_clean();
}

add_shortcode('recent_films', 'recentFilmsShortcode');
