<?php
/* Smarty version 3.1.33, created on 2020-06-12 00:42:12
  from 'C:\xampp\htdocs\todomodatec\admin642umguns\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee315b472dea9_39363511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2be3f1de73738cf4633dde3b378af3344b859cb8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\todomodatec\\admin642umguns\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1591933481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee315b472dea9_39363511 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
