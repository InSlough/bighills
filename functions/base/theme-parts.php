<?php if (!defined('ABSPATH')) exit;

// add_theme_support('html5', array('search-form'));
add_filter('get_search_form', 'my_search_form');
function my_search_form($form)
{
  $form = '
	<form role="search" method="get" id="searchform" action="' . home_url('/') . '" class="d-flex" >
		<label class="screen-reader-text v-hide" for="s">Запрос для поиска:</label>
		<input type="text" value="' . get_search_query() . '" name="s" id="s" class="form-control" />
		<input type="submit" id="searchsubmit" value="Найти" class="btn btn-light" />
	</form>';
  return $form;
}

add_filter('get_the_archive_title', function ($title) {
  // ?? Change Archive Title
  if (is_category()) {
    $title = single_cat_title('', false);
  } elseif (is_tag()) {
    $title = single_tag_title('', false);
  } elseif (is_author()) {
    $title = '<span class="vcard">' . get_the_author() . '</span>';
  } elseif (is_tax()) { // for custom post types
    $title = sprintf(__('%1$s'), single_term_title('', false));
  } elseif (is_post_type_archive()) {
    $title = post_type_archive_title('', false);
  }
  return $title;
});
