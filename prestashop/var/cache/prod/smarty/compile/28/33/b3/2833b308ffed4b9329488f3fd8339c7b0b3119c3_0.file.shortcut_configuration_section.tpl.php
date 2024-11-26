<?php
/* Smarty version 3.1.48, created on 2024-11-25 23:59:58
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/shortcut_configuration_section.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6745016e7a1712_22246336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2833b308ffed4b9329488f3fd8339c7b0b3119c3' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/shortcut_configuration_section.tpl',
      1 => 1732575594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./form-fields.tpl' => 6,
  ),
),false)) {
function content_6745016e7a1712_22246336 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['displayMode']->value)) && $_smarty_tpl->tpl_vars['displayMode']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:./form-fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['displayMode']->value,'dynamicField'=>false), 0, false);
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['hooks']->value)) && $_smarty_tpl->tpl_vars['hooks']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:./form-fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['hooks']->value,'dynamicField'=>false), 0, true);
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['widget_type']->value)) && $_smarty_tpl->tpl_vars['widget_type']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:./form-fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>array('label'=>'Widget code','type'=>'widget-code','code'=>'{widget name=\'paypal\' action=\'paymentshortcut\'}','name'=>('widget-code-').($_smarty_tpl->tpl_vars['widget_type']->value)),'dynamicField'=>false), 0, true);
}?>

<div customize-style-shortcut-container class="hidden">
  <div class="form-group row ">
    <div class="col-7 offset-3">
      <div preview-section class="invisible" style="position: relative; pointer-events: none">
        <div button-container><?php echo (($tmp = @$_smarty_tpl->tpl_vars['preview']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>
        <div class="overlay"></div>
      </div>
    </div>
  </div>

    <?php if ((isset($_smarty_tpl->tpl_vars['color']->value)) && $_smarty_tpl->tpl_vars['color']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:./form-fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['color']->value,'dynamicField'=>false), 0, true);
?>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['shape']->value)) && $_smarty_tpl->tpl_vars['shape']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:./form-fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['shape']->value,'dynamicField'=>false), 0, true);
?>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['height']->value)) && (isset($_smarty_tpl->tpl_vars['width']->value)) && $_smarty_tpl->tpl_vars['height']->value && $_smarty_tpl->tpl_vars['width']->value) {?>
      <div class="form-group row">
        <label class="form-control-label col-3" for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['height']->value['name'],'htmlall','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['height']->value['label'],'htmlall','UTF-8' ));?>
</label>
        <div class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('col-7'=>!$_smarty_tpl->tpl_vars['isModal']->value,'col-9'=>$_smarty_tpl->tpl_vars['isModal']->value) ));?>
">
          <div class="row" chain-input-container>
            <div class="col col-6 pr-2">
              <input
                type="text"
                name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['width']->value['name'],'htmlall','UTF-8' ));?>
"
                id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['width']->value['name'],'htmlall','UTF-8' ));?>
"
                class="form-control"
                <?php if ((($tmp = @$_smarty_tpl->tpl_vars['width']->value['placeholder'])===null||$tmp==='' ? false : $tmp)) {?>
                  placeholder="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['width']->value['placeholder'],'htmlall','UTF-8' ));?>
"
                <?php }?>
                value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = @$_smarty_tpl->tpl_vars['width']->value['value'])===null||$tmp==='' ? '' : $tmp),'htmlall','UTF-8' ));?>
"
                data-type="width"
                data-msg-error="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Minimum 150 px is required','mod'=>'paypal'),$_smarty_tpl ) );?>
"
              >
              <div class="text-muted small mt-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Width','mod'=>'paypal'),$_smarty_tpl ) );?>
</div>
            </div>
            <div class="col col-6 pl-2">
              <input
                type="text"
                name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['height']->value['name'],'htmlall','UTF-8' ));?>
"
                id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['height']->value['name'],'htmlall','UTF-8' ));?>
"
                class="form-control"
                <?php if ((($tmp = @$_smarty_tpl->tpl_vars['height']->value['placeholder'])===null||$tmp==='' ? false : $tmp)) {?>
                  placeholder="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['height']->value['placeholder'],'htmlall','UTF-8' ));?>
"
                <?php }?>
                value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = @$_smarty_tpl->tpl_vars['height']->value['value'])===null||$tmp==='' ? '' : $tmp),'htmlall','UTF-8' ));?>
"
                data-type="height"
                data-msg-error="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Value from 25 to 55 is required','mod'=>'paypal'),$_smarty_tpl ) );?>
"
              >
              <div class="text-muted small mt-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Height','mod'=>'paypal'),$_smarty_tpl ) );?>
</div>
            </div>
            <div class="col col-12" msg-container></div>
          </div>
        </div>
      </div>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['label']->value)) && $_smarty_tpl->tpl_vars['label']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:./form-fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['label']->value,'dynamicField'=>false), 0, true);
?>
    <?php }?>

</div>
<?php }
}
