<?php
/* Smarty version 3.1.29, created on 2017-07-07 03:03:28
  from "C:\xampp\htdocs\dbone\ow_system_plugins\base\decorators\box_cap.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595f5c70994d96_40984147',
  'file_dependency' => 
  array (
    '9d737c1ed58ef8acf69f94fe9b6408b7fb544800' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dbone\\ow_system_plugins\\base\\decorators\\box_cap.html',
      1 => 1499421677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f5c70994d96_40984147 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\function.text.php';
?>

<div class="ow_box_cap<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['type'])) {?>_<?php echo $_smarty_tpl->tpl_vars['data']->value['type'];
}
if (!empty($_smarty_tpl->tpl_vars['data']->value['addClass'])) {?> <?php echo $_smarty_tpl->tpl_vars['data']->value['addClass'];
}?>">
	<div class="ow_box_cap_right">
		<div class="ow_box_cap_body">
			<h3 class="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['iconClass'])) {
echo $_smarty_tpl->tpl_vars['data']->value['iconClass'];
} else { ?>ow_ic_file<?php }?>">
			<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['href'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['href'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['extraString'])) {
echo $_smarty_tpl->tpl_vars['data']->value['extraString'];
}?>><?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['langLabel'])) {?>
			   <?php echo smarty_function_text(array('key'=>$_smarty_tpl->tpl_vars['data']->value['langLabel']),$_smarty_tpl);?>

			<?php } else { ?>
			   <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['label'])) {
echo $_smarty_tpl->tpl_vars['data']->value['label'];
} else { ?>&nbsp;<?php }?>
		    <?php }?>
		    <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['href'])) {?></a><?php }?>
			</h3>
		   <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['content'])) {
echo $_smarty_tpl->tpl_vars['data']->value['content'];
}?>
		</div>
	</div>
</div><?php }
}
