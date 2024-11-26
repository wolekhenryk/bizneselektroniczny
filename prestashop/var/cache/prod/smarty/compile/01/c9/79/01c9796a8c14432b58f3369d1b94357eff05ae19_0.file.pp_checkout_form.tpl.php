<?php
/* Smarty version 3.1.48, created on 2024-11-25 23:59:58
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/forms/pp_checkout_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6745016e78f968_78412910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01c9796a8c14432b58f3369d1b94357eff05ae19' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/forms/pp_checkout_form.tpl',
      1 => 1732575594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../form-fields.tpl' => 3,
  ),
),false)) {
function content_6745016e78f968_78412910 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18669095046745016e78ad13_29470426', 'form_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./form.tpl");
}
/* {block 'form_content'} */
class Block_18669095046745016e78ad13_29470426 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_content' => 
  array (
    0 => 'Block_18669095046745016e78ad13_29470426',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form']->value['fields'], 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
        <?php if (in_array($_smarty_tpl->tpl_vars['field']->value['name'],array('PAYPAL_API_INTENT','PAYPAL_EXPRESS_CHECKOUT_IN_CONTEXT','PAYPAL_MB_EC_ENABLED'))) {?>
            <?php $_smarty_tpl->_subTemplateRender("file:../form-fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['field']->value), 0, true);
?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  <div class="form-group row">
    <label class="form-control-label form-control-label-check col-3" for="PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_test"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PayPal Express Checkout shortcut on','mod'=>'paypal'),$_smarty_tpl ) );?>
</label>
    <div class="col-9">
      <div class="row no-gutters">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form']->value['fields'], 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
              <?php if (in_array($_smarty_tpl->tpl_vars['field']->value['name'],array('PAYPAL_EXPRESS_CHECKOUT_SHORTCUT','PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_CART','PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_SIGNUP'))) {?>
                  <?php $_smarty_tpl->_subTemplateRender("file:../form-fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['field']->value), 0, true);
?>
              <?php }?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </div>
  </div>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form']->value['fields'], 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
        <?php if (in_array($_smarty_tpl->tpl_vars['field']->value['name'],array('PAYPAL_CONFIG_BRAND','PAYPAL_PUI_CUSTOMER_SERVICE_INSTRUCTIONS','PAYPAL_API_ADVANTAGES','PAYPAL_MOVE_BUTTON_AT_END','PAYPAL_ACDC_OPTION','PAYPAL_PUI_ENABLED','PAYPAL_SEPA_ENABLED','PAYPAL_API_CARD','PAYPAL_VAULTING','PAYPAL_MERCHANT_INSTALLMENT','PAYPAL_ACCOUNT_VAULTING','PAYPAL_VENMO_ENABLED'))) {?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['name'] == 'PAYPAL_MOVE_BUTTON_AT_END' && (($tmp = @$_smarty_tpl->tpl_vars['isShowModalConfiguration']->value)===null||$tmp==='' ? false : $tmp)) {?>
                <?php continue 1;?>
            <?php }?>
            <?php $_smarty_tpl->_subTemplateRender("file:../form-fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['field']->value), 0, true);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['name'] === 'PAYPAL_SOFORT_ENABLED' && (($tmp = @$_smarty_tpl->tpl_vars['field']->value['set']['message'])===null||$tmp==='' ? false : $tmp)) {?>
          <div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['field']->value['set']['message'];?>
</div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
}
}
/* {/block 'form_content'} */
}
