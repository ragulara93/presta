<?php /* Smarty version Smarty-3.1.19, created on 2017-01-26 10:28:52
         compiled from "C:\xampp\htdocs\presta\admin451isa6pq\themes\new-theme\template\components\layout\employee_dropdown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:241985889c1540671f0-87856835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ac2770170cd76f821542caa786ad0b7905102f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\presta\\admin451isa6pq\\themes\\new-theme\\template\\components\\layout\\employee_dropdown.tpl',
      1 => 1483604740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241985889c1540671f0-87856835',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee' => 0,
    'link' => 0,
    'login_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5889c1540e41f0_09966059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5889c1540e41f0_09966059')) {function content_5889c1540e41f0_09966059($_smarty_tpl) {?>
<div class="employee-dropdown dropdown">
  <?php if (isset($_smarty_tpl->tpl_vars['employee']->value)) {?>
    <div class="img-circle person" data-toggle="dropdown">
      <i class="material-icons">person</i>
    </div>
  <?php }?>
  <div class="dropdown-menu dropdown-menu-right p-a-1 m-r-2">
    <div class="text-xs-center">
      <img class="avatar img-circle" src="<?php echo $_smarty_tpl->tpl_vars['employee']->value->getImage();?>
" /><br>
      <?php echo $_smarty_tpl->tpl_vars['employee']->value->firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['employee']->value->lastname;?>

    </div>
    <hr>
    <a class="employee-link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminEmployees'),'html','UTF-8');?>
&amp;id_employee=<?php echo intval($_smarty_tpl->tpl_vars['employee']->value->id);?>
&amp;updateemployee" target="_blank">
      <i class="material-icons">settings_applications</i> <?php echo smartyTranslate(array('s'=>'Your profile'),$_smarty_tpl);?>

    </a>
    <a class="employee-link m-t-1" id="header_logout" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['login_link']->value,'html','UTF-8');?>
&amp;logout">
      <i class="material-icons">power_settings_new</i> <?php echo smartyTranslate(array('s'=>'Log out'),$_smarty_tpl);?>

    </a>
  </div>
</div>
<?php }} ?>
