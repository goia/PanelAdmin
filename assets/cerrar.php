<?php
@session_start();
session_destroy();
header("Location: ../../PanelAdmin/ajax/login1/index.php");
?>
