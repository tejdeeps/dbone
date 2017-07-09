<?php
/* Smarty version 3.1.29, created on 2017-07-07 03:03:48
  from "C:\xampp\htdocs\dbone\ow_system_plugins\base\views\controllers\component_panel.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595f5c84c15b84_41779609',
  'file_dependency' => 
  array (
    '93fb93e129028564764a027abec9ce5c1fdf8d17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dbone\\ow_system_plugins\\base\\views\\controllers\\component_panel.html',
      1 => 1499421679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f5c84c15b84_41779609 ($_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['permissionMessage']->value)) {?>
    <div class="ow_anno ow_center">
        <?php echo $_smarty_tpl->tpl_vars['permissionMessage']->value;?>

    </div>
<?php } else { ?>
	<?php if (isset($_smarty_tpl->tpl_vars['profileActionToolbar']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['profileActionToolbar']->value;?>

	<?php }?>

	<?php echo $_smarty_tpl->tpl_vars['componentPanel']->value;?>

<?php }
}
}
