<?php

function pagination() {
  global $wp_query, $paged;

  $paginate = paginate_links([
      'base' => get_pagenum_link(1) . '%_%',
      'type' => 'array',
      'total' => $wp_query->max_num_pages,
      'format' => 'page/%#%',
      'current' => max(1, get_query_var('paged')),
      'prev_text' => __('&laquo;'),
      'next_text' => __('&raquo;'),
    ]
  );

  if ($wp_query->max_num_pages > 1) : ?>
    <nav class="archive-nav">
      <ul class="pagination pagination--disabled">
        <li class="disabled hidden-xs">
        <span aria-hidden="true">
          <?php echo __('Страница', 'unite-child'), ' ', ($paged === 0) ? 1 : $paged, ' ', __('из', 'unite-child'), ' ', $wp_query->max_num_pages; ?>
        </span>
        </li>
      </ul>

      <ul class="pagination">
        <?php
        foreach ($paginate as $key => $page) {
          $active = '';

          if ($key === $paged) {
            $active = 'active';
          }

          echo '<li class="' . $active . '">' . $page . '</li>';
        }
        ?>
      </ul>
    </nav>
  <?php endif;
}
