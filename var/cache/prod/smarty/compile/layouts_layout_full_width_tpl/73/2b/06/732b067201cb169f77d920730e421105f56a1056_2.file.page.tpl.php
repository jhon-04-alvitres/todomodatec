<?php
/* Smarty version 3.1.33, created on 2020-06-12 00:38:23
  from 'C:\xampp\htdocs\todomodatec\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee314cfcf40f7_16466680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '732b067201cb169f77d920730e421105f56a1056' => 
    array (
      0 => 'C:\\xampp\\htdocs\\todomodatec\\themes\\classic\\templates\\page.tpl',
      1 => 1591933457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee314cfcf40f7_16466680 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7342537265ee314cfcdf5b2_63722426', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_16034180805ee314cfce1f33_79113604 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_14306996275ee314cfce0645_80768480 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16034180805ee314cfce1f33_79113604', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_2825346405ee314cfced579_68407291 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_16219210075ee314cfceea87_60072626 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_5428622605ee314cfcec601_58643764 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2825346405ee314cfced579_68407291', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16219210075ee314cfceea87_60072626', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_5769988545ee314cfcf1a50_53702422 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_3816239955ee314cfcf0b92_63649717 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5769988545ee314cfcf1a50_53702422', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_7342537265ee314cfcdf5b2_63722426 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7342537265ee314cfcdf5b2_63722426',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_14306996275ee314cfce0645_80768480',
  ),
  'page_title' => 
  array (
    0 => 'Block_16034180805ee314cfce1f33_79113604',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_5428622605ee314cfcec601_58643764',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_2825346405ee314cfced579_68407291',
  ),
  'page_content' => 
  array (
    0 => 'Block_16219210075ee314cfceea87_60072626',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_3816239955ee314cfcf0b92_63649717',
  ),
  'page_footer' => 
  array (
    0 => 'Block_5769988545ee314cfcf1a50_53702422',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14306996275ee314cfce0645_80768480', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5428622605ee314cfcec601_58643764', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3816239955ee314cfcf0b92_63649717', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
