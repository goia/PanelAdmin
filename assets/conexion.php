<h1>HOLA</h1>
<?Php
    require "ConfigBD/common.php" ;
//CREAR BASE DE DATOS
$sql = "CREATE DATABASE IF NOT EXISTS PanelAdmin";
//CREAR  TABLA USUARIOS
$sqlI="CREATE TABLE `PanelAdmin`.`usuarios` ( `id_usuarios` INT NOT NULL AUTO_INCREMENT , `login` VARCHAR(45) NOT NULL , `nombre` VARCHAR(45) NOT NULL , `pass` VARCHAR(45) NOT NULL , `ultimo_acceso` TIMESTAMP NOT NULL , PRIMARY KEY (`id_usuarios`) ) ENGINE = InnoDB;)";

    $result = $db->query($sql);
$res=$db->query($sqlI);

/*
// Uso sin mysql_list_dbs()
$enlace = mysql_connect('localhost', 'root', 'root');
$resultado = mysql_query("SHOW DATABASES");

while ($fila = mysql_fetch_assoc($resultado)) {
    echo $fila['Database'] . "\n<br/";
}

// Obsoleto a partir de PHP 5.4.0
$enlace = mysql_connect('localhost', 'root', 'root');
$lista_bd = mysql_list_dbs($enlace);

while ($fila = mysql_fetch_object($lista_bd)) {
     echo $fila->Database . "\n<br/>";
}*/

?>