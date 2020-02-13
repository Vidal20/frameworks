<?php
require 'conexion.php';
session_start();

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$q = "SELECT COUNT(*)as contar from login where usuario = '$usuario ' and clave ='$clave ' ";
$consulta = mysqli_query($conexion, $q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0 && $usuario=='administrador'){
    $_SESSION['username'] = $usuario;
    header("location:../administrador.php");
}else if($array['contar']>0 && $usuario=='comprador'){
    $_SESSION['username'] = $usuario;
    header("location:../usuario.php");
}else{
    echo '<script language="javascript">alert("juas");window.location.href="../index.php";this.close();</script>';
}

?>


