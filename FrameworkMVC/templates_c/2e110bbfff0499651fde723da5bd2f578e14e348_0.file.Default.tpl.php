<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-15 21:13:58
  from 'C:\xampp\htdocs\Framework-de-desarrollo\FrameworkMVC\templates\Default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee7c876db90f1_81298431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e110bbfff0499651fde723da5bd2f578e14e348' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-de-desarrollo\\FrameworkMVC\\templates\\Default.tpl',
      1 => 1592248430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/header.tpl' => 1,
    'file:Cabeceras/footer.tpl' => 1,
  ),
),false)) {
function content_5ee7c876db90f1_81298431 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div align="center" id="ENCABEZADO">
        <h1>REGISTRO</h1>
      </div>
	  <section>
       <div  id="CONTENIDO">
          <form method="post" action="USUARIOS.php">
		    <div class="form-group">
			  <label for="NOMBRE" >NOMBRE</label>
              <input type="text" name="NOMBRE" class="form-control" placeholder="INGRESE NOMBRE" required>
			</div>
			<div class="form-group">
			  <label for="CONTRASE�A">CLAVE</label>
              <input type="password" class="form-control" name="CONTRASE�A" placeholder="INGRESE CLAVE" required>
			</div>
			 <div class="form-group">
			  <label for="PUESTO" >PUESTO</label>
              <input type="text" name="PUESTO" class="form-control" placeholder="INGRESE PUESTO" required>
			</div>
			<div class="form-group" align="center">
			  <input type="submit" value="INGRESAR" class="btn btn-primary btn-lg" required>
			</div>
			
          </form>
       </div>
    </section>
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php }
}
