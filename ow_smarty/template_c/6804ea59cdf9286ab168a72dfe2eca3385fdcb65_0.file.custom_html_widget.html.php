<?php
/* Smarty version 3.1.29, created on 2017-07-07 03:03:48
  from "C:\xampp\htdocs\dbone\ow_system_plugins\base\views\components\custom_html_widget.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595f5c847d6871_82018336',
  'file_dependency' => 
  array (
    '6804ea59cdf9286ab168a72dfe2eca3385fdcb65' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dbone\\ow_system_plugins\\base\\views\\components\\custom_html_widget.html',
      1 => 1499421680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f5c847d6871_82018336 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\function.text.php';
?>
<div class="ow_custom_html_widget">
	<?php if ($_smarty_tpl->tpl_vars['content']->value) {?>
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	<?php } else { ?>
            <div class="ow_nocontent">
                <?php echo smarty_function_text(array('key'=>"base+custom_html_widget_no_content"),$_smarty_tpl);?>

            </div>
	<?php }?>
</div><?php }
}
