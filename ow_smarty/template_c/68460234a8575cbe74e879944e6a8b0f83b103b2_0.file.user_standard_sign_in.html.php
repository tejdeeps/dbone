<?php
/* Smarty version 3.1.29, created on 2017-07-07 03:04:27
  from "C:\xampp\htdocs\dbone\ow_system_plugins\base\views\controllers\user_standard_sign_in.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595f5cab6a55a8_78905572',
  'file_dependency' => 
  array (
    '68460234a8575cbe74e879944e6a8b0f83b103b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dbone\\ow_system_plugins\\base\\views\\controllers\\user_standard_sign_in.html',
      1 => 1499421680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f5cab6a55a8_78905572 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\block.style.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_sign_in_wrap {
	position:absolute;
	top:200px;
	left:50%;
	margin:0 0 0 -351px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<div class="ow_sign_in_cont">
    <?php echo $_smarty_tpl->tpl_vars['sign_in_form']->value;?>

</div>
<?php }
}
