<?php
/* Smarty version 3.1.29, created on 2017-07-07 03:13:15
  from "C:\xampp\htdocs\dbone\ow_system_plugins\base\views\controllers\base_document_page404.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595f5ebb692486_75612628',
  'file_dependency' => 
  array (
    'c79f2a2fb9f860b2153859157901b3074fb7d372' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dbone\\ow_system_plugins\\base\\views\\controllers\\base_document_page404.html',
      1 => 1499422217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f5ebb692486_75612628 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\function.text.php';
if (!empty($_smarty_tpl->tpl_vars['base404RedirectMessage']->value)) {
echo $_smarty_tpl->tpl_vars['base404RedirectMessage']->value;
} else {
echo smarty_function_text(array('key'=>'base+base_document_404'),$_smarty_tpl);
}
}
}
