{include file="Cabeceras/header.tpl"}
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
{include file="Cabeceras/footer.tpl"}


    