<?php /* Smarty version Smarty-3.1.19, created on 2017-03-29 17:44:00
         compiled from "/var/www/presta.local/admin0398dkhgm/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127035332858dbd6409c22b9-61709526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a866e0f9a6de3624606ccde068c4eda3e720a09a' => 
    array (
      0 => '/var/www/presta.local/admin0398dkhgm/themes/default/template/content.tpl',
      1 => 1490799225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127035332858dbd6409c22b9-61709526',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58dbd6409c96a4_95460143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dbd6409c96a4_95460143')) {function content_58dbd6409c96a4_95460143($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
