<?php
/* Smarty version 3.1.48, created on 2024-11-25 23:59:56
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/messages/form-help-info/white-list-ip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6745016cbda6f5_26048408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a910fb7d1ea1b6bf8e917070ae4f53571f8ca2cc' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/messages/form-help-info/white-list-ip.tpl',
      1 => 1732575594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6745016cbda6f5_26048408 (Smarty_Internal_Template $_smarty_tpl) {
?>
<p>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can test your PayPal module on production mode too. You can allow the module’s  access to a list of IP addresses. Tape the IP in the blue field for the test time and delete it after validation of the test.','mod'=>'paypal'),$_smarty_tpl ) );?>

</p>

<?php }
}
