<?php
/* Smarty version 3.1.48, created on 2024-11-25 23:59:58
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/icon-status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6745016e746722_99558904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1eeaab2b783bff90b2f7b429810c3aae42d952c1' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/icon-status.tpl',
      1 => 1732575594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6745016e746722_99558904 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('isSuccess', (($tmp = @$_smarty_tpl->tpl_vars['isSuccess']->value)===null||$tmp==='' ? false : $tmp));?>

<span class="icon-lg mr-1">
  <i
    class="material-icons-outlined <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('text-success'=>$_smarty_tpl->tpl_vars['isSuccess']->value,'text-danger'=>!$_smarty_tpl->tpl_vars['isSuccess']->value) ));?>
"
  >
    <?php if ($_smarty_tpl->tpl_vars['isSuccess']->value) {?>done<?php } else { ?>close<?php }?>
  </i>
</span>
<?php }
}
