<?php
/* Smarty version 3.1.39, created on 2021-07-16 10:57:02
  from '/opt/lampp/htdocs/prestashop/prestashop/administration/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f157ee9044f2_53504441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcd1155fd07bafac1cffc5397a12af9ad90f7829' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/prestashop/administration/themes/default/template/content.tpl',
      1 => 1625587181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f157ee9044f2_53504441 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
