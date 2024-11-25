<?php
/* Smarty version 3.1.48, created on 2024-11-25 23:59:58
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/welcome-board.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6745016e7442f5_90370012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff3395eabec6158d93d4b6fdc00cc9747f65fadd' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/welcome-board.tpl',
      1 => 1732575594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6745016e7442f5_90370012 (Smarty_Internal_Template $_smarty_tpl) {
?><div welcome-board class="col col-12">
  <div class="card shadow">
    <div class="card-body">
      <div class="row">
        <div class="col col-md-6">
          <div class="card-body h-100 d-flex flex-column justify-content-between">
            <div>
              <div class="h5"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Welcome on PayPal Dashboard','mod'=>'paypal'),$_smarty_tpl ) );?>
</div>
              <div>
                <ul class="list-unstyled mb-0">
                  <li class="d-flex align-items-center mb-1">
                      <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/icon-status.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isSuccess'=>(false == (($tmp = @$_smarty_tpl->tpl_vars['isSandbox']->value)===null||$tmp==='' ? false : $tmp))), 0, true);
?>
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mode production enabled','mod'=>'paypal'),$_smarty_tpl ) );?>

                  </li>
                  <li class="d-flex align-items-center">
                      <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['moduleFullDir']->value).("/views/templates/admin/_partials/icon-status.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isSuccess'=>(($tmp = @$_smarty_tpl->tpl_vars['isConfigured']->value)===null||$tmp==='' ? false : $tmp)), 0, true);
?>
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account connected','mod'=>'paypal'),$_smarty_tpl ) );?>

                  </li>
                </ul>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-4">
              <span class="btn btn-secondary" id="logoutAccount" data-section-toggle="account">
                <span class="icon mr-2">
                  <i class="material-icons-outlined">account_circle</i>
                </span>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Logout / Switch mode','mod'=>'paypal'),$_smarty_tpl ) );?>

              </span>
            </div>
          </div>
        </div>
        <div class="col col-md-6">
          <div class="card-body h-100 d-flex flex-column justify-content-between">
            <div>
              <div class="h5"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More Actions','mod'=>'paypal'),$_smarty_tpl ) );?>
</div>
              <div class="row">
                <div class="col col-md-6 d-flex align-items-center">
                  <span class="icon mr-1">
                    <i class="material-icons-outlined">edit_location_alt</i>
                  </span>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure','mod'=>'paypal'),$_smarty_tpl ) );?>
&nbsp;
                  <a href="#" data-section-toggle="tracking">
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tracking','mod'=>'paypal'),$_smarty_tpl ) );?>

                  </a>
                </div>
                <div class="col col-md-6 d-flex align-items-center mt-3">
                  <span class="icon mr-1">
                    <i class="material-icons-outlined">manage_search</i>
                  </span>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Make a','mod'=>'paypal'),$_smarty_tpl ) );?>
&nbsp;
                  <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['diagnosticPage']->value,'htmlall','UTF-8' ));?>
" target="_blank" class="">
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'diagnostic','mod'=>'paypal'),$_smarty_tpl ) );?>

                  </a>
                </div>
                <div class="col col-md-6 d-flex align-items-center mt-3">
                  <span class="icon mr-1">
                    <i class="material-icons-outlined">toggle_on</i>
                  </span>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure the','mod'=>'paypal'),$_smarty_tpl ) );?>
&nbsp;
                  <a href="#" data-section-toggle="configuration">
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'module','mod'=>'paypal'),$_smarty_tpl ) );?>

                  </a>
                </div>
                <div class="col col-md-6 d-flex align-items-center mt-3">
                  <span class="icon mr-1">
                    <i class="material-icons-outlined">feed</i>
                  </span>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check the','mod'=>'paypal'),$_smarty_tpl ) );?>
&nbsp;
                  <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['loggerPage']->value,'htmlall','UTF-8' ));?>
" target="_blank" class="">
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'logs','mod'=>'paypal'),$_smarty_tpl ) );?>

                  </a>
                </div>
              </div>
            </div>

              <?php if ((($tmp = @$_smarty_tpl->tpl_vars['merchantId']->value)===null||$tmp==='' ? false : $tmp)) {?>
                <div class="alert alert-warning d-flex align-items-center mt-5 mb-0">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You are connected with the account:','mod'=>'paypal'),$_smarty_tpl ) );?>
 <b><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['merchantId']->value,'htmlall','UTF-8' ));?>
</b>
                </div>
              <?php }?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php }
}
