<?php
/* Smarty version 3.1.29, created on 2017-07-07 03:13:03
  from "C:\xampp\htdocs\dbone\ow_system_plugins\base\decorators\box_toolbar.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595f5eaf5c81a6_91178503',
  'file_dependency' => 
  array (
    '961e13519932c3b62f220157997151025e684281' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dbone\\ow_system_plugins\\base\\decorators\\box_toolbar.html',
      1 => 1499422215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f5eaf5c81a6_91178503 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\block.style.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_box_toolbar span{
display:inline-block;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<ul class="ow_box_toolbar ow_remark ow_bl">
    <?php
$_from = $_smarty_tpl->tpl_vars['data']->value['itemList'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_toolbar_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_toolbar_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>    
    <li <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['id'])) {?>id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php }
if (isset($_smarty_tpl->tpl_vars['item']->value['display'])) {?> style="display:<?php echo $_smarty_tpl->tpl_vars['item']->value['display'];?>
"<?php }
if (!empty($_smarty_tpl->tpl_vars['item']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
"<?php }
if (isset($_smarty_tpl->tpl_vars['item']->value['title'])) {?> title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"<?php }?>>
        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['href'])) {?>
        <a<?php if (isset($_smarty_tpl->tpl_vars['item']->value['click'])) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['item']->value['click'];?>
"<?php }
if (isset($_smarty_tpl->tpl_vars['item']->value['rel'])) {?> rel="<?php echo $_smarty_tpl->tpl_vars['item']->value['rel'];?>
"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a>
        <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>

        <?php }?>
    </li>
    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_toolbar_0_saved_local_item;
}
if ($__foreach_toolbar_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_toolbar_0_saved_item;
}
?>
</ul>


<?php }
}
