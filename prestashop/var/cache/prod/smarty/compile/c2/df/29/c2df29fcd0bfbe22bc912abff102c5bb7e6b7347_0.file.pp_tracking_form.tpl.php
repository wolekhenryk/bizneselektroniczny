<?php
/* Smarty version 3.1.48, created on 2024-11-26 00:00:05
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/forms/pp_tracking_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674501752b3002_68709488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2df29fcd0bfbe22bc912abff102c5bb7e6b7347' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/forms/pp_tracking_form.tpl',
      1 => 1732575594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../form-fields.tpl' => 2,
  ),
),false)) {
function content_674501752b3002_68709488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24271996674501752ad217_01641060', 'form_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./form.tpl");
}
/* {block 'form_content'} */
class Block_24271996674501752ad217_01641060 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_content' => 
  array (
    0 => 'Block_24271996674501752ad217_01641060',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form']->value['fields'], 'field', false, 'key');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
    <?php if ((($tmp = @$_smarty_tpl->tpl_vars['field']->value['name'])===null||$tmp==='' ? false : $tmp) && $_smarty_tpl->tpl_vars['field']->value['type'] == 'select') {?>
      <?php $_smarty_tpl->_subTemplateRender("file:../form-fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['field']->value), 0, true);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'carrier_map') {?>
      <div class="form-group row pt-4">
        <label class="form-control-label form-control-label-check col-3" for="PAYPAL_CARRIER_MAP"><?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>
</label>
        <div class="col-9 col-lg-8">
          <table class="table">
            <thead>
              <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PrestaShop carrier','mod'=>'paypal'),$_smarty_tpl ) );?>
</th>
              <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PayPal carrier','mod'=>'paypal'),$_smarty_tpl ) );?>
</th>
            </thead>
            <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['set']['carriers'], 'carrier');
$_smarty_tpl->tpl_vars['carrier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->do_else = false;
?>
                <tr>
                  <td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['carrier']->value['name'],'htmlall','UTF-8' ));?>
</td>
                  <td>
                    <?php $_smarty_tpl->_assignInScope('optionsPaypalCarrier', array());?>
                    <?php $_smarty_tpl->_assignInScope('selectedCarrier', (($_smarty_tpl->tpl_vars['carrier']->value['id_reference']).(',')).($_smarty_tpl->tpl_vars['field']->value['set']['mapService']->getPaypalCarrierByPsCarrier($_smarty_tpl->tpl_vars['carrier']->value['id_reference'])));?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['set']['mapService']->getPaypalCarriersByCountry(), 'paypalCarrier');
$_smarty_tpl->tpl_vars['paypalCarrier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['paypalCarrier']->value) {
$_smarty_tpl->tpl_vars['paypalCarrier']->do_else = false;
?>
                      <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['optionsPaypalCarrier']) ? $_smarty_tpl->tpl_vars['optionsPaypalCarrier']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = array('value'=>(($_smarty_tpl->tpl_vars['carrier']->value['id_reference']).(',')).($_smarty_tpl->tpl_vars['paypalCarrier']->value['key']),'title'=>$_smarty_tpl->tpl_vars['paypalCarrier']->value['name']);
$_smarty_tpl->_assignInScope('optionsPaypalCarrier', $_tmp_array);?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php $_smarty_tpl->_subTemplateRender("file:../form-fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>array('type'=>'select','name'=>'carrier_map[]','label'=>false,'options'=>$_smarty_tpl->tpl_vars['optionsPaypalCarrier']->value,'variant'=>'primary','value'=>$_smarty_tpl->tpl_vars['selectedCarrier']->value)), 0, true);
?>
                  </td>
                </tr>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
          </table>
        </div>
      </div>
    <?php }?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'form_content'} */
}
