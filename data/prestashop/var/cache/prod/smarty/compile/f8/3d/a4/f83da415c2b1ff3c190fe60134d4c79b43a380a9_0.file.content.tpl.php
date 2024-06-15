<?php
/* Smarty version 4.3.4, created on 2024-06-15 16:28:35
  from '/var/www/html/admin537dwaq49zcbgqebish/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666df9735eed52_88262826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f83da415c2b1ff3c190fe60134d4c79b43a380a9' => 
    array (
      0 => '/var/www/html/admin537dwaq49zcbgqebish/themes/default/template/content.tpl',
      1 => 1715587961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666df9735eed52_88262826 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
