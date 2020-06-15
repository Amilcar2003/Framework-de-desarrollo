<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-15 02:59:29
  from 'C:\xampp\htdocs\Framework-de-desarrollo\FrameworkMVC\templates\Cabeceras\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee6c7f1282689_66817474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '728ecfc7f198de54e82f6ab1cfbf4b35de6da8d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-de-desarrollo\\FrameworkMVC\\templates\\Cabeceras\\footer.tpl',
      1 => 1592182764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee6c7f1282689_66817474 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
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

    <footer align="center" id="PIE">
          <p>Amilcar Corado &copy; 2020 </p>  
    </footer> 
</body>
</html><?php }
}
