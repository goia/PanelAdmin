<?php
    @ob_start();
    session_start();
	include "./assets/ConfigBD/common.php";
	// Vemos si nos estamos logeando y si es así comprobamos si existe el usuario en la base de datos
    /*echo $_POST['user']."<br/>";
    echo $_POST['password']."<br/>";
    echo md5($_POST['password']);
*/
if (!isValidUser()){
		header ("Location: ajax/login1/index.php?necesitas loguearte");
	}

	if (isset($_POST['user'])){
		if (!login($_POST['user'],$_POST['password'])){
			header ("Location: ./ajax/page_login.php?error=1"); 
		}
	}
?>

<!DOCTYPE html>
<html lang="es">
<?Php require("./assets/head.php")?>
<body>
<!--Start Header-->
<div id="screensaver">
	<canvas id="canvas"></canvas>
	<i class="fa fa-lock" id="screen_unlock"></i>
</div>
<div id="modalbox">
	<div class="devoops-modal">
		<div class="devoops-modal-header">
			<div class="modal-header-name">
				<span>Tabla Básica</span>
			</div>
			<div class="box-icons">
				<a class="close-link">
					<i class="fa fa-times"></i>
				</a>
			</div>
		</div>
		<div class="devoops-modal-inner">
		</div>
		<div class="devoops-modal-bottom">
		</div>
	</div>
</div>
<!--HEADER-->
<?php  require('./assets/header.php')?>
<!--End Header-->
<!--Start Container-->
<div id="main" class="container-fluid">
	<div class="row">
        <!----MENU IZQUIERDA-->
        <?Php require ('./assets/menuIzquierda.php');?>
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
			<div id="about">
				<div class="about-inner">
					<h4 class="page-header">Informacion Util</h4>
					<p>
					    <?php
                              echo $_SESSION['ses_id_usuario']."<br/>"	;
	                           echo $_SESSION['ses_nombre']	."<br/>";
                                echo $_SESSION['ses_login']."<br/>"	;
                               echo $_SESSION['ses_ultimo_acceso']."<br/>"	;
                        ?>
					</p>
					<p>OoO</p>
					<p>Homepage - <a href="#" target="_blank">http://</a></p>
					<p>Email - <a href="mailto:OoO@gmail.com">OoO@gmail.com</a></p>
					<p>Twitter - <a href="http://twitter.com/#" target="_blank">http://twitter.com/</a></p>
					<p>Tlf: 000 000 000 </p>
				</div>
			</div>
			<div class="preloader">
				<img src="img/devoops_getdata.gif" class="devoops-getdata" alt="preloader"/>
			</div>
			<div id="ajax-content"></div>
		</div>
		<!--End Content-->
	</div>
</div>
<!--End Container-->
<!--Scripts-->
<?Php require("./assets/scripts.php")?>
<!--Fin Scripts-->
</body>
</html>
