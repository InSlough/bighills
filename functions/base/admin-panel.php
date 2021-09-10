<?php if (!defined('ABSPATH')) exit;

// ? Only add to the edit.php admin page.
// add_action('admin_enqueue_scripts', function ($hook) {
//   if ('edit.php' !== $hook) return;
//   wp_enqueue_script('hide_extra_panels', getUrl("/assets/hide_extra_panels.js"), array('jquery'), NULL, true);
// });
add_action('admin_print_footer_scripts', function () {
  // ? Add script to Admin panel (globally)
  echo '<script defer src="' . getUrl("/assets/hide_extra_panels.js") . '"></script>';
});
