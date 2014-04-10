<?PHP 

//obtener configuracion de la base de datos
$nivel_dir="../";
include ($nivel_dir.'includes/config.php');

//variables necesarias

?>
    	<div class="form clearfix">
    <div class="form-header">

	<h2>&nbsp;</h2>

<form id="form" name="form" action="medio.php" method="post">
  <div class="button large"><input type="submit" value="cerrar"></div>
	</form> 
    </div>

</div>

		
		<div class="form clearfix">
    <div class="form-header">

	<h2>Esta seguro de borrar el medio</h2>

	<form id="form" name="form" action="inserta.php" method="post">
	<input name="del" type="hidden"  id="del"  value="<?php echo $_GET["del"]; ?>" >		  
		 <div class="button large"><input type="submit" value="Borrar"></div>
	</form> 
	      
    </div>

</div>

