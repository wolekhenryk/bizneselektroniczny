<?php
/* Smarty version 3.1.48, created on 2024-11-25 23:59:58
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/featureChecklist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6745016e759499_64605976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c85db241a397628fd1fe5c6aca649ecdde2a94c5' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/featureChecklist.tpl',
      1 => 1732575594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6745016e759499_64605976 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
  [vaulting-status-message] b {
    cursor: pointer;
  }
</style>
<div class="row pb-3 h-100">
  <div class="col-12 col-lg-9 col-xl-8 pb-4">
    <ul class="list-unstyled mb-0">
      <?php if ((isset($_smarty_tpl->tpl_vars['vars']->value['isBnplEnabled']))) {?>
        <li class="d-flex align-items-center mb-1">
          <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/icon-status.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isSuccess'=>(($tmp = @$_smarty_tpl->tpl_vars['vars']->value['isBnplEnabled'])===null||$tmp==='' ? false : $tmp)), 0, true);
?>
          <?php if ($_smarty_tpl->tpl_vars['vars']->value['isBnplEnabled']) {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Buy now pay later enabled','mod'=>'paypal'),$_smarty_tpl ) );?>

          <?php } else { ?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Buy now pay later disabled','mod'=>'paypal'),$_smarty_tpl ) );?>

          <?php }?>
        </li>
      <?php }?>

      <?php if ((($tmp = @$_smarty_tpl->tpl_vars['vars']->value['isShortcutCustomized'])===null||$tmp==='' ? false : $tmp)) {?>
        <li class="d-flex align-items-center mb-1">
            <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/icon-status.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isSuccess'=>true), 0, true);
?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customized shortcut button enabled','mod'=>'paypal'),$_smarty_tpl ) );?>

        </li>
      <?php }?>

      <?php if ((isset($_smarty_tpl->tpl_vars['vars']->value['isCreditCardEnabled']))) {?>
        <li class="d-flex align-items-center mb-1">
            <?php if ($_smarty_tpl->tpl_vars['vars']->value['isCreditCardEnabled']) {?>
                <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/icon-status.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isSuccess'=>true), 0, true);
?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit card enabled','mod'=>'paypal'),$_smarty_tpl ) );?>

            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/icon-status.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isSuccess'=>false), 0, true);
?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit card disabled','mod'=>'paypal'),$_smarty_tpl ) );?>

            <?php }?>
        </li>
      <?php }?>

      <?php if ((isset($_smarty_tpl->tpl_vars['vars']->value['isPuiEnabled']))) {?>
        <li class="d-flex align-items-center mb-1">
          <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/icon-status.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isSuccess'=>(($tmp = @$_smarty_tpl->tpl_vars['vars']->value['isPuiEnabled'])===null||$tmp==='' ? false : $tmp)), 0, true);
?>
          <?php if ($_smarty_tpl->tpl_vars['vars']->value['isPuiEnabled']) {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PUI enabled','mod'=>'paypal'),$_smarty_tpl ) );?>

          <?php } else { ?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PUI disabled','mod'=>'paypal'),$_smarty_tpl ) );?>

          <?php }?>
        </li>
      <?php }?>

      <li class="d-flex align-items-center mb-1">
        <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/icon-status.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isSuccess'=>true), 0, true);
?>
        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['vars']->value['isOrderStatusCustomized'])===null||$tmp==='' ? false : $tmp)) {?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customized order status enabled','mod'=>'paypal'),$_smarty_tpl ) );?>

        <?php } else { ?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Standard order status','mod'=>'paypal'),$_smarty_tpl ) );?>

        <?php }?>
      </li>

      <li class="d-flex align-items-center">
        <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/icon-status.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isSuccess'=>(($tmp = @$_smarty_tpl->tpl_vars['vars']->value['isShowPaypalBenefits'])===null||$tmp==='' ? false : $tmp)), 0, true);
?>
        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['vars']->value['isShowPaypalBenefits'])===null||$tmp==='' ? false : $tmp)) {?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PayPal benefits enabled','mod'=>'paypal'),$_smarty_tpl ) );?>

        <?php } else { ?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PayPal benefits disabled','mod'=>'paypal'),$_smarty_tpl ) );?>

        <?php }?>
      </li>

      <li class="d-flex align-items-center">
          <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/icon-status.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isSuccess'=>true), 0, true);
?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tracking enabled','mod'=>'paypal'),$_smarty_tpl ) );?>

      </li>

      <?php if ((isset($_smarty_tpl->tpl_vars['vars']->value['vaultingStatusMessage']))) {?>
        <li class="d-flex align-items-center">
            <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/icon-status.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isSuccess'=>(($tmp = @$_smarty_tpl->tpl_vars['vars']->value['isVaultingCapabilityAvailable'])===null||$tmp==='' ? false : $tmp)), 0, true);
?>
            <div vaulting-status-message><?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['vars']->value['vaultingStatusMessage'],'htmlall','utf-8' ));
$_prefixVariable23 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable23,array('<b>'=>'<b refresh-feature-checklist>'));?>
</div>
        </li>
      <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['vars']->value['isInstallmentMbEnabled']))) {?>
          <li class="d-flex align-items-center mb-1">
              <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/icon-status.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isSuccess'=>$_smarty_tpl->tpl_vars['vars']->value['isInstallmentMbEnabled']), 0, true);
?>
              <?php if ($_smarty_tpl->tpl_vars['vars']->value['isInstallmentMbEnabled']) {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment with installement is enabled','mod'=>'paypal'),$_smarty_tpl ) );?>

              <?php } else { ?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment with installement is disabled','mod'=>'paypal'),$_smarty_tpl ) );?>

              <?php }?>
          </li>
        <?php }?>

    </ul>
  </div>

  <div class="col-12 col-lg-3 col-xl-4 align-items-end d-flex justify-content-end">
    <button class="btn btn-secondary ml-auto" refresh-feature-checklist><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh','mod'=>'paypal'),$_smarty_tpl ) );?>
</button>
  </div>

</div>
<?php }
}
