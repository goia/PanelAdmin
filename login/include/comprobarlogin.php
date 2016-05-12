<?php
	require "../../include/common.php";


    $valid   = true;
    $message = '';

	$login = $_POST['login'];
	
	$sql = "SELECT * FROM usuarios  Where 1=1";

    $result = $db->query($sql);

if ($login = $users)) {
    $valid   = false;
    $message = 'El login ya esta en uso';
} else {
            $valid   = true;
            $message = 'El login esta libre';
            break;
        }
    }
}

echo json_encode(
    $valid ? array('valid' => $valid) : array('valid' => $valid, 'message' => $message)
);

?>	
	

