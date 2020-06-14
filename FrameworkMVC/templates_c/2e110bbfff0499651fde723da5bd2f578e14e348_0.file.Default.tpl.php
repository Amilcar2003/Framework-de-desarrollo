<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-15 01:15:37
  from 'C:\xampp\htdocs\Framework-de-desarrollo\FrameworkMVC\templates\Default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee6af994e2377_99228883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e110bbfff0499651fde723da5bd2f578e14e348' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-de-desarrollo\\FrameworkMVC\\templates\\Default.tpl',
      1 => 1592176532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/header.tpl' => 1,
    'file:Cabeceras/footer.tpl' => 1,
  ),
),false)) {
function content_5ee6af994e2377_99228883 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div align= "center">
	  <br>
      <h1>Hello, world!</h1>
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php }
}
