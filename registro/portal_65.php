<!DOCTYPE HTML>
<html>
<body>

<center><bold>Bienvenido por favor llena el siguiente formulario de inscripción al evento</bold></center>

<FORM id="Portal_65" ACTION="inserta.php" METHOD="POST" >


<br><label for="nombre">Nombre: </label><br>
<input value="" type="text" size="35" name="nombre" title="Introduce un nombre"required>
<br><label for="a_paterno">Apellido paterno: </label><br>
<input value="" type="text" size="35" name="a_paterno" title="Introduce un apellido paterno"required>
<br><label for="a_materno">Apellido materno: </label><br>
<input value="" type="text" size="35" name="a_materno" title="Introduce un apellido materno"required>

<br><label>Tel&eacute;fono de casa:</label><br>
<input type="tel"  name="tel_casa">

<br><label>Tel&eacute;fono de oficina:</label><br>
<input type="tel"  name="tel_oficina">
<br><label>Tel&eacute;fono de celular:</label><br>
<input type="tel"  name="tel_celular">

<br><label for="user-email">Correo electronico: </label><br>
<input type="email" name="correo" id="user-email" required/><br>

<p>Domicilio completo (Calle, N&uacute;mero, Colonia, Ciudad, Estado, C.P.)<br />
<TEXTAREA NAME="domicilio" ROWS="2" COLS="70">
</TEXTAREA>
</p>
<p><br>
  Fecha de nacimiento (aaaa-mm-dd).<br>
   <input value="" type="DATE" size="10" name="f_nac">
  <br>
  
  
  <br>
  Sexo:<br>
  
  <input type=radio name=SEXO value=masculino >
  masculino<br>
  
  <input type=radio name=SEXO value=femenino>
  femenino<br>
  
  <br>
  Escuela:<br>
  
  <input type=radio name=escuela value=agricola >
  Escuela Agr&iacute;cola e Industrial del pac&amp;iacute;fico. <br>
  
  <input type=radio name=escuela value=colpac>
  Colegio del Pac&iacute;fico <br>
  
  <input type=radio name=escuela value=umcolpac>
  Universidad de Montemorelos campus colegio del pac&iacute;fico. <br>
  <input type=radio name=escuela value=unav> 
  Universidad de Navojoa.
  <br>
  <br>
  <p>Estudié en esta institución:</p>
  
  <select name="carrera"> 
    <option value="ISC">Ingenier&iacute;a en Sistemas Computacionales</option> 
    <option value="DG">D&iacute;seño</option> 
    <option value="NUT">Nutrici&oacute;n</option> 
    <option value="ENF">Enfermer&iacute;a</option>
    <option value="CON">Contabilidad</option> 
    <option value="GAS">Gastronom&iacute;a</option> 
    <option value="TEO">Teolog&iacute;a</option> 
    <option value="CE">Ciencias de la educaci&oacute;n</option>
    <option value="MAE">Maestr&iacute;a</option>
    <option value="KIN">K&iacute;nder</option> 
    <option value="PRI">Primaria</option>
    <option value="SEC">Secundaria</option>
    <option value="PREP">Preparatoria</option>
  </select> 
  </p>
<br>
<br>
<br>
 Selecciona el paquete a contratar:<br>
(Paq. A: Completo, Paq. B: Comidas y evento, Paq. C: Solo Evento).<br>
  <select name="paquete"> 
    <option value="PAQUETEA">Paquete A</option> 
    <option value="PAQUETEB">Paquete B</option> 
    <option value="PAQUETEC">Paquete C</option> 

   
  </select>
<br>
  
  
  <br>
  <input type=submit value="Guardar">
  <br>
  </p>
</p>
</FORM>

</body>
</html>