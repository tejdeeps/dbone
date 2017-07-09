<?php
/* Smarty version 3.1.29, created on 2017-07-07 03:03:34
  from "C:\xampp\htdocs\dbone\ow_system_plugins\base\decorators\tooltip.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595f5c761a76e8_36919126',
  'file_dependency' => 
  array (
    'f781a7c9ddeaf75b5916ba682fc7f211051d9e61' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dbone\\ow_system_plugins\\base\\decorators\\tooltip.html',
      1 => 1499421678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f5c761a76e8_36919126 ($_smarty_tpl) {
?>

<div class="ow_tooltip <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['addClass'])) {?> <?php echo $_smarty_tpl->tpl_vars['data']->value['addClass'];
}?>">
    <div class="ow_tooltip_tail">
        <span></span>
    </div>
    <div class="ow_tooltip_body">
        <?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

    </div>
</div><?php }
}
