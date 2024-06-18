<?php
/* Smarty version 4.3.4, created on 2024-06-18 09:29:55
  from '/var/www/html/admin537dwaq49zcbgqebish/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66718bd38fb7f7_85107732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f7051b53f2c0081b58943f42d064947dd2e8e15' => 
    array (
      0 => '/var/www/html/admin537dwaq49zcbgqebish/themes/new-theme/template/content.tpl',
      1 => 1715587961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66718bd38fb7f7_85107732 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
