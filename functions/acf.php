<?php if (!defined('ABSPATH')) exit;

add_action('acf/init', 'theme_acf_op_init');
function theme_acf_op_init()
{
  // Check function exists.
  if (function_exists('acf_add_options_page')) {
    // Register options page.
    $option_page = acf_add_options_page(array(
      'page_title'    => ('Global option'),
      'menu_title'    => ('Global option'),
      'menu_slug'     => 'theme-general-settings',
      'capability'    => 'edit_posts',
      'position'      => '2',
      'redirect'      => false
    ));
  }
}

// ?? ACF
add_action('acf/init', 'register_acf_blocks');
function register_acf_blocks()
{
  if (function_exists('acf_register_block_type')) {
    // Register MyExample block
    acf_register_block_type(array(
      'name'            => 'Home img block',
      'title'           => __('Image block'),
      'description'     => __('A custom MyExample block.'),
      'category'        => 'formatting',
      'icon'            => 'layout',
      'post_types'      => array('post', 'page'),
      'mode'            => 'auto',
      // 'align'           => 'wide', /* "left", "center", "right", "wide" and "full" */
      'render_template' => 'template-parts/blocks/hib.php',
      // 'render_callback' => 'myexample_block_render_callback',
      // 'enqueue_style'   => get_template_directory_uri() . '/template-parts/blocks/myexample/myexample.css',
      // 'enqueue_script'  => get_template_directory_uri() . '/template-parts/blocks/myexample/myexample.js',
      // 'enqueue_assets'  => 'myexample_block_enqueue_assets',
      // 'supports'        => array('multiple' => false,/* and more */),
    ));
  }
    acf_register_block_type(array(
      'name'            => 'Home post block',
      'title'           => __('Product block'),
      'description'     => __('A custom MyExample block.'),
      'category'        => 'formatting',
      'icon'            => 'layout',
      'post_types'      => array('post', 'page'),
      'mode'            => 'auto',
      // 'align'           => 'wide', /* "left", "center", "right", "wide" and "full" */
      'render_template' => 'template-parts/blocks/hpb.php',
      // 'render_callback' => 'myexample_block_render_callback',
      // 'enqueue_style'   => get_template_directory_uri() . '/template-parts/blocks/myexample/myexample.css',
      // 'enqueue_script'  => get_template_directory_uri() . '/template-parts/blocks/myexample/myexample.js',
      // 'enqueue_assets'  => 'myexample_block_enqueue_assets',
      // 'supports'        => array('multiple' => false,/* and more */),
    ));
    acf_register_block_type(array(
      'name'            => 'Home why block',
      'title'           => __('Why block'),
      'description'     => __('A custom MyExample block.'),
      'category'        => 'formatting',
      'icon'            => 'layout',
      'post_types'      => array('post', 'page'),
      'mode'            => 'auto',
      // 'align'           => 'wide', /* "left", "center", "right", "wide" and "full" */
      'render_template' => 'template-parts/blocks/hwb.php',
      // 'render_callback' => 'myexample_block_render_callback',
      // 'enqueue_style'   => get_template_directory_uri() . '/template-parts/blocks/myexample/myexample.css',
      // 'enqueue_script'  => get_template_directory_uri() . '/template-parts/blocks/myexample/myexample.js',
      // 'enqueue_assets'  => 'myexample_block_enqueue_assets',
      // 'supports'        => array('multiple' => false,/* and more */),
    ));
    acf_register_block_type(array(
      'name'            => 'Contact form',
      'title'           => __('contact-form'),
      'description'     => __('A custom MyExample block.'),
      'category'        => 'formatting',
      'icon'            => 'layout',
      'post_types'      => array('post', 'page'),
      'mode'            => 'auto',
      // 'align'           => 'wide', /* "left", "center", "right", "wide" and "full" */
      'render_template' => 'template-parts/blocks/hcf.php',
      // 'render_callback' => 'myexample_block_render_callback',
      // 'enqueue_style'   => get_template_directory_uri() . '/template-parts/blocks/myexample/myexample.css',
      // 'enqueue_script'  => get_template_directory_uri() . '/template-parts/blocks/myexample/myexample.js',
      // 'enqueue_assets'  => 'myexample_block_enqueue_assets',
      // 'supports'        => array('multiple' => false,/* and more */),
    ));
    acf_register_block_type(array(
      'name'            => 'Reviews',
      'title'           => __('reviews'),
      'description'     => __('A custom MyExample block.'),
      'category'        => 'formatting',
      'icon'            => 'layout',
      'post_types'      => array('post', 'page'),
      'mode'            => 'auto',
      // 'align'           => 'wide', /* "left", "center", "right", "wide" and "full" */
      'render_template' => 'template-parts/blocks/hr.php',
      // 'render_callback' => 'myexample_block_render_callback',
      // 'enqueue_style'   => get_template_directory_uri() . '/template-parts/blocks/myexample/myexample.css',
      // 'enqueue_script'  => get_template_directory_uri() . '/template-parts/blocks/myexample/myexample.js',
      // 'enqueue_assets'  => 'myexample_block_enqueue_assets',
      // 'supports'        => array('multiple' => false,/* and more */),
    ));
    acf_register_block_type(array(
      'name'            => 'Offer',
      'title'           => __('ww_offer'),
      'description'     => __('A custom MyExample block.'),
      'category'        => 'formatting',
      'icon'            => 'layout',
      'post_types'      => array('post', 'page'),
      'mode'            => 'auto',
      // 'align'           => 'wide', /* "left", "center", "right", "wide" and "full" */
      'render_template' => 'template-parts/blocks/hwo.php',
      // 'render_callback' => 'myexample_block_render_callback',
      // 'enqueue_style'   => get_template_directory_uri() . '/template-parts/blocks/myexample/myexample.css',
      // 'enqueue_script'  => get_template_directory_uri() . '/template-parts/blocks/myexample/myexample.js',
      // 'enqueue_assets'  => 'myexample_block_enqueue_assets',
      // 'supports'        => array('multiple' => false,/* and more */),
    ));
}
// !! ACF
