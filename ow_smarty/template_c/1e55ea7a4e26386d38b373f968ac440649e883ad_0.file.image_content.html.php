<?php
/* Smarty version 3.1.29, created on 2017-07-07 03:13:37
  from "C:\xampp\htdocs\dbone\ow_plugins\newsfeed\views\formats\image_content.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595f5ed1d6d0a6_26972964',
  'file_dependency' => 
  array (
    '1e55ea7a4e26386d38b373f968ac440649e883ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dbone\\ow_plugins\\newsfeed\\views\\formats\\image_content.html',
      1 => 1499421648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f5ed1d6d0a6_26972964 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_more')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\modifier.more.php';
if (!empty($_smarty_tpl->tpl_vars['vars']->value['status'])) {?><div class="ow_newsfeed_body_status ow_smallmargin"><?php echo smarty_modifier_more($_smarty_tpl->tpl_vars['vars']->value['status'],300);?>
</div><?php }?>

<div class="ow_newsfeed_oembed_atch clearfix">
    <div class="ow_newsfeed_item_picture">
    <a href="<?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['url'])) {
echo $_smarty_tpl->tpl_vars['vars']->value['url'];
} else { ?>javascript://<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['vars']->value['thumbnail'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vars']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" /></a>
    </div>
    <div class="ow_newsfeed_item_content">
        <a class="ow_newsfeed_item_title" href="<?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['url'])) {
echo $_smarty_tpl->tpl_vars['vars']->value['url'];
} else { ?>javascript://<?php }?>"><?php echo $_smarty_tpl->tpl_vars['vars']->value['title'];?>
</a>
        <div class="ow_remark ow_smallmargin"><?php echo $_smarty_tpl->tpl_vars['vars']->value['description'];?>
</div>

        <?php if ($_smarty_tpl->tpl_vars['vars']->value['userList']) {?>
            <div class="owm_newsfeed_ulist">
                <div class="owm_newsfeed_item_padding owm_newsfeed_item_box clearfix">
                    <div class="owm_newsfeed_ulist_count" style="display:inline-block">
                        <?php echo $_smarty_tpl->tpl_vars['vars']->value['userList']['label'];?>

                    </div>
                    <?php echo $_smarty_tpl->tpl_vars['vars']->value['userList']['list'];?>

                </div>
            </div>
        <?php }?>
    </div>
</div><?php }
}
