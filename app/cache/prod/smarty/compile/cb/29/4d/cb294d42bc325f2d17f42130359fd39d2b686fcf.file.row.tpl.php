<?php /* Smarty version Smarty-3.1.19, created on 2017-01-26 10:31:30
         compiled from "C:\xampp\htdocs\presta\admin451isa6pq\themes\new-theme\template\helpers\kpi\row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113295889c1f24e38f9-73381611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb294d42bc325f2d17f42130359fd39d2b686fcf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\presta\\admin451isa6pq\\themes\\new-theme\\template\\helpers\\kpi\\row.tpl',
      1 => 1483604740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113295889c1f24e38f9-73381611',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kpis' => 0,
    'col' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5889c1f25397f8_64971637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5889c1f25397f8_64971637')) {function content_5889c1f25397f8_64971637($_smarty_tpl) {?>
<div class="content container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="kpi-container">
        <div class="row">
          <?php $_smarty_tpl->tpl_vars['col'] = new Smarty_variable((int)(12/count($_smarty_tpl->tpl_vars['kpis']->value)), null, 0);?>
          <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kpis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['kpi']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['kpi']['iteration']++;
?>
            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['kpi']['iteration']>$_smarty_tpl->tpl_vars['col']->value+1) {?>
              </div>
              <div class="row">
            <?php }?>
            <div class="col-md-<?php echo $_smarty_tpl->tpl_vars['col']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }} ?>
