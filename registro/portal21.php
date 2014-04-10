<?php $nivel_dir="../"; 
$tit="Contactos";

//titulo de pagina
$pagetit="Administrador de contactos";


//obtener configuracion de la base de datos

require ($nivel_dir.'includes/config.php');
require_once($nivel_dir.'includes/funciones.php');

?>


 
<?php
//require ($nivel_dir.'includes/existeconexion.php');
//variables necesarias

//incluir toda la parte de ariba del template 
include($nivel_dir.'template/top.php'); 


 if(isset($_GET['estado']))
   {
  $estado = mysql_real_escape_string($_GET['estado']);
    
       $queryw = "SELECT * FROM municipios WHERE id_estado=$estado";
      $resultw = mysql_query($queryw);
   
    while ($roww = mysql_fetch_array($resultw)) {
        echo "<option value='" .$roww{'id_municipio'}."'>" . $roww{'municipio'} . "</option>";
    }
   }

?>
<br />
<FORM id="Portal_65" ACTION="inserta.php" METHOD="POST" >
<center><b>Bienvenido por favor llena el siguiente formulario de inscripci&oacute;n al evento</center>
<table width="100%" border="0">
  <tr>
    <td width="4%">&nbsp;</td>
    <td width="21%">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td width="10%">&nbsp;</td>
    <td width="10%">&nbsp;</td>
    <td width="10%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label for="nombre">Nombre: </label>     </td>
    <td colspan="2"><input value="" type="text" size="35" name="nombre" title="Introduce un nombre"required /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label for="a_paterno2">Apellido paterno: </label></td>
    <td colspan="2"><input value="" type="text" size="35" name="a_paterno" title="Introduce un apellido paterno"required /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label for="a_materno2">Apellido materno: </label></td>
    <td colspan="2"><input value="" type="text" size="35" name="a_materno" title="Introduce un apellido materno"required /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label>Tel&eacute;fono de casa:</label></td>
    <td colspan="2"><input type="tel"  name="tel_casa" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label>Tel&eacute;fono de celular:</label></td>
    <td colspan="2"><input type="tel"  name="tel_celular" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label for="user-email2">Correo electronico: </label>
      <br /></td>
    <td colspan="2"><input type="email" name="correo" id="user-email2" required/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><p>Domicilio completo<br />
       (Calle, N&uacute;mero, Colonia)<br />
    </p></td>
    <td colspan="2"><textarea name="domicilio" rows="2" cols="40">
        </textarea></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Codigo Postal:</td>
    <td colspan="2"><input type="number" name="cp" id="cp" required="required"/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Estado:</td>
        <script>
	        $(function() {
        $("#estado").change(function() {
                $("#municipio").load("portal.php?estado=" + $("#estado").val());
            });
        
        });
    </script>
    <td colspan="2"><select class="wide" id="estado" name="estado" required="required">
      <option value="0"></option>
        <?php 
		 echo " <option selected>Elija una opcion...</option>";
$resultx=mysql_query("SELECT * FROM estados ;");
    $i=0;
while( $rowx=mysql_fetch_array($resultx) )
    {
    $newidx=$rowx['id_estado'];
    $newnamex=$rowx['estado'];
       
        echo " <option value='".$newidx."' ";
		if($newidx==$id_estado)
            {echo "selected";}
        echo "> ". htmlspecialchars($newnamex) ." </option>";
        $i++;

    }
    
    ?>
    </select></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label>Municipio</label></td>
    <?php 
$resultx1=mysql_query("SELECT * FROM municipios ;");
    $j=0;
while( $rowx1=mysql_fetch_array($resultx) )
    {
    $newidx1=$rowx1['id_municipio'];
    $newnamex1=$rowx1['municipio'];
    
       
        if($newidx1==$id_municipio)
            {echo $newnamex1; }
        
        $j++;
   }
    ?>
    
    <td colspan="2"><select class="wide" name="municipio" id="municipio" required="required">
      <option value="0">Cambia Estado para cambiar de municipio</option>
    </select></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Ciudad:</td>
    <td colspan="2"><input type="text" name="ciudad" id="ciudad" required="required"/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Edad</td>
    <td colspan="2"><input value="" type="number" size="10" name="edad" id="edad" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Fecha de nacimiento<br /></td>
    <td colspan="2"><input value="" type="DATE" size="10" name="f_nac" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Sexo:<br /></td>
    <td colspan="2"><select name="paquete2">
      <option selected="selected">Seleciona una Opcion...</option>
      <option value="Masculino">Masculino</option>
      <option value="Femenino">Femenino</option>
    </select>
      <datalist id="sexo">
        <option value="Masculino" />
        <option value="Femenico" />     </datalist></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Escuela:</td>
    <td colspan="2"><select name="escuela" id="escuela">
    <option selected>Seleciona una Opcion...</option>
      <option value="Escuela Agr&iacute;cola e Industrial del pac&amp;iacute;fico">Escuela Agr&iacute;cola e Industrial del pac&iacute;fico.</option>
      <option value="Colegio del Pac&iacute;fico">Colegio del Pac&iacute;fico</option>
      <option value="Universidad de Montemorelos campus colegio del pac&iacute;fic">Universidad de Montemorelos campus colegio del pac&iacute;fic</option>
      <option value="Universidad de Navojoa">Universidad de Navojoa.</option>
    </select>
      <br />     </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><p>Estudi&eacute; en esta instituci&oacute;n:</p></td>
    <td colspan="2"><select name="carrera">
    <option selected>Seleciona una Opcion...</option>
      <option value"Ingenier&iacute;a en Sistemas Computacionales">Ingenier&iacute;a en Sistemas Computacionales</option>
      <option value="D&iacute;se&ntilde;o">D&iacute;se&ntilde;o</option>
      <option value="Nutrici&oacute;n">Nutrici&oacute;n</option>
      <option value="Enfermer&iacute;a">Enfermer&iacute;a</option>
      <option value="Contabilidad">Contabilidad</option>
      <option value="Gastronom&iacute;a">Gastronom&iacute;a</option>
      <option value="Teolog&iacute;a">Teolog&iacute;a</option>
      <option value="Ciencias de la educaci&oacute;n">Ciencias de la educaci&oacute;n</option>
      <option value="Maestr&iacute;a">Maestr&iacute;a</option>
      <option value="K&iacute;nder">K&iacute;nder</option>
      <option value="Primaria">Primaria</option>
      <option value="Secundaria">Secundaria</option>
      <option value="Preparatoria">Preparatoria</option>
    </select></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Selecciona el paquete a contratar:<br></td>
    <td width="17%"><select name="paquete">
    <option selected>Seleciona una Opcion...</option>
      <option value="PAQUETEA">Paquete A</option>
      <option value="PAQUETEB">Paquete B</option>
      <option value="PAQUETEC">Paquete C</option>
    </select></td>
    <td width="28%">Paq. A: Completo<br />
Paq. B: Comidas y evento<br />
Paq. C: Solo Evento</td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Obeservaciones</td>
    <td colspan="2"><textarea name="observaciones" rows="2" cols="40" id="observaciones">
        </textarea></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"> <fieldset>
    <legend>Seleccione su entidad federativa</legend>
    
<label>Estado:</label>
        <select name="estado" id="estado">
                <option value="">- Seleccione un Estado -</option>
        <?php
        $estados = dameEstado();
 
        foreach($estados as $indice => $registro){
            echo "<option value=".$registro['idestados'].">".$registro['estado']."</option>";
        }
        ?>
    </select>
    <br><br>
    <label>Municipio:</label>
        <select name="municipio" id="municipio">
                <option value="">- primero seleccion un estado -</option>
    </select>
    <br><br>
    <label>Localidad:</label>
        <select name="localidad" id="localidad">
                <option value="">- primero seleccione un municipio -</option>
    </select>
    </fieldset></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type=submit value="Guardar" /></td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</FORM>
<?php


include($nivel_dir.'template/bottom.php');

?>

