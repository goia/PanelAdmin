<?php
	require "./include/common.php";
	

	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$email = $_POST['email'];
    $genero= $_POST['genero'];
    $categoria= $_POST['categoria'];
	$login = $_POST['login'];
	$password = $_POST['password'];
	$repetir_clave = $_POST['repetir_clave_socio'];
	
	
	// ENCRIPTAMOS LA CLAVE
	
	$clave = md5($password);
	
	// GUARDAMOS EL CLIENTE
    $result = $db->query("SELECT COUNT(*) AS count FROM usuarios  Where 1=1");

    $row = mysqli_fetch_array($result,MYSQL_ASSOC);

    $id = ($row['count']+1);



	$sql = "INSERT INTO usuarios(id,login,nombre,apellidos,categoria,password,mail,genero,) VALUES ('".$id."','".$login."','".$nombre."','".$apellidos."','".$categoria."','".$password."','".$mail."','".$genero."')";

	$db->query($sql);
	$id = $db->insert_id();	
	

	header ("Location: ./index.php");   
	die;
?>	
	
	