<?php /* Smarty version Smarty-3.1.19, created on 2017-01-26 10:34:19
         compiled from "C:\xampp\htdocs\presta\admin451isa6pq\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70015889c29bb30d71-48321566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e81417f61869dad9fd849ce61828da6b604e5aee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\presta\\admin451isa6pq\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1483604740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70015889c29bb30d71-48321566',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5889c29bb639f7_15487894',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5889c29bb639f7_15487894')) {function content_5889c29bb639f7_15487894($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a><?php }} ?>
