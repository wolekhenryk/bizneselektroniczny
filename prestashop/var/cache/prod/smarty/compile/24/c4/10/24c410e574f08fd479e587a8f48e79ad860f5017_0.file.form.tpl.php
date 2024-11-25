<?php
/* Smarty version 3.1.48, created on 2024-11-25 23:59:58
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/forms/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6745016e773ef5_07967342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24c410e574f08fd479e587a8f48e79ad860f5017' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/forms/form.tpl',
      1 => 1732575594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../form-fields.tpl' => 1,
  ),
),false)) {
function content_6745016e773ef5_07967342 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<form id="<?php echo $_smarty_tpl->tpl_vars['form']->value['id_form'];?>
" class="mt-4 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('form-modal'=>$_smarty_tpl->tpl_vars['isModal']->value) ));?>
" data-form-configuration <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17314805586745016e771e58_45989281', 'form_attributes');
?>
>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18169215276745016e7720e3_60660926', 'form_content');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11628650866745016e772f07_08291543', 'form_footer');
?>

</form>
<?php }
/* {block 'form_attributes'} */
class Block_17314805586745016e771e58_45989281 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_attributes' => 
  array (
    0 => 'Block_17314805586745016e771e58_45989281',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'form_attributes'} */
/* {block 'form_field'} */
class Block_12078159196745016e772822_26023858 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender("file:../form-fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['field']->value), 0, true);
?>
        <?php
}
}
/* {/block 'form_field'} */
/* {block 'form_content'} */
class Block_18169215276745016e7720e3_60660926 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_content' => 
  array (
    0 => 'Block_18169215276745016e7720e3_60660926',
  ),
  'form_field' => 
  array (
    0 => 'Block_12078159196745016e772822_26023858',
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
      <?php if ((($tmp = @$_smarty_tpl->tpl_vars['field']->value['name'])===null||$tmp==='' ? false : $tmp)) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12078159196745016e772822_26023858', 'form_field', $this->tplIndex);
?>

      <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php
}
}
/* {/block 'form_content'} */
/* {block 'form_footer_buttons'} */
class Block_20481584856745016e773031_16280361 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['isModal']->value) {?>
          <div class="d-flex justify-content-between flex-fill mr-3">
            <button data-btn-action="prev" class="btn btn-secondary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back','mod'=>'paypal'),$_smarty_tpl ) );?>
</button>
            <button data-btn-action="next" class="btn btn-outline-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Skip this step','mod'=>'paypal'),$_smarty_tpl ) );?>
</button>
          </div>
        <?php }?>
        <button save-form class="btn btn-secondary ml-auto" name=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['form']->value['submit']['name'],'htmlall','UTF-8' ));?>
><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['form']->value['submit']['title'],'htmlall','UTF-8' ));?>
</button>
      <?php
}
}
/* {/block 'form_footer_buttons'} */
/* {block 'form_footer'} */
class Block_11628650866745016e772f07_08291543 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_footer' => 
  array (
    0 => 'Block_11628650866745016e772f07_08291543',
  ),
  'form_footer_buttons' => 
  array (
    0 => 'Block_20481584856745016e773031_16280361',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="form-group mb-0 d-flex justify-content-between pt-3 mt-auto">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20481584856745016e773031_16280361', 'form_footer_buttons', $this->tplIndex);
?>

    </div>
  <?php
}
}
/* {/block 'form_footer'} */
}
