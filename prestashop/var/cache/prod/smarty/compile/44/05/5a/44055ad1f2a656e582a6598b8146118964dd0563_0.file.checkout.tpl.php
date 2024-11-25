<?php
/* Smarty version 3.1.48, created on 2024-11-25 23:59:56
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/messages/form-help-info/checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6745016cbd3192_97827264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44055ad1f2a656e582a6598b8146118964dd0563' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/messages/form-help-info/checkout.tpl',
      1 => 1732575594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6745016cbd3192_97827264 (Smarty_Internal_Template $_smarty_tpl) {
?>

<p>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[b]Payment Action:Sale:[/b] the money moves instantly from the buyer’s account to the seller’s account at the time of payment.','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable1,array());?>

</p>
<p>
  <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[b]Payment Action:Authorization/capture:[/b] The authorized mode is a deferred mode of payment that requires the funds to be collected manually when you want to transfer the money. This mode is used if you want to ensure that you have the merchandise before depositing the money','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable2 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable2,array());?>

</p>
<p>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We recommend the Authorize configuration only in case you need to check the availability of your products before confirming the order.','mod'=>'paypal'),$_smarty_tpl ) );?>

</p>
<p>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In-context has shown a better conversion rate.','mod'=>'paypal'),$_smarty_tpl ) );?>

</p>
<p>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[b]PayPal In-Context:[/b] opens in a pop-up window, allowing your buyers to finalize their payment without leaving your website. Optimized, modern and reassuring experience which benefits from the same security standards than during a redirection to the PayPal website.','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable3 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable3,array());?>

</p>

<p>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[b]PayPal Express Checkout shortcuts[/b] allow a faster checkout for your buyers. PayPal automatically provides you with the client\'s shipping and billing information.','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable4 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable4,array());?>

</p>

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['isShowCustomerInstruction']->value)===null||$tmp==='' ? false : $tmp)) {?>
  <p>
      <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[b]Customer service[/b] instruction is a required message for using Pay upon invoice methode.','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable5 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable5,array());?>

  </p>
<?php }?>

<p>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[b]Show PayPal benefits to your customers:[/b] you can increase your conversion rate by presenting PayPal benefits to your customers on the payment methods selection page.','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable6 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable6,array());?>

</p>

<p>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PayPal shortcuts allow a faster checkout for your buyers. PayPal automatically provides you with the client\'s shipping and billing information.','mod'=>'paypal'),$_smarty_tpl ) );?>

</p>

<p>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[b]Brand name[/b] shown on top left during PayPal checkout: A label that overrides the business name in the PayPal account on the PayPal pages. If you are using PayPal Checkout redirect, you can also customize your shop logo. The logo can be changed via your business profile settings.','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable7 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable7,array());?>

</p>

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['isShowVaultingFunctionality']->value)===null||$tmp==='' ? false : $tmp)) {?>
    <p>
      <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[b]The PayPal save payments[/b] allows merchants to securely store their customer’s payment methods. This helps reduce a merchant’s exposure to security and compliance risks. And also provides a quick and easy checkout experience for repeat buyers.','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable8 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable8,array());?>

    </p>
<?php }
}
}
