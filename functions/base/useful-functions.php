<?php if (!defined('ABSPATH')) exit;


/**
 * @return echo home_url('extra_url')
 */
function hUrl($url = '')
{
  echo home_url($url);
}
/**
 * @return echo get_stylesheet_directory_uri('extra_url')
 */
function tUrl($extra_url = '')
{
  echo get_stylesheet_directory_uri() . ($extra_url ? $extra_url : '');
}
/**
 * @return string get_stylesheet_directory_uri('extra_url')
 */
function getUrl($extra_url = '')
{
  // OLD = function get_tUrl()
  return get_stylesheet_directory_uri() . ($extra_url ? $extra_url : '');
}
//
function getIDbySlug($page_slug = '')
{
  $page = get_page_by_path($page_slug);
  if ($page) return $page->ID;
  return null;
}

/**
 * @param string  $name  File name
 * @param integer $min   File has [.min] true/false
 * @return wp_enqueue_style("$name-style",getUrl()."/css/$name".($dev?"":".min").".css",NULL);
 */
function f_add_style($name = '', $min = false)
{
  wp_enqueue_style("$name-", getUrl("/dist/css/$name" . ($min ? ".min" : "") . ".css"), NULL);
}

/**
 * @param string  $name  File name
 * @param string  $url   File url
 * @return wp_enqueue_style("$name-style", getUrl() . $url, NULL);
 */
function f_add_c_style($name = '', $url = '')
{
  wp_enqueue_style("$name-", getUrl($url), NULL);
}
/**
 * @param string  $name    File name
 * @param integer $min     File has [.min] true/false
 * @param integer $footer  Insert into Footer true/false
 * @return wp_enqueue_script("$name-script",getUrl()."/js/$name".($dev?"":".min").".css",NULL,$footer);
 */
function f_add_script($name = '', $min = false, $footer = false)
{
  wp_enqueue_script("$name-", getUrl("/dist/js/$name" . ($min ? ".min" : "") . ".js"), NULL, $footer);
}
/**
 * @param string  $name    File name
 * @param string  $url     File link
 * @param integer $footer  Insert into Footer true/false
 * @return wp_enqueue_script("$name-script", getUrl() . $url, NULL, $footer);
 */
function f_add_c_script($name = '', $url = '', $footer = false)
{
  wp_enqueue_script("$name-", getUrl($url), NULL, $footer);
}

/**
 * Only ( jpg jpeg png webp ) formats.
 * @return void or echo '\<picture>...';
 */
function thePicture($file = '', $width_height = '', $params = [])
{
  $url = strtolower($file);
  if ($url) {
    $webp = $params['webp'] ?? 0;
    $class = $params['class'] ?? '';
    $pic_class = $params['pic-class'] ?? '';
    $wh = $width_height ? explode(":", $width_height) : '';
    $w = $wh[0] ? " width='$wh[0]'" : '';
    $h = $wh[1] ? " height='$wh[1]'" : '';
    $img_attr = $params['attr'] ?? '';
    $pic_attr = $params['pic-attr'] ?? '';
    $alt = $params['alt'] ?? '#';
    // $lazy = $params['lazy'] === false ? false : true; // (default: true)
    $lazy = $params['lazy'] ?? false; // (default: false)
    preg_match('/^.*\.(jpg|jpeg|png|webp)$/s', $url, $matches, PREG_OFFSET_CAPTURE, 0); // var_dump($matches);
    $t = $matches[1][0] ? $matches[1][0] : ''; // file extension
    if ($t) {
      $webpUrl = preg_replace('/\.[^.]+$/s', '.webp', $url);
      $tw = ($t == "webp" || $webp);
      $is = "src='$url' " . ($class ? "class='$class'" : '') . " $img_attr $w $h alt='$alt'" . ($tw ? ' onerror="this.parentNode.children[0].remove();"' : '');
      $sw = "srcset='$webpUrl' type='image/webp'";
      $si = "srcset='$url' type='image/" . ($t == 'png' ? 'png' : '') . ($t == 'jpg' || $t == 'jpeg' ? 'jpeg' : '') . "'";
      echo "<picture class='" . ($lazy === true ? 'i-lazy ' : '') . $pic_class . "' $pic_attr>" . ($lazy === true ? (($tw ? "<data-src $sw></data-src>" : '') . "<data-src $si></data-src><data-img $is></data-img>") : (($tw ? "<source $sw>" : '') . "<source $si><img $is>") . '</picture>');
    }
  }
}
/* // EXAMPLE:
thePicture($p . '1.png', '640:360', [
  'webp' => true (default: false), 'class' => 'custom_classes',
  'img-attr' => 'data-name="example"', 'picture-attr' => 'data-name="example"',
  'lazy' => false (default: true)
]);
*/

//
function classes_for_main($extra = '')
{
  global $post;
  $classes = array();
  //
  if ($extra && !is_array($extra)) $classes[] = preg_split('#\s+#', $extra);
  if (is_singular()) $classes[] = 'singular';
  if (is_single()) $classes[] = 'single';
  if (is_page()) $classes[] = 'page';
  if (is_archive()) $classes[] = 'archive';
  if (is_category()) $classes[] = 'category';
  if (is_search()) $classes[] = 'search';
  if (is_shop()) $classes[] = 'shop';
  //
  if ($post) {
    if (is_archive() && $post->post_type == "product") $classes[] = 'shop';
    if (is_singular()) $classes[] = $post->post_name;
    $classes[] = 'type-' . $post->post_type;
    // All public taxonomies.
    $taxonomies = get_taxonomies(array('public' => true));
    foreach ((array) $taxonomies as $taxonomy) {
      if (is_object_in_taxonomy($post->post_type, $taxonomy))
        foreach ((array) get_the_terms($post->ID, $taxonomy) as $term) {
          if (empty($term->slug)) continue;
          $term_class = sanitize_html_class($term->slug, $term->term_id);
          if (is_numeric($term_class) || !trim($term_class, '-')) $term_class = $term->term_id;
          // 'post_tag' uses the 'tag' prefix for backward compatibility.
          if ('post_tag' === $taxonomy)  $classes[] = 'tag-' . $term_class;
          else $classes[] = sanitize_html_class($taxonomy . '-' . $term_class, $taxonomy . '-' . $term->term_id);
        }
    }
  }
  //
  if (is_front_page() || is_home()) $classes[] = 'home';
  if (is_page('wishlist')) $classes[] = 'wishlist';
  //
  $classes = array_map('esc_attr', $classes);
  echo 'class="' . esc_attr(implode(' ', array_unique($classes))) . '"';
}

