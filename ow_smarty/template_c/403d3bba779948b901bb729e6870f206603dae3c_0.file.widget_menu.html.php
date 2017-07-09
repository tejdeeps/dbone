<?php
/* Smarty version 3.1.29, created on 2017-07-07 03:03:40
  from "C:\xampp\htdocs\dbone\ow_system_plugins\base\views\components\widget_menu.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595f5c7ce05a12_13046774',
  'file_dependency' => 
  array (
    '403d3bba779948b901bb729e6870f206603dae3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dbone\\ow_system_plugins\\base\\views\\components\\widget_menu.html',
      1 => 1499421680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f5c7ce05a12_13046774 ($_smarty_tpl) {
?>
<div class="clearfix">
	<div class="ow_box_menu">
		<?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_tab_0_saved_item = isset($_smarty_tpl->tpl_vars['tab']) ? $_smarty_tpl->tpl_vars['tab'] : false;
$_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['tab']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
$__foreach_tab_0_saved_local_item = $_smarty_tpl->tpl_vars['tab'];
?>
			<a href="javascript://" id="<?php echo $_smarty_tpl->tpl_vars['tab']->value['id'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['tab']->value['active']) && $_smarty_tpl->tpl_vars['tab']->value['active']) {?> class="active"<?php }?>><span><?php echo $_smarty_tpl->tpl_vars['tab']->value['label'];?>
</span></a>
		<?php
$_smarty_tpl->tpl_vars['tab'] = $__foreach_tab_0_saved_local_item;
}
if ($__foreach_tab_0_saved_item) {
$_smarty_tpl->tpl_vars['tab'] = $__foreach_tab_0_saved_item;
}
?>
	</div>
</div><?php }
}
