<?php
/* Smarty version 3.1.39, created on 2021-07-15 11:13:34
  from '/opt/lampp/htdocs/prestashop/prestashop/modules/ht_staticblocks/views/templates/hook/ht_staticblocks_footerAfter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f00a4ed3b811_16943783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdd13997a3eab29a512ef065abe361d1b813b55c' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/prestashop/modules/ht_staticblocks/views/templates/hook/ht_staticblocks_footerAfter.tpl',
      1 => 1626334458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f00a4ed3b811_16943783 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '115473235760f00a4ed2f724_45765943';
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
