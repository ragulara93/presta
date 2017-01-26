<?php /* Smarty version Smarty-3.1.19, created on 2017-01-26 10:28:35
         compiled from "C:\xampp\htdocs\presta\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:253425889c143b50170-19322183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9a76532ac93441ccfad19a664d50b0f2a660064' => 
    array (
      0 => 'C:\\xampp\\htdocs\\presta\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1483605038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253425889c143b50170-19322183',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5889c143b67875_31235767',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5889c143b67875_31235767')) {function content_5889c143b67875_31235767($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
