<?php
add_action('init', 'register_post_types');

function register_post_types()
{
  register_post_type('photo_report', [
    'label' => null,
    'labels' => [
      'name' => 'Фотоотчёт',
      'singular_name' => 'Фотоотчёт',
      'add_new' => 'Добавить Фотоотчёт',
      'add_new_item' => 'Добавить Фотоотчёт',
      'edit_item' => 'Редактировать Фотоотчёт',
      'new_item' => 'Новая Фотоотчёт',
      'view_item' => 'Смотреть Фотоотчёт',
      'search_items' => 'Искать Фотоотчёт',
      'not_found' => 'Не найдено',
      'not_found_in_trash' => 'Не найдено в корзине',
      'parent_item_colon' => '',
      'menu_name' => 'Фотоотчёты',
    ],
    'description' => '',
    'public' => false,
    'has_archive' => false,
    'menu_icon' => 'dashicons-media-document',
    'supports' => ['title', 'thumbnail'],
    'query_var' => false,
    'show_ui' => true,
  ]);

  register_post_type('video_report', [
    'label' => null,
    'labels' => [
      'name' => 'Видеоотчёт',
      'singular_name' => 'Видеоотчёт',
      'add_new' => 'Добавить Видеоотчёт',
      'add_new_item' => 'Добавить Видеоотчёт',
      'edit_item' => 'Редактировать Видеоотчёт',
      'new_item' => 'Новая Видеоотчёт',
      'view_item' => 'Смотреть Видеоотчёт',
      'search_items' => 'Искать Видеоотчёт',
      'not_found' => 'Не найдено',
      'not_found_in_trash' => 'Не найдено в корзине',
      'parent_item_colon' => '',
      'menu_name' => 'Видеоотчёты',
    ],
    'description' => '',
    'public' => false,
    'has_archive' => false,
    'menu_icon' => 'dashicons-media-document',
    'supports' => ['title', 'thumbnail'],
    'query_var' => false,
    'show_ui' => true,
  ]);
}
