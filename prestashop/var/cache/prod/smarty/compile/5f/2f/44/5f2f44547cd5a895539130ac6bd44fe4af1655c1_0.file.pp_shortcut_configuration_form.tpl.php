<?php
/* Smarty version 3.1.48, created on 2024-11-25 23:59:58
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/forms/pp_shortcut_configuration_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6745016e7981b0_00930107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f2f44547cd5a895539130ac6bd44fe4af1655c1' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/forms/pp_shortcut_configuration_form.tpl',
      1 => 1732575594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../form-fields.tpl' => 1,
    'file:../shortcut_configuration_section.tpl' => 3,
  ),
),false)) {
function content_6745016e7981b0_00930107 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php $_smarty_tpl->_assignInScope('fieldsButtonConfiguration', array('PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_COLOR_CART','PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_SHAPE_CART','PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_WIDTH_CART','PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_HEIGHT_CART','PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_LABEL_CART'));
$_smarty_tpl->_assignInScope('dynamicField', $_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_CUSTOMIZE_SHORTCUT_STYLE']);?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14945616276745016e792fe9_05204700', 'form_content');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/forms/form.tpl"));
}
/* {block 'form_content'} */
class Block_14945616276745016e792fe9_05204700 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_content' => 
  array (
    0 => 'Block_14945616276745016e792fe9_05204700',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_assignInScope('fieldsButtonConfiguration', array('PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_COLOR_CART','PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_SHAPE_CART','PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_WIDTH_CART','PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_HEIGHT_CART','PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_LABEL_CART'));?>
  <?php $_smarty_tpl->_assignInScope('dynamicField', $_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_CUSTOMIZE_SHORTCUT_STYLE']);?>
    <?php if ((isset($_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_CUSTOMIZE_SHORTCUT_STYLE']))) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:../form-fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_CUSTOMIZE_SHORTCUT_STYLE'],'dynamicField'=>$_smarty_tpl->tpl_vars['dynamicField']->value), 0, false);
?>
    <?php }?>

    <div group-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['dynamicField']->value['name'],'htmlall','UTF-8' ));?>
" <?php if (!(($tmp = @$_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_CUSTOMIZE_SHORTCUT_STYLE']['value'])===null||$tmp==='' ? false : $tmp)) {?>class="d-none"<?php }?>>
        <?php if ((isset($_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_DISPLAY_MODE_CART']))) {?>
          <div class="h6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart page','mod'=>'paypal'),$_smarty_tpl ) );?>
</div>
          <hr>
            <?php $_smarty_tpl->_subTemplateRender("file:../shortcut_configuration_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('displayMode'=>$_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_DISPLAY_MODE_CART'],'hooks'=>$_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_HOOK_CART'],'widget_type'=>'cart','color'=>$_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_COLOR_CART'],'shape'=>$_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_SHAPE_CART'],'height'=>$_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_HEIGHT_CART'],'width'=>$_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_WIDTH_CART'],'label'=>$_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_LABEL_CART'],'preview'=>(($tmp = @$_smarty_tpl->tpl_vars['form']->value['fields']['cart_shortcut_preview']['set']['shortcut'])===null||$tmp==='' ? '' : $tmp)), 0, false);
?>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_DISPLAY_MODE_PRODUCT']))) {?>
          <div class="h6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product page','mod'=>'paypal'),$_smarty_tpl ) );?>
</div>
          <hr>
            <?php $_smarty_tpl->_subTemplateRender("file:../shortcut_configuration_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('displayMode'=>$_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_DISPLAY_MODE_PRODUCT'],'hooks'=>$_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_HOOK_PRODUCT'],'widget_type'=>'product','color'=>$_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_COLOR_PRODUCT'],'shape'=>$_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_SHAPE_PRODUCT'],'height'=>$_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_HEIGHT_PRODUCT'],'width'=>$_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_WIDTH_PRODUCT'],'label'=>$_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_LABEL_PRODUCT'],'preview'=>(($tmp = @$_smarty_tpl->tpl_vars['form']->value['fields']['product_shortcut_preview']['set']['shortcut'])===null||$tmp==='' ? '' : $tmp)), 0, true);
?>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_DISPLAY_MODE_SIGNUP']))) {?>
          <div class="h6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Signup page','mod'=>'paypal'),$_smarty_tpl ) );?>
</div>
          <hr>
            <?php $_smarty_tpl->_subTemplateRender("file:../shortcut_configuration_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('displayMode'=>$_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_DISPLAY_MODE_SIGNUP'],'widget_type'=>'signup','color'=>$_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_COLOR_SIGNUP'],'shape'=>$_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_SHAPE_SIGNUP'],'height'=>$_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_HEIGHT_SIGNUP'],'width'=>$_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_WIDTH_SIGNUP'],'label'=>$_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_EXPRESS_CHECKOUT_SHORTCUT_STYLE_LABEL_SIGNUP'],'preview'=>(($tmp = @$_smarty_tpl->tpl_vars['form']->value['fields']['signup_shortcut_preview']['set']['shortcut'])===null||$tmp==='' ? '' : $tmp)), 0, true);
?>
        <?php }?>
    </div>

<?php
}
}
/* {/block 'form_content'} */
}
