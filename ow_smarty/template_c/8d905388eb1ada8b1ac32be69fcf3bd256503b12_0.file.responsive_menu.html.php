<?php
/* Smarty version 3.1.29, created on 2017-07-07 03:03:34
  from "C:\xampp\htdocs\dbone\ow_system_plugins\base\views\components\responsive_menu.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595f5c76352ad7_32755147',
  'file_dependency' => 
  array (
    '8d905388eb1ada8b1ac32be69fcf3bd256503b12' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dbone\\ow_system_plugins\\base\\views\\components\\responsive_menu.html',
      1 => 1499421681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f5c76352ad7_32755147 ($_smarty_tpl) {
?>
<div class="ow_responsive_menu ow_left" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">
    <ul class="ow_main_menu clearfix" data-el="list"><?php
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
?><li class="<?php echo $_smarty_tpl->tpl_vars['item']->value['class'];
if (!empty($_smarty_tpl->tpl_vars['item']->value['active'])) {?> active<?php }?>" data-el="item"> <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['new_window']) {?> target="_blank"<?php }?>> <span><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span> </a> </li><?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?></ul>
    <div class="ow_menu_more_wrap ow_cursor_pointer">
        <div class="ow_menu_more">
            <div class="ow_menu_more_cont">
                <ul class="ow_menu_more_list" data-el="more-list">

                </ul>
            </div>
        </div>
    </div>
</div>
<?php }
}
