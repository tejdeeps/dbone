<?php
/* Smarty version 3.1.29, created on 2017-07-07 03:12:00
  from "C:\xampp\htdocs\dbone\ow_plugins\groups\views\controllers\groups_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595f5e70393875_34553427',
  'file_dependency' => 
  array (
    'e2e257baea0cdc0dbe3ca4dcf34defb865a602a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dbone\\ow_plugins\\groups\\views\\controllers\\groups_list.html',
      1 => 1499421644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f5e70393875_34553427 ($_smarty_tpl) {
if (!is_callable('smarty_function_add_content')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\function.add_content.php';
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_block_script')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_function_url_for_route')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\function.url_for_route.php';
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\function.text.php';
?>
<div class="clearfix"><?php echo smarty_function_add_content(array('key'=>'groups.add_content.list.top','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>
</div>

<?php if (empty($_smarty_tpl->tpl_vars['hideCreateNew']->value) && !empty($_smarty_tpl->tpl_vars['showCreate']->value)) {?>
    <div class="ow_right"><?php echo smarty_function_decorator(array('name'=>'button','class'=>'ow_ic_add','id'=>'btn-create-new-group','langLabel'=>'groups+add_new'),$_smarty_tpl);?>
</div>
    <?php if (!empty($_smarty_tpl->tpl_vars['authMsg']->value)) {?>
        <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            $('#btn-create-new-group').click(function() { OW.authorizationLimitedFloatbox(<?php echo $_smarty_tpl->tpl_vars['authMsg']->value;?>
); });
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

    <?php } else { ?>
        <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                $('#btn-create-new-group').click(function(){location.href='<?php echo smarty_function_url_for_route(array('for'=>"groups-create"),$_smarty_tpl);?>
'})
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

    <?php }
}?>


<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


<?php echo smarty_function_add_content(array('key'=>'groups.content.list.after_menu','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>


<div class="ow_group_list clearfix">
    <div class="ow_automargin ow_superwide">
      <?php if (empty($_smarty_tpl->tpl_vars['list']->value)) {?>
        <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>"groups+listing_no_items_msg"),$_smarty_tpl);?>
</div>
      <?php } else { ?>
          <?php
$_from = $_smarty_tpl->tpl_vars['list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_group_0_saved_item = isset($_smarty_tpl->tpl_vars['group']) ? $_smarty_tpl->tpl_vars['group'] : false;
$__foreach_group_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['group'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['group']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
$__foreach_group_0_saved_local_item = $_smarty_tpl->tpl_vars['group'];
?>
                <?php echo smarty_function_decorator(array('name'=>'ipc','addClass'=>'ow_smallmargin','data'=>$_smarty_tpl->tpl_vars['group']->value,'infoString'=>"<a href=\"".((string)$_smarty_tpl->tpl_vars['group']->value['url'])."\">".((string)$_smarty_tpl->tpl_vars['group']->value['title'])."</a>"),$_smarty_tpl);?>

          <?php
$_smarty_tpl->tpl_vars['group'] = $__foreach_group_0_saved_local_item;
}
if ($__foreach_group_0_saved_item) {
$_smarty_tpl->tpl_vars['group'] = $__foreach_group_0_saved_item;
}
if ($__foreach_group_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_group_0_saved_key;
}
?>
          <br />
          <?php echo $_smarty_tpl->tpl_vars['paging']->value;?>

      <?php }?>
    </div>
</div>

<div class="clearfix"><?php echo smarty_function_add_content(array('key'=>'groups.add_content.list.bottom','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>
</div><?php }
}
