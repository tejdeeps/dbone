<?php
/* Smarty version 3.1.29, created on 2017-07-07 03:14:13
  from "C:\xampp\htdocs\dbone\ow_system_plugins\base\views\controllers\join_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595f5ef5e6ca07_50597900',
  'file_dependency' => 
  array (
    'fa089a13c5a77c4e2145bc7ba7c1a59edfee46c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dbone\\ow_system_plugins\\base\\views\\controllers\\join_index.html',
      1 => 1499422217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f5ef5e6ca07_50597900 ($_smarty_tpl) {
if (!is_callable('smarty_block_block_decorator')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_block_form')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_cycle')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_libraries\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_label')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_question_description_lang')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\function.question_description_lang.php';
if (!is_callable('smarty_function_submit')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\function.submit.php';
?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if (isset($_smarty_tpl->tpl_vars['notValidInviteCode']->value)) {?>
    <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

         <?php echo smarty_function_text(array('key'=>"base+join_not_valid_invite_code"),$_smarty_tpl);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['step']->value == 1) {?>
        <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php echo smarty_function_text(array('key'=>"base+join_promo"),$_smarty_tpl);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


        <?php if (!empty($_smarty_tpl->tpl_vars['joinConnectHook']->value)) {?>
           <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'addClass'=>"ow_center",'style'=>"overflow:hidden;",'iconClass'=>'ow_ic_key','langLabel'=>'base+join_connect_title')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'addClass'=>"ow_center",'style'=>"overflow:hidden;",'iconClass'=>'ow_ic_key','langLabel'=>'base+join_connect_title'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

               <?php
$_from = $_smarty_tpl->tpl_vars['joinConnectHook']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                  <?php echo $_smarty_tpl->tpl_vars['item']->value;?>

               <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
           <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'addClass'=>"ow_center",'style'=>"overflow:hidden;",'iconClass'=>'ow_ic_key','langLabel'=>'base+join_connect_title'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

           <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php echo smarty_function_text(array('key'=>"base+join_or"),$_smarty_tpl);?>

           <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

        <?php }?>
    <?php }?>
    <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','type'=>'empty','iconClass'=>'ow_ic_user','langLabel'=>'base+join_form_title')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','iconClass'=>'ow_ic_user','langLabel'=>'base+join_form_title'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','iconClass'=>'ow_ic_user','langLabel'=>'base+join_form_title'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

    <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'joinForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'joinForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <table class="ow_table_1 ow_form">
            <?php if ($_smarty_tpl->tpl_vars['displayAccountType']->value == true) {?>
            <?php echo smarty_function_cycle(array('assign'=>'alt','values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>

            <tr class=" ow_tr_first ow_tr_last">
                <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_label">
                    <?php echo smarty_function_label(array('name'=>'accountType'),$_smarty_tpl);?>

                </td>
                <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_value ow_center">
                    <?php echo smarty_function_input(array('name'=>'accountType'),$_smarty_tpl);?>

                    <div style="height:1px;"></div>
                    <?php echo smarty_function_error(array('name'=>'accountType'),$_smarty_tpl);?>

                </td>
                <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_desc">
                    <?php echo smarty_function_question_description_lang(array('name'=>"accountType"),$_smarty_tpl);?>

                </td>
            </tr>
            <tr class="ow_tr_delimiter"><td></td></tr>
            <?php }?>
            <?php
$_from = $_smarty_tpl->tpl_vars['questionArray']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_section_1_saved_item = isset($_smarty_tpl->tpl_vars['questions']) ? $_smarty_tpl->tpl_vars['questions'] : false;
$__foreach_section_1_saved_key = isset($_smarty_tpl->tpl_vars['section']) ? $_smarty_tpl->tpl_vars['section'] : false;
$_smarty_tpl->tpl_vars['questions'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['section'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['questions']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['section']->value => $_smarty_tpl->tpl_vars['questions']->value) {
$_smarty_tpl->tpl_vars['questions']->_loop = true;
$__foreach_section_1_saved_local_item = $_smarty_tpl->tpl_vars['questions'];
?>
                <?php if (!empty($_smarty_tpl->tpl_vars['section']->value)) {?><tr class="ow_tr_first"><th colspan="3"><?php echo smarty_function_text(array('key'=>"base+questions_section_".((string)$_smarty_tpl->tpl_vars['section']->value)."_label"),$_smarty_tpl);?>
</th></tr><?php }?>
                <?php
$_from = $_smarty_tpl->tpl_vars['questions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_question_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_question']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_question'] : false;
$__foreach_question_2_saved_item = isset($_smarty_tpl->tpl_vars['question']) ? $_smarty_tpl->tpl_vars['question'] : false;
$__foreach_question_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['question'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_question'] = new Smarty_Variable(array());
$__foreach_question_2_iteration=0;
$_smarty_tpl->tpl_vars['question']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
$__foreach_question_2_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last'] = $__foreach_question_2_iteration == $__foreach_question_2_total;
$__foreach_question_2_saved_local_item = $_smarty_tpl->tpl_vars['question'];
?>
                    <tr class=" <?php if (empty($_smarty_tpl->tpl_vars['section']->value)) {?>ow_tr_first<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last'] : null) && $_smarty_tpl->tpl_vars['question']->value['name'] != 'password') {?>ow_tr_last<?php }?>">
                        <td class="<?php if (!empty($_smarty_tpl->tpl_vars['question']->value['trClass'])) {
echo $_smarty_tpl->tpl_vars['question']->value['trClass'];
}?> ow_label">
                            <?php echo smarty_function_label(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>

                        </td>
                        <td class="<?php if (!empty($_smarty_tpl->tpl_vars['question']->value['trClass'])) {
echo $_smarty_tpl->tpl_vars['question']->value['trClass'];
}?> ow_value">
                            <?php echo smarty_function_input(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>

                            <div style="height:1px;"></div>
                            <?php echo smarty_function_error(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>

                        </td>
                        <td class="<?php if (!empty($_smarty_tpl->tpl_vars['question']->value['trClass'])) {
echo $_smarty_tpl->tpl_vars['question']->value['trClass'];
}?> ow_desc">
                            <?php echo smarty_function_question_description_lang(array('name'=>$_smarty_tpl->tpl_vars['question']->value['realName']),$_smarty_tpl);?>

                        </td>
                    </tr>
                    <?php if ($_smarty_tpl->tpl_vars['question']->value['name'] == 'password') {?>
                        <tr class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last'] : null)) {?>ow_tr_last<?php }?>">
                            <td class="<?php if (!empty($_smarty_tpl->tpl_vars['question']->value['trClass']) && $_smarty_tpl->tpl_vars['question']->value['trClass'] == 'ow_alt1') {?>ow_alt2<?php } else { ?>ow_alt1<?php }?> ow_label">
                                <?php echo smarty_function_label(array('name'=>'repeatPassword'),$_smarty_tpl);?>

                            </td>
                            <td class="<?php if (!empty($_smarty_tpl->tpl_vars['question']->value['trClass']) && $_smarty_tpl->tpl_vars['question']->value['trClass'] == 'ow_alt1') {?>ow_alt2<?php } else { ?>ow_alt1<?php }?> ow_value">
                                <?php echo smarty_function_input(array('name'=>'repeatPassword'),$_smarty_tpl);?>

                                <div style="height:1px;"></div>
                                <?php echo smarty_function_error(array('name'=>'repeatPassword'),$_smarty_tpl);?>

                            </td>
                            <td class="<?php if (!empty($_smarty_tpl->tpl_vars['question']->value['trClass']) && $_smarty_tpl->tpl_vars['question']->value['trClass'] == 'ow_alt1') {?>ow_alt2<?php } else { ?>ow_alt1<?php }?> ow_desc">
                                <?php echo smarty_function_question_description_lang(array('name'=>'repeatPassword'),$_smarty_tpl);?>

                            </td>
                        </tr>
                    <?php }?>
                <?php
$_smarty_tpl->tpl_vars['question'] = $__foreach_question_2_saved_local_item;
}
if ($__foreach_question_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_question'] = $__foreach_question_2_saved;
}
if ($__foreach_question_2_saved_item) {
$_smarty_tpl->tpl_vars['question'] = $__foreach_question_2_saved_item;
}
?>
                <?php if (!empty($_smarty_tpl->tpl_vars['section']->value)) {?><tr class="ow_tr_delimiter"><td></td></tr><?php }?>
            <?php
$_smarty_tpl->tpl_vars['questions'] = $__foreach_section_1_saved_local_item;
}
if ($__foreach_section_1_saved_item) {
$_smarty_tpl->tpl_vars['questions'] = $__foreach_section_1_saved_item;
}
if ($__foreach_section_1_saved_key) {
$_smarty_tpl->tpl_vars['section'] = $__foreach_section_1_saved_key;
}
?>
            <?php if ($_smarty_tpl->tpl_vars['isLastStep']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['display_photo']->value) {?>
                    <tr class="ow_tr_first"><th colspan="3"><?php echo smarty_function_text(array('key'=>"base+questions_section_user_photo_label"),$_smarty_tpl);?>
</th></tr>
                    <?php echo smarty_function_cycle(array('assign'=>'alt','name'=>'userPhoto','values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>

                    <tr class=" ow_tr_last">
                        <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_label">
                            <?php echo smarty_function_label(array('name'=>'userPhoto'),$_smarty_tpl);?>

                        </td>
                        <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_value">
                            <?php echo smarty_function_input(array('name'=>'userPhoto'),$_smarty_tpl);?>

                            <div style="height:1px;"></div>
                            <?php echo smarty_function_error(array('name'=>'userPhoto'),$_smarty_tpl);?>

                        </td>
                        <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_desc">
                            <?php echo smarty_function_question_description_lang(array('name'=>'user_photo'),$_smarty_tpl);?>

                        </td>
                    </tr>
                    <tr class="ow_tr_delimiter"><td></td></tr>
                <?php }?>
                
                <?php if ($_smarty_tpl->tpl_vars['display_terms_of_use']->value) {?>
                    <tr class="ow_tr_first"><th colspan="3"><?php echo smarty_function_text(array('key'=>"base+questions_section_terms_of_use_label"),$_smarty_tpl);?>
</th></tr>
                    <?php echo smarty_function_cycle(array('assign'=>'alt','name'=>'userPhoto','values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>

                    <tr class=" ow_tr_last">
                        <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_label">
                            <?php echo smarty_function_label(array('name'=>'termOfUse'),$_smarty_tpl);?>

                        </td>
                        <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_value">
                            <?php echo smarty_function_input(array('name'=>'termOfUse'),$_smarty_tpl);?>

                            <div style="height:1px;"></div>
                            <?php echo smarty_function_error(array('name'=>'termOfUse'),$_smarty_tpl);?>

                        </td>
                        <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_desc">
                            
                        </td>
                    </tr>
                    <tr class="ow_tr_delimiter"><td></td></tr>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['display_captcha']->value) {?>
                    <tr class="ow_tr_first"><th colspan="3"><?php echo smarty_function_text(array('key'=>"base+questions_section_captcha_label"),$_smarty_tpl);?>
</th></tr>
                    <?php echo smarty_function_cycle(array('assign'=>'alt','name'=>'captchaField','values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>

                    <tr class="ow_tr_last" >
                        <td colspan="3" class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_center">
                            <div style='padding:10px;'>
                                <?php echo smarty_function_input(array('name'=>'captchaField'),$_smarty_tpl);?>

                                <div style="height:1px;"></div>
                                <?php echo smarty_function_error(array('name'=>'captchaField'),$_smarty_tpl);?>

                            </div>
                        </td>
                    </tr>
                <?php }?>
                <tr class="ow_tr_delimiter"><td></td></tr>
            <?php }?>
        </table>
		<div class="clearfix">
           <div class="ow_right">
                <?php echo smarty_function_submit(array('name'=>'joinSubmit'),$_smarty_tpl);?>

           </div>
        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'joinForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php }
}
