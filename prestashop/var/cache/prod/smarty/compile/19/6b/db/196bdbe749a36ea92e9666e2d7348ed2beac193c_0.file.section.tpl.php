<?php
/* Smarty version 3.1.48, created on 2024-11-25 23:59:58
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/section.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6745016e762fd6_59323344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '196bdbe749a36ea92e9666e2d7348ed2beac193c' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/section.tpl',
      1 => 1732575594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6745016e762fd6_59323344 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('sectionRowClasses', (($tmp = @$_smarty_tpl->tpl_vars['sectionRowClasses']->value)===null||$tmp==='' ? ' mt-4' : $tmp));
$_smarty_tpl->_assignInScope('sectionColFormClasses', (($tmp = @$_smarty_tpl->tpl_vars['sectionColFormClasses']->value)===null||$tmp==='' ? ' col-xl-6' : $tmp));
$_smarty_tpl->_assignInScope('sectionColInfoClasses', (($tmp = @$_smarty_tpl->tpl_vars['sectionColInfoClasses']->value)===null||$tmp==='' ? ' col-xl-6' : $tmp));
$_smarty_tpl->_assignInScope('isModal', (($tmp = @$_smarty_tpl->tpl_vars['isModal']->value)===null||$tmp==='' ? false : $tmp));?>

<section class="row<?php echo $_smarty_tpl->tpl_vars['sectionRowClasses']->value;?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('d-none'=>!$_smarty_tpl->tpl_vars['isModal']->value) ));?>
" data-section-configuration>
<div class="col col-12 <?php if ($_smarty_tpl->tpl_vars['form']->value['help'] && $_smarty_tpl->tpl_vars['form']->value['help'] != '') {?>col-md-8<?php } else { ?>col-md-12<?php }
echo $_smarty_tpl->tpl_vars['sectionColFormClasses']->value;?>
">
   <div class="card">
   <?php if (!$_smarty_tpl->tpl_vars['isModal']->value) {?>
      <div class="card-header">
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['form']->value['legend']['title'],'htmlall','UTF-8' ));?>

      </div>
    <?php }?>
    <div class="card-body <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('pr-0'=>$_smarty_tpl->tpl_vars['isModal']->value) ));?>
">
      <?php if ($_smarty_tpl->tpl_vars['isModal']->value) {?>
        <div class="h1"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['form']->value['legend']['title'],'htmlall','UTF-8' ));?>
</div>
      <?php }?>
        <div form-container="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['form']->value['id_form'],'htmlall','UTF-8' ));?>
">
            <?php if ($_smarty_tpl->tpl_vars['form']->value['id_form'] != 'pp_white_list_form') {?>
                <?php $_smarty_tpl->_subTemplateRender(((($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/forms/")).($_smarty_tpl->tpl_vars['form']->value['id_form'])).(".tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>$_smarty_tpl->tpl_vars['form']->value), 0, true);
?>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/forms/form.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>$_smarty_tpl->tpl_vars['form']->value), 0, true);
?>
            <?php }?>
        </div>
     </div>
   </div>
 </div>

 <?php if ($_smarty_tpl->tpl_vars['form']->value['help'] && $_smarty_tpl->tpl_vars['form']->value['help'] != '') {?>
  <div class="col col-12 col-md-4<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sectionColInfoClasses']->value,'htmlall','UTF-8' ));?>
">
    <div class="card-body">
      <?php echo (($tmp = @$_smarty_tpl->tpl_vars['form']->value['help'])===null||$tmp==='' ? '' : $tmp);?>

    </div>
  </div>
 <?php }?>
</section>
<?php }
}
