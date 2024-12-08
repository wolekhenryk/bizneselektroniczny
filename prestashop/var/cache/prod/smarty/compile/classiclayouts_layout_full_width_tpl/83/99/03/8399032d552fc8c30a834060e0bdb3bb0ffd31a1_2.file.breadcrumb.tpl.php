<?php
/* Smarty version 3.1.48, created on 2024-12-08 15:30:04
  from '/var/www/html/themes/classic/templates/_partials/breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6755ad6cd7f2d5_87100865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8399032d552fc8c30a834060e0bdb3bb0ffd31a1' => 
    array (
      0 => '/var/www/html/themes/classic/templates/_partials/breadcrumb.tpl',
      1 => 1733659457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6755ad6cd7f2d5_87100865 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="breadcrumb-wrapper">
<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb hidden-sm-down">
<div class="breadcrumb-home">
<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8');?>
/themes/classic/assets/img/ico_home.png" alt="Najnowsza dostawa">
</div>
  <ol>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7379081066755ad6cd7dad7_12171640', 'breadcrumb');
?>

  </ol>
</nav>
</div>


<style>
#wrapper .breadcrumb li::after {
    margin: 0.3125rem;
    content: "»";
}

.breadcrumb-wrapper{
  margin: 0 0;
  padding: 0 0;
  width: 100%;
  border-bottom: 1px solid #e1e1e1;
}

.breadcrumb{
      background: #fff !important;
    padding: 8px 0 !important;
    margin: 0 auto;
    width: 62.5%;
    display: flex;
    align-items:center;
}

.breadcrumb-home img{
      width: 20px;
    height: 20px;
    margin: 0 7px 9px 0;
}

.breadcrumb ol{
  text-transform: uppercase;
    padding-left: 0;
    padding-right: 2px;
    color: #6a6969;
    font-size: 12px;
}

#wrapper .breadcrumb li a{
  text-transform: uppercase;
    padding-left: 0;
    padding-right: 2px;
    color: #6a6969;
    font-size: 12px;
    text-decoration: none;
}

#wrapper .breadcrumb li:last-child {
      color: #6a6969;
}

#content-wrapper #wrapper{
  background-color:transparent; 
}

body{
  background-color: #fff !important;
}

.breadcrumb-wrapper{
  background-color: #fff;
}

</style>
<?php }
/* {block 'breadcrumb_item'} */
class Block_11919747216755ad6cd7e084_12751216 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <li>
            <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] : null)) {?>
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span></a>
            <?php } else { ?>
              <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php }?>
          </li>
        <?php
}
}
/* {/block 'breadcrumb_item'} */
/* {block 'breadcrumb'} */
class Block_7379081066755ad6cd7dad7_12171640 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_7379081066755ad6cd7dad7_12171640',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_11919747216755ad6cd7e084_12751216',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['total'];
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11919747216755ad6cd7e084_12751216', 'breadcrumb_item', $this->tplIndex);
?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
}
/* {/block 'breadcrumb'} */
}
