<?php
/* Smarty version 3.1.48, created on 2024-11-25 23:59:58
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/form-fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6745016e787514_86226669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01ad122550ea84db828cd4c7693128f9ab90d1a8' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/form-fields.tpl',
      1 => 1732575594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6745016e787514_86226669 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('variant', (($tmp = @$_smarty_tpl->tpl_vars['field']->value['variant'])===null||$tmp==='' ? false : $tmp));
$_smarty_tpl->_assignInScope('withColor', (($tmp = @$_smarty_tpl->tpl_vars['withColor']->value)===null||$tmp==='' ? false : $tmp));
$_smarty_tpl->_assignInScope('isModal', (($tmp = @$_smarty_tpl->tpl_vars['isModal']->value)===null||$tmp==='' ? false : $tmp));
$_smarty_tpl->_assignInScope('dynamicField', (($tmp = @$_smarty_tpl->tpl_vars['dynamicField']->value)===null||$tmp==='' ? false : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['field']->value['type'] !== 'checkbox' && $_smarty_tpl->tpl_vars['field']->value['label']) {?>
  <div class="form-group row <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('d-none'=>$_smarty_tpl->tpl_vars['dynamicField']->value && !(($tmp = @$_smarty_tpl->tpl_vars['dynamicField']->value['value'])===null||$tmp==='' ? false : $tmp) && ($_smarty_tpl->tpl_vars['field']->value['name'] != (($tmp = @$_smarty_tpl->tpl_vars['dynamicField']->value['name'])===null||$tmp==='' ? false : $tmp)),'form-group-dynamic'=>$_smarty_tpl->tpl_vars['dynamicField']->value && ($_smarty_tpl->tpl_vars['field']->value['name'] == (($tmp = @$_smarty_tpl->tpl_vars['dynamicField']->value['name'])===null||$tmp==='' ? false : $tmp))) ));?>
"
       <?php if ((($tmp = @$_smarty_tpl->tpl_vars['dynamicField']->value['name'])===null||$tmp==='' ? false : $tmp)) {?>
         group-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['dynamicField']->value['name'],'htmlall','UTF-8' ));?>
"
       <?php }?>
  >
    <label class="form-control-label <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('form-control-label-check'=>$_smarty_tpl->tpl_vars['field']->value['type'] == 'switch','col-3'=>strpos($_smarty_tpl->tpl_vars['form']->value['id_form'],'pp_installment_') === false,'col-2'=>strpos($_smarty_tpl->tpl_vars['form']->value['id_form'],'pp_installment_') !== false) ));?>
" for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['name'],'htmlall','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['label'],'htmlall','UTF-8' ));?>
</label>

    <div class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('col-9'=>$_smarty_tpl->tpl_vars['withColor']->value || $_smarty_tpl->tpl_vars['isModal']->value,'col-7'=>strpos($_smarty_tpl->tpl_vars['form']->value['id_form'],'pp_installment_') === false,'col-10'=>strpos($_smarty_tpl->tpl_vars['form']->value['id_form'],'pp_installment_') !== false) ));?>
">
      <div>
<?php }?>

      <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] === 'text') {?>
                <input
          type="text"
          name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['name'],'htmlall','UTF-8' ));?>
"
          id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['name'],'htmlall','UTF-8' ));?>
"
          class="form-control <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('form-control-primary'=>$_smarty_tpl->tpl_vars['variant']->value == 'primary') ));?>
"
          <?php if ((($tmp = @$_smarty_tpl->tpl_vars['field']->value['placeholder'])===null||$tmp==='' ? false : $tmp)) {?>
            placeholder="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['placeholder'],'htmlall','UTF-8' ));?>
"
          <?php }?>
          value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = @$_smarty_tpl->tpl_vars['field']->value['value'])===null||$tmp==='' ? '' : $tmp),'htmlall','UTF-8' ));?>
"
          <?php if ((($tmp = @$_smarty_tpl->tpl_vars['field']->value['data_type'])===null||$tmp==='' ? false : $tmp)) {?>
            data-type="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['data_type'],'htmlall','UTF-8' ));?>
"
          <?php }?>
        >
      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'widget-code') {?>
        <div class="input-group">
          <input type="text" readonly class="form-control"  aria-describedby="basic-addon2" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['name'],'htmlall','UTF-8' ));?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = @$_smarty_tpl->tpl_vars['field']->value['code'])===null||$tmp==='' ? '' : $tmp),'htmlall','UTF-8' ));?>
">
          <div class="input-group-append" style="cursor: pointer" onclick="document.getElementById('<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['name']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['name'],'htmlall','UTF-8' ));
}?>').select(); document.execCommand('copy')">
            <span class="input-group-text" id="basic-addon2"><i class="icon-copy"></i></span>
          </div>
        </div>
      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'hidden') {?>
        <input type="hidden" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['name'],'htmlall','UTF-8' ));?>
" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['name'],'htmlall','UTF-8' ));?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['value'],'htmlall','UTF-8' ));?>
" />
      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'select') {?>
                <select
          class="form-control custom-select <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('custom-select-primary'=>$_smarty_tpl->tpl_vars['variant']->value == 'primary') ));?>
"
          name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['name'],'htmlall','UTF-8' ));?>
"
          id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['name'],'htmlall','UTF-8' ));?>
"
          <?php if ((($tmp = @$_smarty_tpl->tpl_vars['field']->value['data_type'])===null||$tmp==='' ? false : $tmp)) {?>
            data-type="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['data_type'],'htmlall','UTF-8' ));?>
"
          <?php }?>
          >
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
            <option
              value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = @$_smarty_tpl->tpl_vars['option']->value['value'])===null||$tmp==='' ? '' : $tmp),'htmlall','UTF-8' ));?>
"
              <?php if ((isset($_smarty_tpl->tpl_vars['option']->value['value'])) && (isset($_smarty_tpl->tpl_vars['field']->value['value'])) && $_smarty_tpl->tpl_vars['option']->value['value'] == $_smarty_tpl->tpl_vars['field']->value['value']) {?> selected <?php }?>
              <?php if ((($tmp = @$_smarty_tpl->tpl_vars['option']->value['color'])===null||$tmp==='' ? false : $tmp)) {?>data-color="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['color'],'htmlall','UTF-8' ));?>
"<?php }?>
            ><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = @$_smarty_tpl->tpl_vars['option']->value['title'])===null||$tmp==='' ? '' : $tmp),'htmlall','UTF-8' ));?>
</option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>

        <?php if ($_smarty_tpl->tpl_vars['withColor']->value) {?>
          <?php $_smarty_tpl->_assignInScope('selectedColor', (($tmp = @$_smarty_tpl->tpl_vars['field']->value['options'][0]['color'])===null||$tmp==='' ? 'gray' : $tmp));?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
            <?php if ((isset($_smarty_tpl->tpl_vars['option']->value['value'])) && (isset($_smarty_tpl->tpl_vars['field']->value['value'])) && $_smarty_tpl->tpl_vars['option']->value['value'] == $_smarty_tpl->tpl_vars['field']->value['value']) {?>
              <?php $_smarty_tpl->_assignInScope('selectedColor', $_smarty_tpl->tpl_vars['option']->value['color']);?>
            <?php }?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

          <span class="color-swatch ml-1 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('border'=>$_smarty_tpl->tpl_vars['selectedColor']->value == '#fff') ));?>
" style="background:<?php echo $_smarty_tpl->tpl_vars['selectedColor']->value;?>
;"></span>
        <?php }?>

      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'switch') {?>

                <div class="custom-control custom-switch <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('custom-switch-secondary'=>$_smarty_tpl->tpl_vars['variant']->value == 'secondary') ));?>
">
          <input type="checkbox" class="custom-control-input" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['name'],'htmlall','UTF-8' ));?>
" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['name'],'htmlall','UTF-8' ));?>
" value="1" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['field']->value['value'])===null||$tmp==='' ? false : $tmp)) {?>checked<?php }?> <?php if ((($tmp = @$_smarty_tpl->tpl_vars['field']->value['disabled'])===null||$tmp==='' ? false : $tmp)) {?>disabled<?php }?>>
            <?php if ((($tmp = @$_smarty_tpl->tpl_vars['field']->value['disabled'])===null||$tmp==='' ? false : $tmp)) {?><input type="hidden" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['name'],'htmlall','UTF-8' ));?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = @$_smarty_tpl->tpl_vars['field']->value['value'])===null||$tmp==='' ? '' : $tmp),'htmlall','UTF-8' ));?>
"><?php }?>
          <label class="custom-control-label form-control-label-check" for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['name'],'htmlall','UTF-8' ));?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enabled','mod'=>'paypal'),$_smarty_tpl ) );?>
</label>
        </div>
      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'checkbox') {?>

                <div class="col custom-checkbox-wrap">
          <div class="custom-control custom-checkbox form-check-inline">
            <input
              class="custom-control-input"
              type="checkbox"
              id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['name'],'htmlall','UTF-8' ));?>
"
              name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['name'],'htmlall','UTF-8' ));?>
"
              value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = @$_smarty_tpl->tpl_vars['field']->value['value'])===null||$tmp==='' ? '' : $tmp),'htmlall','UTF-8' ));?>
"
              <?php if ($_smarty_tpl->tpl_vars['field']->value['checked']) {?>checked<?php }?>>
            <label class="custom-control-label" for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['name'],'htmlall','UTF-8' ));?>
">
              <span class="label">
                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['label'],'htmlall','UTF-8' ));?>

              </span>
              <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['image']))) {?>
                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['image'],'htmlall','UTF-8' ));?>
"  alt="location">
              <?php }?>

            </label>
          </div>
        </div>

      <?php }?>

<?php if ($_smarty_tpl->tpl_vars['field']->value['type'] !== 'checkbox' && $_smarty_tpl->tpl_vars['field']->value['label']) {?>
      </div>
    </div>
  </div>
<?php }
}
}
