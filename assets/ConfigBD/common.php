<?php

    //error_reporting(E_ALL & ~E_NOTICE);
    require "configure.php";
    require "mysql.php";
    global $db;
    $db = new MySQL5();
    $db->set($db_host, $db_user, $db_pwd, $db_name);
    
    function login($name, $pwd){
	global $db;
	$sql = "select * from usuarios where login='" . $name . "' and pass = '" . md5($pwd) . "'";
    
	$result = $db->query($sql);
	$num_rows = $db->num_rows($result);
    
	if ($num_rows != 1) return false;
    
	$row_login = $db->fetch_array($result);
    
    $_SESSION['ses_id_usuario']	= $row_login['id_usuarios'];
	$_SESSION['ses_nombre']		= $row_login['nombre'];
	$_SESSION['ses_login']		= $row_login['login'];
	$_SESSION['ses_ultimo_acceso'] 	= $row_login['ultimo_acceso'];
    $_SESSION['tipo'] 	= $row_login['tipo'];

	// ACTUALIZAMOS EL ULTIMO ACCESO
	$sql_update = "UPDATE usuarios SET ultimo_acceso=now() WHERE id_usuarios=".$row_login['id_usuarios']."";
	$result_update = $db->query($sql_update);
    return true;
}


function isValidUser(){
	if (isset($_SESSION['ses_id_usuario'])){
		return true;
	}else{
		return false;
	}	
}



function isAdmin(){
	if ($_SESSION['tipo']==1){
		return true;	
	}else{
		return false;
	}
}

function Cofis(){
	if ($_SESSION['tipo']==2){
		return true;	
	}else{
		return false;
	}
}


function logout(){
	unset ($_SESSION['ses_usuario']);
	unset ($_SESSION['ses_nombre']);
	unset ($_SESSION['ses_login']);
	unset ($_SESSION['ses_ultimo_acceso']);
	session_destroy();
}



?>


