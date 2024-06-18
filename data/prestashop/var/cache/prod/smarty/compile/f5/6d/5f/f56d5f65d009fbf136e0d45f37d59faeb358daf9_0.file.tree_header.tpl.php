<?php
/* Smarty version 4.3.4, created on 2024-06-15 16:54:37
  from '/var/www/html/admin537dwaq49zcbgqebish/themes/default/template/helpers/tree/tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666dff8d4d5667_83286695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f56d5f65d009fbf136e0d45f37d59faeb358daf9' => 
    array (
      0 => '/var/www/html/admin537dwaq49zcbgqebish/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1715587961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666dff8d4d5667_83286695 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['toolbar']->value))) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
