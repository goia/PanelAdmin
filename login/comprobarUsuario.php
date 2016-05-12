<?php
    @ob_start();
    session_start();
		require "../assets/ConfigBD/common.php";
 
	$pass = $_POST['password'];
	$login = $_POST['nombre'];


   
              /* //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// */
	// ENCRIPTAMOS LA CLAVE
	   $pass = md5($login);
            //GUARDO DATOS PERSONALES 

	 	$sql = "SELECT * from usuarios where pass='".$pass."' and login ='".$login."'";

    $result = $db->query($sql);
    $num_rows = $db->num_rows($result);
    $total_num_rows = $result->num_rows;
    $numero= mysqli_num_rows($result);
echo $sql;

    if ($num_rows !=0)
    {
                // ACTUALIZAMOS EL ULTIMO ACCESO
        $row_login = $db->fetch_array($result);
        $sql_update = "UPDATE usuarios SET ultimo_acceso=now() WHERE login='".$login."' ";
        $result_update = $db->query($sql_update);
        $row_login = $db->fetch_array($result);


        //session_register("autentificado");
        //$_SESSION['autentificado']= "SI";
        
        $_SESSION['ses_nome']= $login;

        header("Location: ../administracion/index.php");
        //die();
    }
    else
    {        
        header("Location: index.php?sdfe");
        //die();
    }	
?>