<?php /* Smarty version Smarty-3.1.19, created on 2017-01-26 10:28:35
         compiled from "C:\xampp\htdocs\presta\modules\welcome\views\templates\lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:226565889c143b05df3-83844125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd228a7f7b206c0ffaca55a0ba7843637e0e15cdb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\presta\\modules\\welcome\\views\\templates\\lost.tpl',
      1 => 1483605038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '226565889c143b05df3-83844125',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5889c143b34bf8_51620798',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5889c143b34bf8_51620798')) {function content_5889c143b34bf8_51620798($_smarty_tpl) {?>

<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo smartyTranslate(array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
    <p><?php echo smartyTranslate(array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
  </div>
</div>
<?php }} ?>
