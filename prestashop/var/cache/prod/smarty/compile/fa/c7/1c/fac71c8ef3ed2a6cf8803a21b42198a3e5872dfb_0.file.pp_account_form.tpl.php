<?php
/* Smarty version 3.1.48, created on 2024-11-25 23:59:58
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/forms/pp_account_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6745016e76f609_41901758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fac71c8ef3ed2a6cf8803a21b42198a3e5872dfb' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/forms/pp_account_form.tpl',
      1 => 1732575594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../form-fields.tpl' => 7,
    'file:../icon-status.tpl' => 1,
  ),
),false)) {
function content_6745016e76f609_41901758 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13000673636745016e764b15_49194561', 'form_content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16459099006745016e76ec68_62917664', 'form_footer_buttons');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./form.tpl");
}
/* {block 'form_content'} */
class Block_13000673636745016e764b15_49194561 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_content' => 
  array (
    0 => 'Block_13000673636745016e764b15_49194561',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('isModal', (($tmp = @$_smarty_tpl->tpl_vars['isModal']->value)===null||$tmp==='' ? false : $tmp));?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form']->value['fields'], 'field', false, 'fieldKey');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fieldKey']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['fieldKey']->value == 'account_form') {?>
            <?php $_smarty_tpl->_assignInScope('isShowCredentials', in_array($_smarty_tpl->tpl_vars['field']->value['set']['country_iso'],array('MX','BR','JP','IN')));?>
            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Production','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable24=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sandbox','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable25=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mode','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable26=ob_get_clean();
$_smarty_tpl->_assignInScope('selectMode', array('type'=>'select','name'=>'mode','value'=>(($tmp = @$_smarty_tpl->tpl_vars['field']->value['set']['mode'])===null||$tmp==='' ? '' : $tmp),'options'=>array(array('value'=>'LIVE','title'=>$_prefixVariable24),array('value'=>'SANDBOX','title'=>$_prefixVariable25)),'label'=>$_prefixVariable26,'variant'=>'primary'));?>
            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Client\’s ID','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable27=ob_get_clean();
$_smarty_tpl->_assignInScope('clientIdLive', array('type'=>'text','name'=>'paypal_clientid_live','label'=>$_prefixVariable27,'variant'=>'primary','value'=>(($tmp = @$_smarty_tpl->tpl_vars['field']->value['set']['paypal_clientid_live'])===null||$tmp==='' ? '' : $tmp)));?>
            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Client\’s secret','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable28=ob_get_clean();
$_smarty_tpl->_assignInScope('clientSecretLive', array('type'=>'text','name'=>'paypal_secret_live','label'=>$_prefixVariable28,'variant'=>'primary','value'=>(($tmp = @$_smarty_tpl->tpl_vars['field']->value['set']['paypal_secret_live'])===null||$tmp==='' ? '' : $tmp)));?>
            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merchant ID','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable29=ob_get_clean();
$_smarty_tpl->_assignInScope('merchantIdLive', array('type'=>'text','name'=>'merchant_id_live','value'=>(($tmp = @$_smarty_tpl->tpl_vars['field']->value['set']['merchant_id_live'])===null||$tmp==='' ? '' : $tmp),'label'=>$_prefixVariable29,'variant'=>'primary'));?>
            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Client\’s ID','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable30=ob_get_clean();
$_smarty_tpl->_assignInScope('clientIdSandbox', array('type'=>'text','name'=>'paypal_clientid_sandbox','label'=>$_prefixVariable30,'variant'=>'primary','value'=>(($tmp = @$_smarty_tpl->tpl_vars['field']->value['set']['paypal_clientid_sandbox'])===null||$tmp==='' ? '' : $tmp)));?>
            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Client\’s secret','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable31=ob_get_clean();
$_smarty_tpl->_assignInScope('clientSecretSandbox', array('type'=>'text','name'=>'paypal_secret_sandbox','label'=>$_prefixVariable31,'variant'=>'primary','value'=>(($tmp = @$_smarty_tpl->tpl_vars['field']->value['set']['paypal_secret_sandbox'])===null||$tmp==='' ? '' : $tmp)));?>
            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merchant ID','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable32=ob_get_clean();
$_smarty_tpl->_assignInScope('merchantIdSandbox', array('type'=>'text','name'=>'merchant_id_sandbox','value'=>(($tmp = @$_smarty_tpl->tpl_vars['field']->value['set']['merchant_id_sandbox'])===null||$tmp==='' ? '' : $tmp),'label'=>$_prefixVariable32,'variant'=>'primary'));?>

          <input type="hidden" name="is_configured_live" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['set']['is_configured_live'];?>
">
          <input type="hidden" name="is_configured_sandbox" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['set']['is_configured_sandbox'];?>
">

            <?php $_smarty_tpl->_subTemplateRender("file:../form-fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['selectMode']->value), 0, true);
?>

          <div credential-section>
            <div live-section style="display: none">
                <?php $_smarty_tpl->_subTemplateRender("file:../form-fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['clientIdLive']->value), 0, true);
?>
                <?php $_smarty_tpl->_subTemplateRender("file:../form-fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['clientSecretLive']->value), 0, true);
?>
                <?php $_smarty_tpl->_subTemplateRender("file:../form-fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['merchantIdLive']->value), 0, true);
?>
            </div>

            <div sandbox-section style="display: none">
                <?php $_smarty_tpl->_subTemplateRender("file:../form-fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['clientIdSandbox']->value), 0, true);
?>
                <?php $_smarty_tpl->_subTemplateRender("file:../form-fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['clientSecretSandbox']->value), 0, true);
?>
                <?php $_smarty_tpl->_subTemplateRender("file:../form-fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['merchantIdSandbox']->value), 0, true);
?>
            </div>
          </div>


          <div onboarding-button-section>

            <div live-section style="display: none">

              <div class="form-group row">
                <div class="offset-3 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('col-7'=>!$_smarty_tpl->tpl_vars['isModal']->value,'col-9'=>$_smarty_tpl->tpl_vars['isModal']->value) ));?>
">
                  <a
                    href="<?php echo $_smarty_tpl->tpl_vars['field']->value['set']['urlOnboarding_live'];?>
"
                    class="btn btn-secondary btn-block"
                    target="_blank"
                    data-paypal-button
                    data-paypal-onboard-complete="onboardCallback"
                  >
              <span class="icon mr-2">
                <i class="material-icons-outlined">account_circle</i>
              </span>
                    <span>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Connect or create your PayPal account','mod'=>'paypal'),$_smarty_tpl ) );?>

              </span>
                  </a>
                </div>
              </div>
            </div>

            <div sandbox-section style="display: none">
              <div class="form-group row">
                <div class="offset-3 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('col-7'=>!$_smarty_tpl->tpl_vars['isModal']->value,'col-9'=>$_smarty_tpl->tpl_vars['isModal']->value) ));?>
">
                  <a
                    href="<?php echo $_smarty_tpl->tpl_vars['field']->value['set']['urlOnboarding_sandbox'];?>
"
                    class="btn btn-secondary btn-block"
                    target="_blank"
                    data-paypal-button
                    data-paypal-onboard-complete="onboardCallback"
                  >
              <span class="icon mr-2">
                <i class="material-icons-outlined">account_circle</i>
              </span>
                    <span>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Connect or create your PayPal account','mod'=>'paypal'),$_smarty_tpl ) );?>

              </span>
                  </a>
                </div>
              </div>
            </div>

            <div logout-section style="display: none">

              <div class="form-group row">
                <?php if (!$_smarty_tpl->tpl_vars['isModal']->value) {?>
                  <label class="form-control-label col-3">
                      <?php $_smarty_tpl->_subTemplateRender("file:../icon-status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isSuccess'=>true), 0, true);
?>
                  </label>
                <?php }?>

                <div class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('col-7'=>!$_smarty_tpl->tpl_vars['isModal']->value,'col-9'=>$_smarty_tpl->tpl_vars['isModal']->value,'offset-3'=>$_smarty_tpl->tpl_vars['isModal']->value) ));?>
">
              <span class="btn btn-secondary btn-block" logout-button>
              <span class="icon mr-2">
                <i class="material-icons-outlined">account_circle</i>
              </span>
                <span>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Logout','mod'=>'paypal'),$_smarty_tpl ) );?>

              </span>
              </span>
                </div>
              </div>

                <?php if ($_smarty_tpl->tpl_vars['isModal']->value) {?>
                  <div class="form-group row">
                    <div class="offset-3 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('col-7'=>!$_smarty_tpl->tpl_vars['isModal']->value,'col-9'=>$_smarty_tpl->tpl_vars['isModal']->value) ));?>
">
                      <div merchant-label-sandbox class="alert alert-warning mt-0" style="display: none">
                          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You are connected with the account:','mod'=>'paypal'),$_smarty_tpl ) );?>

                        <b merchant-id></b>
                      </div>
                      <div merchant-label-live class="alert alert-warning mt-0" style="display: none">
                          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You are connected with the account:','mod'=>'paypal'),$_smarty_tpl ) );?>

                        <b merchant-id></b>
                      </div>
                    </div>
                  </div>
                <?php }?>

            </div>

          </div>

        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  <?php echo '<script'; ?>
>
    function onboardCallback(authCode, sharedId) {
      document.dispatchEvent(
        (new CustomEvent(
          'generateCredentials',
          {
            bubbles: true,
            detail: {
              authCode: authCode,
              sharedId: sharedId,
            }
          }
        ))
      );
    }

    window.addEventListener('load', function() {

      var event = new CustomEvent(
        '<?php if ($_smarty_tpl->tpl_vars['isShowCredentials']->value) {?>updateCredentials<?php } else { ?>updateButtonSection<?php }?>',
        {
          bubbles: true
        }
      );
      var mode = document.querySelector('#pp_account_form [name="mode"]');

      mode.addEventListener('change', function() {
        document.dispatchEvent(event);
      });
      document.dispatchEvent(event);

    });



  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://www.paypal.com/webapps/merchantboarding/js/lib/lightbox/partner.js"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'form_content'} */
/* {block 'form_footer_buttons'} */
class Block_16459099006745016e76ec68_62917664 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_footer_buttons' => 
  array (
    0 => 'Block_16459099006745016e76ec68_62917664',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <button save-form class="btn btn-secondary ml-auto" name=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['form']->value['submit']['name'],'htmlall','UTF-8' ));?>
><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['form']->value['submit']['title'],'htmlall','UTF-8' ));?>
</button>
<?php
}
}
/* {/block 'form_footer_buttons'} */
}
