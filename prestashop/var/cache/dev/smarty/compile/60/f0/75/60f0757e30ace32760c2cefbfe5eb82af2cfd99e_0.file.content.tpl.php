<?php
/* Smarty version 3.1.33, created on 2020-01-06 10:04:33
  from 'C:\xampp\htdocs\prestashop\admin470u6iwyf\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e12dc01b54ed4_09475726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60f0757e30ace32760c2cefbfe5eb82af2cfd99e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin470u6iwyf\\themes\\default\\template\\content.tpl',
      1 => 1574688556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e12dc01b54ed4_09475726 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
