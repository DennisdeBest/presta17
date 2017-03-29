<?php /* Smarty version Smarty-3.1.19, created on 2017-03-29 17:43:14
         compiled from "/var/www/presta.local/admin0398dkhgm/themes/default/template/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44297117458dbd6126f7af6-03866141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba0dc63dee9f0b5639bd02ee2cdbf9331bc91250' => 
    array (
      0 => '/var/www/presta.local/admin0398dkhgm/themes/default/template/modal.tpl',
      1 => 1490799225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44297117458dbd6126f7af6-03866141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'modal_id' => 0,
    'modal_class' => 0,
    'modal_title' => 0,
    'modal_content' => 0,
    'modal_actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58dbd612722a49_01258797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dbd612722a49_01258797')) {function content_58dbd612722a49_01258797($_smarty_tpl) {?>
<div class="modal fade" id="<?php echo $_smarty_tpl->tpl_vars['modal_id']->value;?>
" tabindex="-1">
	<div class="modal-dialog <?php if (isset($_smarty_tpl->tpl_vars['modal_class']->value)) {?><?php echo $_smarty_tpl->tpl_vars['modal_class']->value;?>
<?php }?>">
		<div class="modal-content">
			<?php if (isset($_smarty_tpl->tpl_vars['modal_title']->value)) {?>
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['modal_title']->value;?>
</h4>
			</div>
			<?php }?>

			<?php echo $_smarty_tpl->tpl_vars['modal_content']->value;?>


			<?php if (isset($_smarty_tpl->tpl_vars['modal_actions']->value)) {?>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo smartyTranslate(array('s'=>'Close','d'=>'Admin.Actions'),$_smarty_tpl);?>
</button>
				<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modal_actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['action']->value['type']=='link') {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['action']->value['href'];?>
" class="btn <?php echo $_smarty_tpl->tpl_vars['action']->value['class'];?>
"><?php echo $_smarty_tpl->tpl_vars['action']->value['label'];?>
</a>
					<?php } elseif ($_smarty_tpl->tpl_vars['action']->value['type']=='button') {?>
						<button type="button" value="<?php echo $_smarty_tpl->tpl_vars['action']->value['value'];?>
" class="btn <?php echo $_smarty_tpl->tpl_vars['action']->value['class'];?>
">
							<?php echo $_smarty_tpl->tpl_vars['action']->value['label'];?>

						</button>
					<?php }?>
				<?php } ?>
			</div>
			<?php }?>
		</div>
	</div>
</div><?php }} ?>
