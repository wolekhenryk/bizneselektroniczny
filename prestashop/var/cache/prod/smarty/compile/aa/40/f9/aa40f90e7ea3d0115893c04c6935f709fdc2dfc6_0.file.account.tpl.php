<?php
/* Smarty version 3.1.48, created on 2024-11-25 23:59:58
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/messages/form-help-info/account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6745016e6f6ef4_83420566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa40f90e7ea3d0115893c04c6935f709fdc2dfc6' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/messages/form-help-info/account.tpl',
      1 => 1732575594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6745016e6f6ef4_83420566 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="h4">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'How can I log in with my PayPal account ?','mod'=>'paypal'),$_smarty_tpl ) );?>

</div>
<br>
<p>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Before connecting your shop with your PayPal account, please select the mode of connection. There is 2 connection modes :','mod'=>'paypal'),$_smarty_tpl ) );?>

</p>

<p>
  <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[b]Sandbox[/b] mode allows you a mock link to test the flow between Prestashop and PayPal. You can test as long as needed. If you want to create an account, please use the button "Connect or create your PayPal account".','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable9 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable9,array());?>

</p>
<p>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[b]Production[/b] mode allows you to sell our products online and be paid by customers. If you want to create an account, please click use the button "Connect or create your PayPal account".','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable10 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable10,array());?>

</p>
<p>
  <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[b]Note:[/b] You need to switch to the “Production” mode to activate your payment solution.','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable11 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable11,array());?>

</p>
<?php }
}
