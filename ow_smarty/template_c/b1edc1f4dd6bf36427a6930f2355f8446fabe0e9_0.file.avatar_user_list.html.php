<?php
/* Smarty version 3.1.29, created on 2017-07-07 03:03:48
  from "C:\xampp\htdocs\dbone\ow_system_plugins\base\views\components\avatar_user_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595f5c8485c0b9_37332234',
  'file_dependency' => 
  array (
    'b1edc1f4dd6bf36427a6930f2355f8446fabe0e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dbone\\ow_system_plugins\\base\\views\\components\\avatar_user_list.html',
      1 => 1499421680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f5c8485c0b9_37332234 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\function.decorator.php';
?>
<div class="ow_lp_avatars<?php if (!empty($_smarty_tpl->tpl_vars['css_class']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['css_class']->value;
}?>">
    <?php if (empty($_smarty_tpl->tpl_vars['users']->value)) {?>
        <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'base+empty_user_avatar_list'),$_smarty_tpl);?>
</div>
    <?php } else { ?>
        <?php
$_from = $_smarty_tpl->tpl_vars['users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_user_0_saved_item = isset($_smarty_tpl->tpl_vars['user']) ? $_smarty_tpl->tpl_vars['user'] : false;
$_smarty_tpl->tpl_vars['user'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
$__foreach_user_0_saved_local_item = $_smarty_tpl->tpl_vars['user'];
echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['user']->value),$_smarty_tpl);
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_local_item;
}
if ($__foreach_user_0_saved_item) {
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_item;
}
if (!empty($_smarty_tpl->tpl_vars['view_more_array']->value)) {?><a href="<?php echo $_smarty_tpl->tpl_vars['view_more_array']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['view_more_array']->value['title'];?>
" class="avatar_list_more_icon"></a><?php }?>
    <?php }?>
    
</div><?php }
}
