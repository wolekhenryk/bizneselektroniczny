<?php
/* Smarty version 3.1.48, created on 2024-11-25 23:59:58
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/modal-configuration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6745016e75dd08_69874938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b9c466c054281c6375b35708eea491a50abe5a5' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/modal-configuration.tpl',
      1 => 1732575594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6745016e75dd08_69874938 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="modal-configuration" tabindex="-1" aria-hidden="true">
 <div class="modal-dialog modal-lg modal-dialog-centered" data-modal-dialog-configuration>
   <div class="modal-content">

     <div class="modal-body" id="modal-configuration-steps">
      <div class="card-body pb-0">
        <div class="row">
          <div class="col-6">
            <img src="<?php echo addslashes($_smarty_tpl->tpl_vars['moduleDir']->value);?>
/views/img/paypal.svg"  alt="paypal">
          </div>
          <div class="col-6 d-flex flex-column">
            <div class="progress">
              <div class="progress-bar" data-steps-progress role="progressbar" style="width: 0;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <span class="badge bg-warning text-primary ml-auto mt-4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step :','mod'=>'paypal'),$_smarty_tpl ) );?>
 <span data-badge-current-step>1</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'out of','mod'=>'paypal'),$_smarty_tpl ) );?>
 <span data-badge-max-step></span></span>
          </div>
        </div>
      </div>
      <div>
          <?php if ((isset($_smarty_tpl->tpl_vars['accountForm']->value))) {?>
            <div data-step-content>
                <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/section.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>$_smarty_tpl->tpl_vars['accountForm']->value,'isModal'=>true), 0, true);
?>
            </div>
          <?php }?>
          <?php if ((isset($_smarty_tpl->tpl_vars['checkoutForm']->value))) {?>
            <div class="d-none" data-step-content>
                <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/section.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>$_smarty_tpl->tpl_vars['checkoutForm']->value,'isModal'=>true), 0, true);
?>
            </div>
          <?php }?>
          <?php if ((isset($_smarty_tpl->tpl_vars['formInstallment']->value))) {?>
            <div class="d-none" data-step-content>
                <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/section.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>$_smarty_tpl->tpl_vars['formInstallment']->value,'sectionColFormClasses'=>' ','sectionColInfoClasses'=>' ','isModal'=>true), 0, true);
?>
            </div>
          <?php }?>
          <?php if ((isset($_smarty_tpl->tpl_vars['shortcutConfigurationForm']->value))) {?>
            <div class="d-none" data-step-content>
                <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/section.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>$_smarty_tpl->tpl_vars['shortcutConfigurationForm']->value,'isModal'=>true), 0, true);
?>
            </div>
          <?php }?>
          <?php if ((isset($_smarty_tpl->tpl_vars['orderStatusForm']->value))) {?>
            <div class="d-none" data-step-content>
                <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/section.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>$_smarty_tpl->tpl_vars['orderStatusForm']->value,'isModal'=>true), 0, true);
?>
            </div>
          <?php }?>
          <?php if ((isset($_smarty_tpl->tpl_vars['whiteListForm']->value))) {?>
            <div class="d-none" data-step-content>
                <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/section.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>$_smarty_tpl->tpl_vars['whiteListForm']->value,'isModal'=>true), 0, true);
?>
            </div>
          <?php }?>
      </div>
     </div>
   </div>
 </div>
</div>
<?php }
}
