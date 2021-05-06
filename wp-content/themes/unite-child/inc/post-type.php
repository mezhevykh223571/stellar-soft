<?php

function filmsPostType() {
  $labels = [
    'name' => _x('Фильмы', 'Post Type General Name', 'unite-child'),
    'singular_name' => _x('Фильм', 'Post Type Singular Name', 'unite-child'),
    'menu_name' => __('Фильмы', 'unite-child'),
    'name_admin_bar' => __('Фильм', 'unite-child'),
    'archives' => __('Item Archives', 'unite-child'),
    'attributes' => __('Item Attributes', 'unite-child'),
    'parent_item_colon' => __('Parent Item:', 'unite-child'),
    'all_items' => __('All Items', 'unite-child'),
    'add_new_item' => __('Add New Item', 'unite-child'),
    'add_new' => __('Add New', 'unite-child'),
    'new_item' => __('New Item', 'unite-child'),
    'edit_item' => __('Edit Item', 'unite-child'),
    'update_item' => __('Update Item', 'unite-child'),
    'view_item' => __('View Item', 'unite-child'),
    'view_items' => __('View Items', 'unite-child'),
    'search_items' => __('Search Item', 'unite-child'),
    'not_found' => __('Not found', 'unite-child'),
    'not_found_in_trash' => __('Not found in Trash', 'unite-child'),
    'featured_image' => __('Featured Image', 'unite-child'),
    'set_featured_image' => __('Set featured image', 'unite-child'),
    'remove_featured_image' => __('Remove featured image', 'unite-child'),
    'use_featured_image' => __('Use as featured image', 'unite-child'),
    'insert_into_item' => __('Insert into item', 'unite-child'),
    'uploaded_to_this_item' => __('Uploaded to this item', 'unite-child'),
    'items_list' => __('Items list', 'unite-child'),
    'items_list_navigation' => __('Items list navigation', 'unite-child'),
    'filter_items_list' => __('Filter items list', 'unite-child'),
  ];
  $args = [
    'label' => __('Фильм', 'unite-child'),
    'labels' => $labels,
    'supports' => ['title', 'editor', 'thumbnail'],
    'taxonomies' => ['category', 'post_tag'],
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'capability_type' => 'page',
  ];

  register_post_type('films', $args);
}

add_action('init', 'filmsPostType', 0);

function genresTaxonomy() {
  $labels = [
    'name' => _x('Жанры', 'Taxonomy General Name', 'unite-child'),
    'singular_name' => _x('Жанр', 'Taxonomy Singular Name', 'unite-child'),
    'menu_name' => __('Жанры', 'unite-child'),
    'all_items' => __('All Items', 'unite-child'),
    'parent_item' => __('Parent Item', 'unite-child'),
    'parent_item_colon' => __('Parent Item:', 'unite-child'),
    'new_item_name' => __('New Item Name', 'unite-child'),
    'add_new_item' => __('Add New Item', 'unite-child'),
    'edit_item' => __('Edit Item', 'unite-child'),
    'update_item' => __('Update Item', 'unite-child'),
    'view_item' => __('View Item', 'unite-child'),
    'separate_items_with_commas' => __('Separate items with commas', 'unite-child'),
    'add_or_remove_items' => __('Add or remove items', 'unite-child'),
    'choose_from_most_used' => __('Choose from the most used', 'unite-child'),
    'popular_items' => __('Popular Items', 'unite-child'),
    'search_items' => __('Search Items', 'unite-child'),
    'not_found' => __('Not Found', 'unite-child'),
    'no_terms' => __('No items', 'unite-child'),
    'items_list' => __('Items list', 'unite-child'),
    'items_list_navigation' => __('Items list navigation', 'unite-child'),
  ];
  $args = [
    'labels' => $labels,
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_admin_column' => true,
    'show_in_nav_menus' => true,
    'show_tagcloud' => true,
  ];

  register_taxonomy('genres', ['films'], $args);
}

add_action('init', 'genresTaxonomy', 0);

function countriesTaxonomy() {
  $labels = [
    'name' => _x('Страны', 'Taxonomy General Name', 'unite-child'),
    'singular_name' => _x('Страна', 'Taxonomy Singular Name', 'unite-child'),
    'menu_name' => __('Страны', 'unite-child'),
    'all_items' => __('All Items', 'unite-child'),
    'parent_item' => __('Parent Item', 'unite-child'),
    'parent_item_colon' => __('Parent Item:', 'unite-child'),
    'new_item_name' => __('New Item Name', 'unite-child'),
    'add_new_item' => __('Add New Item', 'unite-child'),
    'edit_item' => __('Edit Item', 'unite-child'),
    'update_item' => __('Update Item', 'unite-child'),
    'view_item' => __('View Item', 'unite-child'),
    'separate_items_with_commas' => __('Separate items with commas', 'unite-child'),
    'add_or_remove_items' => __('Add or remove items', 'unite-child'),
    'choose_from_most_used' => __('Choose from the most used', 'unite-child'),
    'popular_items' => __('Popular Items', 'unite-child'),
    'search_items' => __('Search Items', 'unite-child'),
    'not_found' => __('Not Found', 'unite-child'),
    'no_terms' => __('No items', 'unite-child'),
    'items_list' => __('Items list', 'unite-child'),
    'items_list_navigation' => __('Items list navigation', 'unite-child'),
  ];
  $args = [
    'labels' => $labels,
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_admin_column' => true,
    'show_in_nav_menus' => true,
    'show_tagcloud' => true,
  ];

  register_taxonomy('countries', ['films'], $args);
}

add_action('init', 'countriesTaxonomy', 0);

function yearTaxonomy() {
  $labels = [
    'name' => _x('Год', 'Taxonomy General Name', 'unite-child'),
    'singular_name' => _x('Год', 'Taxonomy Singular Name', 'unite-child'),
    'menu_name' => __('Год', 'unite-child'),
    'all_items' => __('All Items', 'unite-child'),
    'parent_item' => __('Parent Item', 'unite-child'),
    'parent_item_colon' => __('Parent Item:', 'unite-child'),
    'new_item_name' => __('New Item Name', 'unite-child'),
    'add_new_item' => __('Add New Item', 'unite-child'),
    'edit_item' => __('Edit Item', 'unite-child'),
    'update_item' => __('Update Item', 'unite-child'),
    'view_item' => __('View Item', 'unite-child'),
    'separate_items_with_commas' => __('Separate items with commas', 'unite-child'),
    'add_or_remove_items' => __('Add or remove items', 'unite-child'),
    'choose_from_most_used' => __('Choose from the most used', 'unite-child'),
    'popular_items' => __('Popular Items', 'unite-child'),
    'search_items' => __('Search Items', 'unite-child'),
    'not_found' => __('Not Found', 'unite-child'),
    'no_terms' => __('No items', 'unite-child'),
    'items_list' => __('Items list', 'unite-child'),
    'items_list_navigation' => __('Items list navigation', 'unite-child'),
  ];
  $args = [
    'labels' => $labels,
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_admin_column' => true,
    'show_in_nav_menus' => true,
    'show_tagcloud' => true,
  ];

  register_taxonomy('year', ['films'], $args);
}

add_action('init', 'yearTaxonomy', 0);

function actorsTaxonomy() {
  $labels = [
    'name' => _x('Актеры', 'Taxonomy General Name', 'unite-child'),
    'singular_name' => _x('Актер', 'Taxonomy Singular Name', 'unite-child'),
    'menu_name' => __('Актеры', 'unite-child'),
    'all_items' => __('All Items', 'unite-child'),
    'parent_item' => __('Parent Item', 'unite-child'),
    'parent_item_colon' => __('Parent Item:', 'unite-child'),
    'new_item_name' => __('New Item Name', 'unite-child'),
    'add_new_item' => __('Add New Item', 'unite-child'),
    'edit_item' => __('Edit Item', 'unite-child'),
    'update_item' => __('Update Item', 'unite-child'),
    'view_item' => __('View Item', 'unite-child'),
    'separate_items_with_commas' => __('Separate items with commas', 'unite-child'),
    'add_or_remove_items' => __('Add or remove items', 'unite-child'),
    'choose_from_most_used' => __('Choose from the most used', 'unite-child'),
    'popular_items' => __('Popular Items', 'unite-child'),
    'search_items' => __('Search Items', 'unite-child'),
    'not_found' => __('Not Found', 'unite-child'),
    'no_terms' => __('No items', 'unite-child'),
    'items_list' => __('Items list', 'unite-child'),
    'items_list_navigation' => __('Items list navigation', 'unite-child'),
  ];
  $args = [
    'labels' => $labels,
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_admin_column' => true,
    'show_in_nav_menus' => true,
    'show_tagcloud' => true,
  ];

  register_taxonomy('actors', ['films'], $args);
}

add_action('init', 'actorsTaxonomy', 0);

function customFilmFieldsAddMetaBox() {
  add_meta_box(
    'additional-info',
    __('Additional info'),
    'customFilmFields',
    'films',
    'normal',
    'high'
  );
}

add_action('add_meta_boxes', 'customFilmFieldsAddMetaBox');

function customFilmFields($post) {
  $values = get_post_custom($post->ID);
  $sessionCost = $values['session-cost'] ? esc_attr($values['session-cost'][0]) : '';
  $releaseDate = $values['release-date'] ? esc_attr($values['release-date'][0]) : '';

  echo '<div class="form-wrap">';
  echo '<div class="form-field">';
  echo '<label for="session-cost">Стоимость сеанса</label>';
  echo '<input name="session-cost" id="session-cost" type="text" value="' . $sessionCost . '">';
  echo '</div>';
  echo '<div class="form-field">';
  echo '<label for="release-date">Дата выхода в прокат</label>';
  echo '<input name="release-date" id="release-date" type="text" value="' . $releaseDate . '">';
  echo '</div>';
  echo '</div>';
}

function customFilmFieldsSave($post_id) {
    update_post_meta($post_id, 'session-cost', $_POST['session-cost']);
    update_post_meta($post_id, 'release-date', $_POST['release-date']);
}

add_action('save_post', 'customFilmFieldsSave');
