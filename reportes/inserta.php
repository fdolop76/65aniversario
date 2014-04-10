
<?PHP 

//obtener configuracion de la base de datos
$nivel_dir="../";
include ($nivel_dir.'includes/config.php');
//variables necesarias
echo $_GET["id_insc"];
echo $_GET["asistencia"];

if ($_GET["id_insc"])
	{
	  if ($_GET["asistencia"]==S)
	  $asis="N";
	  if ($_GET["asistencia"]==N)
	$asis="S";
		
		echo $query = "UPDATE `registro`.`inscripcion` SET `asistencia`='$asis' WHERE `inscripcion`.`id_persona`='".$_GET["id_insc"]."' ";
		$result = mysql_query($query) or die(mysql_error());
		$row1 = mysql_fetch_array($result);
		$id_esc=$row['id_medio'];
			header("Location: inscritos.php");
	
	}
	
	if ($_POST["del"])
		{
			$query = "DELETE  from `ejemplo`.`medio` WHERE `medio`.`id_medio`='".$_POST["del"]."' ";
		$result = mysql_query($query) or die(mysql_error());
		$row1 = mysql_fetch_array($result);
		header("Location: medio.php");
		
		}
		
		if ($_POST["insert"])
		{
			$query = "insert into `ejemplo`.`medio`  values('', '".$_POST["Nombre"]."', '".$_POST["estatus"]."', '".$_POST["Comentario"]."')";
		$result = mysql_query($query) or die(mysql_error());
		$row1 = mysql_fetch_array($result);
		header("Location: 	medio.php");
		
		}
		
		
		
		
?>
