<?php
/* Smarty version 3.1.29, created on 2017-07-07 03:13:03
  from "C:\xampp\htdocs\dbone\ow_plugins\groups\views\controllers\groups_view.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595f5eaf7cee64_69711378',
  'file_dependency' => 
  array (
    '8bfeb4cf1c5a8e261e4076b06d3768b9ecb80403' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dbone\\ow_plugins\\groups\\views\\controllers\\groups_view.html',
      1 => 1499421644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f5eaf7cee64_69711378 ($_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['permissionMessage']->value)) {?>
    <div class="ow_anno ow_center">
        <?php echo $_smarty_tpl->tpl_vars['permissionMessage']->value;?>

    </div>
<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['componentPanel']->value;?>

<?php }
}
}
