<? 
//Reanudamos la sesión 
session_start(); 
//Literalmente la destruimos 
session_destroy(); 
//Redireccionamos a index.php (al inicio de sesión) 
header("Location: ../ajax/login1/index.php"); 
exit;
?>
<h1>sesion cerrado</h1>