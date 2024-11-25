<?php
/* Smarty version 3.1.48, created on 2024-11-25 23:59:58
  from '/var/www/html/modules/paypal/views/templates/admin/admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6745016e73ce44_13014294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '662079e20b4d742033660fcea1f121fa53d25bb7' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/admin.tpl',
      1 => 1732575594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6745016e73ce44_13014294 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/dashboard.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>$_smarty_tpl->tpl_vars['trackingForm']->value), 0, true);
?>

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['isShowModalConfiguration']->value)===null||$tmp==='' ? false : $tmp)) {?>
  <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/modal-configuration.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>

      <?php if ((isset($_smarty_tpl->tpl_vars['accountForm']->value))) {?>
        <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/section.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>$_smarty_tpl->tpl_vars['accountForm']->value), 0, true);
?>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['trackingForm']->value))) {?>
      <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/section.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>$_smarty_tpl->tpl_vars['trackingForm']->value), 0, true);
?>
  <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['checkoutForm']->value))) {?>
      <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/section.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>$_smarty_tpl->tpl_vars['checkoutForm']->value), 0, true);
?>
  <?php }?>


      <?php if ((isset($_smarty_tpl->tpl_vars['formInstallment']->value))) {?>
        <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/section.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>$_smarty_tpl->tpl_vars['formInstallment']->value,'sectionColFormClasses'=>' ','sectionColInfoClasses'=>' '), 0, true);
?>
    <?php }?>

      <?php if ((isset($_smarty_tpl->tpl_vars['formInstallmentMessaging']->value))) {?>
        <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/section.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>$_smarty_tpl->tpl_vars['formInstallmentMessaging']->value,'sectionColFormClasses'=>' ','sectionColInfoClasses'=>' '), 0, true);
?>
    <?php }?>

      <?php if ((isset($_smarty_tpl->tpl_vars['shortcutConfigurationForm']->value))) {?>
      <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/section.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>$_smarty_tpl->tpl_vars['shortcutConfigurationForm']->value), 0, true);
?>
  <?php }?>


    <?php if ((isset($_smarty_tpl->tpl_vars['orderStatusForm']->value))) {?>
      <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/section.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>$_smarty_tpl->tpl_vars['orderStatusForm']->value), 0, true);
?>
  <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['whiteListForm']->value))) {?>
      <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/section.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>$_smarty_tpl->tpl_vars['whiteListForm']->value), 0, true);
?>
  <?php }?>


<?php }
}
}
