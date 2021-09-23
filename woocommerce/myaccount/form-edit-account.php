<?php
// get the user meta
$userMeta = get_user_meta(get_current_user_id());

// get the form fields
$countries = new WC_Countries();
$billing_fields = $countries->get_address_fields('', 'billing_');
$shipping_fields = $countries->get_address_fields('', 'shipping_');
?>

<!-- billing form -->
<?php
$load_address = 'billing';
$page_title   = __('Billing Address', 'woocommerce');
?>
<div class="woo_content__block woo_content__block_<?php echo subpage_link_class(); ?>">
  <form action="/my-account/edit-address/billing/" class="edit-account" method="post">

    <span>All fields are required</span>

    <?php do_action("woocommerce_before_edit_address_form_{$load_address}"); ?>

    <?php foreach ($billing_fields as $key => $field) :

      woocommerce_form_field($key, $field, $userMeta[$key][0]);

    endforeach; ?>
    <p class="form-row form-row-wide address-field validate-required field-password"><label for="" class="">Password:</label><span class="woocommerce-input-wrapper"><input type="password" class="input-text" name="" id="" placeholder="" value="44600" autocomplete=""></span></p>
    <p class="form-row form-row-wide address-field validate-required field-password" id=""><label for="" class="">Confirm password:</label><span class="woocommerce-input-wrapper"><input type="password" class="input-text" name="" id="" placeholder="" value="44600" autocomplete=""></span></p>
    <div class="check-boxs">
      <input type="checkbox"><span>Please notify me about discounts and promotions</span><br>
      <input type="checkbox" id="act-check"><span>I work in the home building industry</span>
    </div>
    <?php do_action("woocommerce_after_edit_address_form_{$load_address}"); ?>
    <div class="btn-smb">
      <span>
        <input type="submit" class="button btn s-btn" name="save_address" value="<?php esc_attr_e('Save Address', 'woocommerce'); ?>" />
        <?php wp_nonce_field('woocommerce-edit_address'); ?>
        <input type="hidden" name="action" value="edit_address" />
      </span>
    </div>

  </form>

  <!-- shipping form -->
  <?php
  $load_address = 'shipping';
  $page_title   = __('Shipping Address', 'woocommerce');
  ?>
  <form action="/my-account/edit-address/shipping/" class="edit-account two-address" method="post">

    <h2><?php echo apply_filters('woocommerce_my_account_edit_address_title', $page_title); ?></h2>

    <?php do_action("woocommerce_before_edit_address_form_{$load_address}"); ?>

    <?php foreach ($shipping_fields as $key => $field) : ?>

      <?php woocommerce_form_field($key, $field, $userMeta[$key][0]); ?>

    <?php endforeach; ?>

    <?php do_action("woocommerce_after_edit_address_form_{$load_address}"); ?>
    <div class="btn-smb">
      <span>
        <input type="submit" class="button btn s-btn" name="save_address" value="<?php esc_attr_e('Save Address', 'woocommerce'); ?>" />
        <?php wp_nonce_field('woocommerce-edit_address'); ?>
        <input type="hidden" name="action" value="edit_address" />
      </span>
    </div>

  </form>
</div>
