<?php
/* Smarty version 3.1.33, created on 2020-06-12 00:41:35
  from 'C:\xampp\htdocs\todomodatec\admin642umguns\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee3158fb4ea27_44920950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '052e85e30311c2b06c8052297ce6a6eeb9b1a506' => 
    array (
      0 => 'C:\\xampp\\htdocs\\todomodatec\\admin642umguns\\themes\\default\\template\\content.tpl',
      1 => 1591933467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee3158fb4ea27_44920950 (Smarty_Internal_Template $_smarty_tpl) {
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
