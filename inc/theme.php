<?php

define('DISALLOW_FILE_EDIT', true);

add_filter('excerpt_length', function () {
  return 15;
});

// Add the theme support basic elements
add_theme_support('align-wide');
add_theme_support('title-tag');
add_theme_support('responsive-embeds');
add_theme_support('editor-styles');
add_theme_support('wp-block-styles');
add_theme_support('post-thumbnails');
add_theme_support('html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'script', 'style']);
add_image_size('medium-crop', 800, 600, true);

add_shortcode('partial', function ($atts, $content = null) {
  ob_start();
  get_template_part('partials/' . $atts[0]);
  $output = ob_get_contents();
  ob_end_clean();
  return $output;
});

function get_icon($name, $size = 24)
{
  $output = '<svg viewBox="0 0 24px 24px" width="' . $size . '" height="' . $size . '" class="sprite-icon">';
  $output .= '<use href="' . get_bloginfo('template_url') . '/dist/assets/sprite.svg?123#' . $name . '"></use>';
  $output .= '</svg>';
  return $output;
}

function icon($name, $size = '1em')
{
  echo get_icon($name, $size);
}

function is_new_year()
{
  if (date('m') === '12' && date('d') >= '12') {
    return true;
  }
  if (date('m') === '01' && date('d') <= '10') {
    return true;
  }
  return false;
}

// Array
// (
//     [name] => small_garant_2.jpg
//     [full_path] => small_garant_2.jpg
//     [type] => image/jpeg
//     [tmp_name] => /tmp/phpagipea
//     [error] => 0
//     [size] => 317550
// )
function create_attachment_from_upload($upload, $post_id = 0)
{
  require_once(ABSPATH . 'wp-admin/includes/media.php');
  require_once(ABSPATH . 'wp-admin/includes/file.php');
  require_once(ABSPATH . 'wp-admin/includes/image.php');

  $attachment_id = media_handle_sideload($upload, $post_id);

  if (is_wp_error($attachment_id)) {
    @unlink($file_array['tmp_name']);
    return $attachment_id;
  }

  return $attachment_id;
}

function extract_rutube_id($url)
{
  $parsed = parse_url($url);
  if (isset($parsed['host']) && strpos($parsed['host'], 'rutube.ru') !== false) {
    preg_match('/\/video\/([a-f0-9]+)\//', $parsed['path'], $matches);
    return isset($matches[1]) ? $matches[1] : null;
  }
  return null;
}

function get_pagination($query)
{
  $links = paginate_links([
    'prev_text' => '<span class="icon icon-arrow-left"></span>',
    'next_text' => '<span class="icon icon-arrow-right"></span>',
    'total' => $query->max_num_pages,
    'current' => max(1, get_query_var('paged')),
  ]);

  if ($links) {
    return '<div class="pagination">' . $links . '</div>';
  }
}

function trim_by_sentence($text, $limit = 20)
{
  // 1. Чистим от тегов для безопасного подсчета слов
  $clean_text = wp_strip_all_tags($text);

  // 2. Разбиваем на слова (учитываем UTF-8)
  $words = preg_split('/\s+/u', $clean_text, -1, PREG_SPLIT_NO_EMPTY);

  if (count($words) <= $limit) {
    return $text; // Текст короче лимита
  }

  // 3. Берем кусок до лимита
  $slice = array_slice($words, 0, $limit);
  $slice_string = implode(' ', $slice);

  // 4. Ищем последний конец предложения в этом куске
  // Ищем . ! ? ... (учитываем многоточие)
  if (preg_match('/(.*[.!?…])\s*/u', $slice_string, $matches)) {
    return $matches[1] . '...';
  }

  // 5. Если предложений не найдено — режем жестко по словам
  return $slice_string . '...';
}

function get_custom_excerpt($limit = 20)
{
  // Получаем raw-контент без фильтров и автоматики WP
  $content = get_post_field('post_content', get_the_ID());
  $separator = '<!--more-->';

  if (strpos($content, $separator) !== false) {
    $parts = explode($separator, $content);
    $preview = $parts[0];
    // Применяем фильтры, чтобы работали шорткоды, но без логики "more"
    $preview = apply_filters('the_content', $preview);
  } else {
    // Обрезаем по словам (теги удалятся)
    $preview = trim_by_sentence($content, $limit, '...');
  }

  return $preview;
}
