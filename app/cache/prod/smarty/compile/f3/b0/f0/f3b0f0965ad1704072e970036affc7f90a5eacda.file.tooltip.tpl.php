<?php /* Smarty version Smarty-3.1.19, created on 2017-03-29 17:44:00
         compiled from "/var/www/presta.local/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117397423858dbd640de9133-52419341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3b0f0965ad1704072e970036affc7f90a5eacda' => 
    array (
      0 => '/var/www/presta.local/modules/welcome/views/templates/tooltip.tpl',
      1 => 1490799226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117397423858dbd640de9133-52419341',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58dbd640def3b2_75222432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dbd640def3b2_75222432')) {function content_58dbd640def3b2_75222432($_smarty_tpl) {?>

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
