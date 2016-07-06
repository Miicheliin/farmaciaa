
<?php 

// $conexion=mysql_connect('localhost','root','') or die('No hay conexión a la base de datos');
// $db=mysql_select_db('s.s.de_accidentes',$conexion)or die('No existe la base de datos.');
// @mysql_query("SET NAMES 'utf8'"); 

$conexion = mysqli_connect("localhost","root","","farmaco-1") or die("Error no e pudo conectar" . mysqli_error($conexion));
$conexion ->query("SET NAMES 'utf8'");


$a=$_POST['folio'];
$b=$_POST['medicamento2'];
$c=$_POST['cantidad_medicamento2'];
$d=$_POST['medicamento3'];
$e=$_POST['cantidad_medicamento3'];
$res=mysqli_query($conexion,"INSERT INTO receta (folio,medicamento2,cantidad_medicamento2,medicamento3,cantidad_medicamento3) 
VALUES ('".$a."','".$b."','".$c."','".$d."','".$e."')");




$b1=$_POST['nombre_comercialcol'];
$c1=$_POST['clave_sustancia'];

$res1=mysqli_query($conexion,"INSERT INTO nombre_comercial (idnombre_comercial,nombre_comercialcol, clave_sustancia) 
VALUES ('".$a."','".$b1."','".$c1."')");



$j=$_POST['descripcion'];
$res2=mysqli_query($conexion,"INSERT INTO forma_farmaceutica(idforma_farmaceutica,descripcion) 
VALUES ('".$a."','".$j."')");



// $fecha_actual = date("d-m-y");


if ($res){
	echo 'Correcto';

}else{
    echo 'Error';

} 


?>