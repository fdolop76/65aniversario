<?php $nivel_dir="../"; 
$tit="Contactos";

//titulo de pagina
$pagetit="Administrador de contactos";


//obtener configuracion de la base de datos

require ($nivel_dir.'includes/config.php');
//require ($nivel_dir.'includes/existeconexion.php');
//variables necesarias

//incluir toda la parte de ariba del template 
include($nivel_dir.'template/top.php'); ?>
<br />
 
<!-- Seccion del formulario ------  hidden inline form -->


<!-- basic fancybox setup -->
 
 <script type="text/javascript" language="javascript">
	$(document).ready(function() {
		//$(".modalbox").fancybox();
		//$("#form").submit(function() { return false; });
		
		
		$(".modalbox").fancybox({
		'autoScale'			: false,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'width'				: 480,
		'height'			: 300,
		'type'				: 'iframe',
		'scrolling'         : 'no',
		'afterClose'          : function() { parent.location.reload(true); }
	});
});
   </script>


<!-- Fin del bloque de formulario   -->
<?PHP
if(isset($_POST["submit"]))
{$cod="and inscripcion.Codigo=".$_POST["codigo"].""; 
} else {}

	 
//mandar query con la seleccion

$query = "SELECT  persona.id_persona as id, persona.nombre as nombre, persona.a_paterno as paterno, persona.a_materno as materno, paquete.nombre as paquete, paquete.descripcion as des_paq, paquete.id_paquete, evento.nombre as evento, evento.descripcion as ev_desc, empresa.nom_empresa, inscripcion.codigo, inscripcion.asistencia
 FROM registro.persona, registro.inscripcion, registro.paquete, registro.evento, registro.empresa
where inscripcion.id_persona=persona.id_persona and inscripcion.id_paquete=paquete.id_paquete and inscripcion.id_evento=evento.id_evento and inscripcion.id_empresa=empresa.id_empresa $cod;
;";

$result = mysql_query($query) or die(mysql_error());

//Contar el numero de filas.
$count = mysql_num_rows($result);
?>
<form method="post" name="busca" id="busca" action="">
  <table>
	  <tr>
	    <td width="263"><div>Codigo
	        <input name='codigo'  type='text' maxlength='20' id="codigo" value="<?php echo $_POST["codigo"]; ?>"></div></td>
	    <td width="6">&nbsp;</td>
	    <td width="121"><input name='submit' type='submit' value='Buscar' /></td>
    </tr>
	  
  </table>
</form>
<?php


//Table header
echo "<table class=\"list\">\n";
echo "<tr class=\"table-header\">\n";
echo "<th class=\"\">Codigo</th>\n";
echo "<th class=\"\">Nombre</th>\n";
echo "<th class=\"\">A. Paterno</th>\n";
echo "<th class=\"\">M. Materno</th>\n";
echo "<th class=\"\">Nombre Paquete</th>\n";
echo "<th class=\"\">Descripcion Paquete</th>\n";
echo "<th class=\"\">Nombre Evento</th>\n";
echo "<th class=\"\">Descripcion evento</th>\n";
echo "<th class=\"\">Nombre Empresa</th>\n";
echo "<th class=\"\">Asistencia</th>\n";
echo "<th class=\"action\"></th>";
echo "<th class=\"action\"></th>";
echo "<th class=\"action\"></th>";
echo "</tr>";
if ($count !== 0) {
while($row = mysql_fetch_array($result)) {
$id=$row['id'];
$nombre=htmlentities($row['nombre']);
$paterno=htmlentities($row['paterno']);
$materno=htmlentities($row['materno']);
$paquete=htmlentities($row['paquete']);
$evento=htmlentities($row['evento']);
$des_paq=htmlentities($row['des_paq']);
$ev_desc=htmlentities($row['ev_desc']);
$nom_empresa=htmlentities($row['nom_empresa']);
$codigo=htmlentities($row['codigo']);
$asistencia=htmlentities($row['asistencia']);
				echo "<tr>";
				echo "	<td class=\"\"><a class=\"cell-link\" href=\"#\">". $codigo ."</a></td>";
				echo "	<td class=\"\"><a class=\"cell-link\" href=\"#\">". $nombre."</a></td>";
				echo "	<td class=\"\"><a class=\"cell-link\" href=\"#\">". $paterno."</a></td>";
				echo "	<td class=\"\"><a class=\"cell-link\" href=\"#\">". $materno."</a></td>";	
				echo "	<td class=\"\"><a class=\"cell-link\" href=\"#\">". $paquete."</a></td>";
				echo "	<td class=\"\"><a class=\"cell-link\" href=\"#\">". $des_paq."</a></td>";
				echo "	<td class=\"\"><a class=\"cell-link\" href=\"#\">". $evento."</a></td>";
				echo "	<td class=\"\"><a class=\"cell-link\" href=\"#\">". $ev_desc."</a></td>";
				echo "	<td class=\"\"><a class=\"cell-link\" href=\"#\">". $nom_empresa."</a></td>";
				echo "	<td class=\"\"><a class=\"cell-link\" href=\"#\">". $asistencia."</a></td>";

				//echo "	<input type=\"image\" src=\"images/update.png\" alt=\"Update Row\" class=\"update\" title=\"Update Row\">\n";
				echo "<td class=\"action\"><a  class=\"modalbox small-button modal\" href=\"inserta.php?id_insc=".$id."&asistencia=".$asistencia."\"><span>Asist</span></a></td>";
				echo "<td class=\"action\"><a class=\"modalbox small-button danger modal\" href=\"inserta.php.php?pagado=".$id."\"><span>pagado</span></a></td>";
				echo "<td class=\"action\"><a class=\"modalbox small-button  modal\" href=\"inserta.php.php?otro=ok\"><span>Agregar Medio</span></a></td></tr>";
			}
		echo "</table><br />\n";
	} else {
		echo "<b><center>NO DATA</center></b>\n";
	}
include($nivel_dir.'template/bottom.php');

?>

