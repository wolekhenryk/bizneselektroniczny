<?php
/* Smarty version 3.1.48, created on 2024-11-25 23:59:58
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6745016e740216_55666305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '094f0b8e3b8e8833bf3ddad5c72d4add7778955d' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/dashboard.tpl',
      1 => 1732575594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6745016e740216_55666305 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row" data-dashboard>
    <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/welcome-board.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
  <div class="col col-md-6 mt-4">
    <div class="card h-100">
      <div class="card-header">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Technical checklist','mod'=>'paypal'),$_smarty_tpl ) );?>

      </div>
      <div class="card-body" technical-checklist-container>
        <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/statusBlock.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('vars'=>$_smarty_tpl->tpl_vars['technicalChecklistForm']->value['fields']['technicalChecklist']['set']), 0, true);
?>
      </div>
    </div>
  </div>
  <div class="col col-md-6 mt-4">
    <div class="card h-100">
      <div class="card-header">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Feature checklist','mod'=>'paypal'),$_smarty_tpl ) );?>

      </div>
      <div class="card-body" feature-checklist-container>
        <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/featureChecklist.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('vars'=>$_smarty_tpl->tpl_vars['featureChecklistForm']->value['fields']['featureChecklist']['set']), 0, true);
?>
      </div>
    </div>
  </div>
</div>
<button data-btn-section-reset class="btn btn-secondary mb-3 d-none"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back','mod'=>'paypal'),$_smarty_tpl ) );?>
</button>

<?php }
}
