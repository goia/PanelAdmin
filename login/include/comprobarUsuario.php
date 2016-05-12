<?php
    @ob_start();
    session_start();
			require "../../assets/ConfigBD/common.php";
 
	echo $pass = $_POST['password'];
	echo $login = $_POST['nombre'];


              /* //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// */
	// ENCRIPTAMOS LA CLAVE
	   $pass2 = md5($pass);
            //GUARDO DATOS PERSONALES 

	 	$sql = "SELECT * from usuarios where password='".$pass2."' and login ='".$login."'";

    $result = $db->query($sql);
    $num_rows = $db->num_rows($result);
    $total_num_rows = $result->num_rows;
    $numero= mysqli_num_rows($result);


    if ($num_rows !=0)
    {
                // ACTUALIZAMOS EL ULTIMO ACCESO
        $row_login = $db->fetch_array($result);
        $sql_update = "UPDATE usuarios SET ultimaconexion=now() WHERE login='".$login."' ";
        $result_update = $db->query($sql_update);
        $row_login = $db->fetch_array($result);

        
        $_SESSION['ses_nome']= $login;

        header("Location: ../../private/index.php");
    }
    else
    {        
        header("Location: ../index.php?errorusuario=ERRPPPasdasdRRRROR");
    }	
?><h1>jkhukj</h1>