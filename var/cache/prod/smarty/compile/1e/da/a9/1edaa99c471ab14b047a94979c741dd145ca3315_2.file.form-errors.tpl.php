<?php
/* Smarty version 3.1.39, created on 2021-07-15 12:43:10
  from '/opt/lampp/htdocs/prestashop/prestashop/themes/etrendlite/templates/_partials/form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f01f4e6b05f9_41170656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1edaa99c471ab14b047a94979c741dd145ca3315' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/prestashop/themes/etrendlite/templates/_partials/form-errors.tpl',
      1 => 1626334458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f01f4e6b05f9_41170656 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40591953560f01f4e6ab181_97526762', 'form_errors');
?>

  </div>
<?php }
}
/* {block 'form_errors'} */
class Block_40591953560f01f4e6ab181_97526762 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_errors' => 
  array (
    0 => 'Block_40591953560f01f4e6ab181_97526762',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
          <li class="alert alert-danger"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'form_errors'} */
}
