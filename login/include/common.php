<?php

    error_reporting(E_ALL & ~E_NOTICE);
    require "configure.php";
    require "mysql5.class.php";
    global $db;
    $db = new MySQL5();
    $db->set($db_host, $db_user, $db_pwd, $db_name);

?>

