<?php
/* Smarty version 3.1.48, created on 2024-11-25 23:59:58
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/messages/webhookhandler_not_available.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6745016e705576_34121254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdf0d42e01e11c68507c9c441883670e49190ef7' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/messages/webhookhandler_not_available.tpl',
      1 => 1732575594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6745016e705576_34121254 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
    <div>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PayPal webhooks can not be enabled. The reason of the error is one of the following:','mod'=>'paypal'),$_smarty_tpl ) );?>

    </div>

  <ul>
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'htpasswd enabled','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'the https protocol is not supported','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'wrong https certificate','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'invalid server settings or insufficient access rights.','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
  </ul>

  <div>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please fix the issue or contact our support team. (link to add for [a @href1@]\'our support team\'[/a].','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable13 = ob_get_clean();
ob_start();
echo 'https://addons.prestashop.com/fr/contactez-nous?id_product=1748';
$_prefixVariable14 = ob_get_clean();
ob_start();
echo 'target="blank"';
$_prefixVariable15 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable13,array('@href1@'=>$_prefixVariable14,'@target@'=>$_prefixVariable15));?>

  </div>

  <div>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Webhooks are not used by the module until the moment the problem will be fixed. Please refresh the page to check the status again.','mod'=>'paypal'),$_smarty_tpl ) );?>

  </div>
</div>
<?php }
}
