<?php
/* Smarty version 3.1.29, created on 2017-07-07 03:03:34
  from "C:\xampp\htdocs\dbone\ow_system_plugins\base\views\components\console_item.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595f5c7612d5c6_22308535',
  'file_dependency' => 
  array (
    '3cdf61808f96e48256269abafe740522ff339988' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dbone\\ow_system_plugins\\base\\views\\components\\console_item.html',
      1 => 1499421681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f5c7612d5c6_22308535 ($_smarty_tpl) {
if (!is_callable('smarty_block_block_decorator')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\block.block_decorator.php';
?>
<div id="<?php echo $_smarty_tpl->tpl_vars['item']->value['uniqId'];?>
" class="ow_console_item <?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['hidden']) {?>style="display: none;"<?php }?>>
    <?php echo $_smarty_tpl->tpl_vars['item']->value['html'];?>

    <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['content'])) {?>
        <div id="<?php echo $_smarty_tpl->tpl_vars['item']->value['content']['uniqId'];?>
" class="OW_ConsoleItemContent" style="display: none;">

            <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"tooltip",'addClass'=>"console_tooltip ow_tooltip_top_right")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"tooltip",'addClass'=>"console_tooltip ow_tooltip_top_right"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php echo $_smarty_tpl->tpl_vars['item']->value['content']['html'];?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"tooltip",'addClass'=>"console_tooltip ow_tooltip_top_right"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


        </div>
    <?php }?>
</div><?php }
}
