<?php
/* Smarty version 3.1.29, created on 2017-07-07 03:03:29
  from "C:\xampp\htdocs\dbone\ow_themes\simplicity\master_pages\blank.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595f5c710ff957_86784882',
  'file_dependency' => 
  array (
    'f46ec0a5876fa9735f40c7ef65109f2504f81cd2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dbone\\ow_themes\\simplicity\\master_pages\\blank.html',
      1 => 1499421708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f5c710ff957_86784882 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\block.style.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	
		body,html {background:#fff;min-width:0; height: 100%;}
		.ow_page_wrap {
			background: none;
		}
		.ow_footer {
			background: none;
			border: none;
		    clear: both;
		    height: 96px;
		    margin-top: -99px;
		    padding: 1px 0;
		    position: relative;		
    	}
		.ow_footer .ow_canvas {
		    margin: 0 auto;
		    width: 996px;
		    word-wrap: break-word;
		    background: none;
		}
		.ow_footer .ow_page {
		    margin: 0 0 0 auto;
		    padding: 0 18px;
		    background: none;
		}
		.ow_sign_in_cont {
			position: relative;
		}
		body > .ow_page_wrap {
		     min-height: 100%;
		     position: relative;
		}
		.ow_page_padding {
		     padding-bottom: 99px;
		     background: none;
		}
	
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<div class="ow_page_wrap">
	<div class="ow_page_padding">
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	</div>
</div>
<div class="ow_footer">
	<div class="ow_canvas">
		<div class="ow_page clearfix">
			<div style="float:right;padding-bottom: 30px;">
				<?php echo $_smarty_tpl->tpl_vars['bottomPoweredByLink']->value;?>

			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	$('.ow_sign_up').after($('.ow_sign_in'));
	$('<div class="clearfix"></div>').appendTo($('.ow_sign_in'));
	$('.ow_sign_in > .clearfix').append($('.ow_form_options .ow_button'));
	$('.ow_sign_in > .clearfix').append($('.ow_sign_up p:last-child a'));
	$('.ow_sign_in > .clearfix').after($('.ow_connect_buttons .clearfix'));
<?php echo '</script'; ?>
>
<?php }
}
