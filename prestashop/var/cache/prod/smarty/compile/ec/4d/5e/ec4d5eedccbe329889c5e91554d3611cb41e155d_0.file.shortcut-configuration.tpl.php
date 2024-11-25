<?php
/* Smarty version 3.1.48, created on 2024-11-25 23:59:58
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/messages/form-help-info/shortcut-configuration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6745016e6ff7b7_94902204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec4d5eedccbe329889c5e91554d3611cb41e155d' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/messages/form-help-info/shortcut-configuration.tpl',
      1 => 1732575594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6745016e6ff7b7_94902204 (Smarty_Internal_Template $_smarty_tpl) {
?>
<p>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[b]PayPal Express checkout advanced settings[/b] are added to the module in order to provide the most customizable solution possible. You can customize the display options and styles of the PayPal shortcuts. They can be changed for each button separately depending on their location. These customization options will be shown only if the shortcuts are enabled at least for one location (Cart Page / Product pages/ Sign up step in checkout)','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable12 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable12,array());?>

</p>

<p>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If some elements added via other modules are displayed on the same hook, you can manage the position of the PayPal Official module via « Design - Positions ». By default, PayPal shortcuts are displayed on your website via PrestaShop native hook. If you choose to use PrestaShop widgets, you will be able to copy the widget code and insert it wherever you want in the product template.','mod'=>'paypal'),$_smarty_tpl ) );?>

</p>

<p>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'People around the world know us for the color gold and research confirms it. Extensive testing determined just the right shade and shape that help increase conversion. Use it on your website to leverage PayPal’s recognition and preference.','mod'=>'paypal'),$_smarty_tpl ) );?>

</p>

<p>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If gold does not work for your site, try the PayPal blue button. Research shows that people know it is our brand color, which provides a halo of trust and security to your experience.','mod'=>'paypal'),$_smarty_tpl ) );?>

</p>

<p>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If gold or blue does not work for your site design or aesthetic, try the silver, white, or black buttons. Because these colors are less capable of drawing people’s attention, we recommend these button colors as a second alternative.','mod'=>'paypal'),$_smarty_tpl ) );?>

</p>
<?php }
}
