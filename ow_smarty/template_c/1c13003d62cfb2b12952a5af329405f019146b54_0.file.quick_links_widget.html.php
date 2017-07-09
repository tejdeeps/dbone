<?php
/* Smarty version 3.1.29, created on 2017-07-07 03:13:38
  from "C:\xampp\htdocs\dbone\ow_system_plugins\base\views\components\quick_links_widget.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595f5ed254a371_81499229',
  'file_dependency' => 
  array (
    '1c13003d62cfb2b12952a5af329405f019146b54' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dbone\\ow_system_plugins\\base\\views\\components\\quick_links_widget.html',
      1 => 1499422219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f5ed254a371_81499229 ($_smarty_tpl) {
?>
<table class="ow_nomargin" width="100%">
	<tbody>
        <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
		<tr>
			<td class="ow_label"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a></td>
			<td class="ow_txtright"><?php if (!empty($_smarty_tpl->tpl_vars['item']->value['active_count'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['active_count_url'];?>
"><span class="ow_lbutton ow_green"><?php echo $_smarty_tpl->tpl_vars['item']->value['active_count'];?>
</span></a><?php }?></td>
			<td class="ow_txtright"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['count_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
</a></td>
		</tr>
        <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
	</tbody>
</table><?php }
}
