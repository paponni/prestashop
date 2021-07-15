<?php
/* Smarty version 3.1.39, created on 2021-07-15 12:28:19
  from '/opt/lampp/htdocs/prestashop/prestashop/modules/ht_staticblocks/views/templates/hook/ht_staticblocks_hometop1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f01bd3ce1c43_85602864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e28d32d1e133d90d5e364d98ce39e1f2444b8be' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/prestashop/modules/ht_staticblocks/views/templates/hook/ht_staticblocks_hometop1.tpl',
      1 => 1626334458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f01bd3ce1c43_85602864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '19317307460f01bd3cd1854_67724326';
?>

<!-- Static Block module -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block_list']->value, 'block');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?>
	<?php if ((isset($_smarty_tpl->tpl_vars['block']->value['content']))) {?>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['block']->value['content'],'quotes','UTF-8' ));?>

	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!-- /Static block module --><?php }
}
