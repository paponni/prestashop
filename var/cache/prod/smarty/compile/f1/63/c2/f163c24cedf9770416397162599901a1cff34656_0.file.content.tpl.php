<?php
/* Smarty version 3.1.39, created on 2021-07-15 11:15:53
  from '/opt/lampp/htdocs/prestashop/prestashop/administration/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f00ad9ca9170_73614435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f163c24cedf9770416397162599901a1cff34656' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/prestashop/administration/themes/new-theme/template/content.tpl',
      1 => 1625587177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f00ad9ca9170_73614435 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
