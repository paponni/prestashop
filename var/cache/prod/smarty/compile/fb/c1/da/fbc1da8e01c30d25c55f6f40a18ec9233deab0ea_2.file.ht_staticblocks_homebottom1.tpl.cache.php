<?php
/* Smarty version 3.1.39, created on 2021-07-15 12:28:19
  from '/opt/lampp/htdocs/prestashop/prestashop/modules/ht_staticblocks/views/templates/hook/ht_staticblocks_homebottom1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f01bd3dd5365_97835531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbc1da8e01c30d25c55f6f40a18ec9233deab0ea' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/prestashop/modules/ht_staticblocks/views/templates/hook/ht_staticblocks_homebottom1.tpl',
      1 => 1626334458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f01bd3dd5365_97835531 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '26438823360f01bd3dca427_17244525';
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
