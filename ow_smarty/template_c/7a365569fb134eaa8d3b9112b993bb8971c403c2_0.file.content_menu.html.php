<?php
/* Smarty version 3.1.29, created on 2017-07-07 03:04:44
  from "C:\xampp\htdocs\dbone\ow_system_plugins\base\views\components\content_menu.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595f5cbc777291_01102529',
  'file_dependency' => 
  array (
    '7a365569fb134eaa8d3b9112b993bb8971c403c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dbone\\ow_system_plugins\\base\\views\\components\\content_menu.html',
      1 => 1499421680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f5cbc777291_01102529 ($_smarty_tpl) {
?>
<div class="ow_content_menu_wrap">
<ul class="ow_content_menu clearfix">
 	<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_contentMenu_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_contentMenu_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
    <li class="<?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
 <?php if ($_smarty_tpl->tpl_vars['item']->value['active']) {?> active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><span<?php if ($_smarty_tpl->tpl_vars['item']->value['iconClass']) {?> class="<?php echo $_smarty_tpl->tpl_vars['item']->value['iconClass'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span></a></li>
	<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_contentMenu_0_saved_local_item;
}
if ($__foreach_contentMenu_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_contentMenu_0_saved_item;
}
?>
</ul>
</div><?php }
}
