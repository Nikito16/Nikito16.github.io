<?php
class Database{
public static function connect(){
$conexion=new mysqli("localhost","root","","disenosoft");
//Permite que la BD venga codificada en UTF8
$conexion->query("SET NAMES 'utf8'"); return $conexion;
}
}
?>
