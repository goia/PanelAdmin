<?php
    @ob_start();
    session_start();
	include "../assets/ConfigBD/common.php";
	// Vemos si nos estamos logeando y si es así comprobamos si existe el usuario en la base de datos
    /*echo $_POST['user']."<br/>";
    echo $_POST['password']."<br/>";
    echo md5($_POST['password']);
*/
	if (isset($_POST['user'])){
		if (!login($_POST['user'],$_POST['password'])){
			header ("Location: ./index.php?error=1"); 
		}
         
	
	}
    header ("Location: ../index.php");	

       
    
    
?>


