<?php
/* Smarty version 3.1.29, created on 2017-07-07 03:13:03
  from "C:\xampp\htdocs\dbone\ow_plugins\groups\views\components\invite_widget.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595f5eaf73df14_32957745',
  'file_dependency' => 
  array (
    '5b2d841817b88792260a68396524114403f13222' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dbone\\ow_plugins\\groups\\views\\components\\invite_widget.html',
      1 => 1499421644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f5eaf73df14_32957745 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\dbone\\ow_smarty\\plugin\\function.decorator.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.groups-invite-link
{
    text-align:center;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php echo '<script'; ?>
 type="text/javascript">

function GROUPS_InitInviteButton( options )
{
    var floatBox, userIdList = options.userList;

    $('#GROUPS_InviteLink').click(
        function()
        {
            floatBox = OW.ajaxFloatBox('BASE_CMP_AvatarUserListSelect', [userIdList],
            {
                width:600,
                height:350,
                iconClass: 'ow_ic_user',
                title: options.floatBoxTitle
            });
        }
    );

    OW.bind('base.avatar_user_list_select',
        function(list)
        {
            floatBox.close();

            $.ajax({
                type: 'POST',
                url: options.inviteResponder,
                data: {"groupId": options.groupId, "userIdList": JSON.stringify(list), "allIdList": JSON.stringify(options.userList)},
                dataType: 'json',
                success : function(data)
                {
                    if( data.messageType == 'error' )
                    {
                        OW.error(data.message);
                    }
                    else
                    {
                        OW.info(data.message);
                        userIdList = data.allIdList;
                    }
                }
            });
        }
    );
}


<?php echo '</script'; ?>
>

<div class="groups-invite-link ow_std_margin">
    <?php echo smarty_function_decorator(array('name'=>'button','class'=>'ow_ic_add','type'=>'button','langLabel'=>'groups+invite_btn_label','id'=>'GROUPS_InviteLink'),$_smarty_tpl);?>

</div><?php }
}
