<?php

//Conexion con la base de datos.
$conexion=@mysqli_connect("localhost","root","");

if (!($conexion)){
echo 'No se puede realizar la conexion con la base de datos.';
}

//Seleccion de la base de datos.
mysqli_select_db("tienda");

//declaramos como variables a los campos de texto del formulario.
$usuario=$_POST["usuario"];
$clabe=$_POST["clave"];

//Consulta del usuario y el password
$query="SELECT idnombre, nombre, apellidos, edad, numeroDeTelefono FROM usuario WHERE nombre='$usuario' and edad ='$clabe' ";
$rs=mysqli_query($query);
$row=mysqli_fetch_object($rs);
$nr = mysqli_num_rows($rs);

//Si existe el usuario lo va a redireccionar a la pagina de Bienvenida.

if($nr == 1){
 header ("Location:error.html");

}

//Si no existe lo va a enviar al login otra vez.
else if($nr <= 0) {
  header("Location:index.php");
}
?>
