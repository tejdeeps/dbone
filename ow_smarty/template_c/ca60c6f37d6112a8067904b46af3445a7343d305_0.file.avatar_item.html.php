<?php
/* Smarty version 3.1.29, created on 2017-07-07 03:03:48
  from "C:\xampp\htdocs\dbone\ow_system_plugins\base\decorators\avatar_item.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595f5c848d61d2_00900173',
  'file_dependency' => 
  array (
    'ca60c6f37d6112a8067904b46af3445a7343d305' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dbone\\ow_system_plugins\\base\\decorators\\avatar_item.html',
      1 => 1499421677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f5c848d61d2_00900173 ($_smarty_tpl) {
?>

<div class="ow_avatar<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['data']->value['class'];
}?>">
<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['isMarked'])) {?><div class="ow_ic_bookmark ow_bookmark_icon"></div><?php }
if (!empty($_smarty_tpl->tpl_vars['data']->value['url'])) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
"><img <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['title'])) {?> alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['attrs'])) {
echo $_smarty_tpl->tpl_vars['data']->value['attrs'];
}?> src="<?php echo $_smarty_tpl->tpl_vars['data']->value['src'];?>
" /></a>
<?php } else { ?>
<img <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['title'])) {?> alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['attrs'])) {
echo $_smarty_tpl->tpl_vars['data']->value['attrs'];
}?> src="<?php echo $_smarty_tpl->tpl_vars['data']->value['src'];?>
" />
<?php }
if (!empty($_smarty_tpl->tpl_vars['data']->value['label'])) {?><span class="ow_avatar_label"<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['labelColor'])) {?> style="background-color: <?php echo $_smarty_tpl->tpl_vars['data']->value['labelColor'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['label'];?>
</span><?php }?>
</div><?php }
}
