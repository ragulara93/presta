<?php /* Smarty version Smarty-3.1.19, created on 2017-01-26 10:32:22
         compiled from "C:\xampp\htdocs\presta\admin451isa6pq\themes\default\template\controllers\themes_catalog\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143175889c2260ad6f2-37511503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7352ef94a4d242723378c8322d14a02dd9a9f6ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\presta\\admin451isa6pq\\themes\\default\\template\\controllers\\themes_catalog\\content.tpl',
      1 => 1483604740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143175889c2260ad6f2-37511503',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_addons_content' => 0,
    'addons_content' => 0,
    'iso_lang' => 0,
    'iso_currency' => 0,
    'iso_country' => 0,
    'parent_domain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5889c2260ff773_25641829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5889c2260ff773_25641829')) {function content_5889c2260ff773_25641829($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['display_addons_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php } else { ?>
	<iframe class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px;overflow:hidden;border:none" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&amp;isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&amp;isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&amp;parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }?>
<?php }} ?>
