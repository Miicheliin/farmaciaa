
<?php 

// $conexion=mysql_connect('localhost','root','') or die('No hay conexión a la base de datos');
// $db=mysql_select_db('s.s.de_accidentes',$conexion)or die('No existe la base de datos.');
// @mysql_query("SET NAMES 'utf8'"); 

$conexion = mysqli_connect("localhost","root","","farmaco-1") or die("Error " . mysqli_error($conexion));
$conexion ->query("SET NAMES 'utf8'");

$i=$_POST['i'];
$i1=$_POST['i1'];
$i2=$_POST['i2'];


$res=mysqli_query($conexion,"DELETE from receta  where folio='$i'");


$res1=mysqli_query($conexion,"DELETE from  forma_farmaceutica  where idforma_farmaceutica='$i1'");



$res2=mysqli_query($conexion,"DELETE from nombre_comercial   where idnombre_comercial='$i2'"); 









// $fecha = date("d-m-y");
// $res4=mysqli_query($conexion,"INSERT INTO informe(Paciente_idPaciente,Responsable_idResponsable, Tipo_prueba_idTipo_prueba,Fecha) 
// VALUES ('".$id1."','".$id2."','".$id3."','".$fecha."')");

// $fecha_actual = date("d-m-y");


if ($res){
	// echo '<script>alert("El registro fue eliminado exitosamente")</script>';
echo "
<script language='JavaScript'>
var prueba = 'Sus datos fueron guardados correctamente';
alert(prueba);
location.href = \"http:////localhost/laboratorio/eliminar.php\"   
</script>";
}else{
    echo 'no se puedo insertar';

} 


?>