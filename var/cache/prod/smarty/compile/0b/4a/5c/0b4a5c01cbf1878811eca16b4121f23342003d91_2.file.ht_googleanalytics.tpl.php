<?php
/* Smarty version 3.1.39, created on 2021-07-15 11:13:34
  from '/opt/lampp/htdocs/prestashop/prestashop/modules/ht_googleanalytics/views/templates/hook/ht_googleanalytics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f00a4ed1b6e7_92346966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b4a5c01cbf1878811eca16b4121f23342003d91' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/prestashop/modules/ht_googleanalytics/views/templates/hook/ht_googleanalytics.tpl',
      1 => 1626334458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f00a4ed1b6e7_92346966 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['ga_enable']->value)) && $_smarty_tpl->tpl_vars['ga_enable']->value == 'ga_yes') {?>
    <?php echo '<script'; ?>
>
        
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        
            ga('create', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ga_google_tracking_id']->value, ENT_QUOTES, 'UTF-8');?>
', 'auto');
            ga('send', 'pageview');
    <?php echo '</script'; ?>
>
<?php }
}
}
