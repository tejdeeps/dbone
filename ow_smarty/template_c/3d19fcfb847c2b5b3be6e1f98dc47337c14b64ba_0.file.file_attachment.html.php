<?php
/* Smarty version 3.1.29, created on 2017-07-07 03:03:33
  from "C:\xampp\htdocs\dbone\ow_system_plugins\base\views\components\file_attachment.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595f5c75e4a4b6_49502764',
  'file_dependency' => 
  array (
    '3d19fcfb847c2b5b3be6e1f98dc47337c14b64ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dbone\\ow_system_plugins\\base\\views\\components\\file_attachment.html',
      1 => 1499421680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f5c75e4a4b6_49502764 ($_smarty_tpl) {
?>
<div id="<?php echo $_smarty_tpl->tpl_vars['data']->value['uid'];?>
">
    <div class="ow_file_attachment_preview clearfix"<?php if (empty($_smarty_tpl->tpl_vars['data']->value['showPreview'])) {?> style="display:none;"<?php }?>></div>
    <?php if (empty($_smarty_tpl->tpl_vars['data']->value['selector'])) {?>
    <div class="clearfix ow_status_update_btn_block">
        <span class="ow_attachment_icons">
            <div id="nfa-feed1" class="ow_attachments">
              <span class="buttons clearfix">
                  <a title="Attach" href="javascript://" class="attach"></a>
              </span>
            </div>
        </span>
    </div>
    <?php }?>
</div><?php }
}
