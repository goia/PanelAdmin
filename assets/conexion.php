<h1>HOLA</h1>
<?Php
    require "ConfigBD/common.php" ;
//CREAR BASE DE DATOS
$sql = "CREATE DATABASE IF NOT EXISTS PanelAdmin";

		/*$sql = "CREATE TABLE IF NOT EXISTS (`PanelAdmin`.`Users` ( `id` INT NOT NULL AUTO_INCREMENT , `nombre` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `apellidos` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `password` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `ultimo_acceso` TIMESTAMP NOT NULL, PRIMARY KEY `id` ) ENGINE = InnoDB;);";*/
$sqlI="CREATE TABLE `PanelAdmin`.`users` ( `id` INT NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`) ) ENGINE = InnoDB;";
//$sql = "CREATE TABLE IF NOT EXISTS ( `PanelAdmin`.`users` ( `id` INT NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`) ) ENGINE = InnoDB;);";

    $result = $db->query($sql);
$res=$db->query($sqlI);


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
}

?>