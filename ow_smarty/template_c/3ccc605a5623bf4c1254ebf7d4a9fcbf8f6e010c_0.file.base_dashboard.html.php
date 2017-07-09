<?php
/* Smarty version 3.1.29, created on 2017-07-07 03:03:41
  from "C:\xampp\htdocs\dbone\ow_system_plugins\admin\views\controllers\base_dashboard.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595f5c7d393873_87943269',
  'file_dependency' => 
  array (
    '3ccc605a5623bf4c1254ebf7d4a9fcbf8f6e010c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dbone\\ow_system_plugins\\admin\\views\\controllers\\base_dashboard.html',
      1 => 1499421696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f5c7d393873_87943269 ($_smarty_tpl) {
?>
<div class="ow_stdmargin">
    <iframe class="ow_full" src="<?php echo $_smarty_tpl->tpl_vars['adminDashboardIframeUrl']->value;?>
" style="border: 0pt none ; width: 100%; height: 250px;" frameborder="0"></iframe>
</div>
<?php echo $_smarty_tpl->tpl_vars['componentPanel']->value;
}
}
