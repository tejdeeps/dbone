<?php
/* Smarty version 3.1.29, created on 2017-07-07 03:03:29
  from "C:\xampp\htdocs\dbone\ow_system_plugins\base\views\controllers\base_document_install_completed.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595f5c7100b719_65242521',
  'file_dependency' => 
  array (
    '8f606715be752612c5bdf2b836c3dbc81021520a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dbone\\ow_system_plugins\\base\\views\\controllers\\base_document_install_completed.html',
      1 => 1499421679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f5c7100b719_65242521 ($_smarty_tpl) {
if (!is_callable('smarty_function_url_for_route')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\function.url_for_route.php';
?>
<div class="ow_txtcenter" style="margin-top:200px;">
    <h1 class="ow_icon_control ow_ic_ok ow_smallmargin">
       Installation complete
    </h1>
    <p>
       Go to the
       <a href="<?php echo smarty_function_url_for_route(array('for'=>'base_index'),$_smarty_tpl);?>
">main page</a> or to the <a href="<?php echo smarty_function_url_for_route(array('for'=>'admin_default'),$_smarty_tpl);?>
">admin area</a>
    </p>
</div>
<?php }
}
