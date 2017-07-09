<?php
/* Smarty version 3.1.29, created on 2017-07-07 03:12:03
  from "C:\xampp\htdocs\dbone\ow_plugins\groups\views\controllers\groups_create.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595f5e73e7be27_61729186',
  'file_dependency' => 
  array (
    '08558d06487bcc9eccfa2c2e91aa6c4823b76a34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dbone\\ow_plugins\\groups\\views\\controllers\\groups_create.html',
      1 => 1499421644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f5e73e7be27_61729186 ($_smarty_tpl) {
if (!is_callable('smarty_block_form')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_label')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_submit')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\function.submit.php';
?>
<div class="ow_create_group clearfix">

    <div class="ow_superwide ow_automargin">
	    <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'GROUPS_CreateGroupForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'GROUPS_CreateGroupForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


	        <table class="ow_table_1 ow_form">
	            <tr class="ow_alt2 ow_tr_first">
	                <td class="ow_label"><?php echo smarty_function_label(array('name'=>'title'),$_smarty_tpl);?>
</td>
	                <td class="ow_value"><?php echo smarty_function_input(array('name'=>'title'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'title'),$_smarty_tpl);?>
</td>
	                <td class="ow_desc ow_small"></td>
	            </tr>
	            <tr class="ow_alt1">
	                <td class="ow_label"><?php echo smarty_function_label(array('name'=>'description'),$_smarty_tpl);?>
</td>
	                <td class="ow_value"><?php echo smarty_function_input(array('name'=>'description'),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>'description'),$_smarty_tpl);?>
</td>
	                <td class="ow_desc ow_small"></td>
	            </tr>
	            <tr class="ow_alt2">
	                <td class="ow_label"><?php echo smarty_function_label(array('name'=>'image'),$_smarty_tpl);?>
</td>
	                <td class="ow_value"><?php echo smarty_function_input(array('name'=>'image'),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>'image'),$_smarty_tpl);?>
</td>
	                <td class="ow_desc ow_small"></td>
	            </tr>
                    <tr class="ow_alt1">
	                <td class="ow_label"><?php echo smarty_function_label(array('name'=>'whoCanView'),$_smarty_tpl);?>
</td>
	                <td class="ow_value"><?php echo smarty_function_input(array('name'=>'whoCanView'),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>'whoCanView'),$_smarty_tpl);?>
</td>
	                <td class="ow_desc ow_small"></td>
	            </tr>
                    <tr class="ow_alt2 ow_tr_last">
	                <td class="ow_label"><?php echo smarty_function_label(array('name'=>'whoCanInvite'),$_smarty_tpl);?>
</td>
	                <td class="ow_value"><?php echo smarty_function_input(array('name'=>'whoCanInvite'),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>'whoCanInvite'),$_smarty_tpl);?>
</td>
	                <td class="ow_desc ow_small"></td>
	            </tr>
	        </table>
            <div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_new'),$_smarty_tpl);?>
</div></div>

	    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'GROUPS_CreateGroupForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

    </div>

</div>
<?php }
}
