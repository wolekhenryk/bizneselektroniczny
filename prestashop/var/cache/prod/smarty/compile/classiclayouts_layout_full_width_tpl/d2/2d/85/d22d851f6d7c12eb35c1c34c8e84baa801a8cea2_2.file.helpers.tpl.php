<?php
/* Smarty version 3.1.48, created on 2025-01-12 23:34:27
  from '/var/www/html/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67844373106280_18166288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd22d851f6d7c12eb35c1c34c8e84baa801a8cea2' => 
    array (
      0 => '/var/www/html/themes/classic/templates/_partials/helpers.tpl',
      1 => 1736704383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67844373106280_18166288 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/d2/2d/85/d22d851f6d7c12eb35c1c34c8e84baa801a8cea2_2.file.helpers.tpl.php',
    'uid' => 'd22d851f6d7c12eb35c1c34c8e84baa801a8cea2',
    'call_name' => 'smarty_template_function_renderLogo_125451722967844373104b88_97616565',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_125451722967844373104b88_97616565 */
if (!function_exists('smarty_template_function_renderLogo_125451722967844373104b88_97616565')) {
function smarty_template_function_renderLogo_125451722967844373104b88_97616565(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_125451722967844373104b88_97616565 */
}
