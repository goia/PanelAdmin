<?php 
include ('../conexion/db_conection.php');  

//Sentencia SQL para buscar un usuario con esos datos  
$ssql = "SELECT * FROM users WHERE usuario='$usuario' and clave_usuario='$contrasena'";  

//Ejecuto la sentencia  
$rs = mysql_query($ssql,$conexion);  

//vemos si el usuario y contraseña es válido  
//si la ejecución de la sentencia SQL nos da algún resultado  
//es que si que existe esa conbinación usuario/contraseña  
if (mysql_num_rows($rs)!=0){  
    //usuario y contraseña válidos  
    //defino una sesion y guardo datos  
    session_start();  
    session_register("autentificado");  
    $autentificado = "SI";  
    header ("Location: ../Administracion/admin.php");  
}else {  
    //si no existe le mando otra vez a la portada  
    header("Location: ../login.php?errorusuario=si");  
}  
mysql_free_result($rs);  
mysql_close($conexion); 
?>