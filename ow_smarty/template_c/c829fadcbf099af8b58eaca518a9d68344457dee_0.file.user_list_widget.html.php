<?php
/* Smarty version 3.1.29, created on 2017-07-07 03:13:03
  from "C:\xampp\htdocs\dbone\ow_plugins\groups\views\components\user_list_widget.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595f5eaf6c7af6_79056746',
  'file_dependency' => 
  array (
    'c829fadcbf099af8b58eaca518a9d68344457dee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dbone\\ow_plugins\\groups\\views\\components\\user_list_widget.html',
      1 => 1499421644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f5eaf6c7af6_79056746 ($_smarty_tpl) {
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\function.text.php';
?>
<div class="ow_lp_avatars">
        <?php
$_from = $_smarty_tpl->tpl_vars['userIdList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_id_0_saved_item = isset($_smarty_tpl->tpl_vars['id']) ? $_smarty_tpl->tpl_vars['id'] : false;
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['id']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value) {
$_smarty_tpl->tpl_vars['id']->_loop = true;
$__foreach_id_0_saved_local_item = $_smarty_tpl->tpl_vars['id'];
?>
            <?php echo smarty_function_decorator(array('name'=>"avatar_item",'data'=>$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['id']->value]),$_smarty_tpl);?>

        <?php
$_smarty_tpl->tpl_vars['id'] = $__foreach_id_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['id']->_loop) {
?>
            <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'groups+user_list_widget_empty'),$_smarty_tpl);?>
</div>
        <?php
}
if ($__foreach_id_0_saved_item) {
$_smarty_tpl->tpl_vars['id'] = $__foreach_id_0_saved_item;
}
?>
</div>
<?php }
}
