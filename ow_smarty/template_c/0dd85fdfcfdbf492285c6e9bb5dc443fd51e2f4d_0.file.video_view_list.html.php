<?php
/* Smarty version 3.1.29, created on 2017-07-07 03:13:20
  from "C:\xampp\htdocs\dbone\ow_plugins\video\views\controllers\video_view_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595f5ec02dc6c3_55632864',
  'file_dependency' => 
  array (
    '0dd85fdfcfdbf492285c6e9bb5dc443fd51e2f4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dbone\\ow_plugins\\video\\views\\controllers\\video_view_list.html',
      1 => 1499421640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f5ec02dc6c3_55632864 ($_smarty_tpl) {
if (!is_callable('smarty_function_add_content')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\function.add_content.php';
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_component')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\function.component.php';
?>
<div class="clearfix"><?php echo smarty_function_add_content(array('key'=>'video.add_content.list.top','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>
</div>

<?php if ($_smarty_tpl->tpl_vars['showAddButton']->value) {?>
    <div class="ow_right"><?php echo smarty_function_decorator(array('name'=>'button','class'=>'ow_ic_add','id'=>'btn-add-new-video','langLabel'=>'video+add_new'),$_smarty_tpl);?>
</div>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['videoMenu']->value;?>


<?php echo smarty_function_add_content(array('key'=>'video.content.list.after_menu','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>


<?php echo smarty_function_component(array('class'=>'VIDEO_CMP_VideoList','type'=>$_smarty_tpl->tpl_vars['listType']->value,'count'=>5),$_smarty_tpl);?>


<?php echo smarty_function_add_content(array('key'=>'video.content.list.bottom','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);
}
}
