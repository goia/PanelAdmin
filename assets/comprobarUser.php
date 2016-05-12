<?php
    if (isset($_POST['user'])){
		if (!login($_POST['user'],$_POST['password'])){
			header ("Location: ./login.php?error=1"); 
		}
	}
    ?>