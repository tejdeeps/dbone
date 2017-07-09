<?php
/* Smarty version 3.1.29, created on 2017-07-07 03:03:48
  from "C:\xampp\htdocs\dbone\ow_system_plugins\base\views\components\users_widget.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595f5c84994d97_54460075',
  'file_dependency' => 
  array (
    'cbbf89c39954a2909bffa27e3dc4247d3cff017b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dbone\\ow_system_plugins\\base\\views\\components\\users_widget.html',
      1 => 1499421681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f5c84994d97_54460075 ($_smarty_tpl) {
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\function.decorator.php';
if (!empty($_smarty_tpl->tpl_vars['menu']->value)) {
echo $_smarty_tpl->tpl_vars['menu']->value;
}?>
<div id="<?php echo $_smarty_tpl->tpl_vars['widgetId']->value;?>
">
	<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_item_0_saved_key = isset($_smarty_tpl->tpl_vars['type']) ? $_smarty_tpl->tpl_vars['type'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['type'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
		<div id="<?php echo $_smarty_tpl->tpl_vars['item']->value['contId'];?>
" style="display:<?php if ($_smarty_tpl->tpl_vars['item']->value['active']) {?>block<?php } else { ?>none<?php }?>;"><?php echo $_smarty_tpl->tpl_vars['item']->value['users'];?>
</div>
		<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['toolbarId'])) {?><div id="<?php echo $_smarty_tpl->tpl_vars['item']->value['toolbarId'];?>
"  style="display: none;"><?php echo smarty_function_decorator(array('name'=>'box_toolbar','class'=>"clearfix",'itemList'=>$_smarty_tpl->tpl_vars['item']->value['toolbar']),$_smarty_tpl);?>
</div><?php }?>
	<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
if ($__foreach_item_0_saved_key) {
$_smarty_tpl->tpl_vars['type'] = $__foreach_item_0_saved_key;
}
?>
</div><?php }
}
