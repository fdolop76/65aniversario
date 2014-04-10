
<?PHP 

//obtener configuracion de la base de datos
$nivel_dir="../";
include ($nivel_dir.'includes/config.php');
//variables necesarias
echo $_GET["id_insc"];
echo $_GET["asistencia"];

	echo $query = "insert into `registro`.`persona`  values('', '".$_POST["nombre"]."', '".$_POST["a_paterno"]."', '".$_POST["a_materno"]."', '".$_POST["domicilio"]."', '".$_POST["cp"]."', '".$_POST["tel_casa"]."', '".$_POST["tel_celular"]."','".$_POST["correo"]."','".$_POST["sexo"]."','".$_POST["edad"]."','xxxxx','".$_POST["ciudad"]."','".$_POST["municipio"]."','A','".$_POST["f_nac"]."','".$_POST["escuela"]."','".$_POST["carrera"]."','".$_POST["observaciones"]."')";
		$result = mysql_query($query) or die(mysql_error());
		$row1 = mysql_fetch_array($result);
		//header("Location: portal_65.php");
		
		
		
?>
